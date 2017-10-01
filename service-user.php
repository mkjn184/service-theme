<?php
/**
 * Plugin Name: Service Users
 */
add_action( 'register_form', 'ssw_registration_form' );
function ssw_registration_form(){
    ?>
    <p>
        <label for="membership">
            Membership:
            <br>
            <select name="membership" class="input" id="membership">
                <option value="free">Free</option>
                <option value="silver">Silver</option>
                <option value="gold">Gold</option>
                <option value="diamond">Diamond</option>
            </select>
        </label>
    </p>
    <?php
}
add_action( 'user_register', 'ssw_user_register' );
function ssw_user_register( $user_id ) {
    if ( ! empty( $_POST['membership'] ) ) {
        update_user_meta( $user_id, 'membership', trim( $_POST['membership'] ) );
    }
}
function ssw_user_login_redirect( $redirect_to, $request, $user ) {
    //is there a user to check?
    if ( isset( $user->roles ) && is_array( $user->roles ) ) {
        //check for admins
        if ( in_array( 'administrator', $user->roles ) ) {
            // redirect them to the default place
            return $redirect_to;
        } else {
            return home_url('service-user');
        }
    } else {
        return $redirect_to;
    }
}
add_filter( 'login_redirect', 'ssw_user_login_redirect', 10, 3 );