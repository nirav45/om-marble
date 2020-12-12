@extends('layouts.web')

@section('title', 'Home')

@section('content')
	<div class="banner-main">
	  <img class="img-fluid" src="img/banner.jpg" alt="Slide-image">
	</div>

	<div class="about-section">
		<div class="container">
			<div class="row">
				<div class="about-section-content col-md-6">
					<h2 data-aos="zoom-in">About Us</h2>
					<p data-aos="zoom-in">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					<p data-aos="zoom-in">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
				<div data-aos="zoom-in" class="about-section-img col-md-6 text-center d-flex justify-content-center">
					<div class="img-container"></div>
				</div>
			</div>
		</div>
		<div class="products">
			<div class="container">
				<div data-aos="zoom-in" class="products-head d-flex justify-content-between">
					<div class="col-md-6" style="color: white">
						<h2>Products</h2>
					</div>
					<div class="col-md-6 text-right">
						<a class="btn btn-light" href="{{ route('products') }}" role="button">View All</a>
					</div>
				</div>
				<div data-aos="zoom-in" class="carousel-multi-item text-center">
				    <div class="owl-carousel-tiles owl-carousel owl-theme">
						@foreach ($products as $product)
							<a href="{{ route('product', ['id' => $product->id]) }}">
								<div class="card">
									<div class="card-body">
										<h5>{{ $product->name }}</h5>
									</div>
									<div class="card-img">
										<img class="card-img-bottom" src="{{ asset($product->image)}}">
									</div>
								</div>
							</a>
						@endforeach
					</div>
				</div>
			</div>
			
		</div>
		
	</div>

	<script type="text/javascript">

		$(document).ready(function(){

			var owlTiles = $('.owl-carousel-tiles');

			owlTiles.owlCarousel({
				margin:10,
				autoplay:false,
				responsiveClass:true,
				lazyLoad:true,
				responsive:{
					0:{
						items:1,
					},
					480:{
						items:3,
					},
					768:{
						items:4,
					}

				},
			});
			
		});
	</script>
@endsection