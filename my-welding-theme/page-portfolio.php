<?php
/**
 * Template Name: Portfolio Page
 *
 * Custom template for the Portfolio page.
 */

get_header();
?>

<main class="container mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold mb-8">Our Portfolio</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        <?php
        $portfolio_query = new WP_Query( array(
            'post_type' => 'portfolio',
            'posts_per_page' => -1,
            'post_status' => 'publish',
        ) );

        if ( $portfolio_query->have_posts() ) :
            while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post();
                ?>
                <div class="border rounded shadow hover:shadow-lg transition p-4">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail( 'medium', array( 'class' => 'rounded mb-4' ) ); ?>
                        </a>
                    <?php endif; ?>
                    <h2 class="text-xl font-semibold mb-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="prose">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>' . esc_html__( 'No portfolio items found.', 'my-welding-theme' ) . '</p>';
        endif;
        ?>
    </div>
</main>

<?php get_footer(); ?>
