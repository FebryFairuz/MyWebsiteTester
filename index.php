<?php
	date_default_timezone_set('Asia/Jakarta');	
	$tglsekarang=date("Y-m-d");

	if(isset($_REQUEST['menu'])){
		$menu=$_REQUEST['menu'];
	}else{
		$menu="";
	}

	function WKT($sekarang){
		$tanggal = substr($sekarang,8,2)+0;
		$bulan = substr($sekarang,5,2);
		$tahun = substr($sekarang,0,4);

		$nama_bln=array(1=> "Jan", "Feb", "Mar", "Apr", "Mei","Jun", "Jul", "Agu", "Sep","Okt", "Nov", "Des");
		$wk=$tanggal." ".$nama_bln[(int)$bulan]." ".$tahun;
		return $wk;
	}
?>

<!DOCTYPE HTML>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<title>Layout 2</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/superfish.css">
</head>
<body>
	<header>
		<b>MyWebsite</b>
		<nav class="menu">
			<ul class="sf-menu">
				<li> <a  class="on" href="?menu=home">HOME</a></li>
				<li> <a href="#">ABOUT</a>
					<ul>
						<li class="first"><a href="">TEAM</a></li>
						<li><a href="">PHILOSOPHY</a></li>
						<li><a href="">COMPANY</a></li>
						<li class="last"><a href="">PRODUCTS</a>
							<ul>
								<li class="first"><a href="">PRODUCT ONE</a></li>
								<li><a href="">PRODUCT TWO</a></li>
								<li class="last"><a href="">PRODUCT THREE</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li> <a href="#">PORTFOLIO</a>
					<ul>
						<li><a href="">WEBDESIGN</a></li>
						<li><a href="">PHOTOS</a>
							<ul>
								<li class="first"><a href="">NATURE</a></li>
								<li><a href="">ANIMALS</a></li>
								<li class="last"><a href="">CITIES</a>
									<ul>
										<li class="first"><a href="">NEW YORK</a></li>
										<li><a href="">MONTREAL</a></li>
										<li class="last"><a href="">LAS VEGAS</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="last"><a href="">ARTS</a></li>
					</ul>
				</li>
				<li> <a href="#">BLOG</a>
					<ul>
						<li class="first"><a href="">CATEGORY ONE</a></li>
						<li><a href="">CATEGORY TWO</a></li>
						<li class="last"><a href="">CATEGORY THREE</a></li>
					</ul>
				</li>
				<li> <a href="?menu=contact">CONTACT</a> </li>
				<li> <a href="" class="sign">SIGN IN</a> </li>
				<li> <a href="" class="sign">SIGN UP</a> </li>

			</ul>
		</nav>
	</header>

	<section>
		
		<!-- galery -->
		<div id="slide">
			<img src="xxxx" alt="slide" />
			<p><span>Note :</span> Text text text text text text text text text</p>
		</div>
		<hr>

		<table border="0"><tr><td>
			<article>
			<?php
				if($menu){
					include "modul/".$_REQUEST{"menu"}.".php";
				}else{
					include "modul/home.php";
				}
			?>
			</article>
			<aside>
				<h1>Category +</h1>
				<ul>
					<li>Alfa</li>
					<li>Beta</li>
					<li>Charly</li>
					<li>Delta</li>
				</ul>
			</aside>
		</td></tr></table>
	</section>
	<footer>Copyright &copy; 2014 Febri Damatraseta</footer>
</body>
</html>