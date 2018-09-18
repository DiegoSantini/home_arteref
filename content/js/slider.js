jQuery(document).ready(function($){
    var contador = 0;
   
    show_slide = function(n){
        slide_content = $('.arteref_home_slide');
        slide_content.hide();
        slide_content[n].style.display = "block";
    };
    show_slide(contador);
    
    $('.next').click(function(){
        contador++
        if (contador > 6) {
            contador = 0;
        }
        show_slide(contador);
    });

    $('.prev').click(function(){
        contador--
        if (contador < 0) {
            contador = 6;
        }
        show_slide(contador);
    });


    $('.dot_0').click(function(){
        contador = 0;
        show_slide(contador);
        
    });
    $('.dot_1').click(function(){
        contador = 1;
        show_slide(contador);
    });
    $('.dot_2').click(function(){
        contador = 2;
        show_slide(contador);
    });
    $('.dot_3').click(function(){
        contador = 3;
        show_slide(contador);
    });
    $('.dot_4').click(function(){
        contador = 4;
        show_slide(contador);
    });
    $('.dot_5').click(function(){
        contador = 5;
        show_slide(contador);
    });
    $('.dot_6').click(function(){
        contador = 6;
        show_slide(contador);
    });


    //show_slide(contador);

    /*
    var categorias_destaque;
    var contador = 0;

    render_slider_destaque = function(resultado){
        slider_destaque(resultado[0]);
        categorias_destaque = resultado;
    }; 
    window.render_slider_destaque = render_slider_destaque;

    slider_destaque = function(slide_atual){
        var img_destaque = $('.home_img_destaque');
        img_destaque.fadeTo(100, 0);
        $(".destaque_caption").fadeTo(100, 0);
        setTimeout(function(){
            img_destaque
            .html(slide_atual.post_image)
            .width(640)
            img_destaque.fadeTo(200, 1);
            $('.destaque_caption_texto').html(slide_atual.post_title)
            .attr('href', slide_atual.post_link)
            $('.destaque_data').html(formata_data(slide_atual.post_date));
            $('.destaque_autor').html(slide_atual.post_autor);
            $('.destaque_comentarios').html(slide_atual.post_comentarios);
            $(".destaque_caption").fadeTo(100, 1);
        },300);
    }

    $('.next').click(function(){
        contador++
        if (contador > 6) {
            contador = 0;
        }
        slider_destaque(categorias_destaque[contador]);
    });

    $('.prev').click(function(){
        contador--
        if (contador < 0) {
            contador = 6;
        }
        slider_destaque(categorias_destaque[contador]);
    });

    $('.dot_0').click(function(){
        contador = 0;
        slider_destaque(categorias_destaque[contador]);
        console.log($('.dot_circle')[0].children);
        
    });
    $('.dot_1').click(function(){
        contador = 1;
        slider_destaque(categorias_destaque[contador]);
    });
    $('.dot_2').click(function(){
        contador = 2;
        slider_destaque(categorias_destaque[contador]);
    });
    $('.dot_3').click(function(){
        contador = 3;
        slider_destaque(categorias_destaque[contador]);
    });
    $('.dot_4').click(function(){
        contador = 4;
        slider_destaque(categorias_destaque[contador]);
    });
    $('.dot_5').click(function(){
        contador = 5;
        slider_destaque(categorias_destaque[contador]);
    });
    $('.dot_6').click(function(){
        contador = 6;
        slider_destaque(categorias_destaque[contador]);
    });

    render_slider_categorias = function(render_caregoria){
        categorias_armazem.add_lista(render_caregoria);
        if (categorias_armazem.lista.length >= 8) {
            inicia_categorias();
        }
    };

    var categorias_armazem = {
        lista: [],
        add_lista: function(render_caregoria){
            this.render_caregoria = render_caregoria;
            this.lista.push(this.render_caregoria);
        }
    }

    function formata_data(data){
        data_formatada = new Date(data);
        return data_formatada.toLocaleDateString("pt-BR");
    }

    function inicia_categorias(){
        for (let index = 0; index < categorias_armazem.lista.length; index++) {
            const element = categorias_armazem.lista[index];
            if (element[0].nome_categoria == "arte no mundo") {
                $("#img_ca1").html(element[0].post_image);
                $(".link_ca1").attr("href", element[0].post_link);
                $("#caption_ca1").attr("href", element[0].post_link);
                $("#caption_ca1").html(element[0].post_title);
                $("#data_ca1").html(formata_data(element[0].post_date));
            }
            if (element[0].nome_categoria == "livros") {
                $("#img_ca2").html(element[0].post_image);
                $(".link_ca2").attr("href", element[0].post_link);
                $("#caption_ca2").attr("href", element[0].post_link);
                $("#caption_ca2").html(element[0].post_title);
                $("#data_ca2").html(formata_data(element[0].post_date));
            }
            if (element[0].nome_categoria == "exposicoes") {
                $("#img_ca3").html(element[0].post_image);
                $(".link_ca3").attr("href", element[0].post_link);
                $("#caption_ca3").attr("href", element[0].post_link);
                $("#caption_ca3").html(element[0].post_title);
                $("#data_ca3").html(formata_data(element[0].post_date));
            }
            
            if (element[0].nome_categoria == "opniao") {
                $("#img_ca4").html(element[0].post_image);
                $(".link_ca4").attr("href", element[0].post_link);
                $("#caption_ca4").attr("href", element[0].post_link);
                $("#caption_ca4").html(element[0].post_title);
                $("#data_ca4").html(formata_data(element[0].post_date));
                
            }
            if (element[0].nome_categoria == "curiosidades") {
                $("#img_ca5").html(element[0].post_image);
                $(".link_ca5").attr("href", element[0].post_link);
                $("#caption_ca5").attr("href", element[0].post_link);
                $("#caption_ca5").html(element[0].post_title);
                $("#data_ca5").html(formata_data(element[0].post_date));
            }
            if (element[0].nome_categoria == "teatro") {
                $("#img_ca6").html(element[0].post_image);
                $(".link_ca6").attr("href", element[0].post_link);
                $("#caption_ca6").attr("href", element[0].post_link);
                $("#caption_ca6").html(element[0].post_title);
                $("#data_ca6").html(formata_data(element[0].post_date));
            }

            if (element[0].nome_categoria == "arte do dia") {
                $("#img_ca7").html(element[0].post_image);
                $(".link_ca7").attr("href", element[0].post_link);
                $("#caption_ca7").attr("href", element[0].post_link);
                $("#caption_ca7").html(element[0].post_title);
                $("#data_ca7").html(formata_data(element[0].post_date));
            }
            if (element[0].nome_categoria == "gente de arte") {
                $("#img_ca8").html(element[0].post_image);
                $(".link_ca8").attr("href", element[0].post_link);
                $("#caption_ca8").attr("href", element[0].post_link);
                $("#caption_ca8").html(element[0].post_title);
                $("#data_ca8").html(formata_data(element[0].post_date));
            }
        }
        $('.home-content-loading').hide();
    }

    window.render_slider_categorias = render_slider_categorias;
*/
});