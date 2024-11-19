<?php /* Smarty version 2.6.29, created on 2020-10-15 09:20:17
         compiled from Utils/RecordBrowser/new_record_leightbox.tpl */ ?>
<center>
<br>
<table cellspacing="0" cellpadding="0">
	<tr>
<?php $_from = $this->_tpl_vars['custom_defaults']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['cd']):
?>
	        <td>
				<?php echo $this->_tpl_vars['cd']['open']; ?>

				<div class="epesi_big_button">
                    <?php if ($this->_tpl_vars['cd']['icon']): ?>
					<img src="<?php echo $this->_tpl_vars['cd']['icon']; ?>
">
                    <?php endif; ?>
					<span><?php echo $this->_tpl_vars['cd']['label']; ?>
</span>
				</div>
				<?php echo $this->_tpl_vars['cd']['close']; ?>

	        </td>
<?php endforeach; endif; unset($_from); ?>
    </tr>
</table>

</center>

