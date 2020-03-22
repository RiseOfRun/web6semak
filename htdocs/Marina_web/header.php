<? 
session_start();
require("functions.php");

$link=mysqli_connect('localhost', 'root', '', 'mybase');
if ($link->connect_errno){
	echo "Unable to connect to MySQL: (" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
}

if (isset($_SESSION['admin']) && ($_SESSION['admin']==1))
	$is_admin=1;
else
	$is_admin=0;
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
    <link rel="stylesheet" href="login.css">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=0">
    <meta name="author" content="HTML5BOOK">
</head>

<body>
	<div class="headercontainer">
    <div><h1>JUST DANCE!</h1></div>
    
    <? if (empty($_SESSION['login']) or empty($_SESSION['id'])){?>
    
    <div class="middle">
         <div><a href="registration.php" class="inmid">Регистрация</a></div>
         
    </div>

    <div class="rig"><a href="login.php" class="loginmain">Войти</a></div>
    <?}
    else{?>
    <div class="middle">
        <div class="inmid"><?=$_SESSION['fio']?>   </div>
        <div class="inmid"> <?=$_SESSION['login']?>   </div>
    
    </div>

     <div class="rig"><a href="logout.php" class="loginmain">Выйти</a></div>




    <?;}?>
	</div>
	<div class="headercontent">
		<div class="sidemenu"> 
			<div><a href="index.php" class="menu">На главную</a></div>
            <? if (!empty($_SESSION['login']) and !empty($_SESSION['id']) and $_SESSION['admin']==1){?>
            <div><a href="add.php" class="menu">Добавить новость</a></div>
            <div><a href="author.php" class="menu">Об авторах</a></div>
            <?}else {?>
            <div><a href="author.php" class="menu">Об авторах</a></div>
            <?}?>
		</div>
		
		<div class="newscontent">