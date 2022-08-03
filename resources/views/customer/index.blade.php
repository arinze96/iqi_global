div<!doctype html>
<html lang="en">

<head>
    @include('includes.c_css')
    <title>Customer Dashboard</title>
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
                <div class="row">
                    <div class="col-xl-8 mx-auto">
                        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                            <div class="breadcrumb-title pe-3">Welcome</div>
                            <div class="ps-3">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb mb-0 p-0">
                                        {{-- <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a> --}}
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            {{ auth()->user()->username }}</li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="ms-auto">

                            </div>
                        </div>
                        
                        <!--end breadcrumb-->
                        <h6 class="mb-0 text-uppercase">At a glance summary of your account. Have fun!!</h6>
                        <hr />
                        <div class="btn-group" style="margin-bottom: 20px">
                            {{-- <button type="button" class="btn btn-success">Copy Referral Link</button> &nbsp; --}}
                            <input type="text" value="{{ route('user.register', [auth()->user()->username]) }}">
                            <button class="btn btn-copy" data-feedback=" Copied"><i class="fa fa-clone" style="color: skyblue" aria-hidden="true"></i></button>
                           
                        </div>
                        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3">
                            <div class="col">
                                <div class="card radius-10 border-start border-0 border-3 border-info">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <p class="mb-0 text-secondary">Available USD Balance</p>
                                                <h4 class="my-1 text-info">
                                                    ${{ number_format($account->dolla_balance, 0, '.', ',') }}
                                                </h4>
                                                <p class="mb-0 font-13">Dollar Balance</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card radius-10 border-start border-0 border-3 border-danger">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <p class="mb-0 text-secondary">Available BTC Balance</p>
                                                <h4 class="my-1 text-danger">
                                                    {{ number_format($account->bitcoin_balance, 0, '.', ',') }}</h4>
                                                <p class="mb-0 font-13">Bitcoin Balance</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card radius-10 border-start border-0 border-3 border-success">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <p class="mb-0 text-secondary">Available ETH Balance</p>
                                                <h4 class="my-1 text-success">
                                                    {{ number_format($account->ethereum_balance, 0, '.', ',') }}</h4>
                                                <p class="mb-0 font-13">Ethereum Balance</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if (!$loans == null)
                                <div class="col">
                                    <div class="card radius-10 border-start border-0 border-3 border-success">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <p class="mb-0 text-secondary">Personal Loan</p>
                                                    <h4 class="my-1 text-success">
                                                        ${{ number_format($loans->amount, 0, '.', ',') }}</h4>
                                                    <p class="mb-0 font-13">Loan Status &nbsp;
                                                        &nbsp; :
                                                        {{ $loans->status == 0 ? 'unapproved' : 'Aprroved' }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="col">
                                <div class="card radius-10 border-start border-0 border-3 border-warning">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <p class="mb-0 text-secondary">Referral USD Balance</p>
                                                <h4 class="my-1 text-warning">
                                                    ${{ number_format($account->referral_balance, 0, '.', ',') }}</h4>
                                                <p class="mb-0 font-13">No of Referrals <span
                                                        style="font-size: 30px">{{ $user->referral_count }}</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card radius-10 border-start border-0 border-3 border-info">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <p class="mb-0 text-secondary">Deposit USD</p>
                                                <h4 class="my-1 text-info">
                                                    ${{ number_format($account->deposits, 0, '.', ',') }}</h4>
                                                <p class="mb-0 font-13">Total Deposit of user</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card radius-10 border-start border-0 border-3 border-danger">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <p class="mb-0 text-secondary">Withdrawal USD </p>
                                                <h4 class="my-1 text-danger">
                                                    ${{ number_format($account->dolla_withdrawals, 0, '.', ',') }}
                                                </h4>
                                                <p class="mb-0 font-13">Total USD Withdrawn by you</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card radius-10 border-start border-0 border-3 border-success">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <p class="mb-0 text-secondary">Active Investment</p>
                                                <h4 class="my-1 text-success"> {{ $investments->count() }}</h4>
                                                <p class="mb-0 font-13">No of Active Investment</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card radius-10 border-start border-0 border-3 border-warning">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <p class="mb-0 text-secondary">Active Deposit</p>
                                                <h4 class="my-1 text-warning"> {{ $deposits->count() }}</h4>
                                                <p class="mb-0 font-13">Number of active deposits</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card radius-10 border-start border-0 border-3 border-warning">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <p class="mb-0 text-secondary">Active Withdrawals</p>
                                                <h4 class="my-1 text-warning"> {{ $withdrawals->count() }}</h4>
                                                <p class="mb-0 font-13">Number of active withdrawals</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end row-->


                        <!--end row-->

                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="card card-bordered card-preview">
                                    <div class="card-inner">
                                        <div class="table-responsive">
                                            @if (!$deposits->isEmpty())
                                                <h5> Your Recent Deposit </h5>
                                                <hr>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Message</th>
                                                            <th scope="col">Currency</th>
                                                            <th scope="col">Amount</th>
                                                            <th scope="col">Type</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($deposits as $key => $deposit)
                                                            <tr>
                                                                <th scope="row">{{ $key + 1 }}</th>
                                                                <td>{{ ucwords($deposit->message) }}</td>
                                                                <td>{{ ucwords($deposit->currency) }}</td>
                                                                <td>{{ number_format($deposit->amount, 0, '.', ',') }}
                                                                </td>
                                                                <td>{{ ucwords($deposit->type) }}</td>
                                                                <td
                                                                    class="{{ strtolower(config('app.tx_status')[$deposit->status]) }}">
                                                                    {{ ucwords(config('app.tx_status')[$deposit->status]) }}
                                                                </td>
                                                                <td>{{ date('d M,Y', strtotime($deposit->created_at)) }}
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="card card-bordered card-preview">
                                    <div class="card-inner">
                                        <div class="table-responsive">
                                            @if (!$investments->isEmpty())
                                                <h5> Your Active Investment </h5>
                                                <hr>
                                                <table class="table">
                                                    <thead>
                                                        <tr>

                                                            <th scope="col">#</th>
                                                            <th scope="col">Amount Invested</th>
                                                            <th scope="col">Current Amount</th>
                                                            <th scope="col">Days of investment</th>
                                                            <th scope="col">Daily </th>
                                                            <th scope="col">Start Date</th>
                                                            <th scope="col">End Date</th>
                                                            <th scope="col">Duration</th>
                                                            <th scope="col">Commission</th>
                                                            <th scope="col">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($investments as $key => $investment)
                                                            <tr>
                                                                <th scope="row">{{ $key + 1 }} </th>
                                                                <td>{{ number_format($investment->amount, 0, '.', ',') }}</td>
                                                                <?php
                                                                $amount = $investment->amount;
                                                                $commission = ($amount * $investment->percent_commission) / 100;
                                                                $total = $amount + $commission;
                                                                $daily = $commission / preg_replace('~\D~', '', $investment->duration);

                                                                
                                                                
                                                                ////////////////CURRENT AMOUNT/////////////////////
                                                                
                                                                $time_started = strtotime($investment->created_at);
                                                                $elapsed = time() - $time_started;
                                                                $counts = floor($elapsed / (60 * 60 * 24)) == 0 || floor($elapsed / (60 * 60 * 24)) == -1 ? 1 : floor($elapsed / (60 * 60 * 24));
                                                                
                                                                $daily_earnings = $investment->amount + $daily * $counts;

                                                                
                                                                ?>
                                                                <?php
                                                                $start = strtotime($investment->created_at);
                                                                $stop = strtotime($investment->close_date);
                                                                $today = time();
                                                                $days_diff = $stop - $start;
                                                                $remaining_days = ($today - $start) / 86400;
                                                                $no_of_days = $investment->duration;
                                                                $exploded = explode(' ', $no_of_days);
                                                                $numeric = (int) $exploded[0];
                                                                $actual_close_date = strtotime($investment->close_date) - (24*60*60);
                                                                $actual_closing_date =  gmdate("Y-m-d\TH:i:s\Z", $actual_close_date);
                                                                //   echo gettype($investment->duration);
                                                              
                                                                ?>
                                                                @if ($remaining_days < 8)
                                                                    <td>{{ floor($daily_earnings) }}</td>
                                                                @else
                                                                    <td>{{ floor($investment->amount + $daily * $numeric) }}
                                                                    </td>
                                                                @endif

                                                                 @if ($remaining_days < 1)
                                                                         <td>{{ 'Day 1/'. $investment->duration }}</td>
                                                                    @elseif ($remaining_days < 8)
                                                                       <td>{{  'Day'.round(intval($remaining_days)) .
                                                                        '/' . $investment->duration }}</td>
                                                                    @elseif ($remaining_days > 7)
                                                                        <td><h6 style="color:green; font-size:12px">completed</h6></td>
                                                                    @endif
                                                                <td>{{ $investment->currency == 'USD' ? number_format($daily, 0, '.', ',') : $daily }}
                                                                </td>


                                                                <td>{{ date('d M,Y', strtotime($investment->created_at)) }}
                                                                </td>

                                                                <td> <b
                                                                        class="text-danger">{{ date('d M,Y', strtotime($actual_closing_date)) }}</b>
                                                                </td>
                                                                <td>{{ ucwords($investment->duration) }}</td>
                                                                <td>{{ ucwords($investment->percent_commission) }}%
                                                                </td>



                                                                <td
                                                                    class="{{ strtolower(config('app.tx_status')[$investment->status]) }}">
                                                                    {{ ucwords(config('app.tx_status')[$investment->status]) }}
                                                                </td>



                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            @else
                                                <p class="text-center">No Investment at the moment</p>
                                            @endif
                                        </div>
                                    </div>
                                </div><!-- .card-preview -->
                            </div>
                        </div>

                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="col-md-12">
                                    {{-- table start --}}
                                    @if (!$withdrawals->isEmpty())
                                        <div class="card card-bordered card-preview">
                                            <div class="card-inner">
                                                <div class="table-responsive">
                                                    <h5> Your Recent Withdrawal </h5>
                                                    <hr>
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Message</th>
                                                                <th scope="col">Currency</th>
                                                                <th scope="col">Amount</th>
                                                                <th scope="col">Method Of Payment</th>
                                                                <th scope="col">Address</th>
                                                                <th scope="col">Date</th>
                                                                <th scope="col">Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($withdrawals as $item => $data)
                                                                <tr>
                                                                    <td>{{ $item + 1 }}</td>
                                                                    <td>{{ $data->message }}</td>
                                                                    <td>{{ $data->currency }}</td>
                                                                    <td>{{ $data->currency == 'USD' ? number_format($data->amount, 0, '.', ',') : $data->amount }}
                                                                    </td>
                                                                    <td>{{ $data->withdrawal_payment_method }}
                                                                    </td>
                                                                    <td>{{ $data->withdrawal_address }}</td>
                                                                    <td>{{ date('d M, Y', strtotime($data->created_at)) }}
                                                                    </td>
                                                                    <td
                                                                        class="{{ strtolower(config('app.tx_status')[$data->status]) }}">
                                                                        {{ ucwords(config('app.tx_status')[$data->status]) }}
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->
                                    @else
                                        <p class="text-center">No withdrawal request now</p>
                                    @endif

                                    {{-- table ends --}}
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
        @include('includes.c_footer')

    </div>
    <!--end wrapper-->
    <!--start switcher-->

    @include('includes.c_switch')
    @include('includes.c_script')

</body>


<!-- Mirrored from codervent.com/rocker/demo/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Apr 2022 15:30:50 GMT -->

</html>
