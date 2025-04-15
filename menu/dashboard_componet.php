<?php
$HTSV_candidate_count_entry = 5;
$HTSV_candidate_pagination = 1;
$HTSV_employer_count_entry = 5;
$HTSV_employer_pagination = 1;
if(isset($_GET["candidate_table_count"])){
	$HTSV_candidate_count_entry = $_GET["candidate_table_count"] ?: 5;
}
if(isset($_GET["candidate_pagination"])){
	$HTSV_candidate_pagination  = $_GET["candidate_pagination"] ?: 1;
}

if(isset($_GET["employer_table_count"])){
	$HTSV_employer_count_entry  = $_GET["employer_table_count"] ?: 5;
}

if(isset($_GET["employer_pagination"])){
	$HTSV_employer_pagination   = $_GET["employer_pagination"] ?: 1;
}


$parameter                  = $_SERVER['QUERY_STRING'];

$parameter_array_candidate  = explode( "candidate_pagination=", $parameter );
$current_url                = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
function create_delete_link_candidate( $param ) {
	return 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . "&candidate_table_delete=" . $param;
}

function create_delete_link_employer( $param ) {
	return 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . "&employer_table_delete=" . $param;
}
function create_featured_link_candidate( $param ) {
	return 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . "&candidate_table_featured=" . $param;
}

function create_featured_link_employer( $param ) {
	return 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . "&employer_table_featured=" . $param;
}

if ( isset( $_GET["generate_user_employer"] ) ) {
	$current_url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	$url_array   = explode( "&generate_user_employer", $current_url );
	$email       = generate_user_by_post_name_employer( $_GET["generate_user_employer"] );
	$post_id     = 0;
	foreach ( query_posts( 'post_type=employer' ) as $item ) {
		if ( get_post_meta( $item->ID, WP_JOB_BOARD_PRO_EMPLOYER_PREFIX . 'email' )[0] == $email ) {
			$post_id = $item->ID;
		}
	}
	$term_id = get_term_by( "slug", HTSV_get_current_user_location(), "employer_location" )->term_id;
	$ret     = wp_set_object_terms( $post_id, $term_id, 'employer_location', true );
	header( 'Location: ' . $url_array[0] );
}
if ( isset( $_GET["generate_user_candidate"] ) ) {
	$current_url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	$url_array   = explode( "&generate_user_candidate", $current_url );
	$email       = generate_user_by_post_name_candidate( $_GET["generate_user_candidate"] );
	$post_id     = 0;
	foreach ( query_posts( 'post_type=candidate' ) as $item ) {
		if ( get_post_meta( $item->ID, WP_JOB_BOARD_PRO_CANDIDATE_PREFIX . 'email' )[0] == $email ) {
			$post_id = $item->ID;
		}
	}
	$term_id = get_term_by( "slug", HTSV_get_current_user_location(), "candidate_location" )->term_id;
	$ret     = wp_set_object_terms( $post_id, $term_id, 'candidate_location', true );
	header( 'Location: ' . $url_array[0] );
}

