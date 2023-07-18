@extends('layouts.dashboard.base')
@section('pageTitle', 'Create a new blog')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <div class="page-title">
                                <h4 class="mb-0 font-size-18">Blogs</h4>

                    </div>
                </div>
                <!-- end page title -->
                <!-- Start Page-content-Wrapper -->
                <div class="page-content-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Create a new blog</h4>
                                    @include('layouts.dashboard.alerts')
                                    <form class="needs-validation"
                                          id="validation-form"
                                          action="{{route('blogs.store')}}"
                                          method="post"
                                          enctype="multipart/form-data"
                                          novalidate>
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3 form-group">
                                                    <label class="form-label" for="title_en">
                                                        Title English
                                                    </label>
                                                    <input type="text"
                                                           class="form-control @error('title_en') is-invalid @enderror"
                                                           id="title_en"
                                                           placeholder="Title English"
                                                           name="title_en"
                                                           value="{{ old('title_en') }}"
                                                           required>
                                                    @error('title_en')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3 form-group">
                                                    <label class="form-label" for="title_ar">
                                                        Title Arabic
                                                    </label>
                                                    <input type="text"
                                                           class="form-control @error('title_ar') is-invalid @enderror"
                                                           id="title_ar"
                                                           placeholder="Title Arabic"
                                                           name="title_ar"
                                                           value="{{ old('title_ar') }}"
                                                           >
                                                    @error('title_ar')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Row -->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3 form-group">
                                                    <label class="form-label" for="body_en">
                                                        Post English
                                                    </label>
                                                    <textarea name="body_en"
                                                              class="form-control @error('body_en') is-invalid @enderror"
                                                              rows="5"
                                                              id="notes"></textarea>
                                                    @error('body_en')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Row -->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3 form-group">
                                                    <label class="form-label" for="body_ar">
                                                        Post Arabic
                                                    </label>
                                                    <textarea name="body_ar"
                                                              class="form-control @error('body_ar') is-invalid @enderror"
                                                              rows="5"
                                                              id="notes"></textarea>
                                                    @error('body_ar')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Row -->
                                        <div class="row" id="image_container">
                                            <div class="col-lg-6">
                                                <div class="mb-3 form-group">
                                                    <label class="form-label" for="image_photo">
                                                        Image
                                                    </label>
                                                    <input type="file" accept="image/png, image/jpeg, image/png, image/gif" class="form-control" id="image_select" name="image" required>
                                                    <button style="margin-top: 5px" type="button" id="remove_image_button" class="btn btn-sm btn-link p-0 display-none">
                                                        Remove image
                                                    </button>
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
    <!-- Image js -->
    <script src="{{asset('assets/admin/js/pages/blog/upload_image.js')}}"></script>
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
