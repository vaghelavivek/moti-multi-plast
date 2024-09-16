<!DOCTYPE html>
<html lang="en">

<head>
    
    {{-- seo --}}
    <title>@yield('page-title')</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="geo.region" content="IN">
    @yield('meta')

    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">

    {{-- aos js --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- section --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('head-scripts')
    @yield('style')
</head>

{{-- <body class="bg-slate-50 bg-[length:100%_100%] bg-no-repeat bg-fixed" style="background-image: url('{{ asset('assets/images/bg.jpeg') }}');"> --}}

<body class="bg-white">
    <x-navbar />
    @yield('body')
    <x-footer />

    {{-- aos js --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800
        });
    </script>

    @yield('body-scripts')
</body>

</html>
