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

        <script>window.jQuery || document.write('<script src="<?php the_frontend(); ?>vendor/jquery/jquery.1.12.4.min.js"><\/script>')</script>
        <?php wp_head(); ?>
        
    </head>

    <body <?php body_class(); ?>>

        <?php
            // if(has_nav_menu("header")){
            //     wp_nav_menu(array(
            //         'theme_location' => 'header',
            //         'menu_class' => 'menu-top',
            //         'container' => null,
            //     ));
            // }
        ?>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-midas">
            <a class="logo color-white" href="/">LOGO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav color-white">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle color-white" href="#"
                            id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            KIẾN TRÚC
                        </a>
                        <div class="dropdown-menu"
                            aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="product_1.html">NHÀ PHỐ BIỆT THỰ</a>
                            <a class="dropdown-item" href="#">CHUNG CƯ - CĂN HỘ</a>
                            <a class="dropdown-item" href="#">KHÁCH SẠN - NHÀ
                                NGHỈ</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle color-white" href="#"
                            id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            NỘI THẤT
                        </a>
                        <div class="dropdown-menu"
                            aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">NHÀ PHỐ BIỆT THỰ</a>
                            <a class="dropdown-item" href="#">CHUNG CƯ - CĂN HỘ</a>
                            <a class="dropdown-item" href="#">KHÁCH SẠN - NHÀ
                                NGHỈ</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle color-white" href="#"
                            id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            NGOẠI THẤT SÂN VƯỜN
                        </a>
                        <div class="dropdown-menu"
                            aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">NHÀ PHỐ BIỆT THỰ</a>
                            <a class="dropdown-item" href="#">CHUNG CƯ - CĂN HỘ</a>
                            <a class="dropdown-item" href="#">KHÁCH SẠN - NHÀ
                                NGHỈ</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle color-white" href="#"
                            id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            PHONG THỦY
                        </a>
                        <div class="dropdown-menu"
                            aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">NHÀ PHỐ BIỆT THỰ</a>
                            <a class="dropdown-item" href="#">CHUNG CƯ - CĂN HỘ</a>
                            <a class="dropdown-item" href="#">KHÁCH SẠN - NHÀ
                                NGHỈ</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle color-white" href="#"
                            id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            XÂY DỰNG
                        </a>
                        <div class="dropdown-menu"
                            aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">NHÀ PHỐ BIỆT THỰ</a>
                            <a class="dropdown-item" href="#">CHUNG CƯ - CĂN HỘ</a>
                            <a class="dropdown-item" href="#">KHÁCH SẠN - NHÀ
                                NGHỈ</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle color-white" href="#"
                            id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            MUA BÁN NHÀ ĐẤT
                        </a>
                        <div class="dropdown-menu"
                            aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">NHÀ PHỐ BIỆT THỰ</a>
                            <a class="dropdown-item" href="#">CHUNG CƯ - CĂN HỘ</a>
                            <a class="dropdown-item" href="#">KHÁCH SẠN - NHÀ
                                NGHỈ</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-white" href="product_1.html">DỰ
                            TOÁN-BÁO GIÁ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-white" href="news.html">TIN TỨC</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-white" href="contact.html">LIÊN
                            HỆ</a>
                    </li>
                </ul>
            </div>
        </nav>
