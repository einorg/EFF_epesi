<?php /* Smarty version 2.6.29, created on 2018-06-08 10:11:50
         compiled from Utils/RecordBrowser/Reports/date_picker.tpl */ ?>

<?php echo $this->_tpl_vars['form_open']; ?>

<div style="text-align:left; padding-left: 10px; padding-right: 10px;">

<table cellpadding="0" cellspacing="0" class="Utils_RecordBrowser_Reports__date_picker">
	<tr>
		<?php $this->assign('block', 0); ?>
		<?php $_from = $this->_tpl_vars['form_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['e']):
?>
			<?php if (is_array ( $this->_tpl_vars['e'] ) && isset ( $this->_tpl_vars['e']['name'] ) && ( $this->_tpl_vars['e']['name'] == 'date_range_type' || $this->_tpl_vars['e']['name'] == 'submit' )): ?>
				<?php $this->assign('block', 1); ?>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['block'] == 0 && is_array ( $this->_tpl_vars['e'] ) && isset ( $this->_tpl_vars['e']['html'] )): ?>
				<td class="epesi_label">
					<?php echo $this->_tpl_vars['e']['label']; ?>

				</td>
				<td <?php if (is_array ( $this->_tpl_vars['e']['value'] )): ?>style="width:314px" <?php endif; ?>class="epesi_data">
					<?php echo $this->_tpl_vars['e']['html']; ?>

				</td>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
<?php if ($this->_tpl_vars['show_dates']): ?>
	</tr>
</table>
<table cellpadding="0" cellspacing="0" class="Utils_RecordBrowser_Reports__date_picker">
	<tr>
		<td style="text-align:center;font-weight:bold" colspan="7">
			<?php echo $this->_tpl_vars['form_data']['date_range_type']['error']; ?>

		</td>
	</tr>
	<tr>
		<td class="epesi_label">
			<?php echo $this->_tpl_vars['form_data']['date_range_type']['label']; ?>

		</td>
		<td class="epesi_data">
			<?php echo $this->_tpl_vars['form_data']['date_range_type']['html']; ?>

		</td>
		<td>
			<div id="day_elements">
				<table cellpadding="0" cellspacing="0" class="Utils_RecordBrowser_Reports__date_picker">
					<tr>
						<td class="epesi_label">
							<?php echo $this->_tpl_vars['form_data']['from_day']['label']; ?>

						</td>
						<td class="epesi_data">
							<?php echo $this->_tpl_vars['form_data']['from_day']['html']; ?>

						</td>
						<td class="epesi_label">
							<?php echo $this->_tpl_vars['form_data']['to_day']['label']; ?>

						</td>
						<td class="epesi_data">
							<?php echo $this->_tpl_vars['form_data']['to_day']['html']; ?>

						<tr>
					<td>
				</table>
			</div>
		</td>
		<td>
			<div id="week_elements">
				<table cellpadding="0" cellspacing="0" class="Utils_RecordBrowser_Reports__date_picker">
					<tbody>
						<tr>
							<td class="epesi_label"><?php echo $this->_tpl_vars['form_data']['from_week']['label']; ?>
</td><td class="epesi_data"><?php echo $this->_tpl_vars['form_data']['from_week']['html']; ?>
</td>
							<td class="epesi_label"><?php echo $this->_tpl_vars['form_data']['to_week']['label']; ?>
</td><td class="epesi_data"><?php echo $this->_tpl_vars['form_data']['to_week']['html']; ?>
</td>
						</tr>
					</tbody>
				</table>
			</div>
		</td>
		<td>
			<div id="month_elements">
				<table cellpadding="0" cellspacing="0" class="Utils_RecordBrowser_Reports__date_picker">
					<tbody>
						<tr>
							<td class="epesi_label"><?php echo $this->_tpl_vars['form_data']['from_month']['label']; ?>
</td><td class="epesi_data"><?php echo $this->_tpl_vars['form_data']['from_month']['html']; ?>
</td>
							<td class="epesi_label"><?php echo $this->_tpl_vars['form_data']['to_month']['label']; ?>
</td><td class="epesi_data"><?php echo $this->_tpl_vars['form_data']['to_month']['html']; ?>
</td>
						</tr>
					</tbody>
				</table>
			</div>
		</td>
		<td>
			<div id="year_elements">
				<table cellpadding="0" cellspacing="0" class="Utils_RecordBrowser_Reports__date_picker">
					<tbody>
						<tr>
							<td class="epesi_label"><?php echo $this->_tpl_vars['form_data']['from_year']['label']; ?>
</td><td class="epesi_data" style="width:auto;"><?php echo $this->_tpl_vars['form_data']['from_year']['html']; ?>
</td>
							<td class="epesi_label"><?php echo $this->_tpl_vars['form_data']['to_year']['label']; ?>
</td><td class="epesi_data" style="width:auto;"><?php echo $this->_tpl_vars['form_data']['to_year']['html']; ?>
</td>
						</tr>
					</tbody>
				</table>
			</div>
		</td>
<?php endif; ?>
		<td class="child_button">
			<?php echo $this->_tpl_vars['form_data']['submit']['html']; ?>

		</td>
	</tr>
</table>
</div>
<?php echo $this->_tpl_vars['form_close']; ?>

<br>