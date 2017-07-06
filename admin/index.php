<?php 
	session_start();
	if (!isset($_SESSION["uname"])) {
		header("Location:login.php");
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
	<title>Administrator</title>
</head>

<body>
	<nav>
		<div class="container">
			<div class="navbar-header col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<a href="index.php" class="navbar-brand">
					<img src="../images/php.png" alt="">
				</a>
			</div>

			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
				<p class="navbar-text navbar-right">
					<a href="account.php">
						<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
						<span>Welcome: <?php echo $_SESSION['uname'];?></span>
					</a>
					<a href="logout.php">
						<span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
						<span>Logout</span>
					</a>
				</p>
			</div>
		</div>
	</nav>
	<nav class="navbar navbar-default"></nav>

	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<ul class="nav nav-pills nav-stacked">
					<li role="presentation" class="active actived"><a href="#"><span class="glyphicon glyphicon-file"></span>Administrator</a></li>
					<li><a href="account_info.php"><span class="glyphicon glyphicon-plus"></span>Account Info</a></li>
				</ul>
			</div>


			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
				Hellow
			</div>
		</div>
	</div>

</body>
</html>