<!--pagina do poste completo-->

<?php get_header(); ?>

    <div class="container">
    
        <!--configuração do post-->
        <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
            <!--incluindo o arquivo content no single-->
            <?php get_template_part( 'content', get_post_format()); ?>

            <?php endwhile; ?>

        <?php else : get_404_template(); endif; ?>
    
    </div>

<?php get_footer(); ?>