@extends('layouts.front.base')
@section('pageTitle', 'Contact Us')
@section('content')
<div class="contact-page">
    <div class="container">
        <div class="box">
            @include('layouts.front.alerts')
            <div class="row">
                <div class="col-lg-8 ">
                    <h4>contact us</h4>
                    <form action="{{route('front.contact_us_send')}}" method="post">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="col-md-6">
                                <input name="name" type="text" class="form-control" placeholder="Name" required/>
                                <input name="email" type="email" class="form-control" placeholder="Email" required/>
                                <input name="phone" type="text" class="form-control" placeholder="Phone" required/>
                            </div>
                            <div class="col-md-6">
                                <textarea name="message" class="form-control" placeholder="Message"></textarea>
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn-send">submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4  co-bg ">
                    <div class="content">
                        <h4> mastery intl college</h4>
                        <p class="text-border">Registration Number: 14336888 England and Wales</p>
                        <p> Address: 22 EDWARD ROAD LEICESTER ENGLAND LE2 1TF </p>
                        <p><a href="tel:9647711999584">Tell: +9647711999584</a></p>
                        <p><a href="mailto:Info@mastery-intl.org">Email: Info@mastery-intl.org</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
