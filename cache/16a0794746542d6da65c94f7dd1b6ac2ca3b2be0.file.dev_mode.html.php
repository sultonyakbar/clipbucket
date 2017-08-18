<?php /* Smarty version Smarty-3.1.15, created on 2017-08-18 00:04:17
         compiled from "C:\xampp\htdocs\clipbucket\admin_area\styles\cb_2014\layout\dev_mode.html" */ ?>
<?php /*%%SmartyHeaderCode:27481599612e1721d43-32765236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16a0794746542d6da65c94f7dd1b6ac2ca3b2be0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\admin_area\\styles\\cb_2014\\layout\\dev_mode.html',
      1 => 1502865808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27481599612e1721d43-32765236',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'devmsg' => 0,
    'deverror' => 0,
    'devpower' => 0,
    'devmode' => 0,
    'baseurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_599612e1826cf4_41258723',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_599612e1826cf4_41258723')) {function content_599612e1826cf4_41258723($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['devmsg']->value) {?><div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['devmsg']->value;?>
</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['deverror']->value) {?><div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['deverror']->value;?>
</div><?php }?>
<div>
  <h1>Development Mode <?php if ($_smarty_tpl->tpl_vars['devpower']->value) {?>[enabled, <?php echo $_smarty_tpl->tpl_vars['devpower']->value;?>
]<?php }?></h1>
  <div class="alert alert-warning">This feature is for developers to speed up their debugging & development process. It must not be activated on live sites</div>
  <?php if ($_smarty_tpl->tpl_vars['devmode']->value=='yes') {?>   
    <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/admin_area/dev_mode.php?enable=no"><button class="btn btn-danger">Disable Dev Mode</button></a>
  <?php } else { ?>

    <!-- <div class="dropdown">
      <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Dropup
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/admin_area/dev_mode.php?enable=yes&devpower=basic">Basic</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/admin_area/dev_mode.php?enable=yes&devpower=medium">Medium</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/admin_area/dev_mode.php?enable=yes&devpower=high">High</a></li>
      </ul>
    </div> -->
    <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/admin_area/dev_mode.php?enable=yes&devpower=medium"><button class="btn btn-primary">Enable Development Mode</button></a>
  <?php }?>
</div><?php }} ?>
