@extends('admin/layouts.web')

@section('title', 'Products')

@section('content')
    <div class="navigator-menu">
        <div class="breadscrumb-section">
            <div class="container">
                <div class="breadscrumb-content wow bounceInLeft">
                    <h2>Products</h2>
                    <ul>
                        <li><a href="{{route('adminhome')}}">Home</a></li>
                        <li><i class="fas fa-arrow-circle-right"></i></li>
                        <li class="{{ $page == 'products' ? 'active' : '' }}"><a href="{{route('adminproducts')}}">Products</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

	{{-- <div class="products-inner-section">
		<div class="container">
			<div class="products-filter">
				<a class="active" data-tab="all-products">All <i class="fas fa-arrow-right"></i></a>
				<a data-tab="products-grey">Grey Marble</a>
				<a data-tab="products-exotica">Exotica Marble</a>
				<a>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createProductModal">
						<i class="fa fa-plus"></i>
					</button>
				</a>

			</div>
			<div class="row row-flex text-center">
			@foreach ($products as $product)
				<div class="col-md-3">
					<a href="{{ route('adminproduct', ['id' => $product->id]) }}">
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
    </div> --}}

    <div class="products-inner-section">
		<div class="container">
			<div class="products-filter">
                <a class="btn active" onclick="getProduscts('all')" data-wipe="All">All</a>
				<a class="btn" onclick="getProduscts('grey-marble')" data-wipe="Grey Marble">Grey Marble</a>
				<a class="btn" onclick="getProduscts('white-marble')" data-wipe="White Marble">White Marble</a>
				<a class="btn" onclick="getProduscts('wall-marble')" data-wipe="Wall Marble">Wall Marble</a>
				<a class="btn" onclick="getProduscts('nitco-marble')" data-wipe="Nitco Marble">Nitco Marble</a>
				<a class="btn" data-toggle="modal" data-target="#createProductModal"><i class="fa fa-plus"></i></a>
            </div>

            <div class="row products-grid-view" id="products-cards">

			</div>
		</div>
    </div>

	<div class="modal fade" id="createProductModal" tabindex="-1" role="dialog" aria-labelledby="createProductModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="createProductModalLabel">Add Product</h5>
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
							<input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
						</div>
						<div class="form-group">
							<label for="description">Description</label>
							<input type="text" class="form-control" id="description" placeholder="Description" name="description" required>
						</div>
						<div class="form-group">
							<label for="category">Category</label>
							<select class="form-control" id="category"name="category">
								<option>Type 1</option>
								<option>Type 2</option>
								<option>Type 3</option>
							</select>
						</div>
						<div class="form-group">
							<label for="image">Image</label>
							<div class="input-group">
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="image" name="image" required>
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

	<div class="modal fade" id="editProductModal" tabindex="-1" role="dialog" aria-labelledby="editProductModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editAddress1ModalLabel">Change Product Detail</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form role="form" method="post" action="{{ route('editproduct') }}" enctype="multipart/form-data" id="editProductForm">
		            @csrf
		            <input type="hidden" id="productId" name="id" value="">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" value="" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Description</label>
                                <textarea class="form-control" id="description" placeholder="Enter description" name="description" required>
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

    <script type="text/javascript">

        $( document ).ready(function() {
            getProduscts('all');

            $('#image').on('change',function(){
                //get the file name
                var fileName = $(this).val();
				console.log("file", fileName);
                $(this).next('.custom-file-label').html(fileName);
            });

			$(document).on('click', '.edit-product', function() {
				$('#editProductForm input[name="id"]').val($(this).data('productid'));
				$('#editProductForm input[name="name"]').val($(this).data('productname'));
				$('#editProductForm input[name="description"]').html($(this).data('description'));
				console.log($(this).data('productid'), $('#productId').val());
			});

			$('#editProductForm').validate({
				rules: {
					name: {
						required: true,
					},
					description: {
						required: true,
					},
				},
				messages: {
					name: {
						required: "Please enter name",
					},
					description: {
						required: "Please give description about product"
					},
				}
			});

			$('#editProductForm').validate({
				rules: {
					name: {
						required: true,
					},
					description: {
						required: true,
					},
				},
				messages: {
					name: {
						required: "Please enter name"
					},
					description: {
						required: "Please give description about product"
					},
				}
			});
        });

        function getProduscts(categories){

            /* var categories = "white-marble"; */

            $.ajax({
                url: '{{ url("/admingetproducts") }}',
                type: 'GET',
                cache: false,
                data: { 'category': categories},
                datatype: 'html',
                success: function(data){
                    $('#products-cards').html(data.html);
                },
                error: function(jqXHR, exception){
                    var msg = '';
                    if (jqXHR.status === 0) {
                    msg = 'Not connect.\n Verify Network.';
                    } else if (jqXHR.status == 404) {
                        msg = 'Requested page not found. [404]';
                    } else if (jqXHR.status == 500) {
                        msg = 'Internal Server Error [500].';
                    } else if (exception === 'parsererror') {
                        msg = 'Requested JSON parse failed.';
                    } else if (exception === 'timeout') {
                        msg = 'Time out error.';
                    } else if (exception === 'abort') {
                        msg = 'Ajax request aborted.';
                    } else {
                        msg = 'Uncaught Error.\n' + jqXHR.responseText;
                    }
                    alert(msg);
                }
            });
        }
        </script>
@endsection
