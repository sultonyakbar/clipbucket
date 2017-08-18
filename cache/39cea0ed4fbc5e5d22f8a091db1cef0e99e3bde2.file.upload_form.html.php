<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 10:54:47
         compiled from "C:\xampp\htdocs\clipbucket\styles\cb_28\layout\blocks\upload\upload_form.html" */ ?>
<?php /*%%SmartyHeaderCode:13316599408576ad5c4-36241565%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39cea0ed4fbc5e5d22f8a091db1cef0e99e3bde2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\styles\\cb_28\\layout\\blocks\\upload\\upload_form.html',
      1 => 1502865952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13316599408576ad5c4-36241565',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input' => 0,
    'Upload' => 0,
    'videoFields' => 0,
    'requiredFields' => 0,
    'field' => 0,
    'formObj' => 0,
    'dateAndLocation' => 0,
    'sharingOptions' => 0,
    'categories' => 0,
    'videoid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5994085784ee40_82536677',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5994085784ee40_82536677')) {function content_5994085784ee40_82536677($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['videoFields'])) {$_smarty_tpl->tpl_vars['videoFields'] = clone $_smarty_tpl->tpl_vars['videoFields'];
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

<form action="#" id="updateVideoInfoFormNew">
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
                    <button class="btn btn-primary btn-lg" type="button" id="saveVideoDetailsNew"><?php echo smarty_lang(array('code'=>"submit_now"),$_smarty_tpl);?>
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
            <input type="hidden" name="videoid" value="<?php echo $_smarty_tpl->tpl_vars['videoid']->value;?>
">
            <input type="hidden" name="updateVideo" value="yes">
            
        </div>
    </div>
</form>

<script type="text/javascript">
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


    //update form
    $("#saveVideoDetailsNew").on({
        click: function(e){
            e.preventDefault();
            var data = $("#updateVideoInfoFormNew").serialize();
            $.ajax({
                url : baseurl + "/actions/file_uploader.php",
                type : "post",
                data : data,
                dataType : 'json',
                success: function(msg)
                {
               
                    //msg = $.parseJSON(msg);
                    console.log(msg);
                    $("#uploadMessage").removeClass("hidden");
                    if(msg.error){
                        $("#uploadMessage").html(msg.error).attr("class", "alert alert-danger");
                    }else{
                        $("#uploadMessage").html(msg.msg).attr("class", "alert alert-success");
                    }
                    setTimeout(function(){
                        $("#uploadMessage").addClass("hidden");
                    }, 5000);
                }
            })
        }
    });
})

</script><?php }} ?>
