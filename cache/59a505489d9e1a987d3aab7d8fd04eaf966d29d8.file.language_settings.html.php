<?php /* Smarty version Smarty-3.1.15, created on 2017-08-17 22:41:56
         compiled from "C:\xampp\htdocs\clipbucket\admin_area\styles\cb_2014\layout\language_settings.html" */ ?>
<?php /*%%SmartyHeaderCode:184845995ff94147c37-46946811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59a505489d9e1a987d3aab7d8fd04eaf966d29d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\admin_area\\styles\\cb_2014\\layout\\language_settings.html',
      1 => 1502865810,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184845995ff94147c37-46946811',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'secret_Id' => 0,
    'edit_lang' => 0,
    'client_id' => 0,
    'language_list' => 0,
    'lang_details' => 0,
    'lang_phrases' => 0,
    'baseurl' => 0,
    'langData' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5995ff9454a8b3_73226957',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5995ff9454a8b3_73226957')) {function content_5995ff9454a8b3_73226957($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['secret_Id'])) {$_smarty_tpl->tpl_vars['secret_Id'] = clone $_smarty_tpl->tpl_vars['secret_Id'];
$_smarty_tpl->tpl_vars['secret_Id']->value = json_encode($_smarty_tpl->tpl_vars['secret_Id']->value); $_smarty_tpl->tpl_vars['secret_Id']->nocache = null; $_smarty_tpl->tpl_vars['secret_Id']->scope = 0;
} else $_smarty_tpl->tpl_vars['secret_Id'] = new Smarty_variable(json_encode($_smarty_tpl->tpl_vars['secret_Id']->value), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['edit_lang']->value!='yes') {?>
<h3>API KEYS</h3>
<div class="row">
    <div class="col-md-6">
        <form name="lang_ids" method="post" action="?default">
            <label>ClientID :</label> <input type="text" name="client_id" value=<?php echo $_smarty_tpl->tpl_vars['client_id']->value;?>
></br></br>
            <label> SecretID :</label> <input type="text" name="sec_id" value=<?php echo $_smarty_tpl->tpl_vars['secret_Id']->value;?>
></br></br>
            <input type="submit" name="set_language" id="set_language" value="Set Language Ids" class="btn btn-primary" />
        </form>
    </div>
    <div class="col-md-6" style="float:right;">
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">How to get API Keys</button>
    </div>
</div>
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Bing API</h4>
            </div>
            <div class="modal-body">
                <p><strong>Step 1. Sign in and Register.</strong></br>
                    Sign-in to Windows Azure Marketplace. If this is your first time, you’ll likely see this registration page.
                    Fill out your details, and press the ‘Continue’ button. 
                    You’ll be taken to the Terms of Use page. Read it carefully, and if you accept it, check the box at the bottom of the screen that says ‘I accept the Terms of Use’, and press the ‘Register’ button.
                </p>
                <p><strong>Step 2. Subscribe to the Microsoft Translator API.</strong></br>
                    In this section you’ll subscribe to the Microsoft Translator API in the Windows Azure Marketplace. There are a number of service options you can choose, and in this walkthrough you’ll see how to use the free one.
                </p>
                <p><strong>Step 2.1. Find the Microsoft Translator API service in the Windows Azure Marketplace
                    </strong></br>
                    If you’ve completed the Windows Azure Marketplace registration (Step 1), then visit <a href="https://datamarket.azure.com/home/">https://datamarket.azure.com/home/</a> to see the main Marketplace home page. At the top of the screen, you’ll see a ‘Search’ box.
                    Type ‘translator’ into this box and press enter, or click the button on the right that is shaped like a magnifying glass.
                </p>
                <p><strong>Step 2.2. Subscribe to the Translator API service.
                    </strong></br>
                    Click on ’Microsoft Translator’ and you’ll be taken to the Microsoft Translator API Offer page on Windows Azure Marketplace.
                    (Note: For a short cut, you can also go directly to the screen by visiting this URL: <a href="https://datamarket.azure.com/dataset/bing/microsofttranslator">https://datamarket.azure.com/dataset/bing/microsofttranslator</a>
                    On the right hand side of the screen, you’ll see a number of different monthly volume offers. Choose the one that meets your monthly volume usage needs. For this guide, you’ll use the free 2 million characters per month subscription offer, which you can find at the bottom of the list.
                    Press the ‘Sign Up’ link on your chosen offer and you’ll be taken to a page where you are asked to confirm and agree that you will adhere to the Translator API ‘Offer Terms and Privacy Policy’.
                    If you agree, check the box and press the Sign Up button.
                    You’ll then be taken to the page confirming that you’ve successfully subscribed to the service and the volume goes into effect at that time. In the next step, you’ll get your developer credentials from Windows Azure Marketplace, and you’ll use these when building your apps.
                </p>
                <p><strong>Step 3. Getting your Developer Credentials</strong></br>
                    This step assumes that you have:
                    · Completed Steps 1 and 2
                    · You have registered for a Windows Azure Marketplace account
                    · You have used your Marketplace account to subscribe to the Microsoft Translator API service.
                </p>
                <p><strong>Step 3.1. Registering your application on the Windows Azure Marketplace.</strong></br>
                    Sign in to <a href= "https://datamarket.azure.com/home/">https://datamarket.azure.com/home/</a>, and you’ll see the familiar welcome page.
                    At the bottom of the page, you’ll see a number of links, organized into columns.
                    One of these reads ‘Develop’, and under it you’ll see a link that says ‘Register your Application’.
                    Select this and you’ll be taken to the screen that allows you register your application.
                </p>
                <p><strong>Step 3.2. Getting your Client ID and Client Secret</strong></br>
                    You use this to get the Client ID and Client Secret values that your application will need to authenticate your service when you build your application.
                    · Fill out the Client ID, and Name fields.
                    · The Client Secret field is already completed for you. Do not change it.
                    · Fill out the ‘Redirect URI’ field with any valid URL that uses https, for example https://microsoft.com. This field is not used by the Microsoft Translator API.
                    · You can also leave the ‘Enable subdomain access’ checkbox unchecked, as Translator doesn’t use it.
                    Remember and note the Client ID and Client Secret fields. You will need these when you write your app.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="heading">
    <h2>Language Settings</h2>
</div>
<form name="default_lang" method="post" action="?default">
    <table class="table table-bordered table-striped manageUsersTable">
        <tr>
            <td>
                <input type="checkbox" name="checkall" onclick="checkUncheckAll(this);"/>
            </td>
            <td>ID</td>
            <td>Package Name</td>
            <td>Options</td>
        </tr>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['l_list'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['name'] = 'l_list';
$_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['language_list']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['total']);
?>
        <tr id="showWala">
            <td><label>
                <input type="checkbox" name="make_default" id="radio" value="<?php echo $_smarty_tpl->tpl_vars['language_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l_list']['index']]['language_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['language_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l_list']['index']]['language_default']=='yes') {?>checked="checked"<?php }?> onclick="document.default_lang.submit()"/></label>
            </td>
            <td><?php echo $_smarty_tpl->tpl_vars['language_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l_list']['index']]['language_id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['language_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l_list']['index']]['language_name'];?>
(<?php echo $_smarty_tpl->tpl_vars['language_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l_list']['index']]['language_code'];?>
)<?php if ($_smarty_tpl->tpl_vars['language_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l_list']['index']]['language_default']=='yes') {?> <span style="color: #cccccc"> as <i>Default Language</i></span><?php }?></td>
            <td>
                <div class="dropdown clearfix alignRight">
                    <button id="dropdownMenu1" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
                    Actions <i class="caret"></i></button>
                    <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1" role="menu">
                        <li role="presentation"><a role="menuitem" tabindex="-1"
                            href="?create_package=<?php echo $_smarty_tpl->tpl_vars['language_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l_list']['index']]['language_code'];?>
">Recreate Pack</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1"
                            href="?recreate_from_pack=<?php echo $_smarty_tpl->tpl_vars['language_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l_list']['index']]['language_code'];?>
" >Recreate from pack</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1"
                            href="?edit_language=<?php echo $_smarty_tpl->tpl_vars['language_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l_list']['index']]['language_id'];?>
" >Edit Phrases</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1"
                            href="?edit_language=<?php echo $_smarty_tpl->tpl_vars['language_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l_list']['index']]['language_id'];?>
">Edit</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1"
                            href="javascript:void(0)" onclick="if(confirm_it('Are you sure you want to delete \'<?php echo $_smarty_tpl->tpl_vars['language_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l_list']['index']]['language_name'];?>
\' pack')) window.location = '?delete=<?php echo $_smarty_tpl->tpl_vars['language_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l_list']['index']]['language_id'];?>
'">Delete</a>
                        <li role="presentation"><a role="menuitem" tabindex="-1"
                            href="?download=<?php echo $_smarty_tpl->tpl_vars['language_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l_list']['index']]['language_id'];?>
" target="_blank">Export</a></li>
                        <?php if ($_smarty_tpl->tpl_vars['language_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l_list']['index']]['language_active']!='yes') {?>
                        <li role="presentation"><a role="menuitem" tabindex="-1"
                            href="?action=activate&id=<?php echo $_smarty_tpl->tpl_vars['language_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l_list']['index']]['language_id'];?>
">Activate</a></li>
                        <?php }?>
                        <li role="presentation" class="divider"></li>
                        <?php if ($_smarty_tpl->tpl_vars['language_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l_list']['index']]['language_active']=='yes') {?>
                        <li role="presentation"><a role="menuitem" tabindex="-1"
                            href="?action=deactivate&id=<?php echo $_smarty_tpl->tpl_vars['language_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l_list']['index']]['language_id'];?>
">Deactivate</a>
                        </li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['language_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l_list']['index']]['language_default']!='yes') {?>
                        <li role="presentation"><a role="menuitem" tabindex="-1"
                            href="?make_default=<?php echo $_smarty_tpl->tpl_vars['language_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l_list']['index']]['language_id'];?>
">Make Default</a>
                        </li>
                        <?php } else { ?>
                        <li role="presentation" class="disabled"><a href="#">Make Default</a></li>
                        <?php }?>
                    </ul>
                </div>
            </td>
        </tr>
        <?php endfor; endif; ?>
    </table>
</form>
<!-- <div class="heading">
    <h2> Add New Language </h2>
    </div> -->
<!-- <div class="form-group">
    <form action="?import" method="post" enctype="multipart/form-data" name="import_language" id="import_language">
    <h4>Upload file</h4>
      <table>
        <tr><td>
            Browse ClipBucket Language File ( must be .xml format ) 
          <input type="file" name="lang_file" id="lang_file" class="marginBottomLarge" />
        </td></tr>
        <tr>
          <td>
          <input type="submit" name="add_language" id="add_language" value="Add Language" class="btn btn-primary" /></td>
        </tr>
        </table>
        </form>
    </div> -->
<?php } else { ?>
<span class="lead">Editing <?php echo $_smarty_tpl->tpl_vars['lang_details']->value['language_name'];?>
</span>
<div class="form-group">
    <form id="form1" name="form1" method="post" action="">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Language Name</label>
                    <input name="name" type="text" class="form-control" id="name" value="<?php echo $_smarty_tpl->tpl_vars['lang_details']->value['language_name'];?>
" />
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Language Code</label>
                    <input name="code" type="text" class="form-control" id="code" value="<?php echo $_smarty_tpl->tpl_vars['lang_details']->value['language_code'];?>
" />
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Language Regex</label>
                    <input name="regex" type="text" class="form-control" id="regex" value="<?php echo $_smarty_tpl->tpl_vars['lang_details']->value['language_regex'];?>
" />
                </div>
            </div>
        </div>
        <input type="submit" name="update_language" class="btn btn-primary" value="Update"  id="update_language"/>
    </form>
</div>
<legend>Editing <?php echo $_smarty_tpl->tpl_vars['lang_details']->value['language_name'];?>
 Phrases</legend>
<div class="form-group">
    <form id="form2" name="form1" method="get" action="?">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Phrase Code - Name</label>
                    <input name="varname" type="text" class="form-control" id="varname" value="<?php echo form_val($_GET['varname']);?>
" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Phrase Text</label>
                    <input name="text" class="form-control" type="text" id="text" value="<?php echo form_val($_GET['text']);?>
" />
                </div>
            </div>
        </div>
        <label>
        <input name="edit_language" type="hidden" value="<?php echo $_GET['edit_language'];?>
" />
        <input type="submit" name="search_phrase" class="btn btn-primary" value="Search"   id="search_phrase"/>
        </label>
    </form>
</div>
<table class="table table-bordered table-striped manageUsersTable">
    <tr>
        <td>
            <legend>Phrase Code</legend>
        </td>
        <td>
            <legend>Phrase</legend>
        </td>
    </tr>
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['p_list'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['name'] = 'p_list';
$_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['lang_phrases']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['p_list']['total']);
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['lang_phrases']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p_list']['index']]['varname'];?>
</td>
        <td ><span class="xedit" id="<?php echo $_smarty_tpl->tpl_vars['lang_phrases']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p_list']['index']]['id'];?>
"  ><?php echo $_smarty_tpl->tpl_vars['lang_phrases']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p_list']['index']]['text'];?>
</span> 
            <span class="btn btn-success btn-xs edit_phrase " title="edit" id="edit-<?php echo $_smarty_tpl->tpl_vars['lang_phrases']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p_list']['index']]['id'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['lang_phrases']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p_list']['index']]['id'];?>
"><i class="glyphicon glyphicon-edit"></i></span>
            <span class="glyphicon glyphicon-ok-circle add_phrase" id="ok-<?php echo $_smarty_tpl->tpl_vars['lang_phrases']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p_list']['index']]['id'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['lang_phrases']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p_list']['index']]['id'];?>
" style="display:none;color:#87b87f;font-size:1.5em;cursor:pointer"></span>&nbsp;&nbsp;&nbsp;
            <span class="glyphicon glyphicon-remove-circle remove_phrase" id="remove-<?php echo $_smarty_tpl->tpl_vars['lang_phrases']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p_list']['index']]['id'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['lang_phrases']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p_list']['index']]['id'];?>
" style="display:none;color:#d15b47;font-size:1.5em;cursor:pointer"></span>
            <input type="text" class="form-control" id="input-<?php echo $_smarty_tpl->tpl_vars['lang_phrases']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p_list']['index']]['id'];?>
" name="pk" value="<?php echo $_smarty_tpl->tpl_vars['lang_phrases']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p_list']['index']]['text'];?>
" 
                style="display:none;"> 
        </td>
    </tr>
    <?php endfor; endif; ?>
</table>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/pagination.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<div class="heading">
    <h2>Add Languages </h2>
</div>
<!-- language select option for translation -->
<select name="lang_option" class="changeStatus" id="lang_option"style="width:30%">
    <option value="de" data-check="German">German</option>
    <option value="ar" data-check="Arabic">Arabic</option>
    <option value="bs-Latn" data-check="Bosnian (Latin)">Bosnian (Latin)</option>
    <option value="bg" data-check="Bulgarian">Bulgarian</option>
    <option value="ca" data-check="Catalan">Catalan</option>
    <option value="zh-CHS" data-check="Chinese-Simplified">Chinese Simplified</option>
    <option value="zh-CHT" data-check="Chinese-Traditional">Chinese Traditional</option>
    <option value="hr" data-check="Croatian">Croatian</option>
    <option value="cs" data-check="Czech">Czech</option>
    <option value="da" data-check="Danish">Danish</option>
    <option value="nl" data-check="Dutch">Dutch</option>
    <option value="et" data-check="Estonian">Estonian</option>
    <option value="fi" data-check="Finnish">Finnish</option>
    <option value="fr" data-check="French">French</option>
    <option value="el" data-check="Greek">Greek</option>
    <option value="ht" data-check="Haitian-Creole">Haitian Creole</option>
    <option value="he" data-check="Hebrew">Hebrew</option>
    <option value="hi" data-check="Hindi">Hindi</option>
    <option value="mww" data-check="Hmong-Daw">Hmong Daw</option>
    <option value="hu" data-check="Hungarian">Hungarian</option>
    <option value="id" data-check="Indonesian">Indonesian</option>
    <option value="it" data-check="Italian">Italian</option>
    <option value="ja" data-check="Japanese">Japanese</option>
    <option value="sw" data-check="Kiswahili">Kiswahili</option>
    <option value="tlh" data-check="Klingon">Klingon</option>
    <option value="tlh-Qaak" data-check="Klingon(pIqaD)">Klingon(pIqaD)</option>
    <option value="ko" data-check="Korean">Korean</option>
    <option value="lv" data-check="Latvian">Latvian</option>
    <option value="lt" data-check="Lithuanian">Lithuanian</option>
    <option value="ms" data-check="Malay">Malay</option>
    <option value="mt" data-check="Maltese">Maltese</option>
    <option value="no" data-check="Norwegian">Norwegian</option>
    <option value="fa" data-check="Persian">Persian    </option>
    <option value="pl" data-check="Polish">Polish</option>
    <option value="pt" data-check="Portuguese">Portuguese</option>
    <option value="otq" data-check="Querétaro-Otomi">Querétaro Otomi</option>
    <option value="ro" data-check="Romanian">Romanian</option>
    <option value="ru" data-check="Russian">Russian</option>
    <option value="sr-Cyrl" data-check="Serbian(Cyrillic)">Serbian(Cyrillic)</option>
    <option value="sr-Latn" data-check="Serbian(Latin)">Serbian(Latin)</option>
    <option value="sk" data-check="Slovak">Slovak</option>
    <option value="sl" data-check="Slovenian">Slovenian</option>
    <option value="es" data-check="Spanish">Spanish</option>
    <option value="sv" data-check="Swedish">Swedish</option>
    <option value="th" data-check="Thai">Thai</option>
    <option value="tr" data-check="Turkish">Turkish</option>
    <option value="uk" data-check="Ukrainian">Ukrainian</option>
    <option value="ur" data-check="Urdu">Urdu</option>
    <option value="vi" data-check="Vietnamese">Vietnamese</option>
    <option value="cy" data-check="Welsh">Welsh</option>
    <option value="yua" data-check="Yucatec-Maya">Yucatec Maya</option>
</select>
<input type="button" id="submit_lang1" name="lang" class="btn btn-primary" value="Generate Pack"/>
<div id="uploadPack" style="display: none;">
    <p><strong>Importing Language Pack. Please sit back and relax while magic happens.</strong></p>
</div>
<!-- Progress Bar  -->
<div class="col-md-12" id="bar" style="display:none; margin-top: 20px">
<h3>Current Progress</h3>
    <div class="progress">
        <div class="progress-bar" id="progress-bar"role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
            <span id="loaderVal"></span>
        </div>
    </div>
</div>


<div id="progMsg" style="display: none"></div>

<div id= "lang-pack">
</div>

<div id = "lang-ex">
</div>
<div id= "div"></div>
<div id="ref"></div>
</br>
<script type="text/javascript">
    
    var process,progress,lastElementArray = 0;
    var progress = 0;
    var NewLang,langExists,sizeOfArray;
    var percentPakro,allTextLines = [];  
    var set=true;
    var sec = <?php echo $_smarty_tpl->tpl_vars['secret_Id']->value;?>
;
    var firstHit = true;
    var dialogLangPack= $('<div class="alert-msg-holder" id="headErr"><div role="alert" class="alert alert-success alert-dismissible alert-ajax"><button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button><strong>Language Pack Uploaded </strong></div></div>');
    var log = $('<div class="alert-msg-holder" id="headErr"><div role="alert" class="alert alert-danger alert-dismissible alert-ajax"><button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button><strong>Invalid keys stored in database </strong></div></div>');
    
    var dialogLangExisit = $('<div class="alert-msg-holder"  id="lang-exist"><div role="alert" class="alert alert-danger alert-dismissible alert-ajax"><button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button><strong>Language Already Exisits </strong></div></div>');
    var UploadText = $('<p><strong>Importing Language Pack. Please sit back and relax while magic happens.</strong></p>');
    
    var refresh_ch = $('<div class="alert-msg-holder"  id="lang-exist"><div role="alert" class="alert alert-danger alert-dismissible alert-ajax"><button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button><strong>Refresh to set cookie </strong></div></div>');
    function timeCheck(){
         process = setInterval(function() {
                $.get(baseurl+'/files/percent.lang', function(data) {
               //process text file line by line
               allTextLines = data.split(/\r\n|\n/);
               lastElementArray = allTextLines.slice(-2, -1)[0];
                 if(lastElementArray == 99){
                lastElementArray = 100;
               }
               console.log(lastElementArray);
            });
        },1000);
    }
    
    /*function readLate(){
        lastElementArray == 100;
        $('#loaderVal').text(lastElementArray+'%');
        $('.progress-bar').css('width',lastElementArray+'%');
        $('#progress-bar').attr('class','progress-bar progress-bar-success');
        $("#bar").delay(2000).fadeOut("slow",function(){
              $( "#progress-bar").removeClass("progress-bar progress-bar-success").addClass( "progress-bar");
              //lastElementArray = 0;
            $('#loaderVal').text(lastElementArray+'%');
            $('#progress-bar').css('width',lastElementArray+'%');
    
        });
        clearInterval(process);
        $('#lang_option').toggle();
        $('#headErr').css('display','block').delay(1000);
        $('#lang-pack').html(dialogLangPack);
    
    }*/

    var goodToGo = true;

    function checkExists(){
        clearInterval(process);
        $('#lang-ex').append(dialogLangExisit);
        clearInterval(progress);
        $('#bar').toggle();
        $('#lang_option').toggle();
        $('#uploadPack').toggle();
        $('#submit_lang1').toggle();
    }
    $(document).ready(function(){
    
        $('.edit_phrase').on("click",function(){
            var _this = $(this);
            var id = _this.data('id');
            console.log('yes');
            $('#input-'+id).show();
            $('#ok-'+id).show();
            $('#remove-'+id).show();
            $('#edit-'+id).hide();
        });
    
    
        $('.remove_phrase').on("click",function(){
            var _this = $(this);
            var id = _this.data('id');
            $('#input-'+id).hide();
            $('#ok-'+id).hide();
            $('#remove-'+id).hide();
             $('#edit-'+id).show();
        });
    
        $('.add_phrase').on("click",function(){
    
            var _this = $(this);
            var id = _this.data('id');
            var value = $('#input-'+id).val();
            var pk = id;
            console.log('value==>'+value);
            console.log('id==>'+id);
            $.ajax({
                url: "<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/actions/update_phrase.php",
                type: "post",
                data: { pk: pk, value: value},
                success : function()
                {
                    $('#'+id).html(value);
                    $('#input-'+id).hide();
                    $('#ok-'+id).hide();
                    $('#remove-'+id).hide();
                     $('#edit-'+id).show();
                }
            });
    
        });
    })

    thePhrases = <?php echo json_encode($_smarty_tpl->tpl_vars['langData']->value);?>
