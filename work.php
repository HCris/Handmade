<?php 
	include("bd/conect.php");
	if($conn){
		$sql = "SELECT * FROM collection";
		$results = $conn->query($sql);
		$collection = "";
		while ($row = $results->fetch_object()) {

			if ($_SESSION['author']=true){
				$del_lec = '<a class="btn black" href="#' . $row->id_collection . '">del lect</a>';
			}else{
				$del_lec = '';
			}

			$collection .= '
				<div class="col col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<div class="thumbnail">
						<a href="collection.php?idc=' . $row->id_collection . '">
							<div class="caption">
								<h4 class="">' . $row->name_collection . '</h4>
								<p class="">' . $row->description . '</p>
							</div>
							<img src="img/work/' . $row->image . '" alt="..." class="">
						</a>
					</div>
				</div>';
		}
	}

?>




<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			include("component/meta.php");
			include("component/link.php");
		?>
			<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Lora" rel="stylesheet">
	</head>
	<body>
		<?php
			include("component/navbar.php");
		?>
		<div class="contener">
			<div class="row">
			<?php print $collection ?>
		</div>
			<div class="row">
					<!--<div class="col col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<div class="thumbnail">
							<a href="#" class="">
								<div class="caption">
									<h4 class="">Invitasion</h4>
									<p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
								</div>
								<img src="img/work/invitation.jpg" alt="..." class="">
							</a>
						</div>
					</div>
					<div class="col col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<div class="thumbnail">
								<a href="#" class="">
									<div class="caption">
										<h4 class="">Card</h4>
										<p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
									</div>
									<img src="img/card5.jpg" alt="..." class="">
								</a>
							</div>
					</div>
					<div class="col col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<div class="thumbnail">
								<a href="#" class="">
									<div class="caption">
										<h4 class="">card valentine's day</h4>

										<p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
									</div>
									<img src="img/5.jpg" alt="..." class="">
								</a>
							</div>
						</div>
				</div>
			</div>
		</div> -->
		<?php
			include("component/script.php");
			/*include("component/footer.php");*/

		?>
	</body>
</html>