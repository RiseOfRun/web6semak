<?require("header.php");

if (!empty($_SESSION['login']) and !empty($_SESSION['id']) and $_SESSION['admin']==1){
    $id=$_GET['id'];
    $ans=update($link,$id);?>

    <div class="onenew">
        <form action="update.php?id=<?=$_GET['id']?>&w=update" method="POST">
        <div class="logintitle">Изменение Новостей </div>
        
        <div class="loginfield">
            <div class="logintext"> Заголовок</div>
            <input require class="logininput" name="title">
        </div>
        <div class="loginfield">
            <div class="logintext"> Дата </div>
            <input require type="date" class="logininput" name="d">
        </div>
        <div class="loginfield">
            <div class="logintext"> Анонс </div>
            <textarea require class="logininputbig" name="stext"></textarea>
        </div>        
        <div class="loginfield">
            <div class="logintext"> Полный текст </div>
            <textarea class="logininputbig" name="ftext"></textarea>
        </div>
        <div class="loginfield">
            <div class="logintext"> Картинка</div>
            <input class="logininput" name="img">
        </div>
         

        <?if (isset($_REQUEST['w']))
					$w=$_REQUEST['w'];
				else 
					$w="a";				
                if ($w=="update") { ?>
                
        <div class="loginfield">
        <div class="errortext"> <?=$ans?></div>
        </div><?;}?>

        <div class="login"><input type="submit" class="loginlink" value= "Изменить"></div>
        </div>
        </form> 
        <div><a href="index.php" class="more">На главную</a></div>
        </div>
		</div>
	
	</div>
	
<?;}
 else header("Location: index.php");?> 
	<div class="footer">
		<h2>© Дьячкова М., Камынин А.</h2>
	</div>
</body>
</html>