<?php

include_once get_template_directory() . '/functions/goldeneagle-functions.php';
$functions_path = get_template_directory() . '/functions/';
require_once ($functions_path . 'dynamic-image.php');
require_once ($functions_path . 'themes-page.php');
require_once ($functions_path . 'customizer.php');

function goldeneagle_enqueue_style() {
    wp_enqueue_style('goldeneagle-base', get_template_directory_uri() . '/css/base.css', '', '', 'all');
    wp_enqueue_style('goldeneagle-font-ubuntu', '//fonts.googleapis.com/css?family=Ubuntu');
    wp_enqueue_style('goldeneagle-font-droid', '//fonts.googleapis.com/css?family=Droid+Sans');
    wp_enqueue_style('goldeneagle-main', get_stylesheet_uri(), '', '', 'all');
}

add_action('wp_enqueue_scripts', 'goldeneagle_enqueue_style');

/* ----------------------------------------------------------------------------------- */
/* jQuery Enqueue */
/* ----------------------------------------------------------------------------------- */

function goldeneagle_enqueue_scripts() {
    if (!is_admin()) {
        wp_enqueue_script('goldeneagle-ddsmoothmenu', get_stylesheet_directory_uri() . '/js/ddsmoothmenu.js', array('jquery'));
        wp_enqueue_script('goldeneagle-slider', get_stylesheet_directory_uri() . '/js/slides.min.jquery.js', array('jquery'));
        wp_enqueue_script('goldeneagle-tipsy', get_stylesheet_directory_uri() . '/js/jquery.tipsy.js', array('jquery'));
        wp_enqueue_script('goldeneagle-validate', get_stylesheet_directory_uri() . '/js/jquery.validate.min.js', array('jquery'));
        wp_enqueue_script('goldeneagle-effect', get_stylesheet_directory_uri() . '/js/frontend-effect.js', array('jquery'));
        wp_enqueue_script('goldeneagle-mobilemenu', get_stylesheet_directory_uri() . '/js/mobilemenu.js', array('jquery'));
        wp_register_script('goldeneagle-custom', get_template_directory_uri() . '/js/custom.js', array("jquery"));
        wp_enqueue_script('goldeneagle-custom');
        wp_localize_script('goldeneagle-custom', 'obj', array(
            'template_url' => get_template_directory_uri()
        ));
        if (is_singular() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }
    }
}

add_action('wp_enqueue_scripts', 'goldeneagle_enqueue_scripts');

//get theme option value
function goldeneagle_get_option($name) {
    $options = get_option('goldeneagle_options');
    if (isset($options[$name]))
        return $options[$name];
}

//update theme option value
function goldeneagle_update_option($name, $value) {
    $options = get_option('goldeneagle_options');
    $options[$name] = $value;
    return update_option('goldeneagle_options', $options);
}

//delete theme option value
function goldeneagle_delete_option($name) {
    $options = get_option('goldeneagle_options');
    unset($options[$name]);
    return update_option('goldeneagle_options', $options);
}

//Add plugin notification 
require_once(get_template_directory() . '/functions/plugin-activation.php');
require_once(get_template_directory() . '/functions/inkthemes-plugin-notify.php');
add_action('tgmpa_register', 'inkthemes_plugins_notify');
require_once ($functions_path . 'define_template.php');

//delete_option('goldeneagle_migrate_option');
add_action('init', 'goldeneagle_migrate_option');

function goldeneagle_migrate_option() {
    if (get_option('goldeneagle_options') && !get_option('goldeneagle_migrate_option')) {
        $theme_option = array('goldeneagle_logo', 'goldeneagle_favicon', 'goldeneagle_slideimage1', 'goldeneagle_slideimage2', 'goldeneagle_featureimg1', 'goldeneagle_featureimg2', 'goldeneagle_featureimg3', 'goldeneagle_featureimg4');
        $wp_upload_dir = wp_upload_dir();
        require ( ABSPATH . 'wp-admin/includes/image.php' );
        foreach ($theme_option as $option) {
            $option_value = goldeneagle_get_option($option);
            if ($option_value && $option_value != '') {
                $filetype = wp_check_filetype(basename($option_value), null);
                $image_name = preg_replace('/\.[^.]+$/', '', basename($option_value));
                $new_image_url = $wp_upload_dir['path'] . '/' . $image_name . '.' . $filetype['ext'];
                goldeneagle_import_file($new_image_url);
            }
        }
        update_option('goldeneagle_migrate_option', true);
    }
}

