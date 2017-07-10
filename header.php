<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<title>Welcome to Homepage</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container-fluid">
		<div class="row">
		<!-- Logo -->
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 border">
				<a href="/" border="0"><img class="img-responsive logo tcenter" src="http://vtech-computer.com/image/catalog/demo/logo/logo_vtech.png" alt=""></a>
			</div>
		<!-- Ads -->
			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 border">
				<a href="/" border="0"><img class="img-responsive" src="" alt=""></a>
			</div>
		</div>

		<div class="row">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span> 
			      </button>
			      <a class="navbar-brand" href="../WebDev_TK"><img class="img-responsive logo tcenter" src="" alt=""/></a>
			    </div>
			    <div class="collapse navbar-collapse" id="myNavbar">
			      <ul class="nav navbar-nav">
			        <li class="active">
			        	<a href="">home
			        	<?php
						$qry=mysqli_query($con,"select * from tb_category order by category_order asc");
						while ($row=mysqli_fetch_array($qry,MYSQL_ASSOC)) {
							echo '<li><a class="btn btn-info" href="">'.$row["category_name"].'</a></li>';
							}
						?>
			        	</a>
			        </li>
					

			      </ul>
			      <ul class="nav navbar-nav navbar-right">
			        <li><a href="../WebDev_TK/admin/"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
			        <li><a href="../WebDev_TK/admin/"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			      </ul>
			    </div>
			  </div>
			</nav>
		</div>
	</div>