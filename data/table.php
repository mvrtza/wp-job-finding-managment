<?php

function HTSV_table_create_province_identity() {
	global $wpdb;
	$HTSV_province_identity_table_name      = $wpdb->prefix . "htsv_province_identity";
	$charset_collate = $wpdb->get_charset_collate();
	$sql             = "CREATE TABLE IF NOT EXISTS $HTSV_province_identity_table_name (
  	id mediumint(9) NOT NULL AUTO_INCREMENT,
  	name text NOT NULL,
  	color text NOT NULL,
  	logo longblob NOT NULL,
  	province text NOT NULL,
  	PRIMARY KEY  (id)
	) $charset_collate";
	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );
}
function HTSV_table_create_province_slider() {
	global $wpdb;
	$HTSV_province_identity_table_name      = $wpdb->prefix . "htsv_province_slider";
	$charset_collate = $wpdb->get_charset_collate();
	$sql             = "CREATE TABLE IF NOT EXISTS $HTSV_province_identity_table_name (
  	id mediumint(9) NOT NULL AUTO_INCREMENT,
  	name text NOT NULL,
  	link text NOT NULL,
  	picture longblob NOT NULL,
  	province text NOT NULL,
    status tinyint NOT NULL,
  	PRIMARY KEY  (id)
	) $charset_collate";
	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );
}
function HTSV_table_get_province_slider(){
	global $wpdb;
	$HTSV_province_identity_table_name      = $wpdb->prefix . "htsv_province_slider";
	$results = $wpdb->get_results( "SELECT * FROM $HTSV_province_identity_table_name ". " WHERE province='".HTSV_get_current_user_location()."'" );
	if(!empty($results) && isset($results)){
		return $results;
	}else{
		return false;
	}
}
function HTSV_table_add_province_slider($name,$link,$picture){
	global $wpdb;
	$HTSV_province_identity_table_name      = $wpdb->prefix . "htsv_province_slider";
	$data=array(
		'name' => $name,
		'link' => $link,
		'picture' => $picture,
		'province' =>HTSV_get_current_user_location() ,
		'status' => false
	);
	$wpdb->insert( $HTSV_province_identity_table_name, $data);
}
function HTSV_table_delete_province_slider($id){
	global $wpdb;
	$HTSV_province_identity_table_name      = $wpdb->prefix . "htsv_province_slider";
	$wpdb->delete(
		$HTSV_province_identity_table_name,
		array(
			'ID' => $id,
		)
	);
}
function HTSV_table_get_identity_slider_by_province($province){

	global $wpdb;
	$HTSV_province_identity_table_name      = $wpdb->prefix . "htsv_province_slider";
	$results = $wpdb->get_results( "SELECT * FROM ".$HTSV_province_identity_table_name." WHERE province='".$province."'" );
	if( !empty($results) ){
		return $results;
	}else{
		return false;
	}
}

function HTSV_table_update_province_slider($id,$name,$link,$picture,$status){
	global $wpdb;
	$HTSV_province_identity_table_name      = $wpdb->prefix . "htsv_province_slider";
	$results = $wpdb->get_results( "SELECT * FROM $HTSV_province_identity_table_name ". " WHERE province='".HTSV_get_current_user_location()."' AND id=".$id );
	if(!empty($results) && isset($results)){
		HTSV_print($results);
		HTSV_print($status);
		$name = $name=="" ? $results[0]->name : $name;
		$link = $link=="" ? $results[0]->link : $link;
		$status = $status=="" ? $results[0]->status : $status;
		$picture = $picture=="" ? $results[0]->picture : $picture;
		HTSV_print($status);
		$wpdb->update(
			$HTSV_province_identity_table_name,
			array(
				'name' => $name,
				'link' => $link,
				'picture' => $picture,
				'province' =>HTSV_get_current_user_location() ,
				'status' => $status
			),
			array(
				'ID' => $results[0]->id,
			)
		);
	}
}

function HTSV_table_update_province_slider_status(  $id,$status) {

	HTSV_table_update_province_slider($id,"","","",$status);
}
function HTSV_table_get_province_identity(){
	global $wpdb;
	$HTSV_province_identity_table_name      = $wpdb->prefix . "htsv_province_identity";
	$results = $wpdb->get_results( "SELECT * FROM $HTSV_province_identity_table_name ". " WHERE province='".HTSV_get_current_user_location()."'" );
	if(!empty($results) && isset($results)){
		return $results[0];
	}else{
		return false;
	}
}
function HTSV_table_get_identity_by_province($province){
	global $wpdb;
	$HTSV_province_identity_table_name      = $wpdb->prefix . "htsv_province_identity";
	$results = $wpdb->get_results( "SELECT * FROM $HTSV_province_identity_table_name ". " WHERE province='".$province."'" );
	if(!empty($results) && isset($results)){
		return $results[0];
	}else{
		return false;
	}
}
function HTSV_table_set_province_identity($name,$color,$logo){
	global $wpdb;
	$HTSV_province_identity_table_name      = $wpdb->prefix . "htsv_province_identity";
	$results = $wpdb->get_results( "SELECT * FROM $HTSV_province_identity_table_name ". " WHERE province='".HTSV_get_current_user_location()."'" );
	if(!empty($results) && isset($results)){
		$name = $name=="" ? $results[0]->name : $name;
		$color = $color=="" ? $results[0]->color : $color;
		$logo = $logo=="" ? $results[0]->logo : $logo;
		$wpdb->update(
			$HTSV_province_identity_table_name,
			array(
				'name' => $name,
				'color' => $color,
				'logo' => $logo,
				'province' =>HTSV_get_current_user_location() ,
			),
			array(
				'ID' => $results[0]->id,
			)
		);
	}else{
		$data=array(
			'name' => $name,
			'color' => $color,
			'logo' => $logo,
			'province' =>HTSV_get_current_user_location() ,
		);

		$wpdb->insert( $HTSV_province_identity_table_name, $data);
	}

}
?>