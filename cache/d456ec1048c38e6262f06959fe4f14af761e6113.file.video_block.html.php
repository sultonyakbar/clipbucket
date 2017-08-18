<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 10:34:51
         compiled from "C:\xampp\htdocs\clipbucket\styles\cb_28\layout\blocks\editor_pick\video_block.html" */ ?>
<?php /*%%SmartyHeaderCode:15433599403ab681673-14106388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd456ec1048c38e6262f06959fe4f14af761e6113' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\styles\\cb_28\\layout\\blocks\\editor_pick\\video_block.html',
      1 => 1502865951,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15433599403ab681673-14106388',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'video' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_599403ab84e492_08809525',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_599403ab84e492_08809525')) {function content_599403ab84e492_08809525($_smarty_tpl) {?><div class="player-holder clearfix">
    <?php echo flashPlayer(array('vdetails'=>$_smarty_tpl->tpl_vars['video']->value,'height'=>'400','width'=>'100%'),$_smarty_tpl);?>

</div><?php }} ?>
