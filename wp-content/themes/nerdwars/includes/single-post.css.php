<style>
    <?php 
    // boleana para bg (meta box)
    $bg_single_post            = get_post_meta( $post->ID, 'nw_bg_header_post', true );
    // boleana para a barra lateral (meta box)
    $barra_lateral_single_post = get_post_meta( $post->ID, 'nw_barra_lateral', true );
    
    /*SEM BG NO TOPO*/
    if( ! $bg_single_post ): ?>

        #header-single-post{
            display: none;
        }
               
        #single-post-content-wrapper{
            margin-top: 60px;
            color: #2F323A;
        }
        
        #header-single-post-nobg{
            display: block;
            border: 0px;
            border: solid #bfbfbf 1px;
            border-bottom: 0;
            margin: 0;
            font-family: Dosis;
            background: #fff;
        }
        
        #header-single-post-nobg .date{
            padding: 6px 0;
            font-size: 35px;
            text-align: center;
        }
        
        #header-single-post-nobg .row2{
            padding: 0;
        }
        
        #header-single-post-nobg .title{
            font-family: viga;
            font-size: 24px;
            padding: 15px 20px 20px;
        }
        
        #header-single-post-nobg .title h1{
            margin: 0;
        }
        
        #header-single-post-nobg .categoria{
            padding: 8px 20px;
            font-size: 15px;
        }
        
        #header-single-post-nobg .autor{
            padding: 8px 20px;
            text-align: right;   
            font-size: 15px;
        }

        #carousel-categorias{
            display: block;
        }
    <?php endif; ?>
    
    /*SEM BARRA LATERAL*/
    <?php if( ! $barra_lateral_single_post ) :?>
        body{
            background: url("/wp-content/themes/nerdwars/imagens/bg.jpg");
            overflow-x: hidden;
        }
        
        #single-post-content{
            width: 88%;
            float: none;
            margin: 0 auto;
        }
        
        #single-post-content .rodape .relacionados .content-relacionados{
            margin: 0 auto;
            width: 795px;
        }
    
        #sidebars{
            display: none;
        }
    <?php endif; ?>
        
        
    #header-single-post-nobg .date{
        border-right: solid 2px #222E50;   
    }
</style>