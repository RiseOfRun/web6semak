<?require("header.php");
			
			$res=show_news($link);

			
			while($row = $res->fetch_assoc()) {?>

				<div class="onenew">
					<div class ="date"><?=$row['d']?>
					</div>
					<div class="title"><?=$row['title']?> </div>
					<div class="onenewcontent"> 
						<div class="imageblock"><a class="test-popup-link" href=<?=$row['img']?>><img src=<?=$row['img']?> width=300> </a></div>
						<div class="textcontent"> 
							<p><?=$row['stext']?></p>
						</div>
					</div>
					<div><a href="new.php?id=<?=$row['id'] ?>" class="more">Подробнее</a>
					<? if (!empty($_SESSION['login']) and !empty($_SESSION['id']) and $_SESSION['admin']==1){?>
						<a href="update.php?id=<?=$row['id'] ?>" class="more">Изменить новость</a>
					
					<a href="delete.php?id=<?=$row['id'] ?>" class="more">Удалить новость</a>
					<?;}?>
					
					
					</div>
				</div>
			<?}?>
			

			<div class="gallery">		
    <a href="news1.jpg">Open image 1</a>
    <a href="news2.jpg"></a>
</div>

		</div>	
	</div>
	</div>

	<script>
        $(document).ready(function() {
        $('.image-link').magnificPopup({type:'image'});
        });

        $('.test-popup-link').magnificPopup({
        type: 'image'
        // other options
        });
        </script>


	<div class="footer">
		<h2>© Дьячкова М., Камынин А.</h2>
	</div>
</body>
</html>