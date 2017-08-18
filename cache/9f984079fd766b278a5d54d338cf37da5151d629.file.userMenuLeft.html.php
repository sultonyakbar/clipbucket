<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 10:10:11
         compiled from "C:\xampp\htdocs\clipbucket\styles\cb_28\layout\blocks\manage\userMenuLeft.html" */ ?>
<?php /*%%SmartyHeaderCode:55635993fde375bbc3-40398497%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f984079fd766b278a5d54d338cf37da5151d629' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\styles\\cb_28\\layout\\blocks\\manage\\userMenuLeft.html',
      1 => 1502865952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55635993fde375bbc3-40398497',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'myAccountLinks' => 0,
    'topMenuLinks' => 0,
    'key' => 0,
    'value' => 0,
    'subValue' => 0,
    'subKey' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5993fde3795654_70795105',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5993fde3795654_70795105')) {function content_5993fde3795654_70795105($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['topMenuLinks'])) {$_smarty_tpl->tpl_vars['topMenuLinks'] = clone $_smarty_tpl->tpl_vars['topMenuLinks'];
$_smarty_tpl->tpl_vars['topMenuLinks']->value = $_smarty_tpl->tpl_vars['myAccountLinks']->value; $_smarty_tpl->tpl_vars['topMenuLinks']->nocache = null; $_smarty_tpl->tpl_vars['topMenuLinks']->scope = 0;
} else $_smarty_tpl->tpl_vars['topMenuLinks'] = new Smarty_variable($_smarty_tpl->tpl_vars['myAccountLinks']->value, null, 0);?>
<ul class="nav nav-pills nav-stacked">
<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['topMenuLinks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
	<?php if ($_smarty_tpl->tpl_vars['key']->value!='Groups') {?>

		<li class="active"><a href="#"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</a></li>
	
		<?php  $_smarty_tpl->tpl_vars['subValue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subValue']->_loop = false;
 $_smarty_tpl->tpl_vars['subKey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['value']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subValue']->key => $_smarty_tpl->tpl_vars['subValue']->value) {
$_smarty_tpl->tpl_vars['subValue']->_loop = true;
 $_smarty_tpl->tpl_vars['subKey']->value = $_smarty_tpl->tpl_vars['subValue']->key;
?>
			<li><a  href="<?php echo $_smarty_tpl->tpl_vars['subValue']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['subKey']->value;?>
</a></li>
		<?php } ?>
	<?php }?>    
<?php } ?>
</ul><?php }} ?>
