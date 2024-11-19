<?php /* Smarty version 2.6.29, created on 2022-02-25 08:58:42
         compiled from Libs/QuickForm/row.tpl */ ?>
<div style="text-align:left;padding-left:6px;">
<?php echo $this->_tpl_vars['form_open']; ?>


<?php $_from = $this->_tpl_vars['form_data']['header']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['h']):
?>
	<div class="epesi_label header" style="width:700px;">
		<?php echo $this->_tpl_vars['h']; ?>

	</div>
<?php endforeach; endif; unset($_from); ?>
<div style="margin:5px; line-height: 200%">
		<?php $_from = $this->_tpl_vars['form_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['f']):
?>
		<?php if (is_array ( $this->_tpl_vars['f'] ) && isset ( $this->_tpl_vars['f']['type'] ) && isset ( $this->_tpl_vars['f']['html'] ) && isset ( $this->_tpl_vars['f']['label'] ) && $this->_tpl_vars['f']['type'] != 'hidden' && $this->_tpl_vars['f']['type'] != 'button' && $this->_tpl_vars['f']['type'] != 'submit'): ?>
            <div style="display: inline-block; white-space: nowrap;">
			<span style="display: table-cell;  width:10px" class="epesi_label">
				<?php echo $this->_tpl_vars['f']['label']; ?>
<?php if ($this->_tpl_vars['f']['required']): ?>*<?php endif; ?>
			</span>
			<span style="display: table-cell; width: auto;" class="epesi_data<?php if ($this->_tpl_vars['f']['frozen']): ?> static_field<?php endif; ?>">
					<?php echo $this->_tpl_vars['f']['error']; ?>

					<?php echo $this->_tpl_vars['f']['html']; ?>

			</span>
            </div>
		<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
			<?php $_from = $this->_tpl_vars['form_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['f']):
?>
				<?php if (is_array ( $this->_tpl_vars['f'] ) && isset ( $this->_tpl_vars['f']['type'] ) && ( $this->_tpl_vars['f']['type'] == 'button' || $this->_tpl_vars['f']['type'] == 'submit' )): ?>
                    <div style="display: inline-block; white-space: nowrap">
                        <div class="child_button" style="display: table-cell">
					<?php echo $this->_tpl_vars['f']['html']; ?>

                        </div>
                    </div>
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
</div>


<?php echo $this->_tpl_vars['form_close']; ?>

</div>