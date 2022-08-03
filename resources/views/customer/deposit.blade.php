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
                    <div class="breadcrumb-title pe-3">DEPOSIT</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Deposit Form</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!--end breadcrumb-->
                <div class="row">
                    <div class="col-xl-4 mx-auto">
                        <h6 class="mb-0 text-uppercase">Top up your account balance</h6>
                        <hr />
                        <div class="card border-top border-0 border-4 border-primary">
                            <div class="card-body p-5">
								<p id="error_box" class="text-danger"></p>
								<p id="error_box1" class="text-danger"></p>
                                <form class="row g-3">
                                    <div class="col-md-12">
                                        <label for="inputState" class="form-label">Choose Currency</label>
										<span class="error_box text-center text-danger"></span>
                                        <select name="currency" id="currency"
                                            class="form-select form-control  form-control-number">
                                            <option {{ request()->account == 'usd' ? 'selected' : '' }} value="usd"
                                                class="small">USD</option>

                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="inputLastName" class="form-label" for="buysell-amount">Amount to
                                            deposit</label>
                                        <span class=" text-center text-danger" id="error_box"></span>
                                        <input type="text" class="form-control" id="buysell-amount" name="bs-amount"
                                            placeholder="Enter Amount (USD)">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="inputState" class="form-label ">Payment Method</label>
                                        <select name="method" id="method" class="form-select form-control-number">
                                            @if ($application->bitcoin_address)
                                                <option value="BTC">BITCOIN </option>
                                            @endif
                                            @if ($application->litecoin_address)
                                                <option value="LTC">LITCOIN </option>
                                            @endif

                                            @if ($application->btc_cash_address)
                                                <option value="BCH">BITCOIN CASH </option>
                                            @endif

                                            @if ($application->binancecoin_address)
                                                <option value="BNB">BINANCE COIN </option>
                                            @endif

                                            @if ($application->perfectmoney_address)
                                            <option value="BNB">PERFECT MONEY </option>
                                        @endif

                                            @if ($application->ethereum_address)
                                                <option value="ETH">ETHEREUM </option>
                                            @endif
                                            @if ($application->usdt_address)
                                                <option value="USDT">TETHER (USDT) </option>
                                            @endif
                                        </select>
                                    </div>

                                    <div class="col-md-12 ">
                                        <button class="btn btn-outline-primary px-5 w-100">final balance
                                            <span class="_display">0</span>USD</button>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit"  data-url="{{ route("user.deposit.post") }}" class="btn btn-primary px-5 w-100 deposit_cash">+ add Funds</button>
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
	    {{-- modal --}}
		<div class="modal fade" tabindex="-1" role="dialog" id="buy-coin">
			<div class="modal-dialog modal-dialog-centered modal-md" role="document">
				<div class="modal-content">
					<a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
					<div class="modal-body modal-body-lg">
						<div class="nk-block-head nk-block-head-xs text-center">
							<h5 class="nk-block-title">
								<!-- <h4 class="time_counter mt-3">10min</h4> -->
							</h5>
							<div class="nk-block-text">
								<div class="title-sub d-none bank text-primary">
									Make Payment to the Account below , upload your reciept and click the confirm button.
									<ul class="text-justify p-3 text-dark">
										<li>Bank Name : <strong class="text-primary">
												<?=ucwords($application->bank_name)?></strong></li>
										<li>Account Number :<strong class="text-primary">
												<?=ucwords($application->bank_account_no)?></strong></li>
										<li>Account Name :<strong class="text-primary">
												<?=ucwords($application->bank_account_name)?></strong></li>
									</ul>
								</div>
								<div class="nk-refwg-invite d-none btc">
									<div class="nk-refwg-head ">
										<div class="nk-refwg-title">
											<div class="title-sub text-primary">Make Payments of <strong class="converted_payment"></strong> to the wallet address below , upload your transaction screenshot and click confirm button.</div>
										</div>
									</div>
									<div class="row p-2">
										<div class="col-md-6 col-sm-7 p-1">
											<input readonly style="width:100%;" type="text" class="form-control" value="" id="btc_amount">
										</div>
										<div class="col-md-6 col-sm-5 p-1">
											<button style="width:100%;text-align:center !important;" class="btn btn-primary d-block " onclick="copyText('btc_amount')">Copy Amount</button>
										</div>
									</div>
									<div class="row p-2">
										<div class="col-md-6 col-sm-7 p-1">
											<input readonly style="width:100%;" type="text" class="form-control" value="<?=$application->btc_address?>" id="wallet_address">
										</div>
										<div class="col-md-6 col-sm-5 p-1">
											<button style="width:100%;text-align:center !important;" class="btn btn-primary d-block " onclick="copyText('wallet_address')">Copy Address</button>
										</div>
									</div>
								</div><!-- .nk-refwg-invite -->
							</div>
						</div>
						<div class="dropzone"></div>
						<div class="nk-block">
							<div class="buysell-field form-action text-center">
								<div>
									<a href="#" class="btn btn-primary mt-4 btn-lg confirm_deposit" data-url="{{ route("user.deposit.confirm.post") }}">Confirm
										Payments</a>
								</div>
							</div>
						</div><!-- .nk-block -->
					</div><!-- .modal-body -->
				</div><!-- .modal-content -->
			</div><!-- .modla-dialog -->
		</div><!-- .modal -->
		{{-- modal --}}
	
		{{-- footer --}}
		<script>
			var $imageArray = [];
			var $site = "{{ route('app.home') }}";
			let $proof_upload = "{{ route('user.deposit.proof.post',['add']) }}";
			let $proof_delete = "{{ route('user.deposit.proof.post',['delete']) }}";
			</script>
			{{-- footer --}}
			@include('includes.c_script')
			<script src="{{ asset('assets/js/dropzone.min.js') }}"></script>
			<script src="{{ asset('assets/js/custom_dropzone.js') }}"></script>
		<!-- END PAGE CONTAINER-->
    @include('includes.c_script')

</body>


<!-- Mirrored from codervent.com/rocker/demo/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Apr 2022 15:30:50 GMT -->

</html>
