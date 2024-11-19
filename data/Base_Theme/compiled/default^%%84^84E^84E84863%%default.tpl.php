<?php /* Smarty version 2.6.29, created on 2020-10-28 21:57:02
         compiled from CRM/PhoneCall/default.tpl */ ?>
<?php $this->assign('count', 0); ?>
<?php 
	$this->_tpl_vars['multiselects'] = array();
 ?>
<?php $_from = $this->_tpl_vars['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['fields'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fields']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['f']):
        $this->_foreach['fields']['iteration']++;
?>
	<?php if ($this->_tpl_vars['f']['type'] != 'multiselect'): ?>
		<?php $this->assign('count', $this->_tpl_vars['count']+1); ?>
	<?php else: ?>
		<?php 
			$this->_tpl_vars['multiselects'][] = $this->_tpl_vars['f'];
		 ?>
	<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php 
	$this->_tpl_vars['rows'] = ceil($this->_tpl_vars['count']/$this->_tpl_vars['cols']);
	$this->_tpl_vars['mss_rows'] = ceil(count($this->_tpl_vars['multiselects'])/$this->_tpl_vars['cols']);
	$this->_tpl_vars['no_empty'] = $this->_tpl_vars['count']-floor($this->_tpl_vars['count']/$this->_tpl_vars['cols'])*$this->_tpl_vars['cols'];
	if ($this->_tpl_vars['no_empty']==0) $this->_tpl_vars['no_empty'] = $this->_tpl_vars['cols']+1;
	$this->_tpl_vars['mss_no_empty'] = count($this->_tpl_vars['multiselects'])-floor(count($this->_tpl_vars['multiselects'])/$this->_tpl_vars['cols'])*$this->_tpl_vars['cols'];
	if ($this->_tpl_vars['mss_no_empty']==0) $this->_tpl_vars['mss_no_empty'] = $this->_tpl_vars['cols']+1;
	$this->_tpl_vars['cols_percent'] = 100 / $this->_tpl_vars['cols'];
 ?>

<table class="Utils_RecordBrowser__table" border="0" cellpadding="0" cellspacing="0">
	<tbody>
		<tr>
			<td style="width:100px;">
				<div class="name">
					<img alt="&nbsp;" class="icon" src="<?php echo $this->_tpl_vars['icon']; ?>
" width="32" height="32" border="0">
					<div class="label"><?php echo $this->_tpl_vars['caption']; ?>
</div>
				</div>
			</td>
			<td class="required_fav_info">
				&nbsp;*&nbsp;<?php echo $this->_tpl_vars['required_note']; ?>

				<?php if (isset ( $this->_tpl_vars['subscription_tooltip'] )): ?>
					&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['subscription_tooltip']; ?>

				<?php endif; ?>
				<?php if (isset ( $this->_tpl_vars['fav_tooltip'] )): ?>
					&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['fav_tooltip']; ?>

				<?php endif; ?>
				<?php if (isset ( $this->_tpl_vars['info_tooltip'] )): ?>
					&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['info_tooltip']; ?>

				<?php endif; ?>
				<?php if (isset ( $this->_tpl_vars['history_tooltip'] )): ?>
					&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['history_tooltip']; ?>

				<?php endif; ?>
				<?php $_from = $this->_tpl_vars['new']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['n']):
?>
					&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['n']; ?>

				<?php endforeach; endif; unset($_from); ?>
			</td>
		</tr>
	</tbody>
</table>


<?php if (isset ( $this->_tpl_vars['click2fill'] )): ?>
    <?php echo $this->_tpl_vars['click2fill']; ?>

<?php endif; ?>

<div id="CRM_PhoneCall">

	<div class="layer" style="padding: 9px; width: 98%;">
		<div class="css3_content_shadow">

<div class="Utils_RecordBrowser__container">
	<table class="Utils_RecordBrowser__View_entry" cellpadding="0" cellspacing="0" border="0" style="width: 100%;">
		<tbody>
			<tr>
								<td style="width: 50%; vertical-align: top;">
										<table style="table-layout:auto;" cellpadding="0" cellspacing="0" border="0" class="<?php if ($this->_tpl_vars['action'] == 'view'): ?>view<?php else: ?>edit<?php endif; ?>">
						<tbody>
							<tr>
								<td class="label" align="left" style="width: 25%;"><?php echo $this->_tpl_vars['form_data']['subject']['label']; ?>
<?php if ($this->_tpl_vars['form_data']['subject']['required']): ?>*<?php endif; ?></td>
								<td class="data" align="left" colspan="2" id="_subject__data">
									<div style="position:relative;">
										<span class="error"><?php echo $this->_tpl_vars['form_data']['subject']['error']; ?>
