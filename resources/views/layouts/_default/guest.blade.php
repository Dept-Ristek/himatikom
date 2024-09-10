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

    </style>
    @include('layouts.partials._navbar-guest')

    @yield('content')

    @include('layouts.partials._footer-guest')
    @include('layouts.partials._script-guest')
</body>

</html>
