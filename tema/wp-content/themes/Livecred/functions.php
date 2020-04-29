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

//ativar e configurar widget na sidebar
register_sidebar( 
	array(
        'name' => 'Busca',
        'id' => 'busca',
        'before_widget' => '<div class="card bg-lc-gray border-0 mb-4"><div class="card-body">',
        'after_widget' => '</div></div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>',
    ));

//widget Cards
register_sidebar( 
	array(
        'name' => 'Cards',
        'id' => 'cards',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => ''
	));
	
//criar post personalizado
function lc_cpt() {

	//Informa os textos da interface
	$labels = array(
		'name'		        => _x('Depoimentos','Depoimentos dos clientes', 'Livecred'),
		'singular_name' 	=> _x('Depoimento', 'Depoimento do cliente', 'Livecred'),
		'menu_name'			=> __('Depoimento', 'Livecred'),
		'all_items' 		=> __('Todos os depoimentos', 'Livecred'),
		'view_item'			=> __('Ver depoimento', 'Livecred'),
		'add_new_item' 		=> __('Adicionar depoimento', 'Livecred'),
		'add_new' 			=> __('Adicionar novo', 'Livecred'),
		'edit_item'			=> __('Editar depoimento', 'Livecred'),
		'update_item' 		=> __('Atualizar depoimento', 'Livecred'),
		'search_items'		=> __('Buscar depoimento', 'Livecred'),
		'not_found' 		=> __('Não encontrado', 'Livecred'),
		'not_fund_in_trash' => __('Não encontrado no lixo', 'Livecred')
	);

	$args = array(
		'label' 				=> __('Depoimentos', 'Livecred'),
		'description'			=> __('Depoimentos dos clientes', 'Livecred'),
		'labels'				=> $labels,
		'supports'				=> array('title', 'editor'),
		'hierarchical'			=> false,
		'show_in_menu'			=> true,
		'public'				=> true,
		'show_ui'				=> true,
		'show_in_nav_menus'		=> true,
		'show_in_admin_bar'		=> true,
		'menu_position'			=> 5,
		'menu_icon'				=> 'dashicons-format-aside',
		'can_export'			=> true,
		'has_archive'			=> true,
		'exclude_from_search'	=> true,
		'publicy_queryable' 	=> true,
		'capability_type' 		=> 'post'
	);

	register_post_type('depoimentos', $args);
}

add_action('init', 'lc_cpt', 0);
