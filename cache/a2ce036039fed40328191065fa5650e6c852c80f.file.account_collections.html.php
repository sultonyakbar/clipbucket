<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 10:14:44
         compiled from "C:\xampp\htdocs\clipbucket\styles\cb_28\layout\blocks\manage\account_collections.html" */ ?>
<?php /*%%SmartyHeaderCode:64895993fef45290c9-11145013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2ce036039fed40328191065fa5650e6c852c80f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\styles\\cb_28\\layout\\blocks\\manage\\account_collections.html',
      1 => 1502865951,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64895993fef45290c9-11145013',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mode' => 0,
    'display_type' => 0,
    'collection' => 0,
    'cbcollection' => 0,
    'type' => 0,
    'bg' => 0,
    'c' => 0,
    'imageurl' => 0,
    'cbphoto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5993fef476f3d1_19019579',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5993fef476f3d1_19019579')) {function content_5993fef476f3d1_19019579($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\clipbucket\\includes\\smartyv3\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\clipbucket\\includes\\smartyv3\\plugins\\modifier.truncate.php';
?><?php if ($_smarty_tpl->tpl_vars['mode']->value=='') {?><?php if (isset($_smarty_tpl->tpl_vars['mode'])) {$_smarty_tpl->tpl_vars['mode'] = clone $_smarty_tpl->tpl_vars['mode'];
$_smarty_tpl->tpl_vars['mode']->value = 'manage'; $_smarty_tpl->tpl_vars['mode']->nocache = null; $_smarty_tpl->tpl_vars['mode']->scope = 0;
} else $_smarty_tpl->tpl_vars['mode'] = new Smarty_variable('manage', null, 0);?><?php }?>
<?php if ($_smarty_tpl->tpl_vars['display_type']->value==''||$_smarty_tpl->tpl_vars['display_type']->value=="collections") {?>

 	<tr style="font-size: 0.9em">
 	    <td width="25">
            <input type="checkbox" name="check_col[]" id="check_col-<?php echo $_smarty_tpl->tpl_vars['collection']->value['collection_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['collection']->value['collection_id'];?>
" />
 	          <label for="checkbox"></label>
        </td>
 	    <td>
        	<p><?php echo $_smarty_tpl->tpl_vars['collection']->value['collection_name'];?>
</p>
            <div class="btn-group show">
                <a class="btn btn-primary btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['cbcollection']->value->collection_links($_smarty_tpl->tpl_vars['collection']->value,'view');?>
">
                    <?php echo smarty_lang(array('code'=>"view"),$_smarty_tpl);?>

                </a>
                <a class="btn btn-primary btn-sm" href="?mode=edit_collection&amp;cid=<?php echo $_smarty_tpl->tpl_vars['collection']->value['collection_id'];?>
">
                    <?php echo lang("edit");?>

                </a>
                <a class="btn btn-primary btn-sm" href="?mode=manage_items&amp;cid=<?php echo $_smarty_tpl->tpl_vars['collection']->value['collection_id'];?>
&amp;type=<?php echo $_smarty_tpl->tpl_vars['collection']->value['type'];?>
">
                    <?php echo lang("manage_items");?>

                </a>
                <a class="btn btn-primary btn-sm" href="javascript:void(0)" onmousedown="delete_item('delete_coll','<?php echo $_smarty_tpl->tpl_vars['collection']->value['collection_id'];?>
','<?php echo smarty_lang(array('code'=>"confirm_collection_delete"),$_smarty_tpl);?>
','?mode=<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
&amp;delete_collection=<?php echo $_smarty_tpl->tpl_vars['collection']->value['collection_id'];?>
');" id="delete_coll-<?php echo $_smarty_tpl->tpl_vars['collection']->value['collection_id'];?>
">
                    <?php echo lang("delete");?>

                </a>
            </div>
        </td>
 	    <td width="100"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['collection']->value['date_added']);?>
</td>
 	    <td width="100"><?php echo number_format($_smarty_tpl->tpl_vars['collection']->value['views']);?>
</td>
        <td width="100"><?php echo number_format($_smarty_tpl->tpl_vars['collection']->value['total_objects']);?>
</td>
        <td width="100"><?php echo $_smarty_tpl->tpl_vars['collection']->value['type'];?>
</td>
 	    <td width="100" class="last_td"><?php echo $_smarty_tpl->tpl_vars['collection']->value['active'];?>
</td>
 	</tr>
 	  
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['display_type']->value=="items") {?>
	<?php if ($_smarty_tpl->tpl_vars['type']->value=="videos") {?>
   <div id="collectionItem_<?php echo $_smarty_tpl->tpl_vars['collection']->value['videoid'];?>
" class="account_vid_list" style="background-color:#<?php echo $_smarty_tpl->tpl_vars['bg']->value;?>
">
   	<table class="table table-bordered table-striped">
 	  <tr>
 	    <td width="25"><input type="checkbox" name="check_item[]" id="check_item-<?php echo $_smarty_tpl->tpl_vars['collection']->value['videoid'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['collection']->value['videoid'];?>
" />
 	      <label for="checkbox"></label></td>
 	    <td valign="middle">
        <div style="padding-left:10px; float:left;width:300px">
       <label for="check_item-<?php echo $_smarty_tpl->tpl_vars['collection']->value['videoid'];?>
"> <img src="<?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['collection']->value),$_smarty_tpl);?>
" width="40" height="30" border="0" class="acc_usr_video_thumb  img-responsive"></label><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['collection']->value['title'],100);?>
<br>
<span class="video_control"><a href="<?php echo $_smarty_tpl->tpl_vars['cbcollection']->value->collection_links($_smarty_tpl->tpl_vars['collection']->value,'view_item');?>
"><?php echo smarty_lang(array('code'=>"view"),$_smarty_tpl);?>
</a></span>
        </div>
        </td>
 	    <td width="100"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['collection']->value['date_added']);?>
</td>
 	    <td width="100"><?php echo number_format($_smarty_tpl->tpl_vars['collection']->value['views']);?>
</td>
 	    <td width="100">
        <a onclick="collection_actions('collectionItem','remove_collection_item','<?php echo $_smarty_tpl->tpl_vars['collection']->value['videoid'];?>
','#removeItemContainer','<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['c']->value['collection_id'];?>
')" id="collectionItem<?php echo $_smarty_tpl->tpl_vars['collection']->value['videoid'];?>
" href="javascript:void(0);"><img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/cancel.png" width="16" height="16"></a>
        <div id="removeItemContainer_<?php echo $_smarty_tpl->tpl_vars['collection']->value['videoid'];?>
" style="display:none"></div>
        </td>
 	    </tr>
 	  </table>
   </div>
    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['type']->value=="photos") {?>
   <div id="collectionItem_<?php echo $_smarty_tpl->tpl_vars['collection']->value['photo_id'];?>
" class="account_vid_list" style="background-color:#<?php echo $_smarty_tpl->tpl_vars['bg']->value;?>
">
   	<table class="table table-bordered table-striped">
 	  <tr>
 	    <td width="25"><input type="checkbox" name="check_item[]" id="check_item-<?php echo $_smarty_tpl->tpl_vars['collection']->value['photo_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['collection']->value['photo_id'];?>
" />
 	      <label for="checkbox"></label></td>
 	    <td valign="middle">
        <div style="padding-left:10px; float:left;">
        <label for="check_item-<?php echo $_smarty_tpl->tpl_vars['collection']->value['photo_id'];?>
"><?php echo get_image_file(array('style'=>'padding:1px; border:1px solid #999; float:left;','details'=>$_smarty_tpl->tpl_vars['collection']->value,'output'=>"html"),$_smarty_tpl);?>
</label>
        <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['collection']->value['photo_title'],100);?>
<br>
<span class="video_control"><a href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['collection']->value,'view_item');?>
"><?php echo smarty_lang(array('code'=>"view"),$_smarty_tpl);?>
</a></span>
        </div>
        </td>
 	    <td width="100"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['collection']->value['date_added']);?>
</td>
 	    <td width="100"><?php echo number_format($_smarty_tpl->tpl_vars['collection']->value['views']);?>
</td>
 	    <td width="100">
        <a onclick="collection_actions('collectionItem','remove_collection_item','<?php echo $_smarty_tpl->tpl_vars['collection']->value['photo_id'];?>
','#removeItemContainer','<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['c']->value['collection_id'];?>
')" id="collectionItem<?php echo $_smarty_tpl->tpl_vars['collection']->value['photo_id'];?>
" href="javascript:void(0);"><img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/cancel.png" width="16" height="16"></a>
        <div id="removeItemContainer_<?php echo $_smarty_tpl->tpl_vars['collection']->value['photo_id'];?>
" style="display:none"></div>
        </td>
 	    </tr>
 	  </table>
   </div>
    <?php }?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['display_type']->value=="favorite") {?>

    
 	  <tr>
 	    <td width="25"><input type="checkbox" name="check_col[]" id="check_col-<?php echo $_smarty_tpl->tpl_vars['collection']->value['collection_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['collection']->value['collection_id'];?>
" />
 	      </td>
 	    <td valign="middle">
        	<label for="check_col-<?php echo $_smarty_tpl->tpl_vars['collection']->value['collection_id'];?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['cbcollection']->value->get_thumb($_smarty_tpl->tpl_vars['collection']->value,'small',true);?>
" border="0" class="acc_usr_video_thumb img-responsive">
            </label>
            <?php echo $_smarty_tpl->tpl_vars['collection']->value['collection_name'];?>
 			
            <div class="btn-group show">
                <a class="btn btn-primary btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['cbcollection']->value->collection_links($_smarty_tpl->tpl_vars['collection']->value,'view');?>
"><?php echo smarty_lang(array('code'=>"view"),$_smarty_tpl);?>
</a>
                 <a class="btn btn-primary btn-sm" href="javascript:void(0)" onmousedown="delete_item('delete_coll','<?php echo $_smarty_tpl->tpl_vars['collection']->value['collection_id'];?>
','<?php echo smarty_lang(array('code'=>"Are you sure you want to remove this collection from favorites?"),$_smarty_tpl);?>
','?mode=<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
&amp;remove_fav_collection=<?php echo $_smarty_tpl->tpl_vars['collection']->value['collection_id'];?>
');" id="delete_coll-<?php echo $_smarty_tpl->tpl_vars['collection']->value['collection_id'];?>
">
                    <?php echo smarty_lang(array('code'=>"remove"),$_smarty_tpl);?>

                 </a>
             </div>
        </td>
 	    <td width="100"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['collection']->value['date_added']);?>
</td>
        <td width="100"><?php echo $_smarty_tpl->tpl_vars['collection']->value['type'];?>
</td>
 	    <td width="100" class="last_td"><?php echo number_format($_smarty_tpl->tpl_vars['collection']->value['views']);?>
</td>
 	    </tr>
 	  
<?php }?><?php }} ?>
