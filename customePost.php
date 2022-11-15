add_action( 'init', 'ht_register_libros_post_type' );

function post_libros() {

	$labels = array(
        'name' => _x( 'Libros', 'post type general name' ),
        'author' => _x( 'Libros', 'post type general author' ),
        'year' => _x( 'Libros', 'post type general year' ),
        'singular_name' => _x( 'Libro', 'post type singular name' ),
        'add_new' => _x( 'Añadir nuevo', 'book' ),
        'add_new_item' => __( 'Añadir nuevo Libro' ),
        'edit_item' => __( 'Editar Libro' ),
        'new_item' => __( 'Nuevo Libro' ),
        'view_item' => __( 'Ver Libro' ),
        'search_items' => __( 'Buscar Libros' ),
        'not_found' =>  __( 'No se han encontrado Libros' ),
        'not_found_in_trash' => __( 'No se han encontrado Libros en la papelera' ),
        'parent_item_colon' => ''
    );
    $args = array( 'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'description', 'reference', 'pages', 'publisher', 'author', 'year')
    );
	register_post_type( 'post_type_libros', $args );

}
add_action( 'init', 'post_libros', 0 );