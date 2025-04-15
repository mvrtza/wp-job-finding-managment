<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta19
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en" dir="rtl">

<head>
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
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <!-- CSS files -->


    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: "IRANSans";
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }

        .form-imagecheck-figure:before {
            margin: 2px;
            padding: 9px;
            position: absolute;
            top: .25rem;
            left: .25rem;
            z-index: 1;
            display: block;
            width: 1rem;
            height: 1rem;
            color: #fff;
            pointer-events: none;
            content: "";
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background: var(--tblr-bg-forms);
            border: var(--tblr-border-width) var(--tblr-border-style) var(--tblr-border-color);
            border-radius: var(--tblr-border-radius);
            transition: opacity .3s;
        }
    </style>
</head>

<body>
<script src="./dist/js/demo-theme.min.js?1684106062"></script>
<div class="page">
    <!-- Navbar -->

    <header class="navbar-expand-md">
        <div class="collapse navbar-collapse" id="navbar-menu">
            <div class="navbar">
                <div class="container-xl">
                    <ul class="navbar-nav">
                        <li class="nav-item ">
                            <a class="nav-link"
                               href="<?php echo home_url() . "/wp-admin/admin.php?page=yamnetwork-manage" ?>">
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
                        <li class="nav-item active">
                            <a class="nav-link" href="">
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
                            <a class="nav-link" href="./form-elements.html">
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
                    تنظیمات
                  </span>
                            </a>
                        </li>


                    </ul>
                    <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last">
                        <form action="./" method="get" autocomplete="off" novalidate>
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

        <div class="page-wrapper">
            <!-- Page header -->
            <div class="page-header d-print-none">
                <div class="container-xl">
                    <div class="row g-2 align-items-center">
                        <div class="col">
                            <!-- Page pre-title -->
                            <div class="page-pretitle">

                            </div>
                            <h2 class="page-title">
                                تنظیمات اسلایدر
                            </h2>
                        </div>
                        <!-- Page title actions -->
                        <div class="col-auto ms-auto d-print-none">
                            <div class="btn-list">
                                <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                                   data-bs-target="#modal-team">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                         stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M12 5l0 14"/>
                                        <path d="M5 12l14 0"/>
                                    </svg>
                                    ساخت اسلاید
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
                    <div class="row g-4">
                        <script>
                            function change_status(id,status){
                                var form = document.createElement("form");
                                var element1 = document.createElement("input");
                                var element2 = document.createElement("input");

                                form.method = "POST";
                                form.action = "#";

                                element1.value=id;
                                element1.name="slider-id";
                                form.appendChild(element1);

                                element2.value=status;
                                element2.name="slider-status";
                                form.appendChild(element2);


                                document.body.appendChild(form);

                                form.submit();
                            }
                        </script>
                        <div class="col-12">
                            <div class="row row-cards">
								<?php
                                if(HTSV_table_get_province_slider()) {


	                                foreach ( HTSV_table_get_province_slider() as $item ) {
		                                $check_indicator = $item->status == 1 ? "checked" : "";
		                                echo '<div class="col-sm-6 col-lg-4">';
		                                echo '<div class="card card-sm">';
		                                echo '<label class="form-imagecheck">';
		                                echo '<input name="form-imagecheck" id="yamnetwork-' . $item->id . '" type="checkbox" yamnetworkid="' . $item->id . '" value="1"';
		                                echo 'class="form-imagecheck-input" ' . $check_indicator . '/>';
		                                echo '<span class="form-imagecheck-figure">';
		                                echo '<div class="content">';
		                                echo '<div class="content-overlay"></div>';
		                                echo '<img src="' . $item->picture . '" class="content-image" style="" alt="">';
		                                echo '<div class="content-details fadeIn-bottom">';
		                                echo '<h3 class="content-title">' . $item->name . '<a href="' . $item->link . '" class="ms-1"';
		                                echo 'aria-label="Open website"><!-- Download SVG icon from http://tabler-icons.io/i/link -->';
		                                echo '<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"';
		                                echo 'viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"';
		                                echo 'stroke-linecap="round" stroke-linejoin="round">';
		                                echo '<path stroke="none" d="M0 0h24v24H0z" fill="none"/>';
		                                echo '<path d="M9 15l6 -6"/>';
		                                echo '<path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464"/>';
		                                echo '<path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463"/>';
		                                echo '</svg>';
		                                echo '</a></h3>';
		                                echo '<p class="content-text">' . $item->link . '</p>';
		                                echo '</div>';
		                                echo '</div>';
		                                echo '</span>';
		                                echo '</label></a>';
		                                echo '<div class="card-body">';
		                                echo '<div class="d-flex align-items-center" style="';
		                                echo 'direction: rtl;';
		                                echo '">';
		                                echo '<div style="display: contents;">';
		                                echo '<div class="text-muted" style="padding-left:10px;"><a>';
		                                echo '<svg';
		                                echo ' xmlns="http://www.w3.org/2000/svg" width="24"';
		                                echo 'height="24" viewBox="0 0 24 24"';
		                                echo 'fill="none" stroke="currentColor" stroke-width="2"';
		                                echo 'stroke-linecap="round"';
		                                echo 'stroke-linejoin="round"';
		                                echo 'class="icon icon-tabler icons-tabler-outline icon-tabler-color-picker">';
		                                echo '<path stroke="none" d="M0 0h24v24H0z" fill="none"/>';
		                                echo '<path d="M11 7l6 6"/>';
		                                echo '<path d="M4 16l11.7 -11.7a1 1 0 0 1 1.4 0l2.6 2.6a1 1 0 0 1 0 1.4l-11.7 11.7h-4v-4z"/>';
		                                echo '</svg>';
		                                echo 'ویرایش';
		                                echo '</a>';
		                                echo '</div>';
		                                echo '<div class="text-muted" style="padding-left:10px;"><a style="color: rgb(220 121 121)">';
		                                echo '<svg xmlns="http://www.w3.org/2000/svg" width="24"';
		                                echo 'height="24" viewBox="0 0 24 24" fill="none"';
		                                echo 'stroke="rgb(220 121 121)" stroke-width="2"';
		                                echo 'stroke-linecap="round" stroke-linejoin="round"';
		                                echo 'class="icon icon-tabler icons-tabler-outline icon-tabler-trash">';
		                                echo '<path stroke="none" d="M0 0h24v24H0z" fill="none"/>';
		                                echo '<path d="M4 7l16 0"/>';
		                                echo '<path d="M10 11l0 6"/>';
		                                echo '<path d="M14 11l0 6"/>';
		                                echo '<path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"/>';
		                                echo '<path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"/>';
		                                echo '</svg>';
		                                echo 'حذف </a></div>';
		                                echo '</div>';
		                                echo '</div>';
		                                echo '</div>';
		                                echo '</div>';
		                                echo '</div>';
		                                echo "<script> document.getElementById('yamnetwork-" . $item->id . "').addEventListener('change', (event) => {if (event.currentTarget.checked) {change_status(" . $item->id . ",true)} else {change_status(" . $item->id . ",false);}})</script>";
	                                }
                                }
								?>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
           
        </div>
