<?php register_nav_menus(
    array('primary-menu'=>'Top Menu')
)
?>
<?php
add_theme_support('post-thumbnails');


function createjobs_posttype(){
    register_post_type('jobs',
    array(
        'labels' => array(
            'name' => __('Jobs'),
            'singular_name' => __('jobs')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug'=>'jobs'),
        'supports' => array('title','editor','thumbnail',),
        'taxonomies' => array('category'),
        'show_in_rest' => true,
    )
    
);
}
add_action('init','createjobs_posttype');

function createteam_posttype() {
  
    register_post_type( 'team',
        array(
            'labels' => array(
                'name' => __( 'Team' ),
                'singular_name' => __( 'team' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' =>'team'),
            'supports' => array( 'title', 'editor','thumbnail', ),
            'taxonomies'          => array( 'category' ),
            
            'show_in_rest' => true,
  
        )
    
    );
}
add_action( 'init', 'createteam_posttype' );

function createworkcategory_posttype(){
    register_post_type('workcategory',
    array(
        'labels' =>array(
            'name' =>__('Work Category'),
            'singular_name' => __('workcategory')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'workcategory'),
        'supports' => array('title','editor','thumbnail',),
        'taxonomies' => array('category'),
        'show_in_rest' => true,

    )
);
}
add_action('init','createworkcategory_posttype');

function createpartner_posttype() {
  
    register_post_type( 'partner',
        array(
            'labels' => array(
                'name' => __( 'Partner/Client' ),
                'singular_name' => __( 'partner' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' =>'partner'),
            'supports' => array( 'title', 'editor','thumbnail', ),
            'taxonomies'          => array( 'category' ),
            
            'show_in_rest' => true,
  
        )
    
    );
}
add_action( 'init', 'createpartner_posttype' );

function createtestimonial_posttype() {
  
    register_post_type( 'testimonial',
        array(
            'labels' => array(
                'name' => __( 'Testimonial' ),
                'singular_name' => __( 'testimonial' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' =>'testimonial'),
            'supports' => array( 'title', 'editor','thumbnail', ),
            'taxonomies'          => array( 'category' ),
            
            'show_in_rest' => true,
  
        )
    
    );
}
add_action( 'init', 'createtestimonial_posttype' );
?>