;
    var cleanRunway = true,
    totalPhrases = 0,
    phraseNum = 1,
    interval = '',
    currentKey = 0,
    phrase_code = Object.keys(thePhrases)[0],
    phrase = thePhrases[phrase_code],
    selectFieldValue = $('.changeStatus').val(),
    langDetect = $('option:selected', '#lang_option').attr('data-check');
    $.each( thePhrases, function( phrase_code, phrase ) {
            totalPhrases = totalPhrases + 1;
    });

    function sendAjax(data) {
        goodToGo = false;
        $.ajax({
            //async: false,
            url: 'ajaxLang.php', 
            type: "post",
            data: data,
            dataType: 'json',
            beforeSend: function() {
                },
            success:function(xhr) {
                
                if (xhr.phrase != 'aye') {

                    var progressNow = xhr.progress,
                    existingLog = $('#progMsg').html();
                    $('#bar').show();
                    $('#progMsg').show();
                    $('#loaderVal').text(progressNow);
                    $('.progress-bar').attr('aria-valuenow',progressNow);
                    $('.progress-bar').css('width', progressNow+"%");

                    $('#progMsg').html(existingLog+"<br>Translated : "+xhr.phrase+" ( phrase #"+phraseNum+" out of "+totalPhrases+" phrases )");

                    currentKey = currentKey + 1;
                    phrase_code = Object.keys(thePhrases)[currentKey];
                    phrase = thePhrases[phrase_code];
                    phraseNum = phraseNum + 1;

                    data = {
                     'selectFieldValue': $('#lang_option').val(),
                     'langDetect': $('#lang_option option:selected').attr('data-check'),
                     'phrase_code' : phrase_code,
                     'phrase' : phrase,
                     'totalPhrases' : totalPhrases,
                     'phraseNum' : phraseNum
                    }

                    sendAjax(data);
                } else {
                    $('#submit_lang1').text('Successfully completed');
                }
                if (!xhr.status == 'success') {
                    alert("Unable to translate "+phrase);
                }
                //alert("NOW");
                goodToGo = true;
                return true;
            }
        });
    }


    $(document).on("click", "#submit_lang1", function () {  
        $('#submit_lang1').text("Translating...");
        $('#lang_option, #submit_lang1').attr("disabled",true);

        data = {
             'selectFieldValue': $('#lang_option').val(),
             'langDetect': $('#lang_option option:selected').attr('data-check'),
             'phrase_code' : phrase_code,
             'phrase' : phrase,
             'totalPhrases' : totalPhrases,
             'phraseNum' : phraseNum
            }
            
            //console.log(data);
            sendAjax(data);
            

            phraseNum = phraseNum + 1;
        
  });

