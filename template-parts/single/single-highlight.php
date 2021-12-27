<section class="single py-s">
    <div class="container">

        <!-- header -->
        <header class="single__header mb-6">
            <h2 class="f-6">Conheça nossos outros equipamentos e instrumentos de medição</h2>
        </header>
        <!-- end of header -->

        <!-- row -->
        <div class="single__row grid">
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
                    get_template_part('template-parts/single/content', 'products');
                }
            } else {
                echo '<p>' . _e('Não existem produtos publicados no momento') . '</p>';
            }

            wp_reset_postdata();

            ?>
        </div>
        <!-- end of row -->
    </div>
</section>