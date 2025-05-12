<?php get_header(); ?>

<main class="container mx-auto px-4 py-8">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_title( '<h1 class="text-3xl font-bold mb-4">', '</h1>' );
            the_content();
        endwhile;
    else :
        echo '<p>' . esc_html__( 'No content found.', 'my-welding-theme' ) . '</p>';
    endif;
    ?>
</main>

<?php get_footer(); ?>
