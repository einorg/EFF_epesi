<?php /* Smarty version 2.6.29, created on 2022-02-24 11:52:54
         compiled from Utils/RecordBrowser/Filters/controls.tpl */ ?>
<div id="Utils_RecordBrowser__Filter">
	<div class="buttons">
		<input type="button" <?php if ($this->_tpl_vars['filter_group']['visible']): ?>style="display: none;"<?php endif; ?> <?php echo $this->_tpl_vars['filter_group']['show']['attrs']; ?>
 value="<?php echo $this->_tpl_vars['filter_group']['show']['label']; ?>
">
		<input type="button" <?php if (! $this->_tpl_vars['filter_group']['visible']): ?>style="display: none;"<?php endif; ?> <?php echo $this->_tpl_vars['filter_group']['hide']['attrs']; ?>
 value="<?php echo $this->_tpl_vars['filter_group']['hide']['label']; ?>
">
	</div>
</div>