<!DOCTYPE html>
<html lang="en" dir="ltr" data-theme="light">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&amp;family=Roboto+Mono&amp;display=swap"
        rel="stylesheet">
    <link href="{{ asset('upmin/assets/build/styles/ltr-core.css') }}" rel="stylesheet">
    <link href="{{ asset('upmin/assets/build/styles/ltr-vendor.css') }}" rel="stylesheet">
    <link href="{{ asset('upmin/assets/images/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">
    <title>Dashboard | Upmin</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    @stack('styles')

    @livewireStyles
</head>

<body class="preload-active aside-active aside-mobile-minimized aside-desktop-maximized">
    <!-- BEGIN Preload -->
    <div class="preload">
        <div class="preload-dialog">
            <!-- BEGIN Spinner -->
            <div class="spinner-border text-primary preload-spinner"></div>
            <!-- END Spinner -->
        </div>
    </div>
    <!-- END Preload -->
    <!-- BEGIN Page Holder -->
    <div>
        <!-- BEGIN Aside -->
        <div class="aside">
            <div class="aside-header">
                <h3 class="aside-title">Nadil</h3>
                <div class="aside-addon">
                    <button class="btn btn-label-primary btn-icon btn-lg" data-toggle="aside">
                        <i class="fa fa-times aside-icon-minimize"></i>
                        <i class="fa fa-thumbtack aside-icon-maximize"></i>
                    </button>
                </div>
            </div>
            @include('restaurant-admin.partials.aside-tw')

        </div>
        <!-- END Aside -->
        <!-- BEGIN Page Wrapper -->
        <div class="wrapper ">
            <!-- BEGIN Header -->
            <div class="header">
                <!-- BEGIN Desktop Sticky Header -->
                <div class="sticky-header" id="sticky-header-desktop">
                    <!-- BEGIN Header Holder -->
                    <div class="header-holder header-holder-desktop">
                        <div class="header-container container-fluid g-5 justify-content-end">

                            <div class="header-wrap hstack gap-2">
                                <!-- BEGIN Dropdown -->
                                <div class="dropdown">
                                    <button class="btn btn-flat-primary btn-icon" data-bs-toggle="dropdown">
                                        <i class="far fa-bell"></i>
                                        <div class="btn-marker">
                                            <i class="marker marker-dot text-primary"></i>
                                        </div>
                                    </button>
                                    <div
                                        class="dropdown-menu dropdown-menu-end dropdown-menu-wide dropdown-menu-animated overflow-hidden py-0">
                                        <!-- BEGIN Portlet -->
                                        <div class="portlet border-0 portlet-scroll">
                                            <div class="portlet-header bg-info rounded-0">
                                                <div class="portlet-icon text-white">
                                                    <i class="far fa-bell"></i>
                                                </div>
                                                <h3 class="portlet-title text-white">Notification</h3>
                                                <div class="portlet-addon">
                                                    <span class="badge badge-label-light fs-6">9+</span>
                                                </div>
                                            </div>
                                            <div class="portlet-body p-0 rounded-0" data-toggle="simplebar">
                                                <!-- BEGIN Rich List -->
                                                <div class="rich-list rich-list-action">
                                                    <a href="#" class="rich-list-item">
                                                        <div class="rich-list-prepend">
                                                            <!-- BEGIN Avatar -->
                                                            <div class="avatar avatar-label-info">
                                                                <div class="avatar-display">
                                                                    <i class="fa fa-file-invoice"></i>
                                                                </div>
                                                            </div>
                                                            <!-- END Avatar -->
                                                        </div>
                                                        <div class="rich-list-content">
                                                            <h4 class="rich-list-title">New report has been received
                                                            </h4>
                                                            <span class="rich-list-subtitle">2 min ago</span>
                                                        </div>
                                                        <div class="rich-list-append">
                                                            <i class="caret mx-2"></i>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="rich-list-item">
                                                        <div class="rich-list-prepend">
                                                            <!-- BEGIN Avatar -->
                                                            <div class="avatar avatar-label-success">
                                                                <div class="avatar-display">
                                                                    <i class="fa fa-shopping-basket"></i>
                                                                </div>
                                                            </div>
                                                            <!-- END Avatar -->
                                                        </div>
                                                        <div class="rich-list-content">
                                                            <h4 class="rich-list-title">Last order was completed</h4>
                                                            <span class="rich-list-subtitle">1 hrs ago</span>
                                                        </div>
                                                        <div class="rich-list-append">
                                                            <i class="caret mx-2"></i>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="rich-list-item">
                                                        <div class="rich-list-prepend">
                                                            <!-- BEGIN Avatar -->
                                                            <div class="avatar avatar-label-danger">
                                                                <div class="avatar-display">
                                                                    <i class="fa fa-users"></i>
                                                                </div>
                                                            </div>
                                                            <!-- END Avatar -->
                                                        </div>
                                                        <div class="rich-list-content">
                                                            <h4 class="rich-list-title">Company meeting canceled</h4>
                                                            <span class="rich-list-subtitle">5 hrs ago</span>
                                                        </div>
                                                        <div class="rich-list-append">
                                                            <i class="caret mx-2"></i>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="rich-list-item">
                                                        <div class="rich-list-prepend">
                                                            <!-- BEGIN Avatar -->
                                                            <div class="avatar avatar-label-warning">
                                                                <div class="avatar-display">
                                                                    <i class="fa fa-paper-plane"></i>
                                                                </div>
                                                            </div>
                                                            <!-- END Avatar -->
                                                        </div>
                                                        <div class="rich-list-content">
                                                            <h4 class="rich-list-title">New feedback received</h4>
                                                            <span class="rich-list-subtitle">6 hrs ago</span>
                                                        </div>
                                                        <div class="rich-list-append">
                                                            <i class="caret mx-2"></i>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="rich-list-item">
                                                        <div class="rich-list-prepend">
                                                            <!-- BEGIN Avatar -->
                                                            <div class="avatar avatar-label-primary">
                                                                <div class="avatar-display">
                                                                    <i class="fa fa-download"></i>
                                                                </div>
                                                            </div>
                                                            <!-- END Avatar -->
                                                        </div>
                                                        <div class="rich-list-content">
                                                            <h4 class="rich-list-title">New update was availabled</h4>
                                                            <span class="rich-list-subtitle">1 day ago</span>
                                                        </div>
                                                        <div class="rich-list-append">
                                                            <i class="caret mx-2"></i>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="rich-list-item">
                                                        <div class="rich-list-prepend">
                                                            <!-- BEGIN Avatar -->
                                                            <div class="avatar avatar-label-success">
                                                                <div class="avatar-display">
                                                                    <i class="fa fa-asterisk"></i>
                                                                </div>
                                                            </div>
                                                            <!-- END Avatar -->
                                                        </div>
                                                        <div class="rich-list-content">
                                                            <h4 class="rich-list-title">Your password was changed</h4>
                                                            <span class="rich-list-subtitle">2 day ago</span>
                                                        </div>
                                                        <div class="rich-list-append">
                                                            <i class="caret mx-2"></i>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="rich-list-item">
                                                        <div class="rich-list-prepend">
                                                            <!-- BEGIN Avatar -->
                                                            <div class="avatar avatar-label-info">
                                                                <div class="avatar-display">
                                                                    <i class="fa fa-user-plus"></i>
                                                                </div>
                                                            </div>
                                                            <!-- END Avatar -->
                                                        </div>
                                                        <div class="rich-list-content">
                                                            <h4 class="rich-list-title">New account has been registered
                                                            </h4>
                                                            <span class="rich-list-subtitle">5 day ago</span>
                                                        </div>
                                                        <div class="rich-list-append">
                                                            <i class="caret mx-2"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- END Rich List -->
                                            </div>
                                        </div>
                                        <!-- END Portlet -->
                                    </div>
                                </div>
                                <!-- END Dropdown -->
                                <!-- BEGIN Dropdown -->
                                <div class="dropdown">
                                    <button class="btn btn-flat-primary btn-icon" data-bs-toggle="dropdown">
                                        <i class="far fa-comments"></i>
                                        <div class="btn-marker">
                                            <i class="marker marker-dot text-primary"></i>
                                        </div>
                                    </button>
                                    <div
                                        class="dropdown-menu dropdown-menu-end dropdown-menu-wide dropdown-menu-animated overflow-hidden py-0">
                                        <!-- BEGIN Portlet -->
                                        <div class="portlet portlet-scroll border-0">
                                            <div class="portlet-header portlet-header-bordered rounded-0">
                                                <!-- BEGIN Rich List Item -->
                                                <div class="rich-list-item w-100 p-0">
                                                    <div class="rich-list-prepend">
                                                        <!-- BEGIN Avatar -->
                                                        <div class="avatar avatar-circle">
                                                            <div class="avatar-display">
                                                                <img src="assets/images/avatar/blank.webp"
                                                                    alt="Avatar image">
                                                            </div>
                                                        </div>
                                                        <!-- END Avatar -->
                                                    </div>
                                                    <div class="rich-list-content">
                                                        <h3 class="rich-list-title">Garrett Winters</h3>
                                                        <span class="rich-list-subtitle">UX Designer</span>
                                                    </div>
                                                </div>
                                                <!-- END Rich List Item -->
                                            </div>
                                            <div class="portlet-body" data-toggle="simplebar">
                                                <!-- BEGIN Chat -->
                                                <div class="chat">
                                                    <div class="chat-item chat-item-start">
                                                        <div class="chat-content">
                                                            <p class="chat-bubble chat-bubble-primary">Lorem ipsum
                                                                dolor sit amet, consectetur adipisicing elit. Unde,
                                                                eius.</p>
                                                            <p class="chat-bubble chat-bubble-primary">Lorem ipsum
                                                                dolor sit amet, consectetur adipisicing elit. Unde,
                                                                eius.</p>
                                                            <span class="chat-time">2 min ago</span>
                                                        </div>
                                                    </div>
                                                    <div class="chat-item chat-item-end">
                                                        <div class="chat-content">
                                                            <p class="chat-bubble">Lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit. Unde, eius.</p>
                                                            <span class="chat-time">1 min ago</span>
                                                        </div>
                                                    </div>
                                                    <div class="chat-item chat-item-start">
                                                        <div class="chat-content">
                                                            <p class="chat-bubble chat-bubble-primary">Lorem ipsum
                                                                dolor sit amet, consectetur adipisicing elit. Unde,
                                                                eius.</p>
                                                            <span class="chat-time">2 min ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END Chat -->
                                            </div>
                                            <div class="portlet-footer portlet-footer-bordered rounded-0">
                                                <!-- BEGIN Input Group -->
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Type...">
                                                    <button class="btn btn-primary btn-icon">
                                                        <i class="fa fa-paper-plane"></i>
                                                    </button>
                                                </div>
                                                <!-- END Input Group -->
                                            </div>
                                        </div>
                                        <!-- END Portlet -->
                                    </div>
                                </div>
                                <!-- END Dropdown -->
                                <button class="btn btn-flat-primary btn-icon" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvas-settings">
                                    <i class="far fa-list-alt"></i>
                                </button>
                                <button class="btn btn-flat-primary btn-icon" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvas-todo">
                                    <i class="far fa-calendar-alt"></i>
                                </button>
                                <!-- BEGIN Dropdown -->
                                <div class="dropdown">
                                    <button class="btn btn-flat-primary widget13" data-bs-toggle="dropdown">
                                        <div class="widget13-text"> Hi @if (auth()->check())
                                                <strong>{{ auth()->user()->name }}</strong>
                                            @endif
                                        </div>
                                        <!-- BEGIN Avatar -->
                                        <div class="avatar avatar-info widget13-avatar">
                                            <div class="avatar-display">
                                                <i class="fa fa-user-alt"></i>
                                            </div>
                                        </div>
                                        <!-- END Avatar -->
                                    </button>
                                    <div
                                        class="dropdown-menu dropdown-menu-wide dropdown-menu-end dropdown-menu-animated overflow-hidden py-0">
                                        <!-- BEGIN Portlet -->
                                        <div class="portlet border-0">
                                            <div class="portlet-header bg-primary rounded-0">
                                                <!-- BEGIN Rich List Item -->
                                                <div class="rich-list-item w-100 p-0">
                                                    <div class="rich-list-prepend">
                                                        <!-- BEGIN Avatar -->
                                                        <div class="avatar avatar-label-light avatar-circle">
                                                            <div class="avatar-display">
                                                                <i class="fa fa-user-alt"></i>
                                                            </div>
                                                        </div>
                                                        <!-- END Avatar -->
                                                    </div>
                                                    <div class="rich-list-content">
                                                        <h3 class="rich-list-title text-white">
                                                            {{ auth()->user()->name }}</h3>
                                                        <span
                                                            class="rich-list-subtitle text-white">{{ auth()->user()->email }}</span>
                                                    </div>

                                                </div>
                                                <!-- END Rich List Item -->
                                            </div>

                                            <div class="portlet-footer portlet-footer-bordered rounded-0">
                                                <form action="{{ route('logout') }}" method="POST">
                                                    @csrf
                                                    <a href="#" class="btn btn-label-danger"
                                                        onclick="event.preventDefault();
                                              this.closest('form').submit();">
                                                        <i class="nav-icon fas fa-power-off"></i>
                                                        Log Out
                                                    </a>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- END Portlet -->
                                    </div>
                                </div>
                                <!-- END Dropdown -->
                            </div>
                        </div>
                    </div>
                    <!-- END Header Holder -->
                </div>
                <!-- END Desktop Sticky Header -->
                <!-- BEGIN Header Holder -->
                <div class="header-holder header-holder-desktop">
                    <div class="header-container container-fluid g-5">
                        <h4 class="header-title">Dashboard</h4>
                        <i class="header-divider"></i>
                        <div class="header-wrap header-wrap-block justify-content-start">
                            <!-- BEGIN Breadcrumb -->
                            <div class="breadcrumb breadcrumb-transparent mb-0">
                                <a href="index.html" class="breadcrumb-item">
                                    <div class="breadcrumb-icon">
                                        <i data-feather="home"></i>
                                    </div>
                                    <span class="breadcrumb-text">Dashboard</span>
                                </a>
                            </div>
                            <!-- END Breadcrumb -->
                        </div>
                        <div class="header-wrap">
                            <!-- BEGIN Button Group -->
                            <div class="btn-group me-2">
                                <input type="radio" class="btn-check" name="timeOption" id="timeOption1"
                                    autocomplete="off" checked>
                                <label class="btn btn-flat-primary" for="timeOption1">Today</label>
                                <input type="radio" class="btn-check" name="timeOption" id="timeOption2"
                                    autocomplete="off">
                                <label class="btn btn-flat-primary" for="timeOption2">Week</label>
                                <input type="radio" class="btn-check" name="timeOption" id="timeOption3"
                                    autocomplete="off">
                                <label class="btn btn-flat-primary" for="timeOption3">Month</label>
                            </div>
                            <!-- END Button Group -->
                            <button class="btn btn-label-info btn-icon" id="fullscreen-trigger"
                                data-bs-toggle="tooltip" title="Toggle fullscreen" data-bs-placement="left">
                                <i class="fa fa-expand fullscreen-icon-expand"></i>
                                <i class="fa fa-compress fullscreen-icon-compress"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- END Header Holder -->
                <!-- BEGIN Mobile Sticky Header -->
                <div class="sticky-header" id="sticky-header-mobile">
                    <!-- BEGIN Header Holder -->
                    <div class="header-holder header-holder-mobile">
                        <div class="header-container container-fluid g-5">
                            <div class="header-wrap">
                                <button class="btn btn-flat-primary btn-icon" data-toggle="aside">
                                    <i class="fa fa-bars"></i>
                                </button>
                            </div>
                            <div class="header-wrap header-wrap-block justify-content-start px-3">
                                <h4 class="header-brand">Upmin</h4>
                            </div>
                            <div class="header-wrap hstack gap-2">
                                <button class="btn btn-flat-primary btn-icon" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvas-todo">
                                    <i class="far fa-calendar-alt"></i>
                                </button>
                                <!-- BEGIN Dropdown -->
                                <div class="dropdown">
                                    <button class="btn btn-flat-primary widget13" data-bs-toggle="dropdown">
                                        <div class="widget13-text"> Hi <strong>User</strong>
                                        </div>
                                        <!-- BEGIN Avatar -->
                                        <div class="avatar avatar-info widget13-avatar">
                                            <div class="avatar-display">
                                                <i class="fa fa-user-alt"></i>
                                            </div>
                                        </div>
                                        <!-- END Avatar -->
                                    </button>
                                    <div
                                        class="dropdown-menu dropdown-menu-wide dropdown-menu-end dropdown-menu-animated overflow-hidden py-0">
                                        <!-- BEGIN Portlet -->
                                        <div class="portlet border-0">
                                            <div class="portlet-header bg-primary rounded-0">
                                                <!-- BEGIN Rich List Item -->
                                                <div class="rich-list-item w-100 p-0">
                                                    <div class="rich-list-prepend">
                                                        <!-- BEGIN Avatar -->
                                                        <div class="avatar avatar-label-light avatar-circle">
                                                            <div class="avatar-display">
                                                                <i class="fa fa-user-alt"></i>
                                                            </div>
                                                        </div>
                                                        <!-- END Avatar -->
                                                    </div>
                                                    <div class="rich-list-content">
                                                        <h3 class="rich-list-title text-white">Charlie Stone</h3>
                                                        <span
                                                            class="rich-list-subtitle text-white">admin@blueupcode.com</span>
                                                    </div>
                                                    <div class="rich-list-append">
                                                        <span class="badge badge-label-light fs-6">9+</span>
                                                    </div>
                                                </div>
                                                <!-- END Rich List Item -->
                                            </div>
                                            <div class="portlet-body p-0">
                                                <!-- BEGIN Grid Nav -->
                                                <div
                                                    class="grid-nav grid-nav-flush grid-nav-action grid-nav-no-rounded">
                                                    <div class="grid-nav-row">
                                                        <a href="#" class="grid-nav-item">
                                                            <div class="grid-nav-icon">
                                                                <i class="far fa-address-card"></i>
                                                            </div>
                                                            <span class="grid-nav-content">Profile</span>
                                                        </a>
                                                        <a href="#" class="grid-nav-item">
                                                            <div class="grid-nav-icon">
                                                                <i class="far fa-comments"></i>
                                                            </div>
                                                            <span class="grid-nav-content">Messages</span>
                                                        </a>
                                                        <a href="#" class="grid-nav-item">
                                                            <div class="grid-nav-icon">
                                                                <i class="far fa-clone"></i>
                                                            </div>
                                                            <span class="grid-nav-content">Activities</span>
                                                        </a>
                                                    </div>
                                                    <div class="grid-nav-row">
                                                        <a href="#" class="grid-nav-item">
                                                            <div class="grid-nav-icon">
                                                                <i class="far fa-calendar-check"></i>
                                                            </div>
                                                            <span class="grid-nav-content">Tasks</span>
                                                        </a>
                                                        <a href="#" class="grid-nav-item">
                                                            <div class="grid-nav-icon">
                                                                <i class="far fa-sticky-note"></i>
                                                            </div>
                                                            <span class="grid-nav-content">Notes</span>
                                                        </a>
                                                        <a href="#" class="grid-nav-item">
                                                            <div class="grid-nav-icon">
                                                                <i class="far fa-bell"></i>
                                                            </div>
                                                            <span class="grid-nav-content">Notification</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- END Grid Nav -->
                                            </div>
                                            <div class="portlet-footer portlet-footer-bordered rounded-0">
                                                <button class="btn btn-label-danger">Sign out</button>
                                            </div>
                                        </div>
                                        <!-- END Portlet -->
                                    </div>
                                </div>
                                <!-- END Dropdown -->
                            </div>
                        </div>
                    </div>
                    <!-- END Header Holder -->
                </div>
                <!-- END Mobile Sticky Header -->
                <!-- BEGIN Header Holder -->
                <div class="header-holder header-holder-mobile">
                    <div class="header-container container-fluid g-5">
                        <div class="header-wrap header-wrap-block justify-content-start w-100">
                            <!-- BEGIN Breadcrumb -->
                            <div class="breadcrumb breadcrumb-transparent mb-0">
                                <a href="index.html" class="breadcrumb-item">
                                    <div class="breadcrumb-icon">
                                        <i data-feather="home"></i>
                                    </div>
                                    <span class="breadcrumb-text">Dashboard</span>
                                </a>
                            </div>
                            <!-- END Breadcrumb -->
                        </div>
                    </div>
                </div>
                <!-- END Header Holder -->
            </div>
            <!-- END Header -->
            <!-- BEGIN Page Content -->
            <div class="">
                <div class="container-fluid g-5">
                    @yield('content')

                </div>
            </div>
            <!-- END Page Content -->
            <!-- BEGIN Footer -->
            <div class="footer">
                <div class="container-fluid g-5">
                    <div class="row g-3">
                        <div class="col-sm-6 text-center text-sm-start">
                            <p class="mb-0"><i class="far fa-copyright"></i> <span id="copyright-year"></span>
                                Upmin. All rights reserved</p>
                        </div>
                        <div class="col-sm-6 text-center text-sm-end">
                            <p class="mb-0">Hand-crafted and made with <i class="fa fa-heart text-danger"></i></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Footer -->
        </div>
        <!-- END Page Wrapper -->
    </div>
    <!-- END Page Holder -->
    <!-- BEGIN Float Button -->
    <div class="floating-btn floating-btn-end d-grid gap-2">
        <button class="btn btn-flat-primary btn-icon" data-bs-toggle="tooltip" data-bs-placement="right"
            title="Change theme" id="theme-toggle">
            <i class="fa fa-moon"></i>
        </button>
        <a class="btn btn-flat-primary btn-icon" data-bs-toggle="tooltip" data-bs-placement="right"
            title="Look documentation" href="https://docs.blueupcode.com/guide-html_v3-0-0.html" target="_blank">
            <i class="fa fa-book"></i>
        </a>
    </div>
    <!-- END Float Button -->
    <!-- BEGIN Offcanvas -->
    <div class="offcanvas offcanvas-start" id="offcanvas-navigation">
        <div class="offcanvas-header">
            <h3 class="offcanvas-title">Navigation</h3>
            <button class="btn btn-label-danger btn-icon" data-bs-dismiss="offcanvas">
                <i class="fa fa-times"></i>
            </button>
        </div>
        <div class="offcanvas-body px-0" data-simplebar data-simplebar-direction="ltr">
            <!-- BEGIN Menu -->
            <div class="menu">
                <div class="menu-item">
                    <a href="index.html" data-menu-path="/index.html" class="menu-item-link">
                        <div class="menu-item-icon">
                            <i class="fa fa-desktop"></i>
                        </div>
                        <span class="menu-item-text">Dashboard</span>
                        <div class="menu-item-addon">
                            <span class="badge badge-success">New</span>
                        </div>
                    </a>
                </div>
                <!-- BEGIN Menu Section -->
                <div class="menu-section">
                    <h2 class="menu-section-text">Elements</h2>
                </div>
                <!-- END Menu Section -->
                <div class="menu-item">
                    <button class="menu-item-link menu-item-toggle">
                        <div class="menu-item-icon">
                            <i class="fa fa-palette"></i>
                        </div>
                        <span class="menu-item-text">Base</span>
                        <div class="menu-item-addon">
                            <i class="menu-item-caret caret"></i>
                        </div>
                    </button>
                    <!-- BEGIN Menu Submenu -->
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="elements/base/accordion.html" data-menu-path="/elements/base/accordion.html"
                                class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Accordion</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="elements/base/alert.html" data-menu-path="/elements/base/alert.html"
                                class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Alert</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="elements/base/badge.html" data-menu-path="/elements/base/badge.html"
                                class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Badge</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="elements/base/breadcrumb.html" data-menu-path="/elements/base/breadcrumb.html"
                                class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Breadcrumb</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="elements/base/button.html" data-menu-path="/elements/base/button.html"
                                class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Button</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="elements/base/button-group.html"
                                data-menu-path="/elements/base/button-group.html" class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Button group</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="elements/base/card.html" data-menu-path="/elements/base/card.html"
                                class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Card</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="elements/base/color.html" data-menu-path="/elements/base/color.html"
                                class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Color</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="elements/base/dropdown.html" data-menu-path="/elements/base/dropdown.html"
                                class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Dropdown</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="elements/base/list-group.html" data-menu-path="/elements/base/list-group.html"
                                class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">List group</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="elements/base/marker.html" data-menu-path="/elements/base/marker.html"
                                class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Marker</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="elements/base/modal.html" data-menu-path="/elements/base/modal.html"
                                class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Modal</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="elements/base/nav.html" data-menu-path="/elements/base/nav.html"
                                class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Navigation</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="elements/base/offcanvas.html" data-menu-path="/elements/base/offcanvas.html"
                                class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Offcanvas</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="elements/base/pagination.html" data-menu-path="/elements/base/pagination.html"
                                class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Pagination</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="elements/base/placeholder.html" data-menu-path="/elements/base/placeholder.html"
                                class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Placeholder</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="elements/base/popover.html" data-menu-path="/elements/base/popover.html"
                                class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Popover</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="elements/base/progress.html" data-menu-path="/elements/base/progress.html"
                                class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Progress</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="elements/base/spinner.html" data-menu-path="/elements/base/spinner.html"
                                class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Spinner</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="elements/base/tab.html" data-menu-path="/elements/base/tab.html"
                                class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Tab</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="elements/base/table.html" data-menu-path="/elements/base/table.html"
                                class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Table</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="elements/base/tooltip.html" data-menu-path="/elements/base/tooltip.html"
                                class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Tooltip</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="elements/base/type.html" data-menu-path="/elements/base/type.html"
                                class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Typography</span>
                            </a>
                        </div>
                    </div>
                    <!-- END Menu Submenu -->
                </div>
                <div class="menu-item">
                    <button class="menu-item-link menu-item-toggle">
                        <div class="menu-item-icon">
                            <i class="fa fa-adjust"></i>
                        </div>
                        <span class="menu-item-text">Advanced</span>
                        <div class="menu-item-addon">
                            <i class="menu-item-caret caret"></i>
                        </div>
                    </button>
                    <!-- BEGIN Menu Submenu -->
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="elements/advanced/avatar.html" data-menu-path="/elements/advanced/avatar.html"
                                class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Avatar</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="elements/advanced/block-ui.html"
                                data-menu-path="/elements/advanced/block-ui.html" class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Block UI</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="elements/advanced/carousel.html"
                                data-menu-path="/elements/advanced/carousel.html" class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Carousel</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="elements/advanced/chat.html" data-menu-path="/elements/advanced/chat.html"
                                class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Chat</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="elements/advanced/context-menu.html"
                                data-menu-path="/elements/advanced/context-menu.html" class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Context menu</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="elements/advanced/grid-nav.html"
                                data-menu-path="/elements/advanced/grid-nav.html" class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Grid nav</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="elements/advanced/rich-list.html"
                                data-menu-path="/elements/advanced/rich-list.html" class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Rich list</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="elements/advanced/sortable.html"
                                data-menu-path="/elements/advanced/sortable.html" class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Sortable</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="elements/advanced/sweet-alert.html"
                                data-menu-path="/elements/advanced/sweet-alert.html" class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Sweet alert</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="elements/advanced/timeline.html"
                                data-menu-path="/elements/advanced/timeline.html" class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Timeline</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="elements/advanced/toastr.html" data-menu-path="/elements/advanced/toastr.html"
                                class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Toastr</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="elements/advanced/treeview.html"
                                data-menu-path="/elements/advanced/treeview.html" class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Treeview</span>
                            </a>
                        </div>
                    </div>
                    <!-- END Menu Submenu -->
                </div>
                <div class="menu-item">
                    <button class="menu-item-link menu-item-toggle">
                        <div class="menu-item-icon">
                            <i class="fa fa-icons"></i>
                        </div>
                        <span class="menu-item-text">Icons</span>
                        <div class="menu-item-addon">
                            <i class="menu-item-caret caret"></i>
                        </div>
                    </button>
                    <!-- BEGIN Menu Submenu -->
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="icons/fontawesome.html" data-menu-path="/icons/fontawesome.html"
                                class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Font Awesome</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="icons/feather.html" data-menu-path="/icons/feather.html" class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Feather</span>
                            </a>
                        </div>
                    </div>
                    <!-- END Menu Submenu -->
                </div>
                <div class="menu-item">
                    <button class="menu-item-link menu-item-toggle">
                        <div class="menu-item-icon">
                            <i class="fa fa-window-restore"></i>
                        </div>
                        <span class="menu-item-text">Portlet</span>
                        <div class="menu-item-addon">
                            <i class="menu-item-caret caret"></i>
                        </div>
                    </button>
                    <!-- BEGIN Menu Submenu -->
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="portlet/base.html" data-menu-path="/portlet/base.html" class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Base</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="portlet/drag.html" data-menu-path="/portlet/drag.html" class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Draggable</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="portlet/tab.html" data-menu-path="/portlet/tab.html" class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Tab</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="portlet/tool.html" data-menu-path="/portlet/tool.html" class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Tool</span>
                            </a>
                        </div>
                    </div>
                    <!-- END Menu Submenu -->
                </div>
                <div class="menu-item">
                    <button class="menu-item-link menu-item-toggle">
                        <div class="menu-item-icon">
                            <i class="fa fa-shapes"></i>
                        </div>
                        <span class="menu-item-text">Widget</span>
                        <div class="menu-item-addon">
                            <i class="menu-item-caret caret"></i>
                        </div>
                    </button>
                    <!-- BEGIN Menu Submenu -->
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="widgets/general.html" data-menu-path="/widgets/general.html"
                                class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">General</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="widgets/chart.html" data-menu-path="/widgets/chart.html" class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Chart</span>
                            </a>
                        </div>
                    </div>
                    <!-- END Menu Submenu -->
                </div>
                <!-- BEGIN Menu Section -->
                <div class="menu-section">
                    <h2 class="menu-section-text">Data</h2>
                </div>
                <!-- END Menu Section -->
                <div class="menu-item">
                    <a href="chart/apex-chart.html" data-menu-path="/chart/apex-chart.html" class="menu-item-link">
                        <div class="menu-item-icon">
                            <i class="fa fa-chart-pie"></i>
                        </div>
                        <span class="menu-item-text">Charts</span>
                    </a>
                </div>
                <div class="menu-item">
                    <button class="menu-item-link menu-item-toggle">
                        <div class="menu-item-icon">
                            <i class="fa fa-table"></i>
                        </div>
                        <span class="menu-item-text">Datatable</span>
                        <div class="menu-item-addon">
                            <i class="menu-item-caret caret"></i>
                        </div>
                    </button>
                    <!-- BEGIN Menu Submenu -->
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <button class="menu-item-link menu-item-toggle">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Basic</span>
                                <div class="menu-item-addon">
                                    <i class="menu-item-caret caret"></i>
                                </div>
                            </button>
                            <!-- BEGIN Menu Submenu -->
                            <div class="menu-submenu">
                                <div class="menu-item">
                                    <a href="datatable/basic/base.html" data-menu-path="/datatable/basic/base.html"
                                        class="menu-item-link">
                                        <i class="menu-item-bullet"></i>
                                        <span class="menu-item-text">Base</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="datatable/basic/footer.html"
                                        data-menu-path="/datatable/basic/footer.html" class="menu-item-link">
                                        <i class="menu-item-bullet"></i>
                                        <span class="menu-item-text">Footer</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="datatable/basic/scrollable.html"
                                        data-menu-path="/datatable/basic/scrollable.html" class="menu-item-link">
                                        <i class="menu-item-bullet"></i>
                                        <span class="menu-item-text">Scrollable</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="datatable/basic/pagination.html"
                                        data-menu-path="/datatable/basic/pagination.html" class="menu-item-link">
                                        <i class="menu-item-bullet"></i>
                                        <span class="menu-item-text">Pagination</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="datatable/basic/menu.html" data-menu-path="/datatable/basic/menu.html"
                                        class="menu-item-link">
                                        <i class="menu-item-bullet"></i>
                                        <span class="menu-item-text">Length menu</span>
                                    </a>
                                </div>
                            </div>
                            <!-- END Menu Submenu -->
                        </div>
                        <div class="menu-item">
                            <button class="menu-item-link menu-item-toggle">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Advanced</span>
                                <div class="menu-item-addon">
                                    <i class="menu-item-caret caret"></i>
                                </div>
                            </button>
                            <!-- BEGIN Menu Submenu -->
                            <div class="menu-submenu">
                                <div class="menu-item">
                                    <a href="datatable/advanced/column-rendering.html"
                                        data-menu-path="/datatable/advanced/column-rendering.html"
                                        class="menu-item-link">
                                        <i class="menu-item-bullet"></i>
                                        <span class="menu-item-text">Column rendering</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="datatable/advanced/column-visibility.html"
                                        data-menu-path="/datatable/advanced/column-visibility.html"
                                        class="menu-item-link">
                                        <i class="menu-item-bullet"></i>
                                        <span class="menu-item-text">Column visibility</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="datatable/advanced/footer-callback.html"
                                        data-menu-path="/datatable/advanced/footer-callback.html"
                                        class="menu-item-link">
                                        <i class="menu-item-bullet"></i>
                                        <span class="menu-item-text">Footer callback</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="datatable/advanced/multiple-controls.html"
                                        data-menu-path="/datatable/advanced/multiple-controls.html"
                                        class="menu-item-link">
                                        <i class="menu-item-bullet"></i>
                                        <span class="menu-item-text">Multiple controls</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="datatable/advanced/row-callback.html"
                                        data-menu-path="/datatable/advanced/row-callback.html" class="menu-item-link">
                                        <i class="menu-item-bullet"></i>
                                        <span class="menu-item-text">Row callback</span>
                                    </a>
                                </div>
                            </div>
                            <!-- END Menu Submenu -->
                        </div>
                        <div class="menu-item">
                            <button class="menu-item-link menu-item-toggle">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Source</span>
                                <div class="menu-item-addon">
                                    <i class="menu-item-caret caret"></i>
                                </div>
                            </button>
                            <!-- BEGIN Menu Submenu -->
                            <div class="menu-submenu">
                                <div class="menu-item">
                                    <a href="datatable/source/html.html" data-menu-path="/datatable/source/html.html"
                                        class="menu-item-link">
                                        <i class="menu-item-bullet"></i>
                                        <span class="menu-item-text">HTML</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="datatable/source/javascript.html"
                                        data-menu-path="/datatable/source/javascript.html" class="menu-item-link">
                                        <i class="menu-item-bullet"></i>
                                        <span class="menu-item-text">Javascript</span>
                                    </a>
                                </div>
                            </div>
                            <!-- END Menu Submenu -->
                        </div>
                        <div class="menu-item">
                            <button class="menu-item-link menu-item-toggle">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Extension</span>
                                <div class="menu-item-addon">
                                    <i class="menu-item-caret caret"></i>
                                </div>
                            </button>
                            <!-- BEGIN Menu Submenu -->
                            <div class="menu-submenu">
                                <div class="menu-item">
                                    <a href="datatable/extension/autofill.html"
                                        data-menu-path="/datatable/extension/autofill.html" class="menu-item-link">
                                        <i class="menu-item-bullet"></i>
                                        <span class="menu-item-text">Auto fill</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="datatable/extension/buttons.html"
                                        data-menu-path="/datatable/extension/buttons.html" class="menu-item-link">
                                        <i class="menu-item-bullet"></i>
                                        <span class="menu-item-text">Buttons</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="datatable/extension/column-reorder.html"
                                        data-menu-path="/datatable/extension/column-reorder.html"
                                        class="menu-item-link">
                                        <i class="menu-item-bullet"></i>
                                        <span class="menu-item-text">Column reorder</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="datatable/extension/fixed-header.html"
                                        data-menu-path="/datatable/extension/fixed-header.html"
                                        class="menu-item-link">
                                        <i class="menu-item-bullet"></i>
                                        <span class="menu-item-text">Fixed header</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="datatable/extension/fixed-column.html"
                                        data-menu-path="/datatable/extension/fixed-column.html"
                                        class="menu-item-link">
                                        <i class="menu-item-bullet"></i>
                                        <span class="menu-item-text">Fixed column</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="datatable/extension/key-table.html"
                                        data-menu-path="/datatable/extension/key-table.html" class="menu-item-link">
                                        <i class="menu-item-bullet"></i>
                                        <span class="menu-item-text">Key table</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="datatable/extension/row-group.html"
                                        data-menu-path="/datatable/extension/row-group.html" class="menu-item-link">
                                        <i class="menu-item-bullet"></i>
                                        <span class="menu-item-text">Row group</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="datatable/extension/row-reorder.html"
                                        data-menu-path="/datatable/extension/row-reorder.html" class="menu-item-link">
                                        <i class="menu-item-bullet"></i>
                                        <span class="menu-item-text">Row reorder</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="datatable/extension/scroller.html"
                                        data-menu-path="/datatable/extension/scroller.html" class="menu-item-link">
                                        <i class="menu-item-bullet"></i>
                                        <span class="menu-item-text">Scroller</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="datatable/extension/search-panes.html"
                                        data-menu-path="/datatable/extension/search-panes.html"
                                        class="menu-item-link">
                                        <i class="menu-item-bullet"></i>
                                        <span class="menu-item-text">Search panes</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="datatable/extension/select.html"
                                        data-menu-path="/datatable/extension/select.html" class="menu-item-link">
                                        <i class="menu-item-bullet"></i>
                                        <span class="menu-item-text">Select</span>
                                    </a>
                                </div>
                            </div>
                            <!-- END Menu Submenu -->
                        </div>
                    </div>
                    <!-- END Menu Submenu -->
                </div>
                <!-- BEGIN Menu Section -->
                <div class="menu-section">
                    <h2 class="menu-section-text">Form</h2>
                </div>
                <!-- END Menu Section -->
                <div class="menu-item">
                    <a href="form/base.html" data-menu-path="/form/base.html" class="menu-item-link">
                        <div class="menu-item-icon">
                            <i class="fa fa-dice"></i>
                        </div>
                        <span class="menu-item-text">Base</span>
                    </a>
                </div>
                <div class="menu-item">
                    <button class="menu-item-link menu-item-toggle">
                        <div class="menu-item-icon">
                            <i class="fa fa-fill-drip"></i>
                        </div>
                        <span class="menu-item-text">Advanced</span>
                        <div class="menu-item-addon">
                            <i class="menu-item-caret caret"></i>
                        </div>
                    </button>
                    <!-- BEGIN Menu Submenu -->
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="form/advanced/autosize.html" data-menu-path="/form/advanced/autosize.html"
                                class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Autosize</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="form/advanced/bs-maxlength.html"
                                data-menu-path="/form/advanced/bs-maxlength.html" class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Bootstrap maxlength</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="form/advanced/clipboard.html" data-menu-path="/form/advanced/clipboard.html"
                                class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Clipboard</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="form/advanced/datepicker.html" data-menu-path="/form/advanced/datepicker.html"
                                class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Date picker</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="form/advanced/datetimepicker.html"
                                data-menu-path="/form/advanced/datetimepicker.html" class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Date time picker</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="form/advanced/daterangepicker.html"
                                data-menu-path="/form/advanced/daterangepicker.html" class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Date range picker</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="form/advanced/inputmask.html" data-menu-path="/form/advanced/inputmask.html"
                                class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Input mask</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="form/advanced/select2.html" data-menu-path="/form/advanced/select2.html"
                                class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Select2</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="form/advanced/slider.html" data-menu-path="/form/advanced/slider.html"
                                class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Slider</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="form/advanced/touchspin.html" data-menu-path="/form/advanced/touchspin.html"
                                class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Touchspin</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="form/advanced/typeahead.html" data-menu-path="/form/advanced/typeahead.html"
                                class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Typeahead</span>
                            </a>
                        </div>
                    </div>
                    <!-- END Menu Submenu -->
                </div>
                <div class="menu-item">
                    <button class="menu-item-link menu-item-toggle">
                        <div class="menu-item-icon">
                            <i class="fa fa-pencil-ruler"></i>
                        </div>
                        <span class="menu-item-text">Editor</span>
                        <div class="menu-item-addon">
                            <i class="menu-item-caret caret"></i>
                        </div>
                    </button>
                    <!-- BEGIN Menu Submenu -->
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="editor/basic.html" data-menu-path="/editor/basic.html" class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Basic</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="editor/bubble.html" data-menu-path="/editor/bubble.html" class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Bubble</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="editor/complex.html" data-menu-path="/editor/complex.html"
                                class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Complex</span>
                            </a>
                        </div>
                    </div>
                    <!-- END Menu Submenu -->
                </div>
                <div class="menu-item">
                    <a href="form/group.html" data-menu-path="/form/group.html" class="menu-item-link">
                        <div class="menu-item-icon">
                            <i class="fa fa-th-list"></i>
                        </div>
                        <span class="menu-item-text">Group</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="form/layout.html" data-menu-path="/form/layout.html" class="menu-item-link">
                        <div class="menu-item-icon">
                            <i class="fa fa-ruler-combined"></i>
                        </div>
                        <span class="menu-item-text">Layout</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="form/validation.html" data-menu-path="/form/validation.html" class="menu-item-link">
                        <div class="menu-item-icon">
                            <i class="fa fa-check"></i>
                        </div>
                        <span class="menu-item-text">Validation</span>
                    </a>
                </div>
                <!-- BEGIN Menu Section -->
                <div class="menu-section">
                    <h2 class="menu-section-text">Pages</h2>
                </div>
                <!-- END Menu Section -->
                <div class="menu-item">
                    <button class="menu-item-link menu-item-toggle">
                        <div class="menu-item-icon">
                            <i class="fa fa-unlock-alt"></i>
                        </div>
                        <span class="menu-item-text">Login</span>
                        <div class="menu-item-addon">
                            <i class="menu-item-caret caret"></i>
                        </div>
                    </button>
                    <!-- BEGIN Menu Submenu -->
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="pages/login/login-1.html" data-menu-path="/pages/login/login-1.html"
                                class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Login 1</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="pages/login/login-2.html" data-menu-path="/pages/login/login-2.html"
                                class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Login 2</span>
                            </a>
                        </div>
                    </div>
                    <!-- END Menu Submenu -->
                </div>
                <div class="menu-item">
                    <button class="menu-item-link menu-item-toggle">
                        <div class="menu-item-icon">
                            <i class="fa fa-user-plus"></i>
                        </div>
                        <span class="menu-item-text">Register</span>
                        <div class="menu-item-addon">
                            <i class="menu-item-caret caret"></i>
                        </div>
                    </button>
                    <!-- BEGIN Menu Submenu -->
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="pages/register/register-1.html"
                                data-menu-path="/pages/register/register-1.html" class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Register 1</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="pages/register/register-2.html"
                                data-menu-path="/pages/register/register-2.html" class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Register 2</span>
                            </a>
                        </div>
                    </div>
                    <!-- END Menu Submenu -->
                </div>
                <div class="menu-item">
                    <button class="menu-item-link menu-item-toggle">
                        <div class="menu-item-icon">
                            <i class="fa fa-unlink"></i>
                        </div>
                        <span class="menu-item-text">Error</span>
                        <div class="menu-item-addon">
                            <i class="menu-item-caret caret"></i>
                        </div>
                    </button>
                    <!-- BEGIN Menu Submenu -->
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="pages/error/error-1.html" data-menu-path="/pages/error/error-1.html"
                                class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Error 1</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="pages/error/error-2.html" data-menu-path="/pages/error/error-2.html"
                                class="menu-item-link">
                                <i class="menu-item-bullet"></i>
                                <span class="menu-item-text">Error 2</span>
                            </a>
                        </div>
                    </div>
                    <!-- END Menu Submenu -->
                </div>
            </div>
            <!-- END Menu -->
        </div>
    </div>
    <!-- END Offcanvas -->
    <!-- BEGIN Offcanvas -->
    <div class="offcanvas offcanvas-end" id="offcanvas-settings">
        <div class="offcanvas-header">
            <h3 class="offcanvas-title">Settings</h3>
            <button class="btn btn-label-danger btn-icon" data-bs-dismiss="offcanvas">
                <i class="fa fa-times"></i>
            </button>
        </div>
        <div class="offcanvas-body" data-simplebar data-simplebar-direction="ltr">
            <!-- BEGIN Portlet -->
            <div class="portlet">
                <div class="portlet-header portlet-header-bordered">
                    <div class="portlet-icon">
                        <i class="fa fa-bolt"></i>
                    </div>
                    <h3 class="portlet-title">Performance</h3>
                </div>
                <div class="portlet-body">
                    <!-- BEGIN Grid -->
                    <div class="d-grid gap-3">
                        <!-- BEGIN Widget -->
                        <div class="widget4">
                            <div class="widget4-group">
                                <div class="widget4-display">
                                    <h6 class="widget4-subtitle">CPU Load</h6>
                                </div>
                                <div class="widget4-addon">
                                    <h6 class="widget4-subtitle text-info">60%</h6>
                                </div>
                            </div>
                            <!-- BEGIN Progress -->
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-info" style="width: 60%"></div>
                            </div>
                            <!-- END Progress -->
                        </div>
                        <!-- END Widget -->
                        <!-- BEGIN Widget -->
                        <div class="widget4">
                            <div class="widget4-group">
                                <div class="widget4-display">
                                    <h6 class="widget4-subtitle">CPU Temparature</h6>
                                </div>
                                <div class="widget4-addon">
                                    <h6 class="widget4-subtitle text-success">42°</h6>
                                </div>
                            </div>
                            <!-- BEGIN Progress -->
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-success" style="width: 30%"></div>
                            </div>
                            <!-- END Progress -->
                        </div>
                        <!-- END Widget -->
                        <!-- BEGIN Widget -->
                        <div class="widget4">
                            <div class="widget4-group">
                                <div class="widget4-display">
                                    <h6 class="widget4-subtitle">RAM Usage</h6>
                                </div>
                                <div class="widget4-addon">
                                    <h6 class="widget4-subtitle text-danger">6,532 MB</h6>
                                </div>
                            </div>
                            <!-- BEGIN Progress -->
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-danger" style="width: 80%"></div>
                            </div>
                            <!-- END Progress -->
                        </div>
                        <!-- END Widget -->
                    </div>
                    <!-- END Grid -->
                </div>
            </div>
            <!-- END Portlet -->
            <!-- BEGIN Portlet -->
            <div class="portlet">
                <div class="portlet-header">
                    <h3 class="portlet-title">Customer care</h3>
                </div>
                <div class="portlet-body">
                    <!-- BEGIN Grid -->
                    <div class="d-grid gap-1">
                        <!-- BEGIN Form Switch -->
                        <div class="form-check form-check-lg form-switch">
                            <input type="checkbox" class="form-check-input" id="offcanvas-setting-1">
                            <label class="form-check-label" for="offcanvas-setting-1">Enable notifications</label>
                        </div>
                        <!-- END Form Switch -->
                        <!-- BEGIN Form Switch -->
                        <div class="form-check form-check-lg form-switch">
                            <input type="checkbox" class="form-check-input" id="offcanvas-setting-2"
                                checked="checked">
                            <label class="form-check-label" for="offcanvas-setting-2">Enable case tracking</label>
                        </div>
                        <!-- END Form Switch -->
                        <!-- BEGIN Form Switch -->
                        <div class="form-check form-check-lg form-switch">
                            <input type="checkbox" class="form-check-input" id="offcanvas-setting-3">
                            <label class="form-check-label" for="offcanvas-setting-3">Support portal</label>
                        </div>
                        <!-- END Form Switch -->
                    </div>
                    <!-- END Grid -->
                </div>
            </div>
            <!-- END Portlet -->
            <!-- BEGIN Portlet -->
            <div class="portlet">
                <div class="portlet-header">
                    <h3 class="portlet-title">Reports</h3>
                </div>
                <div class="portlet-body">
                    <!-- BEGIN Grid -->
                    <div class="d-grid gap-1">
                        <!-- BEGIN Form Switch -->
                        <div class="form-check form-check-lg form-switch">
                            <input type="checkbox" class="form-check-input" id="offcanvas-setting-4">
                            <label class="form-check-label" for="offcanvas-setting-4">Generate reports</label>
                        </div>
                        <!-- END Form Switch -->
                        <!-- BEGIN Form Switch -->
                        <div class="form-check form-check-lg form-switch">
                            <input type="checkbox" class="form-check-input" id="offcanvas-setting-5"
                                checked="checked">
                            <label class="form-check-label" for="offcanvas-setting-5">Enable report export</label>
                        </div>
                        <!-- END Form Switch -->
                        <!-- BEGIN Form Switch -->
                        <div class="form-check form-check-lg form-switch">
                            <input type="checkbox" class="form-check-input" id="offcanvas-setting-6">
                            <label class="form-check-label" for="offcanvas-setting-6">Allow data</label>
                        </div>
                        <!-- END Form Switch -->
                    </div>
                    <!-- END Grid -->
                </div>
            </div>
            <!-- END Portlet -->
            <!-- BEGIN Portlet -->
            <div class="portlet">
                <div class="portlet-header">
                    <h3 class="portlet-title">Projects</h3>
                </div>
                <div class="portlet-body">
                    <!-- BEGIN Grid -->
                    <div class="d-grid gap-1">
                        <!-- BEGIN Form Switch -->
                        <div class="form-check form-check-lg form-switch">
                            <input type="checkbox" class="form-check-input" id="offcanvas-setting-7">
                            <label class="form-check-label" for="offcanvas-setting-7">Enable create projects</label>
                        </div>
                        <!-- END Form Switch -->
                        <!-- BEGIN Form Switch -->
                        <div class="form-check form-check-lg form-switch">
                            <input type="checkbox" class="form-check-input" id="offcanvas-setting-8"
                                checked="checked">
                            <label class="form-check-label" for="offcanvas-setting-8">Enable custom projects</label>
                        </div>
                        <!-- END Form Switch -->
                        <!-- BEGIN Form Switch -->
                        <div class="form-check form-check-lg form-switch">
                            <input type="checkbox" class="form-check-input" id="offcanvas-setting-9">
                            <label class="form-check-label" for="offcanvas-setting-9">Enable project review</label>
                        </div>
                        <!-- END Form Switch -->
                    </div>
                    <!-- END Grid -->
                </div>
            </div>
            <!-- END Portlet -->
        </div>
    </div>
    <!-- END Offcanvas -->
    <!-- BEGIN Offcanvas -->
    <div class="offcanvas offcanvas-end" id="offcanvas-todo">
        <div class="offcanvas-header">
            <h3 class="offcanvas-title">May 14, 2020</h3>
            <button class="btn btn-label-danger btn-icon" data-bs-dismiss="offcanvas">
                <i class="fa fa-times"></i>
            </button>
        </div>
        <div class="offcanvas-body" data-simplebar data-simplebar-direction="ltr">
            <!-- BEGIN Portlet -->
            <div class="portlet">
                <div class="portlet-header portlet-header-bordered">
                    <div class="portlet-icon">
                        <i class="fa fa-tasks"></i>
                    </div>
                    <h3 class="portlet-title">Upcoming events</h3>
                </div>
                <div class="portlet-body">
                    <!-- BEGIN Timeline -->
                    <div class="timeline rich-list-bordered">
                        <div class="timeline-item">
                            <div class="timeline-pin">
                                <i class="marker marker-circle text-primary"></i>
                            </div>
                            <div class="timeline-content">
                                <!-- BEGIN Rich List -->
                                <div class="rich-list-item">
                                    <div class="rich-list-content">
                                        <h5 class="rich-list-title">12:00</h5>
                                        <p class="rich-list-paragraph">Donec laoreet fringilla justo a pellentesque
                                        </p>
                                    </div>
                                </div>
                                <!-- END Rich List -->
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-pin">
                                <i class="marker marker-circle text-success"></i>
                            </div>
                            <div class="timeline-content">
                                <!-- BEGIN Rich List -->
                                <div class="rich-list-item">
                                    <div class="rich-list-content">
                                        <h5 class="rich-list-title">13:20</h5>
                                        <p class="rich-list-paragraph">Nunc quis massa nec enim</p>
                                    </div>
                                </div>
                                <!-- END Rich List -->
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-pin">
                                <i class="marker marker-circle text-danger"></i>
                            </div>
                            <div class="timeline-content">
                                <!-- BEGIN Rich List -->
                                <div class="rich-list-item">
                                    <div class="rich-list-content">
                                        <h5 class="rich-list-title">14:00</h5>
                                        <p class="rich-list-paragraph">Praesent sit amet</p>
                                    </div>
                                </div>
                                <!-- END Rich List -->
                            </div>
                        </div>
                    </div>
                    <!-- END Timeline -->
                </div>
            </div>
            <!-- END Portlet -->
            <!-- BEGIN Portlet -->
            <div class="portlet">
                <div class="portlet-header portlet-header-bordered">
                    <div class="portlet-icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <h3 class="portlet-title">Contacts</h3>
                    <div class="portlet-addon">
                        <button class="btn btn-label-primary btn-icon">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="portlet-body p-0">
                    <!-- BEGIN Rich List -->
                    <div class="rich-list rich-list-flush rich-list-action">
                        <a href="#" class="rich-list-item">
                            <div class="rich-list-prepend">
                                <!-- BEGIN Avatar -->
                                <div class="avatar avatar-circle">
                                    <div class="avatar-addon avatar-addon-top">
                                        <div class="avatar-icon avatar-icon-info">
                                            <i class="fa fa-thumbtack"></i>
                                        </div>
                                    </div>
                                    <div class="avatar-display">
                                        <img src="assets/images/avatar/blank.webp" alt="Avatar image">
                                    </div>
                                    <div class="avatar-addon avatar-addon-bottom">
                                        <i class="marker marker-dot text-secondary"></i>
                                    </div>
                                </div>
                                <!-- END Avatar -->
                            </div>
                            <div class="rich-list-content">
                                <h4 class="rich-list-title">Charlie Stone</h4>
                                <span class="rich-list-subtitle">Art Director</span>
                            </div>
                            <div class="rich-list-append flex-column align-items-end">
                                <span class="text-muted text-nowrap">1 min</span>
                                <span class="badge badge-success rounded-pill">1</span>
                            </div>
                        </a>
                        <a href="#" class="rich-list-item">
                            <div class="rich-list-prepend">
                                <!-- BEGIN Avatar -->
                                <div class="avatar avatar-circle">
                                    <div class="avatar-display">
                                        <img src="assets/images/avatar/blank.webp" alt="Avatar image">
                                    </div>
                                    <div class="avatar-addon avatar-addon-bottom">
                                        <i class="marker marker-dot text-success"></i>
                                    </div>
                                </div>
                                <!-- END Avatar -->
                            </div>
                            <div class="rich-list-content">
                                <h4 class="rich-list-title">Freddie Stevens</h4>
                                <span class="rich-list-subtitle">Journalist</span>
                            </div>
                            <div class="rich-list-append flex-column align-items-end">
                                <span class="text-muted text-nowrap">2 hour</span>
                                <span class="badge badge-success rounded-pill">12</span>
                            </div>
                        </a>
                        <a href="#" class="rich-list-item">
                            <div class="rich-list-prepend">
                                <!-- BEGIN Avatar -->
                                <div class="avatar avatar-circle">
                                    <div class="avatar-display">
                                        <img src="assets/images/avatar/blank.webp" alt="Avatar image">
                                    </div>
                                    <div class="avatar-addon avatar-addon-bottom">
                                        <i class="marker marker-dot text-success"></i>
                                    </div>
                                </div>
                                <!-- END Avatar -->
                            </div>
                            <div class="rich-list-content">
                                <h4 class="rich-list-title">Tyler Clark</h4>
                                <span class="rich-list-subtitle">Programmer</span>
                            </div>
                            <div class="rich-list-append flex-column align-items-end">
                                <span class="text-muted text-nowrap">5 hour</span>
                            </div>
                        </a>
                        <a href="#" class="rich-list-item">
                            <div class="rich-list-prepend">
                                <!-- BEGIN Avatar -->
                                <div class="avatar avatar-circle">
                                    <div class="avatar-addon avatar-addon-top">
                                        <div class="avatar-icon avatar-icon-success">
                                            <i class="fa fa-check"></i>
                                        </div>
                                    </div>
                                    <div class="avatar-display">
                                        <img src="assets/images/avatar/blank.webp" alt="Avatar image">
                                    </div>
                                    <div class="avatar-addon avatar-addon-bottom">
                                        <i class="marker marker-dot text-secondary"></i>
                                    </div>
                                </div>
                                <!-- END Avatar -->
                            </div>
                            <div class="rich-list-content">
                                <h4 class="rich-list-title">Darcy Harrison</h4>
                                <span class="rich-list-subtitle">Internet Marketer</span>
                            </div>
                            <div class="rich-list-append flex-column align-items-end">
                                <span class="text-muted text-nowrap">1 day</span>
                                <span class="badge badge-success rounded-pill">2</span>
                            </div>
                        </a>
                        <a href="#" class="rich-list-item">
                            <div class="rich-list-prepend">
                                <!-- BEGIN Avatar -->
                                <div class="avatar avatar-circle">
                                    <div class="avatar-display">
                                        <img src="assets/images/avatar/blank.webp" alt="Avatar image">
                                    </div>
                                    <div class="avatar-addon avatar-addon-bottom">
                                        <i class="marker marker-dot text-success"></i>
                                    </div>
                                </div>
                                <!-- END Avatar -->
                            </div>
                            <div class="rich-list-content">
                                <h4 class="rich-list-title">Victor Payne</h4>
                                <span class="rich-list-subtitle">Accountant</span>
                            </div>
                            <div class="rich-list-append flex-column align-items-end">
                                <span class="text-muted text-nowrap">1 day</span>
                                <span class="badge badge-success rounded-pill">5</span>
                            </div>
                        </a>
                        <a href="#" class="rich-list-item">
                            <div class="rich-list-prepend">
                                <!-- BEGIN Avatar -->
                                <div class="avatar avatar-circle">
                                    <div class="avatar-display">
                                        <img src="assets/images/avatar/blank.webp" alt="Avatar image">
                                    </div>
                                    <div class="avatar-addon avatar-addon-bottom">
                                        <i class="marker marker-dot text-secondary"></i>
                                    </div>
                                </div>
                                <!-- END Avatar -->
                            </div>
                            <div class="rich-list-content">
                                <h4 class="rich-list-title">Alberta Harris</h4>
                                <span class="rich-list-subtitle">UI Designer</span>
                            </div>
                            <div class="rich-list-append flex-column align-items-end">
                                <span class="text-muted text-nowrap">2 day</span>
                                <span class="badge badge-success rounded-pill">4</span>
                            </div>
                        </a>
                    </div>
                    <!-- END Rich List -->
                </div>
            </div>
            <!-- END Portlet -->
        </div>
    </div>
    <!-- END Offcanvas -->
    <script type="text/javascript" src="{{ asset('upmin/assets/build/scripts/mandatory.js') }}"></script>
    <script type="text/javascript" src="{{ asset('upmin/assets/build/scripts/core.js') }}"></script>
    <script type="text/javascript" src="{{ asset('upmin/assets/build/scripts/vendor.js') }}"></script>
    <script type="text/javascript" src="{{ asset('upmin/assets/app/utilities/sticky-header.js') }}"></script>
    <script type="text/javascript" src="{{ asset('upmin/assets/app/utilities/copyright-year.js') }}"></script>
    <script type="text/javascript" src="{{ asset('upmin/assets/app/utilities/theme-switcher.js') }}"></script>
    <script type="text/javascript" src="{{ asset('upmin/assets/app/utilities/tooltip-popover.js') }}"></script>
    <script type="text/javascript" src="{{ asset('upmin/assets/app/utilities/dropdown-scrollbar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('upmin/assets/app/utilities/fullscreen-trigger.js') }}"></script>
    <script type="text/javascript" src="{{ asset('upmin/assets/app/pages/home.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.min.js" defer></script>
    @livewireScripts
    @stack('scripts')
</body>

</html>
