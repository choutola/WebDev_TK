<?php
	session_start();
	include("../db.php");
	$alert="none";
	if(isset($_POST["btn-login"])) {
		$username =mres($_POST["uname"]);
		$password =mres($_POST["pword"]);
		$qry = mysqli_query($con,"select * from tb_admin where admin_name='".$username."' and admin_pass='".md5($password)."'");
		$count = mysqli_num_rows($qry);
		if ($count>0) {
			$_SESSION["uname"]=$username;
			header("Location: index.php");
		}else{
			$alert="block";
		}
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
	<title>Login</title>
</head>

<body>
	<div class="container">
		<div class="navbar-header col-lg-3 col-md-3 col-sm-3 col-xs-12"><br />
			<a class="navbar-brand" href="#"><img src=""></a>
		</div>
		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
			<p class="navbar-text navbar-right">Login To Admin Page</p>
		</div>
	</div>

	<nav class="navbar navbar-default">
		
	</nav>

	<div class="container">
		<div id="loginbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2" >
			<div class="alert alert-danger" role="alert" style="display:<?php echo "$alert"; ?>">
				<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
				Username or Password is incorrect, please try again!
			</div>

			<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title">Admin Login</div>
				<div style="float: right;font-size: 88%;position: relative;top: 18px;">
					<a href="#">Forgot Password?</a>
				</div>
			</div>

			<div style="padding-top: 38px" class="panel-body">
				<form action='<?php echo $_SERVER["PHP_SELF"];?>' method="post">
					<div style="margin-bottom: 25px" class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input type="text" name="uname" class="form-control" placeholder="Username" required oninvalid="this.setCustionValidaity('Please input Username')" oninput="setCustionValidaity('')" />
					</div>

					<div style="margin-bottom: 25px" class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input type="password" id="login-password" name="pword" class="form-control" value="" placeholder="Password" required oninvalid="this.setCustionValidaity('Please input Password')" oninput="setCustionValidaity('')" />
					</div>

					<div class="input-group">
						<div style="margin-top: 18px" class="form-group">
							<input type="submit" name="btn-login" id="btn-login" class="btn btn-success" value="Login" />
						</div>
					</div>
				</form>
			</div>
			</div>
		</div>

		


	</div>




</body>
</html>