<header class="header">
    <!-- information -->
     <div class="header__information bg-white-500">
         <div class="container">
             <!-- row -->
              <div class="header__information__row d-flex jc-between ai-center">
                  <!-- brand -->
                   <div class="header__information__row__brand">
                       <a href="<?= (is_home() ? '#home' : get_home_url()); ?>" title="<?= SITE["name"]; ?>">
                           <img src="<?= image('logo-topo.svg', 'svg'); ?>" alt="<?= SITE["name"]; ?>" title="<?= SITE["name"]; ?>" loading="lazy">
                       </a>
                   </div>
                  <!-- end of brand -->

                  <!-- cta -->
                   <div class="header__information__row__cta">
                       <!-- card -->
                        <div class="header__information__row__cta__card d-flex ai-center gp-2">
                            <i class="icon-phone clr-primary-500"></i>

                            <!-- body -->
                             <div class="header__information__row__cta__card__body">
                                 <p>Telefone</p>
                                 <a href="tel:<?= formatPhone(CONTACT['phone']['01']); ?>" class="link-neutral-500" title="Vamos conversar pelo telefone?"><b><?= CONTACT['phone']['01']; ?></b></a>
                             </div>
                            <!-- end of body -->
                        </div>
                       <!-- end of card -->

                       <!-- card -->
                        <div class="header__information__row__cta__card d-flex ai-center gp-2">
                            <i class="icon-mail clr-primary-500"></i>

                            <!-- body -->
                             <div class="header__information__row__cta__card__body">
                                 <p>E-mail</p>
                                 <a href="mailto:<?= CONTACT['mail']; ?>" class="link-neutral-500" title="Vamos conversar pelo telefone?"><b><?= CONTACT['mail']; ?></b></a>
                             </div>
                            <!-- end of body -->
                        </div>
                       <!-- end of card -->
                   </div>
                  <!-- end of cta -->

                  <!-- toggle -->
                  <div class="header__information__row__toggle">
                      <span></span>
                      <span></span>
                      <span></span>
                  </div>
                  <!-- end of toggle -->
              </div>
             <!-- end of row -->
         </div>
     </div>
    <!-- end of information -->

    <!-- navbar -->
     <div class="header__navbar bg-primary-500">
         <div class="container">

             <!-- row -->
              <div class="header__navbar__row">
                  <!-- container -->
                   <div class="header__navbar__row__container">
                       <!-- nav -->
                       <nav class="header__navbar__row__container__nav">
                           <h2 class="d-none">Menu de Navegação</h2>
                           <?php
                           if(is_home()){
                               wp_nav_menu(array('theme_location' => 'header-home', 'container_class' => ''));
                           }else {
                               wp_nav_menu(array('theme_location' => 'header-menu', 'container_class' => ''));
                           }
                           ?>
                       </nav>
                       <!-- end of nav -->
                   </div>
                  <!-- end of container -->

                  <!-- social -->
                   <div class="header__navbar__row__social ml-auto mr-3">
                       <ul class="d-flex ai-center gp-2">
                           <li>
                               <a rel="nofollow noopener noreferrer" class="l-small link-white-500" href="<?= CONTACT['facebook']; ?>" title="Siga a E-Location no Facebook" target="_blank">
                                   <i class="icon-facebook"></i>
                                   <span class="d-none">facebook</span>
                               </a>
                           </li>
                           <li>
                               <a rel="nofollow noopener noreferrer" class="l-small link-white-500" href="<?= CONTACT['instagram']; ?>" title="Siga a E-Location no Instagram" target="_blank">
                                   <i class="icon-instagram"></i>
                                   <span class="d-none">instagram</span>
                               </a>
                           </li>
                           <li>
                               <a rel="nofollow noopener noreferrer" class="l-small link-white-500" href="<?= CONTACT['linkedin']; ?>" title="Siga a E-Location no Linkedin" target="_blank">
                                   <i class="icon-linkedin"></i>
                                   <span class="d-none">linkedin</span>
                               </a>
                           </li>
                       </ul>
                   </div>
                  <!-- end of social -->

                  <!-- search -->
                   <div class="header__navbar__row__search">
                       <form role="search" method="get" action="<?= esc_url(home_url('/')); ?>">
                           <label for="search"></label>
                           <input type="search" id="search" name="s" value="<?= (isset($_GET['s']) ? $_GET['s'] : null); ?>" placeholder="Pesquisar..." required>
                           <button type="submit" class="btn">
                               <i class="icon-search clr-white-500"></i>
                           </button>
                       </form>
                   </div>
                  <!-- end of search -->
              </div>
             <!-- end of row -->

         </div>
     </div>
    <!-- end of navbar -->
</header>