<?php
/**
 * The header.
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php bloginfo( 'name' ); ?>"</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php get_template_part( 'template-parts/header/site-header' ); ?>
<!--    <b style="position: fixed; left:20px; top:140px; z-index:10; color:firebrick">-->
<!--        --><?php
//        global $template;
//        print_r(basename($template));
//        ?>
<!--    </b>-->
<main id="main" class="site-main">

