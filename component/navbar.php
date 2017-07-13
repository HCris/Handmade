<?php 
	session_start();
	if($_session["author"] = true){
		$admin = '<li><a href="control_panel.php">Admin</a></li>';
	}
 ?>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="home.php"><img src="img/handmade_01.jpg" alt="Logou" height="50" width="100"></a>
				</div>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right menu">
						<?php print $admin; ?>
						<li><a href="Home.php">Home</a></li>
						<li><a href="new.php">New <span class="badge">5</span></a></li>
						<li><a href="work.php">Work</a></li>
						<li><a href="contact.php">Contact</a></li>
						<li class="login">
							<a  href="#" data-toggle="modal" data-target="#exampleModal">Logare
							</a>
							<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content col-xs-12">
										<div class="modal-header ">
											<h4 class="modal-title" class="text" id="exampleModalLabel">
												<i class="fa fa-user fa-2x" aria-hidden="true">Logare</i>
											</h4>
											</i>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>

										<div class="modal-body col-xs-12">
											<form id="login" action="component/login.php" method="post">
												<div class="form-group">
													<label for="recipient-name" class="form-control-label">Login:</label>
													<input type="text" name="username" class="form-control" id="recipient-name">
												</div>
												<div class="form-group">
													<label for="message-text" class="form-control-label">password:</label>
													<input type="password" name="password" class="form-control">
												</div>
												<div class="modal-footer col-xs-12">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-primary" value="submit">
														<span class="glyphicon glyphicon-log-out"></span>Enter
													</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
</div>
