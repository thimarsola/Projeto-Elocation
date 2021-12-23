<!-- sidebar -->
<aside class="sidebar">
    <!-- search -->
     <div class="sidebar__search bg-light-gray-500 p-5 mb-5">
         <!-- header -->
          <header class="sidebar__search__header mb-2">
              <h2>Pesquisar equipamentos</h2>
          </header>
         <!-- end of header -->

         <form role="search" method="get" action="<?= esc_url(home_url('/')); ?>">
             <label for="search"></label>
             <input type="search" id="search" name="s" value="<?= (isset($_GET['s']) ? $_GET['s'] : null); ?>" placeholder="Pesquisar..." required>
             <button type="submit" class="btn">
                 <i class="icon-search clr-neutral-500"></i>
             </button>
         </form>
     </div>
    <!-- end of search -->

    <!-- categories -->
    <div class="sidebar__categories bg-light-gray-500 p-5 mb-5">
        <!-- header -->
        <header class="sidebar__categories__header mb-2">
            <h2>Categorias</h2>
        </header>
        <!-- end of header -->

        <ul>
            <li class="<?= get_the_title() == 'Segurança do Trabalho' ? 'active' : '' ?>">
                <?php if(get_the_title() == 'Segurança do Trabalho'): ?>
                <p>Segurança do Trabalho</p>
                <?php else: ?>
                <a href="<?= get_the_permalink(get_page_by_title('Segurança do Trabalho')); ?>" title="Conheça a nossa linha de equipamentos para segurança do trabalho.">Segurança do Trabalho</a>
                <?php endif; ?>
            </li>

            <li class="<?= get_the_title() == 'Meio Ambiente' ? 'active' : '' ?>">
                <?php if(get_the_title() == 'Meio Ambiente'): ?>
                <p>Meio Ambiente</p>
                <?php else: ?>
                <a href="<?= get_the_permalink(get_page_by_title('Meio Ambiente')); ?>" title="Conheça a nossa linha de equipamentos para meio ambiente">Meio Ambiente</a>
                <?php endif; ?>
            </li>

            <li class="<?= get_the_title() == 'Outros' ? 'active' : '' ?>">
                <?php if(get_the_title() == 'Outros'): ?>
                <p>Outros</p>
                <?php else: ?>
                <a href="<?= get_the_permalink(get_page_by_title('Outros')); ?>" title="Conheça os nossos diversos equipamentos para monitoramento e análises.">Outros</a>
                <?php endif; ?>
            </li>
        </ul>
    </div>
    <!-- end of categories -->

    <!-- cta -->
     <div class="sidebar__cta bg-light-gray-500 p-5">
         <!-- header -->
         <header class="sidebar__categories__header mb-2">
             <h2 class="f-3">Gostaria de reservar um equipamento ou instrumento?</h2>
         </header>
         <!-- end of header -->

         <?= whatsapp(formatPhone(CONTACT["whatsapp"]["number"]), 'Olá E-Location, estou procurando por um equipamento específico, vocês podem me ajudar?', 'Solicite já pelo WhatsApp', 'btn btn-block btn-primary-500'); ?>

     </div>
    <!-- end of cta -->
</aside>
<!-- end of sidebar -->