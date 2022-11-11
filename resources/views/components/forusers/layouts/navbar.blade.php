<header>
    <!-- <nav class="navbar fixed-top justify-content-center">
        <div class="grid">
            <div class="navbar-brand ">
                <a href="{{route('home')}}"><img src="{{asset('assets')}}/img/multiColorLogo.png"></a>
            </div>
            <hr>
            <div class="gridNav px-5">
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="btn btn-outline-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                                <i class="bi bi-list"></i>
                            </a>

                            <ul class="dropdown-menu bg-light table-striped-columns" style="color: white ;">
                                <li><a class="dropdown-item" href="#">{{__('Creative Work')}}</a></li>
                                <li><a class="dropdown-item" href="#">{{__('Mission & Vision')}}</a></li>
                                <li><a class="dropdown-item" href="#">{{__('Services')}}</a></li>
                                <li><a class="dropdown-item" href="#">{{__('Submit')}}</a></li>
                                <li><a class="dropdown-item" href="#">{{__('Package')}}</a></li>
                                <li><a class="dropdown-item" href="#">{{__('Rent')}}</a></li>
                                <li><a class="dropdown-item" href="#">{{__('Workshop')}}</a></li>
                                <li><a class="dropdown-item" href="#">{{__('Sell')}}</a></li>
                                <li><a class="dropdown-item" href="#">{{__('Technology')}}</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: black ;" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: black ;" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->
    <nav class="navbar fixed-top justify-content-center">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('assets')}}/img/multiColorLogo.png"></a>
            <div class="d-flex" style="padding-right:3rem ;">
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
                        <a class="nav-link" style="color: black ;" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: black ;" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item" style="padding:0 3rem ;">
                        <div class="dropdown">
                            <a class="btn btn-outline-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                                <i class="bi bi-list"></i>
                            </a>

                            <ul class="dropdown-menu bg-light table-striped-columns" style="color: white ;">
                                <li><a class="dropdown-item" href="{{route('creativeWork')}}">{{__('Creative Work')}}</a></li>
                                <li><a class="dropdown-item" href="#">{{__('Mission & Vision')}}</a></li>
                                <li><a class="dropdown-item" href="#">{{__('Services')}}</a></li>
                                <li><a class="dropdown-item" href="#">{{__('Submit')}}</a></li>
                                <li><a class="dropdown-item" href="#">{{__('Package')}}</a></li>
                                <li><a class="dropdown-item" href="#">{{__('Rent')}}</a></li>
                                <li><a class="dropdown-item" href="#">{{__('Workshop')}}</a></li>
                                <li><a class="dropdown-item" href="#">{{__('Sell')}}</a></li>
                                <li><a class="dropdown-item" href="#">{{__('Technology')}}</a></li>
                            </ul>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>