<?php /* Smarty version Smarty-3.1.15, created on 2017-08-17 22:43:15
         compiled from "C:\xampp\htdocs\clipbucket\admin_area\styles\cb_2014\layout\template_editor.html" */ ?>
<?php /*%%SmartyHeaderCode:180135995ffe3da3cc1-69937009%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcb550231adbae8f82b927af5adac70079585730' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\admin_area\\styles\\cb_2014\\layout\\template_editor.html',
      1 => 1502865812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180135995ffe3da3cc1-69937009',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cbtpl' => 0,
    'templates' => 0,
    'template' => 0,
    'sel_dir' => 0,
    'tpl_files' => 0,
    'tplfile' => 0,
    'css_files' => 0,
    'cssfile' => 0,
    'css_path' => 0,
    'content' => 0,
    'writeable' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5995ffe3edfe04_99646383',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5995ffe3edfe04_99646383')) {function content_5995ffe3edfe04_99646383($_smarty_tpl) {?><div class="heading">
    <h2>Edit template</h2>
</div>

    <?php if (isset($_smarty_tpl->tpl_vars['templates'])) {$_smarty_tpl->tpl_vars['templates'] = clone $_smarty_tpl->tpl_vars['templates'];
$_smarty_tpl->tpl_vars['templates']->value = $_smarty_tpl->tpl_vars['cbtpl']->value->get_templates(); $_smarty_tpl->tpl_vars['templates']->nocache = null; $_smarty_tpl->tpl_vars['templates']->scope = 0;
} else $_smarty_tpl->tpl_vars['templates'] = new Smarty_variable($_smarty_tpl->tpl_vars['cbtpl']->value->get_templates(), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['templates']->value) {?>
    <form name="select_template" action="" method="get">
        <div class="form-group">
            <label for="$template.id">Select Theme To Edit</label>
            <select class="form-control" name="dir">
                <?php  $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['template']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['templates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['template']->key => $_smarty_tpl->tpl_vars['template']->value) {
$_smarty_tpl->tpl_vars['template']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['template']->value['dir'];?>
" <?php if ($_smarty_tpl->tpl_vars['sel_dir']->value==$_smarty_tpl->tpl_vars['template']->value['dir']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['template']->value['name'];?>
</option>
                <?php } ?>
            </select>        
        </div>
    <input class="btn btn-primary btn-xs" type="submit" name="select" value="Select" />
    </form>
    <?php }?>

<div class="row">
    <div class="col-md-3">
        <h3>Layout Files</h3>
        <ul class="nav nav-pills nav-stacked tabs ">
            <?php  $_smarty_tpl->tpl_vars['tplfile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tplfile']->_loop = false;
 $_smarty_tpl->tpl_vars['folder'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tpl_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tplfile']->key => $_smarty_tpl->tpl_vars['tplfile']->value) {
$_smarty_tpl->tpl_vars['tplfile']->_loop = true;
 $_smarty_tpl->tpl_vars['folder']->value = $_smarty_tpl->tpl_vars['tplfile']->key;
?>
                <?php if (!is_array($_smarty_tpl->tpl_vars['tplfile']->value)) {?>
                    <li <?php if ($_GET['file']==$_smarty_tpl->tpl_vars['tplfile']->value) {?> class = "sel_file"<?php }?>><a href="?dir=<?php echo $_smarty_tpl->tpl_vars['sel_dir']->value;?>
&file=<?php echo $_smarty_tpl->tpl_vars['tplfile']->value;?>
&folder=layout"><?php echo $_smarty_tpl->tpl_vars['tplfile']->value;?>
</a></li>
                <?php }?>
            <?php } ?>
        </ul>
        <h3>CSS Files</h3>
        <?php if ($_smarty_tpl->tpl_vars['sel_dir']->value=='cb_27') {?>
        <?php if (isset($_smarty_tpl->tpl_vars['css_path'])) {$_smarty_tpl->tpl_vars['css_path'] = clone $_smarty_tpl->tpl_vars['css_path'];
$_smarty_tpl->tpl_vars['css_path']->value = 'theme\css'; $_smarty_tpl->tpl_vars['css_path']->nocache = null; $_smarty_tpl->tpl_vars['css_path']->scope = 0;
} else $_smarty_tpl->tpl_vars['css_path'] = new Smarty_variable('theme\css', null, 0);?>
        <?php } else { ?>
        <?php if (isset($_smarty_tpl->tpl_vars['css_path'])) {$_smarty_tpl->tpl_vars['css_path'] = clone $_smarty_tpl->tpl_vars['css_path'];
$_smarty_tpl->tpl_vars['css_path']->value = 'theme'; $_smarty_tpl->tpl_vars['css_path']->nocache = null; $_smarty_tpl->tpl_vars['css_path']->scope = 0;
} else $_smarty_tpl->tpl_vars['css_path'] = new Smarty_variable('theme', null, 0);?>
        <?php }?>
        <ul class="nav nav-pills nav-stacked tabs horizontalTabs">
        <?php  $_smarty_tpl->tpl_vars['cssfile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cssfile']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['css_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cssfile']->key => $_smarty_tpl->tpl_vars['cssfile']->value) {
$_smarty_tpl->tpl_vars['cssfile']->_loop = true;
?>
            <?php if (!is_array($_smarty_tpl->tpl_vars['cssfile']->value)) {?>
                <li <?php if ($_GET['file']==$_smarty_tpl->tpl_vars['cssfile']->value) {?> class="sel_file"<?php }?>><a href="?dir=<?php echo $_smarty_tpl->tpl_vars['sel_dir']->value;?>
&file=<?php echo $_smarty_tpl->tpl_vars['cssfile']->value;?>
&folder=<?php echo $_smarty_tpl->tpl_vars['css_path']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['cssfile']->value;?>
</a></li>
            <?php }?>
        <?php } ?>
        </ul>
    </div>
    <div class="col-md-9">
        <form name="file_content" action="" method="post">
            <div class="form-group">
                <label for="file_content"><h3>Edit Template</h3></label>
                <textarea rows="30" class="form-control" name="thecontent" class="file_content" id="">
                    <?php if ($_smarty_tpl->tpl_vars['content']->value) {?><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
<?php } else { ?><em>No File Selected</em><?php }?>
                </textarea>
            </div>
            <div>
                <?php if ($_smarty_tpl->tpl_vars['writeable']->value=='no') {?>
                This file is not writeable, please set
                <em>
                    <strong><?php echo $_GET['file'];?>
</strong>
                </em> permissions to 0777 - 
                <a href="http://docs.clip-bucket.com/clipbucket-docs/files-folder-permissions" target="_blank">
                    <strong>More Details</strong>
                </a>
            </div>
        <?php } else { ?>
            <input type="submit" value="Update File" name="update_file" class="btn btn-primary btn-sm" />
        <?php }?>
        </form>
    </div>
</div>
<?php }} ?>
