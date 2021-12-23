<section class="highlight py-s">
    <div class="container">

        <!-- header -->
        <header class="highlight__header mb-6 t-center">
            <p class="clr-primary-500 f-3 mb-3">Os melhores Equipamentos e Instrumentos de Medição</p>
            <h2 class="f-8">Nossos equipamentos em destaques</h2>
        </header>
        <!-- end of header -->

        <!-- row -->
        <div class="highlight__row grid">
            <?php

            $argProducts = [
                'post_type' => 'produto',
                'posts_per_page' => 3,
                'orderby' => 'rand'
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
        </div>
        <!-- end of row -->

        <!-- content -->
        <div class="highlight__content mt-6 t-right">
            <a href="<?= get_the_permalink(get_page_by_title('Produtos')) ?>" class="link-dark-gray-500 t-uppercase d-inline" title="Conheça os nossos outros produtos">
                <span class="d-flex ai-center">
                     Ver mais produtos
                     <i class="icon-arrow-right ml-1"></i>
                </span>
            </a>
        </div>
        <!-- end of content -->
    </div>
</section>