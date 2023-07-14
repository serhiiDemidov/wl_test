<?php
/**
 * CUSTOM METABOXES
 */

// Добавление метаполей для типа записи "Car"
function add_car_meta_boxes() {
    add_meta_box( 'car_color', 'Color', 'car_color_callback', 'car', 'side', 'low' );
    add_meta_box( 'car_fuel', 'Fuel', 'car_fuel_callback', 'car', 'side', 'low' );
    add_meta_box( 'car_power', 'Power HP', 'car_power_callback', 'car', 'side', 'low' );
    add_meta_box( 'car_price', 'Price', 'car_price_callback', 'car', 'side', 'low' );
}
add_action( 'add_meta_boxes', 'add_car_meta_boxes' );

// METABOX COLOR
function car_color_callback( $post ) {
    $value = get_post_meta( $post->ID, '_car_color', true );
    ?>
    <label for="car_color"><?= __('Select color:', 'wl-test-theme') ?></label>
    <input type="text" name="car_color" id="car_color" value="<?= esc_attr( $value ); ?>" class="color-field">
    <?php
}

// METABOX FUEL
function car_fuel_callback( $post ) {
    $value = get_post_meta( $post->ID, '_car_fuel', true );
    ?>
    <label for="car_fuel"><?= __('Fuel type:', 'wl-test-theme') ?></label>
    <select name="car_fuel" id="car_fuel">
        <option value="petrol" <?php selected( $value, 'petrol' ); ?>>Petrol</option>
        <option value="diesel" <?php selected( $value, 'diesel' ); ?>>Diesel</option>
        <option value="electric" <?php selected( $value, 'electric' ); ?>>Electricity</option>
    </select>
    <?php
}

// METABOX HP
function car_power_callback( $post ) {
    $value = get_post_meta( $post->ID, '_car_power', true );
    ?>
    <label for="car_power"><?= __('Power hp:', 'wl-test-theme') ?></label>
    <input type="number" name="car_power" id="car_power" value="<?= esc_attr( $value ); ?>" min="0">
    <?php
}

// METABOX PRICE
function car_price_callback( $post ) {
    $value = get_post_meta( $post->ID, '_car_price', true );
    ?>
    <label for="car_price"><?= __('Введите цену:', 'wl-test-theme') ?></label>
    <input type="number" name="car_price" id="car_price" value="<?= esc_attr( $value ); ?>" min="0">
    <?php
}

// SAVE METABOX DATA
function save_car_meta( $post_id ) {
    if ( isset( $_POST['car_color'] ) ) {
        update_post_meta( $post_id, '_car_color', sanitize_hex_color( $_POST['car_color'] ) );
    }
    if ( isset( $_POST['car_fuel'] ) ) {
        update_post_meta( $post_id, '_car_fuel', sanitize_text_field( $_POST['car_fuel'] ) );
    }
    if ( isset( $_POST['car_power'] ) ) {
        update_post_meta( $post_id, '_car_power', absint( $_POST['car_power'] ) );
    }
    if ( isset( $_POST['car_price'] ) ) {
        update_post_meta( $post_id, '_car_price', absint( $_POST['car_price'] ) );
    }
}
add_action( 'save_post_car', 'save_car_meta' );