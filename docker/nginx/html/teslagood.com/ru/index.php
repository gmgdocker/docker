<?php

include($_SERVER['DOCUMENT_ROOT']."/includes/SxGeo.php");
$SxGeo = new SxGeo();
$ip = $_SERVER['REMOTE_ADDR'];
$ipCountry = $SxGeo->get($ip);
$ipCountry = strtolower($ipCountry);

$url = 'Location: ./';
session_start();

include $_SERVER['DOCUMENT_ROOT'] . "/includes/header.php";

?>

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>

        <script>
			window.onload = function () {
				if(window.innerWidth > 701){
					var mvp = document.getElementById('myViewport');
					mvp.setAttribute('content','width=device-width');
				}
			}
		</script> 
		<meta id="myViewport" name="viewport" content="width=700">
        <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">

        <style>
            .bg{
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
				background: #333238;
				z-index:999;
			}
			
			#wrapper{
				min-width:700px;
			}
        </style>

    </head>
    <body>
        <div class="bg"></div>
        <div id="wrapper">
            <div id="main" class="site-content">

				<div class="disp__first section">
					<div class="box">
						<h3 class="disp__first--title">А вы знаете, 
							<br>
							<span>какая связь</span> между</h3>
						<div class="triangle">
							<div class="triangle__big">
								<i></i>
								<i></i>
								<i></i>
							</div>
							<div class="triangle__small">
								<i></i>
								<i></i>
								<i></i>
							</div>
							<div class="triangle__img">
								<img src="../img/top.png" alt="">
								<img src="../img/left.png" alt="">
								<img src="../img/right.png" alt="">
							</div>
							<div class="triangle__img--text">
								<p class="after">Ракетой Falcon Heavy от SpaceX</p>
								<p class="after">Электрокарами Tesla Model 3</p>
								<p class="after">Вселенским интернетом</p>
							</div>
							<div class="triangle__main">
								<img src="../img/big.png" alt="">
								<p>
									<span>и ростом</span>
									акций Tesla Inc?
								</p>
							</div>
						</div>
						<a href="#disp__sec" class="next">
							<img src="../img/scroll.png" alt="Scroll">
							Узнать
						</a>
					</div>
				</div>
				<div class="disp__sec section">
					<div class="disp__sec--block">
						<div class="disp__sec--left">
							<div class="disp__sec--leftText">
								<h3>В феврале акции Tesla Inc <b>подорожали почти на <span>20%</span></b> после реализации сразу нескольких разработок Маска:</h3>
								<div data-num="1"><img src="../img/img1.png" alt=""><p>Запуска ракеты <span>Falcon Heavy</span> – самого мощного изобретения за последние 45 лет;</p></div>
								<div data-num="2"><img src="../img/img2.png" alt=""><p>Электрокары Tesla обогнали по продажам BMW, Audi и Mercedes</p></div>
								<div data-num="3"><img src="../img/img3.png" alt=""><p>Запуска первого тестового спутника Falcon 9 в рамках программы "Вселенский Wi-Fi".</p></div>
								<a href="#disp__third" class="next">
									<img src="../img/scroll.png" alt="Scroll">
									Дальше?
								</a>
							</div>
						</div>
						<div class="disp__sec--right">
							<div class="disp__sec--img">
								<img src="../img/icon1.jpg" alt="">
								<img src="../img/icon2.jpg" alt="">
								<img src="../img/icon3.jpg" alt="">
								<img src="../img/icon4.png" alt="">
								<img src="../img/icon5.png" alt="">
								<img src="../img/icon6.png" alt="">
							</div>
							<p class="disp__sec--rightText">
								Все это <span><b>проекты Илона Маска</b></span> – человека, который не боится реализовать самые смелые идеи и, безусловно, <span>добивается успеха!</span>
							</p>
						</div>
					</div>
				</div>
				<div class="disp__third section">
					<div class="box">
						<h3 class="disp__third--title"><b>Успехи</b> Илона Маска = <b>рост</b> капитализации его компании</h3>
						<h4 class="disp__third--subtitle"><b>Инвестируй</b> в акции Tesla и <b>зарабатывай</b> на развитии технологий будущего!</h4>
						<form class="form">
							<b class="form__title">Инвестировать в Tesla Inc</b>
							<div class="form__block">
								<input class="form__input" type="text" name="name" required id="name">
								<label class="form__label" for="name">Имя</label>
								<p class="error">Введите корректное имя</p>
							</div>
							<div class="form__block">
								<input class="form__input" type="email" name="email" required id="email">
								<label class="form__label" for="email">E-mail</label>
								<p class="error">Введите корректный e-mail</p>
							</div>
							<div class="form__block">
								<input class="form__input search" type="search" name="country" required id="country" data-current="<?php echo $ipCountry; ?>">
								<label class="form__label" for="country">Страна</label>
								<p class="error">Пожалуйста, выберите страну</p>
							</div>
							<div class="form__block">
								<input class="form__input" type="tel" name="phone" required id="phone">
								<label class="form__label" for="phone">Номер телефона</label>
								<p class="error">Введите корректный номер телефона</p>
							</div>
							<p class="error-main"></p>
							<button class="form__btn" type="submit">Купить акции Tesla Inc.</button>
							<input type="hidden" name="num">
							<input type="hidden" name="promo" value="<?php echo $_SESSION['promo']; ?>">
							<i data-key="1"></i>
							<i data-key="2"></i>
							<i data-key="3"></i>
							<i data-key="4"></i>
						</form>
					</div>
				</div>

            </div>

            <a class="main--btn" href="javascript:">Купить акции Tesla Inc.</a>
            <div class="fixed-form">
                <form class="form">
                    <b class="form__title">Инвестировать в Tesla Inc</b>
                    <div class="form__block">
                        <input class="form__input" type="text" name="name" required id="name">
                        <label class="form__label" for="name">Имя</label>
                        <p class="error">Введите корректное имя</p>
                    </div>
                    <div class="form__block">
                        <input class="form__input" type="email" name="email" required id="email">
                        <label class="form__label" for="email">E-mail</label>
                        <p class="error">Введите корректный e-mail</p>
                    </div>
                    <div class="form__block">
                        <input class="form__input search" type="search" name="country" required id="country" data-current="<?php echo $ipCountry; ?>">
                        <label class="form__label" for="country">Страна</label>
                        <p class="error">Пожалуйста, выберите страну</p>
                    </div>
                    <div class="form__block">
                        <input class="form__input" type="tel" name="phone" required id="phone">
                        <label class="form__label" for="phone">Номер телефона</label>
                        <p class="error">Введите корректный номер телефона</p>
                    </div>
                    <p class="error-main"></p>
                    <button class="form__btn" type="submit">Купить акции Tesla Inc.</button>
                    <input type="hidden" name="num">
                    <input type="hidden" name="promo" value="<?php echo $_SESSION['promo']; ?>">
                    <i data-key="1"></i>
                    <i data-key="2"></i>
                    <i data-key="3"></i>
                    <i data-key="4"></i>
                    <a class="fixed-form--close" href="javascript:"></a>
                </form>
            </div>

        </div> <!-- #wrapper -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/main.js"></script>
        <link rel="stylesheet" href="../css/main.min.css" defer>
    </body>
</html>