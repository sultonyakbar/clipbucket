<?php /* Smarty version Smarty-3.1.15, created on 2017-08-17 23:29:09
         compiled from "C:\xampp\htdocs\clipbucket\admin_area\styles\cb_2014\layout\comments.html" */ ?>
<?php /*%%SmartyHeaderCode:2401159960aa5bee326-24365284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bbe1d2be3c7f6c3f83ab3f4dd20efd04433fd40' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\admin_area\\styles\\cb_2014\\layout\\comments.html',
      1 => 1502865808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2401159960aa5bee326-24365284',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'groups' => 0,
    'comments' => 0,
    'comment' => 0,
    'userquery' => 0,
    'type' => 0,
    'comment_owner' => 0,
    'baseurl' => 0,
    'cbgroup' => 0,
    'cbcollection' => 0,
    'cbphoto' => 0,
    'bgcolor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_59960aa6095c90_05707652',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59960aa6095c90_05707652')) {function content_59960aa6095c90_05707652($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\clipbucket\\includes\\smartyv3\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\clipbucket\\includes\\smartyv3\\plugins\\modifier.date_format.php';
?>
<div class="heading">
  <h2>Comments Manager</h2>
</div>
<div id="vid_opt-<?php echo $_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['gp_list']['index']]['group_id'];?>
" class="dropdown">
  <button id="dropdownMenu" class="btn btn-primary btn-xs dropdown-toggle pull-right"
  data-toggle="dropdown">View Comments <i class="caret"></i></button>
  <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1" role="menu">
    <li role="presentation"><a role="menuitem" tabindex="-1" href="?type=v" title="View Video Comments">View Video Comments</a>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="?type=t">View Topic Posts</a>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="?type=c">View Channel Comments</a>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="?type=cl">View Collection Comments</a>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="?type=p">View Photo Comments</a>
            </ul>
          </div>
          <form name="comments_manager" method="post">
            <div class="btn-grp formOptions">
              <input class="btn btn-xs btn-primary" type="submit" name="mark_spam" value="Mark Spam"  class="button" id="mark_spam"/>
              <input class="btn btn-xs btn-primary" type="submit" name="not_spam" value="Not Spam"  class="button" id="not_spam"/>
              <input class="btn btn-xs btn-primary" type="submit" name="delete_selected" value="Delete"  class="button" onclick="return confirm_it('Are you sure you want to delete selected comment(s)')"/>
            </div>
            <table class="table table-bordered">
              <tr>
                <td width="40" align="center" valign="middle" class="left_head">
                  <input type="checkbox" name="checkall" onclick="checkUncheckAll(this);"/></td>
                  <td width="85" class="head"><strong>CID</strong></td>
                  <td class="head" colspan="2"><strong>Comment</strong></td>

                </tr>
              <!-- </table> -->

              <?php if ($_smarty_tpl->tpl_vars['comments']->value) {?>

              <!-- <table class="table table-bordered"> -->
                <!-- <?php echo pr($_smarty_tpl->tpl_vars['comments']->value,true);?>
 -->
                <?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>

                <?php if ($_smarty_tpl->tpl_vars['comment']->value['anonym_name']!='') {?>
                <?php if (isset($_smarty_tpl->tpl_vars['comment_owner'])) {$_smarty_tpl->tpl_vars['comment_owner'] = clone $_smarty_tpl->tpl_vars['comment_owner'];
$_smarty_tpl->tpl_vars['comment_owner']->value = $_smarty_tpl->tpl_vars['comment']->value['anonym_name']; $_smarty_tpl->tpl_vars['comment_owner']->nocache = null; $_smarty_tpl->tpl_vars['comment_owner']->scope = 0;
} else $_smarty_tpl->tpl_vars['comment_owner'] = new Smarty_variable($_smarty_tpl->tpl_vars['comment']->value['anonym_name'], null, 0);?>
                <?php } else { ?>
                <!-- <?php if (isset($_smarty_tpl->tpl_vars['comment_owner'])) {$_smarty_tpl->tpl_vars['comment_owner'] = clone $_smarty_tpl->tpl_vars['comment_owner'];
$_smarty_tpl->tpl_vars['comment_owner']->value = $_smarty_tpl->tpl_vars['userquery']->value->get_user_details($_smarty_tpl->tpl_vars['comment']->value[3]); $_smarty_tpl->tpl_vars['comment_owner']->nocache = null; $_smarty_tpl->tpl_vars['comment_owner']->scope = 0;
} else $_smarty_tpl->tpl_vars['comment_owner'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->get_user_details($_smarty_tpl->tpl_vars['comment']->value[3]), null, 0);?> -->
                <?php if (isset($_smarty_tpl->tpl_vars['comment_owner'])) {$_smarty_tpl->tpl_vars['comment_owner'] = clone $_smarty_tpl->tpl_vars['comment_owner'];
$_smarty_tpl->tpl_vars['comment_owner']->value = $_smarty_tpl->tpl_vars['userquery']->value->get_user_details($_smarty_tpl->tpl_vars['comment']->value['c_userid']); $_smarty_tpl->tpl_vars['comment_owner']->nocache = null; $_smarty_tpl->tpl_vars['comment_owner']->scope = 0;
} else $_smarty_tpl->tpl_vars['comment_owner'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->get_user_details($_smarty_tpl->tpl_vars['comment']->value['c_userid']), null, 0);?>
                <?php }?> 

                <tr>
                  <td width="40"><input style="margin-left:5px;margin-top:10px;"name="check_comments[]" type="checkbox" id="check_comments" value="<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
" /></td>
                  <td ><?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
</td>
                  <td onmouseover="$('#comm_opt-<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
').show()" onmouseout="$('#comm_opt-<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
').hide()" >
                    <span id="<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
" class="edit_comment">
                     <strong style="margin-left:-10px;"><?php echo $_smarty_tpl->tpl_vars['comment']->value['comment'];?>
</strong>
                   </span><br>
                   <?php if ($_smarty_tpl->tpl_vars['type']->value==''||$_smarty_tpl->tpl_vars['type']->value=='v') {?>
                   <?php if (is_array($_smarty_tpl->tpl_vars['comment_owner']->value)) {?> 
                   <a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['comment_owner']->value);?>
">
                     <strong><?php echo $_smarty_tpl->tpl_vars['comment_owner']->value['username'];?>
</strong>
                   </a> 
                   <?php } else { ?> 
                   <span id="<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
" class="edit_comment">
                     <strong style="margin-left:-10px;"><?php echo $_smarty_tpl->tpl_vars['comment']->value['comment'];?>
</strong>
                   </span>
                   <div class="videoTitle row">
                    <div class="col-md-10">
                      <strong><?php echo $_smarty_tpl->tpl_vars['comment_owner']->value;?>
 - <?php echo smarty_lang(array('code'=>"un_reg_user"),$_smarty_tpl);?>
</strong>   <?php }?> commented on a video named  <a href="<?php echo videoSmartyLink(array('vdetails'=>$_smarty_tpl->tpl_vars['comment']->value),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['comment']->value['title'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['comment']->value['title'],40);?>
</a>
                      on <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['comment']->value['date_added']);?>

                      <div class="clear-fix"></div>
                    </div>
                  </div>
                  <td>
                    <div class="dropdown pull-right">
                      <button id="dropdownMenu1" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">Actions  <i class="caret"></i></button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" role="menu">
                        <li role="presentation">

                          <a role="menuitem" tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/watch_video.php?v=<?php echo $_smarty_tpl->tpl_vars['comment']->value['videoid'];?>
#<?php if ($_smarty_tpl->tpl_vars['comment']->value['spam_votes']>0) {?>spam_<?php }?>comment_<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
" target="_blank"><?php echo smarty_lang(array('code'=>'view'),$_smarty_tpl);?>
 <?php echo smarty_lang(array('code'=>'comment'),$_smarty_tpl);?>
</a>

                        </li>

                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="spam_comment_<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
" onclick="admin_spam_comment(<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
); return false;"<?php if ($_smarty_tpl->tpl_vars['comment']->value['spam_votes']==0) {?>  style="display:inline"<?php } else { ?> style="display:none;"<?php }?>>Mark <?php echo smarty_lang(array('code'=>'spam'),$_smarty_tpl);?>
</a> <a href="#" id="remove_spam_comment_<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
"  onclick="admin_remove_spam(<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
); return false;"
                          <?php if ($_smarty_tpl->tpl_vars['comment']->value['spam_votes']!=0) {?>  style="display:inline"<?php } else { ?> style="display:none;"<?php }?>><?php echo smarty_lang(array('code'=>'remove'),$_smarty_tpl);?>
 <?php echo smarty_lang(array('code'=>'spam'),$_smarty_tpl);?>
</a> </li>


                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#" onclick="delete_comment('<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
','v'); window.location.reload(); return false;"><?php echo smarty_lang(array('code'=>'delete'),$_smarty_tpl);?>
</a></li>
                        </ul>
                      </div>
                    </td>	
                  </tr>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['type']->value=='t') {?>
                  <span class="vdo_sets">
                   <?php if (is_array($_smarty_tpl->tpl_vars['comment_owner']->value)) {?> <a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['comment_owner']->value);?>
"><strong><?php echo $_smarty_tpl->tpl_vars['comment_owner']->value['username'];?>
</strong></a> <?php } else { ?> <strong><?php echo $_smarty_tpl->tpl_vars['comment_owner']->value;?>
</strong> <?php }?> commented on <strong><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['comment']->value['date_added']);?>
</strong>  on a topic named <span style="text-transform:none"><a href="<?php echo $_smarty_tpl->tpl_vars['cbgroup']->value->topic_link($_smarty_tpl->tpl_vars['comment']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['comment']->value['topic_title'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['comment']->value['topic_title'],40);?>
</a></span>
                 </span>
                 <span style="font-size:11px;" class="edit_comment"><?php echo $_smarty_tpl->tpl_vars['comment']->value['comment'];?>
</span>

                 <div id="comm_opt-<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
" class="vid_opts" style="display:none">

                  <a href="<?php echo $_smarty_tpl->tpl_vars['cbgroup']->value->topic_link($_smarty_tpl->tpl_vars['comment']->value);?>
#<?php if ($_smarty_tpl->tpl_vars['comment']->value['spam_votes']>0) {?>spam_<?php }?>comment_<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
" target="_blank"><?php echo smarty_lang(array('code'=>'view'),$_smarty_tpl);?>
 <?php echo smarty_lang(array('code'=>'comment'),$_smarty_tpl);?>
</a> |

                  <a href="#" id="spam_comment_<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
" onclick="admin_spam_comment(<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
); return false;"<?php if ($_smarty_tpl->tpl_vars['comment']->value['spam_votes']==0) {?>  style="display:inline"<?php } else { ?> style="display:none;"<?php }?>>Mark <?php echo smarty_lang(array('code'=>'spam'),$_smarty_tpl);?>
</a> <a href="#" id="remove_spam_comment_<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
"  onclick="admin_remove_spam(<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
); return false;"
                  <?php if ($_smarty_tpl->tpl_vars['comment']->value['spam_votes']!=0) {?>  style="display:inline"<?php } else { ?> style="display:none;"<?php }?>><?php echo smarty_lang(array('code'=>'remove'),$_smarty_tpl);?>
 <?php echo smarty_lang(array('code'=>'spam'),$_smarty_tpl);?>
</a> | 

                  <a href="#" onclick="delete_comment('<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
','v'); window.location.reload(); return false;"><?php echo smarty_lang(array('code'=>'delete'),$_smarty_tpl);?>
</a>
                </div>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['type']->value=='c') {?>
                <span class="vdo_sets">
                  <span style="font-size:11px;" class="edit_comment"><strong><?php echo $_smarty_tpl->tpl_vars['comment']->value['comment'];?>
</strong></span><br>
                  <?php if (is_array($_smarty_tpl->tpl_vars['comment_owner']->value)) {?> <a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['comment_owner']->value);?>
"><strong><?php echo $_smarty_tpl->tpl_vars['comment_owner']->value['username'];?>
</strong></a> <?php } else { ?> <strong><a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['comment_owner']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['comment_owner']->value;?>
</a></strong> <?php }?> commented on <strong><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['comment']->value['date_added']);?>
</strong>  on a channel named <span style="text-transform:none"><a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['comment']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['comment']->value['username'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['comment']->value['username'],40);?>
</a></span>
                </span>

                <div class="dropdown pull-right">
                  <button id="dropdownMenu1" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">Actions  <i class="caret"></i></button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" role="menu">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['comment']->value);?>
#<?php if ($_smarty_tpl->tpl_vars['comment']->value['spam_votes']>0) {?>spam_<?php }?>comment_<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
" target="_blank"><?php echo smarty_lang(array('code'=>'view'),$_smarty_tpl);?>
 <?php echo smarty_lang(array('code'=>'comment'),$_smarty_tpl);?>
</a></li>

                    <li role="presentation"><a role="menuitem" tabindex="-1" href href="#" id="spam_comment_<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
" onclick="admin_spam_comment(<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
); return false;"<?php if ($_smarty_tpl->tpl_vars['comment']->value['spam_votes']==0) {?>  style="display:inline"<?php } else { ?> style="display:none;"<?php }?>>Mark <?php echo smarty_lang(array('code'=>'spam'),$_smarty_tpl);?>
</a> </li>
                    <a href="#" id="remove_spam_comment_<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
"  onclick="admin_remove_spam(<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
); return false;"
                    <?php if ($_smarty_tpl->tpl_vars['comment']->value['spam_votes']!=0) {?>  style="display:inline"<?php } else { ?> style="display:none;"<?php }?>><?php echo smarty_lang(array('code'=>'remove'),$_smarty_tpl);?>
 <?php echo smarty_lang(array('code'=>'spam'),$_smarty_tpl);?>
</a>

                    <li role="presentation"><a role="menuitem" tabindex="-1" href href="#" onclick="delete_comment('<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
','v'); window.location.reload(); return false;"><?php echo smarty_lang(array('code'=>'delete'),$_smarty_tpl);?>
</a></li>
                  </ul>
                </div>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['type']->value=='cl') {?>
                <span class="vdo_sets">
                 <?php if (is_array($_smarty_tpl->tpl_vars['comment_owner']->value)) {?> <a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['comment_owner']->value);?>
"><strong><?php echo $_smarty_tpl->tpl_vars['comment_owner']->value['username'];?>
</strong></a> <?php } else { ?> <strong><?php echo $_smarty_tpl->tpl_vars['comment_owner']->value;?>
- <?php echo smarty_lang(array('code'=>"un_reg_user"),$_smarty_tpl);?>
</strong> <?php }?> commented on <strong><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['comment']->value['date_added']);?>
</strong>  on a collection named <span style="text-transform:none"><a href="<?php echo $_smarty_tpl->tpl_vars['cbcollection']->value->collection_links($_smarty_tpl->tpl_vars['comment']->value,'vc');?>
" title="<?php echo $_smarty_tpl->tpl_vars['comment']->value['collection_name'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['comment']->value['collection_name'],40);?>
</a></span>
               </span>


               <div class="labels">
                <a href="<?php echo $_smarty_tpl->tpl_vars['cbcollection']->value->collection_links($_smarty_tpl->tpl_vars['comment']->value,'vc');?>
#<?php if ($_smarty_tpl->tpl_vars['comment']->value['spam_votes']>0) {?>spam_<?php }?>comment_<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
" target="_blank"><?php echo smarty_lang(array('code'=>'view'),$_smarty_tpl);?>
 <?php echo smarty_lang(array('code'=>'comment'),$_smarty_tpl);?>
</a> |

                <a href="#" id="spam_comment_<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
" onclick="admin_spam_comment(<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
); return false;"<?php if ($_smarty_tpl->tpl_vars['comment']->value['spam_votes']==0) {?>  style="display:inline"<?php } else { ?> style="display:none;"<?php }?>>Mark <?php echo smarty_lang(array('code'=>'spam'),$_smarty_tpl);?>
</a> <a href="#" id="remove_spam_comment_<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
"  onclick="admin_remove_spam(<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
); return false;"
                <?php if ($_smarty_tpl->tpl_vars['comment']->value['spam_votes']!=0) {?>  style="display:inline"<?php } else { ?> style="display:none;"<?php }?>><?php echo smarty_lang(array('code'=>'remove'),$_smarty_tpl);?>
 <?php echo smarty_lang(array('code'=>'spam'),$_smarty_tpl);?>
</a> | 

                <a href="#" onclick="delete_comment('<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
','v'); window.location.reload(); return false;"><?php echo smarty_lang(array('code'=>'delete'),$_smarty_tpl);?>
</a>
              </div>
              <?php }?>

              <?php if ($_smarty_tpl->tpl_vars['type']->value=='p') {?>
              <span class="vdo_sets">
               <?php if (is_array($_smarty_tpl->tpl_vars['comment_owner']->value)) {?> <a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['comment_owner']->value);?>
"><strong><?php echo $_smarty_tpl->tpl_vars['comment_owner']->value['username'];?>
</strong></a> <?php } else { ?> <strong><?php echo $_smarty_tpl->tpl_vars['comment_owner']->value;?>
</strong> <?php }?> commented on <strong><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['comment']->value['date_added']);?>
</strong>  on a photo named <span style="text-transform:none"><a href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['comment']->value,'view_photo');?>
" title="<?php echo $_smarty_tpl->tpl_vars['comment']->value['photo_title'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['comment']->value['photo_title'],40);?>
</a></span>
             </span> 

             <span><?php echo $_smarty_tpl->tpl_vars['comment']->value['comment'];?>
</span>

             <div class="labels">
              <a href="<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->photo_links($_smarty_tpl->tpl_vars['comment']->value,'view_photo');?>
#<?php if ($_smarty_tpl->tpl_vars['comment']->value['spam_votes']>0) {?>spam_<?php }?>comment_<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
" target="_blank"><?php echo smarty_lang(array('code'=>'view'),$_smarty_tpl);?>
 <?php echo smarty_lang(array('code'=>'comment'),$_smarty_tpl);?>
</a> |

              <a href="#" id="spam_comment_<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
" onclick="admin_spam_comment(<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
); return false;"<?php if ($_smarty_tpl->tpl_vars['comment']->value['spam_votes']==0) {?>  style="display:inline"<?php } else { ?> style="display:none;"<?php }?>>Mark <?php echo smarty_lang(array('code'=>'spam'),$_smarty_tpl);?>
</a> <a href="#" id="remove_spam_comment_<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
"  onclick="admin_remove_spam(<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
); return false;"
              <?php if ($_smarty_tpl->tpl_vars['comment']->value['spam_votes']!=0) {?>  style="display:inline"<?php } else { ?> style="display:none;"<?php }?>><?php echo smarty_lang(array('code'=>'remove'),$_smarty_tpl);?>
 <?php echo smarty_lang(array('code'=>'spam'),$_smarty_tpl);?>
</a> | 

              <a href="#" onclick="delete_comment('<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
','v'); window.location.reload(); return false;"><?php echo smarty_lang(array('code'=>'delete'),$_smarty_tpl);?>
</a>
            </div></div>

            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['bgcolor']->value=='') {?>
            <?php if (isset($_smarty_tpl->tpl_vars['bgcolor'])) {$_smarty_tpl->tpl_vars['bgcolor'] = clone $_smarty_tpl->tpl_vars['bgcolor'];
$_smarty_tpl->tpl_vars['bgcolor']->value = "#EEE"; $_smarty_tpl->tpl_vars['bgcolor']->nocache = null; $_smarty_tpl->tpl_vars['bgcolor']->scope = 0;
} else $_smarty_tpl->tpl_vars['bgcolor'] = new Smarty_variable("#EEE", null, 0);?>
            <?php } else { ?>
            <?php if (isset($_smarty_tpl->tpl_vars['bgcolor'])) {$_smarty_tpl->tpl_vars['bgcolor'] = clone $_smarty_tpl->tpl_vars['bgcolor'];
$_smarty_tpl->tpl_vars['bgcolor']->value = ''; $_smarty_tpl->tpl_vars['bgcolor']->nocache = null; $_smarty_tpl->tpl_vars['bgcolor']->scope = 0;
} else $_smarty_tpl->tpl_vars['bgcolor'] = new Smarty_variable('', null, 0);?>
            <?php }?>    
            <?php } ?>
          </table>
          <?php } else { ?>
          <div align="center"><em><?php echo smarty_lang(array('code'=>'no_comments'),$_smarty_tpl);?>
</em></div>
          <?php }?>
        </form>
        <div style="height:10px; clear:both"></div>

        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/pagination.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php }} ?>
