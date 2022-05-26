<!-- Hàm đăng ký menu -->

<?php
// update_option( 'siteurl', 'http://localhost/webhoctap/' );
// update_option( 'home', 'http://localhost/webhoctap/' );
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Menu chính' ));
  add_theme_support('post-thumbnails');
}
add_action( 'init', 'register_my_menu' );
add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
// Hàm tạo dropdown menu
function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}


if (function_exists('glsr_create_review')) {
    $review = glsr_create_review([
        'rating' => 5,
        'title' => 'Fantastic plugin!',
        'content' => 'This is my review.',
        'name' => 'Jane Doe',
        'email' => 'jane@doe.com',
        'date' => '2020-06-13',
    ]);
}

// Hàm đếm số lượt xem
function gt_get_post_view() {
    $count = get_post_meta( get_the_ID(), 'post_views_count', true );
    return "$count views";
}
function gt_set_post_view() {
    $key = 'post_views_count';
    $post_id = get_the_ID();
    $count = (int) get_post_meta( $post_id, $key, true );
    $count++;
    update_post_meta( $post_id, $key, $count );
}
function gt_posts_column_views( $columns ) {
    $columns['post_views'] = 'Views';
    return $columns;
}
function gt_posts_custom_column_views( $column ) {
    if ( $column === 'post_views') {
        echo gt_get_post_view();
    }
}
add_filter( 'manage_posts_columns', 'gt_posts_column_views' );
add_action( 'manage_posts_custom_column', 'gt_posts_custom_column_views' );
//Thêm đoạn code sau vào functions.php
function wpshare247_theme_support() {
    remove_theme_support( 'widgets-block-editor' );
}
add_action( 'after_setup_theme', 'wpshare247_theme_support' );
function wpshare247_widgets_init(){
    // Thêm SB footer
    register_sidebar( array(
        'name'          => __( 'Footer', 'text_domain'), // Tên sidebar hiển thị trong admin
        'id'            => 'sidebar-footer', // ID của sidebar không được trùng, dùng để hiển thị SB
        'description'   => __( 'Thêm các widget *[Footer] vào đây', 'text_domain'), // Mô tả cho SB nảy
        'before_widget' => '<section id="%1$s" class="widget %2$s">', // Bạn có thể thêm Class cho SB vào đây
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">', // Thẻ mở để tạo tiêu đề chung cho tất cả các Widget nẳm trong Sidebar này
        'after_title'   => '</h2>', // Đóng thẻ tiêu đề
    ) );
    
    // Thêm SB phải
    register_sidebar( array(
        'name'          => __( 'Sidebar phải', 'text_domain' ),
        'id'            => 'sidebar-right',
        'description'   => __( 'Thêm các widget *[Phải] vào đây', 'text_domain' ),
        'before_widget' => '<section id="%1$s" class="widget sb-right %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Sidebar trái', 'text_domain' ),
        'id'            => 'sidebar-left',
        'description'   => __( 'Thêm các widget *[Trái] vào đây', 'text_domain' ),
        'before_widget' => '<section id="%1$s" class="widget sb-right %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    
    // Thêm các SB tiếp theo
}
add_action( 'widgets_init', 'wpshare247_widgets_init' );
function wpshare247_register_widgets(){
    //Khai báo widget mới
    $file = realpath(dirname(__FILE__)).'/widgets/wpshare247_simple.php';
    require_once($file);
    register_widget('wpshare247_simple');
    
    //Hãy tiếp tục khai báo thêm các WG khác như bên dưới
    /*$file = realpath(dirname(__FILE__)).'/widgets/wpshare247_simple_2.php';
    require_once($file);
    register_widget('wpshare247_simple_2');*/
    
}
add_action('widgets_init', 'wpshare247_register_widgets');
function add_tags_to_pages() {
    register_taxonomy_for_object_type( 'post_tag', 'page' );
    }
    add_action( 'init', 'add_tags_to_pages');
function add_categories_to_pages() {
    register_taxonomy_for_object_type( 'category', 'page' );
    }
    add_action( 'init', 'add_categories_to_pages' );
// Tao custom post type
function tao_custom_post_type(){
        /*
         * Biến $label để chứa các text liên quan đến tên hiển thị của Post Type trong Admin
         */
        $label = array(
            'name' => 'Sản phẩm', //Tên post type dạng số nhiều
            'singular_name' => 'Sản phẩm' //Tên post type dạng số ít
        );
        /*
         * Biến $args là những tham số quan trọng trong Post Type
         */
        $args = array(
            'labels' => $label, //Gọi các label trong biến $label ở trên
            'description' => 'Post type đăng sản phẩm', //Mô tả của post type
            'supports' => array(
                'title',
                'editor',
                'excerpt',
                'author',
                'thumbnail',
                'comments',
                'trackbacks',
                'revisions',
                'custom-fields'
            ), //Các tính năng được hỗ trợ trong post type
            'taxonomies' => array( 'category', 'post_tag' ), //Các taxonomy được phép sử dụng để phân loại nội dung
            'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, true thì giống như Page
            'public' => true, //Kích hoạt post type
            'show_ui' => true, //Hiển thị khung quản trị như Post/Page
            'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
            'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
            'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
            'menu_position' => 5, //Thứ tự vị trí hiển thị trong menu (tay trái)
            'menu_icon' => 'dashicons-cart', //Đường dẫn tới icon sẽ hiển thị
            'can_export' => true, //Có thể export nội dung bằng Tools -> Export
            'has_archive' => true, //Cho phép lưu trữ (month, date, year)
            'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
            'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
            'capability_type' => 'post' //
        );
        register_post_type('sanpham', $args); //Tạo post type với slug tên là sanpham và các tham số trong biến $args ở trên
    }
    add_action('init', 'tao_custom_post_type');
    add_action('wp_ajax_RegisterAction', 'hk_handle_register_form');
    add_action('wp_ajax_nopriv_RegisterAction', 'hk_handle_register_form');
    
    function hk_handle_register_form() {
        $userData = [];
        if ( isset( $_POST['userData'] ) && is_array( $_POST['userData'] ) ) {
            $userData = $_POST['userData'];
        }
    
        if ( isset( $userData['_wpnonce'] ) && wp_verify_nonce( $userData['_wpnonce'], 'form_register' ) ) {
            $arr_signup = [];
            $arr_error  = [];
    
            if ( isset( $userData['email'] ) && $userData['email'] ) {
                $arr_signup['email'] = sanitize_text_field( $userData['email'] );
    
                if ( email_exists( $arr_signup['email'] ) ) {
                    $arr_error['email'] = 'Địa chỉ email đã tồn tại';
                }
            } else {
                $arr_error['email'] = 'Bạn chưa nhập địa chỉ email';
            }
    
            if ( isset( $userData['username'] ) && $userData['username'] ) {
                $arr_signup['username'] = sanitize_text_field( $userData['username'] );
    
                if ( username_exists( $arr_signup['username'] ) ) {
                    $arr_error['username'] = 'Username đã tồn tại';
                }
            } else {
                $arr_error['username'] = 'Bạn chưa nhập username';
            }
    
            if ( isset( $userData['password'] ) && $userData['password'] ) {
                $arr_signup['password'] = sanitize_text_field( $userData['password'] );
            } else {
                $arr_error['password'] = 'Bạn chưa nhập password';
            }
    
            if ( isset( $userData['repassword'] ) && $userData['repassword'] ) {
                $arr_signup['repassword'] = sanitize_text_field( $userData['repassword'] );
    
                if ( $arr_signup['password'] != $arr_signup['repassword'] ) {
                    $arr_error['repassword'] = 'Xác nhận password chưa trùng nhau';
                }
            } else {
                $arr_error['repassword'] = 'Bạn chưa nhập xác nhận password';
            }
    
    
            if ( count( $arr_error ) ) {
                echo '<ul>';
                foreach ( $arr_error as $key => $error ) {
                    echo '<li>'.$error.'</li>';
                }
                echo '</ul>';
            } else {
                $user_id = wp_create_user( $arr_signup['username'], $arr_signup['password'], $arr_signup['email'] );
                if ( $user_id ) {
                    $arr_signup = [];
                    echo 'success';
                }
            }
    
        }
        die(); 
    }