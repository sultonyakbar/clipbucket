<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 10:45:57
         compiled from "C:\xampp\htdocs\clipbucket\plugins\cb_link_video\form.html" */ ?>
<?php /*%%SmartyHeaderCode:720559940645aa1c10-63819518%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd8150a7e2b5616710ce344b4a1063fe1551aee6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\plugins\\cb_link_video\\form.html',
      1 => 1502865922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '720559940645aa1c10-63819518',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input' => 0,
    'Upload' => 0,
    'objId' => 0,
    'divid' => 0,
    'video_fields' => 0,
    'field_group' => 0,
    'field' => 0,
    'formObj' => 0,
    'category_array' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_59940645b85761_63274518',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59940645b85761_63274518')) {function content_59940645b85761_63274518($_smarty_tpl) {?><div class="alert alert-info">
<?php echo smarty_lang(array('code'=>'link_video_msg'),$_smarty_tpl);?>

</div>
<?php if (isset($_smarty_tpl->tpl_vars['video_fields'])) {$_smarty_tpl->tpl_vars['video_fields'] = clone $_smarty_tpl->tpl_vars['video_fields'];
$_smarty_tpl->tpl_vars['video_fields']->value = $_smarty_tpl->tpl_vars['Upload']->value->load_video_fields($_smarty_tpl->tpl_vars['input']->value); $_smarty_tpl->tpl_vars['video_fields']->nocache = null; $_smarty_tpl->tpl_vars['video_fields']->scope = 0;
} else $_smarty_tpl->tpl_vars['video_fields'] = new Smarty_variable($_smarty_tpl->tpl_vars['Upload']->value->load_video_fields($_smarty_tpl->tpl_vars['input']->value), null, 0);?>


<div class="upload_info" id="upload_form<?php echo $_smarty_tpl->tpl_vars['objId']->value;?>
" style="margin-top:10px; border:none">
	      
    <form name="linkUploadForm<?php echo $_smarty_tpl->tpl_vars['objId']->value;?>
" class="upload_form" id="linkUploadForm<?php echo $_smarty_tpl->tpl_vars['objId']->value;?>
" method="post" action="<?php echo cblink(array('name'=>'upload'),$_smarty_tpl);?>
#currnet_<?php echo $_smarty_tpl->tpl_vars['divid']->value;?>
" enctype="multipart/form-data">
      
      
      
      <h3>Remote video details</h3>
     	  <div class="form-group">
          <label for="remote_play_url">Video URL</label>
          <input type="text" name="remote_play_url" id="remote_play_url" size="15"  class="form-control" value="<?php echo form_val(post("remote_play_url"));?>
"/>
          <div>can be flv, mp4, m4v, ogg</div>
        </div> 
     	  <div class="form-group">
          <label>Video duration</label>
          <input type="text" name="duration" id="duration" class="form-control" value="<?php echo form_val(post("duration"));?>
"/>
          <div>duration format is hours:minutes:seconds</div>
        </div>
         
        <div class="form-group">
          <label for="thumb_file">Thumb file</label>
          <input name="thumb_file" type="file"  class="filefield" id="thumb_file" />
        </div>
      
      
    <?php  $_smarty_tpl->tpl_vars['field_group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['video_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_group']->key => $_smarty_tpl->tpl_vars['field_group']->value) {
$_smarty_tpl->tpl_vars['field_group']->_loop = true;
?>
     <fieldset>
      	
          <?php if ($_smarty_tpl->tpl_vars['field_group']->value['group_id']!='required_fields') {?> 
            <span class="remotePlayTab" 
                onclick="$('#more_fields_<?php echo $_smarty_tpl->tpl_vars['field_group']->value['group_id'];?>
<?php echo $_smarty_tpl->tpl_vars['objId']->value;?>
').slideToggle()"
                    style="cursor:pointer"><?php echo $_smarty_tpl->tpl_vars['field_group']->value['group_name'];?>
</span>
            <div id="more_fields_<?php echo $_smarty_tpl->tpl_vars['field_group']->value['group_id'];?>
<?php echo $_smarty_tpl->tpl_vars['objId']->value;?>
" style="display:none">
          <?php } else { ?>
            <span class="form_head"><?php echo $_smarty_tpl->tpl_vars['field_group']->value['group_name'];?>
</span>
          <?php }?>
    
        
           <div>
            <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['field_group']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
            
            <?php if ($_smarty_tpl->tpl_vars['field']->value['name']!='category[]') {?>
                <div class="form-group">
                <label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</label>
                <?php if ($_smarty_tpl->tpl_vars['field']->value['hint_1']) {?><small><?php echo $_smarty_tpl->tpl_vars['field']->value['hint_1'];?>
</small><?php }?>
                <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = "form-control";?>
                <?php if ($_smarty_tpl->tpl_vars['field']->value['type']=="radiobutton") {?>
                  <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['label_class'] = "radio";?>
                  <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['notShowSeprator'] = "yes";?>
                <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>

                <?php if ($_smarty_tpl->tpl_vars['field']->value['hint_2']) {?>
                <div class="hint"><?php echo $_smarty_tpl->tpl_vars['field']->value['hint_2'];?>
</div><?php }?>
                </div>
            <?php } else { ?>
                <?php if (isset($_smarty_tpl->tpl_vars['category_array'])) {$_smarty_tpl->tpl_vars['category_array'] = clone $_smarty_tpl->tpl_vars['category_array'];
$_smarty_tpl->tpl_vars['category_array']->value = $_smarty_tpl->tpl_vars['field']->value; $_smarty_tpl->tpl_vars['category_array']->nocache = null; $_smarty_tpl->tpl_vars['category_array']->scope = 0;
} else $_smarty_tpl->tpl_vars['category_array'] = new Smarty_variable($_smarty_tpl->tpl_vars['field']->value, null, 0);?>
            <?php }?>
            
            <?php } ?>
            </div>
            
            
            <?php if ($_smarty_tpl->tpl_vars['category_array']->value) {?>
            <div>
                <div class="field">
                <label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
" class="label"><?php echo $_smarty_tpl->tpl_vars['category_array']->value['title'];?>
</label>
                <?php if ($_smarty_tpl->tpl_vars['category_array']->value['hint_1']) {?><div><?php echo $_smarty_tpl->tpl_vars['category_array']->value['hint_1'];?>
</div><?php }?>
                <div>
                    <?php if ($_smarty_tpl->tpl_vars['category_array']->value['type']=="checkbox") {?>
                      <?php $_smarty_tpl->createLocalArrayVariable('category_array', null, 0);
$_smarty_tpl->tpl_vars['category_array']->value['label_class'] = "checkbox";?>
                    <?php }?>
                    <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['category_array']->value);?>

                </div>
                <?php if ($_smarty_tpl->tpl_vars['category_array']->value['hint_2']) {?>
                <div><?php echo $_smarty_tpl->tpl_vars['category_array']->value['hint_2'];?>
</div><?php }?>
                </div>
            </div>
            
            
            <?php if (isset($_smarty_tpl->tpl_vars['category_array'])) {$_smarty_tpl->tpl_vars['category_array'] = clone $_smarty_tpl->tpl_vars['category_array'];
$_smarty_tpl->tpl_vars['category_array']->value = ''; $_smarty_tpl->tpl_vars['category_array']->nocache = null; $_smarty_tpl->tpl_vars['category_array']->scope = 0;
} else $_smarty_tpl->tpl_vars['category_array'] = new Smarty_variable('', null, 0);?>
            <?php }?>

			<?php if ($_smarty_tpl->tpl_vars['field_group']->value['group_id']=='required_fields') {?><div class="clearfix"></div><?php }?>
         
           
        <?php if ($_smarty_tpl->tpl_vars['field_group']->value['group_id']!='required_fields') {?> 
        </div>
        <?php }?>
      </fieldset>
    <?php } ?>	

	   <input name="submit_upload" type="hidden" value="just_do_it">
     <input id="embed_upload_id" name="submit_upload" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['objId']->value;?>
">
    <input type="button" name="embed_upload" id="embed_video" onClick="check_file_url('<?php echo $_smarty_tpl->tpl_vars['objId']->value;?>
'); return false;" value="Upload" class="btn btn-primary"/>
    </form>
    
</div>


<style>
  .remotePlayTab{
    background-color: #47B4D8;
    margin: 5px 0;
    padding: 5px;
    display: block;
    color: #fff;
    font-weight: bold;
  }
</style>
<?php }} ?>
