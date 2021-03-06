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

    <div class="products-inner-section">
		<div class="container">
			<div class="products-filter">
                <a class="btn active" onclick="getProduscts('all')" data-wipe="All">All</a>
<<<<<<< HEAD
				<a class="btn" onclick="getProduscts('grey-marble')" data-wipe="Grey Marble">Grey Marble</a>
				<a class="btn" onclick="getProduscts('white-marble')" data-wipe="White Marble">White Marble</a>
				<a class="btn" onclick="getProduscts('wall-marble')" data-wipe="Wall Marble">Wall Marble</a>
                <a class="btn" onclick="getProduscts('nitco-marble')" data-wipe="Nitco Marble">Nitco Marble</a>
                <a class="btn" onclick="getProduscts('nitco-marble')" data-wipe="Add New Category">Add New Category</a>
				<a class="btn" data-toggle="modal" data-target="#createProductModal"><i class="fa fa-plus"></i></a>
=======
				@foreach ($categories as $category)
				<a class="btn" onclick="getProduscts({{ $category->id }})" data-wipe="{{ $category->name }}">{{ $category->name }}</a>
                @endforeach
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createProductModal">Add Product</button>
				&nbsp;
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createCategoryModal">Add Category</i></button>
>>>>>>> 2968783fad2e24c4a1318d75cfe0e6368c769e86
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
<<<<<<< HEAD
							<select class="form-control" id="category" name="category">
								<option>Type 1</option>
								<option>Type 2</option>
								<option>Type 3</option>
=======
							<select class="form-control" id="category"name="category">
								@foreach ($categories as $category)
								<option value={{ $category->id }}>{{ $category->name }}</option>
								@endforeach
>>>>>>> 2968783fad2e24c4a1318d75cfe0e6368c769e86
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

	<div class="modal fade" id="createCategoryModal" tabindex="-1" role="dialog" aria-labelledby="createCategoryModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="createCategoryModalLabel">Add Category</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form role="form" method="post" action="{{ route('createcategory') }}" enctype="multipart/form-data">
				@csrf
				<div class="modal-body">
					<div class="card-body">
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
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
								<label for="category">Category</label>
								<select class="form-control" id="category"name="category">
									<option value="">Select Category</option>
									@foreach ($categories as $category)
									<option value={{ $category->id }}>{{ $category->name }}</option>
									@endforeach
								</select>
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
				$('#editProductForm select[name="category"]').val($(this).data('category'));
				$('#editProductForm textarea[name="description"]').html($(this).data('description'));
			});
			$(document).on('click', '.delete-product', function() {
				var productId = $(this).data('productid');
				var productBox =  $(this).parents('.product-view');
				
				swal({
					title: "Are you sure?",
					text: "You want to delete this product",
					icon: "warning",
					buttons: true,
					dangerMode: true,
				})
				.then((willDelete) => {
					if (willDelete) {
						$.ajax({
							url: '{{ route("deleteproduct") }}',
							type: 'GET',
							cache: false,
							data: { 'productId': productId},
							success: function(data){
								productBox.remove();
								swal("Product deleted successfully.", {
									icon: "success",
								});
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
					} else {
						
					}
				});
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
