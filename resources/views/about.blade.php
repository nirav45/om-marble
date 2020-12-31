@extends('layouts.web')

@section('title', 'Aboutus')

@section('content')
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
@endsection
