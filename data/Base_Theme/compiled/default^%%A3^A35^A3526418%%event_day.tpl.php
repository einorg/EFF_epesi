<?php /* Smarty version 2.6.29, created on 2020-09-14 11:37:33
         compiled from Utils/Calendar/event_day.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'Utils/Calendar/event_day.tpl', 7, false),array('modifier', 'truncate', 'Utils/Calendar/event_day.tpl', 69, false),)), $this); ?>
<?php 
	load_js('modules/Utils/Calendar/theme/event_.js');
 ?>

<span class="event_menu" id="event_menu_<?php echo $this->_tpl_vars['event_id']; ?>
" style="display:none;z-index:999;position:absolute;">
	<!-- SHADIW BEGIN -->
	<?php $this->assign('x', count($this->_tpl_vars['custom_actions'])); ?>
	<?php $this->assign('x', $this->_tpl_vars['x']*20); ?>
	<?php $this->assign('x', $this->_tpl_vars['x']+100); ?>
	<div class="layer" style="padding: 10px; width: <?php echo $this->_tpl_vars['x']; ?>
px;">
		<div class="content_shadow">
	<!-- -->

		<span class="event_menu_content" style="display: block;height: 20px;background-color: #e6ecf2;padding-left: 5px;padding-right: 3px;">
			<span id="Utils_Calendar__event_day_images">
				<?php if (isset ( $this->_tpl_vars['view_href'] )): ?>
					<a <?php echo $this->_tpl_vars['view_href']; ?>
><img border="0" src="<?php echo $this->_tpl_vars['theme_dir']; ?>
/Utils/Calendar/view.png"></a>
				<?php endif; ?>
				<?php if (isset ( $this->_tpl_vars['edit_href'] )): ?>
					<a <?php echo $this->_tpl_vars['edit_href']; ?>
><img border="0" src="<?php echo $this->_tpl_vars['theme_dir']; ?>
/Utils/Calendar/edit.png"></a>
				<?php endif; ?>
				<?php if (isset ( $this->_tpl_vars['delete_href'] )): ?>
					<a <?php echo $this->_tpl_vars['delete_href']; ?>
><img border="0" src="<?php echo $this->_tpl_vars['theme_dir']; ?>
/Utils/Calendar/delete.png"></a>
				<?php endif; ?>
				<?php if (isset ( $this->_tpl_vars['move_href'] )): ?>
					<a <?php echo $this->_tpl_vars['move_href']; ?>
><img border="0" src="<?php echo $this->_tpl_vars['theme_dir']; ?>
/Utils/Calendar/move.png"></a>
				<?php endif; ?>
				<?php $_from = $this->_tpl_vars['custom_actions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['action']):
?>
					<a <?php echo $this->_tpl_vars['action']['href']; ?>
><img border="0" src="<?php echo $this->_tpl_vars['action']['icon']; ?>
"></a>
				<?php endforeach; endif; unset($_from); ?>
			</span>
		</span>

	<!-- SHADOW END -->
	</div>
	<div class="shadow-top">
		<div class="left"></div>
		<div class="center"></div>
		<div class="right"></div>
	</div>
	<div class="shadow-middle">
		<div class="left"></div>
		<div class="right"></div>
	</div>
	<div class="shadow-bottom">
		<div class="left"></div>
		<div class="center"></div>
		<div class="right"></div>
	</div>
	</div>
	<!-- -->
</span>

<?php if ($this->_tpl_vars['with_div']): ?>
<div id="utils_calendar_event:<?php echo $this->_tpl_vars['event_id']; ?>
" style="display:none;" class="utils_calendar_event" onmouseover="this.oldZIndex=this.style.zIndex;this.style.zIndex=80;" onmouseout="this.style.zIndex=this.oldZIndex;">
<?php endif; ?>
	<span id="Utils_Calendar__event_day" class="event_<?php echo $this->_tpl_vars['color']; ?>
">
		<div class="row">
		<span id="event_info" <?php if ($this->_tpl_vars['draggable']): ?>class="<?php echo $this->_tpl_vars['handle_class']; ?>
"<?php endif; ?>>
<?php if (! IPHONE): ?>	    
        	        <img <?php echo $this->_tpl_vars['tip_tag_attrs']; ?>
 src="<?php echo $this->_tpl_vars['theme_dir']; ?>
/Utils/Calendar/info.png" onClick="event_menu('<?php echo $this->_tpl_vars['event_id']; ?>
')" width="11" height="11" border="0">
<?php else: ?>
	                <img <?php echo $this->_tpl_vars['tip_tag_attrs']; ?>
 src="<?php echo $this->_tpl_vars['theme_dir']; ?>
/Utils/Calendar/info_iphone.png" onClick="event_menu('<?php echo $this->_tpl_vars['event_id']; ?>
')" width="26" height="26" border="0" style="cursor: pointer;">
<?php endif; ?>
		</span>
			<span id="event_time"><?php if (isset ( $this->_tpl_vars['view_href'] )): ?><a <?php echo $this->_tpl_vars['view_href']; ?>
><?php endif; ?><?php echo $this->_tpl_vars['start_time']; ?>
<?php if ($this->_tpl_vars['duration']): ?> - <?php echo $this->_tpl_vars['end_time']; ?>
 (<?php echo $this->_tpl_vars['duration']; ?>
)<?php endif; ?><?php if (isset ( $this->_tpl_vars['view_href'] )): ?></a><?php endif; ?></span>
		</div>
		 <div class="row <?php if ($this->_tpl_vars['draggable']): ?><?php echo $this->_tpl_vars['handle_class']; ?>
<?php endif; ?>">
			<span id="event_title"><?php echo $this->_tpl_vars['title']; ?>
<?php if ($this->_tpl_vars['description'] != ''): ?> - <?php echo ((is_array($_tmp=$this->_tpl_vars['description'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 100, "...") : smarty_modifier_truncate($_tmp, 100, "...")); ?>
<?php endif; ?></span>
		</div>
	</span>
<?php if ($this->_tpl_vars['with_div']): ?>
</div>
<?php endif; ?>