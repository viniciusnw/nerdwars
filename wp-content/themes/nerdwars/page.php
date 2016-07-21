<?php get_header(); ?>

<!-- CAROUSEL DESTAQUES -->
<?php include(TEMPLATEPATH . '/includes/carousel.php'); ?>
<!-- / CAROUSEL DESTAQUES -->

<!-- CONTEUDO PRINCIPAL -->
<main id="content">
    <div id="content-wrapper">
        
        <!-- PAGE -->
        <section id="main-content">

            <?php if (have_posts()): while (have_posts()) : the_post();?>

                <div id="page">

                    <section class="page-post">

                        <div id="content-page-post">
                            <header>
                                <h1 class="title-page-post"><?php the_title() ?></h1>
                            </header><!-- CABECALHO PAGE -->

                            <article>
                                <?php the_content() ?>
                            </article><!-- CONTEUDO PAGE -->

                            <footer>
                               
                            </footer><!-- RODAPE PAGE-->
                        </div>
                        <div class="clearfix"></div>
                    </section>
                </div>
            <?php endwhile; else:?><?php endif;?>
        </section><!-- / PAGE -->

        <?php include(TEMPLATEPATH . '/includes/page_sidebar.php'); ?>
        <div class="clearfix"></div><!-- SEPARADOR -->
    </div>
</main><!-- / CONTEUDO PRINCIPAL -->

<div class="clearfix"></div>
<?php get_footer();