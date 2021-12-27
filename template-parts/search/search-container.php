<!-- content -->
<div class="products__content py-s">
    <div class="container">

        <!-- row  -->
        <div class="products__content__row grid grid-categories">
            <?php get_sidebar(); ?>

            <!-- container -->
            <section class="products__content__row__container">
                <!-- header -->
                <header class="products__content__row__container__header mb-3">
                    <?php
                    $total = $wp_query->found_posts;
                    $value = ($total > 1 ? 'resultados' : 'resultado');

                    if(is_search()):
                    ?>

                    <h2 class="f-3"><?= sprintf(__('%s ' . $value . ' encontrados para "%s"','E-Locattion'), $total, get_search_query()); ?></h2>

                    <?php endif; ?>
                </header>
                <!-- end of header -->

                <!-- row -->
                <div class="products__content__row__container__row <?= ($total != 0 ? 'grid' : null); ?>">
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
                            get_template_part('template-parts/products/content', 'products');
                        }
                    } else {
                        echo '<p>' . _e('Não encontramos nenhum produto para o termo de pesquisa!') . '</p>';
                    }

                    wp_reset_postdata();
                    ?>
                </div>
                <!-- end of row -->
            </section>
            <!-- end of container -->
        </div>
        <!-- end of row  -->

    </div>
</div>
<!-- end of content -->