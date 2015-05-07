<script type="text/javascript">
    $(document).ready(function () {
//	$("#dialog").dialog({
//		autoOpen: false, modal: true, width: 400,
//		buttons: [{text: "Закрыть", click: function () {
//			$(this).dialog("close");
//		}}]
//	});
//	$("#dialog>#text").html("Тру ля ля");
//	$("#dialog").dialog("open");
	width = $('.slider-box').width();						// Ширина слайдера.
	interval = 10000;										// Интервал смены слайдов.

	$('.slider img:last').clone().prependTo('.slider');     // Копия последнего слайда помещается в начало.
	$('.slider img').eq(1).clone().appendTo('.slider');     // Копия первого слайда помещается в конец.
	$('.slider').css('margin-left', -width);                // Контейнер .slider сдвигается влево на ширину одного слайда.
	setInterval('animation()', interval);                    // Запускается функция animation(), выполняющая смену слайдов.
	//		animation();
    });
    function animation() {
	var margin = parseInt($('.slider').css('marginLeft'));		// Текущее смещение блока .slider
	width = $('.slider-box').width(), // Ширина слайдера.
		slidersAmount = $('.slider').children().length;			// Количество слайдов в слайдере.
	if (margin !== (-width * (slidersAmount - 1)))				// Если текущий слайд не последний,
	{
	    margin = margin - width;                                // то значение margin уменьшается на ширину слайда.
	} else {                                                    // Если показан последний слайд,
	    $('.slider').css('margin-left', -width);                // то блок .slider возвращается в начальное положение,
	    margin = -width * 2;
	}
	$('.slider').animate({marginLeft: margin}, 1000);           // Блок .slider смещается влево на 1 слайд.
    }
    ;
</script>
<style>
	.slider-box{
		width:100%;
		height:250px;
		margin:auto;
		overflow:hidden;
	}
	.slider{
		position: relative;
		width: 10000px;
		height: 250px;
	}
	.slider img{
		float: left;
		z-index: 0;
		width: 1350px;
		height: 100%;
	}
</style>
<script type="text/javascript">
    $(document).ready(function () {
	// слайдер "Выбора запчастей по марке автомобиля"
	$("#car-slider-2").hide();
	status = true;
	time = 1000;


	function animation() {
	    if (status == true) {
		$("#car-slider-1").hide();
		$("#car-slider-2").show();
		status = false;
		console.log("status = false");
	    } else {
		$("#car-slider-2").hide();
		$("#car-slider-1").show();
		status = true;
		console.log("status = true");
	    }
	    setInterval('animation()', time);
	}


    });
</script>
<div class="slider-box">
	<div class="slider">
		<img src="../img/car.jpg" class="main-car-slider">
		<img src="../img/car-2.jpg" class="main-car-slider">
	</div>
</div>
<div class="search mt5">
	<h3 class="TAC">Поиск по номеру запчасти или по её названию:</h3><br>
	<div class="floatL w80p pl10">
		<div class="input-group input-group-sm w100p">
			<span class="input-group-addon w20p TAL"><font class="fontb">Название:</font></span>
			<input type="text" class="form-control TAL w80p" placeholder="Введите название запчасти, например: toyota генератор">
		</div>
		<div class="input-group input-group-sm w100p">
			<span class="input-group-addon w20p TAL"><font class="fontb">Номер:</font></span>
			<input type="text" class="form-control TAL w80p" placeholder="Введите номер запчасти, например: 028903018A">
		</div>
	</div>
	<span class="input-group-addon w20p h60 btn TAC"><font class="fontb font14">Поиск</font></span>
	<span class="glyphicon"></span>
</div>
<div class="car-slider mt10 search bcw" id="car-slider-1">
	<h3 class="TAC">Выбор автозапчастей по марке автомобиля:</h3>
	<a href=".."><div class="car-slide"><img src="http://vectorparts.com.ua/media/files/logos/small-inside-placeholder-1399092342-inside-placeholder-1367874128-Toyota.png"><div class="car-name">Toyota</div></div></a>
	<a href=".."><div class="car-slide"><img src="http://vectorparts.com.ua/media/files/logos/small-inside-placeholder-1399092075-inside-placeholder-1367872916-Lexus.png"><div class="car-name">Lexus</div></div></a>
	<a href=".."><div class="car-slide"><img src="http://vectorparts.com.ua/media/files/logos/small-inside-placeholder-1399092140-inside-placeholder-1367873123-Mitsubishi.png"><div class="car-name">Mitsubishi</div></div></a>
	<a href=".."><div class="car-slide"><img src="http://vectorparts.com.ua/media/files/logos/small-inside-placeholder-1399091822-inside-placeholder-1367871926-Honda.png"><div class="car-name">Honda</div></div></a>
	<a href=".."><div class="car-slide"><img src="http://vectorparts.com.ua/media/files/logos/small-inside-placeholder-1399092089-inside-placeholder-1367873028-Mazda.png"><div class="car-name">Mazda</div></div></a>
	<a href=".."><div class="car-slide"><img src="http://vectorparts.com.ua/media/files/logos/small-inside-placeholder-1399092192-inside-placeholder-1367873146-Nissan.png"><div class="car-name">Nissan</div></div></a>
	<a href=".."><div class="car-slide"><img src="http://vectorparts.com.ua/media/files/logos/small-inside-placeholder-1399092332-inside-placeholder-1367874105-Suzuki.png"><div class="car-name">Suzuki</div></div></a>
	<a href=".."><div class="car-slide"><img src="http://vectorparts.com.ua/media/files/logos/small-inside-placeholder-1399091867-inside-placeholder-1367872057-Kia.png"><div class="car-name">Kia</div></div></a>
	<a href=".."><div class="car-slide"><img src="http://vectorparts.com.ua/media/files/logos/small-inside-placeholder-1399091836-inside-placeholder-1367871950-Hyundai.png"><div class="car-name">Hyundai</div></div></a>
	<a href=".."><div class="car-slide"><img src="http://vectorparts.com.ua/media/files/logos/small-inside-placeholder-1399092361-inside-placeholder-1367874319-Volkswagen.png"><div class="car-name">Volkswagen</div></div></a>
