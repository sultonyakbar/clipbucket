<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 10:29:00
         compiled from "C:\xampp\htdocs\clipbucket\admin_area\styles\cb_2014\layout\notification_settings.html" */ ?>
<?php /*%%SmartyHeaderCode:575994024c2dced7-42545756%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a233a07df7460964a2a4455c4c08ef0e33503130' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\admin_area\\styles\\cb_2014\\layout\\notification_settings.html',
      1 => 1502865811,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '575994024c2dced7-42545756',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cbvid' => 0,
    'userquery' => 0,
    'cbphoto' => 0,
    'cbgroup' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5994024c3dfa88_18472738',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5994024c3dfa88_18472738')) {function content_5994024c3dfa88_18472738($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'C:\\xampp\\htdocs\\clipbucket\\includes\\smartyv3\\plugins\\function.math.php';
?><div class="heading">
    <h2>Notification Settings</h2>
</div>
<table class="table table-bordered table-striped manageUsersTable">
        <tr>
            <td>Videos</td>
            <td>Users</td>
            <td>Groups</td>
            <td>Total</td>
        </tr>
    
 <!-- Admin Todo List -->  
    <tr>
    	<td class="item"><a href="video_manager.php?search=search&active=no">Approve Videos (<?php echo get_videos(array('active'=>'no','count_only'=>true),$_smarty_tpl);?>
)</a>
    		<br/><a href="flagged_videos.php">Flagged Videos (<?php echo $_smarty_tpl->tpl_vars['cbvid']->value->action->count_flagged_objects();?>
)</a>
    	</td>
    	
        <td class="item"><a href="members.php?search=yes&amp;status=ToActivate">Approve Members (<?php echo get_users(array('status'=>'ToActivate','count_only'=>true),$_smarty_tpl);?>
)</a>
        	<br/><a href="flagged_users.php">Flagged Users (<?php echo $_smarty_tpl->tpl_vars['userquery']->value->action->count_flagged_objects();?>
)</a>
        </td>
        <td class="item"><a href="photo_manager.php?active=no&amp;search=yes">Approve Photos (<?php echo get_groups(array('active'=>'no','count_only'=>true),$_smarty_tpl);?>
)</a>
        <br/><a href="flagged_photos.php">Flagged Photos (<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->action->count_flagged_objects();?>
)

         </a>
        </td>
        <td>
            Approve <?php ob_start();?><?php echo get_videos(array('active'=>'no','count_only'=>true),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo get_groups(array('active'=>'no','count_only'=>true),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo get_users(array('status'=>'ToActivate','count_only'=>true),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php echo smarty_function_math(array('equation'=>"x + y + z",'x'=>$_tmp1,'y'=>$_tmp2,'z'=>$_tmp3),$_smarty_tpl);?>

            <br/>
            Flagged <?php echo smarty_function_math(array('equation'=>"x + y + z",'x'=>$_smarty_tpl->tpl_vars['cbgroup']->value->action->count_flagged_objects(),'y'=>$_smarty_tpl->tpl_vars['cbvid']->value->action->count_flagged_objects(),'z'=>$_smarty_tpl->tpl_vars['userquery']->value->action->count_flagged_objects()),$_smarty_tpl);?>
</td>
    </tr>
    <!-- Admin Todo List -->
    </table>

    <?php }} ?>
