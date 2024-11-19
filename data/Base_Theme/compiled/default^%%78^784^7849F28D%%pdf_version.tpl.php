<?php /* Smarty version 2.6.29, created on 2020-09-22 13:35:48
         compiled from CRM/Calendar/Event/pdf_version.tpl */ ?>
<table border="1">
	<?php if ($this->_tpl_vars['type'] == 'Day'): ?>
		<tr>
			<td width="50%" bgcolor="#000000">
				<b><font color="#FFFFFF">&nbsp;<?php echo $this->_tpl_vars['title']['value']; ?>
</font></b>
			</td>
			<td width="50%" bgcolor="#000000" align="right">
				<?php if (isset ( $this->_tpl_vars['start_time'] )): ?>
					<b><font color="#FFFFFF">&nbsp;<?php echo $this->_tpl_vars['start_time']['value']; ?>
</font></b>
				<?php else: ?>
					<b><font color="#FFFFFF">&nbsp;<?php echo $this->_tpl_vars['timeless']['label']; ?>
</font></b>
				<?php endif; ?>
			</td>
		</tr>
	<?php else: ?>
		<tr>
			<td width="50%" bgcolor="#000000">
				<b><font color="#FFFFFF">&nbsp;<?php echo $this->_tpl_vars['start_date']['details']['weekday']; ?>
, <?php echo $this->_tpl_vars['start_date']['value']; ?>
</font></b>
			</td>
			<td width="50%" bgcolor="#000000" valign="bottom" align="right">
				<?php if (isset ( $this->_tpl_vars['start_time'] )): ?>
					<b><font color="#FFFFFF">&nbsp;<?php echo $this->_tpl_vars['start_time']['value']; ?>
</font></b>
				<?php else: ?>
					<b><font color="#FFFFFF">&nbsp;<?php echo $this->_tpl_vars['timeless']['label']; ?>
</font></b>
				<?php endif; ?>
			</td>
		</tr>
	<?php endif; ?>
</table>
<?php if ($this->_tpl_vars['type'] != 'Day'): ?>
	<table border="1">
		<tr>
			<td width="20%" height="10" bgcolor="#C0C0C0">
				<b>&nbsp;<?php echo $this->_tpl_vars['title']['label']; ?>
</b>
			</td>
			<td width="80%" height="10" align="left">
				<b>&nbsp;<?php echo $this->_tpl_vars['title']['value']; ?>
</b>
			</td>
		</tr>
	</table>
<?php endif; ?>
<?php if (isset ( $this->_tpl_vars['start_time'] )): ?>
	<table border="1">
		<tr>
			<td width="20%" height="10" bgcolor="#C0C0C0">
				<b>&nbsp;<?php echo $this->_tpl_vars['start_time']['label']; ?>
</b>
			</td>
			<td width="30%" height="10" align="left">
				<b>&nbsp;<?php echo $this->_tpl_vars['start_time']['value']; ?>

				<?php if (isset ( $this->_tpl_vars['end_time'] )): ?>
					 - <?php echo $this->_tpl_vars['end_time']['value']; ?>

				<?php endif; ?>
				</b>
			</td>
			<td width="20%" height="10" bgcolor="#C0C0C0">
				<b>&nbsp;<?php echo $this->_tpl_vars['duration']['label']; ?>
</b>
			</td>
			<td width="30%" height="10" align="left">
				<b>&nbsp;<?php echo $this->_tpl_vars['duration']['value']; ?>
</b>
			</td>
		</tr>
	</table>
<?php endif; ?>
<?php if ($this->_tpl_vars['description']['value']): ?>
	<table border="1">
		<tr>
			<td width="100%">
				<font size="-1">
					&nbsp;<?php echo $this->_tpl_vars['description']['value']; ?>

				</font>
			</td>
		</tr>
	</table>
<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['employees']['data'] )): ?>
<table border="1">
	<tr>
		<td width="100%">
			<font size="-1">
				&nbsp;<b><?php echo $this->_tpl_vars['employees']['main_label']; ?>
: </b>
				<?php $this->assign('dot', ''); ?>
				<?php $_from = $this->_tpl_vars['employees']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['e']):
