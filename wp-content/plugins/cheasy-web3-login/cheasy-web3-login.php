<?php
/*
 * Plugin name: Cheasy Web3 Login
 * Version: 1.0
 * Author: Jules
 */

// Add the login button to the login form
add_action( 'login_form', function() {
    ?>
    <div id="mm-login">
        <a href="#" class="button">Login with MetaMask</a>
    </div>
    <?php
} );

// Enqueue scripts and styles
add_action( 'login_enqueue_scripts', function() {
    wp_enqueue_style( 'mm-login', plugin_dir_url( __FILE__ ) . 'assets/style.css' );
    wp_enqueue_script( 'mm-login', plugin_dir_url( __FILE__ ) . 'assets/script.js', array('jquery'), time(), true );
    wp_localize_script( 'mm-login', 'ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
} );

// AJAX handler
add_action( 'wp_ajax_metamasklogin', 'cheasy_ajax_login' );
add_action( 'wp_ajax_nopriv_metamasklogin', 'cheasy_ajax_login' );

function cheasy_ajax_login() {
    if ( isset( $_POST['address'] ) ) {
        $address = sanitize_text_field( $_POST['address'] );

        $user = get_users( array( 'meta_key' => 'metamask_address', 'meta_value' => $address ) );

        if ( ! empty( $user ) ) {
            $user_id = $user[0]->ID;
        } else {
            $user_id = wp_create_user( $address, wp_generate_password() );
            update_user_meta( $user_id, 'metamask_address', $address );
        }

        wp_set_current_user( $user_id );
        wp_set_auth_cookie( $user_id );

        echo 'ok';
    }

    die;
}
