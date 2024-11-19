<?php /* Smarty version 2.6.29, created on 2020-09-11 13:37:00
         compiled from CRM/Meeting/default.tpl */ ?>
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
<?php 
	$this->_tpl_vars['fdow'] = Utils_PopupCalendarCommon::get_first_day_of_week();
	$this->_tpl_vars['fdow']--;
	if ($this->_tpl_vars['fdow']<0) $this->_tpl_vars['fdow']+=7;
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
				<?php if (isset ( $this->_tpl_vars['clipboard_tooltip'] )): ?>
					&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['clipboard_tooltip']; ?>

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
<div class="CRM_Calendar_Event_Personal">

<!-- SHADIW BEGIN-->
	<div class="layer" style="padding: 9px; width: 98%;">
		<div class="css3_content_shadow">
<!-- -->

<div class="Utils_RecordBrowser__container">
    <table class="Utils_RecordBrowser__View_entry" cellspacing="0" cellpadding="0" border="0" style="width: 100%;">
        <tbody>
            <tr>
                <?php if ($this->_tpl_vars['action'] == 'view'): ?>
                <!-- NEW HEADER -->
                <td rowspan="3" style="width:143px; vertical-align:top;">
                    <table border="0" class="header-new">
                        <tbody>
                            <tr>
                                <td class="weekday green"><?php echo $this->_tpl_vars['day_details']['start']['weekday']; ?>
</td>
								<?php if ($this->_tpl_vars['event_info']['start_date'] != $this->_tpl_vars['event_info']['end_date']): ?>
									<?php $this->assign('colspan', 3); ?>
									<td class="weekday green">&nbsp;-&nbsp;</td>
									<td class="weekday green"><?php echo $this->_tpl_vars['day_details']['end']['weekday']; ?>
</td>
								<?php else: ?>
									<?php $this->assign('colspan', 1); ?>
								<?php endif; ?>
                            </tr>
                            <tr>
                                <td class="day black"><?php echo $this->_tpl_vars['day_details']['start']['day']; ?>
</td>
								<?php if ($this->_tpl_vars['event_info']['start_date'] != $this->_tpl_vars['event_info']['end_date']): ?>
									<td class="day black">&nbsp;-&nbsp;</td>
									<td class="day black"><?php echo $this->_tpl_vars['day_details']['end']['day']; ?>
</td>
								<?php endif; ?>
                            </tr>
                            <tr>
                                <td class="month blue"><?php echo $this->_tpl_vars['day_details']['start']['month']; ?>
&nbsp;<?php echo $this->_tpl_vars['day_details']['start']['year']; ?>
</td>
								<?php if ($this->_tpl_vars['event_info']['start_date'] != $this->_tpl_vars['event_info']['end_date']): ?>
									<td></td>
									<td class="month blue"><?php echo $this->_tpl_vars['day_details']['end']['month']; ?>
&nbsp;<?php echo $this->_tpl_vars['day_details']['start']['year']; ?>
</td>
								<?php endif; ?>
                            </tr>
                            <tr>
                                <td colspan="<?php echo $this->_tpl_vars['colspan']; ?>
" class="time black">
                                    <?php if (isset ( $this->_tpl_vars['event_info'] )): ?>
                                        <?php echo $this->_tpl_vars['event_info']['start_time']; ?>
&nbsp;-&nbsp;<?php echo $this->_tpl_vars['event_info']['end_time']; ?>

                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="<?php echo $this->_tpl_vars['colspan']; ?>
" class="duration dark-gray">
                                    <?php if (isset ( $this->_tpl_vars['event_info'] )): ?>
                                        <?php echo $this->_tpl_vars['event_info']['duration']; ?>

                                    <?php endif; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <?php endif; ?>
                <!-- LEFT -->
                <td style="width: 50%; height: 101px; vertical-align: top;">
                                        <table name="CRMCalendar" class="form <?php if ($this->_tpl_vars['action'] == 'view'): ?>view<?php else: ?>edit<?php endif; ?>" cellspacing="0" cellpadding="0" border="0">
                        <tbody>
							<?php echo $this->_tpl_vars['fields']['title']['full_field']; ?>

							<?php echo $this->_tpl_vars['fields']['permission']['full_field']; ?>

							<?php echo $this->_tpl_vars['fields']['priority']['full_field']; ?>

							<?php echo $this->_tpl_vars['fields']['status']['full_field']; ?>

                        </tbody>
                    </table>
                </td>
                <!-- -->
                <!-- RIGHT -->
                <td style="width: 50%; height: 101px; vertical-align: top;">
                    <table style="table-layout: auto;" name="CRMCalendar" class="form <?php if ($this->_tpl_vars['action'] == 'view'): ?>view<?php else: ?>edit<?php endif; ?> no-border" cellspacing="0" cellpadding="0" border="0">
                        <tbody>
                                        <?php if ($this->_tpl_vars['action'] != 'view'): ?>
                                <tr>
                                    <td class="label"><?php echo $this->_tpl_vars['form_data']['date']['label']; ?>
