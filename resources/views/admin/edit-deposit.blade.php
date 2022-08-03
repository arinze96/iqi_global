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
					<div class="breadcrumb-title pe-3">Edit Deposit</div>
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
						<h6 class="mb-0 text-uppercase" style="text-align: center ">Edit {{ $deposit->username }} Deposit Request</h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-primary">
							<div class="card-body p-5">
								<form class="row g-3" method="POST" data-post-type="edit-plan" action="{{ route("admin.deposit.view",["edit",$deposit->id]) }}">
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

                                    <div class="col-md-12">
										<label for="inputLastName" class="form-label">Deposit Message</label>
                                  <input required="" type="text" name="message" class="form-control" id="message" placeholder="Enter message" value="{{ !empty(old("message")) ? old("message") : $deposit->message   }}">
									</div>
									@error('message')
									<span class="text-danger" id="error_message">{{ $message }}</span>
									@enderror
                                    <div class="col-md-12">
										<label for="inputLastName" class="form-label">Deposit Amount ({{ $deposit->currency }})</label>
										<input required="" type="text" name="amount" class="form-control" id="amount" placeholder="Enter amount" value="{{ !empty(old("amount")) ? old("amount") : number_format($deposit->amount,0,"","")   }}">
									</div>
									@error('amount')
									<span class="text-danger" id="error_amount">{{ $message }}</span>
									@enderror
                                    <div class="col-md-12">
										<label for="inputState" class="form-label">Deposit Status</label>
										<select id="inputState" name="status" class="form-select form-control">
											<option value="" disabled selected>Select</option>
                                  @foreach(config("app.deposit_status") as $key => $status) 
                                  <option @if ((old("status") == $key) || ($deposit->status == $key))
                                            selected
                                          @endif 
                                  value="{{ $key }}">{{ $status }}</option>
                                  @endforeach
										</select>
									</div>
									@error('status')
									<span class="text-danger" id="error_status">{{ $message }}</span>
									@enderror
                                    <div class="col-md-12">
										<button type="submit"  name="edit-plan" class="btn btn-primary px-5 form-control w-100">Edit Deposit Record</button>
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
