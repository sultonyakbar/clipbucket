<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 10:19:37
         compiled from "C:\xampp\htdocs\clipbucket\styles\cb_28\layout\photo_upload.html" */ ?>
<?php /*%%SmartyHeaderCode:28620599400190019e1-47125883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '070420b7cef7d6cbd22ca23c7c4f009aa305fc34' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\styles\\cb_28\\layout\\photo_upload.html',
      1 => 1502865949,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28620599400190019e1-47125883',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'step' => 0,
    'c' => 0,
    'collections' => 0,
    'item' => 0,
    'verify_logged_user' => 0,
    'cbcollection' => 0,
    'reqFields' => 0,
    'field' => 0,
    'formObj' => 0,
    'Cbucket' => 0,
    'baseurl' => 0,
    'cbphoto' => 0,
    'theme' => 0,
    'photos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5994001920ffd6_63719060',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5994001920ffd6_63719060')) {function content_5994001920ffd6_63719060($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['step']->value==1||$_smarty_tpl->tpl_vars['step']->value=='') {?>
<div id="uploadMessage" class=""></div>
<div class="container">
	<div class="cb-box progress-container overallProgressContainer hidden" id="overallProgressContainer">    
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-2" id="uploadedFilesInfo">
					<p>Uploaded 0 of 0</p>
				</div>
				<div class="col-md-10">
					<div class="progress">
						<div id="overallProgress" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
							<span class="sr-only">40% Complete (success)</span>
						</div>
					</div>
				</div>
			</div>
				<!-- <div class="col-md-2">
					<a id="uploadFiles" class="btn btn-success" href="javascript:;">Upload</a>
				</div> -->

			</div>
		</div>
	</div>

	<div class="clearfix photoupload-block">
		<div class="cb-box container" id="mainUploadContainer">
			<div class="pad-bottom video-info-container flat-tabs">
				<ul class="nav nav-tabs uploaderTabs">
					<li class="active"><a href="#file-upload" data-toggle="tab"><?php echo smarty_lang(array('code'=>"photo_upload_tab"),$_smarty_tpl);?>
</a></li>
				</ul>
				<div class="tab-content uploadFormDiv">
					<div class="tab-pane fade in active clearfix" id="file-upload">
						<div class="instructions alert alert-block alert-info">
							<?php echo smarty_lang(array('code'=>'upload_right_guide_photo'),$_smarty_tpl);?>

						</div>
						<div class="clearfix" id="uploaderContainer">
							<?php if ($_smarty_tpl->tpl_vars['c']->value) {?>
							<div class="alert alert-info" role="alert">
								Photo will be uploaded into <strong><i><?php echo $_smarty_tpl->tpl_vars['c']->value['collection_name'];?>
</i></strong> Collection
							</div>
							<?php } else { ?>
							<h4 class="h4"><?php echo smarty_lang(array('code'=>"select_collection_upload"),$_smarty_tpl);?>
</h4>
							<div class="row">
								<div id="SelectionDIV" class="col-md-9">
									<?php if ($_smarty_tpl->tpl_vars['collections']->value) {?>
									<div class="form-group clearfix">
										<select class="form-control" id="collectionSelection" name="collectionSelection">
											<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['collections']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['collection_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['collection_name'];?>
</option>
											<?php } ?>
										</select>
									</div>
									<?php } else { ?>
									<p class="alert alert-danger"><?php echo smarty_lang(array('code'=>"no_collection_found_alert"),$_smarty_tpl);?>
</p>
									<div class="form-group">
										<label><?php echo smarty_lang(array('code'=>"select_collection_upload"),$_smarty_tpl);?>
</label>
										<select class="form-control" id="collectionSelection" name="collectionSelection">
											<option value="0">	<?php echo smarty_lang(array('code'=>"no_collection_upload"),$_smarty_tpl);?>
</option>
										</select>
									</div>
									<?php }?>
								</div>
								<?php if ((has_access('allow_create_collection',false,$_smarty_tpl->tpl_vars['verify_logged_user']->value))) {?>
								<div class="col-md-3 text-center">
									<a href="#" class="btn btn-ghost btn-lg" id="createNewCollection"><?php echo smarty_lang(array('code'=>"create_new_collection_btn"),$_smarty_tpl);?>
</a>
								</div>
								<?php } else { ?>
								<div class="col-md-3 text-center">
								<div class="alert alert-danger">
								  <strong><?php echo smarty_lang(array('code'=>"creating_collection_is_disabled"),$_smarty_tpl);?>
</strong>
								</div>
								</div>
								<?php }?>
							</div>
							<?php }?>
							<div class="row">
								<div class="col-md-10 col-md-offset-1">
									<div class="manageCollection">
										<div id="CollectionDIV" style="display:none">
											<form action="#" type="post">
												<h3>Create New Collection</h3>
												<?php if (isset($_smarty_tpl->tpl_vars['reqFields'])) {$_smarty_tpl->tpl_vars['reqFields'] = clone $_smarty_tpl->tpl_vars['reqFields'];
$_smarty_tpl->tpl_vars['reqFields']->value = $_smarty_tpl->tpl_vars['cbcollection']->value->load_required_fields(); $_smarty_tpl->tpl_vars['reqFields']->nocache = null; $_smarty_tpl->tpl_vars['reqFields']->scope = 0;
} else $_smarty_tpl->tpl_vars['reqFields'] = new Smarty_variable($_smarty_tpl->tpl_vars['cbcollection']->value->load_required_fields(), null, 0);?>    
												<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reqFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
												<?php if ($_smarty_tpl->tpl_vars['field']->value['id']!='type') {?>
												<div class="form-group">
													<label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</label>
													<?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
													<?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='checkbox') {?>
													<?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['label_class'] = 'checkbox';?>
													<?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['notShowSeprator'] = true;?>
													<?php }?>
													<?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>

												</div>
												<?php }?>
												<?php } ?>
												<div class="moveR" style="float:left; margin:0px 5px 0 5px";>
													<button type="button" id="addNewCollection" class="btn btn-success">Add Collection</button>
												</div>
												<div style="float:left; margin:0px 5px 0 5px;">
													<button type="button" id="cancelAddCollection" class="btn btn-success">Cancel</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['collections']->value) {?>
							<div class="upload-area col-md-12 clearfix">
								<div class="fileUploaderForm">
									<div class="dragDropContainer clearfix" id="dragDrop">
										<span class="upload-logo"></span>
										<strong class="block-title"><?php echo smarty_lang(array('code'=>"drag_drop"),$_smarty_tpl);?>
</strong>
										<p><?php echo smarty_lang(array('code'=>"photo_can_be"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['Cbucket']->value->configs[176]['value'];?>
 <?php echo smarty_lang(array('code'=>"photo_upload_txt"),$_smarty_tpl);?>
</p>
									</div>
									<div class="selectButtonContainer">
										<a id="selectFiles" href="javascript:;" class="btn btn-primary btn-lg selectFiles"><?php echo smarty_lang(array('code'=>"select_photos"),$_smarty_tpl);?>
</a>
									</div>
								</div>
							</div>
							<?php }?>
						</div>
						<div id="uploadDataContainer" class="uploadDataContainer clearfix marginTop">
							<div class="uploadingProgressContainer clearfix hidden">
								<div class="alert alert-block alert-info">
									<p><b><?php echo smarty_lang(array('code'=>"selected_files"),$_smarty_tpl);?>
</b><?php echo smarty_lang(array('code'=>"uploading_in_progress"),$_smarty_tpl);?>
 <small><span id="progressNumber" style="color:#fff;">0%</span> <span style="color:#fff;"><?php echo smarty_lang(array('code'=>"complete_of_photo"),$_smarty_tpl);?>
 </span><span id="videoNumber" style="color:#fff;"></span></small></p>
								</div>
							</div>
							<!-- the div for displaying progress bars -->
							<div class="realProgressBars"></div>
							<!-- the div for displaying progress bars -->
							<div class="align-right hidden" id="uploadMore">
								<a href="#" class="btn btn-primary uploadMoreVideos" id="uploadMoreVideos"><?php echo smarty_lang(array('code'=>"upload_more_photos"),$_smarty_tpl);?>
</a>
							</div>
							<div class="marginTop">
								<div id="files" class=""></div>
								<div id="allUploadForms" class="tab-content allUploadForms"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="photoForm" class="hidden">
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/upload/photo_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
	<!-- Following hidden field is used to store Collection ID. -->
	<?php if ($_smarty_tpl->tpl_vars['c']->value) {?>
	<input type="hidden" name="cid" id="cid" class="cid" value="<?php echo $_smarty_tpl->tpl_vars['c']->value['collection_id'];?>
">
	<?php }?>

	<script type="text/javascript">
		(function(window){
			$(document).ready(function(){
				var baseurl = '<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
';
				var photo_extensions = '<?php echo implode(",",$_smarty_tpl->tpl_vars['cbphoto']->value->exts);?>
';

				/* files uploading */
				$.get("<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/js/plupload/js/plupload.full.min.js", function(e){
					var files = [];
					var filesIndex = 0;
					var uploader = new plupload.Uploader({
						browse_button: 'selectFiles',
						runtimes : 'html5,flash,silverlight,html4',
						url : uploadScriptPath,
						browse_button: 'selectFiles',
						dragdrop: true,
						drop_element: "dragDrop",
						filters: {
							mime_types : [
							{ title : "Image files", extensions : photo_extensions },
							]
						}
					});

				   // initialize the uploader

				   uploader.init();
				   uploader.bind('FilesAdded', function(up, uploadedFiles) {

				   	for(var i = 0; i < uploadedFiles.length; i++){
				   		files.push(uploadedFiles[i]);
				   	}

				   	$("#selectedFiles").toggle("display");
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

					   var totalFiles = files.length;

					   var oneFile = false;


					   var uploadForm = $("#photoForm form").clone();
					   var uploadForms = [];
					   for (var i = 0; i < totalFiles; i++ ){
					   	var oneUploadForm = $(uploadForm).clone().get(0);
					   	var wrapperDiv = document.createElement("div");
					   	if(i == 0){
					   		wrapperDiv.className = "tab-pane active photoFormContainer";
					   	}else{
					   		wrapperDiv.className = "tab-pane photoFormContainer";
					   	}
					   	wrapperDiv.id = "tab"+i;
					   	oneUploadForm.className = "";
					   	$(oneUploadForm).find("input[name='photo_title']").val(files[i].name.slice(0, -4));
					   	$(oneUploadForm).find("textarea#photo_description").val(files[i].name.slice(0, -4));
					   	$(oneUploadForm).find("input[name='photo_title']").val(files[i].name);
					   	$(oneUploadForm).find("textarea#photo_description").val(files[i].name);
					   	$(oneUploadForm).find("input[name='category[]']:first").attr('checked', 'checked');
					   	if(typeof files[i]['photoThumb'] !== "undefined"){
					   		$(oneUploadForm).find("img").attr("src", files[i]['photoThumb']);
					   	}
					   	wrapperDiv.appendChild(oneUploadForm);   
					   	uploadForms.push(wrapperDiv);
					   }

					// functions added
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
					//real progress bar end function

					$("#allUploadForms").html("");
					$("#allUploadForms").append(uploadForms);
					
					/*
					* Trigger element when "Cancel Uploading" button is clicked
					* stops uploading
					* hides uploading div
					*/
					//function for cancel button
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
					//function for cancel button ended
					// function for UploadProgress

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

				// function for UploadProgress ended
				// functions added ended


				setTimeout(function(){
					$("#uploaderContainer").addClass("hidden");
					$("#uploadDataContainer").removeClass("hidden");
					$(".uploadingProgressContainer").removeClass("hidden");
					$("#uploadedFilesInfo").text("Uploaded 0 of " + files.length);
					$(".allProgress").removeClass("hidden");
					$("#overallProgressContainer").removeClass("hidden");
					uploader.start();
				}, 1000);
					   // updating file title in the form
					   $("#allUploadForms").css("display", "block");
					});

uploader.bind("BeforeUpload", function(){
	$("#fileUploadProgress").removeClass("hidden");
	$(".progress-container").removeClass("hidden");

})

				   /*
				   This is the event handler for UploadProgress,
				   It fires regularly after a certain amount of time when the the files are being uploaded
				   */

				   var totalUploaded = 0;
					/*
					This is the event handler for UploadProgress,
					It fires regularly after a certain amount of time when the the files are being uploaded
					*/

					var filesUploaded = 0;
					var totalPercentage = 0;
					uploader.bind('UploadProgress', function(up, file) {
						$("#progressNumber").text(file.percent + "%");
						$("#videoNumber").text(file.name);
					});


				   /*
					This is the event handler for FileUploaded,
					it fires when the uploading of the files is completed  
					*/

					var currentFileIndex = 0;

					uploader.bind('FileUploaded', function(plupload, fileDetails, response){
						$("#overallProgress").css("width", ((100/files.length)*(++filesUploaded))+"%");
						$("#overallProgress").parents(".row").find("#uploadedFilesInfo").text("Uploaded " + (filesUploaded) + " of " + files.length);
						var serverResponse = $.parseJSON(response.response);
						var fileName = serverResponse.file_name;
						var uploadForm = $("#tab"+currentFileIndex+" form");
						totalUploaded++;
						/*
						Insert the video in the database and get the video db id from the
						database which will be sent with the final form
						*/
						var collectionId;
						var collection_id = '<?php echo $_smarty_tpl->tpl_vars['c']->value['collection_id'];?>
';
						if (collection_id ) 
						{
							collectionId = collection_id;
						}
						else
						{
							collectionId = $("#SelectionDIV select").val();
						}
						var fileId = false;
						fileDetails.name = fileDetails.name.slice(0, -4);
						var stored_cid = collectionId;
						$.ajax({
							url : baseurl + "/actions/photo_uploader.php",
							type : "post",
							data : {
								insertPhoto : "yes",
								title : fileDetails.name,
								file_name : fileName,
								collection_id: collectionId,
								ext: serverResponse.extension,
							},
							dataType: "JSON",
						}).success(function(msg){
						  //creating the hidden form fields
						  var slicedTitle = $('#photo_title').val().slice(0, -4);
						  var slicedDesc = $('#photo_description').val().slice(0, -4);
						  $('#photo_title').val(slicedTitle);
						  $('#photo_description').val(slicedDesc);
						  $(uploadForm).find("img").attr("src", msg.photoPreview);
						  $(uploadForm).find("img").css("max-width", "100%");
						  $(".submitPhoto").removeAttr("disabled");
						  
						  if(typeof files[(currentFileIndex - 1)] !== "undefined"){
						  	files[(totalUploaded-1)]['photoThumb'] = msg.photoPreview;
						  }
						  var hiddenPhotoIdField = document.createElement('input');
						  hiddenPhotoIdField.name = 'photo_id';
						  hiddenPhotoIdField.type = 'hidden';
						  hiddenPhotoIdField.value =  msg.photoID;

						  uploadForm.append(hiddenPhotoIdField);
						});

					   /* 
					   Submit the form with all the video details and options 
					   to update the video information in the system
					   */

					   $(uploadForm).find(".submitPhoto").on({
					   	click: function(e){
					   		e.preventDefault();
					   		var cid = $('.cid').val();
					   		var collectionId = $("#SelectionDIV select").val();

					   		if(cid !== '')
					   		{
					   			collectionId = cid;
					   		}
					   		var self = $(this).parents("form");
					   		var data = $(self).serialize();
					   		data += "&collection_id="+stored_cid;
					   		data += "&server_url=undefined&folder=undefined&updatePhoto=yes";

					   		$.ajax({
					   			url : baseurl + "/actions/photo_uploader.php",
					   			type : "post",
					   			data : data
					   		}).success(function(msg){
					   			$("#uploadMessage").removeClass("hidden");
					   			$("#uploadMessage").html("Picture details are successfully updated").attr("class", "alert alert-success");
									
									$('html,body').animate({
					        		scrollTop: $("body").offset().top},
					        		'medium');
					        							   			
					   			setTimeout(function(){
					   				$("#uploadMessage").addClass("hidden");
					   			}, 5000);
					   		}).fail(function(err){
					   			console.log(err);
					   		});
					   	}
					   });
					   currentFileIndex++;
					});

					uploader.bind("UploadComplete", function(plupload, files){
						$("#fileUploadProgress").addClass("hidden");
						$("#uploadMore").removeClass("hidden");
						$(".uploadingProgressContainer").addClass("hidden");
						uploader.refresh();
						$("#uploadMessage").html("All Files are uploaded Successfully").attr("class", "alert alert-success");            
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

					$("#addNewCollection").on({
						click: function(e){
							e.preventDefault();
							var formData = $(this).parents("form").serialize();
							formData += "&mode=add_collection";
							var collectionName = $(this).parents("form").find("#collection_name").val();
							$.ajax({
								type: "post",
								url: baseurl + "/ajax.php",
								data: formData,
							}).success(function(msg){
								msg = $.parseJSON(msg);
								if(msg.err === null){
									var newCollectionElement = document.createElement('option');
									newCollectionElement.value = parseInt(msg.id);
									newCollectionElement.innerHTML = collectionName;
									newCollectionElement.selected = true;
									$("#collectionSelection").get(0).appendChild(newCollectionElement);
									$("#CollectionDIV").toggle("slow");
									$("#uploadMessage").html(msg.msg).attr("class", "alert alert-success").removeClass("hidden");
									$(".upload-area").show();
									$("#createNewCollection").show();
									$(".h4").show();
									$(".instructions").show();
									$("#SelectionDIV").show();
									setTimeout(function(){
										$("#uploadMessage").addClass("hidden");
									}, 5000);
								}else{
									$("#uploadMessage").html(msg.err).attr("class", "alert alert-danger").removeClass("hidden");
									setTimeout(function(){
										$("#uploadMessage").addClass("hidden");
									}, 5000);
								}
							});
						}
					});
					
					$("#createNewCollection").on({
						click: function(e){
							e.preventDefault();
							$("#CollectionDIV").toggle("fast");
							$("#createNewCollection").hide();
							$(".h4").hide();
							$("#SelectionDIV").hide();
							$(".upload-area").hide();
							$(".instructions").hide();
						}
					});

					$("#cancelAddCollection").on({
						click: function(e){
							e.preventDefault();
							$("#CollectionDIV").hide();
							$("#createNewCollection").show();
							$(".h4").show();
							$("#SelectionDIV").show();
							$(".upload-area").show();
							$(".instructions").show();
						}
					});

					$("#selectedFilesList a").on({
						click: function(e){
							e.preventDefault();
							$(this).tab("show");
						}
					});

					$("#SelectionDIV select").on({
						change: function(e){
							var collectionField = $("#collectionId");
							if(collectionField){
								$(collectionField).val(this.value);
							}else{
								var newField = document.createElement("input");
								newField.type = "hidden";
								newField.name = "collection_id";
								newField.value = this.value;
								$("#allUploadForms form").each(function(index, value){
									$(value).get(0).appendChild(newField);
								});
							}
						}
					});

					$("#uploadMoreVideos").on({
						click: function(e){
							e.preventDefault();
							$("#uploaderContainer").removeClass("hidden");
							$("#uploadDataContainer").addClass("hidden");
							/*$(this).addClass("hidden");*/
						}
					});
				});
});
})(window);

</script>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['step']->value==2) {?>
<h2>Enter Information</h2>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['photos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/upload/photo_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('photo'=>$_smarty_tpl->tpl_vars['item']->value), 0);?>

<?php } ?>
<button class="LoadMoreButton clearfix" onclick="callAjax(this);" type="button" name="insertPhotos" id="insertPhotos">Save All</button>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['step']->value==3) {?>
<div class="photoBox">
	<div style="background:#FFF; text-align:center; border-bottom:1px solid #ccc; color:#666; padding:8px; font:bold 14px Arial;"><?php echo smarty_lang(array('code'=>"photo_success_heading"),$_smarty_tpl);?>
</div>

	<div class="clearfix" style="padding:8px; font:normal 11px Tahoma;">
		You can manage your photos from <strong><a href="<?php echo cblink(array('name'=>'manage_photos'),$_smarty_tpl);?>
"><?php echo smarty_lang(array('code'=>'manage_photos'),$_smarty_tpl);?>
</a></strong>.
	</div>
</div>
<?php }?>     

<?php }} ?>