<?php if ($this->_tpl_vars['form_data']['date']['required']): ?>*<?php endif; ?></td>
                                    <td colspan="2" class="data timestamp">
										<div style="position:relative;">
											<span class="error"><?php echo $this->_tpl_vars['form_data']['date']['error']; ?>
</span>
											<div id="time_s" id="_time__data"><?php echo $this->_tpl_vars['form_data']['time']['html']; ?>
</div>
											<div class="time_s" id="_date__data"><?php echo $this->_tpl_vars['form_data']['date']['html']; ?>
</div>
										</div>
									</td>
                                </tr>
                    <?php endif; ?>
                            <tr>
                                <td class="label" align="left"><?php echo $this->_tpl_vars['form_data']['timeless']['label']; ?>
<?php if ($this->_tpl_vars['form_data']['timeless']['required']): ?>*<?php endif; ?></td>
                                <td class="data" align="left" colspan="2" id="_timeless__data"><?php echo $this->_tpl_vars['form_data']['timeless']['html']; ?>
</td>
                            </tr>
                    <?php if ($this->_tpl_vars['action'] != 'view'): ?>
                                <tr id="duration_end_date__data_">
                                    <td class="label">
										<?php echo $this->_tpl_vars['form_data']['duration']['label']; ?>
 / <?php echo $this->_tpl_vars['form_data']['end_time']['label']; ?>

									</td>
                                    <td colspan="2" class="data" style="height: 20px;">
										<div style="position:relative;">
											<div class="toggle_button"><?php echo $this->_tpl_vars['form_data']['toggle']['html']; ?>
</div>
											<div id="crm_calendar_duration_block">
													<span class="error"><?php echo $this->_tpl_vars['form_data']['duration']['error']; ?>
</span><div style="margin-right: 105px;" id="_duration__data"><span id="duration"><?php echo $this->_tpl_vars['form_data']['duration']['html']; ?>
</span></div>
											</div>
											<div id="crm_calendar_event_end_block" id="_end_time__data"><span class="error"><?php echo $this->_tpl_vars['form_data']['end_time']['error']; ?>
</span><span id="time_e"><?php echo $this->_tpl_vars['form_data']['end_time']['html']; ?>
</span></div>
										</div>
                                    </td>
                                </tr>
                    <?php endif; ?>
                            <tr>
                                <td class="label" align="left"><?php echo $this->_tpl_vars['form_data']['recurrence_type']['label']; ?>
</td>
                                <td class="data" align="left" colspan="2" id="_recurrence_type__data">
                                    <?php echo $this->_tpl_vars['form_data']['recurrence_type']['html']; ?>

                                </td>
                            </tr>
			    <?php if (isset ( $this->_tpl_vars['form_data']['recurrence_start_date'] )): ?>
				    <tr id="recurrence_start_date_row">
					<td class="label" align="left"><?php echo $this->_tpl_vars['form_data']['recurrence_start_date']['label']; ?>
</td>
					<td class="data" align="left" colspan="2" id="_recurrence_start_date__data">
						<span id="recurrence_start_date_span">
							<?php echo $this->_tpl_vars['form_data']['recurrence_start_date']['html']; ?>

						</span>
					</td>
				    </tr>
			    <?php endif; ?>
                            <tr id="recurrence_end_date_row">
                                <td class="label" align="left" style="width:25%"><?php echo $this->_tpl_vars['form_data']['recurrence_end']['label']; ?>
</td>
                                <?php if (isset ( $this->_tpl_vars['form_data']['recurrence_end_checkbox'] )): ?>
									<td align="left" style="width:1px;" id="_recurrence_end_checkbox__data">
										<?php echo $this->_tpl_vars['form_data']['recurrence_end_checkbox']['html']; ?>

									</td>
								<td class="data" align="left" id="_recurrence_end__data" style="width:99%;">
								<?php else: ?>
                                <td class="data" align="left" id="_recurrence_end__data" colspan="2">
								<?php endif; ?>
									<span id="recurrence_end_date_span">
										<?php echo $this->_tpl_vars['form_data']['recurrence_end']['html']; ?>

									</span>
                                </td>
                            </tr>
                            <tr id="recurrence_hash_row">
                                <td class="label" align="left"><?php echo $this->_tpl_vars['form_data']['recurrence_hash']['label']; ?>
