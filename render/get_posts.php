<?php 
    function home_arteref_get_posts($categoria, $quantidade){
        $args = array( 'numberposts' => $quantidade, 'post_type' => 'post', 'category' => $categoria, 'post_status' => 'publish');
        $recent_posts = wp_get_recent_posts($args);

        $resultado = array();[]; 
        foreach( $recent_posts as $recent ){
            //$res["nome_categoria"] = $categorias_nome[5705];
            $res["post_link"]  = get_permalink($recent["ID"]);
            $res["post_title"] = $recent["post_title"];
            $res["post_date"] =  $recent["post_date_gmt"];
            $res["post_autor"] = get_the_author_meta('first_name', intval($recent["post_author"])) . " " . get_the_author_meta('last_name', intval($recent["post_author"])); 
            $res["post_image"] = get_the_post_thumbnail( $recent["ID"], 'medium');
            array_push($resultado, $res);
        }
        wp_reset_query();

        return $resultado;
    }

    function home_arteref_get_posts_destaque(){
        $args = array( 'numberposts' => 7, 'post_type' => 'post', 'post_status' => 'publish');
        $recent_posts = wp_get_recent_posts($args);

        $resultado = array();[]; 
        foreach( $recent_posts as $recent ){
            //$res["nome_categoria"] = $categorias_nome[5705];
            $res["post_link"]  = get_permalink($recent["ID"]);
            $res["post_title"] = $recent["post_title"];
            $res["post_date"] =  $recent["post_date_gmt"];
            $res["post_image"] = get_the_post_thumbnail( $recent["ID"], 'medium');
            $res["post_autor"] = get_the_author_meta('first_name', intval($recent["post_author"])) . " " . get_the_author_meta('last_name', intval($recent["post_author"])); 
            $res["post_comentarios"] = get_comments_number($recent["ID"]);
            $res["post_image"] = get_the_post_thumbnail( $recent["ID"], 'full');
            array_push($resultado, $res);
        }
        wp_reset_query();

        return $resultado;
    }
    

    function home_arteref_get_posts_offset(){
        $args = array( 'numberposts' => 4, 'offset' => 7, 'post_type' => 'post',  'post_status' => 'publish');
        $recent_posts = wp_get_recent_posts($args);

        $resultado = array();[]; 
        foreach( $recent_posts as $recent ){
            //$res["nome_categoria"] = $categorias_nome[5705];
            $res["post_link"]  = get_permalink($recent["ID"]);
            $res["post_title"] = $recent["post_title"];
            $res["post_date"] =  $recent["post_date_gmt"];
            $res["post_image"] = get_the_post_thumbnail( $recent["ID"], 'medium');
            $res["post_autor"] = get_the_author_meta('first_name', intval($recent["post_author"])) . " " . get_the_author_meta('last_name', intval($recent["post_author"])); 
            $res["post_comentarios"] = get_comments_number($recent["ID"]);
            $res["post_image"] = get_the_post_thumbnail( $recent["ID"], 'full');
            array_push($resultado, $res);
        }
        wp_reset_query();

        return $resultado;
    }
?>