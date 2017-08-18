<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 10:11:58
         compiled from "C:\xampp\htdocs\clipbucket\styles\cb_28\layout\blocks\common\report.html" */ ?>
<?php /*%%SmartyHeaderCode:228065993fe4edab5e3-51547960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '093afa9f8e22ce6f1eb090215dff375c381e30ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\styles\\cb_28\\layout\\blocks\\common\\report.html',
      1 => 1502865951,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '228065993fe4edab5e3-51547960',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'params' => 0,
    'flag_options' => 0,
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5993fe4ee0c861_17246027',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5993fe4ee0c861_17246027')) {function content_5993fe4ee0c861_17246027($_smarty_tpl) {?><!-- Flag This <?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 -->
<div id="flag_item" class="action_box" <?php if ($_smarty_tpl->tpl_vars['type']->value=='photos'||$_smarty_tpl->tpl_vars['type']->value=='videos') {?>style="display:none"<?php }?>>
	<div class="form_container">
		<form id="flag_form" name="flag_form"  method="post" action="#">
			<div class="alert alert-info">
				<?php echo sprintf(lang("report_text"),$_smarty_tpl->tpl_vars['params']->value['type']);?>

			</div>
			<?php if (isset($_smarty_tpl->tpl_vars['flag_options'])) {$_smarty_tpl->tpl_vars['flag_options'] = clone $_smarty_tpl->tpl_vars['flag_options'];
$_smarty_tpl->tpl_vars['flag_options']->value = get_flag_options($_smarty_tpl->tpl_vars['type']->value); $_smarty_tpl->tpl_vars['flag_options']->nocache = null; $_smarty_tpl->tpl_vars['flag_options']->scope = 0;
} else $_smarty_tpl->tpl_vars['flag_options'] = new Smarty_variable(get_flag_options($_smarty_tpl->tpl_vars['type']->value), null, 0);?>
			<label for="flag_type" class="label-block"><?php echo lang("category");?>
</label>
			<div class="form-group custom-elements clearfix">
				<select class="form-control" name="flag_type" id="flag_type">
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['flag_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</option>
					<?php } ?>
				</select>
			</div>
			<input type="button" name="send_content" value="<?php echo sprintf(lang('flag'),$_smarty_tpl->tpl_vars['params']->value['type']);?>
" class="btn btn-primary" onclick="_cb.flag_objectNew('flag_form','<?php echo $_smarty_tpl->tpl_vars['params']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['params']->value['type'];?>
')">
		</form>
	</div>
</div>
<!-- Flag This <?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 --><?php }} ?>
