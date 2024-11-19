<?php /* Smarty version 2.6.29, created on 2022-02-24 11:52:45
         compiled from Applets/MonthView/year.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'Applets/MonthView/year.tpl', 15, false),)), $this); ?>
<center>
<div class="month-applet-menu">
		<table border="0" class="month-applet-menu">
			<tr>
				<td><a class="button" <?php echo $this->_tpl_vars['prevyear_href']; ?>
><img src="<?php echo $this->_tpl_vars['theme_dir']; ?>
/Utils/Calendar/prev.png"></a></td>
				<td><a class="button" <?php echo $this->_tpl_vars['today_href']; ?>
><img src="<?php echo $this->_tpl_vars['theme_dir']; ?>
/Utils/Calendar/this.png"></a></td>
				<td><a class="button" <?php echo $this->_tpl_vars['nextyear_href']; ?>
><img src="<?php echo $this->_tpl_vars['theme_dir']; ?>
/Utils/Calendar/next.png"></a></td>
				<td class="select_date_dashboard"><?php echo $this->_tpl_vars['popup_calendar']; ?>
</td>
				<!-- <td style="width: 10px;"></td>
				<td><a class="button" style="width: 80px;"><img border="0" width="20" height="20" src="<?php echo $this->_tpl_vars['theme_dir']; ?>
/Utils/Calendar/4x3.png" style="vertical-align: middle; padding: 0px; margin-left: 10px; display: block; float: left; width: 20px; height: 20px;">4 x 3</a></td> -->
			</tr>
		</table>
</div>

<?php echo smarty_function_math(array('assign' => 'col','equation' => 'x','x' => 3), $this);?>


<table border="0" cellpadding="0" cellspacing="5" style="background-color: #FFFFFF;">

<?php $_from = $this->_tpl_vars['year']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['month']):
?>
	<?php if ($this->_tpl_vars['col'] % 3 == 0): ?><tr><?php endif; ?>
		<td style="vertical-align: top">
            <table name="CRMCalendar" id="Utils_Calendar__year" cellpadding="0" cellspacing="0" border="0">
            	<tr>
            		<td class="header-month" colspan="8"><a <?php echo $this->_tpl_vars['month']['month_link']; ?>
><?php echo $this->_tpl_vars['month']['month_label']; ?>
 &bull; <?php echo $this->_tpl_vars['month']['year_label']; ?>
</a></td>
            	</tr>
            	<tr>
            		<td class="week-number">&nbsp;</td>
            		<?php $_from = $this->_tpl_vars['day_headers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['header']):
?>
            			<td class="header"><?php echo $this->_tpl_vars['header']; ?>
</td>
            		<?php endforeach; endif; unset($_from); ?>
            	</tr>
            	<?php $_from = $this->_tpl_vars['month']['month']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['week']):
?>
            		<tr>
            			<td class="week-number"><a <?php echo $this->_tpl_vars['week']['week_link']; ?>
><?php echo $this->_tpl_vars['week']['week_label']; ?>
</a></td>
            			<?php $_from = $this->_tpl_vars['week']['days']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['day']):
?>
            				<td class="day <?php echo $this->_tpl_vars['day']['style']; ?>
"><a <?php echo $this->_tpl_vars['day']['day_link']; ?>
><?php echo $this->_tpl_vars['day']['day']; ?>
</a></td>
            			<?php endforeach; endif; unset($_from); ?>
            		</tr>
            	<?php endforeach; endif; unset($_from); ?>
            </table>
		</td>
	<?php if ($this->_tpl_vars['col'] % 3 == 3): ?></tr><?php endif; ?>

    <?php echo smarty_function_math(array('assign' => 'col','equation' => "x+1",'x' => $this->_tpl_vars['col']), $this);?>


<?php endforeach; endif; unset($_from); ?>

</table>
	</center>