@extends('layouts.landing')

@section('page-title')
    Moti multi plastics
@endsection

@section('body')
    <section>
        <div class="max-w-[1920px] mx-auto">

            {{-- hero section --}}
            <div class="md:px-4" >
                <div class="w-full md:aspect-[5/2] aspect-square overflow-hidden max-w-[1780px] md:rounded-2xl mx-auto md:my-8 mb-4">
                    <div class="swiper mySwiper relative">
                        <div class="swiper-wrapper">
                            {{-- <img src="https://www.rollick.co.in/assets/front-end/png/slider/2.webp" alt="box">
                                <img src="https://www.rollick.co.in/assets/front-end/png/slider/banner-5.webp" alt="box">
                                <img src="https://www.rollick.co.in/assets/front-end/png/slider/3.webp" alt="box"> --}}
                            @foreach ($heroBanner as $banner)
                                <div class="swiper-slide">
                                    <a href="{{ $banner->link }}" class="md:h-auto h-full" target="_blank">
                                        <img src="{{ asset('storage/' . $banner->file) }}" alt="box">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next invisible" id="heroSlidePrevBtn"></div>
                        <div class="swiper-button-prev invisible" id="heroSlideNextBtn"></div>
                        <div class="swiper-pagination"></div>
                        <div class="absolute cursor-pointer bg-white md:w-12 w-10 aspect-square rounded-full top-1/2 md:left-5 left-2 -translate-y-1/2 z-20 md:grid hidden place-items-center"
                            onclick="heroSlidePrev()">
                            <svg xmlns="http://www.w3.org/2000/svg" class="md:max-w-5 max-w-4 rotate-180 fill-primary"
                                viewBox="0 0 512 512">
                                <path
                                    d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z" />
                            </svg>
                        </div>
                        <div class="absolute cursor-pointer bg-white md:w-12 w-10 aspect-square rounded-full top-1/2 md:right-5 right-2 -translate-y-1/2 z-20 md:grid hidden place-items-center"
                            onclick="heroSlideNext()">
                            <svg xmlns="http://www.w3.org/2000/svg" class="md:max-w-5 max-w-4 fill-primary" viewBox="0 0 512 512">
                                <path
                                    d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            {{-- marquee section --}}
            {{-- <div class="bg-yellow-300 overflow-hidden">

                <div class="flex items-center gap-[36px] whitespace-nowrap marquee py-3">
                    @foreach ($marquee as $category)
                        <div class="text-lg text-black capitalize">{{ $category->title }}</div>
                    @endforeach
                </div>
            </div> --}}

            {{-- features --}}
            <div class="md:my-12 mt-4 mb-8">
                <div class="container mx-auto p-4">
                    <div class="grow w-full">
                        <div class="w-full grid gap-4 xl:grid-cols-4 sm:grid-cols-2">
                            <div class="p-4 shadow-lg rounded-lg">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="md:max-w-8 max-w-6 w-full fill-primary"
                                        viewBox="0 0 448 512">
                                        <path
                                            d="M160 80c0-26.5 21.5-48 48-48h32c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H208c-26.5 0-48-21.5-48-48V80zM0 272c0-26.5 21.5-48 48-48H80c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V272zM368 96h32c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H368c-26.5 0-48-21.5-48-48V144c0-26.5 21.5-48 48-48z" />
                                    </svg>
                                </div>
                                <p class="mt-6 mb-2 font-semibold sm:text-xl text-base text-gray-500">Market
                                    Leaders</p>
                                <p class="font-normal">More then 3 years of experience in the industry, backed
                                    by strong
                                    leadership and energetic
                                    innovatores.</p>
                            </div>
                            <div class="p-4 shadow-lg rounded-lg">
                                <div>

                                    <svg xmlns="http://www.w3.org/2000/svg" class="md:max-w-8 max-w-6 w-full fill-primary"
                                        viewBox="0 0 512 512">
                                        <path
                                            d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z" />
                                    </svg>
                                </div>
                                <p class="mt-6 mb-2 font-semibold sm:text-xl text-base text-gray-500">Backward
                                    Integration
                                </p>
                                <p class="font-normal">More then 3 years of experience in the industry, backed
                                    by strong
                                    leadership and energetic
                                    innovatores.</p>
                            </div>
                            <div class="p-4 shadow-lg rounded-lg">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="md:max-w-8 max-w-6 w-full fill-primary"
                                        viewBox="0 0 512 512">
                                        <path
                                            d="M4.1 38.2C1.4 34.2 0 29.4 0 24.6C0 11 11 0 24.6 0H133.9c11.2 0 21.7 5.9 27.4 15.5l68.5 114.1c-48.2 6.1-91.3 28.6-123.4 61.9L4.1 38.2zm503.7 0L405.6 191.5c-32.1-33.3-75.2-55.8-123.4-61.9L350.7 15.5C356.5 5.9 366.9 0 378.1 0H487.4C501 0 512 11 512 24.6c0 4.8-1.4 9.6-4.1 13.6zM80 336a176 176 0 1 1 352 0A176 176 0 1 1 80 336zm184.4-94.9c-3.4-7-13.3-7-16.8 0l-22.4 45.4c-1.4 2.8-4 4.7-7 5.1L168 298.9c-7.7 1.1-10.7 10.5-5.2 16l36.3 35.4c2.2 2.2 3.2 5.2 2.7 8.3l-8.6 49.9c-1.3 7.6 6.7 13.5 13.6 9.9l44.8-23.6c2.7-1.4 6-1.4 8.7 0l44.8 23.6c6.9 3.6 14.9-2.2 13.6-9.9l-8.6-49.9c-.5-3 .5-6.1 2.7-8.3l36.3-35.4c5.6-5.4 2.5-14.8-5.2-16l-50.1-7.3c-3-.4-5.7-2.4-7-5.1l-22.4-45.4z" />
                                    </svg>
                                </div>
                                <p class="mt-6 mb-2 font-semibold sm:text-xl text-base text-gray-500">ISO
                                    Certified</p>
                                <p class="font-normal">More then 3 years of experience in the industry, backed
                                    by strong
                                    leadership and energetic
                                    innovatores.</p>
                            </div>
                            <div class="p-4 shadow-lg rounded-lg">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="md:max-w-8 max-w-6 w-full fill-primary"
                                        viewBox="0 0 512 512">
                                        <path
                                            d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z" />
                                    </svg>
                                </div>
                                <p class="mt-6 mb-2 font-semibold sm:text-xl text-base text-gray-500">Listed
                                    Publicly</p>
                                <p class="font-normal">More then 3 years of experience in the industry, backed
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
                <div class="grid md:gap-4 gap-2 md:grid-cols-2">
                    <div>
                        <div class="aspect-[6/3.8] relative group md:rounded-2xl rounded-lg overflow-hidden">
                            {{-- <img src="https://moldtekpackaging.com/assets/images/paint-flyer.jpeg" class="w-full h-full"
                                alt="category"> --}}

                            @if (isset($productBanner[0]['file']))
                                <img src="{{ asset('storage/' . $productBanner[0]['file']) }}"
                                    class="w-full object-cover h-full" alt="category">
                            @else
                                <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg"
                                    class="w-full h-full" alt="category">
                            @endif

                            <a href="{{ $productBanner[0]['link'] }}"
                                class="bg-white w-12 rounded-xl aspect-square absolute grid place-items-center cursor-pointer top-3 right-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="max-w-5 -rotate-45 fill-primary"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z" />
                                </svg>
                            </a>
                        </div>
                        <div class="grid md:gap-4 gap-1 grid-cols-2 md:mt-4 mt-2">
                            <div class="aspect-[6/3.8] relative group md:rounded-2xl rounded-lg overflow-hidden">

                                @if (isset($productBanner[1]['file']))
                                    <img src="{{ asset('storage/' . $productBanner[1]['file']) }}"
                                        class="w-full object-cover h-full" alt="category">
                                @else
                                    <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg"
                                        class="w-full h-full" alt="category">
                                @endif

                                <a href="{{ $productBanner[1]['link'] }}"
                                    class="bg-white w-10 rounded-xl aspect-square absolute grid place-items-center cursor-pointer top-2 right-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="max-w-4 -rotate-45 fill-primary"
                                        viewBox="0 0 512 512">
                                        <path
                                            d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z" />
                                    </svg>
                                </a>
                            </div>
                            <div class="aspect-[6/3.8] relative group md:rounded-2xl rounded-lg overflow-hidden">

                                @if (isset($productBanner[2]['file']))
                                    <img src="{{ asset('storage/' . $productBanner[2]['file']) }}"
                                        class="w-full object-cover h-full" alt="category">
                                @else
                                    <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg"
                                        class="w-full h-full" alt="category">
                                @endif

                                <a href="{{ $productBanner[2]['link'] }}"
                                    class="bg-white w-10 rounded-xl aspect-square absolute grid place-items-center cursor-pointer top-2 right-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="max-w-4 -rotate-45 fill-primary"
                                        viewBox="0 0 512 512">
                                        <path
                                            d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div>
                        <div class="grid md:gap-4 gap-1 grid-cols-2 md:mb-4 mb-2">
                            <div class="aspect-[6/3.8] relative group md:rounded-2xl rounded-lg overflow-hidden">

                                @if (isset($productBanner[3]['file']))
                                    <img src="{{ asset('storage/' . $productBanner[3]['file']) }}"
                                        class="w-full object-cover h-full" alt="category">
                                @else
                                    <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg"
                                        class="w-full h-full" alt="category">
                                @endif

                                <a href="{{ $productBanner[3]['link'] }}"
                                    class="bg-white w-10 rounded-xl aspect-square absolute grid place-items-center cursor-pointer top-2 right-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="max-w-4 -rotate-45 fill-primary"
                                        viewBox="0 0 512 512">
                                        <path
                                            d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z" />
                                    </svg>
                                </a>
                            </div>
                            <div class="aspect-[6/3.8] relative group md:rounded-2xl rounded-lg overflow-hidden">

                                @if (isset($productBanner[4]['file']))
                                    <img src="{{ asset('storage/' . $productBanner[4]['file']) }}"
                                        class="w-full object-cover h-full" alt="category">
                                @else
                                    <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg"
                                        class="w-full h-full" alt="category">
                                @endif

                                <a href="{{ $productBanner[4]['link'] }}"
                                    class="bg-white w-10 rounded-xl aspect-square absolute grid place-items-center cursor-pointer top-2 right-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="max-w-4 -rotate-45 fill-primary"
                                        viewBox="0 0 512 512">
                                        <path
                                            d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div class="aspect-[6/3.8] relative group md:rounded-2xl rounded-lg overflow-hidden">

                            @if (isset($productBanner[5]['file']))
                                <img src="{{ asset('storage/' . $productBanner[5]['file']) }}"
                                    class="w-full object-cover h-full" alt="category">
                            @else
                                <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg"
                                    class="w-full h-full" alt="category">
                            @endif

                            <a href="{{ $productBanner[5]['link'] }}"
                                class="bg-white w-12 rounded-xl aspect-square absolute grid place-items-center cursor-pointer top-3 right-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="max-w-5 -rotate-45 fill-primary"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z" />
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            {{-- products category section --}}
            <div class="container mx-auto px-4 md:my-28 my-16">
                <p class="md:text-3xl text-2xl capitalize text-gray-700 font-semibold">Product Variants
                </p>
                <div class="grid gap-4 xl:grid-cols-4 sm:grid-cols-2 md:mt-10 mt-8">

                    @foreach ($categories as $category)
                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow flex flex-col">
                            <div class="bg-gray-100 rounded-t-xl w-full aspect-[3/2]">
                                <img class="rounded-t-lg aspect-[3/2] object-contain mx-auto lazyload"
                                    data-src="{{ asset('storage/' . $category->image) }}"
                                    data-alt="{{ $category->image }}" class="lazyload hidden" />
                            </div>
                            <div class="p-5 flex flex-col grow">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">{{ $category->title }}
                                </h5>
                                <p class="mb-3 font-normal text-gray-700 ">{{ $category->description }}</p>
                                <a href="{{ route('landing.product') }}"
                                    class="inline-flex items-center px-3 py-2 mt-auto w-fit text-sm font-medium text-center text-white bg-primary rounded-lg">
                                    Read more
                                    <svg class="-rotate-45 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- hot products section --}}
            <div class="container mx-auto px-4 md:my-28 my-16">
                <div class="flex justify-between gap-4 items-center">
                    <p class="md:text-3xl text-2xl capitalize text-gray-700 font-semibold">
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
                            <div class="bg-white border border-gray-200 rounded-xl flex flex-col swiper-slide">
                                <div class="bg-gray-100 rounded-t-xl w-full aspect-[3/2]">
                                    <img class="rounded-t-lg aspect-[3/2] object-contain mx-auto lazyload"
                                        data-src="{{ asset('storage/' . $product->media) }}"
                                        data-alt="{{ $product->title }}" class="lazyload hidden" />
                                </div>
                                <div class="p-4 flex flex-col w-full">
                                    <h5 class="my-2 text-lg font-semibold text-left tracking-tight text-gray-900">
                                        {{ $product->title }}</h5>

                                    <div class="mt-4 flex justify-between items-center gap-2">
                                        <a href="/products/{{ $product->slug }}"
                                            class="inline-flex w-fit mt-auto items-center px-2 py-1 text-sm font-medium text-center text-primary bg-transparent border border-primary rounded-md">
                                            View Product
                                            <svg class="rtl:rotate-180 w-2.5 h-2.5 ms-2 -rotate-45" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                                            </svg>
                                        </a>
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
                <p class="md:text-3xl text-2xl capitalize md:text-center text-gray-700 font-semibold mb-10">
                    About us</p>
                <div class="flex justify-between lg:flex-row flex-col items-center md:gap-12 gap-8">
                    <div class="grow w-full">
                        <img src="https://www.deskera.com/blog/content/images/2023/03/east-riding-archives-UwMslmQ4BqM-unsplash.jpg"
                            class="w-full rounded-md" alt="about">
                    </div>
                    <div class="grow w-full">
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

            {{-- testimonial --}}
            <div class="container mx-auto max-w-6xl p-4">
                <p class="md:text-3xl text-2xl md:text-center capitalize text-gray-700 font-semibold mb-10">
                    Read Trusted Reviews From Our Customers</p>
                <div class="md:columns-2 lg:columns-3 gap-6 sm:p-1 mt-2">


                    <div class="animate-in zoom-in duration-200">
                        <div
                            class="ring-1 rounded-lg flex flex-col space-y-2 p-4 break-inside-avoid mb-6 bg-white hover:ring-2 ring-gray-300 hover:ring-primary transform duration-200 hover:shadow-sky-200 hover:shadow-md z-0 relative">
                            <div class="flex flex-col break-inside-avoid-page z-0 relative">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-10 aspect-square fill-primary-500" viewBox="0 0 448 512">
                                        <path
                                            d="M0 216C0 149.7 53.7 96 120 96l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72zm256 0c0-66.3 53.7-120 120-120l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72z" />
                                    </svg>
                                </div>
                                <div class="flex justify-between mt-4">
                                    <div class="flex space-x-6">
                                        <div class="flex space-x-4 flex-shrink-0 w-52">
                                            <div>
                                                <div class="font-semibold">
                                                    Salvador Rose
                                                </div>
                                                <div class="text-sm">
                                                    <div class="flex items-center">
                                                        <svg class="w-3 h-4 text-primary" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                        <svg class="w-3 h-4 ms-0.5 text-primary" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                        <svg class="w-3 h-4 ms-0.5 text-primary" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                        <svg class="w-3 h-4 ms-0.5 text-primary" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                        <svg class="w-3 h-4 ms-0.5 text-gray-300" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <p class="mt-4">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="animate-in zoom-in duration-200">
                        <div
                            class="ring-1 rounded-lg flex flex-col space-y-2 p-4 break-inside-avoid mb-6 bg-white hover:ring-2 ring-gray-300 hover:ring-primary transform duration-200 hover:shadow-sky-200 hover:shadow-md z-0 relative">
                            <div class="flex flex-col break-inside-avoid-page z-0 relative">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-10 aspect-square fill-primary-500" viewBox="0 0 448 512">
                                        <path
                                            d="M0 216C0 149.7 53.7 96 120 96l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72zm256 0c0-66.3 53.7-120 120-120l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72z" />
                                    </svg>
                                </div>
                                <div class="flex justify-between mt-4">
                                    <div class="flex space-x-6">
                                        <div class="flex space-x-4 flex-shrink-0 w-52">
                                            <div>
                                                <div class="font-semibold">
                                                    Mike tyson
                                                </div>
                                                <div class="text-sm">
                                                    <div class="flex items-center">
                                                        <svg class="w-3 h-4 text-primary" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                        <svg class="w-3 h-4 ms-0.5 text-primary" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                        <svg class="w-3 h-4 ms-0.5 text-primary" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                        <svg class="w-3 h-4 ms-0.5 text-primary" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                        <svg class="w-3 h-4 ms-0.5 text-gray-300" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                </div>

                                <p class="mt-4">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut
                                    labore et dolore magna aliqua.
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="animate-in zoom-in duration-200">
                        <div
                            class="ring-1 rounded-lg flex flex-col space-y-2 p-4 break-inside-avoid mb-6 bg-white hover:ring-2 ring-gray-300 hover:ring-primary transform duration-200 hover:shadow-sky-200 hover:shadow-md z-0 relative">
                            <div class="flex flex-col break-inside-avoid-page z-0 relative">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-10 aspect-square fill-primary-500" viewBox="0 0 448 512">
                                        <path
                                            d="M0 216C0 149.7 53.7 96 120 96l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72zm256 0c0-66.3 53.7-120 120-120l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72z" />
                                    </svg>
                                </div>
                                <div class="flex justify-between mt-4">
                                    <div class="flex space-x-6">
                                        <div class="flex space-x-4 flex-shrink-0 w-52">
                                            <div>
                                                <div class="font-semibold">
                                                    Cheung
                                                </div>
                                                <div class="text-sm">
                                                    <div class="flex items-center">
                                                        <svg class="w-3 h-4 text-primary" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                        <svg class="w-3 h-4 ms-0.5 text-primary" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                        <svg class="w-3 h-4 ms-0.5 text-primary" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                        <svg class="w-3 h-4 ms-0.5 text-primary" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                        <svg class="w-3 h-4 ms-0.5 text-gray-300" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <p class="mt-4">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="animate-in zoom-in duration-200">
                        <div
                            class="ring-1 rounded-lg flex flex-col space-y-2 p-4 break-inside-avoid mb-6 bg-white hover:ring-2 ring-gray-300 hover:ring-primary transform duration-200 hover:shadow-sky-200 hover:shadow-md z-0 relative">
                            <div class="flex flex-col break-inside-avoid-page z-0 relative">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-10 aspect-square fill-primary-500" viewBox="0 0 448 512">
                                        <path
                                            d="M0 216C0 149.7 53.7 96 120 96l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72zm256 0c0-66.3 53.7-120 120-120l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72z" />
                                    </svg>
                                </div>
                                <div class="flex justify-between mt-4">
                                    <div class="flex space-x-6">
                                        <div class="flex space-x-4 flex-shrink-0 w-52">
                                            <div>
                                                <div class="font-semibold">
                                                    Sia
                                                </div>
                                                <div class="text-sm">
                                                    <div class="flex items-center">
                                                        <svg class="w-3 h-4 text-primary" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                        <svg class="w-3 h-4 ms-0.5 text-primary" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                        <svg class="w-3 h-4 ms-0.5 text-primary" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                        <svg class="w-3 h-4 ms-0.5 text-primary" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                        <svg class="w-3 h-4 ms-0.5 text-gray-300" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <p class="mt-4">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="animate-in zoom-in duration-200">
                        <div
                            class="ring-1 rounded-lg flex flex-col space-y-2 p-4 break-inside-avoid mb-6 bg-white hover:ring-2 ring-gray-300 hover:ring-primary transform duration-200 hover:shadow-sky-200 hover:shadow-md z-0 relative">
                            <div class="flex flex-col break-inside-avoid-page z-0 relative">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-10 aspect-square fill-primary-500" viewBox="0 0 448 512">
                                        <path
                                            d="M0 216C0 149.7 53.7 96 120 96l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72zm256 0c0-66.3 53.7-120 120-120l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72z" />
                                    </svg>
                                </div>
                                <div class="flex justify-between mt-4">
                                    <div class="flex space-x-6">
                                        <div class="flex space-x-4 flex-shrink-0 w-52">
                                            <div>
                                                <div class="font-semibold">
                                                    King
                                                </div>
                                                <div class="text-sm">
                                                    <div class="flex items-center">
                                                        <svg class="w-3 h-4 text-primary" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                        <svg class="w-3 h-4 ms-0.5 text-primary" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                        <svg class="w-3 h-4 ms-0.5 text-primary" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                        <svg class="w-3 h-4 ms-0.5 text-primary" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                        <svg class="w-3 h-4 ms-0.5 text-gray-300" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-4"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor
                                    incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat.
                                </p>

                            </div>
                        </div>
                    </div>


                    <div class="animate-in zoom-in duration-200">
                        <div
                            class="ring-1 rounded-lg flex flex-col space-y-2 p-4 break-inside-avoid mb-6 bg-white hover:ring-2 ring-gray-300 hover:ring-primary transform duration-200 hover:shadow-sky-200 hover:shadow-md z-0 relative">
                            <div class="flex flex-col break-inside-avoid-page z-0 relative">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-10 aspect-square fill-primary-500" viewBox="0 0 448 512">
                                        <path
                                            d="M0 216C0 149.7 53.7 96 120 96l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72zm256 0c0-66.3 53.7-120 120-120l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72z" />
                                    </svg>
                                </div>
                                <div class="flex justify-between mt-4">
                                    <div class="flex space-x-6">
                                        <div class="flex space-x-4 flex-shrink-0 w-52">
                                            <div>
                                                <div class="font-semibold">
                                                    Yoda
                                                </div>
                                                <div class="text-sm">
                                                    <div class="flex items-center">
                                                        <svg class="w-3 h-4 text-primary" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                        <svg class="w-3 h-4 ms-0.5 text-primary" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                        <svg class="w-3 h-4 ms-0.5 text-primary" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                        <svg class="w-3 h-4 ms-0.5 text-primary" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                        <svg class="w-3 h-4 ms-0.5 text-gray-300" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <p class="mt-4 "> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor
                                    incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="animate-in zoom-in duration-200">
                        <div
                            class="ring-1 rounded-lg flex flex-col space-y-2 p-4 break-inside-avoid mb-6 bg-white hover:ring-2 ring-gray-300 hover:ring-primary transform duration-200 hover:shadow-sky-200 hover:shadow-md z-0 relative">
                            <div class="flex flex-col break-inside-avoid-page z-0 relative">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-10 aspect-square fill-primary-500" viewBox="0 0 448 512">
                                        <path
                                            d="M0 216C0 149.7 53.7 96 120 96l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72zm256 0c0-66.3 53.7-120 120-120l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72z" />
                                    </svg>
                                </div>
                                <div class="flex justify-between mt-4">
                                    <div class="flex space-x-6">
                                        <div class="flex space-x-4 flex-shrink-0 w-52">
                                            <div>
                                                <div class="font-semibold">
                                                    Sia
                                                </div>
                                                <div class="text-sm">
                                                    <div class="flex items-center">
                                                        <svg class="w-3 h-4 text-primary" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                        <svg class="w-3 h-4 ms-0.5 text-primary" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                        <svg class="w-3 h-4 ms-0.5 text-primary" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                        <svg class="w-3 h-4 ms-0.5 text-primary" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                        <svg class="w-3 h-4 ms-0.5 text-gray-300" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <p class="mt-4">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut
                                    labore et dolore magna aliqua.
                                </p>

                            </div>
                        </div>
                    </div>


                    <div class="animate-in zoom-in duration-200">
                        <div
                            class="ring-1 rounded-lg flex flex-col space-y-2 p-4 break-inside-avoid mb-6 bg-white hover:ring-2 ring-gray-300 hover:ring-primary transform duration-200 hover:shadow-sky-200 hover:shadow-md z-0 relative">
                            <div class="flex flex-col break-inside-avoid-page z-0 relative">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-10 aspect-square fill-primary-500" viewBox="0 0 448 512">
                                        <path
                                            d="M0 216C0 149.7 53.7 96 120 96l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72zm256 0c0-66.3 53.7-120 120-120l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72z" />
                                    </svg>
                                </div>
                                <div class="flex justify-between mt-4">
                                    <div class="flex space-x-6">
                                        <div class="flex space-x-4 flex-shrink-0 w-52">
                                            <div>
                                                <div class="font-semibold">
                                                    King
                                                </div>
                                                <div class="text-sm">
                                                    <div class="flex items-center">
                                                        <svg class="w-3 h-4 text-primary" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                        <svg class="w-3 h-4 ms-0.5 text-primary" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                        <svg class="w-3 h-4 ms-0.5 text-primary" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                        <svg class="w-3 h-4 ms-0.5 text-primary" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                        <svg class="w-3 h-4 ms-0.5 text-gray-300" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <p class="mt-4"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor
                                    incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="animate-in zoom-in duration-200">
                        <div
                            class="ring-1 rounded-lg flex flex-col space-y-2 p-4 break-inside-avoid mb-6 bg-white hover:ring-2 ring-gray-300 hover:ring-primary transform duration-200 z-0 relative">
                            <div class="flex flex-col break-inside-avoid-page z-0 relative">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-10 aspect-square fill-primary-500" viewBox="0 0 448 512">
                                        <path
                                            d="M0 216C0 149.7 53.7 96 120 96l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72zm256 0c0-66.3 53.7-120 120-120l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72z" />
                                    </svg>
                                </div>
                                <div class="flex justify-between mt-4">
                                    <div class="flex space-x-6">
                                        <div class="flex space-x-4 flex-shrink-0 w-52">
                                            <div>
                                                <div class="font-semibold">
                                                    Yoda
                                                </div>
                                                <div class="text-sm">
                                                    <div class="flex items-center">
                                                        <svg class="w-3 h-4 text-primary" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                        <svg class="w-3 h-4 ms-0.5 text-primary" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                        <svg class="w-3 h-4 ms-0.5 text-primary" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                        <svg class="w-3 h-4 ms-0.5 text-primary" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                        <svg class="w-3 h-4 ms-0.5 text-gray-300" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <p class="mt-4"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor
                                    incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

