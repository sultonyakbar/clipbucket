<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 11:04:12
         compiled from "C:\xampp\htdocs\clipbucket\styles\cb_28\layout\view_channel.html" */ ?>
<?php /*%%SmartyHeaderCode:2150959940a8c482917-02378354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74e2a8462087dc399f69397cfe163bd4e87bf3d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\styles\\cb_28\\layout\\view_channel.html',
      1 => 1502865949,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2150959940a8c482917-02378354',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userquery' => 0,
    'myAccountLinks' => 0,
    'user' => 0,
    'uservideos' => 0,
    'mainVideo' => 0,
    'cbvid' => 0,
    'first_video' => 0,
    'theme' => 0,
    'u_control' => 0,
    'p' => 0,
    'u' => 0,
    'channel_profile_fields' => 0,
    'field_group' => 0,
    'field' => 0,
    'usercat' => 0,
    'total_videos' => 0,
    'photos' => 0,
    'p_list' => 0,
    'playlists' => 0,
    'cbfeeds' => 0,
    'userFeeds' => 0,
    'userFeed' => 0,
    'popular_users' => 0,
    'popular' => 0,
    'extensions' => 0,
    'baseurl' => 0,
    'loadMoreLang' => 0,
    'total_photos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_59940a8ca74ef8_17915372',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59940a8ca74ef8_17915372')) {function content_59940a8ca74ef8_17915372($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['myAccountLinks'])) {$_smarty_tpl->tpl_vars['myAccountLinks'] = clone $_smarty_tpl->tpl_vars['myAccountLinks'];
$_smarty_tpl->tpl_vars['myAccountLinks']->value = $_smarty_tpl->tpl_vars['userquery']->value->my_account_links(); $_smarty_tpl->tpl_vars['myAccountLinks']->nocache = null; $_smarty_tpl->tpl_vars['myAccountLinks']->scope = 0;
} else $_smarty_tpl->tpl_vars['myAccountLinks'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->my_account_links(), null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['leftMenuLinks'])) {$_smarty_tpl->tpl_vars['leftMenuLinks'] = clone $_smarty_tpl->tpl_vars['leftMenuLinks'];
$_smarty_tpl->tpl_vars['leftMenuLinks']->value = array_slice($_smarty_tpl->tpl_vars['myAccountLinks']->value,7); $_smarty_tpl->tpl_vars['leftMenuLinks']->nocache = null; $_smarty_tpl->tpl_vars['leftMenuLinks']->scope = 0;
} else $_smarty_tpl->tpl_vars['leftMenuLinks'] = new Smarty_variable(array_slice($_smarty_tpl->tpl_vars['myAccountLinks']->value,7), null, 0);?>
<?php echo smarty_lang(array('code'=>'channel','assign'=>'object_type'),$_smarty_tpl);?>

<?php ob_start();?><?php echo smarty_lang(array('code'=>"load_more"),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if (isset($_smarty_tpl->tpl_vars['loadMoreLang'])) {$_smarty_tpl->tpl_vars['loadMoreLang'] = clone $_smarty_tpl->tpl_vars['loadMoreLang'];
$_smarty_tpl->tpl_vars['loadMoreLang']->value = $_tmp1; $_smarty_tpl->tpl_vars['loadMoreLang']->nocache = null; $_smarty_tpl->tpl_vars['loadMoreLang']->scope = 0;
} else $_smarty_tpl->tpl_vars['loadMoreLang'] = new Smarty_variable($_tmp1, null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['uservideos'])) {$_smarty_tpl->tpl_vars['uservideos'] = clone $_smarty_tpl->tpl_vars['uservideos'];
$_smarty_tpl->tpl_vars['uservideos']->value = get_videos(array("user"=>$_smarty_tpl->tpl_vars['user']->value['userid'],"order"=>"date_added DESC","limit"=>9)); $_smarty_tpl->tpl_vars['uservideos']->nocache = null; $_smarty_tpl->tpl_vars['uservideos']->scope = 0;
} else $_smarty_tpl->tpl_vars['uservideos'] = new Smarty_variable(get_videos(array("user"=>$_smarty_tpl->tpl_vars['user']->value['userid'],"order"=>"date_added DESC","limit"=>9)), null, 0);?>

<?php if (isset($_smarty_tpl->tpl_vars['total_videos'])) {$_smarty_tpl->tpl_vars['total_videos'] = clone $_smarty_tpl->tpl_vars['total_videos'];
$_smarty_tpl->tpl_vars['total_videos']->value = $_smarty_tpl->tpl_vars['user']->value['total_videos']; $_smarty_tpl->tpl_vars['total_videos']->nocache = null; $_smarty_tpl->tpl_vars['total_videos']->scope = 0;
} else $_smarty_tpl->tpl_vars['total_videos'] = new Smarty_variable($_smarty_tpl->tpl_vars['user']->value['total_videos'], null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['total_photos'])) {$_smarty_tpl->tpl_vars['total_photos'] = clone $_smarty_tpl->tpl_vars['total_photos'];
$_smarty_tpl->tpl_vars['total_photos']->value = $_smarty_tpl->tpl_vars['user']->value['total_photos']; $_smarty_tpl->tpl_vars['total_photos']->nocache = null; $_smarty_tpl->tpl_vars['total_photos']->scope = 0;
} else $_smarty_tpl->tpl_vars['total_photos'] = new Smarty_variable($_smarty_tpl->tpl_vars['user']->value['total_photos'], null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['uservideos']->value) {?>
	<?php if (isset($_smarty_tpl->tpl_vars['mainVideo'])) {$_smarty_tpl->tpl_vars['mainVideo'] = clone $_smarty_tpl->tpl_vars['mainVideo'];
$_smarty_tpl->tpl_vars['mainVideo']->value = userMainVideo($_smarty_tpl->tpl_vars['uservideos']->value); $_smarty_tpl->tpl_vars['mainVideo']->nocache = null; $_smarty_tpl->tpl_vars['mainVideo']->scope = 0;
} else $_smarty_tpl->tpl_vars['mainVideo'] = new Smarty_variable(userMainVideo($_smarty_tpl->tpl_vars['uservideos']->value), null, 0);?>
	<?php if (isset($_smarty_tpl->tpl_vars['first_video'])) {$_smarty_tpl->tpl_vars['first_video'] = clone $_smarty_tpl->tpl_vars['first_video'];
$_smarty_tpl->tpl_vars['first_video']->value = $_smarty_tpl->tpl_vars['cbvid']->value->get_video($_smarty_tpl->tpl_vars['mainVideo']->value); $_smarty_tpl->tpl_vars['first_video']->nocache = null; $_smarty_tpl->tpl_vars['first_video']->scope = 0;
} else $_smarty_tpl->tpl_vars['first_video'] = new Smarty_variable($_smarty_tpl->tpl_vars['cbvid']->value->get_video($_smarty_tpl->tpl_vars['mainVideo']->value), null, 0);?>
<?php }?>


<div id="main" class="container clearfix">
	<div class="clearfix">
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/view_channel/channel_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
	<div class="clearfix report-block" id="report-user-form" style="display:none">
		<?php echo show_flag_form(array('id'=>$_smarty_tpl->tpl_vars['user']->value['userid'],'type'=>'user'),$_smarty_tpl);?>
	
	</div>
	<div class="clearfix">
		<section id="content" class="clearfix">
			<?php if ($_smarty_tpl->tpl_vars['uservideos']->value) {?>
			<div class="player-items">
				<div class="clearfix player-holder">
					<div id="cb_player" class="clearfix cb_player">
						<?php echo flashPlayer(array('vdetails'=>$_smarty_tpl->tpl_vars['first_video']->value,'width'=>'100%','height'=>'355'),$_smarty_tpl);?>

					</div>
				</div>
				<img src="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/player-ratio.png" class="playerRatio">
			</div>
			<?php }?>
			<div id="messageFav" class="alert alert-info marginTop" style="display:none"></div>
			<div class="channel-tabs flat-tabs clearfix">
				<ul class="clearfix nav nav-tabs">
					<li>
						<a href="#user-info" data-toggle="tab"><?php echo smarty_lang(array('code'=>'info'),$_smarty_tpl);?>
</a>
					</li>
					<?php if (isSectionEnabled('videos')&&$_smarty_tpl->tpl_vars['u_control']->value['show_my_videos']!='no') {?>
					<li class="active">
						<a href="#user-videos" data-toggle="tab"><?php echo smarty_lang(array('code'=>'videos'),$_smarty_tpl);?>
</a>
					</li>
					<?php }?>
					<?php if (isSectionEnabled('photos')&&$_smarty_tpl->tpl_vars['u_control']->value['show_my_photos']!='no') {?>
					<li <?php if ($_smarty_tpl->tpl_vars['u_control']->value['show_my_videos']=='no'||!isSectionEnabled('videos')) {?>class="active"<?php }?>>
						<a href="#user-photos" data-toggle="tab"><?php echo smarty_lang(array('code'=>'photos'),$_smarty_tpl);?>
</a>
					</li>
					<li>
					<?php }?>
					<li>
						<a href="#user-playlist" data-toggle="tab"><?php echo smarty_lang(array('code'=>'playlists'),$_smarty_tpl);?>
</a>
					</li>
				</ul>
				<div class="tab-content clearfix">
					<div class="tab-pane fade in clearfix <?php if ($_smarty_tpl->tpl_vars['u_control']->value['show_my_videos']=='no'&&$_smarty_tpl->tpl_vars['u_control']->value['show_my_photos']=='no') {?>active<?php }?>}" id="user-info">
						<div class="clearfix watch-vid-details">
							<h2><?php echo smarty_lang(array('code'=>'user_activity'),$_smarty_tpl);?>
</h2>
							<ul class="clearfix desc-list">
								<?php if ($_smarty_tpl->tpl_vars['p']->value['profile_title']) {?>
								<li>
									<strong><?php echo smarty_lang(array('code'=>'Title'),$_smarty_tpl);?>
</strong>:<?php echo $_smarty_tpl->tpl_vars['p']->value['profile_title'];?>

								</li>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['p']->value['profile_desc']) {?>
								<li>
									<strong><?php echo smarty_lang(array('code'=>'Description'),$_smarty_tpl);?>
</strong>:<?php echo $_smarty_tpl->tpl_vars['p']->value['profile_desc'];?>

								</li>
								<?php }?>
								<li>
									<strong><?php echo smarty_lang(array('code'=>'joined'),$_smarty_tpl);?>
</strong>:&nbsp;<?php echo niceTime($_smarty_tpl->tpl_vars['u']->value['doj']);?>

								</li>
								<li>
									<strong><?php echo smarty_lang(array('code'=>'user_last_login'),$_smarty_tpl);?>
</strong>:<?php echo niceTime($_smarty_tpl->tpl_vars['u']->value['last_logged']);?>

								</li>
								<li>
									<strong><?php echo smarty_lang(array('code'=>'online_status'),$_smarty_tpl);?>
</strong>:&nbsp;
									<?php if ($_smarty_tpl->tpl_vars['userquery']->value->isOnline($_smarty_tpl->tpl_vars['u']->value['last_active'],$_smarty_tpl->tpl_vars['p']->value['online_status'])) {?>
										<span style="color:#060"><?php echo smarty_lang(array('code'=>'online'),$_smarty_tpl);?>
</span>
									<?php } else { ?>
										<span style="color:#ed0000"><?php echo smarty_lang(array('code'=>'offline'),$_smarty_tpl);?>
</span>
									<?php }?>
								</li>
							</ul>
							<?php if (isset($_smarty_tpl->tpl_vars['channel_profile_fields'])) {$_smarty_tpl->tpl_vars['channel_profile_fields'] = clone $_smarty_tpl->tpl_vars['channel_profile_fields'];
$_smarty_tpl->tpl_vars['channel_profile_fields']->value = $_smarty_tpl->tpl_vars['userquery']->value->load_user_fields($_smarty_tpl->tpl_vars['p']->value,'profile'); $_smarty_tpl->tpl_vars['channel_profile_fields']->nocache = null; $_smarty_tpl->tpl_vars['channel_profile_fields']->scope = 0;
} else $_smarty_tpl->tpl_vars['channel_profile_fields'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->load_user_fields($_smarty_tpl->tpl_vars['p']->value,'profile'), null, 0);?>
							<?php  $_smarty_tpl->tpl_vars['field_group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['channel_profile_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['field_group']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['field_group']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['profile_groups']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['field_group']->key => $_smarty_tpl->tpl_vars['field_group']->value) {
$_smarty_tpl->tpl_vars['field_group']->_loop = true;
 $_smarty_tpl->tpl_vars['field_group']->iteration++;
 $_smarty_tpl->tpl_vars['field_group']->last = $_smarty_tpl->tpl_vars['field_group']->iteration === $_smarty_tpl->tpl_vars['field_group']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['profile_groups']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['profile_groups']['last'] = $_smarty_tpl->tpl_vars['field_group']->last;
?>
							<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['profile_groups']['iteration']==2) {?>
							<div id="moreDetailsDIV" style="display:none">
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['field_group']->value['channel_view']!='no') {?>     
								<div class="clearfix">
									<h2><?php echo $_smarty_tpl->tpl_vars['field_group']->value['group_name'];?>
</h2>
									<ul class="clearfix desc-list">
										<?php if ($_smarty_tpl->tpl_vars['field_group']->value['group_id']=='profile_location') {?>
										<li>
											<strong><?php echo smarty_lang(array('code'=>'country'),$_smarty_tpl);?>
</strong>:&nbsp;<?php echo get_country($_smarty_tpl->tpl_vars['u']->value['country']);?>

										</li>
										<?php }?>

										<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['field_group']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
										<?php if ($_smarty_tpl->tpl_vars['field']->value['auto_view']=='yes'&&$_smarty_tpl->tpl_vars['field']->value['value']) {?>
										<li>
										<?php if ($_smarty_tpl->tpl_vars['field']->value['type']!='textarea'&&$_smarty_tpl->tpl_vars['field']->value['type']!='text'&&$_smarty_tpl->tpl_vars['field']->value['type']!='textfield') {?>
											<strong><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</strong>:&nbsp;<?php echo input_value(array('input'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl);?>

											<?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type']=='textarea') {?>
											<strong><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</strong>:&nbsp;<?php echo nl2br($_smarty_tpl->tpl_vars['field']->value['value']);?>

											<?php } else { ?>
											<strong><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</strong>:&nbsp;<?php echo input_value(array('input'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl);?>

										<?php }?>
										</li>
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['field_group']->value['group_id']=='profile_basic_info'&&$_smarty_tpl->tpl_vars['field']->value['name']=='relation_status'&&$_smarty_tpl->tpl_vars['p']->value['show_dob']!='no') {?>
										<li>
											<strong><?php echo smarty_lang(array('code'=>'user_date_of_birth'),$_smarty_tpl);?>
</strong>:&nbsp;<?php echo $_smarty_tpl->tpl_vars['u']->value['dob'];?>

										</li>
										<?php }?>
										<?php } ?>
										<?php if (isset($_smarty_tpl->tpl_vars['usercat'])) {$_smarty_tpl->tpl_vars['usercat'] = clone $_smarty_tpl->tpl_vars['usercat'];
$_smarty_tpl->tpl_vars['usercat']->value = $_smarty_tpl->tpl_vars['userquery']->value->get_category_name($_smarty_tpl->tpl_vars['user']->value['category']); $_smarty_tpl->tpl_vars['usercat']->nocache = null; $_smarty_tpl->tpl_vars['usercat']->scope = 0;
} else $_smarty_tpl->tpl_vars['usercat'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->get_category_name($_smarty_tpl->tpl_vars['user']->value['category']), null, 0);?>
										<li><strong>Category: </strong><?php echo $_smarty_tpl->tpl_vars['usercat']->value['category_name'];?>
</li>
									</ul>
								</div>
							<?php }?>
							<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['profile_groups']['last']) {?>
							</div>
							<?php }?>
							<?php } ?>
							<div id="moreDetails" class="channelFieldset">
								<a class="btn btn-primary btn-sm channelLegend" href="javascript:void(0)" onClick="$('#moreDetails').hide(); $('#moreDetailsDIV').show();"><?php echo smarty_lang(array('code'=>'more'),$_smarty_tpl);?>
</a>
							</div>
						</div>
					</div>
					<div class="tab-pane videos fade in clearfix <?php if ($_smarty_tpl->tpl_vars['u_control']->value['show_my_videos']!='no') {?>active<?php }?>" id="user-videos">
						<div class="clearfix row user_vids">
							<?php if ($_smarty_tpl->tpl_vars['uservideos']->value) {?>
								<div id="usr-vids" class="clearfix">
								<?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['uservideos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
?>
									<div class="item-video col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/videos/video.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('display_type'=>'homeVideos'), 0);?>

									</div>
								<?php } ?>
								</div>
								<?php if ($_smarty_tpl->tpl_vars['total_videos']->value>9) {?>
									<div class="clearfix text-center">
										<button id="more-view-channel" class="btn btn-loadmore" dataLimit="9" dataHit="2"><?php echo smarty_lang(array('code'=>'load_more'),$_smarty_tpl);?>
</button>
									</div>
								<?php }?>
							<?php } else { ?>
								<div class="well well-info"><?php echo smarty_lang(array('code'=>'no_results_found'),$_smarty_tpl);?>
</div>
							<?php }?>
						</div>
					</div>
					<div class="tab-pane fade in clearfix <?php if ($_smarty_tpl->tpl_vars['u_control']->value['show_my_videos']=='no') {?>active<?php }?>" id="user-photos">
						<div id="usr-photos" class="clearfix row user_photos">
						<?php if (isset($_smarty_tpl->tpl_vars['photos'])) {$_smarty_tpl->tpl_vars['photos'] = clone $_smarty_tpl->tpl_vars['photos'];
$_smarty_tpl->tpl_vars['photos']->value = get_photos(array("user"=>$_smarty_tpl->tpl_vars['user']->value['userid'],"limit"=>9)); $_smarty_tpl->tpl_vars['photos']->nocache = null; $_smarty_tpl->tpl_vars['photos']->scope = 0;
} else $_smarty_tpl->tpl_vars['photos'] = new Smarty_variable(get_photos(array("user"=>$_smarty_tpl->tpl_vars['user']->value['userid'],"limit"=>9)), null, 0);?>
							<?php if ($_smarty_tpl->tpl_vars['photos']->value) {?>
								<?php  $_smarty_tpl->tpl_vars['p_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p_list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['photos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p_list']->key => $_smarty_tpl->tpl_vars['p_list']->value) {
$_smarty_tpl->tpl_vars['p_list']->_loop = true;
?>
								<div class="item-photo col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/photo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('photo'=>$_smarty_tpl->tpl_vars['p_list']->value,'display_type'=>"default_photo"), 0);?>

								</div>
								<?php } ?>
								<?php if ($_smarty_tpl->tpl_vars['user']->value['total_photos']>9) {?> 
									<div class="clearfix text-center">
										<button id="more-channel-photos" class="btn btn-loadmore" dataLimit="9" dataHit="2"><?php echo smarty_lang(array('code'=>'load_more'),$_smarty_tpl);?>
</button>
									</div>
								<?php }?>
							<?php } else { ?>
								<div class="well well-info"><?php echo smarty_lang(array('code'=>'no_results_found'),$_smarty_tpl);?>
</div>
							<?php }?>
						</div>
					</div>
					<div class="tab-pane fade in clearfix" id="user-playlist">
						
						<?php if (isset($_smarty_tpl->tpl_vars['playlists'])) {$_smarty_tpl->tpl_vars['playlists'] = clone $_smarty_tpl->tpl_vars['playlists'];
$_smarty_tpl->tpl_vars['playlists']->value = $_smarty_tpl->tpl_vars['cbvid']->value->action->get_playlists(array("user"=>$_smarty_tpl->tpl_vars['u']->value['userid'],"order"=>"date_added DESC","limit"=>'')); $_smarty_tpl->tpl_vars['playlists']->nocache = null; $_smarty_tpl->tpl_vars['playlists']->scope = 0;
} else $_smarty_tpl->tpl_vars['playlists'] = new Smarty_variable($_smarty_tpl->tpl_vars['cbvid']->value->action->get_playlists(array("user"=>$_smarty_tpl->tpl_vars['u']->value['userid'],"order"=>"date_added DESC","limit"=>'')), null, 0);?>
						
						<?php if ($_smarty_tpl->tpl_vars['playlists']->value) {?>
						
						<div class="clearfix row ch-playlists">
						
						<?php  $_smarty_tpl->tpl_vars['playlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['playlist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['playlists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['playlist']->key => $_smarty_tpl->tpl_vars['playlist']->value) {
$_smarty_tpl->tpl_vars['playlist']->_loop = true;
?>
							<div class="playlist-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/playlist/playlist-block.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

							</div>
						<?php } ?>
						
						</div>
						<?php } else { ?>
							<div class="well well-info"><?php echo smarty_lang(array('code'=>'no_playlists'),$_smarty_tpl);?>
</div>
						<?php }?>
					</div>
				</div>
			</div>
		</section>
		<aside id="sidebar">
			<?php if (isset($_smarty_tpl->tpl_vars['userFeeds'])) {$_smarty_tpl->tpl_vars['userFeeds'] = clone $_smarty_tpl->tpl_vars['userFeeds'];
$_smarty_tpl->tpl_vars['userFeeds']->value = $_smarty_tpl->tpl_vars['cbfeeds']->value->getUserFeeds($_smarty_tpl->tpl_vars['u']->value); $_smarty_tpl->tpl_vars['userFeeds']->nocache = null; $_smarty_tpl->tpl_vars['userFeeds']->scope = 0;
} else $_smarty_tpl->tpl_vars['userFeeds'] = new Smarty_variable($_smarty_tpl->tpl_vars['cbfeeds']->value->getUserFeeds($_smarty_tpl->tpl_vars['u']->value), null, 0);?>
			<?php if ($_smarty_tpl->tpl_vars['userFeeds']->value&&userid()) {?>
			<h2><?php echo smarty_lang(array('code'=>"user_activity"),$_smarty_tpl);?>
</h2>
			<div id="userFeeds" class="user-activities clearfix sidebar-items">
				<?php  $_smarty_tpl->tpl_vars['userFeed'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['userFeed']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userFeeds']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['userFeed']->key => $_smarty_tpl->tpl_vars['userFeed']->value) {
$_smarty_tpl->tpl_vars['userFeed']->_loop = true;
?>
					<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/feed.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('feed'=>$_smarty_tpl->tpl_vars['userFeed']->value), 0);?>

				<?php } ?>
			</div>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['popular_users'])) {$_smarty_tpl->tpl_vars['popular_users'] = clone $_smarty_tpl->tpl_vars['popular_users'];
$_smarty_tpl->tpl_vars['popular_users']->value = get_users(array('order'=>'profile_hits DESC limit 5')); $_smarty_tpl->tpl_vars['popular_users']->nocache = null; $_smarty_tpl->tpl_vars['popular_users']->scope = 0;
} else $_smarty_tpl->tpl_vars['popular_users'] = new Smarty_variable(get_users(array('order'=>'profile_hits DESC limit 5')), null, 0);?>
			<?php if ($_smarty_tpl->tpl_vars['popular_users']->value) {?>
			<h2><?php echo smarty_lang(array('code'=>"Popular Users"),$_smarty_tpl);?>
</h2>
			<div class="clearfix sidebar-channels">
				<?php  $_smarty_tpl->tpl_vars['popular'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['popular']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['popular_users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['popular']->key => $_smarty_tpl->tpl_vars['popular']->value) {
$_smarty_tpl->tpl_vars['popular']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['popular']->value['username']==$_GET['user']) {?> 
					<?php continue 1?>
				<?php }?>
				<div class="clearfix channel-item">
					<a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['popular']->value);?>
" class="avatar">
						<img src="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->getuserthumb($_smarty_tpl->tpl_vars['popular']->value,'small');?>
" width="50" height="50" class="img-circle">
					</a>
					<div class="channel-info">
						<h3><a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['popular']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['popular']->value['username'];?>
</a></h3>
						<div class="clearfix views-videos">
							<span><?php echo number_format($_smarty_tpl->tpl_vars['popular']->value['profile_hits']);?>
 <?php echo smarty_lang(array('code'=>'views'),$_smarty_tpl);?>
</span>
							<span><?php echo number_format($_smarty_tpl->tpl_vars['popular']->value['total_videos']);?>
 <?php echo smarty_lang(array('code'=>'videos'),$_smarty_tpl);?>
</span>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
			<?php }?>
		</aside>
	</div>
	
		
</div>
<script>
/*$('#changeCover').on("click", function(){

$('#cover_info').show();

});*/


