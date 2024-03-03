<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.admin.meta')
    <title>Dashboard | yourwebsite.com</title>
    @include('includes.admin.styles')
    @stack('styles')
</head>

<body class="bg-light">
    <div id="db-wrapper">
        <!-- navbar vertical -->
        <!-- Sidebar -->
        @include('includes.admin.sidebar')
        <!-- Page content -->
        <div id="page-content">
            @include('includes.admin.navbar')
            <!-- Container fluid -->
            <div class="bg-light pt-6 pb-21"></div>
            <div class="container-fluid mt-n22 px-6">
                {{ $slot }}
            </div>
        </div>
    </div>

    @include('includes.admin.scripts')
    @stack('scripts')
</body>

</html>
