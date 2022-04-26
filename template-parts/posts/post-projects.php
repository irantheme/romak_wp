<?php
$front_projects_post = new WP_Query(array(
  'post_type' => 'project',
  'posts_per_page' => intval(esc_html__(get_option('irantheme_front_projects_count'))),
));
?>
<?php if ($front_projects_post->have_posts()) : ?>
  <!-- Projects -->
  <section id="projects">
    <div class="container-holder">
      <div class="container-fluid">

        <!-- Heading mode -->
        <div class="heading-mode heading-mode-dark text-right" data-aos="fade-down">
          <h2><?php echo esc_html__(get_option('irantheme_front_projects_title')); ?></h2>
        </div>

      </div>
      <div class="container-holder">
        <div class="container-fluid">
          <div class="row">
            <!-- Grid masonry -->
            <div class="grid-masonry">
              <div class="grid-sizer"></div>
              <?php while ($front_projects_post->have_posts()) : $front_projects_post->the_post();
                // Get parent id category of post
                $category = get_the_category();
                // $category_parent_list = array();
                $category_parents_id = '';
                foreach ($category as $cate) {
                  if ($cate->parent) {
                    // From your child category, grab parent ID
                    $parent = $cate->parent;

                    // Load object for parent category
                    $parent_id = get_category($parent);

                    // Grab a category name
                    $parent_id = $parent_id->term_id;
                    $category_parents_id .= strval($parent_id) . ',';
                  } else {
                    $category_parents_id .= strval($cate->term_id) . ',';
                  }
                }
                // Get all category of posts
                $categories = get_the_category();
                $categories_output = '';
              ?>
                <!-- Post -->
                <div class="grid-item post-holder" data-cate="<?php echo esc_attr($category_parents_id); ?>" data-id="<?php echo get_the_ID(); ?>" data-aos="fade-up">
                  <article class="post">
                    <a href="<?php echo get_the_permalink(); ?>" class="post-link">
                      <!-- Post image -->
                      <div class="post-image">
                        <?php if (has_post_thumbnail()) : ?>
                          <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="تصویر پروژه" />
                        <?php else : ?>
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/no-image.jpg" alt="تصویر پروژه" />
                        <?php endif; ?>
                      </div>
                      <!-- Post content -->
                      <div class="post-content">
                        <!-- Post heading -->
                        <div class="post-heading">
                          <h2><?php echo get_the_title(); ?></h2>
                          <?php if (count($categories)) : ?>
                            <!-- Post categories -->
                            <ul class="post-categories">
                              <?php
                              foreach ($categories as $category) {
                                $categories_output .= '<li><span>' . esc_html__($category->name) . '</span></li>';
                              }
                              echo trim($categories_output, '');
                              ?>
                            </ul>
                          <?php endif; ?>
                        </div>
                      </div>
                    </a>
                    <?php if (has_post_thumbnail()) : ?>
                      <!-- Post icons -->
                      <div class="post-icons fullscreen-trigger">
                        <i class="lni lni-full-screen"></i>
                      </div>
                    <?php endif; ?>
                  </article>
                </div>
              <?php endwhile; ?>
            </div>
          </div>
        </div>

        <?php if ($front_projects_post->found_posts > $front_projects_post->post_count) : ?>
          <!-- Load more -->
          <div class="load-more">
            <button id="loading-projects" class="button-load">
              پروژه های بیشتر<i class="lni lni-spinner"></i>
            </button>
          </div>
        <?php endif; ?>
      </div>

    </div>
  </section>
<?php endif;
wp_reset_query(); ?>