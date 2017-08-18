<?php /* Smarty version Smarty-3.1.15, created on 2017-08-17 22:23:20
         compiled from "C:\xampp\htdocs\clipbucket\admin_area\styles\cb_2014\layout\conversion_lab.html" */ ?>
<?php /*%%SmartyHeaderCode:188705995fb38592947-37973923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd7b0daf7fcbb8493b033e2d5797841529ed5293' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\admin_area\\styles\\cb_2014\\layout\\conversion_lab.html',
      1 => 1502865808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188705995fb38592947-37973923',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'imageurl' => 0,
    'vdoFiles' => 0,
    'vFile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5995fb388401d7_94312981',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5995fb388401d7_94312981')) {function content_5995fb388401d7_94312981($_smarty_tpl) {?><script>
	var labRUrl = '<?php echo @constant('ADMIN_BASEURL');?>
/lab_resources';
	
		function experimentPart(mode){
			if(mode=='getPreDetails')
				$('#expOut').html('');
			
			var victim = $('#victim option:selected').val();

			var expHeads = 
			{
				'getPreDetails' : "Getting modules and video details...",
				'convertVideo1' : "Testing "+victim+" conversion Phase 1.."
			}
			
			$('#expOut').append('<div class="expHead" onClick="$(\'#'+mode+'\').slideToggle()" >'+expHeads[mode]+'</div>');
			
			$('#expOut').append('<div id="loadinDetails">please wait...</div>'); 
			
			$.post(labRUrl+'/experiments.php',{
			 "experiment":"yes",mode : mode,"victim":victim},
			 	function(data){
					
					var dataMsg = "";
					var dataErr = "";
					
					if(data.err)
						dataErr = data.err;
					
					if(data.msg)
						dataMsg = data.msg;
									
					$('#loadinDetails').after("<div id='"+mode+"'>"+dataMsg+dataErr+"</div>");
					$('#loadinDetails').remove();
					
					if(data.status)
					{
						$('#'+mode).slideToggle();
						experimentPart(data.status)
					}
				}
			 ,"json");
		}
	
</script>



<style>
	.expHead{ 
		color:#fff; 
		font-size:13px; 
		font-weight:bold; 
		background-color:#0099cc; 
		padding:3px; 
		font-family:Arial, Helvetica, sans-serif;
	 	margin-bottom:5px; 
	 	cursor:pointer
	 }
	#expOut{
		margin-top:10px;
	}
	.expMsg{
		margin-bottom:20px
	}
	.expOK{ 
		height:16px; 
		
		background:url(<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/button_ok.png)
		 no-repeat; 
		padding-left:18px; 
		color:#2C7300; 
		font-weight:bold
	}
	.expErr{ 
		height:16px; 
		
		background:url(<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/error.png)
		 no-repeat; padding-left:18px; 
		color:#ed0000; 
		font-weight:bold
	}
	.code{
		background-color:#ccc; 
		width:100%; 
		overflow:auto; 
		height:30px; 
		border:none
	}
</style>


<div class="heading">
	<h2>Conversion lab - <strong>&alpha;</strong>lpha</h2>
</div>
<img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/botal.png">
<p>
	Conversion environment for clipbucket users so they can test why their videos are not converting. This test is in early beta stages, we are hopeful to get best outcome results.
</p>
<div class="well">
	<span>Current scientists</span> : <strong>Arslan Hassan</strong><br>
	<span>Current version</span> : <strong>1.0 &alpha;</strong>
</div>

<div class="form-group">
	<label for="victim">Choose your victime</label>
	<select class="form-control" name="victim" id="victim">
		<?php if ($_smarty_tpl->tpl_vars['vdoFiles']->value) {?>
	    	<?php  $_smarty_tpl->tpl_vars['vFile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vFile']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vdoFiles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vFile']->key => $_smarty_tpl->tpl_vars['vFile']->value) {
$_smarty_tpl->tpl_vars['vFile']->_loop = true;
?>
	    		<option value="<?php echo $_smarty_tpl->tpl_vars['vFile']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['vFile']->value['name'];?>
</option>
	        <?php } ?>
	    <?php } else { ?>
	    	<option value="">No victim found</option>
	    <?php }?>
	</select>	
</div>

<input class="btn btn-primary btn-sm" type="submit" name="button" id="button" value="Start Experiment..." onClick="experimentPart('getPreDetails')">



<div id="expOut">

</div><?php }} ?>
