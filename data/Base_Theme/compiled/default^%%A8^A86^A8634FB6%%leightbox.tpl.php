<?php /* Smarty version 2.6.29, created on 2020-09-11 13:37:00
         compiled from CRM/Followup/leightbox.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't', 'CRM/Followup/leightbox.tpl', 36, false),)), $this); ?>
<center>
<BR>
<?php echo $this->_tpl_vars['form_open']; ?>

	<table id="CRM_Filters" cellpadding="0" style="width:600px; border-spacing: 3px;">
			<tr>
				<td class="epesi_label" style="width:20%;">
					<?php echo $this->_tpl_vars['form_closecancel']['label']; ?>
 <!-- STATUS -->
				</td>
				<td class="epesi_data" style="width:30%;">
					<?php echo $this->_tpl_vars['form_closecancel']['html']; ?>
 <!-- SELECT -->
				</td>
			</tr>
			<tr>
				<td class="epesi_label">
					<?php echo $this->_tpl_vars['form_note']['label']; ?>
 <!-- 1 note -->
				</td>
				<td colspan="3" class="epesi_data textarea" style="width:80%;">
					<?php echo $this->_tpl_vars['form_note']['html']; ?>
 <!-- 2 note input -->
				</td>
			</tr>
	</table>

    <table id="CRM_Filters" cellspacing="0" cellpadding="0">
		<tr>

            <td valign="top">
                <?php echo $this->_tpl_vars['just_close']['open']; ?>

                <div class="epesi_big_button">
                    <img src="<?php echo $this->_tpl_vars['theme_dir']; ?>
/Base/ActionBar/icons/save.png" alt="" align="middle" border="0" width="32" height="32">
                    <span><?php echo $this->_tpl_vars['just_close']['text']; ?>
</span>
                </div>
                <?php echo $this->_tpl_vars['just_close']['close']; ?>

            </td>

            <td valign="top" style="font-size: 120%; font-weight: bold; width: 60px; padding: 0px 10px; vertical-align: middle; text-align: center">
                <?php echo ((is_array($_tmp="Or save and create:")) ? $this->_run_mod_handler('t', true, $_tmp) : Base_ThemeCommon::smarty_modifier_translate($_tmp)); ?>

            </td>

			<td valign="top">
				<?php echo $this->_tpl_vars['new_meeting']['open']; ?>

				<div class="epesi_big_button">
					<img src="<?php echo $this->_tpl_vars['theme_dir']; ?>
/CRM/Calendar/icon.png" alt="" align="middle" border="0" width="32" height="32">
					<span><?php echo $this->_tpl_vars['new_meeting']['text']; ?>
</span>
				</div>
				<?php echo $this->_tpl_vars['new_meeting']['close']; ?>

			</td>

			<td valign="top">
				<?php echo $this->_tpl_vars['new_task']['open']; ?>

				<div class="epesi_big_button">
					<img src="<?php echo $this->_tpl_vars['theme_dir']; ?>
/CRM/Tasks/icon.png" alt="" align="middle" border="0" width="32" height="32">
					<span><?php echo $this->_tpl_vars['new_task']['text']; ?>
</span>
				</div>
				<?php echo $this->_tpl_vars['new_task']['close']; ?>

			</td>

			<td valign="top">
				<?php echo $this->_tpl_vars['new_phonecall']['open']; ?>

				<div class="epesi_big_button">
					<img src="<?php echo $this->_tpl_vars['theme_dir']; ?>
/CRM/PhoneCall/icon.png" alt="" align="middle" border="0" width="32" height="32">
					<span><?php echo $this->_tpl_vars['new_phonecall']['text']; ?>
</span>
				</div>
				<?php echo $this->_tpl_vars['new_phonecall']['close']; ?>

			</td>
        </tr>
	</table>
	<?php echo $this->_tpl_vars['form_close']; ?>


</center>