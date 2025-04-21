<!DOCTYPE html>
<html lang="en">

<head>

    {{-- seo --}}
    <title>@yield('page-title')</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="geo.region" content="IN">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('meta')

    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    {{-- aos js --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- section --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('head-scripts')
    @yield('style')
    <style>
        .ql-editor {
            font-family: Outfit,sans-serif !important;
          }
          .preview-editor-product{
            white-space: normal;
            padding: 0px;
          }
    </style>
    
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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const lazyImages = document.querySelectorAll('img.lazyload');
            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.alt = img.dataset.alt;
                        img.classList.remove(['lazyload', 'hidden']);
                        observer.unobserve(img);
                    }
                });
            });

            lazyImages.forEach(image => observer.observe(image));
        });
    </script>
</body>

</html>
