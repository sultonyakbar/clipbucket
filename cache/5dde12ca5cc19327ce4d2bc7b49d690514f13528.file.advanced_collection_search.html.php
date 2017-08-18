<?php /* Smarty version Smarty-3.1.15, created on 2017-08-18 00:04:07
         compiled from "C:\xampp\htdocs\clipbucket\admin_area\styles\cb_2014\layout\blocks\advanced_collection_search.html" */ ?>
<?php /*%%SmartyHeaderCode:32370599612d7109df7-37023286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5dde12ca5cc19327ce4d2bc7b49d690514f13528' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\admin_area\\styles\\cb_2014\\layout\\blocks\\advanced_collection_search.html',
      1 => 1502865813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32370599612d7109df7-37023286',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cbcollection' => 0,
    'type' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_599612d71e8b36_61736548',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_599612d71e8b36_61736548')) {function content_599612d71e8b36_61736548($_smarty_tpl) {?><div class="advanceSearchButton clearfix">
    <a href="#" class="btn btn-primary btn-sm pull-right current after" onclick="$('#collectionsearchdiv').toggle();return false;" style="margin-bottom: 0px;position: relative; top: 15px;">
        Advanced Search
       <i class="glyphicon glyphicon-chevron-down down"></i>
         <i class="glyphicon glyphicon-chevron-up up" style="display:none"></i>
    </a>
</div>
<div class="search_box well" id="collectionsearchdiv" <?php if ($_COOKIE['show_searchdiv_search']!='show') {?> style="display:none"<?php }?>>
<br>
<form action="collection_manager.php" method="get" name="search_collections">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="title">Collection name</label>
                <input name="title" type="text" class="form-control" id="title" value="<?php echo get_form_val('title',true);?>
" />
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label for="collectionid">Collection id</label>
                <input name="collectionid" type="text" class="form-control" id="collectionid" value="<?php echo get_form_val('collectionid',true);?>
" />
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="tags">Collection tags</label>
                <input name="tags" type="text" class="form-control" id="tags" value="<?php echo get_form_val('tags',true);?>
" />
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label for="userid">Userid</label>
                <input name="userid" type="text" class="form-control" id="userid" value="<?php echo get_form_val('userid',true);?>
" />
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="active">Active</label>
                    <select name="active" id="active" class="form-control">
                        <option value="" ></option>
                        <option value="yes" <?php if ($_GET['active']=='yes') {?> selected="selected"<?php }?>>Yes</option>
                        <option value="no" <?php if ($_GET['active']=='no') {?> selected="selected"<?php }?>>No</option>
                    </select>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label for="broadcast">Broadcast</label>
                    <select name="broadcast" id="broadcast" class="form-control">
                        <option value="" ></option>
                        <option value="public" <?php if ($_GET['broadcast']=='public') {?> selected="selected"<?php }?>>Public</option>
                        <option value="private" <?php if ($_GET['broadcast']=='private') {?> selected="selected"<?php }?>>Private</option>
                    </select>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label for="featured">Featured</label>
                    <select name="featured" id="featured" class="form-control">
                        <option value="yes" <?php if ($_GET['featured']=='yes') {?> selected="selected"<?php }?>>Yes</option>
                        <option value="no" <?php if ($_GET['featured']=='no') {?> selected="selected"<?php }?>>No</option>
                    </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="type">Type</label>
                    <select name="collection_type" id="collection_type" class="form-control">
                        <option value="" ></option>
                        <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cbcollection']->value->types; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" <?php if ($_GET['collection_type']==$_smarty_tpl->tpl_vars['type']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</option>
                        <?php } ?>
                    </select>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label for="order">Order</label>
                    <select name="order" id="order" class="form-control">
                        <option value="collection_id" <?php if ($_GET['order']=='collection_id') {?>selected="selected"<?php }?>>ID</option>
                        <option value="total_objects" <?php if ($_GET['order']=='total_objects') {?>selected="selected"<?php }?>>Total Items</option>
                        <option value="collection_name" <?php if ($_GET['order']=='collection_name') {?>selected="selected"<?php }?>>Name</option>
                        <option value="views" <?php if ($_GET['order']=='views') {?>selected="selected"<?php }?>>Views</option>
                    </select>
            </div>
        </div>
    </div>
            
    <br />
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
