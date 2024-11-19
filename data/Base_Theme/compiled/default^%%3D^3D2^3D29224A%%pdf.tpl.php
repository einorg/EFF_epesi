<?php /* Smarty version 2.6.29, created on 2020-09-17 20:46:20
         compiled from Utils/GenericBrowser/pdf.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_table_epesi', 'Utils/GenericBrowser/pdf.tpl', 5, false),)), $this); ?>
<?php echo $this->_tpl_vars['table_prefix']; ?>


<div class="table">

<?php echo smarty_function_html_table_epesi(array('table_attr' => 'border="1" id="Utils_GenericBrowser" cellspacing="0" cellpadding="0" style="width:100%;"','loop' => $this->_tpl_vars['data'],'cols' => $this->_tpl_vars['cols']), $this);?>


</div>

<?php echo $this->_tpl_vars['table_postfix']; ?>
