<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{asset('adminbackend/assets/images/logo.png')}}" style="width:90px;" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text"></h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('personnel.dashboard') }}">
                <div class="parent-icon"><i class='bx bxs-dashboard'></i></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>

        <li class="menu-label">Items & Facilities</li>
        <li>
            <a href="{{ route('personnel.inventory.material-list') }}"> 
                <div class="parent-icon"><i class='bx bx-package'></i>
                </div>
                <div class="menu-title">Materials</div>
            </a>
        </li>

        <li>
            <a href="{{ route('personnel.inventory.chemical-list') }}">
                <div class="parent-icon"><i class='bx bxs-radiation'></i>
                </div>
                <div class="menu-title">Chemicals</div>
            </a>
        </li>

        <li>
            <a href="{{ route('personnel.inventory.equipment-list') }}">
                <div class="parent-icon"><i class='bx bx-wrench'></i>
                </div>
                <div class="menu-title">Equipment</div>
            </a>
        </li>

        <li>
            <a href="{{ route('personnel.inventory.facility-list') }}">
                <div class="parent-icon"><i class='bx bxs-school'></i>
                </div>
                <div class="menu-title">Facilities</div>
            </a>
        </li>

        <li class="menu-label">Requests & Reservations</li>

        <li>
            <a href="{{ route('personnel.reservation.reservation-request-list') }}">
                <div class="parent-icon"><i class='bx bx-envelope'></i></i>
                </div>
                <div class="menu-title">Requests</div>
            </a>
        </li>

        <li>
            <a href="{{ route('personnel.reservation.reservation-schedule-list') }}">
                <div class="parent-icon"><i class='bx bx-calendar-check' ></i></i>
                </div>
                <div class="menu-title">Schedule</div>
            </a>
        </li>
    <!--end navigation-->
</div>
<!--end sidebar wrapper -->