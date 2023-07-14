<?php
/**
 * Displays the site footer.
 */

$site_url = get_site_url();
$phone_number = get_theme_mod( 'phone_number' );
$site_logo_id = get_theme_mod('custom_logo');
$site_logo = wp_get_attachment_image_src( $site_logo_id , 'full' );
$site_logo_url = $site_logo[0];
$site_name = get_bloginfo('name');
?>
</main>

<footer class="footer">
    <div class="container footer__container">
        <div class="footer__logo-wrapper">
            <?php if ( has_custom_logo() ) : ?>
                <a class="footer__logo logo" href="<?= $site_url ?>">
                    <img class="footer__logo-image logo-image" src="<?= $site_logo_url; ?>" alt="<?= $site_name; ?>">
                </a>
            <?php else : ?>
                <h1 class="footer__site-name"><?= $site_name ?></h1>
            <?php endif; ?>
        </div>
        <!-- /.footer__logo-wrapper -->

        <?php if($phone_number) : ?>
            <div class="footer__phone-wrapper">
                <a class="footer__phone phone" href="tel:<?= $phone_number; ?>"><?= $phone_number; ?></a>
            </div>
            <!-- /.footer__phone-wrapper -->
        <?php endif; ?>
    </div>
    <!-- /.container -->
</footer>
<!-- /.footer -->

<?php wp_footer(); ?>