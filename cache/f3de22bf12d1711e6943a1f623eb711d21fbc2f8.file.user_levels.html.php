<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 09:35:01
         compiled from "C:\xampp\htdocs\clipbucket\admin_area\styles\cb_2014\layout\user_levels.html" */ ?>
<?php /*%%SmartyHeaderCode:255365993f5a503d347-41426454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3de22bf12d1711e6943a1f623eb711d21fbc2f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\admin_area\\styles\\cb_2014\\layout\\user_levels.html',
      1 => 1502865812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '255365993f5a503d347-41426454',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view' => 0,
    'userquery' => 0,
    'levels' => 0,
    'level_details' => 0,
    'types' => 0,
    'perms' => 0,
    'perm' => 0,
    'perm_code' => 0,
    'level_perms' => 0,
    'perm_plugin_code' => 0,
    'plugin_perms' => 0,
    'Cbucket' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5993f5a5482d69_86527844',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5993f5a5482d69_86527844')) {function content_5993f5a5482d69_86527844($_smarty_tpl) {?><link href="../theme/stylesheet.css" rel="stylesheet" type="text/css">
<div class="heading">
    <h2>User Levels</h2>
</div>
<?php if ($_smarty_tpl->tpl_vars['view']->value=='view') {?>

<a class="btn btn-primary btn-sm pull-right" href="?mode=add">Add New Level <b>+</b></a>
<br><br>
<table class="table table-bordered table-striped">
  <tr>
    <td>ID</td>
    <td>Name</td>
    <td>Active</td>
    <td>Users</td>
    <td>Actions</td>
  </tr>
  <?php if (isset($_smarty_tpl->tpl_vars['levels'])) {$_smarty_tpl->tpl_vars['levels'] = clone $_smarty_tpl->tpl_vars['levels'];
$_smarty_tpl->tpl_vars['levels']->value = $_smarty_tpl->tpl_vars['userquery']->value->get_levels(); $_smarty_tpl->tpl_vars['levels']->nocache = null; $_smarty_tpl->tpl_vars['levels']->scope = 0;
} else $_smarty_tpl->tpl_vars['levels'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->get_levels(), null, 0);?>
  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['l'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['l']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['name'] = 'l';
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['levels']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total']);
?>
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['levels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['user_level_id'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['levels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['user_level_name'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['levels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['user_level_active'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['userquery']->value->get_level_users($_smarty_tpl->tpl_vars['levels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['user_level_id'],true);?>
</td>
    <td><a href="?mode=edit&lid=<?php echo $_smarty_tpl->tpl_vars['levels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['user_level_id'];?>
">Edit</a><?php if ($_smarty_tpl->tpl_vars['levels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['user_level_is_default']!='yes') {?> | <a href="?action=delete&lid=<?php echo $_smarty_tpl->tpl_vars['levels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['user_level_id'];?>
">Remove</a><?php }?></td>
  </tr>
  <?php endfor; else: ?>
  <tr>
    <td>No Levels Were Found</td>
  </tr>
  <?php endif; ?>
</table>

<?php } elseif ($_smarty_tpl->tpl_vars['view']->value=='edit') {?>

<form action="" method="post">
<h3>Edit <?php echo form_val($_smarty_tpl->tpl_vars['level_details']->value['user_level_name']);?>
 Level Permissions</h3>

<div class="form-group">
  <label for="level_name2">Level Name</label>
  <input class="form-control" name="level_name" type="text" id="level_name2" value="<?php echo form_val($_smarty_tpl->tpl_vars['level_details']->value['user_level_name']);?>
" />
</div>
<div class="tabbable">
<ul class="nav nav-tabs" id="myTab">
    <li class="active">
        <a data-toggle="tab" href="#vpermission">
            Viewing Permission

        </a>
    </li>
    <li class="">
        <a data-toggle="tab" href="#upermission">
            Uploading Permission
        </a>
    </li>
    <li class="">
        <a data-toggle="tab" href="#apermission">
            Administrator Permission
        </a>
    </li>
    <li class="">
        <a data-toggle="tab" href="#gpermission">
            General Permission
        </a>
    </li>
</ul>
<div class="tab-content">
<div id="vpermission" class="tab-pane active">
<?php if (isset($_smarty_tpl->tpl_vars['types'])) {$_smarty_tpl->tpl_vars['types'] = clone $_smarty_tpl->tpl_vars['types'];
$_smarty_tpl->tpl_vars['types']->value = $_smarty_tpl->tpl_vars['userquery']->value->get_level_types(); $_smarty_tpl->tpl_vars['types']->nocache = null; $_smarty_tpl->tpl_vars['types']->scope = 0;
} else $_smarty_tpl->tpl_vars['types'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->get_level_types(), null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['t'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['t']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['name'] = 't';
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['types']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total']);
?>
<?php if (isset($_smarty_tpl->tpl_vars['perms'])) {$_smarty_tpl->tpl_vars['perms'] = clone $_smarty_tpl->tpl_vars['perms'];
$_smarty_tpl->tpl_vars['perms']->value = $_smarty_tpl->tpl_vars['userquery']->value->get_permissions($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['user_permission_type_id']); $_smarty_tpl->tpl_vars['perms']->nocache = null; $_smarty_tpl->tpl_vars['perms']->scope = 0;
} else $_smarty_tpl->tpl_vars['perms'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->get_permissions($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['user_permission_type_id']), null, 0);?>
<?php echo pr($_smarty_tpl->tpl_vars['perms']->value,true);?>

    <?php if ($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['user_permission_type_name']=='Viewing Permission') {?>
    <h2>Viewing Permission</h2>
    <div class="row">
    <div class="well">
        <?php  $_smarty_tpl->tpl_vars['perm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['perm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['perms']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['perm']->key => $_smarty_tpl->tpl_vars['perm']->value) {
$_smarty_tpl->tpl_vars['perm']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['perm']->value['permission_id']!='') {?>
                <strong><?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_name'];?>
</strong><br />
                <em><?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_desc'];?>
</em>

                <?php if (isset($_smarty_tpl->tpl_vars["perm_code"])) {$_smarty_tpl->tpl_vars["perm_code"] = clone $_smarty_tpl->tpl_vars["perm_code"];
$_smarty_tpl->tpl_vars["perm_code"]->value = $_smarty_tpl->tpl_vars['perm']->value['permission_code']; $_smarty_tpl->tpl_vars["perm_code"]->nocache = null; $_smarty_tpl->tpl_vars["perm_code"]->scope = 0;
} else $_smarty_tpl->tpl_vars["perm_code"] = new Smarty_variable($_smarty_tpl->tpl_vars['perm']->value['permission_code'], null, 0);?>
        <label class="radio">
            <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_code'];?>
" value="yes" id="<?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_id'];?>
_yes" <?php if ($_smarty_tpl->tpl_vars['level_perms']->value[$_smarty_tpl->tpl_vars['perm_code']->value]=='yes') {?> checked="checked"<?php }?>/>
            Yes</label>
        <label class="radio">
            <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_code'];?>
" value="no" id="<?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_id'];?>
_no" <?php if ($_smarty_tpl->tpl_vars['level_perms']->value[$_smarty_tpl->tpl_vars['perm_code']->value]=='no') {?> checked="checked"<?php }?>/>
            No</label>
        <?php } else { ?>
                <em>No Permission Found</em>
        <?php }?>
        <?php }
if (!$_smarty_tpl->tpl_vars['perm']->_loop) {
?>
                <em>No Permission Found</em>
        <?php } ?>
    </div>
    <?php }?>
    <?php endfor; endif; ?>
</div>
    </div>


<div id="upermission" class="tab-pane">
    <?php if (isset($_smarty_tpl->tpl_vars['types'])) {$_smarty_tpl->tpl_vars['types'] = clone $_smarty_tpl->tpl_vars['types'];
$_smarty_tpl->tpl_vars['types']->value = $_smarty_tpl->tpl_vars['userquery']->value->get_level_types(); $_smarty_tpl->tpl_vars['types']->nocache = null; $_smarty_tpl->tpl_vars['types']->scope = 0;
} else $_smarty_tpl->tpl_vars['types'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->get_level_types(), null, 0);?>
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['t'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['t']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['name'] = 't';
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['types']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total']);
?>
    <?php if (isset($_smarty_tpl->tpl_vars['perms'])) {$_smarty_tpl->tpl_vars['perms'] = clone $_smarty_tpl->tpl_vars['perms'];
$_smarty_tpl->tpl_vars['perms']->value = $_smarty_tpl->tpl_vars['userquery']->value->get_permissions($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['user_permission_type_id']); $_smarty_tpl->tpl_vars['perms']->nocache = null; $_smarty_tpl->tpl_vars['perms']->scope = 0;
} else $_smarty_tpl->tpl_vars['perms'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->get_permissions($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['user_permission_type_id']), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['user_permission_type_name']=='Uploading Permission') {?>
    <h2>Uploading Permission</h2>
    <div class="well">
        <?php  $_smarty_tpl->tpl_vars['perm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['perm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['perms']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['perm']->key => $_smarty_tpl->tpl_vars['perm']->value) {
$_smarty_tpl->tpl_vars['perm']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['perm']->value['permission_id']!='') {?>


                <strong><?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_name'];?>
</strong>

                <em><?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_desc'];?>
</em>

                <?php if (isset($_smarty_tpl->tpl_vars["perm_code"])) {$_smarty_tpl->tpl_vars["perm_code"] = clone $_smarty_tpl->tpl_vars["perm_code"];
$_smarty_tpl->tpl_vars["perm_code"]->value = $_smarty_tpl->tpl_vars['perm']->value['permission_code']; $_smarty_tpl->tpl_vars["perm_code"]->nocache = null; $_smarty_tpl->tpl_vars["perm_code"]->scope = 0;
} else $_smarty_tpl->tpl_vars["perm_code"] = new Smarty_variable($_smarty_tpl->tpl_vars['perm']->value['permission_code'], null, 0);?>
        <label class="radio">
            <?php if (isset($_smarty_tpl->tpl_vars['perm_plugin_code'])) {$_smarty_tpl->tpl_vars['perm_plugin_code'] = clone $_smarty_tpl->tpl_vars['perm_plugin_code'];
$_smarty_tpl->tpl_vars['perm_plugin_code']->value = $_smarty_tpl->tpl_vars['perm']->value['plugin_code']; $_smarty_tpl->tpl_vars['perm_plugin_code']->nocache = null; $_smarty_tpl->tpl_vars['perm_plugin_code']->scope = 0;
} else $_smarty_tpl->tpl_vars['perm_plugin_code'] = new Smarty_variable($_smarty_tpl->tpl_vars['perm']->value['plugin_code'], null, 0);?>

            <!-- <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_code'];?>
" value="yes" id="<?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_code'];?>
_yes" <?php if ($_smarty_tpl->tpl_vars['plugin_perms']->value[$_smarty_tpl->tpl_vars['perm_plugin_code']->value]!='no') {?> checked="checked"<?php }?>/>
            Yes</label>
        <label class="radio">
            <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_code'];?>
" value="no" id="<?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_code'];?>
_no" <?php if ($_smarty_tpl->tpl_vars['plugin_perms']->value[$_smarty_tpl->tpl_vars['perm_plugin_code']->value]=='no') {?> checked="checked"<?php }?>/>
            No</label> -->
           
            <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_code'];?>
" value="yes" id="<?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_code'];?>
_yes" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_code'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['level_perms']->value[$_tmp1]!='no') {?> checked="checked"<?php }?>/>
            Yes</label>
        <label class="radio">
            <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_code'];?>
" value="no" id="<?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_code'];?>
_no" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_code'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['level_perms']->value[$_tmp2]=='no') {?> checked="checked"<?php }?>/>
            No</label>

        <?php } else { ?>
        <tr>
            <td>
                <em>No Permission Found</em>
            </td>
        </tr>
        <?php }?>

        <?php }
if (!$_smarty_tpl->tpl_vars['perm']->_loop) {
?>
        <tr>
            <td>
                <em>No Permission Found</em>
            </td>
        </tr>
        <?php } ?>
    </div>
    <?php }?>
    <?php endfor; endif; ?>
    </div>
<div id="apermission" class="tab-pane">
    <?php if (isset($_smarty_tpl->tpl_vars['types'])) {$_smarty_tpl->tpl_vars['types'] = clone $_smarty_tpl->tpl_vars['types'];
$_smarty_tpl->tpl_vars['types']->value = $_smarty_tpl->tpl_vars['userquery']->value->get_level_types(); $_smarty_tpl->tpl_vars['types']->nocache = null; $_smarty_tpl->tpl_vars['types']->scope = 0;
} else $_smarty_tpl->tpl_vars['types'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->get_level_types(), null, 0);?>
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['t'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['t']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['name'] = 't';
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['types']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total']);
?>
    <?php if (isset($_smarty_tpl->tpl_vars['perms'])) {$_smarty_tpl->tpl_vars['perms'] = clone $_smarty_tpl->tpl_vars['perms'];
$_smarty_tpl->tpl_vars['perms']->value = $_smarty_tpl->tpl_vars['userquery']->value->get_permissions($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['user_permission_type_id']); $_smarty_tpl->tpl_vars['perms']->nocache = null; $_smarty_tpl->tpl_vars['perms']->scope = 0;
} else $_smarty_tpl->tpl_vars['perms'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->get_permissions($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['user_permission_type_id']), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['user_permission_type_name']=='Administrator Permission') {?>
    <h2>Administrator Permission</h2>
<div class="well">
    <?php  $_smarty_tpl->tpl_vars['perm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['perm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['perms']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['perm']->key => $_smarty_tpl->tpl_vars['perm']->value) {
$_smarty_tpl->tpl_vars['perm']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['perm']->value['permission_id']!='') {?>

    <tr>
        <td>
            <strong><?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_name'];?>
</strong><br />

            <em><?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_desc'];?>
</em>
        </td>
        <td>

            <?php if (isset($_smarty_tpl->tpl_vars["perm_code"])) {$_smarty_tpl->tpl_vars["perm_code"] = clone $_smarty_tpl->tpl_vars["perm_code"];
$_smarty_tpl->tpl_vars["perm_code"]->value = $_smarty_tpl->tpl_vars['perm']->value['permission_code']; $_smarty_tpl->tpl_vars["perm_code"]->nocache = null; $_smarty_tpl->tpl_vars["perm_code"]->scope = 0;
} else $_smarty_tpl->tpl_vars["perm_code"] = new Smarty_variable($_smarty_tpl->tpl_vars['perm']->value['permission_code'], null, 0);?>
            <label class="radio"><input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_code'];?>
" value="yes" id="<?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_id'];?>
_yes" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_code'];?>
<?php $_tmp3=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['level_perms']->value[$_tmp3]=='yes') {?> checked="checked"<?php }?> />Yes</label>
            <label class="radio"><input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_code'];?>
" value="no" id="<?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_id'];?>
_no" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_code'];?>
<?php $_tmp4=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['level_perms']->value[$_tmp4]=='no') {?> checked="checked"<?php }?> />No</label>
        </td>
    </tr>
    <?php } else { ?>
    <tr>
        <td>
            <em>No Permission Found</em>
        </td>
    </tr>
    <?php }?>

    <?php }
if (!$_smarty_tpl->tpl_vars['perm']->_loop) {
?>
    <tr>
        <td>
            <em>No Permission Found</em>
        </td>
    </tr>
    <?php } ?>
</div>
    <?php }?>
    <?php endfor; endif; ?>
    </div>
<div id="gpermission" class="tab-pane">
    <?php if (isset($_smarty_tpl->tpl_vars['types'])) {$_smarty_tpl->tpl_vars['types'] = clone $_smarty_tpl->tpl_vars['types'];
$_smarty_tpl->tpl_vars['types']->value = $_smarty_tpl->tpl_vars['userquery']->value->get_level_types(); $_smarty_tpl->tpl_vars['types']->nocache = null; $_smarty_tpl->tpl_vars['types']->scope = 0;
} else $_smarty_tpl->tpl_vars['types'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->get_level_types(), null, 0);?>
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['t'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['t']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['name'] = 't';
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['types']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total']);
?>
    <?php if (isset($_smarty_tpl->tpl_vars['perms'])) {$_smarty_tpl->tpl_vars['perms'] = clone $_smarty_tpl->tpl_vars['perms'];
$_smarty_tpl->tpl_vars['perms']->value = $_smarty_tpl->tpl_vars['userquery']->value->get_permissions($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['user_permission_type_id']); $_smarty_tpl->tpl_vars['perms']->nocache = null; $_smarty_tpl->tpl_vars['perms']->scope = 0;
} else $_smarty_tpl->tpl_vars['perms'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->get_permissions($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['user_permission_type_id']), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['user_permission_type_name']=='General Permission') {?>
    <h2>General Permission</h2>
<div class="well">
    <?php  $_smarty_tpl->tpl_vars['perm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['perm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['perms']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['perm']->key => $_smarty_tpl->tpl_vars['perm']->value) {
$_smarty_tpl->tpl_vars['perm']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['perm']->value['permission_id']!='') {?>

    <tr>
        <td>
            <strong><?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_name'];?>
</strong><br />

            <em><?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_desc'];?>
</em>
        </td>
        <td>
            <?php if (isset($_smarty_tpl->tpl_vars["perm_code"])) {$_smarty_tpl->tpl_vars["perm_code"] = clone $_smarty_tpl->tpl_vars["perm_code"];
$_smarty_tpl->tpl_vars["perm_code"]->value = $_smarty_tpl->tpl_vars['perm']->value['permission_code']; $_smarty_tpl->tpl_vars["perm_code"]->nocache = null; $_smarty_tpl->tpl_vars["perm_code"]->scope = 0;
} else $_smarty_tpl->tpl_vars["perm_code"] = new Smarty_variable($_smarty_tpl->tpl_vars['perm']->value['permission_code'], null, 0);?>
            <label class="radio"><input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_code'];?>
" value="yes" id="<?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_id'];?>
_yes" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_code'];?>
<?php $_tmp5=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['level_perms']->value[$_tmp5]=='yes') {?> checked="checked"<?php }?>/>Yes</label>
            <label class="radio"><input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_code'];?>
" value="no" id="<?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_id'];?>
_no" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_code'];?>
<?php $_tmp6=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['level_perms']->value[$_tmp6]=='no') {?> checked="checked"<?php }?> />No</label>
        </td>
    </tr>
    <?php } else { ?>
    <tr>
        <td>
            <em>No Permission Found</em>
        </td>
    </tr>
    <?php }?>

    <?php }
if (!$_smarty_tpl->tpl_vars['perm']->_loop) {
?>
    <tr>
        <td>
            <em>No Permission Found</em>
        </td>
    </tr>
    <?php } ?>
</div>
    <?php }?>
    <?php endfor; endif; ?>
    </div>
</div>
</div>


<!--<table class="table table-bordered table-striped">-->
<!--<?php if (isset($_smarty_tpl->tpl_vars['bgcolor'])) {$_smarty_tpl->tpl_vars['bgcolor'] = clone $_smarty_tpl->tpl_vars['bgcolor'];
$_smarty_tpl->tpl_vars['bgcolor']->value = ''; $_smarty_tpl->tpl_vars['bgcolor']->nocache = null; $_smarty_tpl->tpl_vars['bgcolor']->scope = 0;
} else $_smarty_tpl->tpl_vars['bgcolor'] = new Smarty_variable('', null, 0);?>-->
<!--<?php  $_smarty_tpl->tpl_vars['perm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['perm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['perms']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['perm']->key => $_smarty_tpl->tpl_vars['perm']->value) {
$_smarty_tpl->tpl_vars['perm']->_loop = true;
?>-->
<!--<?php if ($_smarty_tpl->tpl_vars['perm']->value['permission_id']!='') {?>-->

  <!--<tr>-->
    <!--<td>-->
      <!--<strong><?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_name'];?>
</strong><br />-->

      <!--<em><?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_desc'];?>
</em>-->
    <!--</td>-->
    <!--<td>-->
      <!--<?php if (isset($_smarty_tpl->tpl_vars["perm_code"])) {$_smarty_tpl->tpl_vars["perm_code"] = clone $_smarty_tpl->tpl_vars["perm_code"];
$_smarty_tpl->tpl_vars["perm_code"]->value = $_smarty_tpl->tpl_vars['perm']->value['permission_code']; $_smarty_tpl->tpl_vars["perm_code"]->nocache = null; $_smarty_tpl->tpl_vars["perm_code"]->scope = 0;
} else $_smarty_tpl->tpl_vars["perm_code"] = new Smarty_variable($_smarty_tpl->tpl_vars['perm']->value['permission_code'], null, 0);?>-->
      <!--<label class="radio">-->
        <!--<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_code'];?>
" value="yes" id="<?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_id'];?>
_yes" <?php if ($_smarty_tpl->tpl_vars['level_perms']->value[$_smarty_tpl->tpl_vars['perm_code']->value]=='yes') {?> checked="checked"<?php }?>/>-->
        <!--Yes-->
      <!--</label>-->
      <!--<label class="radio">-->
        <!--<input type="radio" name="group1<?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_code'];?>
" value="no" id="<?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_id'];?>
_no" <?php if ($_smarty_tpl->tpl_vars['level_perms']->value[$_smarty_tpl->tpl_vars['perm_code']->value]=='no') {?> checked="checked"<?php }?>/>-->
        <!--No-->
      <!--</label>-->
    <!--</td>-->
  <!--</tr>-->
<!--<?php } else { ?>-->
  <!--<tr>-->
    <!--<td>-->
      <!--<em>No Permission Found</em>-->
    <!--</td>-->
  <!--</tr>-->
<!--<?php }?>-->

<!--<?php }
if (!$_smarty_tpl->tpl_vars['perm']->_loop) {
?>-->
  <!--<tr>-->
    <!--<td>-->
      <!--<em>No Permission Found</em>-->
    <!--</td>-->
  <!--</tr>-->
<!--<?php } ?>-->
<!--</table>-->






<?php if ($_smarty_tpl->tpl_vars['Cbucket']->value->plugins_perms) {?>
<h3>Plugins Permissions</h3>

<table class="table table-bordered table-striped">

<?php if (isset($_smarty_tpl->tpl_vars['perms'])) {$_smarty_tpl->tpl_vars['perms'] = clone $_smarty_tpl->tpl_vars['perms'];
$_smarty_tpl->tpl_vars['perms']->value = $_smarty_tpl->tpl_vars['Cbucket']->value->plugins_perms; $_smarty_tpl->tpl_vars['perms']->nocache = null; $_smarty_tpl->tpl_vars['perms']->scope = 0;
} else $_smarty_tpl->tpl_vars['perms'] = new Smarty_variable($_smarty_tpl->tpl_vars['Cbucket']->value->plugins_perms, null, 0);?>


<?php if (isset($_smarty_tpl->tpl_vars['bgcolor'])) {$_smarty_tpl->tpl_vars['bgcolor'] = clone $_smarty_tpl->tpl_vars['bgcolor'];
$_smarty_tpl->tpl_vars['bgcolor']->value = ''; $_smarty_tpl->tpl_vars['bgcolor']->nocache = null; $_smarty_tpl->tpl_vars['bgcolor']->scope = 0;
} else $_smarty_tpl->tpl_vars['bgcolor'] = new Smarty_variable('', null, 0);?>
<?php  $_smarty_tpl->tpl_vars['perm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['perm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['perms']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['perm']->key => $_smarty_tpl->tpl_vars['perm']->value) {
$_smarty_tpl->tpl_vars['perm']->_loop = true;
?>



  <tr>
    <td>
      <strong><?php echo $_smarty_tpl->tpl_vars['perm']->value['plugin_name'];?>
</strong><br />
      <em><?php echo $_smarty_tpl->tpl_vars['perm']->value['plugin_desc'];?>
</em>
    </td>
    <td>
      <label class="radio">
        <?php if (isset($_smarty_tpl->tpl_vars['perm_plugin_code'])) {$_smarty_tpl->tpl_vars['perm_plugin_code'] = clone $_smarty_tpl->tpl_vars['perm_plugin_code'];
$_smarty_tpl->tpl_vars['perm_plugin_code']->value = $_smarty_tpl->tpl_vars['perm']->value['plugin_code']; $_smarty_tpl->tpl_vars['perm_plugin_code']->nocache = null; $_smarty_tpl->tpl_vars['perm_plugin_code']->scope = 0;
} else $_smarty_tpl->tpl_vars['perm_plugin_code'] = new Smarty_variable($_smarty_tpl->tpl_vars['perm']->value['plugin_code'], null, 0);?>
        <input type="radio" name="plugin_perm[<?php echo $_smarty_tpl->tpl_vars['perm']->value['plugin_code'];?>
]" value="yes" id="<?php echo $_smarty_tpl->tpl_vars['plugin_perms']->value['plugin_code'];?>
_yes" <?php if ($_smarty_tpl->tpl_vars['plugin_perms']->value[$_smarty_tpl->tpl_vars['perm_plugin_code']->value]!='no') {?> checked="checked"<?php }?>/>Yes
      </label>
      <label class="radio">
        <input type="radio" name="plugin_perm[<?php echo $_smarty_tpl->tpl_vars['perm']->value['plugin_code'];?>
]" value="no" id="<?php echo $_smarty_tpl->tpl_vars['plugin_perms']->value['plugin_code'];?>
_no" <?php if ($_smarty_tpl->tpl_vars['plugin_perms']->value[$_smarty_tpl->tpl_vars['perm_plugin_code']->value]=='no') {?> checked="checked"<?php }?>/>No
      </label>
    </td>
  </tr>

<?php }
if (!$_smarty_tpl->tpl_vars['perm']->_loop) {
?>
  <tr>
    <td>
      <em>No Permission Found</em>
    </td>
  </tr>
<?php } ?>
</table>






<?php }?>



	 <input class="btn btn-primary btn-sm" type="submit" name="update_level_perms" id="button" value="Update" /></td>

</form>
<?php } elseif ($_smarty_tpl->tpl_vars['view']->value=='add') {?>
<form action="" method="post">
<h3>User Level Details</h3>
<div class="form-group">
  <label for="level_name2">Level name</label>
  <input class="form-control" name="level_name" type="text" id="level_name2" value="<?php echo form_val($_POST['level_name']);?>
" />
</div>

<?php if (isset($_smarty_tpl->tpl_vars['types'])) {$_smarty_tpl->tpl_vars['types'] = clone $_smarty_tpl->tpl_vars['types'];
$_smarty_tpl->tpl_vars['types']->value = $_smarty_tpl->tpl_vars['userquery']->value->get_level_types(); $_smarty_tpl->tpl_vars['types']->nocache = null; $_smarty_tpl->tpl_vars['types']->scope = 0;
} else $_smarty_tpl->tpl_vars['types'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->get_level_types(), null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['t'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['t']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['name'] = 't';
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['types']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total']);
?>
<h3><?php echo $_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['user_permission_type_name'];?>
</h3>

    <?php if (isset($_smarty_tpl->tpl_vars['perms'])) {$_smarty_tpl->tpl_vars['perms'] = clone $_smarty_tpl->tpl_vars['perms'];
$_smarty_tpl->tpl_vars['perms']->value = $_smarty_tpl->tpl_vars['userquery']->value->get_permissions($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['user_permission_type_id']); $_smarty_tpl->tpl_vars['perms']->nocache = null; $_smarty_tpl->tpl_vars['perms']->scope = 0;
} else $_smarty_tpl->tpl_vars['perms'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->get_permissions($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['user_permission_type_id']), null, 0);?>
    <div class="row">
    <?php if (isset($_smarty_tpl->tpl_vars['bgcolor'])) {$_smarty_tpl->tpl_vars['bgcolor'] = clone $_smarty_tpl->tpl_vars['bgcolor'];
$_smarty_tpl->tpl_vars['bgcolor']->value = ''; $_smarty_tpl->tpl_vars['bgcolor']->nocache = null; $_smarty_tpl->tpl_vars['bgcolor']->scope = 0;
} else $_smarty_tpl->tpl_vars['bgcolor'] = new Smarty_variable('', null, 0);?>
    <?php  $_smarty_tpl->tpl_vars['perm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['perm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['perms']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['perm']->key => $_smarty_tpl->tpl_vars['perm']->value) {
$_smarty_tpl->tpl_vars['perm']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['perm']->value['permission_id']!='') {?>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 myWell">
                    <div class="col-md-8 paddingTop">
                    <strong><?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_name'];?>
</strong><br />
                    <small><em><?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_desc'];?>
</em></small>
                  </div>
                  <div class="col-md-4">
                        <label class="radio">
                          <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_code'];?>
" value="yes" id="<?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_id'];?>
_yes" />Yes
                        </label>
                        <label class="radio">
                          <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_code'];?>
" value="no" id="<?php echo $_smarty_tpl->tpl_vars['perm']->value['permission_id'];?>
_no" />No
                        </label>
                  </div>      
                </div>
            </div>
        </div>
        <?php } else { ?>
        <div>
          <div class="col-md-6">
            <em>No Permission Found</em>
          </div>
        </div>
        <?php }?>

    <?php }
if (!$_smarty_tpl->tpl_vars['perm']->_loop) {
?>
    <div>
      <div>
        <em>No Permission Found</em>
      </div>
    </div>
    <?php } ?>
    </div>

<?php endfor; endif; ?>
<input class="btn btn-primary btn-sm" type="submit" name="add_new_level" id="button" value="Add Level" />
</form>
<?php }?>

<?php }} ?>
