<?php get_header(); ?>

<?php
if(is_page('Contato')){
    get_template_part('template-parts/contact/contact', 'map');
    get_template_part('template-parts/contact/contact', 'content');
}elseif (is_page('Produtos')){
    get_template_part('template-parts/products/products', 'hero');
    get_template_part('template-parts/products/products', 'content');
    get_template_part('template-parts/products/products', 'categories');
}elseif (is_page('Segurança do Trabalho') || is_page('Meio Ambiente') || is_page('Outros')){
    get_template_part('template-parts/products/products', 'hero');
    get_template_part('template-parts/products/products', 'content');
}
?>

<?php get_footer(); ?>