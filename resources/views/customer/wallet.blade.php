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
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Welcome</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Brad</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-success" >Copy Referral Link</button> &nbsp;
							<button type="button" class="btn btn-primary" > <input type="text" placeholder="referral link" style="border-radius: 20px,"> </button>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">At a glance summary of your account. Have fun!!</h6>
				<hr/>
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-2">
                    <div class="col-xl-6 ">
						<div class="card radius-10">
                            <div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Dollar Balance/ USD</p>
										<h4 class="my-1">${{ number_format($wallet->dolla_balance, 0, '.', ',') }}</h4>
									</div>
									</div>
                                    &nbsp; &nbsp; &nbsp;
									<div class="d-flex align-items-center">
                                    <div>
										<p class="mb-0 text-secondary">Bitcoin Balance/ BTC</p>
										<h4 class="my-1">{{ $wallet->bitcoin_balance }}</h4>
									</div>
									</div>
                                    &nbsp; &nbsp; &nbsp;
									<div class="d-flex align-items-center">
                                    <div>
										<p class="mb-0 text-secondary">Ethereum Balance/ ETH</p>
										<h4 class="my-1">{{ $wallet->ethereum_balance }}</h4>
									</div>
								</div>
							</div>
                            <div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Refferral Balance/ USD</p>
										<h4 class="my-1">${{ number_format($wallet->referral_balance, 0, '.', ',') }}</h4>
									</div>
								</div>
							</div>
                            <div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary" style="font-size: 12px">USD Deposit</p>
										<h4 class="my-1" style="font-size: 12px">${{ number_format($wallet->deposits, 0, '.', ',') }}</h4>
									</div>
                                    &nbsp; &nbsp;
                                    <div>
										<p class="mb-0 text-secondary" style="font-size: 12px">USD Withdrawn</p>
										<h4 class="my-1" style="font-size: 12px">${{ number_format($wallet->dolla_withdrawals, 0, '.', ',') }}</h4>
									</div>
                                    &nbsp; &nbsp;
                                    <div>
										<p class="mb-0 text-secondary" style="font-size: 12px">BTC Withdrawn</p>
										<h4 class="my-1" style="font-size: 12px">{{ $wallet->bitcoin_withdrawals }}</h4>
									</div>
                                    &nbsp; &nbsp;

								</div>
							</div>
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary" style="font-size: 12px">Ethereum Withdrawn</p>
										<h4 class="my-1" style="font-size: 12px"> {{ $wallet->ethereum_withdrawals }}</h4>
									</div>
                                    &nbsp; &nbsp;
									<div>
										<p class="mb-0 text-secondary" style="font-size: 12px">USD Invested</p>
										<h4 class="my-1" style="font-size: 12px">${{ number_format($wallet->dolla_invested, 0, '.', ',') }}</h4>
									</div>
                                    &nbsp; &nbsp;
								</div>
							</div>
							<div class="card-body">
								<div class="d-flex align-items-center">
									
                                    <div>
										<p class="mb-0 text-secondary" style="font-size: 12px">BTC Invested</p>
										<h4 class="my-1" style="font-size: 12px">{{ $wallet->bitcoin_invested }}</h4>
									</div>
                                    &nbsp; &nbsp;
                                    <div>
										<p class="mb-0 text-secondary" style="font-size: 12px">ETH Invested</p>
										<h4 class="my-1" style="font-size: 12px">{{ $wallet->ethereum_invested }}</h4>
									</div>
                                    &nbsp; &nbsp;

									</div>
									</div>



							{{-- //////////////////////// --}}
							<div class="card-body">
								<div class="d-flex align-items-center">

                                    <div>
										<p class="mb-0 text-secondary" style="font-size: 12px">USD Earned</p>
										<h4 class="my-1" style="font-size: 12px">${{ number_format($wallet->dolla_earned, 0, '.', ',') }}</h4>
									</div>
                                    &nbsp; &nbsp;
                                    <div>
										<p class="mb-0 text-secondary" style="font-size: 12px">BTC Earned</p>
										<h4 class="my-1" style="font-size: 12px">{{ $wallet->ethereum_earned }}</h4>
									</div>
                                    &nbsp; &nbsp;
								</div>
							</div>
                            <div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary" style="font-size: 12px">ETH Earned</p>
										<h4 class="my-1" style="font-size: 12px">{{ $wallet->ethereum_earned }}</h4>
									</div>
                                    &nbsp; &nbsp;
								</div>
							</div>
						</div>
					</div>
                </div>
                <!--end row-->

               

                
                

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
