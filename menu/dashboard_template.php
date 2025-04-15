<?php
$users = get_users();
foreach ($users as $user){
    if(get_userdata($user->ID)->roles[0]=="administrator"){
	    add_user_meta($user->ID,"HTSV_province","iran",true);
    }

}
include __DIR__ . "/dashboard_componet.php";


?>
<!doctype html>
<script type='text/javascript'> document.body.className += ' folded';</script>


<script>  var current_url = "<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']?>";

    function enter_entry_candidate(un) {
        window.location.href = current_url + "&candidate_table_count=" + un;
    }

    function enter_entry_employer(un) {
        window.location.href = current_url + "&employer_table_count=" + un;
    }
</script>
<style>
    #toplevel_page_yamnetwork-manage {
        display: block !important;
    }

    #adminmenu li.menu-top {
        display: none;
        border: none;
        min-height: 34px;
        position: relative;
    }
</style>
<html lang="en" dir="rtl">
<head>


    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>داشبورد</title>
    <!-- CSS files -->


    <style>
        .card {
            max-width: none;
            padding: 0;
            margin: 0;
        }

        #dolly {
            display: none;
        }

        @import url('https://rsms.me/inter/inter.css');
        :root {
            --tblr-font-sans-serif: "IRANSans";
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>
<body>


<div class="page">
    <!-- Navbar -->

    <header class="navbar-expand-md">
        <div class="collapse navbar-collapse" id="navbar-menu">
            <div class="navbar">
                <div class="container-xl">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="..">
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                           stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                                  d="M5 12l-2 0l9 -9l9 9l-2 0"/><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"/><path
                                  d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"/></svg>
                    </span>
                                <span class="nav-link-title">
                      صفحه اصلی
                    </span>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link"
                               href="<?php echo home_url() . "/wp-admin/admin.php?page=yamnetwork-slider"; ?>">
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings-code"
                         width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="CurrentColor" fill="none"
                         stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                      <path d="M11.482 20.924a1.666 1.666 0 0 1 -1.157 -1.241a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.312 .318 1.644 1.794 .995 2.697"/>
                      <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"/>
                      <path d="M20 21l2 -2l-2 -2"/>
                      <path d="M17 17l-2 2l2 2"/>
                    </svg>
                  </span>
                                <span class="nav-link-title">
                    اسلایدر
                  </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=""
                            <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings-code"
                           width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="CurrentColor"
                           fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M11.482 20.924a1.666 1.666 0 0 1 -1.157 -1.241a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.312 .318 1.644 1.794 .995 2.697"/>
                        <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"/>
                        <path d="M20 21l2 -2l-2 -2"/>
                        <path d="M17 17l-2 2l2 2"/>
                      </svg>
                    </span>
                            <span class="nav-link-title">
                      تنظیمات
                    </span>
                            </a>
                        </li>


                    </ul>
                    <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last">
                        <form action=".." method="get" autocomplete="off" novalidate>
                            <div class="input-icon">
                    <span class="input-icon-addon">
                      <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                           stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                                  d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"/><path d="M21 21l-6 -6"/></svg>
                    </span>
                                <input type="text" value="" class="form-control" placeholder="جستجو..."
                                       aria-label="Search in website">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <!-- Page pre-title -->
                        <div class="page-pretitle">
                            داشبورد
                        </div>
                        <h2 class="page-title">

                            مدیریت  <?php  echo HTSV_get_current_user_location()=="IRAN" ? "کشور" : "استان" ?>:
							<?php echo HTSV_location_slug_to_name( HTSV_get_current_user_location() ) ?>
                        </h2>
                    </div>
                    <!-- Page title actions -->
                    <div class="col-auto ms-auto d-print-none">
                        <div class="btn-list">
                            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#modal-team">
                                هویت سایت
                            </a>
                            <a href="post-new.php" class="btn">
                                مطلب جدید
                            </a>
                            <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                               data-bs-target="#modal-report">
                                <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                     viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                     stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M12 5l0 14"/>
                                    <path d="M5 12l14 0"/>
                                </svg>
                                ثبت درخواست
                            </a>
                            <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal"
                               data-bs-target="#modal-report" aria-label="Create new report">
                                <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                     viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                     stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M12 5l0 14"/>
                                    <path d="M5 12l14 0"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page body -->
        <div class="page-body">
            <div class="container-xl">
                <div class="row row-deck row-cards">

                    <div class="col-12">
                        <div class="row row-cards">
                            <div class="col-sm-6 col-lg-6">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                            <span class="bg-primary text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                   viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                   stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"
                                                                                        fill="none"/><path
                                          d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2"/><path
                                          d="M12 3v3m0 12v3"/></svg>
                            </span>
                                            </div>
                                            <div class="col">
                                                <div class="font-weight-medium">
													<?php
													$query = "employer";
													if(!HTSV_check_global()){
														$query .= "&employer_location=".HTSV_get_current_user_location();
													}

													$the_query = new WP_Query( $query  );
													echo $the_query->found_posts;?>
                                                    مجموعه
                                                </div>
                                                <div class="text-muted">
                                                    بدون نیاز به تایید
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                            <span class="bg-green text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/shopping-cart -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                   viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                   stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"
                                                                                        fill="none"/><path
                                          d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"/><path
                                          d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"/><path d="M17 17h-11v-14h-2"/><path
                                          d="M6 5l14 1l-1 7h-13"/></svg>
                            </span>
                                            </div>
                                            <div class="col">
                                                <div class="font-weight-medium">
													<?php
                                                    $query = "candidate";
                                                    if(!HTSV_check_global()){
	                                                    $query .= "&candidate_location=".HTSV_get_current_user_location();
                                                    }

                                                    $the_query = new WP_Query( $query  );
													echo $the_query->found_posts;

                                                    ?>
                                                    کنشگر
                                                </div>
                                                <div class="text-muted">
                                                    بدون نیاز به تایید
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="row row-cards">
                            <div class="">

                            </div>

                        </div>
                    </div>

                    <div class="col-12 global-hidden">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">لیست مجموعه ها</h3>
                            </div>


                            <div class="card-body border-bottom py-3">
                                <div class="d-flex">
                                    <div class="text-muted">
                                        مشاهده
                                        <div class="mx-2 d-inline-block">
                                            <input type="number" class="form-control form-control-sm" id="entry_js"
                                                   value="<?php echo $HTSV_employer_count_entry ?>" size="3"
                                                   aria-label="Invoices count">
                                        </div>
                                        سطر
                                        <script>const form = document.querySelector('#entry_js');

                                            form.addEventListener('keypress', function (event) {
                                                if (event.keyCode === 13) {
                                                    enter_entry_employer(document.getElementById("entry_js").value)
                                                }
                                            });</script>
                                    </div>
                                    <input type="submit" class="button-primary" hidden>


                                    <div class="ms-auto text-muted">
                                        جستجو
                                        <div class="ms-2 d-inline-block">
                                            <input type="text" class="form-control form-control-sm"
                                                   aria-label="Search invoice">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table card-table table-vcenter text-nowrap datatable">
                                    <thead>
                                    <tr>
                                        <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox"
                                                               aria-label="Select all invoices"></th>
                                        <th class="w-1">کد کنشگر
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm icon-thick"
                                                 width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                 stroke="currentColor" fill="none" stroke-linecap="round"
                                                 stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <path d="M6 15l6 -6l6 6"/>
                                            </svg>
                                        </th>
                                        <th>کنشگر</th>
                                        <th>متولد</th>

                                        <th>حوزه</th>

                                        <th>وضعیت شاخص</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
									<?php
									function HTSV_table_pagination_employer( $param ) {
										$parameter                = $_SERVER['QUERY_STRING'];
										$parameter_array_employer = explode( "employer_pagination=", $parameter );

										if ( isset( $parameter_array_employer[0] ) ) {
											if ( isset( $parameter_array_employer[1] ) ) {
												return '?' . $parameter_array_employer[0] . "employer_pagination=" . $param;
											} else {
												return '?' . $parameter_array_employer[0] . "&employer_pagination=" . $param;
											}
										} else {
											return '?' . $parameter_array_employer[0] . "&employer_pagination=" . $param;
										}

									}

									$HTSV_employer_count_entry_counter = 0;
									$HTSV_employer_count               = count( $employer_list );
									$employer_chunked                  = array_chunk( $employer_list, $HTSV_employer_count_entry );
									if ( $HTSV_employer_count > 0 ) {
										foreach ( $employer_chunked[ $HTSV_employer_pagination - 1 ] as $item ) {

											if ( $HTSV_employer_count_entry > $HTSV_employer_count_entry_counter ) {
//! str_contains( get_permalink( $item->ID ), "?post_type" )

												$featured_indicator   = ! $item["featured_status"] ? 'danger' : 'success';
												$featured_text        = ! $item["featured_status"] ? 'غیرفعال' : 'فعال';
												$featured_action_text = ! $item["featured_status"] ? 'فعالسازی شاخص' : 'غیرفعالسازی شاخص';

												$location_text = ! $item["location"]["name"] ? "ناموجود" : $item["location"]["name"];
												$category_text = ! $item["category"]["name"] ? "ناموجود" : $item["category"]["name"];
												echo '<tr>';
												echo '<td><input class="form-check-input m-0 align-middle" type="checkbox"';
												echo 'aria-label="Select invoice"></td>';
												echo '<td><span class="text-muted">' . $item["user_id"] . '</span></td>';
												echo '<td><a href="' . $item["link"] . '" class="text-reset" tabindex="-1">' . $item["title"] . '</a>';
												echo '</td>';
												echo ' <td>';
												echo $location_text;
												echo '</td>';
												echo '<td>';
												echo $category_text;
												echo '</td>';

												echo '<td> ' . '<span class="badge bg-' . $featured_indicator . ' me-1"></span> ' . $featured_text . '</td>';
												echo '<td class="text-end">';
												echo '<span class="dropdown">';
												echo '<button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">اعمال</button>';
												echo '<div class="dropdown-menu dropdown-menu-end">';
												echo '<a class="dropdown-item" href="' . create_delete_link_employer( $item["user_id"] ) . '"> حذف</a>';

												echo '<a class="dropdown-item" href="' . create_featured_link_employer( $item["user_id"] ) . '"> ' . $featured_action_text;
												echo '</a>';
												echo '</div>';
												echo '</span>';
												echo '</td>';


												echo '</tr>';
												$HTSV_employer_count_entry_counter ++;
											} else {

											}
										}
									}
									?>

                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer d-flex align-items-center">
                                <p class="m-0 text-muted">تعداد <?php echo $HTSV_employer_count ?></p>
                                <ul class="pagination m-0 ms-auto">

									<?php $page = $HTSV_employer_pagination;

									for ( $counter_pagination_loop = 1; $counter_pagination_loop < ( $HTSV_employer_count / $HTSV_employer_count_entry ) + 1; $counter_pagination_loop ++ ) {
										$active_indicator = $page == $counter_pagination_loop ? "active" : "";
										$disabled_check   = $page == $counter_pagination_loop ? "disabled" : "";
										if ( $counter_pagination_loop == 1 ) {

											echo '<li class="page-item ' . $disabled_check . '">
                                        <a class="page-link" href="' . HTSV_table_pagination_employer( $page - 1 ) . '" tabindex="-1" aria-disabled="true">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                 stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <path d="M9 6l6 6l-6 6"/>
                                            </svg>
                                              قبل
                                        </a>
                                    </li>';
										}

										echo '<li class="page-item ' . $active_indicator . '" ><a class="page-link" href="' . HTSV_table_pagination_employer( $counter_pagination_loop ) . '">' . $counter_pagination_loop . '</a></li>';
										if ( $counter_pagination_loop == $HTSV_employer_count / $HTSV_employer_count_entry ) {
											echo '<li class="page-item ' . $disabled_check . '">
                                        <a class="page-link" href="' . HTSV_table_pagination_employer( $page + 1 ) . '" >
                                                                  بعد<!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                 stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <path d="M15 6l-6 6l6 6"/>
                                            </svg>
                                        </a>
                                    </li>';
										}
									}

									?>


                                </ul>
                            </div>
                        </div>
                    </div>

<?php if(HTSV_check_global()){echo "<style> .global-hidden{display:none !important;}</style>";}?>
                    <div class="col-12 global-hidden">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">لیست کنشگر ها</h3>
                            </div>


                            <div class="card-body border-bottom py-3">
                                <div class="d-flex">
                                    <div class="text-muted">
                                        مشاهده
                                        <div class="mx-2 d-inline-block">
                                            <input type="number" class="form-control form-control-sm" id="entry_js"
                                                   value="<?php echo $HTSV_candidate_count_entry ?>" size="3"
                                                   aria-label="Invoices count">
                                        </div>
                                        سطر
                                        <script>const form = document.querySelector('#entry_js');

                                            form.addEventListener('keypress', function (event) {
                                                if (event.keyCode === 13) {
                                                    enter_entry_candidate(document.getElementById("entry_js").value)
                                                }
                                            });</script>
                                    </div>
                                    <input type="submit" class="button-primary" hidden>


                                    <div class="ms-auto text-muted">
                                        جستجو
                                        <div class="ms-2 d-inline-block">
                                            <input type="text" class="form-control form-control-sm"
                                                   aria-label="Search invoice">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table card-table table-vcenter text-nowrap datatable">
                                    <thead>
                                    <tr>
                                        <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox"
                                                               aria-label="Select all invoices"></th>
                                        <th class="w-1">کد کنشگر
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm icon-thick"
                                                 width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                 stroke="currentColor" fill="none" stroke-linecap="round"
                                                 stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <path d="M6 15l6 -6l6 6"/>
                                            </svg>
                                        </th>
                                        <th>کنشگر</th>
                                        <th>متولد</th>

                                        <th>حوزه</th>

                                        <th>وضعیت شاخص</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
									<?php
									function HTSV_table_pagination_candidate( $param ) {
										$parameter                 = $_SERVER['QUERY_STRING'];
										$parameter_array_candidate = explode( "candidate_pagination=", $parameter );

										if ( isset( $parameter_array_candidate[0] ) ) {
											if ( isset( $parameter_array_candidate[1] ) ) {
												return '?' . $parameter_array_candidate[0] . "candidate_pagination=" . $param;
											} else {
												return '?' . $parameter_array_candidate[0] . "&candidate_pagination=" . $param;
											}
										} else {
											return '?' . $parameter_array_candidate[0] . "&candidate_pagination=" . $param;
										}

									}

									$HTSV_candidate_count_entry_counter = 0;
									$HTSV_candidate_count               = count( $candidate_list );
									$candidate_chunked                  = array_chunk( $candidate_list, $HTSV_candidate_count_entry );
                                    if( $HTSV_candidate_count > 0) {


	                                    foreach ( $candidate_chunked[ $HTSV_candidate_pagination - 1 ] as $item ) {

		                                    if ( $HTSV_candidate_count_entry > $HTSV_candidate_count_entry_counter && $HTSV_candidate_count > 0 ) {
//! str_contains( get_permalink( $item->ID ), "?post_type" )


			                                    $featured_indicator   = ! $item["featured_status"] ? 'danger' : 'success';
			                                    $featured_text        = ! $item["featured_status"] ? 'غیرفعال' : 'فعال';
			                                    $featured_action_text = ! $item["featured_status"] ? 'فعالسازی شاخص' : 'غیرفعالسازی شاخص';

			                                    $location_text = ! $item["location"]["name"] ? "ناموجود" : $item["location"]["name"];
			                                    $category_text = ! $item["category"]["name"] ? "ناموجود" : $item["category"]["name"];
			                                    echo '<tr>';
			                                    echo '<td><input class="form-check-input m-0 align-middle" type="checkbox"';
			                                    echo 'aria-label="Select invoice"></td>';
			                                    echo '<td><span class="text-muted">' . $item["user_id"] . '</span></td>';
			                                    echo '<td><a href="' . $item["link"] . '" class="text-reset" tabindex="-1">' . $item["title"] . '</a>';
			                                    echo '</td>';
			                                    echo ' <td>';
			                                    echo $location_text;
			                                    echo '</td>';
			                                    echo '<td>';
			                                    echo $category_text;
			                                    echo '</td>';

			                                    echo '<td> ' . '<span class="badge bg-' . $featured_indicator . ' me-1"></span> ' . $featured_text . '</td>';
			                                    echo '<td class="text-end">';
			                                    echo '<span class="dropdown">';
			                                    echo '<button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">اعمال</button>';
			                                    echo '<div class="dropdown-menu dropdown-menu-end">';
			                                    echo '<a class="dropdown-item" href="' . create_delete_link_candidate( $item["user_id"] ) . '"> حذف</a>';

			                                    echo '<a class="dropdown-item" href="' . create_featured_link_candidate( $item["user_id"] ) . '"> ' . $featured_action_text;
			                                    echo '</a>';
			                                    echo '</div>';
			                                    echo '</span>';
			                                    echo '</td>';


			                                    echo '</tr>';
			                                    $HTSV_candidate_count_entry_counter ++;
		                                    } else {

		                                    }
	                                    }
                                    }
									?>

                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer d-flex align-items-center">
                                <p class="m-0 text-muted">تعداد <?php echo $HTSV_candidate_count ?></p>
                                <ul class="pagination m-0 ms-auto">

									<?php $page = $HTSV_candidate_pagination;

									for ( $counter_pagination_loop = 1; $counter_pagination_loop < ( $HTSV_candidate_count / $HTSV_candidate_count_entry ) + 1; $counter_pagination_loop ++ ) {
										$active_indicator = $page == $counter_pagination_loop ? "active" : "";
										$disabled_check   = $page == $counter_pagination_loop ? "disabled" : "";
										if ( $counter_pagination_loop == 1 ) {

											echo '<li class="page-item ' . $disabled_check . '">
                                        <a class="page-link" href="' . HTSV_table_pagination_candidate( $page - 1 ) . '" tabindex="-1" aria-disabled="true">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                 stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <path d="M9 6l6 6l-6 6"/>
                                            </svg>
                                              قبل
                                        </a>
                                    </li>';
										}

										echo '<li class="page-item ' . $active_indicator . '" ><a class="page-link" href="' . HTSV_table_pagination_candidate( $counter_pagination_loop ) . '">' . $counter_pagination_loop . '</a></li>';
										if ( $counter_pagination_loop == $HTSV_candidate_count / $HTSV_candidate_count_entry ) {
											echo '<li class="page-item ' . $disabled_check . '">
                                        <a class="page-link" href="' . HTSV_table_pagination_candidate( $page + 1 ) . '" >
                                                                  بعد<!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                 stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <path d="M15 6l-6 6l6 6"/>
                                            </svg>
                                        </a>
                                    </li>';
										}
									}

									?>


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">ثبت درخواست</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">نام</label>
                    <input type="text" class="form-control" name="example-text-input" placeholder="نام کاربر وارد کنید"
                           id="yamnetwork-user-name">
                </div>
                <label class="form-label">نوع کاربر</label>
                <div class="form-selectgroup-boxes row mb-3">
                    <div class="col-lg-6">
                        <label class="form-selectgroup-item">
                            <input type="radio" name="report-type" value="1" class="form-selectgroup-input" checked
                                   id="yamnetwork-employer">
                            <span class="form-selectgroup-label d-flex align-items-center p-3">
                    <span class="me-3">
                      <span class="form-selectgroup-check"></span>
                    </span>
                    <span class="form-selectgroup-label-content">
                      <span class="form-selectgroup-title strong mb-1">مجموعه</span>
                      <span class="d-block text-muted"> درخواست کننده نیروکار</span>
                    </span>
                  </span>
                        </label>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-selectgroup-item">
                            <input type="radio" name="report-type" value="1" class="form-selectgroup-input"
                                   id="yamnetwork-candidate">
                            <span class="form-selectgroup-label d-flex align-items-center p-3">
                    <span class="me-3">
                      <span class="form-selectgroup-check"></span>
                    </span>
                    <span class="form-selectgroup-label-content">
                      <span class="form-selectgroup-title strong mb-1">کنشگر</span>
                      <span class="d-block text-muted">نیرو یابنده کار</span>
                    </span>
                  </span>
                        </label>
                    </div>
                </div>

            </div>

            <div class="modal-footer">
                <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                    لغو
                </a>
                <script>
                    window.addEventListener('load', function () {
                        document.getElementById("yamnetwork-create-user").addEventListener("click", function () {
                            if (document.getElementById("yamnetwork-user-name").value !== "") {
                                var name = document.getElementById("yamnetwork-user-name").value;
                                var type = document.getElementById("yamnetwork-employer").checked === true ? "employer" : "candidate"
                                console.log("<?php echo $current_url?>&generate_user_" + type + "=" + name)
                                window.location.href = "<?php echo $current_url?>&generate_user_" + type + "=" + name;
                            } else {
                                alert("لطفا فیلد به درستی وارد کنید")
                            }

                        })

                    })


                </script>
                <a href="#" class="btn btn-primary ms-auto" data-bs-dismiss="modal" id="yamnetwork-create-user">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                         stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                         stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M12 5l0 14"/>
                        <path d="M5 12l14 0"/>
                    </svg>
                    ثبت درخواست
                </a>
            </div>
        </div>
    </div>
</div>

<div class="modal modal-blur fade" id="modal-team" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="#" id="yamnet-dashboard-identity-form" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title">اطلاعات هویت سایت</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="row mb-3 align-items-end">
                        <div class="col-auto avatar avatar-upload rounded" id="yamnet-dashboard-bg-preview"
                             style="background-image:url('<?php if ( isset( HTSV_table_get_province_identity()->logo ) ) {
							     echo HTSV_table_get_province_identity()->logo;
						     } ?>');background-size: cover">
                            <div style="display: inline-grid; ">


                                <input type="file" name="image" id="yamnet-dashboard-upload"
                                       style=" 	width: 0.1px;
	height: 0.1px;
	opacity: 0;
	overflow: hidden;
	position: absolute;
	z-index: -1;">
                                <label for="yamnet-dashboard-upload" style="font-size: 33px;">+</label>


                            </div>
                        </div>
                        <div class="col">
                            <label class="form-label">نام مرکز</label>
                            <input type="text" name="name" class="form-control" id="yamnet-dashboard-identity-name"
                                   value="<?php if ( isset( HTSV_table_get_province_identity()->name ) ) {
								       echo HTSV_table_get_province_identity()->name;
							       } ?>"/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">رنگ بندی مرکز</label>
                        <div class="row g-2">

                            <div class="col-auto">
                                <label class="form-colorinput">
                                    <input name="color" type="radio" value="blue"
                                           class="form-colorinput-input" <?php if ( isset( HTSV_table_get_province_identity()->color ) ) {
										if ( HTSV_table_get_province_identity()->color == "blue" ) {
											echo "checked";
										}
									} ?>/>
                                    <span class="form-colorinput-color bg-blue"></span>
                                </label>
                            </div>
                            <div class="col-auto">
                                <label class="form-colorinput">
                                    <input name="color" type="radio" value="azure"
                                           class="form-colorinput-input" <?php if ( isset( HTSV_table_get_province_identity()->color ) ) {
										if ( HTSV_table_get_province_identity()->color == "azure" ) {
											echo "checked";
										}
									} ?>/>
                                    <span class="form-colorinput-color bg-azure"></span>
                                </label>
                            </div>
                            <div class="col-auto">
                                <label class="form-colorinput">
                                    <input name="color" type="radio" value="indigo"
                                           class="form-colorinput-input" <?php if ( isset( HTSV_table_get_province_identity()->color ) ) {
										if ( HTSV_table_get_province_identity()->color == "indigo" ) {
											echo "checked";
										}
									} ?>/>
                                    <span class="form-colorinput-color bg-indigo"></span>
                                </label>
                            </div>
                            <div class="col-auto">
                                <label class="form-colorinput">
                                    <input name="color" type="radio" value="purple"
                                           class="form-colorinput-input" <?php if ( isset( HTSV_table_get_province_identity()->color ) ) {
										if ( HTSV_table_get_province_identity()->color == "purple" ) {
											echo "checked";
										}
									} ?>/>
                                    <span class="form-colorinput-color bg-purple"></span>
                                </label>
                            </div>
                            <div class="col-auto">
                                <label class="form-colorinput">
                                    <input name="color" type="radio" value="pink"
                                           class="form-colorinput-input" <?php if ( isset( HTSV_table_get_province_identity()->color ) ) {
										if ( HTSV_table_get_province_identity()->color == "pink" ) {
											echo "checked";
										}
									} ?>/>
                                    <span class="form-colorinput-color bg-pink"></span>
                                </label>
                            </div>
                            <div class="col-auto">
                                <label class="form-colorinput">
                                    <input name="color" type="radio" value="red"
                                           class="form-colorinput-input" <?php if ( isset( HTSV_table_get_province_identity()->color ) ) {
										if ( HTSV_table_get_province_identity()->color == "red" ) {
											echo "checked";
										}
									} ?>/>
                                    <span class="form-colorinput-color bg-red"></span>
                                </label>
                            </div>
                            <div class="col-auto">
                                <label class="form-colorinput">
                                    <input name="color" type="radio" value="orange"
                                           class="form-colorinput-input" <?php if ( isset( HTSV_table_get_province_identity()->color ) ) {
										if ( HTSV_table_get_province_identity()->color == "orange" ) {
											echo "checked";
										}
									} ?>/>
                                    <span class="form-colorinput-color bg-orange"></span>
                                </label>
                            </div>
                            <div class="col-auto">
                                <label class="form-colorinput">
                                    <input name="color" type="radio" value="yellow"
                                           class="form-colorinput-input" <?php if ( isset( HTSV_table_get_province_identity()->color ) ) {
										if ( HTSV_table_get_province_identity()->color == "yellow" ) {
											echo "checked";
										}
									} ?>/>
                                    <span class="form-colorinput-color bg-yellow"></span>
                                </label>
                            </div>
                            <div class="col-auto">
                                <label class="form-colorinput">
                                    <input name="color" type="radio" value="lime"
                                           class="form-colorinput-input" <?php if ( isset( HTSV_table_get_province_identity()->color ) ) {
										if ( HTSV_table_get_province_identity()->color == "lime" ) {
											echo "checked";
										}
									} ?>/>
                                    <span class="form-colorinput-color bg-lime"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="form-label">اطلاعات مورد نیاز</label>
                        <textarea class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn me-auto" data-bs-dismiss="modal">بستن</button>
                    <input type="submit" class="btn btn-primary" data-bs-dismiss="modal"
                           id="yamnet-dashboard-identity-submit" value="بروزرسانی هویت">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>