<div class="aside-body" data-simplebar data-simplebar-direction="ltr">
    <!-- BEGIN Menu -->
    <div class="menu">
        <div class="menu-item">
            <a href="{{ route('restaurant-admin.index') }}" data-menu-path="/index.html" class="menu-item-link">
                <div class="menu-item-icon">
                    <i class="fa fa-desktop"></i>
                </div>
                <span class="menu-item-text">Dashboard</span>

            </a>
        </div>
        @hasanyrole('nadil-admin')
        <div class="menu-item">
            <a href="{{ route('restaurant-admin.reports.index') }}" data-menu-path="/index.html" class="menu-item-link">
                <div class="menu-item-icon">
                    <i class="fa fa-chart-pie"></i>
                </div>
                <span class="menu-item-text">Reports</span>

            </a>
        </div>
        @endhasanyrole
        @hasanyrole('restaurant-super-admin')
        <div class="menu-item">
            <button class="menu-item-link menu-item-toggle">
                <div class="menu-item-icon">
                    <i class="fa fa-users"></i>
                </div>
                <span class="menu-item-text">Users</span>
                <div class="menu-item-addon">
                    <i class="menu-item-caret caret"></i>
                </div>
            </button>
            <!-- BEGIN Menu Submenu -->
            <div class="menu-submenu">

                <div class="menu-item">
                    <a href="{{ route('restaurant-admin.users.roles', ['role' => 4]) }}"
                        data-menu-path="/elements/base/badge.html" class="menu-item-link">
                        <i class="menu-item-bullet"></i>
                        <span class="menu-item-text">Rest. Super Admin</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{ route('restaurant-admin.users.roles', ['role' => 5]) }}"
                        data-menu-path="/elements/base/breadcrumb.html" class="menu-item-link">
                        <i class="menu-item-bullet"></i>
                        <span class="menu-item-text">Rest. Admin</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{ route('restaurant-admin.users.roles', ['role' => 6]) }}"
                        data-menu-path="/elements/base/button.html" class="menu-item-link">
                        <i class="menu-item-bullet"></i>
                        <span class="menu-item-text">Rest. Host</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{ route('restaurant-admin.users.roles', ['role' => 7]) }}"
                        data-menu-path="/elements/base/button-group.html" class="menu-item-link">
                        <i class="menu-item-bullet"></i>
                        <span class="menu-item-text">Rest. Manager</span>
                    </a>
                </div>


            </div>
            <!-- END Menu Submenu -->
        </div>
        @endhasanyrole
        @hasanyrole('restaurant-super-admin|restaurant-manager|restaurant-host')
        <div class="menu-item">
            <a href="{{ route('restaurant-admin.bookings') }}" data-menu-path="/index.html" class="menu-item-link">
                <div class="menu-item-icon">
                    <i class="fa fa-desktop"></i>
                </div>
                <span class="menu-item-text">Bookings</span>

            </a>
        </div>
        @endhasanyrole
        @hasanyrole('restaurant-super-admin|restaurant-admin')
        <div class="menu-item">
            <button class="menu-item-link menu-item-toggle">
                <div class="menu-item-icon">
                    <i class="fa fa-shop"></i>
                </div>
                <span class="menu-item-text">Restaurants</span>
                <div class="menu-item-addon">
                    <i class="menu-item-caret caret"></i>
                </div>
            </button>
            <!-- BEGIN Menu Submenu -->
            <div class="menu-submenu">
                <div class="menu-item">
                    <a href="{{ route('restaurant-admin.restaurants.index') }}"
                        data-menu-path="/elements/advanced/avatar.html" class="menu-item-link">
                        <i class="menu-item-bullet"></i>
                        <span class="menu-item-text">Branches</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{ route('restaurant-admin.schedules.index') }}"
                        data-menu-path="/elements/advanced/block-ui.html" class="menu-item-link">
                        <i class="menu-item-bullet"></i>
                        <span class="menu-item-text">Schedules</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{ route('restaurant-admin.menus.index') }}"
                        data-menu-path="/elements/advanced/block-ui.html" class="menu-item-link">
                        <i class="menu-item-bullet"></i>
                        <span class="menu-item-text">Menus</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{ route('restaurant-admin.tables.index') }}"
                        data-menu-path="/elements/advanced/block-ui.html" class="menu-item-link">
                        <i class="menu-item-bullet"></i>
                        <span class="menu-item-text">Tables</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{ route('restaurant-admin.dishes-new.index') }}"
                        data-menu-path="/elements/advanced/block-ui.html" class="menu-item-link">
                        <i class="menu-item-bullet"></i>
                        <span class="menu-item-text">Dishes</span>
                    </a>
                </div>

                {{-- <div class="menu-item">
                    <a href="{{ route('restaurant-admin.dishes-new.index') }}"
                        data-menu-path="/elements/advanced/chat.html" class="menu-item-link">
                        <i class="menu-item-bullet"></i>
                        <span class="menu-item-text">Dishes</span>
                    </a>
                </div> --}}



            </div>
            <!-- END Menu Submenu -->
        </div>
        @endhasanyrole
        
        @if (session('impersonated_by'))
            <div class="menu-item">
                <a href="{{ route('users.leave-impersonate') }}" data-menu-path="/index.html" class="menu-item-link">
                    <div class="menu-item-icon">
                        <i class="fa fa-sign-out"></i>
                    </div>
                    <span class="menu-item-text">End Impersonation</span>
                </a>
            </div>
        @endif
    </div>
    <!-- END Menu -->
</div>
