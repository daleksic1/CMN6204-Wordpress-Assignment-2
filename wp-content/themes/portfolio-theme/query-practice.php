<?php
//Template Name:Query Practice Template


echo "<h1>Task1</h1>";

$lastModified = new WP_Query([
    'post_type' => 'post',
    'orderby' => 'modified',
    'posts_per_page' => 2
]);
while ($lastModified->have_posts()) {
    $lastModified->the_post();
    echo the_title();
    echo "<br>";
};
wp_reset_postdata();


echo "<h1>Task2</h1>";
$pgs = new WP_Query([
    'post_type' => 'page',
    'order' => 'DSC'
]);

while ($pgs->have_posts()) {
    $pgs->the_post();
    echo the_title();
    echo "<br>";
};

wp_reset_postdata();


echo "<h1>Task3</h1>";
$postD = new WP_Query([
    'post_type' => 'post',
    'orederby' => 'date',
    'order' => 'DSC'
]);

while ($postD->have_posts()) {
    $postD->the_post();
    echo get_the_date();
    echo "<br>";
};

wp_reset_postdata();

echo "<h1>Task4</h1>";
$postT = new WP_Query([
    'post_type' => 'post',
    'tag__in' => [11, 5],
    'posts_per_page' => 3


]);

while ($postT->have_posts()) {
    $postT->the_post();
    echo the_title();
    echo "<br>";
    echo the_tags();
    echo "<br>";

    echo "<br>";
};

wp_reset_postdata();

echo "<h1>Task5</h1>";
$postT = new WP_Query([
    'post_type' => 'post',
    'tag__in' => [11, 5],


]);

while ($postT->have_posts()) {
    $postT->the_post();
    echo the_title();
    echo "<br>";
    echo the_tags();
    echo "<br>";

    echo "<br>";
};

wp_reset_postdata();

echo "<h1>Task6</h1>";
$findP = new WP_Query([
    'pagename' => 'contact',

]);

while ($findP->have_posts()) {
    $findP->the_post();
    $user = $user = get_user_by('slug', get_the_author());
    echo 'Username is:' . ' ' . $user->user_nicename . ' ' . 'User email is:' . ' ' . $user->user_email;

};
wp_reset_postdata();


echo "<h1>Task7</h1>";
$postC = new WP_Query([
    'post_type' => 'post',
    'category_name' => 'ux-design',
    'orderby' => 'title',
    'posts_per_page' => -1,
    'order' => 'ASC'
]);

while ($postC->have_posts()) {
    $postC->the_post();
    echo the_title();
    echo "<br>";
    echo the_content();
    echo "<br>";


};

wp_reset_postdata();
echo "<h1>Task8</h1>";
$postC = new WP_Query([
    'post_type' => 'post',
    'orderby' => 'title',
    'posts_per_page' => -1,
    'order' => 'ASC'

]);

while ($postC->have_posts()) {
    $postC->the_post();
    $user = get_user_by('id', '1');
    echo '<ol>' . '<li>' . the_title() . '[' . $user->user_nicename . ']' . get_the_date() . '</li>' . '</ol>';
    echo "<br>";


};

wp_reset_postdata();
?>