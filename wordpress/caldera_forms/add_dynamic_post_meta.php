/* this action saves custom fields to the newly created post.
*  we'll be using this to save dynamic fields' data
*/
add_action( 'cf_custom_fields_post_save_meta_key_to_post_type', 'get_discount_form_new_post_id', 10, 5 );
function get_discount_form_new_post_id( $value, $slug, $post_id, $field, $form ){

    //process discount form
    if ($form['ID'] == 'CF5ba8c05c3d2c3') {
        
        if ( isset( $_POST[ 'menu_0' ] ) && 0 < absint( $post_id ) )
        {
            $counter = 0;
            while(isset($_POST['menu_'.$counter])){
                update_post_meta( $post_id, 'menu_'.$counter, strip_tags( $_POST['menu_'.$counter]  ));
                update_post_meta( $post_id, 'product_'.$counter, strip_tags( $_POST['product_'.$counter]  ));
                $counter++;
            }
            $counter = 0;
        }

    }

    //prevent this action from being called multiple times
    remove_action('cf_custom_fields_post_save_meta_key_to_post_type','get_discount_form_new_post_id',10);
}
