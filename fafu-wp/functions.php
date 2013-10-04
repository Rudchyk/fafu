<?php
/**
 * @package WordPress
 */

// sidebar widget
if ( function_exists('register_sidebar') ) {
  register_sidebar(array(
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget' => '</li>',
    'before_title' => '<h2 class="widgettitle">',
    'after_title' => '</h2>',
  ));
}
// end sidebar widget

// Вывод первой картинки из поста (ссылка)
function catch_that_image() {
global $post, $posts;
$first_img = '';
ob_start();
ob_end_clean();
$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i',
 $post->post_content, $matches);
$first_img = $matches [1] [0];
// no image found display default image instead
if(empty($first_img)){
$first_img = "/wp-content/themes/fafu-wp/images/required/noimg.jpg";
}
return $first_img;
}
// Конец вывода первой картинки из поста (ссылка)

// Редактируемое меню WP3

// Инициализация меню
register_nav_menus(array(
    'top' => 'Верхнее меню',
    'information' => 'Информация',
    'competitions' => 'Соревнования',
    'additionally' => 'Дополнительно'
));
// Конец инициализации меню
// Настройки вывода меню
function my_wp_nav_menu_args($args=''){
  $args['container'] = '';
  $args['depth'] = '1';
  $args['menu_class'] = '';
     return $args;
} // function
add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );
// Конец настройки вывода меню

// Конец редактируемого меню WP3

// Вывод цитаты с разным количеством символов в любом месте шаблона
function the_excerpt_max_charlength($charlength) {
     $excerpt = get_the_excerpt();
     $charlength++;
     if ( mb_strlen( $excerpt ) > $charlength ) {
          $subex = mb_substr( $excerpt, 0, $charlength - 5 );
          $exwords = explode( ' ', $subex );
          $excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
          if ( $excut < 0 ) {
               echo mb_substr( $subex, 0, $excut );
          } else {
               echo $subex;
          }
          echo '...';
     } else {
          echo $excerpt;
     }
}
function new_excerpt_length($length) {
    return 800;
    }
add_filter('excerpt_length', 'new_excerpt_length');

// Конец вывода цитаты с разным количеством символов в любом месте шаблона

/* Очищаем wp_head(); */
function remove_recent_comments_style() {  
  global $wp_widget_factory;  
  remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );  
}  
add_action( 'widgets_init', 'remove_recent_comments_style' );  
remove_action( 'wp_head', 'feed_links_extra', 3 ); 
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); 
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
remove_action( 'wp_head', 'wp_generator' );
/* Конец очистки wp_head(); */

function short_title($char) {
  $title = get_the_title($post->ID);
  $title = mb_substr($title,0,$char);
  echo $title.'...';
}

// Добавление поддержки миниатюр в тему
add_theme_support('post-thumbnails');

function kubrick_theme_page() {
?>
<?php } ?>
