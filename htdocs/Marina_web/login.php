<?require("header.php");
$ans=login($link);?>
			<div class="onenew">
			<? if (empty($_SESSION['login']) or empty($_SESSION['id'])){?>
				<form action="login.php?w=log" method="POST">
				<div class="logintitle">Вход на сайт </div>
                
                <div class="loginfield">
                    <div class="logintext"> Логин</div>
                    <input require class="logininput" name="login">
                </div>
                <div class="loginfield">
                    <div class="logintext"> Пароль</div>
                    <input  type="password"class="logininput" name="password">
				</div>
				<?if (isset($_REQUEST['w']))
					$w=$_REQUEST['w'];
				else 
					$w="a";				
				if ($w=="log") { $ans=login($link);?>
				<div class="errortext"><?=$ans?></div><?;}?>
                <div class="login"><input type="submit" class="loginlink" value= "Войти"></div>
				</form>
				<?}
				 else{
					 header("Location: index.php");
				}?>



				<div><a href="index.php" class="more">На главную</a></div>
			</div>
		</div>
	
	</div>

	

	<div class="footer">
		<h2>© Дьячкова М., Камынин А.</h2>
	</div>
</body>
</html>