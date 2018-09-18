<?php 
    if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly
    }
    function posts_destaque(){
        if (isset($_POST['posts_destaque'])) {      
            $args = array( 'numberposts' => 7, 'post_type' => 'post');
            $recent_posts = wp_get_recent_posts($args);
            $args_comments = array('post_id' => $recent["ID"]);
            $resultado = array();[]; 
            foreach( $recent_posts as $recent ){
                $res["post_link"]  = get_permalink($recent["ID"]);
                $res["post_title"] = $recent["post_title"];
                $res["post_date"]  = $recent["post_date_gmt"];
                $res["post_autor"] = get_the_author_meta('first_name', intval($recent["post_author"])) . " " . get_the_author_meta('last_name', intval($recent["post_author"])); 
                $res["post_comentarios"] = get_comments_number($recent["ID"]);
                $res["post_image"] = get_the_post_thumbnail( $recent["ID"], 'full');
                array_push($resultado, $res);
            }

            print json_encode($resultado);
            wp_reset_query();
            die();
        }
    }
    add_action('wp_ajax_posts_destaque', 'posts_destaque');

    function posts_categoria(){
            $categorias = [5705, 30, 2768, 5709, 10492, 24, 12631, 5707];

            $categorias_nome = ["arte no mundo", "livros", "exposicoes", "opniao", "curiosidades", "teatro", "arte do dia", "gente de arte"];

            if (isset($_POST['posts_categoria'])) {
                $category_index = $_POST['categoria'];
                $args = array( 'numberposts' => 4, 'post_type' => 'post', 'category' => $categorias[$category_index]);
                $recent_posts = wp_get_recent_posts($args);

                $resultado = array();[]; 
                foreach( $recent_posts as $recent ){
                    $res["nome_categoria"] = $categorias_nome[$category_index];
                    $res["post_link"]  = get_permalink($recent["ID"]);
                    $res["post_title"] = $recent["post_title"];
                    $res["post_date"] =  $recent["post_date_gmt"];
                    $res["post_image"] = get_the_post_thumbnail( $recent["ID"], 'medium');
                    array_push($resultado, $res);
                }
                print json_encode($resultado);
                wp_reset_query();
                die();
            }
    }
    add_action('wp_ajax_posts_categoria', 'posts_categoria');
?>

