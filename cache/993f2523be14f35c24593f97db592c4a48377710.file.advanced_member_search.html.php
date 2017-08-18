<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 09:58:41
         compiled from "C:\xampp\htdocs\clipbucket\admin_area\styles\cb_2014\layout\blocks\advanced_member_search.html" */ ?>
<?php /*%%SmartyHeaderCode:625993fb31d6be19-04108360%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '993f2523be14f35c24593f97db592c4a48377710' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\admin_area\\styles\\cb_2014\\layout\\blocks\\advanced_member_search.html',
      1 => 1502865813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '625993fb31d6be19-04108360',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'userquery' => 0,
    'levels' => 0,
    'level' => 0,
    'cat_array' => 0,
    'formObj' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5993fb31e4c299_44306694',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5993fb31e4c299_44306694')) {function content_5993fb31e4c299_44306694($_smarty_tpl) {?><div class="advanceSearchButton clearfix">
    <a href="#" class="btn btn-primary btn-sm pull-right current after" onclick="$('#membersearchdiv').toggle();return false;" style="margin-bottom: 0px;position: relative; top: 15px;">
        Advanced Search
         <i class="glyphicon glyphicon-chevron-down down"></i>
         <i class="glyphicon glyphicon-chevron-up up" style="display:none"></i>
    </a>
</div>
<div class="search_box well" id="membersearchdiv" <?php if ($_COOKIE['show_memsearchdiv_search']!='show') {?> style="display:none"<?php }?>>
<br>
<form id="user_search" name="user_search" method="get" action="members.php" class="member_search">
    <div class="row">
        <div class="col-md-2">
            <div class="form-group">
                <label for="userid">Userid</label>
                <input name="userid" type="text" class="form-control" id="userid" value="<?php echo get_form_val('userid',true);?>
" />
            </div>  
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="username">Username</label>
                <input name="username" type="text" class="form-control" id="username" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
" />
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" type="text" class="form-control" id="email" value="<?php echo get_form_val('email',true);?>
" />
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                    <option value="" >----</option>
                    <option value="Ok" <?php if ($_GET['status']=='Ok') {?> selected="selected"<?php }?>>Active</option>
                    <option value="ToActivate" <?php if ($_GET['status']=='ToActivate') {?> selected="selected"<?php }?>>Inactive</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
            <label for="banned">Banned</label>
                <select name="ban" id="ban" class="form-control">
                   <option value="" >----</option>
                    <option value="no" <?php if ($_GET['ban']=='no') {?> selected="selected"<?php }?>>No</option>
                     <option value="yes" <?php if ($_GET['ban']=='yes') {?> selected="selected"<?php }?>>Yes</option>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="featured">Featured</label>
                <select name="featured" id="featured" class="form-control">
                   <option value="" >----</option>
                    <option value="No" <?php if ($_GET['featured']=='No') {?> selected="selected"<?php }?>>No</option>
                     <option value="Yes" <?php if ($_GET['featured']=='Yes') {?> selected="selected"<?php }?>>Yes</option>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
            <label for="level">Level</label>
                <select name="level" id="level" class="form-control">
                    <option value="">------</option>
                    <?php if (isset($_smarty_tpl->tpl_vars['levels'])) {$_smarty_tpl->tpl_vars['levels'] = clone $_smarty_tpl->tpl_vars['levels'];
$_smarty_tpl->tpl_vars['levels']->value = $_smarty_tpl->tpl_vars['userquery']->value->get_levels(); $_smarty_tpl->tpl_vars['levels']->nocache = null; $_smarty_tpl->tpl_vars['levels']->scope = 0;
} else $_smarty_tpl->tpl_vars['levels'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->get_levels(), null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['level'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['level']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['levels']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['level']->key => $_smarty_tpl->tpl_vars['level']->value) {
$_smarty_tpl->tpl_vars['level']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['level']->value['user_level_id'];?>
" <?php if ($_GET['level']==$_smarty_tpl->tpl_vars['level']->value['user_level_id']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['level']->value['user_level_name'];?>
</option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="">Category</label>
                <?php $_smarty_tpl->createLocalArrayVariable('cat_array', null, 0);
$_smarty_tpl->tpl_vars['cat_array']->value['type'] = 'dropdown';?>
                <?php $_smarty_tpl->createLocalArrayVariable('cat_array', null, 0);
$_smarty_tpl->tpl_vars['cat_array']->value['category_type'] = 'user';?>
                <?php $_smarty_tpl->createLocalArrayVariable('cat_array', null, 0);
$_smarty_tpl->tpl_vars['cat_array']->value['class'] = "form-control";?>
                <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['cat_array']->value);?>

            </div>
        </div>
    </div>
            
        
            
            
            
            
            
    <div class="button">
    <input type="submit" name="search" id="search" value="Search" class="btn btn-success btn-sm"/>
        </div>
</form>
</div>



<script type="text/javascript">
       

        $(document).ready(function neww () {
        $(".current").click(function() {
        $(this).toggleClass('after');
        if(!$(this).hasClass('after')) 
           {
      
          $('.down').hide();
          $('.up').show();
           }
    
        else
       {
 
        $('.down').show();
         $('.up').hide();
       }
 
});

       })
       
</script ><?php }} ?>
