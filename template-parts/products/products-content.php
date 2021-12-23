<!-- content -->
<div class="products__content py-s">
    <div class="container">

        <!-- row  -->
        <div class="products__content__row grid <?= (is_page('Produtos') ? 'grid-products' : 'grid-categories'); ?>">
            <?php
            if(is_page('Segurança do Trabalho') || is_page('Meio Ambiente') || is_page('Outros')){
                get_sidebar();
            }
            ?>

            <!-- container -->
            <section class="products__content__row__container">
                <!-- header -->
                <header class="products__content__row__container__header d-none">
                    <h2>Conheça a nossa linha completa de equipamentos e instrumentos de medição</h2>
                </header>
                <!-- end of header -->

                <!-- row -->
                <div class="products__content__row__container__row grid">
                    <?php
                    $pagedLast = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                    $postsPerPage = (is_page('Produtos') ? 9 : 6);

                    $argProducts = [
                        'post_type' => 'produto',
                        'order' => 'DESC',
                        'posts_per_page' => $postsPerPage,
                        'paged' => $pagedLast
                    ];

                    if(is_page('Segurança do Trabalho')){
                        $argProducts = [
                            'tax_query' => [[
                                'taxonomy' => 'categoria',
                                'field'    => 'slug',
                                'terms' => 'seguranca-do-trabalho'
                            ]]
                        ];
                    }elseif(is_page('Meio Ambiente')){
                        $argProducts = [
                            'tax_query' => [[
                                'taxonomy' => 'categoria',
                                'field'    => 'slug',
                                'terms'    => 'meio-ambiente',
                            ]]
                        ];
                    }elseif(is_page('Outros')){
                        $argProducts = [
                            'tax_query' => [[
                                'taxonomy' => 'categoria',
                                'field'    => 'slug',
                                'terms' => 'outros'
                            ]]
                        ];
                    }

                    $theQueryProducts = new WP_Query($argProducts);

                    if ($theQueryProducts->have_posts()) {
                        while ($theQueryProducts->have_posts()) {
                            $theQueryProducts->the_post();
                            get_template_part('template-parts/products/content', 'products');
                        }
                    } else {
                        echo '<p>' . _e('Não existem produtos publicados no momento') . '</p>';
                    }

                    wp_reset_postdata();
                    ?>
                </div>
                <!-- end of row -->

                <!-- pagination -->
                <div class="products__content__pagination mt-5">
                    <nav class="pagination__nav">
                        <h2 class="d-none">Menu de Paginação</h2>

                        <?php
                        $big = 999999999; // need an unlikely integer

                        $pages = pagination(
                            [
                                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                                'format' => '?paged=%#%',
                                'current' => max(1, get_query_var('paged')),
                                'total' => $theQueryProducts->max_num_pages,
                                'prev_text' => '<i class="icon-arrow-downward"></i>',
                                'next_text' => '<i class="icon-arrow-forward"></i>',
                                'type' => 'array',
                            ]
                        );

                        if (is_array($pages)) {
                            echo '<ul class="pagination__nav__list">';
                            foreach ($pages as $page) {
                                echo "<li class='pagination__nav__list__item'>$page</li>";
                            }
                            echo '</ul>';
                        }
                        ?>
                    </nav>
                </div>
                <!-- end of pagination -->
            </section>
            <!-- end of container -->
        </div>
        <!-- end of row  -->

    </div>
</div>
<!-- end of content -->