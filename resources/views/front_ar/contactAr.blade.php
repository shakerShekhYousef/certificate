@extends('layouts.front_ar.base')
@section('pageTitle', 'اتصل بنا')
@section('content')
<div class="contact-page">
    <div class="container">
        <div class="box">
            @include('layouts.front_ar.alerts')
            <div class="row">
                <div class="col-lg-8 ">
                    <h4>اتصل بنا</h4>
                    <form action="{{route('front.contact_us_send_ar')}}" method="post">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="col-md-6">
                                <input name="name" type="text" class="form-control" placeholder="الاسم" required />
                                <input name="email" type="email" class="form-control" placeholder="البريد الإلكتروني" required />
                                <input name="phone" type="text" class="form-control" placeholder="الرقم" required />
                            </div>
                            <div class="col-md-6">
                                <textarea name="message" class="form-control" placeholder="رسالة"></textarea>
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn-send">إرسال</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4  co-bg ">
                    <div class="content">
                        <h4> جامعة ماستري انتل البريطانية</h4>
                        <p class="text-border">رقم التسجيل:  14336888</p>
                        <p>  العنوان: إنجلترا وويلز 22 EDWARD ROAD <br>ليستر إنجلترا LE2 1TF

                        </p>
                        <p> <a href="tel:9647711999584">رقم الهاتف: 9647711999584+
                            </a></p>
                        <p> <a href="mailto:Info@mastery-intl.org">البريد الإلكتروني: Info@mastery-intl.org
                            </a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
