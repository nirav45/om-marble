@extends('admin/layouts.web')

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
						<li><a href="{{route('adminproducts')}}">Products</a></li>
						<li><i class="fas fa-arrow-circle-right"></i></li>
						<li class="active"><a href="{{route('adminproduct', ['id' => $product->id])}}">{{ $product->name }}</a></li>
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
                        <p>{{ $product->name }}
                            <a class="btn" data-toggle="modal" data-target="#editProductModal"><i class="fa fa-edit"></i></a>
                        </p>
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

	<div class="modal fade" id="editProductModal" tabindex="-1" role="dialog" aria-labelledby="editProductModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editAddress1ModalLabel">Change Product Detail</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form role="form" method="post" action="{{ route('editproduct') }}" enctype="multipart/form-data" id="changeAddressForm">
		            @csrf
		            <input type="hidden" id="productId" name="id" value="{{ $product->id }}">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" value="{{ $product->name }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="name">Description</label>
                                <textarea class="form-control" id="description" placeholder="Enter description" name="description">
                                {{ $product->description }}
                                </textarea>
                            </div>
                            <div class="form-group">
                                    <label for="image">Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="image">
                                            <label class="custom-file-label" for="image">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
