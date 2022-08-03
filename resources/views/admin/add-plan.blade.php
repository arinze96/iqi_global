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
                    <div class="breadcrumb-title pe-3">Add Investment Plans</div>
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
                        <h6 class="mb-0 text-uppercase" style="text-align: center ">Add Investment Plans</h6>
                        <hr />
                        <div class="card border-top border-0 border-4 border-primary">
                            <div class="card-body p-5">
                                <form class="row g-3" method="POST" data-post-type="edit-plan"
                                    action="{{ route('admin.add.plan.view') }}">
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
                                        <label for="inputLastName" class="form-label">Plan Name</label>
                                        <input required="" type="text" name="name" class="form-control" id="name"
                                            placeholder="Enter Name" value="{{ old('name') }}">
                                    </div>
                                    @error('name')
                                        <span class="text-danger" id="error_name">{{ $message }}</span>
                                    @enderror

                                    <div class="col-md-12">
                                        <label for="inputLastName" class="form-label">Plan Minimum Amount</label>
                                        <input required="" type="text" name="min" class="form-control" id="min"
                                            placeholder="Enter Min" value="{{ old('min') }}">
                                    </div>
                                    @error('min')
                                        <span class="text-danger" id="error_min">{{ $message }}</span>
                                    @enderror

                                    <div class="col-md-12">
                                        <label for="inputLastName" class="form-label">Plan Maximum Amount</label>
                                        <input required="" type="text" name="max" class="form-control" id="max"
                                            placeholder="Enter max" value="{{ old('max') }}">
                                    </div>
                                    @error('max')
                                        <span class="text-danger" id="error_max">{{ $message }}</span>
                                    @enderror

                                    <div class="col-md-12">
                                        <label for="inputState" class="form-label">Plan Type</label>
                                        <select id="inputState" name="type" class="form-select form-control">
                                            <option value="" disabled selected>Select</option>
                                            @foreach (config('app.type') as $type)
                                                <option @if (old('type') == $type) selected @endif
                                                    value="{{ $type }}">{{ str_replace('-', ' ', $type) }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
									@error('type')
									<span class="text-danger" id="error_type">{{ $message }}</span>
									@enderror

                                    <div class="col-md-12">
                                        <label for="inputState" class="form-label">Plan Currency</label>
                                        <select id="inputState" name="currency" class="form-select form-control">
                                            <option value="" disabled selected>Select</option>
                                  @foreach(config("app.currency") as $currency) 
                                  <option @if (old("currency") == $currency)
                                            selected
                                          @endif 
                                  value="{{ $currency }}">{{ $currency }}</option>
                                  @endforeach
                                        </select>
                                    </div>
									@error('currency')
									<span class="text-danger" id="error_currency">{{ $message }}</span>
									@enderror

                                    <div class="col-md-12">
                                        <label for="inputLastName" class="form-label">Plan ROI</label>
                                        <input required="" type="text" name="roi" class="form-control" id="roi" placeholder="Enter roi" value="{{ old("roi") }}">
                                    </div>
									@error('roi')
									<span class="text-danger" id="error_min">{{ $message }}</span>
									@enderror

                                    <div class="col-md-12">
                                        <label for="inputLastName" class="form-label">Plan Duration (example 30
                                            days)</label>
                                <input required="" type="text" name="duration" class="form-control" id="duration" placeholder="Enter duration" value="{{ old("duration") }}">
                                    </div>
									@error('duration')
									<span class="text-danger" id="error_duration">{{ $message }}</span>
									@enderror
                                    <div class="col-md-12">
                                        <label for="inputLastName" class="form-label">Total Commission in Percent
                                            (%) (example 60)</label>
											<input required="" type="text" name="commission" class="form-control" id="commission" placeholder="Enter commission" value="{{ old("commission") }}">
                                    </div>
									@error('commission')
									<span class="text-danger" id="error_commission">{{ $message }}</span>
									@enderror
                                    <div class="col-md-12">
                                        <button type="submit" name="add-plan" class="btn btn-primary px-5 w-100 form-control">Add Investment
                                            Plan</button>
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
