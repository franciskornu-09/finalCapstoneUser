@extends('app')

@section('content')
			<div class="content">
				<!-- banner -->
				<div class="banner about-banner"> 
					<div class="banner-img">  
						<h3>Detailed View</h3>   
					</div> 
				</div>
				<!-- //banner -->
				<!-- properties --> 
				<div class="w3agile properties">   
					<div class="properties-img properties-img-single">
						<img src="images/3.jpg" alt="">
						<div class="view-caption">
							<h4><span class="glyphicon glyphicon-map-marker"></span> Broome St, Canada, USA </h4>  
						</div> 
					</div>
					<div class="w3ls-details">   
						<h4>Property Description</h4> 
						<p class="agile-text">Lorem Ipsum has been industry's dummy text ever standard remember when your team is playing. Sed porta magna vitae nisl lacinia orbi malesuada sollic itudin . </p>
						<div class="w3ls-text">
							<h4>Property Details</h4>  
							<p><b>Price :</b> $1500 k </p>
							<p><b>Area :</b> 2,145 sq.ft </p>
							<p><b>Bed Rooms :</b> 3 </p>
							<p><b>Bath Rooms :</b> 2 </p>
						</div>
					</div>
					<div class="w3ls-features">   
						<h3 class="w3ls-title">Property Features</h3> 
						<ul> 
							<li><span class="glyphicon glyphicon-ok"> </span> School </li>
							<li><span class="glyphicon glyphicon-ok"> </span> Fireplace</li>
							<li><span class="glyphicon glyphicon-ok"> </span> Wine Cellar</li>
							<li><span class="glyphicon glyphicon-ok"> </span> Gym</li>
							<li><span class="glyphicon glyphicon-ok"> </span> Storm Windows</li>
							<li><span class="glyphicon glyphicon-ok"> </span> Storm Windows</li>
							<li><span class="glyphicon glyphicon-ok"> </span> Pet Allowed</li>
						</ul>
					</div>
					<div class="w3ls-related">   
						<h3 class="w3ls-title">Related Properties</h3>
						<div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="6000" data-pause="hover">
							<!-- Wrapper-for-Slides -->
							<div class="carousel-inner" role="listbox"> 
								<!-- First-Slide -->
								<div class="item active">
									<div class="properties-img">
										<img src="images/3.jpg" alt="">
										<div class="view-caption">
											<h4><span class="glyphicon glyphicon-map-marker"></span> Broome St, Canada, USA </h4>  
										</div>
										<div class="w3ls-buy">
											<a href="single.html">Buy</a> 
										</div>
									</div>
								</div> 
								<!-- Second-Slide -->
								<div class="item">  
									<div class="properties-img">
										<img src="images/1.jpg" alt="">
										<div class="view-caption">
											<h4><span class="glyphicon glyphicon-map-marker"></span> 512B St, Missouri, USA </h4>  
										</div>
										<div class="w3ls-buy">
											<a href="single.html">Buy</a> 
										</div>
									</div>
								</div> 
								<!-- Third-Slide -->
								<div class="item">
									<div class="properties-img">
										<img src="images/2.jpg" alt="">
										<div class="view-caption">
											<h4><span class="glyphicon glyphicon-map-marker"></span> Lenexa, KS 66215 USA </h4>  
										</div>
										<div class="w3ls-buy">
											<a href="single.html">Buy</a> 
										</div>
									</div>
								</div> 
							</div> 
							<!-- Left-Button -->
							<a class="left carousel-control kb_control_left" href="#kb" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a> 
							<!-- Right-Button -->
							<a class="right carousel-control kb_control_right" href="#kb" role="button" data-slide="next">
								<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a> 
						</div>
						<script src="js/custom.js"></script> 
					</div>
					<div class="w3ls-related">   
						<h3 class="w3ls-title">Contact Agent</h3>
						<div class="agents w3agent-grid">  
							<div class="stack twisted">	
								<img src="images/a4.jpg" alt=" " class="img-responsive">
							</div>   
							<div class="w3agent-text"> 
								<h4>Mark Sophia</h4>
								<p><i class="glyphicon glyphicon-earphone"></i> (222)111 22233</p>
								<p><i class="glyphicon glyphicon-phone"></i> (0400)2144 23456</p> 
								<p><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com"> mail@example.com</a></p>
								<p><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>512B St, Canada, NY 02, USA</p>
							</div>
						</div>
					</div>
					<div class="w3ls-related">   
						<h3 class="w3ls-title">Add a Comment</h3>
						<div class="contact-form"> 
							<form action="#" method="post">
								<input type="text" name="Name" placeholder="Name" required="">
								<input type="text" name="Email" placeholder="Email" required=""> 
								<textarea name="Message" placeholder="Message" required=""></textarea>
								<input type="submit" value="SEND">
							</form> 
						</div> 
					</div>
				</div>
			</div>
		</div>
	</div> 
	<!-- menu-js -->
	<script src="js/classie.js"></script>
	<script src="js/main.js"></script>
	<!-- //menu-js -->
	<!-- nicescroll-js -->
	<script src="js/jquery.nicescroll.min.js"></script> 
	<script>
		$(document).ready(function() {
	  
			var nice = $("html").niceScroll();  // The document page (body)
		
			$("#div1").html($("#div1").html()+' '+nice.version);
		
			$("#boxscroll").niceScroll({cursorborder:"",cursorcolor:"#00F",boxzoom:true}); // First scrollable DIV
		});
	</script>
	<!-- //nicescroll-js -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
@endsection