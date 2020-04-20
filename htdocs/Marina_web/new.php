<? 
// require("functions.php");
require("header.php");
$link=mysqli_connect('localhost', 'root', '', 'mybase');
if ($link->connect_errno){
	echo "Unable to connect to MySQL: (" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
}

?>
	
    <!-- s-content
    ================================================== -->
    <section class="s-content s-content--narrow s-content--no-padding-bottom">
	<?$res=show_one($link,$_GET['id']);
	while($oneres = $res->fetch_assoc()) {?>
        <article class="row format-standard">

            <div class="s-content__header col-full">
                <h1 class="s-content__header-title">
                    <?=$oneres['title']?>
                </h1>
                <ul class="s-content__header-meta">
                    <li class="date"><?=$oneres['d']?></li>
                </ul>
            </div> <!-- end s-content__header -->
    
            <div class="s-content__media col-full">
                <div class="s-content__post-thumb">
					<img src="<?=$oneres['img']?>"   
                         >
                </div>
            </div> <!-- end s-content__media -->

            <div class="col-full s-content__main">

                <p class="lead"><?=$oneres['ftext']?><p>



            </div> <!-- end s-content__main -->

        </article>

	<?}?>
    </section> <!-- s-content -->
	
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

    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
