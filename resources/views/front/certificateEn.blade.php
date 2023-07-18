@extends('layouts.front.base')
@section('pageTitle', 'Verify Certificate')
@section('content')
    <div class="certificate-page content-page">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('front.home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Verify Certificate</li>
                </ol>
            </nav>
        </div>
        <div class="banner text-center">
            <div class="title">Verify Certificate</div>
        </div>
        <div class="content-certificate">
            <div class="container">
                <h5>Please enter your Certificate No. and select class to validate your certificate. Please contact us
                    in case of any discrepancy.</h5>
                <div class="box">
                    <div class="container">
                        <form action="{{route('certificate.search')}}" method="post">
                            @csrf
                            @method("POST")
                            <div class="row">
                                <div class="col-lg-3 col-md-5">
                                    <h6>Select Class :</h6>
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
                                    <h6>Certificate Number :</h6>
                                </div>
                                <div class="col-lg-5 col-md-7">
                                    <input name="roll_no" type="text" class="form-control"
                                           placeholder="Type Your Certificate No."
                                           required/>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit">submit</button>
                            </div>
                        </form>

                    </div>
                </div>
                @if($certificate == "no")
                @elseif(isset($certificate) && $certificate !== "no")
                    <div class="report">
                        <h5>Progress Report</h5>
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th scope="row">Name of the Student :</th>
                                <td>{{$certificate->student_name}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Degree :</th>
                                <td>{{$certificate->degree}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Certification Category :</th>
                                <td>{{$certificate->certification_category}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Class :</th>
                                <td>{{$certificate->class}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Certificate No. :</th>
                                <td>{{$certificate->roll_no}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center">
                        <a href="{{route('print',['class'=>$certificate->class,'roll_no'=>$certificate->roll_no])}}">
                            <button type="button" class="print btnprn">Print This Report</button>
                        </a>
                    </div>
                @else
                    <p class="not-found text-center"> No Result Found </p>
                @endif
            </div>
        </div>
    </div>
@endsection
