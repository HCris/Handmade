
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

		<div class="row">
			<div class="col col-xs-12 col-sm-12 col-lg-12 col-md-12 img">
				<div class="wolcam ">
					<h1 class="text-center">Contact Me</h1>
					<hr class="small">
					<h2 class="text-center">Have questions? I have answers.</h2>
				</div>
			</div>
		</div>
<!-- Contact -->
		<div class="row ">
				<div class="col col-xs-12 col-sm-6 col-md-6">
						<form class="form-style-7" id="#message" action="contact_me.php" method="post">
							<!--Header-->
							<div class="text-center">
							<h3><i class="fa fa-envelope"></i> Write to us:</h3>
							<hr class="mt-2 mb-2">
							</div>

							<!--Body-->
							<p>We'll write rarely, but only the best content.</p>
							<br>

							<!--Body-->
							<div class="md-form">
							<i class="fa fa-user prefix"></i>
							<input type="text" id="form3" placeholder="Your name" class="form-control">
							</div>

							<div class="md-form">
							<i class="fa fa-envelope prefix"></i>
							<input type="text" id="form2" placeholder="Your email" class="form-control">
							</div>

							<div class="md-form">
							<i class="fa fa-tag prefix"></i>
							<input type="text" id="form3" placeholder="Subject" class="form-control">
							</div>

							<div class="md-form">
							<i class="fa fa-pencil prefix"></i>
							<textarea type="text" id="form8" placeholder="Subject" class="md-textarea"></textarea>
							</div>

							<div class="text-center">
							<button class="btn btn-default">Submit</button>

							<div class="call">
							<br>
							<p>Or would you prefer to call?
							<br>
							<span><i class="fa fa-phone"> </i></span> + 01 234 565 280</p>
							</div>
							</div>

						</form>
				</div>

				<div class=" col col-xs-12 col-sm-6 col-md-6 col-lg-6 capsula ">
					<div class="row">
							<div class="box col col-xs-10 col-xs-offset-1 col-sm-8 col-md-8 col-lg-8">
								<i class="fa fa-twitter fa-2x" aria-hidden="true">
										<a href="#">twitter.com</a>
								</i>
							</div>
							<div class="box col col-xs-10 col-xs-offset-1 col-sm-8 col-md-8 col-lg-8">
								<i class="fa fa-facebook-square fa-2x" aria-hidden="true">
									<a href="#">facebook.com</a>
								</i>
							</div>
							<div class="box col col-xs-10 col-xs-offset-1 col-sm-8 col-md-8 col-lg-8">
								<i class="fa fa-instagram fa-2x" aria-hidden="true">
									<a href="#">instagram.com</a>
								</i>
							</div>
							<div class="box col col-xs-10 col-xs-offset-1 col-sm-8 col-md-8 col-lg-8">
								<i class=" fa fa-envelope fa-2x" aria-hidden="true">
									<a href="#">cristina.haruta95@gmail.com</a>
								</i>
							</div>
							<div class="box col col-xs-10 col-xs-offset-1 col-sm-8 col-md-8 col-lg-8">
								<i class="fa fa-phone-square fa-2x" aria-hidden="true">060447114</i>
							</div>
						</div>
					</div>
				</div>

			</div><!-- END row -->
<hr>
	<?php
		include("component/footer.php");
		include("component/script.php");
	?>
</body>
</html>