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

remove_action('wp_head', 'wp_print_scripts');
remove_action('wp_head', 'wp_print_head_scripts', 9);
remove_action('wp_head', 'wp_enqueue_scripts', 1);
add_action('wp_footer', 'wp_print_scripts', 5);
add_action('wp_footer', 'wp_enqueue_scripts', 5);
add_action('wp_footer', 'wp_print_head_scripts', 5);

// Добавление поддержки миниатюр в тему
add_theme_support('post-thumbnails');

// Настройки темы 
add_action('admin_menu', 'theme_option');

function theme_option() {
    //create new top-level menu
    add_menu_page('theme_option', 'Настройки темы', 'administrator', __FILE__, 'theme_option_page');

    //call register settings function
    add_action( 'admin_init', 'register_theme_optionssettings' );
}


function register_theme_optionssettings() {
    //register our settings
    register_setting( 'theme_option-settings-group', 'display' );
}

function theme_option_page() {
?>
<style>
.theme_option-title{
  text-align: center; 
  font-family:Georgia,'Times New Roman',Times,serif; 
  padding: 10px 20px;
}
.theme_option-padding{
  padding:0 20px;
}
.theme_option-border{
  border-bottom:1px dotted #000000;
}
.theme_option-field{
  width:100%; 
}
.theme_option-number{
  width:5%; 
}
.theme_option-area{
  width:100%; 
  height:100px;
}
</style>
<h2 class="theme_option-title"><strong>Настройки темы</strong></h2>
<form action="options.php" method="POST" class="poster-admin-form">
    <?php wp_nonce_field('update-options'); ?>
    <h3 class="theme_option-padding">Заполните поля:</h3>
    <table width="100%" border="0" class="theme_option-padding">
      <tr>
        <td style="width: 20%">
          <label for="display"><strong>Строка "Ожидайте":</strong></label>
        </td>
        <td style="width: 80%">
           <input type="text" class="theme_option-number" name="display" value="<?php echo get_option('display'); ?>" id="display">
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <p>Чтобы выводить панель "Ожидайте", поле для ввода должно быть пустое.</p>
          <p>Если хотите скрыть панель, то в поле нужно прописать <strong>none</strong></p>
        </td>
      </tr>
      <!-- <tr><td colspan="2" class="theme_option-border">&nbsp;</td></tr>
      <tr><td colspan="2">&nbsp;</td></tr> -->
    </table>
    <input type="hidden" name="action" value="update">
    <input type="hidden" name="page_options" value="display">    
    <div class="theme_option-padding">
      <input type="submit"  value="Сохранить">
    </div>
    

</form>
<?php 

}
// конец настройки темы 

function kubrick_theme_page() {
?>
<?php } ?>
