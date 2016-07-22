<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
 */

/* Abilita thumbnail */
add_theme_support('post-thumbnails');

/* Abilita suporte ao Post Formats. */
add_theme_support( 'post-formats', array( 'aside') );

/*
 * Adiciona a função de cortar o texto do post para as postagens do tipo aside
 */
function texto_cortado() {
    
    $excerpt = get_the_content();
    
    $excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
    
    $excerpt = strip_shortcodes($excerpt);
    
    $excerpt = strip_tags($excerpt);
    
    $excerpt = substr($excerpt, 0, 80);
    
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    
    $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
    
    return $excerpt = $excerpt;
}

/*
 * Função para pegar posts relacionados
 */
function posts_relacionados() { 
    
    foreach ( get_the_category() as $cat => $value ) {
        
        $categorias .= $value->term_id . ",";
    }
    
    $args = array(
        'posts_per_page' => 5,
        'cat'            => $categorias,
        'post__not_in'   => array( get_the_ID() ),
        'orderby'        => 'rand'
    ); 
    
    $the_query = new WP_Query( $args );  
    
    while ( $the_query->have_posts() ) : $the_query->the_post();
    $categoria = get_the_category( $post->ID )[0]->slug;
    ?> 
    
        <li class="related_item">
            
            <a href="<?php the_permalink(); ?>"> 
                <section class="related_content">
                    <div class="related_thumbs">
                        <?php the_post_thumbnail('relacionados'); ?>
                                            
                        <div class="retina <?=$categoria?>">
                            <?php 
                            if ( strlen( $categoria ) > 10 ){
                                $categoria = substr ($categoria, 0, 10) . ".";   
                            }
                            echo $categoria;
                            ?>
                        </div>
                    </div>
                    
                    <div class="related_title">
                        <?php the_title(); ?>
                    </div>
                </section>
            </a>
        </li>
    <?php endwhile;  
    
    wp_reset_postdata(); 
}

/* para a seção de mais acessados da semana */
add_image_size('mais_acessados', 328, 180, true);

/* para a seção de posts relacionados */
add_image_size('relacionados', 150, 150, true);

/*
 * Metaboxs cmb2
 */
add_action( 'cmb2_init', 'foundation_q_register_metaboxes' );
function foundation_q_register_metaboxes() {

    // Start with an underscore to hide fields from custom fields list
    $prefix = 'nw_';

    $videos = new_cmb2_box([
        'id'           => $prefix . 'meta_boxes',
        'title'        => 'Campos especiais',
        'object_types' => array( 'post' ), // Post type
        'context'      => 'normal',
        'priority'     => 'high',
        'show_names'   => true, // Show field names on the left
        'cmb_styles'   => true, // false to disable the CMB stylesheet
        'closed'       => false, // true to keep the metabox closed by default
    ]);
    $videos->add_field([
        'name' => 'Destaque',
        'desc' => 'Marque para este post ficar destacado no Carousel',
        'id'   => $prefix . 'carousel',
        'type' => 'checkbox',
    ]);
    $videos->add_field([
        'name' => 'Background Header',
        'desc' => 'Faça um upload de uma imagem para o background do cabeçalho do post',
        'id'   => $prefix . 'bg_header_post',
        'type' => 'file',
    ]);
    $videos->add_field([
        'name' => 'Barra Lateral',
        'desc' => 'Deseja aprestar uma barra lateral neste post?',
        'id'   => $prefix . 'barra_lateral',
        'type' => 'checkbox',
    ]);
}

/*
 * Recupera o titulo da pagina atual
 * <title></title>
 */
function get_home_title(){
    if (is_home()){
        bloginfo('name');
    }
    else if (is_category()){
        single_cat_title(); echo ' -  ' ; bloginfo('name');
    }
    else if (is_single()){
        single_post_title();
    }
    else if (is_page()){
        bloginfo('name'); echo ': '; single_post_title();
    }
    else {
        wp_title('',true);
    } 
}