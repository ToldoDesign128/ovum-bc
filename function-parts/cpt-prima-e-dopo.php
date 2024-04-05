<?php
/*Replace = ped*/

function ped()
{
    register_post_type(
        'ped',
        array(
            'labels'                =>          array(
                'name'              =>          'Prima e Dopo',
                'singular_name'     =>          'Prima e Dopo',
                'all_items'         =>          'Tutti gli articoli',
                'add_new'           =>          'Aggiungi un nuovo articolo',
                'add_new_item'      =>          'Aggiungi un nuovo articolo',
                'edit_item'         =>          'Modifica articolo',
                'new_item'          =>          'Nuovo articolo',
                'view_item'         =>          'Visualizza articolo',
                'search_items'      =>          'Cerca',
                'not_found'         =>          'Nessun elemento trovato',
                'not_found_in_trash' =>          'Nessun elemento nel cestino',
                'parent_item_colon' =>          '',
            ),
            'description'           =>          'ped',
            'public'                =>          true,
            'publicly_queryable'    =>          true,
            'exclude_from_search'   =>          false,
            'show_ui'               =>          true,
            'query_var'             =>          true,
            'menu_position'         =>          20,
            'menu_icon'             =>          'dashicons-plus-alt', //Dashicon
            'rewrite'               =>          array(
                'slug'              =>          'ped',
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
add_action('init', 'ped');