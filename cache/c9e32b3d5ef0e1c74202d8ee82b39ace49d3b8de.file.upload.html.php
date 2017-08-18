<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 10:12:14
         compiled from "C:\xampp\htdocs\clipbucket\styles\cb_28\layout\upload.html" */ ?>
<?php /*%%SmartyHeaderCode:288345993fe5ea6f541-63704078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9e32b3d5ef0e1c74202d8ee82b39ace49d3b8de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\styles\\cb_28\\layout\\upload.html',
      1 => 1502865949,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '288345993fe5ea6f541-63704078',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msg' => 0,
    'Upload' => 0,
    'opt_list' => 0,
    'counter' => 0,
    'opt' => 0,
    'uploadOptId' => 0,
    'Cbucket' => 0,
    'class' => 0,
    'divid' => 0,
    'baseurl' => 0,
    'config_for_mp4' => 0,
    'cbvid' => 0,
    'uploaderDetails' => 0,
    'extensions' => 0,
    'theme' => 0,
    'honey_ajax' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5993fe5ed1ced4_96403089',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5993fe5ed1ced4_96403089')) {function content_5993fe5ed1ced4_96403089($_smarty_tpl) {?>		<?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
		<div class="alert alert-block alert-info">
		<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

		</div>
		<?php }?>
		<div id="uploadMessage" class=""></div>
		<div id="main">
			<div class="container cb-box uploadVideos">
				<div class="progress-container allProgress hidden">  
					<div class="row">
						<div class="col-md-2" id="uploadedFilesInfo">
							<p><?php echo smarty_lang(array('code'=>"Inserted"),$_smarty_tpl);?>
 0 <?php echo smarty_lang(array('code'=>"of"),$_smarty_tpl);?>
 0</p>
						</div>
						<div class="col-md-10">
							<div class="progress">
								<div id="overallProgress" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
									<span class="sr-only">40% Complete (success)</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="cb-item-desc-container clearfix flat-tabs" id="mainUploadContainer">
					<div class="video-info-container">
						<ul class="nav nav-tabs uploaderTabs">
							<?php if (isset($_smarty_tpl->tpl_vars['opt_list'])) {$_smarty_tpl->tpl_vars['opt_list'] = clone $_smarty_tpl->tpl_vars['opt_list'];
$_smarty_tpl->tpl_vars['opt_list']->value = $_smarty_tpl->tpl_vars['Upload']->value->load_upload_options(); $_smarty_tpl->tpl_vars['opt_list']->nocache = null; $_smarty_tpl->tpl_vars['opt_list']->scope = 0;
} else $_smarty_tpl->tpl_vars['opt_list'] = new Smarty_variable($_smarty_tpl->tpl_vars['Upload']->value->load_upload_options(), null, 0);?> 
							<?php if (isset($_smarty_tpl->tpl_vars['counter'])) {$_smarty_tpl->tpl_vars['counter'] = clone $_smarty_tpl->tpl_vars['counter'];
$_smarty_tpl->tpl_vars['counter']->value = 1; $_smarty_tpl->tpl_vars['counter']->nocache = null; $_smarty_tpl->tpl_vars['counter']->scope = 0;
} else $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable(1, null, 0);?>
							<?php  $_smarty_tpl->tpl_vars['opt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['opt']->_loop = false;
 $_smarty_tpl->tpl_vars['divid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['opt_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['opt']->key => $_smarty_tpl->tpl_vars['opt']->value) {
$_smarty_tpl->tpl_vars['opt']->_loop = true;
 $_smarty_tpl->tpl_vars['divid']->value = $_smarty_tpl->tpl_vars['opt']->key;
?>
								<?php if ($_smarty_tpl->tpl_vars['counter']->value==1) {?><?php if (isset($_smarty_tpl->tpl_vars['class'])) {$_smarty_tpl->tpl_vars['class'] = clone $_smarty_tpl->tpl_vars['class'];
$_smarty_tpl->tpl_vars['class']->value = "active"; $_smarty_tpl->tpl_vars['class']->nocache = null; $_smarty_tpl->tpl_vars['class']->scope = 0;
} else $_smarty_tpl->tpl_vars['class'] = new Smarty_variable("active", null, 0);?><?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['class'])) {$_smarty_tpl->tpl_vars['class'] = clone $_smarty_tpl->tpl_vars['class'];
$_smarty_tpl->tpl_vars['class']->value = ''; $_smarty_tpl->tpl_vars['class']->nocache = null; $_smarty_tpl->tpl_vars['class']->scope = 0;
} else $_smarty_tpl->tpl_vars['class'] = new Smarty_variable('', null, 0);?><?php }?>
								
								<?php if (isset($_smarty_tpl->tpl_vars['uploadOptId'])) {$_smarty_tpl->tpl_vars['uploadOptId'] = clone $_smarty_tpl->tpl_vars['uploadOptId'];
$_smarty_tpl->tpl_vars['uploadOptId']->value = $_smarty_tpl->tpl_vars['opt']->value['load_func']; $_smarty_tpl->tpl_vars['uploadOptId']->nocache = null; $_smarty_tpl->tpl_vars['uploadOptId']->scope = 0;
} else $_smarty_tpl->tpl_vars['uploadOptId'] = new Smarty_variable($_smarty_tpl->tpl_vars['opt']->value['load_func'], null, 0);?>
								<?php if ($_smarty_tpl->tpl_vars['Cbucket']->value->configs[$_smarty_tpl->tpl_vars['uploadOptId']->value]=='yes') {?>
									<?php if (isset($_smarty_tpl->tpl_vars['no_upload'])) {$_smarty_tpl->tpl_vars['no_upload'] = clone $_smarty_tpl->tpl_vars['no_upload'];
$_smarty_tpl->tpl_vars['no_upload']->value = 'no'; $_smarty_tpl->tpl_vars['no_upload']->nocache = null; $_smarty_tpl->tpl_vars['no_upload']->scope = 0;
} else $_smarty_tpl->tpl_vars['no_upload'] = new Smarty_variable('no', null, 0);?>
									<li class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
										<a class="added" href="#<?php echo $_smarty_tpl->tpl_vars['divid']->value;?>
" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['opt']->value['title'];?>
</a>
									</li>
								<?php }?>
								<?php if (isset($_smarty_tpl->tpl_vars['counter'])) {$_smarty_tpl->tpl_vars['counter'] = clone $_smarty_tpl->tpl_vars['counter'];
$_smarty_tpl->tpl_vars['counter']->value = $_smarty_tpl->tpl_vars['counter']->value+1; $_smarty_tpl->tpl_vars['counter']->nocache = null; $_smarty_tpl->tpl_vars['counter']->scope = 0;
} else $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['counter']->value+1, null, 0);?>
							<?php } ?>
						</ul>
						<!-- the div for upload file remote/normal-->
						<div class="tab-content uploadFormDiv">
							<?php if (isset($_smarty_tpl->tpl_vars['counter'])) {$_smarty_tpl->tpl_vars['counter'] = clone $_smarty_tpl->tpl_vars['counter'];
$_smarty_tpl->tpl_vars['counter']->value = 1; $_smarty_tpl->tpl_vars['counter']->nocache = null; $_smarty_tpl->tpl_vars['counter']->scope = 0;
} else $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable(1, null, 0);?>
							<?php  $_smarty_tpl->tpl_vars['opt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['opt']->_loop = false;
 $_smarty_tpl->tpl_vars['divid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['opt_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['opt']->key => $_smarty_tpl->tpl_vars['opt']->value) {
$_smarty_tpl->tpl_vars['opt']->_loop = true;
 $_smarty_tpl->tpl_vars['divid']->value = $_smarty_tpl->tpl_vars['opt']->key;
?>     
								
								<?php if (isset($_smarty_tpl->tpl_vars['uploadOptId'])) {$_smarty_tpl->tpl_vars['uploadOptId'] = clone $_smarty_tpl->tpl_vars['uploadOptId'];
$_smarty_tpl->tpl_vars['uploadOptId']->value = $_smarty_tpl->tpl_vars['opt']->value['load_func']; $_smarty_tpl->tpl_vars['uploadOptId']->nocache = null; $_smarty_tpl->tpl_vars['uploadOptId']->scope = 0;
} else $_smarty_tpl->tpl_vars['uploadOptId'] = new Smarty_variable($_smarty_tpl->tpl_vars['opt']->value['load_func'], null, 0);?>
								<?php if ($_smarty_tpl->tpl_vars['Cbucket']->value->configs[$_smarty_tpl->tpl_vars['uploadOptId']->value]=='yes') {?> 
								<?php if ($_smarty_tpl->tpl_vars['counter']->value==1) {?><?php if (isset($_smarty_tpl->tpl_vars['class'])) {$_smarty_tpl->tpl_vars['class'] = clone $_smarty_tpl->tpl_vars['class'];
$_smarty_tpl->tpl_vars['class']->value = "active"; $_smarty_tpl->tpl_vars['class']->nocache = null; $_smarty_tpl->tpl_vars['class']->scope = 0;
} else $_smarty_tpl->tpl_vars['class'] = new Smarty_variable("active", null, 0);?><?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['class'])) {$_smarty_tpl->tpl_vars['class'] = clone $_smarty_tpl->tpl_vars['class'];
$_smarty_tpl->tpl_vars['class']->value = ''; $_smarty_tpl->tpl_vars['class']->nocache = null; $_smarty_tpl->tpl_vars['class']->scope = 0;
} else $_smarty_tpl->tpl_vars['class'] = new Smarty_variable('', null, 0);?><?php }?>
								<div class="tab-pane fade in clearfix <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
 uploadForm" id="<?php echo $_smarty_tpl->tpl_vars['divid']->value;?>
">
								<!-- this line call everything related to upload on the page -->
									<?php echo load_form(array('name'=>$_smarty_tpl->tpl_vars['opt']->value['load_func'],'button_class'=>'cb_button_2','class'=>'upload_form'),$_smarty_tpl);?>
 
								</div>
								<?php }?>
								<?php if (isset($_smarty_tpl->tpl_vars['counter'])) {$_smarty_tpl->tpl_vars['counter'] = clone $_smarty_tpl->tpl_vars['counter'];
$_smarty_tpl->tpl_vars['counter']->value = $_smarty_tpl->tpl_vars['counter']->value+1; $_smarty_tpl->tpl_vars['counter']->nocache = null; $_smarty_tpl->tpl_vars['counter']->scope = 0;
} else $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['counter']->value+1, null, 0);?>
							<?php } ?>
						</div>
						<!-- ending of the div for upload file remote/normal-->
					</div>
				</div>
					
			</div>
		</div>
	<div>
</div>
<script type="text/javascript">
	var grabbed_json = 'nothing';
	(function(window){
		$(document).ready(function(){
			 setTimeout(function(){
					  
						$(".embed_video").remove();
				   
					}, 10000);

			var totalFiles = 0;
			var baseurl = '<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
';
			var config_for_mp4 = '<?php echo $_smarty_tpl->tpl_vars['config_for_mp4']->value;?>
';
			var defaultCategory = "<?php echo $_smarty_tpl->tpl_vars['cbvid']->value->get_default_cid();?>
";
			if('<?php echo $_smarty_tpl->tpl_vars['uploaderDetails']->value['uploadScriptPath'];?>
'!=''){
			var uploadurl = '<?php echo $_smarty_tpl->tpl_vars['uploaderDetails']->value['uploadScriptPath'];?>
';
			}else{
			var uploadurl = '<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/actions/file_uploader.php';    
			}
			//alert(uploadurl);
			
			var extensions = "<?php echo $_smarty_tpl->tpl_vars['extensions']->value;?>
";
			extensions = extensions.substring(0, extensions.length-1);
			/* files uploading */
		
			$.get("<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/js/plupload/js/plupload.full.min.js", function(e){
				var files = [];
				var filesIndex = 0;
				var oneFileFormDiv = $("#uploadFormContainer0").clone();
				var uploader = new plupload.Uploader({
					browse_button: 'selectFiles',
					dragdrop: true,
					drop_element: "dragDrop",
					runtimes : 'html5,flash,silverlight,html4',
					url : uploadurl,
					file_data_name : "Filedata",
					filters: {
					  mime_types : [
						{ title : "Image files", extensions : extensions },
						{ title : "Video files", extensions : extensions }
					  ]
					}
				});
				uploader.init();
				uploader.bind('FilesAdded', function(up, uploadedFiles) {
					for(var i = 0; i < uploadedFiles.length; i++){
						files.push(uploadedFiles[i]);
					}
					$("#uploadMore").addClass("hidden");
					// creating the selected files list
					var ul = document.createElement('ul');
					ul.id = "selectedFilesList";
					ul.className = "nav nav-tabs";
					var li = false;
					var index = 0;
					plupload.each(files, function(file) {
						li = document.createElement('li');
						if(index === 0){
							li.className = "active";
						}else{
							li.className = "";
						}
						var link = document.createElement("a");
						link.href = "#tab"+index;
						link.setAttribute("data-toggle", "tab");
						// link.innerHTML = file.name + " (" + plupload.formatSize(file.size) + ")";
						if(files.length < 8){
						  link.innerHTML = "(" + (index + 1) + ") " + file.name.substring(0, 10);
						}else{
						  link.innerHTML = "(" + (index + 1) + ") ";
						}
						li.id = index++;
						li.appendChild(link);
						ul.appendChild(li);
					});

					$("#files").html("");
					$("#files").append(ul);

					totalFiles = files.length;
					
					var oneFile = false;

					var uploadForm = $("#updateVideoInfoForm").clone();
					var uploadForms = [];
					for (var i = 0; i < totalFiles; i++ ){
						var oneUploadForm = $(uploadForm).clone().get(0);
						var wrapperDiv = document.createElement("div");
						if(i == 0){
							wrapperDiv.className = "tab-pane active uploadFormContainer";
						}else{
							wrapperDiv.className = "tab-pane uploadFormContainer";
						}
						wrapperDiv.id = "tab"+i;
						oneUploadForm.className = "";
						$(oneUploadForm).find(".cancel_button").attr('to_cancel',i);
						$(oneUploadForm).find("input[name='title']").val(files[i].name.slice(0, -4));

						$(oneUploadForm).find("textarea#desc").val(files[i].name.slice(0, -4));
						var categories = $(oneUploadForm).find("input[name='category[]']");
						$.each(categories,function(i,v){ 
							if ($(this).val() == defaultCategory ){ 
								$(this).attr('checked', 'checked');
							}; 
						});
						wrapperDiv.appendChild(oneUploadForm);   
						uploadForms.push(wrapperDiv);
					}

					//function for real progress bar
					$.each( uploadedFiles, function( key, fileNow ) {
						console.log("filenow "+fileNow);
					  	var currentTitle = fileNow.name,
					  	plFileId = fileNow.id;					   	
					  	//<button class="clearfix cancel_button btn btn-danger" style="float:right; margin-top: -20px">Cancel Uploading</button>

					  	// appends progress bar along with title
					  	// this progress bar is later updated on realtime
					  	// via fileprogress event of pluploader

					    $(".realProgressBars").append('<h5 class="realProgTitle_'+plFileId+'">'+currentTitle+'</h5><button class="clearfix cancel_button btn btn-danger" to_cancel="'+plFileId+'" style="float:right; margin-top: -8px; margin-left:10px;">Cancel Uploading</button><div class="progress"><div class="progress-bar progress-bar_'+plFileId+'" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:0%"><span class="sr-only">70% Complete</span><span class="realProgText_'+plFileId+'">50% completed</span></div></div>');

					    
					});
					//end function

					$("#allUploadForms").html("");
					$("#allUploadForms").append(uploadForms);
					
					//Disabling saveDetails button for Current form 
					var div_wrap_numb = totalFiles - 1;
					var upload_form_Div = $('#tab'+div_wrap_numb);
					upload_form_Div.find('#saveVideoDetails').attr("disabled",true);

					$(".formSection h4").on({
						click: function(e){
							e.preventDefault();
							if($(this).find("i").hasClass("glyphicon-chevron-down")){
								$(this).find("i").removeClass("glyphicon-chevron-down").addClass("glyphicon-chevron-up");
								$(this).next().toggleClass("hidden");
							}else{
								$(this).find("i").removeClass("glyphicon-chevron-up").addClass("glyphicon-chevron-down");
								$(this).next().toggleClass("hidden");
							}
						}
					});


					/*
					* Trigger element when "Cancel Uploading" button is clicked
					* stops uploading
					* hides uploading div
					*/

					(function() {
				        $(".cancel_button").on("click",function(e) {
					      	e.preventDefault();
				      		var toCancel = $(this).attr('to_cancel');
				      		var thecount = 0;
				      		$(this).attr('disabled',true);
					        $(this).text("Canceled");
				      		$.each( uploadedFiles, function( iNow, currentFile ){
								if (currentFile.id == toCancel) {
							        uploader.removeFile(uploadedFiles[thecount]);
							        $(this).unbind().remove();
							        $(".progress-bar_"+toCancel).addClass('progress-bar-danger');
							        $(".realProgText_"+toCancel).text("Canceled");
							        $('li#'+thecount).fadeOut('slow');
							        totalFiles = totalFiles - 1;
							    }
							  	thecount++;
							});
					    });
				    })();

					setTimeout(function(){
						$("#uploaderContainer").toggleClass("hidden");
						$("#uploadDataContainer").toggleClass("hidden");
						$(".uploadingProgressContainer").show();
						$(".allProgress").removeClass("hidden");
						uploader.start();
					}, 1000);
					// updating file title in the form
				});

				uploader.bind("BeforeUpload", function(){
				
					$("#fileUploadProgress").removeClass("hidden");
					
					$(".progress-container").removeClass("hidden");
					
				});


				var totalUploaded = 0;
				/*
				This is the event handler for UploadProgress,
				It fires regularly after a certain amount of time when the the files are being uploaded
				*/

				var filesUploaded = 0;
				var totalPercentage = 0;

				/*
				This is the event handler for FileUploaded,
				it fires when the uploading of the files is completed  
				*/

				var currentFileIndex = 0;
				var theVideoId = '';

				uploader.bind('FileUploaded', function(plupload, fileDetails, response){
					$("#overallProgress").css("width", ((100/totalFiles)*(++filesUploaded))+"%");
					$("#overallProgress").parents(".row").find("#uploadedFilesInfo").text("Inserted " + (filesUploaded) + " of " + totalFiles);
					var serverResponse = $.parseJSON(response.response);
						
					if(serverResponse.extension == 'mp4' && config_for_mp4 == 'yes' ){
						$("#duration").removeClass("hidden");
					}
					var fileName = serverResponse.file_name;
					var uploadForm = $("#tab"+currentFileIndex+" form");
					totalUploaded++;

					//enabling savedetails button for Current form 
					var _upload_form_Div_ = $('#tab'+currentFileIndex);
					_upload_form_Div_.find('.cancel_button').fadeOut('slow');
					_upload_form_Div_.find("#saveVideoDetails").attr("disabled",false);
					_upload_form_Div_.find("#saveVideoDetails").attr("id","uploadCompleted");
					/*
					Insert the video in the database and get the video db id from the
					database which will be sent with the final form
					*/
					var fileId = false;
					$.ajax({
						url : baseurl + "/actions/file_uploader.php",
						type : "post",
						data : {
							insertVideo : "yes",
							title : fileDetails.name,
							file_name : fileName,

						}
					}).success(function(msg){
						//console.log(msg);
						res = $.parseJSON(msg);
						//console.log(res);
						fileId = res.videoid;
						theVideoId = fileId;
						// creating the hidden form fields
						var hiddenVideoIdField = document.createElement('input');
						hiddenVideoIdField.name = 'videoid';
						hiddenVideoIdField.type = 'hidden';
						hiddenVideoIdField.value =  fileId;

						var hiddenVideoNameField = document.createElement('input');
						hiddenVideoNameField.name = 'file_name';
						hiddenVideoNameField.type = 'hidden';
						hiddenVideoNameField.value =  fileName;

						var hiddenUploadVideoFlagField = document.createElement('input');
						hiddenUploadVideoFlagField.type = 'hidden';
						hiddenUploadVideoFlagField.name = 'updateVideo';
						hiddenUploadVideoFlagField.value = 'yes';

						
						uploadForm.append(hiddenVideoIdField);
						uploadForm.append(hiddenVideoNameField);
						uploadForm.append(hiddenUploadVideoFlagField);
						uploadForm.find("#cbSubmitUpload").removeAttr('disabled').val('Upload').addClass('btn-success');
					});

					/* 
					Submit the form with all the video details and options 
					to update the video information in the system
					*/
				
					$(uploadForm).on({
						submit: function(e){
							e.preventDefault();
							//window.location.href = baseurl+"/?moreMsg="+theVideoId;
							var self = this;
							
							//var data = new FormData();
							//var fd = new FormData(document.getElementById( "updateVideoInfoForm" ));
							
							data = $(this).serialize();
							var theid = $(this).videoid;

							$.ajax({
								url : baseurl + "/actions/file_uploader.php",
								type : "post",
       							data : data
							}).success(function(msg){
								var lang = $('#subtitle_lang').val();
								console.log(msg);
								_cb.uploadSubtitle(theVideoId, lang, "<?php echo $_smarty_tpl->tpl_vars['honey_ajax']->value;?>
");
								//msg = $.parseJSON(msg);
								$("#uploadMessage").removeClass("hidden");
								if(msg.error){
									$("#uploadMessage").html(msg.error).attr("class", "alert alert-danger");
								}else{
									//Update message on submit changes
									$("#uploadMessage").html("Video details have been updated Successfully").attr("class", "alert alert-success container"); 
									
									$("#uploadMessage").html(msg.msg).attr("class", "alert alert-success");
									
									$('html,body').animate({
					        		scrollTop: $("body").offset().top},
					        		'medium');
					        		//Update message on submit changes
					        	}
								setTimeout(function(){
									$("#uploadMessage").addClass("hidden");
									window.location = "<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/manage_videos.php";
								}, 3000);
							}).fail(function(err){
								console.log(err);
							});
						}
					});

					currentFileIndex++;

				});

				// runs on progress of file uplaoder

				uploader.bind('UploadProgress', function(up, file) {
					// this the unique ID assigned to each file upload
					var pluploadFileId = file.id,
					filePercentage = file.percent;
					// update progress bar widht
					$('.progress-bar_'+pluploadFileId).css("width",filePercentage+"%");
					//updawte progress bar text to show percentage
					$('.realProgText_'+pluploadFileId).text(filePercentage+"% Completed");
					// $("#progressNumber").text(file.percent + "%");
					// meaning file has completely uploaded
					if (filePercentage == 100) {
						// remove cancel button
						$(".cancel_button[to_cancel='" + pluploadFileId + "']").fadeOut('slow');
						// tunr progress bar into green to show success
						$('.progress-bar_'+pluploadFileId).addClass('progress-bar-success');
					}
				});

				uploader.bind("UploadComplete", function(plupload, files){
					$("#fileUploadProgress").addClass("hidden");

					$("#uploadMore").removeClass("hidden");
					$(".uploadingProgressContainer").hide();
					uploader.refresh();
					$("#uploadMessage").html("All Files are uploaded Successfully").attr("class", "alert alert-success container");            
					setTimeout(function(){
						$("#uploadMessage").addClass("hidden");
					}, 5000);
				});

				uploader.bind('Error', function(up, err) {
					$("#uploadMessage").removeClass("hidden");
					if(err){
						$("#uploadMessage").html(err.message).attr("class", "alert alert-danger");
					}
					setTimeout(function(){
						$("#uploadMessage").addClass("hidden");
					}, 8000);
				});

				$("#files a").click(function(e){
					e.preventDefault();
					$(this).tab("show");
				});

				$("#uploadMoreVideos").on({
					click: function(e){
						e.preventDefault();
						$("#uploaderContainer").removeClass("hidden");
						$("#uploadDataContainer").addClass("hidden");
						//$(this).addClass("hidden");
					}
				});

			});
		
			// end of get,,
		

		});
	})(window);

	window.onbeforeunload = function() {
		var uploadState = $('.uploadingProgressContainer').is(":visible");
		if (uploadState == true) {
			return 'Uploading is in progress, are you sure you want to navigate away from this page?';
		} else {
			return null;
		}
	};

	$(document).on('click','#youtube_update',function(e){
		e.preventDefault();
		$(document).find('.__theClassHere').find('form').attr('id','youtube_update_form');
		var theForm = $('#youtube_update_form');
		data = $('#youtube_update_form').serialize();
		//console.log(data);
		data += '&updateVideo=yes&videoid='+grabbed_json.vid;
		//console.log(data);
		var theid = '200';

		$.ajax({
			url : baseurl + "/actions/file_uploader.php",
			type : "post",
				data : data
		}).success(function(msg){
			//msg = $.parseJSON(msg);
			$("#uploadMessage").removeClass("hidden");
			msg = $.parseJSON(msg);
			if(msg.error){
				$("#uploadMessage").html(msg.error).attr("class", "alert alert-danger");
			}else{
				$("#uploadMessage").html(msg.msg).attr("class", "alert alert-success");
			}
			setTimeout(function(){
				$("#uploadMessage").addClass("hidden");
			}, 5000);
		}).fail(function(err){
			console.log(err);
		});
	});
</script>






<?php }} ?>
