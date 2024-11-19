<?php /* Smarty version 2.6.29, created on 2020-09-11 13:36:51
         compiled from Utils/RecordBrowser/changes_list.tpl */ ?>
<table class="Utils_RB__changelist" cellspacing="0" style="table-layout: fixed;">
	<?php if (isset ( $this->_tpl_vars['header'] )): ?>
		<tr class="header">
			<th>
				<?php echo $this->_tpl_vars['header']['0']; ?>

			</th>
			<th>
				<?php echo $this->_tpl_vars['header']['1']; ?>

			</th>
			<th>
				<?php echo $this->_tpl_vars['header']['2']; ?>

			</th>
		</tr>
	<?php endif; ?>
	<?php $_from = $this->_tpl_vars['events']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['e']):
?>
		<?php if (is_string ( $this->_tpl_vars['e']['what'] )): ?>
			<?php if (isset ( $this->_tpl_vars['e']['who'] )): ?>
			<tr>
			<?php else: ?>
			<tr class="last_row">
			<?php endif; ?>
				<td colspan="3" class="message">
					<?php echo $this->_tpl_vars['e']['what']; ?>

				</td>
            </tr>
		<?php else: ?>
			<?php $_from = $this->_tpl_vars['e']['what']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['r']):
?>
				<?php if (isset ( $this->_tpl_vars['e']['who'] )): ?>
				<tr>
				<?php else: ?>
				<tr class="last_row">
				<?php endif; ?>
					<td class="field">
						<?php echo $this->_tpl_vars['r']['0']; ?>

					</td>
					<td class="data">
						<?php echo $this->_tpl_vars['r']['1']; ?>

					</td>
					<td class="data">
						<?php echo $this->_tpl_vars['r']['2']; ?>

					</td>
				</tr>
			<?php endforeach; endif; unset($_from); ?>
		<?php endif; ?>
		<?php if (isset ( $this->_tpl_vars['e']['who'] )): ?>
			<tr class="last_row">
				<td colspan="2" class="user">
					<?php echo $this->_tpl_vars['e']['who']; ?>

				</td>
				<td class="timestamp">
					<?php echo $this->_tpl_vars['e']['when']; ?>

				</td>
			</tr>
		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
</table>