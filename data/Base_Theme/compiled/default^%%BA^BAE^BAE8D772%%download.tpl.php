<?php /* Smarty version 2.6.29, created on 2022-02-24 12:03:39
         compiled from Utils/Attachment/download.tpl */ ?>
<center>
<br/>
<table id="Utils_Attachment__download_info" cellpadding="0" style="width:300px; border-spacing: 3px;">
	<tr>
		<td class="epesi_label" style="width:30%;">
			<?php echo $this->_tpl_vars['labels']['filename']; ?>

		</td>
		<td class="epesi_data static_field" style="width:70%;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
			<?php echo $this->_tpl_vars['filename']; ?>

		</td>
	</tr>
	<tr>
		<td class="epesi_label" style="width:30%;">
			<?php echo $this->_tpl_vars['labels']['file_size']; ?>

		</td>
		<td class="epesi_data static_field" style="width:70%;">
			<?php echo $this->_tpl_vars['file_size']; ?>

		</td>
	</tr>
</table>
<br/>

<div id="<?php echo $this->_tpl_vars['download_options_id']; ?>
">
	<table id="Utils_Attachment__download" cellspacing="0" cellpadding="0">
		<tr>
			<!-- VIEW -->
			<td valign="top">
				<?php echo $this->_tpl_vars['__link']['view']['open']; ?>

					<div class="epesi_big_button">
						<img src="<?php echo $this->_tpl_vars['theme_dir']; ?>
/Utils/Attachment/view.png" alt="" align="middle" border="0" width="32" height="32">
						<span><?php echo $this->_tpl_vars['__link']['view']['text']; ?>
</span>
					</div>
				<?php echo $this->_tpl_vars['__link']['view']['close']; ?>

			</td>
			<!-- DOWNLOAD -->
			<td valign="top">
				<?php echo $this->_tpl_vars['__link']['download']['open']; ?>

					<div class="epesi_big_button">
						<img src="<?php echo $this->_tpl_vars['theme_dir']; ?>
/Utils/Attachment/download.png" alt="" align="middle" border="0" width="32" height="32">
						<span><?php echo $this->_tpl_vars['__link']['download']['text']; ?>
</span>
					</div>
				<?php echo $this->_tpl_vars['__link']['download']['close']; ?>

			</td>
			<!-- HISTORY -->
			<td valign="top">
				<?php echo $this->_tpl_vars['__link']['history']['open']; ?>

					<div class="epesi_big_button">
						<img src="<?php echo $this->_tpl_vars['theme_dir']; ?>
/Utils/Attachment/history.png" alt="" align="middle" border="0" width="32" height="32">
						<span><?php echo $this->_tpl_vars['__link']['history']['text']; ?>
</span>
					</div>
				<?php echo $this->_tpl_vars['__link']['history']['close']; ?>

			</td>
            <?php if (isset ( $this->_tpl_vars['link'] )): ?>
			<!-- LINK -->
			<td valign="top">
				<?php echo $this->_tpl_vars['__link']['link']['open']; ?>

					<div class="epesi_big_button">
						<img src="<?php echo $this->_tpl_vars['theme_dir']; ?>
/Utils/Attachment/link.png" alt="" align="middle" border="0" width="32" height="32">
						<span><?php echo $this->_tpl_vars['__link']['link']['text']; ?>
</span>
					</div>
				<?php echo $this->_tpl_vars['__link']['link']['close']; ?>

			</td>
            <?php endif; ?>
		</tr>
	</table>

	<?php if ($this->_tpl_vars['custom_getters']): ?>
	<table id="Utils_Attachment__download" cellspacing="0" cellpadding="0">
		<tr>
		<?php $this->assign('x', 0); ?>
		<?php $_from = $this->_tpl_vars['custom_getters']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['p']):
?>
		<?php $this->assign('x', $this->_tpl_vars['x']+1); ?>
			
			<td valign="top">
				<?php echo $this->_tpl_vars['p']['open']; ?>

					<div class="epesi_big_button">
						<img src="<?php echo $this->_tpl_vars['p']['icon']; ?>
" alt="" align="middle" border="0" width="32" height="32">
						<span><?php echo $this->_tpl_vars['p']['text']; ?>
</span>
					</div>
				<?php echo $this->_tpl_vars['p']['close']; ?>

			</td>
		<?php if (( $this->_tpl_vars['x']%4 ) == 0): ?>
		</tr>
		<tr>
		<?php endif; ?>

	<?php endforeach; endif; unset($_from); ?>
		</tr>
	</table>
	<?php endif; ?>
</div>

<?php if (isset ( $this->_tpl_vars['save_options_id'] )): ?>
	<div id="<?php echo $this->_tpl_vars['save_options_id']; ?>
" style="display: none;">
		<table id="Utils_Attachment__download" cellspacing="0" cellpadding="0">
			<tr>
				<!-- SAVE -->
				<td valign="top">
					<?php echo $this->_tpl_vars['__link']['save']['open']; ?>

						<div class="epesi_big_button">
							<img src="<?php echo $this->_tpl_vars['theme_dir']; ?>
/Utils/Attachment/save.png" alt="" align="middle" border="0" width="32" height="32">
							<span><?php echo $this->_tpl_vars['__link']['save']['text']; ?>
</span>
						</div>
					<?php echo $this->_tpl_vars['__link']['save']['close']; ?>

				</td>
				<!-- DISCARD -->
				<td valign="top">
					<?php echo $this->_tpl_vars['__link']['discard']['open']; ?>

						<div class="epesi_big_button">
							<img src="<?php echo $this->_tpl_vars['theme_dir']; ?>
/Utils/Attachment/discard.png" alt="" align="middle" border="0" width="32" height="32">
							<span><?php echo $this->_tpl_vars['__link']['discard']['text']; ?>
</span>
						</div>
					<?php echo $this->_tpl_vars['__link']['discard']['close']; ?>

				</td>
			</tr>
		</table>
	</div>
<?php endif; ?>

</center>