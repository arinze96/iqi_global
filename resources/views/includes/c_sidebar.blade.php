<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            {{-- <img src="{{ asset("assets/images/logo/") }}" class="logo-icon" alt="logo icon"> --}}
        </div>
        <div>
            <h5 class="logo-text" style="color: #77cc5e">Stableincome</h5>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">

        {{-- //dashboard --}}
        <li>
            <a href="{{ route("app.home") }}">
                <div class="parent-icon"><i class="bx bxs-bank"></i>
                </div>
                <div class="menu-title">Home</div>
            </a>
        </li>

        <li>
            <a href="{{ route("user.dashboard.view") }}">
                <div class="parent-icon"><i class="bx bx-home-alt"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>

        <li>
            <a href="{{ route('user.wallet.view') }}">
                <div class="parent-icon"><i class="fa fa-suitcase" aria-hidden="true"></i>
                </div>
                <div class="menu-title">Wallet</div>
            </a>
        </li>

        <li>
            <a href="{{ route('user.deposit.view', ['usd']) }}" >
                <div class="parent-icon"><i class="fa fa-university" aria-hidden="true"></i>
                </div>
                <div class="menu-title">Deposit</div>
            </a>
        </li>


        <li>
            <a href="{{ route('user.plan.view', ['all']) }}">
                <div class="parent-icon"><i class="fa fa-book" aria-hidden="true"></i>
                </div>
                <div class="menu-title">Investment Plan</div>
            </a>
        </li>

        <li>
            <a href="{{ route('user.withdraw.view') }}">
                <div class="parent-icon"><i class="fa fa-minus-circle" aria-hidden="true"></i>
                </div>
                <div class="menu-title">Withdraw</div>
            </a>
        </li>


        <li>
            <a href="{{ route('user.loan') }}">
                <div class="parent-icon"><i class="fa fa-arrows-alt" aria-hidden="true"></i>
                </div>
                <div class="menu-title">Apply For Loan</div>
            </a>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="fa fa-cog" aria-hidden="true"></i>
                </div>
                <div class="menu-title">Profile Settings</div>
            </a>
            <ul>
                <li> <a href="{{ route('user.setting.view', ['general']) }}"><i class="bx bx-right-arrow-alt"></i>General Setting</a>
                </li>
                <li> <a href="{{ route('user.setting.view', ['payment']) }}"><i class="bx bx-right-arrow-alt"></i>Payment Data</a>
                </li>
                <li> <a href="{{ route('user.setting.view', ['security']) }}"><i class="bx bx-right-arrow-alt"></i>Account Security</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="{{ route("user.logout.view") }}">
                <div class="parent-icon"><i class="fa fa-eject" aria-hidden="true"></i>
                </div>
                <div class="menu-title">SignOut</div>
            </a>
        </li>


      

    </ul>
    <!--end navigation-->
</div>