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
					<div class="breadcrumb-title pe-3">Website Analytics</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								{{-- <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li> --}}
								{{-- <li class="breadcrumb-item active" aria-current="page">Personal Loan Form</li> --}}
							</ol>
						</nav>
					</div>
                    <div class="ms-auto">
                        <div class="btn-group">
                            <a href="{{ route("admin.application.view",["edit-application"]) }}">
                                <button type="button" class="btn btn-success" href="{{ route("admin.application.view",["edit-application"]) }}" >Edit</button>
                            </a>
                        </div>
                    </div>
				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-6 mx-auto">
						<h6 class="mb-0 text-uppercase" style="text-align: center ">{{ strtoupper(config("app.name")) }} Application Dashboard</h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-info">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="card-title d-flex align-items-center">
										<div><i class="bx bxs-user me-1 font-22 text-info"></i>
										</div>
										<h5 class="mb-0 text-info">Application Infomation</h5>
									</div>
									<hr/>
									<div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Application Name</label>
										<div class="col-sm-9">
                                            <h3>{{ strtoupper(config("app.name")) }}</h3>
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputPhoneNo2" class="col-sm-3 col-form-label">Application Email</label>
										<div class="col-sm-9">
                                            <h5>{{ config("app.email") }}</h5>
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputEmailAddress2" class="col-sm-3 col-form-label">Bitcoin Address</label>
										<div class="col-sm-9">
											<input type="email" class="form-control" value="{{ $app->bitcoin_address }}" id="inputEmailAddress2" placeholder="Bitcoin Address">
										</div>
									</div>
                                    <div class="row mb-3">
										<label for="inputEmailAddress2" class="col-sm-3 col-form-label">Ethereum Address</label>
										<div class="col-sm-9">
											<input type="email" class="form-control" value="{{ $app->ethereum_address }}" id="inputEmailAddress2" placeholder="Ethereum Address">
										</div>
									</div>
                                    <div class="row mb-3">
										<label for="inputEmailAddress2" class="col-sm-3 col-form-label">USDT Address</label>
										<div class="col-sm-9">
											<input type="email" value="{{ $app->usdt_address }}" class="form-control" id="inputEmailAddress2" placeholder="USDT Address">
										</div>
									</div>
                                    <div class="row mb-3">
										<label for="inputEmailAddress2"  class="col-sm-3 col-form-label">Litecoin Address</label>
										<div class="col-sm-9">
											<input type="email" value="{{ $app->litecoin_address }}" class="form-control" id="inputEmailAddress2" placeholder="Litecoin Address">
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputChoosePassword2" class="col-sm-3 col-form-label">Date Last Updated</label>
										<div class="col-sm-9">
                                            <h5>{{ date("d,M Y",strtotime($app->updated_at)) }}</h5>
										</div>
									</div>
								</div>
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
