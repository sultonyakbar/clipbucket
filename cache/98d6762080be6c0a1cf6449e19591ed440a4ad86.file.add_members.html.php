<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 09:34:54
         compiled from "C:\xampp\htdocs\clipbucket\admin_area\styles\cb_2014\layout\add_members.html" */ ?>
<?php /*%%SmartyHeaderCode:167075993f59e72fc50-96809014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98d6762080be6c0a1cf6449e19591ed440a4ad86' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\admin_area\\styles\\cb_2014\\layout\\add_members.html',
      1 => 1502865808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167075993f59e72fc50-96809014',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userquery' => 0,
    'required_fields' => 0,
    'field' => 0,
    'formObj' => 0,
    'levels' => 0,
    'level' => 0,
    'custom_field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5993f59eb138c1_88416370',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5993f59eb138c1_88416370')) {function content_5993f59eb138c1_88416370($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['required_fields'])) {$_smarty_tpl->tpl_vars['required_fields'] = clone $_smarty_tpl->tpl_vars['required_fields'];
$_smarty_tpl->tpl_vars['required_fields']->value = $_smarty_tpl->tpl_vars['userquery']->value->load_signup_fields(); $_smarty_tpl->tpl_vars['required_fields']->nocache = null; $_smarty_tpl->tpl_vars['required_fields']->scope = 0;
} else $_smarty_tpl->tpl_vars['required_fields'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->load_signup_fields(), null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['custom_field'])) {$_smarty_tpl->tpl_vars['custom_field'] = clone $_smarty_tpl->tpl_vars['custom_field'];
$_smarty_tpl->tpl_vars['custom_field']->value = $_smarty_tpl->tpl_vars['userquery']->value->custom_signup_fields; $_smarty_tpl->tpl_vars['custom_field']->nocache = null; $_smarty_tpl->tpl_vars['custom_field']->scope = 0;
} else $_smarty_tpl->tpl_vars['custom_field'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->custom_signup_fields, null, 0);?>
<div class="heading">
    <h2>Add New User</h2>
</div>


<p class="alert alert-info">Required Member Details</p>
<form action="" method="post">

    <div class="row">


    <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
        <?php if (isset($_smarty_tpl->tpl_vars['field'])) {$_smarty_tpl->tpl_vars['field'] = clone $_smarty_tpl->tpl_vars['field'];
$_smarty_tpl->tpl_vars['field']->value = $_smarty_tpl->tpl_vars['required_fields']->value['username']; $_smarty_tpl->tpl_vars['field']->nocache = null; $_smarty_tpl->tpl_vars['field']->scope = 0;
} else $_smarty_tpl->tpl_vars['field'] = new Smarty_variable($_smarty_tpl->tpl_vars['required_fields']->value['username'], null, 0);?>
        <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
   <div class="col-md-4">
           <label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</label>
           <?php if ($_smarty_tpl->tpl_vars['field']->value['hint_1']) {?><?php echo $_smarty_tpl->tpl_vars['field']->value['hint_1'];?>
<br><?php }?><?php echo ANCHOR(array('place'=>$_smarty_tpl->tpl_vars['field']->value['anchor_before']),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>
<?php echo ANCHOR(array('place'=>$_smarty_tpl->tpl_vars['field']->value['anchor_after']),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['field']->value['hint_2']) {?><?php echo $_smarty_tpl->tpl_vars['field']->value['hint_2'];?>
<?php }?>
   </div>

       <?php if (isset($_smarty_tpl->tpl_vars['field'])) {$_smarty_tpl->tpl_vars['field'] = clone $_smarty_tpl->tpl_vars['field'];
$_smarty_tpl->tpl_vars['field']->value = $_smarty_tpl->tpl_vars['required_fields']->value['email']; $_smarty_tpl->tpl_vars['field']->nocache = null; $_smarty_tpl->tpl_vars['field']->scope = 0;
} else $_smarty_tpl->tpl_vars['field'] = new Smarty_variable($_smarty_tpl->tpl_vars['required_fields']->value['email'], null, 0);?>
       <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
       <div class="col-md-4">
               <label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</label>
               <?php if ($_smarty_tpl->tpl_vars['field']->value['hint_1']) {?><?php echo $_smarty_tpl->tpl_vars['field']->value['hint_1'];?>
<br><?php }?><?php echo ANCHOR(array('place'=>$_smarty_tpl->tpl_vars['field']->value['anchor_before']),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>
<?php echo ANCHOR(array('place'=>$_smarty_tpl->tpl_vars['field']->value['anchor_after']),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['field']->value['hint_2']) {?><?php echo $_smarty_tpl->tpl_vars['field']->value['hint_2'];?>
<?php }?>
   </div>
        <?php if (isset($_smarty_tpl->tpl_vars['field'])) {$_smarty_tpl->tpl_vars['field'] = clone $_smarty_tpl->tpl_vars['field'];
$_smarty_tpl->tpl_vars['field']->value = $_smarty_tpl->tpl_vars['required_fields']->value['dob']; $_smarty_tpl->tpl_vars['field']->nocache = null; $_smarty_tpl->tpl_vars['field']->scope = 0;
} else $_smarty_tpl->tpl_vars['field'] = new Smarty_variable($_smarty_tpl->tpl_vars['required_fields']->value['dob'], null, 0);?>
        <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
        <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['id'] = 'datecreated';?>
        <div class="col-md-4 ">
            <span class="glyphicon glyphicon-calendar"></span>
            <label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</label>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['hint_1']) {?><?php echo $_smarty_tpl->tpl_vars['field']->value['hint_1'];?>
<br><?php }?>  <?php echo ANCHOR(array('place'=>$_smarty_tpl->tpl_vars['field']->value['anchor_before']),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>
<?php echo ANCHOR(array('place'=>$_smarty_tpl->tpl_vars['field']->value['anchor_after']),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['field']->value['hint_2']) {?><?php echo $_smarty_tpl->tpl_vars['field']->value['hint_2'];?>
<?php }?>

        </div>
</div>
<br>
    <div class="row">
    <?php if (isset($_smarty_tpl->tpl_vars['field'])) {$_smarty_tpl->tpl_vars['field'] = clone $_smarty_tpl->tpl_vars['field'];
$_smarty_tpl->tpl_vars['field']->value = $_smarty_tpl->tpl_vars['required_fields']->value['password']; $_smarty_tpl->tpl_vars['field']->nocache = null; $_smarty_tpl->tpl_vars['field']->scope = 0;
} else $_smarty_tpl->tpl_vars['field'] = new Smarty_variable($_smarty_tpl->tpl_vars['required_fields']->value['password'], null, 0);?>
    <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
    <div class="col-md-4">
        <label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</label>
        <?php if ($_smarty_tpl->tpl_vars['field']->value['hint_1']) {?><?php echo $_smarty_tpl->tpl_vars['field']->value['hint_1'];?>
<br><?php }?><?php echo ANCHOR(array('place'=>$_smarty_tpl->tpl_vars['field']->value['anchor_before']),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>
<?php echo ANCHOR(array('place'=>$_smarty_tpl->tpl_vars['field']->value['anchor_after']),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['field']->value['hint_2']) {?><?php echo $_smarty_tpl->tpl_vars['field']->value['hint_2'];?>
<?php }?>
    </div>
    <?php if (isset($_smarty_tpl->tpl_vars['field'])) {$_smarty_tpl->tpl_vars['field'] = clone $_smarty_tpl->tpl_vars['field'];
$_smarty_tpl->tpl_vars['field']->value = $_smarty_tpl->tpl_vars['required_fields']->value['cpassword']; $_smarty_tpl->tpl_vars['field']->nocache = null; $_smarty_tpl->tpl_vars['field']->scope = 0;
} else $_smarty_tpl->tpl_vars['field'] = new Smarty_variable($_smarty_tpl->tpl_vars['required_fields']->value['cpassword'], null, 0);?>
    <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
    <div class="col-md-4">
        <label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</label>
        <?php if ($_smarty_tpl->tpl_vars['field']->value['hint_1']) {?><?php echo $_smarty_tpl->tpl_vars['field']->value['hint_1'];?>
<br><?php }?><?php echo ANCHOR(array('place'=>$_smarty_tpl->tpl_vars['field']->value['anchor_before']),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>
<?php echo ANCHOR(array('place'=>$_smarty_tpl->tpl_vars['field']->value['anchor_after']),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['field']->value['hint_2']) {?><?php echo $_smarty_tpl->tpl_vars['field']->value['hint_2'];?>
<?php }?>
    </div>
    <div class="col-md-4">
        <label for="active">Status</label>
        <select class="form-control" name="active" id="active">
            <option value="Ok">Active</option>
            <option value="ToActivate">Inactive</option>
        </select>
    </div>
</div>

<br>

    <div class="row">
        <?php if (isset($_smarty_tpl->tpl_vars['field'])) {$_smarty_tpl->tpl_vars['field'] = clone $_smarty_tpl->tpl_vars['field'];
$_smarty_tpl->tpl_vars['field']->value = $_smarty_tpl->tpl_vars['required_fields']->value['gender']; $_smarty_tpl->tpl_vars['field']->nocache = null; $_smarty_tpl->tpl_vars['field']->scope = 0;
} else $_smarty_tpl->tpl_vars['field'] = new Smarty_variable($_smarty_tpl->tpl_vars['required_fields']->value['gender'], null, 0);?>
        <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
           <div class="col-md-4">
            <label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</label><br>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['hint_1']) {?><?php echo $_smarty_tpl->tpl_vars['field']->value['hint_1'];?>
<br><?php }?><?php echo ANCHOR(array('place'=>$_smarty_tpl->tpl_vars['field']->value['anchor_before']),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>
<?php echo ANCHOR(array('place'=>$_smarty_tpl->tpl_vars['field']->value['anchor_after']),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['field']->value['hint_2']) {?><?php echo $_smarty_tpl->tpl_vars['field']->value['hint_2'];?>
<?php }?>
        </div>
        <div class="col-md-4">
            <label for="level">User level</label>
            <select class="form-control" name="level" id="level">
                <?php if (isset($_smarty_tpl->tpl_vars['levels'])) {$_smarty_tpl->tpl_vars['levels'] = clone $_smarty_tpl->tpl_vars['levels'];
$_smarty_tpl->tpl_vars['levels']->value = $_smarty_tpl->tpl_vars['userquery']->value->get_levels(); $_smarty_tpl->tpl_vars['levels']->nocache = null; $_smarty_tpl->tpl_vars['levels']->scope = 0;
} else $_smarty_tpl->tpl_vars['levels'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->get_levels(), null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['level'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['level']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['levels']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['level']->key => $_smarty_tpl->tpl_vars['level']->value) {
$_smarty_tpl->tpl_vars['level']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['level']->value['user_level_id'];?>
"  <?php if ($_POST['level']==$_smarty_tpl->tpl_vars['level']->value['user_level_id']) {?> selected<?php } elseif ($_smarty_tpl->tpl_vars['level']->value['user_level_id']==2) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['level']->value['user_level_name'];?>
</option>
                <?php } ?>
            </select>
        </div>
        <?php if (isset($_smarty_tpl->tpl_vars['field'])) {$_smarty_tpl->tpl_vars['field'] = clone $_smarty_tpl->tpl_vars['field'];
$_smarty_tpl->tpl_vars['field']->value = $_smarty_tpl->tpl_vars['required_fields']->value['country']; $_smarty_tpl->tpl_vars['field']->nocache = null; $_smarty_tpl->tpl_vars['field']->scope = 0;
} else $_smarty_tpl->tpl_vars['field'] = new Smarty_variable($_smarty_tpl->tpl_vars['required_fields']->value['country'], null, 0);?>
        <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
        <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['type'] = 'dropdown';?>
        <div class="col-md-4">
            <label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</label>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['hint_1']) {?><?php echo $_smarty_tpl->tpl_vars['field']->value['hint_1'];?>
<br><?php }?><?php echo ANCHOR(array('place'=>$_smarty_tpl->tpl_vars['field']->value['anchor_before']),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>
<?php echo ANCHOR(array('place'=>$_smarty_tpl->tpl_vars['field']->value['anchor_after']),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['field']->value['hint_2']) {?><?php echo $_smarty_tpl->tpl_vars['field']->value['hint_2'];?>
<?php }?>
        </div>
    </div>
    <br>
    <div class="row">
        <?php if (isset($_smarty_tpl->tpl_vars['field'])) {$_smarty_tpl->tpl_vars['field'] = clone $_smarty_tpl->tpl_vars['field'];
$_smarty_tpl->tpl_vars['field']->value = $_smarty_tpl->tpl_vars['required_fields']->value['cat']; $_smarty_tpl->tpl_vars['field']->nocache = null; $_smarty_tpl->tpl_vars['field']->scope = 0;
} else $_smarty_tpl->tpl_vars['field'] = new Smarty_variable($_smarty_tpl->tpl_vars['required_fields']->value['cat'], null, 0);?>
        <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
        <div class="col-md-4">
            <label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</label>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['hint_1']) {?><?php echo $_smarty_tpl->tpl_vars['field']->value['hint_1'];?>
<br><?php }?><?php echo ANCHOR(array('place'=>$_smarty_tpl->tpl_vars['field']->value['anchor_before']),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>
<?php echo ANCHOR(array('place'=>$_smarty_tpl->tpl_vars['field']->value['anchor_after']),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['field']->value['hint_2']) {?><?php echo $_smarty_tpl->tpl_vars['field']->value['hint_2'];?>
<?php }?>
        </div>
        </div>
    <br>

    <?php if ($_smarty_tpl->tpl_vars['custom_field']->value) {?>
    <h3>Other Settings</h3>
    <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['custom_field']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
      <div class="form-group">
        <label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
" class="label"><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</label>
        <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form'-'control';?>
        <?php if ($_smarty_tpl->tpl_vars['field']->value['hint_1']) {?><?php echo $_smarty_tpl->tpl_vars['field']->value['hint_1'];?>
<br><?php }?><?php echo ANCHOR(array('place'=>$_smarty_tpl->tpl_vars['field']->value['anchor_before']),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>
<?php echo ANCHOR(array('place'=>$_smarty_tpl->tpl_vars['field']->value['anchor_after']),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['field']->value['hint_2']) {?><br><?php echo $_smarty_tpl->tpl_vars['field']->value['hint_2'];?>
<?php }?>
      </div>
    <?php } ?>
    <?php }?>
    <div class="form-group">
      <input type="submit" name="add_member" value="Add Member" class="btn btn-info" id="add_member" >
    </div>
</form>



<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script>
    $(document).ready(function(){
        $( "#datecreated" ).datepicker({
            showOtherMonths: true,
            selectOtherMonths: false,
            dateFormat:"yy-mm-dd"
        });
    });
</script><?php }} ?>
