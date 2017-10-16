<?php
/**
 * Created by PhpStorm.
 * User: kamal
 * Date: 15/10/17
 * Time: 23:40
 */

function enable_ajax_functionality()
{
    wp_localize_script('ajaxify','ajaxify_function',array('ajaxurl'=>admin_url('admin-ajax.php')));
}
add_action('template_redirect','enable_ajax_functionality');

function test_ajax()
{
    header("Content-Type: application/json");
    $post_arrays = get_posts();
    echo json_encode($post_arrays);
    die();
}
add_action( 'wp_ajax_test_ajax', 'test_ajax' );
add_action( 'wp_ajax_nopriv_test_ajax', 'test_ajax' );

function kl_enqueue(){
    wp_deregister_script('jquery');
    wp_register_script('jquery','https://code.jquery.com/jquery-1.11.0.min.js');
    wp_enqueue_script('jquery');
//    wp_register_script('kl_angularJs',get_template_directory_uri() . '/assets/js/libs/angular.min.js');
    wp_register_script('kl_angularJs','https://ajax.googleapis.com/ajax/libs/angularjs/1.2.14/angular.min.js');
    wp_enqueue_script('kl_angularJs');

    wp_register_script('kl_angularApp',get_template_directory_uri() . '/assets/js/plugins/app.js');
    wp_register_script('kl_angularControllers',get_template_directory_uri() . '/assets/js/plugins/controllers.js');
    wp_register_script('kl_angularServices',get_template_directory_uri() . '/assets/js/plugins/services.js');

    wp_enqueue_script('kl_angularApp');
    wp_enqueue_script('kl_angularControllers');
    wp_enqueue_script('kl_angularServices');
}
add_action('wp_enqueue_scripts','kl_enqueue');



?>