(function(window){
  $(document).ready(function(){
	$("#report-user").on("click",function(){
		$("#report-user-form").toggle();
	});
	var extensions = "<?php echo $_smarty_tpl->tpl_vars['extensions']->value;?>
";
	var baseurl = '<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
';
	var channelId = "<?php echo $_smarty_tpl->tpl_vars['user']->value['userid'];?>
";
	extensions = (extensions.substring(0, extensions.length - 1)) + ",png,jpeg";
	$.get("<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/js/plupload/js/plupload.full.min.js", function(e){
	  var uploader = new plupload.Uploader({
		  browse_button: 'changeCover',
		  runtimes : 'html5,flash,silverlight,html4',
		  url : baseurl + "/edit_account.php?mode=avatar_bg",
		  file_data_name : "coverPhoto",
		  filters: {
			mime_types : [
			  { title : "Image files", extensions : extensions },
			],
			max_file_size: "2mb",
			prevent_duplicates: false,
		  }
	  });
	  window.uploader = uploader;
	  uploader.init();
	  uploader.bind("FilesAdded", function(up, uploadedFiles){
		$(".cb-live-background").attr("src",baseurl+'/images/loading.png');
		up.start();
	  });
	  uploader.bind('UploadComplete', function(plupload, files, response){
		
	  });

	  uploader.bind("FileUploaded", function(plupload, files, response){
		var response = $.parseJSON(response.response);
		if(response.status == true){
		  $(".cb-live-background").attr("src",response.url);
		}else{
		  $(".cb-live-background").attr("src",response.url);
		  alert(response.msg);
		}
	  });

	  uploader.bind("Error", function(plupload, error){
		alert(error.message);
	  });
	});
	$("#coverContainer").hover(function(e){
		//$("#changeCover").removeClass("sr-only");
		$("#changeCover").show();
	}, function(e){
	  // $("#changeCover").addClass("sr-only");
		$("#changeCover").hide();
	});
	$("#channelVoteUp, #channelVoteDown").one({
	  click: function(e){
		var vote = "";
		var id = "" + this.id;
		var likes = parseInt($("#likes").text());
		var totalVotes = parseInt($("#totalVotes").text()) + 1;
		if(this.id == "channelVoteDown"){
		  vote  = "no";
		   likes = likes - 1;

		}else{
		  vote = "yes";
		  likes = likes + 1;
		}
		$.ajax({
		  type: "POST",
		  url: "<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/actions/vote_channel.php",
		  data: { vote: vote, channelId : channelId}
		}).success(function(data){
		  $("#likes").text(likes);
		  $("#totalVotes").text(totalVotes);
		});
	  }
	})
  });
})(window);

