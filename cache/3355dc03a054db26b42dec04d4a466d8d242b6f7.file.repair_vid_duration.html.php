<?php /* Smarty version Smarty-3.1.15, created on 2017-08-17 22:23:14
         compiled from "C:\xampp\htdocs\clipbucket\admin_area\styles\cb_2014\layout\repair_vid_duration.html" */ ?>
<?php /*%%SmartyHeaderCode:197935995fb32219344-72871431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3355dc03a054db26b42dec04d4a466d8d242b6f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\admin_area\\styles\\cb_2014\\layout\\repair_vid_duration.html',
      1 => 1502865811,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197935995fb32219344-72871431',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'videos' => 0,
    'video' => 0,
    'filename' => 0,
    'fixed_array' => 0,
    'vdo' => 0,
    'log' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5995fb329aa4e3_48882936',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5995fb329aa4e3_48882936')) {function content_5995fb329aa4e3_48882936($_smarty_tpl) {?><div class="heading">
  <h2>ClipBucket video duration fix</h2>
</div>
<div class="well">
  Clipbucket repair video duration using file conversion logs of each file, if there is no log, duration fix is likely not possible.<br />
  * with log => those videos that have file conversion log<br />
  * with no log => those don't have any conversion log
</div>

<div class="cb_div">
  <?php if ($_smarty_tpl->tpl_vars['videos']->value) {?>
  <div class="btn-group">
    <form name="fix duration" method="post">
      <input type="submit" name="fix_duration" value="Fix duration (only with log)" class="btn btn-primary btn-xs"/>
      <input type="submit" name="mark_failed" value="Mark failed (with no log)" class="btn btn-primary btn-xs"/>
      <input type="submit" name="mark_delete" value="Delete (with no log)" class="btn btn-primary btn-xs"/>
    </form>
  </div>
	
	<?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
?>
    <?php if (isset($_smarty_tpl->tpl_vars['filename'])) {$_smarty_tpl->tpl_vars['filename'] = clone $_smarty_tpl->tpl_vars['filename'];
$_smarty_tpl->tpl_vars['filename']->value = $_smarty_tpl->tpl_vars['video']->value['file_name']; $_smarty_tpl->tpl_vars['filename']->nocache = null; $_smarty_tpl->tpl_vars['filename']->scope = 0;
} else $_smarty_tpl->tpl_vars['filename'] = new Smarty_variable($_smarty_tpl->tpl_vars['video']->value['file_name'], null, 0);?>
    <?php if (isset($_smarty_tpl->tpl_vars['log'])) {$_smarty_tpl->tpl_vars['log'] = clone $_smarty_tpl->tpl_vars['log'];
$_smarty_tpl->tpl_vars['log']->value = get_file_details($_smarty_tpl->tpl_vars['filename']->value); $_smarty_tpl->tpl_vars['log']->nocache = null; $_smarty_tpl->tpl_vars['log']->scope = 0;
} else $_smarty_tpl->tpl_vars['log'] = new Smarty_variable(get_file_details($_smarty_tpl->tpl_vars['filename']->value), null, 0);?>
  <div>
  	<div class="marginTopLarge">
      <img src="<?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['video']->value),$_smarty_tpl);?>
"/>
    </div>

  	<div class="marginTopLarge">
      <table class="table table-bordered table-striped">
        <tr>
          <td>Filename</td>
          <td>Duration</td>
          <td>Has log</td>
        </tr>
        <tr>
          <td>
            <?php if ($_smarty_tpl->tpl_vars['fixed_array']->value[$_smarty_tpl->tpl_vars['filename']->value]) {?>
              <strong>[FIXED]</strong> 
            <?php }?>
            <a href='edit_video.php?video=<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
' >
              <?php echo $_smarty_tpl->tpl_vars['video']->value['title'];?>

            </a>  
          </td>
          <td>
            <strong><?php echo setTime($_smarty_tpl->tpl_vars['vdo']->value['duration']);?>
</strong> 
          </td>
          <td>
            <strong>
              <?php if ($_smarty_tpl->tpl_vars['log']->value) {?> 
              <span style="color:#060">yes</span>
              <?php } else { ?>
              <span style="color:#ed0000">no</span>
              <?php }?> 
            </strong>
          </td>
        </tr>   
      </table>
    </div>
  </div>
    <?php } ?>
    <?php } else { ?>
    	<em><strong>No videos found with duration less than or equal to 1</strong></em>
    <?php }?>
</div>
<?php }} ?>
