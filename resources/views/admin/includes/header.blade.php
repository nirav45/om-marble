<div class="header-main">
    <div class="container">
        <nav data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500" id="topNavbar" class="navbar navbar-expand-md fixed-top navbar-light">
            <a class="navbar-brand" href="{{route('adminhome')}}">
                <img src="{{ asset('img/logo-square.png') }}" alt="logo" style="width: 50px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link {{ $page == 'home' ? 'active' : '' }}" href="{{route('adminhome')}}">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link {{ $page == 'products' ? 'active' : '' }}" href="{{route('adminproducts')}}">Products</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link {{ $page == 'aboutus' ? 'active' : '' }}" href="{{route('adminaboutus')}}">About Us</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link {{ $page == 'contactus' ? 'active' : '' }}" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>