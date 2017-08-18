<?php /* Smarty version Smarty-3.1.15, created on 2017-08-17 23:06:43
         compiled from "C:\xampp\htdocs\clipbucket\admin_area\styles\cb_2014\layout\upload_thumbs.html" */ ?>
<?php /*%%SmartyHeaderCode:218975996056359c155-63823425%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ae7909c26de848a4850c8f222c853c39d3bb561' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\admin_area\\styles\\cb_2014\\layout\\upload_thumbs.html',
      1 => 1502865812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '218975996056359c155-63823425',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'vidthumbs' => 0,
    'video' => 0,
    'vid_thumb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5996056371c148_34342491',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5996056371c148_34342491')) {function content_5996056371c148_34342491($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['data']->value['title']!='') {?>
<h3>Manage Video Thumbs</h3>
<div class="lead dropdown">
    <a class="btn btn-primary btn-xs dropdown-toggle pull-right" data-toggle="dropdown" href="">Actions <i class="caret"></i></a>
    <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdownMenu1">
        <li role="presentation"><a role="menuitem" tabindex="-1" href="upload_thumbs.php?video=<?php echo $_smarty_tpl->tpl_vars['data']->value['videoid'];?>
&gen_more=true">Regenerate Thumbs</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="edit_video.php?video=<?php echo $_smarty_tpl->tpl_vars['data']->value['videoid'];?>
">Back to Edit Details</a></li>
    </ul>
</div>
<form action="upload_thumbs.php?video=<?php echo $_smarty_tpl->tpl_vars['data']->value['videoid'];?>
" method="post" enctype="multipart/form-data" name="set_default_thumb" id="set_default_thumb">
    <fieldset class="fieldset">
        <?php if (isset($_smarty_tpl->tpl_vars['vidthumbs'])) {$_smarty_tpl->tpl_vars['vidthumbs'] = clone $_smarty_tpl->tpl_vars['vidthumbs'];
$_smarty_tpl->tpl_vars['vidthumbs']->value = get_thumb($_smarty_tpl->tpl_vars['data']->value,1,true,'FLASE',true,false,'original'); $_smarty_tpl->tpl_vars['vidthumbs']->nocache = null; $_smarty_tpl->tpl_vars['vidthumbs']->scope = 0;
} else $_smarty_tpl->tpl_vars['vidthumbs'] = new Smarty_variable(get_thumb($_smarty_tpl->tpl_vars['data']->value,1,true,'FLASE',true,false,'original'), null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['vid_thumb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vid_thumb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vidthumbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vid_thumb']->key => $_smarty_tpl->tpl_vars['vid_thumb']->value) {
$_smarty_tpl->tpl_vars['vid_thumb']->_loop = true;
?>
        <div class="cbthumbs">
            <?php echo $_smarty_tpl->tpl_vars['video']->value['title'];?>

            <div class="row-fluid">
                <ul class="ace-thumbnails">
                    <li>
                        <label for="<?php echo getname($_smarty_tpl->tpl_vars['vid_thumb']->value);?>
" >
                         <img src="<?php echo $_smarty_tpl->tpl_vars['vid_thumb']->value;?>
" class="img :focus" height="110" width="150"/>

                        </label>
                        <div class="tools tools-bottom">
                            <input class="select_control" id="<?php echo getname($_smarty_tpl->tpl_vars['vid_thumb']->value);?>
" name="default_thumb" type="radio" value="<?php echo getname($_smarty_tpl->tpl_vars['vid_thumb']->value);?>
.<?php echo getext($_smarty_tpl->tpl_vars['vid_thumb']->value);?>
"<?php if ($_smarty_tpl->tpl_vars['data']->value['default_thumb']==get_thumb_num($_smarty_tpl->tpl_vars['vid_thumb']->value)) {?> checked="checked"<?php }?> />
                            <?php if (getname($_smarty_tpl->tpl_vars['vid_thumb']->value)!='processing') {?>
                            <a href="?video=<?php echo $_smarty_tpl->tpl_vars['data']->value['videoid'];?>
&delete=<?php echo getname($_smarty_tpl->tpl_vars['vid_thumb']->value);?>
.<?php echo getext($_smarty_tpl->tpl_vars['vid_thumb']->value);?>
">
                                <i class="icon-remove red"></i>
                            </a>
                        </div>
                    </li>
                 </ul>
                <?php }?>
            </div>
        </div>
        <?php } ?>
        <div style="clear:both;"></div><br />
    </fieldset>
    <div class="form-group">
        <input type="submit" name="update_default_thumb" class="btn btn-danger btn-sm" value="Update Video Thumb"/>
    </div>
</form>
<form action="upload_thumbs.php?video=<?php echo $_smarty_tpl->tpl_vars['data']->value['videoid'];?>
" method="post" enctype="multipart/form-data" name="form1">
<!--     <div id="thumb_fileds" class="form-group">
        <a href="javascript:void(0)" onclick="$('#thumb_fileds').append('<input name=\'vid_thumb[]\' type=\'file\' /><br>')">+ Insert More</a></div> -->
        <h5>Upload New Thumb</h5>
        <input name="vid_thumb[]" type="file" />
        <label for="thumb_file"></label>
        <div class="form-group pull-right">
            <input type="submit" name="upload_thumbs" value="Upload Thumb(s)" class="btn btn-primary btn-sm"/>
        </div>
        

</form>
        <?php }?>



<script type="text/javascript">
    // set image properties, for Highlight effect added when click
    var imgProp = {
        'padding': '2px',
        'backgroundColor': '#006FFF',
        'borderSize': '2ps',
        'borderStyle': 'solid',
        'borderColor': '#006FFF'
    };

    // function to highlight IMGs on click -
    function highlightImg() {
        // gets all <img> tags, and their number
        var allimgs = document.getElementsByTagName('img');
        var nrallimgs = allimgs.length;

        // traverses the <img> elements, and register onclick to each one
        // else, apply the properties defined in $imgProp
        for(i=0; i<nrallimgs; i++) {
            allimgs[i].onclick=function() {
                // if borderStyle is already applied, anulates the 'padding', 'background' and 'border' properties
                if(this.style.borderStyle == imgProp.borderStyle) {
                    this.style.padding = 'auto';
                    this.style.background = 'none';
                    this.style.border = 'none';
                }
                else {
                    this.style.padding = imgProp.padding;
                    this.style.backgroundColor = imgProp.backgroundColor;
                    this.style.borderSize = imgProp.borderSize;
                    this.style.borderStyle = imgProp.borderStyle;
                    this.style.borderColor = imgProp.borderColor;
                }
            }
        }
    }

    // calls the highlightImg() function to apply the effect
    highlightImg();
</script>

<?php }} ?>
