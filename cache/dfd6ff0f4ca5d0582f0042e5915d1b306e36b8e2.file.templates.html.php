<?php /* Smarty version Smarty-3.1.15, created on 2017-08-17 22:43:03
         compiled from "C:\xampp\htdocs\clipbucket\admin_area\styles\cb_2014\layout\templates.html" */ ?>
<?php /*%%SmartyHeaderCode:17195995ffd784bda2-04055299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfd6ff0f4ca5d0582f0042e5915d1b306e36b8e2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\admin_area\\styles\\cb_2014\\layout\\templates.html',
      1 => 1502865812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17195995ffd784bda2-04055299',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Cbucket' => 0,
    'selected' => 0,
    'cbtpl' => 0,
    'curtpl' => 0,
    'templates' => 0,
    'template' => 0,
    'baseurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5995ffd7a98984_10385094',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5995ffd7a98984_10385094')) {function content_5995ffd7a98984_10385094($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\clipbucket\\includes\\smartyv3\\plugins\\modifier.date_format.php';
?><h2>Selected Template</h2>

<?php if (isset($_smarty_tpl->tpl_vars["selected"])) {$_smarty_tpl->tpl_vars["selected"] = clone $_smarty_tpl->tpl_vars["selected"];
$_smarty_tpl->tpl_vars["selected"]->value = $_smarty_tpl->tpl_vars['Cbucket']->value->configs['template_dir']; $_smarty_tpl->tpl_vars["selected"]->nocache = null; $_smarty_tpl->tpl_vars["selected"]->scope = 0;
} else $_smarty_tpl->tpl_vars["selected"] = new Smarty_variable($_smarty_tpl->tpl_vars['Cbucket']->value->configs['template_dir'], null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars["curtpl"])) {$_smarty_tpl->tpl_vars["curtpl"] = clone $_smarty_tpl->tpl_vars["curtpl"];
$_smarty_tpl->tpl_vars["curtpl"]->value = $_smarty_tpl->tpl_vars['cbtpl']->value->get_template_details($_smarty_tpl->tpl_vars['selected']->value); $_smarty_tpl->tpl_vars["curtpl"]->nocache = null; $_smarty_tpl->tpl_vars["curtpl"]->scope = 0;
} else $_smarty_tpl->tpl_vars["curtpl"] = new Smarty_variable($_smarty_tpl->tpl_vars['cbtpl']->value->get_template_details($_smarty_tpl->tpl_vars['selected']->value), null, 0);?>

<div class="selectedTemplate">

    <div class="row">
        <div class="col-md-4">
            
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="well alignCenter">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['cbtpl']->value->get_preview_thumb($_smarty_tpl->tpl_vars['curtpl']->value['dir']);?>
" class="img-thumbnail" >
                        <h3><?php echo $_smarty_tpl->tpl_vars['curtpl']->value['name'];?>
</h3>
                        <em>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['curtpl']->value['website']['link'];?>
"><strong><?php echo $_smarty_tpl->tpl_vars['curtpl']->value['author'];?>
</strong></a>
                        </em>
                        <p><?php echo $_smarty_tpl->tpl_vars['curtpl']->value['description'];?>
</p>
                        <p>Version : <?php echo $_smarty_tpl->tpl_vars['curtpl']->value['version'];?>
, Released on <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['curtpl']->value['released']);?>
</p>
                        <p>Website : <a href="<?php echo $_smarty_tpl->tpl_vars['curtpl']->value['website']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['curtpl']->value['website']['title'];?>
</a></p>
                    </div>    
                </div>
            </div>
        </div>
            
    </div>
</div>

    
<?php if (isset($_smarty_tpl->tpl_vars['templates'])) {$_smarty_tpl->tpl_vars['templates'] = clone $_smarty_tpl->tpl_vars['templates'];
$_smarty_tpl->tpl_vars['templates']->value = $_smarty_tpl->tpl_vars['cbtpl']->value->get_templates(); $_smarty_tpl->tpl_vars['templates']->nocache = null; $_smarty_tpl->tpl_vars['templates']->scope = 0;
} else $_smarty_tpl->tpl_vars['templates'] = new Smarty_variable($_smarty_tpl->tpl_vars['cbtpl']->value->get_templates(), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['templates']->value) {?> 
    <h2>Available Templates</h2>
	  

    <div class="availableTemplates">
        <div class="">
            <div class="row">
                <?php  $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['template']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['templates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['template']->key => $_smarty_tpl->tpl_vars['template']->value) {
$_smarty_tpl->tpl_vars['template']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['selected']->value!=$_smarty_tpl->tpl_vars['template']->value['dir']) {?>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="alignCenter well">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['cbtpl']->value->get_preview_thumb($_smarty_tpl->tpl_vars['curtpl']->value['dir']);?>
" class="img-thumbnail" >
                                <h3><?php echo $_smarty_tpl->tpl_vars['template']->value['name'];?>
</h3>
                                <em>
                                    <?php echo $_smarty_tpl->tpl_vars['template']->value['name'];?>
 <br /><em>by <strong><?php echo $_smarty_tpl->tpl_vars['template']->value['author'];?>
</strong></em>
                                </em>
                                <p>Website : <a href="<?php echo $_smarty_tpl->tpl_vars['template']->value['website']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['template']->value['website']['title'];?>
</a></p>
                                <a href="templates.php?change=<?php echo $_smarty_tpl->tpl_vars['template']->value['dir'];?>
">Activate This Template</a>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
?template=<?php echo $_smarty_tpl->tpl_vars['template']->value['dir'];?>
" target="_blank">Preview</a>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
?template=<?php echo $_smarty_tpl->tpl_vars['template']->value['dir'];?>
&amp;set_template=yes" target="_blank">Preview &amp; Activate</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
                <?php } ?>
            </div>
        </div>
<?php } else { ?>
	<div align="center">No New Template Found</div>
<?php }?>
    </div>
</div>
<?php }} ?>
