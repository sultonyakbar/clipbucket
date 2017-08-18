<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 10:28:51
         compiled from "C:\xampp\htdocs\clipbucket\admin_area\styles\cb_2014\layout\mass_uploader.html" */ ?>
<?php /*%%SmartyHeaderCode:4096599402433fdf98-74516094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fbe74c9b056ee52ef7cfc617dc60946116ae560' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\admin_area\\styles\\cb_2014\\layout\\mass_uploader.html',
      1 => 1502865811,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4096599402433fdf98-74516094',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cbmass' => 0,
    'vid_files' => 0,
    'cats' => 0,
    'cat' => 0,
    'i' => 0,
    'file' => 0,
    'Upload' => 0,
    'requiredFields' => 0,
    'field' => 0,
    'formObj' => 0,
    'mass_upload_config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5994024358aa88_25267408',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5994024358aa88_25267408')) {function content_5994024358aa88_25267408($_smarty_tpl) {?><div class="heading">
    <h2>Mass Uploader</h2>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['mass_upload_config'])) {$_smarty_tpl->tpl_vars['mass_upload_config'] = clone $_smarty_tpl->tpl_vars['mass_upload_config'];
$_smarty_tpl->tpl_vars['mass_upload_config']->value = config('delete_mass_upload'); $_smarty_tpl->tpl_vars['mass_upload_config']->nocache = null; $_smarty_tpl->tpl_vars['mass_upload_config']->scope = 0;
} else $_smarty_tpl->tpl_vars['mass_upload_config'] = new Smarty_variable(config('delete_mass_upload'), null, 0);?>

<?php if (isset($_smarty_tpl->tpl_vars['vid_files'])) {$_smarty_tpl->tpl_vars['vid_files'] = clone $_smarty_tpl->tpl_vars['vid_files'];
$_smarty_tpl->tpl_vars['vid_files']->value = $_smarty_tpl->tpl_vars['cbmass']->value->get_video_files(); $_smarty_tpl->tpl_vars['vid_files']->nocache = null; $_smarty_tpl->tpl_vars['vid_files']->scope = 0;
} else $_smarty_tpl->tpl_vars['vid_files'] = new Smarty_variable($_smarty_tpl->tpl_vars['cbmass']->value->get_video_files(), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['vid_files']->value) {?>
<?php if (isset($_smarty_tpl->tpl_vars['i'])) {$_smarty_tpl->tpl_vars['i'] = clone $_smarty_tpl->tpl_vars['i'];
$_smarty_tpl->tpl_vars['i']->value = 0; $_smarty_tpl->tpl_vars['i']->nocache = null; $_smarty_tpl->tpl_vars['i']->scope = 0;
} else $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
<div id="massUploadSelectAll">
	<h3>Select/Deselect</h3>
	<input type="checkbox" id="massUploadSelect"/>
</div>
<div id="massUploadCategoriesSelection">
	<h3>Mass Category Selection</h3>
	<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
	<label><input type="checkbox" class="checkall" value='<?php echo $_smarty_tpl->tpl_vars['cat']->value['category_id'];?>
'/> <?php echo $_smarty_tpl->tpl_vars['cat']->value['category_name'];?>
</label>
	<?php if (isset($_smarty_tpl->tpl_vars['i'])) {$_smarty_tpl->tpl_vars['i'] = clone $_smarty_tpl->tpl_vars['i'];
$_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['i']->value+1; $_smarty_tpl->tpl_vars['i']->nocache = null; $_smarty_tpl->tpl_vars['i']->scope = 0;
} else $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
	<?php } ?>
</div>
<form name="mass_upload" method="post" class="cbform">
    <?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vid_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
?>
    <?php if (isset($_smarty_tpl->tpl_vars['requiredFields'])) {$_smarty_tpl->tpl_vars['requiredFields'] = clone $_smarty_tpl->tpl_vars['requiredFields'];
$_smarty_tpl->tpl_vars['requiredFields']->value = $_smarty_tpl->tpl_vars['Upload']->value->loadRequiredFields($_smarty_tpl->tpl_vars['file']->value); $_smarty_tpl->tpl_vars['requiredFields']->nocache = null; $_smarty_tpl->tpl_vars['requiredFields']->scope = 0;
} else $_smarty_tpl->tpl_vars['requiredFields'] = new Smarty_variable($_smarty_tpl->tpl_vars['Upload']->value->loadRequiredFields($_smarty_tpl->tpl_vars['file']->value), null, 0);?>  
    <?php if (isset($_smarty_tpl->tpl_vars['optionFields'])) {$_smarty_tpl->tpl_vars['optionFields'] = clone $_smarty_tpl->tpl_vars['optionFields'];
$_smarty_tpl->tpl_vars['optionFields']->value = $_smarty_tpl->tpl_vars['Upload']->value->loadOptionFields($_smarty_tpl->tpl_vars['file']->value); $_smarty_tpl->tpl_vars['optionFields']->nocache = null; $_smarty_tpl->tpl_vars['optionFields']->scope = 0;
} else $_smarty_tpl->tpl_vars['optionFields'] = new Smarty_variable($_smarty_tpl->tpl_vars['Upload']->value->loadOptionFields($_smarty_tpl->tpl_vars['file']->value), null, 0);?>
    <?php if (isset($_smarty_tpl->tpl_vars['locationFields'])) {$_smarty_tpl->tpl_vars['locationFields'] = clone $_smarty_tpl->tpl_vars['locationFields'];
$_smarty_tpl->tpl_vars['locationFields']->value = $_smarty_tpl->tpl_vars['Upload']->value->loadLocationFields($_smarty_tpl->tpl_vars['file']->value); $_smarty_tpl->tpl_vars['locationFields']->nocache = null; $_smarty_tpl->tpl_vars['locationFields']->scope = 0;
} else $_smarty_tpl->tpl_vars['locationFields'] = new Smarty_variable($_smarty_tpl->tpl_vars['Upload']->value->loadLocationFields($_smarty_tpl->tpl_vars['file']->value), null, 0);?>
    <?php if (isset($_smarty_tpl->tpl_vars['cust_fields'])) {$_smarty_tpl->tpl_vars['cust_fields'] = clone $_smarty_tpl->tpl_vars['cust_fields'];
$_smarty_tpl->tpl_vars['cust_fields']->value = $_smarty_tpl->tpl_vars['Upload']->value->custom_form_fields; $_smarty_tpl->tpl_vars['cust_fields']->nocache = null; $_smarty_tpl->tpl_vars['cust_fields']->scope = 0;
} else $_smarty_tpl->tpl_vars['cust_fields'] = new Smarty_variable($_smarty_tpl->tpl_vars['Upload']->value->custom_form_fields, null, 0);?>
    <input class="lead" type="hidden" name="mass_up[]" value="<?php echo $_smarty_tpl->tpl_vars['file']->value['title'];?>
" />

<div class="well">
	<input type="checkbox" name="filesToImport[]" class="checkboxMassImport"/>
    <span class="label label-danger" style="cursor: pointer;" onclick="$(this).next().toggle();return false;"><b><?php echo $_smarty_tpl->tpl_vars['file']->value['title'];?>
</b><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['mass_files'];?>
</span>
    <div class="" style="display:none">
        <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['requiredFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
        <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
        <?php if ($_smarty_tpl->tpl_vars['field']->value['title']=='Title') {?>
        <div class="row">
            <div class="col-md-6">
                <label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"><b style="color: #000000"><?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
</b></label>
                <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value,true);?>

            </div>
            <?php }?>
            <?php } ?>
            <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['requiredFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
            <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['title']=='Description') {?>
                <div class="col-md-6">
                    <label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"><b style="color: #000000"><?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
</b></label>
                    <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value,true);?>

                </div>
            <?php }?>
            <?php } ?>
        </div>
        <div class="row">
            <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['requiredFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
            <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['title']=='Video Category') {?>
            <div class="col-md-6">
                <label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"><b style="color: #000000"><?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
</b></label>
                <div class="scroll categories">
                <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value,true);?>

                </div>
            </div>
            <?php }?>
            <?php } ?>
            <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['requiredFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
            <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['title']=='Tags') {?>
            <div class="col-md-6">
                <label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"><b style="color: #000000"><?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
</b></label>
                <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value,true);?>

            </div>
            <?php }?>
            <?php } ?>
        </div>

    </div>
</div>

    <?php } ?>
    <div class="well align-center">
        <input type="submit" name="mass_upload_video" id="mass_upload_video" value="Mass Upload Videos Now" class="btn btn-primary" /></div>
</form>

<?php } else { ?>
<div class="form-control">
    NO VIDEO FOUND IN MASS UPLOAD FOLDER
</div>
<?php if ($_smarty_tpl->tpl_vars['mass_upload_config']->value=='no') {?>
<div class="form-control">
Uploaded Videos are stored in mass_uploads/processed.
</div>
<?php }?>

<?php }?>


<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/pagination.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<script type="text/javascript">
    $(document).ready(function()
	{
		$(document).on('change', '.checkall', function()
		{
			var id_cat = this.value;
			var to_check = this.checked;

			$(".categories input").each(function() {
				if( this.value == id_cat )
					this.checked = to_check;
			});
		});

		$(document).on('change', '#massUploadSelect', function()
		{
			var to_check = this.checked;

			$(".checkboxMassImport").each(function() {
				this.checked = to_check;
			});
		});
	});
</script><?php }} ?>
