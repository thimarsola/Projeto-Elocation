<!-- content -->
<section class="contact__content py-s">
    <div class="container">
        <!-- header -->
         <header class="contact__content__header d-none">
             <h2>Entre em contato com a E-Location</h2>
         </header>
        <!-- end of header -->

        <!-- row -->
         <div class="contact__content__row grid">
             <!-- information -->
              <div class="contact__content__row__information">
                  <!-- card -->
                   <article class="contact__content__row__information__card mb-5">
                       <!-- header -->
                        <header class="contact__content__row__information__card__header mb-3">
                            <h3 class="f-3">Contatos</h3>
                        </header>
                       <!-- end of header -->

                       <ul>
                           <li>
                               <a class="link-neutral-500" rel="nofollow noreferrer noopener" href="mailto:<?= CONTACT['mail']; ?>" target="_blank" title="Vamos conversar por e-mail?">
                                   <i class="icon-mail mr-1 clr-primary-500"></i>
                                   <?= CONTACT['mail']; ?>
                               </a>
                           </li>
                           <li>
                               <a class="link-neutral-500" rel="nofollow noreferrer noopener" href="tel:<?= formatPhone(CONTACT['phone']['01']); ?>" target="_blank" title="Vamos conversar pelo telefone?">
                                   <i class="icon-phone mr-1 clr-primary-500"></i>
                                   <?= CONTACT['phone']['01']; ?>
                               </a>
                           </li>
                           <li>
                               <?= whatsapp(formatPhone(CONTACT['whatsapp']['number']), CONTACT['whatsapp']['message'], '<i class="icon-whatsapp mr-1 clr-primary-500"></i>'.CONTACT['whatsapp']['number'], 'link-neutral-500', 'Vamos conversar pelo WhatsApp?') ?>
                           </li>
                       </ul>
                   </article>
                  <!-- end of card -->

                  <!-- card -->
                   <article class="contact__content__row__information__card">
                       <!-- header -->
                        <header class="contact__content__row__information__card__header mb-3">
                            <h3 class="f-3">Horário de funcionamento</h3>
                        </header>
                       <!-- end of header -->

                       <ul>
                           <li>
                               <i class="icon-clock mr-1 clr-primary-500"></i>
                               Seg-Sex: 7:00 às 17:00
                           </li>
                       </ul>
                   </article>
                  <!-- end of card -->
              </div>
             <!-- end of information -->

             <!-- form -->
              <div class="contact__content__row__form">
                  <!-- header -->
                  <header class="contact__content__row__form__header d-none">
                      <h3>Formulário de Contato</h3>
                  </header>
                  <!-- end of header -->

                  <form id="form" class="grid" method="POST" enctype="multipart/form-data" autocomplete="off">

                      <!-- group -->
                      <div class="contact__content__row__form__group">
                          <label for="name" class="d-none">Nome</label>
                          <input type="text" id="name" name="name" placeholder="Nome">
                      </div>
                      <!-- end of group -->

                      <!-- group -->
                      <div class="contact__content__row__form__group">
                          <label for="email" class="d-none">E-mail</label>
                          <input type="email" id="email" name="email" placeholder="E-mail">
                      </div>
                      <!-- end of group -->

                      <!-- group -->
                      <div class="contact__content__row__form__group">
                          <label for="company" class="d-none">Empresa</label>
                          <input type="text" id="company" name="company" placeholder="Empresa">
                      </div>
                      <!-- end of group -->

                      <!-- group -->
                      <div class="contact__content__row__form__group">
                          <label for="phone" class="d-none">Telefone</label>
                          <input type="tel" id="phone" name="phone" placeholder="Telefone">
                      </div>
                      <!-- end of group -->

                      <!-- group -->
                      <div class="contact__content__row__form__group">
                          <label for="message" class="d-none">Mensagem</label>
                          <textarea name="message" id="message" cols="30" rows="10" placeholder="Mensagem"></textarea>
                      </div>
                      <!-- end of group -->

                      <!-- status -->
                      <div class="contact__content__row__form__status d-none">
                          <div class="contact__content__row__form__status--loading t-center f-5 a-rotate">
                              <i class="icon-spinner clr-primary-500"></i>
                          </div>
                      </div>
                      <!-- end of status -->

                      <!-- button -->
                      <div class="contact__content__row__form__button">
                          <button id="button-contact" class="btn btn-block btn-dark-gray-500" type="submit" name="submit" value="submit">Enviar mensagem <i class="icon-send"></i></button>
                      </div>
                      <!-- end of button -->

                  </form>
              </div>
             <!-- end of form -->
         </div>
        <!-- end of row -->

    </div>
</section>
<!-- end of content -->