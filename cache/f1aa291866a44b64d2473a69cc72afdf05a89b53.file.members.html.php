<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 09:58:41
         compiled from "C:\xampp\htdocs\clipbucket\admin_area\styles\cb_2014\layout\members.html" */ ?>
<?php /*%%SmartyHeaderCode:104895993fb3156fc51-02244434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1aa291866a44b64d2473a69cc72afdf05a89b53' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\admin_area\\styles\\cb_2014\\layout\\members.html',
      1 => 1502865811,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104895993fb3156fc51-02244434',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'users' => 0,
    'u' => 0,
    'userquery' => 0,
    'links' => 0,
    'bgcolor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5993fb3181c513_06350881',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5993fb3181c513_06350881')) {function content_5993fb3181c513_06350881($_smarty_tpl) {?><div class="heading clearfix">
    <h2 class="pull-left">
    <?php if ($_GET['private']=='private') {?>
        Private Channels
    <?php } else { ?>
        Member Manager
    <?php }?>
    </h2>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['layout_dir']->value)."/blocks/advanced_member_search.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>

<?php if ($_smarty_tpl->tpl_vars['users']->value) {?>
<!-- Displaying Members -->
<form name="user_manage" method="post">
  <div class="btn-group marginBottomSmall">
    <input class="btn btn-primary btn-xs" type="submit" name="activate_selected" value="Activate" />
    <input class="btn btn-primary btn-xs" type="submit" name="deactivate_selected" value="Deactivate" />
    <input class="btn btn-primary btn-xs" type="submit" name="make_featured_selected" value="Make Featured" />
    <input class="btn btn-primary btn-xs" type="submit" name="make_unfeatured_selected" value="Make Unfeatured" id="ban_selected2"/>
    <input class="btn btn-primary btn-xs" type="submit" name="ban_selected" value="Ban Selected" id="ban_selected"/>
    <input class="btn btn-primary btn-xs" type="submit" name="unban_selected" value="Unban Selected" id="unban_selected"/>
    <input class="btn btn-primary btn-xs" type="submit" name="delete_selected" value="Delete" onclick="return confirm_it('Are you sure you want to delete selected User(s)')"/>
  </div>
<table class="table table-bordered table-striped manageUsersTable">
<tr>
    <td width="40" align="center" valign="middle" class="left_head">
    <input type="checkbox" name="checkall" onclick="checkUncheckAll(this);"/></td>
    <td width="50" class="head">UID</td>
    <td class="head">User Details</td>
    <td>&nbsp;</td>
  </tr>
<?php  $_smarty_tpl->tpl_vars['u'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['u']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['u']->key => $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->_loop = true;
?>
<tr>
    <td>
      <input name="check_user[]" type="checkbox" id="check_user" value="<?php echo $_smarty_tpl->tpl_vars['u']->value['userid'];?>
" />
    </td>
    <td>
      <?php echo $_smarty_tpl->tpl_vars['u']->value['userid'];?>

    </td>
    <td>
        <div class="row">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-3">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->getUserThumb($_smarty_tpl->tpl_vars['u']->value);?>
" class="img-thumbnail oneUserImage"style="height: 80px; width: 80px;" />
                    </div>
                    <div class="col-md-9">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['u']->value);?>
" target="_blank" class="oneUserName"><?php echo $_smarty_tpl->tpl_vars['u']->value['username'];?>
 </a>
                        <span><?php echo $_smarty_tpl->tpl_vars['u']->value['email'];?>
</span>
                        <div class="labels">
                            <?php if ($_smarty_tpl->tpl_vars['u']->value['featured']=='Yes') {?><span class="label label-primary">Featured<?php } else { ?><?php }?></span>
                            <span class="label <?php if ($_smarty_tpl->tpl_vars['u']->value['usr_status']=='Ok') {?>label-success<?php } else { ?>label-warning<?php }?>"><span><?php if ($_smarty_tpl->tpl_vars['u']->value['usr_status']=='Ok') {?>Active
                                    <?php } else { ?>InActive<?php }?></span></span>
                            <span class="label label-info"><span>Userlevel: <?php echo $_smarty_tpl->tpl_vars['u']->value['level'];?>
</span></span>
                            <span class="label"><span>Active</span> : <span><?php echo nicetime($_smarty_tpl->tpl_vars['u']->value['last_active']);?>
</span></span>
                            

                            <?php if (function_exists('channels_control')) {?>
                                <?php if ($_smarty_tpl->tpl_vars['u']->value['private']=='private') {?>
                                <li><a role="menuitem" tabindex="-1" href="?public=<?php echo $_smarty_tpl->tpl_vars['u']->value['userid'];?>
">Make Public</a></li>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['u']->value['private']=='public'||$_smarty_tpl->tpl_vars['u']->value['private']=='') {?>
                                <li><a role="menuitem" tabindex="-1" href="?private=<?php echo $_smarty_tpl->tpl_vars['u']->value['userid'];?>
">Make Private</a></li>
                                <?php }?>
                            <?php }?>
            
                            <?php if ($_smarty_tpl->tpl_vars['u']->value['ban_status']=="yes") {?>
                                <span class="label label-danger"><span>Banned : <?php echo $_smarty_tpl->tpl_vars['u']->value['ban_status'];?>
</span></span>
                            <?php } else { ?>
                                <span class="label label-info"><span>Banned : <?php echo $_smarty_tpl->tpl_vars['u']->value['ban_status'];?>
</span></span>
                            <?php }?>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
    </td>

        <td>
      <div id="usr_opt-<?php echo $_smarty_tpl->tpl_vars['u']->value['userid'];?>
" class="dropdown pull-right">
      <button id="dropdownMenu1" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
        Actions<i class="icon-angle-down icon-on-right"></i>
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" role="menu">
         <li><a role="menuitem" tabindex="-1" href="view_user.php?uid=<?php echo $_smarty_tpl->tpl_vars['u']->value['userid'];?>
">Edit</a></li>
        <li><a role="menuitem" tabindex="-1" href="view_user.php?uid=<?php echo $_smarty_tpl->tpl_vars['u']->value['userid'];?>
">View</a></li>
        <li><a role="menuitem" tabindex="-1" href="manage_playlist.php?userid=<?php echo $_smarty_tpl->tpl_vars['u']->value['userid'];?>
&search=Search">View Playlists</a></li>

        <?php if ($_smarty_tpl->tpl_vars['u']->value['usr_status']=='Ok') {?>
        <li><a role="menuitem" tabindex="-1" href="?deactivate=<?php echo $_smarty_tpl->tpl_vars['u']->value['userid'];?>
">Deactivate</a></li>
        <?php } elseif ($_smarty_tpl->tpl_vars['u']->value['usr_status']=='ToActivate') {?>
        <li><a role="menuitem" tabindex="-1" href="?resend_verif=<?php echo $_smarty_tpl->tpl_vars['u']->value['userid'];?>
">Resend Verification</a></li>
        <li><a role="menuitem" tabindex="-1" href="?activate=<?php echo $_smarty_tpl->tpl_vars['u']->value['userid'];?>
">Activate</a></li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['u']->value['ban_status']=='yes') {?>
        <li><a role="menuitem" tabindex="-1" href="?unban=<?php echo $_smarty_tpl->tpl_vars['u']->value['userid'];?>
">Unban Member</a></li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['u']->value['ban_status']=='no') {?>
        <li><a role="menuitem" tabindex="-1" href="?ban=<?php echo $_smarty_tpl->tpl_vars['u']->value['userid'];?>
">Ban Member</a></li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['u']->value['featured']=='no') {?>
        <li><a role="menuitem" tabindex="-1" href="?featured=<?php echo $_smarty_tpl->tpl_vars['u']->value['userid'];?>
">Feature Member</a></li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['u']->value['featured']=='yes') {?>
        <li><a role="menuitem" tabindex="-1" href="?unfeatured=<?php echo $_smarty_tpl->tpl_vars['u']->value['userid'];?>
">Unfeature Member</a></li>
        <?php }?>
        <li><a role="menuitem" tabindex="-1" href="login_as_user.php?uid=<?php echo $_smarty_tpl->tpl_vars['u']->value['userid'];?>
">Login as user</a></li>
        <li class="divider"></li>
        <?php if (function_exists('channels_control')) {?>
        <?php if ($_smarty_tpl->tpl_vars['u']->value['private']=='private') {?>
        <li><a role="menuitem" tabindex="-1" href="?public=<?php echo $_smarty_tpl->tpl_vars['u']->value['userid'];?>
">Make Public</a></li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['u']->value['private']=='public'||$_smarty_tpl->tpl_vars['u']->value['private']=='') {?>
        <li><a role="menuitem" tabindex="-1" href="?private=<?php echo $_smarty_tpl->tpl_vars['u']->value['userid'];?>
">Make Private</a></li>
        <?php }?>
        <?php }?>
        <li><a role="menuitem" tabindex="-1" href="?deleteuser=<?php echo $_smarty_tpl->tpl_vars['u']->value['userid'];?>
">Delete</a></li>
        
        
       <?php  $_smarty_tpl->tpl_vars['links'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['links']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userquery']->value->user_manager_link; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['links']->key => $_smarty_tpl->tpl_vars['links']->value) {
$_smarty_tpl->tpl_vars['links']->_loop = true;
?>
       <?php echo $_smarty_tpl->tpl_vars['userquery']->value->user_manager_link($_smarty_tpl->tpl_vars['links']->value,$_smarty_tpl->tpl_vars['u']->value);?>

       <?php } ?> 

      </ul>

    </div>
    </td>
  </tr>
<?php if ($_smarty_tpl->tpl_vars['bgcolor']->value=='') {?>
<?php if (isset($_smarty_tpl->tpl_vars['bgcolor'])) {$_smarty_tpl->tpl_vars['bgcolor'] = clone $_smarty_tpl->tpl_vars['bgcolor'];
$_smarty_tpl->tpl_vars['bgcolor']->value = "#EEEEEE"; $_smarty_tpl->tpl_vars['bgcolor']->nocache = null; $_smarty_tpl->tpl_vars['bgcolor']->scope = 0;
} else $_smarty_tpl->tpl_vars['bgcolor'] = new Smarty_variable("#EEEEEE", null, 0);?>
<?php } else { ?>
<?php if (isset($_smarty_tpl->tpl_vars['bgcolor'])) {$_smarty_tpl->tpl_vars['bgcolor'] = clone $_smarty_tpl->tpl_vars['bgcolor'];
$_smarty_tpl->tpl_vars['bgcolor']->value = ''; $_smarty_tpl->tpl_vars['bgcolor']->nocache = null; $_smarty_tpl->tpl_vars['bgcolor']->scope = 0;
} else $_smarty_tpl->tpl_vars['bgcolor'] = new Smarty_variable('', null, 0);?>
<?php }?>  
<?php } ?>
</table>

<div class="btn-group">
    <input class="btn btn-primary btn-xs" type="submit" name="activate_selected" value="Activate" />
    <input class="btn btn-primary btn-xs" type="submit" name="deactivate_selected" value="Deactivate" />
    <input class="btn btn-primary btn-xs" type="submit" name="make_featured_selected" value="Make Featured" />
    <input class="btn btn-primary btn-xs" type="submit" name="ban_selected2" value="Make Unfeatured" id="ban_selected2"/>
    <input class="btn btn-primary btn-xs" type="submit" name="ban_selected" value="Ban Selected" id="ban_selected"/>
    <input class="btn btn-primary btn-xs" type="submit" name="unban_selected" value="Unban Selected" id="unban_selected"/>
    <input class="btn btn-primary btn-xs" type="submit" name="delete_selected" value="Delete" onclick="return confirm_it('Are you sure you want to delete selected video(s)')"/>
  </div>
</form>
<?php } else { ?>
	<div align="center"><strong><em>NO USER FOUND</em></strong></div>
<?php }?>



<!-- DIsplaying Videos Ends-->
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/pagination.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
