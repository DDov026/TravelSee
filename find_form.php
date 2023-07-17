<?php

/* Здесь проверяется существование переменных */
if (isset($_POST['country'])) {$country = $_POST['country'];}
if (isset($_POST['city'])) {$city = $_POST['city'];}
if (isset($_POST['flughafen'])) {$flughafen = $_POST['flughafen'];}
if (isset($_POST['nahrung'])) {$nahrung = $_POST['nahrung'];}
if (isset($_POST['daterange'])) {$daterange = $_POST['daterange'];}
if (isset($_POST['reisedauer'])) {$reisedauer = $_POST['reisedauer'];}
if (isset($_POST['min_price'])) {$min_price = $_POST['min_price'];}
if (isset($_POST['max_price'])) {$max_price = $_POST['max_price'];}
if (isset($_POST['hotelkategorie'])) {$hotelkategorie = $_POST['hotelkategorie'];}
if (isset($_POST['erw'])) {$erw = $_POST['erw'];}
if (isset($_POST['kind'])) {$kind = $_POST['kind'];}
if (isset($_POST['zimm'])) {$zimm = $_POST['zimm'];}
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['mail'])) {$mail = $_POST['mail'];}
if (isset($_POST['hotelname'])) {$hotelname = $_POST['hotelname'];}
 
/* Сюда впишите свою эл. почту */
$myaddres  = "dd.webseiten@gmail.com"; // кому отправляем
 
/* Здесь прописывается текст сообщения, \n - перенос строки */
$mes = "Запрос с сайта Levitin Reisen Landing: 
\n Reiseziel: $country \n Region: $city 
\n Abflughafen: $flughafen 
\n Nahrung: $nahrung 
\n Reisedaten: $daterange \n Reisedauer: $reisedauer 
\n Min Preis: $min_price \n Max Preis: $max_price 
\n Hotelkategorie: $hotelkategorie \n Еrwachsene: $erw \n Kinder: $kind \n Zimmer: $zimm 
\n Name: $name \n E-mail oder Tel: $mail 
\n Hotelname: $hotelname " ;
 
/* Эта функция занимается отправкой письма на указанный вами email */
$sub='Запрос с сайта Levitin Reisen Landing'; //сабж
$mail='Von:'; // от кого
$send = mail ($myaddres,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\n $mail");

/* Эта функция занимается отправкой письма на указанный email клиента */

 if (isset($_POST['mail'])) {$to = $_POST['mail'];}	 
$sub='Ваш запрос с сайта Levitin Reisen Landing'; //сабж
$myaddres='Von:'; // от кого
$send = mail ($to,$sub,$message,"Content-type:text/plain; charset = utf-8\r\n $myaddres");
$message = "
Добрый день,
Поздравляем, что вы приняли правильное решени!  
Мы получили ваш заказ.  
Наши специалисты по работе с клиентами рассмотрят ваш заказ и начнут его выполнять в ближайшее время.;
'<p style="color:green; text-align:center; font-size:0px;"><b>Thanks. All right</b></p>'";

     
    

 
ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=index.html');

?>

<!DOCTYPE html>
<html lang="ru">
<head>
<title>Levitin Reisen - Отдых на море, автобусом в Испанию, лазурный берег Франции Канны</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Русскоязычный туроператор Германии, услуги во Франкфурте, сборные туры по Европе">
<meta name="keywords" content="туроператор Германии, круизы, Levitin Reisen, экскурсионные туры, отдых на море, санатории, курорты, туры по Европе">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_container d-flex flex-row align-items-center justify-content-start">

						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
								<div>Levitin Reisen</div>
								<div>ведущий туроператор германии</div>
								<div class="logo_image"><img src="images/logo.png" alt=""></div>
							</div>
						</div>     
    </header>
	
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/form.js"></script>
<script src="plugins/daterangepicker/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
</body>
</html>