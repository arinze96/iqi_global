<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            {{-- <img src="{{ asset("assets/images/just1.jpg") }}" class="logo-icon" alt="logo icon"> --}}
        </div>
        <div>
            <h5 class="logo-text" style="color: rgb(14,13,113)">BristlAssets</h5>
        </div>
        <div class="toggle-icon ms-auto"><i class="fa fa-arrow-left" aria-hidden="true"></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">

        <li>
            <a href="{{ route("admin.dashboard.view") }}">
                <div class="parent-icon"><i class='bx bx-pen'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
         
        <br> 

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="fa fa-university" aria-hidden="true"></i>
                </div>
                <div class="menu-title">Deposits</div>
            </a>
            <ul>
                <li> <a href="{{ route("admin.deposit.view",["active"]) }}"><i class="bx bx-right-arrow-alt"></i>Active Deposits</a>
                </li>
                <li> <a href="{{ route("admin.deposit.view",["all"]) }}"><i class="bx bx-right-arrow-alt"></i>All Deposits</a>
                </li>
                </li>
            </ul>
        </li>
 
        <br> 

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="fa fa-arrows-alt" aria-hidden="true"></i>
                </div>
                <div class="menu-title">Loans</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.loan.view', ['active']) }}"><i class="bx bx-right-arrow-alt"></i>Active Loans</a>
                </li>
                <li> <a href="{{ route('admin.loan.view', ['all']) }}"><i class="bx bx-right-arrow-alt"></i>All Loans</a>
                </li>
            </ul>
        </li>

        <br> 

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="fa fa-minus-circle" aria-hidden="true"></i>
                </div>
                <div class="menu-title">Withdrawals</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.withdraw.view', ['active']) }}"><i class="bx bx-right-arrow-alt"></i>Active Withdrawals</a>
                </li>
            </ul>
        </li>
         
        <br> 
      
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="fa fa-book" aria-hidden="true"></i>
                </div>
                <div class="menu-title">Investments</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.investment.view', ['active']) }}"><i class="bx bx-right-arrow-alt"></i>Active Investments</a>
                </li>
                <li> <a href="{{ route('admin.investment.view', ['all']) }}"><i class="bx bx-right-arrow-alt"></i>All Investments</a>
                </li>
            </ul>
        </li>
  
        <br>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="fa fa-suitcase" aria-hidden="true"></i>
                </div>
                <div class="menu-title">Wallets</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.wallet.view') }}"><i class="bx bx-right-arrow-alt"></i>Customers Wallets</a>
                </li>
            </ul>
        </li>
 
        <br> 

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="fa fa-wrench" aria-hidden="true"></i>
                </div>
                <div class="menu-title">App Users</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.users.view', ['customer']) }}"><i class="bx bx-right-arrow-alt"></i>Customers</a>
                </li>
                <li> <a href="{{ route('admin.users.view', ['admin']) }}"><i class="bx bx-right-arrow-alt"></i>Administrators</a>
                </li>
            </ul>
        </li>

        <br>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="fa fa-cog" aria-hidden="true"></i>
                </div>
                <div class="menu-title">App Settings</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.plans.view') }}"><i class="bx bx-right-arrow-alt"></i>Plans Settings</a>
                </li>
                <li> <a href="{{ route('admin.application.view') }}"><i class="bx bx-right-arrow-alt"></i>Applications Settings</a>
                </li>
            </ul>
        </li>

        <br>

        <li>
            <a href="{{ route('admin.profile.view') }}">
                <div class="parent-icon"><i class="fa fa-user" aria-hidden="true"></i>
                </div>
                <div class="menu-title">Profile</div>
            </a>
        </li>

        <br>

        <li>
            <a href="{{ route("admin.logout") }}">
                <div class="parent-icon"><i class="fa fa-eject" aria-hidden="true"></i>
                </div>
                <div class="menu-title">SignOut</div>
            </a>
        </li>


      

    </ul>
    <!--end navigation-->
</div>