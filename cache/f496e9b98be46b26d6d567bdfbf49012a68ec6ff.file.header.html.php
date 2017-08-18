<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 10:45:57
         compiled from "C:\xampp\htdocs\clipbucket\plugins\cb_link_video\header.html" */ ?>
<?php /*%%SmartyHeaderCode:32143599406459438f4-89254549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f496e9b98be46b26d6d567bdfbf49012a68ec6ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\plugins\\cb_link_video\\header.html',
      1 => 1502865922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32143599406459438f4-89254549',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_59940645984231_32280416',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59940645984231_32280416')) {function content_59940645984231_32280416($_smarty_tpl) {?><script type="text/javascript">

function check_file_url(objid)
{
	var video_link = $('#remote_play_url').val();
	var duration = $('#linkUploadForm'+objid+' #duration').val();
	
	var reg = /^([0-9\:]+)$/i;
	
	if(!video_link)
	{
		alert("Please enter valid video link");
		$('#remote_play_url').focus();
		return false;
	}
	if(!duration || !reg.test(duration))
	{
		alert("Please enter valid video duration");
		$('#linkUploadForm'+objid+' #duration').focus();
		return false;
	}
	
	$.post(baseurl+"/actions/embed_form_verifier.php", 
	{ 	
		'mode' : 'remote_play',
		'remote_play_url' :  $('#remote_play_url').val(),
		duration : $("#linkUploadForm"+objid+" #duration").val(),
		file_name : file_name,
		thumb_file :  $("#linkUploadForm"+objid+" #thumb_file").val()
	},				
	
	function (data) {
		if(data.err)
		{
			alert(data.err);
		}else{
			$("#linkUploadForm"+objid).submit();
		}
	}, "json");
	return false;
}


  
    $("#embed_video_upload_btn").css("border", "solid 2px red");
    $("#embed_video_upload_btn").on({
      click: function(e){
        e.preventDefault();
        console.log("ok");
        var objId = $("#embed_upload_id").val();
        console.log(objId);
        //check_file_url(objId);
      }
    });
	

</script><?php }} ?>
