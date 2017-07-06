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
						<span>Logout999</span>
					</a>
				</p>
			</div>
		</div>
	</nav>
	<nav class="navbar navbar-default"></nav>