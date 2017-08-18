<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 10:43:17
         compiled from "C:\xampp\htdocs\clipbucket\styles\cb_28\layout\watch_video.html" */ ?>
<?php /*%%SmartyHeaderCode:13051599405a5957d19-09801939%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd7fd534a1a7ea40d85193859ba21c623c66ee20' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\styles\\cb_28\\layout\\watch_video.html',
      1 => 1502865950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13051599405a5957d19-09801939',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vdo' => 0,
    'video' => 0,
    'userquery' => 0,
    'Cbucket' => 0,
    'cbvid' => 0,
    'files' => 0,
    'file' => 0,
    'quality' => 0,
    'file_quality' => 0,
    'myquery' => 0,
    'relMode' => 0,
    'items' => 0,
    'item' => 0,
    'key' => 0,
    'current_key' => 0,
    'next_item_key' => 0,
    'count_index' => 0,
    'prev_item_key' => 0,
    'prev_videoLink' => 0,
    'next_videoLink' => 0,
    'cur_playlist' => 0,
    'playlist' => 0,
    'total_items' => 0,
    'videos' => 0,
    'type' => 0,
    'object_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_599405a5d5d950_23974552',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_599405a5d5d950_23974552')) {function content_599405a5d5d950_23974552($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['video'])) {$_smarty_tpl->tpl_vars['video'] = clone $_smarty_tpl->tpl_vars['video'];
$_smarty_tpl->tpl_vars['video']->value = $_smarty_tpl->tpl_vars['vdo']->value; $_smarty_tpl->tpl_vars['video']->nocache = null; $_smarty_tpl->tpl_vars['video']->scope = 0;
} else $_smarty_tpl->tpl_vars['video'] = new Smarty_variable($_smarty_tpl->tpl_vars['vdo']->value, null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['type'])) {$_smarty_tpl->tpl_vars['type'] = clone $_smarty_tpl->tpl_vars['type'];
$_smarty_tpl->tpl_vars['type']->value = 'video'; $_smarty_tpl->tpl_vars['type']->nocache = null; $_smarty_tpl->tpl_vars['type']->scope = 0;
} else $_smarty_tpl->tpl_vars['type'] = new Smarty_variable('video', null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['channel'])) {$_smarty_tpl->tpl_vars['channel'] = clone $_smarty_tpl->tpl_vars['channel'];
$_smarty_tpl->tpl_vars['channel']->value = $_smarty_tpl->tpl_vars['userquery']->value->get_user_details($_smarty_tpl->tpl_vars['video']->value['userid']); $_smarty_tpl->tpl_vars['channel']->nocache = null; $_smarty_tpl->tpl_vars['channel']->scope = 0;
} else $_smarty_tpl->tpl_vars['channel'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->get_user_details($_smarty_tpl->tpl_vars['video']->value['userid']), null, 0);?>
<div id="main" class="clearfix container">
	<div class="clearfix">
		<section id="content" class="clearfix videos">
			<div class="clearfix player-holder">
				<div id="cb_player" class="cb_player">
					<?php echo flashPlayer(array('vdetails'=>$_smarty_tpl->tpl_vars['video']->value,'width'=>'100%','height'=>'100%'),$_smarty_tpl);?>

				</div><!-- cb_player end -->
			</div>
			<!-- end of player-holder -->
			<div class="clearfix leaderboard-ad ad">
				<?php echo getAd(array('place'=>'ad_728x90'),$_smarty_tpl);?>

			</div>
			<section class="video-details clearfix">
				<header class="clearfix details">
					<h1><?php echo $_smarty_tpl->tpl_vars['video']->value['title'];?>
</h1>
					<div class="user-video-info clearfix">
						<a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['video']->value);?>
" class="avatar">
							<img src="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->avatar($_smarty_tpl->tpl_vars['video']->value,'m',userid());?>
" class="img-responsive">
						</a>
						<h2 class="user-title">
							<a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['video']->value);?>
"> <?php echo $_smarty_tpl->tpl_vars['video']->value['username'];?>
</a>
						</h2>
						<!-- look at  -->
						<div class="views-counter">
							<span>
								<?php if ($_smarty_tpl->tpl_vars['Cbucket']->value->configs['video_round_views']=='yes') {?>
								<?php echo prettyNum($_smarty_tpl->tpl_vars['vdo']->value['views']);?>

								<?php } else { ?>
								<?php echo ($_smarty_tpl->tpl_vars['vdo']->value['views']);?>

								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['vdo']->value['views']>1) {?>
								<?php echo smarty_lang(array('code'=>'views'),$_smarty_tpl);?>

								<?php } else { ?>
								<?php echo smarty_lang(array('code'=>"view"),$_smarty_tpl);?>

								<?php }?>
							</span>
						</div>
					</div>
					<div class="user-likes-sub clearfix">
						<div class="clearfix like-rating col-lg-6 col-md-6 col-sm-6 col-xs-12" id="rating_container">
							<?php if ($_smarty_tpl->tpl_vars['vdo']->value['allow_rating']!='no') {?>
							<?php echo show_video_rating(array('rating'=>$_smarty_tpl->tpl_vars['vdo']->value['rating'],'ratings'=>$_smarty_tpl->tpl_vars['vdo']->value['rated_by'],'total'=>'10','id'=>$_smarty_tpl->tpl_vars['vdo']->value['videoid'],'type'=>'video'),$_smarty_tpl);?>

							<?php }?>
						</div>
						<div class="clearfix subscribe-col col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<?php if ($_smarty_tpl->tpl_vars['video']->value['userid']!=userid()) {?>
							<a id="subscribeUser" class="btn btn-subscribe btn-primary" href="javascript:void(0)">
								<span><?php echo smarty_lang(array('code'=>'subscribe'),$_smarty_tpl);?>
</span>
							</a>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['Cbucket']->value->configs['video_download']==1&&$_smarty_tpl->tpl_vars['cbvid']->value->downloadable($_smarty_tpl->tpl_vars['vdo']->value)) {?>
							<div class="dropdown">
								<button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
									<?php echo smarty_lang(array('code'=>'download'),$_smarty_tpl);?>

									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdownMenu1">
									<?php if (isset($_smarty_tpl->tpl_vars['files'])) {$_smarty_tpl->tpl_vars['files'] = clone $_smarty_tpl->tpl_vars['files'];
$_smarty_tpl->tpl_vars['files']->value = get_video_files($_smarty_tpl->tpl_vars['vdo']->value,true,true); $_smarty_tpl->tpl_vars['files']->nocache = null; $_smarty_tpl->tpl_vars['files']->scope = 0;
} else $_smarty_tpl->tpl_vars['files'] = new Smarty_variable(get_video_files($_smarty_tpl->tpl_vars['vdo']->value,true,true), null, 0);?>
									<?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
?>
									<?php if (isset($_smarty_tpl->tpl_vars['quality'])) {$_smarty_tpl->tpl_vars['quality'] = clone $_smarty_tpl->tpl_vars['quality'];
$_smarty_tpl->tpl_vars['quality']->value = explode('-',$_smarty_tpl->tpl_vars['file']->value); $_smarty_tpl->tpl_vars['quality']->nocache = null; $_smarty_tpl->tpl_vars['quality']->scope = 0;
} else $_smarty_tpl->tpl_vars['quality'] = new Smarty_variable(explode('-',$_smarty_tpl->tpl_vars['file']->value), null, 0);?>
									<?php if (isset($_smarty_tpl->tpl_vars['quality'])) {$_smarty_tpl->tpl_vars['quality'] = clone $_smarty_tpl->tpl_vars['quality'];
$_smarty_tpl->tpl_vars['quality']->value = array_reverse($_smarty_tpl->tpl_vars['quality']->value); $_smarty_tpl->tpl_vars['quality']->nocache = null; $_smarty_tpl->tpl_vars['quality']->scope = 0;
} else $_smarty_tpl->tpl_vars['quality'] = new Smarty_variable(array_reverse($_smarty_tpl->tpl_vars['quality']->value), null, 0);?>
									<?php if (isset($_smarty_tpl->tpl_vars['quality'])) {$_smarty_tpl->tpl_vars['quality'] = clone $_smarty_tpl->tpl_vars['quality'];
$_smarty_tpl->tpl_vars['quality']->value = explode('.',$_smarty_tpl->tpl_vars['quality']->value[0]); $_smarty_tpl->tpl_vars['quality']->nocache = null; $_smarty_tpl->tpl_vars['quality']->scope = 0;
} else $_smarty_tpl->tpl_vars['quality'] = new Smarty_variable(explode('.',$_smarty_tpl->tpl_vars['quality']->value[0]), null, 0);?>
									<?php if (isset($_smarty_tpl->tpl_vars['file_quality'])) {$_smarty_tpl->tpl_vars['file_quality'] = clone $_smarty_tpl->tpl_vars['file_quality'];
$_smarty_tpl->tpl_vars['file_quality']->value = $_smarty_tpl->tpl_vars['quality']->value[0]; $_smarty_tpl->tpl_vars['file_quality']->nocache = null; $_smarty_tpl->tpl_vars['file_quality']->scope = 0;
} else $_smarty_tpl->tpl_vars['file_quality'] = new Smarty_variable($_smarty_tpl->tpl_vars['quality']->value[0], null, 0);?>
									<li role="presentation">
										<a role="menuitem" tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
"  download>
											<span class="glyphicon glyphicon-download-alt"></span> <?php echo $_smarty_tpl->tpl_vars['file_quality']->value;?>
</a>

										</li>
										<?php } ?>
									</ul>
								</div>
								<?php }?>
							</div>
						</div>
					</header>
					<div id="messageFav" class="alert alert-info marginTop" style="display:none"></div>
					<div class="view-tabs clearfix">
						<ul class="clearfix nav nav-tabs">
							<li class="active">
								<a href="#cb-item-info" data-toggle="tab"><span class="icon-info"></span><?php echo smarty_lang(array('code'=>'info'),$_smarty_tpl);?>
</a>
							</li>
							<li>
								<a href="#cb-item-share" data-toggle="tab"><span class="icon-share"></span><?php echo smarty_lang(array('code'=>'share_embed'),$_smarty_tpl);?>
</a>
							</li>
							<li>
								<a href="#cb-item-addto" data-toggle="tab"><span class="icon-plusrounded"></span><?php echo smarty_lang(array('code'=>'add_to'),$_smarty_tpl);?>
</a>
							</li>
							<li>
								<a href="#cb-item-report" data-toggle="tab"><span class="icon-flag"></span><?php echo smarty_lang(array('code'=>'report_this'),$_smarty_tpl);?>
</a>
							</li>
						</ul>
						<div class="tab-content clearfix">
							<div class="tab-pane fade in clearfix active" id="cb-item-info">
								<div class="clearfix watch-vid-details">
									<p style="white-space: pre-line;"><?php echo AutoLinkUrls(htmlspecialchars_decode($_smarty_tpl->tpl_vars['video']->value['description'], ENT_QUOTES));?>
</p>
									<ul class="clearfix desc-list">
										<li><strong><?php echo smarty_lang(array('code'=>'category'),$_smarty_tpl);?>
</strong>:&nbsp;<?php echo categories($_smarty_tpl->tpl_vars['vdo']->value['category'],'video');?>
</li>
										<li><strong><?php echo smarty_lang(array('code'=>'duration'),$_smarty_tpl);?>
</strong>:&nbsp;<?php if ($_smarty_tpl->tpl_vars['video']->value['duration']>1) {?><?php echo SetTime($_smarty_tpl->tpl_vars['video']->value['duration']);?>
<?php } else { ?>00:00<?php }?></li>
										<li><strong><?php echo smarty_lang(array('code'=>'date'),$_smarty_tpl);?>
</strong>:&nbsp; <?php echo nicetime($_smarty_tpl->tpl_vars['video']->value['date_added']);?>
</li>
										<li>
											<strong class="pull-left"><?php echo lang('tags');?>
:&nbsp;&nbsp;</strong>
											<span class="pull-left"><?php echo tags($_smarty_tpl->tpl_vars['vdo']->value['tags'],'videos');?>
</span>
										</li>
									</ul>
								</div>
							</div>

							<div class="tab-pane fade in clearfix" id="cb-item-share">
								<ul class="social-share">
									<li>
										<a href="http://www.facebook.com/sharer/sharer.php?s=100&p[url]=<?php echo urlencode(videoLink($_smarty_tpl->tpl_vars['video']->value));?>
&p[images][0]=<?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['video']->value),$_smarty_tpl);?>
&p[title]=<?php echo urlencode(title($_smarty_tpl->tpl_vars['video']->value['title']));?>
&p[summary]=<?php echo urlencode(description($_smarty_tpl->tpl_vars['video']->value['description']));?>
" target="_blank" class="btn-fb icon-facebook">
											<span>Facebook</span>
										</a>
									</li>
									<li>
										<a href="https://twitter.com/share" target="_blank" class="btn-tw icon-twitter">
											<span>Twitter</span>
										</a>
									</li>
									<li>
										<a href="https://plus.google.com/share?url=<?php echo urlencode(videolink($_smarty_tpl->tpl_vars['video']->value));?>
" target="_blank" class="btn-gplus icon-gplus">
											<span>Google Plus</span>
										</a>
									</li>
								</ul>
								<?php echo show_share_form(array('id'=>$_smarty_tpl->tpl_vars['vdo']->value['videoid'],'type'=>'video'),$_smarty_tpl);?>

							</div>
							<div class="tab-pane fade in clearfix custom-elements" id="cb-item-addto">
								<div class="clearfix btn-fav">
									<div id="video_action_result_cont"></div>
									<a id="addfav" class="btn btn-block btn-primary" href="javascript:void(0)" onclick="_cb.add_to_favNew('video','<?php echo $_smarty_tpl->tpl_vars['vdo']->value['videoid'];?>
');"><?php echo smarty_lang(array('code'=>'add_to_my_favorites'),$_smarty_tpl);?>
</a>
								</div>
								<div class="clearfix">
									<?php echo show_playlist_form(array('id'=>$_smarty_tpl->tpl_vars['vdo']->value['videoid'],'type'=>'video','user'=>userid()),$_smarty_tpl);?>

									<?php if (userid()) {?>
									<div class="clearfix">
										<div class="clearfix btn-holder text-right">
											<a href="javascript:void(0)" onclick="$('#addCollectionCont').toggle()" class="btn btn-primary">+ <?php echo smarty_lang(array('code'=>'add_to_my_collection'),$_smarty_tpl);?>
</a>
										</div>
										<div id="addCollectionCont" style="display:none">
											<?php echo show_collection_form(array('id'=>$_smarty_tpl->tpl_vars['vdo']->value['videoid'],'type'=>'Video'),$_smarty_tpl);?>

										</div>
									</div>
									<?php }?>    
								</div>
							</div>
							<div class="tab-pane fade in clearfix custom-elements" id="cb-item-report">
								<h2><?php echo smarty_lang(array('code'=>'report_video'),$_smarty_tpl);?>
</h2>
								<?php echo show_flag_form(array('id'=>$_smarty_tpl->tpl_vars['vdo']->value['videoid'],'type'=>'video'),$_smarty_tpl);?>

							</div>
						</div>
					</div>
				</section>

				<div class="clearfix comments-block" id="comments-block">
					<div id="test1"></div>
					<div id="reply" class="clearfix"> 
						<div  class="addComment clearfix">
							<h2 class="com_count" id="com_count">
								<?php echo $_smarty_tpl->tpl_vars['vdo']->value['comments_count'];?>
 <span><?php echo smarty_lang(array('code'=>'comments'),$_smarty_tpl);?>
 </span>
							</h2>
							<?php if ($_smarty_tpl->tpl_vars['myquery']->value->is_commentable($_smarty_tpl->tpl_vars['vdo']->value,'v')) {?>
							<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/comments/add_comment.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['vdo']->value['videoid'],'type'=>'v'), 0);?>

							<?php } else { ?>
							<div class="alert alert-warning">
								<?php echo smarty_lang(array('code'=>'comm_disabled_for_vid'),$_smarty_tpl);?>

							</div>
							<?php }?>
						</div>

						<div id="userCommentsList">
							<div class="comments clearfix">
								<ul id="comments-ul">
								</ul>
							</div>
						</div>
						<?php if ($_smarty_tpl->tpl_vars['vdo']->value['comments_count']>10) {?>
						<div class="clearfix text-center">
							<button class="btn btn-loadmore" id="load-more-comments" page="2"><?php echo smarty_lang(array('code'=>'load_more'),$_smarty_tpl);?>
</button>
						</div>
						<?php }?>
					</div>
				</div>
			</section>
			<aside id="sidebar">
				<div class="box-ad ad"><?php echo getAd(array('place'=>'ad_300x250'),$_smarty_tpl);?>
</div>

				<h2><?php if ($_GET['play_list']) {?>Playlist Videos<?php } elseif ($_smarty_tpl->tpl_vars['relMode']->value!='ono') {?>Related Videos<?php } else { ?>Popular Videos<?php }?></h2>
				<div class="clearfix sidebar-items">
					<?php if ($_GET['play_list']) {?>

					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['videokey']==$_smarty_tpl->tpl_vars['vdo']->value['videokey']) {?>
					<?php if (isset($_smarty_tpl->tpl_vars['current_key'])) {$_smarty_tpl->tpl_vars['current_key'] = clone $_smarty_tpl->tpl_vars['current_key'];
$_smarty_tpl->tpl_vars['current_key']->value = $_smarty_tpl->tpl_vars['key']->value; $_smarty_tpl->tpl_vars['current_key']->nocache = null; $_smarty_tpl->tpl_vars['current_key']->scope = 0;
} else $_smarty_tpl->tpl_vars['current_key'] = new Smarty_variable($_smarty_tpl->tpl_vars['key']->value, null, 0);?>
					<?php }?>
					<?php } ?>

					<?php if (isset($_smarty_tpl->tpl_vars['next_item_key'])) {$_smarty_tpl->tpl_vars['next_item_key'] = clone $_smarty_tpl->tpl_vars['next_item_key'];
$_smarty_tpl->tpl_vars['next_item_key']->value = $_smarty_tpl->tpl_vars['current_key']->value+1; $_smarty_tpl->tpl_vars['next_item_key']->nocache = null; $_smarty_tpl->tpl_vars['next_item_key']->scope = 0;
} else $_smarty_tpl->tpl_vars['next_item_key'] = new Smarty_variable($_smarty_tpl->tpl_vars['current_key']->value+1, null, 0);?>
					<?php if (isset($_smarty_tpl->tpl_vars['prev_item_key'])) {$_smarty_tpl->tpl_vars['prev_item_key'] = clone $_smarty_tpl->tpl_vars['prev_item_key'];
$_smarty_tpl->tpl_vars['prev_item_key']->value = $_smarty_tpl->tpl_vars['current_key']->value-1; $_smarty_tpl->tpl_vars['prev_item_key']->nocache = null; $_smarty_tpl->tpl_vars['prev_item_key']->scope = 0;
} else $_smarty_tpl->tpl_vars['prev_item_key'] = new Smarty_variable($_smarty_tpl->tpl_vars['current_key']->value-1, null, 0);?>
					<?php if (isset($_smarty_tpl->tpl_vars['count_index'])) {$_smarty_tpl->tpl_vars['count_index'] = clone $_smarty_tpl->tpl_vars['count_index'];
$_smarty_tpl->tpl_vars['count_index']->value = count($_smarty_tpl->tpl_vars['items']->value); $_smarty_tpl->tpl_vars['count_index']->nocache = null; $_smarty_tpl->tpl_vars['count_index']->scope = 0;
} else $_smarty_tpl->tpl_vars['count_index'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['items']->value), null, 0);?>
					
					<?php if ($_smarty_tpl->tpl_vars['next_item_key']->value==$_smarty_tpl->tpl_vars['count_index']->value) {?>
					<?php if (isset($_smarty_tpl->tpl_vars['next_videoLink'])) {$_smarty_tpl->tpl_vars['next_videoLink'] = clone $_smarty_tpl->tpl_vars['next_videoLink'];
$_smarty_tpl->tpl_vars['next_videoLink']->value = '#'; $_smarty_tpl->tpl_vars['next_videoLink']->nocache = null; $_smarty_tpl->tpl_vars['next_videoLink']->scope = 0;
} else $_smarty_tpl->tpl_vars['next_videoLink'] = new Smarty_variable('#', null, 0);?>
					<?php } else { ?>
					<?php if (isset($_smarty_tpl->tpl_vars['next_videoLink'])) {$_smarty_tpl->tpl_vars['next_videoLink'] = clone $_smarty_tpl->tpl_vars['next_videoLink'];
$_smarty_tpl->tpl_vars['next_videoLink']->value = videoLink($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['next_item_key']->value]); $_smarty_tpl->tpl_vars['next_videoLink']->nocache = null; $_smarty_tpl->tpl_vars['next_videoLink']->scope = 0;
} else $_smarty_tpl->tpl_vars['next_videoLink'] = new Smarty_variable(videoLink($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['next_item_key']->value]), null, 0);?>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['prev_item_key']->value]==0) {?>
					<?php if (isset($_smarty_tpl->tpl_vars['prev_videoLink'])) {$_smarty_tpl->tpl_vars['prev_videoLink'] = clone $_smarty_tpl->tpl_vars['prev_videoLink'];
$_smarty_tpl->tpl_vars['prev_videoLink']->value = '#'; $_smarty_tpl->tpl_vars['prev_videoLink']->nocache = null; $_smarty_tpl->tpl_vars['prev_videoLink']->scope = 0;
} else $_smarty_tpl->tpl_vars['prev_videoLink'] = new Smarty_variable('#', null, 0);?>
					<?php } else { ?>
					<?php if (isset($_smarty_tpl->tpl_vars['prev_videoLink'])) {$_smarty_tpl->tpl_vars['prev_videoLink'] = clone $_smarty_tpl->tpl_vars['prev_videoLink'];
$_smarty_tpl->tpl_vars['prev_videoLink']->value = videoLink($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['prev_item_key']->value]); $_smarty_tpl->tpl_vars['prev_videoLink']->nocache = null; $_smarty_tpl->tpl_vars['prev_videoLink']->scope = 0;
} else $_smarty_tpl->tpl_vars['prev_videoLink'] = new Smarty_variable(videoLink($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['prev_item_key']->value]), null, 0);?>
					<?php }?>

					<div class="clearfix" style="padding-bottom:10px;">
						<a href="<?php echo $_smarty_tpl->tpl_vars['prev_videoLink']->value;?>
"  id="" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-step-backward"></span> Previous </a>
						<a href="<?php echo $_smarty_tpl->tpl_vars['next_videoLink']->value;?>
"  id=""  class="btn btn-primary btn-xs"> Next <span class="glyphicon glyphicon-step-forward"></span></a>
					</div>



					<div id="playlist_items">
						<?php if (isset($_smarty_tpl->tpl_vars['cur_playlist'])) {$_smarty_tpl->tpl_vars['cur_playlist'] = clone $_smarty_tpl->tpl_vars['cur_playlist'];
$_smarty_tpl->tpl_vars['cur_playlist']->value = $_GET['play_list']; $_smarty_tpl->tpl_vars['cur_playlist']->nocache = null; $_smarty_tpl->tpl_vars['cur_playlist']->scope = 0;
} else $_smarty_tpl->tpl_vars['cur_playlist'] = new Smarty_variable($_GET['play_list'], null, 0);?>
						<?php if (isset($_smarty_tpl->tpl_vars['total_items'])) {$_smarty_tpl->tpl_vars['total_items'] = clone $_smarty_tpl->tpl_vars['total_items'];
$_smarty_tpl->tpl_vars['total_items']->value = $_smarty_tpl->tpl_vars['cbvid']->value->action->count_playlist_items($_smarty_tpl->tpl_vars['cur_playlist']->value); $_smarty_tpl->tpl_vars['total_items']->nocache = null; $_smarty_tpl->tpl_vars['total_items']->scope = 0;
} else $_smarty_tpl->tpl_vars['total_items'] = new Smarty_variable($_smarty_tpl->tpl_vars['cbvid']->value->action->count_playlist_items($_smarty_tpl->tpl_vars['cur_playlist']->value), null, 0);?>
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
						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/manage/account_video.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('video'=>$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plist']['index']],'control'=>"onWatch",'pid'=>$_smarty_tpl->tpl_vars['playlist']->value['playlist_id']), 0);?>

						<?php endfor; endif; ?>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['total_items']->value>10) {?>
					<button class="btn btn-primary text-centre" id="playlist-pull" dataList=<?php echo $_smarty_tpl->tpl_vars['cur_playlist']->value;?>
 dataLimit="10" dataHit="2">Load More</button>
					<?php }?>
					<?php } else { ?>			    	
					<?php if ($_smarty_tpl->tpl_vars['videos']->value) {?>
					<?php  $_smarty_tpl->tpl_vars['pop_video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pop_video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['pop_video']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['pop_video']->key => $_smarty_tpl->tpl_vars['pop_video']->value) {
$_smarty_tpl->tpl_vars['pop_video']->_loop = true;
 $_smarty_tpl->tpl_vars['pop_video']->iteration++;
?>

					<?php if ($_smarty_tpl->tpl_vars['pop_video']->iteration==9) {?>
					<?php break 1?>
					<?php }?>
					<div class="clearfix popular-video">
						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/videos/video.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('display_type'=>'popVideos_sidebar'), 0);?>

					</div>
					<?php } ?>

					<?php } else { ?>
					<div class="well well-info">No Videos Found !</div>
					<?php }?>
					<?php }?>
				</div>
			</aside>
		</div>
	</div>

	<script>

		/*Cookie based comments backup start*/
		var current_video = "<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
