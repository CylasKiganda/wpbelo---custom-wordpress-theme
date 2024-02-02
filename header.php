<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wpbelo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <?php wp_body_open(); ?>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloaderb" class="js-preloader" style="display:none">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->
    <div id="page" class="site">
        <div class="container" style="position: absolute; top: 0; bottom: 0; left: 0; right: 0">
            <div class="row belo-grid-row">
                <div class="col belo-grid"></div>
                <div class="col belo-grid"></div>
                <div class="col belo-grid"></div>
                <div class="col belo-grid"></div>
                <div class="col belo-grid-last"></div>
            </div>
        </div>
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'wpbelo' ); ?></a>

        <!-- ***** Header Area Start ***** -->
        <header id="masthead" class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s"
            data-wow-delay="0s">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="main-nav">

                            <!-- ***** Logo Start ***** -->
                            <a href="/" style="float:left;">

                                <div>
                                    <img width="523" height="124"
                                        src="<?php echo get_template_directory_uri() . '/belo-pack/assets/images/LOGO.SVG'?>"
                                        class="custom-logo" alt="wpbelo" decoding="async" fetchpriority="high">
                                </div>
                            </a>
                            <!-- ***** Logo End ***** -->
                            <!-- ***** Menu Start ***** -->
                            <?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
										'menu_class'        => 'nav',
									)
								);
								?>

                            <a class='menu-trigger'>
                                <span>Menu</span>
                            </a>
                            <!-- ***** Menu End ***** -->
                    </div>
                </div>
            </div>
        </header>