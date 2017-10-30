<?php

get_header();
the_post();
?>
    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3"><?php the_title();?>
        <small><?php the_title();?></small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active"><?= the_title();?></li>
      </ol>


      <div class="row">

        <div class="col-md-8">

            <?php


            $url = get_field('featured_image')['sizes']['medium_large'];
            $alt = get_field('featured_image')['alt'];


            ?>
          <img class="img-fluid" src="<?= $url ?>" alt="<?= $alt?>">
        </div>

        <div class="col-md-4">
            <p>Date Completed:<?= get_field('completed_date')?></p>
            <?= the_content();?>
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
            <img class="img-fluid" src="<?php echo $url = get_field('featured_image')['sizes']['thumbnail'];?>" alt="<?= $alt?>">
          </a>
        </div>

        <?php endwhile;?>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

   <?php get_footer();?>
