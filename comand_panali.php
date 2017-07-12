<!DOCTYPE html> 
<html lang="en">
<head>
<?php 
	include("component/meta.php");
	include("component/link.php");
	include("component/navbar.php");
	include("component/script.php");
?>
</head>
<body>
	<div class="container">
		<div class="box_form">
			<form id="form" method="POST" action="action/add_collection.php" class="admin_form">
				<input type="text" placeholder="COLLECTION'S NAME" name="name"><br>
				<h5>ADD COLLECTION'S BACKGRAUND</h5>
				<input type="file" name="file"><br>
				<h6>COLLECTION'S DESCRIPTION</h6>
					<textarea id="editor2" type="text" name="description"></textarea><br>
					<script type="text/javascript">
						CKEDITOR.replace( 'editor2' );
						AjexFileManager.init({
							returnTo: 'ckeditor',
							editor: ckeditor1
						});
					</script>
				<div class="text-center">
							<button class="btn btn-default">Submit</button>
				</div>
			</form>
		</div>
	</div>
	<?php 
		include("component/footer.php");
	 ?>
</body>
</html>