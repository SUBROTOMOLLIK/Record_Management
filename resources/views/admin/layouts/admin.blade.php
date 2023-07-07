<!DOCTYPE html>
<html lang="en">
    @include('admin.layouts.parts.head')
    <body class="sb-nav-fixed">
        @if (!Session::has('adminSess'))
            <script>
                window.location.href="{{route('admin.login')}}";
            </script>
        @endif
        @include('admin.layouts.parts.nav')
        <div id="layoutSidenav">
            @include('admin.layouts.parts.sidebar')
            <div id="layoutSidenav_content">
                @yield('admin_content')
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; AyeshaSiddika@2022</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        @include('admin.layouts.parts.script')
    </body>
</html>
