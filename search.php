<?php get_header(); ?>

<h1>Pesquisa</h1>

<?php
$argProducts = [
    'post_type' => 'produto',
    'posts_per_page' => -1,
    'order' => 'ASC',
    'orderby' => 'name',
    's' => $_GET['s']
];

$theQueryProducts = new WP_Query($argProducts);

if ($theQueryProducts->have_posts()) {
    while ($theQueryProducts->have_posts()) {
        $theQueryProducts->the_post();
        get_template_part('template-parts/home/content', 'products');
    }
} else {
    echo '<p>' . _e('Não existem produtos publicados no momento') . '</p>';
}

wp_reset_postdata();

?>

<?php get_footer(); ?>