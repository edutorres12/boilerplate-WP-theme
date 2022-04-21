<?php
require_once get_template_directory() . '/inc/custom-comments.php';
// Images sizes  
add_theme_support("post-thumbnails");
add_theme_support('menus');
add_theme_support('sidebars');

// // add_image_size("image_name", 500, 500, true);

// Define images path
define('THEMEROOT', get_stylesheet_directory_uri());
define('IMAGES', THEMEROOT . '/img');

//menu clases
function add_menu_link_class($atts, $item, $args)
{
  if (property_exists($args, 'link_class')) {
    $atts['class'] = $args->link_class;
  }
  return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);
function add_menu_list_item_class($classes, $item, $args)
{
  if (property_exists($args, 'list_item_class')) {
    $classes[] = $args->list_item_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);


// Enqueue files
function add_theme_styles()
{
  // Styles
  wp_enqueue_style("glightbox-css",  get_template_directory_uri() . "/plugins/glightbox/dist/css/glightbox.css");
  wp_enqueue_style("style", get_stylesheet_uri());
  wp_enqueue_style('splide-styles', get_template_directory_uri() . "/plugins/splide-4.0.1/dist/css/splide.min.css");
}



function add_theme_scripts()
{
  // Variables to handle theme url in JS
  $site_parameters = array(
    "site_url" => get_site_url(),
    "theme_url" => get_template_directory_uri()
    //   "checkout_url" => wc_get_checkout_url()
  );
  //Scripts
  wp_enqueue_script("modernizr", "https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js", array(), "2.8.3", false);
  wp_enqueue_script("bundlebootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js", array(), "5.0.2", true);
  //wp_enqueue_script("gsap",  "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.3/gsap.min.js", array());
  //wp_enqueue_script("gsap-scroll",  "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.3/ScrollTrigger.min.js", array());
  //wp_enqueue_script("splide", get_template_directory_uri() . "/plugins/splide-4.0.1/dist/js/splide.min.js", array());
  //wp_enqueue_script("fslightbox",  get_template_directory_uri() . "/plugins/fslightbox/fslightbox.js", array());
  //wp_enqueue_script("sticksy",  get_template_directory_uri() . "/plugins/sticksy/sticksy.min.js", array(), null, false);
  wp_localize_script('main', 'site_parameters', $site_parameters);
  wp_enqueue_script("main", get_template_directory_uri() . "/js/main.js", array('jquery'), "1.0", true);
}
add_action('wp_enqueue_scripts', 'add_theme_styles');
add_action('wp_enqueue_scripts', 'add_theme_scripts');
//preload css
add_action('wp_head', 'css_preload_load');

function css_preload_load()
{
?>
  <link rel="preconnect" href="https://kit.fontawesome.com" crossorigin>
  <link rel="dns-prefetch" href="https://kit.fontawesome.com">
  <script defer async src="https://kit.fontawesome.com/887e8ccc36.js" data-auto-replace-svg="nest" crossorigin="anonymous"></script>
<?php
}
//Woocommerce support
// add_action('after_setup_theme', function () {
//   add_theme_support('woocommerce');
// });

/* function more_pagination($wp_query)
{
  if ($wp_query->max_num_pages <= 1) return;

  $big = 999999999; // need an unlikely integer

  $pages = paginate_links(array(
    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
    'current' => max(1, get_query_var('paged')),
    'total' => $wp_query->max_num_pages,
    'type'  => 'array',
    'prev_text' => '<img src="https://digitalsake.com/wp-content/themes/digitalsake/img/general/left-arrow.svg" >',
    'next_text' => '<img src="https://digitalsake.com/wp-content/themes/digitalsake/img/general/left-arrow.svg" >',
    'show_all' => true
  ));

  if (is_array($pages)) {
    $paged = (get_query_var('paged') == 0) ? 1 : get_query_var('paged');
    echo '<div class="more-pagination-wrapper"><ul class="pagination justify-content-center">';
    foreach ($pages as $page) {
      echo "<li class='page-item'>$page</li>";
    }
    echo '</ul></div>';
  }
}
 */
function picostrap_pagination($args = array(), $class = 'pagination')
{

  if (!isset($args['total']) && $GLOBALS['wp_query']->max_num_pages <= 1) {
    return;
  }

  $args = wp_parse_args(
    $args,
    array(
      'mid_size'           => 2,
      'prev_next'          => true,
      'prev_text'          => __('&laquo;', 'picostrap'),
      'next_text'          => __('&raquo;', 'picostrap'),
      'type'               => 'array',
      'current'            => max(1, get_query_var('paged')),
      'screen_reader_text' => __('Posts navigation', 'picostrap'),
    )
  );

  $links = paginate_links($args);
  if (!$links) {
    return;
  }

?>

  <nav aria-labelledby="posts-nav-label">

    <h2 id="posts-nav-label" class="visually-hidden">
      <?php echo esc_html($args['screen_reader_text']); ?>
    </h2>

    <ul class="<?php echo esc_attr($class); ?>">

      <?php
      foreach ($links as $key => $link) {
      ?>
        <li class="page-item <?php echo strpos($link, 'current') ? 'active' : ''; ?>">
          <?php echo str_replace('page-numbers', 'page-link', $link); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
          ?>
        </li>
      <?php
      }
      ?>

    </ul>

  </nav>

<?php
}