@section('meta')
    <meta name="og:type" content="website" />
    <meta name="og:title" content="Moti multi plastics" />
    <meta name="description"
        content="Moti Multi Plastics: Your trusted partner in high-quality plastic manufacturing. Offering innovative solutions for all your plastic needs, from custom designs to large-scale production. Explore our range of durable, eco-friendly products.">
    <meta name="og:description"
        content="Moti Multi Plastics: Your trusted partner in high-quality plastic manufacturing. Offering innovative solutions for all your plastic needs, from custom designs to large-scale production. Explore our range of durable, eco-friendly products." />
    <meta name="og:url" content="{{ url()->current() }}" />
    <meta name="og:image" content="{{ asset('assets/images/logo.png') }}" />
    <meta property="og:site_name" content="Moti Multi plast" />
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
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
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

        let heroSlidePrevBtn = document.getElementById("heroSlidePrevBtn")
        let heroSlideNextBtn = document.getElementById("heroSlideNextBtn")

        const heroSlidePrev = () => heroSlideNextBtn.click()
        const heroSlideNext = () => heroSlidePrevBtn.click()
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

        .marquee {
            animation: marquee 10s linear infinite;
        }

        @keyframes marquee {
            0% {
                transform: translate3d(0, 0, 0);
            }

            100% {
                transform: translate3d(-50%, 0, 0);
            }
        }
    </style>
@endsection
