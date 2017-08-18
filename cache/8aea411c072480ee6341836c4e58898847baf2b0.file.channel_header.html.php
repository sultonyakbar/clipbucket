<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 11:04:13
         compiled from "C:\xampp\htdocs\clipbucket\styles\cb_28\layout\blocks\view_channel\channel_header.html" */ ?>
<?php /*%%SmartyHeaderCode:3183459940a8da47834-19774403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8aea411c072480ee6341836c4e58898847baf2b0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\styles\\cb_28\\layout\\blocks\\view_channel\\channel_header.html',
      1 => 1502865953,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3183459940a8da47834-19774403',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'coverPhoto' => 0,
    'baseurl' => 0,
    'user' => 0,
    'p' => 0,
    'userquery' => 0,
    'friend_status' => 0,
    'u' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_59940a8dc2b0e0_87678385',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59940a8dc2b0e0_87678385')) {function content_59940a8dc2b0e0_87678385($_smarty_tpl) {?><div id="messageFav" class="channel-alert"></div>
<div class="cover" id="coverContainer">
	<div class="cover-holder clearfix">
		<img class="img-responsive cb-live-background" src="<?php if ($_smarty_tpl->tpl_vars['coverPhoto']->value!='') {?><?php echo $_smarty_tpl->tpl_vars['coverPhoto']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/images/cover_default.jpg <?php }?>" size='1140x276' alt="">
		
		<?php if ($_smarty_tpl->tpl_vars['user']->value['userid']==userid()) {?>
		<a href="#" class="btn btn-sm changeCover" id="changeCover"><?php echo smarty_lang(array('code'=>"update_cover"),$_smarty_tpl);?>
<span class="icon-photo"></span></a>
		<?php }?>

		<div class="ratting-counts clearfix">
			<?php if ($_smarty_tpl->tpl_vars['user']->value['userid']!=userid()) {?>
			<div class="user-ratting" id="rating_container">
				<?php echo show_video_rating(array('rating'=>$_smarty_tpl->tpl_vars['p']->value['rating'],'ratings'=>$_smarty_tpl->tpl_vars['p']->value['rated_by'],'total'=>'10','id'=>$_smarty_tpl->tpl_vars['p']->value['userid'],'type'=>'user'),$_smarty_tpl);?>

			</div>
			<?php }?>
			<ul class="counters">
			<?php if (isSectionEnabled('videos')) {?>
				<li>
					<i class="icon-videos"></i><?php echo prettyNum($_smarty_tpl->tpl_vars['user']->value['total_videos']);?>
 &nbsp;<span><?php echo smarty_lang(array('code'=>'videos'),$_smarty_tpl);?>
</span>
				</li>
			<?php }?>
			<?php if (isSectionEnabled('photos')) {?>
				<li>
					<i class="icon-photos"></i><?php echo prettyNum($_smarty_tpl->tpl_vars['user']->value['total_photos']);?>
 &nbsp;<span><?php echo smarty_lang(array('code'=>'photos'),$_smarty_tpl);?>
</span>
				</li>
			<?php }?>
				<li>
					<i class="icon-views"></i><?php echo prettyNum($_smarty_tpl->tpl_vars['user']->value['profile_hits']);?>
 &nbsp;<span><?php echo smarty_lang(array('code'=>'views'),$_smarty_tpl);?>
</span>
				</li>
				<li>
					<i class="icon-subscribers"></i><?php echo prettyNum($_smarty_tpl->tpl_vars['user']->value['subscribers']);?>
 &nbsp;<span><?php if ($_smarty_tpl->tpl_vars['user']->value['subscribers']<=1) {?><?php echo smarty_lang(array('code'=>'Subscriber'),$_smarty_tpl);?>
<?php } else { ?><?php echo smarty_lang(array('code'=>'Subscribers'),$_smarty_tpl);?>
<?php }?></span>
				
				</li>
			</ul>
		</div>
		<div class="friend-block clearfix">
			<?php if ($_smarty_tpl->tpl_vars['user']->value['userid']!=userid()) {?>
				<?php if (isset($_smarty_tpl->tpl_vars['friend_status'])) {$_smarty_tpl->tpl_vars['friend_status'] = clone $_smarty_tpl->tpl_vars['friend_status'];
$_smarty_tpl->tpl_vars['friend_status']->value = $_smarty_tpl->tpl_vars['userquery']->value->friendship_status(userid(),$_smarty_tpl->tpl_vars['user']->value['userid']); $_smarty_tpl->tpl_vars['friend_status']->nocache = null; $_smarty_tpl->tpl_vars['friend_status']->scope = 0;
} else $_smarty_tpl->tpl_vars['friend_status'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->friendship_status(userid(),$_smarty_tpl->tpl_vars['user']->value['userid']), null, 0);?>
				<?php if ($_smarty_tpl->tpl_vars['friend_status']->value=="f") {?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/manage_contacts.php?mode=delete&userid=<?php echo $_smarty_tpl->tpl_vars['u']->value['userid'];?>
"  class="btn btn-danger btn-sm new1">
					<?php echo smarty_lang(array('code'=>"unfriend"),$_smarty_tpl);?>

				</a>
				<?php } elseif ($_smarty_tpl->tpl_vars['friend_status']->value=="r") {?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/manage_contacts.php?mode=requests&confirm=<?php echo $_smarty_tpl->tpl_vars['u']->value['userid'];?>
"  class="btn btn-primary btn-sm new1">
					<?php echo smarty_lang(array('code'=>"accept_request"),$_smarty_tpl);?>

				</a>
				<?php } elseif ($_smarty_tpl->tpl_vars['friend_status']->value=='s') {?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/manage_contacts.php?mode=delete&userid=<?php echo $_smarty_tpl->tpl_vars['u']->value['userid'];?>
"  class="btn btn-primary btn-sm new1">
					<?php echo smarty_lang(array('code'=>"cancel_request"),$_smarty_tpl);?>

				</a>
				<?php } else { ?>
				<a href="javascript:void(0)"  class="btn btn-primary btn-sm new1" 
				   onclick="_cb.add_friendNew('<?php echo $_smarty_tpl->tpl_vars['user']->value['userid'];?>
','result_cont')"> 
					<?php echo smarty_lang(array('code'=>"add_as_friend"),$_smarty_tpl);?>

				<?php }?>
				</a>
			<?php }?>
		</div>
	</div>

	<div class="avatar">
		<img class="img-responsive img-circle" src="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->getUserThumb($_smarty_tpl->tpl_vars['user']->value);?>
">
	</div>

	<div class="profile-buttons clearfix">
		<h2><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</h2>
		<div class="btn-holder">
			<?php if ($_smarty_tpl->tpl_vars['user']->value['userid']!=userid()) {?>
				<button id="report-user" class="btn btn-default"><?php echo smarty_lang(array('code'=>"report_usr"),$_smarty_tpl);?>
</button>
				<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/private_message.php?mode=new_msg&to=<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
" class="btn btn-default">
					<?php echo smarty_lang(array('code'=>"user_send_message"),$_smarty_tpl);?>

				</a>
				<button id="subscribe_channel" class="btn btn-default"><?php echo smarty_lang(array('code'=>"subscribe"),$_smarty_tpl);?>
</button>
			<?php }?>
		</div>
	</div>
</div><?php }} ?>
