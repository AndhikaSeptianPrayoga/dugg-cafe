    <!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

@if (app()->environment('local'))
    @vite(['resources/assets/vendor/fonts/iconify/iconify.js'])
    <!-- Core CSS -->
    @vite(['resources/assets/vendor/scss/core.scss','resources/assets/css/demo.css', 'resources/css/app.css'])
@else
    <!-- Production: Load built CSS/JS from public/build/assets -->
    <link rel="stylesheet" href="{{ asset('build/assets/core-TmpiJ-xO.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/demo-ISkCbL8g.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/page-auth-BET8THlp.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/boxicons-CGE7lhJm.css') }}">
    <!-- Tambahkan file lain jika perlu -->
    <script src="{{ asset('build/assets/iconify-DdHRVXAz.js') }}" defer></script>
@endif

<!-- Vendor Styles -->
@yield('vendor-style')

<!-- Page Styles -->
@yield('page-style')
