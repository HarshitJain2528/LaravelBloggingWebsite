@include('AdminFiles.layouts.header')
    @yield('admin-login-section')
    @yield('admin-dashboard-section')
    @yield('admin-posts-section')
    @yield('admin-comments-section')
    @yield('admin-users-section')
    @yield('admin-settings-section')
    @yield('admin-notification-section')
    @yield('admin-media-section')
    @yield('admin-backup-section')
    @yield('content')
@include('AdminFiles.layouts.footer')