</span>
										<?php echo $this->_tpl_vars['form_data']['subject']['html']; ?>

									</div>
								</td>
							</tr>
							<?php if ($this->_tpl_vars['action'] == 'view'): ?>
									<tr>
										<td class="label" style="width: 20%;"><?php echo $this->_tpl_vars['form_data']['customer']['label']; ?>
</td>
										<td class="data" style="width: 80%;" colspan="2" id="_customer__data_mod">
											<div style="position:relative;">
												<span class="error">
													<?php echo $this->_tpl_vars['form_data']['customer']['error']; ?>

												</span>
												<?php if ($this->_tpl_vars['raw_data']['other_customer']): ?><?php echo $this->_tpl_vars['form_data']['other_customer_name']['html']; ?>
<?php else: ?><?php echo $this->_tpl_vars['form_data']['customer']['html']; ?>
<?php endif; ?>&nbsp;
											</div>
										</td>
									</tr>
									<tr>
										<td class="label"><?php echo $this->_tpl_vars['form_data']['phone']['label']; ?>
</td>
										<td class="data" colspan="2" id="_phone__data_mod">
											<div style="position:relative;">
												<span class="error">
													<?php echo $this->_tpl_vars['form_data']['phone']['error']; ?>

												</span>
												<?php if ($this->_tpl_vars['raw_data']['other_phone']): ?><?php echo $this->_tpl_vars['form_data']['other_phone_number']['html']; ?>
<?php else: ?><?php echo $this->_tpl_vars['form_data']['phone']['html']; ?>
<?php endif; ?>&nbsp;
											</div>
										</td>
									</tr>
							<?php else: ?>
									<tr>
										<td class="label" style="width: 20%;"><?php echo $this->_tpl_vars['form_data']['customer']['label']; ?>
<?php if ($this->_tpl_vars['form_data']['customer']['required']): ?>*<?php endif; ?></td>
										<td class="data" style="width: 80%;" colspan="2" id="_customer__data">
											<div style="position:relative;">
												<span class="error">
													<?php echo $this->_tpl_vars['form_data']['customer']['error']; ?>

												</span>
												<?php echo $this->_tpl_vars['form_data']['customer']['html']; ?>
<?php if ($this->_tpl_vars['action'] == 'view'): ?>&nbsp;<?php endif; ?>
											</div>
										</td>
									</tr>
									<tr>
										<td class="label"><?php echo $this->_tpl_vars['form_data']['other_customer']['label']; ?>
<?php if ($this->_tpl_vars['form_data']['other_customer']['required']): ?>*<?php endif; ?></td>
										<td style="width:1px;" id="_other_customer__data">
											<?php echo $this->_tpl_vars['form_data']['other_customer']['html']; ?>

										</td>
										<td class="data" style="width:99%;" id="_other_customer_name__data">
											<div style="position:relative;">
												<span class="error">
													<?php echo $this->_tpl_vars['form_data']['other_customer_name']['error']; ?>

												</span>
												<?php echo $this->_tpl_vars['form_data']['other_customer_name']['html']; ?>
<?php if ($this->_tpl_vars['action'] == 'view'): ?>&nbsp;<?php endif; ?>
											</div>
										</td>
									</tr>
									<tr>
										<td class="label"><?php echo $this->_tpl_vars['form_data']['phone']['label']; ?>
<?php if ($this->_tpl_vars['form_data']['phone']['required']): ?>*<?php endif; ?></td>
										<td class="data" colspan="2" id="_phone__data">
											<div style="position:relative;">
												<span class="error">
													<?php echo $this->_tpl_vars['form_data']['phone']['error']; ?>

												</span>
												<?php echo $this->_tpl_vars['form_data']['phone']['html']; ?>
<?php if ($this->_tpl_vars['action'] == 'view'): ?>&nbsp;<?php endif; ?>
											</div>
										</td>
									</tr>
									<tr>
										<td class="label"><?php echo $this->_tpl_vars['form_data']['other_phone']['label']; ?>
<?php if ($this->_tpl_vars['form_data']['other_phone']['required']): ?>*<?php endif; ?></td>
										<td id="_other_phone__data">
											<?php echo $this->_tpl_vars['form_data']['other_phone']['html']; ?>

										</td>
										<td class="data" id="_other_phone_number__data">
											<div style="position:relative;">
												<span class="error">
													<?php echo $this->_tpl_vars['form_data']['other_phone_number']['error']; ?>

												</span>
												<?php echo $this->_tpl_vars['form_data']['other_phone_number']['html']; ?>
