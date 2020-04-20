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
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Category - Philosophy</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

    

<body id="top">

    <!-- pageheader
    ================================================== -->
    <div class="s-pageheader">

        <header class="header">
            <div class="header__content row">

                <div class="header__logo">
                    <a class="logo" href="index.html">
                        <img src="images/logo.svg" alt="Homepage">
                    </a>
                </div> <!-- end header__logo -->

                <ul class="header__social">
                    <li>
                        <a href="https://facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="https://twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="https://instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="https://pinterest.com"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                    </li>
                </ul> <!-- end header__social -->


                <? if (empty($_SESSION['login']) or empty($_SESSION['id'])){?>
                <a class="header__search-trigger1" href="login.php">Login</a>

                <a class="header__search-trigger2" href="registration.php">Registration</a><?}
                else{?>
                        <div color="red" class="header__search-trigger2" href="#0"><?=$_SESSION['login']?></div>
                        <a class="header__search-trigger1" href="logout.php">Logout</a>
                <?}?>
                

                <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>

                <nav class="header__nav-wrap">

                    <h2 class="header__nav-heading h6">Site Navigation</h2>

                    <ul class="header__nav">
                        <li><a href="index.php" title="">Home</a></li>
                        <li><a href="author.php" title="">Authors</a></li>

                        
                        
                        <?if (!empty($_SESSION['login']) and !empty($_SESSION['id']) and $_SESSION['admin']==1){?>
                            <li><a href="add.php" class="menu">Добавить Новость</a></li>
							<?}?>
                    </ul> <!-- end header__nav -->

                    <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

                </nav> <!-- end header__nav-wrap -->

            </div> <!-- header-content -->
        </header> <!-- header -->

    </div> <!-- end s-pageheader -->