<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    /*public function primarymenu() {
      $args = array(
        'theme_location'    => 'primary_navigation',
        'menu_class'        => 'nav',
        'walker'            => new wp_bootstrap4_navwalker()
      );
      return $args;
  }*/

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public static function container(){

        // Options are container, container-fluid and fw-container (100% width, no gap)

        $container = 'container';

        return $container;

    }

    public static function logo(){

        $logo_field = get_field('logo', 'options');

        if($logo_field){

            $logo = '<img src="'. $logo_field .'" alt="'. get_field('company', 'options') .'" class="logo" />';

        }

        else {

            $logo = get_field('company', 'options');

        }

        return $logo;

    }
}
