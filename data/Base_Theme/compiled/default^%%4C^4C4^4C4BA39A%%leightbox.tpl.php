<?php /* Smarty version 2.6.29, created on 2019-07-12 10:42:37
         compiled from Premium/SalesOpportunity/leightbox.tpl */ ?>
<center>
<BR>
<?php echo $this->_tpl_vars['form_open']; ?>

<table class="SalesOpportunity_followup" cellspacing="0" cellpadding="0" width="600px" style="border-spacing: 3px;">
	<tr>
        <td style="width:20%;" class="epesi_label">
        	<?php echo $this->_tpl_vars['form_closecancel']['label']; ?>

		</td>
		<td style="width:40%;" class="epesi_data">
			<?php echo $this->_tpl_vars['form_closecancel']['html']; ?>

		</td>
		<td></td>
	</tr>
	<tr>
        <td class="epesi_label">
        	<?php echo $this->_tpl_vars['form_followup_date']['label']; ?>

		</td>
		<td class="epesi_data">
			<div class="crm_followup_leightbox_note">
				<?php echo $this->_tpl_vars['form_followup_date']['html']; ?>

			</div>
        </td>
		<td></td>
	</tr>
	<tr>
        <td class="epesi_label">
        	<?php echo $this->_tpl_vars['form_probabilty']['label']; ?>

		</td>
		<td class="epesi_data">
			<div class="crm_followup_leightbox_note">
				<?php echo $this->_tpl_vars['form_probabilty']['html']; ?>

			</div>
        </td>
		<td></td>
	</tr>
	<tr>
        <td class="epesi_label">
        	<?php echo $this->_tpl_vars['form_note']['label']; ?>

		</td>
		<td colspan="2" class="epesi_data textarea">
			<div class="crm_followup_leightbox_note">
				<?php echo $this->_tpl_vars['form_note']['html']; ?>

			</div>
        </td>
	</tr>
</table>
        <!-- MY -->
<table id="CRM_Filters" cellspacing="0" cellpadding="0">
	<tr>
        <td>
			<?php echo $this->_tpl_vars['new_meeting']['open']; ?>

			<div class="epesi_big_button">
				<img src="<?php echo $this->_tpl_vars['theme_dir']; ?>
/CRM/Calendar/icon.png" alt="" align="middle" border="0" width="32" height="32">
				<span><?php echo $this->_tpl_vars['new_meeting']['text']; ?>
</span>
			</div>
			<?php echo $this->_tpl_vars['new_meeting']['close']; ?>

		</td>
        <td>
			<?php echo $this->_tpl_vars['new_task']['open']; ?>

			<div class="epesi_big_button">
				<img src="<?php echo $this->_tpl_vars['theme_dir']; ?>
/CRM/Tasks/icon.png" alt="" align="middle" border="0" width="32" height="32">
				<span><?php echo $this->_tpl_vars['new_task']['text']; ?>
</span>
			</div>
			<?php echo $this->_tpl_vars['new_task']['close']; ?>

		</td>
        <td>
			<?php echo $this->_tpl_vars['new_phonecall']['open']; ?>

			<div class="epesi_big_button">
				<img src="<?php echo $this->_tpl_vars['theme_dir']; ?>
/CRM/PhoneCall/icon.png" alt="" align="middle" border="0" width="32" height="32">
				<span><?php echo $this->_tpl_vars['new_phonecall']['text']; ?>
</span>
			</div>
			<?php echo $this->_tpl_vars['new_phonecall']['close']; ?>

		</td>
        <td>
			<?php echo $this->_tpl_vars['just_close']['open']; ?>

			<div class="epesi_big_button">
				<img src="<?php echo $this->_tpl_vars['theme_dir']; ?>
/Base/ActionBar/icons/save.png" alt="" align="middle" border="0" width="32" height="32">
				<span><?php echo $this->_tpl_vars['just_close']['text']; ?>
</span>
			</div>
			<?php echo $this->_tpl_vars['just_close']['close']; ?>

        </td>
    </tr>
</table>
<?php echo $this->_tpl_vars['form_close']; ?>


</center>