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
            <nav class="primary-menu-wrapper navbar navbar-light mb-4 d-inline" aria-label="<?php esc_attr_e( 'Horizontal', 'twentytwenty' ); ?>" role="navigation">

                <!-- Collapse button -->
                <button class="navbar-toggler first-button" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                        aria-controls="navbarSupportedContent20" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="animated-icon1"><span></span><span></span><span></span></div>
                </button>

                <div class="collapse navbar-collapse" id="basicExampleNav">
                    <ul class="d-flex primary-menu reset-list-style navbar-nav mr-auto">
                        <li class="row justify-content-md-center">
                            <a class="align-items-center nav-link" href="http://localhost:8888/wordpress/">
                                <svg class="d-inline" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" fill="#4E4E4E" viewBox="0 0 29.11 31.09">
                                    <title>maps_icon</title>
                                    <g id="Group_685" data-name="Group 685">
                                        <g id="Group_683" data-name="Group 683">
                                            <path id="Path_129" data-name="Path 129" d="M29,30.07l-4-7.92a.71.71,0,0,0-.63-.39H19.09q.26-.32.51-.66c3.06-4.09,4.62-7.94,4.62-11.44a9.66,9.66,0,0,0-19.32,0c0,3.5,1.56,7.35,4.62,11.44l.51.66H4.67a.69.69,0,0,0-.63.39l-4,7.92a.69.69,0,0,0,.3.94.73.73,0,0,0,.33.08h27.7a.7.7,0,0,0,.7-.71.82.82,0,0,0-.07-.31ZM1.86,29.68l3.25-6.5H11.2a32.51,32.51,0,0,0,2.89,3,.73.73,0,0,0,.94,0,37.09,37.09,0,0,0,2.89-3H24l3.25,6.5Zm4.46-20a8.24,8.24,0,0,1,16.48,0c0,4.61-3.11,9.24-5.7,12.3A.12.12,0,0,0,17,22c-1,1.21-1.95,2.14-2.48,2.65-.53-.51-1.45-1.44-2.48-2.65l-.16.14L12,22C9.43,18.9,6.32,14.27,6.32,9.66Z" transform="translate(0 0)" fill="#4e4e4e"/>
                                        </g>
                                        <g id="Group_684" data-name="Group 684">
                                            <path id="Path_130" data-name="Path 130" d="M14.56,5.94a3.68,3.68,0,1,0,3.67,3.68h0A3.68,3.68,0,0,0,14.56,5.94Zm0,5.93a2.26,2.26,0,1,1,2.26-2.26h0a2.26,2.26,0,0,1-2.26,2.26Z" transform="translate(0 0)" fill="#4e4e4e"/>
                                        </g>
                                    </g>
                                </svg>
                                <p class="align-self-baseline d-inline ml-4">Žemėlapis<span class="sr-only">(current)</span></p>
                            </a>
                        </li>
                        <li class="row justify-content-md-center" >
                            <a class="align-items-center nav-link " data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                <svg class="d-inline" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.08 23.17">
                                    <title>bandymai_icon</title>
                                    <g id="Group_686" data-name="Group 686">
                                        <path id="Path_131" data-name="Path 131" d="M30.38,21.76h-.29V.71A.7.7,0,0,0,29.4,0h-4a.71.71,0,0,0-.71.71V21.76H22.18V10.6a.71.71,0,0,0-.71-.71H17.52a.71.71,0,0,0-.71.71V21.76H14.27V6.64a.7.7,0,0,0-.7-.7h-4a.7.7,0,0,0-.71.69h0V21.76H6.36V16.53a.7.7,0,0,0-.7-.7h-4a.7.7,0,0,0-.7.7H1v5.23H.7a.7.7,0,0,0-.7.7H0a.7.7,0,0,0,.7.7H30.38a.7.7,0,0,0,.7-.7h0a.7.7,0,0,0-.69-.71Zm-25.44,0H2.4V17.24H4.94Zm7.91,0H10.31V7.35h2.54Zm7.92,0H18.23V11.31h2.54Zm5.37,0V1.42h2.54V21.76Z" transform="translate(0 0)" fill="#4e4e4e"/>
                                    </g>
                                </svg>
                                <p class="align-self-baseline d-inline ml-4">Bandymai<span class="sr-only">(current)</span></p>
                                <i class="fas fa-angle-down"></i>
                            </a>
                        </li>
                        <!-- Collapsible element -->
                        <div class="collapse mt-5" id="collapseExample">
                            <li class="row justify-content-md-center">
                                <a class="align-items-center nav-link" href="http://localhost:8888/wordpress/">
                                    <svg class="d-inline" width="5%" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36">
                                        <title>Number_1</title>
                                        <g id="Group_838" data-name="Group 838">
                                            <g id="Group_2" data-name="Group 2">
                                                <circle id="Ellipse_17" data-name="Ellipse 17" cx="18" cy="18" r="18" fill="#fca146"/>
                                            </g>
                                            <g id="Group_3" data-name="Group 3">
                                                <path id="Path_32" data-name="Path 32" d="M22.71,21v2.68h-9V21h3.14V14.3a2.51,2.51,0,0,1-.63.54,10.71,10.71,0,0,1-.94.52,7.83,7.83,0,0,1-1.05.4,3.51,3.51,0,0,1-1,.15V13.14a2.41,2.41,0,0,0,1-.25,8.21,8.21,0,0,0,1.13-.61,9.42,9.42,0,0,0,1-.7,2.22,2.22,0,0,0,.52-.54h3V21Z" fill="#fff"/>
                                            </g>
                                        </g>
                                    </svg>
                                    <p class="align-self-baseline d-inline ml-4">Žemėlapis<span class="sr-only">(current)</span></p>
                                </a>
                            </li>

                            <li class="row justify-content-md-center">
                                <a class="align-items-center nav-link" href="http://localhost:8888/wordpress/">
                                    <svg class="d-inline" width="5%" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36">
                                        <title>Number_1</title>
                                        <g id="Group_838" data-name="Group 838">
                                            <g id="Group_2" data-name="Group 2">
                                                <circle id="Ellipse_17" data-name="Ellipse 17" cx="18" cy="18" r="18" fill="#fca146"/>
                                            </g>
                                            <g id="Group_3" data-name="Group 3">
                                                <path id="Path_32" data-name="Path 32" d="M22.71,21v2.68h-9V21h3.14V14.3a2.51,2.51,0,0,1-.63.54,10.71,10.71,0,0,1-.94.52,7.83,7.83,0,0,1-1.05.4,3.51,3.51,0,0,1-1,.15V13.14a2.41,2.41,0,0,0,1-.25,8.21,8.21,0,0,0,1.13-.61,9.42,9.42,0,0,0,1-.7,2.22,2.22,0,0,0,.52-.54h3V21Z" fill="#fff"/>
                                            </g>
                                        </g>
                                    </svg>
                                    <p class="align-self-baseline d-inline ml-4">Žemėlapis<span class="sr-only">(current)</span></p>
                                </a>
                            </li>
                        </div>
                        <!-- / Collapsible element -->


                    </ul>
                </div>


            </nav>
            <!--/.Navbar-->
        </header>
        <div class="d-inline">
            <?php
            // Site title or logo.
            twentytwenty_site_logo();

            // Site description.
            twentytwenty_site_description();
            ?>
        </div>

		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
