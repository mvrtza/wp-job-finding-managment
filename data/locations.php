<?php

function HTSV_get_current_user_location() {
	if(isset(get_user_meta( get_current_user_id(), "HTSV_province" )[0])){
		return get_user_meta( get_current_user_id(), "HTSV_province" )[0];
	}else{
		return false;
	}

}

function HTSV_add_user_location( $user_id, $province = "tehran" ) {
	return update_user_meta( $user_id, "HTSV_province", $province );
}

function HTSV_location_id_to_name( $id ) {

	return get_term( $id )->name;
}

function HTSV_location_name_to_id( $name ) {
	foreach ( HTSV_locations_term_raw_data() as $item ) {
		if ( $item == $name ) {
			return $item->term_id;
		}
	}
}

function HTSV_check_global(){
	return HTSV_get_current_user_location()=="IRAN";
}
function HTSV_province_get_request() {
	if ( isset( $_GET["province"] ) ) {
		return $_GET["province"];
	} else {
		return false;
	}

}

function HTSV_locations_term_raw_data() {
	global $wp;

	return get_terms( [
		'taxonomy' => "job_listing_location",
		'hide_empty' => false,
	] );
}

function HTSV_location_slugs() {
	return wp_list_pluck( HTSV_locations_term_raw_data(), 'slug' );

}

function HTSV_location_names() {
	return wp_list_pluck( HTSV_locations_term_raw_data(), 'name' );
}

function HTSV_location_slug_to_name( $slug ) {
	if($slug=="IRAN"){
		 return "ایران";
	}
	$slug_index = array_search( $slug, HTSV_location_slugs() );
	if ( $slug_index ) {
		$name_value = HTSV_location_names()[ $slug_index ];
		if ( $name_value ) {
			return $name_value;
		} else {
			return false;
		}
	} else {
		return false;
	}
}

function HTSV_location_name_to_slug( $name ) {
	$name_index = array_search( $name, HTSV_location_names() );
	if ( $name_index ) {
		$slug_value = HTSV_location_slugs()[ $name_index ];
		if ( $slug_value ) {
			return $slug_value;
		} else {
			return false;
		}
	} else {
		return false;
	}
}
//?taxonomy=job_listing_location&post_type=job_listing
//?taxonomy=employer_location&post_type=employer
//?taxonomy=candidate_location&post_type=candidate
$jobs_location = get_terms( array(
	'taxonomy' => 'job_listing_location',
	'hide_empty' => true,
) );
$employers_location = get_terms( array(
	'taxonomy' => 'employer_location',
	'hide_empty' => true,
) );
$candidates_location = get_terms( array(
	'taxonomy' => 'candidate_location',
	'hide_empty' => true,
) );

$location_list_in_persian = array_reverse( [
	"یزد",
	"همدان",
	"هرمزگان",
	"مرکزی",
	"مازندران",
	"لرستان",
	"گیلان",
	"گلستان",
	"کهگیلویه و بویراحمد",
	"کرمانشاه",
	"کرمان",
	"کردستان",
	"قم",
	"قزوین",
	"فارس",
	"سیستان و بلوچستان",
	"سمنان",
	"زنجان",
	"خوزستان",
	"خراسان شمالی",
	"خراسان رضوی",
	"خراسان جنوبی",
	"چهارمحال و بختیاری",
	"تهران",
	"بوشهر",
	"ایلام",
	"البرز",
	"اصفهان",
	"اردبیل",
	"آذربایجان غربی",
	"آذربایجان شرقی"
] );
$location_list_in_english = array_map('strtolower',[
	"Azerbaijan-Sharghi",
	"Azerbaijan-Gharbi",
	"Ardebil",
	"Isfahan",
	"Alborz",
	"Ilam",
	"Busher",
	"Tehran",
	"ChahrMahal-Bakhtiyari",
	"Khoorasan-Jonobi",
	"Khoorasan-Razavi",
	"Khoorasan-Shomali",
	"Khozestan",
	"Zanjan",
	"Semnan",
	"Sistan-Baluchestan",
	"Fars",
	"Qazvin",
	"Qom",
	"Kurdestan",
	"Kerman",
	"Kermanshah",
	"Kuhgolie-BoyrAhmad",
	"Golestan",
	"Gilan",
	"Lorestan",
	"Mazandaran",
	"Markazi",
	"Hormozgan",
	"Hamedan",
	"Yazd"
]);


for ( $i = 0; $i < count($location_list_in_english); $i ++ ) {
	$allow_to_add = true;
	foreach ($jobs_location as $job_item){
		if($job_item->slug==$location_list_in_english[$i]){
			$allow_to_add = false;
		}
	}
	$args = array(
		"slug" => $location_list_in_english[$i]
	);
	if($allow_to_add){
		wp_insert_term( $location_list_in_persian[$i],"job_listing_location",$args );
	}
}
for ( $i = 0; $i < count($location_list_in_english); $i ++ ) {
	$allow_to_add = true;
	foreach ($employers_location as $employer_item){
		if($employer_item->slug==$location_list_in_english[$i]){
			$allow_to_add = false;
		}
	}
	$args = array(
		"slug" => $location_list_in_english[$i]
	);
	if($allow_to_add){
		wp_insert_term( $location_list_in_persian[$i],"employer_location",$args );
	}
}
for ( $i = 0; $i < count($location_list_in_english); $i ++ ) {
	$allow_to_add = true;
	foreach ($candidates_location as $candidate_item){
		if($candidate_item->slug==$location_list_in_english[$i]){
			$allow_to_add = false;
		}
	}
	$args = array(
		"slug" => $location_list_in_english[$i]
	);
	if($allow_to_add){
		wp_insert_term( $location_list_in_persian[$i],"candidate_location",$args );
	}
}
foreach ($location_list_in_english as $user_location){
	// set username, password, and email address
	$username = 'province-'.$user_location;
	$password = $user_location;
	$email_address = $user_location.'@fa.com';

	if ( ! username_exists( $username ) ) {
		$user_id = wp_create_user( $username, $password, $email_address );
		add_user_meta($user_id,"HTSV_province",$user_location,true);
		$user = new WP_User( $user_id );
		// set the role (administrator, contributor, subscriber)
		$user->set_role( 'staff_member' );
	}

}
foreach ($location_list_in_english as $english_location){
	wp_create_category($english_location);
}


?>