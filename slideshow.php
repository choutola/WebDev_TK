<div class="row">
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
<br/><br/>