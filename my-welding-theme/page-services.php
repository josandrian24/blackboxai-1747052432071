<?php
/**
 * Template Name: Services Page
 *
 * Custom template for the Services page.
 */

get_header();
?>

<main class="container mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold mb-8">Our Welding Services</h1>

    <div class="prose max-w-none mb-8">
        <?php
        while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
        ?>
    </div>

    <h2 class="text-2xl font-semibold mb-4">Services List</h2>
    <?php echo do_shortcode('[services_list]'); ?>
</main>

<?php get_footer(); ?>
