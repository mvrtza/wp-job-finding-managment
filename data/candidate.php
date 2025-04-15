<?php
function HTSV_candidate_users(){
	$args = array(
		'role'    => 'wp_job_board_pro_candidate',
		'orderby' => 'user_nicename',
		'order'   => 'ASC'
	);
	return get_users( $args );
}
?>