<?php get_header();
    the_post();
?>
    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3"><?php wp_title();?>
        <small>Subheading</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active"><?php wp_title();?></li>
      </ol>
<?php

$wp_query->get_queried_object();

$posts = new WP_Query([
    'post-type' => 'post',
    'orderby' => 'date',
    'order' => 'DESC',
    'category__in ' => $wp_query->cat_ID

]);
while ($posts->have_posts()) :
    $posts->the_post();

    ?>
      <!-- Project One -->
      <div class="row">
        <div class="col-md-7">
            <?php
            $url = get_field('featured_image')['sizes']['medium_large'];
            $alt = get_field('featured_image')['alt'];
            ?>
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="<?=$url?>" alt="<?=$alt?>">
          </a>
        </div>
        <div class="col-md-5">
          <h3><?php the_title();?></h3>
          <p><?php  $content = get_the_content();
              excerpt($content,180);?></p>
          <a class="btn btn-primary" href="<?= get_permalink($post->id);?>">View Project
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div>
      </div>
      <!-- /.row -->

      <hr>
    <?php
endwhile;
wp_reset_postdata();
?>


    </div>
    <!-- /.container -->

 <?php get_footer()?>