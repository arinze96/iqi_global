<!doctype html>
<html lang="en">

<head>
    @include('includes.c_css')
    <title>Rocker - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        @include('includes.c_sidebar')
        @include('includes.c_header')


        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">General Profile</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                {{-- <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li> --}}
                                {{-- <li class="breadcrumb-item active" aria-current="page">Personal Loan Form</li> --}}
                            </ol>
                        </nav>
                    </div>
                </div>
                <!--end breadcrumb-->
                <div class="row">
                    <div class="col-xl-6 mx-auto">
                        <h6 class="mb-0 text-uppercase" style="text-align: center ">General Profile</h6>
                        <hr />
                        <div class="card border-top border-0 border-4 border-primary">
                            <div class="card-body p-5">
                                <form class="row g-3" action="{{ route('user.setting.view', ['general']) }}"
                                    method="POST">
                                    @csrf

                                    <div class="col-sm-12  form-row">
                                        @if (!empty($success))
                                            <span class="info_box text-success">{{ $success }}</span>
                                        @endif
                                    </div>

                                    <div class="col-sm-12  form-row">
                                        @if (!empty($error))
                                            <span class="info_box text-danger">{{ $error }}</span>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        <label for="inputLastName" class="form-label">Firstname</label>
                                        <input required="" type="text" class="form-control" name="firstname"
                                            value="{{ !empty(old('firstname')) ? old('firstname') : $user->firstname }}"
                                            placeholder="Enter firstname">
                                    </div>
                                    @error('firstname')
                                        <span class="text-danger" id="error_name">{{ $message }}</span>
                                    @enderror

                                    <div class="col-md-12">
                                        <label for="inputLastName" class="form-label">Lastname</label>
                                        <input required="" type="text" class="form-control" name="lastname"
                                            value="{{ !empty(old('lastname')) ? old('lastname') : $user->lastname }}"
                                            placeholder="Enter lastname">
                                    </div>
                                    @error('lastname')
                                        <span class="text-danger" id="error_name">{{ $message }}</span>
                                    @enderror

                                    <div class="col-md-12">
                                        <label for="inputLastName" class="form-label">Username</label>
                                        <input required="" type="text" class="form-control" name="username"
                                            value="{{ !empty(old('username')) ? old('username') : $user->username }}"
                                            placeholder="Enter username">
                                    </div>
                                    @error('username')
                                        <span class="text-danger" id="error_name">{{ $message }}</span>
                                    @enderror

                                    <div class="col-md-12">
                                        <label for="inputLastName" class="form-label">Email</label>
                                        <input required="" type="email" class="form-control" name="email"
                                            value="{{ !empty(old('email')) ? old('email') : $user->email }}"
                                            placeholder="Enter email">
                                    </div>
                                    @error('email')
                                        <span class="text-danger" id="error_name">{{ $message }}</span>
                                    @enderror

                                    <div class="col-md-12">
                                        <label for="inputLastName" class="form-label">Phone</label>
                                        <input required="" type="phone" class="form-control" name="phone"
                                            value="{{ !empty(old('phone')) ? old('phone') : $user->phone }}"
                                            placeholder="Enter phone">
                                    </div>
                                    @error('phone')
                                        <span class="text-danger" id="error_name">{{ $message }}</span>
                                    @enderror

                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary px-5 w-100 form-control"
                                            id="edit-plan">Update General Data</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        @include('includes.c_footer')

    </div>
    <!--end wrapper-->
    <!--start switcher-->
    @include('includes.c_switch')
    @include('includes.c_script')

</body>


<!-- Mirrored from codervent.com/rocker/demo/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Apr 2022 15:30:50 GMT -->

</html>
