<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 10:12:15
         compiled from "C:\xampp\htdocs\clipbucket\styles\global\upload_form.html" */ ?>
<?php /*%%SmartyHeaderCode:3075993fe5f0e7af9-65524086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23342099d91bffd95e6a5ae9fa25422a8302a1ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\styles\\global\\upload_form.html',
      1 => 1502865969,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3075993fe5f0e7af9-65524086',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input' => 0,
    'Upload' => 0,
    'videoFields' => 0,
    'Cbucket' => 0,
    'requiredFields' => 0,
    'field' => 0,
    'formObj' => 0,
    'custom_flag' => 0,
    'custom_fields' => 0,
    'dateAndLocation' => 0,
    'sharingOptions' => 0,
    'categories' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5993fe5f4494a2_79380988',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5993fe5f4494a2_79380988')) {function content_5993fe5f4494a2_79380988($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['videoFields'])) {$_smarty_tpl->tpl_vars['videoFields'] = clone $_smarty_tpl->tpl_vars['videoFields'];
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
<?php if (isset($_smarty_tpl->tpl_vars['custom_fields'])) {$_smarty_tpl->tpl_vars['custom_fields'] = clone $_smarty_tpl->tpl_vars['custom_fields'];
$_smarty_tpl->tpl_vars['custom_fields']->value = $_smarty_tpl->tpl_vars['videoFields']->value[4]; $_smarty_tpl->tpl_vars['custom_fields']->nocache = null; $_smarty_tpl->tpl_vars['custom_fields']->scope = 0;
} else $_smarty_tpl->tpl_vars['custom_fields'] = new Smarty_variable($_smarty_tpl->tpl_vars['videoFields']->value[4], null, 0);?>

<?php if (isset($_smarty_tpl->tpl_vars['config_for_mp4'])) {$_smarty_tpl->tpl_vars['config_for_mp4'] = clone $_smarty_tpl->tpl_vars['config_for_mp4'];
$_smarty_tpl->tpl_vars['config_for_mp4']->value = $_smarty_tpl->tpl_vars['Cbucket']->value->configs['stay_mp4']; $_smarty_tpl->tpl_vars['config_for_mp4']->nocache = null; $_smarty_tpl->tpl_vars['config_for_mp4']->scope = 0;
} else $_smarty_tpl->tpl_vars['config_for_mp4'] = new Smarty_variable($_smarty_tpl->tpl_vars['Cbucket']->value->configs['stay_mp4'], null, 0);?>
<div class="uploaderContainer clearfix" id="uploaderContainer">
    <div class="upload-area col-md-12">
        <div class="fileUploaderForm">
            <div class="dragDropContainer" id="dragDrop">
                <span class="upload-logo"></span>
                <strong class="block-title"><?php echo smarty_lang(array('code'=>"drag_drop"),$_smarty_tpl);?>
</strong>
                <p><?php echo smarty_lang(array('code'=>"upload_text"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['Cbucket']->value->configs['max_upload_size'];?>
 <?php echo smarty_lang(array('code'=>"upload_txt"),$_smarty_tpl);?>
 , <?php echo $_smarty_tpl->tpl_vars['Cbucket']->value->configs['max_video_duration'];?>
 <?php echo smarty_lang(array('code'=>"upload_txt2"),$_smarty_tpl);?>
</p>
            </div>
            <div class="selectButtonContainer">
                <a id="selectFiles" href="javascript:;" class="btn btn-primary btn-lg selectFiles"><?php echo smarty_lang(array('code'=>"select_video"),$_smarty_tpl);?>
</a>
                <!-- <p>Video can be 1000 MB in size, 120 Min in Duration and Any common format<br>You can also upload HD videos</p> -->
            </div>
            <!-- <a id="uploadFiles" class="btn btn-success" href="javascript:;">Upload</a> -->
            
        </div>
    </div>
</div>
<div id="uploadDataContainer" class="uploadDataContainer hidden">
    <div class="uploadingProgressContainer">
    </div>
    <div class="realProgressBars">
        
    </div>
    <div class="align-right hidden" id="uploadMore">
        <a href="#" class="btn btn-primary uploadMoreVideos" id="uploadMoreVideos"><?php echo smarty_lang(array('code'=>"upload_more_videos"),$_smarty_tpl);?>
</a>

    </div>
    <div id="files"></div>
    <div id="allUploadForms" class="tab-content allUploadForms"></div>
</div>

<form action="#" id="updateVideoInfoForm" class="hidden" enctype="multipart/form-data" method="post">
    <div class="row">
        <div class="col-md-8">
            <div class="" id="updateVideoInfo">
                <fieldset class="">
                    <legend class=""><?php echo $_smarty_tpl->tpl_vars['requiredFields']->value['group_name'];?>
</legend>
                </fieldset>
                <div class="requiredFields">
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
                  
                    
                    <div id= "duration" class="form-group hidden">
                        <label for="duration">Duration</label>
                        <input type="text" placeholder="" name="duration" id="duration" class="form-control" cols="45">

                    </div>

                  <!--   <div class="form-group">
                        <label for="thumb12">Thumbnail</label>
                        <input  class="thumb12"  name="thumb12" type="file" placeholder=""   class="form-control" cols="45">
                    </div> -->

            
                    <?php echo ANCHOR(array('place'=>"upload_video_form"),$_smarty_tpl);?>

                </div>
                <?php if ($_smarty_tpl->tpl_vars['custom_flag']->value&&$_smarty_tpl->tpl_vars['custom_fields']->value!='') {?>
                    <div class="formSection clear">
                        <h4><?php echo $_smarty_tpl->tpl_vars['custom_fields']->value['group_name'];?>
 <i class="glyphicon glyphicon-chevron-down pull-right"></i></h4>
                        <div class="sectionContent hidden">
                            <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['custom_fields']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                <?php }?>
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
                    <button class="btn btn-primary btn-lg"   id="saveVideoDetails"><?php echo smarty_lang(array('code'=>"submit_now"),$_smarty_tpl);?>
</button>
                </div>  
            </div>
        </div>
        <div class="col-md-4 uploadFormSidebarDiv">
            <h4><?php echo $_smarty_tpl->tpl_vars['categories']->value['title'];?>
</h4>
            <small><?php echo $_smarty_tpl->tpl_vars['categories']->value['hint_1'];?>
</small>
            <div class="categoriesContainer">
                <?php $_smarty_tpl->createLocalArrayVariable('categories', null, 0);
$_smarty_tpl->tpl_vars['categories']->value['label_class'] = 'checkbox';?>
                <?php $_smarty_tpl->createLocalArrayVariable('categories', null, 0);
$_smarty_tpl->tpl_vars['categories']->value['class'] = 'checkbox';?>
                <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['categories']->value);?>

            </div>
            <!-- <div class="cb-box pad-bottom terms-contatiner">
                <div class="checkbox">
                    <label class="light">
                        <input type="checkbox" value="">
                        I have read and agree to submission policy
                    </label>
                </div>
                <div class="checkbox">
                    <label class="light">
                        <input type="checkbox" value="">
                        I have read and agree to terms and conditions
                    </label>
                </div>
                <div class="checkbox">
                    <label class="light">
                        <input type="checkbox" value="">
                        Remember these settings
                    </label>
                </div>
            </div> -->
        </div>
    </div>
</form><?php }} ?>
