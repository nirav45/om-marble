@extends('layouts.web')

@section('title', $product->name)

@section('content')
	<div class="navigator-menu">
		<div class="breadscrumb-section">
			<div class="container">
				<div class="breadscrumb-content">
					<h2>{{ $product->name }}</h2>
					<ul>
						<li>Home</li>
						<li><i class="fas fa-arrow-circle-right"></i></li>
						<li>Products</li>
						<li><i class="fas fa-arrow-circle-right"></i></li>
						<li class="active">{{ $product->name }}</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="product-in-detail">
		<div class="container">
			<div class="row row-flex">
				<div data-aos="zoom-in" class="col-md-6 text-center">
					<div class="products-image shadow-lg p-1 mb-3 bg-secondary rounded">
						<img src="{{ asset('/storage/'.$product->image) }}" alt="{{ $product->name }}">
					</div>
				</div>
				<div class="col-md-6">
					<div data-aos="zoom-in" class="products-title">
						<p>{{ $product->name }}</p>
						<div class="hr"></div>
					</div>
					<div data-aos="zoom-in"	 class="products-sort-details">
						<p>{{ $product->description }}</p>
					</div>
				</div>
			</div>
		</div>
		
	</div>
@endsection	