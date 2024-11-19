<?php /* Smarty version 2.6.29, created on 2020-09-11 13:37:02
         compiled from Utils/Calendar/event_tip.tpl */ ?>
<?php if (isset ( $this->_tpl_vars['custom_tooltip'] )): ?>
<table id="Utils_Calendar__event_tip" border="0">
    <tbody>
	<tr>
            <td colspan="2"><?php echo $this->_tpl_vars['custom_tooltip']; ?>
</td>
	</tr>
    <tr>
            <td class="info" colspan="2"><?php echo $this->_tpl_vars['show_hide_info']; ?>
</td>
    </tr>
	</tbody>
</table>
<?php else: ?>
<table id="Utils_Calendar__event_tip" border="0">
    <tbody>
	<tr>
            <td class="title" colspan="2"><?php echo $this->_tpl_vars['title']; ?>
</td>
        </tr>
	<tr>
	   <td colspan="2"><?php echo $this->_tpl_vars['description']; ?>
</td>
        </tr>
        <tr>
            <td class="label">Start</td><td class="data"><?php echo $this->_tpl_vars['start']; ?>
</td>
        </tr>
        <tr>
            <td class="label">End</td><td class="data"><?php echo $this->_tpl_vars['end']; ?>
</td>
        </tr>
<?php if ($this->_tpl_vars['duration']): ?>
         <tr>
            <td class="label">Duration</td><td class="data"><?php echo $this->_tpl_vars['duration']; ?>
</td>
        </tr>
<?php endif; ?>
	<tr>
	   <td colspan="2"><?php echo $this->_tpl_vars['additional_info']; ?>
</td>
        </tr>
        <tr>
            <td colspan="2"><?php echo $this->_tpl_vars['additional_info2']; ?>
</td>
        </tr>
        <tr>
            <td class="info" colspan="2"><?php echo $this->_tpl_vars['show_hide_info']; ?>
</td>
        </tr>
    </tbody>
</table>
<?php endif; ?>