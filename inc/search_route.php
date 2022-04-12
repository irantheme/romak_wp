<?php

if (!function_exists('irantheme_register_search')) {
  /**
   * Register custom json search url
   * @return void
   */
  function irantheme_register_search()
  {
    register_rest_route('json/v1', 'search', array(
      'methods' => WP_REST_SERVER::READABLE,
      'callback' => 'irantheme_results_search',
      'permission_callback' => '__return_true'
    ));
  }
  add_action('rest_api_init', 'irantheme_register_search');
}


if (!function_exists('irantheme_results_search')) {
  /**
   * Pin results to custom search
   * @return array
   * @param array data
   */
  function irantheme_results_search($data)
  {
    // Getting new query for post and page type
    $mainQuery = new WP_Query(array(
      'post_type' => array('post', 'project'),
      's' => sanitize_text_field($data['term']), // Sanitize is more security for wordpress functions
      'posts_per_page' => 99999999
    ));

    // Create results for maintenance created json data
    $results = array(
      'generalInfo' => array()
    );

    // Check of of them posts
    while ($mainQuery->have_posts()) {
      $mainQuery->the_post();
      // Appending data to results array
      if (get_post_type() == 'post' || get_post_type() == 'project') {
        array_push($results['generalInfo'], array(
          'title' => get_the_title(),
          'permalink' => get_the_permalink(),
          'date' => get_the_date('j F Y'),
          'imageSrc' => get_the_post_thumbnail_url(get_the_ID(), 'thumbnail')
        ));
      }
    }

    return $results;
  }
}
