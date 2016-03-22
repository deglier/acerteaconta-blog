<?php
add_theme_support( 'post-thumbnails' ); 



//inicia a session php no wordpress
if(!function_exists('cf_session_start'))
{
  function cf_session_start()
  {
    if(!session_id()) session_start();
  }
  add_action('init', 'cf_session_start');
}


//criando o post meta
if(!function_exists('cf_count_post_views')){
  function cf_count_post_views()  {
    if(is_single()){
      global $post;

      if(empty($_SESSION['cf_post_counter_'.$post->ID]))      {
        $_SESSION['cf_post_counter_'. $post->ID] = true;

        $key = 'cf_post_counter';
        $key_value = get_post_meta($post->ID, $key, $key_value);

        if(empty($key_value)){
          $key_value = 1;
          update_post_meta($post->ID, $key, $key_value);
        }else{
          $key_value += 1;
          update_post_meta($post->ID, $key, $key_value);
        }
      }
    }
    return;
  }
  add_action('get_header', 'cf_count_post_views');
}
