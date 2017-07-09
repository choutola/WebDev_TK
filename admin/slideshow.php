<?php 
	session_start();
	if (!isset($_SESSION["username"])) {
		header("Location:login.php");
	}
	include("../db.php");
	$msg = "<span class='text-info'>* Please Upload image with JPEG or PNG file type only.</span>";
	function GetImageExtension($imagetype){
		if (empty($imagetype)) 
			return 'none';
		switch ($imagetype) {
			case 'image/jpeg':
				return '.jpg';
				break;
			case 'image/png' :
				return '.png';
				break;
			default:
				return 'none';
		}
	}
	if (isset($_POST["btn-save"])) {
		if (!empty($_FILES["img_slide"]["name"])) {
			$file_name = $_FILES["img_slide"]["name"];
			$temp_name = $_FILES["img_slide"]["tmp_name"];
			$imgtype = $_FILES["img_slide"]["type"];
			$ext = GetImageExtension($imgtype);
			if ($ext =='none') {
				$msg="<span class='text-danger'>This file is not JPEG or PNG type!</span>";
			}
			else
			{
				$imagename = date("Y-m-d_h-i-s").$ext;
				$target = '../images/slide/'.$imagename;
				if (move_uploaded_file($temp_name,$target)) {
					$qr = mysqli_query($con,"insert into tb_slideshow values('','".$imagename."')");
					$msg = "<span class='text-success'>Image Uploaded Successfully</span>";
				}
				else
				{
					$msg = "<span class='text-danger'>Error Uploading</span>";
				}
			}

		}
	}
	if (isset($_GET["name"])) {
		$qd = mysqli_query($con,"delete from tb_slideshow where slide_name='".$_GET["name"]."'");
		if ($qd) {
			unlink("../images/slide/".$_GET["name"]);
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
	<title>Edit SlideShow</title>
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
						<h3 class="panel=title">Slideshow Manager</h3>
					</div>
					<div class="panel-body">
						<form action='<?php echo $_SERVER["PHP_SELF"];?>' method="post" enctype="multipart/form-data">
							<div style="margin-bottom: 25px" class="input-group">
								<input type="file" id="login-password" name="img_slide" class="form-control" value="" placeholder="Choose an image" required/>
							</div>
								
							<div style="margin-top: 10px" class="form-group">
								<div class="col-sm-12">
									<input type="submit" name="btn-save" id="btn-login" class="btn btn-success" value="Upload"/>
									<?php echo $msg;?>
								</div>
							</div>
						</form>
					</div>
				</div>
			<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel=title">All Slideshow Images</h3>
					</div>
					<div class="panel-body">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>No</th>
									<th>Image Name</th>
									<th>Image View</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$q=mysqli_query($con,"select * from tb_slideshow");
									while ($row=mysqli_fetch_array($q,MYSQLI_ASSOC)) {
										echo"<tr>";
										echo "<td>".$row["slide_id"]."</td>";
										echo "<td>".$row["slide_name"]."</td>";
										echo "<td><img src='../images/slide/".$row["slide_name"]."' width='150px' height='25px'/></td>";
										echo "<td><a href='?name=".$row["slide_name"]."' onclick=\"return confirm('Do you want to delete this?');\"><span class='glyphicon glyphicon-remove'></span>Delete</a></td>";
										echo "</tr>";
									}
								?>
							</tbody>


						</table>
					</div>
				</div>
		</div>
	</div>

</body>
</html>