<?php if ($this->_tpl_vars['action'] == 'view'): ?>&nbsp;<?php endif; ?>
											</div>
										</td>
									</tr>
							<?php endif; ?>
						</tbody>
					</table>
				</td>
								<td style="width: 50%; vertical-align: top;">
					<table cellpadding="0" cellspacing="0" border="0" class="form <?php if ($this->_tpl_vars['action'] == 'view'): ?>view<?php else: ?>edit<?php endif; ?>">
						<?php echo $this->_tpl_vars['fields']['date_and_time']['full_field']; ?>

						<?php echo $this->_tpl_vars['fields']['status']['full_field']; ?>

						<?php echo $this->_tpl_vars['fields']['permission']['full_field']; ?>

						<?php echo $this->_tpl_vars['fields']['priority']['full_field']; ?>

						<?php $_from = $this->_tpl_vars['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['fields'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fields']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['f']):
        $this->_foreach['fields']['iteration']++;
?>
							<?php if (( $this->_tpl_vars['k'] != 'subject' && $this->_tpl_vars['k'] != 'company_name' && $this->_tpl_vars['k'] != 'employees' && $this->_tpl_vars['k'] != 'related_to' && $this->_tpl_vars['k'] != 'status' && $this->_tpl_vars['k'] != 'priority' && $this->_tpl_vars['k'] != 'permission' && $this->_tpl_vars['k'] != 'customer' && $this->_tpl_vars['k'] != 'other_customer' && $this->_tpl_vars['k'] != 'other_customer_name' && $this->_tpl_vars['k'] != 'phone' && $this->_tpl_vars['k'] != 'other_phone' && $this->_tpl_vars['k'] != 'other_phone_number' && $this->_tpl_vars['k'] != 'date_and_time' && $this->_tpl_vars['f']['type'] != 'multiselect' )): ?>
								<?php echo $this->_tpl_vars['f']['full_field']; ?>

							<?php endif; ?>
						<?php endforeach; endif; unset($_from); ?>
					</table>
				</td>
			</tr>
			<?php if (! empty ( $this->_tpl_vars['multiselects'] )): ?>
				<tr>
					<?php $this->assign('x', 1); ?>
					<?php $this->assign('y', 1); ?>
					<?php $_from = $this->_tpl_vars['multiselects']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['fields'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fields']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['f']):
        $this->_foreach['fields']['iteration']++;
?>
						<?php if ($this->_tpl_vars['y'] == 1): ?>
						<td class="column" style="width: <?php echo $this->_tpl_vars['cols_percent']; ?>
%;">
							<table cellpadding="0" cellspacing="0" border="0" class="multiselects <?php if ($this->_tpl_vars['action'] == 'view'): ?>view<?php else: ?>edit<?php endif; ?>" style="border-top: none;">
						<?php endif; ?>
						<?php echo $this->_tpl_vars['f']['full_field']; ?>

						<?php if ($this->_tpl_vars['y'] == $this->_tpl_vars['mss_rows'] || ( $this->_tpl_vars['y'] == $this->_tpl_vars['mss_rows']-1 && $this->_tpl_vars['x'] > $this->_tpl_vars['mss_no_empty'] )): ?>
							<?php if ($this->_tpl_vars['x'] > $this->_tpl_vars['mss_no_empty']): ?>
								<tr style="display:none;">
									<td class="label">&nbsp;</td>
									<td class="data">&nbsp;</td>
								</tr>
							<?php endif; ?>
							<?php $this->assign('y', 1); ?>
							<?php $this->assign('x', $this->_tpl_vars['x']+1); ?>
							</table>
						</td>
						<?php else: ?>
							<?php $this->assign('y', $this->_tpl_vars['y']+1); ?>
						<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
				</tr>
			<?php endif; ?>
			<tr>
				<td colspan="2">
				<table cellpadding="0" cellspacing="0" border="0" class="longfields <?php if ($this->_tpl_vars['action'] == 'view'): ?>view<?php else: ?>edit<?php endif; ?>" style="border-top: none;">
					<?php $_from = $this->_tpl_vars['longfields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['fields'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fields']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['f']):
        $this->_foreach['fields']['iteration']++;
?>
						<?php echo $this->_tpl_vars['f']['full_field']; ?>

					<?php endforeach; endif; unset($_from); ?>
				</table>
				</td>
			</tr>
		</tbody>
	</table>
</div>




<?php 
	eval_js('focus_by_id(\'subject\');');
 ?>

<!-- SHADOW END -->
 		</div>
	</div>
<!-- -->

</div>
