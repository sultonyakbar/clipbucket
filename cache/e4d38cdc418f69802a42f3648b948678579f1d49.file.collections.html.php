<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 09:35:44
         compiled from "C:\xampp\htdocs\clipbucket\styles\cb_28\layout\collections.html" */ ?>
<?php /*%%SmartyHeaderCode:303395993f5d0afaaf6-45588261%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4d38cdc418f69802a42f3648b948678579f1d49' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\styles\\cb_28\\layout\\collections.html',
      1 => 1502865947,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '303395993f5d0afaaf6-45588261',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userquery' => 0,
    'myAccountLinks' => 0,
    'verify_logged_user' => 0,
    'baseurl' => 0,
    'sorting_links' => 0,
    'sort' => 0,
    'name' => 0,
    'time_links' => 0,
    'collections' => 0,
    'collection' => 0,
    'cbcollection' => 0,
    'myquery' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5993f5d0d64ff3_46660756',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5993f5d0d64ff3_46660756')) {function content_5993f5d0d64ff3_46660756($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['myAccountLinks'])) {$_smarty_tpl->tpl_vars['myAccountLinks'] = clone $_smarty_tpl->tpl_vars['myAccountLinks'];
$_smarty_tpl->tpl_vars['myAccountLinks']->value = $_smarty_tpl->tpl_vars['userquery']->value->my_account_links(); $_smarty_tpl->tpl_vars['myAccountLinks']->nocache = null; $_smarty_tpl->tpl_vars['myAccountLinks']->scope = 0;
} else $_smarty_tpl->tpl_vars['myAccountLinks'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->my_account_links(), null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['leftMenuLinks'])) {$_smarty_tpl->tpl_vars['leftMenuLinks'] = clone $_smarty_tpl->tpl_vars['leftMenuLinks'];
$_smarty_tpl->tpl_vars['leftMenuLinks']->value = array_slice($_smarty_tpl->tpl_vars['myAccountLinks']->value,7); $_smarty_tpl->tpl_vars['leftMenuLinks']->nocache = null; $_smarty_tpl->tpl_vars['leftMenuLinks']->scope = 0;
} else $_smarty_tpl->tpl_vars['leftMenuLinks'] = new Smarty_variable(array_slice($_smarty_tpl->tpl_vars['myAccountLinks']->value,7), null, 0);?>
<div id="main" class="clearfix container">
	<div class="clearfix">
		<section id="content" class="clearfix">
			<div class="clearfix leaderboard-ad ad">
				<?php echo getAd(array('place'=>'ad_728x90'),$_smarty_tpl);?>

			</div>
			<?php if (isset($_smarty_tpl->tpl_vars['sorting_links'])) {$_smarty_tpl->tpl_vars['sorting_links'] = clone $_smarty_tpl->tpl_vars['sorting_links'];
$_smarty_tpl->tpl_vars['sorting_links']->value = sorting_links(); $_smarty_tpl->tpl_vars['sorting_links']->nocache = null; $_smarty_tpl->tpl_vars['sorting_links']->scope = 0;
} else $_smarty_tpl->tpl_vars['sorting_links'] = new Smarty_variable(sorting_links(), null, 0);?>
			<div class="filter-dropdowns clearfix">
				<?php if ((has_access('allow_create_collection',false,$_smarty_tpl->tpl_vars['verify_logged_user']->value))) {?>
				<div class="cat-col col-lg-6 col-md-6 col-sm-6 col-xs-12 clearfix">
					<a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/manage_collections.php?mode=add_new"><?php echo smarty_lang(array('code'=>'add_new_collection'),$_smarty_tpl);?>
</a>
				</div>
				<?php } else { ?>
				<div class="col-md-6 text-center">
				<div class="alert alert-danger">
				<strong><?php echo smarty_lang(array('code'=>"creating_collection_is_disabled"),$_smarty_tpl);?>
</strong>
				</div>
				</div>
				<?php }?>
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
								<a href="<?php echo cblink(array('name'=>'sort','sort'=>$_smarty_tpl->tpl_vars['sort']->value,'type'=>'collections'),$_smarty_tpl);?>
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
									<a href="<?php echo cblink(array('name'=>'time','sort'=>$_smarty_tpl->tpl_vars['sort']->value,'type'=>'collections'),$_smarty_tpl);?>
&timing=time" <?php if ($_GET['time']==$_smarty_tpl->tpl_vars['sort']->value) {?> class="selected"<?php }?>><?php if ($_GET['time']==$_smarty_tpl->tpl_vars['sort']->value) {?><i class="icon-tick"></i><?php }?><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a>
								</li>
							<?php } ?>
						  </ul>
					</div>
				</div>
			</div>
			<!-- /Page Heading -->
			<div class="collections clearfix">
				<div class="row clearfix">
				<?php if ($_smarty_tpl->tpl_vars['collections']->value) {?>
				<?php  $_smarty_tpl->tpl_vars['collection'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['collection']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['collections']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['collection']->key => $_smarty_tpl->tpl_vars['collection']->value) {
$_smarty_tpl->tpl_vars['collection']->_loop = true;
?>
					<?php if (isset($_smarty_tpl->tpl_vars['first_col_thumb'])) {$_smarty_tpl->tpl_vars['first_col_thumb'] = clone $_smarty_tpl->tpl_vars['first_col_thumb'];
$_smarty_tpl->tpl_vars['first_col_thumb']->value = $_smarty_tpl->tpl_vars['cbcollection']->value->coll_first_thumb($_smarty_tpl->tpl_vars['collection']->value,'l'); $_smarty_tpl->tpl_vars['first_col_thumb']->nocache = null; $_smarty_tpl->tpl_vars['first_col_thumb']->scope = 0;
} else $_smarty_tpl->tpl_vars['first_col_thumb'] = new Smarty_variable($_smarty_tpl->tpl_vars['cbcollection']->value->coll_first_thumb($_smarty_tpl->tpl_vars['collection']->value,'l'), null, 0);?>
					<div class="clearfix collection-item col-lg-4 col-md-4 col-sm-4 col-xs-6">
						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/collection-item.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					</div>
				<?php } ?>
				<?php } else { ?>
					<?php echo smarty_lang(array('code'=>'no_results_found'),$_smarty_tpl);?>

				<?php }?>
				</div>
			</div>
	
			<div align="center" class="clearfix"><!--Pagination-->
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/pagination.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</div><!-- Pagination-->
		</section>
		<aside id="sidebar">
			<div class="box-ad ad"><?php echo getAd(array('place'=>'ad_300x250'),$_smarty_tpl);?>
</div>
			<?php if (isset($_smarty_tpl->tpl_vars['row'])) {$_smarty_tpl->tpl_vars['row'] = clone $_smarty_tpl->tpl_vars['row'];
$_smarty_tpl->tpl_vars['row']->value = $_smarty_tpl->tpl_vars['myquery']->value->Get_Website_Details(); $_smarty_tpl->tpl_vars['row']->nocache = null; $_smarty_tpl->tpl_vars['row']->scope = 0;
} else $_smarty_tpl->tpl_vars['row'] = new Smarty_variable($_smarty_tpl->tpl_vars['myquery']->value->Get_Website_Details(), null, 0);?>
			<?php if ($_smarty_tpl->tpl_vars['row']->value['collectionsSection']=='yes') {?>
			<?php if (isset($_smarty_tpl->tpl_vars['collections'])) {$_smarty_tpl->tpl_vars['collections'] = clone $_smarty_tpl->tpl_vars['collections'];
$_smarty_tpl->tpl_vars['collections']->value = $_smarty_tpl->tpl_vars['cbcollection']->value->get_collections(array('limit'=>5,'active'=>'yes')); $_smarty_tpl->tpl_vars['collections']->nocache = null; $_smarty_tpl->tpl_vars['collections']->scope = 0;
} else $_smarty_tpl->tpl_vars['collections'] = new Smarty_variable($_smarty_tpl->tpl_vars['cbcollection']->value->get_collections(array('limit'=>5,'active'=>'yes')), null, 0);?>
			<?php if (isset($_smarty_tpl->tpl_vars['collections'])) {$_smarty_tpl->tpl_vars['collections'] = clone $_smarty_tpl->tpl_vars['collections'];
$_smarty_tpl->tpl_vars['collections']->value = $_smarty_tpl->tpl_vars['cbcollection']->value->activeCollections($_smarty_tpl->tpl_vars['collections']->value); $_smarty_tpl->tpl_vars['collections']->nocache = null; $_smarty_tpl->tpl_vars['collections']->scope = 0;
} else $_smarty_tpl->tpl_vars['collections'] = new Smarty_variable($_smarty_tpl->tpl_vars['cbcollection']->value->activeCollections($_smarty_tpl->tpl_vars['collections']->value), null, 0);?>
			<h2><?php echo smarty_lang(array('code'=>"top_collections"),$_smarty_tpl);?>
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
					<div class="clearfix collection-item col-lg-6 col-md-6 col-sm-12 col-xs-6"> 
						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/collection-item.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					</div>
				<?php } ?>
				</div>
				<?php } else { ?>
				<div class="well well-info"><?php echo smarty_lang(array('code'=>'no_collection_found'),$_smarty_tpl);?>
</div>
				<?php }?>
			</div>
			<?php }?>
		</aside>
	</div>
</div><?php }} ?>
