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
                    <div class="col-xl-12 mx-auto">
                        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                            <div class="breadcrumb-title pe-3">Welcome</div>
                            <div class="ps-3">
                                <nav aria-label="breadcrumb">
                                </nav>
                            </div>
                            <div class="ms-auto">
                                <div class="btn-group">
                                    <a href="{{ route('admin.add.plan.view') }}">
                                        <button type="button" class="btn btn-success">Add Plan</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--end breadcrumb-->
                        <h6 class="mb-0 " style="color: gainsboro">This is the list of all active deposit
                            requests from customers</h6>
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
                                    @if (!empty($plans))
                                        <table class="table align-middle mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th style="color: grey">#</th>
                                                    <th style="color: grey">Plan Name</th>
                                                    <th style="color: grey">Minimum Amount</th>
                                                    <th style="color: grey">Maximum Amount</th>
                                                    <th style="color: grey">Type</th>
                                                    <th style="color: grey">ROI</th>
                                                    <th style="color: grey">Currency</th>
                                                    <th style="color: grey">Duration</th>
                                                    <th style="color: grey">Commission</th>
                                                    <th style="color: grey">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($plans as $key => $plan)
                                                    <tr>
                                                        <th scope="row">{{ $key + 1 }}</th>
                                                        <td>{{ ucwords($plan->name) }}</td>
                                                        <td>{{ $plan->currency == 'USD' ? number_format($plan->min, 0, '.', ',') : $plan->min }}
                                                            {{ strtoupper($plan->currency) }}</td>
                                                        <td>{{ $plan->currency == 'USD' ? number_format($plan->max, 0, '.', ',') : $plan->max }}
                                                            {{ strtoupper($plan->currency) }}</td>
                                                        <td>{{ str_replace('-', ' ', $plan->type) }}</td>
                                                        <td>{{ str_replace('-', ' ', $plan->roi) }}%</td>

                                                        <td>{{ $plan->currency }}</td>
                                                        <td>{{ ucwords($plan->duration) }}</td>
                                                        <td>{{ $plan->commission }}%</td>
                                                        <td class="tb-tnx-action">
                                                            <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret"
                                                            href="#" role="button" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <span><i class="fa fa-ellipsis-h"
                                                                    aria-hidden="true"></i></span>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a data-type="plan" class="dropdown-item"
                                                                        href="{{ route('admin.edit.plan.view', ['id' => $plan->id]) }}">Edit</a>
                                                                </li>
                                                                <li><a class="delete_data dropdown-item"
                                                                        href="{{ route('admin.delete.plan.post', ['id' => $plan->id]) }}">Delete</a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    @else
                                        <h4 class="text-center">You currently dont have any plans</h4>
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
