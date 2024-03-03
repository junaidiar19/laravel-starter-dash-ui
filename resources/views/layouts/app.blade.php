<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.app.meta')
    <title>Home</title>
    @include('includes.app.styles')
    @stack('styles')
</head>

<body>
    @include('includes.app.navbar')
    <main>
        {{ $slot }}
    </main>

    @include('includes.app.scripts')
    @stack('scripts')
</body>

</html>
