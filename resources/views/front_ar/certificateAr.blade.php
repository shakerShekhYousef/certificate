@extends('layouts.front_ar.base')
@section('pageTitle', 'التحقق من الشهادة')
@section('content')
    <div class="certificate-page content-page">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('front.home_ar')}}">الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">التحقق من الشهادة</li>
                </ol>
            </nav>
        </div>
        <div class="banner text-center">
            <div class="title">التحقق من الشهادة</div>
        </div>
        <div class="content-certificate">
            <div class="container">
                <h5>من فضلك ادخل رقم الشهاة.للتحقق منها.تواصل معنا عند أي مشكلة
                </h5>
                <div class="box">
                    <div class="container">
                        <form action="{{route('certificate.search_ar')}}" method="post">
                            @csrf
                            @method("POST")
                            <div class="row">
                                <div class="col-lg-3 col-md-5">
                                    <h6>حدد فئة:</h6>
                                </div>
                                <div class="col-lg-5 col-md-7">
                                    <select name="class">
                                        <option value="A2">A2</option>
                                        <option value="A3">A3</option>
                                        <option value="A4">A4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-5">
                                    <h6>رقم الشهادة:</h6>
                                </div>
                                <div class="col-lg-5 col-md-7">
                                    <input name="roll_no" type="text" class="form-control"
                                           placeholder="Type Your Certificate No."
                                           required/>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit">إرسال</button>
                            </div>
                        </form>
                    </div>
                </div>
                @if($certificate == "no")
                @elseif(isset($certificate) && $certificate !== "no")
                    <div class="report">
                        <h5>التقرير</h5>
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th scope="row">اسم الطالب:</th>
                                <td>{{$certificate->student_name}}</td>
                            </tr>
                            <tr>
                                <th scope="row">الدرجة:</th>
                                <td>{{$certificate->degree}}</td>
                            </tr>
                            <tr>
                                <th scope="row">فئة الشهادة:</th>
                                <td>{{$certificate->certification_category}}</td>
                            </tr>
                            <tr>
                                <th scope="row">الفئة:</th>
                                <td>{{$certificate->class}}</td>
                            </tr>
                            <tr>
                                <th scope="row">رقم الشهادة:</th>
                                <td>{{$certificate->roll_no}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center">
                        <a href="{{route('print',['class'=>$certificate->class,'roll_no'=>$certificate->roll_no])}}">
                            <button type="button" class="print">اطبع هذا التقرير</button>
                        </a>
                    </div>
                @else
                     <p class="not-found text-center"> لا يوجد نتائج  </p>
                @endif
            </div>
        </div>
    </div>
@endsection
