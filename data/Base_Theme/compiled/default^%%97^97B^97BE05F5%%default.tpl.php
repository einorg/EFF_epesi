<?php /* Smarty version 2.6.29, created on 2020-09-11 15:59:42
         compiled from Base/Cron/default.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't', 'Base/Cron/default.tpl', 2, false),)), $this); ?>
<div class="important_notice">
    <?php echo ((is_array($_tmp='Cron is used to periodically execute some job. Every module can define several methods with different intervals. All you need to do is to set up a system to run cron.php file every 1 minute.')) ? $this->_run_mod_handler('t', true, $_tmp) : Base_ThemeCommon::smarty_modifier_translate($_tmp)); ?>

    <br>
    <?php echo ((is_array($_tmp='You can read more on our wiki')) ? $this->_run_mod_handler('t', true, $_tmp) : Base_ThemeCommon::smarty_modifier_translate($_tmp)); ?>
: <a href="<?php echo $this->_tpl_vars['wiki_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['wiki_url']; ?>
</a>
    <br>
    <br>
    <?php echo ((is_array($_tmp='EPESI uses token to verify cron url. Only link with valid token can execute cron. Do not reveal Cron URL. If you suspect that someone knows your unique token, then make a new one.')) ? $this->_run_mod_handler('t', true, $_tmp) : Base_ThemeCommon::smarty_modifier_translate($_tmp)); ?>

    <br>
    <br>
    <?php echo ((is_array($_tmp='Cron URL')) ? $this->_run_mod_handler('t', true, $_tmp) : Base_ThemeCommon::smarty_modifier_translate($_tmp)); ?>
: <a href="<?php echo $this->_tpl_vars['cron_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['cron_url']; ?>
</a>
    <br>
    <br>
    <a <?php echo $this->_tpl_vars['new_token_href']; ?>
 class="button"><?php echo ((is_array($_tmp='New Token')) ? $this->_run_mod_handler('t', true, $_tmp) : Base_ThemeCommon::smarty_modifier_translate($_tmp)); ?>
</a>
</div>

<div><?php echo $this->_tpl_vars['history']; ?>
</div>