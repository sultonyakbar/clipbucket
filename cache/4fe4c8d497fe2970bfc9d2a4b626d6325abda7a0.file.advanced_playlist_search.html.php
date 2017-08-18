<?php /* Smarty version Smarty-3.1.15, created on 2017-08-17 23:05:49
         compiled from "C:\xampp\htdocs\clipbucket\admin_area\styles\cb_2014\layout\blocks\advanced_playlist_search.html" */ ?>
<?php /*%%SmartyHeaderCode:205455996052d17f901-02164028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fe4c8d497fe2970bfc9d2a4b626d6325abda7a0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\admin_area\\styles\\cb_2014\\layout\\blocks\\advanced_playlist_search.html',
      1 => 1502865813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205455996052d17f901-02164028',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5996052d20bfa2_15010928',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5996052d20bfa2_15010928')) {function content_5996052d20bfa2_15010928($_smarty_tpl) {?><div class="advanceSearchButton clearfix">
    <a href="#" class="btn btn-primary btn-sm pull-right current after" onclick="$('#searchdiv').toggle();return false;" style="margin-bottom: 0px;position: relative; top: 15px;">
        Advanced Search
        <i class="glyphicon glyphicon-chevron-down down"></i>
         <i class="glyphicon glyphicon-chevron-up up" style="display:none"></i>
    </a>
    
</div>
<div class="search_box well" id="searchdiv" <?php if ($_COOKIE['show_searchdiv_search']!='show') {?> style="display:none"<?php }?>>
    <form id="video_search" name="video_search" method="get" action="manage_playlist.php" class="video_search">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <!-- <label for="userid">Userid</label> -->
                    <label for="title">Userid</label>
                    <input class="form-control" name="userid" type="text" id="userid" value="<?php echo get_form_val('userid',true);?>
" />
                </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                    <!-- <label for="title">Video title</label> -->
                    <label for="title">Playlist title</label>
                    <input name="playlist_name" type="text" class="form-control" id="title" value="<?php echo get_form_val('playlist_name','divue');?>
" />
                </div>  
            </div>
            <div class="col-md-4">
              <div class="form-group">
                    <!-- <label for="tags">Video tags</label> -->
                    <label for="title">Playlist tags</label>
                    <input class="form-control" name="tags" type="text" id="tags" value="<?php echo get_form_val('tags',true);?>
" />
                </div>  
            </div>
        </div>
        <div class="form-group">
            <input type="submit" name="search" id="search" value="Search" class="btn btn-success btn-sm"/>
        </div>
    </form>
</div>


 <script type="text/javascript">
       

        $(document).ready(function neww () {
        $(".current").click(function() {
        $(this).toggleClass('after');
        if(!$(this).hasClass('after')) 
           {
      
          $('.down').hide();
          $('.up').show();
           }
    
        else
       {
 
        $('.down').show();
         $('.up').hide();
       }
 
});

       })
       
</script><?php }} ?>
