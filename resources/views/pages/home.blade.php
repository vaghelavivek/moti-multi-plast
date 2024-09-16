@extends('layouts.landing')

@section('page-title')
    Moti multi plastics
@endsection

@section('body')
    <section>
        <div class="max-w-[1920px] mx-auto">

            {{-- hero section --}}
            <div class="w-full aspect-[5/2] overflow-hidden container mx-auto mt-4 px-4">
                <div class="swiper mySwiper md:rounded-3xl rounded-lg">
                    <div class="swiper-wrapper">
                        {{-- <img src="https://www.rollick.co.in/assets/front-end/png/slider/2.webp" alt="box">
                            <img src="https://www.rollick.co.in/assets/front-end/png/slider/banner-5.webp" alt="box">
                            <img src="https://www.rollick.co.in/assets/front-end/png/slider/3.webp" alt="box"> --}}
                        @foreach ($heroBanner as $banner)
                            <div class="swiper-slide">
                                <a href="{{ $banner->link }}" target="_blank">
                                    <img src="{{ Request::root() . '/storage/' . $banner->file }}" alt="box">
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            {{-- features --}}
            <div class="bg-slate-100 my-12">
                <div class="container mx-auto p-4">
                    <div class="grow w-full">
                        <div class="w-full grid gap-4 xl:grid-cols-4 sm:grid-cols-2">
                            <div class="p-5 rounded-xl" data-aos="zoom-in-up" data-aos-offset="100">
                                <div class="p-4 border border-primary-200 aspect-square max-w-fit rounded-md mx-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="md:max-w-6 max-w-5 w-full fill-primary"
                                        viewBox="0 0 448 512">
                                        <path
                                            d="M160 80c0-26.5 21.5-48 48-48h32c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H208c-26.5 0-48-21.5-48-48V80zM0 272c0-26.5 21.5-48 48-48H80c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V272zM368 96h32c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H368c-26.5 0-48-21.5-48-48V144c0-26.5 21.5-48 48-48z" />
                                    </svg>
                                </div>
                                <p class="mt-6 mb-2 font-semibold sm:text-xl text-base text-gray-500 text-center">Market
                                    Leaders</p>
                                <p class="font-normal text-center">More then 3 years of experience in the industry, backed
                                    by strong
                                    leadership and energetic
                                    innovatores.</p>
                            </div>
                            <div class="p-5 rounded-xl" data-aos="zoom-in-up" data-aos-offset="100">
                                <div class="p-4 border border-primary-200 aspect-square max-w-fit rounded-md mx-auto">

                                    <svg xmlns="http://www.w3.org/2000/svg" class="md:max-w-6 max-w-5 w-full fill-primary"
                                        viewBox="0 0 512 512">
                                        <path
                                            d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z" />
                                    </svg>
                                </div>
                                <p class="mt-6 mb-2 font-semibold sm:text-xl text-base text-gray-500 text-center">Backward
                                    Integration
                                </p>
                                <p class="font-normal text-center">More then 3 years of experience in the industry, backed
                                    by strong
                                    leadership and energetic
                                    innovatores.</p>
                            </div>
                            <div class="p-5 rounded-xl" data-aos="zoom-in-up" data-aos-offset="100">
                                <div class="p-4 border border-primary-200 mx-auto aspect-square max-w-fit rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="md:max-w-6 max-w-5 w-full fill-primary"
                                        viewBox="0 0 512 512">
                                        <path
                                            d="M4.1 38.2C1.4 34.2 0 29.4 0 24.6C0 11 11 0 24.6 0H133.9c11.2 0 21.7 5.9 27.4 15.5l68.5 114.1c-48.2 6.1-91.3 28.6-123.4 61.9L4.1 38.2zm503.7 0L405.6 191.5c-32.1-33.3-75.2-55.8-123.4-61.9L350.7 15.5C356.5 5.9 366.9 0 378.1 0H487.4C501 0 512 11 512 24.6c0 4.8-1.4 9.6-4.1 13.6zM80 336a176 176 0 1 1 352 0A176 176 0 1 1 80 336zm184.4-94.9c-3.4-7-13.3-7-16.8 0l-22.4 45.4c-1.4 2.8-4 4.7-7 5.1L168 298.9c-7.7 1.1-10.7 10.5-5.2 16l36.3 35.4c2.2 2.2 3.2 5.2 2.7 8.3l-8.6 49.9c-1.3 7.6 6.7 13.5 13.6 9.9l44.8-23.6c2.7-1.4 6-1.4 8.7 0l44.8 23.6c6.9 3.6 14.9-2.2 13.6-9.9l-8.6-49.9c-.5-3 .5-6.1 2.7-8.3l36.3-35.4c5.6-5.4 2.5-14.8-5.2-16l-50.1-7.3c-3-.4-5.7-2.4-7-5.1l-22.4-45.4z" />
                                    </svg>
                                </div>
                                <p class="mt-6 mb-2 font-semibold sm:text-xl text-base text-gray-500 text-center">ISO
                                    Certified</p>
                                <p class="font-normal text-center">More then 3 years of experience in the industry, backed
                                    by strong
                                    leadership and energetic
                                    innovatores.</p>
                            </div>
                            <div class="p-5 rounded-xl" data-aos="zoom-in-up" data-aos-offset="100">
                                <div class="p-4 border border-primary-200 mx-auto aspect-square max-w-fit rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="md:max-w-6 max-w-5 w-full fill-primary"
                                        viewBox="0 0 512 512">
                                        <path
                                            d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z" />
                                    </svg>
                                </div>
                                <p class="mt-6 mb-2 font-semibold sm:text-xl text-base text-gray-500 text-center">Listed
                                    Publicly</p>
                                <p class="font-normal text-center">More then 3 years of experience in the industry, backed
                                    by strong
                                    leadership and energetic
                                    innovatores.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{-- products banner section --}}
            <div class="container mx-auto px-4 mt-4">
                <div class="grid gap-4 md:grid-cols-2">
                    <div>
                        <div class="aspect-[6/3.8] relative group rounded-3xl overflow-hidden">
                            {{-- <img src="https://moldtekpackaging.com/assets/images/paint-flyer.jpeg" class="w-full h-full"
                                alt="category"> --}}

                            @if (isset($productBanner[0]['file']))
                                <img src="{{ Request::root() . '/storage/' . $productBanner[0]['file'] }}"
                                    class="w-full object-cover h-full" alt="category">
                            @else
                                <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg"
                                    class="w-full h-full" alt="category">
                            @endif

                            <div
                                class="absolute bottom-0 translate-y-full transition-all group-hover:translate-y-0 right-0 w-full py-3 flex justify-center bg-[#00000040]">
                                <a href="{{ $productBanner[0]['link'] }}"
                                    class="text-center uppercase font-semibold text-white cursor-pointer hover:underline">View
                                    Products
                                </a>
                            </div>
                        </div>
                        <div class="grid md:gap-4 gap-2 grid-cols-2 mt-4">
                            <div class="aspect-[6/3.8] relative group rounded-3xl overflow-hidden">

                                @if (isset($productBanner[1]['file']))
                                    <img src="{{ Request::root() . '/storage/' . $productBanner[1]['file'] }}"
                                        class="w-full object-cover h-full" alt="category">
                                @else
                                    <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg"
                                        class="w-full h-full" alt="category">
                                @endif

                                <div
                                    class="absolute bottom-0 translate-y-full transition-all group-hover:translate-y-0 right-0 w-full py-2 flex justify-center bg-[#00000040]">
                                    <a href="{{ $productBanner[1]['link'] }}"
                                        class="text-center md:text-sm text-[10px] uppercase font-semibold text-white cursor-pointer hover:underline">View Products
                                    </a>
                                </div>
                            </div>
                            <div class="aspect-[6/3.8] relative group rounded-3xl overflow-hidden">

                                @if (isset($productBanner[2]['file']))
                                    <img src="{{ Request::root() . '/storage/' . $productBanner[2]['file'] }}"
                                        class="w-full object-cover h-full" alt="category">
                                @else
                                    <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg"
                                        class="w-full h-full" alt="category">
                                @endif

                                <div
                                    class="absolute bottom-0 translate-y-full transition-all group-hover:translate-y-0 right-0 w-full py-2 flex justify-center bg-[#00000040]">
                                    <a href="{{ $productBanner[2]['link'] }}"
                                        class="text-center md:text-sm text-[10px] uppercase font-semibold text-white cursor-pointer hover:underline">View Products
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div>
                        <div class="grid md:gap-4 gap-2 grid-cols-2 mb-4">
                            <div class="aspect-[6/3.8] relative group rounded-3xl overflow-hidden">

                                @if (isset($productBanner[3]['file']))
                                    <img src="{{ Request::root() . '/storage/' . $productBanner[3]['file'] }}"
                                        class="w-full object-cover h-full" alt="category">
                                @else
                                    <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg"
                                        class="w-full h-full" alt="category">
                                @endif

                                <div
                                    class="absolute bottom-0 translate-y-full transition-all group-hover:translate-y-0 right-0 w-full py-2 flex justify-center bg-[#00000040]">
                                    <a href="{{ $productBanner[3]['link'] }}"
                                        class="text-center md:text-sm text-[10px] uppercase font-semibold text-white cursor-pointer hover:underline">View Products
                                    </a>
                                </div>
                            </div>
                            <div class="aspect-[6/3.8] relative group rounded-3xl overflow-hidden">

                                @if (isset($productBanner[4]['file']))
                                    <img src="{{ Request::root() . '/storage/' . $productBanner[4]['file'] }}"
                                        class="w-full object-cover h-full" alt="category">
                                @else
                                    <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg"
                                        class="w-full h-full" alt="category">
                                @endif

                                <div
                                    class="absolute bottom-0 translate-y-full transition-all group-hover:translate-y-0 right-0 w-full py-2 flex justify-center bg-[#00000040]">
                                    <a href="{{ $productBanner[4]['link'] }}"
                                        class="text-center md:text-sm text-[10px] uppercase font-semibold text-white cursor-pointer hover:underline">View Products
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="aspect-[6/3.8] relative group rounded-3xl overflow-hidden">

                            @if (isset($productBanner[5]['file']))
                                <img src="{{ Request::root() . '/storage/' . $productBanner[5]['file'] }}"
                                    class="w-full object-cover h-full" alt="category">
                            @else
                                <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg"
                                    class="w-full h-full" alt="category">
                            @endif

                            <div
                                class="absolute bottom-0 translate-y-full transition-all group-hover:translate-y-0 right-0 w-full py-3 flex justify-center bg-[#00000040]">
                                <a href="{{ $productBanner[5]['link'] }}"
                                    class="text-center uppercase font-semibold text-white cursor-pointer hover:underline">View
                                    Products
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            {{-- products category section --}}
            <div class="container mx-auto px-4 md:my-28 my-16">
                <p class="md:text-xl text-lg uppercase text-gray-700 font-semibold border-gray-700 border-l-4 pl-3">
                    Categories of Products</p>
                <div class="grid gap-4 xl:grid-cols-4 sm:grid-cols-2 mt-10">

                    @foreach ($categories as $category)
                        <div class="p-5 aspect-[3/4] rounded-md relative overflow-hidden group bg-slate-50"
                            data-aos="zoom-in">
                            <img src="{{ Request::root() . '/storage/' . $category->image }}"
                                class="transition-all group-hover:scale-110 w-full" alt="{{ $category->image }}">
                            <div
                                class="w-full h-full absolute z-10 top-0 left-0 flex justify-end items-center py-10 flex-col px-4">
                                <div
                                    class="text-center translate-y-3/4 group-hover:translate-y-0 transition-all backdrop-blur-[4px] pt-2">
                                    <p class="sm:text-xl text-lg font-semibold text-gray-600 mb-2">{{ $category->title }}</p>
                                    <p
                                        class="text-center font-normal text-gray-600 px-4 mb-4 sm:text-sm text-[12px] invisible group-hover:visible">{{ $category->description }}</p>
                                    <a href="{{ route('landing.product') }}"
                                        class="py-1.5 px-4 bg-primary text-white font-semibold invisible group-hover:visible">View
                                        Products</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- hot products section --}}
            <div class="container mx-auto px-4 md:my-28 my-16">
                <div class="flex justify-between gap-4 items-center">
                    <p class="md:text-xl text-lg uppercase text-gray-700 font-semibold border-gray-700 border-l-4 pl-3">
                        Hot Products</p>

                    <div class="flex items-center gap-4">
                        <Button class="border border-primary py-2 px-3" id="btn-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" class="max-w-4 w-full rotate-180 fill-primary"
                                viewBox="0 0 512 512">
                                <path
                                    d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z" />
                            </svg>
                        </Button>
                        <Button class="border border-primary py-2 px-3" id="btn-next">
                            <svg xmlns="http://www.w3.org/2000/svg" class="max-w-4 w-full fill-primary"
                                viewBox="0 0 512 512">
                                <path
                                    d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z" />
                            </svg>
                        </Button>
                    </div>
                </div>

                <div class="swiper productSlide">
                    {{-- <div class="grid gap-4 xl:grid-cols-5 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 mt-10"> --}}
                    <div class="swiper-wrapper mt-10">
                        @foreach ($hotProduct as $product)
                            <div
                                class=" aspect-[1/1.2] rounded-md relative overflow-hidden group bg-slate-50 swiper-slide">
                                <img src="{{ Request::root() . '/storage/' . $product->media }}"
                                    class="group-hover:-rotate-12 transition-all group-hover:scale-125 w-full"
                                    alt="category">
                                <div
                                    class="w-full h-full absolute z-10 top-0 left-0 right-0 flex justify-end items-center flex-col">
                                    <div
                                        class="text-center translate-y-1/2 group-hover:translate-y-0 transition-all w-full backdrop-blur-[6px] pt-6 pb-10">
                                        <p class="md:text-[17px] text-sm font-semibold text-gray-950 mb-4">{{ $product->title }}
                                        </p>
                                        <a href="/products/{{ $product->slug }}"
                                            class="py-1.5 px-4 bg-primary text-white font-semibold invisible group-hover:visible text-sm">View Product</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="swiper-button-next invisible" id="swiper-button-next"></div>
                    <div class="swiper-button-prev invisible" id="swiper-button-prev"></div>
                </div>

            </div>

            {{-- about us --}}
            <div class="container mx-auto px-4 md:mb-28 my-16">
                <p class="md:text-xl text-lg uppercase text-gray-700 font-semibold border-gray-700 border-l-4 pl-3 mb-10">
                    About us</p>
                <div class="flex justify-between lg:flex-row flex-col items-center md:gap-12 gap-8">
                    <div class="grow w-full" data-aos="fade-up">
                        <img src="https://www.deskera.com/blog/content/images/2023/03/east-riding-archives-UwMslmQ4BqM-unsplash.jpg"
                            class="w-full rounded-md" alt="about">
                    </div>
                    <div class="grow w-full" data-aos="fade-down">
                        <h1 class="text-primary font-semibold lg:text-4xl sm:text-2xl text-xl md:mb-8 mb-4">Moti Multi
                            Plast</h1>

                        <p class="text-gray-600 md:text-base text-sm max-w-2xl font-normal md:mb-4 mb-2">At <span
                                class="font-semibold"> Moti Multi Plast </span>, we are committed to serve the packaging
                            and custom plastic need of the customers. </p>
                        <p class="text-gray-600 md:text-base text-sm max-w-2xl font-normal md:mb-4 mb-2">Established in the
                            year <span class="font-semibold"> 1996 </span> as a noteworthy <span class="font-semibold">
                                manufacturer </span> of <span class="font-semibold"> Multipurpose Plastic Food Containers,
                                Household Plastic Food Containers, Kitchen Containers, Plastic Food Storage Containers,
                                Saree Covers </span> and others, we have met the local taste and demand of the market. </p>
                        <p class="text-gray-600 md:text-base text-sm max-w-2xl font-normal md:mb-4 mb-2"> These products
                            are manufactured with premium grade of raw material that is procured from reliable vendors.
                        <p class="text-gray-600 md:text-base text-sm max-w-2xl font-normal">The high quality and
                            unmatchable features of our gamut has helped us in exploring new opportunities and becoming a
                            reliable & a prominent player in the industry.</p>
                    </div>
                </div>
            </div>

            {{-- our clientele --}}
            @if (count($clientLogo))
                <div class="max-w-[1920px] mx-auto">
                    <div class="container mx-auto px-4 my-10 ">
                        <p
                            class="md:text-xl text-lg uppercase text-gray-700 font-semibold border-gray-700 border-l-4 pl-3">
                            our clientele</p>
                    </div>
                    <div class="swiper clientSlide">
                        <div class="swiper-wrapper">
                            @foreach ($clientLogo as $logo)
                                <div class="swiper-slide aspect-[6/2] ">
                                    <img src="{{ Request::root() . '/storage/' . $logo->file }}" style="object-fit: contain" class="w-full" alt="box">
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection

