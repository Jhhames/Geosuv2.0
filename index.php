<?php
session_start(); 

if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: login.php");
}
?>
<?php include("includes/header.php"); ?>
<body>
<!--=============================SUBSCRIBE CODE=========================================--->
<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-newsletter">
		<div class="modal-content">
			<form action="/examples/actions/confirmation.php" method="post">
				<div class="modal-header">
					<h4>Subscribe to our newsletter</h4>	
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span>&times;</span></button>
				</div>
				<div class="modal-body">					
					<p>Signup for our weekly newsletter to get the latest news, updates and amazing offers delivered directly in your inbox.</p>
					<div class="input-group">
						<input type="email" class="form-control" placeholder="Enter your email" required>
						<span class="input-group-btn">
							<input type="submit" class="btn btn-primary" value="Subscribe">
						</span>
					</div>
				</div>
			</form>			
		</div>
	</div>
</div>
<!--=============================SUBSCRIBE CODE=========================================--->


<!--==============================MAIN CODE==============================================-->

<?php include("includes/headerf.php"); ?>
<body class="bg-gray">
<section>
<div style="border:1px solid lightgrey;" class="container-fluid">
<div class="mt-5 row">
	<div class="animate text-white top-hero bg-pirmary col-md-12">
	</div>
	</div>
