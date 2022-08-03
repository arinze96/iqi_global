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
                    <div class="breadcrumb-title pe-3">Personal Loan</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Personal Loan Form</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!--end breadcrumb-->
                <div class="row">
                    <div class="col-xl-6 mx-auto">
                        <h6 class="mb-0 text-uppercase" style="text-align: center ">APPLY FOR YOUR PERSONAL LOAN</h6>
                        <hr />
                        <div class="card border-top border-0 border-4 border-primary">
                            <div class="card-body p-5">
                                <form class="row g-3" action="{{ route('user.loan') }}" method="POST">
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
                                            value="{{ $userDetails->firstname }}" placeholder="Enter firstname">
                                    </div>

                                    @error('firstname')
                                        <span class="text-danger" id="error_name">{{ $message }}</span>
                                    @enderror

                                    <div class="col-md-12">
                                        <label for="inputLastName" class="form-label">Lastname</label>
                                        <input required="" type="text" class="form-control" name="lastname"
                                            value="{{ $userDetails->lastname }}" placeholder="Enter lastname">
                                    </div>
                                    @error('lastname')
                                        <span class="text-danger" id="error_name">{{ $message }}</span>
                                    @enderror

                                    <div class="col-md-12">
                                        <label for="inputLastName" class="form-label">Email</label>
                                        <input required="" type="email" class="form-control" name="email"
                                            value="{{ $userDetails->email }}" placeholder="Enter email">
                                    </div>
                                    @error('email')
                                        <span class="text-danger" id="error_name">{{ $message }}</span>
                                    @enderror

                                    <div class="col-md-12">
                                        <label for="inputLastName" class="form-label">Address</label>
                                        <input required="" type="text" class="form-control" name="address"
                                            value="{{ old('address') }}" placeholder="Enter address">
                                    </div>
                                    @error('address')
                                        <span class="text-danger" id="error_name">{{ $message }}</span>
                                    @enderror

                                    <div class="col-md-12">
                                        <label for="inputLastName" class="form-label">Next of Kin</label>
                                        <input required="" type="phone" class="form-control" name="next_of_kin"
                                            value="{{ old('next_of_kin') }}"
                                            placeholder="Enter The Name Of Your Next of Kin">
                                    </div>
                                    @error('next_of_kin')
                                        <span class="text-danger" id="error_name">{{ $message }}</span>
                                    @enderror

                                    <div class="col-md-12">
                                        <label for="inputState" class="form-label">Payment Method</label>
                                        <select name="currency" id="strategySelect" class="form-select form-control">
                                            <option value="" disabled selected hidden>Payment Method</option>
                                            <option value="BTC">BTC</option>
                                            <option value="USD">USD</option>
                                            <option value="ETH">ETH</option>
                                        </select>
                                    </div>
                                    @error('currency')
                                        <span class="text-danger" id="error_name">{{ $message }}</span>
                                    @enderror

                                    <div class="col-md-12">
                                        <label for="inputState" class="form-label">Amount</label>
                                        <select name="amount" id="strategySelect" class="form-select form-control">
                                            <option value="" disabled selected hidden>Amount</option>
                                            <option value="1000">$1,000</option>
                                            <option value="3000">$3,000</option>
                                            <option value="5000">$5,000</option>
                                            <option value="7000">$7,000</option>
                                            <option value="10000">$10,000</option>
                                            <option value="15000">$15,000</option>
                                            <option value="25000">$25,000</option>
                                            <option value="35000">$35,000</option>
                                            <option value="50000">$50,000</option>
                                            <option value="100000">$100,000</option>
                                        </select>
                                    </div>
                                    @error('amount')
                                        <span class="text-danger" id="error_name">{{ $message }}</span>
                                    @enderror
                                    <div class="col-md-12">
                                        <label for="inputState" class="form-label">Duration of Loan</label>
                                        <select name="duration" id="strategySelect" class="form-select form-control">
                                            <option value="" disabled selected hidden>Duration of Loan</option>
                                            <option value="3 months">3 months</option>
                                            <option value="6 months">6 months</option>
                                            <option value="1 year">1 year</option>
                                            <option value="2 years">2 years</option>
                                        </select>
                                    </div>
                                    @error('duration')
                                        <span class="text-danger" id="error_name">{{ $message }}</span>
                                    @enderror
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary form-control px-5 w-100">Submit
                                            Request</button>
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
