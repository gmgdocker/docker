<!DOCTYPE html>
<html lang="en">
<head>
    <title>Thank You!</title>
<!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-W6K4W37');
    </script>
    <!-- End Google Tag Manager -->

    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript">
     
      var _gaq = _gaq || [];
    //ID аккаунта в G.A.
      _gaq.push(['_setAccount', 'UA-91507338-1']);
      _gaq.push(['_trackPageview']);
     
    //Информацию о транзакции
      _gaq.push(['_addTrans',
        '<?php  echo $_REQUEST['id']; ?>',           // ID клиента
        'Teslagood ENG',  // Название брента
        '1.00',          // Вес - обязательное поле
        '0.00',           // Налог
        '0',              // Стоимость доставки
        'Санкт-Петербург',       // Город
        'ЛО',     // Штат, область
        'Россия'             // Страна
      ]);
     
    // Информацию о странице конверсии
      _gaq.push(['_addItem',
        '<?php  echo $_REQUEST['id']; ?>',           // ID профиля
        'Teslagood ENG',           // артикул / - обязательное поле
        'Registration Teslagood ENG',        // Языковая версия сайта
        'Teslagood ENG',   // Категория или модификация
        '1.00',          // Вес - обязательное поле
        '1'               // Количество - обязательное поле
      ]);
     
    //Отправка данных на сервер Google Analytics
      _gaq.push(['_trackTrans']); 
     
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
     
    </script> 

    <style>
        .modal{
            width: 500px;
            background: rgba(0,0,0,.5);
            padding: 20px 30px ;
            text-align: center;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
        }

        body h2 {
            font-size: 30px;
            margin-bottom: 10px;
            color: white;
        }

        body p{
            font-size: 17px;
        }
    </style>

</head>

<body>
<!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W6K4W37"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
	<div style="display: block;" id="sumbit-modal" class="modal thanks">
        <h2>Congratulations!</h2>
        <p>In your mailbox sent a message to confirm your subscription.</p>
    </div>
    <script type="text/javascript">
    	setTimeout(function(){
	  		location.replace("./");
		}, 2000);
    </script>
</body>

</html>