jQuery(document).ready(function($){

    get_posts_destaque = function(){
        $.ajax({
            type: "POST",
            url: arteref_posts.ajax_url,
            data: {
                action: "posts_destaque",
                posts_destaque: "posts_arteref",
            },
            success: function(data) {
                if (data == "0") {
                    console.log('Erro no processamento. Tente mais tarde.');
                } else {
                    resultado = JSON.parse(data)
                    render_slider_destaque(resultado);
                }
            },
            error: function(data) {
                console.log(data);
            }
        });
    };

    function get_posts_categoria(categoria){
        $.ajax({
            type: "POST",
            url: arteref_posts.ajax_url,
            data: {
                action: "posts_categoria",
                posts_categoria: "posts_arteref",
                categoria: categoria
            },
            success: function(data) {
                if (data == "0") {
                    console.log('Erro no processamento. Tente mais tarde.');
                } else {
                    resultado = JSON.parse(data);
                    render_slider_categorias(resultado);
                }   
            },
            error: function(data) {
                console.log(data);
            }
        });
    };
    /*
    for (let index = 0; index <= 7; index++) {
        get_posts_categoria(index);
    }
    */
    window.get_posts_categoria = get_posts_categoria;
});