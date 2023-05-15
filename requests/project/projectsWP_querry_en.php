<?php
$projects_array = array(
    'posts_per_page' => -1,
    'post_type' => 'projects_en'
);
$query_projects = array_merge( $projects_array, (array) $wp->query_vars );
$the_query_projects = new WP_Query( $query_projects );
$projectsID_array_en = array();

if ( $the_query_projects ->have_posts() ) {

    while ( $the_query_projects ->have_posts() ) {
        $the_query_projects ->the_post();
        $projectsID_array_en[get_the_ID()] = get_post_meta( get_the_ID(), '_id', true );

    }
}
