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
						<h3 class="disp__first--title">Sabes
							<br>
							<span>qué conexión</span> existe entre</h3>
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
								<p class="after">el cohete Falcon Heavy de SpaceX</p>
								<p class="after">los lanzallamas de “The Boring Company”</p>
								<p class="after">el red mundial de internet basada en el espacio</p>
							</div>
							<div class="triangle__main">
								<img src="../img/big.png" alt="">
								<p>
									<span>el crecimiento</span>
									de las acciones de Tesla Inc?
								</p>
							</div>
						</div>
						<a href="#disp__sec" class="next">
							<img src="../img/scroll.png" alt="Scroll">
							¿Cuál?
						</a>
					</div>
				</div>
				<div class="disp__sec section">
					<div class="disp__sec--block">
						<div class="disp__sec--left">
							<div class="disp__sec--leftText">
								<h3>En febrero, las acciones de Tesla Inc <b>subieron casi <span>un 20%</span></b> luego de implementar varios desarrollos de Musk:</h3>
								<div data-num="1"><img src="../img/img1.png" alt=""><p>El lanzamiento del misil <span>Falcon Heavy</span> – el invento más poderoso de los últimos 45 años;</p></div>
								<div data-num="2"><img src="../img/img2.png" alt=""><p>Ventas de <span>20 mil lanzallamas</span> durante 100 horas;</p></div>
								<div data-num="3"><img src="../img/img3.png" alt=""><p>Lanzamiento del primer satélite de prueba Falcon 9 como parte del programa "Wi-Fi universal".</p></div>
								<a href="#disp__third" class="next">
									<img src="../img/scroll.png" alt="Scroll">
									¿Más?
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
								Todos estos son <span><b>los proyectos de Elon Musk</b></span>, un hombre que no teme implementar los proyectos más atrevidos y, por supuesto, <span>¡logra el éxito!</span>
							</p>
						</div>
					</div>
				</div>
				<div class="disp__third section">
					<div class="box">
						<h3 class="disp__third--title"><b>Éxitos</b> de Elon Musk = <b>crecimiento</b> de la capitalización de su empresa</h3>
						<h4 class="disp__third--subtitle"><b>Invierta</b> en acciones de Tesla y <b>gane dinero</b> en el desarrollo de las tecnologías del futuro!</h4>
						<form class="form">
							<b class="form__title">Invertir en Tesla Inc</b>
							<div class="form__block">
								<input class="form__input" type="text" name="name" required id="name">
								<label class="form__label" for="name">Nombre</label>
								<p class="error">Por favor ingrese un nombre válido</p>
							</div>
							<div class="form__block">
								<input class="form__input" type="email" name="email" required id="email">
								<label class="form__label" for="email">E-mail</label>
								<p class="error">Por favor ingrese un correo e-mail válido</p>
							</div>
							<div class="form__block">
								<input class="form__input search" type="search" name="country" required id="country" data-current="<?php echo $ipCountry; ?>">
								<label class="form__label" for="country">País</label>
								<p class="error">Por favor seleccione un país</p>
							</div>
							<div class="form__block">
								<input class="form__input" type="tel" name="phone" required id="phone">
								<label class="form__label" for="phone">Número de teléfono</label>
								<p class="error">Por favor ingrese un número de teléfono válido</p>
							</div>
							<p class="error-main"></p>
							<button class="form__btn" type="submit">Compre acciones de Tesla Inc.</button>
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

            <a class="main--btn" href="javascript:">Compre acciones de Tesla Inc.</a>
            <div class="fixed-form">
                <form class="form">
                    <b class="form__title">Invertir en Tesla Inc</b>
                    <div class="form__block">
                        <input class="form__input" type="text" name="name" required id="name">
                        <label class="form__label" for="name">Nombre</label>
                        <p class="error">Por favor ingrese un nombre válido</p>
                    </div>
                    <div class="form__block">
                        <input class="form__input" type="email" name="email" required id="email">
                        <label class="form__label" for="email">E-mail</label>
                        <p class="error">Por favor ingrese un correo e-mail válido</p>
                    </div>
                    <div class="form__block">
                        <input class="form__input search" type="search" name="country" required id="country" data-current="<?php echo $ipCountry; ?>">
                        <label class="form__label" for="country">País</label>
                        <p class="error">Por favor seleccione un país</p>
                    </div>
                    <div class="form__block">
                        <input class="form__input" type="tel" name="phone" required id="phone">
                        <label class="form__label" for="phone">Número de teléfono</label>
                        <p class="error">Por favor ingrese un número de teléfono válido</p>
                    </div>
                    <p class="error-main"></p>
                    <button class="form__btn" type="submit">Compre acciones de Tesla Inc.</button>
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
        <style type="text/css">
        	.triangle__main p {font-size: 2.5rem}
        	.triangle__img--text p:nth-child(2) {left: -15.5%; width: 22%;}
        	.disp__first--title span {font-size: 6.2rem;}
        	.disp__first--btn {padding-left: 3.7rem; padding-right: 3.7rem;}
        	@media (max-width: 700px){
        		.triangle__main p span {font-size: 4.7rem;}
        		.triangle__img--text p:nth-child(2) {left: 0;bottom: -25%; width: 35%;}
        		.triangle__img--text p:last-child {right: 0;bottom: -25%;width: 42%;}
        		.form__btn,.disp__first--btn {font-size: 2.7rem}
        	}
        </style>
    </body>
</html>