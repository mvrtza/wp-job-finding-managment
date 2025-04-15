<?php

$final_html = "";
global $wpdb;
$HTSV_province_identity_table_name      = $wpdb->prefix . "htsv_province_slider";
$results = $wpdb->get_results( "SELECT * FROM $wpdb->postmeta where meta_key='_candidate_experience'" );

if(!empty($results) && isset($results)){
	foreach ($results as $item_parent){
		$user = new WP_User(WP_Job_Board_Pro_User::get_user_by_candidate_id($item_parent->post_id));


			foreach ((array) unserialize($item_parent->meta_value) as $item){
				if($item){
					$final_html .= '<article class="card__article swiper-slide">
					<div class="card__image">
						<img src="https://picsum.photos/200" alt="image" class="card__img">
						<div class="card__shadow"></div>
					</div>

					<div class="card__data">
						<h3 class="card__name"> ' . $user->display_name . '<p class="card__description"> (' . $item["title"] . ') </p> </h3>
						<p class="card__description">
						         همکاری در ' . $item["company"] . '
						                        <br>

						</p>
						<p class="card__date"> ' . $item["start_date"] . ' - ' . $item["end_date"] . '</p>
						<a href="' . $user->user_url . '" class="card__button">مشاهده</a>
					</div>
				</article>';
				}

			}


	}

}else{

}

echo '
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">
<style>

.swiper-button-prev, .swiper-container-rtl .swiper-button-next {
    background-image: url(); 
    left: 10px;
    right: auto;
}
.swiper-button-next, .swiper-container-rtl .swiper-button-prev {
  background-image: url(); 
    right: 10px;
    left: auto;
}
/*=============== GOOGLE FONTS ===============*/
    @import url("https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@400;500;600&display=swap");

    /*=============== VARIABLES CSS ===============*/
    :root {
        /*========== Colors ==========*/
        /*Color mode HSL(hue, saturation, lightness)*/
        --first-color: hsl(38, 92%, 58%);
        --first-color-light: hsl(38, 100%, 78%);
        --first-color-alt: hsl(32, 75%, 50%);
        --second-color: --superio-theme-color;
        --dark-color: hsl(212, 40%, 12%);
        --white-color: hsl(212, 4%, 95%);
        --body-color: hsl(212, 42%, 15%);
        --container-color: --wp--preset--color--white;

        /*========== Font and typography ==========*/
        /*.5rem = 8px | 1rem = 16px ...*/
        --body-font: IranSANS;
        --h2-font-size: 2rem;
        --normal-font-size: 1rem;
    }

    /*=============== BASE ===============*/
  

    .card_body {
        font-family: var(--body-font);
        font-size: var(--normal-font-size);
        background-color: var(--body-color);
        color: var(--white-color);
    }


    img {
        display: block;
        max-width: 100%;
        height: auto;
    }

    /*=============== CARD ===============*/
    .experience_container {
        display: flex;
        justify-content: center;
        align-items: center;

    }

    .card__container {
        padding-block: 5rem;
    }

    .card__content {
        margin-inline: 1.75rem;
        border-radius: 1.25rem;
        overflow: hidden;
    }

    .card__article {
        width: 300px; /* Remove after adding swiper js */
        border-radius: 1.25rem;
        overflow: hidden;
    }

    .card__image {
        position: relative;
        background-color: var(--first-color-light);

        margin-bottom: -.75rem;
    }

    .card__data {
        background-color: var(--wp--preset--color--white);
        padding: 1.5rem 2rem;
        border-radius: 1rem;
        text-align: center;
        position: relative;
        z-index: 10;
    }


    .card__img {

        width: 100%;
        margin: 0 auto;
        position: relative;
        z-index: 5;
    }


    .card__shadow {
        width: 200px;
        height: 200px;
        background-color: var(--first-color-alt);
        border-radius: 50%;
        position: absolute;
        top: 3.75rem;
        left: 0;
        right: 0;
        margin-inline: auto;
        filter: blur(45px);
    }

    .card__name {
        font-size: var(--h2-font-size);
        color: var(--superio-theme-color);
        margin-bottom: .75rem;
        display: inline-flex;
    }

    .card__description {
        font-weight: 1000;


    }
    .card__date {
        font-weight: 100;

        margin-bottom: 1.75rem;
        opacity: 0.5;
    }

    .card__button {
        display: inline-block;
        background-color: var(--superio-theme-color);
        padding: .75rem 1.5rem;
        border-radius: .25rem;
        color: var(--wp--preset--color--white);
        font-weight: 600;
    }

    /* Swiper class */
    .swiper-button-prev:after,
    .swiper-button-next:after {
        content: "";
    }

    .swiper-button-prev,
    .swiper-button-next {
        width: initial;
        height: initial;
        font-size: 3rem;
        color: var(--superio-theme-color);
        display: none;
    }

    .swiper-button-prev {
        left: 0;
    }

    .swiper-button-next {
        right: 0;
    }

    .swiper-pagination-bullet {
        background-color: hsl(212, 32%, 40%);
        opacity: 1;
    }

    .swiper-pagination-bullet-active {
        background-color: var(--superio-theme-color);
    }

    /*=============== BREAKPOINTS ===============*/
    /* For small devices */
    @media screen and (max-width: 320px) {
        .card__data {
            padding: 1rem;
        }
    }

    /* For medium devices */
    @media screen and (min-width: 768px) {
        .card__content {
            margin-inline: 3rem;
        }

        .swiper-button-next,
        .swiper-button-prev {
            display: block;
        }
    }

    /* For large devices */
    @media screen and (min-width: 1120px) {
        .card__container {
            max-width: 1120px;
        }

        .swiper-button-prev {
            left: -1rem;
        }
        .swiper-button-next {
            right: -1rem;
        }
    }

    </style>
<body class="card_body">
<section class="experience_container">
	<div class="card__container swiper">
		<div class="card__content">
			<div class="swiper-wrapper">
				' . $final_html . '

			</div>
		</div>

		<!-- Navigation buttons -->
		<div class="swiper-button-next">
			<i class="ri-arrow-right-s-line"></i>
		</div>

		<div class="swiper-button-prev">
			<i class="ri-arrow-left-s-line"></i>
		</div>
		<div class="swiper-pagination"></div>

		<!-- Pagination -->


	</div>
</section>

</body>
';