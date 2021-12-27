<!-- hero -->
<section class="products__hero <?= (is_page('Produtos') ? 'products' : 'categories'); ?>">
    <div class="container">

        <!-- header -->
         <header class="products__hero__header t-center">
             <?php
                if(is_page('Produtos') || is_search()){
                    $paragraph = 'Soluções em Segurança do Trabalho e Meio Ambiente';
                    $title = 'Locação de Equipamentos e Instrumentos de Medição';
                }else{
                    $paragraph = 'Locação de equipamentos e instrumentos de medição';
                    $title = get_the_title();
                }
             ?>

             <p class="f-3 clr-primary-500 f-bold mb-3"><?= $paragraph; ?></p>
             <h2 class="f-8 clr-white-500"><?= $title; ?></h2>
         </header>
        <!-- end of header -->

    </div>
</section>
<!-- end of hero -->