<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equip="Content-Type" content="text/html" charset="UTF-8">
	<title><?=$title?></title>
	<link rel="stylesheet" href="<?=ROOT?>css/styles.css">
</head>
<body>
	<div id="page-wrapper">
		<header id="header">
			<div class="container_top">
				<div id="primary-menu">
					<ul>
						<li><a href="<?=ROOT?>">Главная</a></li>
						<li><a href="<?=ROOT?>contacts">Контакты</a></li>
					</ul>
				</div>
				<div id="secondary-menu">
					<div class="sm-l">
						<ul>
							<li class="sm"><a href="#">КУРСОВОЙ</a></li>
						</ul>	
					</div>	
						<div class="logo">
							<a href="#"><img src="<?=ROOT?>img/logo.jpg"></a>
						</div>
					<div class="sm-r">
						<ul>	
							<li class="sm"><a href="#">ПРОЕКТ</a></li>
						</ul>
					</div>	
				</div>
			</div>	
		</header>

		<div id="content-wrapper" class="container">
			
			<div id="content">
				<div class="content_top">
					<h1>Добро пожаловать!</h1>
					<h2>Блог велосипедиста - начинающего программиста:)</h2>
				</div>
				<div class="materials"><a href="<?=ROOT?>">Мои статьи</a></div>
				<?=$content?>
			</div>
			
		</div>
			
		<footer>
			<div class="container_bottom">
				<div id="footer-secondary-menu">
					<ul>
						<li><a href="#">Всякое</a></li>
						<li><a href="#">Разное</a></li>
						<li class="up"><a href="#top">Наверх</a></li>
						<li><a href="#">Всякое</a></li>
						<li><a href="#">Разное</a></li>
					</ul>
				</div>
				<div id="footer-menu">
					<ul>
						<li><a href="<?=ROOT?>">Главная</a></li>
						<li><a href="<?=ROOT?>contacts">Контакты</a></li>
					</ul>
				</div>
			</div>	
		</footer>
			
	</div>
</body>
</html>