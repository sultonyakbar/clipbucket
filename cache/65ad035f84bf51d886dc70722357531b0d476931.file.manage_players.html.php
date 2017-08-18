<?php /* Smarty version Smarty-3.1.15, created on 2017-08-17 22:43:25
         compiled from "C:\xampp\htdocs\clipbucket\admin_area\styles\cb_2014\layout\manage_players.html" */ ?>
<?php /*%%SmartyHeaderCode:316985995ffed92df96-25530244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65ad035f84bf51d886dc70722357531b0d476931' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\admin_area\\styles\\cb_2014\\layout\\manage_players.html',
      1 => 1502865810,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '316985995ffed92df96-25530244',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mode' => 0,
    'row' => 0,
    'Cbucket' => 0,
    'player_file' => 0,
    'player_dir' => 0,
    'cbplayer' => 0,
    'curplayer' => 0,
    'players' => 0,
    'player' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5995ffedb52a71_41145122',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5995ffedb52a71_41145122')) {function content_5995ffedb52a71_41145122($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\clipbucket\\includes\\smartyv3\\plugins\\modifier.date_format.php';
?><?php if ($_smarty_tpl->tpl_vars['mode']->value=='show_settings') {?>
<div class="heading">
  <h2>ClipBucket Website Player Settings</h2>
</div>

<form action="manage_players.php?mode=show_settings" method="post" enctype="multipart/form-data" name="player_settings">
        <div class="row">
<!--<div class="col-md-4">
  <label for="pak_license">
    Pakplayer license<br>
    <small>If you have pakplayer license, please enter it here</small>
  </label>
  <input class="form-control" type="text" name="pak_license" id="pak_license" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['pak_license'];?>
" />
</div>-->
<div class="col-md-4">
  <label for="">
    Autoplay<br>
    <small>if yes, all videos will be played automatically</small>
  </label>
    <select class="form-control" name="autoplay_video" id="autoplay_video">
        <option value="yes"  <?php if ($_smarty_tpl->tpl_vars['row']->value['autoplay_video']=='yes') {?> selected="selected" <?php }?> >Yes</option>
        <option value="no" <?php if ($_smarty_tpl->tpl_vars['row']->value['autoplay_video']=='no') {?> selected="selected" <?php }?> >No</option>
    </select>
</div>
<div class="col-md-4">
  <label for="use_playlist">
    Use Playlist<br>
    <small>By turning this on, player will turn on playlists feature in player (if available)</small>
  </label>
    <select class="form-control" name="use_playlist" id="use_playlist">
        <option value="yes"  <?php if ($_smarty_tpl->tpl_vars['row']->value['autoplay_video']=='yes') {?> selected="selected" <?php }?> >Yes</option>
        <option value="no"  <?php if ($_smarty_tpl->tpl_vars['row']->value['use_playlist']=='no') {?> selected="selected" <?php }?>} >No</option>
    </select>
</div>
<div class="col-md-4">
  <label for="embed_player_width">
    Embed Player Width<br>
    <small>Enter embedable player width in pixels</small>
  </label>
  <input class="form-control" name="embed_player_width" type="text" id="embed_player_width" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['embed_player_width'];?>
" />
</div>
</div>
        <div class="row">
<!--<div class="col-md-4">
  <label for="logo_file">
    Logo File<br>
    <small>
      Logo file that will display on your flash player
    </small>
  </label>
  <input type="file" class="form-control" name="logo_file" id="logo_file" />
</div>-->
<div class="col-md-4">
  <label for="buffer_time">Buffer time</label>
  <input class="form-control" type="text" name="buffer_time" id="buffer_time" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['buffer_time'];?>
" />
</div>
<div class="col-md-4">
  <label for="logo_placement">
    Logo Placement<br>
    Placement of logo, top, left , right or bottom
  </label>
  <select class="form-control" name="logo_placement" id="logo_placement">
      <option value="tl" <?php if ($_smarty_tpl->tpl_vars['row']->value['logo_placement']=='tl') {?> selected="selected"<?php }?>>Top Left</option>
      <option value="tr" <?php if ($_smarty_tpl->tpl_vars['row']->value['logo_placement']=='tr') {?> selected="selected"<?php }?>>Top Right</option>
      <option value="br" <?php if ($_smarty_tpl->tpl_vars['row']->value['logo_placement']=='br') {?> selected="selected"<?php }?>>Bottom Right</option>
      <option value="bl" <?php if ($_smarty_tpl->tpl_vars['row']->value['logo_placement']=='bl') {?> selected="selected"<?php }?>>Bottom Left</option>
    </select>
</div>
<div class="col-md-4">
  <label for="logo_padding">Logo padding<br>
  Padding logo,top,left,right or bottom
  </label>
  <input class="form-control" type="text" id="logo_padding" name="logo_padding" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['logo_padding'];?>
" />
</div>
</div>
        <br>
        <div class="row">

<!-- <div class="col-md-4">
  <label for="youtube_enabled">
    Play Youtube Video Inside Player<br>
    <small>this will let you play youtube videos in your player</small>
  </label>
    <select class="form-control" name="youtube_enabled" id="youtube_enabled">
        <option value="yes"  <?php if ($_smarty_tpl->tpl_vars['row']->value['youtube_enabled']=='yes') {?> selected="selected" <?php }?>>Yes</option>
        <option value="no"  <?php if ($_smarty_tpl->tpl_vars['row']->value['youtube_enabled']=='no') {?> selected="selected" <?php }?>>No</option>
    </select>
</div> -->

<div class="col-md-4">
  <label for="textfield">
    Embed Player Height<br>
    <small>Enter embedable player width in pixels</small>
  </label>
  <input class="form-control" name="embed_player_height" type="text" id="textfield" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['embed_player_height'];?>
" />
</div>
<div class="col-md-4">
  <label for="autoplay_embed0">
    Autoplay Embed<br>
    <small>Autoplay embeded video by default</small>
  </label>
    <select class="form-control" name="autoplay_embed" id="autoplay_embed">
        <option value="yes"  <?php if ($_smarty_tpl->tpl_vars['row']->value['autoplay_embed']=='yes') {?> selected="selected" <?php }?>>Yes</option>
        <option value="no" <?php if ($_smarty_tpl->tpl_vars['row']->value['autoplay_embed']=='no') {?> selected="selected" <?php }?>>No</option>
    </select>
</div>
<div class="col-md-4">
  <label for="enlarge_button">
    Enlarge/small Button<br>
    <small>this will let you enable enlarge/small button for CB_html5_player</small>
  </label>
    <select class="form-control" name="enlarge_button" id="enlarge_button">
        <option value="yes"  <?php if ($_smarty_tpl->tpl_vars['row']->value['enlarge_button']=='yes') {?> selected="selected" <?php }?>>Yes</option>
        <option value="no"  <?php if ($_smarty_tpl->tpl_vars['row']->value['enlarge_button']=='no') {?> selected="selected" <?php }?>>No</option>
    </select>
</div>

</div>
        <div class="row">

<div class="col-md-4">
  <label for="pseudostreaming_0">
    Use PseudoStreaming<br>
    <small>Let users to play video from anywhere, requires h264 streaming module from webserver</small>  
  </label>
    <select class="form-control" name="pseudostreaming" id="pseudostreaming">
        <option value="yes" <?php if ($_smarty_tpl->tpl_vars['row']->value['pseudostreaming']=='yes') {?> selected="selected" <?php }?>>Yes</option>
        <option value="no"  <?php if ($_smarty_tpl->tpl_vars['row']->value['pseudostreaming']=='no') {?> selected="selected" <?php }?> >No</option>
    </select>
</div>
</div>
<div class="button">
<br>
<input type="submit" class="btn btn-primary" value="Update Player Settings"  name="update" id="update_player_settings">
</div>
</form>
<br>
        



<script type="text/javascript">
  function update_player_size(width,height,normal_player,channel_player)
  {
    var page = baseurl+'/actions/update_configs.php';
    $.post(page,
    {
      width : width,
      height : height,
      update_player_size : normal_player,
      update_channel_player_size:channel_player
    },
    function(data)
    {
      if(!data)
        alert("No data");
      else
        $("#msg_box").html('<div style="width:300px; padding:5px; text-align:center; background-color:#0099cc; border-radius:5px; -moz-border-radius:5px; color:#fff">'+data+'</div>');
    },'text');

  }

  $(function() {
    $("#resizable").resizable({
      maxHeight: 800,
      maxWidth: 800,
      minHeight: 100,
      minWidth: 100,
      grid: 10,
      resize:function(event,ui){$("#width").val(ui.size.width);$("#height").val(ui.size.height);},
      stop:function(event,ui){update_player_size(ui.size.width,ui.size.height,'yes','')}
    });

     $("#width").change(function () {$('#resizable').css("width",this.value+'px') ; update_player_size(this.value,$("#height").val(),'yes','') });
     $("#height").change(function () {$('#resizable').css("height",this.value+'px');  update_player_size($("#width").val(),this.value,'yes','')  });
  });


  $(function() {
    $("#resizable-channel").resizable({
      maxHeight: 800,
      maxWidth: 800,
      minHeight: 100,
      minWidth: 100,
      grid: 10,
      resize:function(event,ui){$("#channel_width").val(ui.size.width);$("#channel_height").val(ui.size.height);},
      stop:function(event,ui){update_player_size(ui.size.width,ui.size.height,'','yes')}
    });

     $("#channel_width").change(function () {$('#resizable-channel').css("width",this.value+'px') ; update_player_size(this.value,$("#channel_height").val(),'','yes') });
     $("#channel_height").change(function () {$('#resizable-channel').css("height",this.value+'px');  update_player_size($("#channel_width").val(),this.value,'','yes')  });
  });
</script>




<?php } else { ?>
<div class="heading">
  <h2>Selected Player</h2>
</div>
<div>
  <?php if (isset($_smarty_tpl->tpl_vars["player_dir"])) {$_smarty_tpl->tpl_vars["player_dir"] = clone $_smarty_tpl->tpl_vars["player_dir"];
$_smarty_tpl->tpl_vars["player_dir"]->value = $_smarty_tpl->tpl_vars['Cbucket']->value->configs['player_dir']; $_smarty_tpl->tpl_vars["player_dir"]->nocache = null; $_smarty_tpl->tpl_vars["player_dir"]->scope = 0;
} else $_smarty_tpl->tpl_vars["player_dir"] = new Smarty_variable($_smarty_tpl->tpl_vars['Cbucket']->value->configs['player_dir'], null, 0);?>
  <?php if (isset($_smarty_tpl->tpl_vars["player_file"])) {$_smarty_tpl->tpl_vars["player_file"] = clone $_smarty_tpl->tpl_vars["player_file"];
$_smarty_tpl->tpl_vars["player_file"]->value = $_smarty_tpl->tpl_vars['Cbucket']->value->configs['player_file']; $_smarty_tpl->tpl_vars["player_file"]->nocache = null; $_smarty_tpl->tpl_vars["player_file"]->scope = 0;
} else $_smarty_tpl->tpl_vars["player_file"] = new Smarty_variable($_smarty_tpl->tpl_vars['Cbucket']->value->configs['player_file'], null, 0);?>

  <?php if (isset($_smarty_tpl->tpl_vars["curplayer"])) {$_smarty_tpl->tpl_vars["curplayer"] = clone $_smarty_tpl->tpl_vars["curplayer"];
$_smarty_tpl->tpl_vars["curplayer"]->value = $_smarty_tpl->tpl_vars['cbplayer']->value->getPlayerDetails($_smarty_tpl->tpl_vars['player_file']->value,$_smarty_tpl->tpl_vars['player_dir']->value); $_smarty_tpl->tpl_vars["curplayer"]->nocache = null; $_smarty_tpl->tpl_vars["curplayer"]->scope = 0;
} else $_smarty_tpl->tpl_vars["curplayer"] = new Smarty_variable($_smarty_tpl->tpl_vars['cbplayer']->value->getPlayerDetails($_smarty_tpl->tpl_vars['player_file']->value,$_smarty_tpl->tpl_vars['player_dir']->value), null, 0);?>


    <div class="row">
      <div class="col-md-4">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="alignCenter well">
              <img src="<?php echo $_smarty_tpl->tpl_vars['cbplayer']->value->get_preview_thumb($_smarty_tpl->tpl_vars['curplayer']->value['folder']);?>
" class="img-thumbnail" >
              <h3><?php echo $_smarty_tpl->tpl_vars['curplayer']->value['name'];?>
</h3>
              <em>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['curplayer']->value['author_page'];?>
"><strong><?php echo $_smarty_tpl->tpl_vars['curplayer']->value['author'];?>
</strong></a>
              </em>
              <p><?php echo $_smarty_tpl->tpl_vars['curplayer']->value['description'];?>
</p>
              <p>Version : <?php echo $_smarty_tpl->tpl_vars['curplayer']->value['version'];?>
, Released on <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['curplayer']->value['released']);?>
</p>
              <p>Website : <a href="<?php echo $_smarty_tpl->tpl_vars['curplayer']->value['website'];?>
"><?php echo $_smarty_tpl->tpl_vars['curplayer']->value['website'];?>
</a></p>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>

<div class="heading">
  <h2>Available Players</h2>
</div>
<div>
  

  <?php if (isset($_smarty_tpl->tpl_vars['players'])) {$_smarty_tpl->tpl_vars['players'] = clone $_smarty_tpl->tpl_vars['players'];
$_smarty_tpl->tpl_vars['players']->value = $_smarty_tpl->tpl_vars['cbplayer']->value->get_players(); $_smarty_tpl->tpl_vars['players']->nocache = null; $_smarty_tpl->tpl_vars['players']->scope = 0;
} else $_smarty_tpl->tpl_vars['players'] = new Smarty_variable($_smarty_tpl->tpl_vars['cbplayer']->value->get_players(), null, 0);?>

  <div class="templates_container">
    


      <div class="row">
      <?php  $_smarty_tpl->tpl_vars['player'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['player']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['players']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['player']->key => $_smarty_tpl->tpl_vars['player']->value) {
$_smarty_tpl->tpl_vars['player']->_loop = true;
?>
      <?php if ($_smarty_tpl->tpl_vars['player_file']->value!=$_smarty_tpl->tpl_vars['player']->value['file']&&$_smarty_tpl->tpl_vars['player_dir']->value!=$_smarty_tpl->tpl_vars['player']->value['folder']) {?>
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="well alignCenter">
                  <img src="<?php echo $_smarty_tpl->tpl_vars['cbplayer']->value->get_preview_thumb($_smarty_tpl->tpl_vars['player']->value['folder']);?>
" class="img-thumbnail" >
                  <h2><?php echo $_smarty_tpl->tpl_vars['player']->value['name'];?>
</h2>
                  <em>
                      <a href="<?php echo $_smarty_tpl->tpl_vars['player']->value['author_page'];?>
"><strong><?php echo $_smarty_tpl->tpl_vars['player']->value['author'];?>
</strong></a>
                  </em>
                  <p><?php echo $_smarty_tpl->tpl_vars['player']->value['description'];?>
</p>
                  <p>Version : <?php echo $_smarty_tpl->tpl_vars['player']->value['version'];?>
, Released on <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['player']->value['released']);?>
</p>
                  <p>Website : <a href="<?php echo $_smarty_tpl->tpl_vars['player']->value['website'];?>
"><?php echo $_smarty_tpl->tpl_vars['player']->value['website'];?>
</a></p>
                  <p><a href="manage_players.php?set=yes&folder=<?php echo $_smarty_tpl->tpl_vars['player']->value['folder'];?>
&file=<?php echo $_smarty_tpl->tpl_vars['player']->value['file'];?>
">Activate This Player</a></p>
              </div>
            </div>
          </div>
        </div>
      <?php }?>
      <?php } ?>
    </div>
  </div>
</div>
  

<?php }?><?php }} ?>
