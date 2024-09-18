<!doctype html>
<html lang="en">

<head>
    @include('layouts.partials._header-app')
</head>

<body>

    @include('layouts.partials._loader-app')

    <!-- Page wrapper start -->
    <div class="page-wrapper">

        <x-sidebar-app />

        <!-- *************
				************ Main container start *************
			************* -->
        <div class="main-container">

            @include('layouts.partials._navbar-app')

            <!-- Content wrapper scroll start -->
            <div class="content-wrapper-scroll">

                @yield('content')

                @include('layouts.partials._footer-app')

            </div>
            <!-- Content wrapper scroll end -->

        </div>
        <!-- *************
				************ Main container end *************
			************* -->

    </div>
    <!-- Page wrapper end -->

    @include('layouts.partials._script-app')

    @yield('script')
</body>
</html>
