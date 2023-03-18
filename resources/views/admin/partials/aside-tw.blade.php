<div class="aside-body" data-simplebar data-simplebar-direction="ltr">
    <!-- BEGIN Menu -->
    <div class="menu">
        <div class="menu-item">
            <a href="{{ route('admin.index') }}" data-menu-path="/index.html" class="menu-item-link">
                <div class="menu-item-icon">
                    <i class="fa fa-desktop"></i>
                </div>
                <span class="menu-item-text">Dashboard</span>
                
            </a>
        </div>
        <div class="menu-item">
            <a href="{{ route('admin.reports.index') }}" data-menu-path="/index.html" class="menu-item-link">
                <div class="menu-item-icon">
                    <i class="fa fa-chart-pie"></i>
                </div>
                <span class="menu-item-text">Reports</span>
                
            </a>
        </div>
        
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
                    <a href="{{route('admin.users.roles',['id' => 2])}}" data-menu-path="/elements/base/accordion.html" class="menu-item-link">
                        <i class="menu-item-bullet"></i>
                        <span class="menu-item-text">Nadil Admin</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{route('admin.users.roles',['id' => 3])}}" data-menu-path="/elements/base/alert.html" class="menu-item-link">
                        <i class="menu-item-bullet"></i>
                        <span class="menu-item-text">Nadil Support</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{route('admin.users.roles',['id' => 4])}}" data-menu-path="/elements/base/badge.html" class="menu-item-link">
                        <i class="menu-item-bullet"></i>
                        <span class="menu-item-text">Rest. Super Admin</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{route('admin.users.roles',['id' => 5])}}" data-menu-path="/elements/base/breadcrumb.html" class="menu-item-link">
                        <i class="menu-item-bullet"></i>
                        <span class="menu-item-text">Rest. Admin</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{route('admin.users.roles',['id' => 6])}}" data-menu-path="/elements/base/button.html" class="menu-item-link">
                        <i class="menu-item-bullet"></i>
                        <span class="menu-item-text">Rest. Host</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{route('admin.users.roles',['id' => 7])}}" data-menu-path="/elements/base/button-group.html" class="menu-item-link">
                        <i class="menu-item-bullet"></i>
                        <span class="menu-item-text">Rest. Manager</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{route('admin.users.roles',['id' => 8])}}" data-menu-path="/elements/base/card.html" class="menu-item-link">
                        <i class="menu-item-bullet"></i>
                        <span class="menu-item-text">User</span>
                    </a>
                </div>
                
            </div>
            <!-- END Menu Submenu -->
        </div>
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
                    <a href="{{route('admin.restaurants.index')}}" data-menu-path="/elements/advanced/avatar.html" class="menu-item-link">
                        <i class="menu-item-bullet"></i>
                        <span class="menu-item-text">Branches</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{route('admin.bookings.index')}}" data-menu-path="/elements/advanced/block-ui.html" class="menu-item-link">
                        <i class="menu-item-bullet"></i>
                        <span class="menu-item-text">Bookings</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{route('admin.cuisines.index')}}" data-menu-path="/elements/advanced/carousel.html" class="menu-item-link">
                        <i class="menu-item-bullet"></i>
                        <span class="menu-item-text">Cuisines</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{route('admin.dishes-new.index')}}" data-menu-path="/elements/advanced/chat.html" class="menu-item-link">
                        <i class="menu-item-bullet"></i>
                        <span class="menu-item-text">Dishes</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{route('admin.areas.index')}}" data-menu-path="/elements/advanced/context-menu.html" class="menu-item-link">
                        <i class="menu-item-bullet"></i>
                        <span class="menu-item-text">Areas</span>
                    </a>
                </div>
                
            </div>
            <!-- END Menu Submenu -->
        </div>
        <div class="menu-item">
            <button class="menu-item-link menu-item-toggle">
                <div class="menu-item-icon">
                    <i class="fa fa-shield"></i>
                </div>
                <span class="menu-item-text">Security</span>
                <div class="menu-item-addon">
                    <i class="menu-item-caret caret"></i>
                </div>
            </button>
            <!-- BEGIN Menu Submenu -->
            <div class="menu-submenu">
                <div class="menu-item">
                    <a href="{{route('admin.roles.index')}}" data-menu-path="/icons/fontawesome.html" class="menu-item-link">
                        <i class="menu-item-bullet"></i>
                        <span class="menu-item-text">Roles</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{route('admin.permissions.index')}}" data-menu-path="/icons/feather.html" class="menu-item-link">
                        <i class="menu-item-bullet"></i>
                        <span class="menu-item-text">Permissions</span>
                    </a>
                </div>
            </div>
            <!-- END Menu Submenu -->
        </div>
    </div>
    <!-- END Menu -->
</div>