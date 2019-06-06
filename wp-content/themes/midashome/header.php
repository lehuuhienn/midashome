<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Theme
 * @subpackage Theme
 * @since 1.0.0
 */

if(!function_exists("get_field")){ echo 'We need to install ACF Plugin!'; die;}

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>

        <meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="profile" href="https://gmpg.org/xfn/11" />
        <link rel="icon" href="<?php the_frontend(); ?>img/icons/logo.ico">
        <link rel="app-themecustom" data-url="<?php the_frontend(); ?>" >
        <link rel="site-themecustom" data-url="<?php echo site_url(); ?>" >

        <!-- <script>window.jQuery || document.write('<script src="<?php the_frontend(); ?>vendor/jquery/jquery.1.12.4.min.js"><\/script>')</script> -->
        <?php wp_head(); ?>
        
    </head>

    <body <?php body_class(); ?>>
        <?php $company_name = get_field("company_name", "options"); ?>
        <?php $company_logo = get_field("company_logo", "options"); ?>
        <?php $company_logo = $company_logo?$company_logo['sizes']['medium']:get_frontend()."img/Official Logo.png" ?>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-midas">
            <a class="logo color-white mr-5" href="<?php echo home_url(); ?>">
                <img height="50px" src="<?php echo $company_logo; ?>" alt="<?php $company_name; ?>">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <?php if(has_nav_menu("header")): $menus_header = get_menu_items_by_registered_slug("header"); ?>
                <?php global $post; $thePostID = $post?$post->ID:0; ?>

                <ul class="navbar-nav color-white">
                    <?php foreach($menus_header as $m): ?>
                        <?php if($m->menu_item_parent!=0){continue;} ?>
                        <?php
                            $submenu = array();
                            foreach($menus_header as $n){
                                if($n->menu_item_parent==0 || $n->menu_item_parent!=$m->ID){continue;}
                                $submenu[] = $n;
                            }
                            // var_dump($m);
                        ?>

                        <li class="nav-item <?php echo count($submenu)>0?'dropdown':'';?>">
                            <a class="nav-link <?php echo $thePostID==$m->object_id?'active':''; ?> text-uppercase color-white <?php echo count($submenu)>0?'dropdown-toggle':'';?>" href="<?php echo $m->url; ?>" <?php echo count($submenu)>0?'data-toggle="dropdown"':'';?>><?php echo $m->title; ?></a>
                            <?php if(count($submenu)>0): ?>

                                <div class="dropdown-menu">
                                    <?php foreach($submenu as $su): ?>

                                        <a class="dropdown-item" href="<?php echo $su->url; ?>"><?php echo $su->title; ?></a>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
            </div>
        </nav>