@section('meta')
    <meta name="og:type" content="website" />
    <meta name="og:title" content="Moti multi plastics" />
    <meta name="description" content="Moti Multi Plastics: Your trusted partner in high-quality plastic manufacturing. Offering innovative solutions for all your plastic needs, from custom designs to large-scale production. Explore our range of durable, eco-friendly products.">
    <meta name="og:description" content="Moti Multi Plastics: Your trusted partner in high-quality plastic manufacturing. Offering innovative solutions for all your plastic needs, from custom designs to large-scale production. Explore our range of durable, eco-friendly products." />
    <meta name="og:url" content="{{ url()->current() }}" />
    <meta name="og:image" content="{{ asset('assets/svgs/logo.svg') }}" />
@endsection

@section('body-scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            autoplay: true,
            pagination: {
                el: ".swiper-pagination",
                dynamicBullets: true,
            },
        });

        var swiper = new Swiper(".clientSlide", {
            slidesPerView: window.innerWidth >= 748 ? 5 : 3,
            spaceBetween: 20,
            loop: true,
            autoplay: true,
        });

        // xl:grid-cols-5 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2
        var swiper = new Swiper(".productSlide", {
            slidesPerView: window.innerWidth >= 640 ? window.innerWidth >= 748 ? window.innerWidth >= 1024 ? window
                .innerWidth >= 1280 ? 5 : 4 : 3 : 2 : 1,
            spaceBetween: 20,
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

        let swiperNext = document.getElementById("swiper-button-next")
        let swiperPrev = document.getElementById("swiper-button-prev")

        let btnNext = document.getElementById("btn-next")
        let btnPrev = document.getElementById("btn-prev")

        btnNext.addEventListener("click", () => swiperNext.click())
        btnPrev.addEventListener("click", () => swiperPrev.click())
    </script>
@endsection

@section('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
@endsection
