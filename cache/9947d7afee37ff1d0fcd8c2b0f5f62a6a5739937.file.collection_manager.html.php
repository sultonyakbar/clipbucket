<?php /* Smarty version Smarty-3.1.15, created on 2017-08-18 00:04:06
         compiled from "C:\xampp\htdocs\clipbucket\admin_area\styles\cb_2014\layout\collection_manager.html" */ ?>
<?php /*%%SmartyHeaderCode:12157599612d6c3d514-03343822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9947d7afee37ff1d0fcd8c2b0f5f62a6a5739937' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\admin_area\\styles\\cb_2014\\layout\\collection_manager.html',
      1 => 1502865808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12157599612d6c3d514-03343822',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'c' => 0,
    'cbcollection' => 0,
    'baseurl' => 0,
    'cbvid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_599612d6dd52e2_71908583',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_599612d6dd52e2_71908583')) {function content_599612d6dd52e2_71908583($_smarty_tpl) {?><div class="heading clearfix">
    <h2 class="pull-left">Collection Manager</h2>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['layout_dir']->value)."/blocks/advanced_collection_search.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>

<form name="video_manage" method="post">
        <div class="btn-group marginBottomLarge">
     		<input class="btn btn-primary btn-xs" type="submit" name="activate_selected" value="Activate"  class="button"/>
            <input class="btn btn-primary btn-xs" type="submit" name="deactivate_selected" value="Deactivate" class="button" />
           <!--  <input class="btn btn-primary btn-xs" type="submit" name="make_featured_selected" value="Make Featured"  class="button"/>
            <input class="btn btn-primary btn-xs" type="submit" name="make_unfeatured_selected" value="Make Unfeatured"  class="button"/> -->
            <input class="btn btn-primary btn-xs" type="submit" name="delete_selected" value="Delete"  class="button" onclick="return confirm_it('Are you sure you want to delete selected collection(s)')"/>
    </div>
    <table class="table table-bordered table-striped manageUsersTable">
    <tr>
        <td>
            <input type="checkbox" name="checkall" onclick="checkUncheckAll(this);"/></td>
            <td>C-ID</td>
            <td>Details</td>
            <td>Options</td>
  </tr>
        <?php if ($_smarty_tpl->tpl_vars['c']->value) {?>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['list'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['list']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['name'] = 'list';
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['c']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
        <td>
            <input name="check_collection[]" type="checkbox" id="check_collection" value="<?php echo $_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['collection_id'];?>
" /></td>
        <td><?php echo $_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['collection_id'];?>
</td>

        <td>
        <div class="row">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-3">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['cbcollection']->value->coll_first_thumb($_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']],'l');?>
" width="100" height="80" />
                        </div>
                <div class="col-md-9">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/admin_area/edit_collection.php?collection=<?php echo $_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['collection_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['collection_name'];?>
</a> (<?php echo $_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['total_objects'];?>
 <?php echo $_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['type'];?>
)
                    </a>

                    <div class="labels">
                        <?php if ($_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['featured']=='yes') {?><span class="label label-primary">Featured<?php } else { ?><?php }?></span>
                        <span class="label <?php if ($_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['active']=='yes') {?>label-success<?php } else { ?>label-warning<?php }?>"><?php if ($_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['active']=='yes') {?>Active<?php } else { ?>NotActive<?php }?> </span>
                        <span class="label label-info"><strong><?php echo $_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['type'];?>
</strong>Type </span>
                        <span class="label label-info"><strong><?php echo niceTime($_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['date_added']);?>
</strong> </span>
                    </div>
                    </div>
                    </div>
                </div>
                    <div class="col-md-2">
                        <a href="view_user.php?uid=<?php echo $_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['userid'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['username'];?>
</a>
                    </div>
                </div>
        <td>
            <div class="dropdown">
                <button id="dropdownMenu1" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">Actions <i class="caret"></i></button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" role="menu">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="edit_collection.php?collection=<?php echo $_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['collection_id'];?>
" class="">Edit</a> </li>

                    <li role="presentation"><a target="_blank" role="menuitem" tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/view_collection.php?cid=<?php echo $_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['collection_id'];?>
&type=<?php echo $_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['type'];?>
">View</a> </li>
                    <!-- <?php if ($_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['featured']=='yes') {?>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="?make_unfeature=<?php echo $_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['collection_id'];?>
">Make Unfeatured</a></li> <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['featured']=='no') {?>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="?make_feature=<?php echo $_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['collection_id'];?>
">Make Featured</a></li> <?php }?> -->
                    <?php if ($_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['active']=='yes') {?>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="?deactivate=<?php echo $_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['collection_id'];?>
">Deactivate</a>
                    </li>
                    <?php } else { ?>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="?activate=<?php echo $_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['collection_id'];?>
">Activate</a>
                    </li>
                    <?php }?>
                    <li class="divider"></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="?delete_collection=<?php echo $_smarty_tpl->tpl_vars['c']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['collection_id'];?>
">Delete</a></li>
                    <?php  $_smarty_tpl->tpl_vars['links'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['links']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cbvid']->value->video_manager_links; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['links']->key => $_smarty_tpl->tpl_vars['links']->value) {
$_smarty_tpl->tpl_vars['links']->_loop = true;
?>
                </ul>
            </div>
    </td>
    </tr>
        <?php } ?>
        <?php endfor; endif; ?>
        <?php } else { ?>
        <div align="center"><strong><em>No Photo Found</em></strong></div>
        <?php }?>
    </table>



        <div class="btn-group">
     		<input class="btn btn-primary btn-xs" type="submit" name="activate_selected" value="Activate"  class="button"/>
            <input class="btn btn-primary btn-xs" type="submit" name="deactivate_selected" value="Deactivate" class="button" />
           <!--  <input class="btn btn-primary btn-xs" type="submit" name="make_featured_selected" value="Make Featured"  class="button"/>
            <input class="btn btn-primary btn-xs" type="submit" name="make_unfeatured_selected" value="Make Unfeatured"  class="button"/> -->
            <input class="btn btn-primary btn-xs" type="submit" name="delete_selected" value="Delete"  class="button" onclick="return confirm_it('Are you sure you want to delete selected collection(s)')"/>
	    </div>
</form>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/pagination.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
