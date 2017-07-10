<?php 
	session_start();
	include ("../db.php");
	if (!isset($_SESSION["username"])) {
		header("Location:login.php");
	}
$category_id="";
$category_name="";
$category_order="";
if (isset($_POST["btn-save-category"])) {
	$category_name = mres($_POST["category_name"]);
	$category_order = mres($_POST["category_order"]);
	$qry = mysqli_query($con,"insert into tb_category values('','".$category_name."','".$category_order."')") or die("Cannot insert");
}
else if(isset($_GET["delete_id"])){
	$qry=mysqli_query($con,"delete from tb_category where category_id='".mres($_GET["delete_id"])."'") or die("Cannot Delete");
}
else if (isset($_GET["edit_id"])) 
{
	$qry=mysqli_query($con,"select * from tb_category where category_id='".mres($_GET["edit_id"])."'");
	while ($row=mysqli_fetch_array($qry,MYSQLI_NUM)) {
		$category_id=$row["0"];
		$category_name=$row["1"];
		$category_order=$row["2"];
	}
}
elseif (isset($_POST["btn-edit-category"])) {
	$qry=mysqli_query($con,"update tb_category set category_name='".mres($_POST["category_name"])."',category_order='".mres($_POST["category_order"])."' where");
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
	<title>Category</title>
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
						<h3 class="panel=title">Category Manager</h3>
					</div>
					<div class="panel-body">
						<form action='<?php echo $_SERVER["PHP_SELF"];?>' method="post">
						<input type="hidden" name="category_id" value='<?php echo $category_id;?>' />
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon">Category Name</span>
								<input type="text" name="category_name" id="login-password" class="form-control"  value='<?php echo $category_name;?>' required>
							</div>
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon">Category Order</span>
								<input type="text" name="category_order" id="login-password" class="form-control"  value='<?php echo $category_order;?>' required>
							</div>
							<div style="margin-top: 10px" class="form-group">
								<div class="col-sm-12">
									<input type="submit" name="btn-save-category" id="btn-login" class="btn btn-success" value="Add New Category"/>
									<input type="submit" name="btn-edit-category" id="btn-login" class="btn btn-info" value="Edit Category"/>
								</div>
							</div>
						</form>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel=title">All Categories</h3>
					</div>
					<div class="panel-body">
						<table class="table table-hover">
							<thead>
								<tr>
									<!-- <th>No</th> -->
									<th>Category Name</th>
									<th>Category Order</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$q=mysqli_query($con,"select * from tb_category");
									while ($row=mysqli_fetch_array($q,MYSQLI_ASSOC)) {
										echo"<tr>";
										// echo "<td>".$row["category_id"]."</td>";
										echo "<td>".$row["category_name"]."</td>";
										echo "<td>".$row["category_order"]."</td>";
										echo "<td>
										<a class='btn btn-danger' href='?delete_id=".$row["category_id"]."' onclick=\"return confirm('Do you want to delete this?');\"><span class='glyphicon glyphicon-remove'></span>Delete</a> |
										<a class='btn btn-info' href='?edit_id=".$row["category_id"]."'><span class='glyphicon glyphicon-edit'></span>Edit</a>
										</td>";
										echo "<td></td>";
										echo "</tr>";
									}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>