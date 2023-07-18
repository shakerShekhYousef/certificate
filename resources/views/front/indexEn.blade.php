@extends('layouts.front.base')
@section('pageTitle', 'Home')
@section('content')
    <div class="owl-carousel" id="banner_carousel">
        <div class="item item1">
            <div class="content container">
                <h1>Welcome to mastery intl college</h1>
                <p>Masters International University to provide teaching and training service, high-level creativity and
                    innovation, consultancy and professional degrees, and short-term postgraduate education.</p>
                <a href="#about">LEARN MORE</a>
            </div>

        </div>
{{--        <div class="item item2"></div>--}}
    </div>
    <div class="about" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="title">about mastery intl college</div>
                    <p>We are an independent European university institution in terms of geographical location, culture
                        and scientific style , and obtained accreditation and licensing from the British government
                        under its Registration No. (14336888). Mastery International College was established as a
                        British institution concerned with higher education and distance education, to provide services
                        in the field of open and distance education, and they believe in the necessity of Civilizational
                        interaction between different nations.
                    </p>
                </div>
                <div class="col-lg-6">
                    <img src="{{asset('front/img/about-bg.jpg')}}" width="100%" alt="mastery-intl-college" />
                </div>
            </div>
        </div>
    </div>
    <div class="program" id="programs">
        <div class="container">
            <div class="text-center">
                <div class="title text-center">Our Professional Programs</div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/1.png')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Department of Health and Therapeutic Nutrition</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/2.png')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Department of Integrated Non-Surgical Aesthetic Medicine</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/3.png')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Department of Medical Sciences - Radiology</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/4.jpeg')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Department of Political Science</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/5.png')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Department of Medical Sciences - Medical Laboratories</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/6.png')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Department of Business Administration</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/7.jpeg')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Department of International Relations and Diplomacy</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/8.png')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Department of International Arbitration and International Law</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/9.png')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Engineering Project Management Department</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/10.png')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Department of Medical Sciences - Nursing</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/11.png')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Department of Technology - Cybercrime</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/12.png')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Department of Media - Public Relations</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/13.png')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Department of Medical Sciences - Alternative Medicine and Herbal Medicine</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/14.png')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Department of Law - Criminal Law</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/15.png')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Department of Social Sciences - Training and Education Skills</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/16.png')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Industrial Project Management Department</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/17.jpg')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Department of Medical Sciences - Motor Rehabilitation</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/18.jpg')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Chemistry Department</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/19.jpg')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Business Administration Department - Accounting and Auditing</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/20.jpg')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Media Department - Modern Media</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/21.webp')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Department of Law - Organized Crime</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/22.jpg')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Department of Medical Sciences - Physiotherapy</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/23.jpg')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Department of Law - Human Rights</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/24.jpg')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Department of Business Consulting</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/25.jpg')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Medical Quality Department</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/26.jpg')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Physical Education Department</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/27.jpg')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Graphic Design Department</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/28.jpg')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Department of Medical Sciences - Cupping Science</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/29.jpg')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Department of Architecture Art</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/30.jpg')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Department of Tourism</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/31.jpg')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Department of Crisis Management</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/32.png')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Department of Computers Science</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/33.jpg')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Department of Islamic Studies</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/34.jpeg')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Department of Human Resources Management</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/35.webp')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Department of Mechanical science</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/36.jpg')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Department of Sports Management</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/37.jpg')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Department of Security Studies</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/38.jpg')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Information Technology(IT)</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/39.jpeg')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Department of Psychology</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/40.webp')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Department of Human Development and Self-Development</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/41.jpg')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Department of The Art of Writing A Newspaper Article</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/42.jpg')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Department of Investigative Journalism</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/43.jpg')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Department of Balanced Nutrition</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/44.jpg')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Training, Awareness, implementation of internal audit for standard ISO 9001:2015
                                </h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/45.jpg')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Department of Marketing and E-Commerce</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/46.jpg')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Department of Oil Laboratories</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/47.jpg')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Construction and building department</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/48.jpg')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Department of Digital Currency</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/49.webp')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Department of Integrated Quality Management System</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/50.jpg')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Department of Occupational Health and Safety</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/51.jpg')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Department of Oil, Gas and Energy Management</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/52.jpg')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Department of Organic Chemistry</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/53.jpg')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Supply Chain Management</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{route('front.programEn')}}">
                        <div class="box">
                            <img src="{{asset('front/img/54.jpg')}}" alt="mastery-intl-college-program" />
                            <div class="content">
                                <h2>Mental health and psychotherapy</h2>
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="news">
        <div class="container">
            <div class="text-center">
                <div class="title">news</div>
            </div>
            <div class="row main-row ">
                @foreach($posts as $post)
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-5">
                        <a href="{{route('front.news_details',$post)}}">
                            <img src="{{asset('storage/'.$post->image)}}" alt="news"/>
                        </a>
                        <a href="{{route('front.news_details',$post)}}">
                            <h5>
                                {{$post->title_en}}
                            </h5>
                        </a>
                        <div class="date"><i class="far fa-clock"></i>
                            {{\Carbon\Carbon::parse($post->created_at)->isoFormat('MMMM Do YYYY')}}
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center">
                <a href="{{route('front.news_en')}}" class="more">More News <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
    </div>
@endsection
