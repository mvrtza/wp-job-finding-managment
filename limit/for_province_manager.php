<?php
function HTSV_user_role() {
	if ( HTSV_check_user_role() ) {
		if(HTSV_check_limit()){
			if(HTSV_check_limit()!="slider"){
//				wp_redirect(home_url("wp-admin/admin.php?page=yamnetwork-".HTSV_check_limit()));
			}

		}
	}
}
HTSV_user_role();
function HTSV_check_user_role(){
	$user = wp_get_current_user();
	return in_array( 'staff_member', (array) $user->roles ) OR in_array( 'administrator', (array) $user->roles );
}

function HTSV_check_limit(){
	$current_url = home_url($_SERVER['REQUEST_URI']);
	if(!str_contains($current_url,"yamnetwork-manage")){
		if(str_contains($current_url,"yamnetwork-slider")){
			return "slider";
		}
		return "manage";
	}
	return  false;
}
?>