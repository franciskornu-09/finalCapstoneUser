@extends('app')

@section('content')
			<div class="content">
				<!-- banner -->
				<div class="banner">
					<div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="6000" data-pause="hover">
						<!-- Wrapper-for-Slides -->
						<div class="carousel-inner" role="listbox"> 
							<!-- First-Slide -->
							<div class="item active">
								<div class="banner-img"> 
									<div class="carousel-caption kb_caption">
										<h3 data-animation="animated flipInX">Real estate</h3>  
									</div>
								</div>
							</div> 
							<!-- Second-Slide -->
							<div class="item">
								<div class="banner-img banner-img1"> 
									<div class="carousel-caption kb_caption kb_caption_right">
										<h3 data-animation="animated flipInX">Dream Home</h3> 
									</div>
								</div>
							</div> 
							<!-- Third-Slide -->
							<div class="item">
								<div class="banner-img banner-img2"> 
									<div class="carousel-caption kb_caption kb_caption_center">
										<h3 data-animation="animated flipInX">Latest Design</h3> 
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
				<!-- //banner -->
				<!-- welcome -->
				<div class="welcome">
					   <div class="welcome-info">
						<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
							<div class="clearfix"> </div>
							<div id="myTabContent" class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
									<div class="tabcontent-grids">
										<h4>Find Your Buying Property</h4>
											<form method="post" action="/search">
												<input type="search" name="Search" placeholder="Your City..." required="" id="value">									
												<button type="submit" class="btn btn-default" aria-label="Left Align">
													<span class="glyphicon glyphicon-search"></span>
												</button>

											</form>
											<div>........................</div>
										<div id="found"></div>
									 </div>
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
	<!-- nice scroll-js -->
	<script src="js/jquery.nicescroll.min.js"></script> 
	<script>
		function searchInfo(){
			alert("found");
			var item = $("#value").val();
			$.ajax({
		      type: "GET",
		      url:'search/' + item
		      // url: "search/"+ $("#value").val(),
		    })
		    .done(function( data ) {
		      $('#found').html(data);

		      });
		}

		
		$(document).ready(function() {
	  
			var nice = $("html").niceScroll();  // The document page (body)
		
			$("#div1").html($("#div1").html()+' '+nice.version);
		
			$("#boxscroll").niceScroll({cursorborder:"",cursorcolor:"#00F",boxzoom:true}); // First scrollable DIV
		});
	</script>
	<!-- //nice scroll-js -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
@endsection