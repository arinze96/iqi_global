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
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Profile Info</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                        </nav>
                    </div>
                    <div class="ms-auto">
                        <div class="btn-group">
                            {{-- <a href="{{ route("admin.users.view",["edit-customer-profile" --}}
                            {{-- // ,$user->id --}}
                            {{-- ]) }}"> --}}
                                {{-- <button type="button" href="{{ route("admin.users.view",["edit-customer-profile",$user->id]) }}" class="btn btn-primary" >Edit Profile</button> --}}
                            {{-- </a>&nbsp; --}}
                            {{-- <a href="{{ route("admin.users.view",["change-customer-password" --}}
                            {{-- // ,$user->id --}}
                            {{-- ]) }}"> --}}
                                {{-- <button type="button" href="{{ route("admin.users.view",["change-customer-password",$user->id]) }}" class="btn btn-primary" >Change Password</button> --}}
                            </a>
                        </div>
                    </div>
					
				</div>
              <div class="row">
				  <div class="col-xl-6 mx-auto">
					  				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">Personal Information</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped " style="width:100%">
								<thead>
									<tr>
										<th></th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Fullname</td>
										<td>{{ $user->firstname }} {{ $user->lastname }}</td>
									</tr>
                                    <tr>
										<td>Username</td>
										<td>{{ $user->username }}</td>
									</tr>
                                    <tr>
										<td>Email</td>
										<td>{{ $user->email }}</td>
									</tr>
                                    <tr>
										<td>Phone Number</td>
										<td>{{ $user->phone }}</td>
									</tr>
                                    <tr>
										<td>Pin</td>
										<td>{{ $user->pin }}</td>
									</tr>
                                    
								</tbody>
							</table>
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
