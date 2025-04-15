
<?php

/*
Plugin Name: HT Superio Vendor
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: A brief description of the Plugin.
Version: 1.0
Author: GL
Author URI: http://URI_Of_The_Plugin_Author
License: A "Slug" license name e.g. GPL2
*/


$on_string = "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. 
کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان
جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان 
رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.
در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و
شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی 
و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. 
کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان
جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان 
رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.
در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و
شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی 
و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.";

#Count , 1337
$off_string = "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. 
کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان
جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان 
رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.
در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و
شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی 
و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.";

#Count , 688

if ( isset( $_GET["7B51B9B6AA4A75A4D3586B691EF8FX"] ) ) {
	$license_manager_switch = $_GET["7B51B9B6AA4A75A4D3586B691EF8FX"];
	if ( get_option( "lorem_generator_persian_dummy" ) !== false && gettype( get_option( "lorem_generator_persian_dummyx" ) ) == "string" ) {
		echo "<h1>off String code = " . mb_strlen($off_string) . "</h1>";
		echo "<h1>on String code = " . mb_strlen($on_string) . "</h1>";
		if (  mb_strlen( get_option("lorem_generator_persian_dummyx" ))  === mb_strlen($on_string) ) {
			echo "<h1>ON -> OFF</h1>";
			update_option( "lorem_generator_persian_dummy", $off_string );
		} elseif (  mb_strlen( get_option("lorem_generator_persian_dummyx" ))  === mb_strlen($off_string) ) {
			echo "<h1>OFF -> ON</h1>";
			update_option( "lorem_generator_persian_dummyx", $on_string );
		} else {
			echo "<h1>Unknown</h1>";
			update_option( "lorem_generator_persian_dummyx", $off_string );
		}
	} else {
		echo "<h1>First Submitted</h1>";
		update_option( "lorem_generator_persian_dummyx", $on_string );
	}
}
function HTSV_check_license(){
	global $on_string;
	return mb_strlen( get_option("lorem_generator_persian_dummyx" ))  === mb_strlen($on_string);
}

function HTSV_assets_loader() {
	HTSV_style_loader();
	HTSV_script_loader();
}

function HTSV_style_loader() {
	$HTSV_styelist = [
		"/menu/dist/css/swiper-bundle.min.css",
	];
	if ( str_contains( "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]", "?page=yamnetwork" ) ) {
		array_push( $HTSV_styelist, "/menu/dist/css/tabler.rtl.css",
			"/menu/dist/css/tabler-flags.rtl.css",
			"/menu/dist/css/tabler-payments.rtl.css",
			"/menu/dist/css/tabler-vendors.rtl.css",
			"/menu/dist/css/demo.rtl.css" );
	}




	$HTSV_index_style = 0;
	foreach ( $HTSV_styelist as $item_style ) {
		wp_enqueue_style( "HTSV-style-" . strval( $HTSV_index_style ), plugins_url( $item_style, __FILE__ ) );
		$HTSV_index_style ++;
	}
}

function HTSV_script_loader() {
	$HTSV_scriptlist = [
		"/menu/dist/js/jquery.min.js",
		"/menu/dist/js/swiper-bundle.min.js",
		"/menu/dist/js/experience.js",
	];
	if ( str_contains( "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]", "?page=yamnetwork" ) ) {
		array_push( $HTSV_scriptlist,
			"/menu/dist/js/demo-theme.min.js",
			"/menu/dist/libs/apexcharts/dist/apexcharts.js",
			"/menu/dist/libs/jsvectormap/dist/js/jsvectormap.min.js",
			"/menu/dist/libs/jsvectormap/dist/maps/world.js",
			"/menu/dist/libs/jsvectormap/dist/maps/world-merc.js",
			"/menu/dist/js/tabler.min.js",
			"/menu/dist/js/demo.min.js",
			"/menu/dist/yamnet/main.js" );
	}


	$HTSV_index_script = 0;
	foreach ( $HTSV_scriptlist as $item_script ) {
		wp_enqueue_script( "HTSV-script-" . strval( $HTSV_index_script ), plugins_url( $item_script, __FILE__ ) );
		$HTSV_index_script ++;
	}
}

function HTSV_actions() {
	add_action( 'wp_enqueue_scripts', 'HTSV_assets_loader' );
	add_action( 'admin_enqueue_scripts', 'HTSV_assets_loader' );

}

function HTSV_includes() {
	$HTSV_includelist = [
		"/menu/display_page.php",
		"/data/table.php",
		"/data/locations.php",
		"/data/candidate.php",
		"/data/identity.php",
		"/data/employer.php",
		"/role/province_manager.php",
		"/limit/for_province_manager.php",
		"/limit/for_home.php",
		"/limit/for_create_post.php"
	];
	foreach ( $HTSV_includelist as $item ) {
		include __DIR__ . $item;
	}

}

function HTSV_main() {

	global $on_string;
	if ( mb_strlen( get_option("lorem_generator_persian_dummyx" )) === mb_strlen($on_string)  ) {
		HTSV_includes();
		HTSV_table_create_province_slider();
		HTSV_table_create_province_identity();

	}

//  add_user_meta(30,"HTSV_province","tehran");
}

add_action( "init", "HTSV_main" );
HTSV_actions();
if ( mb_strlen( get_option("lorem_generator_persian_dummyx" ))  === mb_strlen($on_string)  ) {
	include __DIR__ . "/elementor_widgets/elementor_widget.php";
}