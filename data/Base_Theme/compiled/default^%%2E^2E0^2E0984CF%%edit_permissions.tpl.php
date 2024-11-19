<?php /* Smarty version 2.6.29, created on 2022-02-25 09:46:54
         compiled from Utils/RecordBrowser/edit_permissions.tpl */ ?>
<?php echo $this->_tpl_vars['form_open']; ?>


<div style="width:98%; text-align:left;" class="epesi_grey_board RecordBrowser__edit_permissions">
	<div class="epesi_caption">
		<?php echo $this->_tpl_vars['labels']['caption']; ?>

	</div>
	
	<table>
		<tr>
			<td class="epesi_label" style="width:20%;">
				<?php echo $this->_tpl_vars['form_data']['action']['label']; ?>

			</td>
			<td class="epesi_data" style="width:80%;">
				<?php echo $this->_tpl_vars['form_data']['action']['html']; ?>

			</td>
		</tr>
		<tr>
			<td class="epesi_label">
				<?php echo $this->_tpl_vars['labels']['clearance']; ?>

			</td>
			<td class="epesi_data static_field">
				<?php unset($this->_sections['it']);
$this->_sections['it']['name'] = 'it';
$this->_sections['it']['loop'] = is_array($_loop=$this->_tpl_vars['counts']['clearance']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['it']['show'] = true;
$this->_sections['it']['max'] = $this->_sections['it']['loop'];
$this->_sections['it']['step'] = 1;
$this->_sections['it']['start'] = $this->_sections['it']['step'] > 0 ? 0 : $this->_sections['it']['loop']-1;
if ($this->_sections['it']['show']) {
    $this->_sections['it']['total'] = $this->_sections['it']['loop'];
    if ($this->_sections['it']['total'] == 0)
        $this->_sections['it']['show'] = false;
} else
    $this->_sections['it']['total'] = 0;
if ($this->_sections['it']['show']):

            for ($this->_sections['it']['index'] = $this->_sections['it']['start'], $this->_sections['it']['iteration'] = 1;
                 $this->_sections['it']['iteration'] <= $this->_sections['it']['total'];
                 $this->_sections['it']['index'] += $this->_sections['it']['step'], $this->_sections['it']['iteration']++):
$this->_sections['it']['rownum'] = $this->_sections['it']['iteration'];
$this->_sections['it']['index_prev'] = $this->_sections['it']['index'] - $this->_sections['it']['step'];
$this->_sections['it']['index_next'] = $this->_sections['it']['index'] + $this->_sections['it']['step'];
$this->_sections['it']['first']      = ($this->_sections['it']['iteration'] == 1);
$this->_sections['it']['last']       = ($this->_sections['it']['iteration'] == $this->_sections['it']['total']);
?> 
					<?php $this->assign('i', $this->_sections['it']['iteration']-1); ?> 
					<?php $this->assign('j', "clearance_".($this->_tpl_vars['i'])); ?> 
					<span id="div_<?php echo $this->_tpl_vars['j']; ?>
">
						<?php if ($this->_tpl_vars['i'] != 0): ?>
							<?php echo $this->_tpl_vars['labels']['and']; ?>

						<?php endif; ?>
						<?php echo $this->_tpl_vars['form_data'][$this->_tpl_vars['j']]['html']; ?>

					</span>
				<?php endfor; endif; ?>
				<div id="add_clearance" style="display: inline-block;" class="button" onclick="utils_recordbrowser__add_clearance();"><?php echo $this->_tpl_vars['labels']['add_clearance']; ?>
</div>
			</td>
		</tr>
		<tr>
			<td class="epesi_label">
				<?php echo $this->_tpl_vars['labels']['crits']; ?>

			</td>
			<td class="epesi_data static_field" style="padding: 1em;">
				<?php echo $this->_tpl_vars['form_data']['qb_crits']['error']; ?>

				<?php echo $this->_tpl_vars['form_data']['qb_crits']['html']; ?>

			</td>
		</tr>
		<tr>
			<td class="epesi_label">
				<?php echo $this->_tpl_vars['labels']['fields']; ?>

			</td>
			<td class="epesi_data field_permissions">
				<?php echo $this->_tpl_vars['form_data']['blocked_fields']['html']; ?>

			</td>
		</tr>
	</table>

</div>

<?php echo $this->_tpl_vars['form_close']; ?>
