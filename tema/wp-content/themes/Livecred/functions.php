<?php

//Executa as funções que precisam de suporte do tema
function lc_theme_support() {
	//adiciona o title do wordpress ao tema
	add_theme_support( 'title-tag' );	

	//adicionar logo ao tema
	add_theme_support( 'custom-logo' );
	
	//Importa o arquivo class-wp-bootstrap-nav Custom Navigation Walker
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

}
//Chama a function lc_theme_support
add_action( 'after_setup_theme', 'lc_theme_support' );


//Se não funcionar function title_tag (para wordpress antigos)
if (!function_exists('_wp_render_title_tag')) {
	function lc_render_title() {
		?> 
		<title><?php wp_tittle('|', true, 'right'); ?></title> 
		<?php 
	}
	add_action( 'wp_head', 'lc_render_title');
} 

//ativar menu no tema wordpress
register_nav_menus( array(
	'topo' => __('Menu no topo', 'livecred'),
	'rodapé' => __('Menu no rodapé', 'livecred')
));
