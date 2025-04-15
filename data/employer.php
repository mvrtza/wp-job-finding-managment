<?php
function HTSV_employer_users(){
	$args = array(
		'role'    => 'wp_job_board_pro_employer',
		'orderby' => 'user_nicename',
		'order'   => 'ASC'
	);
	return get_users( $args );
}
?>