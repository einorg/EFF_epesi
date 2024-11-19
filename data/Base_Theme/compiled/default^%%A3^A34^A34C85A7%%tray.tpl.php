<?php /* Smarty version 2.6.29, created on 2021-03-23 10:12:45
         compiled from Utils/Tray/tray.tpl */ ?>
<?php if ($this->_tpl_vars['main_page']): ?>
<table class="Utils_Tray__title" border="0" cellpadding="0" cellspacing="0">
	<tbody>
		<tr>
			<td style="width:100px;">
				<div class="name">
					<img alt="&nbsp;" class="icon" src="<?php echo $this->_tpl_vars['icon']; ?>
" width="32" height="32" border="0">
					<div class="label"><?php echo $this->_tpl_vars['caption']; ?>
</div>
				</div>
			</td>
			<td class="required_fav_info">
				
			</td>
		</tr>
	</tbody>
</table>
<br>
<div class="table">
<div class="layer">
<div class="css3_content_shadow">
<div class="margin2px">
<?php endif; ?>
<table class="Utils_Tray__table">
<tbody>
<?php $_from = $this->_tpl_vars['trays']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tray']):
?>
  <?php if ($this->_tpl_vars['tray']['col'] == 1): ?>
  <tr>
  <?php endif; ?>
  <td class="<?php echo $this->_tpl_vars['tray']['class']; ?>
">
      <table class="Utils_Tray__group_table">
        <thead>
          <th colspan="<?php echo $this->_tpl_vars['tray']['slots']; ?>
"><span style="margin-left:5px"><?php echo $this->_tpl_vars['tray']['title']; ?>
</span></th>
        </thead>
        <tbody>
        <tr>
          <td>
            <table id="<?php echo $this->_tpl_vars['tray']['id']; ?>
">
              <tbody>
              <tr>
              </tr>
              </tbody>
           </table>
          </td>
        </tr>
        </tbody>
      </table>
  </td>
  <?php if ($this->_tpl_vars['tray']['col'] == $this->_tpl_vars['tray_cols']): ?>
  </tr>
  <?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
</tbody>
</table>
<?php if ($this->_tpl_vars['main_page']): ?>
</div>
</div>
</div>
</div>
<?php endif; ?>