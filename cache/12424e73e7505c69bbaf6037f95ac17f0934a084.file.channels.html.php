<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 09:35:32
         compiled from "C:\xampp\htdocs\clipbucket\styles\cb_28\layout\channels.html" */ ?>
<?php /*%%SmartyHeaderCode:294195993f5c48e48a8-45171613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12424e73e7505c69bbaf6037f95ac17f0934a084' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\styles\\cb_28\\layout\\channels.html',
      1 => 1502865947,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '294195993f5c48e48a8-45171613',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userquery' => 0,
    'myAccountLinks' => 0,
    'sorting_links' => 0,
    'sort' => 0,
    'name' => 0,
    'time_links' => 0,
    'users' => 0,
    'feature_users' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5993f5c4b33124_46384072',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5993f5c4b33124_46384072')) {function content_5993f5c4b33124_46384072($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['myAccountLinks'])) {$_smarty_tpl->tpl_vars['myAccountLinks'] = clone $_smarty_tpl->tpl_vars['myAccountLinks'];
$_smarty_tpl->tpl_vars['myAccountLinks']->value = $_smarty_tpl->tpl_vars['userquery']->value->my_account_links(); $_smarty_tpl->tpl_vars['myAccountLinks']->nocache = null; $_smarty_tpl->tpl_vars['myAccountLinks']->scope = 0;
} else $_smarty_tpl->tpl_vars['myAccountLinks'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->my_account_links(), null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['leftMenuLinks'])) {$_smarty_tpl->tpl_vars['leftMenuLinks'] = clone $_smarty_tpl->tpl_vars['leftMenuLinks'];
$_smarty_tpl->tpl_vars['leftMenuLinks']->value = array_slice($_smarty_tpl->tpl_vars['myAccountLinks']->value,7); $_smarty_tpl->tpl_vars['leftMenuLinks']->nocache = null; $_smarty_tpl->tpl_vars['leftMenuLinks']->scope = 0;
} else $_smarty_tpl->tpl_vars['leftMenuLinks'] = new Smarty_variable(array_slice($_smarty_tpl->tpl_vars['myAccountLinks']->value,7), null, 0);?>
<div id="main" class="clearfix container">
	<div class="clearfix">
		<section id="content" class="clearfix channels">
			<div class="clearfix leaderboard-ad ad">
				<?php echo getAd(array('place'=>'ad_728x90'),$_smarty_tpl);?>

			</div>
			<?php if (isset($_smarty_tpl->tpl_vars['categories'])) {$_smarty_tpl->tpl_vars['categories'] = clone $_smarty_tpl->tpl_vars['categories'];
$_smarty_tpl->tpl_vars['categories']->value = pullCategories(); $_smarty_tpl->tpl_vars['categories']->nocache = null; $_smarty_tpl->tpl_vars['categories']->scope = 0;
} else $_smarty_tpl->tpl_vars['categories'] = new Smarty_variable(pullCategories(), null, 0);?>
			<?php if (isset($_smarty_tpl->tpl_vars['sorting_links'])) {$_smarty_tpl->tpl_vars['sorting_links'] = clone $_smarty_tpl->tpl_vars['sorting_links'];
$_smarty_tpl->tpl_vars['sorting_links']->value = sorting_links(); $_smarty_tpl->tpl_vars['sorting_links']->nocache = null; $_smarty_tpl->tpl_vars['sorting_links']->scope = 0;
} else $_smarty_tpl->tpl_vars['sorting_links'] = new Smarty_variable(sorting_links(), null, 0);?>
			<div class="filter-dropdowns clearfix">
				<div class="cat-col col-lg-6 col-md-6 col-sm-6 col-xs-12 clearfix">
					<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/category_list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>'channels'), 0);?>

				</div>
				<div class="sorting-col col-lg-6 col-md-6 col-sm-6 col-xs-12 clearfix">
					<!--Sorting By View-->
					<div class="dropdown">
						<?php if ($_GET['sort']) {?>
						<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['sort'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sorting_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['sort']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
							<?php if ($_GET['sort']==$_smarty_tpl->tpl_vars['sort']->value&&isset($_GET['sort'])) {?> 
							<a href="javascript:void(0)" data-toggle="dropdown" class="dropdown-toggle"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <span class="icon-down-arrow"></span></a>
							<?php }?>
						<?php } ?>
						<?php } else { ?>
							<a href="javascript:void(0)" data-toggle="dropdown" class="dropdown-toggle">Recent <span class="icon-down-arrow"></span></a>
						<?php }?>    
					
						<ul class="dropdown-menu">
							<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['sort'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sorting_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['sort']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
							<li>
								<a href="<?php echo cblink(array('name'=>'sort','sort'=>$_smarty_tpl->tpl_vars['sort']->value,'type'=>'channels'),$_smarty_tpl);?>
&sorting=sort" <?php if ($_GET['sort']==$_smarty_tpl->tpl_vars['sort']->value) {?> class="selected" <?php }?>><?php if ($_GET['sort']==$_smarty_tpl->tpl_vars['sort']->value) {?><i class="icon-tick"></i><?php }?><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a>
							</li>
							<?php } ?>
						</ul>
					</div>
					
					<!--Sorting By time-->
					<?php if (isset($_smarty_tpl->tpl_vars['time_links'])) {$_smarty_tpl->tpl_vars['time_links'] = clone $_smarty_tpl->tpl_vars['time_links'];
$_smarty_tpl->tpl_vars['time_links']->value = time_links(); $_smarty_tpl->tpl_vars['time_links']->nocache = null; $_smarty_tpl->tpl_vars['time_links']->scope = 0;
} else $_smarty_tpl->tpl_vars['time_links'] = new Smarty_variable(time_links(), null, 0);?>
					<div class="dropdown">
						<?php if ($_GET['time']) {?> 
					
						<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['sort'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['time_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['sort']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
							<?php if ($_GET['time']==$_smarty_tpl->tpl_vars['sort']->value&&isset($_GET['time'])) {?> 
							<a href="javascript:void(0)" data-toggle="dropdown" class="dropdown-toggle"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <span class="icon-down-arrow"></span></a>
							<?php }?>
						<?php } ?>
						<?php } else { ?>
							<a href="javascript:void(0)" data-toggle="dropdown" class="dropdown-toggle">all time <span class="icon-down-arrow"></span></a>
						<?php }?>  
						  <ul class="dropdown-menu">
							<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['sort'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['time_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['sort']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
								<li>
									<a href="<?php echo cblink(array('name'=>'time','sort'=>$_smarty_tpl->tpl_vars['sort']->value,'type'=>'channels'),$_smarty_tpl);?>
&timing=time" <?php if ($_GET['time']==$_smarty_tpl->tpl_vars['sort']->value) {?> class="selected"<?php }?>><?php if ($_GET['time']==$_smarty_tpl->tpl_vars['sort']->value) {?><i class="icon-tick"></i><?php }?><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a>
								</li>
							<?php } ?>
						  </ul>
					</div>
				</div>
			</div>
			<div class="clearfix row">
				<?php if ($_smarty_tpl->tpl_vars['users']->value) {?>
				<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
				<div class="item-channel col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/channels.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('block_type'=>'itemChannel'), 0);?>

				</div>
				<?php } ?>
				<?php } else { ?>
				<div class="well well-info"><?php echo smarty_lang(array('code'=>"no_channel_found"),$_smarty_tpl);?>
</div>
				<?php }?>
			</div>
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/pagination.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</section>
		<aside id="sidebar">
			<div class="box-ad ad"><?php echo getAd(array('place'=>'ad_300x250'),$_smarty_tpl);?>
</div>
			<?php if (isset($_smarty_tpl->tpl_vars['feature_users'])) {$_smarty_tpl->tpl_vars['feature_users'] = clone $_smarty_tpl->tpl_vars['feature_users'];
$_smarty_tpl->tpl_vars['feature_users']->value = get_users(array('featured'=>'yes','limit'=>6)); $_smarty_tpl->tpl_vars['feature_users']->nocache = null; $_smarty_tpl->tpl_vars['feature_users']->scope = 0;
} else $_smarty_tpl->tpl_vars['feature_users'] = new Smarty_variable(get_users(array('featured'=>'yes','limit'=>6)), null, 0);?>
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
		</aside>
	</div>
</div><?php }} ?>
