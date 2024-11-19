<?php /* Smarty version 2.6.29, created on 2020-11-10 10:58:01
         compiled from Utils/Calendar/agenda.tpl */ ?>
<?php echo $this->_tpl_vars['form_open']; ?>


<table style="width:98%">
	<tr>
		<td>
		</td>
		<td style="width:400px;">
			<table id="Utils_Calendar__agenda" border="0" cellspacing="0" cellpadding="0">
				<tbody>
					<tr>
						<td class="epesi_label"><?php echo $this->_tpl_vars['form_data']['start']['label']; ?>
</td><td class="epesi_data"><?php echo $this->_tpl_vars['form_data']['start']['html']; ?>
</td>
						<td>&nbsp;&nbsp;</td>
						<td class="epesi_label"><?php echo $this->_tpl_vars['form_data']['end']['label']; ?>
</td><td class="epesi_data"><?php echo $this->_tpl_vars['form_data']['end']['html']; ?>
</td>
						<td>&nbsp;&nbsp;</td>
						<td class="child_button"><?php echo $this->_tpl_vars['form_data']['submit_button']['html']; ?>
</td>
					</tr>
				</tbody>
			</table>
		</td>
		<td>
		</td>
		<td class="button_cell">
			<?php echo $this->_tpl_vars['navigation_bar_additions']; ?>

		</td>
	</tr>
</table>

<?php echo $this->_tpl_vars['form_close']; ?>

<br>
<?php echo $this->_tpl_vars['agenda']; ?>
