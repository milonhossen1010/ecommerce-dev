<!DOCTYPE html>
<html lang="en">


<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Multikart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Multikart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('/') }}admin/assets/images/dashboard/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('/') }}admin/assets/images/dashboard/favicon.png" type="image/x-icon">
    <title>Time Card Login</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}admin/assets/css/fontawesome.css">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}admin/assets/css/themify.css">

    <!-- slick icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}admin/assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}admin/assets/css/slick-theme.css">

    <!-- jsgrid css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}admin/assets/css/jsgrid.css">

    <!-- Toastr css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}admin/assets/css/toastr.min.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}admin/assets/css/bootstrap.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}admin/assets/css/admin.css">

</head>

<body>

    <!-- page-wrapper Start-->
    <div class="page-wrapper">
        <div class="authentication-box">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 p-0 card-left">
                        <div class="card bg-primary">
                            <div class="svg-icon">
                   <svg style="width: 100%" id="a5c16198-98a1-478b-8909-43624583dcf2" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="793" height="551.73152" viewBox="0 0 793 551.73152"><ellipse cx="158" cy="539.73152" rx="158" ry="12" fill="#e6e6e6"/><path d="M324.27227,296.55377c27.49676-11.6953,61.74442-4.28528,95.19092.85757.31124-6.228,4.08385-13.80782.132-18.15284-4.80115-5.2788-4.35917-10.82529-1.47008-16.40375,7.38788-14.265-3.1969-29.44375-13.88428-42.0647a23.66937,23.66937,0,0,0-19.75537-8.29179l-19.7975,1.41411A23.70939,23.70939,0,0,0,343.635,230.85851v0c-4.72724,6.42917-7.25736,12.84055-5.66438,19.21854-7.08065,4.83882-8.27029,10.67977-5.08851,17.2644,2.698,4.14592,2.66928,8.18161-.12275,12.1056a55.89079,55.89079,0,0,0-8.31011,16.5061Z" transform="translate(-203.5 -174.13424)" fill="#2f2e41"/><path d="M977.70889,651.09727H417.29111A18.79111,18.79111,0,0,1,398.5,632.30616h0q304.727-35.41512,598,0h0A18.79111,18.79111,0,0,1,977.70889,651.09727Z" transform="translate(-203.5 -174.13424)" fill="#2f2e41"/><path d="M996.5,633.41151l-598-1.10536,69.30611-116.61553.3316-.55268V258.13057a23.7522,23.7522,0,0,1,23.75418-23.75418H899.792a23.7522,23.7522,0,0,1,23.75418,23.75418V516.90649Z" transform="translate(-203.5 -174.13424)" fill="#3f3d56"/><path d="M491.35028,250.95679a7.74623,7.74623,0,0,0-7.73753,7.73753V493.03073a7.74657,7.74657,0,0,0,7.73753,7.73752H903.64972a7.74691,7.74691,0,0,0,7.73753-7.73752V258.69432a7.74657,7.74657,0,0,0-7.73753-7.73753Z" transform="translate(-203.5 -174.13424)" fill="#fff"/><path d="M493.07794,531.71835a3.32522,3.32522,0,0,0-3.01275,1.93006l-21.35537,46.42514a3.31594,3.31594,0,0,0,3.01221,4.7021H920.81411a3.3157,3.3157,0,0,0,2.96526-4.79925L900.5668,533.55126a3.29926,3.29926,0,0,0-2.96526-1.83291Z" transform="translate(-203.5 -174.13424)" fill="#2f2e41"/><circle cx="492.34196" cy="67.97967" r="4.97412" fill="#fff"/><path d="M651.69986,593.61853a3.32114,3.32114,0,0,0-3.20165,2.4536l-5.35679,19.89649a3.31576,3.31576,0,0,0,3.20166,4.17856h101.874a3.31531,3.31531,0,0,0,3.13257-4.40093l-6.88691-19.89649a3.31784,3.31784,0,0,0-3.13366-2.23123Z" transform="translate(-203.5 -174.13424)" fill="#2f2e41"/><polygon points="720.046 337.135 720.046 341.556 264.306 341.556 264.649 341.004 264.649 337.135 720.046 337.135" fill="#2f2e41"/><circle cx="707.33457" cy="77.37523" r="77.37523" fill="#e9e9e9"/><path d="M942.89,285.223H878.77911a4.42582,4.42582,0,0,1-4.42144-4.42145V242.11391a4.42616,4.42616,0,0,1,4.42144-4.42144H942.89a4.42616,4.42616,0,0,1,4.42144,4.42144v38.68761A4.42582,4.42582,0,0,1,942.89,285.223Zm-64.11091-43.10906v38.68761h64.11415L942.89,242.11391Z" transform="translate(-203.5 -174.13424)" fill="#fff"/><path d="M930.73105,242.11391h-39.793V224.42814c0-12.80987,8.36792-22.10721,19.89649-22.10721s19.89648,9.29734,19.89648,22.10721Zm-35.37153-4.42144h30.95009V224.42814c0-10.413-6.36338-17.68576-15.475-17.68576s-15.47505,7.27281-15.47505,17.68576Z" transform="translate(-203.5 -174.13424)" fill="#fff"/><circle cx="707.33457" cy="86.21811" r="4.42144" fill="#fff"/><path d="M856.81994,421.28372H538.18006a5.90767,5.90767,0,0,1-5.90073-5.90073V336.342a5.90767,5.90767,0,0,1,5.90073-5.90072H856.81994a5.90767,5.90767,0,0,1,5.90073,5.90072V415.383A5.90767,5.90767,0,0,1,856.81994,421.28372Zm-318.63988-88.4821a3.5443,3.5443,0,0,0-3.54043,3.54043V415.383a3.54431,3.54431,0,0,0,3.54043,3.54044H856.81994a3.54431,3.54431,0,0,0,3.54043-3.54044V336.342a3.5443,3.5443,0,0,0-3.54043-3.54043Z" transform="translate(-203.5 -174.13424)" fill="#e6e6e6"/><circle cx="384.19021" cy="198.69546" r="24.03645" fill="#e6e6e6"/><path d="M643.203,356.80541a4.00608,4.00608,0,1,0,0,8.01215H832.06074a4.00607,4.00607,0,0,0,0-8.01215Z" transform="translate(-203.5 -174.13424)" fill="#e6e6e6"/><path d="M643.203,380.84186a4.00607,4.00607,0,1,0,0,8.01214H724.469a4.00607,4.00607,0,1,0,0-8.01214Z" transform="translate(-203.5 -174.13424)" fill="#e6e6e6"/><path d="M467.022,382.46241,408.1189,413.778l-.74561-26.09629c19.22553-3.20948,37.51669-8.7974,54.42941-17.8946l6.1605-15.22008a10.31753,10.31753,0,0,1,17.53643-2.67788l0,0a10.31753,10.31753,0,0,1-.90847,14.06885Z" transform="translate(-203.5 -174.13424)" fill="#ffb8b8"/><path d="M323.09819,563.26707v0a11.57378,11.57378,0,0,1,1.46928-9.36311l12.93931-19.85777a22.61221,22.61221,0,0,1,29.335-7.73927h0c-5.438,9.25647-4.67994,17.37679,1.87806,24.43365a117.63085,117.63085,0,0,0-27.93606,19.04492A11.57386,11.57386,0,0,1,323.09819,563.26707Z" transform="translate(-203.5 -174.13424)" fill="#2f2e41"/><path d="M469.70475,537.30274l0,0a22.20314,22.20314,0,0,1-18.87085,10.77909l-85.96027.65122-3.728-21.62264,38.026-11.18413-32.06116-24.60507L402.154,450.31277l63.65,59.32431A22.20317,22.20317,0,0,1,469.70475,537.30274Z" transform="translate(-203.5 -174.13424)" fill="#2f2e41"/><path d="M351.45266,685.17939H331.32124c-18.07509-123.89772-36.47383-248.14186,17.8946-294.51529l64.12231,10.43852L405.13646,455.532l-35.7892,41.00845Z" transform="translate(-203.5 -174.13424)" fill="#2f2e41"/><path d="M369.14917,713.24594h0a11.57381,11.57381,0,0,1-9.3632-1.46873l-21.85854-2.93814a22.61221,22.61221,0,0,1-7.741-29.33451v0c9.2568,5.43749,17.37707,4.67891,24.43354-1.8795,4.98593,10.06738,13.20093,9.45331,21.04657,17.93494A11.57385,11.57385,0,0,1,369.14917,713.24594Z" transform="translate(-203.5 -174.13424)" fill="#2f2e41"/><path d="M399.1716,307.90158l-37.28042-8.94731c6.19168-12.6739,6.70155-26.77618,3.728-41.75406l25.35068-.74561C391.76421,275.08,394.16732,292.48081,399.1716,307.90158Z" transform="translate(-203.5 -174.13424)" fill="#ffb8b8"/><path d="M409.41752,423.55243c-27.13873,18.49308-46.31418.63272-60.94729-26.92346,2.03338-16.86188-1.259-37.04061-7.35672-58.96635a40.13762,40.13762,0,0,1,24.50567-48.40124h0l32.06116,13.421c27.22362,22.19038,32.582,46.227,22.36825,71.5784Z" transform="translate(-203.5 -174.13424)" fill="#e9e9e9"/><path d="M331.32124,326.54178,301.4969,342.19956l52.9382,31.31555,7.366,18.16951a9.63673,9.63673,0,0,1-5.78925,12.73088h0a9.63673,9.63673,0,0,1-12.76159-8.54442l-.74489-12.66307-67.2838-22.20366a15.73306,15.73306,0,0,1-9.87265-9.61147v0a15.733,15.733,0,0,1,5.90262-18.30258l54.10485-37.11845Z" transform="translate(-203.5 -174.13424)" fill="#ffb8b8"/><path d="M361.14557,329.52422c-12.43861-5.4511-23.74934.47044-38.026,5.21926l-2.23683-39.51725c14.17612-7.55568,27.69209-9.59281,40.26285-3.728Z" transform="translate(-203.5 -174.13424)" fill="#e9e9e9"/><circle cx="172.52496" cy="78.09251" r="23.80211" fill="#ffb8b8"/><path d="M404.5,249.22353c-23.56616,2.30811-41.52338-1.54606-53-12.52007v-8.8377h51Z" transform="translate(-203.5 -174.13424)" fill="#2f2e41"/></svg>
                            </div>

                            <div class="single-item">
                                <div>
                                    <div>
                                        <h3>Welcome to ClockWix</h3>
                                        <p>ClockWix makes it easier to for employees enter and submit their hours.</p>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 p-0 card-right">
                        <div class="card tab2-card">
                            <div class="card-body">
                                <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="top-profile-tab" data-toggle="tab"
                                            href="#top-profile" role="tab" aria-controls="top-profile"
                                            aria-selected="true"><span class="mr-2"><i class="fa fa-user-o"
                                                    aria-hidden="true"></i></span>Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-top-tab" data-toggle="tab" href="#top-contact"
                                            role="tab" aria-controls="top-contact" aria-selected="false"><span
                                                class="mr-2"><i class="fa fa-unlock-alt"
                                                    aria-hidden="true"></i></span>Register</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="top-tabContent">
                                    <div class="tab-pane fade show active" id="top-profile" role="tabpanel"
                                        aria-labelledby="top-profile-tab">
                                        <form action="{{ route('login') }}" method="POST"
                                            class="form-horizontal auth-form">
                                            @csrf
                                            <div class="form-group">
                                                <input value="{{ old('email') }}" required="" name="email" type="email" class="form-control"
                                                    placeholder="Email" id="exampleInputEmail1">
                                            </div>
                                            <div class="form-group">
                                                <input required="" name="password" type="password" class="form-control"
                                                    placeholder="Password">
                                            </div>
                                            <div class="form-terms">
                                            <div class="custom-control custom-checkbox mr-sm-2">
                                                <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                                <label class="custom-control-label" for="customControlAutosizing">Remember me</label>

                                                <a href="{{ route('password.request') }}" class="btn btn-default forgot-pass">lost your password</a>

                                            </div>
                                        </div>
                                            <div class="form-button">
                                                <button class="btn btn-primary" type="submit">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="top-contact" role="tabpanel"
                                        aria-labelledby="contact-top-tab">
                                        <form action="{{ route('register') }}" method="POST"
                                            class="form-horizontal auth-form">
                                            @csrf

                                            <div class="form-group">
                                                <input value="{{ old('name') }}" required="" name="name" type="text" class="form-control"
                                                    placeholder="First Name" >
                                            </div>

                                            <div class="form-group">
                                                <input value="{{ old('email') }}" required="" name="email" type="email" class="form-control"
                                                    placeholder="Email" id="exampleInputEmail12">
                                            </div>
                                            <div class="form-group">
                                                <input required="" name="password" type="password" class="form-control"
                                                    placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <input required="" name="password_confirmation" type="password"
                                                    class="form-control" placeholder="Confirm Password">
                                            </div>
                                            <div class="form-terms">
                                                <div class="custom-control custom-checkbox mr-sm-2">
                                                    <input required="" type="checkbox" class="custom-control-input"
                                                        id="customControlAutosizing1">
                                                    <label class="custom-control-label"
                                                        for="customControlAutosizing1"><span>I agree all statements in
                                                            <a href="#" class="pull-right">Terms &amp;
                                                                Conditions</a></span></label>
                                                </div>
                                            </div>
                                            <div class="form-button">
                                                <button class="btn btn-primary" type="submit">Register</button>
                                            </div>
                                           
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
         
            </div>
        </div>
    </div>

    <!-- latest jquery-->
    <script src="{{ asset('/') }}admin/assets/js/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('/') }}admin/assets/js/popper.min.js"></script>
    <script src="{{ asset('/') }}admin/assets/js/bootstrap.js"></script>

    <!-- feather icon js-->
    <script src="{{ asset('/') }}admin/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="{{ asset('/') }}admin/assets/js/icons/feather-icon/feather-icon.js"></script>

    <!-- Sidebar jquery-->
    <script src="{{ asset('/') }}admin/assets/js/sidebar-menu.js"></script>
    <script src="{{ asset('/') }}admin/assets/js/slick.js"></script>

    <!-- Jsgrid js-->
    <script src="{{ asset('/') }}admin/assets/js/jsgrid/jsgrid.min.js"></script>
    <script src="{{ asset('/') }}admin/assets/js/jsgrid/griddata-invoice.js"></script>
    <script src="{{ asset('/') }}admin/assets/js/jsgrid/jsgrid-invoice.js"></script>

    <!-- lazyload js-->
    <script src="{{ asset('/') }}admin/assets/js/lazysizes.min.js"></script>

    <!--right sidebar js-->
    <script src="{{ asset('/') }}admin/assets/js/chat-menu.js"></script>

    <!--script admin-->
    <script src="{{ asset('/') }}admin/assets/js/admin-script.js"></script>

    <!-- Toastr js-->
    <script src="{{ asset('/') }}admin/assets/js/toastr.min.js"></script>
    @include('validate')
    <script>
        $('.single-item').slick({
            arrows: false,
            dots: true
        });

    </script>

</body>


</html>