<?php get_header(); ?>

<!-- hero -->
<?php get_template_part('template-parts/single/single', 'hero'); ?>
<!-- end of hero -->

<!-- content -->
<?php
if(have_posts()){
    while (have_posts()){
        the_post();
        get_template_part('template-parts/single/single', 'content');
    }
}else{
    echo '<p>' . _e('Não existem artigos cadastrados para esta categoria no momento.') . '</p>';
}
?>
<!-- end of content -->

<!-- highlight -->
<?php get_template_part('template-parts/single/single', 'highlight'); ?>
<!-- end of highlight -->

<?php get_footer(); ?>