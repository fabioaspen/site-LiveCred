<!--Condição se o poster vai aparecer na home (resumido) ou na single (completo)-->
<!--Poster na single-->
<?php if(is_single() ) : ?>

    <div class="row">
        <div class="col-8 mb-5">

            <!--titulo do poste-->
            <h1 class="my-4 "><?php the_title( ); ?></h1>

            <!--adicionando imagem do post wordpress com parâmetros-->
            <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>

            <!--data da publicação do poste-->
            <P class="text-muted mt-2 ">
                <i class="far fa-clock"></i><small> Publicado em: <?php echo get_the_date('d/m/y'); ?></small>
            </P>

            <!--Texto do poste completo-->
            <?php the_content( ); ?>
        
        </div>
    </div>
     
<!--Poster na home-->
<?php else : ?>

    <div class="row mt-4">
        <div class="col-md-6 col-sm-12">
            <!--colocando link na imagem para direcionar para o post completo na single-->
           <a href="<?php the_permalink(); ?>">
                <!--adicionando imagem do post wordpress com parâmetros-->
                <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
            </a>
        </div>
        <div class="col-md-6 col-12 mt-3 mt-md-0">
            <p>
                <span class="badge badge-lc-gray">
                    <!--Adicionando categoria do poste-->
                    <?php the_category( ',' ); ?>
                </span>
            </p>
            <h5>
                <!--titulo do poste com link para o poste completo-->
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h5>

                <!--Texto do poste resumido-->
                <?php the_excerpt(); ?>

            <!--data da publicação do poste-->
            <P class="text-muted mt-3">
                <i class="far fa-clock"></i><small> Publicado em: <?php echo get_the_date('d/m/y'); ?></small>
            </P>

        </div>
    </div>

<?php endif; ?>

