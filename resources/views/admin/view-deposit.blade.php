<!doctype html>
<html lang="en">

<head>
    @include('includes.a_css')
    <title>Rocker - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        @include('includes.a_sidebar')
        @include('includes.a_header')


        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">View Deposit</div>
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
						<h6 class="mb-0 text-uppercase" style="text-align: center ">View {{ ucwords($deposit->username) }}s Deposit Proof</h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-primary">
							<div class="card-body p-5">
								@foreach (json_decode($deposit->proof) as $key => $image)
								{{-- <caption class="text-center">Image {{ $key + 1 }}</caption> --}}
							  <img style="margin:3px;" height="300px" src="{{ asset(str_replace("public","storage",$image)) }}"   alt="">
						  @endforeach
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
        @include('includes.a_footer')

    </div>
    <!--end wrapper-->
    <!--start switcher-->

    @include('includes.a_switch')
    @include('includes.a_script')

</body>


<!-- Mirrored from codervent.com/rocker/demo/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Apr 2022 15:30:50 GMT -->

</html>
