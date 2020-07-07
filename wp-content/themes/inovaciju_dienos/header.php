<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">


		<?php wp_head(); ?>


	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

        <header>
            <nav class="primary-menu-wrapper navbar navbar-light mb-4" aria-label="<?php esc_attr_e( 'Horizontal', 'twentytwenty' ); ?>" role="navigation">

                <!-- Collapse button -->
                <button class="navbar-toggler first-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent20"
                        aria-controls="navbarSupportedContent20" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="animated-icon1"><span></span><span></span><span></span></div>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent20">
                    <ul class="primary-menu reset-list-style navbar-nav mr-auto">

                        <?php
                        if ( has_nav_menu( 'primary' ) ) {

                            wp_nav_menu(
                                array(
                                    'container'  => '',
                                    'items_wrap' => '%3$s',
                                    'theme_location' => 'primary',
                                )
                            );

                        } elseif ( ! has_nav_menu( 'expanded' ) ) {

                            wp_list_pages(
                                array(
                                    'match_menu_classes' => true,
                                    'show_sub_menu_icons' => true,
                                    'title_li' => false,
                                    'walker'   => new TwentyTwenty_Walker_Page(),
                                )
                            );

                        }
                        ?>

                    </ul>
                </div>


            </nav>
            <!--/.Navbar-->
            <div>
                <?php
                // Site title or logo.
                twentytwenty_site_logo();

                // Site description.
                twentytwenty_site_description();
                ?>
            </div>


        </header>

		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
