<?
    function show_news($link){
        $result = mysqli_query($link, "SELECT * FROM news order by d desc") or die("Ошибка " . mysqli_error($link)); 
        return $result;
    }
    function show_one($link,$id){
        $result = mysqli_query($link, "SELECT * FROM news WHERE id=$id") or die("Ошибка " . mysqli_error($link)); 
        if($result->num_rows!=1) {die();}
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

        $stmt = $link->prepare("SELECT * FROM users WHERE login=?");
        /* связываем параметры с метками */
        $stmt->bind_param("s", $login);
    
        /* запускаем запрос */
        $stmt->execute();
    
        /* связываем переменные с результатами запроса */
        $result = $stmt->get_result();

        $myrow = $result->fetch_assoc();
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

            if($stmt=$link->prepare("INSERT into news (id_user,title,d,stext,ftext,img) VALUES (?,?,?,?,?,?)")){

                /* связываем параметры с метками */
                $stmt->bind_param("dsssss",$p,$title, $d, $stext,$ftext,$img);
                /* запускаем запрос */
                $stmt->execute();
                return "Успешно добавлено";
            exit(0);
            }
            else return "Ошибка запроса";
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
            $flag=1;
            if (!empty($title)){
                if($stmt=$link->prepare("UPDATE news SET title=? WHERE news.id=?")){

                    /* связываем параметры с метками */
                    mysqli_stmt_bind_param($stmt,"ss",$title,$id);
                    mysqli_stmt_execute($stmt);
                }
                else $flag=0;                
            }
            if (!empty($title)){
                if($stmt=$link->prepare("UPDATE news SET d=? WHERE news.id=?")){

                    /* связываем параметры с метками */
                    mysqli_stmt_bind_param($stmt,"ss",$d,$id);
                    mysqli_stmt_execute($stmt);
                }
                else $flag=0;                
            }
            if (!empty($stext)){
                if($stmt=$link->prepare("UPDATE news SET stext=? WHERE news.id=?")){

                    /* связываем параметры с метками */
                    print($id);
                    $stmt->bind_param("ss",$stext,$id);
                    mysqli_stmt_execute($stmt);
                }
                else $flag=0;                
            }
            if (!empty($ftext)){
                if($stmt=$link->prepare("UPDATE news SET ftext=? WHERE news.id=?")){

                    /* связываем параметры с метками */
                    mysqli_stmt_bind_param($stmt,"ss",$ftext,$id);
                    mysqli_stmt_execute($stmt);
                }
                else $flag=0;                
            }
            if (!empty($img)){
                if($stmt=$link->prepare("UPDATE news SET img=? WHERE news.id=?")){

                    /* связываем параметры с метками */
                    mysqli_stmt_bind_param($stmt,"ss",$img,$id);
                    mysqli_stmt_execute($stmt);
                }
                else $flag=0;                
            }
            if ($flag==1)return "Успешно изменено";
            else return "Ошибка запроса";
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

            $stmt = $link->prepare("INSERT into users(login,fio,password,admin) values(?,?,?,0)");
            $stmt->bind_param("ssss",$login, $fio,$password,$admin);
            $stmt->execute();
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