",
		cookieToSave = 'comment_data_u'+userid+"v"+current_video,
		commentDataCheck = $.cookie(cookieToSave);

		if (commentDataCheck !== null) {
			$('#comment_box').val(commentDataCheck);
		}
		$('#comment_box').on('keyup', function() {
			var comment_data = $('#comment_box').val();
			$.cookie(cookieToSave, comment_data, { expires : 10, path : "/" });
		});

		$('#add_comment_button').on("click",function(){
			$.cookie(cookieToSave, null, { path : "/" });
		});
		/*Cookie based comments backup end*/

		var playlist_total = "<?php echo $_smarty_tpl->tpl_vars['total_items']->value;?>
";
		$('#ShareUsers').on("keyup",function(){
			var typed = $(this).val();
			$.ajax({
				url: baseurl+'/ajax.php',
				type: 'post',
				dataType: 'html',
				data: {
					"mode":'user_suggest',
					"typed": typed
				},
				beforeSend: function() {
				},

				success: function(data) {
					$('#suggested_users').html('');
					var jsoned = $.parseJSON(data);
					$( jsoned.matching_users ).each(function( index, element ) {
						$('#suggested_users').append("<option label='"+element+"' value='"+element+"'>");
					});
				}
			});
		});

		/*Playlist load more start*/
		var playlist_total = "<?php echo $_smarty_tpl->tpl_vars['total_items']->value;?>
