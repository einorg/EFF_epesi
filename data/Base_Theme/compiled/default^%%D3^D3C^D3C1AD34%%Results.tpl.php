<?php /* Smarty version 2.6.29, created on 2020-09-18 09:54:38
         compiled from Base/Search/Results.tpl */ ?>
<?php if (isset ( $this->_tpl_vars['links'] )): ?>
<table id="Base_Search__Results" cellspacing="0" cellpadding="0" border="0">
	<tr>
		<td class="header"><?php echo $this->_tpl_vars['header']; ?>
</td>
	</tr>
	<?php if (isset ( $this->_tpl_vars['warning'] )): ?>
		<tr>
			<td class="warning"><?php echo $this->_tpl_vars['warning']; ?>
</td>
		</tr>
	<?php endif; ?>
	<?php $_from = $this->_tpl_vars['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['link']):
?>
	<tr>
		<td class="link"><?php echo $this->_tpl_vars['link']; ?>
</td>
		<!-- $key holds name of the module -->
	</tr>
	<?php endforeach; endif; unset($_from); ?>
</table>
<?php endif; ?>