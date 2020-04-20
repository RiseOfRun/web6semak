 <?require("header.php");
			
			$res=show_news($link);?>
			<section class="s-content">

			<div class="row narrow">
				<div class="col-full s-content__header" data-aos="fade-up">
					<h1> Dance news</h1>
	
					<p class="lead">Классные новости</p>
				</div>
			</div>

			
			<div class="row masonry-wrap">
				<div class="masonry">
	
					<div class="grid-sizer"></div>
					<?while($row = $res->fetch_assoc()) {?>
	
					<article class="masonry__brick entry format-standard" data-aos="fade-up">
	
						<div class="entry__thumb">
							<a href="new.php?id=<?=$row['id'] ?>" class="entry__thumb-link">
								<img src="<?=$row['img']?>" > 
							</a>
						</div>
	
						<div class="entry__text">
							<div class="entry__header">
								
								<div class="entry__date">
									<a href="new.php?id=<?=$row['id'] ?>">><?=$row['d']?></a>
								</div>
								<h1 class="entry__title"><a href="new.php?id=<?=$row['id'] ?>"><?=$row['title']?> </a></h1>
								
							</div>
							<div class="entry__excerpt">
								<p>
									<?=$row['stext']?>
								</p>
							</div>

							<div class="entry__meta">
                            <?if (!empty($_SESSION['login']) and !empty($_SESSION['id']) and $_SESSION['admin']==1){?>
								<div><a href="update.php?id=<?=$row['id'] ?>" class="more">Изменить новость</a></div>
								<div><a href="delete.php?id=<?=$row['id'] ?>" class="more">Удалить новость</a></div>
							<?}?>
                        	</div>
						</div>
	
					</article> <!-- end article -->
					<?}?>
	
				</div> <!-- end masonry -->
			</div> <!-- end masonry-wrap -->

	
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