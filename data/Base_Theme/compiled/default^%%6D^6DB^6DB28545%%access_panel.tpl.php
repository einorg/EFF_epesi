<?php /* Smarty version 2.6.29, created on 2020-10-15 09:28:04
         compiled from Base/Admin/access_panel.tpl */ ?>
<?php echo $this->_tpl_vars['form_open']; ?>


<div style="max-width:900px" id="Base_Admin__access">
<?php $_from = $this->_tpl_vars['sections']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sk'] => $this->_tpl_vars['s']):
?>
	<div class="epesi_label header" style="clear:both;"><?php echo $this->_tpl_vars['s']['header']; ?>
</div>
    <div class="buttons_container">
		<?php $_from = $this->_tpl_vars['s']['buttons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['button']):
?>
			<?php echo $this->_tpl_vars['__link']['sections'][$this->_tpl_vars['sk']]['buttons'][$this->_tpl_vars['key']]['link']['open']; ?>

				<div class="epesi_big_button bigger" id="<?php echo $this->_tpl_vars['button']['id']; ?>
">
				<table>
					<tr>
						<td class="bb_icon">
							<?php if (isset ( $this->_tpl_vars['button']['icon'] )): ?>
							<img src="<?php echo $this->_tpl_vars['button']['icon']; ?>
" border="0" width="32" height="32" align="middle">
							<?php endif; ?>
						</td>
						<td rowspan="2" class="bb_form">
							<?php $this->assign('button_switch', $this->_tpl_vars['button']['enable_switch']); ?>
							<?php echo $this->_tpl_vars['form_data'][$this->_tpl_vars['button_switch']]['label']; ?>

							<?php echo $this->_tpl_vars['form_data'][$this->_tpl_vars['button_switch']]['html']; ?>

						</td>
					</tr>
					<tr>
						<td class="bb_text">
							<?php echo $this->_tpl_vars['button']['label']; ?>

						</td>
					</tr>
					<tr>
						<td colspan="2">
							<div id="<?php echo $this->_tpl_vars['button']['sections_id']; ?>
">
								<table>
									<?php if (! empty ( $this->_tpl_vars['button']['sections'] )): ?>
										<?php $_from = $this->_tpl_vars['button']['sections']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['section_key'] => $this->_tpl_vars['section']):
?>
											<tr>
												<td style="text-align:right;">
													<?php echo $this->_tpl_vars['form_data'][$this->_tpl_vars['section']]['label']; ?>

												</td>
												<td>
													<?php echo $this->_tpl_vars['form_data'][$this->_tpl_vars['section']]['html']; ?>

												</td>
											</tr>
										<?php endforeach; endif; unset($_from); ?>
									<?php endif; ?>
								</table>
							</div>
						</td>
					</tr>
				</table>
				</div>
			<?php echo $this->_tpl_vars['__link']['sections'][$this->_tpl_vars['sk']]['buttons'][$this->_tpl_vars['key']]['link']['close']; ?>

		<?php endforeach; endif; unset($_from); ?>
	</div>
<?php endforeach; endif; unset($_from); ?>
</div>

<?php echo $this->_tpl_vars['form_close']; ?>
