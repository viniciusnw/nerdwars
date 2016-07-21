<style>
    /*HEADER*/
    #header #titleBg{
        background: none;
        background: url('/wordpress/wp-content/themes/nerdwars/imagens/categorias/');
    }
    
    #header #titleBg #titleBg2{
        background: url('/wordpress/wp-content/themes/nerdwars/imagens/categorias/') center no-repeat;
        background-size: 875px 340px;
    }
    
    #header #logo a{
        background: url('/wordpress/wp-content/themes/nerdwars/imagens/categorias/badge-tiras.png') no-repeat;
    }
    
    #header-categorys{
        background: url("<?php bloginfo('template_directory'); ?>/imagens/categorias/") no-repeat;
        background-size: cover;
    }
    
    /*CONTENT POSTS*/
    #main-content .post .aside-post .content-aside-post header{
        background: linear-gradient(to bottom, #daa520 0%, #7e5f14 90%);
    }
    
    #main-content .post .aside-post .content-aside-post header:after{
        border-color: transparent transparent transparent #423105;
    }
</style>