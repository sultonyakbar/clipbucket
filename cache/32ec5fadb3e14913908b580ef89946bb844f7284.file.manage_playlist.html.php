<?php /* Smarty version Smarty-3.1.15, created on 2017-08-17 23:05:48
         compiled from "C:\xampp\htdocs\clipbucket\admin_area\styles\cb_2014\layout\manage_playlist.html" */ ?>
<?php /*%%SmartyHeaderCode:315285996052c13f146-62381831%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32ec5fadb3e14913908b580ef89946bb844f7284' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\admin_area\\styles\\cb_2014\\layout\\manage_playlist.html',
      1 => 1502865810,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '315285996052c13f146-62381831',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userquery' => 0,
    'mode' => 0,
    'playlists' => 0,
    'cbvid' => 0,
    'obj' => 0,
    'playlist' => 0,
    'playlist_fields' => 0,
    'group' => 0,
    'field' => 0,
    'formObj' => 0,
    'items' => 0,
    'bg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5996052cb7b9f5_29599397',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5996052cb7b9f5_29599397')) {function content_5996052cb7b9f5_29599397($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\clipbucket\\includes\\smartyv3\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\clipbucket\\includes\\smartyv3\\plugins\\modifier.date_format.php';
?>
<!-- Manage playlist backend -->
<?php if (isset($_smarty_tpl->tpl_vars['myAccountLinks'])) {$_smarty_tpl->tpl_vars['myAccountLinks'] = clone $_smarty_tpl->tpl_vars['myAccountLinks'];
$_smarty_tpl->tpl_vars['myAccountLinks']->value = $_smarty_tpl->tpl_vars['userquery']->value->my_account_links(); $_smarty_tpl->tpl_vars['myAccountLinks']->nocache = null; $_smarty_tpl->tpl_vars['myAccountLinks']->scope = 0;
} else $_smarty_tpl->tpl_vars['myAccountLinks'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->my_account_links(), null, 0);?>
	<div class="row cb-box">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="account_box">
				<?php if ($_smarty_tpl->tpl_vars['mode']->value=='manage_playlist') {?>
				<h2><?php echo smarty_lang(array('code'=>'manage_playlists'),$_smarty_tpl);?>
</h2>
				<!-- searching -->
				<div class="heading clearfix">
					<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['layout_dir']->value)."/blocks/advanced_playlist_search.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				</div>
				<!-- searching -->		  

				<!-- Getting List of Playlist -->
				<form class="marginTop" name="manage_playlists" method="post">
					<div>
						<input type="submit" class="btn btn-primary btn-sm" value="<?php echo smarty_lang(array('code'=>'delete_selected'),$_smarty_tpl);?>
" name="delete_playlists"/>
					</div><br>
					<div class="account_table">
						<table class="table table-bordered table-striped marginTop">
							<tr>
								<td width="25">
									<input type="checkbox" name="checkall" onclick="checkUncheckAll(this);"/>
								</td>
								<td width="150"><strong><?php echo smarty_lang(array('code'=>'vdo_title'),$_smarty_tpl);?>
</strong></td>
								<td><strong><?php echo smarty_lang(array('code'=>'Details'),$_smarty_tpl);?>
</strong></td>
								<td width="130"><strong><?php echo smarty_lang(array('code'=>'date_added'),$_smarty_tpl);?>
</strong></td>
								<td width="80" class="last_td"><strong><?php echo smarty_lang(array('code'=>'total_items'),$_smarty_tpl);?>
</strong></td>
								<td width="130"><strong><?php echo smarty_lang(array('code'=>'view_edit_playlist'),$_smarty_tpl);?>
</strong></td>
								<td width="80"><strong><?php echo smarty_lang(array('code'=>'delete'),$_smarty_tpl);?>
</strong></td>
							</tr>
								
								<?php if ($_smarty_tpl->tpl_vars['playlists']->value!=true) {?>
								<h4 style="text-align: center;">
								<strong><?php echo smarty_lang(array('code'=>'no_playlist_found'),$_smarty_tpl);?>
</strong>
								</h4>
								<?php }?>
							
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['plist'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['plist']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['name'] = 'plist';
$_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['playlists']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['total']);
?>
							<tr>
								<td>
									<input type="checkbox" name="check_playlist[]" id="check_playlist-<?php echo $_smarty_tpl->tpl_vars['playlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plist']['index']]['playlist_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['playlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plist']['index']]['playlist_id'];?>
" />
								</td>
								<td valign="middle">
									<!-- playlist thumb code not functional right now-->
									<!--<span><?php echo $_smarty_tpl->tpl_vars['cbvid']->value->action->getPlaylistThumb($_smarty_tpl->tpl_vars['playlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plist']['index']]['playlist_id']);?>
</span> -->
									<!-- playlist name code -->
									<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['playlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plist']['index']]['playlist_name'],100);?>

								</td>
									<td valign="middle">
									<span class="label label-primary"> <strong><?php echo smarty_lang(array('code'=>'playlist_owner'),$_smarty_tpl);?>
 : 
										<!-- changes made -->
										<?php if (isset($_smarty_tpl->tpl_vars['obj'])) {$_smarty_tpl->tpl_vars['obj'] = clone $_smarty_tpl->tpl_vars['obj'];
$_smarty_tpl->tpl_vars['obj']->value = $_smarty_tpl->tpl_vars['userquery']->value->get_user_details($_smarty_tpl->tpl_vars['playlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plist']['index']]['userid']); $_smarty_tpl->tpl_vars['obj']->nocache = null; $_smarty_tpl->tpl_vars['obj']->scope = 0;
} else $_smarty_tpl->tpl_vars['obj'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->get_user_details($_smarty_tpl->tpl_vars['playlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plist']['index']]['userid']), null, 0);?>
										<?php echo $_smarty_tpl->tpl_vars['obj']->value['username'];?>

										<!-- changes made -->
									</strong></span>
									<span class="label label-primary"> <strong><?php echo smarty_lang(array('code'=>'playlist_privacy'),$_smarty_tpl);?>
 : <?php echo $_smarty_tpl->tpl_vars['playlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plist']['index']]['privacy'];?>
</strong></span>
									</td>
								<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['playlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plist']['index']]['date_added']);?>
</td>
								<td><?php echo number_format($_smarty_tpl->tpl_vars['cbvid']->value->action->count_playlist_items($_smarty_tpl->tpl_vars['playlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plist']['index']]['playlist_id']));?>
</td>
								<td><a href="?mode=edit_playlist&amp;pid=<?php echo $_smarty_tpl->tpl_vars['playlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plist']['index']]['playlist_id'];?>
"><?php echo smarty_lang(array('code'=>'view_edit_playlist'),$_smarty_tpl);?>
</a></td>
								<td><a href="javascript:void(0)"  onmousedown="delete_video('delete_icon_a','<?php echo $_smarty_tpl->tpl_vars['playlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plist']['index']]['playlist_id'];?>
','<?php echo smarty_lang(array('code'=>"remove_playlist_confirm"),$_smarty_tpl);?>
','?mode=manage_playlist&amp;delete_pl=<?php echo $_smarty_tpl->tpl_vars['playlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plist']['index']]['playlist_id'];?>
')" id="delete_icon_a-<?php echo $_smarty_tpl->tpl_vars['playlists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plist']['index']]['playlist_id'];?>
"><?php echo smarty_lang(array('code'=>'delete'),$_smarty_tpl);?>
</a></td>
							</tr>
							<?php endfor; endif; ?>
						</table>
					</div>
				</form>
				<!-- Getting List of Playlist -->
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['mode']->value=='edit_playlist') {?>
				<h2><?php echo smarty_lang(array('code'=>'manage_playlists'),$_smarty_tpl);?>
</h2>
				<div class="account_form">
					<form method="post" name="edit_profile">

						<h3><?php echo smarty_lang(array('code'=>'edit_playlist'),$_smarty_tpl);?>
</h3>
						<?php if (isset($_smarty_tpl->tpl_vars['playlist_fields'])) {$_smarty_tpl->tpl_vars['playlist_fields'] = clone $_smarty_tpl->tpl_vars['playlist_fields'];
$_smarty_tpl->tpl_vars['playlist_fields']->value = $_smarty_tpl->tpl_vars['cbvid']->value->action->load_playlist_fields($_smarty_tpl->tpl_vars['playlist']->value); $_smarty_tpl->tpl_vars['playlist_fields']->nocache = null; $_smarty_tpl->tpl_vars['playlist_fields']->scope = 0;
} else $_smarty_tpl->tpl_vars['playlist_fields'] = new Smarty_variable($_smarty_tpl->tpl_vars['cbvid']->value->action->load_playlist_fields($_smarty_tpl->tpl_vars['playlist']->value), null, 0);?>

						<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['playlist_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
						<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
						<div class="form-group">
							<label class="label-heading" for="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</label>
							<?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
							<?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>

						</div>
						<?php } ?>
						<?php } ?>
						<div>
							<button name="edit_playlist" id="button1" value="submit" class="btn btn-primary"><?php echo smarty_lang(array('code'=>'edit_playlist'),$_smarty_tpl);?>
</button></div><br>
						</form>
					</div>

					<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
					<a href="<?php echo videoSmartyLink(array('vdetails'=>$_smarty_tpl->tpl_vars['items']->value[0]),$_smarty_tpl);?>
" ><button class="btn btn-success" style="float:right"><?php echo smarty_lang(array('code'=>'play_now'),$_smarty_tpl);?>
</button></a>
					<?php }?>
					<form name="edit_playlist" method="post">
						<input type="submit" class="btn btn-primary" value="<?php echo smarty_lang(array('code'=>'delete_selected'),$_smarty_tpl);?>
" name="delete_playlist_item"/>
						<div style="padding:5px;"></div>
						<div class="account_table">
							<table class="table table-striped table-bordered">
								<tr>
									<td width="25">
										<input type="checkbox" name="checkall" onclick="checkUncheckAll(this);"/>
									</td>
									<td><?php echo smarty_lang(array('code'=>'vdo_title'),$_smarty_tpl);?>
</td>
									<td width="100"><?php echo smarty_lang(array('code'=>'date_added'),$_smarty_tpl);?>
</td>
									<td width="100"><?php echo smarty_lang(array('code'=>'views'),$_smarty_tpl);?>
</td>
									<td width="100"><?php echo smarty_lang(array('code'=>'comments'),$_smarty_tpl);?>
</td>
								</tr>
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['plist'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['plist']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['name'] = 'plist';
$_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['items']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['plist']['total']);
?>
								<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/manage/account_video.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('video'=>$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plist']['index']],'bg'=>$_smarty_tpl->tpl_vars['bg']->value,'control'=>"playlist",'pid'=>$_smarty_tpl->tpl_vars['playlist']->value['playlist_id']), 0);?>

								<?php endfor; else: ?>
								<div align="center" style="padding:5px"><strong><em><?php echo smarty_lang(array('code'=>'no_video_in_playlist'),$_smarty_tpl);?>
</em></strong></div>
								<?php endif; ?>
							</table>
						</div>
					</form>
					<?php }?>
				</div>
			</div>
		</div>
	
	<!-- Manage playlist backend -->
	<!-- lines added for pagination -->
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/pagination.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div class="marginBottomLarge"></div><?php }} ?>
