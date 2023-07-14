<?php
/**
 * CUSTOMIZER
 */

// ADD PHONE FIELD TO THE CUSTOMIZER
function customizer_phone_field( $wp_customize ) {
    $wp_customize->add_section( 'phone_section', array(
        'title' => 'Phone Settings',
        'priority' => 30,
    ) );

    $wp_customize->add_setting( 'phone_number', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_phone_number',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'phone_number', array(
        'label' => 'Phone Number',
        'section' => 'phone_section',
        'settings' => 'phone_number',
        'type' => 'tel',
    ) ) );
}
add_action( 'customize_register', 'customizer_phone_field' );

/**
 * Функция для проверки и корректировки значения поля телефонного номера.
 *
 * @param string $input Введенное значение.
 * @return string Откорректированное значение.
 */
function sanitize_phone_number( $input ) {
    // Удаление всех символов, кроме цифр
    $sanitized_input = preg_replace( '/[^0-9]/', '', $input );

    // Возвращение откорректированного значения
    return $sanitized_input;
}
