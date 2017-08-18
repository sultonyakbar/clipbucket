<?php /* Smarty version Smarty-3.1.15, created on 2017-08-17 23:20:58
         compiled from "C:\xampp\htdocs\clipbucket\styles\cb_28\layout\blocks\comments\comment.html" */ ?>
<?php /*%%SmartyHeaderCode:154599608badb6910-68727372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd16fea9d3bf0b70b824542a51ac844ec1fe30f73' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\styles\\cb_28\\layout\\blocks\\comments\\comment.html',
      1 => 1502865951,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154599608badb6910-68727372',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comment' => 0,
    'rep_mode' => 0,
    'user_id' => 0,
    'userquery' => 0,
    'user' => 0,
    'type' => 0,
    'type_id' => 0,
    'comment_attr' => 0,
    'child_comment' => 0,
    'replies' => 0,
    'reply' => 0,
    'flag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_599608bb1d7428_91321140',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_599608bb1d7428_91321140')) {function content_599608bb1d7428_91321140($_smarty_tpl) {?><?php if (marked_spammed($_smarty_tpl->tpl_vars['comment']->value)) {?>
<?php if (isset($_smarty_tpl->tpl_vars['comment_attr'])) {$_smarty_tpl->tpl_vars['comment_attr'] = clone $_smarty_tpl->tpl_vars['comment_attr'];
$_smarty_tpl->tpl_vars['comment_attr']->value = 'style="display:none"'; $_smarty_tpl->tpl_vars['comment_attr']->nocache = null; $_smarty_tpl->tpl_vars['comment_attr']->scope = 0;
} else $_smarty_tpl->tpl_vars['comment_attr'] = new Smarty_variable('style="display:none"', null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['spam_attr'])) {$_smarty_tpl->tpl_vars['spam_attr'] = clone $_smarty_tpl->tpl_vars['spam_attr'];
$_smarty_tpl->tpl_vars['spam_attr']->value = 'style="display:block"'; $_smarty_tpl->tpl_vars['spam_attr']->nocache = null; $_smarty_tpl->tpl_vars['spam_attr']->scope = 0;
} else $_smarty_tpl->tpl_vars['spam_attr'] = new Smarty_variable('style="display:block"', null, 0);?>
<?php } else { ?>
<?php if (isset($_smarty_tpl->tpl_vars['comment_attr'])) {$_smarty_tpl->tpl_vars['comment_attr'] = clone $_smarty_tpl->tpl_vars['comment_attr'];
$_smarty_tpl->tpl_vars['comment_attr']->value = ''; $_smarty_tpl->tpl_vars['comment_attr']->nocache = null; $_smarty_tpl->tpl_vars['comment_attr']->scope = 0;
} else $_smarty_tpl->tpl_vars['comment_attr'] = new Smarty_variable('', null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['spam_attr'])) {$_smarty_tpl->tpl_vars['spam_attr'] = clone $_smarty_tpl->tpl_vars['spam_attr'];
$_smarty_tpl->tpl_vars['spam_attr']->value = 'style="display:none"'; $_smarty_tpl->tpl_vars['spam_attr']->nocache = null; $_smarty_tpl->tpl_vars['spam_attr']->scope = 0;
} else $_smarty_tpl->tpl_vars['spam_attr'] = new Smarty_variable('style="display:none"', null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['rep_mode']->value) {?>

<li id="reply-<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
" class="commentBox clearfix reply-<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
">
	<div class="reply-holder">
		<div class="comments-box clearfix">
			<?php if (isset($_smarty_tpl->tpl_vars['user_id'])) {$_smarty_tpl->tpl_vars['user_id'] = clone $_smarty_tpl->tpl_vars['user_id'];
$_smarty_tpl->tpl_vars['user_id']->value = $_smarty_tpl->tpl_vars['comment']->value['userid']; $_smarty_tpl->tpl_vars['user_id']->nocache = null; $_smarty_tpl->tpl_vars['user_id']->scope = 0;
} else $_smarty_tpl->tpl_vars['user_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['comment']->value['userid'], null, 0);?>
			<?php if (isset($_smarty_tpl->tpl_vars['user'])) {$_smarty_tpl->tpl_vars['user'] = clone $_smarty_tpl->tpl_vars['user'];
$_smarty_tpl->tpl_vars['user']->value = $_smarty_tpl->tpl_vars['userquery']->value->get_user_details($_smarty_tpl->tpl_vars['user_id']->value); $_smarty_tpl->tpl_vars['user']->nocache = null; $_smarty_tpl->tpl_vars['user']->scope = 0;
} else $_smarty_tpl->tpl_vars['user'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->get_user_details($_smarty_tpl->tpl_vars['user_id']->value), null, 0);?>
			<div class="comment-avatar">
				<img src="<?php echo avatar(array('details'=>$_smarty_tpl->tpl_vars['user']->value),$_smarty_tpl);?>
" alt="" class="reply_pic">
			</div>
			<div class="comment-info">
				<a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['user']->value);?>
">
					<span>
						<?php if ($_smarty_tpl->tpl_vars['comment']->value['anonym_name']!='') {?>
						<?php echo $_smarty_tpl->tpl_vars['comment']->value['anonym_name'];?>
 (Guest)
						<?php } else { ?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['user']->value);?>
" >
							<?php echo name($_smarty_tpl->tpl_vars['user']->value);?>

							<?php }?>
						</span>
					</a>
					<p><?php echo comment($_smarty_tpl->tpl_vars['comment']->value['comment']);?>
</p>
					<?php if (userid()) {?>
					<div class="com-info-actions clearfix">
						<span><?php echo niceTime($_smarty_tpl->tpl_vars['comment']->value['date_added']);?>
</span>
						<div class="reply">
							<?php if (!$_smarty_tpl->tpl_vars['comment']->value['userid']==userid()||has_access('admin_access',true)) {?>
							<a href="javascript:void(0)" onclick="spam_comment('<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
','<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['type_id']->value;?>
')"><?php echo smarty_lang(array('code'=>'spam'),$_smarty_tpl);?>
</a>
							<?php }?>
							<?php if (has_access('admin_del_access')||$_smarty_tpl->tpl_vars['comment']->value['userid']==userid()||$_smarty_tpl->tpl_vars['comment']->value['type_owner_id']==userid()) {?> &middot; <a href="javascript:void(0)" onclick="delete_comment('<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
','<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
')"><?php echo smarty_lang(array('code'=>'delete'),$_smarty_tpl);?>
</a><?php }?>
						</div>
					</div>
					<?php }?>
				</div>
			</div>
		</div>
	</li>


	<?php } else { ?>
	<!-- changes made -->
	<script>
	var assigningClassToId = document.getElementById("comment_<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
");
	assigningClassToId.className += " heighlightacomment";
	</script>
	<!-- changes made -->

	<li id="comment_<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
" class="clearfix"  <?php echo $_smarty_tpl->tpl_vars['comment_attr']->value;?>
 style="padding:10px;">
		<hr>
		<div class="comments-box clearfix">
			<?php if (isset($_smarty_tpl->tpl_vars['user_id'])) {$_smarty_tpl->tpl_vars['user_id'] = clone $_smarty_tpl->tpl_vars['user_id'];
$_smarty_tpl->tpl_vars['user_id']->value = $_smarty_tpl->tpl_vars['comment']->value['userid']; $_smarty_tpl->tpl_vars['user_id']->nocache = null; $_smarty_tpl->tpl_vars['user_id']->scope = 0;
} else $_smarty_tpl->tpl_vars['user_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['comment']->value['userid'], null, 0);?>
			<?php if (isset($_smarty_tpl->tpl_vars['user'])) {$_smarty_tpl->tpl_vars['user'] = clone $_smarty_tpl->tpl_vars['user'];
$_smarty_tpl->tpl_vars['user']->value = $_smarty_tpl->tpl_vars['userquery']->value->get_user_details($_smarty_tpl->tpl_vars['user_id']->value); $_smarty_tpl->tpl_vars['user']->nocache = null; $_smarty_tpl->tpl_vars['user']->scope = 0;
} else $_smarty_tpl->tpl_vars['user'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->get_user_details($_smarty_tpl->tpl_vars['user_id']->value), null, 0);?>
			<div class="comment-avatar">
				<img src="<?php echo avatar(array('details'=>$_smarty_tpl->tpl_vars['user']->value),$_smarty_tpl);?>
" alt="" class="comnt_pic">
			</div>
			<div class="comment-info">
				<strong  class="commenter">
					<?php if ($_smarty_tpl->tpl_vars['comment']->value['anonym_name']!='') {?>
					<?php echo $_smarty_tpl->tpl_vars['comment']->value['anonym_name'];?>
 (Guest)
					<div id="says_<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
" speaker="<?php echo $_smarty_tpl->tpl_vars['comment']->value['anonym_name'];?>
"></div>
					<?php } else { ?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['user']->value);?>
" >
						<?php echo name($_smarty_tpl->tpl_vars['user']->value);?>

					</a>
					<div id="says_<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
" speaker="<?php echo name($_smarty_tpl->tpl_vars['user']->value);?>
"></div>
					<?php }?>
					<span><?php echo niceTime($_smarty_tpl->tpl_vars['comment']->value['date_added']);?>
</span>
				</strong>
				<div class="clearfix commented-txt">
					<p><?php echo comment($_smarty_tpl->tpl_vars['comment']->value['comment']);?>
</p>
				</div>
				<?php if (userid()) {?>
				<div class="com-info-actions clearfix">
					<div class="reply">
						<?php if ($_smarty_tpl->tpl_vars['userquery']->value->login_check('',true)) {?>

						<a href="javascript:void(0)" onclick="reply_box('<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
','<?php echo $_smarty_tpl->tpl_vars['comment']->value['type'];?>
','<?php echo $_smarty_tpl->tpl_vars['comment']->value['type_id'];?>
')"><?php echo smarty_lang(array('code'=>'reply'),$_smarty_tpl);?>
</a>
						<?php }?>
						<?php if (!$_smarty_tpl->tpl_vars['comment']->value['userid']==userid()||has_access('admin_access',true)) {?>
						&nbsp; <a href="javascript:void(0)" onclick="spam_comment('<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
','<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['type_id']->value;?>
')"><?php echo smarty_lang(array('code'=>'spam'),$_smarty_tpl);?>
</a>
						<?php }?>
						<?php if (has_access('admin_del_access')||$_smarty_tpl->tpl_vars['comment']->value['userid']==userid()||$_smarty_tpl->tpl_vars['comment']->value['type_owner_id']==userid()) {?> &nbsp; <a href="javascript:void(0)" onclick="delete_comment('<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
','<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
')"><?php echo smarty_lang(array('code'=>'delete'),$_smarty_tpl);?>
</a><?php }?>
					</div>
				</div>
				<?php }?>
			</div>
	   <!--  <div class="clearfix text-right">
			<i class="text-muted"><?php echo niceTime($_smarty_tpl->tpl_vars['comment']->value['date_added']);?>
</i>
		</div> -->
		
	</div>
	<div class="reply-box-<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
 clearfix" style="display:none;">
	</div>
	<ul class="comments-reply-<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
">

		<?php if ($_smarty_tpl->tpl_vars['comment']->value['children']) {?>
		<?php if (isset($_smarty_tpl->tpl_vars['child_comment'])) {$_smarty_tpl->tpl_vars['child_comment'] = clone $_smarty_tpl->tpl_vars['child_comment'];
$_smarty_tpl->tpl_vars['child_comment']->value = $_smarty_tpl->tpl_vars['comment']->value['children']; $_smarty_tpl->tpl_vars['child_comment']->nocache = null; $_smarty_tpl->tpl_vars['child_comment']->scope = 0;
} else $_smarty_tpl->tpl_vars['child_comment'] = new Smarty_variable($_smarty_tpl->tpl_vars['comment']->value['children'], null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['replies'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['replies']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['child_comment']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['replies']->key => $_smarty_tpl->tpl_vars['replies']->value) {
$_smarty_tpl->tpl_vars['replies']->_loop = true;
?>
		<?php  $_smarty_tpl->tpl_vars['reply'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['reply']->_loop = false;
 $_from = array_reverse($_smarty_tpl->tpl_vars['replies']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['reply']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['reply']->key => $_smarty_tpl->tpl_vars['reply']->value) {
$_smarty_tpl->tpl_vars['reply']->_loop = true;
 $_smarty_tpl->tpl_vars['reply']->iteration++;
?>
		<?php if ($_smarty_tpl->tpl_vars['reply']->iteration<4) {?>

		<li id="reply-<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
" class="commentBox clearfix reply-<?php echo $_smarty_tpl->tpl_vars['reply']->value['comment_id'];?>
">
			<div class="reply-holder">
				<div class="comments-box clearfix">
					<?php if (isset($_smarty_tpl->tpl_vars['user_id'])) {$_smarty_tpl->tpl_vars['user_id'] = clone $_smarty_tpl->tpl_vars['user_id'];
$_smarty_tpl->tpl_vars['user_id']->value = $_smarty_tpl->tpl_vars['reply']->value['userid']; $_smarty_tpl->tpl_vars['user_id']->nocache = null; $_smarty_tpl->tpl_vars['user_id']->scope = 0;
} else $_smarty_tpl->tpl_vars['user_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['reply']->value['userid'], null, 0);?>
					<?php if (isset($_smarty_tpl->tpl_vars['user'])) {$_smarty_tpl->tpl_vars['user'] = clone $_smarty_tpl->tpl_vars['user'];
$_smarty_tpl->tpl_vars['user']->value = $_smarty_tpl->tpl_vars['userquery']->value->get_user_details($_smarty_tpl->tpl_vars['user_id']->value); $_smarty_tpl->tpl_vars['user']->nocache = null; $_smarty_tpl->tpl_vars['user']->scope = 0;
} else $_smarty_tpl->tpl_vars['user'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->get_user_details($_smarty_tpl->tpl_vars['user_id']->value), null, 0);?>
					<div class="comment-avatar">
						<img src="<?php echo avatar(array('details'=>$_smarty_tpl->tpl_vars['user']->value),$_smarty_tpl);?>
" alt="" class="reply_pic">
					</div>
					<div class="comment-info">
						<strong  class="commenter">
							<?php if ($_smarty_tpl->tpl_vars['comment']->value['anonym_name']!=''&&$_smarty_tpl->tpl_vars['user']->value['username']=='') {?>
							<?php echo $_smarty_tpl->tpl_vars['comment']->value['anonym_name'];?>
 (Guest)
							<?php } else { ?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['user']->value);?>
" >
								<?php echo name($_smarty_tpl->tpl_vars['user']->value);?>

							</a>
							<?php }?>

							<span><?php echo niceTime($_smarty_tpl->tpl_vars['reply']->value['date_added']);?>
</span>
						</strong>
						<div class="clearfix commented-txt">
							<p><?php echo comment($_smarty_tpl->tpl_vars['reply']->value['comment']);?>
</p>
						</div>
						<?php if (userid()) {?>
						<div class="com-info-actions clearfix">
							<div class="reply">
								<?php if (!$_smarty_tpl->tpl_vars['comment']->value['userid']==userid()||has_access('admin_access',true)) {?>
								<a href="javascript:void(0)" onclick="spam_comment('<?php echo $_smarty_tpl->tpl_vars['reply']->value['comment_id'];?>
','<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['type_id']->value;?>
')"><?php echo smarty_lang(array('code'=>'spam'),$_smarty_tpl);?>
</a>
								<?php }?>
								<?php if (has_access('admin_del_access')||$_smarty_tpl->tpl_vars['comment']->value['userid']==userid()||$_smarty_tpl->tpl_vars['comment']->value['type_owner_id']==userid()) {?> &middot; <a href="javascript:void(0)" onclick="delete_comment('<?php echo $_smarty_tpl->tpl_vars['reply']->value['comment_id'];?>
','<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
')"><?php echo smarty_lang(array('code'=>'delete'),$_smarty_tpl);?>
</a><?php }?>
							</div>
						</div>
						<?php }?>
					</div>
				</div>
			</div>
		</li>
		<?php } else { ?>
		<?php if (isset($_smarty_tpl->tpl_vars['flag'])) {$_smarty_tpl->tpl_vars['flag'] = clone $_smarty_tpl->tpl_vars['flag'];
$_smarty_tpl->tpl_vars['flag']->value = $_smarty_tpl->tpl_vars['comment']->value['comment_id']; $_smarty_tpl->tpl_vars['flag']->nocache = null; $_smarty_tpl->tpl_vars['flag']->scope = 0;
} else $_smarty_tpl->tpl_vars['flag'] = new Smarty_variable($_smarty_tpl->tpl_vars['comment']->value['comment_id'], null, 0);?>
		<div class="more-comments-<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
" style="display:none;">
			<li id="reply-<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
" class="commentBox clearfix reply-<?php echo $_smarty_tpl->tpl_vars['reply']->value['comment_id'];?>
">
				<div class="reply-holder">
					<div class="comments-box clearfix">
						<?php if (isset($_smarty_tpl->tpl_vars['user_id'])) {$_smarty_tpl->tpl_vars['user_id'] = clone $_smarty_tpl->tpl_vars['user_id'];
$_smarty_tpl->tpl_vars['user_id']->value = $_smarty_tpl->tpl_vars['reply']->value['userid']; $_smarty_tpl->tpl_vars['user_id']->nocache = null; $_smarty_tpl->tpl_vars['user_id']->scope = 0;
} else $_smarty_tpl->tpl_vars['user_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['reply']->value['userid'], null, 0);?>
						<?php if (isset($_smarty_tpl->tpl_vars['user'])) {$_smarty_tpl->tpl_vars['user'] = clone $_smarty_tpl->tpl_vars['user'];
$_smarty_tpl->tpl_vars['user']->value = $_smarty_tpl->tpl_vars['userquery']->value->get_user_details($_smarty_tpl->tpl_vars['user_id']->value); $_smarty_tpl->tpl_vars['user']->nocache = null; $_smarty_tpl->tpl_vars['user']->scope = 0;
} else $_smarty_tpl->tpl_vars['user'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->get_user_details($_smarty_tpl->tpl_vars['user_id']->value), null, 0);?>
						<div class="comment-avatar">
							<img src="<?php echo avatar(array('details'=>$_smarty_tpl->tpl_vars['user']->value),$_smarty_tpl);?>
" alt="" class="reply_pic">
						</div>
						<div class="comment-info">
							<strong  class="commenter">
								<?php if ($_smarty_tpl->tpl_vars['comment']->value['anonym_name']!='') {?>
								<?php echo $_smarty_tpl->tpl_vars['comment']->value['anonym_name'];?>
 (Annonymous)
								<?php } else { ?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['user']->value);?>
" >
									<?php echo name($_smarty_tpl->tpl_vars['user']->value);?>

								</a>
								<?php }?>

								<span><?php echo niceTime($_smarty_tpl->tpl_vars['reply']->value['date_added']);?>
</span>
							</strong>
							<div class="clearfix commented-txt">
								<p><?php echo comment($_smarty_tpl->tpl_vars['reply']->value['comment']);?>
</p>
							</div>
							<?php if (userid()) {?>
							<div class="com-info-actions clearfix">
								<div class="reply">
									<a href="javascript:void(0)" onclick="spam_comment('<?php echo $_smarty_tpl->tpl_vars['reply']->value['comment_id'];?>
','<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['type_id']->value;?>
')"><?php echo smarty_lang(array('code'=>'spam'),$_smarty_tpl);?>
</a>
									<?php if (has_access('admin_del_access')||$_smarty_tpl->tpl_vars['comment']->value['userid']==userid()||$_smarty_tpl->tpl_vars['comment']->value['type_owner_id']==userid()) {?> &middot; <a href="javascript:void(0)" onclick="delete_comment('<?php echo $_smarty_tpl->tpl_vars['reply']->value['comment_id'];?>
','<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
')"><?php echo smarty_lang(array('code'=>'delete'),$_smarty_tpl);?>
</a><?php }?>
								</div>
							</div>
							<?php }?>
						</div>
					</div>

				</div>
			</li>

		</div>

		<?php }?> 

		<?php } ?>
		<?php } ?>




		<?php }?>
	</ul>
	<?php if ($_smarty_tpl->tpl_vars['flag']->value) {?>
	<div class="comments-load-more moad-more-btn-<?php echo $_smarty_tpl->tpl_vars['flag']->value;?>
 clearfix" data-flag="<?php echo $_smarty_tpl->tpl_vars['flag']->value;?>
">
		<span class="btn btn-sm btn-danger"><?php echo smarty_lang(array('code'=>'more_replies'),$_smarty_tpl);?>
...</span>
	</div>
	<?php }?>

</li>
<?php }?>


<!-- <script>
$("html, body").delay(500).animate({ scrollTop: $('#comment_<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
').offset().top }, 500);
</script> -->





<?php }} ?>
