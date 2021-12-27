<!-- card -->
<article class="single__row__card bg-white-500 shadow">
    <!-- thumbnail -->
    <div class="single__row__card__thumbnail">
        <a href="<?= get_the_permalink(); ?>" title="Conheça mais sobre o <?= get_the_title(); ?>"
           target="_blank">
            <img src="<?= get_the_post_thumbnail_url(); ?>"
                 alt="Conheça mais sobre o <?= get_the_title(); ?>"
                 title="Conheça mais sobre o <?= get_the_title(); ?>" loading="lazy">
        </a>
    </div>
    <!-- end of thumbnail -->

    <!-- content -->
    <div class="single__row__card__content p-4">
        <!-- header -->
        <header class="single__row__card__content__header">
            <ul class="d-flex mb-1">
            <?php
            $categoriesList = get_the_terms($post, 'categoria');

            foreach ($categoriesList as $item):
            ?>

            <li>
                <a class="link-primary-500" href="<?= get_the_permalink(get_page_by_title($item->name)) ?>"><?= $item->name; ?></a>
            </li>

            <?php endforeach; ?>
            </ul>
            <h3><?= get_the_title(); ?></h3>
        </header>
        <!-- end of header -->

        <!-- body -->
        <div class="single__row__card__content__body">
            <a class="link-dark-gray-500 d-inline" href="<?= get_the_permalink(); ?>" title="Conheça mais sobre o <?= get_the_title(); ?>" target="_blank">
                <span class="d-flex ai-center">
                    Saiba mais
                    <i class="icon-arrow-right ml-1"></i>
                </span>
            </a>
        </div>
        <!-- end of body -->
    </div>
    <!-- end of content -->
</article>
<!-- end of card -->