</div>
	</section>
	<section class="animate base-section">
	<div class="animate container">
			<div class="row">
				<div class="bg-white index-top-second-left col-md-8 col-lg-8">
					<div class="latest">
						<h4 class="animate Most-Popular cat-title"> Articles </h4>
						<div class="animate row latest-news-1 align-items-center">
							<div class="animate col-lg-6  col-md-6 post-left">
								<div class="animate image-1 img-fluid">
									<img alt="animate image" width="350" style="border:none;" class="img-thumbnail" height="150" src="images/sur/svg7.jpg">
								</div>
								<a href="cadastral_regulations.php">Read More</a>
							</div>
							<div class="col-lg-6 col-md-6 post-right">
						
                    
								<a href="why_carryout_a_survey.php">
									</h4>Why carry out a survey?</h4>
								</a>
								<!--<ul class="meta">
									<li><a href="#"><span class="fas fa-user"></span> Adetona Michael</a></li>
									<li><a href="#"><span class="fas fa-calendar"></span> 12 April, 2019</a></li>
									<li><a href="#"><span class="fas fa-comment"></span> 30 comments</a></li>
								</ul>-->
								</a>
								<p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde impedit recu
									<p>
							</div>
						</div>
						<div class="animate row latest-news-1 align-items-center">
							<div class="col-lg-6 col-md-6 post-left">
								<div class="image-1 img-fluid">
									<img alt="image" width="350" class="img-thumbnail" style="border:none;" height="150" src="images/sur/svg4.jpg">
								</div>
								<a href="area_computation.php">Read More</a>
							</div>
							<div class="col-lg-6 col-md-6 post-right">
								<a href="cadastral_regulations.php">
									</h4>Nigerias Cadastral Survey Regulations</h4>
								</a>
								<!--<ul class="meta">
									<li><a href="#"><span class="fas fa-user"></span> Adetona Michael</a></li>
									<li><a href="#"><span class="fas fa-calendar"></span> 12 April, 2019</a></li>
									<li><a href="#"><span class="fas fa-comment"></span> 30 comments</a></li>
								</ul>-->
								</a>
								<p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde impedit recu
									<p>
							</div>
						</div>
						<div class="animate row latest-news-1 align-items-center">
							<div class="col-lg-6 col-md-6 post-left">
								<div class="image-1 img-fluid">
									<img alt="image" width="350" class="img-thumbnail" style="border:none;" height="150" src="images/sur/svg2.jpg">
								</div>
								<a href="#">Read More</a>
							</div>
							<div class="col-lg-6 col-md-6 post-right">
								<a href="#">
									</h4>Co-ordinate System</h4>
								</a>
							<!--	<ul class="meta">
									<li><a href="#"><span class="fas fa-user"></span> Adetona Michael</a></li>
									<li><a href="#"><span class="fas fa-calendar"></span> 12 April, 2019</a></li>
									<li><a href="#"><span class="fas fa-comment"></span> 30 comments</a></li>
								</ul>-->
								</a>
								<p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde impedit recu
									<p>
							</div>
						</div>
						<div class="animate row latest-news-1 align-items-center">
							<div class="col-lg-6 col-md-6 post-left">
								<div class="image-1 img-fluid">
									<img alt="image" width="220" style="border:none;" height="150" src="images/sur/svg1.jpg">
								</div>
								<a href="index-content.php">Read More</a>
							</div>
							<div class="col-lg-6 col-md-6 post-right">
								<a href="#">
									</h4>Cartographers VS Surveyors</h4>
								</a>
							<!--	<ul class="meta">
									<li><a href="#"><span class="fas fa-user"></span> Adetona Michael</a></li>
									<li><a href="#"><span class="fas fa-calendar"></span> 12 April, 2019</a></li>
									<li><a href="#"><span class="fas fa-comment"></span> 30 comments</a></li>
								</ul>-->
								</a>
								<p class="">Cartographers VS Surveyors. who has the upper hand in map making?
									<p>
							</div>
						</div>
					</div>
			
						<div class="animate surveying-organization-news"></div>
						<div class="reasearch-field mt-30"></div>
						<!-- <img class="img-fluid ads-2" src="images/banner-ad.jpg" alt=""> -->
						<a href="https://www.whogohost.com/host/aff.php?aff=4244&page=hosting" target="_blank"><img class="img-thumbnail" src="https://www.whogohost.com/images/affiliates/728x90b.gif" /></a> 
						<div class="popular-post">
							<h4 class="animate text-white popular-post-head title">Popular Posts</h4>
						
							<div class="animate row mt-5">
								<div class="col-md-12"></div>
							</div>
							<div class="row">
								<div class="col-md-6 col-lg-6">
									<img class="img-fluid" src="images/sur/svg7.jpg" alt="">
								</div>
								<div class="col-md-6 col-lg-6">
								   <h4>Something Great</h4>
								   <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati ad tempore eum, quas fuga voluptatum.</p>
								</div>
							</div>
						
					</div>
					<div class="mt-5">
						<h4 class="animate relavent-story title">Relavent Stories</h4>
						<div class="relavent-story-list-wrap">
							<div class="single-relavent-post row align-items-center">
								<div class="col-lg-5 post-left">
									<div class="feature-img relative">
										<img class="img-fluid" src="images/sur/sur (2).jpg" alt="">
									</div>
		
										<a class="readmore2"  href="#">Lifestyle</a>

								</div>
								<div class="col-lg-7 post-right">
							
			                       <a href="#">
										<h4>Become a Photographer for Google street view</h4>
									</a>
									<!--<ul class="meta">
										<li><a href="#"><span class="fas fa-user-alt"></span>Mark wiens</a></li>
										<li><a href="#"><span class="fas fa-calendar-alt"></span>03 April, 2018</a></li>
										<li><a href="#"><span class="fas fa-comment-alt"></span>06 Comments</a></li>
									</ul>-->
									<p class="excert">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
										incididunt.
									</p>
								</div>
							</div>
					
							<div class="animate single-relavent-post row align-items-center">
								<div class="col-lg-5 post-left">
									<div class="feature-img relative">
										<div class="overlay overlay-bg"></div>
										<img class="img-fluid" src="images/sur/sur (3).jpg" alt="">
									</div>
								
							
										<a class="readmore2" href="#">Travel</a>
									
								</div>
								<div class="animate col-lg-7 post-right">
									<a href="#">
										<h4>Application of Dreones in the Field of Surveying</h4>
									</a>
									<!--<ul class="meta">
										<li><a href="#"><span class="fas fa-user"></span>Mark wiens</a></li>
										<li><a href="#"><span class="fas fa-calendar"></span>03 April, 2018</a></li>
										<li><a href="#"><span class="fas fa-comments-alt"></span>06 Comments</a></li>
									</ul>-->
									<p class="excert">
								
										The universe is the sum total of energy and matter, encompassing the super cluster, void and empty spaces and everything within them.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--------------------- Start section of side bar-------------------------->
				<div class="bg-white  animate index-top-second-right col-md-4 col-lg-4">
	<div class="index-sidebar">
		<div class="widget-1 Surveyors-impact">
			<h6 class="Most-Popular"> Trending </h6>
			<div class="surveyors-impact-post">
				<div class="feature-img-wrap relative">
					<img src="images/sur/xmm.jpg" height="150" style="border:none;" width="310" class="img-thumbnail" alt="image">

				</div>
				<div class="details">

					<h4>How Far can XMM Newton Telescope see</h4>

					<a href="#" class="readmore2">Read More</a>

					<!--	<ul>
										<li><span class="fas fa-user"> Moses Ogboche</span></li>
										<li><span class="fas fa-calendar"> 23 june, 2004 </span></li>
										<li><span class="fas fa-comment"> 04 comments</span></li>
									</ul>-->
					<p> </p>
				</div>
			</div>
			<div class="surveyors-impact-post">
				<div class="feature-img-wrap relative">
					<img src="images/sur/narsda.png" height="150" style="border:none;" width="310" class="img-thumbnail" alt="image">

				</div>
				<div class="details">

					<h4>Nigeria Pioneering Africa in Rocket Fabrication</h4>

					<a href="#" class="readmore2">Read More</a>

					<!--	<ul>
										<li><span class="fas fa-user"> Moses Ogboche</span></li>
										<li><span class="fas fa-calendar"> 23 june, 2004 </span></li>
										<li><span class="fas fa-comment"> 04 comments</span></li>
									</ul>-->
					<p> </p>
				</div>
			</div>


		</div>
	</div>

		 <img src="images/code.jpeg" class="img-thumbnail" width="300" height="200" style="border:none;">
		 <p class="">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio doloremque et sunt ipsum blanditiis qui aliquid culpa sequi tempora velit.</p>

	<div class="trending-1 flex-row d-flex mt-5 ">
		<div class="thumb"><img alt="image" height="100" width="150" src="images/sur/stdnts.jpg"></div>
		<div class="info pt-3 pl-2"> <a class="t" href="#"> International Surveying Organizations</a>
			<!--	<ul>
										<li>
											<a href="#">
												<span class="fas fa-calendar"></span> 18 April, 2019
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fas fa-comment"></span> 02 comments
											</a>
										</li>
									</ul>-->
		</div>
	</div>
	<div class="trending-2 mt-3 flex-row d-flex">
		<div class="thumb"><img alt="image" height='100' width="150" src="images/sur/narsda.jpg"></div>
		<div class="info">
			<a class="pt-4 pl-3" href="#"> More about Primary Stations</a>
			<!--	<ul>
										<li>
											<a href="#">
												<span class="fas fa-calendar"></span> 18 April, 2019
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fas fa-comment"></span> 02 comments
											</a>
										</li>-->
			</ul>
		</div>
	</div>
	<div class="animate trending-3 mt-3 flex-row d-flex">
		<div class=""><img alt="image" heihgt="100" width="150" src="images/sur/svg1.jpg"></div>
		<div class="info">
			<a class="pt-3 pl-2" href="#"> More about Primary Stations</a>
			<!--<ul>
										<li>
											<a href="#">
												<span class="fas fa-calendar"></span> 18 April, 2019
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fas fa-comment"></span> 02 comments
											</a>
										</li>
									</ul>-->
		</div>
	</div>
	<div class="animate mt-3 trending-4 flex-row d-flex">
		<div class=""><img alt="image" height="100" width="150" src="images/sur/svg4.jpg"></div>
		<div class="info">
			<a class="pt-4 pl-3" href="#"> More about Primary Stations</a>
			<!--	<ul>
										<li>
											<a href="#">
												<span class="fas fa-calendar"></span> 18 April, 2019
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fas fa-comment"></span> 02 comments
											</a>
										</li>
									</ul>-->
		</div>
	</div>
	<div class="widget-1 social-network">

	</div>
	<div class="widget-1 Surveyors-impact">
		<h6 class="Most-Popular"> </h6>
		<div class="surveyors-impact-post">
			<div class="feature-img-wrap relative">
				<a href="https://www.whogohost.com/host/aff.php?aff=4244&page=hosting" target="_blank">
					<img src="https://www.whogohost.com/images/affiliates/sh-300-x-600a.png" /></a>
			</div>
		</div>
	</div>

</div>
		      <!--------------------------End section of side bar-------------------------->
			</div>

		</div>
	</section>
	
	<!-- <div class="constr">
	<p> This site is still under construction </p>
	<i class="fas fa-tools"></i>
</div> -->
</body>
<?php include "includes/footer.php" ?>
</html>
<!--==============================MAIN CODE==============================================-->
                                                                                    