<?php
/**
 * Plugin Name: Search Query Generator
 * Plugin Author: ProTech IG
 * Description: A query generation form
 */

include('form.php');

wp_register_style('bootstrap', plugin_dir_url(__FILE__) . 'css/bootstrap.css');

wp_register_script('bootstrap', plugin_dir_url(__FILE__) . 'js/bootstrap.js');
wp_register_script('lqgenjs', plugin_dir_url(__FILE__) . 'js/lqgen.js');

wp_enqueue_style('bootstrap');

wp_enqueue_script('jquery');
wp_enqueue_script('bootstrap');
wp_enqueue_script('lqgenjs');

add_shortcode('lqgen-wp', 'lqgen_handler');

function lqgen_handler() {
    ob_start();
?>
    <div class="query-form-container">
        <?php show_query_form(); ?>
        <?php show_output_modal(); ?>
    </div>
<?php
    return ob_get_clean();
}
