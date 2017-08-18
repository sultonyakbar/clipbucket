<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 10:11:58
         compiled from "C:\xampp\htdocs\clipbucket\styles\cb_28\layout\view_collection.html" */ ?>
<?php /*%%SmartyHeaderCode:323055993fe4e55e472-30553889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92413a264a36ca79e851db6378b44ba5c4f1661c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\styles\\cb_28\\layout\\view_collection.html',
      1 => 1502865949,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '323055993fe4e55e472-30553889',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'c' => 0,
    'type' => 0,
    'objects' => 0,
    'myquery' => 0,
    'featured' => 0,
    'row' => 0,
    'cbcollection' => 0,
    'collections' => 0,
    'collection' => 0,
    'object_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5993fe4e7eb394_35038977',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5993fe4e7eb394_35038977')) {function content_5993fe4e7eb394_35038977($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\clipbucket\\includes\\smartyv3\\plugins\\modifier.capitalize.php';
?><div id="main" class="container clearfix">
	<div class="clearfix">
		<section id="content" class="clearfix">
			<div class="clearfix leaderboard-ad ad">
				<?php echo getAd(array('place'=>'ad_728x90'),$_smarty_tpl);?>

			</div>
			<h1>
				<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['c']->value['collection_name']);?>
&nbsp;&nbsp;
				(<?php echo $_smarty_tpl->tpl_vars['c']->value['total_objects'];?>
&nbsp;<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['c']->value['type']);?>
)
				<?php echo smarty_lang(array('code'=>'collection','assign'=>'object_type'),$_smarty_tpl);?>

				<?php echo upload_photo_button(array('details'=>$_smarty_tpl->tpl_vars['c']->value,'output'=>'link','target'=>"_blank",'class'=>'btn btn-success pull-right'),$_smarty_tpl);?>

			</h1>
			<?php if ($_smarty_tpl->tpl_vars['c']->value['type']=='photos') {?>
			<?php if (isset($_smarty_tpl->tpl_vars['type'])) {$_smarty_tpl->tpl_vars['type'] = clone $_smarty_tpl->tpl_vars['type'];
$_smarty_tpl->tpl_vars['type']->value = 'p'; $_smarty_tpl->tpl_vars['type']->nocache = null; $_smarty_tpl->tpl_vars['type']->scope = 0;
} else $_smarty_tpl->tpl_vars['type'] = new Smarty_variable('p', null, 0);?>
			<?php } else { ?>
			<?php if (isset($_smarty_tpl->tpl_vars['type'])) {$_smarty_tpl->tpl_vars['type'] = clone $_smarty_tpl->tpl_vars['type'];
$_smarty_tpl->tpl_vars['type']->value = 'v'; $_smarty_tpl->tpl_vars['type']->nocache = null; $_smarty_tpl->tpl_vars['type']->scope = 0;
} else $_smarty_tpl->tpl_vars['type'] = new Smarty_variable('v', null, 0);?>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['type']->value=='p') {?> 
			<div id="photos" class="clearfix row">
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['list'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['list']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['name'] = 'list';
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['objects']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total']);
?>
				<div class="item-photo col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/collection.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['objects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']],'display_type'=>'view_collection','type'=>$_smarty_tpl->tpl_vars['c']->value['type']), 0);?>

				</div>
				<?php endfor; else: ?>
				<div class="item-photo col-xs-12">
					<div class="well well-info">
						<?php echo $_smarty_tpl->tpl_vars['c']->value['collection_name'];?>
 has 0 items.
					</div>
				<div class="item-photo col-lg-4 col-md-4 col-sm-6 col-xs-6">
				<?php endif; ?>
			</div>
			<?php } else { ?>
			<div class="videos clearfix">
				<div class="clearfix row">
				<?php if ($_smarty_tpl->tpl_vars['objects']->value) {?>
					<?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['objects']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
?>
						<div class="item-video col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/videos/video.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('display_type'=>'homeVideos'), 0);?>

						</div>
					<?php } ?>
				<?php } else { ?>
					<div class="well well-info">No Videos Found !</div>
				<?php }?>
				</div>
			</div>
			<?php }?>
			<div align="center" class="clearfix">
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/pagination.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</div>

			<div class="clearfix fav-repo">
				<div class="show clearfix photoStats">
					<a href="javascript:void(0)" class="btn btn-ghost" id="addToFav" onclick="slide_up_watch_video('#video_action_result_cont');_cb.add_to_favNew('collection','<?php echo $_smarty_tpl->tpl_vars['c']->value['collection_id'];?>
');"><?php echo smarty_lang(array('code'=>'add_to_my_favorites'),$_smarty_tpl);?>
</a>
					<a href="javascript:void(0)" class="btn btn-ghost" id="flagPhotoButton" onclick="$('#flag_item').toggle();"><?php echo smarty_lang(array('code'=>'report_this'),$_smarty_tpl);?>
</a>
				</div>
				
				<div class="video_action_result_boxes clearfix">
					<?php echo show_flag_form(array('id'=>$_smarty_tpl->tpl_vars['c']->value['collection_id'],'type'=>'Collection'),$_smarty_tpl);?>

					<div class="action_box" style="display:none" id="video_action_result_cont"></div>
				</div>

				<ul class="clearfix desc-list">
					<li>
						<strong><?php echo smarty_lang(array('code'=>"uploaded"),$_smarty_tpl);?>
:</strong>&nbsp;<?php echo niceTime($_smarty_tpl->tpl_vars['c']->value['date_added']);?>

					</li>
					<li>
						<strong><?php echo smarty_lang(array('code'=>"views"),$_smarty_tpl);?>
:</strong>&nbsp;<?php echo number_format($_smarty_tpl->tpl_vars['c']->value['views']);?>

					</li>
					<li>
						<strong><?php echo smarty_lang(array('code'=>"category"),$_smarty_tpl);?>
:</strong>&nbsp;<?php echo categories($_smarty_tpl->tpl_vars['c']->value['category'],'collections');?>

					</li>
					<li>	
						<strong><?php echo smarty_lang(array('code'=>"tags"),$_smarty_tpl);?>
:</strong>&nbsp;<?php echo tags($_smarty_tpl->tpl_vars['c']->value['collection_tags'],'collections');?>

					</li>
				</ul>
			</div>

			<div class="clearfix comments-block">
				<?php if ($_smarty_tpl->tpl_vars['myquery']->value->is_commentable($_smarty_tpl->tpl_vars['c']->value,'collection')) {?>

				<div class="collectionComments addComment">
					<h2><?php echo smarty_lang(array('code'=>"comments"),$_smarty_tpl);?>
 (<?php echo $_smarty_tpl->tpl_vars['c']->value['total_comments'];?>
)</h2>

					<?php if ($_smarty_tpl->tpl_vars['myquery']->value->is_commentable($_smarty_tpl->tpl_vars['c']->value,'collection')) {?>
					<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/comments/add_comment.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['c']->value['collection_id'],'type'=>'cl'), 0);?>

					<?php }?>
				</div>

				<div class="userComments">
					<ul id="userCommentsList" style="margin-left:-40px;">
					</ul>
				</div>

				<?php } else { ?>
				<div align="center" class="moveL no_comments">
					<?php echo smarty_lang(array('code'=>'comm_disabled_for_collection'),$_smarty_tpl);?>

				</div>
				<?php }?>
			</div>
		</section>
		<aside id="sidebar">
			<div class="box-ad ad"><?php echo getAd(array('place'=>'ad_300x250'),$_smarty_tpl);?>
</div>
			<?php if (isset($_smarty_tpl->tpl_vars['featured'])) {$_smarty_tpl->tpl_vars['featured'] = clone $_smarty_tpl->tpl_vars['featured'];
$_smarty_tpl->tpl_vars['featured']->value = get_photos(array("featured"=>"yes","limit"=>6)); $_smarty_tpl->tpl_vars['featured']->nocache = null; $_smarty_tpl->tpl_vars['featured']->scope = 0;
} else $_smarty_tpl->tpl_vars['featured'] = new Smarty_variable(get_photos(array("featured"=>"yes","limit"=>6)), null, 0);?>
			<?php if ($_smarty_tpl->tpl_vars['featured']->value) {?>
			<h2><?php echo smarty_lang(array('code'=>'featured_photos'),$_smarty_tpl);?>
</h2>
			<div class="clearfix sidebar-items">
				<div class="row">
					<?php  $_smarty_tpl->tpl_vars['photo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['photo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['featured']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->key => $_smarty_tpl->tpl_vars['photo']->value) {
$_smarty_tpl->tpl_vars['photo']->_loop = true;
?>
						<div class="item-photo col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/photo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('display_type'=>'featuredPhoto_sidebar'), 0);?>

						</div>
					<?php } ?>
				</div>
			</div>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['row'])) {$_smarty_tpl->tpl_vars['row'] = clone $_smarty_tpl->tpl_vars['row'];
$_smarty_tpl->tpl_vars['row']->value = $_smarty_tpl->tpl_vars['myquery']->value->Get_Website_Details(); $_smarty_tpl->tpl_vars['row']->nocache = null; $_smarty_tpl->tpl_vars['row']->scope = 0;
} else $_smarty_tpl->tpl_vars['row'] = new Smarty_variable($_smarty_tpl->tpl_vars['myquery']->value->Get_Website_Details(), null, 0);?>
			<?php if ($_smarty_tpl->tpl_vars['row']->value['collectionsSection']=='yes') {?>
				<?php if (isset($_smarty_tpl->tpl_vars['collections'])) {$_smarty_tpl->tpl_vars['collections'] = clone $_smarty_tpl->tpl_vars['collections'];
$_smarty_tpl->tpl_vars['collections']->value = $_smarty_tpl->tpl_vars['cbcollection']->value->get_collections(array('limit'=>5,'active'=>'yes')); $_smarty_tpl->tpl_vars['collections']->nocache = null; $_smarty_tpl->tpl_vars['collections']->scope = 0;
} else $_smarty_tpl->tpl_vars['collections'] = new Smarty_variable($_smarty_tpl->tpl_vars['cbcollection']->value->get_collections(array('limit'=>5,'active'=>'yes')), null, 0);?>
				<h2><?php echo smarty_lang(array('code'=>"top_collections"),$_smarty_tpl);?>
</h2>
				<div class="clearfix sidebar-items collections-grid">
					<?php if (isset($_smarty_tpl->tpl_vars['limit'])) {$_smarty_tpl->tpl_vars['limit'] = clone $_smarty_tpl->tpl_vars['limit'];
$_smarty_tpl->tpl_vars['limit']->value = 10; $_smarty_tpl->tpl_vars['limit']->nocache = null; $_smarty_tpl->tpl_vars['limit']->scope = 0;
} else $_smarty_tpl->tpl_vars['limit'] = new Smarty_variable(10, null, 0);?>
					<?php if ($_smarty_tpl->tpl_vars['collections']->value) {?>
					<div class="clearfix row">
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
					<div class="well well-info"><?php echo smarty_lang(array('code'=>'no_items_found_in_collect'),$_smarty_tpl);?>
</div>
					<?php }?>
				</div>
			<?php }?>
		</aside>
	</div>
	<script>
		$(document).ready(function(){
			function getAllComments(type,type_id,last_update,pageNum,total,object_type,admin){
				$('#userCommentsList').html("<div style='padding:5px 0px;'>"+loading+"</div>");
				$.ajax({
					type: 'POST',
					url: page,
					data:  {
						mode:'getComments',
						page:pageNum,type:type,
						type_id:type_id,
						object_type : object_type,
						last_update : last_update,
						total_comments : total,
						comments_voting : comments_voting,admin : admin
					},
					success: function(comments){
						$("#userCommentsList").html(comments);
					},
					dataType: 'text'
				});
			}
			comments_voting = 'no';
			getAllComments('cl','<?php echo $_smarty_tpl->tpl_vars['c']->value['collection_id'];?>
','<?php echo $_smarty_tpl->tpl_vars['c']->value['last_commented'];?>
',1,'<?php echo $_smarty_tpl->tpl_vars['c']->value['total_comments'];?>
','<?php echo $_smarty_tpl->tpl_vars['object_type']->value;?>
');
			//
			var adHtml = $('.ad-holder').html();
			if(adHtml<1){
				$('.ad-holder').parent().remove();
				$('#photos').parent().removeClass('col-lg-10 col-md-10 col-sm-10');
				$('#photos').parent().addClass('clearfix col-lg-12 col-md-12 col-sm-12');
			}

		});
	</script>
</div><?php }} ?>
