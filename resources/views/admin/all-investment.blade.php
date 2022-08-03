<!doctype html>
<html lang="en">

<head>
    @include('includes.a_css')
    <title>All Deposits</title>
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
                    <div class="col-xl-12 mx-auto">
                        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                            <div class="breadcrumb-title pe-3">All Customer Investment</div>
                            <div class="ps-3">
                                <nav aria-label="breadcrumb">
                                </nav>
                            </div>
                        </div>
                        <!--end breadcrumb-->
                        <h6 class="mb-0 " style="color: gainsboro">This is the list of all Investments
                            of customers</h6>
                        <hr />
                        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3">

                        </div>
                        <!--end row-->


                        <!--end row-->

                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center">

                                </div>
                                <div class="table-responsive">
                                    @if (!$investments->isEmpty())
                                        <table class="table align-middle mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th style="color: grey">Username</th>
                                                    <th style="color: grey">Currency</th>
                                                    <th style="color: grey">Invested Amount</th>
                                                    <th style="color: grey">Current Amount</th>
                                                    <th style="color: grey">Days of Investments</th>
                                                    <th style="color: grey">Start/End Date</th>
                                                    <th style="color: grey">Duration</th>
                                                    <th style="color: grey">Commission</th>
                                                    <th style="color: grey">Status</th>
                                                    <th style="color: grey">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td style="flex-direction: row">
                                                        <a
                                                            href="{{ route('admin.deposit.view', [
                                                                'edit',
                                                                // ,$investment->id
                                                            ]) }}">
                                                            <i class="fa fa-book" aria-hidden="true"></i>
                                                        </a>
                                                        <a
                                                            href="{{ route('admin.deposit.view', [
                                                                'delete',
                                                                // ,$deposit->id
                                                            ]) }}">
                                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                                        </a>
                                                        {{-- <a  href="{{ route("admin.deposit.view",["view"
                                                    ,$deposit->id
                                                    ]) }}">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                    </a> --}}



                                                    </td>
                                                    {{-- <td>
                                                    <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret"
                                                        href="#" role="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <span><i class="fa fa-ellipsis-h" aria-hidden="true"></i></span>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="javascript:;"><i
                                                                    class="bx bx-user"></i><span>Approve</span></a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:;"><i
                                                                    class="bx bx-cog"></i><span>Decline</span></a>
                                                        </li>
                                                    </ul>
                                                </td> --}}
                                                </tr>
                                                @foreach ($investments as $key => $investment)
                                                <tr>

                                                    <th scope="row">
                                                        {{ ucwords($investment->username) }}
                                                    </th>
                                                    <td>{{ ucwords($investment->currency) }}
                                                    </td>
                                                    <td>{{ $investment->currency == 'USD' ? number_format($investment->amount, 0, '.', ',') : $investment->amount }}
                                                    </td>
                                                    <?php
                                                    $amount = $investment->amount;
                                                    $commission = ($amount * $investment->percent_commission) / 100;
                                                    $total = $amount + $commission;
                                                    $daily = $commission / preg_replace('~\D~', '', $investment->duration);
                                                    // echo $daily;
                                                    
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
                                                     $exploded = explode(" ",$no_of_days);
                                                     $numeric =  (int)$exploded[0];
                                                     $actual_close_date = strtotime($investment->close_date) - (24*60*60);
                                                $actual_closing_date =  gmdate("Y-m-d\TH:i:s\Z", $actual_close_date)
                                                     ?>
                                                     {{-- <td>{{ $remaining_days < 1? 'Day 1/' . $investment->duration: 'Day' . round(intval($remaining_days)) . '/' . $investment->duration }}
                                                     </td> --}}
                                                     @if ($remaining_days < 8)
                                                     <td>{{ floor($daily_earnings) }}</td>
                                                     @else
                                                     <td>{{ floor($investment->amount + $daily * $numeric) }}</td>
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
                                                        / <b
                                                            class="text-danger">{{ date('d M,Y', strtotime($actual_closing_date)) }}</b>
                                                    </td>
                                                    <td>{{ ucwords($investment->duration) }}
                                                    </td>
                                                    <td>{{ ucwords($investment->percent_commission) }}%
                                                    </td>



                                                    <td>{{ ucwords(config('app.tx_status')[$investment->status]) }}
                                                    </td>

                                                    <td>
                                                        <a
                                                            href="{{ route('admin.deposit.view', ['edit', $investment->id]) }}">
                                                            <i class="fa fa-book" aria-hidden="true"></i>
                                                        </a>

                                                        <a class="delete_data text-danger"
                                                            href="{{ route('admin.deposit.view', ['delete', $investment->id]) }}"
                                                            data-type="deposit">
                                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                                        </a>

                                                        <a class="add_investments"
                                                        href="{{ route("admin.deposit.view",["addInvestment", $investment->id]) }}">
                                                        <i class="fa fa-home" aria-hidden="true"></i>
                                                        </a>

                                                        <a class="add_ref"
                                                        href="{{ route("admin.deposit.view",["addRef",$investment->user_id]) }}">
                                                        <i class="fa fa-asterisk" aria-hidden="true"></i>
                                                        </a>


                                                    </td>

                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    @else
                                        <h4 class="text-center">No Investment at the moment</h4>
                                    @endif
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
