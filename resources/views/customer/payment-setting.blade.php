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
                    <div class="breadcrumb-title pe-3">Personal Payment Data</div>
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
                        <h6 class="mb-0 text-uppercase" style="text-align: center ">Personal Payment Data</h6>
                        <hr />
                        <div class="card border-top border-0 border-4 border-primary">
                            <div class="card-body p-5">
                                <form class="row g-3" action="{{ route('user.setting.view', ['payment']) }}"
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
                                        <label for="inputLastName" class="form-label">Bitcoin Address</label>
                                        <input type="text" class="form-control" name="bitcoin_address"
                                            value="{{ $account->bitcoin_address }}"
                                            placeholder="Enter bitcoin address">
                                    </div>
                                    @error('bitcoin_address')
                                        <span class="text-danger" id="error_name">{{ $message }}</span>
                                    @enderror

                                    <div class="col-md-12">
                                        <label for="inputLastName" class="form-label">Ethereum Address</label>
                                        <input type="text" class="form-control" name="ethereum_address"
                                            value="{{ $account->ethereum_address }}"
                                            placeholder="Enter ethereum address">
                                    </div>
                                    @error('ethereum_address')
                                        <span class="text-danger" id="error_name">{{ $message }}</span>
                                    @enderror
                                    <div class="col-md-12">
                                        <label for="inputLastName" class="form-label">USDT Address</label>
                                        <input type="text" class="form-control" name="usdt_address"
                                            value="{{ $account->usdt_address }}" placeholder="Enter usdt address">
                                    </div>
                                    @error('usdt_address')
                                        <span class="text-danger" id="error_name">{{ $message }}</span>
                                    @enderror
                                    <div class="col-md-12">
                                        <label for="inputLastName" class="form-label">Transaction Pin</label>
                                        <input type="text" class="form-control" name="transaction_pin"
                                            value="{{ $account->transaction_pin }}"
                                            placeholder="Enter Transaction Pin">
                                    </div>
                                    @error('transaction_pin')
                                        <span class="text-danger" id="error_name">{{ $message }}</span>
                                    @enderror
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary px-5 w-100">Update Payment
                                            Data</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay toggle-icon"></div>
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        @include('includes.c_footer')

    </div>
    @include('includes.c_switch')
    @include('includes.c_script')

</body>

</html>
