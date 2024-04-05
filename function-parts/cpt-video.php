<?php
/*Replace = video*/

function video()
{
    register_post_type(
        'video',
        array(
            'labels'                =>          array(
                'name'              =>          'Videorecensioni',
                'singular_name'     =>          'Videorecensione',
                'all_items'         =>          'Tutti i video',
                'add_new'           =>          'Aggiungi un nuovo video',
                'add_new_item'      =>          'Aggiungi un nuovo video',
                'edit_item'         =>          'Modifica video',
                'new_item'          =>          'Nuovo video',
                'view_item'         =>          'Visualizza video',
                'search_items'      =>          'Cerca',
                'not_found'         =>          'Nessun elemento trovato',
                'not_found_in_trash' =>          'Nessun elemento nel cestino',
                'parent_item_colon' =>          '',
            ),
            'description'           =>          'video',
            'public'                =>          true,
            'publicly_queryable'    =>          true,
            'exclude_from_search'   =>          false,
            'show_ui'               =>          true,
            'query_var'             =>          true,
            'menu_position'         =>          22,
            'menu_icon'             =>          'dashicons-plus-alt', //Dashicon
            'rewrite'               =>          array(
                'slug'              =>          'video',
                'with-front'        =>          false,
            ),
            'has_archive'           =>          false,
            'capability_type'       =>          'post',
            'hierarchycal'          =>          false,
            'show_in_rest'          =>          false, //gutemberg disattivato
            'supports'              =>          array('title') //campi supportati
        ),
        flush_rewrite_rules() /*fine delle opzioni*/
    );
}
add_action('init', 'video');