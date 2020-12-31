@extends('layouts.web')

@section('title', 'Products')

@section('content')
    <div class="navigator-menu">
        <div class="breadscrumb-section">
            <div class="container">
                <div class="breadscrumb-content wow bounceInLeft">
                    <h2>Products</h2>
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><i class="fas fa-arrow-circle-right"></i></li>
                        <li class="{{ $page == 'products' ? 'active' : '' }}"><a href="{{route('products')}}">Products</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

	<div class="products-inner-section">
		<div class="container">
			<div class="products-filter">
                <a class="btn active" onclick="getProduscts('all')" data-wipe="All">All</a>
				<a class="btn" onclick="getProduscts('grey-marble')" data-wipe="Grey Marble">Grey Marble</a>
				<a class="btn" onclick="getProduscts('white-marble')" data-wipe="White Marble">White Marble</a>
				<a class="btn" onclick="getProduscts('wall-marble')" data-wipe="Wall Marble">Wall Marble</a>
				<a class="btn" onclick="getProduscts('nitco-marble')" data-wipe="Nitco Marble">Nitco Marble</a>
            </div>

            <div class="row products-grid-view" id="products-cards">

			</div>
		</div>
    </div>

    <script type="text/javascript">

    $( document ).ready(function() {
        getProduscts('all');
    });

    function getProduscts(categories){

        /* var categories = "white-marble"; */

        $.ajax({
            url: '{{ url("/getproducts") }}',
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
