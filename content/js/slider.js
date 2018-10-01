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

    //muda a cor do box categoria no destaque 
    function config_cor(){
        var obj_config = {
            arte_no_mundo : 'destaque_caption_ca1_laranja',
            livros        : 'destaque_caption_ca1_amarelo',
            esposicoes    : 'destaque_caption_ca1_preto',
            opniao        : 'destaque_caption_ca1_laranja',
            curiosidades  : 'destaque_caption_ca1_rosa',
            teatro        : 'destaque_caption_ca1_verde',
            arte_do_sia   : 'destaque_caption_ca1_rosa',
            gente_de_arte : 'destaque_caption_ca1_vermelho',
            default       : 'destaque_caption_ca1_preto'
        }
        var destaque_texto = $('.destaque_post_categoria');
        for (let index = 0; index < destaque_texto.length; index++) {
            const element = destaque_texto[index];
            var destaque_texto_child = element.childNodes[0].data;
            
            console.log(typeof destaque_texto_child);
            switch (destaque_texto_child) {
                case (destaque_texto_child == "arte do dia"):
                    
                console.log("pintar de azul!");
                    break;
            
                default:
                    console.log("Não pintar!");
                    break;
            }
        }  
    }
    //config_cor();
});