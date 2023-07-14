<?php
/**
 * The single page template file
 */

$post_id = get_the_ID();
$post_title = get_the_title() ?? 'Empty title';
$image_id = get_post_thumbnail_id($post_id);
$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);

$taxonomy_country = 'car_country';
$country_terms = wp_get_post_terms($post_id, $taxonomy_country);

foreach ($country_terms as $term) {
    $country_name = $term->name;
    break;
}

$taxonomy_brand = 'car_brand';
$brand_terms = wp_get_post_terms($post_id, $taxonomy_brand);

foreach ($brand_terms as $term) {
    $brand_name = $term->name;
    break;
}

$meta_array = array();
$meta_fields = get_post_meta($post_id);

foreach ($meta_fields as $key => $value) {
    $meta_array[$key] = $value[0];
}
$color = $meta_array['_car_color'];
$fuel = $meta_array['_car_fuel'];
$power = $meta_array['_car_power'];
$price = $meta_array['_car_price'];

get_header();
?>
    <section class="content">
        <div class="content__hero">
           <div class="container">
               <?php if ($post_title) : ?>
                   <h1 class="content__hero-title"><?= $post_title; ?></h1>
               <?php endif; ?>

               <div class="content__hero-description">
                   <?php the_content(); ?>
               </div>
               <!-- /.content__hero-description -->
           </div>
           <!-- /.container -->
        </div>
        <!-- /.content__hero -->
        <div class="container-fluid">
            <div class="content__car-image-wrapper">
                <?= wp_get_attachment_image($image_id, 'full', '', array('alt' => $image_alt, 'class' => 'content__car-image')) ?>
            </div>
            <!-- /.content__image-wrapper -->
        </div>

        <div class="content__car-info-wrapper">
            <div class="container">
                <h2 class="content__car-info-title"><?= __('Specifications') ?></h2>

               <div class="content__car-info-details">
                   <div class="content__car-country-wrapper content__car-info-details-item">
                       <p class="content__car-country"><?= __('Country:') ?> <?= $country_name ?? 'Empty country name'; ?></p>
                   </div>
                   <!-- /.content__car-country-wrapper -->


                   <div class="content__car-brand-wrapper content__car-info-details-item">
                       <p class="content__car-brand"><?= __('Brand:') ?> <?= $brand_name ?? 'Empty brand name'; ?></p>
                   </div>
                   <!-- /.content__car-country-wrapper -->

                   <div class="content__car-color-wrapper content__car-info-details-item">
                       <p class="content__car-color">
                           <?= __('Color: ') ?>
                           <span style="display: block; width: 40px; height: 20px; background-color: <?= $color; ?>"></span>
                       </p>
                   </div>
                   <!-- /.content__car-color-wrapper -->

                   <div class="content__car-fuel-wrapper content__car-info-details-item">
                       <p class="content__car-fuel"><?= __('Fuel: ') ?> <?= $fuel ?? 'Empty fuel field'; ?></p>
                   </div>
                   <!-- /.content__car-fuel-wrapper -->


                   <div class="content__car-power-wrapper content__car-info-details-item">
                       <p class="content__car-power"><?= __('Power: ') ?> <?= $power ?? 'Empty power field'; ?> <?= __('HP') ?></p>
                   </div>
                   <!-- /.content__car-power-wrapper -->


                   <div class="content__car-price-wrapper content__car-info-details-item">
                       <p class="content__car-price"><?= __('Price in $: ') ?><?= $price ?? 'Empty price field'; ?></p>
                   </div>
                   <!-- /.content__car-price-wrapper -->
               </div>
               <!-- /.content__car-info-details -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.content__car-info-wrapper -->
    </section>
<?php
get_footer();

