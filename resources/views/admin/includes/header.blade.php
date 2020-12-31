

<div class="header-main" id="top">
    <div class="">
        <nav id="topNavbar" class="navbar navbar-expand-md fixed-top navbar-light">
            <a class="navbar-brand" href="{{route('home')}}">
                <img src="{{ asset('img/logo-square_2_50x50.png') }}" alt="logo" style="width: 40px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link {{ $page == 'home' ? 'active' : '' }}" href="{{route('adminhome')}}" onclick="clickSmoothScroll('top')" >Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ $page == 'products' ? 'active' : '' }}" href="{{route('adminproducts')}}">Products</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" onclick="clickSmoothScroll('about-us')" href="{{route('adminaboutus')}}">About Us</a>
                  </li>
                  <li class="contact-us nav-item">
                    <a class="nav-link" onclick="clickSmoothScroll('contact-us')" href="{{route('admincontact')}}">Contact Us</a>
                  </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