?>
					<?php echo $this->_tpl_vars['dot']; ?>
<?php echo $this->_tpl_vars['e']['name']; ?>

					<?php $this->assign('dot', ', '); ?>
				<?php endforeach; endif; unset($_from); ?>
			</font>
		</td>
	</tr>
</table>
<?php endif; ?>	
<?php if (! empty ( $this->_tpl_vars['customers']['data'] )): ?>
		<table border="1">
		<tr>
			<td width="25%" height="10" bgcolor="#C0C0C0">
				&nbsp;<b><?php echo $this->_tpl_vars['customers']['name_label']; ?>
</b>
			</td>
			<td width="35%" height="10" bgcolor="#C0C0C0">
				&nbsp;<b><?php echo $this->_tpl_vars['customers']['company_name']; ?>
</b>
			</td>
			<td width="20%" height="10" bgcolor="#C0C0C0">
				&nbsp;<b><?php echo $this->_tpl_vars['customers']['mphone_label']; ?>
</b>
			</td>
			<td width="20%" height="10" bgcolor="#C0C0C0">
				&nbsp;<b><?php echo $this->_tpl_vars['customers']['wphone_label']; ?>
</b>
			</td>
		</tr>
		<?php $this->assign('count', 0); ?>
		<?php $_from = $this->_tpl_vars['customers']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['c']):
?>
			<?php $this->assign('count', $this->_tpl_vars['count']+1); ?>
			<tr>
				<td width="25%" <?php if ($this->_tpl_vars['count']%2 == 0): ?>bgcolor="#F7F7F7"<?php endif; ?>>
					&nbsp;<font size="-1"><?php echo $this->_tpl_vars['c']['name']; ?>
</font>
				</td>
				<td width="35%" <?php if ($this->_tpl_vars['count']%2 == 0): ?>bgcolor="#F7F7F7"<?php endif; ?>>
					<font size="-1">
						<?php $this->assign('break', ''); ?>
						<?php $_from = $this->_tpl_vars['c']['company_name']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cmp']):
?>
							<?php echo $this->_tpl_vars['break']; ?>
&nbsp;<?php echo $this->_tpl_vars['cmp']; ?>

							<?php $this->assign('break', '<br/>'); ?>
						<?php endforeach; endif; unset($_from); ?>
					</font>
				</td>
				<td width="20%" <?php if ($this->_tpl_vars['count']%2 == 0): ?>bgcolor="#F7F7F7"<?php endif; ?>>
					&nbsp;<font size="-1"><?php echo $this->_tpl_vars['c']['mphone']; ?>
</font>
				</td>
				<td width="20%" <?php if ($this->_tpl_vars['count']%2 == 0): ?>bgcolor="#F7F7F7"<?php endif; ?>>
					&nbsp;<font size="-1"><?php echo $this->_tpl_vars['c']['wphone']; ?>
</font>
				</td>
			</tr>
		<?php endforeach; endif; unset($_from); ?>
	</table>
<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['customers_companies']['data'] )): ?>
	<table border="1">
		<tr>
			<td width="30%" height="10" bgcolor="#C0C0C0">
				&nbsp;<b><?php echo $this->_tpl_vars['customers_companies']['name_label']; ?>
</b>
			</td>
			<td width="50%" height="10" bgcolor="#C0C0C0">
				&nbsp;<b><?php echo $this->_tpl_vars['customers_companies']['address_label']; ?>
</b>
			</td>
			<td width="20%" height="10" bgcolor="#C0C0C0">
				&nbsp;<b><?php echo $this->_tpl_vars['customers_companies']['phone_label']; ?>
</b>
			</td>
		</tr>
		<?php $this->assign('count', 0); ?>
		<?php $_from = $this->_tpl_vars['customers_companies']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['c']):
