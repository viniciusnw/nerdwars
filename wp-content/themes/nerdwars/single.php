<?php 

    get_header();
    
    //CAROUSEL DESTAQUES 
    include( TEMPLATEPATH . '/includes/carousel.php' );
    
    //Loop do post
    if ( have_posts()): while (have_posts()) : the_post();
    
        // Pega a imagem destacada do post (link)
        $thumb_id = get_post_thumbnail_id();
        if ( $thumb_id ){
            $thumb_url = wp_get_attachment_url( $thumb_id );
        }
        
        // valor de altura do bg
        $meta_box_position = get_post_meta( $post->ID, 'meta_box_position', true );
        
        /*
         * inclui uma pagina de estilo de acordo com o formato do post
         * 
         * Barra lateral e BG
         * Barra lateral sem BG
         * BG sem Barra lateral
         * Sem ambos
         */
        include(TEMPLATEPATH . '/includes/single-post.css.php');
?>

<!-- CONTEUDO PRINCIPAL -->
<main id="content">

    <header id="header-single-post" style="background: url('<?=$thumb_url?>') no-repeat fixed; background-size: cover; background-position-y: <?=$meta_box_position?>px;">

        <div class="content-header-single-post">

            <div class="infosPost">
                <span class="categoria">
                    <i class="fa fa-thumb-tack"></i> 
                    <?php
                    $categories = get_the_category( $post_ID );
                    foreach ( $categories as $cat => $values ):
                    ?>
                        <a href="<?=get_category_link( $categories[$cat]->term_id ) ?>"><?=$categories[$cat]->cat_name?></a>                            
                        <?php if( $cat + 1 < count($categories) ) : ?>
                        <span>/</span>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </span>
            </div>

            <h1 class="title"><?=the_title();?></h1>

            <div class="infosPost">
                <span class="autor">
                    <i class="fa fa-user"></i> <?=get_the_author();?>
                </span>
                <span class="date">
                    <i class="fa fa-calendar"></i> <?php the_time('j M Y')?> às <?php the_time('h:m'); ?>
                </span>
            </div>
        </div>
    </header><!-- CABEÇALHO SINGLE POST BG -->
    
    <div id="single-post-content-wrapper">
        <section id="single-post-content">

            <div class="post">
                
                <header id="header-single-post-nobg" class="row">
                    
                    <div class="col-md-2 date">
                        <b><?php the_time('j M')?> <br> <?php the_time('Y')?></b>
                    </div>

                    <div class="col-md-10 row2">  
                                     
                        <div class="title col-md-12">
                            <h1><?=the_title();?></h1>
                        </div>
                        
                        <div class="categoria col-md-6">
                            <i class="fa fa-thumb-tack"></i>
                            <b>
                                <?php
                                $categories = get_the_category( $post_ID );
                                foreach ( $categories as $cat => $values ):
                                ?>
                                    <a href="<?=get_category_link( $categories[$cat]->term_id ) ?>"><?=$categories[$cat]->cat_name?></a>                            
                                    <?php if( $cat + 1 < count($categories) ) : ?>
                                    <span>/</span>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </b>
                        </div>

                        <div class="autor col-md-6">
                            <i class="fa fa-user"></i> <b><?=get_the_author();?></b>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </header><!-- CABEÇALHO SINGLE POST SEM BG -->
                
                <section class="copy">

                    <header>
                        <div class="ads">
                            <!-- topo -->
                            <ins class="adsbygoogle"
                                 style="display: inline-block; width:728px; height:90px"
                                 data-ad-client="ca-pub-1115152779004290"
                                 data-ad-slot="5698119992"></ins>
                            <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                        </div>
                    </header>

                    <article>
                        <?=the_content();?>
                        <div class="clearfix"></div>
                    </article><!-- CONTEUDO POST -->

                    <footer>
                        <div class="col-md-6" id="tags">
                            <?php
                                $terms = wp_get_post_tags($post->ID);
                                foreach ($terms as $term) {

                                    $link = get_term_link($term->slug,'post_tag');
                                    echo '<a href="'.$link.'">'
                                            . '<span class="tag">'.$term->name.'</span>'
                                       . '</a>';
                                }
                            ?>
                        </div>

                        <div class="col-md-6" id="social-icons">
                            <div class="social-btn" id="facebook">
                                <a class="fb-like" data-href="<?=the_Permalink()?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></a>
                            </div>

                            <div class="social-btn" id="twitter">
                                <a href="http://twitter.com/share" class="twitter-share-button"
                                data-text="<?=the_title();?>"
                                data-url="<?=the_Permalink()?>" 
                                data-via="nerd_wars" 
                                data-count="leteral"></a>
                            </div>
                            
                            <div class="social-btn" id="pinit">
                                <a href="//br.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark">
                                    <img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" />
                                </a>
                            </div>
                        </div>
                    </footer><!-- RODAPE POST-->
                </section>
            </div>
            <div class="bottom"></div><!-- SEPARADOR -->

            <div class="rodape">

                <div class="relacionados">
                    <div class="content-relacionados">
                        <ul class="lista-ralacionados">
                            <?php posts_relacionados()?>
                            <div class="clearfix"></div>
                        <ul>
                    </div>
                </div>

                <div class="comentarios">
                    <div class="desc-comentarios">
                        Olá, os comentarios do blog são via Facebook, esteja logado e comente o quanto quiser! Seja Divertido :D
                    </div>
                    <div width="100%" class="fb-comments" data-href="<?=the_Permalink()?>" data-numposts="5"></div>
                </div>
            </div>
        </section><!-- / POSTS -->
    <?php endwhile; endif;?>

    <?php include(TEMPLATEPATH . '/sidebar-single.php'); ?>
    </div>
</main><!-- / CONTEUDO PRINCIPAL -->

<div class="clearfix"></div>
<?php get_footer();