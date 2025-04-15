<meta charset="UTF-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
      integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
      crossorigin="anonymous" referrerpolicy="no-referrer">
<div class="widget-province-body">
	<style>
        div.scroll {
            margin: 4px, 4px;
            padding: 4px;
            width: 300px;
            overflow-x: auto;
            overflow-y: hidden;
            white-space: nowrap;
        }

        .icon-circle-image {

            width: 40px;
            height: 40px;
            border-radius: 40px;

        }

        .option.active:hover {
            opacity: 0.6;
        }

        .widget-province-body {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            overflow: hidden;
         
            font-family: "Times New Roman", Times, serif;
        }

        .widget-province-body .options {
            display: flex;
            flex-direction: row;
            align-items: stretch;

            min-width: 600px;
            max-width: 900px;
            width: calc(100% - 100px);
            height: 400px;
        }

        /* Each Option Image will display after the --optionBackround Variable created */
        .widget-province-body .options .option {
            position: relative;

            min-width: 120px;
            margin: 10px;
            background: var(--optionBackground, var(--defaultBackground, #e6e9ed));
            background-size: auto 120%;
            background-position: center;
            cursor: pointer;
            transition: 0.5s cubic-bezier(0.05, 0.61, 0.41, 0.95);
        }

        .widget-province-body .options .option :nth-child(1) {
            --defaultBackground: #ed5565;
        }

        .widget-province-body .options .option :nth-child(2) {
            --defaultBackground: #fc6e51;
        }

        .widget-province-body .options .option :nth-child(3) {
            --defaultBackground: #5d9cec;
        }

        .widget-province-body .options .option :nth-child(4) {
            --defaultBackground: #2ecc71;
        }

        .widget-province-body .options .option :nth-child(5) {
            --defaultBackground: #ffce54;
        }

        .widget-province-body .options .option.active {
            flex-grow: 10000;
            transform: scale(1);
            min-width: 450px;
            max-width: 600px;
            margin: 0px;
            border-radius: 40px;
            background-size: auto 100%;
        }

        .widget-province-body .options .option.active .shadow {
            box-shadow: inset 0 -120px 120px -120px black,
            inset 0 -120px 120px -120px black;
        }

        .widget-province-body .options .option.active .label {
            bottom: 20px;
            left: 20px;
        }

        .widget-province-body .options .option.active .label .info > div {
            left: 45px;
            opacity: 1;
        }

        .widget-province-body .options .option:not(.active) {
            flex-grow: 1;
            border-radius: 30px;
        }

        .widget-province-body .options .option:not(.active) .shadow {
            bottom: -40px;
            box-shadow: inset 0 -120px 120px -120px black, inset 0 -120px 0px -100px black;
        }

        .widget-province-body .options .option:not(.active) .label {
            bottom: 10px;
            left: 10px;
        }

        .widget-province-body .options .option:not(.active) .label .info > div {
            left: 0px;
            opacity: 0;
        }

        .widget-province-body .options .option .shadow {
            position: absolute;
            bottom: 0px;
            left: 0;
            height: 120px;
            transition: 0.5s cubic-bezier(0.05, 0.61, 0.41, 0.95);
        }

        .widget-province-body .options .option .label {
            display: flex;
            position: absolute;
            right: 0;
            height: 40px;
            transition: 0.5s cubic-bezier(0.05, 0.61, 0.41, 0.95);
        }

        .widget-province-body .options .option .label .icon {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            min-width: 40px;
            max-width: 40px;
            height: 40px;
            border-radius: 100%;
            background-color: white;
            color: var(--defaultBackground);
        }

        .widget-province-body .options .option .label .info {
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-left: 10px;
            color: white;
            white-space: pre;
        }

        .widget-province-body .options .option .label .info > div {
            position: absolute;
            transition: 0.5s cubic-bezier(0.05, 0.061, 0.41, 0.95) opacity 0.5s ease-out;
        }

        .widget-province-body .options .option .label .info .main {
            font-weight: bold;
            font-size: 1.2rem;
        }

	</style>
	<!-- Main Container -->
	<div class="options scroll" style="
    overflow: overlay;
">

		<!-- Copy the option and paste few more times -->

		<div class="option active" id="azerbaijan-sharghi" style="
        --optionBackground: url(https://yarestanekoodak.ir/wp-content/uploads/2024/06/Location-174013.png);
      ">
			<div class="shadow"></div>

			<div class="label">
				<div class="icon">
					<img class="icon-circle-image"
					     src="https://yarestanekoodak.ir/wp-content/uploads/2024/06/Logo-174124.png" alt="">
				</div>
				<div class="info">
					<div class="main">Azerbaijan-Sharghi | آذربایجان شرقی</div>
				</div>
			</div>
		</div>
		<div class="option" id="azerbaijan-gharbi" style="
        --optionBackground: url(https://yarestanekoodak.ir/wp-content/uploads/2024/06/Location-174223.png);
      ">
			<div class="shadow"></div>
			<div class="label">
				<div class="icon">
					<img class="icon-circle-image"
					     src="https://yarestanekoodak.ir/wp-content/uploads/2024/06/Logo-174203.png" alt="">
				</div>
				<div class="info">
					<div class="main">Azerbaijan-Gharbi | آذربایجان غربی</div>
				</div>
			</div>
		</div>
		<div class="option" id="ardebil" style="
        --optionBackground: url(https://yarestanekoodak.ir/wp-content/uploads/2024/06/Location-174249.png);
      ">
			<div class="shadow"></div>
			<div class="label">
				<div class="icon">
					<img class="icon-circle-image"
					     src="https://yarestanekoodak.ir/wp-content/uploads/2024/06/Logo-174310.png" alt="">

				</div>
				<div class="info">
					<div class="main">Ardebil | اردبیل</div>
				</div>
			</div>
		</div>
		<div class="option" id="isfahan" style="
        --optionBackground: url(https://yarestanekoodak.ir/wp-content/uploads/2024/06/Location-174332.png);
      ">
			<div class="shadow"></div>
			<div class="label">
				<div class="icon">
					<img class="icon-circle-image"
					     src="https://yarestanekoodak.ir/wp-content/uploads/2024/06/Logo-174351.png" alt="">
				</div>
				<div class="info">
					<div class="main">Isfahan | اصفهان</div>
				</div>
			</div>
		</div>
		<div class="option" id="alborz" style="
        --optionBackground: url(https://yarestanekoodak.ir/wp-content/uploads/2024/06/Location-195243.png);
      ">
			<div class="shadow"></div>
			<div class="label">
				<div class="icon">
					<img class="icon-circle-image"
					     src="https://yarestanekoodak.ir/wp-content/uploads/2024/06/Logo-174411.png" alt="">
				</div>
				<div class="info">
					<div class="main">Alborz | البرز</div>
				</div>
			</div>
		</div>
		<div class="option" id="ilam" style="
        --optionBackground: url(https://yarestanekoodak.ir/wp-content/uploads/2024/06/Location-195302.png);
      ">
			<div class="shadow"></div>
			<div class="label">
				<div class="icon">
					<img class="icon-circle-image"
					     src="https://yarestanekoodak.ir/wp-content/uploads/2024/06/Logo-174429.png" alt="">
				</div>
				<div class="info">
					<div class="main">Ilam | ایلام</div>
				</div>
			</div>
		</div>
		<div class="option" id="busher" style="
    --optionBackground: url(https://yarestanekoodak.ir/wp-content/uploads/2024/06/Location-195322.png);
  ">
			<div class="shadow"></div>
			<div class="label">
				<div class="icon">
					<img class="icon-circle-image"
					     src="https://yarestanekoodak.ir/wp-content/uploads/2024/06/Logo-174442.png" alt="">
				</div>
				<div class="info">
					<div class="main">Busher | بوشهر</div>
				</div>
			</div>
		</div>
		<div class="option" id="tehran" style="
--optionBackground: url(https://yarestanekoodak.ir/wp-content/uploads/2024/06/Location-195346.png);
">
			<div class="shadow"></div>
			<div class="label">
				<div class="icon">
					<img class="icon-circle-image"
					     src="https://yarestanekoodak.ir/wp-content/uploads/2024/06/Logo-174516.png" alt="">
				</div>
				<div class="info">
					<div class="main">Tehran | تهران</div>
				</div>
			</div>
		</div>
		<div class="option" id="chahrmahal-bakhtiyari" style="
--optionBackground: url(https://yarestanekoodak.ir/wp-content/uploads/2024/06/Location-195428-2.png);
">
			<div class="shadow"></div>
			<div class="label">
				<div class="icon">
					<img class="icon-circle-image"
					     src="https://yarestanekoodak.ir/wp-content/uploads/2024/06/Logo-174538.png" alt="">
				</div>
				<div class="info">
					<div class="main">ChahrMahal-Bakhtiyari | چهارمحال و بختیاری</div>
				</div>
			</div>
		</div>
		<div class="option" id="khoorasan-jonobi" style="
--optionBackground: url(https://yarestanekoodak.ir/wp-content/uploads/2024/06/Location-200122.png);
">
			<div class="shadow"></div>
			<div class="label">
				<div class="icon">
					<img class="icon-circle-image"
					     src="https://yarestanekoodak.ir/wp-content/uploads/2024/06/Logo-195452.png" alt="">
				</div>
				<div class="info">
					<div class="main">Khoorasan-Jonobi | خراسان جنوبی</div>
				</div>
			</div>
		</div>
		<div class="option" id="khoorasan-razavi" style="
--optionBackground: url(https://yarestanekoodak.ir/wp-content/uploads/2024/06/Location-200140.png);
">
			<div class="shadow"></div>
			<div class="label">
				<div class="icon">
					<img class="icon-circle-image"
					     src="https://yarestanekoodak.ir/wp-content/uploads/2024/06/Logo-195504.png" alt="">
				</div>
				<div class="info">
					<div class="main">Khoorasan-Razavi | خراسان رضوی</div>
				</div>
			</div>
		</div>

		<div class="option" id="khozestan" style="
--optionBackground: url(https://yarestanekoodak.ir/wp-content/uploads/2024/06/Location-200217.png);
">
			<div class="shadow"></div>
			<div class="label">
				<div class="icon">
					<img class="icon-circle-image"
					     src="https://yarestanekoodak.ir/wp-content/uploads/2024/06/Logo-195540.png" alt="">
				</div>
				<div class="info">
					<div class="main">Khozestan | خوزستان</div>
				</div>
			</div>
		</div>
		<div class="option" id="zanjan" style="
    --optionBackground: url(https://yarestanekoodak.ir/wp-content/uploads/2024/06/Location-200234.png);
    ">
			<div class="shadow"></div>
			<div class="label">
				<div class="icon">
					<img class="icon-circle-image"
					     src="https://yarestanekoodak.ir/wp-content/uploads/2024/06/Logo-195553.png" alt="">
				</div>
				<div class="info">
					<div class="main">Zanjan | زنجان</div>
				</div>
			</div>
		</div>
		<div class="option" id="semnan" style="
        --optionBackground: url(https://yarestanekoodak.ir/wp-content/uploads/2024/06/Location-200250.png);
        ">
			<div class="shadow"></div>
			<div class="label">
				<div class="icon">
					<img class="icon-circle-image"
					     src="https://yarestanekoodak.ir/wp-content/uploads/2024/06/Logo-195622.png" alt="">
				</div>
				<div class="info">
					<div class="main">Semnan | سمنان</div>
				</div>
			</div>
		</div>
		<div class="option" id="sistan-baluchestan" style="
            --optionBackground: url(https://yarestanekoodak.ir/wp-content/uploads/2024/06/Location-200316.png);
            ">
			<div class="shadow"></div>
			<div class="label">
				<div class="icon">
					<img class="icon-circle-image"
					     src="https://yarestanekoodak.ir/wp-content/uploads/2024/06/Logo-195642.png" alt="">
				</div>
				<div class="info">
					<div class="main">Sistan-Baluchestan | سیستان و بلوچستان</div>
				</div>
			</div>
		</div>
		<div class="option" id="fars" style="
                --optionBackground: url(https://yarestanekoodak.ir/wp-content/uploads/2024/06/Location-200354.png);
                ">
			<div class="shadow"></div>
			<div class="label">
				<div class="icon">
					<img class="icon-circle-image"
					     src="https://yarestanekoodak.ir/wp-content/uploads/2024/06/Logo-195705.png" alt="">
				</div>
				<div class="info">
					<div class="main">Fars | فارس</div>
				</div>
			</div>
		</div>
		<div class="option" id="qazvin" style="
                    --optionBackground: url(https://yarestanekoodak.ir/wp-content/uploads/2024/06/Location-200429.png);
                    ">
			<div class="shadow"></div>
			<div class="label">
				<div class="icon">
					<img class="icon-circle-image"
					     src="https://yarestanekoodak.ir/wp-content/uploads/2024/06/Logo-195717.png" alt="">
				</div>
				<div class="info">
					<div class="main">Qazvin | قزوین</div>
				</div>
			</div>
		</div>
		<div class="option" id="qom" style="
                        --optionBackground: url(https://yarestanekoodak.ir/wp-content/uploads/2024/06/Location-200442.png);
                        ">
			<div class="shadow"></div>
			<div class="label">
				<div class="icon">
					<img class="icon-circle-image"
					     src="https://yarestanekoodak.ir/wp-content/uploads/2024/06/Logo-195744.png" alt="">
				</div>
				<div class="info">
					<div class="main">Qom | قم</div>
				</div>
			</div>
		</div>
		<div class="option" id="kurdestan" style="
                            --optionBackground: url(https://yarestanekoodak.ir/wp-content/uploads/2024/06/Location-200500.png);
                            ">
			<div class="shadow"></div>
			<div class="label">
				<div class="icon">
					<img class="icon-circle-image"
					     src="https://yarestanekoodak.ir/wp-content/uploads/2024/06/Logo-195818.png" alt="">
				</div>
				<div class="info">
					<div class="main">Kurdestan | کردستان</div>
				</div>
			</div>
		</div>
		<div class="option" id="kerman" style="
    --optionBackground: url(https://yarestanekoodak.ir/wp-content/uploads/2024/06/Location-200522.png);
    ">
			<div class="shadow"></div>
			<div class="label">
				<div class="icon">
					<img class="icon-circle-image"
					     src="https://yarestanekoodak.ir/wp-content/uploads/2024/06/Logo-195833.png" alt="">
				</div>
				<div class="info">
					<div class="main">Kerman | کرمان</div>
				</div>
			</div>
		</div>
		<div class="option" id="kermanshah" style="
--optionBackground: url(https://yarestanekoodak.ir/wp-content/uploads/2024/06/Location-200541.png);
">
			<div class="shadow"></div>
			<div class="label">
				<div class="icon">
					<img class="icon-circle-image"
					     src="https://yarestanekoodak.ir/wp-content/uploads/2024/06/Logo-195845.png" alt="">
				</div>
				<div class="info">
					<div class="main">Kermanshah | کرمانشاه</div>
				</div>
			</div>
		</div>
		<div class="option" id="kuhgolie-boyrahmad" style="
--optionBackground: url(https://yarestanekoodak.ir/wp-content/uploads/2024/06/Location-200607.png);
">
			<div class="shadow"></div>
			<div class="label">
				<div class="icon">
					<img class="icon-circle-image"
					     src="https://yarestanekoodak.ir/wp-content/uploads/2024/06/Logo-195910.png" alt="">
				</div>
				<div class="info">
					<div class="main">Kuhgolie-BoyrAhmad | کهگیلویه و بویراحمد</div>
				</div>
			</div>
		</div>
		<div class="option" id="golestan" style="
--optionBackground: url(https://yarestanekoodak.ir/wp-content/uploads/2024/06/Location-200624.png);
">
			<div class="shadow"></div>
			<div class="label">
				<div class="icon">
					<img class="icon-circle-image"
					     src="https://yarestanekoodak.ir/wp-content/uploads/2024/06/Logo-195925.png" alt="">
				</div>
				<div class="info">
					<div class="main">Golestan | گلستان</div>
				</div>
			</div>
		</div>
		<div class="option" id="gilan" style="
--optionBackground: url(https://yarestanekoodak.ir/wp-content/uploads/2024/06/Location-200651.png);
">
			<div class="shadow"></div>
			<div class="label">
				<div class="icon">
					<img class="icon-circle-image"
					     src="https://yarestanekoodak.ir/wp-content/uploads/2024/06/Logo-195940.png" alt="">
				</div>
				<div class="info">
					<div class="main">Gilan | گیلان</div>
				</div>
			</div>
		</div>
		<div class="option" id="lorestan" style="
--optionBackground: url(https://yarestanekoodak.ir/wp-content/uploads/2024/06/Location-200708.png);
">
			<div class="shadow"></div>
			<div class="label">
				<div class="icon">
					<img class="icon-circle-image"
					     src="https://yarestanekoodak.ir/wp-content/uploads/2024/06/Logo-195952.png" alt="">
				</div>
				<div class="info">
					<div class="main">Lorestan | لرستان</div>
				</div>
			</div>
		</div>
		<div class="option" id="mazandaran" style="
--optionBackground: url(https://yarestanekoodak.ir/wp-content/uploads/2024/06/Location-200729.png);
">
			<div class="shadow"></div>
			<div class="label">
				<div class="icon">
					<img class="icon-circle-image"
					     src="https://yarestanekoodak.ir/wp-content/uploads/2024/06/Logo-200005.png" alt="">
				</div>
				<div class="info">
					<div class="main">Mazandaran | مازندران</div>
				</div>
			</div>
		</div>
		<div class="option" id="markazi" style="
--optionBackground: url(https://yarestanekoodak.ir/wp-content/uploads/2024/06/Location-200750.png);
">
			<div class="shadow"></div>
			<div class="label">
				<div class="icon">
					<img class="icon-circle-image"
					     src="https://yarestanekoodak.ir/wp-content/uploads/2024/06/Logo-200018.png" alt="">
				</div>
				<div class="info">
					<div class="main">Markazi | مرکزی</div>
				</div>
			</div>
		</div>
		<div class="option" id="hormozgan" style="
--optionBackground: url(https://yarestanekoodak.ir/wp-content/uploads/2024/06/Location-200807.png);
">
			<div class="shadow"></div>
			<div class="label">
				<div class="icon">
					<img class="icon-circle-image"
					     src="https://yarestanekoodak.ir/wp-content/uploads/2024/06/Logo-200031.png" alt="">
				</div>
				<div class="info">
					<div class="main">Hormozgan | هرمزگان</div>
				</div>
			</div>
		</div>
		<div class="option" id="hamedan" style="
--optionBackground: url(https://yarestanekoodak.ir/wp-content/uploads/2024/06/Location-200836.png);
">
			<div class="shadow"></div>
			<div class="label">
				<div class="icon">
					<img class="icon-circle-image"
					     src="https://yarestanekoodak.ir/wp-content/uploads/2024/06/Logo-200043.png" alt="">
				</div>
				<div class="info">
					<div class="main">Hamedan | همدان</div>
				</div>
			</div>
		</div>
		<div class="option" id="yazd" style="
--optionBackground: url(https://yarestanekoodak.ir/wp-content/uploads/2024/06/Location-200850.png);
">
			<div class="shadow"></div>
			<div class="label">
				<div class="icon">
					<img class="icon-circle-image" src="https://yarestanekoodak.ir/wp-content/uploads/2024/06/Logo-12392.png"
					     alt="">
				</div>
				<div class="info">
					<div class="main">Yazd | یزد</div>
				</div>
			</div>
		</div>

	</div>

	<!-- JQUERY CDN Link -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
	        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
	        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script>
        $(".option").click(function () {

            $(".option").removeClass("active");
            $(this).addClass("active");
            $(".active").click(function () {
                var clickedBtnID = $(this).attr('id'); // or var clickedBtnID = this.id
                window.location.href = "?province=" + clickedBtnID;


            });
        });
	</script>


</div>
