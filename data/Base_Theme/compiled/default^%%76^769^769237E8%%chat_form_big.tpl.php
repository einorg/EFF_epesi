<?php /* Smarty version 2.6.29, created on 2018-10-26 10:10:33
         compiled from Apps/Shoutbox/chat_form_big.tpl */ ?>
</center>
<div class="epesi_caption">
	<?php echo $this->_tpl_vars['header']; ?>

</div>
<center>
<div id="shoutbox_big_container">
<?php echo $this->_tpl_vars['form_open']; ?>

<table border="0" width="100%">
    <tr>
        <td rowspan="2" class="epesi_label" style="width:80px;"><?php echo $this->_tpl_vars['form_data']['post']['label']; ?>
</td>
        <td rowspan="2" class="epesi_data" style="width:50%"><?php echo $this->_tpl_vars['form_data']['post']['html']; ?>
</td>
		<td rowspan="2" style="width:10px;"></td>
        <td class="epesi_label" style="width:25px;"><?php echo $this->_tpl_vars['form_data']['shoutbox_to']['label']; ?>
</td>
        <td class="epesi_data" style="width:20%;"><?php echo $this->_tpl_vars['form_data']['shoutbox_to']['html']; ?>
</td>
    </tr>
    <tr>
        <td colspan="2" class="child_button" style="text-align: center;"><?php echo $this->_tpl_vars['form_data']['submit_button']['html']; ?>
</td>
    </tr>
</table>
<?php echo $this->_tpl_vars['form_close']; ?>

<?php echo $this->_tpl_vars['board']; ?>

</div>