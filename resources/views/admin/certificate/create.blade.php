@extends('layouts.dashboard.base')
@section('pageTitle', 'Create a new certificate')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <div class="page-title">
                                <h4 class="mb-0 font-size-18">Certificates</h4>

                            </div>
                        </div>
                        <!-- end page title -->
                        <!-- Start Page-content-Wrapper -->
                        <div class="page-content-wrapper">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Create a new certificate</h4>
                                            @include('layouts.dashboard.alerts')
                                            <form class="needs-validation"
                                                  id="validation-form"
                                                  action="{{route('certificates.store')}}"
                                                  method="post"
                                                  enctype="multipart/form-data"
                                                  novalidate>
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-3 form-group">
                                                            <label class="form-label" for="class">
                                                                Class
                                                            </label>
                                                            <input type="text"
                                                                   class="form-control @error('class') is-invalid @enderror"
                                                                   id="title"
                                                                   placeholder="Class"
                                                                   name="class"
                                                                   value="{{ old('class') }}"
                                                                   required>
                                                            @error('class')
                                                            <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <!-- End Col -->
                                                    <div class="col-md-4">
                                                        <div class="mb-3 form-group">
                                                            <label class="form-label" for="roll_no">
                                                                Roll No.
                                                            </label>
                                                            <input type="text"
                                                                   class="form-control @error('roll_no') is-invalid @enderror"
                                                                   id="roll_no"
                                                                   placeholder="Roll No."
                                                                   name="roll_no"
                                                                   value="{{ old('roll_no') }}"
                                                                   required>
                                                            @error('roll_no')
                                                            <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <!-- End Col -->
                                                    <div class="col-md-4">
                                                        <div class="mb-3 form-group">
                                                            <label class="form-label" for="student_name">
                                                                Student Name
                                                            </label>
                                                            <input type="text"
                                                                   class="form-control @error('student_name') is-invalid @enderror"
                                                                   id="student_name"
                                                                   placeholder="Student Name"
                                                                   name="student_name"
                                                                   value="{{ old('student_name') }}"
                                                                   required>
                                                            @error('student_name')
                                                            <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <!-- End Col -->
                                                </div>
                                                <!-- End Row -->
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3 form-group">
                                                            <label class="form-label" for="degree">
                                                                Degree
                                                            </label>
                                                            <input type="text"
                                                                   class="form-control @error('degree') is-invalid @enderror"
                                                                   id="degree"
                                                                   placeholder="Degree"
                                                                   name="degree"
                                                                   value="{{ old('degree') }}"
                                                                   required>
                                                            @error('degree')
                                                            <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <!-- End Col -->
                                                    <div class="col-md-6">
                                                        <div class="mb-3 form-group">
                                                            <label class="form-label" for="certification_category">
                                                                Certification Category
                                                            </label>
                                                            <input type="text"
                                                                   class="form-control @error('certification_category') is-invalid @enderror"
                                                                   id="certification_category"
                                                                   placeholder="Certification Category"
                                                                   name="certification_category"
                                                                   value="{{ old('certification_category') }}"
                                                                   required>
                                                            @error('certification_category')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <!-- End Col -->
                                                </div>
                                                <!-- End Row -->
                                                <div class="row" id="file">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3 form-group">
                                                            <label class="form-label" for="file">
                                                                File
                                                            </label>
                                                            <input type="file"
                                                                   class="form-control" id="file" name="file"
                                                                   required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Row -->
                                                <button class="btn btn-primary" type="submit">Submit</button>
                                            </form>
                                            <!-- End Form -->
                                        </div>
                                    </div>
                                    <!-- End Card -->
                                </div>
                                <!-- End Col -->
                            </div>
                            <!-- end row -->

                        </div>
                        <!-- End Page-content -->

                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                © 2022
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->
        @section('custom-script')
            <!-- validation init -->
                <script src="{{asset('assets/js/pages/form-validation.init.js')}}"></script>
                <script>
                    $(function () {
                        $('#validation-form').validate({
                            errorElement: 'span',
                            errorPlacement: function (error, element) {
                                error.addClass('invalid-feedback');
                                element.closest('.form-group').append(error);
                            },
                            highlight: function (element, errorClass, validClass) {
                                $(element).addClass('is-invalid');
                            },
                            unhighlight: function (element, errorClass, validClass) {
                                $(element).removeClass('is-invalid');
                            }
                        });
                    });
                </script>
@endsection
@endsection
