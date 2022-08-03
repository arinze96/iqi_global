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
					<div class="breadcrumb-title pe-3">Edit App Info</div>
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
						<h6 class="mb-0 text-uppercase" style="text-align: center ">Edit Application Info</h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-primary">
							<div class="card-body p-5">
								<form class="row g-3" method="POST" data-post-type="edit-plan" action="{{ route("admin.application.view",["edit-application",$app->id]) }}">
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
										<label for="inputLastName" class="form-label">App Bitcoin Address</label>
                                  <input required="" type="text" name="bitcoin_address" class="form-control" id="bitcoin_address" placeholder="Enter bitcoin_address" value="{{ !empty(old("bitcoin_address")) ? old("bitcoin_address") : $app->bitcoin_address   }}">
									</div>
									@error('bitcoin_address')
									<span class="text-danger" id="error_bitcoin_address">{{ $message }}</span>
									@enderror

                                    <div class="col-md-12">
										<label for="inputLastName" class="form-label">App Ethereum Address</label>
                                  <input required="" type="text" name="ethereum_address" class="form-control" id="ethereum_address" placeholder="Enter ethereum_address" value="{{ !empty(old("ethereum_address")) ? old("ethereum_address") : $app->ethereum_address   }}">
									</div>
									@error('ethereum_address')
									<span class="text-danger" id="error_ethereum_address">{{ $message }}</span>
									@enderror

                                    <div class="col-md-12">
										<label for="inputLastName" class="form-label">App USDT Address</label>
										<input required="" type="text" name="usdt_address" class="form-control" id="usdt_address" placeholder="Enter usdt_address" value="{{ !empty(old("usdt_address")) ? old("usdt_address") : $app->usdt_address   }}">
									</div>
									@error('usdt_address')
									<span class="text-danger" id="error_usdt_address">{{ $message }}</span>
									@enderror

                                    <div class="col-md-12">
										<label for="inputLastName" class="form-label">App Litecoin Address</label>
                                  <input required="" type="text" name="litecoin_address" class="form-control" id="litecoin_address" placeholder="Enter litecoin_address" value="{{ !empty(old("litecoin_address")) ? old("litecoin_address") : $app->litecoin_address   }}">
									</div>
									@error('litecoin_address')
									<span class="text-danger" id="error_litecoin_address">{{ $message }}</span>
									@enderror

                                    <div class="col-md-12">
										<button type="submit" name="edit-plan" class="btn btn-primary px-5 w-100 form-control">Edit App Record</button>
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
        @include('includes.a_footer')

    </div>
    <!--end wrapper-->
    <!--start switcher-->

    @include('includes.a_switch')
    @include('includes.a_script')

</body>


<!-- Mirrored from codervent.com/rocker/demo/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Apr 2022 15:30:50 GMT -->

</html>
