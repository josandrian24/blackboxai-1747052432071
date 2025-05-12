<?php
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function my_welding_theme_services_list_shortcode() {
    // Example static list of services - this can be replaced with dynamic content if needed
    $services = array(
        'Welding Repair',
        'Custom Fabrication',
        'Structural Welding',
        'Pipe Welding',
        'Maintenance Welding',
    );

    $output = '<ul class="list-disc list-inside space-y-2">';
    foreach ( $services as $service ) {
        $output .= '<li class="text-lg">' . esc_html( $service ) . '</li>';
    }
    $output .= '</ul>';

    return $output;
}
add_shortcode( 'services_list', 'my_welding_theme_services_list_shortcode' );
