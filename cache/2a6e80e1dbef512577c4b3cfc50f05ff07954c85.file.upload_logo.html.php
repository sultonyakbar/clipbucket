<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 09:31:43
         compiled from "C:\xampp\htdocs\clipbucket\admin_area\styles\cb_2014\layout\upload_logo.html" */ ?>
<?php /*%%SmartyHeaderCode:138825993f4df9913a0-92298731%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a6e80e1dbef512577c4b3cfc50f05ff07954c85' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\admin_area\\styles\\cb_2014\\layout\\upload_logo.html',
      1 => 1502865812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138825993f4df9913a0-92298731',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'source' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5993f4dfa2b1f6_28054917',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5993f4dfa2b1f6_28054917')) {function content_5993f4dfa2b1f6_28054917($_smarty_tpl) {?><div class="heading paddingBottomSmall">
    <div class="form-group">
        <h2>Update Logo</h2>
    </div>
</div>
<div class="col-md-6">
    <div id="content">
        <form action="upload_logo.php" method="post" enctype="multipart/form-data" name="upload_logo" id="upload_logo">
            <h4> Select image to upload: </h4>   
            <input type="file"  multiple accept='image/*' name="fileToUpload" id="fileToUpload">
            </br>
            <input class="btn btn-primary" type="submit" value="Upload Image" name="submit">
        </form>
    </div>
    <h6>Recommended dimensions: 400 * 80px</h6>
</div>
<div class="col-md-6">
    <img src="<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
" class="img-thumbnail" alt="Logo" width="304" height="236">
</div>
<?php }} ?>
