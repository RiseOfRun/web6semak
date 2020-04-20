<?require("header.php");
$ans=login($link);?>


<section class="s-content s-content--narrow s-content--no-padding-bottom">
	   
			<article class="row format-standard">

            <div class="col-full">
			<? if (empty($_SESSION['login']) or empty($_SESSION['id'])){?> 
	
				<form action="login.php?w=log" method="POST">
				<div class="s-content__header-title">Вход на сайт </div>
                
                <div class="loginfield">
                    <div class="col-full s-content__main"> Логин</div>
                    <input require class="logininput" name="login">
                </div>
                <div class="loginfield">
                    <div class="col-full s-content__main"> Пароль</div>
                    <input class="logininput" type="password" margin-left="100px" name="password" required>
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

			</div>

			

        </article>

</section> 
    

	    <!-- s-footer
    ================================================== -->
    <footer class="s-footer">

        <div class="s-footer__main">
            <div class="row">
                
                <div class="col-two md-four mob-full s-footer__sitelinks">
                        
                    <h4>Quick Links</h4>

                    <ul class="s-footer__linklist">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="author.php">About</a></li>
                    </ul>

                </div> <!-- end s-footer__sitelinks -->

                <div class="col-two md-four mob-full s-footer__social">
                        
                    <h4>Social</h4>

                    <ul class="s-footer__linklist">
                        <li><a href="https://facebook.com">Facebook</a></li>
                        <li><a href="https://instagram.com">Instagram</a></li>
                        <li><a href="https://twitter.com">Twitter</a></li>
                        <li><a href="https://pinterest.com">Pinterest</a></li>
                    </ul>

                </div> <!-- end s-footer__social -->

            </div>
        </div> <!-- end s-footer__main -->

        <div class="s-footer__bottom">
            <div class="row">
                <div class="col-full">
                    <div class="s-footer__copyright">
                        <span>© Дьячкова, Камынин</span> 
                        <span>Site Template by <a href="https://colorlib.com/">Colorlib</a></span>
                    </div>

                    <div class="go-top">
                        <a class="smoothscroll" title="Back to Top" href="#top"></a>
                    </div>
                </div>
            </div>
        </div> <!-- end s-footer__bottom -->

    </footer> <!-- end s-footer -->
</body>
</html>