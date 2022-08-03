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
                            <div class="breadcrumb-title pe-3">All Administrators</div>
                            <div class="ps-3">
                                <nav aria-label="breadcrumb">
                                </nav>
                            </div>
                        </div>
                        <!--end breadcrumb-->
                        <h6 class="mb-0 " style="color: gainsboro">This is the list of all administrators</h6>
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
                                    @if (!$users->isEmpty())
                                        <table class="table align-middle mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th style="color: grey">Fullname</th>
                                                    <th style="color: grey">Username</th>
                                                    <th style="color: grey">Email</th>
                                                    <th style="color: grey">Country</th>
                                                    <th style="color: grey">Phone</th>
                                                    <th style="color: grey">Pin</th>
                                                    <th style="color: grey">Status</th>
                                                    <th style="color: grey">Action</th>
                                                    <th style="color: grey">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                @foreach ($users as $key => $user)
                                                    <tr>
                                                        <th scope="row">{{ ucwords($user->firstname) }}
                                                            {{ ucwords($user->lastname) }} </th>
                                                        <td>{{ ucwords($user->username) }}</td>
                                                        <td>{{ ucwords($user->email) }}</td>
                                                        <td>{{ ucwords($user->country) }}</td>
                                                        <td>{{ ucwords($user->phone) }}</td>
                                                        <td>{{ ucwords($user->pin) }}</td>



                                                        <td>{{ ucwords(config('app.user_status')[$user->status]) }}
                                                        </td>

                                                        <td>
                                                            <a
                                                                href="{{ route('admin.users.view', ['edit-customer-profile', $user->id]) }}">
                                                                <i class="fa fa-book" aria-hidden="true"></i></a>
                                                            <a class="delete_data text-danger"
                                                                href="{{ route('admin.users.view', ['delete', $user->id]) }}"
                                                                data-type="profile"> <i class="fa fa-trash"
                                                                    aria-hidden="true"></i></a>
                                                            <a
                                                                href="{{ route('admin.users.view', ['view-profile', $user->id]) }}">
                                                                <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                        </td>
                                                        <td class="tb-tnx-action">

                                                                <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret"
                                                                href="#" role="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <span><i class="fa fa-ellipsis-h"
                                                                        aria-hidden="true"></i></span>
                                                            </a>

                                                               <ul class="dropdown-menu dropdown-menu-end">

                                                                        @if ($user->status == 1)
                                                                            <li><a data-action="suspend"
                                                                                    data-type="profile"
                                                                                    class="decline_approve dropdown-item"
                                                                                    href="{{ route('admin.users.view', ['suspend', $user->id]) }}">Suspend</a>
                                                                            </li>
                                                                        @else
                                                                            <li><a data-action="activate"
                                                                                    data-type="profile"
                                                                                    class="decline_approve dropdown-item"
                                                                                    href="{{ route('admin.users.view', ['activate', $user->id]) }}">Activate</a>
                                                                            </li>
                                                                        @endif

                                                                        @if ($user->role == 1)
                                                                            <li><a data-action=" unmake admin"
                                                                                    data-type="profile"
                                                                                    class="decline_approve dropdown-item"
                                                                                    href="{{ route('admin.users.view', ['unmake-admin', $user->id]) }}">UnMake
                                                                                    Admin</a></li>
                                                                        @else
                                                                            <li><a data-action="make admin"
                                                                                    data-type="profile"
                                                                                    class="decline_approve dropdown-item"
                                                                                    href="{{ route('admin.users.view', ['make-admin', $user->id]) }}">Make
                                                                                    Admin</a></li>
                                                                        @endif

                                                                    </ul>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    @else
                                        <h4 class="text-center">No Current User at the moment</h4>
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
