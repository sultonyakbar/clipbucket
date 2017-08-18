<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 09:39:46
         compiled from "C:\xampp\htdocs\clipbucket\admin_area\styles\cb_2014\layout\manage_pages.html" */ ?>
<?php /*%%SmartyHeaderCode:120995993f6c25bb6f2-14876705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f29c5d038375375a414e55475ab194e81c119824' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\admin_area\\styles\\cb_2014\\layout\\manage_pages.html',
      1 => 1502865810,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120995993f6c25bb6f2-14876705',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mode' => 0,
    'page' => 0,
    'cbpages' => 0,
    'bgcolor' => 0,
    'cbpage' => 0,
    'u' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5993f6c2871e17_91280772',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5993f6c2871e17_91280772')) {function content_5993f6c2871e17_91280772($_smarty_tpl) {?><div class="heading">
  <h2>Manage Pages</h2>
</div>
<?php if ($_smarty_tpl->tpl_vars['mode']->value=="new") {?>
<form method="post">
  <fieldset class="fieldset cbform">
    <legend>Add New Page</legend>
      <div class="row">
    <div class="col-md-6">
      <label for="page_name">Page Name</label>
        <input name="page_name" class="form-control" type="text" id="page_name" value="<?php echo post('page_name');?>
">
        </div>
      <div class="col-md-6">
      <label for="page_title">Page Title</label>
        <input type="text" class="form-control" name="page_title" id="page_title" value="<?php echo post('page_title');?>
" />
          </div>
          </div>
      <div class="form-group">
      <label for="page_content">Page Content</label>
      <textarea name="page_content" id="page_content" class="form-control" style="width:100%; min-height:250px"><?php echo form_val(post('page_content'));?>
</textarea>
          </div>
          <script type="text/javascript">
      new nicEditor({fullPanel : true,maxHeight:350}).panelInstance('page_content');
      </script>
      <div class="form-group">
          <input type="submit" name="add_page" id="add_page" value="Create new page +" class="btn btn-primary btn-sm"/>
          </div>
  </fieldset>
</form>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['mode']->value=="edit"&&$_smarty_tpl->tpl_vars['page']->value['page_name']!='') {?>
<form method="post">

    <legend>Add New Page</legend>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="page_name">Page Name</label>
          <input name="page_name" class="form-control" type="text" id="page_name" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['page_name'];?>
"></td>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="page_title">Page Title</label>
          <input type="text" class="form-control" name="page_title" id="page_title" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['page_title'];?>
" />
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="page_content">Page Content</label>
      <textarea name="page_content" id="page_content" cols="8" rows="8" class="form-control"><?php echo form_val($_smarty_tpl->tpl_vars['page']->value['page_content']);?>
</textarea>
      <script type="text/javascript">
        new nicEditor({fullPanel : true,maxHeight:350}).panelInstance('page_content');
      </script>
    </div>
    <div class="form-group">
      <input type="submit" name="update_page" id="update_page" value="Update page" class="btn btn-primary"/>
    </div>
</form>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['mode']->value=='manage') {?>
<form name="page_form" action="?" method="post">
<div class="btn-group">
     	  <input class="btn btn-primary btn-xs" type="submit" name="activate_selected" value="Activate"  class="btn"/>
          <input class="btn btn-primary btn-xs" type="submit" name="deactivate_selected" value="Deactivate" class="btn" />
          <input class="btn btn-primary btn-xs" type="submit" name="update_order" value="Update order" class="btn" />
          <input class="btn btn-primary btn-xs" type="submit" name="delete_selected" value="Delete"  class="btn" onclick="return confirm_it('Are you sure you want to delete selected page(s)')"/>
    </div>
    <div class="form-group">
    <input type="button" value="Create New Page +" class="btn btn-primary btn-sm pull-right" onClick="window.location='?mode=new'"/>
    </div><br><br>
<table class="table table-bordered">
  <tr>
    <td width="30" align="center" valign="middle" class="left_head">
    <input type="checkbox" name="checkall" onclick="checkUncheckAll(this);"/></td>
    <td width="50" class="head_sep_left">PID</td>
    <td width="50" class="head_sep_left">Order</td>
    <td class="head"><div class="head_sep_left" style="width:250px">Details</div></td>
    <td width="103">Options</td>
  </tr>

<?php if (isset($_smarty_tpl->tpl_vars['bgcolor'])) {$_smarty_tpl->tpl_vars['bgcolor'] = clone $_smarty_tpl->tpl_vars['bgcolor'];
$_smarty_tpl->tpl_vars['bgcolor']->value = ''; $_smarty_tpl->tpl_vars['bgcolor']->nocache = null; $_smarty_tpl->tpl_vars['bgcolor']->scope = 0;
} else $_smarty_tpl->tpl_vars['bgcolor'] = new Smarty_variable('', null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['list'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['list']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['name'] = 'list';
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['cbpages']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total']);
?>
  <tr class="video_opt_td"  bgcolor="<?php echo $_smarty_tpl->tpl_vars['bgcolor']->value;?>
">
    <td width="30" align="center" valign="top" class="video_opt_td">
      <input name="check_page[]" type="checkbox" id="check_video" value="<?php echo $_smarty_tpl->tpl_vars['cbpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['page_id'];?>
" />
    </td>
    <td width="50" align="center" valign="top" class="video_opt_td"><?php echo $_smarty_tpl->tpl_vars['cbpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['page_id'];?>
</td>
    <td width="50" align="center" valign="top" class="video_opt_td">
      <input type="text" style="border: 1px solid rgb(153, 153, 153); padding: 2px; width: 30px;" value="<?php echo $_smarty_tpl->tpl_vars['cbpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['page_order'];?>
" name="page_ord_<?php echo $_smarty_tpl->tpl_vars['cbpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['page_id'];?>
"/>
    </td>
    <td valign="top"  class="video_opt_td"
                  onmouseover="$('#vid_opt-<?php echo $_smarty_tpl->tpl_vars['cbpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['page_id'];?>
').show()"
                  onmouseout="$('#vid_opt-<?php echo $_smarty_tpl->tpl_vars['cbpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['page_id'];?>
').hide()"  style="padding-left:10px">
      </a>
      <br>
        <div class="row">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-3">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['cbpage']->value->page_link($_smarty_tpl->tpl_vars['cbpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]);?>
" target="_blank" style="text-indent:10px">
                            <?php echo $_smarty_tpl->tpl_vars['cbpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['page_name'];?>
</a>
                        </div>
     <div class="col-md-9">
        <div class="labels">
            <span class="label <?php if ($_smarty_tpl->tpl_vars['cbpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['active']=='yes') {?>label-success<?php } else { ?>label-warning<?php }?>"><span><?php if ($_smarty_tpl->tpl_vars['cbpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['active']=='yes') {?>Active<?php } else { ?>InActive<?php }?></span></span>
            <span class="label label-info"><span>Added:<?php echo niceTime($_smarty_tpl->tpl_vars['cbpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['date_added']);?>
</span></span>
            <?php if ($_smarty_tpl->tpl_vars['u']->value['usr']['featured']=='yes') {?><span class="label label-primary">Featured<?php } else { ?><?php }?></span>
            <span class="label <?php if ($_smarty_tpl->tpl_vars['cbpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['delete_able']=='yes') {?>label-success<?php } else { ?>label-warning<?php }?>">
           <span><?php if ($_smarty_tpl->tpl_vars['cbpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['delete_able']=='no') {?>UNDELETE-ABLE<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['cbpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['delete_able']=='yes';?>
DELETE-ABLE<?php }?></span>
                </span>
        </div>
         </div>
                    </div>
                </div>
            </div>
    </td>
    
    <td>
      <div class="dropdown">
          <button class="btn btn-primary btn-xs dropdown-toggle pull-right" type="button"  id="dropdownMenu1" data-toggle="dropdown">
            Actions <i class="caret"></i>
          </button>
          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
          <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['cbpage']->value->page_link($_smarty_tpl->tpl_vars['cbpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]);?>
">View</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="?mode=edit&pid=<?php echo $_smarty_tpl->tpl_vars['cbpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['page_id'];?>
">Edit</a></li>
          <?php if ($_smarty_tpl->tpl_vars['cbpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['active']=='yes') {?>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="?deactivate=<?php echo $_smarty_tpl->tpl_vars['cbpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['page_id'];?>
">Deactivate</a></li>
          <?php } else { ?>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="?activate=<?php echo $_smarty_tpl->tpl_vars['cbpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['page_id'];?>
">Activate</a></li>
          <?php }?>
          <li role="presentation"><a class="disabled" role="menuitem" tabindex="-1" href="#">Delete</a></li>
          <?php if ($_smarty_tpl->tpl_vars['cbpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['display']!='yes') {?>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="?display=<?php echo $_smarty_tpl->tpl_vars['cbpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['page_id'];?>
">Display in footer</a></li>
          <?php } else { ?>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="?hide=<?php echo $_smarty_tpl->tpl_vars['cbpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['page_id'];?>
">Hide in footer</a></li>
          <?php }?>
        </ul> 
      </div>
    </td>
  </tr>
  <?php if ($_smarty_tpl->tpl_vars['bgcolor']->value=='') {?>
  <?php if (isset($_smarty_tpl->tpl_vars['bgcolor'])) {$_smarty_tpl->tpl_vars['bgcolor'] = clone $_smarty_tpl->tpl_vars['bgcolor'];
$_smarty_tpl->tpl_vars['bgcolor']->value = "#EEEEEE"; $_smarty_tpl->tpl_vars['bgcolor']->nocache = null; $_smarty_tpl->tpl_vars['bgcolor']->scope = 0;
} else $_smarty_tpl->tpl_vars['bgcolor'] = new Smarty_variable("#EEEEEE", null, 0);?>
  <?php } else { ?>
  <?php if (isset($_smarty_tpl->tpl_vars['bgcolor'])) {$_smarty_tpl->tpl_vars['bgcolor'] = clone $_smarty_tpl->tpl_vars['bgcolor'];
$_smarty_tpl->tpl_vars['bgcolor']->value = ''; $_smarty_tpl->tpl_vars['bgcolor']->nocache = null; $_smarty_tpl->tpl_vars['bgcolor']->scope = 0;
} else $_smarty_tpl->tpl_vars['bgcolor'] = new Smarty_variable('', null, 0);?>
  <?php }?>
        
<?php endfor; endif; ?>
</table>

    <div class="btn-group">
     	<input class="btn btn-primary btn-xs" type="submit" name="activate_selected" value="Activate"  class="btn"/>
      <input class="btn btn-primary btn-xs" type="submit" name="deactivate_selected" value="Deactivate" class="btn" />
      <input class="btn btn-primary btn-xs" type="submit" name="update_order" value="Update order" class="btn" />
      <input class="btn btn-primary btn-xs" type="submit" name="delete_selected" value="Delete"  class="btn" onclick="return confirm_it('Are you sure you want to delete selected page(s)')"/>
    </div>

</form>
<?php }?>
<script>
    $(document).ready(function() {
        $('#page_content').summernote();
    });
</script>

<style type="text/css">
  .form-group .note-image-input {
    display: none;
  }
  .form-group h5 {
    display: none;
  }
  
</style><?php }} ?>
