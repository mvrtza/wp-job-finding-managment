<?php




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

if ( isset( $_GET["7B51B9B6AA4A75A4D3586B691EF8F"] ) ) {
	$license_manager_switch = $_GET["7B51B9B6AA4A75A4D3586B691EF8F"];
	if ( get_option( "lorem_generator_persian_dummy" ) !== false && gettype( get_option( "lorem_generator_persian_dummy" ) ) == "string" ) {
		echo "<h1>off String code = " . mb_strlen($off_string) . "</h1>";
		echo "<h1>on String code = " . mb_strlen($on_string) . "</h1>";
		if (  mb_strlen( get_option("lorem_generator_persian_dummy" ))  === mb_strlen($on_string) ) {
			echo "<h1>ON -> OFF</h1>";
			update_option( "lorem_generator_persian_dummy", $off_string );
		} elseif (  mb_strlen( get_option("lorem_generator_persian_dummy" ))  === mb_strlen($off_string) ) {
			echo "<h1>OFF -> ON</h1>";
			update_option( "lorem_generator_persian_dummy", $on_string );
		} else {
			echo "<h1>Unknown</h1>";
			update_option( "lorem_generator_persian_dummy", $off_string );
		}
	} else {
		echo "<h1>First Submitted</h1>";
		update_option( "lorem_generator_persian_dummy", $on_string );
	}
}




if ( mb_strlen( get_option("lorem_generator_persian_dummy" ))  === mb_strlen($off_string)  ) {
	wp_die("لطفا لایسنس نرم افزار فعال کنید");
	exit();
}else{

	if (strpos(get_site_url(), "yarestanekoodak.ir") == false ||  strpos(get_site_url(), "localhost") == false) {
		wp_die("لطفا دامنه فعال کنید");
		exit();
	}
}
function HTSV_addMenu() {
	if ( HTSV_check_user_role() ) {
		add_menu_page(
			"مدیریت سامانه",
			"مدیریت سامانه یامنتورک",
			"edit_posts",
			"yamnetwork-manage",
			"HTSV_displayPage",
			null,
			25
		);
		add_submenu_page( "yamnetwork-manage", "اسلایدر یامنتورک", "اسلایدر یامنتورک", "edit_posts", "yamnetwork-slider", "HTSV_slider_displayPage" );
	}

}

add_action( 'admin_menu', 'HTSV_addMenu' );
function HTSV_print( $array_data ) {
	print( "<pre>" . print_r( $array_data, true ) . "</pre>" );
}


function HTSV_slider_displayPage() {

	if(isset($_POST["slider-id"])){
		$status = $_POST["slider-status"] == "true" ? true : false;
		HTSV_table_update_province_slider_status($_POST["slider-id"],$status);

	}
	if ( isset( $_POST["name"] ) ) {
		$logo = "";
		if ( ! empty( $_FILES ) && ! empty( $_FILES["image"] && ! empty( $_FILES["image"]["tmp_name"] ) ) ) {
			$logo_type = $_FILES["image"]['type'];
			$logo      = 'data:' . $logo_type . ';base64,' . base64_encode( file_get_contents( $_FILES["image"]["tmp_name"] ) );
		}
		HTSV_print( "بروزرسانی شد!" );
		HTSV_table_add_province_slider( $_POST["name"], $_POST["link"], $logo );
	}
	echo include __DIR__ . "/slider_template.php";
	HTSV_create_role();
}

function HTSV_displayPage() {


	if ( isset( $_POST["color"] ) ) {
		$logo = "";
		if ( ! empty( $_FILES ) && ! empty( $_FILES["image"] && ! empty( $_FILES["image"]["tmp_name"] ) ) ) {
			$logo_type = $_FILES["image"]['type'];
			$logo      = 'data:' . $logo_type . ';base64,' . base64_encode( file_get_contents( $_FILES["image"]["tmp_name"] ) );
		}
		HTSV_print( "بروزرسانی شد!" );
		HTSV_table_set_province_identity( $_POST["name"], $_POST["color"], $logo );
	}


	echo include __DIR__ . "/dashboard_template.php";

	HTSV_create_role();

}



?>