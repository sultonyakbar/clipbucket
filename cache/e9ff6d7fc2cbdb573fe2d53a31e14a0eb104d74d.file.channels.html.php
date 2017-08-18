<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 09:35:33
         compiled from "C:\xampp\htdocs\clipbucket\styles\cb_28\layout\blocks\channels.html" */ ?>
<?php /*%%SmartyHeaderCode:58575993f5c57863f6-74032323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9ff6d7fc2cbdb573fe2d53a31e14a0eb104d74d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\styles\\cb_28\\layout\\blocks\\channels.html',
      1 => 1502865950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58575993f5c57863f6-74032323',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'block_type' => 0,
    'user' => 0,
    'userquery' => 0,
    'user_cover' => 0,
    'theme' => 0,
    'featured' => 0,
    'subscriber' => 0,
    'user_data' => 0,
    'my_user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5993f5c59edaa8_83953184',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5993f5c59edaa8_83953184')) {function content_5993f5c59edaa8_83953184($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['block_type']->value==''||$_smarty_tpl->tpl_vars['block_type']->value=='normal') {?>
<div class="clearfix" id="user-<?php echo $_smarty_tpl->tpl_vars['user']->value['userid'];?>
">
	<a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['user']->value);?>
" class="avatar">
		<img src="<?php echo avatar(array('details'=>$_smarty_tpl->tpl_vars['user']->value,'size'=>'220x124'),$_smarty_tpl);?>
">
	</a>
	<h2><a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['user']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</a></h2>
	<span class="videos-count">
		<?php if (isSectionEnabled('videos')) {?>
			<?php echo smarty_lang(array('code'=>"videos"),$_smarty_tpl);?>
:  <?php echo number_format($_smarty_tpl->tpl_vars['user']->value['total_videos']);?>

		<?php }?>
	</span>
	<span class="subscribers-count">
		<?php echo smarty_lang(array('code'=>"subscribers"),$_smarty_tpl);?>
:  <?php echo number_format($_smarty_tpl->tpl_vars['user']->value['subscribers']);?>

	</span>
	
	<h2><?php echo number_format($_smarty_tpl->tpl_vars['user']->value['total_videos']);?>
 <?php echo smarty_lang(array('code'=>"videos"),$_smarty_tpl);?>
 <?php echo number_format($_smarty_tpl->tpl_vars['user']->value['profile_hits']);?>
 <?php echo smarty_lang(array('code'=>"views"),$_smarty_tpl);?>
</h2>
	<img src="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->getCover($_smarty_tpl->tpl_vars['user']->value['userid']);?>
" alt="">
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['block_type']->value=='homeChannel'||$_smarty_tpl->tpl_vars['block_type']->value=='normal') {?>
<?php if (isset($_smarty_tpl->tpl_vars['user_cover'])) {$_smarty_tpl->tpl_vars['user_cover'] = clone $_smarty_tpl->tpl_vars['user_cover'];
$_smarty_tpl->tpl_vars['user_cover']->value = $_smarty_tpl->tpl_vars['userquery']->value->getCover($_smarty_tpl->tpl_vars['user']->value['userid']); $_smarty_tpl->tpl_vars['user_cover']->nocache = null; $_smarty_tpl->tpl_vars['user_cover']->scope = 0;
} else $_smarty_tpl->tpl_vars['user_cover'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->getCover($_smarty_tpl->tpl_vars['user']->value['userid']), null, 0);?>

<a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['user']->value);?>
" id="user-<?php echo $_smarty_tpl->tpl_vars['user']->value['userid'];?>
" style="background:url(<?php if ($_smarty_tpl->tpl_vars['user_cover']->value!='') {?> <?php echo $_smarty_tpl->tpl_vars['user_cover']->value;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/cover_default.jpg  <?php }?> )">
	<img class="avatar" src="<?php echo avatar(array('details'=>$_smarty_tpl->tpl_vars['user']->value),$_smarty_tpl);?>
">
	<div class="info">
		<h2><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</h2>
		<div class="clearfix">
			<span><?php echo number_format($_smarty_tpl->tpl_vars['user']->value['total_videos']);?>
 <?php echo smarty_lang(array('code'=>"videos"),$_smarty_tpl);?>
</span>
			<span><?php echo number_format($_smarty_tpl->tpl_vars['user']->value['profile_hits']);?>
 <?php echo smarty_lang(array('code'=>"views"),$_smarty_tpl);?>
</span>
		</div>
	</div>
</a>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['block_type']->value=='featuredChannel') {?>
<?php if (isset($_smarty_tpl->tpl_vars['user_cover'])) {$_smarty_tpl->tpl_vars['user_cover'] = clone $_smarty_tpl->tpl_vars['user_cover'];
$_smarty_tpl->tpl_vars['user_cover']->value = $_smarty_tpl->tpl_vars['userquery']->value->getCover($_smarty_tpl->tpl_vars['featured']->value['userid']); $_smarty_tpl->tpl_vars['user_cover']->nocache = null; $_smarty_tpl->tpl_vars['user_cover']->scope = 0;
} else $_smarty_tpl->tpl_vars['user_cover'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->getCover($_smarty_tpl->tpl_vars['featured']->value['userid']), null, 0);?>

<a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['featured']->value);?>
" id="user-<?php echo $_smarty_tpl->tpl_vars['featured']->value['userid'];?>
" class="featured-userlink">
	<img class="sm-cover img-responsive" src="<?php if ($_smarty_tpl->tpl_vars['user_cover']->value!='') {?> <?php echo $_smarty_tpl->tpl_vars['user_cover']->value;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/cover_default.jpg  <?php }?>"  size='368x124'>
	<div class="info">
		<img class="avatar" src="<?php echo avatar(array('details'=>$_smarty_tpl->tpl_vars['featured']->value),$_smarty_tpl);?>
">
		<h2><?php echo $_smarty_tpl->tpl_vars['featured']->value['username'];?>
</h2>
		<div class="clearfix">
			<span><?php echo number_format($_smarty_tpl->tpl_vars['featured']->value['total_videos']);?>
 <?php echo smarty_lang(array('code'=>"videos"),$_smarty_tpl);?>
</span>
			<span><?php echo number_format($_smarty_tpl->tpl_vars['featured']->value['profile_hits']);?>
 <?php echo smarty_lang(array('code'=>"views"),$_smarty_tpl);?>
</span>
		</div>
	</div>
</a>
<i class="btn-subscribe"><?php echo number_format($_smarty_tpl->tpl_vars['featured']->value['subscribers']);?>
 <?php echo smarty_lang(array('code'=>"subscriber(s)"),$_smarty_tpl);?>
</i>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['block_type']->value=='itemChannel'||$_smarty_tpl->tpl_vars['block_type']->value=='normal') {?>
<?php if (isset($_smarty_tpl->tpl_vars['user_cover_tune'])) {$_smarty_tpl->tpl_vars['user_cover_tune'] = clone $_smarty_tpl->tpl_vars['user_cover_tune'];
$_smarty_tpl->tpl_vars['user_cover_tune']->value = $_smarty_tpl->tpl_vars['userquery']->value->getCover($_smarty_tpl->tpl_vars['user']->value['userid']); $_smarty_tpl->tpl_vars['user_cover_tune']->nocache = null; $_smarty_tpl->tpl_vars['user_cover_tune']->scope = 0;
} else $_smarty_tpl->tpl_vars['user_cover_tune'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->getCover($_smarty_tpl->tpl_vars['user']->value['userid']), null, 0);?>

<div class="channel-holder">
	<a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['user']->value);?>
" id="user-<?php echo $_smarty_tpl->tpl_vars['user']->value['userid'];?>
" class="user-block">
		<img class="avatar" src="<?php echo avatar(array('details'=>$_smarty_tpl->tpl_vars['user']->value,'size'=>'m'),$_smarty_tpl);?>
">
		<h2><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</h2>
	</a>
	<div class="info clearfix">
		<div class="col">
			<strong>
				<?php echo smarty_lang(array('code'=>"views"),$_smarty_tpl);?>

				<span><?php echo number_format($_smarty_tpl->tpl_vars['user']->value['profile_hits']);?>
</span>
			</strong>
			<?php if (isSectionEnabled('videos')) {?>
			<strong>
				<?php echo smarty_lang(array('code'=>"videos"),$_smarty_tpl);?>

				<span><?php echo number_format($_smarty_tpl->tpl_vars['user']->value['total_videos']);?>
</span>
			</strong>
			<?php }?>
		</div>
		<div class="col">
			<strong>
				<?php echo smarty_lang(array('code'=>"subscribers"),$_smarty_tpl);?>

				<span><?php echo number_format($_smarty_tpl->tpl_vars['user']->value['subscribers']);?>
</span>
			</strong>
			<?php if (isSectionEnabled('photos')) {?>
			<strong>
				<?php echo smarty_lang(array('code'=>"photos"),$_smarty_tpl);?>

				<span><?php echo number_format($_smarty_tpl->tpl_vars['user']->value['total_photos']);?>
</span>
			</strong>
			<?php }?>
		</div>
	</div>
</div>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['block_type']->value=='subscribedby_channel') {?>

<?php if (isset($_smarty_tpl->tpl_vars["user_data"])) {$_smarty_tpl->tpl_vars["user_data"] = clone $_smarty_tpl->tpl_vars["user_data"];
$_smarty_tpl->tpl_vars["user_data"]->value = $_smarty_tpl->tpl_vars['userquery']->value->get_user_details($_smarty_tpl->tpl_vars['subscriber']->value); $_smarty_tpl->tpl_vars["user_data"]->nocache = null; $_smarty_tpl->tpl_vars["user_data"]->scope = 0;
} else $_smarty_tpl->tpl_vars["user_data"] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->get_user_details($_smarty_tpl->tpl_vars['subscriber']->value), null, 0);?>
<div class="channel-holder">
	<a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['user_data']->value['userid']);?>
" id="user-<?php echo $_smarty_tpl->tpl_vars['my_user']->value['userid'];?>
" class="user-block">
		<img class="avatar" src="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->getuserthumb($_smarty_tpl->tpl_vars['user_data']->value['userid']);?>
">
		<h2><?php echo $_smarty_tpl->tpl_vars['user_data']->value['username'];?>
</h2>
	</a>
	<div class="info">
		<span><?php echo number_format($_smarty_tpl->tpl_vars['user_data']->value['total_videos']);?>
 <?php echo smarty_lang(array('code'=>"videos"),$_smarty_tpl);?>
</span>
		<span><?php echo number_format($_smarty_tpl->tpl_vars['user_data']->value['profile_hits']);?>
 <?php echo smarty_lang(array('code'=>"views"),$_smarty_tpl);?>
</span>
		<span><?php echo smarty_lang(array('code'=>"subscribers"),$_smarty_tpl);?>
:  <?php echo number_format($_smarty_tpl->tpl_vars['user_data']->value['subscribers']);?>
</span>
	</div>
	
</div>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['block_type']->value=='subscribedby_list') {?>

<?php if (isset($_smarty_tpl->tpl_vars["user_data"])) {$_smarty_tpl->tpl_vars["user_data"] = clone $_smarty_tpl->tpl_vars["user_data"];
$_smarty_tpl->tpl_vars["user_data"]->value = $_smarty_tpl->tpl_vars['userquery']->value->get_user_details($_smarty_tpl->tpl_vars['subscriber']->value); $_smarty_tpl->tpl_vars["user_data"]->nocache = null; $_smarty_tpl->tpl_vars["user_data"]->scope = 0;
} else $_smarty_tpl->tpl_vars["user_data"] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->get_user_details($_smarty_tpl->tpl_vars['subscriber']->value), null, 0);?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['user_data']->value['userid']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['username'];?>
" id="user-<?php echo $_smarty_tpl->tpl_vars['user_data']->value['userid'];?>
" class="sub-avatar">
		<img class="avatar img-responsive img-circle"  src="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->getuserthumb($_smarty_tpl->tpl_vars['user_data']->value['userid']);?>
">
	</a>
	<span><?php echo $_smarty_tpl->tpl_vars['user_data']->value['username'];?>
</span>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['block_type']->value=='small') {?>
<div class="col-md-2" id="user-<?php echo $_smarty_tpl->tpl_vars['user']->value['userid'];?>
" align="center">
	<a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['user']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</a>
	<a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['user']->value);?>
">
		<img src="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->getuserthumb($_smarty_tpl->tpl_vars['user']->value);?>
" class="img-thumbnail" class="user_mid_thumb">
	</a>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['block_type']->value=='medium') {?>
<div class="user_block_med" id="user-<?php echo $_smarty_tpl->tpl_vars['user']->value['userid'];?>
">
	<div class="thumb_container_medium" >
		<a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['user']->value);?>
">
			<img src="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->getuserthumb($_smarty_tpl->tpl_vars['user']->value);?>
" class="img-thumbnail" class="user_thumb_medium">
		</a>
	</div>
	<div class="prof_title"><a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['user']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</a></div>
	<?php echo number_format($_smarty_tpl->tpl_vars['user']->value['total_videos']);?>
 <?php echo smarty_lang(array('code'=>"videos"),$_smarty_tpl);?>
 <?php echo number_format($_smarty_tpl->tpl_vars['user']->value['profile_hits']);?>
 <?php echo smarty_lang(array('code'=>"views"),$_smarty_tpl);?>

</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['block_type']->value=="friends") {?>
<div class="pull-left marginLeft" id="user-<?php echo $_smarty_tpl->tpl_vars['user']->value['userid'];?>
">
	<a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['user']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
">
		<img class="img-thumbnail" src="<?php echo avatar(array('details'=>$_smarty_tpl->tpl_vars['user']->value,'size'=>'small'),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
" />
	</a>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['block_type']->value=="topic_view") {?>
<div class="topicStarterAvatar moveL">
	<i class="topicStarterAvatarBG" style="background:url(<?php echo avatar(array('details'=>$_smarty_tpl->tpl_vars['user']->value),$_smarty_tpl);?>
) center no-repeat; width:56px; height:56px;"><a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['user']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</a></i>
</div>
<?php }?>

<script>
	$(document).ready(function (){
		var id = '<?php echo $_smarty_tpl->tpl_vars['user']->value['userid'];?>
';
		$('#subuser-' + id).on({
			click: function(e){
				e.preventDefault();
				_cb.subscribeToChannel(id,'subscribe_user','video_detail_result_cont');
			}
		});
	});
</script><?php }} ?>
