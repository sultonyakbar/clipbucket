<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 09:25:45
         compiled from "C:\xampp\htdocs\clipbucket\styles\cb_28\layout\header.html" */ ?>
<?php /*%%SmartyHeaderCode:153225993f3792704a1-28200077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46a8f62ab158bb878969afb5a1f3b02d066ddc45' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\styles\\cb_28\\layout\\header.html',
      1 => 1502865948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153225993f3792704a1-28200077',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currentPage' => 0,
    'baseurl' => 0,
    'theme' => 0,
    'head_menu' => 0,
    'menu' => 0,
    'pageType' => 0,
    'Cbucket' => 0,
    'stypes' => 0,
    'counter' => 0,
    'toSearch' => 0,
    'userquery' => 0,
    'user_det' => 0,
    'admin_baseurl' => 0,
    'vidMode' => 0,
    'photoMode' => 0,
    'channelsMode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5993f3795f50a9_84902219',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5993f3795f50a9_84902219')) {function content_5993f3795f50a9_84902219($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\clipbucket\\includes\\smartyv3\\plugins\\modifier.truncate.php';
?><?php if (isset($_smarty_tpl->tpl_vars['currentPage'])) {$_smarty_tpl->tpl_vars['currentPage'] = clone $_smarty_tpl->tpl_vars['currentPage'];
$_smarty_tpl->tpl_vars['currentPage']->value = mb_strtolower(@constant('THIS_PAGE'), 'UTF-8'); $_smarty_tpl->tpl_vars['currentPage']->nocache = null; $_smarty_tpl->tpl_vars['currentPage']->scope = 0;
} else $_smarty_tpl->tpl_vars['currentPage'] = new Smarty_variable(mb_strtolower(@constant('THIS_PAGE'), 'UTF-8'), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['currentPage']->value=='view_channel'||$_smarty_tpl->tpl_vars['currentPage']->value=='channels') {?>
<?php if (isset($_smarty_tpl->tpl_vars['currentPage'])) {$_smarty_tpl->tpl_vars['currentPage'] = clone $_smarty_tpl->tpl_vars['currentPage'];
$_smarty_tpl->tpl_vars['currentPage']->value = 'channels'; $_smarty_tpl->tpl_vars['currentPage']->nocache = null; $_smarty_tpl->tpl_vars['currentPage']->scope = 0;
} else $_smarty_tpl->tpl_vars['currentPage'] = new Smarty_variable('channels', null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['toSearch'])) {$_smarty_tpl->tpl_vars['toSearch'] = clone $_smarty_tpl->tpl_vars['toSearch'];
$_smarty_tpl->tpl_vars['toSearch']->value = 'channels'; $_smarty_tpl->tpl_vars['toSearch']->nocache = null; $_smarty_tpl->tpl_vars['toSearch']->scope = 0;
} else $_smarty_tpl->tpl_vars['toSearch'] = new Smarty_variable('channels', null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['currentPage']->value=='view_item'||$_smarty_tpl->tpl_vars['currentPage']->value=='photos') {?>
<?php if (isset($_smarty_tpl->tpl_vars['currentPage'])) {$_smarty_tpl->tpl_vars['currentPage'] = clone $_smarty_tpl->tpl_vars['currentPage'];
$_smarty_tpl->tpl_vars['currentPage']->value = 'photos'; $_smarty_tpl->tpl_vars['currentPage']->nocache = null; $_smarty_tpl->tpl_vars['currentPage']->scope = 0;
} else $_smarty_tpl->tpl_vars['currentPage'] = new Smarty_variable('photos', null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['toSearch'])) {$_smarty_tpl->tpl_vars['toSearch'] = clone $_smarty_tpl->tpl_vars['toSearch'];
$_smarty_tpl->tpl_vars['toSearch']->value = 'photos'; $_smarty_tpl->tpl_vars['toSearch']->nocache = null; $_smarty_tpl->tpl_vars['toSearch']->scope = 0;
} else $_smarty_tpl->tpl_vars['toSearch'] = new Smarty_variable('photos', null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['currentPage']->value=='collections'||$_smarty_tpl->tpl_vars['currentPage']->value=='view_collection') {?>
<?php if (isset($_smarty_tpl->tpl_vars['currentPage'])) {$_smarty_tpl->tpl_vars['currentPage'] = clone $_smarty_tpl->tpl_vars['currentPage'];
$_smarty_tpl->tpl_vars['currentPage']->value = 'collections'; $_smarty_tpl->tpl_vars['currentPage']->nocache = null; $_smarty_tpl->tpl_vars['currentPage']->scope = 0;
} else $_smarty_tpl->tpl_vars['currentPage'] = new Smarty_variable('collections', null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['toSearch'])) {$_smarty_tpl->tpl_vars['toSearch'] = clone $_smarty_tpl->tpl_vars['toSearch'];
$_smarty_tpl->tpl_vars['toSearch']->value = 'collections'; $_smarty_tpl->tpl_vars['toSearch']->nocache = null; $_smarty_tpl->tpl_vars['toSearch']->scope = 0;
} else $_smarty_tpl->tpl_vars['toSearch'] = new Smarty_variable('collections', null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['currentPage']->value=='watch_video'||$_smarty_tpl->tpl_vars['currentPage']->value=='videos') {?>
<?php if (isset($_smarty_tpl->tpl_vars['currentPage'])) {$_smarty_tpl->tpl_vars['currentPage'] = clone $_smarty_tpl->tpl_vars['currentPage'];
$_smarty_tpl->tpl_vars['currentPage']->value = 'videos'; $_smarty_tpl->tpl_vars['currentPage']->nocache = null; $_smarty_tpl->tpl_vars['currentPage']->scope = 0;
} else $_smarty_tpl->tpl_vars['currentPage'] = new Smarty_variable('videos', null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['toSearch'])) {$_smarty_tpl->tpl_vars['toSearch'] = clone $_smarty_tpl->tpl_vars['toSearch'];
$_smarty_tpl->tpl_vars['toSearch']->value = 'videos'; $_smarty_tpl->tpl_vars['toSearch']->nocache = null; $_smarty_tpl->tpl_vars['toSearch']->scope = 0;
} else $_smarty_tpl->tpl_vars['toSearch'] = new Smarty_variable('videos', null, 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['currentPage']->value=='list') {?>
<?php if (isset($_smarty_tpl->tpl_vars['currentPage'])) {$_smarty_tpl->tpl_vars['currentPage'] = clone $_smarty_tpl->tpl_vars['currentPage'];
$_smarty_tpl->tpl_vars['currentPage']->value = 'audios'; $_smarty_tpl->tpl_vars['currentPage']->nocache = null; $_smarty_tpl->tpl_vars['currentPage']->scope = 0;
} else $_smarty_tpl->tpl_vars['currentPage'] = new Smarty_variable('audios', null, 0);?>
<?php }?>
<?php ob_start();?><?php echo smarty_lang(array('code'=>"videos"),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if (isset($_smarty_tpl->tpl_vars['vidMode'])) {$_smarty_tpl->tpl_vars['vidMode'] = clone $_smarty_tpl->tpl_vars['vidMode'];
$_smarty_tpl->tpl_vars['vidMode']->value = $_tmp1; $_smarty_tpl->tpl_vars['vidMode']->nocache = null; $_smarty_tpl->tpl_vars['vidMode']->scope = 0;
} else $_smarty_tpl->tpl_vars['vidMode'] = new Smarty_variable($_tmp1, null, 0);?>
<?php ob_start();?><?php echo smarty_lang(array('code'=>"photos"),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php if (isset($_smarty_tpl->tpl_vars['photoMode'])) {$_smarty_tpl->tpl_vars['photoMode'] = clone $_smarty_tpl->tpl_vars['photoMode'];
$_smarty_tpl->tpl_vars['photoMode']->value = $_tmp2; $_smarty_tpl->tpl_vars['photoMode']->nocache = null; $_smarty_tpl->tpl_vars['photoMode']->scope = 0;
} else $_smarty_tpl->tpl_vars['photoMode'] = new Smarty_variable($_tmp2, null, 0);?>
<?php ob_start();?><?php echo smarty_lang(array('code'=>"channels"),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php if (isset($_smarty_tpl->tpl_vars['channelsMode'])) {$_smarty_tpl->tpl_vars['channelsMode'] = clone $_smarty_tpl->tpl_vars['channelsMode'];
$_smarty_tpl->tpl_vars['channelsMode']->value = $_tmp3; $_smarty_tpl->tpl_vars['channelsMode']->nocache = null; $_smarty_tpl->tpl_vars['channelsMode']->scope = 0;
} else $_smarty_tpl->tpl_vars['channelsMode'] = new Smarty_variable($_tmp3, null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['pageType'])) {$_smarty_tpl->tpl_vars['pageType'] = clone $_smarty_tpl->tpl_vars['pageType'];
$_smarty_tpl->tpl_vars['pageType']->value = mb_strtolower($_GET['type'], 'UTF-8'); $_smarty_tpl->tpl_vars['pageType']->nocache = null; $_smarty_tpl->tpl_vars['pageType']->scope = 0;
} else $_smarty_tpl->tpl_vars['pageType'] = new Smarty_variable(mb_strtolower($_GET['type'], 'UTF-8'), null, 0);?>
<div id="quick_container">
	<div id="quicklist_box">
	</div>
</div> 

<?php if (isset($_smarty_tpl->tpl_vars['searchPage'])) {$_smarty_tpl->tpl_vars['searchPage'] = clone $_smarty_tpl->tpl_vars['searchPage'];
$_smarty_tpl->tpl_vars['searchPage']->value = $_GET['query']; $_smarty_tpl->tpl_vars['searchPage']->nocache = null; $_smarty_tpl->tpl_vars['searchPage']->scope = 0;
} else $_smarty_tpl->tpl_vars['searchPage'] = new Smarty_variable($_GET['query'], null, 0);?>
<header id="header" class="clearfix">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="header-holder">
				<div class="navbar-header clearfix">
					
					<h1 class="logo">
						<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
">
							<img src="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/logo.png" alt="cbtune" class="img-responsive">
							<span>clipbucket</span>
						</a>
					</h1>
					
					<button class="navbar-toggle" data-toggle="collapse" data-target="#bs-collapse">Menu<span class="icon-down-arrow"></span></button>
					
					<a href="javascript:void(0)" class="btn-search-toggle btn visible-xs">
						<i class="icon-search"></i>
					</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-collapse">
					<div class="menu-holder">
						
						<div class="col">
							<nav class="main-links">
								<?php if (isset($_smarty_tpl->tpl_vars['head_menu'])) {$_smarty_tpl->tpl_vars['head_menu'] = clone $_smarty_tpl->tpl_vars['head_menu'];
$_smarty_tpl->tpl_vars['head_menu']->value = cb_menu(); $_smarty_tpl->tpl_vars['head_menu']->nocache = null; $_smarty_tpl->tpl_vars['head_menu']->scope = 0;
} else $_smarty_tpl->tpl_vars['head_menu'] = new Smarty_variable(cb_menu(), null, 0);?>
								<ul>
									<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['head_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['menu']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
 $_smarty_tpl->tpl_vars['menu']->iteration++;
?>
									<?php if (mb_strtolower($_smarty_tpl->tpl_vars['menu']->value['name'], 'UTF-8')=='groups') {?>
									<?php continue 1?>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['menu']->iteration<6) {?>
									<?php if (mb_strtolower($_smarty_tpl->tpl_vars['menu']->value['this'], 'UTF-8')=='home') {?>
									<?php continue 1?>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['menu']->value['this']=="home") {?>
									<?php continue 1?>
									<?php }?>
									<li <?php if (mb_strtolower($_smarty_tpl->tpl_vars['menu']->value['name'], 'UTF-8')==mb_strtolower(@constant('THIS_PAGE'), 'UTF-8')||mb_strtolower($_smarty_tpl->tpl_vars['menu']->value['name'], 'UTF-8')==$_smarty_tpl->tpl_vars['currentPage']->value) {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['menu']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value['name'];?>
</a></li>
									<?php }?>
									<?php } ?>
									
									<?php echo ANCHOR(array('place'=>"cb_28_head"),$_smarty_tpl);?>

								</ul>
							</nav>
						</div>
						<!-- <div class="col">
							<a href="#" class="fancy-btn btn btn-default cd-popup-trigger">Animation</a>
						</div> -->
						<div class="col btn-holder user_menu text-right">
							<div class="search">
								<form class="search-form" action="<?php echo cblink(array('name'=>'search_result'),$_smarty_tpl);?>
">
									<div class="cbsearchtype">
										<div class="search-drop">
											<button id="searchTypes" tabindex="-1" data-toggle="dropdown" class="btn btn-default dropdown-toggle search-drop-btn" type="button">
												<span class="search-type"><?php if ($_smarty_tpl->tpl_vars['pageType']->value) {?><?php echo ucfirst($_smarty_tpl->tpl_vars['pageType']->value);?>
<?php } elseif ($_smarty_tpl->tpl_vars['currentPage']->value=='videos'||$_smarty_tpl->tpl_vars['currentPage']->value=='channels'||$_smarty_tpl->tpl_vars['currentPage']->value=='photos') {?><?php echo ucfirst($_smarty_tpl->tpl_vars['currentPage']->value);?>
<?php } else { ?><?php echo smarty_lang(array('code'=>"videos"),$_smarty_tpl);?>
<?php }?></span>
												<span class="icon-down-arrow"></span>
											</button>
											<ul class="dropdown-menu">
												<?php if (isset($_smarty_tpl->tpl_vars['counter'])) {$_smarty_tpl->tpl_vars['counter'] = clone $_smarty_tpl->tpl_vars['counter'];
$_smarty_tpl->tpl_vars['counter']->value = 1; $_smarty_tpl->tpl_vars['counter']->nocache = null; $_smarty_tpl->tpl_vars['counter']->scope = 0;
} else $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable(1, null, 0);?>
												<?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_smarty_tpl->tpl_vars['stypes'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Cbucket']->value->search_types; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
 $_smarty_tpl->tpl_vars['stypes']->value = $_smarty_tpl->tpl_vars['t']->key;
?>
												<?php if (mb_strtolower($_smarty_tpl->tpl_vars['stypes']->value, 'UTF-8')=='groups') {?>
												<?php continue 1?>
												<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['counter']->value==3) {?>
												<li value="<?php echo $_smarty_tpl->tpl_vars['stypes']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['pageType']->value==$_smarty_tpl->tpl_vars['stypes']->value||$_smarty_tpl->tpl_vars['currentPage']->value==$_smarty_tpl->tpl_vars['stypes']->value) {?>  class="active"  <?php }?>>
													<a  class="s-types" href="#" valNow="<?php echo $_smarty_tpl->tpl_vars['stypes']->value;?>
"><?php echo smarty_lang(array('code'=>((string)$_smarty_tpl->tpl_vars['stypes']->value)),$_smarty_tpl);?>
</a>
												</li>
												<?php } else { ?>
												<li value="<?php echo $_smarty_tpl->tpl_vars['stypes']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['pageType']->value==$_smarty_tpl->tpl_vars['stypes']->value||$_smarty_tpl->tpl_vars['currentPage']->value==$_smarty_tpl->tpl_vars['stypes']->value) {?>  class="active" <?php }?>>
													<a  class="s-types" href="#" valNow="<?php echo $_smarty_tpl->tpl_vars['stypes']->value;?>
"><?php echo smarty_lang(array('code'=>((string)$_smarty_tpl->tpl_vars['stypes']->value)),$_smarty_tpl);?>
</a>
												</li>
												<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['counter'])) {$_smarty_tpl->tpl_vars['counter'] = clone $_smarty_tpl->tpl_vars['counter'];
$_smarty_tpl->tpl_vars['counter']->value = $_smarty_tpl->tpl_vars['counter']->value+1; $_smarty_tpl->tpl_vars['counter']->nocache = null; $_smarty_tpl->tpl_vars['counter']->scope = 0;
} else $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['counter']->value+1, null, 0);?>
												<?php } ?>
												<?php echo ANCHOR(array('place'=>"beat_search"),$_smarty_tpl);?>

											</ul>
										</div>
										<input type="text" class="form-control" name="query" placeholder="<?php echo smarty_lang(array('code'=>"search_keyword_feed"),$_smarty_tpl);?>
" value="<?php echo get_form_val('query',true);?>
" id="query">
										<input type="hidden" name="type" class="type" value="<?php if (isset($_GET['type'])) {?><?php echo $_GET['type'];?>
<?php } elseif ($_smarty_tpl->tpl_vars['toSearch']->value) {?><?php echo $_smarty_tpl->tpl_vars['toSearch']->value;?>
<?php } else { ?>videos<?php }?>" id="type">
										<button tabindex="-1" type="submit" name="cbsearch" id="cbsearch" class="btn btn-default btn-search icon-search"></button>
									</div>
								</form><!-- form Ends -->
							</div>
							<ul class="nav navbar-nav navbar-right right-menu">
								<?php if (userid()) {?>
								<li class="dropdown upload_link">
									<a href="<?php echo cblink(array('name'=>'upload'),$_smarty_tpl);?>
" class="dropdown-toggle btn-upload btn btn-default" data-toggle="dropdown"><i class="icon-upload"></i><span><?php echo smarty_lang(array('code'=>"upload"),$_smarty_tpl);?>
</span><b class="icon-down-arrow"></b></a>
									<ul role="menu" class="dropdown-menu">
										<?php if (has_access('allow_video_upload',true,true)&&isSectionEnabled('videos')) {?>
										<li class="up_vid"><a href="<?php echo cblink(array('name'=>'upload'),$_smarty_tpl);?>
"><?php echo smarty_lang(array('code'=>"upload_video"),$_smarty_tpl);?>
<i class="icon-video visible-xs"></i></a></li>
										<?php }?>
										<?php if (isSectionEnabled('photos')) {?>
										<li class="up_img"><a href="<?php echo cblink(array('name'=>'photo_upload'),$_smarty_tpl);?>
"><?php echo smarty_lang(array('code'=>"upload_photo"),$_smarty_tpl);?>
<i class="icon-photo visible-xs"></i></a></li>
										<?php }?>
										<?php echo ANCHOR(array('place'=>"aud_upload_link"),$_smarty_tpl);?>

									</ul>
								</li>

								<li class="dropdown myaccount-dd">
									<a href="javascript:void(0)" class="user-area dropdown-toggle" data-toggle="dropdown">
										<?php if (isset($_smarty_tpl->tpl_vars['user_det'])) {$_smarty_tpl->tpl_vars['user_det'] = clone $_smarty_tpl->tpl_vars['user_det'];
$_smarty_tpl->tpl_vars['user_det']->value = $_smarty_tpl->tpl_vars['userquery']->value->get_user_details(userid()); $_smarty_tpl->tpl_vars['user_det']->nocache = null; $_smarty_tpl->tpl_vars['user_det']->scope = 0;
} else $_smarty_tpl->tpl_vars['user_det'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->get_user_details(userid()), null, 0);?>
										<img src="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->getUserThumb($_smarty_tpl->tpl_vars['user_det']->value);?>
" width="35" height="35">
										<span><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['userquery']->value->username,15);?>
</span>
									</a>
									<ul class="dropdown-menu">
										<?php if (has_access('admin_access')) {?>
										<li class="hidden-xs"><a href="<?php echo $_smarty_tpl->tpl_vars['admin_baseurl']->value;?>
"><?php echo smarty_lang(array('code'=>"admin_area"),$_smarty_tpl);?>
</a></li>
										<?php }?>
										<li class="hidden-xs"><a href="<?php echo cblink(array('name'=>'my_account'),$_smarty_tpl);?>
<?php echo userid(array(),$_smarty_tpl);?>
"><?php echo smarty_lang(array('code'=>"my_account"),$_smarty_tpl);?>
</a></li>
										<li class="hidden-xs"><a href="<?php echo cblink(array('name'=>'my_videos'),$_smarty_tpl);?>
"><?php echo smarty_lang(array('code'=>"manage_videos"),$_smarty_tpl);?>
</a></li>
										<?php echo ANCHOR(array('place'=>"head_audio_dropdown"),$_smarty_tpl);?>

										<li><a href="<?php echo cblink(array('name'=>'channels'),$_smarty_tpl);?>
"><?php echo smarty_lang(array('code'=>"view_channels"),$_smarty_tpl);?>
</a></li>
										<!-- changes made-->
										<li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/manage_playlists.php?user=<?php echo $_smarty_tpl->tpl_vars['userquery']->value->username;?>
"><?php echo smarty_lang(array('code'=>"my_playlists"),$_smarty_tpl);?>
</a></li>
										<!-- /changes made-->
										<li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/view_channel.php?user=<?php echo $_smarty_tpl->tpl_vars['userquery']->value->username;?>
"><?php echo smarty_lang(array('code'=>"my_channel"),$_smarty_tpl);?>
</a></li>
										<?php echo ANCHOR(array('place'=>'premium_button_link'),$_smarty_tpl);?>

										<li class="divider"></li>
										<li><a href="<?php echo cblink(array('name'=>'logout'),$_smarty_tpl);?>
"><?php echo smarty_lang(array('code'=>"logout"),$_smarty_tpl);?>
</a></li>
									</ul>
								</li>
								<?php } else { ?>
								
								<!-- Shown to small devices only Start  @todo : Add condition for logged in user -->
								<li class="navbar-sm-login-links">
									<a class="btn btn-default btn-newacc" href="<?php echo cblink(array('name'=>'signup'),$_smarty_tpl);?>
"><?php echo smarty_lang(array('code'=>'create_new_account'),$_smarty_tpl);?>
</a>
								</li>
								<li class="navbar-sm-login-links">
									<a class="btn btn-default btn-login" href="<?php echo cblink(array('name'=>'signup'),$_smarty_tpl);?>
?mode=login"><?php echo smarty_lang(array('code'=>'login'),$_smarty_tpl);?>
</a>
								</li>
								
								<!-- Ends -->
								<?php }?>
							</ul>
						</div>
					</div>
				</div><!--navbar-collapse-->
			</div>
		</div><!--container-fluid-->
	</nav>
</header>

<script>
	$(document).ready(function(){
		var vidMode = "<?php echo $_smarty_tpl->tpl_vars['vidMode']->value;?>
",
		photoMode = "<?php echo $_smarty_tpl->tpl_vars['photoMode']->value;?>
",
		channelsMode = "<?php echo $_smarty_tpl->tpl_vars['channelsMode']->value;?>
",
		currentDisplay = $('span.search-type').text();
		if (currentDisplay == 'Videos') {
			$('span.search-type').text(vidMode);
		} else if (currentDisplay == 'Channels') {
			$('span.search-type').text(channelsMode);
		} else if (currentDisplay == 'Photos') {
			$('span.search-type').text(photoMode);
		}

		$(".cbsearchtype a").on({
			click: function(e){
				e.preventDefault();
				var prent_li = $(this).parents();
				var theNewVal = $(this).attr('valNow');
				$('.type').val(theNewVal);
				$('.cbsearchtype li').removeClass('active');
				prent_li.addClass('active');
			}
		});

		$('.s-types').on("click", function(){
			var _this = $(this);
			var text = _this.html();
			$('.search-type').html(text);
		});



	});
</script>
<?php }} ?>
