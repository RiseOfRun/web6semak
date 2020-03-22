<?php
    

    function show_news($link){
        $result = mysqli_query($link, "SELECT * FROM news order by d desc") or die("Ошибка " . mysqli_error($link)); 
        return $result;
    }
    function show_one($link,$id){
        $result = mysqli_query($link, "SELECT * FROM news WHERE id=$id") or die("Ошибка " . mysqli_error($link)); 
        return $result;
    }
    function login($link){
        if (isset($_POST['login'])) { 
            $login = $_POST['login']; 
            if ($login == '') { 
                unset($login);
            } 
        } 
        if (isset($_POST['password'])) {   
            $password=$_POST['password']; 
            if ($password =='') { 
                unset($password);
            }
        }
        if (empty($login) or empty($password)) {
            return "Заполните все поля";
            exit (1);
        }
        
        $result = mysqli_query($link,"SELECT * FROM users WHERE login='$login'");
        $myrow = mysqli_fetch_array($result);
        if (empty($myrow['login']))
        {
            return "Введен некорректный логин или пароль.";
            exit(1);
        }
        else {
            if ($myrow['password']==$password) {
                $_SESSION['login']=$myrow['login'];
                $_SESSION['id']=$myrow['id'];
                $_SESSION['fio']=$myrow['fio'];
                $_SESSION['admin']=$myrow['admin'];
                return "Вход выполнен";
            }
            else{
            return "Введен некорректный логин или пароль.";
            exit(1);
            }
        }
    }
    function unlogin(){
        unset($_SESSION['login]']);
        unset($_SESSION['id']);
        exit();
    }

    function add($link){
        if (isset($_POST['title'])) { 
            $title = $_POST['title']; 
            if ($title == '') { 
                unset($title);
            } 
        } 
        if (isset($_POST['d'])) {   
            $d=$_POST['d']; 
            if ($d =='') { 
                unset($d);
            }
        }
        if (isset($_POST['stext'])) { 
            $stext = $_POST['stext']; 
            if ($stext == '') { 
                unset($stext);
            } 
        } 
        if (isset($_POST['ftext'])) {   
            $ftext=$_POST['ftext']; 
            if ($ftext =='') { 
                unset($ftext);
            }
        }
        if (isset($_POST['img'])) {   
            $img=$_POST['img']; 
            if ($img =='') { 
                unset($img);
            }
        }
        if (empty($title) or empty($d)or empty($img)or empty($stext)or empty($ftext)) {
            return "Заполните все поля";
            exit (1);
        }
       
        else {
            $p=$_SESSION['id'];

            $link->query("INSERT into news (id_user,title,d,stext,ftext,img) VALUES ('$p','$title', '$d', '$stext','$ftext', '$img')");
            return "Успешно добавлено";
            exit(0);
        }
    }

    function update($link,$id){
        if (isset($_POST['title'])) { 
            $title = $_POST['title']; 
            if ($title == '') { 
                unset($title);
            } 
        } 
        if (isset($_POST['d'])) {   
            $d=$_POST['d']; 
            if ($d =='') { 
                unset($d);
            }
        }
        if (isset($_POST['stext'])) { 
            $stext = $_POST['stext']; 
            if ($stext == '') { 
                unset($stext);
            } 
        } 
        if (isset($_POST['ftext'])) {   
            $ftext=$_POST['ftext']; 
            if ($ftext =='') { 
                unset($ftext);
            }
        }
        if (isset($_POST['img'])) {   
            $img=$_POST['img']; 
            if ($img =='') { 
                unset($img);
            }
        }
        if (empty($title) and empty($d) and empty($img) and empty($stext) and empty($ftext)) {
            return "Заполните хотя бы одно поле";
            exit (1);
        }
       
        else {
            if (!empty($title))
            $link->query("UPDATE news SET title='$title' WHERE news.id='$id'");
            if (!empty($d))
            $link->query("UPDATE news SET d='$d' WHERE news.id='$id'");
            if (!empty($stext))
            $link->query("UPDATE news SET stext='$stext' WHERE news.id='$id'");
            if (!empty($ftext))
            $link->query("UPDATE news SET ftext='$ftext' WHERE news.id='$id'");
            if (!empty($img))
            $link->query("UPDATE news SET img='$img' WHERE news.id='$id'");
            return "Успешно изменено";
            exit(0);
        }
    }
    
    function delete($link,$id){
        $link->query("DELETE from news WHERE news.id='$id'");
    }
    function registr($link){
        if (isset($_POST['login'])) { 
            $login = $_POST['login']; 
            if ($login == '') { 
                unset($login);
            } 
        } 

        if (isset($_POST['fio'])) {   
            $fio=$_POST['fio']; 
            if ($fio =='') { 
                unset($fio);
            }
        }

        if (isset($_POST['password'])) {   
            $password=$_POST['password']; 
            if ($password =='') { 
                unset($password);
            }
        }

        if (empty($login) or empty($password) or empty($fio)) {
            return "Заполните все поля";
            exit (1);
        }
        else{
        $result = mysqli_query($link,"SELECT * FROM users WHERE login='$login'");
        $myrow = mysqli_fetch_array($result);
        if ($myrow==NULL)
        {

            $sql = "INSERT into users(login,fio,password,admin) values('$login','$fio','$password',0)";
            mysqli_query($link,$sql);
            header("Location: index.php");
            exit(0);
        }
        else{
           
            return "Пользователь $login уже зарегистрирован";
            exit(1);
        }
        }
    }

?>