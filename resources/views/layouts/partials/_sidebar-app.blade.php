<!-- Sidebar wrapper start -->
<aside class="sidebar-wrapper">

    <!-- Sidebar brand starts -->
    <div class="sidebar-brand">
        <a
            href="index.html"
            class="logo"
        >
            <img
                src="{{ asset('icon/logo-himpunan.png') }}"
                alt="HIMATIKOM POLSUB"
            />
        </a>
    </div>
    <!-- Sidebar brand starts -->

    <!-- Sidebar menu starts -->
    <div class="sidebar-menu">
        <div class="sidebarMenuScroll">
            <ul>
                @foreach ($sidebar_menus as $sidebar_menu)
                @if(isset($sidebar_menu['children']) && $sidebar_menu['children'])
                <li class="sidebar-dropdown {{ in_array($sidebar_menu['slug_name'], array_slice(explode('/', request()->url()), 3)) ? 'active' : '' }}">
                    <a href="#">
                        {!! $sidebar_menu['icon'] !!}
                        <span class="menu-text {{ in_array($sidebar_menu['slug_name'], array_slice(explode('/', request()->url()), 3)) ? 'text-primary' : '' }}">
                            {{ $sidebar_menu['name'] }}
                        </span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            @foreach ($sidebar_menu['children'] as $sidebar_children)
                            <li>
                                <a class="{{ in_array($sidebar_children['slug_name'], array_slice(explode('/', request()->url()), 3)) ? 'text-primary' : '' }}" href="{{ route($sidebar_children['url']) }}">
                                    {{ $sidebar_children['name'] }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </li>
                @else
                <li class="{{ in_array($sidebar_menu['slug_name'], array_slice(explode('/', request()->url()), 3)) ? 'active' : '' }}">
                    <a href="{{ route($sidebar_menu['url']) }}">
                        {!! $sidebar_menu['icon'] !!}
                        <span class="menu-text {{ in_array($sidebar_menu['slug_name'], array_slice(explode('/', request()->url()), 3)) ? 'text-primary' : '' }}">
                            {{ $sidebar_menu['name'] }}
                        </span>
                    </a>
                </li>
                @endif
                @endforeach
                <li>
                    <a onclick="handleLogout()">
                        <i class="bi bi-box-arrow-right"></i>
                        <span class="menu-text">Logout</span>
                    </a>
                </li>
            </ul>
            
        </div>
    </div>
    <!-- Sidebar menu ends -->

</aside>
<!-- Sidebar wrapper end -->
