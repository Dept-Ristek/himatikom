<!doctype html>
<html lang="en">

<head>
    @include('layouts.partials._header-app')
</head>

<body>
    <style>
        .element {
            cursor: pointer;
            /* Mengubah cursor menjadi pointer saat mouse berada di atas elemen */
            transition: transform 0.2s;
            /* Efek transisi untuk animasi */
        }
        .element:active {
            transform: scale(0.95);
            /* Efek klik, mengurangi ukuran sedikit ketika elemen diklik */
        }
    </style>

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
