<?php
/**
 * Template Name: User profile
 */


get_header();

$user_id = get_current_user_id();
$user_information = wp_get_current_user();
$user_meta = get_user_meta($user_id);
if ( isset( $user->roles ) && is_array( $user->roles ) ) {
    if ( in_array( 'administrator', $user->roles ) ) {
        // redirect them to the default place
        wp_redirect(admin_url());
    } elseif(in_array( 'subscriber', $user->roles )) {
        return home_url('user-profile');
    }
}else{
    wp_redirect(home_url());
}
echo '<pre>';
var_dump($user_information->roles);
var_dump($user_meta);
echo '</pre>';

get_footer();