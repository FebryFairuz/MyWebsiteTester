<div class="head">
	<h1>News</h1>
</div>
<?php
for($i=1; $i<=3; $i++){ ?>
	<div id="blog">
		<img src="<?php echo "images/pic$i.jpg";?>" alt="<?php echo "images/pic$i.jpg";?>" />
		<div class="isi">
			<h1>Judul</h1>
			<div><span><?php echo WKT($tglsekarang);?> by Febry</span> <span>21 Comment</span></div>
			<p>Text text text text text text text text text text text text text
			 text text text text text text text text text text text text text text
			 text text text text text text text text text text text text text text
			 text text text text text text text text text text text text text text
			 text text text text text text text text text text text text text text
			 text text text text.</p>
			 <p><a href="">Read More...</a></p>
		</div>
	</div>
	<hr>
<?php }	?>