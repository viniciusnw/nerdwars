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
    
    <div id="mais-acessados-home" class="sidebar">
        <header class="title">
            <h1>Mais lidos da Semana</h1>
        </header>
         
        <div id="carousel-mais-acessados-single">
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