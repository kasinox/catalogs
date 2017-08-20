jQuery(document).ready(function($){
 
    var custom_uploader;
 
    $('#Item_Image_button').click(function(e) {
 
        e.preventDefault();
 
        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }
 
        //Extend the wp.media object
        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });
 
        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader.on('select', function() {
            attachment = custom_uploader.state().get('selection').first().toJSON();
            $('#Item_Image').val(attachment.url);
        });
 
        //Open the uploader dialog
        custom_uploader.open();
 
    });
});

jQuery(document).ready(function($){
 
    var custom_uploader;
 
    $('#Item_Image_Addt_button').click(function(e) {
 
        e.preventDefault();
 
        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }
 
        //Extend the wp.media object
        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: true
        });
 
        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader.on('select', function() {
          var sel = custom_uploader.state().get('selection')
          , attachment = [], i;

          console.log(sel.models);
          for(i=0; i< sel.models.length; i++) {
            console.log(sel.models[i].toJSON());
            attachment.push(sel.models[i].toJSON().url);
          }
          $('#Item_Image_Addt').val(attachment);
        });
 
        //Open the uploader dialog
        custom_uploader.open();
 
    });
});

jQuery(document).ready(function($){
 
    var custom_uploader;
 
    $('#Details_Image_button').click(function(e) {
 
        e.preventDefault();
 
        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }
 
        //Extend the wp.media object
        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });
 
        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader.on('select', function() {
            attachment = custom_uploader.state().get('selection').first().toJSON();
            $('#Details_Image').val(attachment.url);
        });
 
        //Open the uploader dialog
        custom_uploader.open();
 
    });
});