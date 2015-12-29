/**
 * Created by Vince on 12/28/2015.
 */
jQuery(document).ready(function($){
    var mediaUploader;
    $('#upload-button').on('click', function(e){
        e.preventDefault();
        if(mediaUploader){
            mediaUploader.open();
            return;
        }
        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose a Profile Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });
        mediaUploader.on('select', function(){
            var attachment = mediaUploader.state().get('selection').first().toJSON();
            $('#profile-picture').val(attachment.url);
            $('#profile-picture-preview').css('background-image','url(' + attachment.url + ')');
        });
        mediaUploader.open();
    });
    $('#remove-picture').on('click', function(e){
        e.preventDefault();
        var answer = confirm("Confirm Remove Picture?");
        if(answer == true){
            $('#profile-picture').val('');
            $('#profile-picture-preview').css('background-image','url("")');
 //           $('.sunset-general-form').submit();
        }
    });
});