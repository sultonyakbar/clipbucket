<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 11:04:14
         compiled from "C:\xampp\htdocs\clipbucket\styles\cb_28\layout\blocks\feed.html" */ ?>
<?php /*%%SmartyHeaderCode:372359940a8e225eb5-82197380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd514ecf9c4e1f86eb62100fe520d4feeba0107be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\styles\\cb_28\\layout\\blocks\\feed.html',
      1 => 1502865950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '372359940a8e225eb5-82197380',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'feed' => 0,
    'userquery' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_59940a8e2e2d99_04950746',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59940a8e2e2d99_04950746')) {function content_59940a8e2e2d99_04950746($_smarty_tpl) {?><div class="feed clearfix"  id="feed-<?php echo $_smarty_tpl->tpl_vars['feed']->value['file'];?>
">
	<a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['feed']->value['user']);?>
" class="avatar">
		<img class="img-circle" src="<?php echo avatar(array('details'=>$_smarty_tpl->tpl_vars['feed']->value['user'],'size'=>'55x55'),$_smarty_tpl);?>
">
	</a>
	<div class="text">
		<?php if (!$_smarty_tpl->tpl_vars['feed']->value['action_title']) {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['feed']->value['user']);?>
"><?php echo $_smarty_tpl->tpl_vars['feed']->value['user']['username'];?>
</a>
		<?php } else { ?>
		<span><?php echo $_smarty_tpl->tpl_vars['feed']->value['action_title'];?>
</span>
		<?php }?>
		<time datetime="2016-03-31" class="time"><?php echo $_smarty_tpl->tpl_vars['feed']->value['datetime'];?>
</time>
	</div>
</div><?php }} ?>
