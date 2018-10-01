<?php
    function home_arteref(){
        $string_legnth = 60;
        ?>  
            <div id="home_arteref_posts">
                <div class="main_slider_container">
                    <div class="noticias_aside block_slider_coluna_1">

                    <?php 
                        $res = home_arteref_get_posts(5705, 1);
                    ?>
                        <div>
                            <a href=" <?php echo $res[0]["post_link"]; ?>" class="link_ca1">
                                <div class="tipo_noticia_ca1 destaque_caption_ca1_laranja">
                                    <span>Arte no mundo</span>
                                    <?php  ?>
                                </div>
                                <div id="img_ca1" class="img_categorias_banner"> 
                                    <?php echo $res[0]["post_image"]; ?> 
                                </div>
                                <!-- <img width="320" height="233" src="http://localhost/novo_arteref/wp-content/uploads/2018/09/Elena-Gual-1-copy-300x233.jpg" class="attachment-medium size-medium wp-post-image" alt="" srcset="http://localhost/novo_arteref/wp-content/uploads/2018/09/Elena-Gual-1-copy-300x233.jpg 300w, http://localhost/novo_arteref/wp-content/uploads/2018/09/Elena-Gual-1-copy-768x597.jpg 768w, http://localhost/novo_arteref/wp-content/uploads/2018/09/Elena-Gual-1-copy.jpg 900w" sizes="(max-width: 300px) 100vw, 300px" /> -->
                                <div class="destaque_caption_ca1">
                                    <a href="<?php echo $res[0]["post_link"]; ?>" id = "caption_ca1"> 
                                    <?php 
                                    $post_title = $res[0]["post_title"];
                                    echo substr($post_title ,0, $string_legnth);
                                    ?>
                                    </a>
                                    <br>
                                    <span class="glyphicon glyphicon-user"></span>
                                    <span>Por</span>
                                    <span class="destaque_autor"><?php echo $res[0]["post_autor"]; ?></span>
                                </div>
                            </a>
                        </div>

                        <?php 
                        $res = home_arteref_get_posts(30, 1);
                        ?>
                        <div>
                            <a href="<?php echo $res[0]["post_link"]; ?>" class="link_ca2">
                                <div class="tipo_noticia_ca1 destaque_caption_ca1_amarelo">
                                    <span>Livros</span>
                                </div>
                                
                                <div id="img_ca2" class="img_categorias_banner"> <?php echo $res[0]["post_image"]; ?> </div>
                                <div class="destaque_caption_ca1">
                                        <a href="<?php echo $res[0]["post_link"]; ?>" id = "caption_ca2"> 
                                        <?php 
                                        $post_title = $res[0]["post_title"];
                                        echo substr($post_title ,0, $string_legnth);
                                        ?>  </a> 
                                        <br>
                                        <span class="glyphicon glyphicon-user"></span>
                                        <span>Por</span>
                                        <span class="destaque_autor"><?php echo $res[0]["post_autor"]; ?></span>
                                </div>
                            </a>
                        </div>

                    </div>


                    <div class="noticia_destaque">

                        <!-- The dots/circles -->
                        <div class="dot_circle">
                            <span class="dot dot_0"></span> 
                            <span class="dot dot_1"></span> 
                            <span class="dot dot_2"></span> 
                            <span class="dot dot_3"></span> 
                            <span class="dot dot_4"></span> 
                            <span class="dot dot_5"></span>
                            <span class="dot dot_6"></span>
                        </div>
                        
                        <!-- <img width="640" height="505" src="http://localhost/novo_arteref/wp-content/uploads/2018/09/Epreuve-d’artiste-2-1.jpg" class="attachment-full size-full wp-post-image" alt="" srcset="http://localhost/novo_arteref/wp-content/uploads/2018/09/Epreuve-d’artiste-2-1.jpg 900w, http://localhost/novo_arteref/wp-content/uploads/2018/09/Epreuve-d’artiste-2-1-300x233.jpg 300w, http://localhost/novo_arteref/wp-content/uploads/2018/09/Epreuve-d’artiste-2-1-768x597.jpg 768w" sizes="(max-width: 900px) 100vw, 900px" /> -->
                        
                        <!-- Next and previous buttons -->
                            <a class="prev" style="color:white;">&#10094;</a>
                            <a class="next" style="color:white;">&#10095;</a>
                        
                            <?php $destaques = home_arteref_get_posts_destaque(); ?>
                            
                            <?php foreach($destaques as $dest){ ?>
                                <div class="arteref_home_slide arteref_home_fade">
                                    <a href="<?php echo $dest["post_link"]; ?>">
                                    
                                    <div class="tipo_noticia_ca1 destaque_caption_ca1_preto">
                                        <span class="destaque_post_categoria">
                                            <?php 
                                                echo $dest["post_categoria"]; 
                                            ?> 
                                        </span>
                                    </div>

                                        <div class="home_img_destaque">
                                            <?php echo $dest["post_image"]; ?> 
                                        </div>

                                        <div class="destaque_caption">
                                            <a href="<?php echo $dest["post_link"]; ?>" class="destaque_caption_texto">
                                            <?php 
                                            $post_title = $dest["post_title"];
                                            echo substr($post_title ,0, 100);
                                            ?> </a> <br>
                                            <span class="glyphicon glyphicon-user"></span>
                                            <span>Por</span>
                                            <span class="destaque_autor"><?php echo $dest["post_autor"]; ?></span>
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>

                    </div>

                    <?php 
                        $res = home_arteref_get_posts(2768, 1);
                    ?>
                    <div class="noticias_aside block_slider_coluna_2">
                            <div>
                                <a href="<?php echo $res[0]["post_link"]; ?>" class="link_ca3">
                                    <div class="tipo_noticia_ca1 destaque_caption_ca1_preto">
                                        <span>Exposições</span>
                                    </div>
                                    <div id="img_ca3" class="img_categorias_banner"><?php echo $res[0]["post_image"]; ?> </div>
                                    <div class="destaque_caption_ca1">
                                        <a href="<?php echo $res[0]["post_link"]; ?>" id = "caption_ca3"> <?php 
                                        $post_title = $res[0]["post_title"];
                                        echo substr($post_title ,0, $string_legnth);
                                        ?>
                                        </a> 
                                        <br>
                                        <span class="glyphicon glyphicon-user"></span>
                                        <span>Por</span>
                                        <span class="destaque_autor"><?php echo $res[0]["post_autor"]; ?></span>
                                    </div>
                                </a>
                            </div>
                    <?php 
                        $res = home_arteref_get_posts(5709, 1);
                    ?>
                            <div>
                                <a href="<?php echo $res[0]["post_link"]; ?>" class="link_ca4">
                                    <div class="tipo_noticia_ca1 destaque_caption_ca1_laranja">
                                        <span>Opinião</span>
                                    </div>
                                    <div id="img_ca4" class="img_categorias_banner"><?php echo $res[0]["post_image"]; ?> </div>
                                    <div class="destaque_caption_ca1">
                                        <a href="<?php echo $res[0]["post_link"]; ?>" id = "caption_ca4"> <?php 
                                        $post_title = $res[0]["post_title"];
                                        echo substr($post_title ,0, $string_legnth);
                                        ?> </a>
                                        <br>
                                        <span class="glyphicon glyphicon-user"></span>
                                        <span>Por</span>
                                        <span class="destaque_autor"><?php echo $res[0]["post_autor"]; ?></span>
                                    </div>
                                </a>
                            </div>
                    </div>

                    <?php 
                        $res = home_arteref_get_posts(10492, 1);
                    ?>

                    <div class="noticias_aside block_slider_coluna_3">
                        <div>
                            <a href="<?php echo $res[0]["post_link"]; ?>" class="link_ca5">
                                <div class="tipo_noticia_ca1 destaque_caption_ca1_rosa">
                                    <span>Curiosidades</span>
                                </div>
                                <div id="img_ca5" class="img_categorias_banner"><?php echo $res[0]["post_image"]; ?> </div>
                                <div class="destaque_caption_ca1">
                                    <a href="<?php echo $res[0]["post_link"]; ?>" id = "caption_ca5"> 
                                    <?php 
                                    $post_title = $res[0]["post_title"];
                                    echo substr($post_title ,0, $string_legnth);
                                    ?></a>
                                    <br>
                                        <span class="glyphicon glyphicon-user"></span>
                                        <span>Por</span>
                                        <span class="destaque_autor"><?php echo $res[0]["post_autor"]; ?></span>
                                </div>
                            </a>
                        </div>
                    <?php 
                        $res = home_arteref_get_posts(24, 1);
                    ?>
                        <div>
                            <a href="<?php echo $res[0]["post_link"]; ?>" class="link_ca6">
                                <div class="tipo_noticia_ca1 destaque_caption_ca1_verde">
                                    <span>Teatro</span>
                                </div>
                                <div id="img_ca6" class="img_categorias_banner"><?php echo $res[0]["post_image"]; ?> </div>
                                <div class="destaque_caption_ca1">
                                    <a href="<?php echo $res[0]["post_link"]; ?>" id = "caption_ca6">
                                    <?php 
                                    $post_title = $res[0]["post_title"];
                                    echo substr($post_title ,0, $string_legnth);
                                    ?> </a> 
                                    <br>
                                        <span class="glyphicon glyphicon-user"></span>
                                        <span>Por</span>
                                        <span class="destaque_autor"><?php echo $res[0]["post_autor"]; ?></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php 
                        $res = home_arteref_get_posts(12631, 1);
                    ?>
                    <div class="noticias_aside block_slider_coluna_4">
                        <div>
                            <a href="<?php echo $res[0]["post_link"]; ?>" class="link_ca7">
                                <div class="tipo_noticia_ca1 destaque_caption_ca1_rosa">
                                    <span>Arte do dia</span>
                                </div>
                                <div id="img_ca7" class="img_categorias_banner"><?php echo $res[0]["post_image"]; ?> </div>
                                <div class="destaque_caption_ca1">
                                    <a href="<?php echo $res[0]["post_link"]; ?>" id = "caption_ca7"> 
                                    <?php 
                                    $post_title = $res[0]["post_title"];
                                    echo substr($post_title ,0, $string_legnth);
                                    ?> </a>
                                    <br>
                                        <span class="glyphicon glyphicon-user"></span>
                                        <span>Por</span>
                                        <span class="destaque_autor"><?php echo $res[0]["post_autor"]; ?></span>
                                </div>
                            </a>
                        </div>
                    <?php 
                        $res = home_arteref_get_posts(5707, 1);
                    ?>
                        <div>
                            <a href="<?php echo $res[0]["post_link"]; ?>" class="link_ca8">
                                <div class="tipo_noticia_ca1 destaque_caption_ca1_vermelho">
                                    <span>Gente de arte</span>
                                </div>
                                <div id="img_ca8" class="img_categorias_banner"><?php echo $res[0]["post_image"]; ?> </div>
                                <div class="destaque_caption_ca1">
                                <a href="<?php echo $res[0]["post_link"]; ?>" id = "caption_ca7"> <?php 
                                    $post_title = $res[0]["post_title"];
                                    echo substr($post_title ,0, $string_legnth);
                                    
                                    ?> </a>
                                    <br>
                                        <span class="glyphicon glyphicon-user"></span>
                                        <span>Por</span>
                                        <span class="destaque_autor"><?php echo $res[0]["post_autor"]; ?></span>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>   
            </div>
            <div class="posts_container">
                <hr>                  
                <div class="home_posts_container container">
                    
                    
                    <div class="d-flex justify-content-start home_ar_mais_posts">
                        <div class="ar_titulo">
                            <span class="ar_titulo_secao">+ Posts</span>
                        </div>
                        <!--
                        <span>< Anterior</span>
                        <span>Próximo  > </span>
                        -->
                    </div>
                    <?php $posts_offset = home_arteref_get_posts_offset(); ?>

                    <div class="home_posts_hoje row">

                    <?php $arteref_posts_offset = home_arteref_get_posts_offset(); ?>

                    <?php 
                        foreach ($arteref_posts_offset as $key ) {
                            ?>  
                            <div class="col-sm-6 col-xs-12">
                                <a href="<?php echo $key["post_link"] ?>">
                                    <div>
                                        <?php echo $key["post_image"]; ?>
                                        <div class="posts_hoje_caption">
                                            <spam class="post_hoje_titulo"><?php echo $key["post_title"]; ?></spam> <br>
                                            <span class="glyphicon glyphicon-user"></span>
                                            <span class="post_hoje_autor"><?php echo $key["post_autor"]; ?></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php
                        }
                    ?>
                
                    </div>
                </div>

                <hr>   
            </div> 

            <div class="home_posts_categoria_page container">

                <div class="categoria_arte_no_mundo col-4 col-sm-12">
                    <div class="ar_titulo_div">
                        <span class="ar_titulo_secao">Arte no mundo</span>
                    </div>
                    <div>
                        <?php $ar_arte_no_mundo = home_arteref_get_posts(5705, 4) ?> 
                        
                            <div class="categoria_arte_no_mundo_principal">

                                <a class="ar_titulo_secao_link" href="<?php echo $ar_arte_no_mundo[0]["post_link"]; ?>">
                                <?php echo $ar_arte_no_mundo[0]["post_image"]; ?> 
                                
                                <div class="categoria_posts_caption">
                                    <spam class="post_hoje_titulo"> <?php echo $ar_arte_no_mundo[0]["post_title"]; ?> </spam> 
                                    <br>
                                    <span class="glyphicon glyphicon-user"></span>
                                    <span class="post_hoje_autor"><?php echo $ar_arte_no_mundo[0]["post_autor"]; ?></span>
                                </div>
                                </a>

                            </div>
                       

                        <?php 

                            for ($i=1; $i < sizeof($ar_arte_no_mundo); $i++) { 
                                $key = $ar_arte_no_mundo[$i];
                                ?>
                                <div class="categorioa_drop_noticia">
                                <a href="<?php echo $key["post_link"]; ?>">
                                <?php echo $key["post_image"]; ?>
                                    <div class="posts_categoria_caption">
                                        <span><?php echo $key["post_title"]; ?></span><br>

                                        <div class="categoria_drop_user">
                                            <span class="glyphicon glyphicon-user"></span>
                                            <span><?php echo $key["post_autor"]; ?></span>
                                        </div>

                                    </div>
                                </a>
                                </div>
                                <?php
                            }
                        ?>
                    </div>
                </div>

                <div class="categoria_arte_no_mundo col-sm-12">
                    <div class="ar_titulo_div">
                        <span class="ar_titulo_secao">Opnião</span>
                    </div>
                    <div>
                        <?php $ar_opniao = home_arteref_get_posts(5709, 4) ?> 
                        
                            <div class="categoria_arte_no_mundo_principal">

                                <a class="ar_titulo_secao_link" href="<?php echo $ar_opniao[0]["post_link"]; ?>">
                                <?php echo $ar_opniao[0]["post_image"]; ?> 
                                
                                <div class="categoria_posts_caption">
                                    <spam class="post_hoje_titulo"> <?php echo $ar_opniao[0]["post_title"]; ?> </spam> 
                                    <br>
                                    <span class="glyphicon glyphicon-user"></span>
                                    <span class="post_hoje_autor"><?php echo $ar_opniao[0]["post_autor"]; ?></span>
                                </div>
                                </a>

                            </div>
                       

                        <?php 

                            for ($i=1; $i < sizeof($ar_opniao); $i++) { 
                                $key = $ar_opniao[$i];
                                ?>
                                <div class="categorioa_drop_noticia">
                                <a href="<?php echo $key["post_link"]; ?>">
                                <?php echo $key["post_image"]; ?>
                                    <div class="posts_categoria_caption">
                                        <span><?php echo $key["post_title"]; ?></span><br>

                                        <div class="categoria_drop_user">
                                            <span class="glyphicon glyphicon-user"></span>
                                            <span><?php echo $key["post_autor"]; ?></span>
                                        </div>

                                    </div>
                                </a>
                                </div>
                                <?php
                            }
                        ?>
                    </div>
                </div>


                <div class="categoria_arte_no_mundo col-sm-12">
                    <?php if ( dynamic_sidebar('agenda') ) : else : endif; ?>
                </div>

            </div>

                
            <div class="posts_container">    
                <hr>                  
                <div class="home_posts_container container">
                    <div class="d-flex justify-content-start home_ar_mais_posts">
                        <div class="ar_titulo">
                            <span class="ar_titulo_secao">Gente de Arte</span>
                        </div>
                        <!--
                        <span>< Anterior</span>
                        <span>Próximo  > </span>
                        -->
                    </div>
                    <?php $posts_offset = home_arteref_get_posts_offset(); ?>

                    <div class="home_posts_hoje row">

                    <?php $arteref_posts = home_arteref_get_posts(5707, 4); ?>

                    <?php 
                        foreach ($arteref_posts as $key ) {
                            ?>  
                            <div class="col-sm-6 col-xs-12">
                                <a href="<?php echo $key["post_link"] ?>">
                                    <div>
                                        <?php echo $key["post_image"]; ?>
                                        <div class="posts_hoje_caption">
                                            <spam class="post_hoje_titulo"><?php echo $key["post_title"]; ?></spam> <br>
                                            <span class="glyphicon glyphicon-user"></span>
                                            <span class="post_hoje_autor"><?php echo $key["post_autor"]; ?></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php
                        }
                    ?>
                    </div>
                </div>
                <hr>
            </div>      
            


            <div class="home_posts_categoria_page container">

                <div class="categoria_arte_no_mundo col-sm-12">
                    <div class="ar_titulo_div">
                        <span class="ar_titulo_secao">Arte do Dia</span>
                    </div>
                    <div>
                        <?php $ar_arte_do_dia = home_arteref_get_posts(12631, 4) ?> 
                        
                            <div class="categoria_arte_no_mundo_principal">

                                <a class="ar_titulo_secao_link" href="<?php echo $ar_arte_do_dia[0]["post_link"]; ?>">
                                <?php echo $ar_arte_do_dia[0]["post_image"]; ?> 
                                
                                <div class="categoria_posts_caption">
                                    <spam class="post_hoje_titulo"> <?php echo $ar_arte_do_dia[0]["post_title"]; ?> </spam> 
                                    <br>
                                    <span class="glyphicon glyphicon-user"></span>
                                    <span class="post_hoje_autor"><?php echo $ar_arte_do_dia[0]["post_autor"]; ?></span>
                                </div>
                                </a>

                            </div>
                       

                        <?php 

                            for ($i=1; $i < sizeof($ar_arte_do_dia); $i++) { 
                                $key = $ar_arte_do_dia[$i];
                                ?>
                                <div class="categorioa_drop_noticia">
                                <a href="<?php echo $key["post_link"]; ?>">
                                <?php echo $key["post_image"]; ?>
                                    <div class="posts_categoria_caption">
                                        <span><?php echo $key["post_title"]; ?></span><br>

                                        <div class="categoria_drop_user">
                                            <span class="glyphicon glyphicon-user"></span>
                                            <span><?php echo $key["post_autor"]; ?></span>
                                        </div>

                                    </div>
                                </a>
                                </div>
                                <?php
                            }
                        ?>
                    </div>
                </div>

                <div class="categoria_arte_no_mundo col-sm-12">
                <div class="ar_titulo_div">
                    <span class="ar_titulo_secao">Livros</span>
                </div>
                    <div>
                        <?php $ar_livros = home_arteref_get_posts(30, 4) ?> 
                        
                            <div class="categoria_arte_no_mundo_principal">

                                <a class="ar_titulo_secao_link" href="<?php echo $ar_livros[0]["post_link"]; ?>">
                                <?php echo $ar_livros[0]["post_image"]; ?> 
                                
                                <div class="categoria_posts_caption">
                                    <spam class="post_hoje_titulo"> <?php echo $ar_livros[0]["post_title"]; ?> </spam> 
                                    <br>
                                    <span class="glyphicon glyphicon-user"></span>
                                    <span class="post_hoje_autor"><?php echo $ar_livros[0]["post_autor"]; ?></span>
                                </div>
                                </a>

                            </div>
                       

                        <?php 

                            for ($i=1; $i < sizeof($ar_livros); $i++) { 
                                $key = $ar_livros[$i];
                                ?>
                                <div class="categorioa_drop_noticia">
                                <a href="<?php echo $key["post_link"]; ?>">
                                <?php echo $key["post_image"]; ?>
                                    <div class="posts_categoria_caption">
                                        <span><?php echo $key["post_title"]; ?></span><br>

                                        <div class="categoria_drop_user">
                                            <span class="glyphicon glyphicon-user"></span>
                                            <span><?php echo $key["post_autor"]; ?></span>
                                        </div>

                                    </div>
                                </a>
                                </div>
                                <?php
                            }
                        ?>
                    </div>
                </div>


                <div class="categoria_arte_no_mundo col-sm-12">
                <div class="ar_titulo_div">
                    <span class="ar_titulo_secao">Podcasts</span>
                </div>
                    <div>
                        <?php $ar_exposicoes = home_arteref_get_posts(158, 4) ?> 
                        
                            <div class="categoria_arte_no_mundo_principal">

                                <a class="ar_titulo_secao_link" href="<?php echo $ar_exposicoes[0]["post_link"]; ?>">
                                <?php echo $ar_exposicoes[0]["post_image"]; ?> 
                                
                                <div class="categoria_posts_caption">
                                    <spam class="post_hoje_titulo"> <?php echo $ar_exposicoes[0]["post_title"]; ?> </spam> 
                                    <br>
                                    <span class="glyphicon glyphicon-user"></span>
                                    <span class="post_hoje_autor"><?php echo $ar_exposicoes[0]["post_autor"]; ?></span>
                                </div>
                                </a>

                            </div>
                       

                        <?php 

                            for ($i=1; $i < sizeof($ar_exposicoes); $i++) { 
                                $key = $ar_exposicoes[$i];
                                ?>
                                <div class="categorioa_drop_noticia">
                                <a href="<?php echo $key["post_link"]; ?>">
                                <?php echo $key["post_image"]; ?>
                                    <div class="posts_categoria_caption">
                                        <span><?php echo $key["post_title"]; ?></span><br>

                                        <div class="categoria_drop_user">
                                            <span class="glyphicon glyphicon-user"></span>
                                            <span><?php echo $key["post_autor"]; ?></span>
                                        </div>

                                    </div>
                                </a>
                                </div>
                                <?php
                            }
                        ?>
                    </div>
                </div>

            </div>
        <?php
    }
?>