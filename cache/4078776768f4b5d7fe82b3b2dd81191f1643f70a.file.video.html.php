<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 10:24:17
         compiled from "C:\xampp\htdocs\clipbucket\styles\cb_28\layout\blocks\videos\video.html" */ ?>
<?php /*%%SmartyHeaderCode:3228159940131570124-90572621%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4078776768f4b5d7fe82b3b2dd81191f1643f70a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\styles\\cb_28\\layout\\blocks\\videos\\video.html',
      1 => 1502865953,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3228159940131570124-90572621',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_type' => 0,
    'pop_video' => 0,
    'theme' => 0,
    'userquery' => 0,
    'video' => 0,
    'qlist_vids' => 0,
    'total_vids' => 0,
    'imageurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_59940132445be7_40862771',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59940132445be7_40862771')) {function content_59940132445be7_40862771($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\clipbucket\\includes\\smartyv3\\plugins\\modifier.truncate.php';
?><?php if ($_smarty_tpl->tpl_vars['display_type']->value=='popVideos_sidebar') {?>
<div class="featured-video clearfix">
	<div class="video_thumb">
		<a href="<?php echo videoLink($_smarty_tpl->tpl_vars['pop_video']->value);?>
">
			<img src="<?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['pop_video']->value,'size'=>'168x105'),$_smarty_tpl);?>
" <?php echo ANCHOR(array('place'=>"video_thumb",'data'=>$_smarty_tpl->tpl_vars['pop_video']->value),$_smarty_tpl);?>
 class="img-responsive">
			<time datetime="2016-15-03" class="duration"><?php if ($_smarty_tpl->tpl_vars['pop_video']->value['duration']>1) {?><?php echo SetTime($_smarty_tpl->tpl_vars['pop_video']->value['duration']);?>
<?php } else { ?>00:00<?php }?></time>
		</a>
		<img src="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/thumb-ratio.png" class="thumb-ratio" alt="">
	</div> <!--VIDEO_THUMB END-->
	
	<div class="details_block">
		<strong class="title"><a href="<?php echo videoLink($_smarty_tpl->tpl_vars['pop_video']->value);?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['pop_video']->value['title'],50);?>
</a></strong>
		<span class="author"><?php echo smarty_lang(array('code'=>"by"),$_smarty_tpl);?>
&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['pop_video']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['pop_video']->value['username'];?>
</a></span>
		<div class="views-date">
			<span><?php echo $_smarty_tpl->tpl_vars['pop_video']->value['views'];?>
&nbsp;<?php echo smarty_lang(array('code'=>"views"),$_smarty_tpl);?>
</span>
		</div>
	</div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['display_type']->value=='homeVideos') {?>
	<div class="clearfix thumb-holder userAppending">
		<a class="video-link" href="<?php echo videoLink($_smarty_tpl->tpl_vars['video']->value);?>
" title="<?php echo title($_smarty_tpl->tpl_vars['video']->value['title']);?>
">
			<img class="img-responsive" src="<?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['video']->value,'size'=>'416x260'),$_smarty_tpl);?>
">
		</a>
		<img src="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/thumb-ratio.png" class="thumb-ratio" alt="<?php echo $_smarty_tpl->tpl_vars['video']->value['broadcast'];?>
">

		<?php echo ANCHOR(array('place'=>'in_video_thumb','data'=>$_smarty_tpl->tpl_vars['video']->value),$_smarty_tpl);?>

		<button data-quick="quick-<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
"
 class="icon-plus2 cb_quickie cb-btn-quick-<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
 <?php if (in_array($_smarty_tpl->tpl_vars['video']->value['videoid'],$_smarty_tpl->tpl_vars['qlist_vids']->value)) {?>icon-tick<?php }?>" vtitle="<?php echo $_smarty_tpl->tpl_vars['video']->value['title'];?>
" v-id="<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
" vlink="<?php echo videoLink($_smarty_tpl->tpl_vars['video']->value);?>
" vthumb="<?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['video']->value,'size'=>'600x338'),$_smarty_tpl);?>
" vduration="<?php echo SetTime($_smarty_tpl->tpl_vars['video']->value['duration']);?>
" title="Add <?php echo $_smarty_tpl->tpl_vars['video']->value['title'];?>
 to Quicklist">
		</button>
		<span class="duration"><?php if ($_smarty_tpl->tpl_vars['video']->value['duration']>1) {?><?php echo SetTime($_smarty_tpl->tpl_vars['video']->value['duration']);?>
<?php } else { ?>00:00<?php }?></span>
		
	</div>
	<div class="clearfix video-info">
		<h2 class="title"><a href="<?php echo videoLink($_smarty_tpl->tpl_vars['video']->value);?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['video']->value['title'],50);?>
</a></h2>
		<span class="author"><?php echo smarty_lang(array('code'=>"by"),$_smarty_tpl);?>
&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['video']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['video']->value['username'];?>
</a></span>
		<div class="clearfix views-date">
			<span><?php echo $_smarty_tpl->tpl_vars['video']->value['views'];?>
&nbsp;<?php echo smarty_lang(array('code'=>"views"),$_smarty_tpl);?>
</span>
			<time class="date" datetime="2016-15-03"><?php echo niceTime($_smarty_tpl->tpl_vars['video']->value['date_added']);?>
</time>
		</div>
	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['display_type']->value=='ajaxHome') {?>
<?php if ($_smarty_tpl->tpl_vars['total_vids']->value) {?>
	<div style="display: none" id="total_videos_recent"><?php echo $_smarty_tpl->tpl_vars['total_vids']->value;?>
</div>
<?php }?>
<div style="display: none" class="item-video col-lg-4 col-md-4 col-sm-4 col-xs-12 recentAppending">
	<div class="clearfix thumb-holder">
		<!-- <a class="video-link cd-popup-trigger" href="<?php echo videoLink($_smarty_tpl->tpl_vars['video']->value);?>
" onclick="_cb.getModalVideo(<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
)" title="<?php echo title($_smarty_tpl->tpl_vars['video']->value['title']);?>
"> -->
		<a <?php if (config('popup_video')=='yes') {?>
			class="video-link cd-popup-trigger" onclick="_cb.getModalVideo(<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
)" 
		<?php } else { ?>
			class="video-link" 
		<?php }?> 
		href="<?php echo videoLink($_smarty_tpl->tpl_vars['video']->value);?>
" title="<?php echo title($_smarty_tpl->tpl_vars['video']->value['title']);?>
">
			<img class="lazy img-responsive" src="<?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['video']->value,'size'=>'416x260'),$_smarty_tpl);?>
">
		</a>
		<img src="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/thumb-ratio.png" class="thumb-ratio" alt="">
		
		<?php echo ANCHOR(array('place'=>'in_video_thumb','data'=>$_smarty_tpl->tpl_vars['video']->value),$_smarty_tpl);?>

		<button data-quick="quick-<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
"
 class="icon-plus2 add_icon cb_quickie cb-btn-quick-<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
 <?php if (in_array($_smarty_tpl->tpl_vars['video']->value['videoid'],$_smarty_tpl->tpl_vars['qlist_vids']->value)) {?>icon-tick<?php }?>" vtitle="<?php echo $_smarty_tpl->tpl_vars['video']->value['title'];?>
" v-id="<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
" vlink="<?php echo videoLink($_smarty_tpl->tpl_vars['video']->value);?>
" vthumb="<?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['video']->value,'size'=>'600x338'),$_smarty_tpl);?>
" vduration="<?php echo SetTime($_smarty_tpl->tpl_vars['video']->value['duration']);?>
" title="Add <?php echo $_smarty_tpl->tpl_vars['video']->value['title'];?>
 to Quicklist">
 		</button>
		<span class="duration" title="Video duration : <?php if ($_smarty_tpl->tpl_vars['video']->value['duration']>1) {?><?php echo SetTime($_smarty_tpl->tpl_vars['video']->value['duration']);?>
<?php } else { ?>00:00<?php }?>"><?php if ($_smarty_tpl->tpl_vars['video']->value['duration']>1) {?><?php echo SetTime($_smarty_tpl->tpl_vars['video']->value['duration']);?>
<?php } else { ?>00:00<?php }?></span>

	</div>
	<div class="clearfix video-info">
		<h2 class="title"><a href="<?php echo videoLink($_smarty_tpl->tpl_vars['video']->value);?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['video']->value['title'],50);?>
</a></h2>
		<span class="author"><?php echo smarty_lang(array('code'=>"by"),$_smarty_tpl);?>
&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['video']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['video']->value['username'];?>
</a></span>
		<div class="clearfix views-date">
			<span><?php echo $_smarty_tpl->tpl_vars['video']->value['views'];?>
&nbsp;<?php echo smarty_lang(array('code'=>"views"),$_smarty_tpl);?>
</span>
			<time class="date" datetime="2016-15-03"><?php echo niceTime($_smarty_tpl->tpl_vars['video']->value['date_added']);?>
</time>
		</div>
	</div>
</div>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['display_type']->value=='featuredVideos_sidebar') {?>
	<div class="featured-video clearfix">
		<div class="video_thumb">
			<a href="<?php echo videoLink($_smarty_tpl->tpl_vars['video']->value);?>
">
				<img src="<?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['video']->value,'size'=>'168x105'),$_smarty_tpl);?>
" <?php echo ANCHOR(array('place'=>"video_thumb",'data'=>$_smarty_tpl->tpl_vars['video']->value),$_smarty_tpl);?>
 class="img-responsive">
				<time datetime="2016-15-03" class="duration"><?php if ($_smarty_tpl->tpl_vars['video']->value['duration']>1) {?><?php echo SetTime($_smarty_tpl->tpl_vars['video']->value['duration']);?>
<?php } else { ?>00:00<?php }?></time>
			</a>
			<img src="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/thumb-ratio.png" class="thumb-ratio" alt="">
		</div> <!--VIDEO_THUMB END-->
		
		<div class="details_block">
			<strong class="title"><a href="<?php echo videoLink($_smarty_tpl->tpl_vars['video']->value);?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['video']->value['title'],50);?>
</a></strong>
			<span class="author"><?php echo smarty_lang(array('code'=>"by"),$_smarty_tpl);?>
&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['video']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['video']->value['username'];?>
</a></span>
			<div class="views-date">
				<span><?php echo $_smarty_tpl->tpl_vars['video']->value['views'];?>
&nbsp;<?php echo smarty_lang(array('code'=>"views"),$_smarty_tpl);?>
</span>
			</div>
		</div>
	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['display_type']->value=='featuredHome') {?>
<?php if ($_smarty_tpl->tpl_vars['total_vids']->value) {?>
	<div style="display: none" id="total_videos_featured"><?php echo $_smarty_tpl->tpl_vars['total_vids']->value;?>
</div>
<?php }?>
<div style="display: none" class="item-video col-lg-6 col-md-6 col-sm-6 col-xs-12 featAppending">
	<div class="clearfix thumb-holder">
		<a <?php if (config('popup_video')=='yes') {?>
			class="video-link cd-popup-trigger" onclick="_cb.getModalVideo(<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
)" 
		<?php } else { ?>
			class="video-link" 
		<?php }?> 
		href="<?php echo videoLink($_smarty_tpl->tpl_vars['video']->value);?>
" title="<?php echo title($_smarty_tpl->tpl_vars['video']->value['title']);?>
">
			<img class="img-responsive" src="<?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['video']->value,'size'=>'632x395'),$_smarty_tpl);?>
">
			<h2 class="title"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['video']->value['title'],50);?>
</h2>
		</a>
		<img src="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/thumb-ratio.png" class="thumb-ratio" alt="">
		
			<?php echo ANCHOR(array('place'=>'in_video_thumb','data'=>$_smarty_tpl->tpl_vars['video']->value),$_smarty_tpl);?>

			<button data-quick="quick-<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
"
		 class="icon-plus2 add_icon cb_quickie cb-btn-quick-<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
 <?php if (in_array($_smarty_tpl->tpl_vars['video']->value['videoid'],$_smarty_tpl->tpl_vars['qlist_vids']->value)) {?>icon-tick<?php }?>" vtitle="<?php echo $_smarty_tpl->tpl_vars['video']->value['title'];?>
" v-id="<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
" vlink="<?php echo videoLink($_smarty_tpl->tpl_vars['video']->value);?>
" vthumb="<?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['video']->value,'size'=>'600x338'),$_smarty_tpl);?>
" vduration="<?php echo SetTime($_smarty_tpl->tpl_vars['video']->value['duration']);?>
" title="Add <?php echo $_smarty_tpl->tpl_vars['video']->value['title'];?>
 to Quicklist">
		 	</button>
			<span class="duration" title="Video duration : <?php if ($_smarty_tpl->tpl_vars['video']->value['duration']>1) {?><?php echo SetTime($_smarty_tpl->tpl_vars['video']->value['duration']);?>
<?php } else { ?>00:00<?php }?>"><?php if ($_smarty_tpl->tpl_vars['video']->value['duration']>1) {?><?php echo SetTime($_smarty_tpl->tpl_vars['video']->value['duration']);?>
<?php } else { ?>00:00<?php }?></span>
	</div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['display_type']->value=='normal'||$_smarty_tpl->tpl_vars['display_type']->value=='') {?>
<div class="item-video col-lg-6 col-md-6 col-sm-6 col-xs-12">
	<div class="clearfix thumb-holder">
		<a class="video-link" href="<?php echo videoLink($_smarty_tpl->tpl_vars['video']->value);?>
" title="<?php echo title($_smarty_tpl->tpl_vars['video']->value['title']);?>
">
			<img class="img-responsive" src="<?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['video']->value,'size'=>'416x260'),$_smarty_tpl);?>
">
		</a>
		<img src="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/thumb-ratio.png" class="thumb-ratio" alt="">
		
		<?php echo ANCHOR(array('place'=>'in_video_thumb','data'=>$_smarty_tpl->tpl_vars['video']->value),$_smarty_tpl);?>

		<button data-quick="quick-<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
"
 class="icon-plus2 cb_quickie cb-btn-quick-<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
 <?php if (in_array($_smarty_tpl->tpl_vars['video']->value['videoid'],$_smarty_tpl->tpl_vars['qlist_vids']->value)) {?>icon-tick<?php }?>" vtitle="<?php echo $_smarty_tpl->tpl_vars['video']->value['title'];?>
" v-id="<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
" vlink="<?php echo videoLink($_smarty_tpl->tpl_vars['video']->value);?>
" vthumb="<?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['video']->value,'size'=>'600x338'),$_smarty_tpl);?>
" vduration="<?php echo SetTime($_smarty_tpl->tpl_vars['video']->value['duration']);?>
" title="Add <?php echo $_smarty_tpl->tpl_vars['video']->value['title'];?>
 to Quicklist">
		</button>
		<span class="duration"><?php if ($_smarty_tpl->tpl_vars['video']->value['duration']>1) {?><?php echo SetTime($_smarty_tpl->tpl_vars['video']->value['duration']);?>
<?php } else { ?>00:00<?php }?></span>
		
	</div>
	<div class="clearfix video-info">
		<h2 class="title"><a href="<?php echo videoLink($_smarty_tpl->tpl_vars['video']->value);?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['video']->value['title'],50);?>
</a></h2>
		<span class="author"><?php echo smarty_lang(array('code'=>"by"),$_smarty_tpl);?>
&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['video']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['video']->value['username'];?>
</a></span>
		<div class="clearfix views-date">
			<span><?php echo $_smarty_tpl->tpl_vars['video']->value['views'];?>
&nbsp;<?php echo smarty_lang(array('code'=>"views"),$_smarty_tpl);?>
</span>
			<time class="date" datetime="2016-15-03"><?php echo niceTime($_smarty_tpl->tpl_vars['video']->value['date_added']);?>
</time>
		</div>
	</div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['display_type']->value=='user_videos') {?>
<div class="col-md-3  col-sm-4  col-xs-6">
	<a href="<?php echo videoLink($_smarty_tpl->tpl_vars['video']->value);?>
" title="<?php echo title($_smarty_tpl->tpl_vars['video']->value['title']);?>
">
		<img alt="<?php echo title($_smarty_tpl->tpl_vars['video']->value['title']);?>
" src="<?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['video']->value,'size'=>'416x260'),$_smarty_tpl);?>
" id="thumbs_<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
"  title="<?php echo title($_smarty_tpl->tpl_vars['video']->value['title']);?>
"/>
	</a>
	<p class="cbHomeVidDuration duration_view">
		<?php if ($_smarty_tpl->tpl_vars['video']->value['duration']>1) {?>
			<?php echo SetTime($_smarty_tpl->tpl_vars['video']->value['duration']);?>

		<?php } else { ?>
			00:00
		<?php }?>
	</p>
	<a href="<?php echo videoLink($_smarty_tpl->tpl_vars['video']->value);?>
" title="<?php echo title($_smarty_tpl->tpl_vars['video']->value['title']);?>
"><h5>
	<b> <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['video']->value['title'],25);?>
</b></h5></a>                     
	<span class="pull-left"><h5><small><?php echo $_smarty_tpl->tpl_vars['video']->value['views'];?>
&nbsp;<?php echo smarty_lang(array('code'=>"views"),$_smarty_tpl);?>
</small></h5></span>
	<span class="pull-right"><h5><small><?php echo niceTime($_smarty_tpl->tpl_vars['video']->value['date_added']);?>
</small></h5></span>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['display_type']->value=='playlistVideos') {?>
	<div class="video_thumb">
		<a class="video_link" href="<?php echo videoLink($_smarty_tpl->tpl_vars['video']->value);?>
" title="<?php echo title($_smarty_tpl->tpl_vars['video']->value['title']);?>
">
			<img class="img-responsive" src="<?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['video']->value,'size'=>'416x260'),$_smarty_tpl);?>
">
			<div class="play-info">
				<strong class="title"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['video']->value['title'],30);?>
</strong>
				<i class="icon-playweb"></i>
				<span class="duration"><?php if ($_smarty_tpl->tpl_vars['video']->value['duration']>1) {?><?php echo SetTime($_smarty_tpl->tpl_vars['video']->value['duration']);?>
<?php } else { ?>00:00<?php }?></span>
			</div>
		</a>
		<?php echo ANCHOR(array('place'=>'in_video_thumb','data'=>$_smarty_tpl->tpl_vars['video']->value),$_smarty_tpl);?>

		<i data-quick="quick-<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
"
	 class="icon-plus2 add_icon cb_quickie cb-btn-quick-<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
 <?php if (in_array($_smarty_tpl->tpl_vars['video']->value['videoid'],$_smarty_tpl->tpl_vars['qlist_vids']->value)) {?>icon-tick<?php }?>" title="Add <?php echo $_smarty_tpl->tpl_vars['video']->value['title'];?>
 to Quicklist"></i>
	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['display_type']->value=='related') {?>
	<div class="item_video row clearfix">
	<div class="col-xs-6">
		<div class="row cb_item_thumb video_thumb">
			<a class="video-link" href="<?php echo videoLink($_smarty_tpl->tpl_vars['video']->value);?>
" title="<?php echo title($_smarty_tpl->tpl_vars['video']->value['title']);?>
">
				<span class="duration"><?php if ($_smarty_tpl->tpl_vars['video']->value['duration']>1) {?><?php echo SetTime($_smarty_tpl->tpl_vars['video']->value['duration']);?>
<?php } else { ?>00:00<?php }?>
				</span>
				<i class="icon-playweb play-icon"></i>
				<img class="img-responsive" src="<?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['video']->value,'size'=>'416x260'),$_smarty_tpl);?>
 " border="1" />
			</a>
			<?php echo ANCHOR(array('place'=>'in_video_thumb','data'=>$_smarty_tpl->tpl_vars['video']->value),$_smarty_tpl);?>

			<button data-quick="quick-<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
"
				 class="icon-plus2 add_icon cb_quickie cb-btn-quick-<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
 <?php if (in_array($_smarty_tpl->tpl_vars['video']->value['videoid'],$_smarty_tpl->tpl_vars['qlist_vids']->value)) {?>icon-tick<?php }?>" vtitle="<?php echo $_smarty_tpl->tpl_vars['video']->value['title'];?>
" v-id="<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
" vlink="<?php echo videoLink($_smarty_tpl->tpl_vars['video']->value);?>
" vthumb="<?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['video']->value,'size'=>'600x338'),$_smarty_tpl);?>
" vduration="<?php echo SetTime($_smarty_tpl->tpl_vars['video']->value['duration']);?>
" title="Add <?php echo $_smarty_tpl->tpl_vars['video']->value['title'];?>
 to Quicklist">
	 		</button>
		</div>
	</div>
	<div class="col-xs-6">
		<h5 class="dropdown hide_btn">
			<a data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle" data-delay="1000" data-close-others="false" onClick="location.href='<?php echo videoLink($_smarty_tpl->tpl_vars['video']->value);?>
'" href="<?php echo videoLink($_smarty_tpl->tpl_vars['video']->value);?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['video']->value['title'],15);?>
 </a>
		</h5>
		
		<h5><?php echo smarty_lang(array('code'=>"by"),$_smarty_tpl);?>
&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['video']->value);?>
"><?php echo name($_smarty_tpl->tpl_vars['video']->value);?>
</a></h5>
		<div class="clearfix views-time">
			<span><i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['video']->value['views'];?>
&nbsp;<?php echo smarty_lang(array('code'=>"views"),$_smarty_tpl);?>
</span>
		</div>
	</div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['display_type']->value=='morefrom-channel') {?>
	<div class="item_video clearfix">
		<div class="clearfix vid_thumb">
			<div class="cb_item_thumb video_thumb">
				<a class="video-link" href="<?php echo videoLink($_smarty_tpl->tpl_vars['video']->value);?>
" title="<?php echo title($_smarty_tpl->tpl_vars['video']->value['title']);?>
">
					<span class="duration"><?php if ($_smarty_tpl->tpl_vars['video']->value['duration']>1) {?><?php echo SetTime($_smarty_tpl->tpl_vars['video']->value['duration']);?>
<?php } else { ?>00:00<?php }?>
					</span>
					<i class="icon-playweb play-icon"></i>
					<img class="img-responsive" src="<?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['video']->value,'size'=>'416x260'),$_smarty_tpl);?>
 " border="1" />
				</a>
				<?php echo ANCHOR(array('place'=>'in_video_thumb','data'=>$_smarty_tpl->tpl_vars['video']->value),$_smarty_tpl);?>

			<button data-quick="quick-<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
"
				 class="icon-plus2 add_icon cb_quickie cb-btn-quick-<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
 <?php if (in_array($_smarty_tpl->tpl_vars['video']->value['videoid'],$_smarty_tpl->tpl_vars['qlist_vids']->value)) {?>icon-tick<?php }?>" vtitle="<?php echo $_smarty_tpl->tpl_vars['video']->value['title'];?>
" v-id="<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
" vlink="<?php echo videoLink($_smarty_tpl->tpl_vars['video']->value);?>
" vthumb="<?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['video']->value,'size'=>'600x338'),$_smarty_tpl);?>
" vduration="<?php echo SetTime($_smarty_tpl->tpl_vars['video']->value['duration']);?>
" title="Add <?php echo $_smarty_tpl->tpl_vars['video']->value['title'];?>
 to Quicklist">
	 		</button>
			</div>
		</div>
		<div class="clearfix">
			<h5 class="dropdown hide_btn">
				<a data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle" data-delay="1000" data-close-others="false" onClick="location.href='<?php echo videoLink($_smarty_tpl->tpl_vars['video']->value);?>
'" href="<?php echo videoLink($_smarty_tpl->tpl_vars['video']->value);?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['video']->value['title'],15);?>
 </a>
			</h5>
		</div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['display_type']->value=='view_videos') {?>
<div class="item_video">
	<div class="clearfix">
		<div class="cb_item_thumb video_thumb">
			<a class="video-link" href="<?php echo videoLink($_smarty_tpl->tpl_vars['video']->value);?>
" title="<?php echo title($_smarty_tpl->tpl_vars['video']->value['title']);?>
">
				<span class="duration"><?php if ($_smarty_tpl->tpl_vars['video']->value['duration']>1) {?><?php echo SetTime($_smarty_tpl->tpl_vars['video']->value['duration']);?>
<?php } else { ?>00:00<?php }?>
				</span>
				<i class="icon-playweb play-icon"></i>
				<img class="img-responsive" src="<?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['video']->value,'size'=>'416x260'),$_smarty_tpl);?>
 " border="1" />
			</a>
			<?php echo ANCHOR(array('place'=>'in_video_thumb','data'=>$_smarty_tpl->tpl_vars['video']->value),$_smarty_tpl);?>

			 <img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/dot.gif" data-quick="quick-<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
"
		 class="icon-plus2 add_icon cb_quickie cb-btn-quick-<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
 <?php if (in_array($_smarty_tpl->tpl_vars['video']->value['videoid'],$_smarty_tpl->tpl_vars['qlist_vids']->value)) {?>icon-tick<?php }?>" title="Add <?php echo $_smarty_tpl->tpl_vars['video']->value['title'];?>
 to Quicklist" alt="">
		</div>
	</div>
	<div class="clearfix">
		<h5 class="dropdown hide_btn">
			<a data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle" data-delay="1000" data-close-others="false" onClick="location.href='<?php echo videoLink($_smarty_tpl->tpl_vars['video']->value);?>
'" href="<?php echo videoLink($_smarty_tpl->tpl_vars['video']->value);?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['video']->value['title'],30);?>
 </a>
			
		</h5>
		
		<h5><?php echo smarty_lang(array('code'=>"by"),$_smarty_tpl);?>
&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['video']->value);?>
"><?php echo name($_smarty_tpl->tpl_vars['video']->value);?>
</a>&nbsp;<?php echo niceTime($_smarty_tpl->tpl_vars['video']->value['date_added']);?>
</h5>
		<h5><i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['video']->value['views'];?>
&nbsp;<?php echo smarty_lang(array('code'=>"views"),$_smarty_tpl);?>
</h5>
	</div>
</div>
<?php }?>
<?php }} ?>
