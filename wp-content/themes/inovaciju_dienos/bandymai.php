<?php /* Template Name: Bandymų stotele template */ ?>

<?php get_header('inner'); ?>
<section class="station-header">
    <p class="number"><?php the_field('stoteles-numeris'); ?></p>
    <h1>
        <?php if ( is_singular() ) {
            the_title( '<h1 class="entry-title">', '</h1>' );
        } else {
            the_title( '<h2 class="entry-title heading-size-1"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
        } ?>
    </h1>
</section>

