<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
    @include('layouts.partials._header-guest')
</head>

<body class="about-us bg-gray-200">
    <style>
        .hovered-effect {
            transition: .3s;
        }

        .hovered-effect:hover {
            transform: scale(1.1);
        }

        .styled-table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        .styled-table thead tr {
            background-color: #0B2F9F;
            color: #ffffff;
            text-align: left;
        }

        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
        }

        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #0B2F9F;
        }

        .icon-circle {
            width: 40px;
            height: 40px;
            background-color: #007bff;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 18px;
            flex-shrink: 0;
        }

        .d-block {
            margin-top: 2px;
        }

        .form-label {
            margin-bottom: 0;
        }

        a {
            padding-left: 0;
            text-decoration: none;
        }
    </style>

    <!-- Tampilkan navbar hanya jika halaman bukan halaman detail -->
    @if (!Request::is('detail/*'))
        @include('layouts.partials._navbar-guest')
    @endif

    @yield('content')

    @include('layouts.partials._footer-guest')
    @include('layouts.partials._script-guest')
</body>

</html>
