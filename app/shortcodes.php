<?php
// Shortcodes

function company(){
    $company = get_field('company', 'options');
    return $company;
}
add_shortcode('company', 'company');

function phone(){
    $phone = get_field('phone', 'options');
    return $phone;
}
add_shortcode('phone', 'phone');

function email(){
    $email = get_field('email', 'options');
    return $email;
}
add_shortcode('email', 'email');

function year(){
    $year = date('Y');
    return $year;
}
add_shortcode('year', 'year');