/* player height and editerpick activities height */
	var WinWidHome = "";
	function editpickVideos(){
		WinWidHome = $(window).width();
		if(WinWidHome > 991)
		{
			console.log("height "+WinWidHome);
			var bannerHeight = $(".player-items").height();
			bannerHeight = bannerHeight - 43;
			console.log("height "+bannerHeight);
			$(".user-activities").css({
				"max-height" : bannerHeight+"px",
				"overflow-y" : "auto"
			});
		}
		else
		{
			console.log("height "+WinWidHome);
			
			$(".user-activities").css("max-height","auto");
		}
	}
/* */
	$(document).ready(function (){
		editpickVideos();
		var id ='<?php echo $_smarty_tpl->tpl_vars['user']->value['userid'];?>
';
		$('#subscribe_channel').on({
		click: function(e){
			e.preventDefault();
		   _cb.subscribeToChannelNew(id,'subscribe_user');
		   
		 }
		});

	});

	$('#myTab a, #reportTab a').click(function (e) {
		e.preventDefault()
		$(this).tab('show')
	});
	$('#load_more_playlist').click(function() 
	 { 
	  var limit = $(this).attr("limit");
	  var mode = 'load_more';
	  var inner_mode = 'load_more_playlist';
	  var append_id = 'load_more_channel_playlist';
	  var attrb = $(this);
	  var cat_id = $(this).attr("cat-id");
	  var total = $(this).attr("total");
	  load_more(limit,mode,inner_mode,append_id,attrb,cat_id,total);
	 });

	var loadMoreLang = "<?php echo $_smarty_tpl->tpl_vars['loadMoreLang']->value;?>
