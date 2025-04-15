<?php
function HTSV_add_tag_for_post($post_id, $post){
	wp_set_post_categories($post_id,get_cat_ID(HTSV_get_current_user_location()));
}

add_action('save_post', 'HTSV_add_tag_for_post', 10, 2);
add_action('wp_insert_post', 'HTSV_add_tag_for_post', 10, 2);
add_action('edit_post', 'HTSV_add_tag_for_post', 10, 2);

?>