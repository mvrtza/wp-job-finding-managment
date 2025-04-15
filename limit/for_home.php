<?php
function HTSV_homescreen_default_province(){
	if("https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"=="https://".explode("https://",home_url())[1]."/"){
		echo '<script>window.location.replace("'.home_url("?province=tehran").'");</script>';
		wp_redirect(home_url("?province=tehran"));
		wp_die();
	}
}
//HTSV_homescreen_default_province();


?>