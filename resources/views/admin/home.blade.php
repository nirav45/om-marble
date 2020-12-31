@extends('admin/layouts.web')

@section('title', 'Home')

@section('content')

<div class="banner-main">
    <div class="owl-carousel banner-carousel owl-theme">
        <div class="item">
            <div class="banner-inner">
                <img class="w-100" src="img/banner.jpg">
                <div class="centered">
                    <h3>First Slide</h3>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="banner-inner">
                <img class="w-100" src="img/banner.jpg">
                <div class="centered">
                    <h3>First Slide</h3>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="banner-inner">
                <img class="w-100" src="img/banner.jpg">
                <div class="centered">
                    <h3>First Slide</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about-us-section container-fluid">
    <div class="row-grid-section container">
        <div class="row">
            <div class="col-md-3">
                <a href="">
                    <div class="relative shadow-sm">
                        <img src="img/tiles7.jpg" class="img-fluid shadow-sm">
                        <div class="absolute flex-column text-center d-flex justify-content-center align-items-center">
                            <img src="{{asset('img/logo-square_2_50x50.png')}}">
                            <h4>Floor Marble</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="">
                    <div class="relative shadow-sm">
                        <img src="img/tiles8.jpg" class="img-fluid shadow-sm">
                        <div class="absolute flex-column text-center d-flex justify-content-center align-items-center">
                            <img src="{{asset('img/logo-square_2_50x50.png')}}">
                            <h4>Wall Marble</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="">
                    <div class="relative shadow-sm">
                        <img src="img/tiles9.jpg" class="img-fluid shadow-sm">
                        <div class="absolute flex-column text-center d-flex justify-content-center align-items-center">
                            <img src="{{asset('img/logo-square_2_50x50.png')}}">
                            <h4>Grey Marble</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="">
                    <div class="relative shadow-sm">
                        <img src="img/tiles10.jpg" class="img-fluid shadow-sm">
                        <div class="absolute flex-column text-center d-flex justify-content-center align-items-center">
                            <img src="{{asset('img/logo-square_2_50x50.png')}}">
                            <h4>Nitco Marble</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="about-us-content container" id="about-us">
        <div class="row">
            <div class="col-md-6 about-us-content-image ">
                <img src="img/about1.jpg">
            </div>
            <div class="col-md-6 about-us-content-text d-flex align-items-center relative">
                <div class="about-us-content-text-inner absolute">
                    <h4>About Om Marble</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="products-view-section">
    <div class="container">
        <div class="products-header d-flex justify-content-between align-items-center">
            <h3>Products</h3>
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

<div class="contact-us-section" id="contact-us">
    <div class="map-section">
        <div class="container">
            <div class="text-center"><h2>Offices</h2></div>
            @foreach ($offices as $office)
            <div class="row map-grid">
                <div class="col-md-6 map-section-address">

                    <div class="col-md-8">
                        <div class="d-flex align-items-center contact-us-address-text">
                            <h4>{{ $office->name }}</h4>
                        </div>
                        <div class="d-flex align-items-center contact-us-address-text">
                            <i class="fas fa-map-marker-alt"></i>
                            <a href="{{ $office->mapLink }}" target="_blank">
                                <p>{{ $office->address }}</p>
                            </a>
                        </div>
                        <div class="d-flex align-items-center contact-us-address-text">
                            <i class="fas fa-phone-alt"></i>
                            <a href="tel:{{ $office->phoneNumber }}" target="_blank">
                                <h6>{{ $office->phoneNumber }}</h6>
                            </a>
                        </div>
                        <div class="d-flex align-items-center contact-us-address-text">
                            <i class="far fa-envelope"></i>
                            <a href="mailto:{{ $office->email }}">
                                <h6>{{ $office->email }}</h6>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 relative map-section-mapview ">
                    <div class="absolute map-section-mapview-inner d-flex align-items-center">
                        <iframe src="{{ $office->mapEmbedLink }}" width="600" height="450" frameborder="0" style="border:0; width: 100%; height: 80%;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="contact-us-form mt-1">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <form>
                        <div class="card border-0 shadow mb-1 bg-white contact-form">
                            <div class="card-header border-0 text-center">
                                <h5>Send a Message</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Tell Us Your Name</label>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="inputFirstName" placeholder="First name" value="" required>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="inputLastName" placeholder="Last name" value="" required>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Your Email Address</label>
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Enter Your Email Address">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Write a Message</label>
                                    <textarea class="form-control" id="inputMessage" rows="3"></textarea>
                                </div>
                                <button class="learn-more">
                                    <span class="circle" aria-hidden="true">
                                        <span class="icon arrow"></span>
                                    </span>
                                    <span class="button-text">Send Message</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
