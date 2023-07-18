<header>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2 col-md-5 col-sm-5 col-5">
                <a href="{{route('front.home')}}"> <img src="{{asset('front/img/logo.png')}}" alt="logo" class="logo"/></a>
            </div>

            <div class="col-lg-10 col-md-7 col-sm-7 col-7">
                <ul class="list-unstyled m-0 d-flex justify-content-around main-ul">
                    <li>
                        <a href="{{route('front.home')}}">home</a>
                    </li>
                    <li>
                        <div class="dropdown">
                            <a href="{{route('front.about_en')}}" class="dropbtn">about us</a>
                            <div class="dropdown-content">
                                <a href="{{route('front.about_en')}}">About the College</a>
                                <a href="{{route('front.about_en')}}#vision&mission">Vision and Mission</a>
                                <a href="{{route('front.about_en')}}#credits">Credits and Approvals</a>

                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="{{route('front.home')}}#programs">programs</a>
                    </li>
                    <li>
                        <a href="{{route('front.news_en')}}">news</a>
                    </li>
                    <li>
                        <a href="{{route('front.contact_us')}}">contact us</a>
                    </li>
                    <li>
                        <a href="{{route('front.certificate_en')}}">Verify Certificate</a>
                    </li>
                    <li class="lang">
                        <div class="dropdown">
                            <button class=" dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('front/img/gb.svg')}}" alt="english-logo"/>
                                English
                            </button>
                            <ul class="dropdown-menu p-0 " aria-labelledby="dropdownMenuButton1">
                                <a class="dropdown-item" href="{{route('front.home_ar')}}"> <img
                                        src="{{asset('front/img/iq.svg')}}"
                                        alt="arabic-logo"/>
                                    arabic</a>
                            </ul>
                        </div>
                    </li>
                </ul>
                <!-- mobile menu -->
                <div id="mymenu">
                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i
                                class="fa fa-times"></i></a>
                        <ul class="link list-unstyled">
                            <li class="menu-item active"><a href="{{route('front.home')}}" onclick="closeNav()">home</a>
                            </li>
                            <li class="menu-item">
                                <a class="collapse-link" data-bs-toggle="collapse"
                                   href="#collapseExample" role="button" aria-expanded="false"
                                   aria-controls="collapseExample">about us <i class="fas fa-caret-down"></i>
                                </a>
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body">
                                        <a href="{{route('front.about_en')}}" onclick="closeNav()">About the College</a>
                                        <a href="{{route('front.about_en')}}#vision&mission" onclick="closeNav()">Vision and Mission</a>
                                        <a href="{{route('front.about_en')}}#credits" onclick="closeNav()">Credits and Approvals</a>

                                    </div>
                                </div>
                            </li>

                            <li class="menu-item"><a href="{{route('front.home')}}#programs" onclick="closeNav()">programs</a></li>
                            <li class="menu-item"><a href="{{route('front.news_en')}}" onclick="closeNav()">news</a>
                            </li>
                            <li class="menu-item"><a href="{{route('front.contact_us')}}" onclick="closeNav()">contact
                                    us</a></li>
                            <li class="menu-item"><a href="{{route('front.certificate_en')}}" onclick="closeNav()">Verify
                                    Certificate</a>
                            </li>
                        </ul>

                    </div>
                    <div class="lang">
                        <div class="dropdown">
                            <button class=" dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('front/img/gb.svg')}}" alt="english-logo"/>
                                English
                            </button>
                            <ul class="dropdown-menu p-0 " aria-labelledby="dropdownMenuButton1">
                                <a class="dropdown-item" href="{{route('front.home_ar')}}"> <img
                                        src="{{asset('front/img/iq.svg')}}" alt="arabic-logo"/>
                                    arabic</a>
                            </ul>
                        </div>
                    </div>
                    <div class="burger ">
                        <div onclick="openNav()"><i class="fa fa-bars"></i></div>
                    </div>

                </div>
                <!--end mobile menu -->
            </div>
        </div>
    </div>
</header>
