<?php /* Smarty version 2.6.29, created on 2020-06-02 15:17:32
         compiled from Eff/Contracts/Constructions/status_leightbox.tpl */ ?>
<center>
<br>
<?php echo $this->_tpl_vars['form_open']; ?>

<table id="CRM_Filters" cellpadding="0" style="width:70%;cell-spacing:3px;">
	<tr>
        <td class="epesi_label" style="width:20%;">
        	<?php echo $this->_tpl_vars['form_resolution']['label']; ?>

		</td>
		<td class="epesi_data" style="width:80%;">
			<div style="construction:relative;">
				<?php echo $this->_tpl_vars['resolution_required_error']; ?>

				<?php echo $this->_tpl_vars['form_resolution']['html']; ?>

			</div>
		</td>
	</tr>
	<tr>
        <td class="epesi_label">
        	<?php echo $this->_tpl_vars['form_note']['label']; ?>

		</td>
		<td class="epesi_data textarea">
			<?php echo $this->_tpl_vars['form_note']['html']; ?>
</div>
        </td>
	</tr>
</table>

<table id="CRM_Filters" cellspacing="0" cellpadding="0">
	<tr>
        <td id="construction_status_new_button">
			<?php echo $this->_tpl_vars['mark_new']['open']; ?>

			<div class="epesi_big_button">
				<img src="<?php echo $this->_tpl_vars['theme_dir']; ?>
/Eff/Contracts/Constructions/mark_as_new.png" alt="" align="middle" border="0" width="32" height="32">
				<span><?php echo $this->_tpl_vars['mark_new']['text']; ?>
</span>
			</div>
			<?php echo $this->_tpl_vars['mark_new']['close']; ?>

		</td>

        </td>
        <td id="construction_status_reopen_button">
			<?php echo $this->_tpl_vars['reopen']['open']; ?>

			<div class="epesi_big_button">
				<img src="<?php echo $this->_tpl_vars['theme_dir']; ?>
/Eff/Contracts/Constructions/reopen.png" alt="" align="middle" border="0" width="32" height="32">
				<span><?php echo $this->_tpl_vars['reopen']['text']; ?>
</span>
			</div>
			<?php echo $this->_tpl_vars['reopen']['close']; ?>

        </td>
        <td id="construction_status_in_progress_button">
			<?php echo $this->_tpl_vars['in_progress']['open']; ?>

			<div class="epesi_big_button">
				<img src="<?php echo $this->_tpl_vars['theme_dir']; ?>
/Eff/Contracts/Constructions/in_progress.png" alt="" align="middle" border="0" width="32" height="32">
				<span><?php echo $this->_tpl_vars['in_progress']['text']; ?>
</span>
			</div>
			<?php echo $this->_tpl_vars['in_progress']['close']; ?>

        </td>
        <td id="construction_status_on_hold_button">
			<?php echo $this->_tpl_vars['on_hold']['open']; ?>

			<div class="epesi_big_button">
				<img src="<?php echo $this->_tpl_vars['theme_dir']; ?>
/Eff/Contracts/Constructions/on_hold.png" alt="" align="middle" border="0" width="32" height="32">
				<span><?php echo $this->_tpl_vars['on_hold']['text']; ?>
</span>
			</div>
			<?php echo $this->_tpl_vars['on_hold']['close']; ?>

        </td>
        <td id="construction_status_resolve_button">
			<?php echo $this->_tpl_vars['resolve']['open']; ?>

			<div class="epesi_big_button">
				<img src="<?php echo $this->_tpl_vars['theme_dir']; ?>
/Eff/Contracts/Constructions/resolved.png" alt="" align="middle" border="0" width="32" height="32">
				<span><?php echo $this->_tpl_vars['resolve']['text']; ?>
</span>
			</div>
			<?php echo $this->_tpl_vars['resolve']['close']; ?>

        </td>
        <td id="construction_status_feedback_button">
			<?php echo $this->_tpl_vars['feedback']['open']; ?>

			<div class="epesi_big_button">
				<img src="<?php echo $this->_tpl_vars['theme_dir']; ?>
/Eff/Contracts/Constructions/feedback.png" alt="" align="middle" border="0" width="32" height="32">
				<span><?php echo $this->_tpl_vars['feedback']['text']; ?>
</span>
			</div>
			<?php echo $this->_tpl_vars['feedback']['close']; ?>

        </td>
        <td id="construction_status_close_button">
			<?php echo $this->_tpl_vars['close']['open']; ?>

			<div class="epesi_big_button">
				<img src="<?php echo $this->_tpl_vars['theme_dir']; ?>
/Eff/Contracts/Constructions/closed.png" alt="" align="middle" border="0" width="32" height="32">
				<span><?php echo $this->_tpl_vars['close']['text']; ?>
</span>
			</div>
			<?php echo $this->_tpl_vars['close']['close']; ?>

        </td>
    </tr>
</table>
<?php echo $this->_tpl_vars['form_close']; ?>


</center>