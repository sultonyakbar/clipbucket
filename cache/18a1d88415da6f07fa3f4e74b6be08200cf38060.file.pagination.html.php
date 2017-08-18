<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 09:31:02
         compiled from "C:\xampp\htdocs\clipbucket\styles\cb_28\layout\blocks\pagination.html" */ ?>
<?php /*%%SmartyHeaderCode:263545993f4b63c0e80-88234159%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18a1d88415da6f07fa3f4e74b6be08200cf38060' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\styles\\cb_28\\layout\\blocks\\pagination.html',
      1 => 1502865950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '263545993f4b63c0e80-88234159',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pagination' => 0,
    'commentPagination' => 0,
    'first_link' => 0,
    'pre_link' => 0,
    'next_link' => 0,
    'last_link' => 0,
    'type' => 0,
    'type_id' => 0,
    'last_update' => 0,
    'total' => 0,
    'object_type' => 0,
    'pre_page' => 0,
    'next_page' => 0,
    'total_pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5993f4b6482080_72222346',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5993f4b6482080_72222346')) {function content_5993f4b6482080_72222346($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['pagination']->value&&!$_smarty_tpl->tpl_vars['commentPagination']->value) {?>
<div class="clearfix pagination-holder text-center">
  <ul align="center" class="pagination pagination-center clearfix">

      <?php if ($_smarty_tpl->tpl_vars['first_link']->value!='') {?><li>  <a <?php echo $_smarty_tpl->tpl_vars['first_link']->value;?>
 ><i class="fa fa-angle-double-left "></i></a></li><?php }?>
      
      <?php if ($_smarty_tpl->tpl_vars['pre_link']->value!='') {?><li><a <?php echo $_smarty_tpl->tpl_vars['pre_link']->value;?>
 ><i class="icon-left-arrow"></i></a></li><?php }?> 

             <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>
  


       <?php if ($_smarty_tpl->tpl_vars['next_link']->value!='') {?><li><a <?php echo $_smarty_tpl->tpl_vars['next_link']->value;?>
 ><i class="icon-right-arrow"></i></a></li><?php }?>
       
        <?php if ($_smarty_tpl->tpl_vars['last_link']->value!='') {?><li>  <a <?php echo $_smarty_tpl->tpl_vars['last_link']->value;?>
 ><i class="fa fa-angle-double-right"></i></a></li><?php }?>
     </ul>  
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['commentPagination']->value) {?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtl">
  <ul align="center" class="pagination pagination-center">
         
        
        <?php if ($_smarty_tpl->tpl_vars['first_link']->value!='') {?>
        <li>  <a href="javascript:void(0)"
          onclick="_cb.getAllComments('<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['type_id']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['last_update']->value;?>
','1','<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['object_type']->value;?>
')" >
          <i class="fa fa-angle-double-left"></i></a></li>
         <?php }?>


      
       <?php if ($_smarty_tpl->tpl_vars['pre_link']->value!='') {?><li><a href="javascript:void(0)" 
       onclick="_cb.getAllComments('<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['type_id']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['last_update']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['pre_page']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['object_type']->value;?>
')" >
       <i class="fa fa-angle-left"></i></a>
       </li><?php }?> 

             <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>
  


       <?php if ($_smarty_tpl->tpl_vars['next_link']->value!='') {?><li><a href="javascript:void(0)" 
       onclick="_cb.getAllComments('<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['type_id']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['last_update']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['next_page']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['object_type']->value;?>
')" >
       <i class="fa fa-angle-right"></i></a>
       </li><?php }?>
       
        <?php if ($_smarty_tpl->tpl_vars['last_link']->value!='') {?>
        <li>  <a href="javascript:void(0)"
          onclick="_cb.getAllComments('<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['type_id']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['last_update']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['total_pages']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['object_type']->value;?>
')" >
          <i class="fa fa-angle-double-right"></i></a></li>
         <?php }?>
     </ul>  
</div>
<?php }?> 
<?php }} ?>
