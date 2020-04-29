jQuery(document).ready(function($){

    $(document).on("click", ".upload_image_button", function(e) {

        e.preventDefault();
        var $button = $(this);

        //criar janela de midia
        var file_frame = wp.media.frames.file_frame = wp.media({
            title: 'selecione ou envie uma nova imagem',
            library: {//retirar para exibir todas
                type: 'image' //apenas 1 imagem
            },
            button: {
                text: 'Selecionar'
            },
            multiple: false //marque verdadeiro para enviar vários
        });

        //roda depois que a imagem é selecionada 
        file_frame.on('select', function() {
            //selecionado apenas uma imagem
            var attachment = file_frame.state().get('selection').first().toJSON();

            $button.siblings('input').val(attachment.url);
        });

        file_frame.open();

    });
});