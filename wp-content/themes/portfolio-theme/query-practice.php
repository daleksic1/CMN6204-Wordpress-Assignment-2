<?php
//Template Name:Query Practice Template


echo "<h1>Task1</h1>";

$lastModified = new WP_Query([
    'post_type' => 'post',
    'orderby' => 'modified',
    'posts_per_page' => 2
]);
while($lastModified->have_posts()) {
    $lastModified->the_post();
    echo the_title();
    echo "<br>";
};
wp_reset_postdata();


echo "<h1>Task2</h1>";
$pages = new WP_Query([
    'post_type' => 'page',
    'order' => 'DSC'
] );

while($pages->have_posts()){
    $pages->the_post();
    echo the_title();
    echo "<br>";
};

wp_reset_postdata();



    ?>