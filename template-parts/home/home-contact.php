<section class="contact py-s">
    <div class="container">

        <!-- row -->
         <div class="contact__row grid">

             <!-- form -->
              <div class="contact__row__form bg-white-500 p-7 shadow">

                  <!-- header -->
                  <header class="contact__row__form__header mb-4">
                      <h2 class="f-3 mb-2">Solicite um orçamento</h2>
                      <p>Gostaria de um orçamento? Entre em contato com a nossa equipe agora mesmo.</p>
                  </header>
                  <!-- end of header -->

                  <form id="form" class="grid" method="POST" enctype="multipart/form-data" autocomplete="off">

                      <!-- group -->
                      <div class="contact__row__form__group">
                          <label for="name" class="d-none">Nome</label>
                          <input type="text" id="name" name="name" placeholder="Nome">
                      </div>
                      <!-- end of group -->

                      <!-- group -->
                      <div class="contact__row__form__group">
                          <label for="email" class="d-none">E-mail</label>
                          <input type="email" id="email" name="email" placeholder="E-mail">
                      </div>
                      <!-- end of group -->

                      <!-- group -->
                      <div class="contact__row__form__group">
                          <label for="company" class="d-none">Empresa</label>
                          <input type="text" id="company" name="company" placeholder="Empresa">
                      </div>
                      <!-- end of group -->

                      <!-- group -->
                      <div class="contact__row__form__group">
                          <label for="phone" class="d-none">Telefone</label>
                          <input type="tel" id="phone" name="phone" placeholder="Telefone">
                      </div>
                      <!-- end of group -->

                      <!-- group -->
                      <div class="contact__row__form__group">
                          <label for="message" class="d-none">Mensagem</label>
                          <textarea name="message" id="message" cols="30" rows="10" placeholder="Mensagem"></textarea>
                      </div>
                      <!-- end of group -->

                      <!-- status -->
                      <div class="contact__row__form__status d-none">
                          <div class="contact__row__form__status--loading t-center f-5 a-rotate">
                              <i class="icon-spinner clr-primary-500"></i>
                          </div>
                      </div>
                      <!-- end of status -->

                      <!-- button -->
                      <div class="contact__row__form__button">
                          <button id="button-contact" class="btn btn-dark-gray-500" type="submit" name="submit" value="submit">Enviar mensagem <i class="icon-send"></i></button>
                      </div>
                      <!-- end of button -->

                  </form>


              </div>
             <!-- end of form -->

             <!-- content -->
              <div class="contact__row__content clr-white-500">
                  <!-- container -->
                   <div class="contact__row__content__container">
                       <!-- header -->
                       <header class="contact__row__content__container__header mb-4">
                           <h2 class="f-4 clr-white-500">Locação de Equipamentos e Instrumentos de Medição</h2>
                       </header>
                       <!-- end of header -->

                       <!-- body -->
                       <div class="contact__row__content__container__body">
                           <p>Há mais de 20 anos oferecendo soluções em segurança do trabalho e Meio Ambiente.</p>

                           <!-- row -->
                            <div class="contact__row__content__container__body__row mt-7">
                                <!-- card -->
                                 <article class="contact__row__content__container__body__row__card">
                                     <img src="<?= image('safety-white.svg', 'svg'); ?>" alt="Conheça a nossa linha de equipamentos para segurança do trabalho">


                                     <!-- header -->
                                      <header class="contact__row__content__container__body__row__card__header mt-2">
                                          <h3 class="clr-white-500">Segurança do Trabalho</h3>
                                          <hr>
                                      </header>
                                     <!-- end of header -->
                                 </article>
                                <!-- end of card -->

                                <!-- card -->
                                 <article class="contact__row__content__container__body__row__card">
                                     <img src="<?= image('environment-white.svg', 'svg'); ?>" alt="Conheça os nossos diversos equipamentos para monitoramento e análises">


                                     <!-- header -->
                                      <header class="contact__row__content__container__body__row__card__header mt-2">
                                          <h3 class="clr-white-500">Meio <br>Ambiente</h3>
                                          <hr>
                                      </header>
                                     <!-- end of header -->
                                 </article>
                                <!-- end of card -->

                                <!-- card -->
                                 <article class="contact__row__content__container__body__row__card">
                                     <img src="<?= image('others-white.svg', 'svg'); ?>" alt="Conheça a nossa linha de equipamentos para segurança do trabalho">


                                     <!-- header -->
                                      <header class="contact__row__content__container__body__row__card__header mt-2">
                                          <h3 class="clr-white-500">Outros Equipamentos</h3>
                                          <hr>
                                      </header>
                                     <!-- end of header -->
                                 </article>
                                <!-- end of card -->
                            </div>
                           <!-- end of row -->
                       </div>
                       <!-- end of body -->
                   </div>
                  <!-- end of container -->
              </div>
             <!-- end of content -->

         </div>
        <!-- end of row -->

    </div>
</section>