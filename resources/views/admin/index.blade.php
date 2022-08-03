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
                <div class="row">
                    <div class="col-xl-8 mx-auto">
                        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                            <div class="breadcrumb-title pe-3">Welcome</div>
                            <div class="ps-3">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb mb-0 p-0">
                                        <li class="breadcrumb-item"><a href="javascript:;"><i
                                                    class="bx bx-home-alt"></i></a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Brad</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <!--end breadcrumb-->
                        <h6 class="mb-0 text-uppercase">Welcome to {{ ucwords(config('app.name')) }} Administrator
                            Dashboard </h6>
                        <hr />
                        
                        <div class="row row-cols-1 row-cols-md-3 row-cols-xl-3">
                            <div class="col">
                                <div class="card radius-10">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <div class="mx-auto mb-3">
                                                <p class="mb-0 text-secondary" style="font-weight: bold">App USD Balance
                                                </p>
                                            </div>
                                            <h4 class="my-1">
                                                ${{ number_format($account->total_dolla_balance, 0, '.', ',') }}</h4>
                                            <p class="mb-0 text-secondary" style="font-size: 10px; color:gray">balance
                                                of all customers USSD account</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card radius-10">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <div class="mx-auto mb-3">
                                                <p class="mb-0 text-secondary" style="font-weight: bold">App BTC Balance
                                                </p>
                                            </div>
                                            <h4 class="my-1">{{ $account->total_bitcoin_balance }}</h4>
                                            <p class="mb-0 text-secondary" style="font-size: 10px; color:gray">Balance
                                                of all customers bitcoin account</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card radius-10">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <div class="mx-auto mb-3">
                                                <p class="mb-0 text-secondary" style="font-weight: bold">App ETH Balance
                                                </p>
                                            </div>
                                            <h4 class="my-1">{{ $account->total_ethereum_balance }}</h4>
                                            <p class="mb-0 text-secondary" style="font-size: 10px; color:gray">all
                                                customers ethereum balance</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card radius-10">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <div class="mx-auto mb-3">
                                                <p class="mb-0 text-secondary" style="font-weight: bold">Total Deposit
                                                </p>
                                            </div>
                                            <h4 class="my-1">
                                                ${{ number_format($account->total_deposits, 0, '.', ',') }}</h4>
                                            <p class="mb-0 text-secondary" style="font-size: 10px; color:gray">Total
                                                Amount Deposited into the app</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card radius-10">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <div class="mx-auto mb-3">
                                                <p class="mb-0 text-secondary" style="font-weight: bold">USD Paid Out
                                                </p>
                                            </div>
                                            <h4 class="my-1">
                                                ${{ number_format($account->total_dolla_withdrawals, 0, '.', ',') }}</h4>
                                            <p class="mb-0 text-secondary" style="font-size: 10px; color:gray">Total
                                                money paid out to customers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card radius-10">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <div class="mx-auto mb-3">
                                                <p class="mb-0 text-secondary" style="font-weight: bold">BTC Paid Out
                                                </p>
                                            </div>
                                            <h4 class="my-1">{{ $account->total_bitcoin_withdrawals }}</h4>
                                            <p class="mb-0 text-secondary" style="font-size: 10px; color:gray">Total btc
                                                paid out to customers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card radius-10">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <div class="mx-auto mb-3">
                                                <p class="mb-0 text-secondary" style="font-weight: bold">ETH Paid Out
                                                </p>
                                            </div>
                                            <h4 class="my-1">{{ $account->total_ethereum_withdrawals }}</h4>
                                            <p class="mb-0 text-secondary" style="font-size: 10px; color:gray">Total eth
                                                paid out to customers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card radius-10">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <div class="mx-auto mb-3">
                                                <p class="mb-0 text-secondary" style="font-weight: bold">Our Customers
                                                </p>
                                            </div>
                                            <h4 class="my-1">{{ $customer->total_customers }}</h4>
                                            <p class="mb-0 text-secondary" style="font-size: 10px; color:gray">Number o
                                                Customers using our App</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card radius-10">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <div class="mx-auto mb-3">
                                                <p class="mb-0 text-secondary" style="font-weight: bold">Administrators
                                                </p>
                                            </div>
                                            <h4 class="my-1">{{ $admin->total_admins }}</h4>
                                            <p class="mb-0 text-secondary" style="font-size: 10px; color:gray">Total
                                                admins in your app</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card radius-10">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <div class="mx-auto mb-3">
                                                <p class="mb-0 text-secondary" style="font-weight: bold">Plan</p>
                                            </div>
                                            <h4 class="my-1">{{ $plan->total_plans }}</h4>
                                            <p class="mb-0 text-secondary" style="font-size: 10px; color:gray">Number of
                                                active investment plans</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card radius-10">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <div class="mx-auto mb-3">
                                                <p class="mb-0 text-secondary" style="font-weight: bold">Active Deposit
                                                </p>
                                            </div>
                                            <h4 class="my-1">{{ $deposit->total_deposits }}</h4>
                                            <p class="mb-0 text-secondary" style="font-size: 10px; color:gray">deposits
                                                waiting for approval by admin</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card radius-10">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <div class="mx-auto mb-3">
                                                <p class="mb-0 text-secondary" style="font-weight: bold">Active
                                                    withdrawal</p>
                                            </div>
                                            <h4 class="my-1">{{ $withdraw->total_withdrawal }}</h4>
                                            <p class="mb-0 text-secondary" style="font-size: 10px; color:gray">
                                                withdrawals awaiting approval</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card radius-10">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <div class="mx-auto mb-3">
                                                <p class="mb-0 text-secondary" style="font-weight: bold">Active
                                                    Investments</p>
                                            </div>
                                            <h4 class="my-1">{{ $investment->total_investment }}</h4>
                                            <p class="mb-0 text-secondary" style="font-size: 10px; color:gray">All the
                                                investments that are currently active</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if (!$newCustomers->isEmpty())
                            <h6 class="mb-0 text-uppercase">New Users</h6>
                            <hr />
                            <div class="card radius-10">
                                @foreach ($newCustomers as $key => $customer)
                                    <div class="card-body">
                                        <ul class="list-unstyled">
                                            <li class="d-flex align-items-center border-bottom pb-2">
                                                <div style="width: 50px; height: 50px; border-radius: 50px; display: flex; background-color:antiquewhite; border: 1px solid black; justify-content:center; align-items: center"
                                                    class="bg-primary-dim">
                                                    <span
                                                        style="text-align: center; font-weight:bolder; color:grey">{{ strtoupper(substr($customer->username, 0, 2)) }}</span>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h5 class="mt-0 mb-1">{{ ucwords($customer->username) }}</h5>
                                                    <h6 class="mt-0 mb-1" style="color: grey">{{ ucwords($customer->email) }}</h6>
                                            </li>
                                        </ul>
                                    </div>
                                @endforeach
                            </div>
                        @endif
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