if ( isset( $_GET["candidate_table_delete"] ) ) {
	$current_url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	$url_array   = explode( "&candidate_table_delete", $current_url );
	WP_Job_Board_Pro_User::process_delete_user( intval( $_GET["candidate_table_delete"] ), "" );
	header( 'Location: ' . $url_array[0] );

}
if ( isset( $_GET["employer_table_delete"] ) ) {
	$current_url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	$url_array   = explode( "&employer_table_delete", $current_url );
	WP_Job_Board_Pro_User::process_delete_user( intval( $_GET["employer_table_delete"] ), "" );
	header( 'Location: ' . $url_array[0] );

}
if ( isset( $_GET["candidate_table_featured"] ) ) {
	$current_url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	$url_array   = explode( "&candidate_table_featured", $current_url );
	$id       = WP_Job_Board_Pro_User::get_candidate_by_user_id( intval($_GET["candidate_table_featured"]) );
	$meta     = get_post_meta( $id );
	$featured = false;
	if ( isset( $meta["_candidate_featured"] ) ) {
		$featured = $meta["_candidate_featured"][0] == "on";
		HTSV_print($meta["_candidate_featured"][0]);
		HTSV_print($url_array[0]);
	}
	$featured_new_data      = ! $featured;
	$featured_new_data_text = $featured_new_data ? "on" : "off";
	update_post_meta( $id, "_candidate_featured", $featured_new_data_text );

	header( 'Location: ' . $url_array[0] );
	wp_die();

}
if ( isset( $_GET["employer_table_featured"] ) ) {
	$current_url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	$url_array   = explode( "&employer_table_featured", $current_url );
	$id       = WP_Job_Board_Pro_User::get_employer_by_user_id( intval($_GET["employer_table_featured"]) );
	$meta     = get_post_meta( $id );
	$featured = false;
	if ( isset( $meta["_employer_featured"] ) ) {
		$featured = $meta["_employer_featured"][0] == "on";
		HTSV_print($meta["_employer_featured"][0]);
		HTSV_print($url_array[0]);
	}
	$featured_new_data      = ! $featured;
	$featured_new_data_text = $featured_new_data ? "on" : "off";
	update_post_meta( $id, "_employer_featured", $featured_new_data_text );

	header( 'Location: ' . $url_array[0] );
	wp_die();

}
$candidate_list = [];
foreach ( WP_Job_Board_Pro_User::get_candidates() as $item ) {
	$post = get_post( $item );

	$meta     = get_post_meta( $item );
	$location = isset( get_the_terms( $item, "candidate_location" )[0] ) ? get_the_terms( $item, "candidate_location" )[0] : (object) [
		"name" => false,
		"slug" => false
	];
	if ( $location->slug ) {

		if ( $location->slug == HTSV_get_current_user_location() ) {
			$category = isset( get_the_terms( $item, "candidate_category" )[0] ) ? get_the_terms( $item, "candidate_category" )[0] : (object) [
				"name" => false,
				"slug" => false
			];

			$tag = get_the_terms( $item, "candidate_tag" ) !== null ? get_the_terms( $item, "candidate_tag" ) : false;
			array_push( $candidate_list, [
				"title"           => $post->post_title,
				"name"            => $post->post_name,
				"link"            => $post->guid,
				"user_id"         => $meta["_candidate_user_id"][0],
				"email"           => $meta["_candidate_email"][0],
				"approve_status"  => WP_Job_Board_Pro_User::get_user_status( $item ),
				"featured_status" => WP_Job_Board_Pro_Candidate::is_featured( $item ),
				"location"        => [
					"name" => $location->name,
					"slug" => $location->slug
				],
				"category"        => [
					"name" => $category->name,
					"slug" => $category->slug
				],
				"tag"             => $tag,
			] );
		}

	}


}
$employer_list = [];
foreach ( WP_Job_Board_Pro_User::get_employers() as $item ) {
	$post = get_post( $item );

	$meta     = get_post_meta( $item );
	$location = isset( get_the_terms( $item, "employer_location" )[0] ) ? get_the_terms( $item, "employer_location" )[0] : (object) [
		"name" => false,
		"slug" => false
	];
	$featured = false;
	if ( isset( $meta["_employer_featured"] ) ) {
		$featured = $meta["_employer_featured"][0] == "on";
	}
	if ( $location->slug ) {

		if ( $location->slug == HTSV_get_current_user_location() ) {
			$category = isset( get_the_terms( $item, "employer_category" )[0] ) ? get_the_terms( $item, "employer_category" )[0] : (object) [
				"name" => false,
				"slug" => false
			];


			array_push( $employer_list, [
				"title"           => $post->post_title,
				"name"            => $post->post_name,
				"link"            => $post->guid,
				"user_id"         => $meta["_employer_user_id"][0],
				"email"           => $meta["_employer_email"][0],
				"approve_status"  => WP_Job_Board_Pro_User::get_user_status( $item ),
				"featured_status" => $featured,
				"location"        => [
					"name" => $location->name,
					"slug" => $location->slug
				],
				"category"        => [
					"name" => $category->name,
					"slug" => $category->slug
				],

			] );
		}

	}


}


