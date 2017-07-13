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
			<a href="#abaut_me">
				<img src="img/portofoliu.png" alt="contacte">
				<h3>About Me</h3>
			</a>
			</div>
		</div>
		<div class="parallax"></div>
		<section class="section extra-margins">
		<!--Section: Blog v.1-->
			<div class="row">

				<!--First column-->
					<div id="abaut_me" class=" col-xs-10 col-xs-offset-1 col-sm-4 col-md-4 mb-r">
					<!--Featured image-->
						<div class="view overlay hm-white-slight">
							<img src="https://mdbootstrap.com/img/Photos/Horizontal/People/6-col/img%20(80).jpg" alt="Sample image for first version of blog listing">
								<a>
									<div class="mask waves-effect waves-light"></div>
								</a>
						</div>
					</div>
				<!--/First column-->
				<!--Second column-->
				<div class="col-xs-10 col-xs-offset-1 col-md-6 mb-r">
				<!--Excerpt-->
					<a class="amber-text">
						<h5>
							<i class="fa fa-diamond"></i>Abaout Me
						</h5>
					</a>
					<h4>Classic outfit - white off-shoulder top and denim.</h4>
					<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut officiis debitis aut rerum.</p>
					<p>by <a><strong>Carine Fox</strong></a>, 19/08/2016</p>
					<a class="btn btn-cyan">Read more</a>
				</div>
			</div>
		</section>
<!--/Section: Blog v.1-->
	<!--/Second column-->

		<?php
			include("component/script.php");
			include("component/footer.php");
		?>
	</body>
</html>