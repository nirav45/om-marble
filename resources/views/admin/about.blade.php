@extends('admin/layouts.web')

@section('title', 'Aboutus')

@section('content')
	<div class="products-details">
		<div class="breadscrumb-section ">
			<div class="container">
				<div class="breadscrumb-content wow bounceInLeft">
					<h2>About Om Marble</h2>
					<ul>
						<li>Home</li>
						<li><i class="fas fa-arrow-circle-right"></i></li>
						<li class="active">About Us</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="about-us-section">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="inner-text wow bounceIn">
						<p class="">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					</div>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-6">
					<div class="inner-img wow bounceIn">
						<img class="rounded border shadow mb-5 bg-white rounded" src="{{ asset('img/tiles8.jpg') }}">
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
