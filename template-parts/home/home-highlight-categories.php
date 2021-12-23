<section class="highlight_categories">
    <!-- header -->
    <header class="highlight_categories__header d-none">
        <h2>Conheça as nossas categorias de produtos</h2>
    </header>
    <!-- end of header -->
    
    <!-- background -->
     <div class="highlight_categories__background">
         <img class="img-fluid" src="<?= image('categoria-01.jpg') ?>" alt="Conheça essa nossa categoria de produtos" loading="lazy">
     </div> 
    <!-- end of background -->

    <!-- row -->
     <div class="highlight_categories__row d-flex">

         <!-- card -->
          <article class="highlight_categories__row__card highlight_categories__row__card--active">
              <img class="d-none" src="<?= image('categoria-01.jpg') ?>" alt="Conheça essa nossa categoria de produtos">

              <!-- content -->
               <div class="highlight_categories__row__card__content">
                   <!-- header -->
                    <header class="highlight_categories__row__card__content__header">
                        <p class="f-8 mb-2">01</p>
                        <h3 class="f-3">Segurança do Trabalho</h3>
                    </header>
                   <!-- end of header -->

                   <!-- body -->
                    <div class="highlight_categories__row__card__content__body mt-4">
                        <p class="mb-4">Conheça a nossa linha de equipamentos para segurança do trabalho.</p>
                        <a href="<?= get_the_permalink(get_page_by_title('Segurança do Trabalho')); ?>" class="link-white-500 d-inline" title="Conheça a nossa linha de equipamento para Segurança do Trabalho">
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
          <article class="highlight_categories__row__card">
              <img class="d-none" src="<?= image('categoria-02.jpg') ?>" alt="Conheça essa nossa categoria de produtos">

              <!-- content -->
               <div class="highlight_categories__row__card__content">
                   <!-- header -->
                    <header class="highlight_categories__row__card__content__header">
                        <p class="f-8 mb-2">02</p>
                        <h3 class="f-3">Meio Ambiente</h3>
                    </header>
                   <!-- end of header -->

                   <!-- body -->
                    <div class="highlight_categories__row__card__content__body mt-4">
                        <p class="mb-4">Conheça a nossa linha de equipamentos para segurança do trabalho.</p>
                        <a href="<?= get_the_permalink(get_page_by_title('Meio Ambiente')); ?>" class="link-white-500 d-inline" title="Conheça a nossa linha de equipamento para Meio Ambiente">
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
          <article class="highlight_categories__row__card">
              <img class="d-none" src="<?= image('categoria-03.jpg') ?>" alt="Conheça essa nossa categoria de produtos">

              <!-- content -->
               <div class="highlight_categories__row__card__content">
                   <!-- header -->
                    <header class="highlight_categories__row__card__content__header">
                        <p class="f-8 mb-2">03</p>
                        <h3 class="f-3">Outros</h3>
                    </header>
                   <!-- end of header -->

                   <!-- body -->
                    <div class="highlight_categories__row__card__content__body mt-4">
                        <p class="mb-4">Conheça os nossos diversos equipamentos para monitoramento e análises.</p>
                        <a href="<?= get_the_permalink(get_page_by_title('Outros')); ?>" class="link-white-500 d-inline" title="Conheça a nossa outra linha de equipamento para monitoramento e análises">
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
</section>