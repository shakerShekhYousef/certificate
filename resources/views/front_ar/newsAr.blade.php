@extends('layouts.front_ar.base')
@section('pageTitle', 'الأخبار')
@section('content')
    <div class="all-news content-page">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('front.home_ar')}}">الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">الأخبار</li>
                </ol>
            </nav>
        </div>
        <div class="container">
            <div class="row main-row">
                <div class="col-lg-8">
                    @foreach($posts as $post)
                        <div class="news-info">
                            <div class="title-news">
                                {{$post->title_ar}}
                            </div>
                            <div class="date"><i
                                    class="far fa-clock"></i> {{\Carbon\Carbon::parse($post->created_at)->isoFormat('MMMM Do YYYY')}}
                            </div>
                            <img src="{{asset('storage/'.$post->image)}}"/>
                            <div class="desc">
                                {{\Illuminate\Support\Str::limit($post->body_ar,200)}}
                            </div>
                            <a href="{{route('front.news_details_ar',$post)}}" class="more">اقرأ المزيد <i
                                    class="fas fa-angle-left"></i></a>
                        </div>
                    @endforeach
                    {{ $posts->withQueryString()->links() }}
                </div>
                <div class="col-lg-4">
                    <form action="{{route('news.searchBlog_ar')}}" method="get">
                        <div class="form-group">
                            <input name="search" type="text" class="form-control" placeholder="ابحث.."/>
                            <button type="submit"><i class="fal fa-search"></i></button>
                        </div>
                    </form>
{{--                        <div class="select-date">--}}
{{--                            <h4>الارشيف</h4>--}}
{{--                            <div class="dropdown">--}}
{{--                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"--}}
{{--                                        data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                                    اختر شهر--}}
{{--                                </button>--}}
{{--                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">--}}
{{--                                    <li><a class="dropdown-item" href="#">sep 2022</a></li>--}}
{{--                                    <li><a class="dropdown-item" href="#">sep 2022</a></li>--}}
{{--                                    <li><a class="dropdown-item" href="#">sep 2022</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="box-contact">
                            <h6>كيف يمكننا مساعدتك؟</h6>
                            <p>تواصل معنا عبر البريد الإلكتروني info@mastery-intl.org </p>
                            <a href="tel:9647711999584"><i class="fas fa-phone-alt"></i>اتصل بنا</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
