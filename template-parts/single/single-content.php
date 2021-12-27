<section class="single__content">
    <!-- container -->
    <div class="single__content__container py-s">
        <div class="container">

            <!-- row -->
            <div class="single__content__container__row grid">
                <!-- image -->
                <div class="single__content__container__row__image">

                    <!-- list -->
                    <div class="single__content__container__row__image__list">
                        <ul>
                            <?php
                            $photos = get_field('galeria');
                            $i = 1;

                            if ($photos):
                            ?>
                            <?php foreach ($photos as $photo): ?>
                                <li class="<?= ($i == 1 ? 'active' : null); ?> single__content__container__row__image__list__item">
                                    <img class="img-fluid" src="<?= $photo; ?>" alt="Conheça o nosso produto <?= get_the_title(); ?>"/>
                                </li>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                    <!-- end of list -->

                    <!-- cover -->
                     <div class="single__content__container__row__image__cover">
                         <!-- thumb -->
                         <div class="single__content__container__row__image__cover__thumb">
                             <img class="single__content__container__row__image__cover__thumb__image img-fluid" src="<?= get_field('galeria')[0]; ?>" alt="Conheça o nosso produto <?= get_the_title(); ?>">
                         </div>
                         <!-- end of thumb -->

                         <p class="mt-1"><small>* As imagens do produto são ilustrativas</small></p>
                     </div>
                    <!-- end of cover -->
                </div>
                <!-- end of image -->

                <!-- description -->
                <div class="single__content__container__row__description">
                    <!-- header -->
                    <header class="single__content__container__row__description__header mb-4">
                        <h2 class="f-6"><?= get_the_title(); ?></h2>
                    </header>
                    <!-- end of header -->

                    <!-- body -->
                    <div class="single__content__container__row__description__body t-justify">
                        <p><b>Modelo:</b> <?= get_field('modelo'); ?></p>
                        <p><b>Marca:</b> <?= get_field('marca'); ?></p>
                        <br>
                        <p><b>Descrição do fabricante:</b></p>
                        <?php the_field('descricao'); ?>

                        <?php if(!get_field('observacoes') == null): ?>
                            <!-- remarks -->
                            <div class="single__content__container__row__description__body__remarks mt-6">
                                <p><b>Observações:</b></p>
                                <?php the_field('observacoes'); ?>
                            </div>
                            <!-- end of remarks -->
                        <?php endif; ?>
                    </div>
                    <!-- end of body -->

                    <!-- cta -->
                    <div class="single__content__container__row__description__cta t-center mt-5">
                        <?= whatsapp(formatPhone(CONTACT["whatsapp"]["number"]), 'Olá E-Location, eu gostaria de mais informações para o produto ' . get_the_title(), 'Solicite já pelo WhatsApp', 'btn btn-block btn-primary-500'); ?>
                    </div>
                    <!-- end of cta -->
                </div>
                <!-- end of description -->
            </div>
            <!-- end of row -->

        </div>
    </div>
    <!-- end of container -->

    <!-- information -->
     <div class="single__content__information bg-light-gray-500 py-10">
         <div class="container">

             <!-- container -->
              <div class="single__content__information__container">

                  <!-- header -->
                   <header class="single__content__information__container__header">
                       <h3>Informações técnicas</h3>
                   </header>
                  <!-- end of header -->

                  <!-- body -->
                   <div class="single__content__information__container__body bg-white-500 p-6">
                       <?php the_field('informacoes_tecnicas'); ?>
                   </div>
                  <!-- end of body -->

              </div>
             <!-- end of container -->

         </div>
     </div>
    <!-- end of information -->
</section>