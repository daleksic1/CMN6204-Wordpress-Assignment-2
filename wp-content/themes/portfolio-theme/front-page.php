<?php get_header();?>
<?php the_post(); ?>
   
     <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->




            <?php

                $slider= get_field('slider');



    foreach ($slider as $key => $slide) :
    if ($key === 0) {
        $class = 'active';
    } else {
        $class = '';
    }
        $image = $slide['slide_image']['sizes']['Hero'];
        $title = $slide['title'];
        $des =$slide['description'];


         ?>

    <div class="carousel-item <?= $class ?>" style="background-image: url('<?= $image ?>')">
        <div class="carousel-caption d-none d-md-block">
            <h3><?= $title ?></h3>
            <p><?= $des ?></p>
        </div>
    </div>

<?php endforeach; ?>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>
    <div class="container">

      <h1 class="my-4"><?= get_bloginfo ('name');?></h1>
<?php $welcome_t = get_field('welcome_text');?>
    <h1 class="my-4 text-center"><?=$welcome_t;?></h1>
      <!-- Features Section -->
      <div class="row">
        <div class="col-lg-3"></div>
          <div class="col-lg-6">
            <?php
            $welcome = get_field('welcome_image')['sizes']['Hero'];
            $txt =  get_field('text');
            $url =  get_field('url');

            ?>
            <img class="img-fluid rounded" src="<?= $welcome;?>" alt="">
            <?php the_content(); ?>

        </div>
        
      </div>
      <!-- /.row -->

      <hr>

      <!-- Call to Action Section -->
      <div class="row mb-4">
        <div class="col-md-8">
          <p><?= $txt;?></p>
        </div>
        <div class="col-md-4">
          <a class="btn btn-lg btn-secondary btn-block" href=" <?= $url;?>">Call to Action</a>
        </div>
      </div>

      <!-- Portfolio Section -->
      <h2>Testimonials</h2>

      <div class="row">
<?php

while ( have_rows('testemonials_repeater') ) :
    the_row();
    $image = get_sub_field('image')['sizes']['medium'];
    $text = get_sub_field('name');
    $link = get_sub_field('link');
    $qoute = get_sub_field('qoute');
    ?>

          <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="<?= $image;?>" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="<?=$link;?>"><?=$text; ?></a>
              </h4>
              <p class="card-text"> <?=$qoute;?></p>
            </div>
          </div>


      </div>
      <!-- /.row -->
    <?php endwhile;?>

    </div>
    <!-- /.container -->
 <?php get_footer();?>