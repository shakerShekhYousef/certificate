@extends('layouts.front_ar.base')
@section('pageTitle', \Illuminate\Support\Str::limit($blog->title_ar,20))
@section('content')
<div class="all-news news-details content-page">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('front.home_ar')}}">الرئيسية</a></li>
                <li class="breadcrumb-item active" aria-current="page">الأخبار</li>
            </ol>
        </nav>
    </div>
    <div class="container">
        <div class="news-info pb-0">
            <div class="title-news">
                {{$blog->title_ar}}
            </div>
            <div class="date"><i class="far fa-clock"></i> Sep 20,2022</div>
            <img src="{{asset('storage/'.$blog->image)}}"/>
            <div class="desc">
                {{$blog->body_ar}}
            </div>
        </div>
    </div>
</div>
@endsection