/*  $(document).on("click", "#submit_lang1", function () {
    if($.cookie('bing_access_token') != null){ 
        var selectFieldValue = $('select.changeStatus').val();
       var langDetect = $('option:selected', '#lang_option').attr('data-check');
    
     //var len = sec.toString();
      var lenghtOfKey = sec.length;      
        data = {
         'selectFieldValue': selectFieldValue,
         'langDetect': langDetect,
        }
       if(lenghtOfKey>10){
            $.ajax({
                url: 'ajaxLang.php', 
                type: "post",
                data: data,
                dataType: 'json',
                beforeSend: function() {
                    if(set != false){
                       $('#bar').toggle();
                       $('#lang_option,#submit_lang1').toggle();
                       $('#uploadPack').toggle();
                       timeCheck();
                        progress = setInterval(function() {
                            if(lastElementArray == undefined){
                                lastElementArray = 0;
                            }
                            $('#loaderVal').text(lastElementArray+'%');
                            $('.progress-bar').css('width',lastElementArray+'%');
                           if(lastElementArray == 99) {
                               clearInterval(progress);
                               lastElementArray = 100;
                            }
                        }, 1000);
                    }   
                    
                    },
                success:function(xhr) {
                    set = xhr.set;
                    $('#lang_option,#submit_lang1').toggle();
                    if(xhr.message == null){
                        if(lastElementArray != 100){
                            readLate();
                        } else {
                            readLate();
                        }
                        window.location.href = baseurl+"/admin_area/language_settings.php";
                    }
                    else {
                        checkExists();
                    }
                }
            })
        } else {
            $('#div').html(log);
        }  
      } else {
        $('#ref').html(refresh_ch);
      }
    });*/
    
</script><?php }} ?>
