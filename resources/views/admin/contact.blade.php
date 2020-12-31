@extends('admin/layouts.web')

@section('title', 'Admin')

@section('content')

    <div class="navigator-menu">
		<div class="breadscrumb-section ">
			<div class="container">
				<div class="breadscrumb-content wow bounceInLeft">
					<h2>Contact Us</h2>
					<ul>
						<li>Home</li>
						<li><i class="fas fa-arrow-circle-right"></i></li>
						<li class="active">Contact</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

    <div class="contact-details">
		<div class="container">
			<div class="row">
				<div class="col-md-5 wow bounceInLeft" data-wow-delay="1s">
					<form>
						<div class="card border-0 shadow mb-5 bg-white contact-form">
							<div class="card-header border-0 text-center">
								<h5>Send a Message</h5>
							</div>
							<div class="card-body">
								<div class="form-group">
									<label for="exampleFormControlInput1">Tell Us Your Name</label>
									<div class="form-row">
										<div class="col-md-6">
											<input type="text" class="form-control" id="inputFirstName" placeholder="First name" value="" required>										
										</div>
										<div class="col-md-6">
											<input type="text" class="form-control" id="inputLastName" placeholder="Last name" value="" required>
										</div>
										
									</div>
								</div>
								<div class="form-group">
									<label for="exampleFormControlInput1">Your Email Address</label>
									<input type="email" class="form-control" id="inputEmail" placeholder="Enter Your Email Address">
								</div>
								<div class="form-group">
									<label for="exampleFormControlInput1">Write a Message</label>
									<textarea class="form-control" id="inputMessage" rows="3"></textarea>
								</div>
								<button type="submit" class="btn btn-secondary">Send Message</button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-7 wow bounceIn" data-wow-delay="2s">
					<div class="card mb-5 border-0 shadow bg-white">
						<div class="map-section" id="map"></div>
					</div>
					
				</div>
			</div>
		</div>
	</div>

    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiaGl0ZW4xMjIiLCJhIjoiY2tpa2thejN2MGFwazJ5cGs3ZTFzZnhvaSJ9.uzz1HsOMlnSZRGf_1ylcQg';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11', // stylesheet location
            center: [71.9120, 21.4593], // starting position [lng, lat]
            zoom: 9.2 // starting zoom
        });

	    var marker = new mapboxgl.Marker()
            .setLngLat([71.823887, 21.541196])
            .addTo(map);

	    var marker1 = new mapboxgl.Marker()
            .setLngLat([72.0327, 21.3514])
            .addTo(map);
		

	</script>

@endsection