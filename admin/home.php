<?php 
	session_start();
	if (!isset($_SESSION["username"])) {
		header("Location:login.php");
	}
	if(isset($_POST["btn-save-language"])){

	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script src="../js/jquery-2.1.4.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../css/bootstrap.min.css">

	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Edit Homepage</title>
</head>

<body>
	<?php
		include("index_layout_header.php");
	?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<?php include("index_layout_Lmenu.php"); ?>
				
			</div>
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel=title">Change Languages</h3>
					</div>
					<div class="panel-body">
						<div class="form-group">
							<form action='<?php echo $_SERVER["PHP_SELF"];?>' method="post">
								<label for="sell">Choose Language:</label>
								<select class="form-control" id="sell" name="language">
									<option value="en">English</option>
									<option value="kh">Khmer</option>
								</select>
								<div style="margin-top: 10px" class="form-group">
									<div class="col-sm-12">
										<input type="submit" name="btn-save-language" id="btn-login" class="btn btn-success" value="Save Language"/>
									</div>
								</div>
							</form>
						</div>

					</div>
				</div>
				
				
			</div>
		</div>
	</div>

</body>
</html>