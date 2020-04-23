<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Required meta tags -->
    <meta <?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/main.css" rel="stylesheet">
    
    <!-- Font awesome -->
    <link href="<?php bloginfo('template_url'); ?>/font-awesome/css/all.css" rel="stylesheet">
    
    <!--Acrescentar funções do wordpress no head-->
    <?php wp_head(); ?>
    
</head>
<body>
   <!--Cabeçalho-->
   <header class="bg-lc-dark">
       <div class="container">
           <div class="row py-4 align-items-center justify-content-center text-white">
                <div class="col-8 col-md-4 col-lg-3 mb-4 mb-md-0">
                    <!--Adiciona logo ao tema-->
                    <?php
                        $lc_custom_logo = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $lc_custom_logo,'full' );

                        if(has_custom_logo()){
                            echo'<img src="' . esc_url($logo[0]) . '"class="img-fluid" alt="logo tipo liveCred">';
                        }else{
                            //Se não tiver a logo locar o nome e a descrição
                            echo'<h1 classe="m-0">' . get_bloginfo('name'). '</h1>';
                            echo'<p classe="m-0">' . get_bloginfo('description'). '</p>';
                        }
                    ?>
                    
                </div>
                <div class="col-12 col-md-9 text-center text-md-right lead">        
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item mr-3">
                            <i class="fas fa-phone"></i>
                            (21) 2236-8574
                        </li>
                        <li class="list-inline-item mr-3">
                            <i class="fab fa-whatsapp"></i>
                            (21) 98588-2544
                        </li>
                        <li class="list-inline-item">
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
   </header> 
   
   <!--Menu-->
   <nav class="navbar navbar-expand-md navbar-light bg-lc-gray" role="navigation">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="expandir menu">
                <span class="navbar-toggler-icon"></span>
            </button>

                <?php
                wp_nav_menu( array(
                    'theme_location'    => 'topo',
                    'depth'             => 2, //quantidade de sub-intens no dropdown
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'navbarHeader',
                    'menu_class'        => 'nav navbar-nav mx-auto',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ) );
                ?>

        </div>
    </nav>