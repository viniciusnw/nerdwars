<!-- ADS -->
<section id="ads-content" class="row">

    <div class="ad col-lg-4">
        <div>Anuncio</div>
    </div>

    <div class="ad col-lg-4">
        <div>Anuncio</div>
    </div>

    <div class="ad col-lg-4">
        <div>Anuncio</div>
    </div>
</section><!-- / ADS -->

<!-- POSTS -->
<section id="main-content">
    
    <?php wp_reset_query(); ?>
    <?php if (have_posts()): while (have_posts()) : the_post();?>
    
        <?php if ( has_post_format( 'aside' ) ) :?>
            <div class="post">

                <section class="copy aside-post">
                    
                    <div class="thumbnail-aside-post">
                        <a href="<?=the_Permalink()?>">
                            <?php the_post_thumbnail('thumbnail')?>
                        </a>
                    </div>
                    
                    <div class="col-md-8 content-aside-post">
                        <header>
                            <a title="<?=the_title();?>" href="<?=the_Permalink()?>">
                                <h1 class="title-aside-post"><?=the_title();?></h1>
                            </a>
                        </header><!-- CABECALHO POST -->

                        <article>
                            <?=texto_cortado()?> <a title="Click para ver o post completo" href="<?php the_permalink()?>"> [...] Ler mais</a> 
                        </article><!-- CONTEUDO POST -->

                        <footer>
                            <div class="col-md-4 comentarios-aside-post">
                                <i class="fa fa-comments-o"></i> <fb:comments-count href="<?=the_Permalink()?>"></fb:comments-count>
                            </div>
                            
                            <div class="col-md-8 social-aside-icons">
                                <div class="social-btn twitter">
                                    <a href="http://twitter.com/share" class="twitter-share-button"
                                    data-text="<?=the_title();?>"
                                    data-url="<?=the_Permalink()?>" 
                                    data-via="nerd_wars" 
                                    data-count="leteral"></a>
                                </div>

                                <div class="social-btn facebook">
                                    <a class="fb-like" data-href="<?=the_Permalink()?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></a>
                                </div>
                                
                                <div class="social-btn pinit">
                                    <a href="//br.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark">
                                        <img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" />
                                    </a>
                                </div>
                            </div>
                        </footer><!-- RODAPE POST-->
                    </div>
                    <div class="clearfix"></div>
                </section>
            </div>
        <?php else :?>
            <div class="post">

                <section class="copy normal-post">
                    <header>
                        <a href="<?=the_Permalink()?>">
                            <h1 class="title"><?=the_title();?></h1>
                        </a>
                        
                        <div class="infosPost">
                            <span class="autor">
                                <i class="fa fa-user"></i> <?=get_the_author();?>
                            </span>
                            <span class="date">
                                <i class="fa fa-clock-o"></i> <?php the_time('j M Y')?> às <?php the_time('h:m'); ?>
                            </span>
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
                    </header><!-- CABECALHO POST -->

                    <article>
                        <?=the_content();?>
                        <div class="clearfix"></div>
                    </article><!-- CONTEUDO POST -->

                    <footer>
                        <div class="col-md-6 comentario">
                            <i class="fa fa-comments-o"></i> 
                            <fb:comments-count href="<?=the_Permalink()?>"></fb:comments-count> Comentários
                        </div>

                        <div class="col-md-6 social-icons">
                            
                            <div class="social-btn twitter">
                                <a href="http://twitter.com/share" class="twitter-share-button"
                                data-text="<?=the_title();?>"
                                data-url="<?=the_Permalink()?>" 
                                data-via="nerd_wars" 
                                data-count="vertical"></a>
                            </div>

                            <div class="social-btn facebook">
                                <a class="fb-like" data-href="<?=the_Permalink()?>" data-layout="box_count" data-action="like" data-show-faces="true" data-share="false"></a>
                                <a class="fb-share-button" data-href="<?=the_Permalink()?>" data-layout="box_count" data-action="share" data-show-faces="true"></a>
                            </div>
                                                                                                               
                            <div class="social-btn pinit">
                                <a href="//br.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark">
                                    <img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" />
                                </a>
                            </div>
                        </div>
                    </footer><!-- RODAPE POST-->
                </section>
            </div>
        <?php endif; ?>

        <div class="bottom"></div>
    <?php endwhile; else:?><?php endif;?>
</section><!-- / POSTS -->

<?php get_sidebar();?>
<div class="clearfix"></div><!-- SEPARADOR -->

<section id="paginacao">
    <?php wp_pagenavi(); ?>
</section>