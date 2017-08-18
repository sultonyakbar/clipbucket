<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 09:40:29
         compiled from "C:\xampp\htdocs\clipbucket\admin_area\styles\cb_2014\layout\main.html" */ ?>
<?php /*%%SmartyHeaderCode:317505993f6ed47aa21-77599827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9982f733365f2c21d8c769d4cbf2046e85a12756' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\admin_area\\styles\\cb_2014\\layout\\main.html',
      1 => 1502865810,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '317505993f6ed47aa21-77599827',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'row' => 0,
    'Cbucket' => 0,
    'countries' => 0,
    'code' => 0,
    'country' => 0,
    'timezone_abbreviations' => 0,
    'timeZone' => 0,
    'tz' => 0,
    'baseurl' => 0,
    'opt_list' => 0,
    'opt' => 0,
    'uploadOptId' => 0,
    'imageurl' => 0,
    'upload_max_size' => 0,
    'post_max_size' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5993f6edcbf380_22677143',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5993f6edcbf380_22677143')) {function content_5993f6edcbf380_22677143($_smarty_tpl) {?><div class="heading">
  <h2>Website Configuration</h2>
</div>
<script>
  var current_tab = '';
  var current_div = '';
  function display_tab(Li,divid)
  { 
    if(current_tab!='')
      $(current_tab).attr("class","");
    if(current_div!='') 
      $('#'+current_div).hide();
      
    $(Li).attr("class","active");
    $('#'+divid).show();
    
    window.location.hash = 'current_'+divid.substr(4,3);
    $("#main_form").attr("action",window.location.hash); 
    
    current_tab = Li;
    current_div = divid;
    return false;
  }
</script>
<script language="javascript">
  
  $(document).ready(function(){
  	
  	var thehash = window.location.hash.substr(9,3);
  	$("#tabbed_div > div").hide();
  	if(thehash=='')
  	{
  		display_tab('#tab_1','div_1');
  	}else{
  		display_tab('#tab_'+thehash,'div_'+thehash);
  	}
  	
  	
  	$('#convProfile').change(function
  	(){
  		var value = $("#convProfile option:selected").val();
  		if(value>0)
  			setVdoSettings(value);
  	});
  	
  	function setVdoSettings(inType)
  	{
  		switch(inType)
  		{
  			default:
  			{

  				var convConfigs = { 
  				  'video_codec': 'libx264', 
  				  'audio_codec': 'libfaac' ,
  				  'vrate' : '25',
  				  'vbrate' : '512000',
  				  'srate' : '22050',
  				  'sbrate' : '128000',
  				}; 
  			}
  			break;
  			
  			case '2':
  			{
  				var convConfigs = { 
  				  'video_codec': 'flv', 
  				  'audio_codec': 'libmp3lame' ,
  				  'vrate' : '25',
  				  'vbrate' : '512000',
  				  'srate' : '22050',
  				  'sbrate' : '128000',
  				}; 
  			}
  			break;
  			
  			case '3':
  			{
  				var convConfigs = { 
  				  'video_codec': 'libx264', 
  				  'audio_codec': 'libfaac' ,
  				  'vrate' : '30',
  				  'vrate' : '30',
  				  'vbrate' : '640000',
  				  'srate' : '44100',
  				  'sbrate' : '320000',
  				}; 
  			}
  			break;
  			
  			case '4':
  			{
  				var convConfigs = { 
  				  'video_codec': 'flv', 
  				  'audio_codec': 'libmp3lame' ,
  				  'vrate' : '25',
  				  'vbrate' : '256000',
  				  'srate' : '22050',
  				  'sbrate' : '96000',
  				}; 
  			}
  			break;
  			
  		}
  		
  		$.each(convConfigs,function(index,value){
  			$('#'+index).val(value);
  		});	
  	}
  });
  
</script>

<ul class="nav nav-tabs mainTabs">
  <li onClick='display_tab(this,"div_1",true)' id="tab_1"> <a href="#">Website Settings</a></li>
  <li onClick='display_tab(this,"div_2",true)' id="tab_2"><a href="#">Uploading and Conversion Settings</a></li>
  <li onClick='display_tab(this,"div_3",true)' id="tab_3"><a href="#">Display and Listing Settings</a></li>
  <li onClick='display_tab(this,"div_4",true)' id="tab_4"><a href="#">User Settings &amp; registration</a></li>
</ul>

<form name="form1" method="post" action="" id="main_form">
  <input name="baseurl" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['baseurl'];?>
" type="hidden" />
  <input name="basedir" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['baseurl'];?>
" type="hidden" />
  
  <div id="tabbed_div">
      <div id="div_1" class="main_page_div">
      <div class="row">
        <div class="col-md-4">
          <label for="site_title">Website title</label>
          <input class="form-control" name="site_title" type="text" id="site_title" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['site_title'];?>
" size="45">
        </div>
        <div class="col-md-4">
          <label for="site_slogan">Website slogan</label>
          <input class="form-control" name="site_slogan" type="text" id="site_slogan" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['site_slogan'];?>
" size="45">
        </div>
          <div class="col-md-4">
              <label for="select">Website closed</label>
              <label class="pull-right inline">
                  <input value="1" id="select" <?php if ($_smarty_tpl->tpl_vars['row']->value['closed']=='1') {?>checked="checked"<?php }?>  name="closed"  type="checkbox" class="ace ace-switch ace-switch-5 bootstrap-switch-on">
                  <span class="lbl"></span>
              </label>
              <hr>
              </div>
        </div>
      <div class="row">
        <div class="col-md-4">
          <label for="closed_msg">Closed message</label>
          <textarea class="form-control" name="closed_msg" id="closed_msg" cols="45" rows="5"><?php echo $_smarty_tpl->tpl_vars['row']->value['closed_msg'];?>
</textarea>
        </div>
        <div class="col-md-4">
          <label for="description">Meta Description</label>
          <textarea class="form-control" name="description" id="description" cols="45" rows="5"><?php echo $_smarty_tpl->tpl_vars['row']->value['description'];?>
</textarea>
        </div>
          <div class="col-md-4">
              <label for="">Delete Mass upload</label>
              <label class="pull-right inline">
                  <?php echo $_smarty_tpl->tpl_vars['row']->value['delete_mass_upload'];?>

                  <input value="yes"  name="delete_mass_upload" id="select2" <?php if ($_smarty_tpl->tpl_vars['row']->value['delete_mass_upload']=='yes') {?>checked="checked"<?php }?> type="checkbox" class="ace ace-switch ace-switch-5">
                <span class="lbl"></span>
              </label>
              <hr>
                 <label for="">SEO Urls</label>
              <label class="pull-right inline">
                  <?php echo $_smarty_tpl->tpl_vars['row']->value['seo'];?>

                  <input value="yes"  name="seo" id="select2" <?php if ($_smarty_tpl->tpl_vars['row']->value['seo']=='yes') {?>checked="checked"<?php }?> type="checkbox" class="ace ace-switch ace-switch-5">
                <span class="lbl"></span>
              </label>
              <hr>
              <label for="use_subs">Use Sub-Categories</label>
              <label class="pull-right inline">
                  <input value="1" name="use_subs" id="use_subs" <?php if ($_smarty_tpl->tpl_vars['row']->value['use_subs']=='1') {?>checked="checked"<?php }?> type="checkbox" class="ace ace-switch ace-switch-5">
                  <span class="lbl"></span>
              </label>
              <hr>
              <label for="show_collapsed_checkboxes">Collpase Category Checkboxes</label>
              <label class="pull-right inline">
                  <input value="1"  name="show_collapsed_checkboxes" id="show_collapsed_checkboxes" <?php if ($_smarty_tpl->tpl_vars['row']->value['show_collapsed_checkboxes']=='1') {?>checked="checked"<?php }?> type="checkbox" class="ace ace-switch ace-switch-5">
               <span class="lbl"></span>
              </label>
              <span class="smallText" style="font-size:11px;">If selected <strong>YES</strong>, Categories shown while uploading <strong>video</strong> will be collapsed.</span>
              <hr>
          </div>
        </div>


      <div class="row">
        <div class="col-md-4">
            <label for="keywords">Meta Keywords</label>
            <input class="form-control" name="keywords" type="text" id="keywords" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['keywords'];?>
" size="45" /></td>
        </div>
        <div class="col-md-4">
            <label for="default_country_iso2">Default Country</label>
            <select class="form-control" name="default_country_iso2" id="default_country_iso2">
                <?php if (isset($_smarty_tpl->tpl_vars['countries'])) {$_smarty_tpl->tpl_vars['countries'] = clone $_smarty_tpl->tpl_vars['countries'];
$_smarty_tpl->tpl_vars['countries']->value = $_smarty_tpl->tpl_vars['Cbucket']->value->get_countries('iso2'); $_smarty_tpl->tpl_vars['countries']->nocache = null; $_smarty_tpl->tpl_vars['countries']->scope = 0;
} else $_smarty_tpl->tpl_vars['countries'] = new Smarty_variable($_smarty_tpl->tpl_vars['Cbucket']->value->get_countries('iso2'), null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['country']->key;
?>
                <option  <?php if ($_smarty_tpl->tpl_vars['code']->value==$_smarty_tpl->tpl_vars['row']->value['default_country_iso2']) {?> selected="selected" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
">
                <?php echo $_smarty_tpl->tpl_vars['country']->value;?>

                </option>
                <?php } ?>
            </select>
        </div>
          <div class="col-md-4">
              <label for="allow_language_change">Allow language change</label>
              <label class="pull-right inline">
                  <input value="1" name="allow_language_change" id="allow_language_change" <?php if ($_smarty_tpl->tpl_vars['row']->value['allow_language_change']=='1') {?>checked="checked"<?php }?> type="checkbox" class="ace ace-switch ace-switch-5">
                  <span class="lbl"></span>
              </label>
              <hr>
              <label for="allow_template_change">Allow template change</label>
              <label class="pull-right inline">
                  <input value="1" name="allow_template_change" id="allow_template_change" <?php if ($_smarty_tpl->tpl_vars['row']->value['allow_template_change']==1) {?>checked="checked"<?php }?> type="checkbox" class="ace ace-switch ace-switch-5">
                  <span class="lbl"></span>
              </label>
          </div>
        </div>
      <div class="row">
        <div class="col-md-4">
          <label for="date_format">Date Format</label>
          <input class="form-control" name="date_format" type="text" id="date_format" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['date_format'];?>
" size="45" />
        </div>

        <div class="col-md-4">
          <label for="default_time_zone">Default time zone</label>

          <select class="form-control" name="default_time_zone" id="default_time_zone">
            <?php if (isset($_smarty_tpl->tpl_vars['timezone_abbreviations'])) {$_smarty_tpl->tpl_vars['timezone_abbreviations'] = clone $_smarty_tpl->tpl_vars['timezone_abbreviations'];
$_smarty_tpl->tpl_vars['timezone_abbreviations']->value = DateTimeZone::listAbbreviations(); $_smarty_tpl->tpl_vars['timezone_abbreviations']->nocache = null; $_smarty_tpl->tpl_vars['timezone_abbreviations']->scope = 0;
} else $_smarty_tpl->tpl_vars['timezone_abbreviations'] = new Smarty_variable(DateTimeZone::listAbbreviations(), null, 0);?>
           <?php  $_smarty_tpl->tpl_vars['timeZone'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['timeZone']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['timezone_abbreviations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['timeZone']->key => $_smarty_tpl->tpl_vars['timeZone']->value) {
$_smarty_tpl->tpl_vars['timeZone']->_loop = true;
?>
                <?php  $_smarty_tpl->tpl_vars['tz'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tz']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['timeZone']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tz']->key => $_smarty_tpl->tpl_vars['tz']->value) {
$_smarty_tpl->tpl_vars['tz']->_loop = true;
?>
 						<option value="<?php echo $_smarty_tpl->tpl_vars['tz']->value['timezone_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['default_time_zone']==$_smarty_tpl->tpl_vars['tz']->value['timezone_id']) {?> selected="selected"<?php }?>>(GMT <?php echo round($_smarty_tpl->tpl_vars['tz']->value['offset']/3600);?>
) <?php echo $_smarty_tpl->tpl_vars['tz']->value['timezone_id'];?>
</option>
  				<?php } ?>
					<?php } ?>
          </select>
        </div>

        </div>
      <hr>

      <div class="tabbable">
      <ul class="nav nav-tabs" id="myTab">
          <li class="active">
              <a data-toggle="tab" href="#esettings">
                  Email Settings

              </a>
          </li>
          <li class="">
              <a data-toggle="tab" href="#comments">

                  Comments
              </a>
          </li>
          <li class="">
              <a data-toggle="tab" href="#videos">

                  Video Settings
              </a>
          </li>
          <li class="">
              <a data-toggle="tab" href="#channelsphotos">

                  Channels & Photos
              </a>
          </li>
         <!--  <li class="">
             <a data-toggle="tab" href="#groups">
         
                 Groups
             </a>
         </li> -->
          <li class="">
              <a data-toggle="tab" href="#general">

                  General
              </a>
          </li>
      </ul>
      <div class="tab-content">
      <div id="esettings" class="tab-pane active">
          <h2>Emails</h2>
            <div class="row">
          <div class="col-md-4">
              <label for="website_email">Website Email</label>
              <input class="form-control" name="website_email" type="text" id="website_email" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['website_email'];?>
" size="45" />
          </div>
          <div class="col-md-4">
              <label for="support_email">Support Email</label>
              <input class="form-control" name="support_email" type="text" id="support_email" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['support_email'];?>
" size="45" />
          </div>
          <div class="col-md-4">
              <label for="welcome_email">Welcome Email</label>
              <input class="form-control" name="welcome_email" type="text" id="welcome_email" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['welcome_email'];?>
" size="45" />
          </div>
                </div>
          <br>
          <div class="row">
          <div class="col-md-4">
              <label for="send_comment_notification">Send Comment Notification
                  <?php echo $_smarty_tpl->tpl_vars['row']->value['send_comment_notification'];?>

                  <input value="yes" name="send_comment_notification" id="send_comment_notification"  <?php if ($_smarty_tpl->tpl_vars['row']->value['send_comment_notification']=='yes') {?> checked="checked"<?php }?> type="checkbox" class="ace ace-switch ace-switch-5">
                 <span class="lbl"></span>
              </label>
          </div>
          <div class="col-md-4">
              <label for="approve_video_notification">Send Video Approve Notification
                  <?php echo $_smarty_tpl->tpl_vars['row']->value['approve_video_notification'];?>

                  <input value="yes" name="approve_video_notification" id="approve_video_notification" <?php if ($_smarty_tpl->tpl_vars['row']->value['approve_video_notification']=='yes') {?>checked="checked"<?php }?> type="checkbox" class="ace ace-switch ace-switch-5">
                    <span class="lbl"></span>
              </label>
          </div>
              </div>
      </div>

      <div id="comments" class="tab-pane">
          <h2>Comments</h2>
            <div class="row">
          <div class="col-md-4">
              <div class="checkbox">
                  <label>
                      <input name="video_comments" type="checkbox" id="video_comments" value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['video_comments']=='1') {?>checked="checked"<?php }?> />
                      Allow video comments
                  </label>
              </div>

              <label>
                  <input name="channel_comments" type="checkbox" id="channel_comments" value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['channel_comments']=='1') {?>checked="checked"<?php }?> /> Allow channel comments
              </label>
                <br>
              <label>
                  <input name="anonym_comments" type="checkbox" id="anonym_comments" value="yes" <?php if ($_smarty_tpl->tpl_vars['row']->value['anonym_comments']=='yes') {?>checked<?php }?> /> Allow guests to comment
              </label>
              <br>
              <label>
                  <input name="comment_rating" type="checkbox" id="comment_rating" value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['comment_rating']=='1') {?>checked="checked"<?php }?> /> Allow comments rating
              </label>
          </div>
          <div class="col-md-4">
              <label for="max_comment_chr">Maximum Comment Characters</label>
              <input class="form-control" name="max_comment_chr" type="text" id="max_comment_chr" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['max_comment_chr'];?>
" size="15" maxlength="5" />
          </div>

          <div class="col-md-4">
              <label for="comments_captha">Comments captcha</label>
              <div class="radio">
                  <label>
                      <input type="radio" name="comments_captcha" value="all" id="comments_captcha_0"
                      <?php if ($_smarty_tpl->tpl_vars['row']->value['comments_captcha']=='all') {?> checked="checked"<?php }?> />
                      For Everyone
                  </label>
              </div>
              <div class="radio">
                  <label>
                      <input type="radio" name="comments_captcha" value="guests" id="comments_captcha_1"
                      <?php if ($_smarty_tpl->tpl_vars['row']->value['comments_captcha']=='guests') {?> checked="checked"<?php }?> />
                      For Guests Only
                  </label>
              </div>
              <div class="radio">
                  <label>
                      <input type="radio" name="comments_captcha" value="none" id="comments_captcha_2"
                      <?php if ($_smarty_tpl->tpl_vars['row']->value['comments_captcha']=='none') {?> checked="checked"<?php }?> />
                      Disable
                  </label>
              </div>
          </div>
              </div>
      </div>

      <div id="videos" class="tab-pane">
          <h2>Videos</h2>
          <div class="row">
          <div class="col-md-4">
              <label for="videoSelection">Enable video selection</label>
              <select name="videosSection" id="videosSection" class="form-control">
                  <option value="yes" <?php if ($_smarty_tpl->tpl_vars['row']->value['videosSection']!='no') {?> selected="selected"<?php }?>>Yes</option>
                  <option value="no" <?php if ($_smarty_tpl->tpl_vars['row']->value['videosSection']=='no') {?> selected="selected"<?php }?>>No</option>
              </select>
          </div>

          <div class="col-md-4">
              <label for="facebook_embed">Enable facebook embed</label>
              <select name="facebook_embed" id="facebook_embed" class="form-control">
                  <option value="yes" <?php if ($_smarty_tpl->tpl_vars['row']->value['facebook_embed']!='no') {?> selected="selected"<?php }?>>Yes</option>
                  <option value="no" <?php if ($_smarty_tpl->tpl_vars['row']->value['facebook_embed']=='no') {?> selected="selected"<?php }?>>No</option>
              </select>
          </div>
            <div class="col-md-4">
          <div class="checkbox">
              <label for="video_embed">
                  <input name="video_embed" type="checkbox" id="video_embed" value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['video_embed']=='1') {?> checked="checked"<?php }?> />Allow video embedding</label>
          </div>

          <div class="checkbox">
              <label for="video_download">
                  <input name="video_download" type="checkbox" id="video_download" value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['video_download']=='1') {?>checked="checked"<?php }?> />Allow video download
              </label>
          </div>
            </div>
          <div class="col-md-4">
              <label for="php_path8">Max categories for each video</label>
              <input class="form-control" name="video_categories" type="text" id="php_path8" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['video_categories'];?>
" size="15" maxlength="5" />
          </div>
         


          <!-- changes made -->
          <div class="col-md-4">
              <label for="video_round_views">Enable round views on watch video page</label>
              <select name="video_round_views" id="video_round_views" class="form-control">
                  <option value="yes" <?php if ($_smarty_tpl->tpl_vars['row']->value['video_round_views']!='no') {?> selected="selected"<?php }?>>Yes</option>
                  <option value="no" <?php if ($_smarty_tpl->tpl_vars['row']->value['video_round_views']=='no') {?> selected="selected"<?php }?>>No</option>
              </select>
          </div>
          <!-- changes made -->




              </div>
            <div class="row">
          <div class="col-md-4">
              <label for="vid_cat_width">Category Width</label>
              <input class="form-control" type="text" name="vid_cat_width" id="vid_cat_width" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['vid_cat_width'];?>
" />
              <label for="vid_cat_height">Category height</label>
              <input class="form-control" type="text" name="vid_cat_height" id="vid_cat_height" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['vid_cat_height'];?>
"/>
          </div>

          <div class="col-md-4">
              <label for="embed_type">Embed Type</label>
              <select class="form-control" name="embed_type" id="embed_type">
                  <option value="iframe" <?php if ($_smarty_tpl->tpl_vars['row']->value['embed_type']=='iframe') {?> selected="selected"<?php }?>>Iframe</option>
                  <option value="embed_object" <?php if ($_smarty_tpl->tpl_vars['row']->value['embed_type']=='embed_object') {?> selected="selected"<?php }?>>Embed object</option>
              </select>
          </div>

          <div class="col-md-4">
              <h4>Seo video url pattern</h4>
              <div class="radio">
                  <label>
                      <input type="radio" name="seo_vido_url" value="0" id="seo_vido_url_0"
                      <?php if (!$_smarty_tpl->tpl_vars['row']->value['seo_vido_url']||$_smarty_tpl->tpl_vars['row']->value['seo_vido_url']==0) {?> checked="checked"<?php }?>  />
                      <?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/video/ABCDXYZ/video-title
                  </label>
              </div>
              <div class="radio">
                  <label>
                      <input type="radio" name="seo_vido_url" value="1" id="seo_vido_url_1"
                      <?php if ($_smarty_tpl->tpl_vars['row']->value['seo_vido_url']==1) {?> checked="checked"<?php }?>/>
                      <?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/video-title-v123
                  </label>
              </div>
              <div class="radio">
                  <label>
                      <input type="radio" name="seo_vido_url" value="2" id="seo_vido_url_2"
                      <?php if ($_smarty_tpl->tpl_vars['row']->value['seo_vido_url']==2) {?> checked="checked"<?php }?>/>
                      <?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/video/123/video-title
                  </label>
              </div>
              <div class="radio">
                  <label>
                      <input type="radio" name="seo_vido_url" value="3" id="seo_vido_url_3"
                      <?php if ($_smarty_tpl->tpl_vars['row']->value['seo_vido_url']==3) {?> checked="checked"<?php }?>/>
                      <?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/video/123_video-title
                  </label>
              </div>
              </div>
          </div>
          </div>
      <div id="channelsphotos" class="tab-pane">
          <div class="row">
              <div class="col-md-6">
          <h2>Channels</h2>
          <div class="form-group1">
              <label for="channelSelection">Enable Channels</label>
              <select class="form-control" name="channelsSection" id="channelsSection">
                  <option value="yes" <?php if ($_smarty_tpl->tpl_vars['row']->value['channelsSection']!='no') {?> selected="selected"<?php }?>>Yes</option>
                  <option value="no" <?php if ($_smarty_tpl->tpl_vars['row']->value['channelsSection']=='no') {?> selected="selected"<?php }?>>No</option>
              </select>
          </div>
                  </div>
            <div class="col-md-6">
          <h2>Photos</h2>
          <div class="form-group1">
              <label for="photosSelection">Enable photos</label>
              <select class="form-control" name="photosSection" id="photosSection">
                  <option value="yes" <?php if ($_smarty_tpl->tpl_vars['row']->value['photosSection']!='no') {?> selected="selected"<?php }?>>Yes</option>
                  <option value="no" <?php if ($_smarty_tpl->tpl_vars['row']->value['photosSection']=='no') {?> selected="selected"<?php }?>>No</option>
              </select>
          </div>
                </div>
      </div>
          </div>
    <!--   <div id="groups" class="tab-pane">
        <h2>Groups</h2>
          <div class="row">
        <div class="col-md-4">
            <label for="groupsSelection">Enable group selection</label>
            <select class="form-control" name="groupsSection" id="groupsSection">
                <option value="yes" <?php if ($_smarty_tpl->tpl_vars['row']->value['groupsSection']!='no') {?> selected="selected"<?php }?>>Yes</option>
                <option value="no" <?php if ($_smarty_tpl->tpl_vars['row']->value['groupsSection']=='no') {?> selected="selected"<?php }?>>No</option>
            </select>
        </div>
    
        <div class="col-md-4">
            <label for="grp_thumb_height">Group Thumb Height</label>
            <input name="grp_thumb_height" type="text" id="grp_thumb_height" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['grp_thumb_height'];?>
" size="15" maxlength="5" />
        </div>
    
        <div class="col-md-4">
            <label for="grp_thumb_width">Group Thumb Width</label>
            <input name="grp_thumb_width" type="text" id="grp_thumb_width" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['grp_thumb_width'];?>
" size="15" maxlength="5" />
        </div>
              </div>
        <div class="row">
    
        <div class="col-md-4">
            <label for="grp_max_title">Group max title</label>
            <input class="form-control" name="grp_max_title" type="text" id="grp_max_title" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['grp_max_title'];?>
" size="15" maxlength="5" />
        </div>
        <div class="col-md-4">
            <label for="grp_max_desc">Group max description</label>
            <input class="form-control" name="grp_max_desc" type="text" id="grp_max_desc" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['grp_max_desc'];?>
" size="15" maxlength="5" />
        </div>
    
        <div class="col-md-4">
            <label for="max_topic_lenght">Max group topic length</label>
            <input class="form-control" name="max_topic_length" type="text" id="max_topic_length" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['max_topic_length'];?>
" size="15" maxlength="5" />
        </div>
            </div>
    
        <div class="form-group1">
            <label for="grp_categories">Max categories for each group</label>
            <input class="form-control" name="grp_categories" type="text" id="grp_categories" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['grp_categories'];?>
" size="15" maxlength="5" />
        </div>
    
    
    </div> -->
      <div id="general" class="tab-pane">
          <h2>General</h2>
          <div class="row">
          <div class="col-md-6">
              <label for="collectionsSelection">Enable Collections</label>
              <select class="form-control" name="collectionsSection" id="collectionsSection">
                  <option value="yes" <?php if ($_smarty_tpl->tpl_vars['row']->value['collectionsSection']!='no') {?> selected="selected"<?php }?>>Yes</option>
                  <option value="no" <?php if ($_smarty_tpl->tpl_vars['row']->value['collectionsSection']=='no') {?> selected="selected"<?php }?>>No</option>
              </select>
          </div>

          <div class="col-md-6">
              <label for="feedsSelection">Enable feeds</label>
              <select class="form-control" name="feedsSection" id="feedsSection">
                  <option value="yes" <?php if ($_smarty_tpl->tpl_vars['row']->value['feedsSection']!='no') {?> selected="selected"<?php }?>>Yes</option>
                  <option value="no" <?php if ($_smarty_tpl->tpl_vars['row']->value['feedsSection']=='no') {?> selected="selected"<?php }?>>No</option>
              </select>
          </div>

          <div class="col-md-6">
              <label for="youtube_api_key">YouTube API Key</label>
              <input class="form-control" type="text" name="youtube_api_key" id="youtube_api_key" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['youtube_api_key'];?>
" placeholder="YouTube Data API 3 Key">
          </div>

          <div class="col-md-6">
              <div class="checkbox">
                  <label for="video_rating">
                      <input name="video_rating" type="checkbox" id="video_rating" value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['video_rating']=='1') {?>checked="checked"<?php }?> />Allow  videos ratings
                  </label>
              </div>
              <div class="checkbox">
                  <label for="own_video_rating">
                      <input name="own_video_rating" type="checkbox" id="own_video_rating" value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['own_video_rating']=='1') {?>checked="checked"<?php }?> />Allow user to rate own videos
                  </label>
              </div>
              <div class="checkbox">
                  <label for="collection_rating">
                      <input name="collection_rating" type="checkbox" id="collection_rating" value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['collection_rating']=='1') {?>checked="checked"<?php }?> />Allow collection ratings
                  </label>
              </div><div class="checkbox">
              <label for="own_collection_rating">
                  <input name="own_collection_rating" type="checkbox" id="own_collection_rating" value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['own_collection_rating']=='1') {?>checked="checked"<?php }?> />Allow user to rate own collections
              </label>
          </div>
              <div class="checkbox">
                  <label for="channel_rating">
                      <input name="channel_rating" type="checkbox" id="channel_rating" value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['channel_rating']=='1') {?>checked="checked"<?php }?> />Allow channel ratings
                  </label>
              </div>
              <div class="checkbox">
                  <label for="own_channel_rating">
                      <input name="own_channel_rating" type="checkbox" id="own_channel_rating" value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['own_channel_rating']=='1') {?>checked="checked"<?php }?> />Allow users to rate own channels
                  </label>
              </div>
          </div>
      </div>
          </div>
      </div>
      </div>
</div>



  <div id="div_2" class="main_page_div">
  <div class="row">
    <div class="col-md-4">
      <label for="">Upload Options</label>
      <div class="checkboxes">
        <?php  $_smarty_tpl->tpl_vars['opt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['opt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['opt_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['opt']->key => $_smarty_tpl->tpl_vars['opt']->value) {
$_smarty_tpl->tpl_vars['opt']->_loop = true;
?>
          <?php if (isset($_smarty_tpl->tpl_vars['uploadOptId'])) {$_smarty_tpl->tpl_vars['uploadOptId'] = clone $_smarty_tpl->tpl_vars['uploadOptId'];
$_smarty_tpl->tpl_vars['uploadOptId']->value = $_smarty_tpl->tpl_vars['opt']->value['load_func']; $_smarty_tpl->tpl_vars['uploadOptId']->nocache = null; $_smarty_tpl->tpl_vars['uploadOptId']->scope = 0;
} else $_smarty_tpl->tpl_vars['uploadOptId'] = new Smarty_variable($_smarty_tpl->tpl_vars['opt']->value['load_func'], null, 0);?>
          <label class="checkbox-inline">
            <input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['uploadOptId']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['uploadOptId']->value]=='yes') {?> checked="checked"<?php }?> value="yes"/><?php echo $_smarty_tpl->tpl_vars['opt']->value['title'];?>

          </label>
        <?php } ?>
      </div>
    </div>

  
   <div class="col-md-4">
      <label for="">Stay MP4 as it is</label>
      <div class="checkboxes">
          <label class="checkbox-inline">
            <input type="checkbox" name="stay_mp4" <?php if ($_smarty_tpl->tpl_vars['row']->value['stay_mp4']=='yes') {?> checked="checked"<?php }?> value="yes"/>
          </label>
             <a href="javascript:void(0)" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/help.png" alt="VF information" border="0" class="tipsy_tip" title="Only MP4 videos will be uploaded as it is. If you want to upload other video extensions uncheck this box ." /></a>
      </div>

    </div>


    <div class="col-md-4">
      <h5>Use Crons</h5>
      <label class="radio-inline">
        <input type="radio" name="use_crons" value="yes" id="use_crons_0" <?php if ($_smarty_tpl->tpl_vars['row']->value['use_crons']=='yes') {?> checked="checked"<?php }?> />Yes
      </label>
      
      <label class="radio-inline">
        <input type="radio" name="use_crons" value="no" id="use_crons_1" <?php if ($_smarty_tpl->tpl_vars['row']->value['use_crons']=='no') {?> checked="checked"<?php }?> />No    
      </label>
    </div>

    <div class="col-md-4">
      <label for="ffmpegpath">FFMPEG Path</label>
      <input class="form-control" name="ffmpegpath" type="text" id="ffmpegpath" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['ffmpegpath'];?>
" size="45" />
      <a href="http://docs.clip-bucket.com/clipbucket-docs/ffmpeg" target="_blank">
      <img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/help.png" alt="FFMPEG Details" border="0" class="tipsy_tip" title="FFMPEG Binary Paths - Click For More Details" /></a>
    </div>
    </div>
  <div class="row">
    <div class="col-md-4">
      <h5>Turn on VF</h5>
      <label class="radio-inline">
        <input type="radio" name="use_ffmpeg_vf" value="yes" id="use_ffmpeg_vf_0" <?php if ($_smarty_tpl->tpl_vars['row']->value['use_ffmpeg_vf']=='yes') {?> checked<?php }?> />
        Yes
      </label>
      <label class="radio-inline">
        <input type="radio" name="use_ffmpeg_vf" value="no" id="use_ffmpeg_vf_1"  <?php if ($_smarty_tpl->tpl_vars['row']->value['use_ffmpeg_vf']=='no') {?> checked<?php }?>/>
        No
      </label>
      <a href="javascript:void(0)" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/help.png" alt="VF information" border="0" class="tipsy_tip" title="In latest releases of FFMPEG (greator than 20000) Pad flag has been changed from pad* to vf , if your ffmpeg is greator than r20000 please check YES " /></a>
    </div>
    
    <div class="col-md-4">
      <label for="php_path">PHP Path</label>
      <input class="form-control" name="php_path" type="text" id="php_path" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['php_path'];?>
" size="45" />
      <a href="http://docs.clip-bucket.com/clipbucket-docs/php" target="_blank">
      <img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/help.png" alt="PHP Path info" border="0" class="tipsy_tip" title="PHP Binary Paths - Click For More Details" /></a>
    </div>
    
    <div class="col-md-4">
      <label for="mp4boxpath">MP4Box Path</label>
      <input class="form-control" name="mp4boxpath" type="text" id="mp4boxpath" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['mp4boxpath'];?>
" size="45" />
      <a href="http://docs.clip-bucket.com/clipbucket-docs/mp4box" target="_blank">
      <img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/help.png" alt="MP4Box info" border="0" class="tipsy_tip" title="MP4Box Binary Paths - Click For More Details" /></a>
    </div>
    </div>



    <div class="row">
     <div class="col-md-4">
      <label for="ffprobe_path">FFprobe Path</label>
      <input class="form-control" name="ffprobe_path" type="text" id="ffprobe_path" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['ffprobe_path'];?>
" size="45" />
     
    </div>
    
    <div class="col-md-4">
      <label for="media_info">Media Info Path</label>
      <input class="form-control" name="media_info" type="text" id="media_info" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['media_info'];?>
" size="45" />
      
    </div>
    
    <div class="col-md-4">
      <label for="i_magick">Imagick Path</label>
      <input class="form-control" name="i_magick" type="text" id="i_magick" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['i_magick'];?>
" size="45" />
     
    </div>
    </div>


  <div class="row">
    <div class="col-md-4">
      <label for="mplayerpath">Mplayer Path</label>
      <input class="form-control" name="mplayerpath" type="text" id="mplayerpath" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['mplayerpath'];?>
" size="45" />
      <a href="http://docs.clip-bucket.com/clipbucket-docs/mplayer" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/help.png" alt="Mplayer info" border="0" class="tipsy_tip" title="MPlayer - Highly efficient library for generating thumbs from a video" /></a>
    </div>
    <div class="col-md-4">
      <label for="max_conversion">Max videos to convert at once</label>
      <input class="form-control" name="max_conversion" type="text" id="max_conversion" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['max_conversion'];?>
" size="45" />
    </div>

      <div class="col-md-4">
      <label for="max_time_wait">Max time wait after max processess</label>
      <input class="form-control" name="max_time_wait" type="text" id="max_time_wait" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['max_time_wait'];?>
" size="45" />
    </div>
 
    </div>

  <div class="alert alert-info clearfix videoResolution-holder">
    <div class="col-md-4" >
          <label for="cb_combo_res"><strong>Set Video Resolution type</strong></label>
          <br>
          <input type="radio" name="cb_combo_res"  class="cb_combo_res" id="combo_res"  <?php if ($_smarty_tpl->tpl_vars['row']->value['cb_combo_res']=='yes') {?> checked="checked"<?php }?>  value="yes"/>           
          Generate All &nbsp;  &nbsp;  
          <input type="radio" name="cb_combo_res" class="cb_combo_res" id="normal_res" <?php if ($_smarty_tpl->tpl_vars['row']->value['cb_combo_res']=='no') {?> checked="checked"<?php }?>  value="no"/>           
          Generate SD HD
    </div>
    <div class="col-md-8 res_options" <?php if ($_smarty_tpl->tpl_vars['row']->value['cb_combo_res']=='no') {?>style="display:none;"<?php }?>>
      <table class="table table-bordered table-striped manageUsersTable">
         <strong>Set Video Resolution Generation</strong>
        <tr>
          <td>
          <label for="res_240">
          <input type="checkbox" name="gen_240" id="checkbox" <?php if ($_smarty_tpl->tpl_vars['row']->value['gen_240']=='yes') {?> checked="checked"<?php }?>  value="yes"/>           
          Generate 240 </label>
          </td>
          
          <td> 
          <label for="res_360">
          <input type="checkbox" name="gen_360" id="checkbox" <?php if ($_smarty_tpl->tpl_vars['row']->value['gen_360']=='yes') {?> checked="checked"<?php }?>  value="yes"/>           
          Generate 360 </label>
          </td>

          <td>
          <label for="res_480">
          <input type="checkbox" name="gen_480" id="checkbox" <?php if ($_smarty_tpl->tpl_vars['row']->value['gen_480']=='yes') {?> checked="checked"<?php }?>  value="yes"/>           
          Generate 480 </label>
          </td>

          <td>
          <label for="res_720">
          <input type="checkbox" name="gen_720" id="checkbox" <?php if ($_smarty_tpl->tpl_vars['row']->value['gen_720']=='yes') {?> checked="checked"<?php }?>  value="yes"/>           
          Generate 720 </label>
          </td>

          <td>    
          <label for="res_1080">
          <input type="checkbox" name="gen_1080" id="checkbox" <?php if ($_smarty_tpl->tpl_vars['row']->value['gen_1080']=='yes') {?> checked="checked"<?php }?>  value="yes"/>           
          Generate 1080 </label>
          </td>
        </tr>
      </table>
    </div>
  </div>
  <div class="row"> 

    <div class="col-md-4">
      <h5>Quick Conversion</h5>
      <label class="checkbox" for="quick_conv">
        <input type="checkbox" name="quick_conv" id="quick_conv" value="yes" <?php if ($_smarty_tpl->tpl_vars['row']->value['quick_conv']=='yes') {?> checked="checked"<?php }?>/>
        Turn on Quick Conversion
        <a href="javascript:void(0)" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/help.png" alt="info" border="0" class="tipsy_tip" title="If you check this option, videos will be converted as soon as uploading is complete, make sure your php path is correct before enabling this option otherwise may cause your website inaccessible" /></a>
      </label>
    </div>

<!--
    <div class="col-md-4">
      <h5>Server Friendly Conversion</h5>
      <label for="server_friendly_conversion">
        <input type="checkbox" name="server_friendly_conversion" id="server_friendly_conversion" <?php if ($_smarty_tpl->tpl_vars['row']->value['server_friendly_conversion']=='yes') {?> checked="checked"<?php }?> value="yes"/>
        Turn on Server Friendly Conversion
        <a href="javascript:void(0)" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/help.png" alt="info" border="0" class="tipsy_tip" title="If you enable this option then sever will process 1 video at a time, once it is finished, it will start processing new video" /></a>
      </label>
    </div>
-->
    
    </div>
        <div class="row">
    <div class="col-md-4">
      <label for="allowed_types">Allowed extensions</label>
      <textarea class="form-control" name="allowed_types" id="allowed_types" cols="45" rows="5"><?php echo $_smarty_tpl->tpl_vars['row']->value['allowed_types'];?>
</textarea>
      Sperate by comma [case insensitive]
    </div>

          

    <div class="col-md-4">
      <label for="max_upload_size">Max upload file size</label>
      <input class="form-control" name="max_upload_size" type="text" id="max_upload_size" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['max_upload_size'];?>
" size="15" maxlength="5" />
      in MegaBytes <br />
      Default PHP Max Upload size is <strong><?php echo $_smarty_tpl->tpl_vars['upload_max_size']->value;?>
</strong> and Post max size is <strong><?php echo $_smarty_tpl->tpl_vars['post_max_size']->value;?>
</strong>, if you set max upload file size larger than this, it will be override by default, however, if set lower than default, it will work fine.
    </div>
    
 <div class="col-md-4">
        <label for="max_video_duration">Max upload durations</label>
        <input class="form-control" name="max_video_duration" type="text" id="max_video_duration" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['max_video_duration'];?>
" size="15" maxlength="5" /> 
        in minutes
      </div>
      


            </div>
    <div class="row">
     
      <!--<div class="col-md-2 marginTopLarge">
        <label class="checkbox">
          <input name="keep_original" type="checkbox" id="keep_original" value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['keep_original']) {?> checked="checked"<?php }?> />Save original file
        </label>
      </div>


      <div class="col-md-2 marginTopLarge">
        <label class="checkbox">
          <input name="hq_output" type="checkbox" id="hq_output" value="yes" <?php if ($_smarty_tpl->tpl_vars['row']->value['hq_output']) {?> checked="checked"<?php }?> />Mp4 HQ Output
          <a href="javascript:void(0)" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/help.png" alt="info" border="0" class="tipsy_tip" title="if enabled, ClipBucket will generate Highh Quality mp4 video if possible" /></a>
        </label>
      </div>

      <div class="col-md-2 marginTopLarge">
        <label class="checkbox">
          <input name="keep_mp4_as_is" type="checkbox" id="keep_mp4_as_is" value="yes" <?php if ($_smarty_tpl->tpl_vars['row']->value['keep_mp4_as_is']) {?> checked="checked"<?php }?> />Keep Mp4 As Is
          <a href="javascript:void(0)" alt="info" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/help.png" border="0" class="tipsy_tip" title="if enabled, ClipBucket will keep mp4 vieo as is and will be playable as HQ video" /></a>
        </label>
      </div>-->

      <div class="col-md-2 marginTopLarge">
        <div class="form-group1">
          <label class="checkbox">
            <input name="activation" type="checkbox" id="activation" value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['activation']==1) {?> checked="checked"<?php }?> />
            Video Activation
            <a href="javascript:void(0)" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/help.png" alt="info" border="0" class="tipsy_tip" title="If left unchecked, all vidoes will be published directly. If checked, admin will have to approve videos before they appear on website." /></a>
          </label>
        </div>
      </div>
      <div class="col-md-2 marginTopLarge">
        <div class="form-group1">
          <label class="checkbox">
            <input name="photo_activation" type="checkbox" id="photo_activation" value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['photo_activation']==1) {?> checked="checked"<?php }?> />
            Show All Photos
            <a href="javascript:void(0)" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/help.png" alt="info" border="0" class="tipsy_tip" title="If checked, all photos will be published directly. If left unchecked, admin will have to approve photos before they appear on website." /></a>
          </label>
        </div>
      </div>
    </div>
    

<hr>
  <div class="tabbable">
  <ul class="nav nav-tabs" id="myTab">
      <li class="active">
          <a data-toggle="tab" href="#videouploadsettings">
              Video Upload Settings
          </a>
      </li>
      <li class="">
          <a data-toggle="tab" href="#conversionsetttings">
              Conversion Settings
          </a>
      </li>
      <li class="">
          <a data-toggle="tab" href="#videoconversion">
              Video Conversion
          </a>
      </li>
  </ul>

  <div class="tab-content">
  <div id="videouploadsettings" class="tab-pane active">
      <h2>Video Upload Form Settings</h2>

          <h5>Video Title</h5>
      <div class="row">
          <div class="col-md-6">
              <label for="min_video_title">Min</label>
              <input class="form-control" name="min_video_title" type="text" id="min_video_title" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['min_video_title'];?>
" size="20" />
          </div>
          <div class="col-md-6">
              <label for="max_video_title">Max</label>
              <input class="form-control" name="max_video_title" type="text" id="max_video_title" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['max_video_title'];?>
" size="20" />
          </div>
          </div>


          <h5>Video description</h5>
      <div class="row">
          <div class="col-md-6">
              <label for="min_video_desc">Min</label>
              <input class="form-control" name="min_video_desc" type="text" id="min_video_desc" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['min_video_desc'];?>
" size="20" />
          </div>
          <div class="col-md-6">
              <label for="max_video_desc">Max</label>
              <input class="form-control" name="max_video_desc" type="text" id="php_path5" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['max_video_desc'];?>
" size="20" />
          </div>
          </div>



          <h5>Video Tags</h5>
            <div class="row">
          <div class="col-md-6">
              <label for="php_path_6">Min</label>
              <input class="form-control" name="min_video_tags" type="text" id="php_path6" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['min_video_tags'];?>
" size="20" />
          </div>
          <div class="col-md-6">
              <label for="php_path7">Max</label>
              <input class="form-control" name="max_video_tags" type="text" id="php_path7" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['max_video_tags'];?>
" size="20" />
          </div>
        </div>
      </div>


      <div id="conversionsetttings" class="tab-pane">
          <h2>Conversion Settings</h2>
          <br>
          <div class="row">
            <div class="col-md-4">
                <label for="num_thumbs">Number of thumbs</label>
                <input class="form-control" name="num_thumbs" type="text" id="num_thumbs" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['num_thumbs'];?>
" size="45" />
            </div>
          </div>
           <br>
          <span class="alert alert-info">
              Other fields has been diabled temporarily, you will be using upgraded 
              settings panel in upcoming releases.
          </span>

       <!--    <div class="row">
          <div class="col-md-4">
              <label for="normal_resolution">Normal video resolution</label>
              <select class="form-control" name="normal_resolution" id="normal_resolution">
                  <option value="240" <?php if ($_smarty_tpl->tpl_vars['row']->value['normal_resolution']=='240') {?> selected="selected"<?php }?>>240p</option>
                  <option value="360" <?php if ($_smarty_tpl->tpl_vars['row']->value['normal_resolution']=='360') {?> selected="selected"<?php }?>>360p</option>
                  <option value="480" <?php if ($_smarty_tpl->tpl_vars['row']->value['normal_resolution']=='480') {?> selected="selected"<?php }?>>480p</option>
              </select>
          </div>

          <div class="col-md-4">
              <label for="high_resolution">HQ video resolution</label>
              <select class="form-control" name="high_resolution" id="high_resolution">
                  <option value="720" <?php if ($_smarty_tpl->tpl_vars['row']->value['high_resolution']=='720') {?> selected="selected"<?php }?>>720p</option>
                  <option value="1080" <?php if ($_smarty_tpl->tpl_vars['row']->value['high_resolution']=='1080') {?> selected="selected"<?php }?>>1080p</option>
              </select>
          </div>

          <div class="col-md-4">
              <label for="thumb_width">Thumb Width</label>
              <input class="form-control" name="thumb_width" type="text" id="thumb_width" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['thumb_width'];?>
" size="45" />
          </div>
                </div>
          <div class="row">
          <div class="col-md-4">
              <label for="thumb_height">Thumb Height</label>
              <input class="form-control" name="thumb_height" type="text" id="thumb_height" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['thumb_height'];?>
" size="45" />
          </div>

          <div class="col-md-4">
              <label for="num_thumbs">Number of thumbs</label>
              <input class="form-control" name="num_thumbs" type="text" id="num_thumbs" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['num_thumbs'];?>
" size="45" />
          </div>

          <div class="col-md-4">
              <label for="big_thumb_width">Big thumb width</label>
              <input class="form-control" name="big_thumb_width" type="text" id="big_thumb_width" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['big_thumb_width'];?>
" size="45" />
          </div>
              </div>

          <div class="form-group1">
              <label for="big_thumb_height">Big thumb height</label>
              <input class="form-control" name="big_thumb_height" type="text" id="big_thumb_height" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['big_thumb_height'];?>
" size="45" />
          </div> -->
      </div>


      <div id="videoconversion" class="tab-pane">
          <h3>Change only if you have good knowledge of video conversion <a href="http://docs.clip-bucket.com/clipbucket-docs/video-conversion-settings" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/help.png" alt="info" border="0" class="tipsy_tip" title="Video Conversion Info - Click For More Details" /></a></h3>
        <div class="row">
          <div class="col-md-4">
              <label for="convProfile">Select profile </label>
              <select class="form-control" name="convProfile" id="convProfile">
                  <option selected="selected" value="0">Choose from list</option>
                  <option <?php if ($_POST['convProfile']=='1') {?> selected="selected"<?php }?> value="1">H.264, AAC - Youtube like</option>
                  <option <?php if ($_POST['convProfile']=='3') {?> selected="selected"<?php }?> value="3">High Configurations with H264</option>
                  <option <?php if ($_POST['convProfile']=='2') {?> selected="selected"<?php }?>  value="2">Normal Configurations</option>
                  <option <?php if ($_POST['convProfile']=='4') {?> selected="selected"<?php }?>  value="4">Low Configurations</option>
              </select>
          </div>

          <div class="col-md-4">
              <label for="video_codec">Video Codec</label>
              <input class="form-control" name="video_codec" type="text" id="video_codec" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['video_codec'];?>
" size="45" />
          </div>

          <div class="col-md-4">
              <label for="audio_codec">Audio Codec</label>
              <input class="form-control" name="audio_codec" type="text" id="audio_codec" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['audio_codec'];?>
" size="45" />
          </div>
            </div>
          <div class="row">
          <div class="col-md-4">
              <label for="vrate">Video Rate</label>
              <input class="form-control" name="vrate" type="text" id="vrate" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['vrate'];?>
" size="45" />
          </div>

          <div class="col-md-4">
              <label for="vbrate">Video Bitrate</label>
              <input class="form-control" name="vbrate" type="text" id="vbrate" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['vbrate'];?>
" size="45" />
          </div>

          <div class="col-md-4">
              <label for="vbrate">Video Bitrate For Hd</label>
              <input class="form-control" name="vbrate_hd" type="text" id="vbrate_hd" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['vbrate_hd'];?>
" size="45" />
          </div>
              </div>
            <div class="row">
          <div class="col-md-6">
              <label for="srate">Audio Rate</label>
              <input class="form-control" name="srate" type="text" id="srate" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['srate'];?>
" size="45" />
          </div>

          <div class="col-md-6">
              <label for="sbrate">Audio Bitrate</label>
              <input class="form-control" name="sbrate" type="text" id="sbrate" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['sbrate'];?>
" size="45" />
          </div>
                </div>
      </div>
      </div>
      </div>
      </div>



  <div id="div_3" class="main_page_div" >

    <!--<div class="" style="overflow:hidden;">
      <div class="row">
        <div class="col-md-4">Current Template</div>
        <div class="col-md-8"><a href="manage_players.php">manage flv players</a></div>
      </div>
      <div class="row">
        <div class="col-md-4">Current FLV Player</div>
        <div class="col-md-8"><a href="manage_players.php">manage flv players</a></div>
      </div>
    </div>-->
    <h2>Main Settings</h2>
    <div class="row">
      <div class="col-md-3">
        <div class="">
          <label for="use_cached_pagin">Use cached pagination</label>    
          <input value="yes"  name="use_cached_pagin" id="use_cached_pagin" <?php if ($_smarty_tpl->tpl_vars['row']->value['use_cached_pagin']=='yes') {?>checked="checked"<?php }?> type="checkbox" class="ace ace-switch ace-switch-5">
          <span class="show lbl"></span>
        </div>
      </div>
      <div class="col-md-3">
        <div class="">
          <label for="cached_pagin_time">Pagination caching time</label>
          <input class="form-control" name="cached_pagin_time" type="text" id="cached_pagin_time" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['cached_pagin_time'];?>
" size="45" /> 
          in minutes
        </div>
      </div>
    </div>

<hr>
    <div class="tabbable">
    <ul class="nav nav-tabs" id="myTab">
        <li class="active">
            <a data-toggle="tab" href="#videolistings">
                Video Listings
            </a>
        </li>
        <li class="">
            <a data-toggle="tab" href="#photolistings">
                Photos Listings
            </a>
        </li>
        <li class="">
            <a data-toggle="tab" href="#collectionsettings">
                Collection Listings
            </a>
        </li>
        <li class="">
            <a data-toggle="tab" href="#usersettings">
                User Listings
            </a>
        </li>
        <li class="">
            <a data-toggle="tab" href="#groupsgeneral">
                Groups & General
            </a>
        </li>
    </ul>

    <div class="tab-content">
    <div id="videolistings" class="tab-pane active">
        <h2>Video Listings</h2>
     <div class="row">
        <div class="col-md-4">
            <label for="index_featured">Index Page Featured</label>
            <input class="form-control" name="index_featured" type="text" id="index_featured" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['index_featured'];?>
" size="6" maxlength="3" />
            'videos' page
        </div>
        <div class="col-md-4">
            <label for="index_recent">Index Page Recent</label>
            <input class="form-control" name="index_recent" type="text" id="index_recent" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['index_recent'];?>
" size="6" maxlength="3" />
            'videos' page
        </div>
        <div class="col-md-4">
            <label for="videos_list_per_page">Videos Page</label>
            <input class="form-control" name="videos_list_per_page" type="text" id="videos_list_per_page" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['videos_list_per_page'];?>
" size="6" maxlength="3" />
            'videos' page
        </div>        
    </div>
        <div class="row">
        <div class="col-md-4">
            <label for="videos_items_ufav_page">User Favorite</label>
            <input class="form-control" name="videos_items_ufav_page"  type="text" id="videos_items_ufav_page" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['videos_items_ufav_page'];?>
" size="6" maxlength="3" />
            'user favorits' page
        </div>

        <div class="col-md-4">
            <label for="videos_items_grp_page">Group Page</label>
            <input class="form-control" name="videos_items_grp_page" type="text" id="videos_items_grp_page" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['videos_items_grp_page'];?>
" size="6" maxlength="3" />
            videos display in view group page
        </div>

        <div class="col-md-4">
            <label for="videos_items_hme_page">Home Tabs</label>
            <input class="form-control" name="videos_items_hme_page" type="text" id="videos_items_hme_page" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['videos_items_hme_page'];?>
" size="6" maxlength="3" />
            videos display in home tab
        </div>
            </div>
        <div class="row">
        <div class="col-md-4">
            <label for="videos_items_search_page">Search Page</label>
            <input class="form-control" name="videos_items_search_page" type="text" id="videos_items_search_page" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['videos_items_search_page'];?>
" size="6" maxlength="3" />
            videos display in search page
        </div>

        <div class="col-md-4">
            <label for="videos_items_columns">Video Columns</label>
            <input class="form-control" name="videos_items_columns" type="text" id="videos_items_columns" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['videos_items_columns'];?>
" size="6" maxlength="3" />
            videos display in right columns ie (Random, Related etc)
        </div>
        <div class="col-md-4">
            <label for="videos_item_channel_page">Channel page</label>
            <input class="form-control" name="videos_item_channel_page" type="text" id="videos_item_channel_page" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['videos_item_channel_page'];?>
"size="6" maxlength="3" />
            'view channel' page
        </div>
        </div>
        <div class="row">
        <div class="col-md-4">
            <label for="videos_items_uvid_page">User Videos</label>
            <input class="form-control" name="videos_items_uvid_page" type="text" id="videos_items_uvid_page" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['videos_items_uvid_page'];?>
" size="6" maxlength="3" />
            - 'user videos' page
        </div>
        <div class="col-md-4">
            <label for="videos_items_uvid_page">Home Page Popup Video</label>
            <select class="form-control" name="popup_video">
                <option value="no" <?php if ($_smarty_tpl->tpl_vars['row']->value['popup_video']=="no") {?>
                selected="selected"
                <?php }?>>No</option>
                <option value="yes" <?php if ($_smarty_tpl->tpl_vars['row']->value['popup_video']=="yes") {?>
                selected="selected"
                <?php }?>>Yes</option>
            </select>
        </div>
        </div>
    </div>


    <div id="photolistings" class="tab-pane">

        <h2>Photos Listings</h2>
        <div class="row">
        <div class="col-md-4">
            <label for="photo_main_list">Main Limit</label>
            <input class="form-control" name="photo_main_list" type="text" id="photo_main_list" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['photo_main_list'];?>
" size="6" maxlength="3" />
            <span class="">We use this limit in most of place where photo is displayed like, My Account, Manage Photos, Manage Favotires Photos etc.</span>
        </div>

        <div class="col-md-4">
            <label for="photo_home_tabs">Home Tabs</label>
            <input class="form-control" name="photo_home_tabs" type="text" id="photo_home_tabs" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['photo_home_tabs'];?>
" size="6" maxlength="3" />
            <span class="">Number of photos to display on Homepage.</span>
        </div>

        <div class="col-md-4">
            <label for="photo_search_result">Search Result</label>
            <input class="form-control" name="photo_search_result" type="text" id="photo_search_result" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['photo_search_result'];?>
" size="6" maxlength="3" />
            <span class="">Number of photos to display on Search page.</span>
        </div>
            </div>
        <div class="row">
        <div class="col-md-4">
            <label for="photo_channel_page">Channel Page</label>
            <input class="form-control" name="photo_channel_page" type="text" id="photo_channel_page" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['photo_channel_page'];?>
" size="6" maxlength="3" />
            <span class="">Number of photos to display on User's page.</span>
        </div>

        <div class="col-md-4">
            <label for="photo_user_photos">User Photos</label>
            <input class="form-control" name="photo_user_photos" type="text" id="photo_user_photos" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['photo_user_photos'];?>
" size="6" maxlength="3" />
            <span>Number of photos to display on User's photos page.</span>
        </div>

        <div class="col-md-4">
            <label for="photo_user_favorites">User favorites</label>
            <input class="form-control" name="photo_user_favorites" type="text" id="photo_user_favorites" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['photo_user_favorites'];?>
" size="6" maxlength="3" />
            <span>Number of photos to display on User's favorites page.</span>
        </div>
            </div>


        <div class="form-group1">
            <label for="photo_other_limit">Other Limit</label>
            <input class="form-control" name="photo_other_limit" type="text" id="photo_other_limit" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['photo_other_limit'];?>
" size="6" maxlength="3" />
            <span>Use anywhere you want.</span>
        </div>
        </div>

    <div id="collectionsettings" class="tab-pane">
        <h2>Collection Listing</h2>
        <div class="row">
        <div class="col-md-4">
            <label for="collection_per_page">Collection Page</label>
            <input class="form-control" name="collection_per_page" type="text" id="collection_per_page" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['collection_per_page'];?>
" size="6" maxlength="3" />
            <span>Number of collections to display on Collections page.</span>
        </div>

        <div class="col-md-4">
            <label for="collection_home_page">Home Page</label>
            <input class="form-control" name="collection_home_page" type="text" id="collection_home_page" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['collection_home_page'];?>
" size="6" maxlength="3" />
            <span>Number of collections to display on Homepage.</span>
        </div>

        <div class="col-md-4">
            <label for="collection_items_page">Items Page</label>
            <input class="form-control" name="collection_items_page" type="text" id="collection_items_page" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['collection_items_page'];?>
" size="6" maxlength="3" />
            <span>Number of items to display in a Collection.</span>
        </div>
            </div>
        <div class="row">
        <div class="col-md-4">
            <label for="collection_search_result">Search Result</label>
            <input class="form-control" name="collection_search_result" type="text" id="collection_search_result" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['collection_search_result'];?>
" size="6" maxlength="3" /><span>Number of collections to display on Homepage.</span>
        </div>

        <div class="col-md-4">
            <label for="collection_channel_page">Channel Page</label>
            <input class="form-control" name="collection_channel_page" type="text" id="collection_channel_page" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['collection_channel_page'];?>
" size="6" maxlength="3" /><span>Number of collections to display on Channel page</span>
        </div>

        <div class="col-md-4">
            <label for="collection_user_collections">User Collections</label>
            <input class="form-control" name="collection_user_collections" type="text" id="collection_user_collections" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['collection_user_collections'];?>
" size="6" maxlength="3" /><span>Number of collections to display on User's collection page</span>
        </div>
            </div>
        <div class="form-group1">
            <label for="collection_user_favorites">User Favorites</label>
            <input class="form-control" name="collection_user_favorites" type="text" id="collection_user_favorites" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['collection_user_favorites'];?>
" size="6" maxlength="3" /><span>Number of collections to display on User's favorite page</span>
        </div>
    </div>
    <div id="usersettings" class="tab-pane">
        <h2>Users Listing</h2>
        <div class="row">
        <div class="col-md-4">
            <label for="channels_list_per_page">User list per page</label>
            <input class="form-control" name="channels_list_per_page" type="text" id="channels_list_per_page" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['channels_list_per_page'];?>
" size="6" maxlength="3" />'users' page
        </div>

        <div class="col-md-4">
            <label for="users_items_subscribers">Subscribers in channel view</label>
            <input class="form-control" name="users_items_subscibers" type="text" id="users_items_subscibers" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['users_items_subscibers'];?>
" size="6" maxlength="3" />subscribers in view channel page
        </div>

        <div class="col-md-4">
            <label for="">Subscriptions in channel view</label>
            <input class="form-control" name="users_items_subscriptions" type="text" id="users_items_subscriptions" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['users_items_subscriptions'];?>
" size="6" maxlength="3" />subscriptions in view channel page
        </div>
            </div>
            <div class="row">
        <div class="col-md-4">
            <label for="users_items_contacts_channel">Users contacts in channel view</label>
            <input class="form-control" name="users_items_contacts_channel" type="text" id="users_items_contacts_channel" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['users_items_contacts_channel'];?>
" size="6" maxlength="3" />
            users contacts in view channel
        </div>

        <div class="col-md-4">
            <label for="users_items_group_page">View Group Page</label>
            <input class="form-control" name="users_items_group_page" type="text" id="users_items_group_page" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['users_items_group_page'];?>
" size="6" maxlength="3" />users in view group page
        </div>

        <div class="col-md-4">
            <label for="users_items_search_page">Search Page</label>
            <input class="form-control" name="users_items_search_page" type="text" id="users_items_search_page" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['users_items_search_page'];?>
" size="6" maxlength="3" />
            users in search page
        </div>
                </div>
    </div>
    <div id="groupsgeneral" class="tab-pane">
        <h2>Groups</h2>
        <div class="row">
        <div class="col-md-6">
            <label for="groups_list_per_page">Groups Page</label>
            <input class="form-control" name="groups_list_per_page" type="text" id="groups_list_per_page" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['groups_list_per_page'];?>
" size="6" maxlength="3" />'groups' page
        </div>

        <div class="col-md-6">
            <label for="grps_items_search_page">Search Page</label>
            <input class="form-control" name="grps_items_search_page" type="text" id="grps_items_search_page" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['grps_items_search_page'];?>
" size="6" maxlength="3" />groups in search page
        </div>
        </div>
        <h2>General</h2>
       <div class="row">
        <div class="col-md-4">
            <label for="search_list_per_page">Search results per page</label>
            <input class="form-control" name="search_list_per_page" type="text" id="search_list_per_page" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['search_list_per_page'];?>
" size="6" maxlength="3" />other search results
        </div>

        <div class="col-md-4">
            <label for="recently_viewed_limit">Recently viewed videos</label>
            <input class="form-control" name="recently_viewed_limit" type="text" id="recently_viewed_limit" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['recently_viewed_limit'];?>
" size="6" maxlength="3" />recently viewed videos
        </div>

        <div class="col-md-4">
            <label for="comments_per_page">Comments per page</label>
            <input class="form-control" name="comments_per_page" type="text" id="comments_per_page" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['comments_per_page'];?>
" size="6" maxlength="3" />
        </div>
    </div>
        </div>
    </div>
    </div>
</div>

  <div id="div_4" class="main_page_div" >
      <div class="row">
    <div class="col-md-4">
      <label for="anonymous_id">Anonymous UserID</label>
      <input class="form-control" name="anonymous_id" type="text" id="anonymous_id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['anonymous_id'];?>
" size="6" maxlength="3" />
      <a href="http://docs.clip-bucket.com/clipbucket-v2/anonymous-user" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/help.png" border="0" alt="info" class="tipsy_tip" title="Set Anoymous Userid, Click For More Details" /></a>
    </div>

    <div class="col-md-4">
      <h5>Store guest Session</h5>
      <label class="radio-inline">
        <input type="radio" name="store_guest_session" value="yes" id="store_guest_session_0" <?php if ($_smarty_tpl->tpl_vars['row']->value['store_guest_session']=='yes') {?> checked="checked"<?php }?> />Yes
      </label>
      
      <label class="radio-inline">
        <input type="radio" name="store_guest_session" value="no" id="store_guest_session_1" <?php if ($_smarty_tpl->tpl_vars['row']->value['store_guest_session']=='no') {?> checked="checked"<?php }?> />No    
      </label>
    </div>

    <div class="col-md-4">
      <label class="checkbox">
        <input name="allow_registeration" type="checkbox" id="allow_registeration" value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['allow_registeration']=='1') {?>checked="checked"<?php }?> />Turn on registrations
      </label>
      <label class="checkbox">
        <input name="email_verification" type="checkbox" id="email_verification" value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['email_verification']=='1') {?>checked="checked"<?php }?> />Email verification
      </label>
    </div>

    <div class="col-md-4">
      <label for="varification_captcha">Image verification (captcha)</label>
      <select class="form-control" name="captcha_type">
        <option value="0" <?php if ($_smarty_tpl->tpl_vars['row']->value['captcha_type']==0) {?>
        selected="selected"
        <?php }?>>No</option>
        <option value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['captcha_type']==1) {?>
        selected="selected"
        <?php }?>>Simple</option>
        <option value="2" <?php if ($_smarty_tpl->tpl_vars['row']->value['captcha_type']==2) {?>
        selected="selected"
        <?php }?>>Secured</option>
      </select>
    </div>
          </div>
      <div class="row">

    <div class="col-md-4">
      <label for="user_max_chr">Username maximum characters</label>
      <input class="form-control" name="user_max_chr" type="text" id="user_max_chr" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['user_max_chr'];?>
" size="6" maxlength="3" />
    </div>

    <div class="col-md-4">
      <label for="disallowed_usernames">Disallowed usernames</label>
      <textarea class="form-control" name="disallowed_usernames" id="disallowed_usernames" cols="45" rows="5"><?php echo $_smarty_tpl->tpl_vars['row']->value['disallowed_usernames'];?>
</textarea>
      sperate by commas
    </div>

    <div class="col-md-4">
      <label class="checkbox">
        <input name="allow_unicode_usernames" type="checkbox" 
      id="allow_unicode_usernames" value="yes" <?php if ($_smarty_tpl->tpl_vars['row']->value['allow_unicode_usernames']=='yes') {?>checked="checked"<?php }?> />
      Allow Special Characters in usernames
      </label>
      <label class="checkbox">
        <input name="allow_username_spaces" type="checkbox" 
      id="allow_username_spaces" value="yes" <?php if ($_smarty_tpl->tpl_vars['row']->value['allow_username_spaces']=='yes') {?>checked="checked"<?php }?> />
      Allow spaces in usernames
      </label>
    </div>
          </div>
      <div class="row">
    <div class="col-md-4">
      <label for="min_username">Minimum Username Length</label>
      <input class="form-control" name="min_username" type="text" id="min_username" value="<?php echo form_val($_smarty_tpl->tpl_vars['row']->value['min_username']);?>
" />
    </div>

    <div class="col-md-4">
      <label for="max_username">Maximum Username Length</label>
      <input class="form-control" name="max_username" type="text" id="max_username" value="<?php echo form_val($_smarty_tpl->tpl_vars['row']->value['max_username']);?>
" />
    </div>

    <div class="col-md-4">
      <label for="min_age_reg">Minimum age for registration</label>
      <input class="form-control" name="min_age_reg" type="text" id="min_age_reg" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['min_age_reg'];?>
" size="6" maxlength="3" />leave blank to disable this option
    </div>
          </div>
      <hr>

    <h2>Profile Pictures &amp; Background</h2>
    <div class="row">
    <div class="col-md-4">
      <label for="gravatars">User Avatars</label>
        <label class="pull-right inline">
            <?php echo $_smarty_tpl->tpl_vars['row']->value['gravatars'];?>

            <input value="yes"  name="gravatars" id="gravatars" <?php if ($_smarty_tpl->tpl_vars['row']->value['gravatars']=='yes') {?>checked="checked"<?php }?> type="checkbox" class="ace ace-switch ace-switch-5">
            <span class="lbl"></span>
        </label>
        <hr>
        <label for="select4">Allow picture URL</label>
        <label class="pull-right inline">
            <?php echo $_smarty_tpl->tpl_vars['row']->value['picture_url'];?>

            <input value="yes"  name="picture_url" id="select4" <?php if ($_smarty_tpl->tpl_vars['row']->value['picture_url']=='yes') {?>checked="checked"<?php }?> type="checkbox" class="ace ace-switch ace-switch-5">
            <span class="lbl"></span>
        </label>
        <hr>
        <label for="select5">Allow picture upload</label>
        <label class="pull-right inline">
            <?php echo $_smarty_tpl->tpl_vars['row']->value['picture_upload'];?>

            <input value="yes"  name="picture_upload" id="select5" <?php if ($_smarty_tpl->tpl_vars['row']->value['picture_upload']=='yes') {?>checked="checked"<?php }?> type="checkbox" class="ace ace-switch ace-switch-5">
            <span class="lbl"></span>
        </label>
        <hr>
        <label for="backgroundurl">Allow Background URL</label>
        <label class="pull-right inline">
            <?php echo $_smarty_tpl->tpl_vars['row']->value['background_url'];?>

            <input value="yes"  name="background_url" id="select6" <?php if ($_smarty_tpl->tpl_vars['row']->value['background_url']=='yes') {?>checked="checked"<?php }?> type="checkbox" class="ace ace-switch ace-switch-5">
            <span class="lbl"></span>
        </label>
        <hr>
        <label for="backgroundupload">Allow background upload</label>
        <label class="pull-right inline">
            <?php echo $_smarty_tpl->tpl_vars['row']->value['background_upload'];?>

            <input value="yes"  name="background_upload" id="select7" <?php if ($_smarty_tpl->tpl_vars['row']->value['background_upload']=='yes') {?>checked="checked"<?php }?> type="checkbox" class="ace ace-switch ace-switch-5">
            <span class="lbl"></span>
        </label>
        <hr>
        <label for="background_color">Allow background color</label>
        <label class="pull-right inline">
            <?php echo $_smarty_tpl->tpl_vars['row']->value['background_color'];?>

            <input value="yes" name="background_color" id="background_color" <?php if ($_smarty_tpl->tpl_vars['row']->value['background_color']=='yes') {?>checked="checked"<?php }?> type="checkbox" class="ace ace-switch ace-switch-5">
            <span class="lbl"></span>
        </label>

    </div>

    <div class="col-md-4">
      <label for="max_profile_pic_size">Max profile pic size</label>
      <input class="form-control" name="max_profile_pic_size" type="text" id="max_profile_pic_size" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['max_profile_pic_size'];?>
" size="6" maxlength="10" />KBs
    <br>
        <label for="max_bg_size">Max Background Size</label>
        <input class="form-control" name="max_bg_size" type="text" id="max_bg_size" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['max_bg_size'];?>
" size="6" maxlength="10" />
        KBs
    </div>

    <div class="col-md-4">
      <label for="max_profile_pic_width">Max profile pic dimension</label>
      <input class="form-control" name="max_profile_pic_width" type="text" id="max_profile_pic_width" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['max_profile_pic_width'];?>
" size="6" maxlength="10" />
    <br>
        <label for="max_bg_width">Max Background Dimension</label>
        <input class="form-control" name="max_bg_width" type="text" id="max_bg_width" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['max_bg_width'];?>
" size="6" maxlength="10" />
        Pixels
    </div>

        </div>


</div>
      </div>
  
<div align="right"class="main_page_div" style="padding:5px; min-height:0px; margin-top:10px"><label>
  <input type="submit" name="update" class="btn btn-primary btn-sm" value="Update Settings" id="udpate" />
</label>
</div>
</form>

<style type="text/css">
  .videoResolution-holder {
    margin-top: 15px;
    border-radius: 5px;
  }
</style>

<script type="text/javascript">
  $(document).ready(function(){
    $(".cb_combo_res").on("click",function(){
      $(".res_options").toggle( "slide" );
    });
  });
</script><?php }} ?>
