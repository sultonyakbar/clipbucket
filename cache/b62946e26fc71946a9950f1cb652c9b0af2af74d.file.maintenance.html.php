<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 10:59:38
         compiled from "C:\xampp\htdocs\clipbucket\admin_area\styles\cb_2014\layout\maintenance.html" */ ?>
<?php /*%%SmartyHeaderCode:169285994097a6dd7a7-31170455%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b62946e26fc71946a9950f1cb652c9b0af2af74d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\admin_area\\styles\\cb_2014\\layout\\maintenance.html',
      1 => 1502865810,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169285994097a6dd7a7-31170455',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'indexing' => 0,
    'from' => 0,
    'to' => 0,
    'total' => 0,
    'index_msgs' => 0,
    'themsg' => 0,
    'stop_loop' => 0,
    'next_index' => 0,
    'mode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5994097a84eda0_90486615',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5994097a84eda0_90486615')) {function content_5994097a84eda0_90486615($_smarty_tpl) {?><div class="heading">
    <h2>Website Maintenance</h2>
</div>
<p>Remove inactive sessions, user access logs, comments cache, more options will be available soon</p>
<div class="tabbable">
    <ul class="nav nav-tabs" id="myTab3">
        <li class="active">
            <a data-toggle="tab" href="#risession">
                Remove InActive sessions
            </a>
        </li>
        <li>
            <a data-toggle="tab" href="#ruserlog">
                Remove user access log
            </a>
        </li>
        <li>
            <a data-toggle="tab" href="#ruactivity">
               Remove user activity feed
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div id="risession" class="tab-pane in active">
            <a class="btn btn-primary btn-xs btn-danger" href="?mode=remove_sessions">
                Remove inactive sessions
            </a>
            </div>
        <div id="ruserlog" class="tab-pane">
            <form method="get">
                <div class="row">
                <div class="col-md-6">
                    <label for="days">Older than</label>
                    <input name="mode" value="remove_access_log" type="hidden" />
                    <input class="form-control" name="days" type="text" value="30 Days"/>
                    <br>
                <input class="btn btn-primary btn-xs btn-danger" type="submit" value="remove" />
                        </div>
                </div>
            </form>
        </div>
        <div id="ruactivity" class="tab-pane">
            <form method="get">
                <div class="row">
                <div class="col-md-6">
                    <label for="days">Older than</label>
                    <input name="mode" value="remove_activity_feed" type="hidden" />
                    <input class="form-control" name="days" type="text" value="30 days"/>
                </div>
                <div class="col-md-6">
                    <label for="loop_size">With loop size of</label>
                    <input class="form-control" name="loop_size" type="text" value="100 users"/>
                </div>
                    </div>
                <br>
                <div class="form-group">
                    <input class="btn btn-primary btn-xs btn-danger" type="submit" value="remove" />
                </div>
            </form>
        </div>
        </div>
    </div>




<?php if ($_GET['mode']=='remove_activity_feed') {?>
<?php if ($_smarty_tpl->tpl_vars['indexing']->value) {?>
<h4><?php echo $_smarty_tpl->tpl_vars['from']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['to']->value;?>
 of <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</h4>
    <ul>
    <?php  $_smarty_tpl->tpl_vars['themsg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['themsg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index_msgs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['themsg']->key => $_smarty_tpl->tpl_vars['themsg']->value) {
$_smarty_tpl->tpl_vars['themsg']->_loop = true;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['themsg']->value;?>
</li>
    <?php } ?>
    </ul>
    <?php if ($_smarty_tpl->tpl_vars['stop_loop']->value!='yes') {?>
    <script type="text/javascript">
        var start_index = '<?php echo $_smarty_tpl->tpl_vars['next_index']->value;?>
';
        var loop_size = '<?php echo $_GET['loop_size'];?>
';
        var mode = '<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
';
    	var days = '<?php echo $_GET['days'];?>
';
        
        $(document).oneTime(2000,function(){
    	   $(window.location).attr('href', '?loop_size='+loop_size+'&mode='+mode+'&start_index='+start_index+'&days'+days)
        });
        
    </script>
    <h5>redirecting....do not close this window</h5>
    <?php } else { ?>
        <h5>Indexing has been completed.</h5>
    <?php }?>
    <?php }?>
<?php }?><?php }} ?>
