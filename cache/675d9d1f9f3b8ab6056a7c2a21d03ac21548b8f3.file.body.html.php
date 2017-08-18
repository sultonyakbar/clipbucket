<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 09:25:41
         compiled from "C:\xampp\htdocs\clipbucket\styles\cb_28\layout\body.html" */ ?>
<?php /*%%SmartyHeaderCode:247825993f375b79513-13536237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '675d9d1f9f3b8ab6056a7c2a21d03ac21548b8f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\styles\\cb_28\\layout\\body.html',
      1 => 1502865947,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '247825993f375b79513-13536237',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_files' => 0,
    'file' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5993f376895973_07813163',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5993f376895973_07813163')) {function content_5993f376895973_07813163($_smarty_tpl) {?><!-- This Condition is for view photo ajax mode--> 
<?php if ((!isset($_GET['moto'])||$_GET['moto']!='ajax')) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/global_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>    
	<body>
    	<div id="container">
    	<?php echo ANCHOR(array('place'=>"cb_floating_box"),$_smarty_tpl);?>

			<?php echo ANCHOR(array('place'=>'premium_button'),$_smarty_tpl);?>

			<!-- This Condition is added for view photo ajx based request -->
			<?php if ((!isset($_GET['moto'])||$_GET['moto']!='ajax')) {?>
           		 <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        	<?php }?>
			<!-- Message -->
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/message.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			
			<?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['template_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
?>
			    <?php echo include_template_file(array('file'=>$_smarty_tpl->tpl_vars['file']->value),$_smarty_tpl);?>

			<?php } ?>

			<!-- This Condition is for view photo ajax mode--> 
			<?php if ((!isset($_GET['moto'])||$_GET['moto']!='ajax')) {?>
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php }?>
		</div>
    </body>
</html>
<?php echo showDevWitch();?>
<?php }} ?>
