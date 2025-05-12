<?php
/**
 * Template Name: Front Page
 *
 * A custom homepage template with hero image and company description.
 */

get_header();
?>

<section class="relative bg-gray-900 text-white">
    <div class="container mx-auto px-4 py-20 flex flex-col md:flex-row items-center">
        <div class="md:w-1/2 mb-10 md:mb-0">
            <h1 class="text-4xl font-extrabold mb-4">Welcome to Our Welding Service Company</h1>
            <p class="text-lg mb-6">Providing professional, reliable, and high-quality welding services for all your needs.</p>
            <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="inline-block bg-red-600 hover:bg-red-700 text-white font-semibold py-3 px-6 rounded shadow transition">Our Services</a>
        </div>
        <div class="md:w-1/2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-welding.jpg" alt="Welding Service Hero Image" class="rounded shadow-lg" />
        </div>
    </div>
</section>

<section class="container mx-auto px-4 py-12">
    <h2 class="text-3xl font-bold mb-6">About Us</h2>
    <p class="mb-4">We are a trusted welding company with years of experience delivering quality workmanship and excellent customer service. Our team is dedicated to meeting your welding needs with precision and professionalism.</p>
    <p>Our mission is to provide top-notch welding solutions that exceed client expectations and contribute to the success of their projects.</p>
</section>

<?php get_footer(); ?>
