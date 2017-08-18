<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 10:11:53
         compiled from "C:\xampp\htdocs\clipbucket\styles\cb_28\layout\blocks\collection-item.html" */ ?>
<?php /*%%SmartyHeaderCode:273525993fe498bf269-32450197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8242ad21698978314b20a5433227c952591dc2b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\styles\\cb_28\\layout\\blocks\\collection-item.html',
      1 => 1502865950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '273525993fe498bf269-32450197',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Cbucket' => 0,
    'baseurl' => 0,
    'collection' => 0,
    'type' => 0,
    'main_url' => 0,
    'first_col_thumb' => 0,
    'theme' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5993fe499c1e78_40899428',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5993fe499c1e78_40899428')) {function content_5993fe499c1e78_40899428($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['Cbucket']->value->configs['seo']=='no') {?>
<?php if (isset($_smarty_tpl->tpl_vars['main_url'])) {$_smarty_tpl->tpl_vars['main_url'] = clone $_smarty_tpl->tpl_vars['main_url'];
$_smarty_tpl->tpl_vars['main_url']->value = ((string)$_smarty_tpl->tpl_vars['baseurl']->value)."/view_collection.php?cid=".((string)$_smarty_tpl->tpl_vars['collection']->value['collection_id'])."&type=".((string)$_smarty_tpl->tpl_vars['collection']->value['type']); $_smarty_tpl->tpl_vars['main_url']->nocache = null; $_smarty_tpl->tpl_vars['main_url']->scope = 0;
} else $_smarty_tpl->tpl_vars['main_url'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['baseurl']->value)."/view_collection.php?cid=".((string)$_smarty_tpl->tpl_vars['collection']->value['collection_id'])."&type=".((string)$_smarty_tpl->tpl_vars['collection']->value['type']), null, 0);?>
<?php } else { ?>
<?php if (isset($_smarty_tpl->tpl_vars['main_url'])) {$_smarty_tpl->tpl_vars['main_url'] = clone $_smarty_tpl->tpl_vars['main_url'];
$_smarty_tpl->tpl_vars['main_url']->value = ((string)$_smarty_tpl->tpl_vars['baseurl']->value)."/collection/".((string)$_smarty_tpl->tpl_vars['collection']->value['collection_id'])."/".((string)$_smarty_tpl->tpl_vars['collection']->value['type'])."/".((string)$_smarty_tpl->tpl_vars['collection']->value['collection_name']); $_smarty_tpl->tpl_vars['main_url']->nocache = null; $_smarty_tpl->tpl_vars['main_url']->scope = 0;
} else $_smarty_tpl->tpl_vars['main_url'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['baseurl']->value)."/collection/".((string)$_smarty_tpl->tpl_vars['collection']->value['collection_id'])."/".((string)$_smarty_tpl->tpl_vars['collection']->value['type'])."/".((string)$_smarty_tpl->tpl_vars['collection']->value['collection_name']), null, 0);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['collection']->value['type']=='photos') {?>
<?php if (isset($_smarty_tpl->tpl_vars['type'])) {$_smarty_tpl->tpl_vars['type'] = clone $_smarty_tpl->tpl_vars['type'];
$_smarty_tpl->tpl_vars['type']->value = 'p'; $_smarty_tpl->tpl_vars['type']->nocache = null; $_smarty_tpl->tpl_vars['type']->scope = 0;
} else $_smarty_tpl->tpl_vars['type'] = new Smarty_variable('p', null, 0);?>
<?php } else { ?>
<?php if (isset($_smarty_tpl->tpl_vars['type'])) {$_smarty_tpl->tpl_vars['type'] = clone $_smarty_tpl->tpl_vars['type'];
$_smarty_tpl->tpl_vars['type']->value = 'v'; $_smarty_tpl->tpl_vars['type']->nocache = null; $_smarty_tpl->tpl_vars['type']->scope = 0;
} else $_smarty_tpl->tpl_vars['type'] = new Smarty_variable('v', null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['type']->value=='p') {?> 
<div class="collection-holder">
	<div class="photo-block">
		<a href="<?php echo $_smarty_tpl->tpl_vars['main_url']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['collection']->value['collection_name'];?>
}">
			<img alt="<?php echo $_smarty_tpl->tpl_vars['collection']->value['title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['collection']->value['title'];?>
" class="img-responsive" id="photo_<?php echo $_smarty_tpl->tpl_vars['collection']->value['ci_id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['first_col_thumb']->value;?>
">
			<div class="collection-info">
				<span><?php echo $_smarty_tpl->tpl_vars['collection']->value['total_objects'];?>
</span><?php if ($_smarty_tpl->tpl_vars['type']->value=='v') {?><?php echo smarty_lang(array('code'=>"videos"),$_smarty_tpl);?>
<?php } else { ?><?php echo smarty_lang(array('code'=>"photos"),$_smarty_tpl);?>
<?php }?>
			</div>
		</a>
	</div>
	<img src="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/photo-bg.png" alt="" class="photo-bg">
</div>
<span class="title"><?php echo $_smarty_tpl->tpl_vars['collection']->value['collection_name'];?>
</span>
<?php } else { ?>
<div class="collection-holder">
	<div class="photo-block">
		<a href="<?php echo $_smarty_tpl->tpl_vars['main_url']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['collection']->value['collection_name'];?>
">
			<img alt="<?php echo $_smarty_tpl->tpl_vars['collection']->value['title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['collection']->value['title'];?>
" class="img-responsive" id="photo_<?php echo $_smarty_tpl->tpl_vars['collection']->value['ci_id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['first_col_thumb']->value;?>
">
			<div class="collection-info">
				<span><?php echo $_smarty_tpl->tpl_vars['collection']->value['total_objects'];?>
</span><?php echo smarty_lang(array('code'=>"videos"),$_smarty_tpl);?>

			</div>
		</a>
	</div>
	<img src="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/photo-bg.png" alt="" class="photo-bg">
</div>
<span class="title"><?php echo $_smarty_tpl->tpl_vars['collection']->value['collection_name'];?>
</span>
<?php }?><?php }} ?>
