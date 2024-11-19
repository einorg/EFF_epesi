<?php /* Smarty version 2.6.29, created on 2022-02-25 08:58:42
         compiled from Utils/RecordBrowser/Record_picker.tpl */ ?>
<table id="Browsing_records" border="0" cellpadding="0" cellspacing="0">
	<tbody>
		<tr>
			<?php if ($this->_tpl_vars['select_form'] != ""): ?>
			<td width="200px">
				<?php echo $this->_tpl_vars['select_form']; ?>

			</td>
			<?php endif; ?>
			<td>
				<div id="Utils_RecordBrowser__Filter">
					<div class="buttons" style="float:left;">
					<?php if ($this->_tpl_vars['select_all']['js'] != ""): ?>
						<input type="button" onClick="<?php echo $this->_tpl_vars['select_all']['js']; ?>
" value="<?php echo $this->_tpl_vars['select_all']['label']; ?>
">
				    <?php endif; ?>
					<?php if ($this->_tpl_vars['deselect_all']['js'] != ""): ?>
						<input type="button" onClick="<?php echo $this->_tpl_vars['deselect_all']['js']; ?>
" value="<?php echo $this->_tpl_vars['deselect_all']['label']; ?>
">
					<?php endif; ?>
					<?php if (isset ( $this->_tpl_vars['close_leightbox'] )): ?>
						<input type="button" onClick="<?php echo $this->_tpl_vars['close_leightbox']['js']; ?>
" value="<?php echo $this->_tpl_vars['close_leightbox']['label']; ?>
">
					<?php endif; ?>
					</div>
				</div>
			</td>
			<td>
			</td>
			<td class="filters">
                <?php if ($this->_tpl_vars['filters']['controls']): ?>
	                <?php echo $this->_tpl_vars['filters']['controls']; ?>

                <?php endif; ?>
			</td>
		</tr>
		<?php if ($this->_tpl_vars['filters']['elements']): ?>
        <tr>
            <td colspan="3" class="filters">
            <?php echo $this->_tpl_vars['filters']['elements']; ?>

            </td>
        </tr>
        <?php endif; ?>
	</tbody>
</table>
<?php echo $this->_tpl_vars['table']; ?>