</td>
                                <td class="data" align="left" colspan="2" id="_recurrence_hash__data">
									<div style="position:relative;">
										<span class="error"><?php echo $this->_tpl_vars['form_data']['recurrence_hash']['error']; ?>
</span>
										<table>
											<tr>
												<?php if ($this->_tpl_vars['fdow'] <= 0): ?><td><?php echo $this->_tpl_vars['form_data']['recurrence_hash_0']['label']; ?>
</td><?php endif; ?>
												<?php if ($this->_tpl_vars['fdow'] <= 1): ?><td><?php echo $this->_tpl_vars['form_data']['recurrence_hash_1']['label']; ?>
</td><?php endif; ?>
												<?php if ($this->_tpl_vars['fdow'] <= 2): ?><td><?php echo $this->_tpl_vars['form_data']['recurrence_hash_2']['label']; ?>
</td><?php endif; ?>
												<?php if ($this->_tpl_vars['fdow'] <= 3): ?><td><?php echo $this->_tpl_vars['form_data']['recurrence_hash_3']['label']; ?>
</td><?php endif; ?>
												<?php if ($this->_tpl_vars['fdow'] <= 4): ?><td><?php echo $this->_tpl_vars['form_data']['recurrence_hash_4']['label']; ?>
</td><?php endif; ?>
												<?php if ($this->_tpl_vars['fdow'] <= 5): ?><td><?php echo $this->_tpl_vars['form_data']['recurrence_hash_5']['label']; ?>
</td><?php endif; ?>
												<td><?php echo $this->_tpl_vars['form_data']['recurrence_hash_6']['label']; ?>
</td>
												<?php if ($this->_tpl_vars['fdow'] > 0): ?><td><?php echo $this->_tpl_vars['form_data']['recurrence_hash_0']['label']; ?>
</td><?php endif; ?>
												<?php if ($this->_tpl_vars['fdow'] > 1): ?><td><?php echo $this->_tpl_vars['form_data']['recurrence_hash_1']['label']; ?>
</td><?php endif; ?>
												<?php if ($this->_tpl_vars['fdow'] > 2): ?><td><?php echo $this->_tpl_vars['form_data']['recurrence_hash_2']['label']; ?>
</td><?php endif; ?>
												<?php if ($this->_tpl_vars['fdow'] > 3): ?><td><?php echo $this->_tpl_vars['form_data']['recurrence_hash_3']['label']; ?>
</td><?php endif; ?>
												<?php if ($this->_tpl_vars['fdow'] > 4): ?><td><?php echo $this->_tpl_vars['form_data']['recurrence_hash_4']['label']; ?>
</td><?php endif; ?>
												<?php if ($this->_tpl_vars['fdow'] > 5): ?><td><?php echo $this->_tpl_vars['form_data']['recurrence_hash_5']['label']; ?>
</td><?php endif; ?>
											</tr>
											<tr>
												<?php if ($this->_tpl_vars['fdow'] <= 0): ?><td><?php echo $this->_tpl_vars['form_data']['recurrence_hash_0']['html']; ?>
</td><?php endif; ?>
												<?php if ($this->_tpl_vars['fdow'] <= 1): ?><td><?php echo $this->_tpl_vars['form_data']['recurrence_hash_1']['html']; ?>
</td><?php endif; ?>
												<?php if ($this->_tpl_vars['fdow'] <= 2): ?><td><?php echo $this->_tpl_vars['form_data']['recurrence_hash_2']['html']; ?>
</td><?php endif; ?>
												<?php if ($this->_tpl_vars['fdow'] <= 3): ?><td><?php echo $this->_tpl_vars['form_data']['recurrence_hash_3']['html']; ?>
</td><?php endif; ?>
												<?php if ($this->_tpl_vars['fdow'] <= 4): ?><td><?php echo $this->_tpl_vars['form_data']['recurrence_hash_4']['html']; ?>
</td><?php endif; ?>
												<?php if ($this->_tpl_vars['fdow'] <= 5): ?><td><?php echo $this->_tpl_vars['form_data']['recurrence_hash_5']['html']; ?>
</td><?php endif; ?>
												<td><?php echo $this->_tpl_vars['form_data']['recurrence_hash_6']['html']; ?>
</td>
												<?php if ($this->_tpl_vars['fdow'] > 0): ?><td><?php echo $this->_tpl_vars['form_data']['recurrence_hash_0']['html']; ?>
</td><?php endif; ?>
												<?php if ($this->_tpl_vars['fdow'] > 1): ?><td><?php echo $this->_tpl_vars['form_data']['recurrence_hash_1']['html']; ?>
