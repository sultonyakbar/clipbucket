<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 10:29:06
         compiled from "C:\xampp\htdocs\clipbucket\admin_area\styles\cb_2014\layout\category.html" */ ?>
<?php /*%%SmartyHeaderCode:1554459940252009110-64802641%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db661834e15dadd253b2c9c853fe9e3ba021cc1b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\admin_area\\styles\\cb_2014\\layout\\category.html',
      1 => 1502865808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1554459940252009110-64802641',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'edit_category' => 0,
    'useSubs' => 0,
    'cat_details' => 0,
    'total' => 0,
    'category' => 0,
    'u' => 0,
    'cbvid' => 0,
    'p_name' => 0,
    'links' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_59940252246610_41865474',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59940252246610_41865474')) {function content_59940252246610_41865474($_smarty_tpl) {?><div class="heading paddingBottomSmall">
    <div class="form-group">
        <h2>Video Categories
            <div class="dropdown pull-right">
                <button id="hideshow" class="btn btn-default pull-right dropdown-toggle" data-toggle="dropdown">
                    Add new Category <i class="caret"></i></button>
                </div>
        </h2>
    </div>
</div>


<?php if ($_smarty_tpl->tpl_vars['edit_category']->value!="show") {?>
<div id="content" style="display: none">
<form action="category.php" method="post" enctype="multipart/form-data" name="add_category" id="Add Category">
    <div class="row">
        <div class="col-md-4">
                <label>Category Name*</label>
                <input type="text" id="name" name="name" class="form-control" >
             </div>
        <?php if (isset($_smarty_tpl->tpl_vars['useSubs'])) {$_smarty_tpl->tpl_vars['useSubs'] = clone $_smarty_tpl->tpl_vars['useSubs'];
$_smarty_tpl->tpl_vars['useSubs']->value = config('use_subs'); $_smarty_tpl->tpl_vars['useSubs']->nocache = null; $_smarty_tpl->tpl_vars['useSubs']->scope = 0;
} else $_smarty_tpl->tpl_vars['useSubs'] = new Smarty_variable(config('use_subs'), null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['useSubs']->value==1) {?>
    <div class="col-md-4">
            <label>Parent Category</label>
            <?php echo getSmartyCategoryList(array('output'=>"dropdown",'class'=>"form-control",'name'=>"parent_cat",'id'=>"parent_cat",'blank_option'=>true,'echo'=>true,'type'=>"video"),$_smarty_tpl);?>


        </div>
    <?php }?>   
    <tr>
        <div class="col-md-4">
            <label>Make Default Category</label>
            <select class="form-control" name="default">
            <option class="form-control" id="default_0" value="yes">Yes</option>
            <option class="form-control" id="default_1" value="no" selected="selected">No</option>
                </select>
        </div>
        </div>
<div class="row marginTopLarge">
    
    <div class="col-md-12">
        <label>Description</label>
        <textarea class="form-control" name="desc" id="description" cols="33" rows="5" ><?php echo post_form_val('desc');?>
</textarea>
    </div>
    
</div>


<br>
        <div class="row">
            <div class="col-md-6">
            <label>Category Thumb</label>
            <input type="file"  name="cat_thumb" id="cat_thumb" class="" />
        </div>
        <div class="col-md-6">
            <input type="submit"  class="btn btn-primary pull-right" name="add_cateogry" id="button" value="Add Category" onclick="return _cb.validate_category_form(add_category)" class="button"/>
        </div>
            </div>
    <?php }?>
    </form>
</div>




<div id="content">
<?php if ($_smarty_tpl->tpl_vars['edit_category']->value=="show") {?>
<form action="" method="post" enctype="multipart/form-data" name="edit_category" id="Edit Category">
    <input name="cid" value="<?php echo $_smarty_tpl->tpl_vars['cat_details']->value['category_id'];?>
" type="hidden" />
    <input name="cur_name" value="<?php echo $_smarty_tpl->tpl_vars['cat_details']->value['category_name'];?>
" type="hidden" />
        <div class="row">
            <div class="col-md-4">
            <label>Category Name*</label>
                <input name="name" class="form-control" type="text" id="name" value="<?php echo $_smarty_tpl->tpl_vars['cat_details']->value['category_name'];?>
" size="45" />
            </div>
           <div class="col-md-4">
                <label>Parent Category</label>
                <?php echo getSmartyCategoryList(array('output'=>"dropdown",'class'=>'form-control','selected'=>$_smarty_tpl->tpl_vars['cat_details']->value['parent_id'],'name'=>"parent_cat",'id'=>"parent_cat",'blank_option'=>true,'type'=>"video",'echo'=>true),$_smarty_tpl);?>

            </div>
            <div class="col-md-4">
                <label>Make Default Category</label>
                <select class="form-control" name="default_categ">
                    <option class="form-control" id="default_0" value="yes" <?php if ($_smarty_tpl->tpl_vars['cat_details']->value['isdefault']=='yes') {?> checked="checked"<?php }?> >Yes</option>
                    <option class="form-control" id="default_1" value="no" <?php if ($_smarty_tpl->tpl_vars['cat_details']->value['isdefault']=='no') {?> checked="checked"<?php }?>>No</option>
                </select>
            </div>
            </div>
    <div class="row marginTopLarge">
        <div class="col-md-12">
            <label>Description</label>
            <textarea class="form-control" name="desc" id="description" cols="33" rows="5"><?php echo $_smarty_tpl->tpl_vars['cat_details']->value['category_desc'];?>
</textarea>
            </div>
        </div>
    <br>
    <div class="row">
        <div class="col-md-6">
            <label>Category Thumb</label>
            <input type="file"  name="cat_thumb" id="cat_thumb" class="" />
        </div>
        <div class="col-md-6">
            <input type="submit"  class="btn btn-primary pull-right" name="update_category" id="button" value="Update Category" onclick="return _cb.validate_category_form(edit_category)"  class="button"/>
        </div>
    </div>
    <?php }?>
</form>
    </div>


<h4>Category List</h4>

<?php if ($_smarty_tpl->tpl_vars['total']->value!=0) {?>
<form name="category" action="?update_order" method="post">
    <table class="table table-bordered" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
        <tr>
            <td width="20"><input type="checkbox" name="checkall" onclick="checkUncheckAll(this);"/></td>
            <td width="225" class="left_head" style="text-indent:10px">Category Name</td>
            <td width="75" align="left" class="head">Order</td>
            <td width="225" align="left" class="head">Parent Category</td>
            <td width="250" class="head">Description</td>
            <td width="100" class="head">Default</td>
            <td width="150" class="head">Action</td>
        </tr>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['list'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['list']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['name'] = 'list';
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['category']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
        <tr>
             <td><input name="check_user[]" type="checkbox" id="check_user" value="<?php echo $_smarty_tpl->tpl_vars['u']->value['userid'];?>
" /></td>
            <td><?php echo $_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['category_name'];?>

                <a id="thumbs_<?php echo $_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['category_id'];?>
" class="label label-danger arrowed popoverButton" data-html="true"
             data-placement="top" data-toggle="popover" data-content="<img src='<?php echo $_smarty_tpl->tpl_vars['cbvid']->value->get_category_thumb($_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']],'video');?>
' height='90' width='90'/>"  href="javascript:void(0)">View Thumb</a></td>


            <td> <input name="category_order_<?php echo $_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['category_id'];?>
" type="text" id="order" style="border:1px solid #999; padding:2px; width:30px" value="<?php echo $_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['category_order'];?>
" size="5" maxlength="5" /></td>
            <?php if ($_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['parent_id']=="0") {?>
            <?php if (isset($_smarty_tpl->tpl_vars['p_name'])) {$_smarty_tpl->tpl_vars['p_name'] = clone $_smarty_tpl->tpl_vars['p_name'];
$_smarty_tpl->tpl_vars['p_name']->value = "None"; $_smarty_tpl->tpl_vars['p_name']->nocache = null; $_smarty_tpl->tpl_vars['p_name']->scope = 0;
} else $_smarty_tpl->tpl_vars['p_name'] = new Smarty_variable("None", null, 0);?>
            <?php } else { ?>
            <?php if (isset($_smarty_tpl->tpl_vars['p_name'])) {$_smarty_tpl->tpl_vars['p_name'] = clone $_smarty_tpl->tpl_vars['p_name'];
$_smarty_tpl->tpl_vars['p_name']->value = $_smarty_tpl->tpl_vars['cbvid']->value->get_category_field($_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['parent_id'],'category_name'); $_smarty_tpl->tpl_vars['p_name']->nocache = null; $_smarty_tpl->tpl_vars['p_name']->scope = 0;
} else $_smarty_tpl->tpl_vars['p_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['cbvid']->value->get_category_field($_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['parent_id'],'category_name'), null, 0);?>
            <?php }?>
            <td><?php echo $_smarty_tpl->tpl_vars['p_name']->value;?>
</td>
            <td><?php if ($_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['category_desc']) {?><?php echo $_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['category_desc'];?>
<?php } else { ?><em>N/A</em><?php }?></td>
            <td><?php echo $_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['isdefault'];?>
</td>
            <td>
                <div class="lead dropdown">
                <button id="dropdownMenu1" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">Options <i class="caret"></i></button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" role="menu">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="?category=<?php echo $_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['category_id'];?>
">Edit</a></li>
                <?php if ($_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['isdefault']!="yes") {?>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="?delete_category=<?php echo $_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['category_id'];?>
">Delete</a></li>
                    <li><a href="?make_default=<?php echo $_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['category_id'];?>
"></a></li>
                <?php }?>

                <?php  $_smarty_tpl->tpl_vars['links'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['links']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cbvid']->value->video_categories_manager_link; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['links']->key => $_smarty_tpl->tpl_vars['links']->value) {
$_smarty_tpl->tpl_vars['links']->_loop = true;
?>
                    <?php echo $_smarty_tpl->tpl_vars['cbvid']->value->video_categories_manager_link($_smarty_tpl->tpl_vars['links']->value,$_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]);?>

                <?php } ?>


                </ul>
                </div>
            </td>
        </tr>
        <?php endfor; endif; ?>
    </table>
    <div><input type="submit" value="Update Category" name="update_order" class="btn btn-primary btn-sm"  style="margin-top:10px"/></div>
</form>
<?php } else { ?>
No Category Has Been Created Yet
<?php }?>






<script>
    var button = document.getElementById('hideshow'); // Assumes element with id='button'

    button.onclick = function() {
        var div = document.getElementById('content');
        if (div.style.display !== 'none') {
            div.style.display = 'none';
        }
        else {
            div.style.display = 'block';
        }
    };
</script>

<?php }} ?>
