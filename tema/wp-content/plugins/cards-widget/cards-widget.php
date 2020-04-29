<?php
/*
Plugin name: Cards widget
Plugin uri: http://wordpress.org/plung
Description: widget exibe um conteúdo em um card
Author: Fábio Silva
version: 1.0
Author uri: http://yotube.com
*/

//registrar o widget
add_action('widgets_init', function() {
    register_widget('card');
});

class Card extends wp_widget {

    //método construtor de classe
    public function __construct() 
    {
        $widget_ops = array(
            'classname' => 'card',
            'description' => 'Exibe o conteúdo em um card'
        );
        //ID, nome e as opções 
        parent:: __construct('card','Card', $widget_ops);

        //adiciona scripts para enviar imagem
        add_action('admin_enqueue_scripts', array($this, 'assets') );
    }

    //método que mostra a saida do fronte-end
    public function widget($args, $instance)
    {
        echo $args['before_widget'];
        ?>

            <div class="card text-white mb-4">
                <a href="<?php echo esc_html($instance['link_url']); ?>" class="text-white">
                    <img src="<?php echo esc_url($instance['image'] ); ?>" alt="Imagem de mãos segurando sapato" class="card-img">
                    <div class="card-img-overlay bg-banner-header p-0 m-0 row">
                        <div class="col align-self-end">
                            <!-- esc_html retorna somente string-->
                            <h5 class="mb-0"><?php echo esc_html($instance['title']); ?></h5>
                            <!--wpautop gera um parágrafo quando houver 2 quebra de linha-->
                            <?php echo wpautop(esc_html($instance['description']));?>
                        </div>
                    </div>
                </a>
            </div>
            
        <?php
    }

    //método para cadastrar no painel admin
    public function form($instance)
    {
        $tittle = '';
        if (!empty($instance['title']))
        {
            $title = $instance['title'];
        }

        $description = '';
        if (!empty($instance['description']))
        {
            $description = $instance['description'];    
        }

        $link_url = '';
        if(!empty($instance['link_url']))
        {
            $link_url = $instance['link_url'];
        }

        $image = '';
        if(!empty($instance['image']))
        {
            $link_url = $instance['image'];
        }

        ?>
        <!--criando forlumario do widget-->
        <!--titulo do card imagem-->
        <p>
        
            <label for="<?php echo $this->get_field_name('image'); ?>">
                <?php echo 'Imagem de destaque:'; ?>
            </label>
            <input type="text"
                    class="widefat"
                    id="<?php echo $this->get_field_id('image'); ?>"
                    name="<?php echo $this->get_field_name('image'); ?>"
                    value="<?php echo esc_url($image); ?>"
            >
            <button class="button button-primary upload_image_button">Enviar imagem</button>
                
        </p>
        <!--titulo do card-->
        <p>
        
            <label for="<?php echo $this->get_field_name('title'); ?>">
                <?php echo 'Titulo:'; ?>
            </label>
            <input type="text"
                    class="widefat"
                    id="<?php echo $this->get_field_id('title'); ?>"
                    name="<?php echo $this->get_field_name('title'); ?>"
                    value="<?php echo esc_attr($title); ?>"
            >
                
        </p>
        <!--descrição do card widget-->
        <p>
        
            <label for="<?php echo $this->get_field_name('description'); ?>">
                <?php echo 'Description:'; ?>
            </label>
            <textarea type="text"
                    class="widefat"
                    id="<?php echo $this->get_field_id('description'); ?>"
                    name="<?php echo $this->get_field_name('description'); ?>"><?php echo esc_attr($description); ?></textarea>        
        </p>
        <!--link do widget-->
        <p>
         
            <label for="<?php echo $this->get_field_name('link_url'); ?>">
                <?php echo 'Caminho do link:'; ?>
            </label>
            <input type="text"
                    class="widefat"
                    id="<?php echo $this->get_field_id('link_url'); ?>"
                    name="<?php echo $this->get_field_name('link_url'); ?>"
                    value="<?php echo esc_attr($link_url); ?>">
        </p>

        <?php
    }
    
    //método que atualiza a widget
    public function update($new_instance, $old_instance)
    {
        return $new_instance;
    }

   public function assets()
    {
        wp_enqueue_script( 'media-upload' );
        wp_enqueue_media();
        wp_enqueue_script( 
            'cad-media-upload', 
            plugin_dir_url(__FILE__) . 'card-media-upload.js',
            array( 'jquery')
        );
    }

}