</div>
<!-- Libs JS -->
<!-- Tabler Core -->
<script src="./dist/js/tabler.min.js?1684106062" defer></script>
<script src="./dist/js/demo.min.js?1684106062" defer></script>
</body>
<style>
    @import url(https://fonts.googleapis.com/css?family=Raleway);


    .main-title {
        color: #2d2d2d;
        text-align: center;
        text-transform: capitalize;
        padding: 0.7em 0;
    }


    @media screen and (max-width: 640px) {
        .container {
            display: block;
            width: 100%;
        }
    }

    @media screen and (min-width: 900px) {
        .container {
            width: 33.33333%;
        }
    }

    .container .title {
        color: #1a1a1a;
        text-align: center;
        margin-bottom: 10px;
    }

    .content {
        position: relative;

        margin: auto;
        overflow: hidden;
    }

    .content .content-overlay {
        background: rgba(0, 0, 0, 0.7);
        position: absolute;
        height: 100%;
        width: 100%;
        left: 0;
        top: 0;
        bottom: 0;
        right: 0;
        opacity: 0;
        -webkit-transition: all 0.4s ease-in-out 0s;
        -moz-transition: all 0.4s ease-in-out 0s;
        transition: all 0.4s ease-in-out 0s;
    }

    .content:hover .content-overlay {
        opacity: 1;
    }

    .content-image {
        width: 100%;
        height: 100%;
    }

    .content-details {
        position: absolute;
        text-align: center;
        padding-left: 1em;
        padding-right: 1em;
        width: 100%;
        top: 50%;
        left: 50%;
        opacity: 0;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        -webkit-transition: all 0.3s ease-in-out 0s;
        -moz-transition: all 0.3s ease-in-out 0s;
        transition: all 0.3s ease-in-out 0s;
    }

    .content:hover .content-details {
        top: 50%;
        left: 50%;
        opacity: 1;
    }

    .content-details h3 {
        color: #fff;
        font-weight: 500;
        letter-spacing: 0.15em;
        margin-bottom: 0.5em;
        text-transform: uppercase;
    }

    .content-details p {
        color: #fff;
        font-size: 0.8em;
    }

    .fadeIn-bottom {
        top: 80%;
    }
</style>
<div class="modal modal-blur fade" id="modal-team" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">اضافه کردن اسلایدر جدید</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="#" id="yamnet-dashboard-identity-form" method="post" enctype="multipart/form-data">
                <div class="modal-body">

                    <div class="row mb-3 align-items-end">

                        <div class="col" style="margin-bottom: auto;">
                            <div style="
          margin-bottom: 23px;
      ">
                                <label class="form-label">تیتر</label>
                                <input type="text" name="name" class="form-control" id="yamnet-dashboard-identity-name"
                                       value="" placeholder="بهترین کارآفرین سال"/>
                            </div>
                            <div>
                                <label class="form-label">لینک</label>
                                <input type="text" name="link" class="form-control" id="yamnet-dashboard-identity-link"
                                       value="" placeholder="https://yamnetwork.ir"/>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="col-md-12">


                                <div class="col-auto avatar avatar-upload rounded" id="yamnet-dashboard-bg-preview">
                                    <div style="4display: inline-grid; ">


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


                            </div>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn me-auto" data-bs-dismiss="modal">بستن</button>
                    <input type="submit" class="btn btn-primary" data-bs-dismiss="modal" value="تایید">

                </div>
            </form>
        </div>
    </div>
</div>
<script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function() {
        new Dropzone("#dropzone-default")
    })
</script>
<script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function() {
        new Dropzone("#dropzone-multiple")
    })
</script>
<script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function() {
        new Dropzone("#dropzone-custom")
    })
</script>

<style>.dropzone {
        border: 0;
    }
    .card {
        position: relative;
        margin-top: 0;
        padding: 0;
        min-width: 255px;
        max-width: max-content;
        border: 1px solid #c3c4c7;
        box-shadow: 0 1px 1px rgba(0,0,0,.04);
        background: #fff;
        box-sizing: initial;
    }
    .avatar-upload {
        width: 271px;
        height: 148px;

    }
    .content {
        max-width: 50%;
        max-height: 180px;

    }
</style>

</html>