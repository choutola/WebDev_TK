<?php
	include("db.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Computer Shop</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/custom.css"/>
    <link rel="stylesheet" type="text/css" href="css/layout.css"/>
    <link rel="stylesheet" type="text/css" href="fonts/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css"/>
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/wow.js"></script>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script>
		$(document).ready(function(){
			// Activate Carousel
			$("#myCarousel").carousel({interval: 3000});
			
			// Enable Carousel Indicators
			$(".item1").click(function(){
				$("#myCarousel").carousel(0);
			});
			$(".item2").click(function(){
				$("#myCarousel").carousel(1);
			});
			$(".item3").click(function(){
				$("#myCarousel").carousel(2);
			});
			$(".item4").click(function(){
				$("#myCarousel").carousel(3);
			});
			
			// Enable Carousel Controls
			$(".left").click(function(){
				$("#myCarousel").carousel("prev");
			});
			$(".right").click(function(){
				$("#myCarousel").carousel("next");
			});
		});
	</script>
    <script>
              new WOW().init();
  	</script>
    <script>
    wow = new WOW(
                      {
                      boxClass:     'wow',      // default
                      animateClass: 'animated', // default
                      offset:       0,          // default
                      mobile:       fale,       // default
                      live:         true        // default
                    }
                    )
                    wow.init();
	</script>
</head>

<body>
	<!--head-->
    	<div id="header">
            <div class="container fadeInDown animated">
                    <div class="logo" >
                        <a href="index.html"><img src="" class="img-responsive"/></a>
                    </div>
                    <div class="connect">
                        	<h1>Support 24h/7days:</h1>
                            <span>+855 10 888 999</span>
                    </div>
                    <div class="clearfix"></div>
             </div>
		</div>
        <div id="menu_wrapper" class="fadeInLeft animated">
        	<div class="header" id="home">
                  <div class="container">
                        <div class="menu">			
                          <div class="top-menu navigation">
                             <span class="menu"></span> 
                             <ul class="navig">
                                 <li class="active"><a href="index.html">Home</a></li>
                                 <li><a href="products.html">Products</a></li>
								 <li><a href="service.html">Services</a></li>
                                 <li><a href="contact.html">Contact Us</a></li>
                                 <li><a href="about.html">About Us</a></li>
                             </ul>
                          </div>
                           <!-- script-for-menu -->
                     <script>
                            $("span.menu").click(function(){
                                $(" ul.navig").slideToggle("slow" , function(){
                                });
                            });
                     </script>
                     <!-- script-for-menu -->
                        </div>
                      <div class="clearfix"></div>
                 </div>	
            </div>
		</div>	
	<!--End header-->

    <!--slider-->
   		<div class="slider_wrapper zoomIn animated">
        <!-- Slide Carousel -->
            <header id="myCarousel" class="carousel slide">
                <!-- Indicators -->
                <ol class="carousel-indicators">
					<?php
						$qca = mysqli_query($con,"select * from tb_slideshow");
						$count = mysqli_num_rows($qca);
						for ($i=0; $i < $count; $i++) { 
							echo '<li data-target="#myCarousel" data-slide-to"'.$i.'"></li>';
						}
					?>
                </ol>
        
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?php
                    	$qi=mysqli_query($con,"select slide_name from tb_slideshow order by slide_id desc");
                    	$i=0;
                    	while ($row=mysqli_fetch_array($qi,MYSQL_ASSOC)) {
                    		if ($i==0) {
                    			echo '<div class="item"><img src="images/slide/'.$row["slide_name"].'"></div>';
                    		}
                    		else
	                    	{
	                    		echo '<div class="item active"><img src="images/slide/'.$row["slide_name"].'"></div>';
	                    	}                    		
                    	}
                    	$i++;
                    ?>
                </div>
        
                <!-- Controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="icon-prev"></span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="icon-next"></span>
                </a>
            </header>
        <!--End Slide Carousel -->
        </div>
	<!--End Slide-->

    <!--welcome-->
	<div class="container welcome wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
    	<h1>About Our Shop</h1>
        <p>We sell brand new and secondhand desktop and laptop computers, and all kinds of IT products. We also provide various of service that related to computer. </p>
    </div>
	<!--end welcome-->

    <!-- Main category -->
    <div class="container wow fadeInLeft">
        <div class="row info">
        	<div class="col-sm-6 col-md-3 box_new_des text-center">
            	<div class="box_new_des_in">
             		<div class="box_info_in_title">
                    	<span>New</span>
                    </div>
					<div class="thumbnail img_box">
                    	<img src="img/product/mac.png" class="img-responsive"/>
                    </div>
                    <div class="box_new_des_in_description">
                    	<p>core i7 cpu3.40Hz<br/>
                        HDD 1000 Gb<br/>
                        Ram 16 Gb<br/>
                        Cost  1200 $
                        </p>
                        <a href="#">ADD TO CHAT</a>
                    </div>
            	</div>
            </div>
			<div class="col-sm-6 col-md-3 box_new_des text-center">
            	<div class="box_new_des_in">
             		<div class="box_info_in_title">
                    	<span>New</span>
                    </div>
					<div class="thumbnail img_box">
                    	<img src="img/product/mac.png" class="img-responsive"/>
                    </div>
                    <div class="box_new_des_in_description">
                    	<p>core i7 cpu3.40Hz<br/>
                        HDD 1000 Gb<br/>
                        Ram 16 Gb<br/>
                        Cost  1200 $
                        </p>
                        <a href="#">ADD TO CHAT</a>
                    </div>
            	</div>
            </div>
            <div class="col-sm-6 col-md-3 box_new_des text-center">
            	<div class="box_new_des_in">
             		<div class="box_info_in_title">
                    	<span>New</span>
                    </div>
					<div class="thumbnail img_box">
                    	<img src="img/product/mac.png" class="img-responsive"/>
                    </div>
                    <div class="box_new_des_in_description">
                    	<p>core i7 cpu3.40Hz<br/>
                        HDD 1000 Gb<br/>
                        Ram 16 Gb<br/>
                        Cost  1200 $
                        </p>
                        <a href="#">ADD TO CHAT</a>
                    </div>
            	</div>
            </div>
            <div class="col-sm-6 col-md-3 box_new_des text-center">
            	<div class="box_new_des_in">
             		<div class="box_info_in_title">
                    	<span>New</span>
                    </div>
					<div class="thumbnail img_box">
                    	<img src="img/product/mac.png" class="img-responsive"/>
                    </div>
                    <div class="box_new_des_in_description">
                    	<p>core i7 cpu3.40Hz<br/>
                        HDD 1000 Gb<br/>
                        Ram 16 Gb<br/>
                        Cost  1200 $
                        </p>
                        <a href="#">ADD TO CHAT</a>
                    </div>
            	</div>
            </div>

            
                
            <h2>Popular Products</h2>
            <div class="col-sm-6 col-md-3 box_new_des text-center">
                <div class="box_new_des_in">
                    <div class="box_info_in_title">
                        <span>New</span>
                    </div>
                    <div class="thumbnail img_box">
                        <img src="img/product/mac.png" class="img-responsive"/>
                    </div>
                    <div class="box_new_des_in_description">
                        <p>core i7 cpu3.40Hz<br/>
                        HDD 1000 Gb<br/>
                        Ram 16 Gb<br/>
                        Cost  1200 $
                        </p>
                        <a href="#">ADD TO CHAT</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 box_new_des text-center">
                <div class="box_new_des_in">
                    <div class="box_info_in_title">
                        <span>New</span>
                    </div>
                    <div class="thumbnail img_box">
                        <img src="img/product/mac.png" class="img-responsive"/>
                    </div>
                    <div class="box_new_des_in_description">
                        <p>core i7 cpu3.40Hz<br/>
                        HDD 1000 Gb<br/>
                        Ram 16 Gb<br/>
                        Cost  1200 $
                        </p>
                        <a href="#">ADD TO CHAT</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 box_new_des text-center">
                <div class="box_new_des_in">
                    <div class="box_info_in_title">
                        <span>New</span>
                    </div>
                    <div class="thumbnail img_box">
                        <img src="img/product/mac.png" class="img-responsive"/>
                    </div>
                    <div class="box_new_des_in_description">
                        <p>core i7 cpu3.40Hz<br/>
                        HDD 1000 Gb<br/>
                        Ram 16 Gb<br/>
                        Cost  1200 $
                        </p>
                        <a href="#">ADD TO CHAT</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 box_new_des text-center">
                <div class="box_new_des_in">
                    <div class="box_info_in_title">
                        <span>New</span>
                    </div>
                    <div class="thumbnail img_box">
                        <img src="img/product/mac.png" class="img-responsive"/>
                    </div>
                    <div class="box_new_des_in_description">
                        <p>core i7 cpu3.40Hz<br/>
                        HDD 1000 Gb<br/>
                        Ram 16 Gb<br/>
                        Cost  1200 $
                        </p>
                        <a href="#">ADD TO CHAT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!--end Main Category-->
    <!--Service-->
    <div class="container service wow zoomIn">
    	<h1>Our Services</h1>
        <div class="row-fluid service_icon_box">
        	<div class="col-md-2 col-sm-offset-1 text-center service_icon_box_in">
            	<a href="#"><img src="images/icon_visa.png" class="img-responsive"><br/><span>Camera Security</span></a>
            </div>
            <div class="col-md-2 text-center service_icon_box_in">
            	<a href="#"><img src="images/icon_hotel.png" class="img-responsive"><br/><span>Design Office</span></a>
            </div>
            <div class="col-md-2 text-center service_icon_box_in">
            	<a href="#"><img src="images/icon_tour-package.png" class="img-responsive"><br/><span>Network</span></a>
            </div>
            <div class="col-md-2 text-center service_icon_box_in">
            	<a href="#"><img src="images/icon_flight.png" class="img-responsive"><br/><span></span></a>
            </div>
            <div class="col-md-2 text-center service_icon_box_in">
            	<a href="#"><img src="images/icon_guide.png" class="img-responsive"><br/><span>Guides</span></a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!--End Service-->
    <!--Subscribe Section-->
    <section class="visible-xs">
        <div class="news-letter mobile text-center">
            <h4>Looking for great deals and new products</h4>
            <label>Sign up for our newsletter</label>
            <div class="input-group">
                <input type="text" class="form-control" aria-label="Email" placeholder="Email">
                <div class="input-group-btn">
                    <button type="button" class="btn btn-default">SUBSCRIBE</button>
                </div>
            </div>
        </div>
    </section>
    <!--End Subscribe Section-->

    <!--Footer-->
   <footer>
       <div class="container-fluid">
            <div class="row visible-xs visible-sm">
                <div class="col-xs-6">
                    <div class="logo-wrapper">
                        <img src="img/Logo.svg">
                    </div>
                </div>
                <div class="col-xs-6 visible-sm">
                    <h4>Looking for great deals and new products</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-3 hidden-sm hidden-xs">
                    <div class="logo-wrapper">
                        <img src="img/Logo.svg">
                    </div>
                    <div class="about_text">
                        <p>PlacePass is the world's largest collection of amazing tours and activities. Great times begin
                            here.</p>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <img src="img/AddressIcon.svg">
                        </div>
                        <div class="media-body">
                            <address>
                                No.109, street #271
                                <br/>Mean Chey
                                <br/>Phnom Penh, Cambodia
                            </address>
                        </div>
                    </div>

                    <div class="media">
                        <div class="media-left">
                            <img src="img/PhoneIcon.svg">
                        </div>
                        <div class="media-body">
                            <address>
                                +85589 888 999
                            </address>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <h4>Shop</h4>
                    <ul>
                        <li><a href="#">Promotions</a></li>
                        <li><a href="#">Our Story</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Site Map</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="#">Online</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Terms & Privacy</a></li>
                        <li><a href="#">Guarantee</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-6 hidden-xs">
                    <div class="news-letter">
                        <div class="hidden-sm">
                            <h4>Looking for great deals and new products</h4>
                        </div>
                        <label>Sign up for our newsletter</label>
                        <div class="input-group">
                            <input type="text" class="form-control" aria-label="Email" placeholder="Email">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-default">SUBSCRIBE</button>
                            </div>
                        </div>
                        <div class="social_btn">
                            <h5>FIND US MORE</h5>
                            <ul class="list-inline">
                                <li><a href="#"><img src="img/facebook.svg"></a></li>
                                <li><a href="#"><img src="img/instagram.svg"></a></li>
                                <li><a href="#"><img src="img/twitter.svg"></a></li>
                                <li><a href="#"><img src="img/linkedin.svg"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="social_btn visible-xs">
            <h6>FIND US MORE</h6>
                <ul class="list-inline text-left">
                    <li><a href="#"><img src="img/facebook.svg"></a></li>
                    <li><a href="#"><img src="img/instagram.svg"></a></li>
                    <li><a href="#"><img src="img/twitter.svg"></a></li>
                    <li><a href="#"><img src="img/linkedin.svg"></a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!--end footer-->
</body>
</html>