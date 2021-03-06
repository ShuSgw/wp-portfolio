<?php

// stop default js
function load_script()
{
    if (!is_admin()) {
        wp_deregister_script('jquery');
    }
}
add_action('wp_enqueue_scripts', 'load_script');

// add all css and js
function add_all_cssandjs()
{
    // js

    // plugins
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.2.1.min.js', array(), '3.2.1');

    wp_enqueue_script('smoothState', get_stylesheet_directory_uri().'/src/assets/js/plugins/jquery.smoothState.min.js', array('jquery'));

    wp_enqueue_script('TweenMax', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js', array('jquery'));

    wp_enqueue_script('fullpage', get_stylesheet_directory_uri().'/src/assets/js/plugins/fullpage.js', array('jquery'));

    wp_enqueue_script('sidebar', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-sidebar/3.3.2/jquery.sidebar.min.js', array('jquery'));

    wp_enqueue_script('particles', get_stylesheet_directory_uri().'/src/assets/js/plugins/particles.min.js', array('jquery'));

    // modules
    wp_enqueue_script('openNav', get_stylesheet_directory_uri().'/src/assets/js/modules/openNav.js', array('jquery', 'smoothState', 'TweenMax', 'fullpage', 'sidebar', 'particles'));

    wp_enqueue_script('front-opening', get_stylesheet_directory_uri().'/src/assets/js/modules/front-opening.js', array('jquery', 'smoothState', 'TweenMax', 'fullpage', 'sidebar', 'particles'));

    wp_enqueue_script('initialSlide', get_stylesheet_directory_uri().'/src/assets/js/modules/initialSlide.js', array('jquery', 'smoothState', 'TweenMax', 'fullpage', 'sidebar', 'particles'));

    wp_enqueue_script('openSidebar', get_stylesheet_directory_uri().'/src/assets/js/modules/openSidebar.js', array('jquery', 'smoothState', 'TweenMax', 'fullpage', 'sidebar', 'particles'));

    wp_enqueue_script('mainJs', get_stylesheet_directory_uri().'/src/assets/js/main.js', array('jquery', 'smoothState', 'TweenMax', 'fullpage', 'sidebar', 'particles', 'openNav', 'initialSlide', 'front-opening', 'openSidebar'));

    // css
    wp_enqueue_style('foundicons', 'https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css');
    wp_enqueue_style('maincss', get_template_directory_uri().'/style.css');
    // $phpDatas = array(
    //     'url' => get_stylesheet_directory_uri(),
    // );
    // wp_localize_script('mainJs', 'phpData', $phpDatas);
    // add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
}
add_action('wp_enqueue_scripts', 'add_all_cssandjs');

function add_favicon()
{
    // echo '<link rel="shortcut icon" href=" '.get_stylesheet_directory_uri().'/src/assets/img/home/favicon.ico" type="image/x-icon" />'."\n";
    // echo '<link rel="apple-touch-icon" href=" '.get_stylesheet_directory_uri().'/src/assets/img/home/apple-touch-icon-180x180.png" type="image/x-icon" />'."\n";
    // echo '<link rel="icon" type="image/png" href="'.get_stylesheet_directory_uri().'/src/assets/img/home/icon-192x192.png" />'."\n";
}
add_action('wp_head', 'add_favicon');

// title tag
add_theme_support('title-tag');

// navigation settings
function twpp_setup_theme()
{
    register_nav_menu('global-navigation', 'global nav');
}

add_action('after_setup_theme', 'twpp_setup_theme');

// remove li class
function remove_to_currentClass($classes, $item)
{
    $classes = array();
    if ($item->current == true) {
        $classes[] = 'global__ul__li current';
    } else {
        $classes[] = 'global__ul__li';
    }

    return $classes;
}
add_filter('nav_menu_css_class', 'remove_to_currentClass', 10, 2);

function removeId($id)
{
    return $id = array();
}
add_filter('nav_menu_item_id', 'removeId', 10);

// add class into a tag on nav
function wpse156165_menu_add_class($atts, $item, $args)
{
    $class = 'global__ul__li__a';
    $atts['class'] = $class;

    return $atts;
}
add_filter('nav_menu_link_attributes', 'wpse156165_menu_add_class', 10, 3);

// to show types of categories on archive
function get_current_category()
{
    $id = get_query_var('cat');
    $cat = get_category($id);

    return $cat;
}

// anable widget
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'SideBar1',
        'id' => 'sidebar-1',
        'description' => 'frist widget',
        'class' => 's1',
        'before_widget' => '<div class="global_widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget__heading">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => 'SideBar2',
        'id' => 'sidebar-2',
        'description' => 'second widget',
        'class' => 's2',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => 'SideBar3',
        'id' => 'sidebar-3',
        'description' => 'third widget',
        'class' => 's2',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
}
//anable thumnails
add_theme_support('post-thumbnails');

// add image size
// add image size
add_image_size('projectsImages', 1200, 800, true);
add_image_size('dynamicProjectThumb', 400, 550, true);
add_image_size('archive', 400, 250, true);