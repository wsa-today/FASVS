<?php

function location_taxonomy(){
    $args = array(
        'labels' => array(
            'name' => 'Localizações',
            'singular_name' => 'Localização',
        ),
        'public' => true,
        'hierarchical' => true,
    );

    register_taxonomy('localizações', 'post', $args);
}
add_action('init', 'location_taxonomy');

?>