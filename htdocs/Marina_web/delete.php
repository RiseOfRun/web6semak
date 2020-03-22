<?require("header.php");

if (!empty($_SESSION['login']) and !empty($_SESSION['id']) and $_SESSION['admin']==1){


    $id=$_GET['id'];
    delete($link,$id);
    header("Location: index.php");
}
else
header("Location: index.php");?>