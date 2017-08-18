<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 10:45:19
         compiled from "C:\xampp\htdocs\clipbucket\admin_area\styles\cb_2014\layout\plugin_manager.html" */ ?>
<?php /*%%SmartyHeaderCode:131865994061f4f4d06-89941717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '609f3840fff9ad3b7aa26af861a424e1542c0a08' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\admin_area\\styles\\cb_2014\\layout\\plugin_manager.html',
      1 => 1502865811,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131865994061f4f4d06-89941717',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'installed_plugin_list' => 0,
    'plug' => 0,
    'new_plugin_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5994061f695b59_85284445',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5994061f695b59_85284445')) {function content_5994061f695b59_85284445($_smarty_tpl) {?><div class="heading">
  <h2>Plugin Manager</h2>
</div>
<h3>Installed Plugins</h3>
<?php if ($_smarty_tpl->tpl_vars['installed_plugin_list']->value) {?>

<form name="installed_plugins" id="installed_plugins" method="post" action="plugin_manager.php">
  <div class="btn-group" style="margin-bottom:  10px">
 		<input class="btn btn-primary btn-sm" type="submit" name="activate_selected" value="Activate" />
    <input class="btn btn-primary btn-sm" type="submit" name="deactivate_selected" value="Deactivate" />
    <input class="btn btn-primary btn-sm" type="submit" name="uninstall_selected" value="Uninstall" onclick="return confirm_it('Are you sure you want to uninstall selected plugin(s)')" id="uninstall_selected"/>
  </div>
  <table class="table table-bordered table-striped">
    <tr>
      <td width="30">
        <input type="checkbox" name="checkall" onclick="checkUncheckAll(this);"/>
      </td>
      <td>Plugin Details</td>
      <td>&nbsp;</td>
    </tr>
    <?php if (isset($_smarty_tpl->tpl_vars['bgcolor'])) {$_smarty_tpl->tpl_vars['bgcolor'] = clone $_smarty_tpl->tpl_vars['bgcolor'];
$_smarty_tpl->tpl_vars['bgcolor']->value = ''; $_smarty_tpl->tpl_vars['bgcolor']->nocache = null; $_smarty_tpl->tpl_vars['bgcolor']->scope = 0;
} else $_smarty_tpl->tpl_vars['bgcolor'] = new Smarty_variable('', null, 0);?>
    <?php  $_smarty_tpl->tpl_vars['plug'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plug']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['installed_plugin_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['item']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['plug']->key => $_smarty_tpl->tpl_vars['plug']->value) {
$_smarty_tpl->tpl_vars['plug']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['item']['iteration']++;
?>


    <tr>
        <td width="30">
          <input name="check_plugin[]" type="checkbox"  value="<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['item']['iteration'];?>
" />
          <input type="hidden" name="plugin_file_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['item']['iteration'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['plug']->value['plugin_file'];?>
" />
          <input type="hidden" name="plugin_folder_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['item']['iteration'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['plug']->value['folder'];?>
" />
        </td>
        <td>
          <strong><?php echo $_smarty_tpl->tpl_vars['plug']->value['name'];?>
</strong>
          <p><?php echo $_smarty_tpl->tpl_vars['plug']->value['description'];?>
</p>
          <div class="pluginStatus">
              <?php if ($_smarty_tpl->tpl_vars['plug']->value['plugin_active']=='yes') {?>
            <span class="label label-success">Active </span>
                <?php } elseif ($_smarty_tpl->tpl_vars['plug']->value['plugin_active']!='Active') {?>  <span class="label label-danger">Inactive <?php }?></span>
            Author : <strong><?php echo $_smarty_tpl->tpl_vars['plug']->value['author'];?>
</strong> 
            |
            Ver : <strong><?php echo $_smarty_tpl->tpl_vars['plug']->value['version'];?>
</strong>
          </div>
        </td>
        <td>
          <div class="dropdown">
            <button id="dropdownMenu1" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">Actions <i class="caret"></i></button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" role="menu">
                <li>
                    <?php if ($_smarty_tpl->tpl_vars['plug']->value['plugin_active']=='yes') {?>
                    <a href="?deactivate=<?php echo $_smarty_tpl->tpl_vars['plug']->value['plugin_file'];?>
<?php if ($_smarty_tpl->tpl_vars['plug']->value['plugin_folder']!='') {?>&f=<?php echo $_smarty_tpl->tpl_vars['plug']->value['plugin_folder'];?>
<?php }?>">Deactivate</a>
                    <?php } else { ?>
                    <a href="?activate=<?php echo $_smarty_tpl->tpl_vars['plug']->value['plugin_file'];?>
<?php if ($_smarty_tpl->tpl_vars['plug']->value['plugin_folder']!='') {?>&f=<?php echo $_smarty_tpl->tpl_vars['plug']->value['plugin_folder'];?>
<?php }?>">Activate</a>
                    <?php }?>
                </li>



            <!--<?php if ($_smarty_tpl->tpl_vars['plug']->value['plugin_active']=='Active') {?>-->
              <!--<li role="presentation">-->
                <!--<a role="menuitem" tabindex="-1" href="?deactivate=<?php echo $_smarty_tpl->tpl_vars['plug']->value['plugin_file'];?>
<?php if ($_smarty_tpl->tpl_vars['plug']->value['folder']!='') {?>&f=<?php echo $_smarty_tpl->tpl_vars['plug']->value['folder'];?>
<?php }?>">-->
                  <!--Deactivate-->
                <!--</a>-->
              <!--</li>-->
            <!--<?php } else { ?>-->
              <!--<li role="presentation">-->
                <!--<a role="menuitem" tabindex="-1" href="?activate=<?php echo $_smarty_tpl->tpl_vars['plug']->value['plugin_file'];?>
<?php if ($_smarty_tpl->tpl_vars['plug']->value['folder']!='') {?>&f=<?php echo $_smarty_tpl->tpl_vars['plug']->value['folder'];?>
<?php }?>">-->
                  <!--Activate-->
                <!--</a>-->
              <!--</li>-->
            <!--<?php }?>-->
              <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:Confirm_Uninstall('?uninstall=<?php echo $_smarty_tpl->tpl_vars['plug']->value['plugin_file'];?>
<?php if ($_smarty_tpl->tpl_vars['plug']->value['folder']!='') {?>&f=<?php echo $_smarty_tpl->tpl_vars['plug']->value['folder'];?>
<?php }?>')">
                Uninstall
                </a>
              </li>
            </ul>
          </div>
        </td>
    <?php } ?>
    </tr>
  </table>
  <div class="btn-group">
      <input class="btn btn-primary btn-sm" type="submit" name="activate_selected" value="Activate" />
      <input class="btn btn-primary btn-sm" type="submit" name="deactivate_selected" value="Deactivate" />
      <input class="btn btn-primary btn-sm" type="submit" name="uninstall_selected" value="Uninstall" onclick="return confirm_it('Are you sure you want to uninstall selected plugin(s)')" id="uninstall_selected"/>
  </div>
</form>
<?php } else { ?>
<div>
  <strong><em>No Installed Plugin Found</em></strong>
</div>
<?php }?>

<div class="heading">
  <h2>Available Plugins </h2>
</div>
<?php if ($_smarty_tpl->tpl_vars['new_plugin_list']->value) {?>
<form name="available_plugins" id="available_plugins" action="plugin_manager.php" method="post">
  <table class="table table-bordered table-striped">
    <tr>
      <td width="30" align="center" valign="middle" class="left_head">
      <input type="checkbox" name="checkall" onclick="checkUncheckAll(this);"/></td>
      <td class="head">Plugin Details</td>
      <!-- <td>
        <div class="form-group">
          <input class="btn btn-primary btn-xs pull-right" type="submit" name="install_selected" value="Install"  onclick="return confirm_it('Are you sure you want to install selected plugin(s)')" id="install_selected"/>
        </div>
      </td> -->
    </tr>
    <?php if (isset($_smarty_tpl->tpl_vars['bgcolor'])) {$_smarty_tpl->tpl_vars['bgcolor'] = clone $_smarty_tpl->tpl_vars['bgcolor'];
$_smarty_tpl->tpl_vars['bgcolor']->value = ''; $_smarty_tpl->tpl_vars['bgcolor']->nocache = null; $_smarty_tpl->tpl_vars['bgcolor']->scope = 0;
} else $_smarty_tpl->tpl_vars['bgcolor'] = new Smarty_variable('', null, 0);?>
    <?php  $_smarty_tpl->tpl_vars['plug'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plug']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['new_plugin_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['item']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['plug']->key => $_smarty_tpl->tpl_vars['plug']->value) {
$_smarty_tpl->tpl_vars['plug']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['item']['iteration']++;
?>
    <tr>
      <td width="30">
        <input name="check_plugin[]" type="checkbox" value="<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['item']['iteration'];?>
" />
        <input type="hidden" name="plugin_file_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['item']['iteration'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['plug']->value['file'];?>
" />
        <input type="hidden" name="plugin_folder_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['item']['iteration'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['plug']->value['folder'];?>
" />
      </td>
      <td>
        <strong><?php echo $_smarty_tpl->tpl_vars['plug']->value['name'];?>
</strong>
        <span class="vdo_sets">
          <strong><?php echo $_smarty_tpl->tpl_vars['plug']->value['plugin_active'];?>
</strong><br>
          Author : 
          <strong>
            <a href="<?php echo $_smarty_tpl->tpl_vars['plug']->value['website'];?>
"><?php echo $_smarty_tpl->tpl_vars['plug']->value['author'];?>
</a>
          </strong><br>
          Version : <strong><?php echo $_smarty_tpl->tpl_vars['plug']->value['version'];?>
</strong>
        </span>
        <p><?php echo $_smarty_tpl->tpl_vars['plug']->value['description'];?>
</p>
        <span>
          <a class="btn btn-info btn-xs" href="?install_plugin=<?php echo $_smarty_tpl->tpl_vars['plug']->value['file'];?>
<?php if ($_smarty_tpl->tpl_vars['plug']->value['folder']!='') {?>&f=<?php echo $_smarty_tpl->tpl_vars['plug']->value['folder'];?>
<?php }?>">
            Install Plugin
          </a>
        </span>
      </td>
    </tr>
    <?php } ?>
  </table>
  <div class="form-group clearfix">
    <input class="btn btn-primary btn-sm pull-right" type="submit" name="install_selected" value="Install"   onclick="return confirm_it('Are you sure you want to install selected plugin(s)')" id="install_selected"/>
  </div>
</form>
 <?php } else { ?>
<div align="center"><strong><em>No Plugin is available</em></strong></div>
<?php }?>
<?php }} ?>
