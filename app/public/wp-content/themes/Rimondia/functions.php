<?php
/*
 *  Author: Todd Motto | @toddmotto
 *  URL: html5blank.com | @html5blank
 *  Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

// Load any external files you have here

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

if (!isset($content_width)) {
    $content_width = 900;
}

// Proper way to enqueue styles (from https://codex.wordpress.org/Function_Reference/wp_enqueue_script)
function rimondia_load_style()
{
    foreach (glob(get_template_directory() . '/css/*.css') as $file) {
        $file = str_replace(get_template_directory(), '', $file);
        // $file contains the name and extension of the file
        wp_enqueue_style($file . 'style', get_template_directory_uri() . $file, '', null, 'all');
    }

    wp_enqueue_script($file . 'script', get_template_directory_uri() . $file, '', null, true);

    foreach (glob(get_template_directory() . '/js/*.js') as $file) {
        $file = str_replace(get_template_directory(), '', $file);
        // $file contains the name and extension of the file
        wp_enqueue_script($file . 'script', get_template_directory_uri() . $file, '', false, true);
    }
}
add_action('wp_enqueue_scripts', 'rimondia_load_style');



function add_your_fields_meta_box()
{
    add_meta_box(
        'your_fields_meta_box', // $id
        'Afbeelding vacature', // $title
        'show_your_fields_meta_box', // $callback
        'vacatures', // $screen
        'normal', // $context
        'high' // $priority
    );
}
add_action('add_meta_boxes', 'add_your_fields_meta_box');

function show_your_fields_meta_box()
{
    global $post;
    $meta = get_post_meta($post->ID, 'your_fields', true); ?>

    <input type="hidden" name="your_meta_box_nonce" value="<?php echo wp_create_nonce(basename(__FILE__)); ?>">
    <p>
        <label for="your_fields[image]">Image Upload</label><br>
        <input type="text" name="your_fields[image]" id="your_fields[image]" class="meta-image regular-text" value="<?php if (is_array($meta) && isset($meta['image'])) {
                                                                                                                        echo $meta['image'];
                                                                                                                    } ?>">
        <input type="button" class="button image-upload" value="Browse">
    </p>
    <div class="image-preview"><img src="<?php if (is_array($meta) && isset($meta['image'])) {
                                                echo $meta['image'];
                                            } ?>" style="max-width: 250px;"></div>

    <script>
        jQuery(document).ready(function($) {
            // Instantiates the variable that holds the media library frame.
            var meta_image_frame
            // Runs when the image button is clicked.
            $('.image-upload').click(function(e) {
                // Get preview pane
                var meta_image_preview = $(this)
                    .parent()
                    .parent()
                    .children('.image-preview')
                // Prevents the default action from occuring.
                e.preventDefault()
                var meta_image = $(this)
                    .parent()
                    .children('.meta-image')
                // If the frame already exists, re-open it.
                if (meta_image_frame) {
                    meta_image_frame.open()
                    return
                }
                // Sets up the media library frame
                meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
                    title: meta_image.title,
                    button: {
                        text: meta_image.button,
                    },
                })
                // Runs when an image is selected.
                meta_image_frame.on('select', function() {
                    // Grabs the attachment selection and creates a JSON representation of the model.
                    var media_attachment = meta_image_frame
                        .state()
                        .get('selection')
                        .first()
                        .toJSON()
                    // Sends the attachment URL to our custom image input field.
                    meta_image.val(media_attachment.url)
                    meta_image_preview.children('img').attr('src', media_attachment.url)
                })
                // Opens the media library frame.
                meta_image_frame.open()
            })
        })
    </script>
<?php

}

function save_your_fields_meta($post_id)
{
    // verify nonce
    if (!wp_verify_nonce($_POST['your_meta_box_nonce'], basename(__FILE__))) {
        return $post_id;
    }
    // check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
    }
    // check permissions
    if ('page' === $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id)) {
            return $post_id;
        } elseif (!current_user_can('edit_post', $post_id)) {
            return $post_id;
        }
    }

    $old = get_post_meta($post_id, 'your_fields', true);
    $new = $_POST['your_fields'];

    if ($new && $new !== $old) {
        update_post_meta($post_id, 'your_fields', $new);
    } elseif ('' === $new && $old) {
        delete_post_meta($post_id, 'your_fields', $old);
    }
}
add_action('save_post', 'save_your_fields_meta');

function cw_post_type_werkwijze()
{
    $supports = array(
        'title', // post title
        'editor', // post content
    );
    $labels = array(
        'name' => _x('Werkwijze', 'plural'),
        'singular_name' => _x('Werkwijze', 'singular'),
        'menu_name' => _x('Werkwijze', 'admin menu'),
        'name_admin_bar' => _x('Werkwijze', 'admin bar'),
        'add_new' => _x('Nieuw', 'add new'),
        'add_new_item' => __('Nieuwe stap toevoegen'),
        'new_item' => __('Nieuwe stap'),
        'edit_item' => __('Werkwijze bewerken'),
        'view_item' => __('Bekijk Stappen'),
        'all_items' => __('Alle stappen'),
        'search_items' => __('Zoek in stappen'),
        'not_found' => __('Geen stappen gevonden.'),
    );
    $args = array(
        'public' => false,  // it's not public, it shouldn't have it's own permalink, and so on
        'publicly_queryable' => true,  // you should be able to query it
        'show_ui' => true,  // you should be able to edit it in wp-admin
        'exclude_from_search' => true,  // you should exclude it from search results
        'show_in_nav_menus' => false,  // you shouldn't be able to add it to menus
        // 'has_archive' => false,  // it shouldn't have archive page
        // 'rewrite' => false,  // it shouldn't have rewrite rules
        'supports' => $supports,
        'labels' => $labels,
        // 'public' => true,
        'query_var' => true,
        'rewrite' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'menu_icon' => 'dashicons-hammer',
        'orderby' => 'title',
        'order'   => 'DESC',
    );
    register_post_type('werkwijze', $args);
}
add_action('init', 'cw_post_type_werkwijze');

function cw_post_type_vacatures()
{
    $supports = array(
        'title', // post title
        'editor', // post content
        'excerpt',
        'thumbnail', // featured images

    );
    $labels = array(
        'name' => _x('Vacatures', 'plural'),
        'singular_name' => _x('Vacatures', 'singular'),
        'menu_name' => _x('Vacatures', 'admin menu'),
        'name_admin_bar' => _x('Vacatures', 'admin bar'),
        'add_new' => _x('Nieuw', 'add new'),
        'add_new_item' => __('Nieuwe vacature toevoegen'),
        'new_item' => __('Nieuwe vacature'),
        'edit_item' => __('Vacature bewerken'),
        'view_item' => __('Bekijk vacatures'),
        'all_items' => __('Alle vacatures'),
        'search_items' => __('Zoek in vacatures'),
        'not_found' => __('Geen vacatures gevonden.'),
    );
    $args = array(
        'public' => true,  // it's not public, it shouldn't have it's own permalink, and so on
        'publicly_queryable' => true,  // you should be able to query it
        'show_ui' => true,  // you should be able to edit it in wp-admin
        'exclude_from_search' => false,  // you should exclude it from search results
        'show_in_nav_menus' => true,  // you shouldn't be able to add it to menus
        'supports' => $supports,
        'labels' => $labels,
        'query_var' => true,
        'rewrite' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'menu_icon' => 'dashicons-megaphone',

    );
    register_post_type('vacatures', $args);
}
add_action('init', 'cw_post_type_vacatures');
