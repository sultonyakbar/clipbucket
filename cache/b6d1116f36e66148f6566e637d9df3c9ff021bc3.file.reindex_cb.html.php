<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 10:59:35
         compiled from "C:\xampp\htdocs\clipbucket\admin_area\styles\cb_2014\layout\reindex_cb.html" */ ?>
<?php /*%%SmartyHeaderCode:2546859940977d58e01-14127384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6d1116f36e66148f6566e637d9df3c9ff021bc3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\admin_area\\styles\\cb_2014\\layout\\reindex_cb.html',
      1 => 1502865811,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2546859940977d58e01-14127384',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'imageurl' => 0,
    'loop_size' => 0,
    'indexing' => 0,
    'from' => 0,
    'to' => 0,
    'total' => 0,
    'index_msgs' => 0,
    'themsg' => 0,
    'stop_loop' => 0,
    'next_index' => 0,
    'mode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_59940977e27023_62006304',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59940977e27023_62006304')) {function content_59940977e27023_62006304($_smarty_tpl) {?><div class="heading">
    <h2>
    Re-index Clipbucket
    <img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/help.png" title="Re-index simples means to recount everything and update it." />
</h2>
</div>
<p class="alert alert-info">
    Here you can re-index your videos, users or groups statistics. From below select which thing you want to re-index.
</p>

<div class="form-group">
    <label for="the_loop_size">
        Loop Size<br>
        <small>number of items to reindex at once</small>
    </label>
    <input class="form-control" type="text" name="textfield" value="<?php echo $_smarty_tpl->tpl_vars['loop_size']->value;?>
" id="the_loop_size" />  
</div>


<div class="tabbable">
    <ul class="nav nav-tabs" id="myTab3">
        <li class="active">
            <a data-toggle="tab" href="#rvideos">
                Reindex Videos
            </a>
        </li>
        <li>
            <a data-toggle="tab" href="#rusers">
                Reindex Users
            </a>
        </li>
        <li>
            <a data-toggle="tab" href="#rgroups">
                Reindex Groups
            </a>
        </li>
        <li>
            <a data-toggle="tab" href="#rcollections">
                Reindex Collections
            </a>
        </li>
        <li>
            <a data-toggle="tab" href="#rphotos">
                Reindex Photos
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div id="rvideos" class="tab-pane in active">
            <div class="form-group">
                <label for="index_vids">Reindex Videos<br>
                    <small>this will reindex total playlists, total favorites and total comments made on video</small>
                </label>
                <form name="reindex_videos" method="get" action="">
                    <input type="hidden" name="loop_size" value="" id="loop_start" />
                    <input type="submit" name="index_vids" id="index_vids" value="Reindex" class="btn btn-primary btn-xs btn-danger" onclick="$('#loop_start').val($('#the_loop_size').val())"/>
                </form>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['indexing']->value) {?>
            <div class="widget-box">
                <div class="widget-header widget-header-small header-color-dark"><div>Indexing <?php echo $_smarty_tpl->tpl_vars['from']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['to']->value;?>
 of <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</div></div>
                <?php  $_smarty_tpl->tpl_vars['themsg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['themsg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index_msgs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['themsg']->key => $_smarty_tpl->tpl_vars['themsg']->value) {
$_smarty_tpl->tpl_vars['themsg']->_loop = true;
?>
                <ul class="list-unstyled spaced2"><?php echo $_smarty_tpl->tpl_vars['themsg']->value;?>
</ul>
                <?php } ?>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['stop_loop']->value!='yes') {?>
            <script type="text/javascript">
                var start_index = '<?php echo $_smarty_tpl->tpl_vars['next_index']->value;?>
';
                var loop_size = '<?php echo $_GET['loop_size'];?>
';
                var mode = '<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
';
                var myVar = setInterval(myTimer, 1000);
                function myTimer() {
                  $(window.location).attr('href', '?loop_size='+loop_size+'&'+mode+'=yes&start_index='+start_index);
                
                } 
            </script>
            redirecting....do not close this window
            <?php } else { ?>
            <p>Indexing has been completed.</p>
            <?php }?>
            <?php }?>

</div>
        <div id="rusers" class="tab-pane">
            <div class="form-group">
                <label for="reindex_users">
                    Reindex users<br>
                    <small>
                        This will reindex total videos, total comments, total comments made, total subscribers and subscriptions, total groups owned
                    </small>
                </label>
                <form name="reindex_users" method="get" action="">
                    <input type="hidden" name="loop_size" value="" id="loop_start_user" />
                    <input type="submit" name="index_usrs" id="index_usrs" value="Reindex" class="btn btn-primary btn-xs btn-danger"
                           onclick="$('#loop_start_user').val($('#the_loop_size').val())"/>
                </form>
            </div>
        </div>
        <div id="rgroups" class="tab-pane">
            <div class="form-group">
                <label for="index_gps">
                    Reindex Groups<br>
                    <small>
                        This will reindex all groups , update total members, total videos , total topics
                    </small>
                </label>
                <form name="reindex_groups" method="get" action="">
                    <input type="hidden" name="loop_size" value="" id="loop_start_gp" />
                    <input type="submit" name="index_gps" id="index_gps" value="Reindex" class="btn btn-primary btn-xs btn-danger"
                           onclick="$('#loop_start_gp').val($('#the_loop_size').val())"/>
                </form>
            </div>
        </div>
        <div id="rcollections" class="tab-pane">
            <div class="form-group">
                <label for="loop_start_cl">
                    Reindex Collections<br>
                    <small>This will reindex all collections , update total objects, total comments</small>
                </label>
                <form name="reindex_collections" method="get" action="">
                    <input type="hidden" name="loop_size" value="" id="loop_start_cl" />
                    <input type="submit" name="index_collections" id="index_collections" value="Reindex" class="btn btn-primary btn-xs btn-danger" onclick="$('#loop_start_gp').val($('#the_loop_size').val())"/>
                </form>
            </div>
        </div>
        <div id="rphotos" class="tab-pane">
            <div class="form-group">
                <label for="loop_start_ph">
                    Reindex Photos<br>
                    <small>This will reindex all photos , update total favorites, total comments</small>
                </label>
                <form name="reindex_photos" method="get" action="">
                    <input type="hidden" name="loop_size" value="" id="loop_start_ph" />
                    <input type="submit" name="index_photos" id="index_photos" value="Reindex" class="btn btn-primary btn-xs btn-danger"
                           onclick="$('#loop_start_gp').val($('#the_loop_size').val())"/>
                </form>
            </div>
        </div>
        </div>


</div>

  <?php }} ?>
