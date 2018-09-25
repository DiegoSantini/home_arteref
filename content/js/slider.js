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
});