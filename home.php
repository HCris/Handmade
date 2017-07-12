<!DOCTYPE html> 
<html lang="en">
	<head>
		<?php
			include("component/meta.php");
			include("component/link.php");
		?>
	</head>
	<body>
		<?php include("component/navbar.php"); ?>
		<div class="carousel">
			<div class="carousel-cell">
				<img src="img/1.jpg" alt="orange tree" />
			</div>
			<div class="carousel-cell">
				<img src="img/2.jpg" alt="One World Trade" />
			</div>
			<div class="carousel-cell">
				<img src="img/3.jpg" alt="drizzle" />
			</div>
			<div class="carousel-cell">
				<img src="img/4.jpg" alt="cat nose" />
			</div>
			<div class="carousel-cell">
				<img src="img/5.jpg" alt="contrail" />
			</div>
			<div class="carousel-cell">
				<img src="img/6.jpg" alt="golden hour" />
			</div>
			<div class="carousel-cell">
				<img src="img/7.jpg" alt="flight formation" />
			</div>
			<div class="carousel-cell">
				<img src="img/25-Bomboniera-Head.jpg" alt="flight formation" />
			</div>
			<div class="carousel-cell">
				<img src="img/9.jpg" alt="flight formation" />
			</div>
		</div>
		<div class="row ">
			<div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12 box1">
				<h2 class="text-center">Welcome to the Oxy Agency!</h2>
				<p class="text-center">Here you can get acquainted with our services and works.<br>
									To inspire ideas and enjoy the beauty.<br>Our job is to please you and your heart!
				</p>
			</div>
		</div>
		<div class="row box2">
			<div class="col col-xs-10 col-sm-4 col-md-4 col-lg-4 box3">
				<a href="work.php">
					<img src="img/servici.jpg" alt="servici">
					<h3>Work</h3>
				</a>
			</div>
			<div class="col col-xs-10 col-sm-4 col-md-4 col-lg-4 box3">
				<a href="contact.php">
					<img src="img/tele.ico" alt="portofoliu">
					<h3>Contact</h3>
				</a>
			</div>
			<div class="col col-xs-10 col-sm-4 col-md-4 col-lg-4 box3">
				<img src="img/portofoliu.png" alt="contacte">
				<h3>Portfolio</h3>
			</div>
		</div>
		<?php
			include("component/script.php");
			include("component/footer.php");
		?>
	</body>
</html>