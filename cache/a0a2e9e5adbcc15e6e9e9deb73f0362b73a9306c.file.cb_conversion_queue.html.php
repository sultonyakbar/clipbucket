<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 10:59:33
         compiled from "C:\xampp\htdocs\clipbucket\admin_area\styles\cb_2014\layout\cb_conversion_queue.html" */ ?>
<?php /*%%SmartyHeaderCode:74595994097551b969-08397364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0a2e9e5adbcc15e6e9e9deb73f0362b73a9306c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\admin_area\\styles\\cb_2014\\layout\\cb_conversion_queue.html',
      1 => 1502865808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74595994097551b969-08397364',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'queues' => 0,
    'bgcolor' => 0,
    'queue' => 0,
    'baseurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_599409756622c3_11589594',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_599409756622c3_11589594')) {function content_599409756622c3_11589594($_smarty_tpl) {?><div class="heading">
  <h2>ClipBucket Queue Manager</h2> 
</div>
<?php if (conv_lock_exists()) {?>
<span class="btn btn-primary" onclick="window.location='?delete_lock=yes'">
    Delete Conversion Lock
</span>
<?php }?>
<p class="alert alert-info">
    do not try to change the things here, can cause problems to your Clipbucket conversion system.
</p>


<!-- DIsplaying Videos -->
<form name="video_manage" method="post">

<div class="btn-group marginBottomSmall">
    <input type="submit" name="delete_selected" value="Delete" class="btn btn-primary btn-xs" onclick="return confirm_it('Are your sure you want to remove these items')"/>
    <input name="processed" type="submit"class="btn btn-primary btn-xs" id="processed" value="Set as processed" />
    <input name="pending" type="submit"class="btn btn-primary btn-xs" id="pending" value="Set as pending" /></td>
</div>


<table class="table table-bordered table-striped">
  <tr>
    <td width="30" align="center" valign="middle" class="left_head">
    <input type="checkbox" name="checkall" onclick="checkUncheckAll(this);"/></td>
    <td width="50" class="head">ID</td>
    <td class="head">Details</td>
  </tr>
<?php if ($_smarty_tpl->tpl_vars['queues']->value) {?>

<?php  $_smarty_tpl->tpl_vars['queue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['queue']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['queues']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['queue']->key => $_smarty_tpl->tpl_vars['queue']->value) {
$_smarty_tpl->tpl_vars['queue']->_loop = true;
?>
<tr bgcolor="<?php echo $_smarty_tpl->tpl_vars['bgcolor']->value;?>
">
	<td width="30">
        <input name="check_queue[]" type="checkbox"  value="<?php echo $_smarty_tpl->tpl_vars['queue']->value['cqueue_id'];?>
" />
    </td>
    <td width="50">
    	<?php echo $_smarty_tpl->tpl_vars['queue']->value['cqueue_id'];?>

    </td>
    <td class="video_opt_td">
        <a class="block" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo @constant('ADMINDIR');?>
/view_conversion_log.php?file_name=<?php echo $_smarty_tpl->tpl_vars['queue']->value['cqueue_name'];?>
" target="_blank">
        <?php echo $_smarty_tpl->tpl_vars['queue']->value['cqueue_name'];?>

        </a>
        <br>
        <span class="vdo_sets">
           <label class="label label-primary"> File Type :<strong><?php echo $_smarty_tpl->tpl_vars['queue']->value['cqueue_ext'];?>
</strong> &#8226;</label>
             <label class="label label-danger">Temp Ext : <strong><?php echo $_smarty_tpl->tpl_vars['queue']->value['cqueue_tmp_ext'];?>
</strong> &#8226;</label>
             <label class="label <?php if ($_smarty_tpl->tpl_vars['queue']->value['cqueue_conversion']=='yes') {?>label-success<?php } elseif ($_smarty_tpl->tpl_vars['queue']->value['cqueue_conversion']=='no') {?>label-info<?php } else { ?>label-warning<?php }?>">Conversion Process :
                 <?php if ($_smarty_tpl->tpl_vars['queue']->value['cqueue_conversion']=='yes') {?>Proccessed<?php } elseif ($_smarty_tpl->tpl_vars['queue']->value['cqueue_conversion']=='no') {?>Pending<?php } else { ?>Processing<?php }?></label>

            <?php if ($_smarty_tpl->tpl_vars['queue']->value['time_started']) {?>
             <label class="label label-info">Started : <strong><?php echo niceTime(date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['queue']->value['time_started']));?>
</strong> &#8226;</label>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['queue']->value['time_completed']) {?>
            <label class="label label-default"> Completed : <strong><?php echo niceTime(date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['queue']->value['time_completed']));?>
</strong></label>
            <?php }?>
        </span>
    </td>
</tr>
<?php } ?>
</table>
<?php } else { ?>
	<div align="center"><strong>No Conversion Queue File Found</strong></div>
<?php }?>
</form>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/pagination.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
