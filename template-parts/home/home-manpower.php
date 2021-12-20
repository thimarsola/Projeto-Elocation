<section class="manpower pt-10">
    <!-- row -->
     <div class="manpower__row">

         <!-- content -->
          <div class="manpower__row__content bg-primary-500 clr-white-500 p-10">
              <!-- header -->
               <header class="manpower__row__content__header mb-4">
                   <h2 class="f-8 clr-white-500">Mão de Obra TST</h2>
               </header>
              <!-- end of header -->

              <!-- body -->
               <div class="manpower__row__content__body t-justify mb-9">
                   <p>Você precisa de um profissional para a realização de sua medição? A E-Location oferece um serviço especializado de Mão de Obra TST.
                   </p>
                   <br>
                   <p>Com a Mão de Obra TST da E-Location, você contrata a diária de um técnico de segurança do trabalho especialista nos equipamentos da E-Location. Esse profissional ficará responsável pela utilização do equipamento e realização das medições que você precisa.
                   </p>
                   <br>
                   <p>Caso necessite também da elaboração dos laudos, nossos parceiros do Grupo PL Engenharia contam com uma equipe técnica especializada para as suas necessidades. No mercado desde 1997, o Grupo PL Engenharia conta com uma equipe altamente capacitada, promovendo saúde e segurança do trabalho em todos os cantos do país.</p>
               </div>
              <!-- end of body -->

              <!-- cta -->
               <div class="manpower__row__content__cta">
                   <?= whatsapp(formatPhone(CONTACT["whatsapp"]["number"]), CONTACT["whatsapp"]["message"] . ' sobre o serviço de Mão de Obra TST', 'Saiba mais', 'btn btn-outline-white-500'); ?>
               </div>
              <!-- end of cta -->
          </div>
         <!-- end of content -->

         <!-- image -->
          <div class="manpower__row__image">
              <?= picture('imagem-mao-de-obra', 'Conheça o nosso serviço de mão de obra TST', 'img-fluid'); ?>
          </div>
         <!-- end of image -->
     </div>
    <!-- end of row -->
</section>