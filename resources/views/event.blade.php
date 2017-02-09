@extends('app')

@section('content')
			<div class="content">
				<!-- banner -->
				<div class="banner about-banner"> 
					<div class="banner-img">  
						<h3>Events</h3>   
					</div> 
				</div>
				<!-- //banner -->
				<!-- properties --> 
				<div class="w3agile properties"> 
					<h3 class="w3ls-title">Events</h3> 
					<p class="w3-text">This page is to provide users with the available events happening around the country.</p>
					@foreach($users as $post)
					<div class="properties-w3lsrow"> 
						<div class="properties-bottom">
							<div class="properties-img">
							
							<img src="{{$post->image}}" alt="" class="users-img">
								<div class="view-caption">
									<h4><span class="glyphicon glyphicon-map-marker"></span> {{$post->name}} </h4>  
								</div>
								<div class="w3ls-buy">
									<a href="{{action("SingleController@index")}}">Buy</a> 
								</div>
							</div>
							<div class="w3ls-text">
								<h5><a href="{{action("MapController@index")}}">{{$post->description}}</a></h5>
								<h6>Vip: {{$post->vip}}</h6>
								<p>Regular: {{$post->regular}}</p>
								<p><b>Tickets Left :</b> {{$post->number_left}} </p>
							</div>
							
						</div>
						</div>
						@endforeach
						<div class="clearfix"> </div>
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