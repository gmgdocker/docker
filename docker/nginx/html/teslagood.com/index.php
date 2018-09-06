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
						<h3 class="disp__first--title">Do you know, what’s
							<br>
							<span> the connection</span> between</h3>
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
								<img src="img/top.png" alt="">
								<img src="img/left.png" alt="">
								<img src="img/right.png" alt="">
							</div>
							<div class="triangle__img--text">
								<p class="after">Falcon Heavy rocket by SpaceX</p>
								<p class="after">Tesla Model 3 electric cars</p>
								<p class="after">Global space-based internet network</p>
							</div>
							<div class="triangle__main">
								<img src="img/big.png" alt="">
								<p>
									And Tesla Inc <br/> shares
									<span>growth?</span>
								</p>
							</div>
						</div>
						<a href="#disp__sec" class="next">
							<img src="img/scroll.png" alt="Scroll">
							What’s?
						</a>
					</div>
				</div>
				<div class="disp__sec section">
					<div class="disp__sec--block">
						<div class="disp__sec--left">
							<div class="disp__sec--leftText">
								<h3>Tesla Inc stocks <b>went up by <span>20%</span></b> after several Musk’s projects were realized at once:</h3>
								<div data-num="1"><img src="img/img1.png" alt=""><p><span>Falcon Heavy</span> – rocket launch, the most powerful invention for last 45 years;</p></div>
								<div data-num="2"><img src="img/img2.png" alt=""><p>BMW, Audi and Mercedes are behind Tesla on sales</p></div>
								<div data-num="3"><img src="img/img3.png" alt=""><p>Launch of Falcon 9, the first test satellite of “Universal Wi-Fi” program</p></div>
								<a href="#disp__third" class="next">
									<img src="img/scroll.png" alt="Scroll">
									Farther?
								</a>
							</div>
						</div>
						<div class="disp__sec--right">
							<div class="disp__sec--img">
								<img src="img/icon1.jpg" alt="">
								<img src="img/icon2.jpg" alt="">
								<img src="img/icon3.jpg" alt="">
								<img src="img/icon4.png" alt="">
								<img src="img/icon5.png" alt="">
								<img src="img/icon6.png" alt="">
							</div>
							<p class="disp__sec--rightText">
								All these <span><b>projects are belong to Elon Musk</b></span> – a man who doesn't afraid to realize most ambitious ideas and <span>never fails!</span>
							</p>
						</div>
					</div>
				</div>
				<div class="disp__third section">
					<div class="box">
						<h3 class="disp__third--title">Elon Musk’s <b>successes</b> are the <b>key factor</b> of its company capitalization</h3>
						<h4 class="disp__third--subtitle"><b>Invest</b> in Tesla shares and <b>earn profits</b> on future technologies development!</h4>
						<form class="form">
							<b class="form__title">INVEST IN TESLA INC</b>
							<div class="form__block">
								<input class="form__input" type="text" name="name" required id="name">
								<label class="form__label" for="name">Name</label>
								<p class="error">Please enter a valid name</p>
							</div>
							<div class="form__block">
								<input class="form__input" type="email" name="email" required id="email">
								<label class="form__label" for="email">E-mail</label>
								<p class="error">Please enter a valid e-mail</p>
							</div>
							<div class="form__block">
								<input class="form__input search" type="search" name="country" required id="country" data-current="<?php echo $ipCountry; ?>">
								<label class="form__label" for="country">Country</label>
								<p class="error">Please select a country</p>
							</div>
							<div class="form__block">
								<input class="form__input" type="tel" name="phone" required id="phone">
								<label class="form__label" for="phone">Phone number</label>
								<p class="error">Please enter a valid phone number</p>
							</div>
							<p class="error-main"></p>
							<button class="form__btn" type="submit">Buy Tesla Inc shares.</button>
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

		    <footer></footer>
            <a class="main--btn" href="javascript:">Buy Tesla Inc shares.</a>
            <div class="fixed-form">
                <form class="form">
                    <b class="form__title">INVEST IN TESLA INC</b>
                    <div class="form__block">
                        <input class="form__input" type="text" name="name" required id="name">
                        <label class="form__label" for="name">Name</label>
                        <p class="error">Please enter a valid name</p>
                    </div>
                    <div class="form__block">
                        <input class="form__input" type="email" name="email" required id="email">
                        <label class="form__label" for="email">E-mail</label>
                        <p class="error">Please enter a valid e-mail</p>
                    </div>
                    <div class="form__block">
                        <input class="form__input search" type="search" name="country" required id="country">
                        <label class="form__label" for="country">Country</label>
                        <p class="error">Please select a country</p>
                    </div>
                    <div class="form__block">
                        <input class="form__input" type="tel" name="phone" required id="phone">
                        <label class="form__label" for="phone">Phone number</label>
                        <p class="error">Please enter a valid phone number</p>
                    </div>
                    <p class="error-main"></p>
                    <button class="form__btn" type="submit">Buy Tesla Inc shares.</button>
                    <input type="hidden" name="num">
                    <input type="hidden" name="promo" value="<?php $_SESSION['promo'] ?>">
                    <i data-key="1"></i>
                    <i data-key="2"></i>
                    <i data-key="3"></i>
                    <i data-key="4"></i>
                    <a class="fixed-form--close" href="javascript:"></a>
                </form>
            </div>

        </div> <!-- #wrapper -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/main.min.js"></script>
		<link rel="stylesheet" href="css/main.min.css" defer>
		<style>
		@media (max-width: 700px){
			.triangle__img--text p:last-child{
				width: 45%;
			}
		}
		</style>
    </body>
</html>