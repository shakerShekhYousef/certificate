@extends('layouts.front.base')
@section('pageTitle', 'News')
@section('content')
    <div class="all-news content-page">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('front.home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">News</li>
                </ol>
            </nav>
        </div>
        <div class="container">
            <div class="row main-row">
                <div class="col-lg-8">
                    @foreach($posts as $post)
                        <div class="news-info">
                            <div class="title-news">
                                {{$post->title_en}}
                            </div>
                            <div class="date"><i class="far fa-clock"></i>
                                {{\Carbon\Carbon::parse($post->created_at)->isoFormat('MMMM Do YYYY')}}
                            </div>
                            <img src="{{asset('storage/'.$post->image)}}"/>
                            <div class="desc">
                                {{\Illuminate\Support\Str::limit($post->body_en,200)}}
                            </div>
                            <a href="{{route('front.news_details',$post)}}" class="more">read more <i
                                    class="fas fa-angle-right"></i></a>
                        </div>
                    @endforeach
                    {{ $posts->withQueryString()->links() }}
                </div>
                <div class="col-lg-4">
                    <form action="{{route('news.searchBlog')}}" method="get">
                        @csrf
                        <div class="form-group">
                            <input name="search" type="text" class="form-control" placeholder="Search.."/>
                            <button type="submit"><i class="fal fa-search"></i></button>
                        </div>
                    </form>
{{--                    <div class="select-date">--}}
{{--                        <h4>archive</h4>--}}
{{--                        <div class="dropdown">--}}
{{--                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"--}}
{{--                                    data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                                Select Month--}}
{{--                            </button>--}}
{{--                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">--}}
{{--                                <li><a data-date="2022-9" class="dropdown-item">sep 2022</a></li>--}}
{{--                                <li><a data-date="2022-8" class="dropdown-item">aug 2022</a></li>--}}
{{--                                <li><a data-date="2022-7" class="dropdown-item">jul 2022</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="box-contact">
                        <h6>how can we help you?</h6>
                        <p>Contact us via email at info@mastery-intl.org </p>
                        <a href="{{route('front.contact_us')}}"><i class="fas fa-phone-alt"></i>Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('custom-script')
        <script>
            $(function() {
                $(document).on("click", "#pagination a,#search_btn", function() {

                    //get url and make final url for ajax
                    var url = $(this).attr("href");
                    var append = url.indexOf("?") == -1 ? "?" : "&";
                    var finalURL = url + append + $("#searchform").serialize();

                    //set to current url
                    window.history.pushState({}, null, finalURL);

                    $.get(finalURL, function(data) {

                        $("#pagination_data").html(data);

                    });

                    return false;
                })

            });
        </script>
    @endsection
@endsection
