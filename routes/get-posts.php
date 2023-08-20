<?php

/**
 * @author MuhamadSulaimanMisri
 */

function sm_api_to_fetch_the_posts()
{
    register_rest_route('/sm-api/v1', 'posts', [
        'methods' => 'GET',
        'callback' => 'list_all_the_published_post',
    ]);
}

function list_all_the_published_post()
{
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => -1,
    );

    $query = new WP_Query($args);
    $posts = $query->get_posts();

    $post_data = [];

    foreach ($posts as $post) {
        $post_data[] = [
            'ID' => $post->ID,
            'title' => $post->post_title,
            'content' => $post->post_content,
        ];
    }

    return $post_data;
}

add_action('rest_api_init', 'sm_api_to_fetch_the_posts');
