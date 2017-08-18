<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 09:58:42
         compiled from "C:\xampp\htdocs\clipbucket\admin_area\styles\cb_2014\layout\blocks\pagination.html" */ ?>
<?php /*%%SmartyHeaderCode:119355993fb321c0a51-44254950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7785c59fe8945ed6c94a2a544264f16b8b1eab76' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\admin_area\\styles\\cb_2014\\layout\\blocks\\pagination.html',
      1 => 1502865813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119355993fb321c0a51-44254950',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pagination' => 0,
    'first_link' => 0,
    'pre_link' => 0,
    'next_link' => 0,
    'last_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5993fb3222efa7_63759094',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5993fb3222efa7_63759094')) {function content_5993fb3222efa7_63759094($_smarty_tpl) {?>
<div class="dataTables_paginate paging_bootstrap">
    <ul class="pagination">
        <li class="prev disabled">
            <a href="#">
            <i class="icon-double-angle-left"></i></a></li>
        <li class="active"><?php if ($_smarty_tpl->tpl_vars['pagination']->value) {?>
          <?php if ($_smarty_tpl->tpl_vars['first_link']->value!='') {?><a class="active" <?php echo $_smarty_tpl->tpl_vars['first_link']->value;?>
>&laquo;</a><?php }?>  <?php if ($_smarty_tpl->tpl_vars['pre_link']->value!='') {?><a <?php echo $_smarty_tpl->tpl_vars['pre_link']->value;?>
 >&#8249;</a><?php }?> <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>
  <?php if ($_smarty_tpl->tpl_vars['next_link']->value!='') {?><a <?php echo $_smarty_tpl->tpl_vars['next_link']->value;?>
>&#8250;</a><?php }?>
            <?php }?></li>
        <li class="next"> <?php if ($_smarty_tpl->tpl_vars['last_link']->value!='') {?><a <?php echo $_smarty_tpl->tpl_vars['last_link']->value;?>
>&raquo;</a><?php }?></li>
    </ul>

</div>


<?php }} ?>
