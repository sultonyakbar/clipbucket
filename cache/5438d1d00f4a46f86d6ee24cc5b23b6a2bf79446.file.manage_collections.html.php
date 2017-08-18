<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 10:10:10
         compiled from "C:\xampp\htdocs\clipbucket\styles\cb_28\layout\manage_collections.html" */ ?>
<?php /*%%SmartyHeaderCode:251625993fde2b96e54-37470950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5438d1d00f4a46f86d6ee24cc5b23b6a2bf79446' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\styles\\cb_28\\layout\\manage_collections.html',
      1 => 1502865948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '251625993fde2b96e54-37470950',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userquery' => 0,
    'myAccountLinks' => 0,
    'mode' => 0,
    'imageurl' => 0,
    'usr_collects' => 0,
    'baseurl' => 0,
    'c' => 0,
    'fields' => 0,
    'field' => 0,
    'formObj' => 0,
    'other_fields' => 0,
    'verify_logged_user' => 0,
    'objs' => 0,
    'collections' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5993fde2e341d7_56495300',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5993fde2e341d7_56495300')) {function content_5993fde2e341d7_56495300($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['myAccountLinks'])) {$_smarty_tpl->tpl_vars['myAccountLinks'] = clone $_smarty_tpl->tpl_vars['myAccountLinks'];
$_smarty_tpl->tpl_vars['myAccountLinks']->value = $_smarty_tpl->tpl_vars['userquery']->value->my_account_links(); $_smarty_tpl->tpl_vars['myAccountLinks']->nocache = null; $_smarty_tpl->tpl_vars['myAccountLinks']->scope = 0;
} else $_smarty_tpl->tpl_vars['myAccountLinks'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->my_account_links(), null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['leftMenuLinks'])) {$_smarty_tpl->tpl_vars['leftMenuLinks'] = clone $_smarty_tpl->tpl_vars['leftMenuLinks'];
$_smarty_tpl->tpl_vars['leftMenuLinks']->value = array_slice($_smarty_tpl->tpl_vars['myAccountLinks']->value,7); $_smarty_tpl->tpl_vars['leftMenuLinks']->nocache = null; $_smarty_tpl->tpl_vars['leftMenuLinks']->scope = 0;
} else $_smarty_tpl->tpl_vars['leftMenuLinks'] = new Smarty_variable(array_slice($_smarty_tpl->tpl_vars['myAccountLinks']->value,7), null, 0);?>
<div class="container manage-page marginBottom">
	<div class="marginBottom">
		<div class="row cb-box">
		  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 hidden-xs">
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/manage/userMenuLeft.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
			<div class="mainContent col-md-9 col-sm-9 col-xs-12">
			   
				   
					<form action="" method="post" class="upload_form" name="form1" enctype="multipart/form-data">
					<?php if ($_smarty_tpl->tpl_vars['mode']->value=="manage"||$_smarty_tpl->tpl_vars['mode']->value=='') {?>
						<h2><?php echo smarty_lang(array('code'=>'manage_collections'),$_smarty_tpl);?>
</h2>
						<div>
							<img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/dot.gif" class="arrow_pointing" />
							<input type="submit" name="delete_selected" id="delete_selected" value="<?php echo smarty_lang(array('code'=>'delete'),$_smarty_tpl);?>
" class="btn btn-primary btn-sm" />
						</div>
						<br>
						<div class="marginTop">
							<table class="table table-bordered table-striped">
								<tr>
									<td width="25"><input type="checkbox" name="checkall" onclick="checkUncheckAll(this);"/>
								</td>
								<td><?php echo smarty_lang(array('code'=>'collection_name'),$_smarty_tpl);?>
</td>
								<td width="100"><?php echo smarty_lang(array('code'=>'date_added'),$_smarty_tpl);?>
</td>
								<td width="100"><?php echo smarty_lang(array('code'=>'views'),$_smarty_tpl);?>
</td>
								<td width="100"><?php echo smarty_lang(array('code'=>'total_items'),$_smarty_tpl);?>
</td>
								<td width="100"><?php echo smarty_lang(array('code'=>'type'),$_smarty_tpl);?>
</td>
								<td width="100" class="last_td"><?php echo smarty_lang(array('code'=>'active'),$_smarty_tpl);?>
</td>
								</tr>

						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['clist'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['clist']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['usr_collects']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['name'] = 'clist';
$_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['clist']['total']);
?>
							<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/manage/account_collections.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('collection'=>$_smarty_tpl->tpl_vars['usr_collects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['clist']['index']]), 0);?>

						<?php endfor; else: ?>
							<div>
								<?php echo smarty_lang(array('code'=>"no_collection_found"),$_smarty_tpl);?>

							</div>   
						<?php endif; ?>
							</table>
						</div>

						
						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/pagination.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['mode']->value=="edit_collection") {?>
						<div class="page-hidding" ><h3><?php echo smarty_lang(array('code'=>'update_collection'),$_smarty_tpl);?>
</h3>
								<div class="pull-right" style="margin-top: -43px;"><a class="btn btn-primary " href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/view_collection.php?cid=<?php echo $_GET['cid'];?>
&type=<?php echo $_GET['type'];?>
"><?php echo smarty_lang(array('code'=>"back_to_collection"),$_smarty_tpl);?>
</a></div>
						</div>

						<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['c']->value['collection_id'];?>
" name="collection_id" id="collection_id">
						<div class="upload_info">
							<div class="account_form">
								<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
									<div class="form-group">
										<label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</label>
										<?php if ($_smarty_tpl->tpl_vars['field']->value['hint_1']) {?><div class="hint"><?php echo $_smarty_tpl->tpl_vars['field']->value['hint_1'];?>
</div><?php }?>
										<?php echo ANCHOR(array('place'=>$_smarty_tpl->tpl_vars['field']->value['anchor_before']),$_smarty_tpl);?>

										<?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = "form-control";?>
										<?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>

										<?php if ($_smarty_tpl->tpl_vars['field']->value['hint_2']) {?>
										<div class="hint"><?php echo $_smarty_tpl->tpl_vars['field']->value['hint_2'];?>
</div><?php }?>
									</div>
								<?php } ?>
								<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['other_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
									<div class="form-group">
										<label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
" class="show"><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</label>
										<?php if ($_smarty_tpl->tpl_vars['field']->value['hint_1']) {?><div class="hint"><?php echo $_smarty_tpl->tpl_vars['field']->value['hint_1'];?>
</div><?php }?>
										<?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['label_class'] = 'radio-inline';?>
										<?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['notShowSeprator'] = true;?>
										<?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>

										<?php if ($_smarty_tpl->tpl_vars['field']->value['hint_2']) {?>
										<small><?php echo $_smarty_tpl->tpl_vars['field']->value['hint_2'];?>
</small><?php }?>
									</div>
								<?php } ?>            
							</div>
							<div class="text-right">
								<input type="submit" name="update_collection" class="btn btn-primary btn-lg" value="<?php echo smarty_lang(array('code'=>'update_collection'),$_smarty_tpl);?>
">
							</div>
						</div>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['mode']->value=="add_new") {?>
						
						<div class="page-hidding"><h3><?php echo smarty_lang(array('code'=>'add_new_collection'),$_smarty_tpl);?>
</h3>
						<div class="pull-right" style="margin-top: -43px;"><a class="btn btn-primary " href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/collections.php"><?php echo smarty_lang(array('code'=>"back_to_collection"),$_smarty_tpl);?>
</a></div>
						</div>
						<?php if ((has_access('allow_create_collection',false,$_smarty_tpl->tpl_vars['verify_logged_user']->value))) {?>
						<div class="upload_info">
							<div class="account_form">
								<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
									<div class="form-group">
										<label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</label>
										<?php if ($_smarty_tpl->tpl_vars['field']->value['hint_1']) {?><div class="hint"><?php echo $_smarty_tpl->tpl_vars['field']->value['hint_1'];?>
</div><?php }?>
										<?php echo ANCHOR(array('place'=>$_smarty_tpl->tpl_vars['field']->value['anchor_before']),$_smarty_tpl);?>

										<?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = "form-control";?>
										<?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>

										<?php if ($_smarty_tpl->tpl_vars['field']->value['hint_2']) {?>
										<div class="hint"><?php echo $_smarty_tpl->tpl_vars['field']->value['hint_2'];?>
</div><?php }?>
									</div>
								<?php } ?>
								<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['other_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
									<div class="form-group">
										<label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
" class="show"><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</label>
										<?php if ($_smarty_tpl->tpl_vars['field']->value['hint_1']) {?><div class="hint"><?php echo $_smarty_tpl->tpl_vars['field']->value['hint_1'];?>
</div><?php }?>
										<?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['label_class'] = 'radio-inline';?>
										<?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['notShowSeprator'] = true;?>
										<?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>

										<?php if ($_smarty_tpl->tpl_vars['field']->value['hint_2']) {?>
										<small><?php echo $_smarty_tpl->tpl_vars['field']->value['hint_2'];?>
</small><?php }?>
									</div>
								<?php } ?>            
							</div>
							<div class="text-right">
								<input type="submit" name="add_collection" class="btn btn-primary" value="<?php echo smarty_lang(array('code'=>'add_new_collection'),$_smarty_tpl);?>
">
							</div>
						</div>
						<?php } else { ?>
						<div class="alert alert-danger">
							<strong><?php echo smarty_lang(array('code'=>"creating_collection_is_disabled"),$_smarty_tpl);?>
</strong>
						</div>
						<?php }?>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['mode']->value=="manage_items"||$_smarty_tpl->tpl_vars['mode']->value=="collection_items") {?>
						<h2><?php echo smarty_lang(array('code'=>'manage_items'),$_smarty_tpl);?>
 - <?php echo $_smarty_tpl->tpl_vars['c']->value['collection_name'];?>
</h2>
						<div>
							<img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/dot.gif" class="arrow_pointing" style="margin-right:10px;" />
							<input type="submit" name="delete_selected" id="delete_selected" value="<?php echo smarty_lang(array('code'=>'delete'),$_smarty_tpl);?>
" class="small_button" />
						</div>
						<div>
							<table class="table table-striped table-bordered">
								<tr>
								<td width="25"><input type="checkbox" name="checkall" onclick="checkUncheckAll(this);"/>
								</td>
								<td><?php echo smarty_lang(array('code'=>'title'),$_smarty_tpl);?>
</td>
								<td width="100" align="center"><?php echo smarty_lang(array('code'=>'date_added'),$_smarty_tpl);?>
</td>
								<td width="100" align="center"><?php echo smarty_lang(array('code'=>'views'),$_smarty_tpl);?>
</td>
								<td width="100" class="last_td" align="center"><?php echo smarty_lang(array('code'=>'remove'),$_smarty_tpl);?>
</td>
								</tr>
							</table>
						</div>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['olist'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['olist']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['olist']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['objs']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['olist']['name'] = 'olist';
$_smarty_tpl->tpl_vars['smarty']->value['section']['olist']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['olist']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['olist']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['olist']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['olist']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['olist']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['olist']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['olist']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['olist']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['olist']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['olist']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['olist']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['olist']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['olist']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['olist']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['olist']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['olist']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['olist']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['olist']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['olist']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['olist']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['olist']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['olist']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['olist']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['olist']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['olist']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['olist']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['olist']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['olist']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['olist']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['olist']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['olist']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['olist']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['olist']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['olist']['total']);
?>
							<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/manage/account_collections.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('display_type'=>"items",'collection'=>$_smarty_tpl->tpl_vars['objs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['olist']['index']]), 0);?>

						<?php endfor; else: ?>
							<div align="center" style="font:bold 11px Tahoma; margin-top:5px;"><?php echo smarty_lang(array('code'=>"no_items_found_in_collect"),$_smarty_tpl);?>
</div>
						<?php endif; ?>
						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/pagination.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
    
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['mode']->value=="favorite") {?>
						<h2><?php echo smarty_lang(array('code'=>"manage_favorite_collections"),$_smarty_tpl);?>
</h2>
						<div>
							<img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/dot.gif" class="arrow_pointing" style="margin-right:10px;" />
							<input type="submit" name="remove_selected_favs" id="remove_selected_favs" value="<?php echo smarty_lang(array('code'=>'remove'),$_smarty_tpl);?>
" class="btn btn-primary btn-sm" />
						</div>
						<br>
						<div class="marginTop">
							<table class="table table-bordered table-striped">
								<tr>
								<td width="25">
									<input type="checkbox" name="checkall" onclick="checkUncheckAll(this);"/>
								</td>
								<td><?php echo smarty_lang(array('code'=>'title'),$_smarty_tpl);?>
</td>
								<td width="100"><?php echo smarty_lang(array('code'=>'date_added'),$_smarty_tpl);?>
</td>
								<td width="100" class="last_td"><?php echo smarty_lang(array('code'=>'type'),$_smarty_tpl);?>
</td>
								<td width="100" class="last_td"><?php echo smarty_lang(array('code'=>'views'),$_smarty_tpl);?>
</td>
								</tr>
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['list'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['list']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['collections']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['name'] = 'list';
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total']);
?>
								<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/manage/account_collections.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('display_type'=>"favorite",'collection'=>$_smarty_tpl->tpl_vars['collections']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]), 0);?>

							<?php endfor; else: ?>
								<div align="center" style="font:bold 11px Tahoma; margin:5px 0px;"><?php echo smarty_lang(array('code'=>"you_dont_have_fav_collections"),$_smarty_tpl);?>

								</div>
							<?php endif; ?>
							</table>
						</div>
						
						
						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/pagination.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
        
					<?php }?>
					</form>
			   
			</div>
	</div>  
	</div>
</div>
<div style="height:20px"> </div>
<?php }} ?>
