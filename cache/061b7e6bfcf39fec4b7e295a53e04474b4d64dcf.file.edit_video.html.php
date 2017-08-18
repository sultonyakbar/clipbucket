<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 20:38:25
         compiled from "C:\xampp\htdocs\clipbucket\styles\cb_28\layout\edit_video.html" */ ?>
<?php /*%%SmartyHeaderCode:943259949121881b55-90159139%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '061b7e6bfcf39fec4b7e295a53e04474b4d64dcf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\styles\\cb_28\\layout\\edit_video.html',
      1 => 1502865948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '943259949121881b55-90159139',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userquery' => 0,
    'v' => 0,
    'Upload' => 0,
    'vidthumbs' => 0,
    'vid_thumb' => 0,
    'video_fields' => 0,
    'field_group' => 0,
    'field' => 0,
    'formObj' => 0,
    'custom_upload_fields' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_59949121aa1a59_86197271',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59949121aa1a59_86197271')) {function content_59949121aa1a59_86197271($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['myAccountLinks'])) {$_smarty_tpl->tpl_vars['myAccountLinks'] = clone $_smarty_tpl->tpl_vars['myAccountLinks'];
$_smarty_tpl->tpl_vars['myAccountLinks']->value = $_smarty_tpl->tpl_vars['userquery']->value->my_account_links(); $_smarty_tpl->tpl_vars['myAccountLinks']->nocache = null; $_smarty_tpl->tpl_vars['myAccountLinks']->scope = 0;
} else $_smarty_tpl->tpl_vars['myAccountLinks'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->my_account_links(), null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['custom_upload_fields'])) {$_smarty_tpl->tpl_vars['custom_upload_fields'] = clone $_smarty_tpl->tpl_vars['custom_upload_fields'];
$_smarty_tpl->tpl_vars['custom_upload_fields']->value = $_smarty_tpl->tpl_vars['Upload']->value->load_custom_upload_fields($_smarty_tpl->tpl_vars['v']->value,true); $_smarty_tpl->tpl_vars['custom_upload_fields']->nocache = null; $_smarty_tpl->tpl_vars['custom_upload_fields']->scope = 0;
} else $_smarty_tpl->tpl_vars['custom_upload_fields'] = new Smarty_variable($_smarty_tpl->tpl_vars['Upload']->value->load_custom_upload_fields($_smarty_tpl->tpl_vars['v']->value,true), null, 0);?>
<div class="container manage-page marginBottom">
	<div class="row cb-box">
		<div class="leftSidebar col-lg-3 col-md-3 col-sm-3 hidden-xs">
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/manage/userMenuLeft.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
		<div class="mainContent col-lg-9 col-md-9 col-sm-9 col-xs-12">
			<?php if (isset($_smarty_tpl->tpl_vars['video_fields'])) {$_smarty_tpl->tpl_vars['video_fields'] = clone $_smarty_tpl->tpl_vars['video_fields'];
$_smarty_tpl->tpl_vars['video_fields']->value = $_smarty_tpl->tpl_vars['Upload']->value->load_video_fields($_smarty_tpl->tpl_vars['v']->value); $_smarty_tpl->tpl_vars['video_fields']->nocache = null; $_smarty_tpl->tpl_vars['video_fields']->scope = 0;
} else $_smarty_tpl->tpl_vars['video_fields'] = new Smarty_variable($_smarty_tpl->tpl_vars['Upload']->value->load_video_fields($_smarty_tpl->tpl_vars['v']->value), null, 0);?>
			<div class="cb-box marginBottom">
				<h2>Edit Video</h2>
				<div class="account_form">
					<!-- ///////////changes made//////////// -->
					<h3>Thumbs</h3>
					<div class="clearfix well">
					<form action="upload_thumb.php?video=<?php echo $_smarty_tpl->tpl_vars['v']->value['videoid'];?>
" method="post" enctype="multipart/form-data" name="form1">
						<h5>Upload New Thumb</h5>
						<input name="vid_thumb[]" type="file" />
						<label for="thumb_file"></label>
						<div class="form-group pull-right">
							<input type="submit" name="upload_thumbs" value="Upload Thumb(s)" class="btn btn-primary btn-sm"/>
						</div>


					</form>
					</div>
					<!-- ///////////changes made//////////// -->

					<form method="post" name="edit_video" enctype="multipart/form-data">
						
						
						<div class="row">
							<?php if (isset($_smarty_tpl->tpl_vars['vidthumbs'])) {$_smarty_tpl->tpl_vars['vidthumbs'] = clone $_smarty_tpl->tpl_vars['vidthumbs'];
$_smarty_tpl->tpl_vars['vidthumbs']->value = get_thumb($_smarty_tpl->tpl_vars['v']->value,1,true,false,true,false,'original'); $_smarty_tpl->tpl_vars['vidthumbs']->nocache = null; $_smarty_tpl->tpl_vars['vidthumbs']->scope = 0;
} else $_smarty_tpl->tpl_vars['vidthumbs'] = new Smarty_variable(get_thumb($_smarty_tpl->tpl_vars['v']->value,1,true,false,true,false,'original'), null, 0);?>
							<?php  $_smarty_tpl->tpl_vars['vid_thumb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vid_thumb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vidthumbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vid_thumb']->key => $_smarty_tpl->tpl_vars['vid_thumb']->value) {
$_smarty_tpl->tpl_vars['vid_thumb']->_loop = true;
?>
							<div class="col-md-3">
								<div class="form-group text-center">
									<label class="" for="<?php echo getname($_smarty_tpl->tpl_vars['vid_thumb']->value);?>
"><img class="edit-img-thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['vid_thumb']->value;?>
" width="100" height="100" />
										<input class="show" style="margin: 5px auto" type="radio" value="<?php echo getname($_smarty_tpl->tpl_vars['vid_thumb']->value);?>
.<?php echo getext($_smarty_tpl->tpl_vars['vid_thumb']->value);?>
" id="<?php echo getname($_smarty_tpl->tpl_vars['vid_thumb']->value);?>
" name="default_thumb" <?php if ($_smarty_tpl->tpl_vars['v']->value['default_thumb']==get_thumb_num($_smarty_tpl->tpl_vars['vid_thumb']->value)) {?> checked="checked"<?php }?> /><?php echo smarty_lang(array('code'=>'default'),$_smarty_tpl);?>
</label>
									</div>
								</div>

								<?php } ?>
							</div>
							<hr>
							<?php  $_smarty_tpl->tpl_vars['field_group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['video_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_group']->key => $_smarty_tpl->tpl_vars['field_group']->value) {
$_smarty_tpl->tpl_vars['field_group']->_loop = true;
?>
							<div class="clearfix">
								<h3><?php echo $_smarty_tpl->tpl_vars['field_group']->value['group_name'];?>
</h3>
								<?php if ($_smarty_tpl->tpl_vars['field_group']->value['group_id']=='required_fields') {?>
								<div class="form-group">
									<label for="videoLink"><?php echo smarty_lang(array('code'=>'video_link'),$_smarty_tpl);?>
</label>
									<textarea class="form-control" onclick="this.select()"><?php echo videoSmartyLink(array('vdetails'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
</textarea>
								</div>
								<?php }?>
								<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['field_group']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
								<div class="form-group">
									<label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</label>
									<?php if ($_smarty_tpl->tpl_vars['field']->value['title']=='Title'||$_smarty_tpl->tpl_vars['field']->value['title']=='Description'||$_smarty_tpl->tpl_vars['field']->value['title']=='Tags') {?>
									<?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
									<?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>

									<?php } else { ?>
									<?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
									<small class="show"><?php echo $_smarty_tpl->tpl_vars['field']->value['hint_1'];?>
</small>
									<?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='checkbox') {?>
									<?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = '';?>
									<?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['label_class'] = 'checkbox';?>
									<?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['notShowSeprator'] = true;?>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='radiobutton') {?>
									<?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = '';?>
									<?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['label_class'] = 'radio';?>
									<?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['notShowSeprator'] = true;?>
									<?php }?>
									<?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>

									<small class="show"><?php echo $_smarty_tpl->tpl_vars['field']->value['hint_2'];?>
</small>
									<?php }?>
								</div>
								<?php if ($_smarty_tpl->tpl_vars['field']->value['name']=='broadcast') {?>
								<div class="form-group">
									<label for="videoLink"><?php echo smarty_lang(array('code'=>'video_link'),$_smarty_tpl);?>
</label>
									<textarea onclick="this.select()" class="form-control" ><?php echo videoSmartyLink(array('vdetails'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
</textarea>
								</div>
								<?php }?>
								<?php } ?>
							</div>

							<?php } ?>


							<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['custom_upload_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
							<div class="clearfix">
								<div class="form-group">
									<div class="clearfix">
										<label for="rated_by"><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</label>
									</div>

									<div class="clearfix">
										<?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
										<?php echo $_smarty_tpl->tpl_vars['field']->value['hint_1'];?>
<br><?php echo ANCHOR(array('place'=>$_smarty_tpl->tpl_vars['field']->value['anchor_before']),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>

									</div><br>
									<?php echo $_smarty_tpl->tpl_vars['field']->value['hint_2'];?>

								</div>
							</div>
							<?php } ?>
							<?php echo ANCHOR(array('place'=>"upload_subtitle"),$_smarty_tpl);?>

							<?php echo ANCHOR(array('place'=>"edit_video_form"),$_smarty_tpl);?>

							<div align="right">
								<button name="update_video" id="button" value="submit" class="btn btn-primary"><?php echo smarty_lang(array('code'=>'update_video'),$_smarty_tpl);?>
</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div><?php }} ?>
