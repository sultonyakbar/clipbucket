<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 10:19:37
         compiled from "C:\xampp\htdocs\clipbucket\styles\cb_28\layout\blocks\upload\photo_form.html" */ ?>
<?php /*%%SmartyHeaderCode:2920559940019670158-12613103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1aab3c0f7fb719c1752637ca8f32230adcc83805' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\styles\\cb_28\\layout\\blocks\\upload\\photo_form.html',
      1 => 1502865952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2920559940019670158-12613103',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'photoArray' => 0,
    'cbphoto' => 0,
    'uniqueID' => 0,
    'reqFields' => 0,
    'item' => 0,
    'formObj' => 0,
    'otherFields' => 0,
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_599400196f0a96_26338709',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_599400196f0a96_26338709')) {function content_599400196f0a96_26338709($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['reqFields'])) {$_smarty_tpl->tpl_vars['reqFields'] = clone $_smarty_tpl->tpl_vars['reqFields'];
$_smarty_tpl->tpl_vars['reqFields']->value = $_smarty_tpl->tpl_vars['cbphoto']->value->load_required_forms($_smarty_tpl->tpl_vars['photoArray']->value); $_smarty_tpl->tpl_vars['reqFields']->nocache = null; $_smarty_tpl->tpl_vars['reqFields']->scope = 0;
} else $_smarty_tpl->tpl_vars['reqFields'] = new Smarty_variable($_smarty_tpl->tpl_vars['cbphoto']->value->load_required_forms($_smarty_tpl->tpl_vars['photoArray']->value), null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['otherFields'])) {$_smarty_tpl->tpl_vars['otherFields'] = clone $_smarty_tpl->tpl_vars['otherFields'];
$_smarty_tpl->tpl_vars['otherFields']->value = $_smarty_tpl->tpl_vars['cbphoto']->value->load_other_forms($_smarty_tpl->tpl_vars['photoArray']->value); $_smarty_tpl->tpl_vars['otherFields']->nocache = null; $_smarty_tpl->tpl_vars['otherFields']->scope = 0;
} else $_smarty_tpl->tpl_vars['otherFields'] = new Smarty_variable($_smarty_tpl->tpl_vars['cbphoto']->value->load_other_forms($_smarty_tpl->tpl_vars['photoArray']->value), null, 0);?>
<div id="uploadFormContainer0" class="uploadFormContainer">
    <form action="#" method="post" id="Form<?php echo $_smarty_tpl->tpl_vars['uniqueID']->value;?>
"> 
        <div class="row">
            <div class="col-md-8">
              <div>
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reqFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <div class="form-group">
                        <label><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</label>
                        <?php $_smarty_tpl->createLocalArrayVariable('item', null, 0);
$_smarty_tpl->tpl_vars['item']->value['class'] = 'form-control';?>
                        <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['item']->value);?>

                        <?php if ($_smarty_tpl->tpl_vars['item']->value['hint_1']) {?>
                            <span class="hint"><?php echo $_smarty_tpl->tpl_vars['item']->value['hint_1'];?>
</span>
                        <?php }?>
                    </div>
                <?php } ?>
            </div>
            <div class="">
                <div class="photoOptionalSettings">
                    <div class="">
                        <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['otherFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
                            <div class="form-group">
                            <label class="show"><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</label>
                            <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['label_class'] = 'radio-inline';?>
                            <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['notShowSeprator'] = true;?>
                            <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>

                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>   
            <div class="form-group">
                <button disabled class="btn btn-primary submitPhoto">
                    <?php echo smarty_lang(array('code'=>"save_details"),$_smarty_tpl);?>

                </button>
            </div>  
            </div>
            <div class="col-md-4">
                <div class="edit-img-thumbnail" id="photoPreview">
                     <img src="<?php echo get_image_file(array('details'=>$_smarty_tpl->tpl_vars['photoArray']->value,'size'=>'m'),$_smarty_tpl);?>
" />
                </div>
            </div>
        </div>
    </form>
</div><?php }} ?>
