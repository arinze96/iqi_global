<!doctype html>
<html lang="en">

<head>
    @include('includes.c_css')
    <title>Rocker - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        @include('includes.c_sidebar')
        @include('includes.c_header')


        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">PLANS</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Choose A Suitable Investment Plan
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <a class="btn btn-primary mb-3 collapsed" data-toggle="collapse" href="#collapseContent1" role="button"
                    aria-expanded="false" aria-controls="collapseContent1" style="width: 100%; background-color:rgb(14,31,113)"><span class="if-collapsed"><b>+</b> Show
                        All Mining Plans </span>
                    <span class="if-not-collapsed"><b>-</b> Hide Content</span></a>
                <div class="collapse" id="collapseContent1">
                    <div class="card card-body">
                        @if (!$plans->isEmpty())
                            <div class="row">
                                <?php $count = 0;
                                // $changed = (array)$plans;
                                // $case = array_slice($changed, 2);
                                ?>
                                @foreach ($plans as $key => $plan)
                                    <?php if ($key < 5) {
                                        continue;
                                    } ?>
                                    <div class="col-12 col-sm-8 col-md-6 col-lg-3" id="plans" style="display: block">
                                        <div class="card text-center">
                                            <div
                                                class="card-header text-center border-bottom-0 bg-transparent text-success pt-4">
                                                <h4>{{ ucwords($plan->name) }}</h4>
                                            </div>
                                            <div class="card-body">
                                                <h6 class="bill"><span>MIN-</span>
                                                    {{ $plan->currency == 'USD' ? number_format($plan->min, 0, '.', ',') : $plan->min }}
                                                    {{ $plan->currency }}</h6>
                                                <h6 class="bill"><span>MAX-</span>
                                                    {{ $plan->currency == 'USD' ? number_format($plan->max, 0, '.', ',') : $plan->max }}
                                                    {{ $plan->currency }}</h6>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                {{-- <li class="list-group-item"><i class="fas fa-male text-success mx-2"></i>Type
                                            <span>Total Return Swap</span>
                                        </li> --}}
                                                @if (ucwords(str_replace(['swap', '-'], '', $plan->type)) != 'Currency')
                                                    <li class="bill">Type -
                                                        {{ strtoupper(str_replace(['swap', '-'], '', $plan->type)) }}<span></span>
                                                    </li>
                                                @endif
                                                <li class="list-group-item">ROI
                                                    <span class="bill">{{ $plan->roi }}% &nbsp;
                                                        Daily</span>
                                                </li>
                                                <li class="list-group-item">Duration-
                                                    <span class="bill">{{ ucwords($plan->duration) }}</span>
                                                </li>
                                                <li class="list-group-item">Commission-
                                                    <span v>{{ ucwords($plan->commission) }}%</span>
                                                </li>
                                                <li class="list-group-item">Currency
                                                    <span>USD</span>
                                                </li>
                                            </ul>
                                            <div class="card-footer border-top-0">
                                                <input type="text" placeholder="Enter Amount"
                                                    class="form-control investment_amount w-100"
                                                    placeholder="Enter Amount " id="input{{ $key }}"
                                                    data-btn="btn{{ $key }}" type="number" name=""
                                                    placeholder="0.00">
                                            </div>
                                            <span class="text-danger error_box d-block mt-1 mb-1"
                                                id="error{{ $key }}"></span>

                                            <div class="card-footer border-top-0">
                                                <button disabled="true" data-key="{{ $key }}"
                                                    data-error="error{{ $key }}" id="btn{{ $key }}"
                                                    data-currency="{{ $plan->currency }}"
                                                    data-min="{{ $plan->currency == 'USD' ? number_format(round($plan->min, 2), 0, '.', '') : $plan->min }}"
                                                    data-max="{{ $plan->currency == 'USD' ? number_format(round($plan->max, 2), 0, '.', '') : $plan->max }}"
                                                    data-plan-url="{{ route('user.plan.view', ['currency']) }}"
                                                    data-plan-id="{{ $plan->id }}"
                                                    class="btn btn-primary px-5 w-100 invest_btn" disabled="true">+
                                                    Select
                                                    Plan</button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="row g-gs">
                                <div class="col-md-12 card">
                                    <h4 class="text-center">No Investment Plan's at the moment</h4>
                                </div><!-- .col -->
                            </div><!-- .row -->
                        @endif
                    </div>
                </div>


                <a class="btn btn-primary mb-3 collapsed" data-toggle="collapse" href="#collapseContent" role="button"
                    aria-expanded="false" aria-controls="collapseContent" style="width: 100%; background-color:rgb(14,31,113)"><span class="if-collapsed"><b>+</b> Show All Trading Plans</span>
                    <span class="if-not-collapsed"><b>-</b> Hide Content</span></a>
                <div class="collapse" id="collapseContent">
                    <div class="card card-body">
                        @if (!$plans->isEmpty())
                            <div class="row">
                                <?php $count = 0;
                                // $changed = (array)$plans;
                                // $case = array_slice($changed, 2);
                                ?>
                                @foreach ($plans as $key => $plan)
                                    <?php if ($key > 4) {
                                        continue;
                                    } ?>
                                    <div class="col-12 col-sm-8 col-md-6 col-lg-3" id="plans4" style="display: block">
                                        <div class="card text-center">
                                            <div
                                                class="card-header text-center border-bottom-0 bg-transparent text-success pt-4">
                                                <h4>{{ ucwords($plan->name) }}</h4>
                                            </div>
                                            <div class="card-body">
                                                <h6 class="bill"><span>MIN-</span>
                                                    {{ $plan->currency == 'USD' ? number_format($plan->min, 0, '.', ',') : $plan->min }}
                                                    {{ $plan->currency }}</h6>
                                                <h6 class="bill"><span>MAX-</span>
                                                    {{ $plan->currency == 'USD' ? number_format($plan->max, 0, '.', ',') : $plan->max }}
                                                    {{ $plan->currency }}</h6>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                {{-- <li class="list-group-item"><i class="fas fa-male text-success mx-2"></i>Type
                                        <span>Total Return Swap</span>
                                    </li> --}}
                                                @if (ucwords(str_replace(['swap', '-'], '', $plan->type)) != 'Currency')
                                                    <li class="bill">Type -
                                                        {{ strtoupper(str_replace(['swap', '-'], '', $plan->type)) }}<span></span>
                                                    </li>
                                                @endif
                                                <li class="list-group-item">ROI
                                                    <span class="bill">{{ $plan->roi }}% &nbsp;
                                                        Daily</span>
                                                </li>
                                                <li class="list-group-item">Duration-
                                                    <span
                                                        class="bill">{{ ucwords($plan->duration) }}</span>
                                                </li>
                                                <li class="list-group-item">Commission-
                                                    <span v>{{ ucwords($plan->commission) }}%</span>
                                                </li>
                                                <li class="list-group-item">Currency
                                                    <span>USD</span>
                                                </li>
                                            </ul>
                                            <div class="card-footer border-top-0">
                                                <input type="text" placeholder="Enter Amount"
                                                    class="form-control investment_amount w-100"
                                                    placeholder="Enter Amount " id="input{{ $key }}"
                                                    data-btn="btn{{ $key }}" type="number" name=""
                                                    placeholder="0.00">
                                            </div>
                                            <span class="text-danger error_box d-block mt-1 mb-1"
                                                id="error{{ $key }}"></span>

                                            <div class="card-footer border-top-0">
                                                <button disabled="true" data-key="{{ $key }}"
                                                    data-error="error{{ $key }}" id="btn{{ $key }}"
                                                    data-currency="{{ $plan->currency }}"
                                                    data-min="{{ $plan->currency == 'USD' ? number_format(round($plan->min, 2), 0, '.', '') : $plan->min }}"
                                                    data-max="{{ $plan->currency == 'USD' ? number_format(round($plan->max, 2), 0, '.', '') : $plan->max }}"
                                                    data-plan-url="{{ route('user.plan.view', ['currency']) }}"
                                                    data-plan-id="{{ $plan->id }}"
                                                    class="btn btn-primary px-5 w-100 invest_btn" disabled="true">+
                                                    Select
                                                    Plan</button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="row g-gs">
                                <div class="col-md-12 card">
                                    <h4 class="text-center">No Investment Plan's at the moment</h4>
                                </div><!-- .col -->
                            </div><!-- .row -->
                        @endif
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
        @include('includes.c_footer')

    </div>
    <!--end wrapper-->
    <!--start switcher-->
    @include('includes.c_switch')
    @include('includes.c_script')

</body>


<!-- Mirrored from codervent.com/rocker/demo/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Apr 2022 15:30:50 GMT -->

</html>
