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
                            <div class="breadcrumb-title pe-3">All Customer Wallet</div>
                            <div class="ps-3">
                                <nav aria-label="breadcrumb">
                                </nav>
                            </div>
                        </div>
                        <!--end breadcrumb-->
                        <h6 class="mb-0 " style="color: gainsboro">This is the list of all customer wallet</h6>
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
                                    @if (!$accounts->isEmpty())
                                        <table class="table align-middle mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th style="color: grey">Fullname</th>
                                                    <th style="color: grey">Username</th>
                                                    <th style="color: grey">Email</th>
                                                    <th style="color: grey">Dollar Balance</th>
                                                    <th style="color: grey">Ethereum Balance</th>
                                                    <th style="color: grey">Bitcoin Balance</th>
                                                    <th style="color: grey">Date</th>
                                                    <th style="color: grey">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($accounts as $key => $account)
                                                <tr>
                                                    <td>{{ ucwords($account->firstname) }} {{ ucwords($account->lastname) }}</td>
                                                    <td>{{ ucwords($account->username) }}</td>
                                                    <td>{{ ucwords($account->email) }}</td>
                                                    <td>{{ number_format($account->dolla_balance,0,".",",") }}</td>
                                                    <td>{{ $account->ethereum_balance }}</td>
                                                    <td>{{ $account->bitcoin_balance }}</td>
                                                    <td>{{ date("d M,Y",strtotime($account->created_at)) }}</td>
                                                    <td>
                                                        <a href="{{ route("admin.wallet.view",["edit",$account->user_id]) }}"><i class="fa fa-book" aria-hidden="true"></i></a>
                                                        <a href="{{ route("admin.wallet.view",["view",$account->user_id]) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    @else
                                        <h4 class="text-center">No Customer Wallet at the moment</h4>
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
