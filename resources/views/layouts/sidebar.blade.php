<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Light Logo-->
        <a href="index" class="logo logo-light">
            <span class="logo-lg">
                <img src="{{ URL::asset('build/images/logo-light.svg') }}" alt="" height="30">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>
@php 
$pageName = \Request::route()->getName();
@endphp
    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link menu-link {{$pageName == "dashboard" ? 'active' : ''}}" href="{{route('dashboard')}}">
                        <i class="las la-tachometer-alt"></i> <span>Dashboard
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#">
                        <i class="las la-store"></i> <span>Store
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#">
                        <i class="las la-users"></i> <span>Users
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link {{$pageName == "profile.index" ? 'active' : ''}}" href="{{route('profile.index')}}">
                        <i class="las la-user"></i> <span>Admin Profile
                        </span>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link menu-link collapse" href="#" data-bs-toggle="collapse" data-bs-target="#city_guide" aria-expanded="false" aria-controls="customization">
                    <i class="las la-map-marked"></i> <span>City Guide
                        </span>
                    </a>
                    <div class="menu-dropdown collapse" id="city_guide" style="">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link">Carte interactive</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Local Services</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Points of Interest:</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Transportation options:</a>
                            </li>
                        </ul>
                    </div>
                </li> --}}
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
