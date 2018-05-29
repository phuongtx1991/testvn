<!--{*
 * This file is part of EC-CUBE
 *
 * Copyright(c) 2000-2014 LOCKON CO.,LTD. All Rights Reserved.
 *
 * http://www.lockon.co.jp/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *}-->

<script type="text/javascript">//<![CDATA[
    function fnSetClassCategories(form, classcat_id2_selected) {
        var $form = $(form);
        var product_id = $form.find('input[name=product_id]').val();
        var $sele1 = $form.find('select[name=classcategory_id1]');
        var $sele2 = $form.find('select[name=classcategory_id2]');
        eccube.setClassCategories($form, product_id, $sele1, $sele2, classcat_id2_selected);
    }
    // 並び順を変更
    function fnChangeOrderby(orderby) {
        eccube.setValue('orderby', orderby);
        eccube.setValue('pageno', 1);
        eccube.submitForm();
    }
    // 表示件数を変更
    function fnChangeDispNumber(dispNumber) {
        eccube.setValue('disp_number', dispNumber);
        eccube.setValue('pageno', 1);
        eccube.submitForm();
    }
    // カゴに入れる
    function fnInCart(th, mode) {
        var searchForm = $("#form1");
        var cartForm = $(th).closest('form');
        // 検索条件を引き継ぐ
        var hiddenValues = ['mode','prevPage','employment_status','category_id','region','position','city','name','welfare','orderby','disp_number','pageno','rnd'];
        $.each(hiddenValues, function(){
            // 仕事別のフォームに検索条件の値があれば上書き
            if (cartForm.has('input[name='+this+']').length != 0) {
                cartForm.find('input[name='+this+']').val(searchForm.find('input[name='+this+']').val());
            }
            // なければ追加
            else {
                cartForm.append($('<input type="hidden" />').attr("name", this).val(searchForm.find('input[name='+this+']').val()));
            }
        });
        cartForm.find('input[name=mode]').val(mode);
        // 仕事別のフォームを送信
        cartForm.submit();
    }
    
    $(document).ready(function() {
  $("h3 a, .skill").dotdotdot({
            ellipsis  : '...',
            wrap  : 'letter',
            height  : null
  });
    });

    $(window).load(function(){
        if($('.list_area_form').length > 0){
            for (var i = 0; i < $('.list_area_form').length; i += 2) {
                if( $('.list_area_form').eq(i).height() > $('.list_area_form').eq(i+1).height() ){
                    $('.list_area_form .list_area').eq(i+1).height( $('.list_area_form .list_area').eq(i).height() );
                } else {
                    $('.list_area_form .list_area').eq(i).height( $('.list_area_form .list_area').eq(i+1).height() );
                }
            }
        }
    });
//]]></script>

<div id="undercolumn">
    <form name="form1" id="form1" method="get" action="?">
        <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
        <input type="hidden" name="mode" value="<!--{$mode|h}-->" />
        <!-- {* ▼検索条件 *} -->
        <!--{foreach key=key item=item from=$arrSearchData}-->
            <!--{if is_array($item)}-->
                <!--{foreach item=c_item from=$item}-->
                    <input type="hidden" name="<!--{$key|h}-->[]" value="<!--{$c_item|h}-->" />
                <!--{/foreach}-->
            <!--{else}-->
                <input type="hidden" name="<!--{$key|h}-->" value="<!--{$item|h}-->" />
            <!--{/if}-->
        <!--{/foreach}-->
        <!--{* ▲検索条件 *}-->
        <!--{* ▼ページナビ関連 *}-->
        <input type="hidden" name="orderby" value="<!--{$orderby|h}-->" />
        <input type="hidden" name="disp_number" value="<!--{$disp_number|h}-->" />
        <input type="hidden" name="pageno" value="<!--{$tpl_pageno|h}-->" />
        <input type="hidden" name="prevPage" value="<!--{$prevPage|h}-->" />
        <!--{* ▲ページナビ関連 *}-->
        <input type="hidden" name="rnd" value="<!--{$tpl_rnd|h}-->" />
    </form>

    <!--★タイトル★-->
    <h2 class="title"><!--{if $target > 0}-->Việc làm tại&nbsp;<!--{$arrTarget[$target]}--><!--{else}-->Thông tin việc làm<!--{/if}--></h2>

    <!--▼ページナビ(本文)-->
    <!--{capture name=page_navi_body}-->
        <div class="pagenumber_area clearfix">
            <div class="change">
                Sắp xếp theo：
                <!--{if $orderby != 'salary'}-->
                    <a href="javascript:fnChangeOrderby('salary');">Mức lương</a>
                <!--{else}-->
                    <span class="attention">Mức lương</span>
                <!--{/if}-->&nbsp;/&nbsp;
                <!--{if $orderby != "date"}-->
                        <a href="javascript:fnChangeOrderby('date');">Ngày đăng</a>
                <!--{else}-->
                    <span class="attention">Ngày đăng</span>
                <!--{/if}-->&nbsp; &nbsp; &nbsp;
                Hiển thị：
                <select name="disp_number" onchange="javascript:fnChangeDispNumber(this.value);">
                    <!--{foreach from=$arrPRODUCTLISTMAX item="dispnum" key="num"}-->
                        <!--{if $num == $disp_number}-->
                            <option value="<!--{$num}-->" selected="selected" ><!--{$dispnum}--></option>
                        <!--{else}-->
                            <option value="<!--{$num}-->" ><!--{$dispnum}--></option>
                        <!--{/if}-->
                    <!--{/foreach}-->
                </select>
            </div>
            <div class="navi"><!--{$tpl_strnavi}--></div>
        </div>
    <!--{/capture}-->
    <!--▲ページナビ(本文)-->

    <!--{foreach from=$arrProducts item=arrProduct name=arrProducts}-->

        <!--{if $smarty.foreach.arrProducts.first}-->
            <!--▼件数-->
            <div>
                <span class="attention"><!--{$tpl_linemax}--> </span>công việc.
            </div>
            <!--▲件数-->

            <!--▼ページナビ(上部)-->
            <form name="page_navi_top" id="page_navi_top" action="?">
                <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
                <!--{if $tpl_linemax > 0}--><!--{$smarty.capture.page_navi_body|smarty:nodefaults}--><!--{/if}-->
            </form>
            <!--▲ページナビ(上部)-->
        <!--{/if}-->

        <!--{assign var=id value=$arrProduct.product_id}-->
        <!--{assign var=arrErr value=$arrProduct.arrErr}-->
        <!--▼仕事-->
        <form name="product_form<!--{$id|h}-->" action="?" class="list_area_form">
            <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
            <input type="hidden" name="product_id" value="<!--{$id|h}-->" />
            <input type="hidden" name="product_class_id" id="product_class_id<!--{$id|h}-->" value="<!--{$tpl_product_class_id[$id]}-->" />
            <div class="list_area clearfix">
                <a name="product<!--{$id|h}-->"></a>
                <!--★仕事名★-->
                <h3>
                    <a target="_blank" href="<!--{$smarty.const.P_DETAIL_URLPATH}--><!--{$arrProduct.product_id|u}-->"><!--{$arrProduct.name_vn|h}--></a>
                </h3>

                <div class="table">
                    <div class="table_cell">
                        <!--{if count($productStatus[$id]) > 0}-->
                        <!--▼仕事ステータス-->
                            <p class="product_status">
                            <!--{foreach from=$productStatus[$id] item=status}-->
                                <span><!--{$arrSTATUS[$status]}--></span>
                            <!--{/foreach}-->
                            </p>
                        <!--▲仕事ステータス-->
                        <!--{/if}-->
                        <p><b>Loại công việc： </b><!--{$arrEmploymentStatus[$arrProduct.employment_status]|h}--></p>
                        <p><b>Lương：</b><!--{$arrProduct.salary_full|h}--></p>
                        <p><b>Địa điểm làm việc： </b><!--{$arrRegion[$arrProduct.region]}--> <!--{$arrCity[$arrProduct.city]}--> <!--{$arrProduct.work_location_vn}--></p>
                    </div>
                    <div class="table_cell">
                        <div class="listphoto">
                            <a target="_blank" href="<!--{$smarty.const.P_DETAIL_URLPATH}--><!--{$id|u}-->">
                                <img src="<!--{$smarty.const.IMAGE_SAVE_URLPATH}--><!--{$arrProduct.main_large_image|sfNoImageMainList|h}-->" alt="<!--{$arrProduct.name_vn|h}-->" class="picture" /></a>
                        </div>
                    </div>
                </div>
                        
                <p class="skill"><b>Yêu cầu： </b><!--{$arrProduct.skill_vn|h|nl2br}--><br />　<!--{$arrProduct.qualification_vn|h|nl2br}--></p>

                <ul class="list_button">
                    <!--{if in_array($id, $arrCheckedItems)}-->
                    <li><a href="#" onclick="return false;">Bỏ lưu</a></li>
                    <!--{else}-->
                    <li><a href="#" onclick="fnInCart(this, 'cart'); return false;">Lưu công việc</a></li>
                    <!--{/if}-->
                    <li><a target="_blank" href="<!--{$smarty.const.P_DETAIL_URLPATH}--><!--{$id|u}-->">Xem chi tiết</a</li>
                </ul>
            </div>
        </form>
        <!--▲仕事-->

        <!--{if $smarty.foreach.arrProducts.last}-->
            <!--▼ページナビ(下部)-->
            <form name="page_navi_bottom" id="page_navi_bottom" action="?">
                <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
                <!--{if $tpl_linemax > 0}--><!--{$smarty.capture.page_navi_body|smarty:nodefaults}--><!--{/if}-->
            </form>
            <!--▲ページナビ(下部)-->
        <!--{/if}-->

    <!--{foreachelse}-->
        <!--{include file="frontparts/search_zero.tpl"}-->
    <!--{/foreach}-->

</div>
