<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<div class="header-inner section-inner">
    <div class="header-navigation-wrapper">

        <?php
        if ( has_nav_menu( 'primary' ) || ! has_nav_menu( 'expanded' ) ) {
            ?>

            <nav class="primary-menu-wrapper" aria-label="<?php esc_attr_e( 'Horizontal', 'twentytwenty' ); ?>" role="navigation">

                <ul class="primary-menu reset-list-style">

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

            </nav><!-- .primary-menu-wrapper -->

            <?php
        }

        if ( true === $enable_header_search || has_nav_menu( 'expanded' ) ) {
            ?>

            <div class="header-toggles hide-no-js">

                <?php
                if ( has_nav_menu( 'expanded' ) ) {
                    ?>

                    <div class="toggle-wrapper nav-toggle-wrapper has-expanded-menu">

                        <button class="toggle nav-toggle desktop-nav-toggle" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
                            <span class="dashicons dashicons-menu-alt"></span>
                        </button><!-- .nav-toggle -->

                    </div><!-- .nav-toggle-wrapper -->

                    <?php
                }

                if ( true === $enable_header_search ) {
                    ?>



                    <?php
                }
                ?>

            </div><!-- .header-toggles -->
            <?php
        }
        ?>

    </div>

</div>


<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php

	get_template_part( 'template-parts/entry-header' );

	if ( ! is_search() ) {
		get_template_part( 'template-parts/featured-image' );
	}

	?>

	<div class="post-inner <?php echo is_page_template( 'templates/template-full-width.php' ) ? '' : 'thin'; ?> ">

		<div class="entry-content">

			<?php
			if ( is_search() || ! is_singular() && 'summary' === get_theme_mod( 'blog_content', 'full' ) ) {
				the_excerpt();
			} else {
				the_content( __( 'Continue reading', 'twentytwenty' ) );
			}
			?>

		</div><!-- .entry-content -->

	</div><!-- .post-inner -->

	<div class="section-inner">
		<?php
		wp_link_pages(
			array(
				'before'      => '<nav class="post-nav-links bg-light-background" aria-label="' . esc_attr__( 'Page', 'twentytwenty' ) . '"><span class="label">' . __( 'Pages:', 'twentytwenty' ) . '</span>',
				'after'       => '</nav>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			)
		);

		edit_post_link();

		// Single bottom post meta.
		twentytwenty_the_post_meta( get_the_ID(), 'single-bottom' );

		if ( post_type_supports( get_post_type( get_the_ID() ), 'author' ) && is_single() ) {

			get_template_part( 'template-parts/entry-author-bio' );

		}
		?>

	</div><!-- .section-inner -->

	<?php

	if ( is_single() ) {

		get_template_part( 'template-parts/navigation' );

	}

	/**
	 *  Output comments wrapper if it's a post, or if comments are open,
	 * or if there's a comment number – and check for password.
	 * */

	?>

</article><!-- .post -->
