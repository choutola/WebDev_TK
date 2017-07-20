<?php 
	session_start();
	include("../db.php");
	$admin_id="";
	$admin_email="";
	$admin_password="";
	$msg_password="";
	$msg_email="";
	if (!isset($_SESSION["username"])) {
		header("Location:login.php");
	}
	else{
		$qry_admin= mysqli_query($con,"select * from tb_admin where admin_name='".$_SESSION["username"]."'");
		while($row=mysqli_fetch_array($qry_admin,MYSQL_ASSOC)) {	
			$admin_id=$row["admin_id"];
			$admin_email=$row["admin_email"];
			$admin_password=$row["admin_pass"];
		}
	}

	if (isset($_POST["btn-save-password"])) {
		$new_password = mres($_POST["new-password"]);
		$confirm_password = mres($_POST["confirm-password"]);
		if ($new_password==$confirm_password) {
			$qry_password=mysqli_query($con,"update tb_admin set admin_pass='".md5($new_password)."' where admin_id='".$admin_id."'");
			$msg_password="You Password have been changed!";
		}else{
			$msg_password="You Password not match! Try again!";
		}
		
	}
	elseif (isset($_POST["btn-save-email"])) {
		$new_email = mres($_POST["new-email"]);
		$confirm_email = mres($_POST["confirm-email"]);
		if ($new_email==$confirm_email) {
			$qry_email=mysqli_query($con,"update tb_admin set admin_email='".$new_email."' where admin_id='".$admin_id."'");
			$msg_email="You Email have been changed!";
		}else{
			$msg_email="You Email not match! Try again!";
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
	<title>Account Information</title>
</head>

<body>
	<!-- Header Layout -->
	<?php include("index_layout_header.php");?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<!-- Menu Layout -->
				<?php include("index_layout_Lmenu.php");?>
			</div>

			<!-- Change Password -->
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel=title">Change Password</h3>
					</div>
					<div class="panel-body">
						<form action='<?php echo $_SERVER["PHP_SELF"];?>' method="post">
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon">New Password</span>
								<input type="password" id="login-password" class="form-control" name="new-password" value="" placeholder="New Password" required/>
							</div>

							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon">Confirm Password</span>
								<input type="password" id="login-password" name="confirm-password" class="form-control" value="" placeholder="Confirm Password" required/>
							</div>

							<div style="margin-top: 10px" class="form-group">
								<div class="col-sm-12">
									<input type="submit" name="btn-save-password" id="btn-login" class="btn btn-success" value="Save"/>
									<?php
										if ($msg_password!="") {
											echo $msg_password;
										}
									?>
								</div>
							</div>
						</form>
					</div>
				</div>

				<!-- Change Email -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel=title">Change Email</h3>
					</div>
					<div class="panel-body">
						<form action='<?php echo $_SERVER["PHP_SELF"];?>' method="post">
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon">New Email</span>
								<input type="text" name="new-email" id="login-password" class="form-control" value="" placeholder="New Email" required/>
							</div>

							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon">Confirm Email</span>
								<input type="text" name="confirm-email" id="login-password" class="form-control" placeholder="Confirm Email" required/>
							</div>

							<div style="margin-top: 10px" class="form-group">
								<div class="col-sm-12">
									<input type="submit" name="btn-save-email" id="btn-login" class="btn btn-success" value="Save"/>
									<?php
										if ($msg_email!="") {
											echo $msg_email;
										}
									?>
								</div>
							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>

</body>
</html>