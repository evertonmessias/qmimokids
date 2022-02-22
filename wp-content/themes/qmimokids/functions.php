<?php

//Functions qmimokids

//*************URL theme [ get_template_directory_uri() ]
define('SITEPATH', '/wp-content/themes/qmimokids/');


//************* Login_redirect
function admin_default_page()
{
  return '/wp-admin';
}
add_filter('login_redirect', 'admin_default_page');


//************* Admin Login Logo
function tf_wp_admin_login_logo()
{ ?>
  <style type="text/css">
    #login{
      margin-top: 50px !important;
      background-color: #fff;
      padding: 0% 0 0 !important;
      padding: 20px !important;
      box-shadow: 0 0 15px rgb(0,0,0,0.8) !important;
      border-radius: 5px;
    }
    #login h1 a {
      background-image: url('<?php echo get_option('home_input_2'); ?>');
      background-size: 130px;
      width: 130px;
      height: 100px;
    }
    #login .galogin-powered {
      display: none;
    }
    .language-switcher{
      display: none;
    }
  </style>
<?php }
add_action('login_enqueue_scripts', 'tf_wp_admin_login_logo');


//************* Admin Login Logo Link URL
function tf_wp_admin_login_logo_url()
{
  return home_url();
}
add_filter('login_headerurl', 'tf_wp_admin_login_logo_url');


//************* Admin Login Logo's Title
function tf_wp_admin_login_logo_title($headertext)
{
  $headertext = esc_html__(get_bloginfo('name'), 'plugin-textdomain');
  return $headertext;
}
add_filter('login_headertext', 'tf_wp_admin_login_logo_title');


//************* URL from breadcrumbs
function url_active()
{
  return explode("/", $_SERVER['REQUEST_URI']);
}
add_action('url_active', 'url_active');


//************* Remove tags support from posts
function myprefix_unregister_tags()
{
  unregister_taxonomy_for_object_type('post_tag', 'post');
}
add_action('init', 'myprefix_unregister_tags');


//************* Add thumbnails
add_theme_support('post-thumbnails', array('post'));