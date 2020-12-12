@extends('admin/layouts.web')

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
						<img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
					</div>
				</div>
				<div class="col-md-6">
					<div data-aos="zoom-in" class="products-title">
						<p>{{ $product->name }}</p>
						<a href="#"><i class="fas fa-edit" class="change-product" data-toggle="modal" data-target="#editProductModal" ></i></a>
						<div class="hr"></div>
					</div>
					<div data-aos="zoom-in"	 class="products-sort-details">
						<p>{{ $product->description }}</p>
					</div>
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