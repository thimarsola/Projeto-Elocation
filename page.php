<?php get_header(); ?>

<?php
if(is_page('Contato')){
    get_template_part('template-parts/contact/contact', 'map');
    get_template_part('template-parts/contact/contact', 'content');
}
?>

<?php get_footer(); ?>