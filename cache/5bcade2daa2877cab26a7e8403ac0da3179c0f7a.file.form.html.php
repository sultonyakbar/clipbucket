<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 10:52:59
         compiled from "C:\xampp\htdocs\clipbucket\plugins\embed_video_mod\form.html" */ ?>
<?php /*%%SmartyHeaderCode:13254599407ebcd1f54-92846883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bcade2daa2877cab26a7e8403ac0da3179c0f7a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\plugins\\embed_video_mod\\form.html',
      1 => 1502865925,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13254599407ebcd1f54-92846883',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input' => 0,
    'Upload' => 0,
    'videoFields' => 0,
    'objId' => 0,
    'divid' => 0,
    'requiredFields' => 0,
    'field' => 0,
    'formObj' => 0,
    'dateAndLocation' => 0,
    'sharingOptions' => 0,
    'categories' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_599407ebe0e9c2_39146803',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_599407ebe0e9c2_39146803')) {function content_599407ebe0e9c2_39146803($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['videoFields'])) {$_smarty_tpl->tpl_vars['videoFields'] = clone $_smarty_tpl->tpl_vars['videoFields'];
$_smarty_tpl->tpl_vars['videoFields']->value = $_smarty_tpl->tpl_vars['Upload']->value->load_video_fields($_smarty_tpl->tpl_vars['input']->value); $_smarty_tpl->tpl_vars['videoFields']->nocache = null; $_smarty_tpl->tpl_vars['videoFields']->scope = 0;
} else $_smarty_tpl->tpl_vars['videoFields'] = new Smarty_variable($_smarty_tpl->tpl_vars['Upload']->value->load_video_fields($_smarty_tpl->tpl_vars['input']->value), null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['requiredFields'])) {$_smarty_tpl->tpl_vars['requiredFields'] = clone $_smarty_tpl->tpl_vars['requiredFields'];
$_smarty_tpl->tpl_vars['requiredFields']->value = $_smarty_tpl->tpl_vars['videoFields']->value[0]; $_smarty_tpl->tpl_vars['requiredFields']->nocache = null; $_smarty_tpl->tpl_vars['requiredFields']->scope = 0;
} else $_smarty_tpl->tpl_vars['requiredFields'] = new Smarty_variable($_smarty_tpl->tpl_vars['videoFields']->value[0], null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['sharingOptions'])) {$_smarty_tpl->tpl_vars['sharingOptions'] = clone $_smarty_tpl->tpl_vars['sharingOptions'];
$_smarty_tpl->tpl_vars['sharingOptions']->value = $_smarty_tpl->tpl_vars['videoFields']->value[1]; $_smarty_tpl->tpl_vars['sharingOptions']->nocache = null; $_smarty_tpl->tpl_vars['sharingOptions']->scope = 0;
} else $_smarty_tpl->tpl_vars['sharingOptions'] = new Smarty_variable($_smarty_tpl->tpl_vars['videoFields']->value[1], null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['dateAndLocation'])) {$_smarty_tpl->tpl_vars['dateAndLocation'] = clone $_smarty_tpl->tpl_vars['dateAndLocation'];
$_smarty_tpl->tpl_vars['dateAndLocation']->value = $_smarty_tpl->tpl_vars['videoFields']->value[2]; $_smarty_tpl->tpl_vars['dateAndLocation']->nocache = null; $_smarty_tpl->tpl_vars['dateAndLocation']->scope = 0;
} else $_smarty_tpl->tpl_vars['dateAndLocation'] = new Smarty_variable($_smarty_tpl->tpl_vars['videoFields']->value[2], null, 0);?>
<div class="alert alert-info">
<?php echo smarty_lang(array('code'=>'embed_video_msg'),$_smarty_tpl);?>

</div>

<div class="upload_info" id="upload_form<?php echo $_smarty_tpl->tpl_vars['objId']->value;?>
" style="margin-top:10px;border:none">
	      
	<form name="embedUploadForm<?php echo $_smarty_tpl->tpl_vars['objId']->value;?>
" class="upload_form" id="embedUploadForm<?php echo $_smarty_tpl->tpl_vars['objId']->value;?>
" method="post" action="<?php echo cblink(array('name'=>'upload'),$_smarty_tpl);?>
#currnet_<?php echo $_smarty_tpl->tpl_vars['divid']->value;?>
"  enctype="multipart/form-data">

		

		<h3>Embed video details</h3>

		<div class="row">
			<div class="col-md-8">
				<div class="form-group">
					<label for="embed_code">Embed Code</label>
					<textarea name="embed_code" id="embed_code" class="form-control"><?php echo form_val(post("embed_code"));?>
</textarea>
					<small class="hint">supports embed, object and iframes</small>
				</div>
				<div class="form-group">
					<label for="thumb_file">Thumb file</label>
					<input name="thumb_file" type="file"  class="" id="thumb_file" />
				</div>
			</div>
			<div class="col-md-4 right-col">
				<div class="form-group">
					<label for="duration">Video duration</label>
					<input type="text" name="duration" id="duration" class="form-control" value="<?php echo form_val(post("duration"));?>
"/>
					<small class="hint">duration format is hours:minutes:seconds</small>
				</div>
			</div>
		</div>
       
		<div class="row">
			<div class="col-md-8">
				<div class="" id="updateVideoInfo">
					<h3><?php echo $_smarty_tpl->tpl_vars['requiredFields']->value['group_name'];?>
</h3>
					<div class="clearfix requiredFields">
						<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['requiredFields']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
						    <div class="form-group">
						    <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
						    <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['notShowSeprator'] = 'yes';?>
						    <?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='radiobutton') {?>
						        <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['label_class'] = 'radio';?>
						        <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = '';?>
						        <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>

						    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type']=='checkbox') {?>
						        <?php if (isset($_smarty_tpl->tpl_vars['categories'])) {$_smarty_tpl->tpl_vars['categories'] = clone $_smarty_tpl->tpl_vars['categories'];
$_smarty_tpl->tpl_vars['categories']->value = $_smarty_tpl->tpl_vars['field']->value; $_smarty_tpl->tpl_vars['categories']->nocache = null; $_smarty_tpl->tpl_vars['categories']->scope = 0;
} else $_smarty_tpl->tpl_vars['categories'] = new Smarty_variable($_smarty_tpl->tpl_vars['field']->value, null, 0);?>
						    <?php } else { ?>
						        <label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</label>
						        <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>

						    <?php }?>
						    </div>
						<?php } ?>
					</div>

					<div class="formSection clear">
						<h4><?php echo $_smarty_tpl->tpl_vars['dateAndLocation']->value['group_name'];?>
 <i class="glyphicon glyphicon-chevron-down pull-right"></i></h4>
						<div class="sectionContent hidden">
							<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dateAndLocation']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
							<div class="form-group">
							<?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
							    <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['notShowSeprator'] = 'yes';?>
							    <?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='radiobutton') {?>
							        <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['label_class'] = 'radio';?>
							        <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = '';?>
							        <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>

							    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type']=='checkbox') {?>
							        <h4><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</h4>
							        <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['label_class'] = 'checkbox';?>
							        <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'checkbox';?>
							        <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>

							    <?php } else { ?>
							        <label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</label>
							        <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>

							    <?php }?>
							    </div>
							<?php } ?>
						</div>
					</div>

					<div class="formSection clear">
						<h4><?php echo $_smarty_tpl->tpl_vars['sharingOptions']->value['group_name'];?>
<i class="glyphicon glyphicon-chevron-down pull-right"></i></h4>
						<div class="sectionContent hidden">
							<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sharingOptions']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
							<div class="form-group">
							<?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
							<?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['notShowSeprator'] = 'yes';?>
							<?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='radiobutton') {?>
							    <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['label_class'] = 'radio';?>
							    <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = '';?>
							    <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>

							<?php } else { ?>
							    <label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</label>
							    <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>

							<?php }?>
							</div>
							<?php } ?>
						</div>
					</div>

					<div class="pad-bottom-sm text-right">
						<input name="submit_upload" type="hidden" value="just_do_it">
						<input type="button" name="embed_upload" id="embed_upload" value="Upload" onClick="check_embed_code('<?php echo $_smarty_tpl->tpl_vars['objId']->value;?>
')" class="btn btn-primary"/>  
					</div>
				</div>
			</div>
			<div class="col-md-4 uploadFormSidebarDiv right-col">
				<h3><?php echo $_smarty_tpl->tpl_vars['categories']->value['title'];?>
</h3>
				<small><?php echo $_smarty_tpl->tpl_vars['categories']->value['hint_1'];?>
</small>
				<div class="categoriesContainer">
					<?php $_smarty_tpl->createLocalArrayVariable('categories', null, 0);
$_smarty_tpl->tpl_vars['categories']->value['label_class'] = 'checkbox';?>
					<?php $_smarty_tpl->createLocalArrayVariable('categories', null, 0);
$_smarty_tpl->tpl_vars['categories']->value['class'] = 'checkbox';?>
					<?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['categories']->value);?>

				</div>
			</div>
		</div>


		<input type="hidden" name="time_stamp" value="<?php echo time();?>
" />

    
    </form>
    
</div>



<script>
  
  $(document).ready(function(){
    $(".formSection h4").on({
        click: function(e){
            e.preventDefault();
            if($(this).find("i").hasClass("glyphicon-chevron-down")){
                $(this).find("i").removeClass("glyphicon-chevron-down").addClass("glyphicon-chevron-up");
                $(this).next().toggleClass("hidden");
            }else{
                $(this).find("i").removeClass("glyphicon-chevron-up").addClass("glyphicon-chevron-down");
                $(this).next().toggleClass("hidden");
            }
        }
    });

    $(".upload_form").find("input[name='category[]']:first").attr('checked', 'checked');

  });

</script><?php }} ?>
