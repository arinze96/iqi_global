<!doctype html>
<html lang="en">

<head>
    @include('includes.c_css')
    <title>WITHDRAWALS</title>
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
					<div class="breadcrumb-title pe-3">WITHDRAWALS</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Withdrawal Form</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-4 mx-auto">
						<h6 class="mb-0 text-lowercase" style="text-align: center; color: grey ; font-size: 13px">Withdrawal of funds from your {{ ucwords(strtolower(config('app.name'))) }} account balance is available using 5 payment systems - BTC, ETH, LTC, USDT, Perfect Money. Select the account then select the payment system to which you want to withdraw funds, enter the withdrawal amount and click the "Withdraw".</h6>
                        <br>
                        <h6 class="mb-0 text-lowercase" style="text-align: center; color: grey ; font-size: 13px">IMPORTANT!!! Withdrawals are available only to those wallets that are saved in the "Payment Data" section.</h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-primary">
							<div class="card-body p-5">
								<form class="row g-3">
                                    <div class="col-md-12">
										<label for="inputState" class="form-label">Choose Accout</label>
										<select name="currency" id="currency" class="form-select form-control-number charge_account">
											<option data-balance="{{ $account->dolla_balance }}" value="USD"
												class="small"></i>USD</option>
											<option data-balance="{{ $account->bitcoin_balance }}" value="BTC"
												class="small"></i>BTC</option>
											<option data-balance="{{ $account->ethereum_balance }}" value="ETH"
												class="small"></i>ETH</option>
										</select>
									</div>
                                    <div class="col-md-12">
										<label for="inputState" class="form-label">Payment Method</label>
										{{-- <select id="inputState" class="form-select"> --}}
											<select class="payment_account form-control form-select  form-control-number" required>
                                                <option value="" disabled selected hidden>Select Payment Method</option>
                                                @if (!empty($account->bitcoin_address))
                                                    <option value="BTC">BTC</option>
                                                @endif
                                                @if (!empty($account->usdt_address))
                                                    <option value="USDT">USDT</option>
                                                @endif
                                                @if (!empty($account->ethereum_address))
                                                    <option value="ETH">ETH</option>
                                                @endif
                                            </select>
										{{-- </select> --}}
									</div>
									<div class="col-md-12">
										<label for="inputLastName" class="form-label">Amount to withdraw</label>
										<span class=" text-center text-danger"></span>
										<input type="text" class="form-control form-control-number withdrawal_amount"" id="inputLastName" placeholder="Enter Amount (USD)">
									</div>
                                    <div class="col-md-12">
										<label for="inputLastName" class="form-label">Add your wallet address</label>
										<input type="text" class="form-control  form-control-number bitcoin_addr" placeholder="Enter Wallet Address">
									</div>
                                    <div class="col-md-12">
										<label for="inputLastName" class="form-label">Transaction Pin</label>
										<input type="text" class="form-control  form-control-number transaction_pin"
										placeholder="Financial Pin">
									</div>


									<div class="col-md-12 ">
										<button class="btn btn-outline-primary px-5 w-100 main_display">final balance <span>0</span>USD</button>
									</div>

                                    <div class="col-md-12">
										<button type="submit" data-url="{{ route('user.withdraw.view') }}" class="btn btn-primary px-5 w-100 process_withdraw">Withdraw</button>
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
