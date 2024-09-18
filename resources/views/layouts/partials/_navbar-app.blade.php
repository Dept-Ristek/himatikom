<!-- Page header starts -->
<nav class="page-header">

    <div
        class="toggle-sidebar"
        id="toggle-sidebar"
    ><i class="bi bi-list"></i></div>

    <x-breadcrumb />

    <!-- Header actions ccontainer start -->
    <div class="header-actions-container">

        <!-- Header actions start -->
        <ul class="header-actions">
            <li class="dropdown">
                <a
                    href="#"
                    id="userSettings"
                    class="user-settings"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                >
                    <span class="user-name d-none d-md-block">{{ auth()->user()->name }}</span>
                    <span class="avatar">
                        <img
                            src="{{ auth()->user()->photo ? asset('storage/' . auth()->user()->photo) : asset('icon/default.png') }}"
                            alt="Profile"
                        >
                        <span class="status online"></span>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userSettings">

                    <div class="header-profile-actions">
                        <a href="{{ route('profile') }}">Profile</a>
                        <a onclick="handleLogout()">Logout</a>
                    </div>
                </div>
            </li>
        </ul>
        <!-- Header actions end -->

    </div>
    <!-- Header actions ccontainer end -->

</nav>
<!-- Page header ends -->
