@extends('admin/layouts.web')

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
				<a>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createProductModal">
						Add +
					</button>
				</a>
				
			</div>
			<div class="row row-flex text-center">
			@foreach ($products as $product)
				<div class="col-md-3">
					<a href="{{ route('adminproduct', ['id' => $product->id]) }}">
						<div data-aos="zoom-in" class="card">
							<div class="card-img">
						  		<img class="card-img-top" src="{{ asset('storage/'.$product->image)}}">
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

	<div class="modal fade" id="createProductModal" tabindex="-1" role="dialog" aria-labelledby="createProductModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="createProductModalLabel">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form role="form" method="post" action="{{ route('createproduct') }}" enctype="multipart/form-data">
				@csrf
				<div class="modal-body">
					<div class="card-body">
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
						</div>
						<div class="form-group">
							<label for="description">Description</label>
							<input type="text" class="form-control" id="description" placeholder="Description" name="description">
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
					<button type="submit" class="btn btn-primary">Add</button>
				</div>
			</form>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function() {
			$('#image').on('change',function(){
                //get the file name
                var fileName = $(this).val();
				console.log("file", fileName);
                $(this).next('.custom-file-label').html(fileName);
            })
		})

	</script>
@endsection