<? require("header.php");?>


	

    <section class="s-content s-content--narrow s-content--no-padding-bottom">
	   
       <article class="row format-standard">

       <div class="col-full">
       <?if (!empty($_SESSION['login']) and !empty($_SESSION['id']) and $_SESSION['admin']==1){
        $ans=add($link);?>
        <div class="onenew">
            <form action="add.php?w=add" method="POST">
            <div class="s-content__header-title">Добавление новости </div>
            
            <div class="loginfield">
                <div class="col-full s-content__main"> Заголовок</div>
                <input require class="logininput" name="title">
            </div>
            <div class="loginfield">
                <div class="col-full s-content__main"> Дата </div>
                <input require type="date" class="logininput" name="d">
            </div>
            <div class="loginfield">
                <div class="col-full s-content__main"> Анонс </div>
                <textarea require class="logininputbig" name="stext"></textarea>
            </div>        
            <div class="loginfield">
                <div class="col-full s-content__main"> Полный текст </div>
                <textarea class="logininputbig" name="ftext"></textarea>
            </div>
            <div class="loginfield">
                <div class="col-full s-content__main"> Картинка</div>
                <input class="logininput" name="img">
            </div>
    
            <?if (isset($_REQUEST['w']))
                        $w=$_REQUEST['w'];
                    else 
                        $w="a";				
                    if ($w=="add") { ?>
                    
            <div class="loginfield">
            <div class="errortext"> <?=$ans?></div>
            </div><?;}?>
    
            <div class="login"><input type="submit" class="loginlink" value= "Добавить"></div>
            </div>
            </form>
            </div>
            </div>
        
        </div>
        <?;}
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