function generate_user_by_post_name_employer( $employer_name ) {

	$user_email = '';
	$post_obj   = get_page_by_title( $employer_name, OBJECT, 'employer' );
	if ( ! empty( $post_obj ) && ! empty( $post_obj->ID ) ) {

		$user_id = WP_Job_Board_Pro_User::get_user_by_employer_id( $post_obj->ID );

		if ( ! empty( $user_id ) ) {

		}
		$user_email = get_post_meta( $post_obj->ID, '_employer_email', true );
	}

	$username = sanitize_title( $employer_name );
	if ( username_exists( $username ) ) {
		$username .= '_' . rand( 10000, 99999 );

		if ( username_exists( $username ) ) {
			$username .= '_' . rand( 10000, 99999 );
		}
	}

	if ( empty( $user_email ) ) {
		$user_email = $username . '@fakeuser.com';
	}
	if ( email_exists( $user_email ) ) {
		$user_email = $username . '_' . rand( 10000, 99999 ) . '@fakeuser.com';

		if ( email_exists( $user_email ) ) {
			$user_email = $username . '_' . rand( 10000, 99999 ) . '_' . rand( 10000, 99999 ) . '@fakeuser.com';
		}
	}

	global $wp_job_board_pro_stop_process;
	$role = 'wp_job_board_pro_employer';
	if ( ! empty( $post_obj ) && ! empty( $post_obj->ID ) ) {
		$wp_job_board_pro_stop_process = $role;
	}

	$_POST['role'] = $role;

	$userdata = array(
		'user_login' => sanitize_user( $username ),
		'user_email' => sanitize_email( $user_email ),
		'user_pass'  => wp_generate_password( 12 ),
		'role'       => $role,
	);

	$user_id = wp_insert_user( $userdata );
	if ( ! is_wp_error( $user_id ) ) {
		if ( ! empty( $post_obj ) && ! empty( $post_obj->ID ) ) {

			update_user_meta( $user_id, 'employer_id', $post_obj->ID );

			update_post_meta( $post_obj->ID, WP_JOB_BOARD_PRO_EMPLOYER_PREFIX . 'user_id', $user_id );
			update_post_meta( $post_obj->ID, WP_JOB_BOARD_PRO_EMPLOYER_PREFIX . 'display_name', $employer_name );
			update_post_meta( $post_obj->ID, WP_JOB_BOARD_PRO_EMPLOYER_PREFIX . 'email', $user_email );
		}
		$wp_job_board_pro_stop_process = false;


	}
	$wp_job_board_pro_stop_process = false;

	return $user_email;
}

function generate_user_by_post_name_candidate( $candidate_name ) {

	$user_email = '';
	$post_obj   = get_page_by_title( $candidate_name, OBJECT, 'candidate' );
	if ( ! empty( $post_obj ) && ! empty( $post_obj->ID ) ) {

		$user_id = WP_Job_Board_Pro_User::get_user_by_candidate_id( $post_obj->ID );

		if ( ! empty( $user_id ) ) {

		}
		$user_email = get_post_meta( $post_obj->ID, '_candidate_email', true );
	}

	$username = sanitize_title( $candidate_name );
	if ( username_exists( $username ) ) {
		$username .= '_' . rand( 10000, 99999 );

		if ( username_exists( $username ) ) {
			$username .= '_' . rand( 10000, 99999 );
		}
	}

	if ( empty( $user_email ) ) {
		$user_email = $username . '@fakeuser.com';
	}
	if ( email_exists( $user_email ) ) {
		$user_email = $username . '_' . rand( 10000, 99999 ) . '@fakeuser.com';

		if ( email_exists( $user_email ) ) {
			$user_email = $username . '_' . rand( 10000, 99999 ) . '_' . rand( 10000, 99999 ) . '@fakeuser.com';
		}
	}

	global $wp_job_board_pro_stop_process;
	$role = 'wp_job_board_pro_candidate';
	if ( ! empty( $post_obj ) && ! empty( $post_obj->ID ) ) {
		$wp_job_board_pro_stop_process = $role;
	}

	$_POST['role'] = $role;

	$userdata = array(
		'user_login' => sanitize_user( $username ),
		'user_email' => sanitize_email( $user_email ),
		'user_pass'  => wp_generate_password( 12 ),
		'role'       => $role,
	);

	$user_id = wp_insert_user( $userdata );
	if ( ! is_wp_error( $user_id ) ) {
		if ( ! empty( $post_obj ) && ! empty( $post_obj->ID ) ) {

			update_user_meta( $user_id, 'candidate_id', $post_obj->ID );

			update_post_meta( $post_obj->ID, WP_JOB_BOARD_PRO_CANDIDATE_PREFIX . 'user_id', $user_id );
			update_post_meta( $post_obj->ID, WP_JOB_BOARD_PRO_CANDIDATE_PREFIX . 'display_name', $candidate_name );
			update_post_meta( $post_obj->ID, WP_JOB_BOARD_PRO_CANDIDATE_PREFIX . 'email', $user_email );
		}
		$wp_job_board_pro_stop_process = false;


	}
	$wp_job_board_pro_stop_process = false;

	return $user_email;
}

?>