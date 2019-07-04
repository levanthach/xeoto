<?php 
	function theme_settup(){
		register_nav_menu('topmenu',__( 'Menu chính' ));
	}
	add_action('init','theme_settup');
	// yêu cầu file css, js trong inic
	require_once trailingslashit(get_template_directory('')) . 'inc/init.php';

add_filter('use_block_editor_for_post','__return_false');
add_theme_support('post-thumbnails');

// -----------------------------------------------
//	Link img/ size = thumbnail, medium, large, ''
// -----------------------------------------------
function p_link_img( $id = false, $size = '', $echo = false ){ 
  $r = !empty(  wp_get_attachment_image_src( get_post_thumbnail_id( $id ? $id : false ),$size)[0] ) ?
	   wp_get_attachment_image_src( get_post_thumbnail_id(  $id ? $id : false ),$size)[0] : 
	   p_link_img_placeholder();
	 if ( $echo ) { echo $r; } else { return $r;  }

}

// -----------------------------------------------
// Link img placeholder default
// -----------------------------------------------

function p_link_img_placeholder($echo = false ){
  	$r = apply_filters( 'p_apply_link_img_placeholder', get_template_directory_uri().'/assests/img/placeholder.png'); 

  	if ( $echo ) { echo $r; } else { return $r;  }
}

//Adds ACF fields to Post List
add_filter('manage_posts_columns', 'custom_posts_table_head');
function custom_posts_table_head( $columns ) {
    $columns['gia']  = 'Giá SP';
    $columns['so-cho']  = 'Số chỗ';
    $columns['thuong-hieu']  = 'Thương hiệu';
    return $columns;

}
add_action('manage_posts_custom_column', 'custom_posts_table_content', 10, 2);

function custom_posts_table_content( $column_name, $post_id ) {
    if( $column_name == 'gia' ) {
        $author_name = get_field('gia', $post_id);
        echo $author_name;
    }

    if( $column_name == 'so-cho' ) {
        $author_name = get_field('so-cho', $post_id);
        echo $author_name;
    }

    if( $column_name == 'thuong-hieu' ) {
        $author_name = get_field('thuong-hieu', $post_id);
        echo $author_name;
    }
}

//Code phan trang
function wp_corenavi_table($custom_query = null) {
      global $wp_query;
      if($custom_query) $main_query = $custom_query;
      else $main_query = $wp_query;
      $big = 999999999;
      $total = isset($main_query->max_num_pages)?$main_query->max_num_pages:'';
      if($total > 1) echo '<div class="paginate_links">';
      echo paginate_links( array(
         'base'        => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
         'format'   => '?paged=%#%',
         'current'  => max( 1, get_query_var('paged') ),
         'total'    => $total,
         'mid_size' => '10',
         'prev_text'    => __('Trước','devvn'),
         'next_text'    => __('Tiếp','devvn'),
      ) );
      if($total > 1) echo '</div>';
}
?>

