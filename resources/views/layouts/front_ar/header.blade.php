<header>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2 col-md-5 col-sm-5 col-5">
                <a href="{{route('front.home_ar')}}"> <img src="{{asset('front/img/logo.png')}}" alt="logo" class="logo" /></a>
            </div>

            <div class="col-lg-10 col-md-7 col-sm-7 col-7">
                <ul class="list-unstyled m-0 d-flex justify-content-around main-ul">
                    <li>
                        <a href="{{route('front.home_ar')}}">الرئيسية</a>
                    </li>
                    <li>
                        <div class="dropdown">
                            <a href="{{route('front.about_ar')}}" class="dropbtn">من نحن</a>
                            <div class="dropdown-content">
                                <a href="{{route('front.about_ar')}}">حول الجامعة</a>
                                <a href="{{route('front.about_ar')}}#vision&mission">الرؤية و المهام</a>
                                <a href="{{route('front.about_ar')}}#credits">الاعتمادات و الموافقات</a>

                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="{{route('front.home_ar')}}#programs">البرامج</a>
                    </li>
                    <li>
                        <a href="{{route('front.news_ar')}}">الأخبار</a>
                    </li>
                    <li>
                        <a href="{{route('front.contact_us_ar')}}">اتصل بنا</a>
                    </li>
                    <li>
                        <a href="{{route('front.certificate_ar')}}">التحقق من الشهادة</a>
                    </li>
                    <li class="lang">
                        <div class="dropdown">
                            <button class=" dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                العربية

                                <img src="{{asset('front/img/iq.svg')}}" alt="arabic-logo" />

                            </button>
                            <ul class="dropdown-menu p-0 " aria-labelledby="dropdownMenuButton1">
                                <a class="dropdown-item" href="{{route('front.home')}}"><img src="{{asset('front/img/gb.svg')}}"
                                                                                  alt="english-logo" />
                                    English</a>
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
                            <li class="menu-item active"><a href="{{route('front.home_ar')}}" onclick="closeNav()">الرئيسية</a></li>
                            <li class="menu-item"><a class="collapse-link" data-bs-toggle="collapse"
                                                     href="#collapseExample" role="button" aria-expanded="false"
                                                     aria-controls="collapseExample">من نحن <i class="fas fa-caret-down"></i></a>
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body">
                                        <a href="{{route('front.about_ar')}}" onclick="closeNav()">حول الجامعة</a>
                                        <a href="{{route('front.about_ar')}}#vision&mission" onclick="closeNav()">الرؤية و المهام</a>
                                        <a href="{{route('front.about_ar')}}#credits" onclick="closeNav()">الاعتمادات و الموافقات</a>

                                    </div>
                                </div>
                            </li>

                            <li class="menu-item"><a href="{{route('front.home_ar')}}#programs" onclick="closeNav()">البرامج</a></li>
                            <li class="menu-item"><a href="{{route('front.news_ar')}}" onclick="closeNav()">الأخبار</a></li>
                            <li class="menu-item"><a href="{{route('front.contact_us_ar')}}" onclick="closeNav()">اتصل بنا</a></li>
                            <li class="menu-item"><a href="{{route('front.certificate_ar')}}" onclick="closeNav()">التحقق من الشهادة</a>
                            </li>
                        </ul>

                    </div>
                    <div class="lang">
                        <div class="dropdown">
                            <button class=" dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('front/img/iq.svg')}}" alt="english-logo" />
                                العربية
                            </button>
                            <ul class="dropdown-menu p-0 " aria-labelledby="dropdownMenuButton1">
                                <a class="dropdown-item" href="{{route('front.home')}}"> <img src="{{asset('front/img/gb.svg')}}" alt="arabic-logo" />
                                    English</a>
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
