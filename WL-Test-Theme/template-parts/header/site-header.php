<?php
/**
 * Displays the site header.
 */
$site_url = get_site_url();
$phone_number = get_theme_mod( 'phone_number' );
$site_logo_id = get_theme_mod('custom_logo');
$site_logo = wp_get_attachment_image_src( $site_logo_id , 'full' );
$site_logo_url = $site_logo[0];
$site_name = get_bloginfo('name');
?>

<header class="header">
    <div class="container header__container">
        <div class="header__logo-wrapper">
            <?php if ( has_custom_logo() ) : ?>
                <a class="header__logo logo" href="<?= $site_url ?>">
                    <img class="header__logo-image logo-image" src="<?= $site_logo_url; ?>" alt="<?= $site_name; ?>">
                </a>
            <?php else : ?>
                <h1 class="header__site-name"><?= $site_name ?></h1>
            <?php endif; ?>
        </div>
        <!-- /.header__logo-wrapper -->

        <?php if($phone_number) : ?>
        <div class="header__phone-wrapper">
            <a class="header__phone phone" href="tel:<?= $phone_number; ?>"><?= $phone_number; ?></a>
        </div>
        <!-- /.header__phone-wrapper -->
        <?php endif; ?>
    </div>
    <!-- /.header__container -->
</header>
<!-- /.header -->