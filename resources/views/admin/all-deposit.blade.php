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
                            <div class="breadcrumb-title pe-3">All Deposits</div>
                            <div class="ps-3">
                                <nav aria-label="breadcrumb">
                                </nav>
                            </div>
                        </div>
                        <!--end breadcrumb-->
                        <h6 class="mb-0 " style="color: gainsboro">This is the list of all deposit
                            from customers</h6>
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
                                    @if (!$deposits->isEmpty())
                                        <table class="table align-middle mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th style="color: grey">#</th>
                                                    <th style="color: grey">Fullname</th>
                                                    <th style="color: grey">Username</th>
                                                    <th style="color: grey">Currency</th>
                                                    <th style="color: grey">Amount</th>
                                                    <th style="color: grey">Phone</th>
                                                    <th style="color: grey">Country</th>
                                                    <th style="color: grey">Status</th>
                                                    <th style="color: grey">Date</th>
                                                    <th style="color: grey">Action</th>
                                                    <th style="color: grey">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($deposits as $key => $deposit)
                                                    <tr>
                                                        <th scope="row">{{ $key + 1 }}</th>
                                                        <td>{{ ucwords($deposit->firstname) }}
                                                            {{ ucwords($deposit->lastname) }}</td>
                                                        <td>{{ ucwords($deposit->username) }}</td>
                                                        <td>{{ ucwords($deposit->currency) }}</td>
                                                        <td>{{ number_format($deposit->amount, 0, '.', ',') }}</td>
                                                        <td>{{ ucwords($deposit->phone) }}</td>
                                                        <td>{{ ucwords($deposit->country) }}</td>
                                                        <td>{{ ucwords(config('app.tx_status')[$deposit->status]) }}
                                                        </td>
                                                        <td>{{ date('d M,Y', strtotime($deposit->created_at)) }}</td>
                                                        <td>
                                                            <a
                                                                href="{{ route('admin.deposit.view', ['edit', $deposit->id]) }}">
                                                                <i class="fa fa-book" aria-hidden="true"></i></a>
                                                            <a class="delete_data"
                                                                href="{{ route('admin.deposit.view', ['delete', $deposit->id]) }}"
                                                                data-type="deposit"><i class="fa fa-trash"
                                                                    aria-hidden="true"></i></a>
                                                            <a
                                                                href="{{ route('admin.deposit.view', ['view', $deposit->id]) }}"><i
                                                                    class="fa fa-eye" aria-hidden="true"></i></a>
                                                        </td>
                                                        <td class="tb-tnx-action">

                                                            {{-- /////////////////// --}}
                                                            <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret"
                                                                href="#" role="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <span><i class="fa fa-ellipsis-h"
                                                                        aria-hidden="true"></i></span>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a data-action="approve" data-type="deposit"
                                                                        class="dropdown-item decline_approve"
                                                                        href="{{ route('admin.deposit.view', ['approve', $deposit->id]) }}"><span>Approve</span></a>
                                                                </li>
                                                                <li><a data-action="decline" data-type="deposit"
                                                                        class="dropdown-item decline_approve"
                                                                        href="{{ route('admin.deposit.view', ['decline', $deposit->id]) }}"><span>Decline</span></a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    @else
                                        <h4 class="text-center">No Active deposit at the moment</h4>
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
