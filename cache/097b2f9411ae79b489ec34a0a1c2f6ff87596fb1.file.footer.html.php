<?php /* Smarty version Smarty-3.1.15, created on 2017-08-17 23:32:33
         compiled from "C:\xampp\htdocs\clipbucket\styles\cb_28\layout\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:43535993f37b506d23-29510870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '097b2f9411ae79b489ec34a0a1c2f6ff87596fb1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\styles\\cb_28\\layout\\footer.html',
      1 => 1503005547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43535993f37b506d23-29510870',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5993f37b682f87_15352662',
  'variables' => 
  array (
    'Cbucket' => 0,
    'foot_menu' => 0,
    'fm' => 0,
    'lang_obj' => 0,
    'langs' => 0,
    'total_langs' => 0,
    'lang' => 0,
    'selected' => 0,
    'baseurl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5993f37b682f87_15352662')) {function content_5993f37b682f87_15352662($_smarty_tpl) {?><?php echo ANCHOR(array('place'=>"play_front_anchor"),$_smarty_tpl);?>

<footer id="footer" class="clearfix">
	<?php echo $_smarty_tpl->tpl_vars['Cbucket']->value->footer();?>

	<div class="container">
		<div class="footer-holder">
			<?php echo ANCHOR(array('place'=>"beastAll"),$_smarty_tpl);?>

			<ul class="footer-links column">
				<?php if (isset($_smarty_tpl->tpl_vars['foot_menu'])) {$_smarty_tpl->tpl_vars['foot_menu'] = clone $_smarty_tpl->tpl_vars['foot_menu'];
$_smarty_tpl->tpl_vars['foot_menu']->value = foot_menu(); $_smarty_tpl->tpl_vars['foot_menu']->nocache = null; $_smarty_tpl->tpl_vars['foot_menu']->scope = 0;
} else $_smarty_tpl->tpl_vars['foot_menu'] = new Smarty_variable(foot_menu(), null, 0);?>
				<?php  $_smarty_tpl->tpl_vars['fm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['foot_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fm']->key => $_smarty_tpl->tpl_vars['fm']->value) {
$_smarty_tpl->tpl_vars['fm']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['fm']->value['name']!='') {?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['fm']->value['link'];?>
" <?php if ($_smarty_tpl->tpl_vars['fm']->value['target']) {?> target="<?php echo $_smarty_tpl->tpl_vars['fm']->value['target'];?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['fm']->value['onclick']) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['fm']->value['onclick'];?>
" <?php }?>><?php echo $_smarty_tpl->tpl_vars['fm']->value['name'];?>
</a></li>
				<?php }?>
				<?php } ?>
			</ul>
			<div class="lang_wrapper column">
				<?php if (config("allow_language_change")) {?>
				<?php if (isset($_smarty_tpl->tpl_vars['langs'])) {$_smarty_tpl->tpl_vars['langs'] = clone $_smarty_tpl->tpl_vars['langs'];
$_smarty_tpl->tpl_vars['langs']->value = $_smarty_tpl->tpl_vars['lang_obj']->value->get_langs('yes'); $_smarty_tpl->tpl_vars['langs']->nocache = null; $_smarty_tpl->tpl_vars['langs']->scope = 0;
} else $_smarty_tpl->tpl_vars['langs'] = new Smarty_variable($_smarty_tpl->tpl_vars['lang_obj']->value->get_langs('yes'), null, 0);?>
				<?php if (isset($_smarty_tpl->tpl_vars['total_langs'])) {$_smarty_tpl->tpl_vars['total_langs'] = clone $_smarty_tpl->tpl_vars['total_langs'];
$_smarty_tpl->tpl_vars['total_langs']->value = count($_smarty_tpl->tpl_vars['langs']->value); $_smarty_tpl->tpl_vars['total_langs']->nocache = null; $_smarty_tpl->tpl_vars['total_langs']->scope = 0;
} else $_smarty_tpl->tpl_vars['total_langs'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['langs']->value), null, 0);?>
				<?php if ($_smarty_tpl->tpl_vars['total_langs']->value>=2) {?>
					<div class="langdrop dropup">
					<button title="Change website language" class="btn btn-default dropdown-toggle" id="cblang-selector" type="button" data-toggle="dropdown">
						<span><?php echo $_smarty_tpl->tpl_vars['lang_obj']->value->lang_name;?>
</span>
						<i class="icon-down-arrow"></i>
					</button>
					<ul class="dropdown-menu">
						<?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['langs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
?>
							<?php if ($_smarty_tpl->tpl_vars['lang_obj']->value->lang==$_smarty_tpl->tpl_vars['lang']->value['language_code']) {?>
								<?php if (isset($_smarty_tpl->tpl_vars['selected'])) {$_smarty_tpl->tpl_vars['selected'] = clone $_smarty_tpl->tpl_vars['selected'];
$_smarty_tpl->tpl_vars['selected']->value = "selected"; $_smarty_tpl->tpl_vars['selected']->nocache = null; $_smarty_tpl->tpl_vars['selected']->scope = 0;
} else $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable("selected", null, 0);?>
							<?php } else { ?>
								<?php if (isset($_smarty_tpl->tpl_vars['selected'])) {$_smarty_tpl->tpl_vars['selected'] = clone $_smarty_tpl->tpl_vars['selected'];
$_smarty_tpl->tpl_vars['selected']->value = ''; $_smarty_tpl->tpl_vars['selected']->nocache = null; $_smarty_tpl->tpl_vars['selected']->scope = 0;
} else $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable('', null, 0);?>
							<?php }?>
							<li data-lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value['language_code'];?>
" class="pick-lang <?php echo $_smarty_tpl->tpl_vars['selected']->value;?>
"><a href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['lang']->value['language_name'];?>
</a></li>
						<?php } ?>
				 	</ul>
				</div>
				<?php }?>
				<?php }?>
			</div>
			<div class="copyright-poweredby column">
			</div>
		</div>
	</div><!-- end of custom-container -->
</footer>
<!-- cd-popup -->
<div class="cd-popup" role="alert">
	<div class="cb-popup-container clearfix">
		<div class="modal-inset">	
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col my-modal-content"></div>
		</div>
	</div>
	<a class="cd-popup-close" href="#">close</a>
</div>
<!-- close-cd-popup -->
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/photos.js"></script>
<script>
	$(document).on('click','.pick-lang',function(){
		var _this = $(this);
		var lang_code = _this.data('lang');
		var $currentLocation = window.location.href,
		matchedElement = $currentLocation.match(/\?/);
			  
		if(matchedElement == null)
		{
			window.location = "?set_site_lang="+lang_code;    
		} else {
			window.location = window.location+"&set_site_lang="+lang_code;    
		}
	});

	$(document).on('click','#cbsearch',function(e){
		e.preventDefault();
		searchForm = $('.search-form');
		searchQuery = $('#query').val();
		queryLen = searchQuery.length;
		if (queryLen <= 2) {
			msg = 'Search query<strong> '+searchQuery+'</strong> is too short. Open up!';
			_cb.throwHeadMsg('warning', msg, 3000,true);
			//alert("Search term is too short");
		} else {
			$('.search-form').submit();
		}
	});

	$('.dropdown-menu li').on('click',function(){
		var searchType = $('#searchTypes').find('span.search-type').html();
		var searchQuery = $('input#query').val();
		if (searchQuery.length > 1) {
			$('#cbsearch').trigger('click');
		}
	});
	
	jQuery(document).ready(function($){
		//open popup
		$(document).on('click','.cd-popup-trigger', function(event){
			event.preventDefault();
			$('.cd-popup').addClass('is-visible');
		});

		//close popup
		$(document).on('click','.cd-popup', function(event){
			if( $(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup') ) {
			event.preventDefault();
			$(this).removeClass('is-visible');
			$(".my-modal-content").html("");
			}
		});
		//close popup when clicking the esc keyboard button
		$(document).keydown(function(event){
			if(event.which=='27'){
				var videoId = $(".my-modal-content").attr("id");
				var cbPlayer = _cb.getPlayerEl(videoId);
				
				if (!$(cbPlayer).hasClass("vjs-fullscreen")){
					$('.cd-popup').removeClass('is-visible');
					$(".my-modal-content").html("");
					var modalPlayerInterval = setInterval(function(){ 
						var player = $(cbPlayer).find('video');
						var isPlaying = !$(player)[0].paused;
						if (isPlaying){
							$(player)[0].pause()
							clearInterval(modalPlayerInterval);
						}
					},100);
				}
			}
		});
	});


</script>
<?php echo $_smarty_tpl->tpl_vars['Cbucket']->value->footer();?>
<?php }} ?>
