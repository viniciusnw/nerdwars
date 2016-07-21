<?php if ( is_home() || is_page() || is_single() ) :
    
    /*
     * Query para buscar os posts pelo array de ids
     */
    $args = array(
        'posts_per_page' => 4,
        'order'          => 'ASC',
        'post_type'      =>'post',
        'meta_query'     => array(
            array(
                'key' => 'nw_carousel',
                'value' => 'on'
            )
        )
    );
    $carousel = new WP_Query( $args );
 ?>
    <section id="carousel">

        <div id="carouselPosts" class="owl-carousel owl-theme">
            
            <?php while( $carousel->have_posts() ) : $carousel->the_post(); ?>
            
                <?php
                    /*
                     * Busca a imagem destacada de cada post
                     */
                    if ( get_post_thumbnail_id() ){
                        $thumb_url = wp_get_attachment_url( get_post_thumbnail_id() );
                    }
                ?>
            
                <div class="item">

                    <img class="img-carousel" src="<?=$thumb_url?>">

                    <div class="carouselCaption">

                        <div class="carouselCategorias">
                            <?php
                            $categories = get_the_category( $post_ID );
                            foreach ( $categories as $cat => $values ):
                            ?>
                                <a href="<?=get_category_link( $categories[$cat]->term_id ) ?>"><?=$categories[$cat]->cat_name?></a>                            
                                <?php if( $cat + 1 < count($categories) ) : ?>
                                <span>/</span>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>

                        <a href="<?php the_permalink(); ?>">
                            <h1><?php the_title(); ?></h1>
                        </a>

                        <div class="carouselCaptionRodape">
                            <h4>
                                <a href="#">
                                    <i class="fa fa-user"></i> <?php the_author();?>
                                </a>
                                <span>-</span> 
                                <i class="fa fa-clock-o"></i> <?php the_time('j M Y')?> às <?php the_time('h:m'); ?>
                            </h4>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>

        <div class="clearfix"></div>
    </section><!-- / DESTAQUES -->
    
    <section id="carousel-categorias">
        <div id="content-carousel-categorias" class="row">
            <a href="<?php bloginfo('url') ?>/category/jogos" id="item1" class="item col-md-2">Jogos</a>
            <a href="<?php bloginfo('url') ?>/category/tirinhas" id="item2" class="item col-md-2">Tirinhas</a>
            <a href="<?php bloginfo('url') ?>/category/animes-e-mangas" id="item3" class="item col-md-2">Animes e Mangás</a>
            <a href="<?php bloginfo('url') ?>/category/hqs" id="item4" class="item col-md-2">HQ's</a>
            <a href="<?php bloginfo('url') ?>/category/filmes-series" id="item5" class="item col-md-2">Series e Filmes</a>
            
            <a href="<?php bloginfo('url') ?>/category/toda-a-galaxia" id="item6" class="item col-md-2" style="font-size: 1.6rem; padding: 8px 0;">
                Toda a galáxia reunida em um só post
            </a>
        </div>
    </section>
<?php endif;
