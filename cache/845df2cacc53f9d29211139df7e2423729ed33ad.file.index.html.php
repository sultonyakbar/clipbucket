<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 09:25:46
         compiled from "C:\xampp\htdocs\clipbucket\styles\cb_28\layout\index.html" */ ?>
<?php /*%%SmartyHeaderCode:181525993f37a673867-89619669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '845df2cacc53f9d29211139df7e2423729ed33ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\styles\\cb_28\\layout\\index.html',
      1 => 1502865948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181525993f37a673867-89619669',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'myquery' => 0,
    'editor_picks' => 0,
    'theme' => 0,
    'row' => 0,
    'feature_users' => 0,
    'user' => 0,
    'userquery' => 0,
    'cbcollection' => 0,
    'collections' => 0,
    'collection' => 0,
    'playlists' => 0,
    'playlist' => 0,
    'Cbucket' => 0,
    'items' => 0,
    'item' => 0,
    'videoid' => 0,
    'videos' => 0,
    'video' => 0,
    'cbvid' => 0,
    'vae' => 0,
    'no_recent' => 0,
    'loadMoreLang' => 0,
    'got_qlitems' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5993f37aa4d139_19549300',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5993f37aa4d139_19549300')) {function content_5993f37aa4d139_19549300($_smarty_tpl) {?><?php echo smarty_lang(array('code'=>'no_featured_videos_found','assign'=>'no_found_fe'),$_smarty_tpl);?>

<?php ob_start();?><?php echo smarty_lang(array('code'=>"no_featured_videos_found"),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php if (isset($_smarty_tpl->tpl_vars['vae'])) {$_smarty_tpl->tpl_vars['vae'] = clone $_smarty_tpl->tpl_vars['vae'];
$_smarty_tpl->tpl_vars['vae']->value = $_tmp4; $_smarty_tpl->tpl_vars['vae']->nocache = null; $_smarty_tpl->tpl_vars['vae']->scope = 0;
} else $_smarty_tpl->tpl_vars['vae'] = new Smarty_variable($_tmp4, null, 0);?>
<?php ob_start();?><?php echo smarty_lang(array('code'=>"no_recent_videos_found"),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php if (isset($_smarty_tpl->tpl_vars['no_recent'])) {$_smarty_tpl->tpl_vars['no_recent'] = clone $_smarty_tpl->tpl_vars['no_recent'];
$_smarty_tpl->tpl_vars['no_recent']->value = $_tmp5; $_smarty_tpl->tpl_vars['no_recent']->nocache = null; $_smarty_tpl->tpl_vars['no_recent']->scope = 0;
} else $_smarty_tpl->tpl_vars['no_recent'] = new Smarty_variable($_tmp5, null, 0);?>
<?php ob_start();?><?php echo smarty_lang(array('code'=>"load_more"),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php if (isset($_smarty_tpl->tpl_vars['loadMoreLang'])) {$_smarty_tpl->tpl_vars['loadMoreLang'] = clone $_smarty_tpl->tpl_vars['loadMoreLang'];
$_smarty_tpl->tpl_vars['loadMoreLang']->value = $_tmp6; $_smarty_tpl->tpl_vars['loadMoreLang']->nocache = null; $_smarty_tpl->tpl_vars['loadMoreLang']->scope = 0;
} else $_smarty_tpl->tpl_vars['loadMoreLang'] = new Smarty_variable($_tmp6, null, 0);?>
<?php echo ANCHOR(array('place'=>"display_head_sec"),$_smarty_tpl);?>

<div id="main" class="clearfix container">
	<div id="messageFav" class="alert alert-info marginTop" style="display:none; height:66px;"></div>
	<div class="clearfix">
		<div id="content">
		 <?php echo ANCHOR(array('place'=>'global'),$_smarty_tpl);?>
 
			<div class="clearfix leaderboard-ad">
				<div class="ad"><?php echo getAd(array('place'=>'ad_728x90'),$_smarty_tpl);?>
</div>
			</div>
			<?php if (isset($_smarty_tpl->tpl_vars['row'])) {$_smarty_tpl->tpl_vars['row'] = clone $_smarty_tpl->tpl_vars['row'];
$_smarty_tpl->tpl_vars['row']->value = $_smarty_tpl->tpl_vars['myquery']->value->Get_Website_Details(); $_smarty_tpl->tpl_vars['row']->nocache = null; $_smarty_tpl->tpl_vars['row']->scope = 0;
} else $_smarty_tpl->tpl_vars['row'] = new Smarty_variable($_smarty_tpl->tpl_vars['myquery']->value->Get_Website_Details(), null, 0);?>
			<?php if (is_installed('editorspick')) {?>
			<?php if ($_smarty_tpl->tpl_vars['editor_picks']->value) {?>
			<div class="clearfix editorpick">
				<div class="editorpick-holder">
					<!-- Editor Pick Video Main Container START //-->
					<div class="absolute-div">
						<div id="ep_video_container">
							<?php if (is_installed('editorspick')) {?>
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['name'] = 'e_list';
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['editor_picks']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['max'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['total']);
?>
							<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/editor_pick/video_block.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('video'=>$_smarty_tpl->tpl_vars['editor_picks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e_list']['index']]), 0);?>

							<?php endfor; else: ?>
							There is no video in editor's pick, Please Add Videos In Editor's Pick<br />Videos Manager > Add to editor's pick
							<?php endif; ?>
							<?php }?>
						</div>
					</div>
					<!-- Editor Pick Video Main Container END //-->
					<img src="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/player-ratio.png" class="playerRatio">
				</div>

				<!-- Editor Pick Videos Slider Container START //-->
				<div class="editorpick-videos custom-elements">
					<div class="scrollable-area vscrollable">
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['name'] = 'e_list';
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['editor_picks']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['e_list']['total']);
?>
						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/editor_pick/index_featured_video.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('video'=>$_smarty_tpl->tpl_vars['editor_picks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e_list']['index']]), 0);?>

						<?php endfor; endif; ?>
					</div>
				</div>
				<!-- Editor Pick Videos Slider Container END //-->
			</div>
			<?php }?>
			<?php }?>
			<!-- ******************************************* -->
			<!-- ************ EDITORS BLOCK END ************ -->
			<!-- ******************************************* -->
			<section class="clearfix featured-videos">
				<h1><?php echo smarty_lang(array('code'=>"featured_videos"),$_smarty_tpl);?>
</h1>
				<div id="featured_vid_sec" class="clearfix row">
				
				</div>
				<div id="featured_pre" class="clearfix"></div>
				<div id="featured-loadmore" class="clearfix text-center">
					<button id="featured_load_more" class="btn btn-loadmore" loadtype="video" loadmode="featured" loadlimit="<?php echo $_smarty_tpl->tpl_vars['row']->value['index_featured'];?>
" loadhit="1" title="Load more featured video"><?php echo smarty_lang(array('code'=>"load_more"),$_smarty_tpl);?>
</button>
				</div>
			</section>

			<section class="clearfix videos">
				<h1><?php echo smarty_lang(array('code'=>"recent_videos"),$_smarty_tpl);?>
</h1>
				<div id="recent_vids_sec" class="clearfix row">
				</div>
				<div id="recent_pre" class="clearfix"></div>
				<div id="recent-loadmore" class="clearfix text-center">
					<button id="recent_load_more" class="btn btn-loadmore" loadtype="video" loadmode="recent" loadlimit="<?php echo $_smarty_tpl->tpl_vars['row']->value['index_recent'];?>
" loadhit="1" title="Load more recent video"><?php echo smarty_lang(array('code'=>"load_more"),$_smarty_tpl);?>
</button>
				</div>
			</section>
		</div>
		<aside id="sidebar">
			<div class="box-ad ad"><?php echo getAd(array('place'=>'ad_300x250'),$_smarty_tpl);?>
</div>
			<!-- ******************************************* -->
			<!-- ************* USER BLOCK START ************ -->
			<!-- ******************************************* -->
			<?php if (isset($_smarty_tpl->tpl_vars['feature_users'])) {$_smarty_tpl->tpl_vars['feature_users'] = clone $_smarty_tpl->tpl_vars['feature_users'];
$_smarty_tpl->tpl_vars['feature_users']->value = get_users(array('featured'=>'yes','limit'=>5)); $_smarty_tpl->tpl_vars['feature_users']->nocache = null; $_smarty_tpl->tpl_vars['feature_users']->scope = 0;
} else $_smarty_tpl->tpl_vars['feature_users'] = new Smarty_variable(get_users(array('featured'=>'yes','limit'=>5)), null, 0);?>
			<?php if ($_smarty_tpl->tpl_vars['feature_users']->value) {?>
			<h2><?php echo smarty_lang(array('code'=>"featured_users"),$_smarty_tpl);?>
</h2>
			<div class="clearfix sidebar-channels">
				<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feature_users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
				
				<div class="clearfix channel-item">
					<a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['user']->value);?>
" class="avatar">
						<img src="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->getuserthumb($_smarty_tpl->tpl_vars['user']->value,'m');?>
" width="50" height="50" class="img-circle">
					</a>
					<div class="channel-info">
						<h3><a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['user']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</a></h3>
						<div class="clearfix views-videos">
							<span><?php echo prettyNum(number_format($_smarty_tpl->tpl_vars['user']->value['profile_hits']));?>
 <?php echo smarty_lang(array('code'=>'views'),$_smarty_tpl);?>
</span>
							<span><?php echo prettyNum(number_format($_smarty_tpl->tpl_vars['user']->value['total_videos']));?>
 <?php echo smarty_lang(array('code'=>'videos'),$_smarty_tpl);?>
</span>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
			<?php }?>
			<!-- ******************************************* -->
			<!-- ************* USER BLOCK END ************** -->
			<!-- ******************************************* -->
			
			<?php if ($_smarty_tpl->tpl_vars['row']->value['collectionsSection']=='yes') {?>
			<?php if (isset($_smarty_tpl->tpl_vars['collections'])) {$_smarty_tpl->tpl_vars['collections'] = clone $_smarty_tpl->tpl_vars['collections'];
$_smarty_tpl->tpl_vars['collections']->value = $_smarty_tpl->tpl_vars['cbcollection']->value->get_collections(array('limit'=>4,'active'=>'yes','order'=>'total_objects DESC')); $_smarty_tpl->tpl_vars['collections']->nocache = null; $_smarty_tpl->tpl_vars['collections']->scope = 0;
} else $_smarty_tpl->tpl_vars['collections'] = new Smarty_variable($_smarty_tpl->tpl_vars['cbcollection']->value->get_collections(array('limit'=>4,'active'=>'yes','order'=>'total_objects DESC')), null, 0);?>
			<?php if (isset($_smarty_tpl->tpl_vars['collections'])) {$_smarty_tpl->tpl_vars['collections'] = clone $_smarty_tpl->tpl_vars['collections'];
$_smarty_tpl->tpl_vars['collections']->value = $_smarty_tpl->tpl_vars['cbcollection']->value->activeCollections($_smarty_tpl->tpl_vars['collections']->value); $_smarty_tpl->tpl_vars['collections']->nocache = null; $_smarty_tpl->tpl_vars['collections']->scope = 0;
} else $_smarty_tpl->tpl_vars['collections'] = new Smarty_variable($_smarty_tpl->tpl_vars['cbcollection']->value->activeCollections($_smarty_tpl->tpl_vars['collections']->value), null, 0);?>
			<h2 title="Collections with most items"><?php echo smarty_lang(array('code'=>"top_collections"),$_smarty_tpl);?>
</h2>
			<div class="clearfix sidebar-items collections-grid">
				<div class="clearfix row">
				<?php if (isset($_smarty_tpl->tpl_vars['limit'])) {$_smarty_tpl->tpl_vars['limit'] = clone $_smarty_tpl->tpl_vars['limit'];
$_smarty_tpl->tpl_vars['limit']->value = 10; $_smarty_tpl->tpl_vars['limit']->nocache = null; $_smarty_tpl->tpl_vars['limit']->scope = 0;
} else $_smarty_tpl->tpl_vars['limit'] = new Smarty_variable(10, null, 0);?>
				<?php if ($_smarty_tpl->tpl_vars['collections']->value) {?>        
				<?php  $_smarty_tpl->tpl_vars['collection'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['collection']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['collections']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['collection']->key => $_smarty_tpl->tpl_vars['collection']->value) {
$_smarty_tpl->tpl_vars['collection']->_loop = true;
?>
				<?php if (isset($_smarty_tpl->tpl_vars['first_col_thumb'])) {$_smarty_tpl->tpl_vars['first_col_thumb'] = clone $_smarty_tpl->tpl_vars['first_col_thumb'];
$_smarty_tpl->tpl_vars['first_col_thumb']->value = $_smarty_tpl->tpl_vars['cbcollection']->value->coll_first_thumb($_smarty_tpl->tpl_vars['collection']->value,'l'); $_smarty_tpl->tpl_vars['first_col_thumb']->nocache = null; $_smarty_tpl->tpl_vars['first_col_thumb']->scope = 0;
} else $_smarty_tpl->tpl_vars['first_col_thumb'] = new Smarty_variable($_smarty_tpl->tpl_vars['cbcollection']->value->coll_first_thumb($_smarty_tpl->tpl_vars['collection']->value,'l'), null, 0);?>
					<div class="clearfix collection-item col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/collection-item.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					</div>
				<?php } ?>
				</div>
				<?php } else { ?>
				<div class="clearfix well"><?php echo smarty_lang(array('code'=>'no_collection_found'),$_smarty_tpl);?>
</div>
				<?php }?>
			</div>
			<?php }?>

			<!-- playlists -->
			<?php if (isset($_smarty_tpl->tpl_vars['playlists'])) {$_smarty_tpl->tpl_vars['playlists'] = clone $_smarty_tpl->tpl_vars['playlists'];
$_smarty_tpl->tpl_vars['playlists']->value = get_playlists(array('limit'=>4,'order'=>'total_items DESC')); $_smarty_tpl->tpl_vars['playlists']->nocache = null; $_smarty_tpl->tpl_vars['playlists']->scope = 0;
} else $_smarty_tpl->tpl_vars['playlists'] = new Smarty_variable(get_playlists(array('limit'=>4,'order'=>'total_items DESC')), null, 0);?>
			<?php if (isset($_smarty_tpl->tpl_vars['playlists'])) {$_smarty_tpl->tpl_vars['playlists'] = clone $_smarty_tpl->tpl_vars['playlists'];
$_smarty_tpl->tpl_vars['playlists']->value = activePlaylists($_smarty_tpl->tpl_vars['playlists']->value); $_smarty_tpl->tpl_vars['playlists']->nocache = null; $_smarty_tpl->tpl_vars['playlists']->scope = 0;
} else $_smarty_tpl->tpl_vars['playlists'] = new Smarty_variable(activePlaylists($_smarty_tpl->tpl_vars['playlists']->value), null, 0);?>
			<?php if ($_smarty_tpl->tpl_vars['playlists']->value) {?>
			<div class="clearfix sidebar-playlists">
				<h2 title="Playlists with most videos"><?php echo smarty_lang(array('code'=>"top_playlists"),$_smarty_tpl);?>
</h2>
				<?php  $_smarty_tpl->tpl_vars['playlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['playlist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['playlists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['playlist']->key => $_smarty_tpl->tpl_vars['playlist']->value) {
$_smarty_tpl->tpl_vars['playlist']->_loop = true;
?>
				<div class="playlist clearfix"> 
					<a href="<?php echo videoSmartyLink(array('vdetails'=>jd($_smarty_tpl->tpl_vars['playlist']->value['first_item'])),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['Cbucket']->value->configs['seo']=='no') {?>&<?php } else { ?>?<?php }?>play_list=<?php echo $_smarty_tpl->tpl_vars['playlist']->value['playlist_id'];?>
"><h3><?php echo $_smarty_tpl->tpl_vars['playlist']->value['playlist_name'];?>
</h3></a>
					<?php if (isset($_smarty_tpl->tpl_vars['items'])) {$_smarty_tpl->tpl_vars['items'] = clone $_smarty_tpl->tpl_vars['items'];
$_smarty_tpl->tpl_vars['items']->value = get_playlist_items($_smarty_tpl->tpl_vars['playlist']->value['playlist_id']); $_smarty_tpl->tpl_vars['items']->nocache = null; $_smarty_tpl->tpl_vars['items']->scope = 0;
} else $_smarty_tpl->tpl_vars['items'] = new Smarty_variable(get_playlist_items($_smarty_tpl->tpl_vars['playlist']->value['playlist_id']), null, 0);?>
					<div class="clearfix row">
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->iteration++;
?>
						<?php if ($_smarty_tpl->tpl_vars['item']->iteration==5) {?>
							<?php break 1?>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['videoid'])) {$_smarty_tpl->tpl_vars['videoid'] = clone $_smarty_tpl->tpl_vars['videoid'];
$_smarty_tpl->tpl_vars['videoid']->value = $_smarty_tpl->tpl_vars['item']->value['videoid']; $_smarty_tpl->tpl_vars['videoid']->nocache = null; $_smarty_tpl->tpl_vars['videoid']->scope = 0;
} else $_smarty_tpl->tpl_vars['videoid'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['videoid'], null, 0);?>
						<?php if ($_smarty_tpl->tpl_vars['videoid']->value) {?>
							<div class="video col-lg-3 col-md-4 col-sm-6 col-xs-6">
								<?php if (isset($_smarty_tpl->tpl_vars['videos'])) {$_smarty_tpl->tpl_vars['videos'] = clone $_smarty_tpl->tpl_vars['videos'];
$_smarty_tpl->tpl_vars['videos']->value = get_videos(array('videoid'=>$_smarty_tpl->tpl_vars['videoid']->value,'limit'=>'2')); $_smarty_tpl->tpl_vars['videos']->nocache = null; $_smarty_tpl->tpl_vars['videos']->scope = 0;
} else $_smarty_tpl->tpl_vars['videos'] = new Smarty_variable(get_videos(array('videoid'=>$_smarty_tpl->tpl_vars['videoid']->value,'limit'=>'2')), null, 0);?>
								<?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
?>
									<a href="<?php echo videoLink($_smarty_tpl->tpl_vars['video']->value);?>
<?php if ($_smarty_tpl->tpl_vars['Cbucket']->value->configs['seo']=='no') {?>&<?php } else { ?>?<?php }?>play_list=<?php echo $_smarty_tpl->tpl_vars['playlist']->value['playlist_id'];?>
" class="playlist-video">
										<img src="<?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['video']->value,'size'=>'168x105'),$_smarty_tpl);?>
" class="img-responsive">
										<img src="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/thumb-ratio.png" alt="" class="thumb-ratio">
									</a>
								<?php } ?>
							</div>
						<?php } else { ?>
						<div class="clearfix well">no items</div>
						<?php }?>
					<?php } ?>
					</div>
					<span class="videos-count"><?php echo number_format($_smarty_tpl->tpl_vars['cbvid']->value->action->count_playlist_items($_smarty_tpl->tpl_vars['playlist']->value['playlist_id']));?>
&nbsp;<?php echo smarty_lang(array('code'=>"videos"),$_smarty_tpl);?>
</span>
				</div>
				<?php } ?>
			</div>
			<?php } else { ?>
				<?php if (has_access('admin_access')) {?>
					<div class="clearfix well"><?php echo smarty_lang(array('code'=>"no_playlists"),$_smarty_tpl);?>
</div>
				<?php }?>
			<?php }?>
		</aside>
	</div>	
</div>

<script type="text/javascript">
	// handles initial and load more
	// for home page videos
	var langCo = "<?php echo $_smarty_tpl->tpl_vars['vae']->value;?>
";
	var noRecent = "<?php echo $_smarty_tpl->tpl_vars['no_recent']->value;?>
";
	var loadMoreLang = "<?php echo $_smarty_tpl->tpl_vars['loadMoreLang']->value;?>
";

	//console.log(langCo);
	homePageVideos("<?php echo $_smarty_tpl->tpl_vars['got_qlitems']->value;?>
");
	//
	/* player height and editerpick videos height */
	var WinWidHome = "";
	function editpickVideos(){
		WinWidHome = $(window).width();
		if(WinWidHome > 991)
		{
			//console.log("height "+WinWidHome);
			var bannerHeight = $(".editorpick-holder").height();
			bannerHeight = bannerHeight - 12;
			//console.log("height "+bannerHeight);
			$(".editorpick-videos .scrollable-area").css({
				"height" : bannerHeight+"px",
			});
		}
		else
		{
			console.log("height "+WinWidHome);
			
			$(".editorpick-videos .scrollable-area").css("height","auto");
		}
	}
	
	$('.playerRatio').load(function(){
		editpickVideos();
	});
	$(window).resize(function() {
		editpickVideos();
	});
</script><?php }} ?>
