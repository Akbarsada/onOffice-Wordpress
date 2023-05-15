<?php
$estates_array = array(
    'posts_per_page' => -1,
    'post_type' => 'estates'
);

$query_estate = array_merge( $estates_array, (array) $wp->query_vars );
$the_query_estate = new WP_Query( $query_estate );
$estateID_array = array();

if ( $the_query_estate ->have_posts() ) {

    while ( $the_query_estate ->have_posts() ) {
        $the_query_estate ->the_post();
        $estateID_array[get_the_ID()] = get_post_meta( get_the_ID(), '_id', true );

    }
}

