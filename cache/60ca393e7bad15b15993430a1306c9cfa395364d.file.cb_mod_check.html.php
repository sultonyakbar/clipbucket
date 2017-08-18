<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 10:58:43
         compiled from "C:\xampp\htdocs\clipbucket\admin_area\styles\cb_2014\layout\cb_mod_check.html" */ ?>
<?php /*%%SmartyHeaderCode:1800259940943920970-54847680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60ca393e7bad15b15993430a1306c9cfa395364d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\admin_area\\styles\\cb_2014\\layout\\cb_mod_check.html',
      1 => 1502865808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1800259940943920970-54847680',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ffmpegVersion' => 0,
    'imageurl' => 0,
    'ffmpeg_status' => 0,
    'phpVersion' => 0,
    'php_status' => 0,
    'media_info' => 0,
    'MP4BoxVersion' => 0,
    'mp4box_status' => 0,
    'imagick_version' => 0,
    'ffprobe_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_59940943a27684_73552786',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59940943a27684_73552786')) {function content_59940943a27684_73552786($_smarty_tpl) {?><div class="heading">
  <h2>Server Video Conversion Modules &amp; Tools</h2>
</div>

<p class="alert alert-info">
A brief test to check weather server modules exist or not and what are there versions and paths
</p>


<h3>Modules and paths</h3>


<div class="well">
  <h4>FFMPEG</h4>
    <?php if ($_smarty_tpl->tpl_vars['ffmpegVersion']->value) {?>
      <img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/tick.png"/>
    <?php } else { ?>
      <img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/alert.png"/>
    <?php }?>
    <div>
      FFmpeg is used to covert videos from different versions to FLV , MP4 and many other formats.
      <a href="http://clip-bucket.com/ffmpeg">Learn more</a>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['ffmpegVersion']->value) {?>
      Version <strong><?php echo $_smarty_tpl->tpl_vars['ffmpegVersion']->value;?>
</strong>
    <?php } else { ?>
    <p class="alert alert-danger">ffmpeg is not found</p>
      <?php if ($_smarty_tpl->tpl_vars['ffmpeg_status']->value['error']) {?>
        <br><span style="color:#e70000"><?php echo $_smarty_tpl->tpl_vars['ffmpeg_status']->value['error'];?>
</span>
      <?php }?>
    <?php }?>
</div>

<div class="well">
    <h4>PHP CLI</h4>
    <?php if ($_smarty_tpl->tpl_vars['phpVersion']->value) {?>
      <img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/tick.png"/>
    <?php } else { ?>
      <img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/alert.png"/>
    <?php }?>
    <div>
      PHP CLI is used to peform video conversion in a background process.
      <a href="http://php.net/manual/en/features.commandline.php">Learn more</a>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['phpVersion']->value) {?>
      Version <strong><?php echo $_smarty_tpl->tpl_vars['phpVersion']->value;?>
</strong>
    <?php } else { ?>
    <p class="alert alert-danger">php is not found</p>
  	  <?php if ($_smarty_tpl->tpl_vars['php_status']->value['error']) {?>
        <br><span style="color:#e70000"><?php echo $_smarty_tpl->tpl_vars['php_status']->value['error'];?>
</span>
      <?php }?>
    <?php }?>

</div>

<div class="well">
  <h4>Media Info</h4>
    <?php if ($_smarty_tpl->tpl_vars['media_info']->value) {?>
      <img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/tick.png"/>
    <?php } else { ?>
      <img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/alert.png"/>
    <?php }?>
    <div>
      MediaInfo supplies technical and tag information about a video or audio file.
      <a href="https://mediaarea.net/en/MediaInfo">Learn more</a>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['media_info']->value) {?>
      Version <strong><?php echo $_smarty_tpl->tpl_vars['media_info']->value;?>
</strong>
    <?php } else { ?>
    <p class="alert alert-danger">Media Info is not found</p>
    <?php }?>
</div>



<div class="well">
  <h4>MP4Box</h4>
  <?php if ($_smarty_tpl->tpl_vars['MP4BoxVersion']->value) {?>
      <img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/tick.png"/>
    <?php } else { ?>
      <img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/alert.png"/>
    <?php }?>
  <div>
    MP4Box is a tool used to repair MP4 files to make them streamable
    <a href="http://docs.clip-bucket.com/clipbucket-docs/mp4box">Learn more</a>
  </div>
  <?php if ($_smarty_tpl->tpl_vars['MP4BoxVersion']->value) {?>
	Version
      <?php if ($_smarty_tpl->tpl_vars['MP4BoxVersion']->value) {?>
      	<strong><?php echo $_smarty_tpl->tpl_vars['MP4BoxVersion']->value;?>
</strong>
      <?php }?>
  <?php } else { ?>
  	<p class="alert alert-danger">Mp4box is not found</p>
      <?php if ($_smarty_tpl->tpl_vars['mp4box_status']->value['error']) {?>
      	<br><span style="color:#e70000"><?php echo $_smarty_tpl->tpl_vars['mp4box_status']->value['error'];?>
</span>
      <?php }?>
  <?php }?>

</div>




<div class="well">
  <h4>ImageMagick</h4>
  <?php if ($_smarty_tpl->tpl_vars['imagick_version']->value) {?>
      <img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/tick.png"/>
    <?php } else { ?>
      <img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/alert.png"/>
    <?php }?>
  <div>
   Imagick is a native php extension to create and modify images using the ImageMagick API
    <a href="http://php.net/manual/en/imagick.getversion.php">Learn more</a>
  </div>
  <?php if ($_smarty_tpl->tpl_vars['imagick_version']->value) {?>
  Version
      <?php if ($_smarty_tpl->tpl_vars['imagick_version']->value) {?>
        <strong><?php echo $_smarty_tpl->tpl_vars['imagick_version']->value;?>
</strong>
      <?php }?>
  <?php } else { ?>
    <p class="alert alert-danger">Imagick is not found</p>
      <?php if ($_smarty_tpl->tpl_vars['imagick_version']->value['error']) {?>
        <br><span style="color:#e70000"><?php echo $_smarty_tpl->tpl_vars['imagick_version']->value['error'];?>
</span>
      <?php }?>
  <?php }?>

</div>

<div class="well">
  <h4>FFProbe</h4>
  <?php if ($_smarty_tpl->tpl_vars['ffprobe_path']->value) {?>
      <img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/tick.png"/>
    <?php } else { ?>
      <img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/alert.png"/>
    <?php }?>
  <div>
   ffprobe Is an Extension of ffmpeg used to get info of media file
    <a href="https://ffmpeg.org/ffprobe.html">Learn more</a>
  </div>
  <?php if ($_smarty_tpl->tpl_vars['ffprobe_path']->value) {?>
  Version
      <?php if ($_smarty_tpl->tpl_vars['ffprobe_path']->value) {?>
        <strong><?php echo $_smarty_tpl->tpl_vars['ffprobe_path']->value;?>
</strong>
      <?php }?>
  <?php } else { ?>
    <p class="alert alert-danger">Imagick is not found</p>
      <?php if ($_smarty_tpl->tpl_vars['ffprobe_path']->value['error']) {?>
        <br><span style="color:#e70000"><?php echo $_smarty_tpl->tpl_vars['ffprobe_path']->value['error'];?>
</span>
      <?php }?>
  <?php }?>

</div><?php }} ?>
