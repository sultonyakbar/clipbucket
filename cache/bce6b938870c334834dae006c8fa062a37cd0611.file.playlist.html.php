<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 10:43:19
         compiled from "C:\xampp\htdocs\clipbucket\styles\cb_28\layout\blocks\common\playlist.html" */ ?>
<?php /*%%SmartyHeaderCode:1878599405a7153725-27253575%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bce6b938870c334834dae006c8fa062a37cd0611' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\styles\\cb_28\\layout\\blocks\\common\\playlist.html',
      1 => 1502865951,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1878599405a7153725-27253575',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'playlists' => 0,
    'playlist' => 0,
    'params' => 0,
    'verify_logged_user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_599405a71c2243_63519752',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_599405a71c2243_63519752')) {function content_599405a71c2243_63519752($_smarty_tpl) {?><!-- Add To Playlist This <?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 -->
<div id="playlist_form" class="action_box">
	<div class="form_container" align="center">
		<div class="form_result" id="playlist_form_result" style="display:none"></div>
		<form id="add_playlist_form" name="playlist_form" method="post" action="" class="">
			<p><?php echo smarty_lang(array('code'=>'please_select_playlist'),$_smarty_tpl);?>
</p>
			<div class="form-group clearfix">
				<select name="playlist_id" id="playlist_id" class="form-control">
					<?php if ($_smarty_tpl->tpl_vars['playlists']->value) {?>
						<?php  $_smarty_tpl->tpl_vars['playlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['playlist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['playlists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['playlist']->key => $_smarty_tpl->tpl_vars['playlist']->value) {
$_smarty_tpl->tpl_vars['playlist']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['playlist']->value['playlist_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['playlist']->value['playlist_name'];?>
</option>
						<?php } ?>
					<?php } else { ?>
						<option value="" placeholder>--- <?php echo lang("No playlist exists");?>
 ---</option>
					<?php }?>
				</select>
			</div>

			<div class="form-group clearfix">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<input type="button" class="btn mtm btn-block btn-primary" name="add_to_playlist" value="<?php echo smarty_lang(array('code'=>'add_to_playlist'),$_smarty_tpl);?>
" class="cb_button" onclick="_cb.add_playlistNew('add','<?php echo $_smarty_tpl->tpl_vars['params']->value['id'];?>
','add_playlist_form','<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
')">
				</div>
				<?php if ((has_access('allow_create_playlist',false,$_smarty_tpl->tpl_vars['verify_logged_user']->value))) {?>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<a class="btn btn-block mtm btn-success" href="javascript:void(0)" onClick="$('#add_playlist_form').css('display','none');$('#new_playlist_form').css('display','block')"><?php echo smarty_lang(array('code'=>'create_new_playlist'),$_smarty_tpl);?>
</a>
				</div>
				<?php } else { ?>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<strong><a class="btn btn-block mtm alert-danger disabled" href="#"><?php echo smarty_lang(array('code'=>'creating_playlist_is_disabled'),$_smarty_tpl);?>
</a></strong>
				</div>
				<?php }?>
			</div>
		</form>

		<form id="new_playlist_form" name="new_playlist_form" method="post" action="" class="" style="display:none">
			<div class="form-group clearfix">
				<label for="playlist_name"><?php echo smarty_lang(array('code'=>"please_enter_playlist_name"),$_smarty_tpl);?>
</label>
				<input name="playlist_name" type="text" class="form-control" id="playlist_name" value="">
			</div>

			<div class="form-group clearfix">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<input type="button" name="add_new_playlist" value="<?php echo smarty_lang(array('code'=>'add_new_playlist'),$_smarty_tpl);?>
" class="btn mtm btn-block btn-success cb_button" onclick="add_playlist('new','<?php echo $_smarty_tpl->tpl_vars['params']->value['id'];?>
','new_playlist_form','<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
')">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<a href="javascript:void(0)" class="btn btn-block mtm btn-primary" onClick="$('#add_playlist_form').css('display','block');$('#new_playlist_form').css('display','none')"><?php echo smarty_lang(array('code'=>'select_playlist'),$_smarty_tpl);?>
 </a>
				</div>
			</div>
		</form>
	</div>
</div>
<!-- Add To Playlist This <?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 --><?php }} ?>
