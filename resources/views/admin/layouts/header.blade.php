@php
     $uer_id = Auth::user()->id;
    $user = App\Models\User::find($uer_id);
    $logo = App\Models\Setting::find(1);
@endphp

<div class="page-main-header">
    <div class="main-header-right row">
        <div class="main-header-left d-lg-none">
            <div class="logo-wrapper">
                <a href="{{ url('/')}}"><img style="width: 100%;" class="blur-up lazyloaded" src="{{ asset('/') }}media/images/{{ $logo->logo }}" alt=""></a>
            </div>
        </div>
        <div class="mobile-sidebar">
            <div class="media-body text-right switch-sm">
                <label class="switch"><a href="#"><i id="sidebar-toggle"
                            data-feather="align-left"></i></a></label>
            </div>
        </div>
        <div class="nav-right col">
            <ul class="nav-menus">
                
           
                <li><a style="opacity: 0" href="#"><i class="right_side_toggle" data-feather="message-square"></i><span
                            class="dot"></span></a></li>
                <li class="onhover-dropdown">
                    <div class="media align-items-center"><img
                            class="align-self-center pull-right img-size-fix img-50 rounded-circle blur-up lazyloaded"
                            src="{{ asset('/') }}media/images/users/{{ $user -> image }}" alt="header-user">
                        <div class="dotted-animation"><span class="animate-circle"></span><span
                                class="main-circle"></span></div>
                    </div>
                    <ul class="profile-dropdown onhover-show-div p-20 profile-dropdown-hover">
                        <li><a href="{{ route('profile.index') }}"><i data-feather="user"></i>Edit Profile</a></li>
                        <li><a href="{{ route('setting') }}"><i data-feather="settings"></i>Password</a></li>
                        <li><a href="#" class="logout-btn"><i data-feather="log-out"></i>Logout</a></li>
                    </ul>
                </li>
            </ul>
            <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
        </div>
    </div>
</div>