<section class="categories py-s">
    <div class="container">

        <!-- header -->
         <header class="categories__header mb-6 t-center">
             <p class="clr-primary-500 f-3 mb-3">Os melhores Equipamentos e Instrumentos de Medição</p>
             <h2 class="f-8">O Equipamento que você precisa, de acordo com a sua necessidade!</h2>
         </header>
        <!-- end of header -->

        <!-- row -->
         <div class="categories__row grid">
             <!-- card -->
              <article class="categories__row__card bg-white-500 shadow">
                  <!-- thumb -->
                   <div class="categories__row__card__thumb">
                       <?= picture('imagem-seguranca-do-trabalho', 'Conheça a nossa linha de equipamentos para segurança do trabalho', 'img-fluid'); ?>
                   </div>
                  <!-- end of thumb -->

                  <!-- content -->
                   <div class="categories__row__card__content p-4">
                       <!-- header -->
                        <header class="categories__row__card__content__header mb-2">
                            <img src="<?= image('safety.svg', 'svg'); ?>" alt="Conheça a nossa linha de equipamentos para segurança do trabalho">
                            <h3 class="f-3 mt-4">Segurança do Trabalho</h3>
                        </header>
                       <!-- end of header -->

                       <!-- body -->
                        <div class="categories__row__card__content__body">
                            <p class="mb-2">Conheça a nossa linha de equipamentos para segurança do trabalho.</p>
                            <a href="<?= get_the_permalink(get_page_by_title('Segurança do Trabalho')); ?>" class="link-dark-gray-500 d-inline" title="Conheça a nossa linha de equipamento para Segurança do Trabalho">
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

             <!-- card -->
              <article class="categories__row__card bg-white-500 shadow">
                  <!-- thumb -->
                   <div class="categories__row__card__thumb">
                       <?= picture('imagem-meio-ambiente', 'Conheça a nossa linha de equipamentos para meio ambiente', 'img-fluid'); ?>
                   </div>
                  <!-- end of thumb -->

                  <!-- content -->
                   <div class="categories__row__card__content p-4">
                       <!-- header -->
                        <header class="categories__row__card__content__header mb-2">
                            <img src="<?= image('environment.svg', 'svg'); ?>" alt="Conheça a nossa linha de equipamentos para meio ambiente">
                            <h3 class="f-3 mt-4">Meio Ambiente</h3>
                        </header>
                       <!-- end of header -->

                       <!-- body -->
                        <div class="categories__row__card__content__body">
                            <p class="mb-2">Conheça a nossa linha de equipamentos para segurança do trabalho.</p>
                            <a href="<?= get_the_permalink(get_page_by_title('Meio Ambiente')); ?>" class="link-dark-gray-500 d-inline" title="Conheça a nossa linha de equipamento para Segurança do Trabalho">
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

             <!-- card -->
              <article class="categories__row__card bg-white-500 shadow">
                  <!-- thumb -->
                   <div class="categories__row__card__thumb">
                       <?= picture('imagem-outros', 'Conheça os nossos diversos equipamentos para monitoramento e análises.', 'img-fluid'); ?>
                   </div>
                  <!-- end of thumb -->

                  <!-- content -->
                   <div class="categories__row__card__content p-4">
                       <!-- header -->
                        <header class="categories__row__card__content__header mb-2">
                            <img src="<?= image('others.svg', 'svg'); ?>" alt="Conheça os nossos diversos equipamentos para monitoramento e análises.">
                            <h3 class="f-3 mt-4">Outros</h3>
                        </header>
                       <!-- end of header -->

                       <!-- body -->
                        <div class="categories__row__card__content__body">
                            <p class="mb-2">Conheça os nossos diversos equipamentos para monitoramento e análises.</p>
                            <a href="<?= get_the_permalink(get_page_by_title('Outros')); ?>" class="link-dark-gray-500 d-inline" title="Conheça a nossa linha de equipamento para Segurança do Trabalho">
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
         </div>
        <!-- end of row -->

    </div>
</section>