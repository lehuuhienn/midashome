<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Theme
 * @subpackage Theme
 * @since 1.0.0
 */

$dir = get_template_directory_uri()."/frontend/";

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="profile" href="https://gmpg.org/xfn/11" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <script>window.jQuery || document.write('<script src="<?php echo $dir;?>js/jquery.js"><\/script>')</script>
        <?php wp_head(); ?>
        
    </head>
    <body <?php body_class(); ?>>

        <script>sessionStorage.getItem("isFirstRun") || document.write('<div id="preloader"><div class="loading"></div></div>')</script>

        <div id="wrap-page">
            <section class="coming-soon">
                <div class="container">
                    <div class="well-center big">
                        <h1 class="big-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'themecustom' ); ?></h1>
                        <div class="des-page">
							<p><?php _e( 'It looks like nothing was found at this location.', 'themecustom' ); ?></p>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <?php wp_footer(); ?>

    </body>
</html>
