<?php

if ( function_exists( 'add_image_size' ) ) add_theme_support( 'post-thumbnails' );
    if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'small', 324, 208, true);
    add_image_size( 'medium', 330, 250, true );
    add_image_size( 'big', 660, 500, true );
}


function subtitle_meta_add() {
    add_meta_box( 'subtitle', 'Subtitulo', 'subtitle_meta_box', 'post', 'normal', 'high' );
}

function subtitle_meta_box() {
    $values = get_post_custom( $post->ID );
    $text = isset( $values['subtitle'] ) ? esc_attr( $values['subtitle'][0] ) : '';
    wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );
    ?>
        <input type="text" name="subtitle" style="width: 100%;" value="<?php echo $text; ?>" />
    <?php  
}

function subtitle_meta_save( $post_id ) {
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'meta_box_nonce' ] ) && wp_verify_nonce( $_POST[ 'meta_box_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }
    if( isset( $_POST[ 'subtitle' ] ) ) {
        update_post_meta( $post_id, 'subtitle', sanitize_text_field( $_POST[ 'subtitle' ] ) );
    }
}

add_action( 'add_meta_boxes', 'subtitle_meta_add' );
add_action( 'save_post', 'subtitle_meta_save' );
add_filter( 'show_admin_bar', '__return_false' );

 ?>