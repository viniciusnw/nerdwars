<html id="start">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=0">
        <meta name="description" content="">
        <meta name="author" content="">
        
        <meta property="og:url"         content="http://www.nytimes.com/2015/02/19/arts/international/when-great-minds-dont-think-alike.html" />
        <meta property="og:type"        content="article" />
        <meta property="og:title"       content="When Great Minds Don’t Think Alike" />
        <meta property="og:description" content="How much does culture influence creative thinking?" />
        <meta property="og:image"       content="http://static01.nyt.com/images/2015/02/19/arts/international/19iht-btnumbers19A/19iht-btnumbers19A-facebookJumbo-v2.jpg" />
        
        <title>
            <?php get_home_title();?>
        </title>
        
        <!-- Fonts -->
        <link href="<?php bloginfo('template_directory'); ?>/css/fonts.css" rel="stylesheet" type="text/css"/>
        
        <!-- bootstrap -->
        <link href="<?php bloginfo('template_directory'); ?>/components/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        
        <!-- font-awesome -->
        <link href="<?php bloginfo('template_directory'); ?>/components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        
        <!-- owl-carousel -->
        <link href="<?php bloginfo('template_directory'); ?>/components/owl.carousel/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css"/>
        <link href="<?php bloginfo('template_directory'); ?>/components/owl.carousel/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css"/>
        
        <!-- Custom CSS -->
        <style type="text/css" media="screen">
            @import url( <?php bloginfo('stylesheet_url'); ?> );
        </style>
        
        <?php include(TEMPLATEPATH . '/includes/rand-background.css.php');?>
    
        
        <!-- CSS's Personalizados -->
        <?php if( is_single() ) :?>
            <link href="<?php bloginfo('template_directory'); ?>/css/single.css" rel="stylesheet" type="text/css"/>
        <?php elseif( is_category() ) :?>
            <link href="<?php bloginfo('template_directory'); ?>/css/categorys.css" rel="stylesheet" type="text/css"/>
        <?php elseif( is_page() ) :?>
            <link href="<?php bloginfo('template_directory'); ?>/css/page.css" rel="stylesheet" type="text/css"/>
        <?php endif; ?>
        
        <?php wp_head(); ?>
    </head>
    
    <body>
        
        <!-- Header -->
        <header id="header">
            
            <div id="titleBg">
                <div id="titleBg2"></div>
            </div>
            
            <nav id="menu_topo" class="navbar navbar-inverse" role="navigation">
                
                <div class="container">
                    
                    <!-- BARRA RESPONSIVA -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menuList">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div><!-- / BARRA RESPONSIVA -->

                    <div class="collapse navbar-collapse" id="menuList">
                        <ul class="nav navbar-nav">
                            
                            <li>            
                                <div id="logo">
                                    <a title="Home" href="<?php echo get_settings('home'); ?>"></a>
                                </div>
                            </li>
                            
                            <li class="act">
                                <a title="Home" href="<?php echo get_settings('home'); ?>">
                                    <span>home</span>
                                </a>
                            </li>

                            <li>
                                <a title="Contato" href="<?php bloginfo('url') ?>/contato">
                                    <span>contato</span>
                                </a>
                            </li>
                            
                            <li>
                                <a title="Anuncie" href="<?php bloginfo('url') ?>/anuncie">
                                    <span>Anuncie</span>
                                </a>
                            </li>
                            
                            <li>
                                <a title="Envie um Post" href="<?php bloginfo('url') ?>/envie-um-post">
                                    <span>envie um post</span>
                                </a>
                            </li>
                            
                            <li>
                                <a title="Sobre o NW" href="<?php bloginfo('url') ?>/sobre">
                                    <span>sobre</span>
                                </a>
                            </li>

                            <li>
                                <a title="Pesquisar" href="#">
                                    <span>
                                        <i style="font-size: 14pt" class="fa fa-search"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header><!-- / Header -->