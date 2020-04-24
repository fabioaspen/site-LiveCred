
<!--pagina da pesquisa -->

<?php get_header(); ?>

<div class="container mb-5">
    <div class="row my-5">
        <div class="col-lg-8 col-12">

            <?php
                //mostrar a quantidade de busca encontrado
                if(is_search() ) :
                    $total_results = $wp_query->found_posts;
                    echo '<p class="lead text-center">' . 
                            sprintf(__('Sua busca obteve %s resultado(s)','Livecred'), $total_results, get_search_query() );        
                        '</p>';
                endif;

            ?>
        
            <!--configuração do post-->
            <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
                <!--incluindo o arquivo content no single-->
                <?php get_template_part( 'content', get_post_format()); ?>

                <?php endwhile; ?>

            <?php else : 
                echo 
                "<div class='row  justify-content-center'>
                    <div class='col-12 col-sm-8 col-md-6'>
                        <P class='text-center'>
                            Sua busca não retornou nem um conteúdo. Tente outro termo
                        </p>";
                    //formulário de busca
                    get_search_form();
                echo "</div></div>";
                endif; 
            ?>

            <div class="mt-4 d-flex justify-content-between" >
            <!--Botões de paginação-->
                <?php next_posts_link('Mais antigos'); ?>
                <?php previous_posts_link('Mais novos'); ?>

            </div>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>