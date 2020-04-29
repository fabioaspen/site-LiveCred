   <!--incluir pagina do header ao index-->
   <?php get_header(); ?>

   <!--banner-->
   <Section class="card border-0 text-center text-white">
        <img src="assets/banner.png" alt="Imagem de mãos segurando sapato" class="card-img banner-header">
        <header class="card-img-overlay bg-banner-header p-0 m-0 row">
            <div class="col align-self-end">
                <p class="mb-0 lead">Empréstimo pessoal</p>
                <h1 class="mb-3">A solução para quem pensa no futuro</h1>
                <p>
                    <a href="#" class="btn btn-lg btn-lc-orange mb-2">Saiba mais</a>
                </p>
            </div>
        </header>
   </Section>

   <main class="container">
        <section class="row my-5">
            <div class="col-md-6 col-lg-4">
                <img src="assets/img-emprestimo.jpg" class="img-fluid mb-3" alt="imagem seguro">
                <h5>
                    <a href="#">Empréstimo consignado</a>
                </h5>
                
                <p>As melhores taxas e condições para você realizar
                todos os seus sonhos na melhor faze da vida, todos os seus sonhos na melhor faze da vida.
                </p>
                <p>
                    <a href="#" class="btn btn-lc-orange">Saiba mais</a>
                </p>
            </div>

            <div class="col-md-6 col-lg-4">
                <img src="assets/img-seguro.jpg" class="img-fluid mb-3" alt="imagem seguro">
                <h5>
                    <a href="#">Empréstimo consignado</a>
                </h5>
                <p>As melhores taxas e condições para você realizar
                todos os seus sonhos na melhor faze da vida, todos os seus sonhos na melhor faze da vida.
                </p>
                <p>
                    <a href="#" class="btn btn-lc-orange">Saiba mais</a>
                </p>
            </div>

            <div class="col-lg-4 col-12 ">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item border-0 pb-0">
                            <h5>
                                <a href="#">Seguro de vida</a>
                            </h5>
                            <p class="mb-0">Não deixe a sorte garanti seu futuro. Aproveite o
                                seguro de vida
                            </p>
                        </li>
                        <li class="list-group-item border-0 pb-0">
                            <h5>
                                <a href="#">Seguro de vida</a>
                            </h5>
                            <p class="mb-0"> Não deixe a sorte garanti seu futuro. Aproveite o seguro de vida
                            </p>
                        </li>
                        <li class="list-group-item border-0 pb-0">
                            <h5>
                                <a href="#">Seguro de vida</a>
                            </h5>
                            <p class="mb-0">Não deixe a sorte garanti seu futuro. Aproveite o
                                seguro de vida
                            </p>
                        </li>
                        <li class="list-group-item border-0">
                            <h5>
                                <a href="#">Seguro de vida</a>
                            </h5>
                            <p class="mb-0">Não deixe a sorte garanti seu futuro. Aproveite o
                                seguro de vida
                            </p>
                        </li>
                    </ul>     
                </div>
            </div>
        </section>
        <!--Novidades-->
        <div class="row">
            <div class="col-lg-8 col-12">
                <h5 class="border-bottom pb-2"><i class="fas fa-newspaper"> Novidades</i></h5>  

                <!--Adicionando post na home do tema com condição-->
                <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
                    <!--incluindo o arquivo content no index-->
                    <?php get_template_part( 'content', get_post_format()); ?>

                    <?php endwhile; ?>

                <?php else : ?>
                    
                    <p class="lead">Nenhuma publicação encontrada</p>

                <?php endif; ?>

                <div class="mt-4 d-flex justify-content-between" >
                <!--Botões de paginação Paginação-->
                    <?php next_posts_link('Mais antigos'); ?>
                    <?php previous_posts_link('Mais novos'); ?>

                </div>
                  
            </div>
            <!--sidebar-->
            <?php get_sidebar(); ?>
        </div>     

   </main>
   <!--roda pé-->
   <footer class="bg-lc-gray pt-4 mt-4">
        <div class="container mb-4">
            <div class="row">
               
                <!--depoimentos--> 
                <?php 
                    $args = array(
                        'post_type'      => 'depoimentos',
                        'posts_per_page' => 2
                    );
                    $the_query = new WP_Query( $args ); 
                ?>

                <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) :
                    $the_query->the_post(); ?>

                        <div class="col-md-6 col-sm-12 mb-4 mb-md-0">
                            <div class="card border-card-footer">
                                <div class="card-body">     
                                    <?php the_content(); ?>                   
                                </div>
                            </div>
                        </div>

                    <?php endwhile; ?>
                <?php else : ?>

                    <div class="col-12">
                        <p class="lead">
                            Nenhum depoimento encontrado
                        </p>
                    </div>

                <?php endif; ?>
                
            </div>
        </div>
    </div>
        <!--inclui a pagina footer ao index-->
        <?php get_footer( ); ?>
        