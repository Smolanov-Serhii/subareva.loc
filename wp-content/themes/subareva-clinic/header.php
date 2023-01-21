<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package subareva.clinic
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;900&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="page">
    <?php if ( is_page( array( '6') )) {
        ?>
        <script>
            window.onload = function () {
                document.body.classList.add('loaded_hiding');
                window.setTimeout(function () {
                    document.body.classList.add('loaded');
                    document.body.classList.remove('loaded_hiding');
                }, 500);
                AOS.init({
                    startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
                    initClassName: 'aos-init', // class applied after initialization
                    animatedClassName: 'aos-animate', // class applied on animation
                    useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
                    disableMutationObserver: false, // disables automatic mutations' detections (advanced)
                    debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
                    throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
                    // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
                    offset: 0, // offset (in px) from the original trigger point
                    delay: 0, // values from 0 to 3000, with step 50ms
                    duration: 700, // values from 0 to 3000, with step 50ms
                    easing: 'ease', // default easing for AOS animations
                    once: true, // whether animation should happen only once - while scrolling down
                    mirror: false, // whether elements should animate out while scrolling past them
                    anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

                });
            }
        </script>
        <?php
    } else {
        ?>
        <script>
            window.onload = function () {
                document.body.classList.add('loaded_hiding');
                window.setTimeout(function () {
                    document.body.classList.add('loaded');
                    document.body.classList.remove('loaded_hiding');
                }, 500);
                AOS.init({
                    startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
                    initClassName: 'aos-init', // class applied after initialization
                    animatedClassName: 'aos-animate', // class applied on animation
                    useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
                    disableMutationObserver: false, // disables automatic mutations' detections (advanced)
                    debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
                    throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
                    // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
                    offset: 80, // offset (in px) from the original trigger point
                    delay: 0, // values from 0 to 3000, with step 50ms
                    duration: 700, // values from 0 to 3000, with step 50ms
                    easing: 'ease', // default easing for AOS animations
                    once: true, // whether animation should happen only once - while scrolling down
                    mirror: false, // whether elements should animate out while scrolling past them
                    anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

                });
            }
        </script>
        <header id="masthead" class="site-header">
            <div class="site-branding">
                <?php
                the_custom_logo();
                if ( is_front_page() && is_home() ) :
                    ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php
                else :
                    ?>
                    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php
                endif;
                $subareva_clinic_description = get_bloginfo( 'description', 'display' );
                if ( $subareva_clinic_description || is_customize_preview() ) :
                    ?>
                    <p class="site-description"><?php echo $subareva_clinic_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
                <?php endif; ?>
            </div><!-- .site-branding -->

            <nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'subareva-clinic' ); ?></button>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                    )
                );
                ?>
            </nav><!-- #site-navigation -->
        </header><!-- #masthead -->
        <?php
    }?>
