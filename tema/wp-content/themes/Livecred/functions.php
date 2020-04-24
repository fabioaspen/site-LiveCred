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

//ativa menu no tema wordpress
register_nav_menus( array(
	'topo' => __('Menu no topo', 'livecred'),
	'rodapé' => __('Menu no rodapé', 'livecred')
));

//ativa miniaturas de imagem do post
add_theme_support('post-thumbnails');
//define o tamanho da miniatura
set_post_thumbnail_size(1280, 720, true);

//Definir o tamanho do resumo do poste na home 
add_filter( 'excerpt_length', function($length) {
	return 15;
});

//Definir o estilo da paginação
add_filter( 'next_posts_link_attributes', 'posts_link_attributes');
add_filter( 'previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
	return 'class="btn btn-lc-orange"';
}
