
<?php get_header(); ?>

<header id="header-categorys">

    <div class="content-header-categorys">

        <h1 class="title">
            <?=single_cat_title() ?>
        </h1>
        
        <div class="descricao">
            <?=category_description( $category_id ) ?>
        </div>
    </div>
</header><!-- CABEÇALHO CATEGORYS -->

<!-- CONTEUDO PRINCIPAL -->
<main id="content">
    <div id="content-wrapper">
        
        <!-- POSTS -->
        <section id="main-content">

            <?php if (have_posts()): while (have_posts()) : the_post()?>

                <div class="post">

                    <section class="copy aside-post">

                        <div class="thumbnail-aside-post">
                            <a href="<?=the_Permalink()?>">
                                <?php the_post_thumbnail('thumbnail'); ?>
                            </a>
                        </div>

                        <div class="col-md-8 content-aside-post">
                            <header>
                                <a title="<?=the_title();?>" href="<?=the_Permalink()?>">
                                    <h1 class="title-aside-post"><?=the_title()?></h1>
                                </a>
                            </header><!-- CABECALHO POST -->

                            <article>
                                <?=texto_cortado()?> <a title="Click para ver o post completo" href="<?php the_permalink()?>"> [...] Ler mais</a>
                            </article><!-- CONTEUDO POST -->

                            <footer>
                                <div class="col-md-6 comentarios-aside-post">
                                    <fb:comments-count href="<?=the_Permalink()?>"></fb:comments-count> Comentarios
                                </div>

                                <div class="col-md-6 social-aside-icons">
                                    <div class="social-btn twitter">
                                        <a href="http://twitter.com/share" class="twitter-share-button"
                                        data-text="<?=the_title()?>"
                                        data-url="<?=the_Permalink()?>" 
                                        data-via="nerd_wars" 
                                        data-count="leteral"></a>
                                    </div>

                                    <div class="social-btn facebook">
                                        <a class="fb-like" data-href="<?=the_Permalink()?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></a>
                                    </div>
                                </div>
                            </footer><!-- RODAPE POST-->
                        </div>
                        <div class="clearfix"></div>
                    </section>
                </div>

                <div class="bottom"></div>
            <?php endwhile; else:?><?php endif;?>
        </section><!-- / POSTS -->

        <?php include(TEMPLATEPATH . '/includes/categorys_sidebar.php'); ?>
        <div class="clearfix"></div><!-- SEPARADOR -->

        <section id="paginacao">
            
        </section>
    </div>
</main><!-- / CONTEUDO PRINCIPAL -->

<div class="clearfix"></div>
<?php get_footer();