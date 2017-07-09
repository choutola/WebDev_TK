<?php 
	include("db.php");
?>
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
<div class="container">
	<div class="row">
	<!-- Logo -->
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 border">
			<a href="/" border="0"><img class="img-responsive logo tcenter" src="" alt=""></a>
		</div>
	<!-- Ads -->
		<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 border">
			<a href="/" border="0"><img class="img-responsive" src="" alt=""></a>
		</div>
	</div>

	<div class="row">
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span> 
		      </button>
		      <a class="navbar-brand" href="../WebDev_TK">WebSiteName</a>
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="../WebDev_TK">Home</a></li>
		        <li><a href="#">Product</a></li>
		        <li><a href="#">Profile</a></li>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="../WebDev_TK/admin/"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
		        <li><a href="../WebDev_TK/admin/"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		      </ul>
		    </div>
		  </div>
		</nav>
	</div>


	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <?php
			$qca = mysqli_query($con,"select * from tb_slideshow");
			$count = mysqli_num_rows($qca);
			for ($i=0; $i<$count; $i++) { 
				echo '<li data-target="#myCarousel" data-slide-to"'.$i.'"></li>';
			}
		?>
	    
	  </ol>

	  <!-- Wrapper for slides -->
	  	<div class="carousel-inner" role="listbox">
			<?php
                $qi=mysqli_query($con,"select slide_name from tb_slideshow order by slide_id");
                $i=0;
                while ($row=mysqli_fetch_array($qi,MYSQL_ASSOC)) {
                	if ($i==0) {
	                	echo '<img class="item active" src="images/slide/'.$row["slide_name"].'" style="width:100%;">';
	                }
	                else{
	                	echo '<img class="item" src="images/slide/'.$row["slide_name"].'" style="width:100%;">';
	                }
	                $i++;               		
                }
                
            ?>
	  </div>

	  <!-- Left and right controls -->
	  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#myCarousel" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
</div>

</body>
</html>