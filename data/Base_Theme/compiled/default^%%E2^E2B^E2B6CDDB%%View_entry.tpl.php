<?php /* Smarty version 2.6.29, created on 2022-02-24 11:53:10
         compiled from Utils/Attachment/View_entry.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't', 'Utils/Attachment/View_entry.tpl', 127, false),)), $this); ?>
<?php $this->assign('count', 0); ?>
<?php 
    $this->_tpl_vars['multiselects'] = array();
 ?>
<?php $_from = $this->_tpl_vars['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['fields'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fields']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['f']):
        $this->_foreach['fields']['iteration']++;
?>
    <?php if ($this->_tpl_vars['f']['type'] != 'multiselect'): ?>
        <?php $this->assign('count', $this->_tpl_vars['count']+1); ?>
    <?php else: ?>
        <?php 
            $this->_tpl_vars['multiselects'][] = $this->_tpl_vars['f'];
         ?>
    <?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php 
    $this->_tpl_vars['rows'] = ceil($this->_tpl_vars['count']/$this->_tpl_vars['cols']);
    $this->_tpl_vars['mss_rows'] = ceil(count($this->_tpl_vars['multiselects'])/$this->_tpl_vars['cols']);
    $this->_tpl_vars['no_empty'] = $this->_tpl_vars['count']-floor($this->_tpl_vars['count']/$this->_tpl_vars['cols'])*$this->_tpl_vars['cols'];
    if ($this->_tpl_vars['no_empty']==0) $this->_tpl_vars['no_empty'] = $this->_tpl_vars['cols']+1;
    $this->_tpl_vars['mss_no_empty'] = count($this->_tpl_vars['multiselects'])-floor(count($this->_tpl_vars['multiselects'])/$this->_tpl_vars['cols'])*$this->_tpl_vars['cols'];
    if ($this->_tpl_vars['mss_no_empty']==0) $this->_tpl_vars['mss_no_empty'] = $this->_tpl_vars['cols']+1;
    $this->_tpl_vars['cols_percent'] = 100 / $this->_tpl_vars['cols'];
 ?>

<?php if ($this->_tpl_vars['main_page']): ?>
    <table class="Utils_RecordBrowser__table" border="0" cellpadding="0" cellspacing="0">
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
                &nbsp;*&nbsp;<?php echo $this->_tpl_vars['required_note']; ?>

                <?php if (isset ( $this->_tpl_vars['subscription_tooltip'] )): ?>
                    &nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['subscription_tooltip']; ?>

                <?php endif; ?>
                <?php if (isset ( $this->_tpl_vars['fav_tooltip'] )): ?>
                    &nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['fav_tooltip']; ?>

                <?php endif; ?>
                <?php if (isset ( $this->_tpl_vars['info_tooltip'] )): ?>
                    &nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['info_tooltip']; ?>

                <?php endif; ?>
                <?php if (isset ( $this->_tpl_vars['clipboard_tooltip'] )): ?>
                    &nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['clipboard_tooltip']; ?>

                <?php endif; ?>
                <?php if (isset ( $this->_tpl_vars['history_tooltip'] )): ?>
                    &nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['history_tooltip']; ?>

                <?php endif; ?>
                <?php if (isset ( $this->_tpl_vars['new'] )): ?>
                    <?php $_from = $this->_tpl_vars['new']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['n']):
?>
                        &nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['n']; ?>

                    <?php endforeach; endif; unset($_from); ?>
                <?php endif; ?>
            </td>
        </tr>
        </tbody>
    </table>

    <?php if (isset ( $this->_tpl_vars['click2fill'] )): ?>
        <?php echo $this->_tpl_vars['click2fill']; ?>

    <?php endif; ?>

<?php endif; ?>

<div class="layer" style="padding: 9px; width: 98%;">
    <div class="css3_content_shadow">

        <div class="Utils_RecordBrowser__container">

                        <table class="Utils_RecordBrowser__View_entry" cellpadding="0" cellspacing="0" border="0">
                <tbody>
                <tr>
                    <td>
                        <table cellpadding="0" cellspacing="0" border="0" class="<?php if ($this->_tpl_vars['action'] == 'view'): ?>view<?php else: ?>edit<?php endif; ?>">
                            <?php echo $this->_tpl_vars['fields']['title']['full_field']; ?>

                        </table>
                    </td>
                    <td>
                        <table cellpadding="0" cellspacing="0" border="0" class="<?php if ($this->_tpl_vars['action'] == 'view'): ?>view<?php else: ?>edit<?php endif; ?>">
                            <?php echo $this->_tpl_vars['fields']['edited_on']['full_field']; ?>

                        </table>
                    </td>
                    <td>
                        <table cellpadding="0" cellspacing="0" border="0" class="<?php if ($this->_tpl_vars['action'] == 'view'): ?>view<?php else: ?>edit<?php endif; ?>">
                            <?php echo $this->_tpl_vars['fields']['permission']['full_field']; ?>

                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <table cellpadding="0" cellspacing="0" border="0" class="<?php if ($this->_tpl_vars['action'] == 'view'): ?>view<?php else: ?>edit<?php endif; ?>">
                        <tr>
                        <td class="data long_data <?php echo $this->_tpl_vars['longfields']['note']['style']; ?>
" id="_<?php echo $this->_tpl_vars['longfields']['note']['element']; ?>
__data">
                            <?php if ($this->_tpl_vars['longfields']['note']['error']): ?><?php echo $this->_tpl_vars['longfields']['note']['error']; ?>
<?php endif; ?>
                            <?php if ($this->_tpl_vars['longfields']['note']['help']): ?>
                                <div class="help"><img src="<?php echo $this->_tpl_vars['longfields']['note']['help']['icon']; ?>
" alt="help" <?php echo $this->_tpl_vars['longfields']['note']['help']['text']; ?>
></div>
                            <?php endif; ?>
                            <div>
                                <?php echo $this->_tpl_vars['longfields']['note']['html']; ?>
<?php if ($this->_tpl_vars['action'] == 'view'): ?>&nbsp;<?php endif; ?>
                            </div>
                        </td>
                        </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table cellpadding="0" cellspacing="0" border="0" class="<?php if ($this->_tpl_vars['action'] == 'view'): ?>view<?php else: ?>edit<?php endif; ?>">
                            <?php echo $this->_tpl_vars['fields']['sticky']['full_field']; ?>

                        </table>
                    </td>
                    <td colspan="2">
                        <table cellpadding="0" cellspacing="0" border="0" class="<?php if ($this->_tpl_vars['action'] == 'view'): ?>view<?php else: ?>edit<?php endif; ?>">
                            <?php echo $this->_tpl_vars['fields']['crypted']['full_field']; ?>

                        </table>
                    </td>
                </tr>
                <?php if ($this->_tpl_vars['action'] != 'view'): ?>
                <tr>
                    <td colspan="3">
                        <table cellpadding="0" cellspacing="0" border="0" class="<?php if ($this->_tpl_vars['action'] == 'view'): ?>view<?php else: ?>edit<?php endif; ?>">
                        <tr>
                        <td class="label"><?php echo ((is_array($_tmp='Files')) ? $this->_run_mod_handler('t', true, $_tmp) : Base_ThemeCommon::smarty_modifier_translate($_tmp)); ?>
</td>
                       <td class="data frozen">
                           <div id="multiple_attachments"><div id="filelist"></div></div>
                           <?php echo ((is_array($_tmp='Click here and press CTRL+V to paste your clipboard')) ? $this->_run_mod_handler('t', true, $_tmp) : Base_ThemeCommon::smarty_modifier_translate($_tmp)); ?>

                           <a href="javascript:void(0)" id="pickfiles" class="button"><?php echo ((is_array($_tmp='Select files')) ? $this->_run_mod_handler('t', true, $_tmp) : Base_ThemeCommon::smarty_modifier_translate($_tmp)); ?>
</a>
                       </td>
                        </tr>
                        </table>
                    </td>
                </tr>
                <?php endif; ?>
                </tbody>
            </table>

            <table class="Utils_RecordBrowser__View_entry" cellpadding="0" cellspacing="0" border="0">
                <tbody>
                <tr>
                    <?php $this->assign('x', 1); ?>
                    <?php $this->assign('y', 1); ?>
                    <?php $_from = $this->_tpl_vars['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['fields'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fields']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['f']):
        $this->_foreach['fields']['iteration']++;
?>
                        <?php if ($this->_tpl_vars['k'] != 'title' && $this->_tpl_vars['k'] != 'permission' && $this->_tpl_vars['k'] != 'edited_on' && $this->_tpl_vars['k'] != 'sticky' && $this->_tpl_vars['k'] != 'crypted'): ?>
                        <?php if ($this->_tpl_vars['f']['type'] != 'multiselect'): ?>
                            <?php if (! isset ( $this->_tpl_vars['focus'] ) && $this->_tpl_vars['f']['type'] == 'text'): ?>
                                <?php $this->assign('focus', $this->_tpl_vars['f']['element']); ?>
                            <?php endif; ?>

                            <?php if ($this->_tpl_vars['y'] == 1): ?>
                                <td class="column" style="width: <?php echo $this->_tpl_vars['cols_percent']; ?>
%;">
                                <table cellpadding="0" cellspacing="0" border="0" class="<?php if ($this->_tpl_vars['action'] == 'view'): ?>view<?php else: ?>edit<?php endif; ?>">
                            <?php endif; ?>
                            <?php echo $this->_tpl_vars['f']['full_field']; ?>

                            <?php if ($this->_tpl_vars['y'] == $this->_tpl_vars['rows'] || ( $this->_tpl_vars['y'] == $this->_tpl_vars['rows']-1 && $this->_tpl_vars['x'] > $this->_tpl_vars['no_empty'] )): ?>
                                <?php if ($this->_tpl_vars['x'] > $this->_tpl_vars['no_empty']): ?>
                                    <tr style="display:none;">
                                        <td class="label">&nbsp;</td>
                                        <td class="data">&nbsp;</td>
                                    </tr>
                                <?php endif; ?>
                                <?php $this->assign('y', 1); ?>
                                <?php $this->assign('x', $this->_tpl_vars['x']+1); ?>
                                </table>
                                </td>
                            <?php else: ?>
                                <?php $this->assign('y', $this->_tpl_vars['y']+1); ?>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                </tr>
                <?php if (! empty ( $this->_tpl_vars['multiselects'] )): ?>
                    <tr>
                        <?php $this->assign('x', 1); ?>
                        <?php $this->assign('y', 1); ?>
                        <?php $_from = $this->_tpl_vars['multiselects']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['fields'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fields']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['f']):
        $this->_foreach['fields']['iteration']++;
?>
                            <?php if ($this->_tpl_vars['y'] == 1): ?>
                                <td class="column" style="width: <?php echo $this->_tpl_vars['cols_percent']; ?>
%;">
                                <table cellpadding="0" cellspacing="0" border="0" class="multiselects <?php if ($this->_tpl_vars['action'] == 'view'): ?>view<?php else: ?>edit<?php endif; ?>" style="border-top: none;">
                            <?php endif; ?>
                            <?php echo $this->_tpl_vars['f']['full_field']; ?>

                            <?php if ($this->_tpl_vars['y'] == $this->_tpl_vars['mss_rows'] || ( $this->_tpl_vars['y'] == $this->_tpl_vars['mss_rows']-1 && $this->_tpl_vars['x'] > $this->_tpl_vars['mss_no_empty'] )): ?>
                                <?php if ($this->_tpl_vars['x'] > $this->_tpl_vars['mss_no_empty']): ?>
                                    <tr style="display:none;">
                                        <td class="label">&nbsp;</td>
                                        <td class="data">&nbsp;</td>
                                    </tr>
                                <?php endif; ?>
                                <?php $this->assign('y', 1); ?>
                                <?php $this->assign('x', $this->_tpl_vars['x']+1); ?>
                                </table>
                                </td>
                            <?php else: ?>
                                <?php $this->assign('y', $this->_tpl_vars['y']+1); ?>
                            <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?>
                    </tr>
                <?php endif; ?>
                <tr>
                    <td colspan="<?php echo $this->_tpl_vars['cols']; ?>
">
                        <table cellpadding="0" cellspacing="0" border="0" class="longfields <?php if ($this->_tpl_vars['action'] == 'view'): ?>view<?php else: ?>edit<?php endif; ?>" style="border-top: none;">
                            <?php $_from = $this->_tpl_vars['longfields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['fields'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fields']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['f']):
        $this->_foreach['fields']['iteration']++;
?>
                                <?php if ($this->_tpl_vars['k'] != 'note'): ?>
                                    <?php echo $this->_tpl_vars['f']['full_field']; ?>

                                <?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>

            <?php if ($this->_tpl_vars['main_page']): ?>
                <?php 
                    if (isset($this->_tpl_vars['focus'])) eval_js('focus_by_id(\''.$this->_tpl_vars['focus'].'\');');
                 ?>
            <?php endif; ?>

        </div>

    </div>
</div>