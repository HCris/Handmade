
<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	include("component/meta.php");
	include("component/link.php");
	?>
	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">

</head>
<body>
	<?php include("component/navbar.php");?>
	<div class="container">
				<div class="row">
					<div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12 cap">
						<h1>Cllection of Handmade Work</h1>
						<blockquote><i>Creativity is<br> intelligens having FUN
										<footer>Albert Einstein</footer>
									</i>
						</blockquote>
					</div>
				</div>
			</div>
			<div class="container-fluend">
				<div class="row">
					<div class="popup-gallery">
						<div class="col col-xs-12 col-sm-4 col-md-4 col-lg-4 corp">
							<a href="img/Wedding bonbons/1..jpg" title="HandMade">
								<img src="img/Wedding bonbons/1..jpg" alt="">
							</a>
							<a href="img/Wedding bonbons/2.jpg" title="HandMade">
								<img src="img/Wedding bonbons/2.jpg" alt="">
							</a>
							<a href="img/bomboniere-matrimonio_agosto2015_01.jpg" title="HandMade">
								<img src="img/bomboniere-matrimonio_agosto2015_01.jpg" alt="">
							</a>
						</div>
						<div class="col col-xs-12 col-sm-4 col-md-4 col-lg-4 corp">
							<a href="img/Wedding bonbons/3.jpg" title="HandMade">
								<img src="img/Wedding bonbons/5.jpg" alt="">
							</a>
							<a href="img/Wedding bonbons/4.jpg" title="HandMade">
								<img src="img/Wedding bonbons/4.jpg" alt="">
							</a>
							<a href="img/5.jpg" title="HandMade">
								<img src="img/5.jpg" alt="HandMade">
							</a>
						</div>
						<div class="col col-xs-12 col-sm-4 col-md-4 col-lg-4 corp">
							<a href="img/Wedding bonbons/5.jpg" title="HandMade">
								<img src="img/Wedding bonbons/5.jpg" alt="HandMade">
							</a>
							<a href="img/25-Bomboniera-Head.jpg" title="HandMade">
								<img src="img/25-Bomboniera-Head.jpg" alt="HandMade">
							</a>
							<a href="img/9.JPG" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
							<i class="fa fa-heart"></i></a>
								<img src="img/9.JPG" alt="HandMade">
							</a>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col col-xs-10 col-sm-10 col-md-12 col-lg-12">
				<div class="btn btn-primary btn-sm inputfile">
						<span>Choose file</span>
						<input type="file" name="myfile" />
					</div>
				</div>
			</div>
			<hr>
			<div class="container">
				<div class="row">
					<div class="col col-xs-10 col-sm-10 col-md-12 col-lg-12">
						<h1>Commentes</h1>
						<blockquote><i>MIA PLACUT FOARTE TARE  PRODUSUL VOSTRU</i>
									<footer>Albert Einstein</footer></i>
						</blockquote>
					</div>
					<div class="col col-xs-10 col-sm-10 col-md-12 col-lg-12">
					  <!--Header-->
						<div class="text-center">
							<h3><i class="fa fa-pencil"></i> commentes:</h3>
							<hr class="mt-2 mb-2">
						</div>

						<!--Body-->
						<form action="action/commentes.php" method="POST" class="commentes">
						<p>Add your commentes.</p>
						<br>

						<!--Body-->
						<div class="md-form">
							<i class="fa fa-user prefix"></i>
							<input type="text" id="form3" placeholder="Your name" name="name" class="form-control">
						</div>

						<div class="md-form">
							<i class="fa fa-weixin prefix"></i>
							<input id="input_text" type="text" placeholder="Your commentes" length="10">
						</div>

						<div class="text-center">
							<button class="btn btn-default">ADD</button>
						</div>
						</form>
					</div>
				</div>
			</div>
			<hr>
		<?php
			include("component/footer.php");
			include("component/script.php");
		?>
	</div>
</body>
</html>