function goldeneagle_import_file($file, $post_id = 0, $import_date = 'file') {
    set_time_limit(120);

    // Initially, Base it on the -current- time.
    $time = current_time('mysql', 1);
//     Next, If it's post to base the upload off:

    $time = gmdate('Y-m-d H:i:s', @filemtime($file));


//     A writable uploads dir will pass this test. Again, there's no point overriding this one.
    if (!( ( $uploads = wp_upload_dir($time) ) && false === $uploads['error'] )) {
        return new WP_Error('upload_error', $uploads['error']);
    }

    $wp_filetype = wp_check_filetype($file, null);

    extract($wp_filetype);

    if ((!$type || !$ext ) && !current_user_can('unfiltered_upload')) {
        return new WP_Error('wrong_file_type', __('Sorry, this file type is not permitted for security reasons.', 'golden-eagle-lite')); //A WP-core string..
    }

    $file_name = str_replace('\\', '/', $file);

    if (preg_match('|^' . preg_quote(str_replace('\\', '/', $uploads['basedir'])) . '(.*)$|i', $file_name, $mat)) {
        $filename = basename($file);
        $new_file = $file;
        $url = $uploads['baseurl'] . $mat[1];
        $attachment = get_posts(array('post_type' => 'attachment', 'meta_key' => '_wp_attached_file', 'meta_value' => ltrim($mat[1], '/')));
        if (!empty($attachment)) {
            return new WP_Error('file_exists', __('Sorry, That file already exists in the WordPress media library.', 'golden-eagle-lite'));
        }

        //Ok, Its in the uploads folder, But NOT in WordPress's media library.
        if ('file' == $import_date) {
            $time = @filemtime($file);
            if (preg_match("|(\d+)/(\d+)|", $mat[1], $datemat)) { //So lets set the date of the import to the date folder its in, IF its in a date folder.
                $hour = $min = $sec = 0;
                $day = 1;
                $year = $datemat[1];
                $month = $datemat[2];

                // If the files datetime is set, and it's in the same region of upload directory, set the minute details to that too, else, override it.
                if ($time && date('Y-m', $time) == "$year-$month") {
                    list($hour, $min, $sec, $day) = explode(';', date('H;i;s;j', $time));
                }
                $time = mktime($hour, $min, $sec, $month, $day, $year);
            }
            $time = gmdate('Y-m-d H:i:s', $time);

            // A new time has been found! Get the new uploads folder:
            // A writable uploads dir will pass this test. Again, there's no point overriding this one.
            if (!( ( $uploads = wp_upload_dir($time) ) && false === $uploads['error'] ))
                return new WP_Error('upload_error', $uploads['error']);
            $url = $uploads['baseurl'] . $mat[1];
        }
    } else {
        $filename = wp_unique_filename($uploads['path'], basename($file));
        // copy the file to the uploads dir
        $new_file = $uploads['path'] . '/' . $filename;
        if (false === @copy($file, $new_file))
            return new WP_Error('upload_error', sprintf(__('The selected file could not be copied to %s.', 'golden-eagle-lite'), $uploads['path']));

        // Set correct file permissions
        $stat = stat(dirname($new_file));
        $perms = $stat['mode'] & 0000666;
        @ chmod($new_file, $perms);
        // Compute the URL
        $url = $uploads['url'] . '/' . $filename;

        if ('file' == $import_date)
            $time = gmdate('Y-m-d H:i:s', @filemtime($file));
    }

    //Apply upload filters
    $return = apply_filters('wp_handle_upload', array('file' => $new_file, 'url' => $url, 'type' => $type));
    $new_file = $return['file'];
    $url = $return['url'];
    $type = $return['type'];

    $title = preg_replace('!\.[^.]+$!', '', basename($file));
    $content = '';

    if ($time) {
        $post_date_gmt = $time;
        $post_date = $time;
    } else {
        $post_date = current_time('mysql');
        $post_date_gmt = current_time('mysql', 1);
    }

    // Construct the attachment array
    $attachment = array(
        'post_mime_type' => $type,
        'guid' => $url,
        'post_parent' => $post_id,
        'post_title' => $title,
        'post_name' => $title,
        'post_content' => $content,
        'post_date' => $post_date,
        'post_date_gmt' => $post_date_gmt
    );

    $attachment = apply_filters('afs-import_details', $attachment, $file, $post_id, $import_date);

    //Win32 fix:
    $new_file = str_replace(strtolower(str_replace('\\', '/', $uploads['basedir'])), $uploads['basedir'], $new_file);

    // Save the data

    $id = wp_insert_attachment($attachment, $new_file, $post_id);
    if (!is_wp_error($id)) {
        $data = wp_generate_attachment_metadata($id, $new_file);
        wp_update_attachment_metadata($id, $data);
    }
    //update_post_meta( $id, '_wp_attached_file', $uploads['subdir'] . '/' . $filename );

    return $id;
}

?>