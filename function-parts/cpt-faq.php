<?php
/*Replace = faq*/

function faq()
{
    register_post_type(
        'faq',
        array(
            'labels'                =>          array(
                'name'              =>          'FAQ',
                'singular_name'     =>          'FAQ',
                'all_items'         =>          'Tutti le FAQ',
                'add_new'           =>          'Aggiungi una nuova FAQ',
                'add_new_item'      =>          'Aggiungi una nuova FAQ',
                'edit_item'         =>          'Modifica FAQ',
                'new_item'          =>          'Nuovo FAQ',
                'view_item'         =>          'Visualizza FAQ',
                'search_items'      =>          'Cerca',
                'not_found'         =>          'Nessun elemento trovato',
                'not_found_in_trash' =>          'Nessun elemento nel cestino',
                'parent_item_colon' =>          '',
            ),
            'description'           =>          'faq',
            'public'                =>          true,
            'publicly_queryable'    =>          true,
            'exclude_from_search'   =>          false,
            'show_ui'               =>          true,
            'query_var'             =>          true,
            'menu_position'         =>          21,
            'menu_icon'             =>          'dashicons-plus-alt', //Dashicon
            'rewrite'               =>          array(
                'slug'              =>          'faq',
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
add_action('init', 'faq');