<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 09:26:35
         compiled from "C:\xampp\htdocs\clipbucket\admin_area\styles\cb_2014\layout\cb_server_conf_info.html" */ ?>
<?php /*%%SmartyHeaderCode:243775993f3abac1a58-62348401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8281178810d53f2cd2de1115cf5fe454a5d88293' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\admin_area\\styles\\cb_2014\\layout\\cb_server_conf_info.html',
      1 => 1502865808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '243775993f3abac1a58-62348401',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'VERSION' => 0,
    'Cbucket' => 0,
    'post_max_size' => 0,
    'imageurl' => 0,
    'upload_max_filesize' => 0,
    'memory_limit' => 0,
    'max_execution_time' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5993f3abb84007_69514732',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5993f3abb84007_69514732')) {function content_5993f3abb84007_69514732($_smarty_tpl) {?><div class="heading">
  <h2>PHP Server Configuration Info - ClipBucket <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['Cbucket']->value->cbinfo['state'];?>
, REV <?php echo $_smarty_tpl->tpl_vars['Cbucket']->value->cbinfo['rev'];?>
</h2>
</div>

<p class="alert alert-info">
A brief view of PHP server configuration Info  
</p>


<h3>configurations and values</h3>

<div class="well">
  	<h4>POST MAX SIZE </h4>
    <?php if ($_smarty_tpl->tpl_vars['post_max_size']->value>50) {?>
   	<img style="float:left;" src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/button_ok.png"/>
    <div ><strong> &nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['post_max_size']->value;?>
</strong></div>
    <?php } else { ?>
    <img style="float:left;" src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/cross.png"/>
    <div ><strong> &nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['post_max_size']->value;?>
 It must be atleast 50M</strong></div>
    <?php }?>
</div>

<div class="well">
  	<h4>UPLOAD MAX FILESIZE</h4>
    <?php if ($_smarty_tpl->tpl_vars['upload_max_filesize']->value>50) {?>
    <img style="float:left;" src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/button_ok.png"/>
    <div ><strong> &nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['upload_max_filesize']->value;?>
</strong></div>
    <?php } else { ?>
    <img style="float:left;" src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/cross.png"/>
    <div ><strong> &nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['upload_max_filesize']->value;?>
 - It must be atleast 50M</strong></div>
    <?php }?>
</div>

<div class="well">
  	<h4>MEMORY LIMIT</h4>
    <?php if ($_smarty_tpl->tpl_vars['memory_limit']->value>=128) {?>
    <img style="float:left;" src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/button_ok.png"/>
    <div ><strong> &nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['memory_limit']->value;?>
</strong></div>
    <?php } else { ?>
    <img style="float:left;" src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/cross.png"/>
    <div ><strong> &nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['memory_limit']->value;?>
 - It must be atleast 128M</strong></div>
    <?php }?>
</div>

<div class="well">
  	<h4>MAX EXECUTION TIME </h4>
    <?php if ($_smarty_tpl->tpl_vars['max_execution_time']->value>7200) {?>
    <img style="float:left;" src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/button_ok.png"/>
    <div ><strong> &nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['max_execution_time']->value;?>
</strong></div>
    <?php } else { ?>
    <img style="float:left;" src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/cross.png"/>
    <div ><strong> &nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['max_execution_time']->value;?>
 - It must be atleast 7200</strong></div>
    <?php }?>
</div><?php }} ?>
