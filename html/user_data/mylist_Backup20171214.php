<?php

require_once '../require.php';
require_once CLASS_EX_REALDIR . 'page_extends/LC_Page_Ex.php';
require_once PLUGIN_UPLOAD_REALDIR . 'CheckedItems/CheckedItems.php';

/**
 * ユーザーカスタマイズ用のページクラス
 *
 * 管理画面から自動生成される
 *
 * @package Page
 */
class LC_Page_User extends LC_Page_Ex {

    /**
     * Page を初期化する.
     *
     * @return void
     */
    var $product_id;
    
    function init() {
        parent::init();
        $this->tpl_title = 'マイページ';
        $this->tpl_navi = 'mypage/navi.tpl';
        $this->tpl_mainno = 'mypage';

        $masterData = new SC_DB_MasterData_Ex();
        $this->arrSTATUS = $masterData->getMasterData('mtb_status');
        $this->arrSTATUS_IMAGE = $masterData->getMasterData('mtb_status_image');
        $this->arrEmploymentStatus = $masterData->getMasterData('mtb_employment_status');
        $this->arrRegion = $masterData->getMasterData('mtb_region');
        $this->arrCity = $masterData->getMasterData('mtb_city');
    }

    /**
     * Page のプロセス.
     *
     * @return void
     */
    function process() {
        parent::process();
        $this->action();
        $this->sendResponse();
    }

    /**
     * Page のアクション.
     *
     * @return void
     */
    function action() {
        $objQuery = & SC_Query_Ex::getSingletonInstance();
        $objProduct = new SC_Product_Ex();
        $objCustomer = new SC_Customer_Ex();
        $this->tpl_login = $objCustomer->isLoginSuccess(true);

        $this->l = ( isset($_GET['l']) ? $_GET['l'] : $_POST['l'] );
        $this->tpl_mypageno = $this->l;
        $this->tpl_subtitle = $this->tpl_title;
        if($this->l == 'viewed')
            $this->tpl_subtitle = 'Việc làm đã xem';
        else if($this->l == 'keep')
            $this->tpl_subtitle = 'Việc làm của tôi';
        else if($this->l == 'applied')
            $this->tpl_subtitle = 'Việc làm đã ứng tuyển';

        $this->product_id = $_POST['product_id'];
        $this->disp_number = 20;
        if (!isset($_POST['pageno']))
            $_POST['pageno'] = 1;
        $this->pageno = $_POST['pageno'];
        $this->mode = $this->getMode();

        switch ($this->mode) {
            case 'cart':
                CheckedItems::addCookie($this->product_id);
                break;
            case 'delete':
                CheckedItems::delCookie($this->product_id);
                break;
            default:
                break;
        }
        $this->arrCheckedItems = CheckedItems::getItemList();

        $arrAllProductId = array();
        $customOrder = '';
        if ($this->l == 'viewed' && isset($_SESSION['keep_product_list']) && count($_SESSION['keep_product_list']) > 0) {
            foreach ($_SESSION['keep_product_list'] as $key => $pId) {
                if ($pId != '' && $pId > 0) {
                    if ($key == 20)
                        break;
                    $arrAllProductId[] = $pId;
                    $customOrder .= ',' . $pId;
                }
            }
        } else if ($this->l == 'keep') {
            foreach ($this->arrCheckedItems as $name => $value) {
                $arrAllProductId[] = $value;
                $customOrder .= ',' . $value;
            }
        } else if ($this->l == 'applied') {
            $customer_id = $objCustomer->getValue('customer_id');
            $from = 'dtb_order_detail as T1 LEFT JOIN dtb_order as T2 ON T1.order_id = T2.order_id';
            $arrOrderDetail = $objQuery->select('T1.product_id', $from, 'T2.del_flg = 0 AND customer_id = ?', array($customer_id));
            foreach ($arrOrderDetail as $detail) {
                if (!in_array($detail['product_id'], $arrAllProductId)) {
                    $arrAllProductId[] = $detail['product_id'];
                    $customOrder .= ',' . $detail['product_id'];
                }
            }
        }

        $this->arrProduct = array();
        if (count($arrAllProductId) > 0) {
            $this->tpl_linemax = count($arrAllProductId);
            $this->objNavi = new SC_PageNavi_Ex($this->pageno, $this->tpl_linemax, $this->disp_number, 'fnNaviPage', NAVI_PMAX, "pageno=#page#", SC_Display_Ex::detectDevice() !== DEVICE_TYPE_MOBILE);
            $strnavi = $this->objNavi->strnavi;
            $this->tpl_strnavi = empty($strnavi) ? '&nbsp;' : $strnavi;
            $this->before = ($this->objNavi->now_page > 1) ? $this->objNavi->arrPagenavi['before'] : "";
            $this->next = ($this->objNavi->now_page < $this->objNavi->max_page) ? $this->objNavi->arrPagenavi['next'] : "";

            $objQuery->setLimitOffset($this->disp_number, $this->objNavi->start_row);
            $objQuery->setWhere('product_id IN (' . SC_Utils_Ex::sfGetCommaList($arrAllProductId) . ')');
            $objQuery->setOrder('FIELD(product_id' . $customOrder . ')');
            $arrProductId = $objProduct->findProductIdsOrder($objQuery);

            $objQuery = & SC_Query_Ex::getSingletonInstance();
            $objQuery->setOrder('FIELD(alldtl.product_id' . $customOrder . ')');
            $this->arrProducts = $objProduct->getListByProductIds($objQuery, $arrProductId);
            $objProduct->setProductsClassByProductIds($arrProductId);
            $this->productStatus = $objProduct->getProductStatus($arrProductId);
            $this->tpl_product_class_id = $objProduct->product_class_id;
        }
    }

    function lfSetCurrentCart(&$objSiteSess, &$objCartSess, $cartKey) {
        // 正常に登録されたことを記録しておく
        $objSiteSess->setRegistFlag();
        $pre_uniqid = $objSiteSess->getUniqId();
        // 注文一時IDの発行
        $objSiteSess->setUniqId();
        $uniqid = $objSiteSess->getUniqId();
        // エラーリトライなどで既にuniqidが存在する場合は、設定を引き継ぐ
        if ($pre_uniqid != '') {
            $this->lfUpdateOrderTempid($pre_uniqid, $uniqid);
        }
        // カートを購入モードに設定
        $objCartSess->registerKey($cartKey);
        $objCartSess->saveCurrentCart($uniqid, $cartKey);
    }

    function lfUpdateOrderTempid($pre_uniqid, $uniqid) {
        $sqlval['order_temp_id'] = $uniqid;
        $where = 'order_temp_id = ?';
        $objQuery = SC_Query_Ex::getSingletonInstance();
        $res = $objQuery->update('dtb_order_temp', $sqlval, $where, array($pre_uniqid));
        if ($res != 1) {
            return false;
        }
        return true;
    }

}

$objPage = new LC_Page_User();
$objPage->init();
$objPage->process();
