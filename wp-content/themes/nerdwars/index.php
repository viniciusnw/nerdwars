<?php get_header();?>
        
<!-- CAROUSEL DESTAQUES -->
<?php include(TEMPLATEPATH . '/includes/carousel.php'); ?>
<!-- / CAROUSEL DESTAQUES -->

<!-- CONTEUDO PRINCIPAL -->
<main id="content">
    <div id="content-wrapper">
        <?php 
            if ( is_home() ) {
                include(TEMPLATEPATH . '/includes/posts/posts_home_page.php');
            }
        ?>
    </div>
</main><!-- / CONTEUDO PRINCIPAL -->

<div class="clearfix"></div>
<?php get_footer();