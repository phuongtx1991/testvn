<?php /* Smarty version 2.6.27, created on 2017-11-08 11:27:20
         compiled from /var/www/testvn.hyperion-job.jp/html/../data/Smarty/templates/default/frontparts/bloc/recommend.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', '/var/www/testvn.hyperion-job.jp/html/../data/Smarty/templates/default/frontparts/bloc/recommend.tpl', 24, false),array('modifier', 'u', '/var/www/testvn.hyperion-job.jp/html/../data/Smarty/templates/default/frontparts/bloc/recommend.tpl', 32, false),array('modifier', 'sfNoImageMainList', '/var/www/testvn.hyperion-job.jp/html/../data/Smarty/templates/default/frontparts/bloc/recommend.tpl', 33, false),array('modifier', 'h', '/var/www/testvn.hyperion-job.jp/html/../data/Smarty/templates/default/frontparts/bloc/recommend.tpl', 33, false),array('modifier', 'n2s', '/var/www/testvn.hyperion-job.jp/html/../data/Smarty/templates/default/frontparts/bloc/recommend.tpl', 41, false),array('modifier', 'nl2br', '/var/www/testvn.hyperion-job.jp/html/../data/Smarty/templates/default/frontparts/bloc/recommend.tpl', 43, false),)), $this); ?>

<?php echo ''; ?><?php if (count ( ((is_array($_tmp=$this->_tpl_vars['arrBestProducts'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) > 0): ?><?php echo '<div class="block_outer clearfix"><div id="recommend_area"><h2><img src="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo 'img/title/tit_bloc_recommend.png" alt="*" class="title_icon" /></h2><div class="block_body clearfix">'; ?><?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrBestProducts'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['recommend_products'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['recommend_products']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['arrProduct']):
        $this->_foreach['recommend_products']['iteration']++;
?><?php echo '<div class="product_item clearfix"><div class="productImage"><a href="'; ?><?php echo ((is_array($_tmp=@P_DETAIL_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo ''; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('u', true, $_tmp) : smarty_modifier_u($_tmp)); ?><?php echo '"><img src="'; ?><?php echo ((is_array($_tmp=@IMAGE_SAVE_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo ''; ?><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['main_list_image'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfNoImageMainList', true, $_tmp) : SC_Utils_Ex::sfNoImageMainList($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo '" style="max-width: 80px;max-height: 80px;" alt="'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo '" /></a></div><div class="productContents"><h3><a href="'; ?><?php echo ((is_array($_tmp=@P_DETAIL_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo ''; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('u', true, $_tmp) : smarty_modifier_u($_tmp)); ?><?php echo '">'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo '</a></h3><p class="sale_price">'; ?><?php echo ((is_array($_tmp=@SALE_PRICE_TITLE)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo '(税込)： <span class="price">'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['price02_min_inctax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('n2s', true, $_tmp) : smarty_modifier_n2s($_tmp)); ?><?php echo ' 円</span></p><p class="mini comment">'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['comment_vn'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?><?php echo '</p></div></div>'; ?><?php if (((is_array($_tmp=$this->_foreach['recommend_products']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) % 2 === 0): ?><?php echo '<div class="clear"></div>'; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo '</div></div></div>'; ?><?php endif; ?><?php echo ''; ?>
