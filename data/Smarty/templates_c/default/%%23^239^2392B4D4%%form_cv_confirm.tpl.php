<?php /* Smarty version 2.6.27, created on 2017-12-29 15:20:46
         compiled from /var/www/testvn.hyperion-job.jp/html/../data/Smarty/templates/default/frontparts/form_cv_confirm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', '/var/www/testvn.hyperion-job.jp/html/../data/Smarty/templates/default/frontparts/form_cv_confirm.tpl', 32, false),array('modifier', 'h', '/var/www/testvn.hyperion-job.jp/html/../data/Smarty/templates/default/frontparts/form_cv_confirm.tpl', 33, false),array('modifier', 'default', '/var/www/testvn.hyperion-job.jp/html/../data/Smarty/templates/default/frontparts/form_cv_confirm.tpl', 170, false),array('modifier', 'nl2br', '/var/www/testvn.hyperion-job.jp/html/../data/Smarty/templates/default/frontparts/form_cv_confirm.tpl', 178, false),)), $this); ?>

<?php echo '<table><col width="30%" /><col width="70%" /><tr><td class="alignC">'; ?><?php $this->assign('key', 'image'); ?><?php echo ''; ?><?php if (((is_array($_tmp=$this->_tpl_vars['arrForm']['arrFile'][$this->_tpl_vars['key']]['filepath'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo '<img src="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm']['arrFile'][$this->_tpl_vars['key']]['filepath'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo '" alt="'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['customer_data']['name01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo ''; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['customer_data']['name02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo '" style="max-width: 150px; max-height: 150px;" />'; ?><?php endif; ?><?php echo '</td><td>Tên của bạn：'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['customer_data']['name01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo '&nbsp;'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['customer_data']['name02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo '<br />Giới tính：'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrSex'][$this->_tpl_vars['customer_data']['sex']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo '<br />Ngày sinh：'; ?><?php if (strlen ( ((is_array($_tmp=$this->_tpl_vars['customer_data']['year'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) > 0 && strlen ( ((is_array($_tmp=$this->_tpl_vars['customer_data']['month'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) > 0 && strlen ( ((is_array($_tmp=$this->_tpl_vars['customer_data']['day'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) > 0): ?><?php echo ''; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['customer_data']['day'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo '/'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['customer_data']['month'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo '/'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['customer_data']['year'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo ''; ?><?php else: ?><?php echo 'Chưa đăng ký'; ?><?php endif; ?><?php echo '<br />Email：'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['customer_data']['email'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo '</td></tr></table><table><col width="30%" /><col width="70%" /><tr><th>Tình trạng hôn nhân</th><td>'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrMaritalStatus'][$this->_tpl_vars['arrForm']['marital_status']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo '</td></tr><tr><th>Nơi ở hiện tại</th><td>'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrTarget'][$this->_tpl_vars['arrForm']['current_address']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo '</td></tr><tr '; ?><?php if (((is_array($_tmp=$this->_tpl_vars['arrForm']['current_address'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != 1): ?><?php echo 'style="display: none"'; ?><?php endif; ?><?php echo '><th>Mã bưu điện</th><td>〒 '; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['zip01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo ' - '; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['zip02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo '</td></tr><tr><th>Tỉnh/Thành phố</th><td>'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrPref'][$this->_tpl_vars['arrForm']['pref']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo '</td></tr><tr><th>Quận/Huyện</th><td>'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['addr01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo '</td></tr><tr><th>Địa chỉ</th><td>'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['addr02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo '</td></tr><tr><th>Bậc học</th><td>'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrEducation'][$this->_tpl_vars['arrForm']['education']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo '</td></tr><tr><th>Tên trường</th><td>'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['school_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo '</td></tr><tr><th>Chuyên ngành</th><td>'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['major'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo '</td></tr><tr><th>Kinh nghiệm làm việc</th><td>'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrWorkExperience'][$this->_tpl_vars['arrForm']['work_experience']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo '</td></tr></table>'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['arrForm']['work_experience'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1): ?><?php echo '<h2>Kinh nghiệm làm việc</h2><table class="list" id="career_list"><tr><th style="width: 20%">Thời gian</th><th style="width: 5%">Số năm</th><th style="width: 22%">Công ty</th><th style="width: 23%">Địa chỉ</th><th style="width: 30%">Nội dung công việc</th></tr>'; ?><?php unset($this->_sections['cnt']);
$this->_sections['cnt']['name'] = 'cnt';
$this->_sections['cnt']['loop'] = is_array($_loop=5) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['cnt']['show'] = true;
$this->_sections['cnt']['max'] = $this->_sections['cnt']['loop'];
$this->_sections['cnt']['step'] = 1;
$this->_sections['cnt']['start'] = $this->_sections['cnt']['step'] > 0 ? 0 : $this->_sections['cnt']['loop']-1;
if ($this->_sections['cnt']['show']) {
    $this->_sections['cnt']['total'] = $this->_sections['cnt']['loop'];
    if ($this->_sections['cnt']['total'] == 0)
        $this->_sections['cnt']['show'] = false;
} else
    $this->_sections['cnt']['total'] = 0;
if ($this->_sections['cnt']['show']):

            for ($this->_sections['cnt']['index'] = $this->_sections['cnt']['start'], $this->_sections['cnt']['iteration'] = 1;
                 $this->_sections['cnt']['iteration'] <= $this->_sections['cnt']['total'];
                 $this->_sections['cnt']['index'] += $this->_sections['cnt']['step'], $this->_sections['cnt']['iteration']++):
$this->_sections['cnt']['rownum'] = $this->_sections['cnt']['iteration'];
$this->_sections['cnt']['index_prev'] = $this->_sections['cnt']['index'] - $this->_sections['cnt']['step'];
$this->_sections['cnt']['index_next'] = $this->_sections['cnt']['index'] + $this->_sections['cnt']['step'];
$this->_sections['cnt']['first']      = ($this->_sections['cnt']['iteration'] == 1);
$this->_sections['cnt']['last']       = ($this->_sections['cnt']['iteration'] == $this->_sections['cnt']['total']);
?><?php echo ''; ?><?php $this->assign('index', ($this->_sections['cnt']['index'])); ?><?php echo ''; ?><?php if (((is_array($_tmp=$this->_tpl_vars['arrForm']['working_company_name'][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ''): ?><?php echo '<tr><td>'; ?><?php if (strlen ( ((is_array($_tmp=$this->_tpl_vars['arrForm']['start_year'][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) > 0 && strlen ( ((is_array($_tmp=$this->_tpl_vars['arrForm']['start_month'][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) > 0): ?><?php echo ''; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['start_month'][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo '/'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['start_year'][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo ''; ?><?php else: ?><?php echo 'Chưa đăng ký'; ?><?php endif; ?><?php echo ' ~'; ?><?php if (strlen ( ((is_array($_tmp=$this->_tpl_vars['arrForm']['end_year'][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) > 0 && strlen ( ((is_array($_tmp=$this->_tpl_vars['arrForm']['end_month'][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) > 0): ?><?php echo ''; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['end_month'][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo '/'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['end_year'][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo ''; ?><?php else: ?><?php echo 'Chưa đăng ký'; ?><?php endif; ?><?php echo '</td><td>'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['working_year'][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo '</td><td>'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['working_company_name'][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo '</td><td>'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['company_addr'][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo '</td><td>'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['job_description'][$this->_tpl_vars['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo '</td></tr>'; ?><?php endif; ?><?php echo ''; ?><?php endfor; endif; ?><?php echo '</table>'; ?><?php endif; ?><?php echo '<table><col width="30%" /><col width="70%" /><tr><th>Công việc mong muốn</th><td>'; ?><?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrForm']['desired_work'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['status']):
?><?php echo ''; ?><?php if (((is_array($_tmp=$this->_tpl_vars['status'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo ''; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['arrCategory'][$this->_tpl_vars['status']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo '<br />'; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo '</td></tr><tr><th>Vị trí mong muốn</th><td>'; ?><?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrForm']['desired_position'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['status']):
?><?php echo ''; ?><?php if (((is_array($_tmp=$this->_tpl_vars['status'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo ''; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['arrPosition'][$this->_tpl_vars['status']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo '<br />'; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo '</td></tr><tr><th>Mức lương hiện tại</th><td>'; ?><?php if (strlen ( ((is_array($_tmp=$this->_tpl_vars['arrForm']['current_salary'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) >= 1): ?><?php echo ''; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['current_salary'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo ' Yên'; ?><?php endif; ?><?php echo '</td></tr><tr><th>Mức lương mong muốn</th><td>'; ?><?php if (strlen ( ((is_array($_tmp=$this->_tpl_vars['arrForm']['desired_salary'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) >= 1): ?><?php echo ''; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['desired_salary'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo ' Yên'; ?><?php endif; ?><?php echo '</td></tr><tr><th>Nơi làm việc mong muốn</th><td>'; ?><?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrForm']['desired_region'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['status']):
?><?php echo ''; ?><?php if (((is_array($_tmp=$this->_tpl_vars['status'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo ''; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['arrRegion'][$this->_tpl_vars['status']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo '<br />'; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo '</td></tr></table><table><col width="30%" /><col width="70%" /><tr><th>Tiếng Nhật</th><td>JLPT：'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrJLPT'][$this->_tpl_vars['arrForm']['jp_level']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo '<br />Khác：'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['jp_other'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "Không có") : smarty_modifier_default($_tmp, "Không có")); ?><?php echo '</td></tr><tr><th>Tiếng anh</th><td>TOEIC：'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['toeic'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo '<br />IELTS：'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['ielts'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo '<br />Khác：'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['eng_other'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "Không có") : smarty_modifier_default($_tmp, "Không có")); ?><?php echo '</td></tr><tr><th>Ngoại ngữ khác</th><td>'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['other_language'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "Chưa đăng ký") : smarty_modifier_default($_tmp, "Chưa đăng ký")); ?><?php echo '</td></tr></table><table><col width="30%" /><col width="70%" /><tr><th>Chứng chỉ</th><td>'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['qualification'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "Chưa đăng ký") : smarty_modifier_default($_tmp, "Chưa đăng ký")); ?><?php echo '</td></tr><tr><th>Kỹ năng</th><td>'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['skill'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "Chưa đăng ký") : smarty_modifier_default($_tmp, "Chưa đăng ký")); ?><?php echo '</td></tr><tr><th>PR bản thân</th><td>'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['self_pr'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "Chưa đăng ký") : smarty_modifier_default($_tmp, "Chưa đăng ký")); ?><?php echo '</td></tr></table>'; ?>