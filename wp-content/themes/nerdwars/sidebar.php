<section id="sidebars">
    <div id="socialIcons">
        
        <div id="feed-content" class="content-social">
            <a href="#">
              <div id="feed-icon" class="icon-social">
                   <div id="feed-border" class="border-social"></div>
               </div>
            </a>
        </div>

        <div id="fb-content" class="content-social">
            <a href="#">
              <div id="fb-icon" class="icon-social">
                   <div id="fb-border" class="border-social"></div>
               </div>
            </a>
        </div>
        
        <div id="tw-content" class="content-social">
            <a href="#">
              <div id="tw-icon" class="icon-social">
                   <div id="tw-border" class="border-social"></div>
               </div>
            </a>
        </div>
        
        <div id="tbl-content" class="content-social">
            <a href="#">
              <div id="tbl-icon" class="icon-social">
                   <div id="tbl-border" class="border-social"></div>
               </div>
            </a>
        </div>
        
        <div id="yt-content" class="content-social">
            <a href="#">
              <div id="yt-icon" class="icon-social">
                   <div id="yt-border" class="border-social"></div>
               </div>
            </a>
        </div>
                
        <div id="gplus-content" class="content-social">
            <a href="#">
              <div id="gplus-icon" class="icon-social">
                   <div id="gplus-border" class="border-social"></div>
               </div>
            </a>
        </div>
    </div>
    <div class="bottom"></div>
    
    <div id="socialApps" class="sidebar">

        <div class="fb-page" data-width="330" data-href="https://www.facebook.com/NerdWar" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true" data-show-posts="false">
            <div class="fb-xfbml-parse-ignore">
                <blockquote cite="https://www.facebook.com/NerdWar">
                    <a href="https://www.facebook.com/NerdWar"></a>
                </blockquote>
            </div>
        </div>

        <div class="tw-follow">

            <a class="twitter-follow-button"
               href="https://twitter.com/nerd_wars"
               data-size="large">
               Seguir @Nerd_Wars
            </a>
        </div>

        <div class="gapps">
            <div class="gyt">
                <div class="g-ytsubscribe" data-channel="NerdWars7" data-layout="default" data-count="default"></div>
            </div>

            <div class="gplus">
                <g:plusone size="big" href="http://nerdwars.blog.br/"></g:plusone>
            </div>
        </div>
    </div>                    
    <div class="bottom"></div>
    
    
    <div id="mais-acessados-home" class="sidebar">
        <header class="title">
            <h1>Mais lidos da Semana</h1>
        </header>
         
        <div id="carousel-mais-acessados">
            <?php 
            $query_popular = new WP_Query(array('v_sortby' => 'views', 'v_orderby' => 'desc', 'posts_per_page' => 7));

            if( $query_popular->have_posts() ) : 

                while( $query_popular->have_posts() ) : $query_popular->the_post(); 

                    $data_post   = strtotime ( substr($post->post_date, 0, 10) );
                    $data_limite = strtotime ( date('Y-m-d', strtotime("-7 days")) );

                    if( $data_post >= $data_limite ):?>

                        <div class="item">

                            <a href="<?php the_permalink()?>"  title="<?php the_title()?>">
                                <div class="thumb-home-mais-acessados">
                                    <?php the_post_thumbnail('mais_acessados')?>
                                </div>

                                <div class="caption-home-mais-acessados">
                                    <p class="total_views">
                                        <?php the_views(); ?> Visitas
                                    </p>
                                    <p>
                                        <?php the_title()?>
                                    </p>
                                </div>
                            </a>
                        </div>
                    <?php endif;?>
                <?php endwhile; ?>
            <?php endif; wp_reset_query(); ?>
        </div>
    </div>
    <div class="bottom"></div>
    
    <div id="online" class="sidebar">
        <script id="_waup21">
            var _wau = _wau || []; _wau.push(["small", "6gqwbmhaj2a2", "p21"]);(function() { var s=document.createElement("script"); s.async=true; s.src="http://widgets.amung.us/small.js";document.getElementsByTagName("head")[0].appendChild(s);})();
        </script>
    </div>                    
    <div class="bottom"></div>

    <div id="parceiros" class="sidebar">
        <header class="title">
            <h1>Mestres Jedi</h1>
        </header>

        <div class="content">
            <center>
            <iframe id="datamain" src="http://gamehall.uol.com.br/network-270.html" width="270" height="90" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no"></iframe><br>
            
            <a href="http://rockntech.com.br/" target="_blank">
                <img class="img-thumbnail" src="http://i48.tinypic.com/14scv1g.jpg" width="94px" height="94px" title="Rock N' Tech">
            </a>
            
            <a href="http://complexogeek.com/" target="_blank">
                <img class="img-thumbnail" src="http://i49.tinypic.com/nox9jr.png" width="94px" height="94px" title="Complexo Geek" alt="">
            </a>
            
            <a href="http://www.recantododragao.com.br/" target="_blank">
                <img class="img-thumbnail" src="http://i40.tinypic.com/347ttu8.png" width="94px" height="94px" title="Recanto do dragão">
            </a>
            
            <a href="http://www.nintendista.blog.br/" target="_blank">
                <img class="img-thumbnail" src="http://i60.tinypic.com/2hed45z.jpg" width="94px" height="94px" title="Nintendista" alt="">
            </a>
            
            <a href="http://www.8balls.com.br//" target="_blank">
                <img class="img-thumbnail" src="http://i45.tinypic.com/2r4050l.png" width="94px" height="94px" title="8 Balls" alt="">
            </a>
            
            <a href="http://cotovelodeformiga.com.br/" target="_blank">
                <img class="img-thumbnail" src="http://i57.tinypic.com/23k6a78.jpg" width="94px" height="94px" title="Cotovelo de Formiga">
            </a>
            
            <a href="http://www.amigosdoforum.com.br/" target="_blank">
                <img class="img-thumbnail" src="http://i48.tinypic.com/ak8tfl.png" width="94px" height="94px" title="Amigos do Fórum" alt="">
            </a>

            <a href="http://www.zonanerd.com.br/" target="_blank">
                <img class="img-thumbnail" src="http://i45.tinypic.com/2jbwb4k.jpg" width="94px" height="94px" title="Zona Nerd">
            </a>
            
            <a href="http://mainquest.blog.br/" target="_blank">
                <img class="img-thumbnail" src="http://i50.tinypic.com/efztc.png" width="94px" height="94px" title="Main Quest">
            </a>
            
            <a href="http://www.zonadoguaxinim.com.br/" target="_blank">
                <img class="img-thumbnail" src="http://i50.tinypic.com/dnm5ib.png" width="94px" height="94px" title="Zona do Guaxinim">
            </a>
            
            <a href="http://culturagame.com.br/" target="_blank">
                <img class="img-thumbnail" src="http://i60.tinypic.com/2hokxef.png" width="94" height="94" title="Cultura Gamer">
            </a>
            
            <a href="http://www.oguianerdbrasil.com.br/" target="_blank">
                <img class="img-thumbnail" src="http://i58.tinypic.com/14algrr.jpg" width="94" height="94" title="O Guia Nerd">
            </a>
            </center>        
        </div>
    </div>                                            
    <div class="bottom"></div>

    <div id="adsSidebar" class="sidebar">
        <div class="content">
            <!-- barra_lateral_quadrado -->
            <ins class="adsbygoogle"
                 style="display: inline-block; width:336px; height:280px"
                 data-ad-client="ca-pub-1115152779004290"
                 data-ad-slot="7847237193"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    </div>     
    
    <div class="bottom"></div>
</section>