<?php

get_header();
the_post();
?>
    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Portfolio Item
        <small>Subheading</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Portfolio Item</li>
      </ol>

      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-8">
          <img class="img-fluid" src="http://placehold.it/750x500" alt="">
        </div>

        <div class="col-md-4">
            <?php
            $content = get_the_content();
            excerpt($content,350);

            ;?>
        </div>


      </div>
      <!-- /.row -->

      <!-- Related Projects Row -->
      <h3 class="my-4">Related Projects</h3>

      <div class="row">
        <?php


        $current_id = get_the_ID();

        $postC = new WP_Query([
          'post-type' => 'post',
          'orderby' => 'rand',
          'category__in' => wp_get_post_categories($post->ID),
          'post__not_in' => [$current_id]
          ]);
          while ($postC->have_posts()) :
        $postC->the_post();

          ?>
        <div class="col-md-3 col-sm-6 mb-4">
            <?php the_title();?>
          <a href="<?= get_permalink($post->id);?>">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
        </div>

        <?php endwhile;?>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

   <?php get_footer();?>