</div>

<div class="car-slider mt10 search" id="car-slider-2">
	<h4 class="TAC">Выбор автозапчастей по марке автомобиля:</h4>
	<a href=".."><div class="car-slide"><img src="http://vectorparts.com.ua/media/files/logos/small-inside-placeholder-1399092140-inside-placeholder-1367873123-Mitsubishi.png"><div class="car-name">Mitsubishi</div></div></a>
	<a href=".."><div class="car-slide"><img src="http://vectorparts.com.ua/media/files/logos/small-inside-placeholder-1399092075-inside-placeholder-1367872916-Lexus.png"><div class="car-name">Lexus</div></div></a>
	<a href=".."><div class="car-slide"><img src="http://vectorparts.com.ua/media/files/logos/small-inside-placeholder-1399092342-inside-placeholder-1367874128-Toyota.png"><div class="car-name">Toyota</div></div></a>
	<a href=".."><div class="car-slide"><img src="http://vectorparts.com.ua/media/files/logos/small-inside-placeholder-1399091836-inside-placeholder-1367871950-Hyundai.png"><div class="car-name">Hyundai</div></div></a>
	<a href=".."><div class="car-slide"><img src="http://vectorparts.com.ua/media/files/logos/small-inside-placeholder-1399092089-inside-placeholder-1367873028-Mazda.png"><div class="car-name">Mazda</div></div></a>
	<a href=".."><div class="car-slide"><img src="http://vectorparts.com.ua/media/files/logos/small-inside-placeholder-1399091822-inside-placeholder-1367871926-Honda.png"><div class="car-name">Honda</div></div></a>
	<a href=".."><div class="car-slide"><img src="http://vectorparts.com.ua/media/files/logos/small-inside-placeholder-1399092192-inside-placeholder-1367873146-Nissan.png"><div class="car-name">Nissan</div></div></a>
	<a href=".."><div class="car-slide"><img src="http://vectorparts.com.ua/media/files/logos/small-inside-placeholder-1399092332-inside-placeholder-1367874105-Suzuki.png"><div class="car-name">Suzuki</div></div></a>
	<a href=".."><div class="car-slide"><img src="http://vectorparts.com.ua/media/files/logos/small-inside-placeholder-1399091867-inside-placeholder-1367872057-Kia.png"><div class="car-name">Kia</div></div></a>
	<a href=".."><div class="car-slide"><img src="http://vectorparts.com.ua/media/files/logos/small-inside-placeholder-1399092361-inside-placeholder-1367874319-Volkswagen.png"><div class="car-name">Volkswagen</div></div></a>
</div>
<div class="info mt10 row-fluid">
	<div class="span6">
		<h4 class="TAC search ml10 shadow-1 p5">О компании</h4>
		<div class="about ml10 search h500 shadow-1" style="padding-left:20px;padding-right:20px">
			<h4 class="TAC">Мы работаем на следующих условиях:</h4>
			<h5>
				Приобрести запчасти можно за наличный и безналичный расчёт. 
				Представленная на сайте продукция: фильтра, тормозные колодки, детали рулевого управления, стартеры, генераторы, рычаги, тормозные диски, 
				капоты, крылья, бамперы, двери, форсунки и другие запчасти и аксессуары для автомобилей самых различных марок, а так же неоригинальные запчасти ведущих мировых производителей) в наличии.
				Если у Вас есть оригинальные номера авто запчастей, Вы можете ввести их в строку поиска и получить информацию о наличии и сроках поставки.
				Все необходимые запчасти вы можете заказать в нашем интернет-магазине в любое время, выбрав в каталоге необходимые детали. Если по 
				каким-либо причинам Вы не можете найти нужную запчасть, тогда оформите и отправьте нам запрос, указав наименование запчасти, VIN,
				марку автомобиля, год выпуска, марку и тип кузова, марку 
				двигателя и тип КПП, либо позвоните по телефонам, предоставленным на сайте. Также Вы можете воспользоваться электронным каталогом на
				нашем сайте для подбора интересующего оригинального номера запчасти.
			</h5>
		</div>
	</div>
	<div class="span6">
		<h4 class="TAC search ml10 shadow-1 p5">Контакты</h4>
		<div class="about ml10 search h500 shadow-1" style="padding-left:33px;padding-right:20px">
			<h4 class="TAC">Телефоны:</h4>
			<h5 class="TAC">
				+38(099)-563-44-33<br>
				+38(099)-563-55-22<br>
				+38(099)-563-66-11<br>
			</h5>
			<h4 class="TAC">Адрес:</h4>
			<a href="https://www.google.com.ua/maps/place/%D0%B2%D1%83%D0%BB.+%D0%9C%D0%B8%D1%80%D1%83,+%D0%A5%D0%B0%D1%80%D0%BA%D1%96%D0%B2,+%D0%A5%D0%B0%D1%80%D0%BA%D1%96%D0%B2%D1%81%D1%8C%D0%BA%D0%B0+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C/@49.9469034,36.3851336,17z/data=!4m2!3m1!1s0x41270b8bb9af4137:0x9a7ead6baeaf58a2" target="_blank"><img src="../img/mapa.png" class="TAC mapa-hover"></a>
		</div>
	</div>
</div>
<br>
<div id="dialog" title="ВНИМАНИЕ!">
	<p id='text'></p>
</div>
