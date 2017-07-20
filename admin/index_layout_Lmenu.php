<style>
	.dropbtn {
		background-color: #4CAF50;
		color: white;
		padding: 16px;
		font-size: 16px;
		border: none;
		cursor: pointer;
	}

	.dropdown {
		position: relative;
		display: inline-block;
	}

	.dropdown-content {
		display: none;
		position: absolute;
		background-color: #f9f9f9;
		min-width: 160px;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
	}

	.dropdown-content a {
		color: black;
		padding: 12px 16px;
		text-decoration: none;
		display: block;
	}

	.dropdown-content a:hover {background-color: #f1f1f1}

	.dropdown:hover .dropdown-content {
		display: block;
	}

	.dropdown:hover .dropbtn {
		background-color: #3e8e41;
	}
</style>
<nav>
	<div class="dropdown">
		<button class="dropbtn">Dashborad</button>
		<div class="dropdown-content">
			<a href="../" target="blank"><span class="glyphicon glyphicon-plus"></span>View Website</a>
		</div>
	</div>
	<ul class="nav nav-pills nav-stacked">
		<li role="presentation" class="active"><a href="#"><span class="glyphicon glyphicon-file"></span>Dashborad</a></li>
		<li><a href="home.php"><span class="glyphicon glyphicon-plus"></span>Homepage</a></li>
		<li><a href="slideshow.php"><span class="glyphicon glyphicon-plus"></span>Edit Slidshow</a></li>
	</ul>
	<ul class="nav nav-pills nav-stacked">
		<li role="presentation" class="active actived"><a href="#"><span class="glyphicon glyphicon-file"></span>Product Management</a></li>
		<li><a href="#"><span class="glyphicon glyphicon-plus"></span>Manage Product</a></li>
		<li><a href="category.php"><span class="glyphicon glyphicon-plus"></span>Category</a></li>
	</ul>

	<ul class="nav nav-pills nav-stacked">
		<li role="presentation" class="active actived"><a href="#"><span class="glyphicon glyphicon-file"></span>Profile</a></li>
		<li><a href="account_info.php"><span class="glyphicon glyphicon-plus"></span>Change Info</a></li>
	</ul>
</nav>

