@extends('layouts.web')

@section('title', 'Products')

@section('content')
	<div class="products-details">
		<div class="breadscrumb-section">
			<div class="container">
				<div class="breadscrumb-content">
					<h2>Products</h2>
					<ul>
						<li>Home</li>
						<li><i class="fas fa-arrow-circle-right"></i></li>
						<li class="active">Products</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="products-inner-section">
		<div class="container">
			<div class="products-filter">
				<a class="active" data-tab="all-products">All <i class="fas fa-arrow-right"></i></a>
				<a data-tab="products-grey">Grey Marble</a>
				<a data-tab="products-exotica">Exotica Marble</a>
			</div>
			<div class="row row-flex text-center">
			@foreach ($products as $product)
				<div class="col-md-3">
					<a href="{{route('product', ['id' => $product->id])}}">
						<div data-aos="zoom-in" class="card">
							<div class="card-img">
						  		<img class="card-img-top" src="{{ asset($product->image)}}">
						  	</div>
						  	<div class="card-body">
						  		<h5>{{ $product->name }}</h5>
						  	</div>
						</div>
					</a>
				</div>
			@endforeach
			</div>
		</div>
	</div>
@endsection