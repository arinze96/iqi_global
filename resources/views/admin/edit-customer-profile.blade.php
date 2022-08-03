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
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Edit Profile</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								{{-- <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li> --}}
								{{-- <li class="breadcrumb-item active" aria-current="page">Personal Loan Form</li> --}}
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-6 mx-auto">
						<h6 class="mb-0 text-uppercase" style="text-align: center ">Edit {{ $user->username }} Profile Record</h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-primary">
							<div class="card-body p-5">
								<form class="row g-3" method="POST" data-post-type="edit-plan" action="{{ route("admin.users.view",["edit-customer-profile",$user->id]) }}">
									
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
									
									<div class="col-sm-6 col-md-12 mb-2">
										<div class="form-group">
											<label class="form-label"
												for="firstname">Firstname</label>
											<div class="form-control-wrap">
												<input required="" type="text" name="firstname"
													class="form-control" id="firstname"
													placeholder="Enter firstname"
													value="{{ !empty(old('firstname')) ? old('firstname') : $user->firstname }}">
											</div>
											@error('firstname')
												<span class="text-danger"
													id="error_firstname">{{ $message }}</span>
											@enderror
										</div>
									</div>


									<div class="col-sm-6 col-md-12 mb-2">
										<div class="form-group">
											<label class="form-label"
												for="lastname">Lastname</label>
											<div class="form-control-wrap">
												<input required="" type="text" name="lastname"
													class="form-control" id="lastname"
													placeholder="Enter lastname"
													value="{{ !empty(old('lastname')) ? old('lastname') : $user->lastname }}">
											</div>
											@error('lastname')
												<span class="text-danger"
													id="error_lastname">{{ $message }}</span>
											@enderror
										</div>
									</div>

									<div class="col-sm-6 col-md-12 mb-2">
										<div class="form-group">
											<label class="form-label"
												for="username">Username</label>
											<div class="form-control-wrap">
												<input required="" type="text" name="username"
													class="form-control" id="username"
													placeholder="Enter username"
													value="{{ !empty(old('username')) ? old('username') : $user->username }}">
											</div>
											@error('username')
												<span class="text-danger"
													id="error_username">{{ $message }}</span>
											@enderror
										</div>
									</div>


									<div class="col-sm-6 col-md-12 mb-2">
										<div class="form-group">
											<label class="form-label"
												for="email">Email</label>
											<div class="form-control-wrap">
												<input required="" type="text" name="email"
													class="form-control" id="email"
													placeholder="Enter email"
													value="{{ !empty(old('email')) ? old('email') : $user->email }}">
											</div>
											@error('email')
												<span class="text-danger"
													id="error_email">{{ $message }}</span>
											@enderror
										</div>
									</div>

									<div class="col-sm-6 col-md-12 mb-2">
										<div class="form-group">
											<label class="form-label"
												for="country">Country</label>
											<div class="form-control-wrap">
												<input required="" type="text" name="country"
													class="form-control" id="country"
													placeholder="Enter country"
													value="{{ !empty(old('country')) ? old('country') : $user->country }}">
											</div>
											@error('country')
												<span class="text-danger"
													id="error_country">{{ $message }}</span>
											@enderror
										</div>
									</div>

									<div class="col-sm-6 col-md-12 mb-2">
										<div class="form-group">
											<label class="form-label" for="pin">pin</label>
											<div class="form-control-wrap">
												<input required="" type="text" name="pin"
													class="form-control" id="pin"
													placeholder="Enter pin"
													value="{{ !empty(old('pin')) ? old('pin') : $user->pin }}">
											</div>
											@error('pin')
												<span class="text-danger"
													id="error_pin">{{ $message }}</span>
											@enderror
										</div>
									</div>


									<div class="col-sm-6 col-md-12 mb-2">
										<div class="form-group">
											<label class="form-label"
												for="phone">phone</label>
											<div class="form-control-wrap">
												<input required="" type="text" name="phone"
													class="form-control" id="phone"
													placeholder="Enter phone"
													value="{{ !empty(old('phone')) ? old('phone') : $user->phone }}">
											</div>
											@error('phone')
												<span class="text-danger"
													id="error_phone">{{ $message }}</span>
											@enderror
										</div>
									</div>
                                    <div class="col-md-12">
										<button type="submit" name="edit-plan" class="btn btn-primary px-5 w-100 form-control">Edit Profile Record</button>
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
        @include('includes.a_footer')

    </div>
    <!--end wrapper-->
    <!--start switcher-->

    @include('includes.a_switch')
    @include('includes.a_script')

</body>


<!-- Mirrored from codervent.com/rocker/demo/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Apr 2022 15:30:50 GMT -->

</html>