</td><?php endif; ?>
												<?php if ($this->_tpl_vars['fdow'] > 2): ?><td><?php echo $this->_tpl_vars['form_data']['recurrence_hash_2']['html']; ?>
</td><?php endif; ?>
												<?php if ($this->_tpl_vars['fdow'] > 3): ?><td><?php echo $this->_tpl_vars['form_data']['recurrence_hash_3']['html']; ?>
</td><?php endif; ?>
												<?php if ($this->_tpl_vars['fdow'] > 4): ?><td><?php echo $this->_tpl_vars['form_data']['recurrence_hash_4']['html']; ?>
</td><?php endif; ?>
												<?php if ($this->_tpl_vars['fdow'] > 5): ?><td><?php echo $this->_tpl_vars['form_data']['recurrence_hash_5']['html']; ?>
</td><?php endif; ?>
											</tr>
										</table>
									</div>
								</td>
                            </tr>
				<?php $_from = $this->_tpl_vars['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['fields'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fields']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['f']):
        $this->_foreach['fields']['iteration']++;
?>
					<?php if (( $this->_tpl_vars['k'] != 'title' && $this->_tpl_vars['k'] != 'customers' && $this->_tpl_vars['k'] != 'duration' && $this->_tpl_vars['k'] != 'employees' && $this->_tpl_vars['k'] != 'recurrence_type' && $this->_tpl_vars['k'] != 'recurrence_hash' && $this->_tpl_vars['k'] != 'recurrence_end' && $this->_tpl_vars['k'] != 'date' && $this->_tpl_vars['k'] != 'time' && $this->_tpl_vars['k'] != 'end_time' && $this->_tpl_vars['k'] != 'priority' && $this->_tpl_vars['k'] != 'status' && $this->_tpl_vars['k'] != 'permission' && $this->_tpl_vars['f']['type'] != 'multiselect' )): ?>
						<?php echo $this->_tpl_vars['f']['full_field']; ?>

					<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
                        </tbody>
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
            <?php if ($this->_tpl_vars['action'] == 'add'): ?>
            <tr>
                <td style="width: 50%; vertical-align: top;" colspan=2>
                        <div id="alert" style="padding-top: 5px;">
                            <table name="CRMCalendar" class="form <?php if ($this->_tpl_vars['action'] == 'view'): ?>view<?php else: ?>edit<?php endif; ?>" style="border-left: none;" cellspacing="0" cellpadding="0" border="0">
                                <tbody>
                                    <tr>
                                        <td class="label" align="left" style="width: 30%;"><?php echo $this->_tpl_vars['form_data']['messenger_on']['label']; ?>
*</td>
                                        <td class="data" align="left" style="width: 70%;">
											<div style="position:relative;">
												<span class="error"><?php echo $this->_tpl_vars['form_data']['messenger_on']['error']; ?>
</span><?php echo $this->_tpl_vars['form_data']['messenger_on']['html']; ?>

											</div>
										</td>
	                                </tr>
    	                        </tbody>
        	                </table>
            	            <div id="messenger_block">
                            <table name="CRMCalendar" class="form <?php if ($this->_tpl_vars['action'] == 'view'): ?>view<?php else: ?>edit<?php endif; ?>" style="border-left: none;" cellspacing="0" cellpadding="0" border="0">
                                <tbody>
                                    <tr>
                                        <td class="label" align="left" style="width: 30%;"><?php echo $this->_tpl_vars['form_data']['messenger_before']['label']; ?>
*</td>
                                        <td class="data" align="left" style="width: 70%;">
											<div style="position:relative;">
												<span class="error"><?php echo $this->_tpl_vars['form_data']['messenger_before']['error']; ?>
</span><?php echo $this->_tpl_vars['form_data']['messenger_before']['html']; ?>

											</div>
										</td>
                                    </tr>
                                    <tr>
                                        <td class="label" align="left"><?php echo $this->_tpl_vars['form_data']['messenger_message']['label']; ?>
*</td>
                                        <td class="data smalltext" align="left">
											<div style="position:relative;">
												<span class="error"><?php echo $this->_tpl_vars['form_data']['messenger_message']['error']; ?>
</span><?php echo $this->_tpl_vars['form_data']['messenger_message']['html']; ?>

											</div>
										</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                </td>
			</tr>
			<?php endif; ?>
        </tbody>
    </table>
</div>


<?php 
	eval_js('focus_by_id(\'event_title\');');
 ?>

<!-- SHADOW END-->
 		</div>
	</div>
<!-- -->

</div>