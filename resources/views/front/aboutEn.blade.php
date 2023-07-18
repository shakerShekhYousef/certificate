@extends('layouts.front.base')
@section('pageTitle', 'About Us')
@section('content')
<div class="about-page content-page">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('front.home')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">About The College</li>
            </ol>
        </nav>
    </div>
    <div class="banner text-center">
        <div class="container">
            <div class="title">About the College</div>
            <p>We are a European independent college institution geographical location, culture, and scientific
                method 'and obtained accreditation and licensing from the British government under its license
                number ( 13066875). Diana INTL College was established at the beginning of 2020 as a British
                institution concerned with open education and distance learning with the contribution of a group of
                scientific cadres of Arab elites that immigrated to the United Kingdom in cooperation with a group
                of founding fathers in the field of open education and distance education, who are British citizens
                and believe in the need for civilized interaction between peoples.

            </p>
        </div>
    </div>
    <div class="vision">
        <div class="container">
            <div class="text-center">
                <div class="title" id="vision&mission"> Vision & Mission</div>
            </div>
            <div class="sub-title" >Vision</div>
            <p class="sub-content">A leading global university in the outcomes of human, technical education and
                attention to its
                quality, in accordance with the European online approach and an emerging World environment.</p>
            <div class="sub-title" >Mission</div>
            <p class="sub-content">Clear learning goals for the programme and individual courses, describing
                expected student competences at the end of the programme A curriculum that reflects the newest
                international knowledge within the disciplines of the programme An administration and campus
                facilities that optimally support the students’ learning and personal development Measurement and
                follow up on the realization of the intended learning goals, with regular and systematic feedback to
                the programme committee and course responsible.</p>
        </div>
    </div>

    <div class="section " id="credits">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6">
                    <div class="title">limited libility company certificate on formation</div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <img src="{{asset('front/img/dianaimage2.jpg')}}" width="100%"/>
                </div>
            </div>
        </div>
    </div >

</div>
@endsection
