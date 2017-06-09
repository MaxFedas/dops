<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Flymama</title>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=yes"/>
	<meta name="HandheldFriendly" content="true" />
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
	<meta content="telephone=no" name="format-detection">
	
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700i&amp;subset=cyrillic" rel="stylesheet">
	
	<!-- BEGIN CSS STYLES -->
	<link rel="stylesheet" href="css/style.css" />
	<!-- END CSS STYLES -->
		
	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- Favicon	
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	End favicon -->
</head>

<body>
	<!-- Header -->
	<header class="header">
		<div class="wrap">
			<a href="#" class="logo"><img src="images/logo.png" alt="" /></a>
			<div class="top_menu">
				<ul>
					<li><a href="#">Обо мне</a></li>
					<li><a href="#">Блог</a></li>
					<li><a href="#">С чего начать</a></li>
					<li><a href="#">Партнерам</a></li>
				</ul>
			</div>
			<a class="search-btn"></a>
			<a class="menu-btn">
				<span class="lt"></span>
				<span class="lm"></span>
				<span class="lb"></span>
			</a>
			<div class="clr"></div>
		</div>
	</header>
	
	<!-- Search -->
	<div class="section search-panel">
		<div class="vertical-align">
			<div class="search-field">	
				<input type="search" name="search" placeholder="Поиск" />
				<a class="btn"></a>
			</div>
		</div>
	</div>
	
	<!-- Wrapper -->
	<section class="wrapper">
	
		<!-- Section Started -->
		<div class="section getconfirm section-1">
			<a href="#" class="click_btn">&nbsp;<span>New here</span></a>
			
			<div class="vertical-align">
				<div class="wrap">
					<div class="info-txt">
						<div class="title">Умница!</div>
						<div class="content">
							<p>Е-мейл со ссылкой на обещанный подарок уже в пути! В течении пяти минут мое письмо будет в вашей входящей почте, проверьте ее (а также папку <em>«Спам»</em>, если письма все нет и нет).</p>
							<p>Если у вас возникают проблемы с подпиской или письмо почему-то не приходит, напишите нам на <a href="mailto:vopros.svete@gmail.com">vopros.svete@gmail.com</a> и мы постараемся помочь вам, как можно скорее. На всякий случай уточняю, что наше рабочее время с 10.00 до 18.00 по МСК.</p>
							<h3>Искренне ваша, Света Гончарова.</h3>
							<p><em>P.S. Буду рада встретиться с вами в социальных сетях.<br/> Если что, ищите меня тут: </em></p>
						</div>
						<div class="social">
							<a href="#" class="fb" target="_blank"></a>
							<a href="#" class="yt" target="_blank"></a>
							<a href="#" class="in2" target="_blank"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<div class="popup_groups">
		<!-- Popup Menu -->
		<div class="overlay" id="overlay_menu"></div>
		<div class="popup popup_menu" id="popup_menu">
			<div class="popup_in">
				<!--
				<div class="banner">
					<div class="image" style="background-image: url(images/pm-banner-1.jpg);"></div>
					<div class="info">
						<div class="title">Успевай главное</div>
						<div class="desc">
							Как построить содержательный и прибыльный распорядок
						</div>
						<div class="bts">
							<a href="#" class="btn btn_white">Начать</a>
						</div>
					</div>
				</div>
				-->
				<ul class="nav_list">
					<li><a href="#">Главная</a></li>
					<li><a href="#">Ресурсы для мам</a></li>
					<li class="active"><a href="#">Отзывы</a></li>
					<li><a href="#">Флаймама-клубы</a></li>
					<li><a href="#">Книги и полиграфия</a></li>
					<li><a href="#">Консультанты</a></li>
				</ul>
				<div class="text">
					Есть вопросы, можите нам их <a href="#" class="ask_btn">задать!</a>
				</div>
			</div>
			<a class="close"></a>
		</div>
		
		<div class="overlay" id="overlay_ask"></div>
		<div class="popup popup_ask" id="popup_ask">
			<div class="popup_in">
				<form name="askForm" id="askForm" method="post">
					<div class="c_form">
						<div class="title">Задать вопрос</div>
						<div class="group">
							<div class="field">
								<input type="text" name="name" placeholder="Имя и фамилия" />
							</div>
						</div>
						<div class="group row">
							<div class="col-2">	
								<div class="field">
									<input type="text" name="phone" placeholder="Телефон" />
								</div>
							</div>
							<div class="col-2">
								<div class="field">
									<input type="text" name="email" placeholder="E-mail" />
								</div>
							</div>
						</div>
						<div class="group">
							<div class="field">
								<textarea name="text" placeholder="Ваш вопрос..."></textarea>
							</div>
						</div>
						<div class="bts bts-right">
							<a href="#" class="btn" onclick="$('#askForm').submit(); return false;">Отправить</a>
						</div>
						<div class="txt">Ваши данные не будут переданы третьим лицам.</div>
					</div>
					<div class="c_thanks">
						<div class="title">Спасибо за вопрос! <span>Мы постараемся ответить Вам в течении 10 минут!</span></div>
						<div class="image"></div>
						<div class="txt">Так же, Вы можите просмотреть <a href="#">последние новости</a> от флаймамы!</div>
					</div>
				</form>
			</div>
			<a class="close"></a>
		</div>
	</div>
	
	<!-- BEGIN JQUERY -->
    <script src="js/jquery.min.js"></script>
	<script src="js/swiper.min.js"></script>
	<script src="js/jquery.maskedinput.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/messages_ru.min.js"></script>
	<script src="js/jquery.formstyler.js"></script>
	<script src="js/magnific-popup.js"></script>
	<script src="js/script.js"></script>
	<!-- END JQUERY -->
</body>
</html>