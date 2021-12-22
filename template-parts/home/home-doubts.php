<section id="duvidas" class="doubts py-s">
    <div class="container">

        <!-- row -->
         <div class="doubts__row grid">
             <!-- image -->
              <div class="doubts__row__image">
                  <!-- icon -->
                   <div class="doubts__row__image__icon bg-primary-500 d-flex jc-center ai-center">
                       <i class="icon-chat clr-white-500 f-7"></i>
                   </div>
                  <!-- end of icon -->
              </div>
             <!-- end of image -->

             <!-- content -->
              <div class="doubts__row__content">
                  <!-- header -->
                   <header class="doubts__row__content__header mb-3">
                       <p class="clr-primary-500 mb-2">Locação de Equipamentos e Instrumentos de Medição</p>
                       <h2 class="f-5">Procurando algum equipamento específico?</h2>
                   </header>
                  <!-- end of header -->

                  <!-- body -->
                   <div class="doubts__row__content__body">
                       <p class="mb-5 t-justify">Precisa de um equipamento específico? Entre em contato conosco, teremos o mais prazer em atende-lo!</p>
                       <?= whatsapp(formatPhone(CONTACT["whatsapp"]["number"]), 'Olá E-Location, estou procurando por um equipamento específico, vocês podem me ajudar?', 'Fale conosco', 'btn btn-dark-gray-500'); ?>

                   </div>
                  <!-- end of body -->
              </div>
             <!-- end of content -->
         </div>
        <!-- end of row -->

    </div>
</section>