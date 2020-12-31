@extends('layouts.web')

@section('title', $product->name)

@section('content')
	<div class="navigator-menu">
		<div class="breadscrumb-section">
			<div class="container">
				<div class="breadscrumb-content">
					<h2>{{ $product->name }}</h2>
					<ul>
                        <li><a href="{{route('home')}}">Home</a></li>
						<li><i class="fas fa-arrow-circle-right"></i></li>
						<li><a href="{{route('products')}}">Products</a></li>
						<li><i class="fas fa-arrow-circle-right"></i></li>
						<li class="active"><a href="{{route('product', ['id' => $product->id])}}">{{ $product->name }}</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="product-in-detail">
		<div class="container">
			<div class="row row-flex">
				<div class="col-md-6 text-center">
					<div class="products-image shadow-lg p-1 mb-3 bg-secondary rounded">
						<img src="{{ asset('/'.$product->image) }}" alt="{{ $product->name }}">
					</div>
				</div>
				<div class="col-md-6">
					<div class="products-title">
						<p>{{ $product->name }}</p>
						<div class="hr"></div>
					</div>
						<p>{{ $product->description }}</p>
					</div>
				</div>
			</div>
		</div>
    </div>

    <div class="products-view-section">
		<div class="container">
			<div class="products-header d-flex justify-content-between align-items-center">
                <h3>Similer Products</h3>
                <a href="{{ route('products') }}">
                    <button class="learn-more">
                        <span class="circle" aria-hidden="true">
                              <span class="icon arrow"></span>
                        </span>
                        <span class="button-text">View More</span>
                    </button>
                </a>
			</div>
			<div class="products-view">
				<div class="owl-carousel products-carousel">
                    @foreach ($products as $product)
                        <div>
                            <div class="relative shadow-sm">
                                <img src="{{ asset($product->image)}}">
                                <div class="absolute flex-column text-center d-flex justify-content-center align-items-center">
                                    <h3>{{ $product->name }}</h3>
                                    <a href="{{ route('product', ['id' => $product->id]) }}">
                                        <button class="learn-more">
                                            <span class="circle" aria-hidden="true">
                                                <span class="icon arrow"></span>
                                            </span>
                                            <span class="button-text">Learn More</span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
				</div>
			</div>
		</div>
    </div>
@endsection
