<?php /* Smarty version 2.6.29, created on 2022-05-25 12:44:22
         compiled from Eff/Contracts/RecordPrint.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't', 'Eff/Contracts/RecordPrint.tpl', 23, false),)), $this); ?>
<table border="0" cellpadding="3">
  <tr>
    <td style="width:50%;text-align:left;"><?php echo $this->_tpl_vars['salutation']; ?>
</td>
    <td style="width:50%;text-align:right;"><?php echo $this->_tpl_vars['data_wyceny']; ?>
</td>
  </tr>
</table>
  <table border="0" cellpadding="3">
  <tr>
    <td style="width:10px;"></td><td style="width:100%;text-align:left;"><?php echo $this->_tpl_vars['customer_name']; ?>
</td>
  </tr>
  <tr>
    <td style="width:10px;"></td><td style="width:100%;text-align:left;"><?php echo $this->_tpl_vars['customer_company']; ?>
 <?php echo $this->_tpl_vars['customer_locality']; ?>
</td>
  </tr>
  <tr><td style="width:100%;text-align:left;">&nbsp;</td></tr>
</table>
</table>
<table border="0" cellpadding="3">
  <tr><td style="width:100%;text-align:center;"><?php echo $this->_tpl_vars['header1']; ?>
</td></tr>
  <tr><td style="width:100%;text-align:center;"><?php echo $this->_tpl_vars['header2']; ?>
</td></tr>
  <tr><td style="width:100%;text-align:left;"><?php echo $this->_tpl_vars['header3']; ?>
</td></tr>
  <tr><td style="width:100%;text-align:left;">&nbsp;</td></tr>
</table>
<?php if ($this->_tpl_vars['no_access']): ?><div style="color:red; font-weight: bold"><?php echo ((is_array($_tmp='Access forbidden')) ? $this->_run_mod_handler('t', true, $_tmp) : Base_ThemeCommon::smarty_modifier_translate($_tmp)); ?>
</div><?php endif; ?>
<?php if (count ( $this->_tpl_vars['constructions'] )): ?>
<table border="0.1" cellpadding="3" >
    <tr>
      <td style="width:30px; text-align:center;font-weight: bold;"><?php echo $this->_tpl_vars['lp']; ?>
</td>
      <td style="width:400px;text-align:center;font-weight: bold;"><?php echo $this->_tpl_vars['item']; ?>
</td>
      <td style="width:70px; text-align:center;font-weight: bold;"><?php echo $this->_tpl_vars['jm']; ?>
</td>
      <td style="width:60px; text-align:center;font-weight: bold;"><?php echo $this->_tpl_vars['qty']; ?>
</td>
      <td style="width:80px; text-align:center;font-weight: bold;"><?php echo $this->_tpl_vars['price']; ?>
</td>
    </tr>
  <?php $_from = $this->_tpl_vars['constructions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
    <tr>
      <td style="text-align:right;"><?php echo $this->_tpl_vars['field']['lp']; ?>
</td>
      <td><?php echo $this->_tpl_vars['field']['item']; ?>
</td>
      <td style="text-align:center;"><?php echo $this->_tpl_vars['field']['jm']; ?>
</td>
      <td style="text-align:right;"><?php echo $this->_tpl_vars['field']['qty']; ?>
</td>
      <td style="text-align:center;"><?php echo $this->_tpl_vars['field']['price']; ?>
</td>
    </tr>
  <?php endforeach; endif; unset($_from); ?>
</table>
<?php endif; ?>

<?php if ($this->_tpl_vars['print_summary'] != ''): ?>
<table border="none" cellpadding="3" style="">
    <tr>
      <td style="width:6400px;text-align:center;font-weight: bold;"> </td>
    </tr>
</table>
<table border="0.1" cellpadding="2" style="">
    <tr>
      <td style="width:500px; text-align:right;font-weight: bold;"><?php echo $this->_tpl_vars['summary_title']; ?>
</td>
      <td style="width:60px; text-align:right;font-weight: normal;"><?php echo $this->_tpl_vars['summary_qty']; ?>
</td>
      <td style="width:80px; text-align:right;font-weight: normal;"><?php echo $this->_tpl_vars['summary_price']; ?>
</td>
    </tr>
</table>
<?php endif; ?>
<table border="0" cellpadding="3">
  <?php if ($this->_tpl_vars['transport'] != ''): ?>
  <tr><td style="width:100%;text-align:left;">&nbsp;</td></tr>
  <tr>
    <td style="width:100%;text-align:left;"><?php echo $this->_tpl_vars['transport']; ?>
</td>
  </tr>
  <?php endif; ?>
  <tr><td style="width:100%;text-align:left;">&nbsp;</td></tr>
  <tr>
    <td style="width:100%;text-align:left;font-weight: bold;"><?php echo $this->_tpl_vars['conditions']; ?>
</td>
  </tr>
</table>
    
<?php if (count ( $this->_tpl_vars['condition_list'] )): ?>
<table border="0" cellpadding="3" >
    <?php $_from = $this->_tpl_vars['condition_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
        <tr>
          <td style="width:30px;text-align:right;font-weight: bold;font-size:smaller;"><?php echo $this->_tpl_vars['field']['label']; ?>
</td><?php echo $this->_tpl_vars['field']['value']; ?>

        </tr>
    <?php endforeach; endif; unset($_from); ?>
</table>
<?php endif; ?>

<br />
<br />
<table border="0" cellpadding="3" >
  <tr>
    <td style="width:50px;">&nbsp;</td>
    <td style="width:300px;text-align:left;"><?php echo $this->_tpl_vars['footer_title']; ?>
</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td style="text-align:left;"><?php echo $this->_tpl_vars['footer_name']; ?>
</td>
  </tr>
  <?php if ($this->_tpl_vars['footer_tel'] <> ""): ?>
  <tr>
    <td>&nbsp;</td>
    <td style="text-align:left;"><?php echo $this->_tpl_vars['footer_tel']; ?>
</td>
  </tr>
  <?php endif; ?>
  <tr>
    <td>&nbsp;</td>
    <td style="text-align:left;"><?php echo $this->_tpl_vars['footer_mail']; ?>
</td>
  </tr>
</table>