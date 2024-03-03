<!-- Libs Icons CSS -->
{{-- <link href="{{ asset('assets/libs/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet"> --}}
{{-- <link href="{{ asset('assets/libs/@mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet" /> --}}
<link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome-free/css/all.min.css') }}">

<!-- Libs CSS -->
<link rel="stylesheet" href="{{ asset('assets/vendors/dropify/css/dropify.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/select2/dist/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/select2-bootstrap5/select2-bootstrap-5-theme.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/datepicker3/datepicker3.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/fancybox/fancybox.css') }}">

<!-- Theme CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/custom.css?v=' . time()) }}">

{{-- Fonts --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

{{-- Vite --}}
@vite(['resources/js/alpine.js'])
