@php
	$route = Route::current()->getName();
	$prefix = Request::route()->getPrefix();
    $uer_id = Auth::user()->id;
    $user = App\Models\User::find($uer_id);
    $logo = App\Models\Setting::find(1);

@endphp
<div class="page-sidebar">
    <div class="main-header-left d-none d-lg-block">
        <div class="logo-wrapper">
            <a href="{{ asset('/') }}">
                <img style="width: 100%; max-height:60px" class="blur-up lazyloaded" src="{{ asset('/') }}media/images/{{ $logo -> logo }}" alt="">
            </a>
        </div>
    </div>
    <div class="sidebar custom-scrollbar">
        <div class="sidebar-user text-center">
            <div>
                <img class="img-60 img-size-fix rounded-circle lazyloaded blur-up"
                    src="{{ asset('/') }}media/images/users/{{ $user -> image }}" alt="#">
            </div>
            <h6 class="mt-3 f-14">{{ Auth::user()->name }}</h6>

        </div>

        <ul class="sidebar-menu">
            {{-- <li class="">
                <a class="sidebar-header active" href="{{ route('dashboard') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"> <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path> <polyline points="9 22 9 12 15 12 15 22"></polyline> </svg><span>Dashboard</span>
                </a>
            </li> --}}
            <li class="">
                <a class="sidebar-header " href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"> <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path> <polyline points="9 22 9 12 15 12 15 22"></polyline> </svg><span>Timesheets<i class="fa fa-angle-right pull-right"></i></span>
                </a>
                <ul class="sidebar-submenu">

                    <li class="">
                        <a class="" href="{{ route('timecard.index') }}"><i class="fa fa-circle"></i>
                            <span>All Timesheets</span>
                        </a>
                    </li> 

                    <li class="">
                        <a class="" href="{{ route('homepage') }}"><i class="fa fa-circle"></i>
                            <span>Add New</span>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="{{ ($route=='user.all')? 'active' :'' }}">
                <a class="sidebar-header" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg><span>Users</span><i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="sidebar-submenu" style="display: none;">

                    <?php if (Auth::user()->role=='administrator') { ?>
                        <li class="{{ ($route=='user.all')? 'active' :'' }}">
                            <a class="{{ ($route=='user.all')? 'active' :'' }}" href="{{ route("user.all") }}"><i class="fa fa-circle"></i>
                                <span>All Users</span>
                            </a>
                        </li> 
                   <?php }?>
                   <li class="">
                    <a class="" href="{{ route('profile.index') }}"><i class="fa fa-circle"></i>
                        <span>Profile</span>
                    </a>
                </li> 
                   
               

                </ul>
            </li> 

            <?php if (Auth::user()->role=='administrator') { ?>
            <li class="">
                <a class="sidebar-header " href="#">
                    <i data-feather="settings"></i><span>Setting<i class="fa fa-angle-right pull-right"></i></span>
                </a>
                <ul class="sidebar-submenu">

                    <li class="">
                        <a class="" href="{{ route('setting.index') }}"><i class="fa fa-circle"></i>
                            <span>Logo</span>
                        </a>
                    </li> 

                    {{-- <li class="">
                        <a class="" href="{{ route('homepage') }}"><i class="fa fa-circle"></i>
                            <span>Add New</span>
                        </a>
                    </li> --}}

                </ul>
            </li>
            <?php }?>
     
            <li><a class="sidebar-header logout-btn" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-in">
                        <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                        <polyline points="10 17 15 12 10 7"></polyline>
                        <line x1="15" y1="12" x2="3" y2="12"></line>
                    </svg><span>Log Out</span></a>
            </li>
        </ul>
    </div>
</div>


<div class="page-body">


    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>@yield('title')</h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg></a></li>
                        <li class="breadcrumb-item">
                            @if ($prefix==true)
                            {{ Str::ucfirst(substr($prefix, 1)) }}
                            @else
                            {{ 'Dashboard' }}
                            @endif
                        </li>
                        <li class="breadcrumb-item active">@yield('title')</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
