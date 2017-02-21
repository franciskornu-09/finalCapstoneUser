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