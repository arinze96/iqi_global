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
                            <div class="breadcrumb-title pe-3">Active Customer Withdrawal</div>
                            <div class="ps-3">
                                <nav aria-label="breadcrumb">
                                </nav>
                            </div>
                        </div>
                        <!--end breadcrumb-->
                        <h6 class="mb-0 " style="color: gainsboro">This is the list of all customer withdrawals
                        </h6>
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
                                    @if (!$withdrawals->isEmpty())
                                        <table class="table align-middle mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th style="color: grey">Fullname</th>
                                                    <th style="color: grey">Username</th>
                                                    <th style="color: grey">Email</th>
                                                    <th style="color: grey">Currency</th>
                                                    <th style="color: grey">Amount</th>
                                                    <th style="color: grey">Payment</th>
                                                    <th style="color: grey">Address</th>
                                                    <th style="color: grey">Date</th>
                                                    <th style="color: grey">Status</th>
                                                    <th style="color: grey">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($withdrawals as $item => $data)

                                                <tr>
                                                    <td>{{ $data->firstname }} {{ $data->lastname }}</td>
                                                    <td>{{ $data->username }}</td>
                                                    <td>{{ $data->email }}</td>
                                                    <td>{{ $data->currency }}</td>
                                                    <td>{{ $data->currency == 'USD' ? number_format($data->amount, 0, '.', ',') : $data->amount }}</td>
                                                    <td>{{ $data->withdrawal_payment_method }}</td>
                                                    <td style="font-size:8px;">{{ $data->withdrawal_address }}</td>
                                                    <td>{{ date('d M, Y', strtotime($data->created_at)) }}</td>
                                                    <td>{{ ucwords(config('app.tx_status')[$data->status]) }}</td>
                                                    <td class="tb-tnx-action">
                                                        <a title="approve" data-action="approve"
                                                            data-type="withdraw"
                                                            class="decline_approve"
                                                            href="{{ route('admin.withdraw.view', ['approve', $data->id]) }}"><i class="fa fa-check" aria-hidden="true"></i></a>

                                                        <a title="delete" data-action="delete"
                                                            class="delete_data text-danger"
                                                            href="{{ route('admin.withdraw.view', ['delete', $data->id]) }}"
                                                            data-type="withdraw"><i class="fa fa-trash" aria-hidden="true"></i></a>

                                                        <a title="decline" data-action="decline"
                                                            data-type="withdraw"
                                                            class="decline_approve"
                                                            href="{{ route('admin.withdraw.view', ['decline', $data->id]) }}"><i class="fa fa-times" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    @else
                                        <p class="text-center">No withdrawal request now</p>
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