?>
			<?php $this->assign('count', $this->_tpl_vars['count']+1); ?>
			<?php 
				$this->_tpl_vars['address'] = '';
				$tmp = '';
				foreach (array('address_1','address_2','city','zone','postal_code') as $v)
					if (isset($this->_tpl_vars['c'][$v]) && $this->_tpl_vars['c'][$v]!='') {
						$this->_tpl_vars['address'] .= $tmp.$this->_tpl_vars['c'][$v];
						$tmp = ', ';
					}
			 ?>
			<tr>
				<td width="30%" <?php if ($this->_tpl_vars['count']%2 == 0): ?>bgcolor="#F7F7F7"<?php endif; ?>>
					<font size="-1">&nbsp;<?php echo $this->_tpl_vars['c']['company_name']; ?>
</font>
				</td>
				<td width="50%" <?php if ($this->_tpl_vars['count']%2 == 0): ?>bgcolor="#F7F7F7"<?php endif; ?>>
					<font size="-1">&nbsp;<?php echo $this->_tpl_vars['address']; ?>
</font>
				</td>
				<td width="20%" <?php if ($this->_tpl_vars['count']%2 == 0): ?>bgcolor="#F7F7F7"<?php endif; ?>>
					<font size="-1">&nbsp;<?php echo $this->_tpl_vars['c']['phone']; ?>
</font>
				</td>
			</tr>
		<?php endforeach; endif; unset($_from); ?>
	</table>
<?php endif; ?>
<?php if (isset ( $this->_tpl_vars['created_by'] )): ?>
	<font size="-1">
		<table border="1">
			<tr>
				<td width="20%" height="9" bgcolor="#C0C0C0">
					&nbsp;<b><?php echo $this->_tpl_vars['created_by']['label']; ?>
</b>
				</td>
				<td width="30%" height="9" align="left">
					&nbsp;<?php echo $this->_tpl_vars['created_by']['value']; ?>

				</td>
				<td width="20%" height="9" bgcolor="#C0C0C0">
					&nbsp;<b><?php echo $this->_tpl_vars['status']['label']; ?>
</b>
				</td>
				<td width="30%" height="9" align="left">
					&nbsp;<?php echo $this->_tpl_vars['status']['value']; ?>

				</td>
			</tr>
			<tr>
				<td width="20%" height="9" bgcolor="#C0C0C0">
					&nbsp;<b><?php echo $this->_tpl_vars['created_on']['label']; ?>
</b>
				</td>
				<td width="30%" height="9" align="left">
					&nbsp;<?php echo $this->_tpl_vars['created_on']['value']; ?>

				</td>
				<td width="20%" height="9" bgcolor="#C0C0C0">
					&nbsp;<b><?php echo $this->_tpl_vars['priority']['label']; ?>
</b>
				</td>
				<td width="30%" height="9" align="left">
					&nbsp;<?php echo $this->_tpl_vars['priority']['value']; ?>

				</td>
			</tr>
			<tr>
				<td width="20%" height="9" bgcolor="#C0C0C0">
					&nbsp;<b><?php echo $this->_tpl_vars['edited_by']['label']; ?>
</b>
				</td>
				<td width="30%" height="9" align="left">
					&nbsp;<?php echo $this->_tpl_vars['edited_by']['value']; ?>
 
				</td>
				<td width="20%" height="9" bgcolor="#C0C0C0">
					&nbsp;<b><?php echo $this->_tpl_vars['access']['label']; ?>
</b>
				</td>
				<td width="30%" height="9" align="left">
					&nbsp;<?php echo $this->_tpl_vars['access']['value']; ?>

				</td>
			</tr>
			<tr>
				<td width="20%" height="9" bgcolor="#C0C0C0">
					&nbsp;<b><?php echo $this->_tpl_vars['edited_on']['label']; ?>
</b>
				</td>
				<td width="30%" height="9" align="left">
					&nbsp;<?php echo $this->_tpl_vars['edited_on']['value']; ?>

				</td>
				<td width="20%" height="9" bgcolor="#C0C0C0">
					&nbsp;<b><?php echo $this->_tpl_vars['printed_on']['label']; ?>
</b>
				</td>
				<td width="30%" height="9" align="left">
					&nbsp;<?php echo $this->_tpl_vars['printed_on']['value']; ?>

				</td>
			</tr>
		</table>
	</font>
<?php endif; ?>