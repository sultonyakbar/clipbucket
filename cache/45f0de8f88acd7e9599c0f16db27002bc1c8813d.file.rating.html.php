<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 10:43:18
         compiled from "C:\xampp\htdocs\clipbucket\styles\cb_28\layout\blocks\common\rating.html" */ ?>
<?php /*%%SmartyHeaderCode:24344599405a65dc722-31038830%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45f0de8f88acd7e9599c0f16db27002bc1c8813d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\styles\\cb_28\\layout\\blocks\\common\\rating.html',
      1 => 1502865951,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24344599405a65dc722-31038830',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'type' => 0,
    'ratedBy' => 0,
    'disable' => 0,
    'likes' => 0,
    'dislikes' => 0,
    'rating_msg' => 0,
    'perc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_599405a666d881_26219886',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_599405a666d881_26219886')) {function content_599405a666d881_26219886($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['ratedBy'])) {$_smarty_tpl->tpl_vars['ratedBy'] = clone $_smarty_tpl->tpl_vars['ratedBy'];
$_smarty_tpl->tpl_vars['ratedBy']->value = has_rated(userid(),$_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl->tpl_vars['type']->value); $_smarty_tpl->tpl_vars['ratedBy']->nocache = null; $_smarty_tpl->tpl_vars['ratedBy']->scope = 0;
} else $_smarty_tpl->tpl_vars['ratedBy'] = new Smarty_variable(has_rated(userid(),$_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl->tpl_vars['type']->value), null, 0);?>
<!--CB like and dislike section-->
<div id="" class="clearfix rating">
	<div class="clearfix rating-holder">
		<div class="likes like-dislike <?php if ($_smarty_tpl->tpl_vars['ratedBy']->value=='liked') {?>rated<?php }?>">
			<a <?php if (!$_smarty_tpl->tpl_vars['disable']->value) {?> onclick="_cb.rateNew('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
','5','<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
')"<?php }?> href="javascript:void(0)"><span class="icon-thumbup"></span></a>
			<span><?php echo prettyNum($_smarty_tpl->tpl_vars['likes']->value);?>
</span>
		</div>
		<div class="dislikes like-dislike <?php if ($_smarty_tpl->tpl_vars['ratedBy']->value=='disliked') {?>rated<?php }?>">
			<a <?php if (!$_smarty_tpl->tpl_vars['disable']->value) {?> onclick="_cb.rateNew('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
','1','<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
')"<?php }?> href="javascript:void(0)"><span class="icon-thumbdown"></span></a>
			<span><?php echo prettyNum($_smarty_tpl->tpl_vars['dislikes']->value);?>
</span>
		</div>
	</div>
	<div id="rating_result_container" class="clearfix rating-alert">
	 <?php if ($_smarty_tpl->tpl_vars['rating_msg']->value) {?><?php echo $_smarty_tpl->tpl_vars['rating_msg']->value;?>
<?php }?>   
	</div>
</div>

<script type="text/javascript">
var _percent = '<?php echo $_smarty_tpl->tpl_vars['perc']->value;?>
';
var _numb = parseInt(_percent);
if ( _numb > 49 )
$('._percentage').addClass('likes_perc_more');
else
$('._percentage').addClass('likes_perc_less');
</script><?php }} ?>
