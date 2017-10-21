<?php
// Template Name:Portfolio 
get_header();
the_post(); ?>
    <pre>
    <?php echo print_r(get_field('hero_image'));?>
</pre>
    <!-- Page Content -->
    <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Services
        <small>Subheading</small>
    </h1>

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Services</li>
    </ol>
<?php $image = get_field('hero_image')['sizes']['Hero'];
     $alt =get_field('hero_image')['alt'];
?>
    <!-- Image Header -->
    <img class="img-fluid rounded mb-4" src="<?=$image?>" alt="<?=$alt?>">

    <!-- Marketing Icons Section -->
    <div class="row">
        <?php
        $cats = get_categories();
        foreach ($cats as $cat) :;
            ?>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h4 class="card-header"><?= $cat->name; ?></h4>
                    <div class="card-body">
                        <p class="card-text"><?= $category->description ?></p>
                    </div>
                    <div class="card-footer">
                        <a href="<?= get_category_link($cat->cat_ID); ?>" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>


            <?php
        endforeach;
        wp_reset_postdata();
        ?>

        <!-- /.row -->

    </div>
    <!-- /.container -->

<?php get_footer(); ?>