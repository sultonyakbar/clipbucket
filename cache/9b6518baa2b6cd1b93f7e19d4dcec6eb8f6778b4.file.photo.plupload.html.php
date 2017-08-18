<?php /* Smarty version Smarty-3.1.15, created on 2017-08-16 10:19:36
         compiled from "C:\xampp\htdocs\clipbucket\js\plupload\uploaders\photo.plupload.html" */ ?>
<?php /*%%SmartyHeaderCode:153559940018d01530-84981961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b6518baa2b6cd1b93f7e19d4dcec6eb8f6778b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\js\\plupload\\uploaders\\photo.plupload.html',
      1 => 1502865907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153559940018d01530-84981961',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Cbucket' => 0,
    'cbphoto' => 0,
    'photoUploaderDetails' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_59940018e0b899_77692037',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59940018e0b899_77692037')) {function content_59940018e0b899_77692037($_smarty_tpl) {?><script src="<?php echo @constant('JS_URL');?>
/plupload/plupload.full.min.js" type="text/javascript"></script>


<script type="text/javascript">

    var photo_max_size = '<?php echo $_smarty_tpl->tpl_vars['Cbucket']->value->configs['max_photo_size'];?>
mb',
        photo_extensions = '<?php echo implode(",",$_smarty_tpl->tpl_vars['cbphoto']->value->exts);?>
',
        plupload_swf = '<?php echo $_smarty_tpl->tpl_vars['photoUploaderDetails']->value['uploadSwfPath'];?>
',
        plupload_script = '<?php echo $_smarty_tpl->tpl_vars['photoUploaderDetails']->value['uploadScriptPath'];?>
';

    

    function do_update_photo( template, ID ) {
        var _form = template.find( 'form' ), _formdata = _form.serialize(), button = template.find( '.photo-save' );
        button.attr( 'disabled', 'disabled' ).html( lang.savingData );

        $.post(
                baseurl+'/actions/photo_uploader.php',
                _formdata+"&updatePhoto=true",
                function ( data ) {
                    if ( data.success ) {
                        photoMessage( data.success, ID, true );
                    }

                    if ( data.error ) {
                        photoError( data.error, ID, true );
                    }

                    button.removeAttr( 'disabled' ).html( lang.saveData );
                },
                "json"
        )
    }

        $( document ).ready( function() {
            var pluploader = new plupload.Uploader({
                runtimes : 'html5,flash',
                browse_button : 'plupload-pickfiles',
                container : 'upload-form-container',
                //drop_element : 'upload-files-dropable',
                url : plupload_script,
                flash_swf_url : plupload_swf,
                max_file_size : photo_max_size,
                multipart_params : {},
                filters : [
                    {
                        title : lang.browsePhrase, extensions : photo_extensions
                    }
                ]
            });

            pluploader.init();

            var photo_upload_form = $( '#photo_upload_form'),
                upload_container = $( '#upload-form-container' );

            pluploader.bind('FilesAdded', function(up, files) {

                $.each( files, function(i, file) {

                    var photo = photo_upload_form.clone(),
                        name = file.name.split('.'),
                        extension = name.pop(),
                        name_without_extension = name.join('.');


                    photo.attr( 'id', file.id );
                    upload_container.append( photo );

                    photo.find( '.photo-filename' ).text( file.name );
                    photo.find( '.photo-percentage' ).text( '0%' );
                    photo.find( '.photo-speed' ).html( '0 kb/s' );

                    var photo_form = photo.find( 'form' );

                    photo_form.attr( 'id', 'Form'+file.id );
                    photo_form.find('input[name=photo_title]').val( name_without_extension );
                    photo_form.find('textarea[name=photo_description]').val( name_without_extension );

                    if ( collectionID ) {
                        photo_form.find('select[name=collection_id]').val( collectionID );
                    }

                    photo_form.prepend('<input type="hidden" name="photo_id" id="photo_id" value="" /> ');

                    photo_form.find('label[for]').each( function(){
                        $(this).attr('for', $(this).attr('for')+'-'+file.id );
                    });

                    photo_form.find('input,select,textarea').each( function(){
                        $(this).attr('id', $(this).attr('id')+'-'+file.id );
                    });


                    var save_button = photo_form.find( '.photo-save' );

                    save_button.bind( 'click', function( event ){
                        do_update_photo( photo, file.id );
                    });

                    photo.show();

                    pluploader.start();
                    up.refresh(); // Reposition Flash/Silverlight
                });
            });

            pluploader.bind( 'UploadProgress', function( up, file ){
                var form_template = $('#'+file.id)

                form_template.find( '.photo-percentage' ).html( file.percent+"%" );
                form_template.find( '.photo-progressed-bar' ).width( file.percent+"%" );
                form_template.find( '.photo-speed' ).html( plupload.formatSize( up.total.bytesPerSec )+"/s" );
            });

            pluploader.bind( 'FileUploaded', function ( up, file, response ) {
                var res = $.parseJSON( response.response ),
                        form_template = $( '#Form'+file.id ), server_url, folder;

                if ( res.error ) {
                    res.error.file = file;
                    photoError( res.error.message, file.id );
                } else {
                    var file_name = res.file_name,
                        formdata = form_template.serialize();
                        folder = res.file_directory;

                    $.ajax( {
                        url : baseurl+'/actions/photo_uploader.php',
                        type : 'POST',
                        data : formdata+"&filename="+res.file_name+"&ext="+res.extension+"&insertPhoto=yes&server_url="+server_url+
                                "&folder="+folder,
                        /*data : {
                            'insertPhoto' : 'yes',
                            'title' : file.name,
                            'filename' : file_name,
                            'ext' : res.extension
                        },*/
                        dataType : 'json',
                        beforeSend : function()
                        {
                            form_template.find( '.photo-save' ).html( lang.savingData ).attr( 'disabled','disabled' );
                        },
                        success : function ( data ) {
                            form_template.find('input[name=photo_id]').val( data.photoID );
                            form_template.find( '.cbSubmitUpload' ).removeAttr( 'disabled' );
                            do_update_photo( $( '#'+file.id ), file.id );
                        }
                    } )
                }
            });

            pluploader.bind( 'BeforeUpload', function( up, file ){
                console.log( "[BeforeUpload] Called" );
                console.log( file );
            });

            pluploader.bind( 'ChunkUploaded', function( up, file ){
                console.log( "[ChunkUploaded] Called" );
            });

            pluploader.bind( 'FilesRemoved', function( up, file ){
                console.log( "[FilesRemoved] Called" );
            });

            pluploader.bind( 'Init', function( up, file ){
                console.log( "[Init] Called" );
            });

            pluploader.bind( 'PostInit', function( up, file ){
                console.log( "[PostInit] Called" );
            });

            pluploader.bind( 'QueueChanged', function( up, file ){
                console.log( "[QueueChanged] Called" );
            });

            pluploader.bind( 'Refresh', function( up, file ){
                console.log( "[Refresh] Called" );
            });

            pluploader.bind( 'StateChanged', function( up, file ){
                console.log( "[StateChanged] Called" );
            });

            pluploader.bind( 'UploadComplete', function( up, file ){
                console.log( "[UploadComplete] Called" );
                console.log( file );
            });

            pluploader.bind( 'UploadFile', function( up, file ){
                console.log( "[UploadFile] Called" );
                console.log( file );
            });

            pluploader.bind( 'FilesRemoved', function( up, file ){
                console.log( "[FilesRemoved] Called" );
            });

            pluploader.bind( 'Error', function( up, error ){
                console.log( "CODE: "+error.code+" - MESSAGE: "+error.message );
            });
        });
    
</script><?php }} ?>
