<?php /* Smarty version 2.6.29, created on 2020-10-19 10:41:43
         compiled from Utils/RecordBrowser/RecordPrint.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't', 'Utils/RecordBrowser/RecordPrint.tpl', 3, false),array('function', 'math', 'Utils/RecordBrowser/RecordPrint.tpl', 9, false),)), $this); ?>
<h1><?php echo $this->_tpl_vars['caption']; ?>
</h1>
<h3>ID: <?php echo $this->_tpl_vars['record_id']; ?>
</h3>
<?php if ($this->_tpl_vars['no_access']): ?><div style="color:red; font-weight: bold"><?php echo ((is_array($_tmp='Access forbidden')) ? $this->_run_mod_handler('t', true, $_tmp) : Base_ThemeCommon::smarty_modifier_translate($_tmp)); ?>
</div><?php endif; ?>
<?php if (count ( $this->_tpl_vars['data'] )): ?>
<table border="1" cellpadding="3">
    <?php $this->assign('i', 0); ?>
    <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
        <?php if ($this->_tpl_vars['i'] % $this->_tpl_vars['cols'] == 0): ?><tr><?php endif; ?>
        <td style="width: <?php echo smarty_function_math(array('equation' => 'width / cols','width' => 40,'cols' => $this->_tpl_vars['cols']), $this);?>
%; background-color:#DDD;text-align:right; font-weight: bold"><?php echo $this->_tpl_vars['field']['label']; ?>
</td>
        <td style="width: <?php echo smarty_function_math(array('equation' => 'width / cols','width' => 60,'cols' => $this->_tpl_vars['cols']), $this);?>
%"><?php echo $this->_tpl_vars['field']['value']; ?>
</td>
        <?php $this->assign('i', $this->_tpl_vars['i']+1); ?>
        <?php if ($this->_tpl_vars['i'] % $this->_tpl_vars['cols'] == 0): ?></tr><?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
</table>
<?php endif; ?>