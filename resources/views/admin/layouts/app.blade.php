@include('admin.layouts.particals.head')

<body>

    <!-- page-wrapper Start-->
    <div class="page-wrapper">

        <!-- Page Header Start-->
        @include('admin.layouts.header')
        <!-- Page Header Ends -->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">

            <!-- Page Sidebar Start-->
            @include('admin.layouts.menu')
            <!-- Page Sidebar Ends-->


            <!-- Main section -->
            @section('main')

            @show
        </div>
            <!-- footer -->
            @include('admin.layouts.footer')
        </div>

    </div>

    <!--  All script  -->
    @include('admin.layouts.particals.script')
</body>

<form id="logout-form" method="POST" action="{{ route('logout') }}">
@csrf
</form>
</html>
