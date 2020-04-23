<div class="bg-lc-dark py-5">
            <div class="container">
                <div class="row mb-3">
                   <div class="col text-white text-center">
                       <p class="mb-0">Não perca as novidades</p>
                       <h3>Escreva-se em nossa Newsletter</h3>
                   </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-md-6 col-10">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Ex: nome@email.com.br">
                                <div class="input-group-append">
                                    <button class="btn btn-lc-orange" type="button">   
                                        OK
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-8 text-white ">
                    
                        <!--Adiciona logo ao tema no roda pé-->
                        <?php
                            $lc_custom_logo = get_theme_mod( 'custom_logo' );
                            $logo = wp_get_attachment_image_src( $lc_custom_logo,'full' );

                            if(has_custom_logo()){
                                echo'<img src="' . esc_url($logo[0]) . '"class="img-fluid my-3" alt="logo tipo liveCred">';
                            }else{
                                //Se não tiver a logo locar o nome e a descrição
                                echo'<h1 classe="m-0">' . get_bloginfo('name'). '</h1>';
                                echo'<p classe="m-0">' . get_bloginfo('description'). '</p>';
                            }
                        ?>

                    </div>
                </div>

                <!--menu rodapé-->
                <div class="row">
                    
                        <?php
                        wp_nav_menu( array(
                            'theme_location'    => 'rodapé',
                            'depth'             => 2, //quantidade de sub-intens no dropdown
                            'container'         => 'div',
                            'container_class'   => 'col-12 mb-3',
                            'menu_class'        => 'nav justify-content-center',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker(),
                        ) );
                        ?>
                                    
                </div>
                <!--contatos e rede sociais-->
                <div class="row">
                    <div class="col text-center text-white">  
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item mr-3">
                                <i class="fas fa-phone"></i>
                                (21) 2236-8574
                            </li>
                            <li class="list-inline-item mr-3">
                                <i class="fab fa-whatsapp"></i>
                                (21) 98588-2544
                            </li>
                            <li class="list-inline-item mr-3">
                                <i class="fas fa-inbox"></i>
                                Contato@Livecred.com.br
                            </li>
                            <li class="list-inline-item mr-3">
                                <i class="fab fa-instagram"></i>
                            </li>
                            <li class="list-inline-item mr-3">
                                <i class="fab fa-facebook-square"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
   </footer>

    <!--carrega a barra de administrador do wordpress no topo-->
    <?php wp_footer( ); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/popper.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>

</body>
</html>