";
	$('#container').on("click","#more-view-channel",function(){
		loadHit = $(this).attr('dataHit');
		loadLimit = $(this).attr('dataLimit');
		user = "<?php echo $_smarty_tpl->tpl_vars['user']->value['userid'];?>
";
		totalVids = "<?php echo $_smarty_tpl->tpl_vars['total_videos']->value;?>
";
		totalShown = loadHit * 9 - 9;
		if (totalVids - totalShown <= 9) {
			loadMore = false;
		} else {
			loadMore = true;
		}

		nextHit = parseInt(loadHit) + 1;
		$.ajax({
			url: baseurl + "/ajax/view_channel.php",
			type: "post",
			dataType: "html",
			data: {
				"mode":'channelMore',
				"loadHit":loadHit,
				"loadLimit":loadLimit,
				"totalVids":totalVids,
				"userid":user,
			},
			beforeSend: function() {
				$(document).find('#more-view-channel').text('Loading videos..')
			},

			success: function(data) {
				$('#more-view-channel').remove();
				if (data.length > 1) {
					$(data).appendTo('#usr-vids').fadeIn('slow');
					if (loadMore == true) {
						$('<div class="clearfix text-center"><button id="more-view-channel" class="btn btn-loadmore" dataLimit="'+loadLimit+'" dataHit="'+nextHit+'">'+loadMoreLang+'</button></div>').appendTo('.user_vids').fadeIn('slow');
					}
					var moveTo = $( ".recentAppending" ).last().offset().top,
					currWidth = $(window).width();
					moveTo = moveTo - 630;
					if (currWidth > 767) {
						thakkiLoading(moveTo);
					}
				} else {
					$('<div class="clearfix text-center"><button id="more-view-channel" class="btn btn-loadmore" disabled="disabled">Unable to fetch more</button></div>').appendTo('.user_vids').fadeIn('slow');
				}

				
			}
		});
	});

	$('#container').on("click","#more-channel-photos",function(){
		loadHit = $(this).attr('dataHit');
		loadLimit = $(this).attr('dataLimit');
		user = "<?php echo $_GET['user'];?>
";
		totalPhotos = "<?php echo $_smarty_tpl->tpl_vars['total_photos']->value;?>
";
		totalShown = loadHit * 9 - 9;
		if (totalPhotos - totalShown <= 9) {
			loadMore = false;
		} else {
			loadMore = true;
		}

		nextHit = parseInt(loadHit) + 1;
		$.ajax({
			url: baseurl + "/ajax/view_channel.php",
			type: "post",
			dataType: "html",
			data: {
				"mode":'channelMorePhotos',
				"loadHit":loadHit,
				"loadLimit":loadLimit,
				"totalPhotos":totalPhotos,
				"userid":user,
			},
			beforeSend: function() {
				$(document).find('#more-channel-photos').text('Loading photos..')
			},

			success: function(data) {
				$('#more-channel-photos').remove();
				if (data.length > 1) {
					$(data).appendTo('#usr-photos').fadeIn('slow');
					if (loadMore == true) {
						$('<div class="clearfix text-center"><button id="more-channel-photos" class="btn btn-loadmore" dataLimit="'+loadLimit+'" dataHit="'+nextHit+'">Load More</button></div>').appendTo('.user_photos').fadeIn('slow');
					}

					var moveTo = $( ".photoAppending" ).last().offset().top,
					currWidth = $(window).width();
					moveTo = moveTo + 240;
					if (currWidth > 767) {
						thakkiLoading(moveTo);
					}
				} else {
					$('<div class="clearfix text-center"><button id="more-view-channel" class="btn btn-loadmore" disabled="disabled">Unable to fetch more</button></div>').appendTo('.user_vids').fadeIn('slow');
				}

				
			}
		});
	});
	/**/
	
	
	$('.playerRatio').load(function(){
		editpickVideos();
	});
	$(window).resize(function() {
		editpickVideos();
	});
</script><?php }} ?>
