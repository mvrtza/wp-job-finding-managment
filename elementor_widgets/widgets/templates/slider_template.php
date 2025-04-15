<?php
echo ' <style>
        :root {
            --primary-color: slategrey;
        }

        * {
            box-sizing: border-box;
        }

        .body-for-slider {
            display: flex;

        }

        .carousel-container {
            border-radius: 30px;
            overflow: hidden;

            position: relative;
            box-shadow: 0 0 30px -20px #223344;
            margin: auto;
            z-index: 0;
            height: 400px;
            width: 100%;
        }

        /* Hide the images by default */
        .mySlides {
            display: none;
        }

        .mySlides img {
            display: block;
            width: 100%;
        }


        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            transform: translate(0, -50%);
            width: auto;
            padding: 20px;
            color: white;
            font-weight: bold;
            font-size: 24px;
            border-radius: 0 8px 8px 0;
            background: rgba(173, 216, 230, 0.1);
            user-select: none;
        }

        .next {
            left: 0;
            border-radius: 8px 0 0 8px;
        }

        .prev:hover,
        .next:hover {
            background-color: rgba(173, 216, 230, 0.3);
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            background-color: rgba(10, 10, 20, 0.1);
            backdrop-filter: blur(6px);
            border-radius: 10px;
            font-size: 20px;
            padding: 8px 12px;
            position: absolute;
            bottom: 60px;
            left: 50%;
            transform: translate(-50%);
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .number {
            color: #f2f2f2;
            font-size: 16px;
            background-color: rgba(173, 216, 230, 0.15);
            backdrop-filter: blur(6px);
            border-radius: 10px;
            padding: 8px 12px;
            position: absolute;
            top: 10px;
            left: 10px;
        }

        .dots-container {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translate(-50%);
        }

        /* The dots/bullets/indicators */
        .dots {
            cursor: pointer;
            height: 14px;
            width: 14px;
            margin: 0 4px;
            background-color: rgba(173, 216, 230, 0.2);
            backdrop-filter: blur(2px);
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        .active,
        .dots:hover {
            background-color: rgba(173, 216, 230, 0.8);
        }



        @keyframes animate {
            from {
                transform: scale(1.1) rotateY(10deg);
            }
            to {
                transform: scale(1) rotateY(0deg);
            }
        }

        @media screen and (min-width: 1200px) {
            .body-for-slider{
                padding-top: 100px !important;
            }
        }
    </style>
    <div class="body-for-slider">
    <div class="carousel-container">
    ';
$j = count((array) HTSV_table_get_identity_slider_by_province( HTSV_province_get_request() ) );
$i = 1;
remove_filter( 'the_content', 'convert_smilies', 20 );

foreach ( HTSV_table_get_identity_slider_by_province( HTSV_province_get_request() ) as $item ) {
	if($item->status==true){
		echo '<a href="' . $item->link . '" class="mySlides animate">';
		echo '<img src="' . $item->picture . '" alt="slide"/>';

		echo '<div class="text">' . $item->name . '</div>';
		echo '</a>';
		$i ++;
	}else{
		$j--;
	}

}
echo '      <!-- Next and previous buttons -->
        <a class="prev" onclick="prevSlide()">&#10094;</a>
        <a class="next" onclick="nextSlide()">&#10095;</a>

        <!-- The dots/circles -->
        <div class="dots-container">';
for ( $k = 0; $k < $j; $k ++ ) {
	echo '<span class="dots" onclick="currentSlide(' . $k . ')"></span>';
}
echo '
        </div>
    </div>
    <!-- partial -->

    <script>
        let slideIndex = 0;
        showSlides();

        // Next-previous control
        function nextSlide() {
            slideIndex++;
            showSlides();
            timer = _timer; // reset timer
        }

        function prevSlide() {
            slideIndex--;
            showSlides();
            timer = _timer;
        }

        // Thumbnail image controlls
        function currentSlide(n) {
            slideIndex = n - 1;
            showSlides();
            timer = _timer;
        }

        function showSlides() {
            let slides = document.querySelectorAll(".mySlides");
            let dots = document.querySelectorAll(".dots");

            if (slideIndex > slides.length - 1) slideIndex = 0;
            if (slideIndex < 0) slideIndex = slides.length - 1;

            // hide all slides
            slides.forEach((slide) => {
                slide.style.display = "none";
            });

            // show one slide base on index number
            slides[slideIndex].style.display = "block";

            dots.forEach((dot) => {
                dot.classList.remove("active");
            });

            dots[slideIndex].classList.add("active");
        }

        // autoplay slides --------
        let timer = 7; // sec
        const _timer = timer;

        // this function runs every 1 second
        setInterval(() => {
            timer--;

            if (timer < 1) {
                nextSlide();
                timer = _timer; // reset timer
            }
        }, 1000); // 1sec
    </script>

</div>

';
?>






