<? 
// require("functions.php");
require("header.php");
$link=mysqli_connect('localhost', 'root', '', 'mybase');
if ($link->connect_errno){
	echo "Unable to connect to MySQL: (" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
}
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
    <link rel="stylesheet" href="login.css">
	<link rel="stylesheet" href="footer.css">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=0">
       <meta name="author" content="HTML5BOOK">
</head>

<body>	
		<div class="newscontent"> 
		<?
			$res=show_one($link,$_GET['id']);
			while($oneres = $res->fetch_assoc()) {?>
			<div class="onenew">
				<div class ="date"><?=$oneres['d']?></div>
				<div class="titleind"><?=$oneres['title']?></div>
				<div class="onenewcontent"> 
					<div class="imageblockind"><img class="image" src=<?=$oneres['img']?> title=<?=$oneres['title']?> ></div>
					<div class="textcontent"> 
						<p><?=$oneres['ftext']?></p>
					</div>
				</div>
				<div><a href="index.php" class="more">Назад</a></div>
			</div>
			<? };?>
		</div>
	</div>
</div>

	<div class="footer">
		<h2>© Дьячкова М., Камынин А.</h2>
	</div>
</body>
</html>