";
		$('#playlist-pull').on("click",function(){
			var __this = $(this);
			loadHit = $(this).attr('dataHit');
			loadLimit = $(this).attr('dataLimit');
			playlist = $(this).attr('dataList');

			$.ajax({
				url: baseurl+'/ajax/watch.php',
				type: 'post',
				dataType: 'html',
				data: {
					"mode":'playlistMore',
					"loadHit":loadHit,
					"loadLimit":loadLimit,
					"playlist": playlist
				},
				beforeSend: function() {
					$(__this).text("loading");
				},

				success: function(data) {
					var loaded = loadLimit * loadHit;
					if (playlist_total <= loaded) {
						$(__this).remove();
					} else {
						$(__this).text("Load More");
					}
					if (data == 'none') {
						$('#playlist-pull').remove();
					}
					$(data).appendTo('#playlist_items').fadeIn('slow');
					$('#playlist-pull').attr('dataHit', parseInt(loadHit) + 1);
				}
			});
		});
		/*Playlist load more end*/

		var aspect_ratio = 1.77778
		var $cb_player = $("#cb_player");

		$(document).ready(function(){
			$cb_player.height( $cb_player.width() / aspect_ratio );

			var videoInfo = $("#videoDescription").text();
			var newInfo = videoInfo.replace(/(((https?:\/\/)|([\s\t]))(www.)?([a-z0-9]+)\.[a-z]+)/g, '<a href="$1">$1</a>');
			$("#videoDescription").html(newInfo);

			comments_voting = '<?php echo $_smarty_tpl->tpl_vars['vdo']->value['comment_voting'];?>
';
			_cb.getCommentsNew(
				'<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
',
				'<?php echo $_smarty_tpl->tpl_vars['vdo']->value['videoid'];?>
',
				'<?php echo $_smarty_tpl->tpl_vars['vdo']->value['last_commented'];?>
',1,
				'<?php echo $_smarty_tpl->tpl_vars['vdo']->value['comments_count'];?>
',
				'<?php echo $_smarty_tpl->tpl_vars['object_type']->value;?>
'
				);

			$("#reportVideo").on({
				click : function(e){
					e.preventDefault();
					$("#flag_item").show();
				}
			});

			$("#subscribeUser").on({
				click: function(e){
					e.preventDefault();
					_cb.subscribeToChannelNew('<?php echo $_smarty_tpl->tpl_vars['video']->value['userid'];?>
','subscribe_user');
				}
			});
			var adHtml = $('.ad-holder').html();
			if(adHtml<1){
				$('.ad-holder').remove();
			}
		/*//Progress Bar
		  $( '#circle' ).progressCircle();
		  $( '#circle' ).progressCircle({
			nPercent        : nPercent,
			showPercentText : showPercentText,
			thickness       : thickness,
			circleSize      : circleSize
		});*/
	});

		$(document).on('click','#load-more-comments',function(){
			var page = $(this).attr('page');
			page = parseInt(page);
			nextPage = page + 1;
			$(this).text("Loading comments..")
			_cb.getCommentsNew(
				'<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
',
				'<?php echo $_smarty_tpl->tpl_vars['vdo']->value['videoid'];?>
',
				'<?php echo $_smarty_tpl->tpl_vars['vdo']->value['last_commented'];?>
',page,
				'<?php echo $_smarty_tpl->tpl_vars['vdo']->value['comments_count'];?>
',
				'<?php echo $_smarty_tpl->tpl_vars['object_type']->value;?>
'
				);
			$(this).attr('page', nextPage);
			$(this).text("Load More")
		})

		var resizePlayer =  _cb.debounce(function() {
			$cb_player.height( $cb_player.width() / aspect_ratio );
		}, 500, false);

		$(window).resize(resizePlayer);

	</script><?php }} ?>
