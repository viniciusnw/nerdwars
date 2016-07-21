<?php


add_filter( 'rwmb_meta_boxes', 'positionbg_thumbnail_register_meta_boxes' );
function positionbg_thumbnail_register_meta_boxes( $meta_boxes )
{
    $prefix = 'meta_box';
    
    // 1st meta box refente a posição do background 
    $meta_boxes[] = array(
        'id'       => 'position_background',
        'title'    => 'Position Y',
        'pages'    => array( 'post', 'page' ),
        'context'  => 'normal',
        'priority' => 'high',
        'fields' => array(
            array(
                'name'  => 'position y',
                'desc'  => 'posição vertical do bg, ex: 150, -150',
                'id'    => $prefix . '_position',
                'type'  => 'text',
                'std'   => '',
                'class' => 'custom-class',
                'clone' => false,
            ),
        )
    );
    return $meta_boxes;
}

add_filter( 'rwmb_meta_boxes', 'single_post_register_meta_boxes' );
function single_post_register_meta_boxes( $meta_boxes ) {
    $prefix = 'meta_box';
    
    // 1st meta box refente a posição do background 
    $meta_boxes[] = array(
        'id'       => 'info_sigle_posts',
        'title'    => 'Layout Single post',
        'pages'    => array( 'post', 'page' ),
        'context'  => 'normal',
        'priority' => 'high',
        'fields' => array(
            array(
                'name'  => 'Background',
                'desc'  => 'O post apresentara background personalizado',
                'id'    => $prefix . '_bg',
                'type'  => 'checkbox',
                'std'   => 'checked',
                'class' => '',
                'clone' => false,
                'value' => 1
            ),
            
            array(
                'name'  => 'Barra lateral',
                'desc'  => 'O post apresentara a barra lateral',
                'id'    => $prefix . '_barra_lateral',
                'type'  => 'checkbox',
                'std'   => 'checked',
                'class' => '',
                'clone' => false,
                'value' => 1
            ),
        )
    );
    return $meta_boxes;
}