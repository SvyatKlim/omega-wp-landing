<?php


if ( function_exists( 'add_image_size' ) ) {
    add_image_size('blog', 274, 167, array( 'center', 'center' ));
}

add_filter('jpeg_quality', function ($arg) {
    return 100;
});
add_filter('wp_editor_set_quality', function ($arg) {
    return 100;
});
