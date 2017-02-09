@extends('app')

@section('content')
			<div class="content"> 
				<!-- banner -->
				<div class="banner about-banner"> 
					<div class="banner-img">  
						<h3>Gallery</h3>   
					</div> 
				</div>
				<!-- //banner -->
				<!-- gallery -->
				<div class="w3agile gallery"> 
					<h3 class="w3ls-title">Our Gallery</h3> 
					<div class="gallery-row"> 
						<div class="gallery-grids">
							<div class="w3ls-hover">
								<a href="images/g1.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley">
									<img src="images/g1.jpg" class="img-responsive zoom-img" alt=""/>
									<div class="view-caption">
										<h5>View+</h5> 
									</div>
								</a>
							</div>
						</div>
						<div class="gallery-grids">
							<div class="w3ls-hover">
								<a href="images/g2.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley">
									<img src="images/g2.jpg" class="img-responsive zoom-img" alt=""/>
									<div class="view-caption">
										<h5>View+</h5> 
									</div>
								</a>
							</div>
						</div>
						<div class="gallery-grids">
							<div class="w3ls-hover">
								<a href="images/g3.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley">
									<img src="images/g3.jpg" class="img-responsive zoom-img" alt=""/>
									<div class="view-caption">
										<h5>View+</h5> 
									</div>
								</a>
							</div>
						</div>
						<div class="gallery-grids">
							<div class="w3ls-hover">
								<a href="images/g4.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley">
									<img src="images/g4.jpg" class="img-responsive zoom-img" alt=""/>
									<div class="view-caption">
										<h5>View+</h5> 
									</div>
								</a>
							</div>
						</div>
						<div class="gallery-grids">
							<div class="w3ls-hover">
								<a href="images/g5.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley">
									<img src="images/g5.jpg" class="img-responsive zoom-img" alt=""/>
									<div class="view-caption">
										<h5>View+</h5> 
									</div>
								</a>
							</div>
						</div>
						<div class="gallery-grids">
							<div class="w3ls-hover">
								<a href="images/g6.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley">
									<img src="images/g6.jpg" class="img-responsive zoom-img" alt=""/>
									<div class="view-caption">
										<h5>View+</h5> 
									</div>
								</a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<!--  light box js -->
					<script src="js/lightbox-plus-jquery.min.js"> </script> 
					<!-- //light box js-->  
				</div>
				<!-- //gallery -->  
				<!-- brands -->
				<!-- <div class="w3agile brands"> 
					<h3 class="w3ls-title">Our Clients</h3> 
					<div class="brands-info">
						<div class="brand-grids">
							<a href="#"><img src="images/b1.jpg" alt=""/></a>
						</div>
						<div class="brand-grids">
							<a href="#"><img src="images/b2.jpg" alt=""/></a>
						</div>
						<div class="brand-grids">
							<a href="#"><img src="images/b3.jpg" alt=""/></a>
						</div>
						<div class="brand-grids">
							<a href="#"><img src="images/b4.jpg" alt=""/></a>
						</div>
						<div class="brand-grids">
							<a href="#"><img src="images/b5.jpg" alt=""/></a>
						</div>
						<div class="brand-grids">
							<a href="#"><img src="images/b6.jpg" alt=""/></a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div> -->
				 
			</div>
		 
	<!-- menu-js -->
	<script src="js/classie.js"></script>
	<script src="js/main.js"></script>
	<!-- //menu-js -->
	<!-- pop-up-box -->
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<script>
		$(document).ready(function() {
			$('.popup-top-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});																							
		}); 
	</script>
	<!--//pop-up-box -->
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