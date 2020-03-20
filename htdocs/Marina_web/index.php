<?php
session_start();
require("functions.php");
$mysqli=new mysqli('localhost', 'root', '', 'mybase');
if ($mysqli->connect_errno){
	echo "Unable to connect to MySQL: (" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
}

// if (isset($_SESSION['admin']) && ($_SESSION['admin']>0))
// 	$is_admin=1;
// else
// 	$is_admin=0;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>JUST DANCE!</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="header.css">
	<link rel="stylesheet" href="sidemenu.css">
	<link rel="stylesheet" href="new.css">
	<link rel="stylesheet" href="footer.css">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=0">
    <meta name="author" content="HTML5BOOK">
</head>

<body>
	<div class="headercontainer">
	<div><h1>JUST DANCE!</h1></div>
		<div><a href="login.php?w=login" class="login">Войти</a></div>
	</div>
	<div class="headercontent">
		<div class="sidemenu"> 
			<div><a href="index.php?w=show_news" class="menu">На главную</a></div>
			<div><a href="author.php?w=about" class="menu">Об авторах</a></div>
		</div>
		
		<div class="newscontent"> 
			<div class="onenew">
				<div class ="date">28.02.2020</div>
				<div class="title"> Леди Гага вернулась к танцам</div>
				<div class="onenewcontent"> 
					<div class="imageblock"><img class="image" src="news1.jpg" title="Леди Гага вернулась к танцам" ></div>
					<div class="textcontent"> 
						<p>Первый за последние 3 года видеоклип выпустила певица Lady Gaga - 
						он абсолютно танцевальный, такой, каким мы когда-то привыкли видеть клипы певицы.</p>
						<p>В последнее время Леди Гага практически не занималась музыкой, сконцентрировавшись на 
						актерской карьере, Напомним, недавно она снялась в фильме "Звезда родилась".</p>
						<p>Уникальность видео в том, что снято оно на смартфон - iPhone последнем модели. 
						А сам трек певица записала вместе с Максом Мартином. </p>
					</div>
				</div>
				<div><a href="new.php" class="more">Подробнее</a></div>
			</div>
			<div class="onenew">
				<div class ="date">27.02.2020</div>
				<div class="title">ЧЕМ ВАС УДИВИТ PRO-AM MOSCOW DANCE HOLIDAYS: 12 ПРИЧИН ПОСЕТИТЬ ТУРНИР </div>
				<div class="onenewcontent"> 
					<div class="imageblock"><img class="image" src="news2.jpg" title="ЧЕМ ВАС УДИВИТ PRO-AM MOSCOW DANCE HOLIDAYS: 12 ПРИЧИН ПОСЕТИТЬ ТУРНИР "></div>
					<div class="textcontent"> 
						<p>4-5 апреля впервые пройдёт международный танцевальный фестиваль Pro-Am Moscow Dance Holidays, 
							- одно из самых необычных танцевальных событий нового сезона. </p>
							<p>Организаторы обещают удивить участников, которые «всё видели» и «везде были», 
							а Dance.ru составил список из 12 задумок, который позволят осуществить идеи организаторов. </p>
					</div>
				</div>
				<div><a href="new.php" class="more">Подробнее</a></div>
			</div>
			<div class="onenew">
				<div class ="date">26.02.2020</div>
				<div class="title"> GALLADANCE - SHOWCASE GRAND PRIX: впечатления судей, результаты и фоторепортаж</div>
				<div class="onenewcontent"> 
					<div class="imageblock"><img class="image" src="news3.jpg" title="GALLADANCE - SHOWCASE GRAND PRIX: впечатления судей, результаты и фоторепортаж"></div>
					<div class="textcontent"> 
						<p>23 февраля уже в третий раз состоялось одно из самых ярких мероприятий танцевальных клубов GallaDance - Showcase Grand Prix, - 
							конкурс шоу-номеров, в котором принимают участие ученики и преподаватели клубов GallaDance. </p>
					</div>
				</div>
				<div><a href="new.php" class="more">Подробнее</a></div>
			</div>
			<?php
				if(isset($_REQUEST['w']))
					$w=$_REQUEST['w'];
				else
					$w="show_news";
				
					switch($w){
						case "show_news":
							show_news();
					}





			?>
		</div>
	
	</div>

	<div class="footer">
		<h2>© Дьячкова М., Камынин А.</h2>
	</div>
</body>
</html>