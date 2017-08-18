<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 09:27:20
         compiled from "C:\xampp\htdocs\clipbucket\admin_area\styles\cb_2014\layout\online_users.html" */ ?>
<?php /*%%SmartyHeaderCode:176455993f3d89d2212-39834812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5703c89c748eb1645a0fb1cd88e2e4aa2dd77350' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\admin_area\\styles\\cb_2014\\layout\\online_users.html',
      1 => 1502865811,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176455993f3d89d2212-39834812',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total' => 0,
    'online_users' => 0,
    'user' => 0,
    'u' => 0,
    'userquery' => 0,
    'theBrowser' => 0,
    'imageurl' => 0,
    'queryString' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5993f3d8b3bbf9_25940946',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5993f3d8b3bbf9_25940946')) {function content_5993f3d8b3bbf9_25940946($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\clipbucket\\includes\\smartyv3\\plugins\\modifier.truncate.php';
?><div class="heading">
  <h2><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 users are online</h2>
</div>
<table class="table table-bordered table-striped">
  <tr>
    <td width="150">User</td>
    <td>Details</td>
    <td width="150">Access time</td>
    <td width="100">IP</td>
  </tr>
  <?php if ($_smarty_tpl->tpl_vars['online_users']->value) {?>
  <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['online_users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
  <?php echo get_browser_details($_smarty_tpl->tpl_vars['user']->value['agent'],'theBrowser');?>

    <tr>
      <td width="150">
        <?php if ($_smarty_tpl->tpl_vars['user']->value['username']) {?>
          <a href="view_user?uid=<?php echo $_smarty_tpl->tpl_vars['user']->value['userid'];?>
"><label class="label label-success"><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</label></a>
          <br>
          <a href="view_user.php?uid=<?php echo $_smarty_tpl->tpl_vars['u']->value['userid'];?>
">
             <img src="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->getUserThumb($_smarty_tpl->tpl_vars['user']->value,'small');?>
" class="img-thumbnail oneUserImage" />
          </a>

        <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['user']->value['session_string'];?>

        <?php }?>
        <img class="tipsy_tip browser <?php echo $_smarty_tpl->tpl_vars['theBrowser']->value['bname'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/dot.gif" title="<?php echo $_smarty_tpl->tpl_vars['theBrowser']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['theBrowser']->value['version'];?>
 on <?php echo $_smarty_tpl->tpl_vars['theBrowser']->value['platform'];?>
" />
      </td>
      <td>
          <div class="dropdown marginBottom">
            <button id="hideshow" class="btn btn-primary btn-xs drop" value="See Details">See Details..</button>
          </div>

          <span class="" title="<?php echo $_smarty_tpl->tpl_vars['user']->value['referer'];?>
">
              <b>Right Now</b>      <a href="<?php echo $_smarty_tpl->tpl_vars['user']->value['current_page'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['user']->value['current_page'],40,'..',false,true);?>
</a>
              <?php if ($_smarty_tpl->tpl_vars['user']->value['referer']) {?>
              <a href="<?php echo $_smarty_tpl->tpl_vars['user']->value['referer'];?>
" target="_blank" ><label class="label label-warning">View Referer</label></a>
              <?php }?>
              </span>
              <div id="content" style="display: none">
            <label class="label label-info"><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</label>
              <span class="label label-info">
                                       Viewed <b><?php echo niceTime($_smarty_tpl->tpl_vars['user']->value['last_active']);?>
</b></span>
                     <span class="label label-info">
                                       Session Started <b><?php echo niceTime($_smarty_tpl->tpl_vars['user']->value['session_date']);?>
</b></span>
                     <span class="label label-danger">
                                       <b><?php echo $_smarty_tpl->tpl_vars['user']->value['agent'];?>
</b></span>
                  </div>
      </td>
      <td width="150">
        <b><?php echo niceTime($_smarty_tpl->tpl_vars['user']->value['session_date']);?>
</b><br>
        <a href="<?php echo $_smarty_tpl->tpl_vars['queryString']->value;?>
kick=<?php echo $_smarty_tpl->tpl_vars['user']->value['session_id'];?>
" class="kick" title="This will make user force logout"><label class="label label-danger">KICK</label></a>
      </td>
      <td width="100"><b><?php echo $_smarty_tpl->tpl_vars['user']->value['ip'];?>
</b></td>
    </tr>
  <?php } ?>
  <?php }?>
</table>


<?php }} ?>
