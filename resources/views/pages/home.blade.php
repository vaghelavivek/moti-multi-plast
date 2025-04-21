@extends('layouts.landing')

@section('page-title')
    Moti multi plastics
@endsection

@section('body')
    <section>
        <div class="max-w-[1920px] mx-auto">

            {{-- hero section --}}
            <div class="md:px-4">
                <div class="w-full md:aspect-[4.5/2] aspect-square overflow-hidden max-w-[1780px] md:rounded-2xl mx-auto md:my-2 mb-4">
                    <div class="mySwiper relative h-full">
                        <div class="swiper-wrapper">
                            @foreach ($heroBanner as $banner)
                                <div class="swiper-slide">
                                    <a href="{{ $banner->link }}" class="md:h-auto h-full w-full" target="_blank">
                                        <img src="{{ asset('storage/' . $banner->file) }}" class="h-full w-full object-cover md:block hidden" alt="box">
                                        <img src="{{ asset('storage/' . $banner->mobile_file) }}" class="h-full w-full object-cover md:hidden block" alt="box">
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
                                    <svg xmlns="http://www.w3.org/2000/svg"  class="md:max-w-8 max-w-6 w-full fill-primary" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M400 0L176 0c-26.5 0-48.1 21.8-47.1 48.2c.2 5.3 .4 10.6 .7 15.8L24 64C10.7 64 0 74.7 0 88c0 92.6 33.5 157 78.5 200.7c44.3 43.1 98.3 64.8 138.1 75.8c23.4 6.5 39.4 26 39.4 45.6c0 20.9-17 37.9-37.9 37.9L192 448c-17.7 0-32 14.3-32 32s14.3 32 32 32l192 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-26.1 0C337 448 320 431 320 410.1c0-19.6 15.9-39.2 39.4-45.6c39.9-11 93.9-32.7 138.2-75.8C542.5 245 576 180.6 576 88c0-13.3-10.7-24-24-24L446.4 64c.3-5.2 .5-10.4 .7-15.8C448.1 21.8 426.5 0 400 0zM48.9 112l84.4 0c9.1 90.1 29.2 150.3 51.9 190.6c-24.9-11-50.8-26.5-73.2-48.3c-32-31.1-58-76-63-142.3zM464.1 254.3c-22.4 21.8-48.3 37.3-73.2 48.3c22.7-40.3 42.8-100.5 51.9-190.6l84.4 0c-5.1 66.3-31.1 111.2-63 142.3z"/></svg>
                                </div>
                                <p class="mt-6 mb-2 font-semibold sm:text-xl text-base text-gray-500">Quality, Consistency & Commitment</p>
                                <p class="font-normal">Our core values ensure reliable, high-quality, 
                                    and durable packaging solutions
                                     tailored to customer needs.</p>
                            </div>
                            <div class="p-4 shadow-lg rounded-lg">
                                <div>

                                    <svg xmlns="http://www.w3.org/2000/svg"  class="md:max-w-8 max-w-6 w-full fill-primary"  viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M176 24c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 40c-35.3 0-64 28.7-64 64l-40 0c-13.3 0-24 10.7-24 24s10.7 24 24 24l40 0 0 56-40 0c-13.3 0-24 10.7-24 24s10.7 24 24 24l40 0 0 56-40 0c-13.3 0-24 10.7-24 24s10.7 24 24 24l40 0c0 35.3 28.7 64 64 64l0 40c0 13.3 10.7 24 24 24s24-10.7 24-24l0-40 56 0 0 40c0 13.3 10.7 24 24 24s24-10.7 24-24l0-40 56 0 0 40c0 13.3 10.7 24 24 24s24-10.7 24-24l0-40c35.3 0 64-28.7 64-64l40 0c13.3 0 24-10.7 24-24s-10.7-24-24-24l-40 0 0-56 40 0c13.3 0 24-10.7 24-24s-10.7-24-24-24l-40 0 0-56 40 0c13.3 0 24-10.7 24-24s-10.7-24-24-24l-40 0c0-35.3-28.7-64-64-64l0-40c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 40-56 0 0-40c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 40-56 0 0-40zM160 128l192 0c17.7 0 32 14.3 32 32l0 192c0 17.7-14.3 32-32 32l-192 0c-17.7 0-32-14.3-32-32l0-192c0-17.7 14.3-32 32-32zm192 32l-192 0 0 192 192 0 0-192z"/></svg>
                                </div>
                                <p class="mt-6 mb-2 font-semibold sm:text-xl text-base text-gray-500">Advanced Technology
                                </p>
                                <p class="font-normal">Highly automated processes and all-electric machinery ensure precision and consistent quality for our products.</p>
                            </div>
                            <div class="p-4 shadow-lg rounded-lg">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="md:max-w-8 max-w-6 w-full fill-primary" viewBox="0 0 512 512">
                                        <path d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z"></path>
                                    </svg>
                                </div>
                                <p class="mt-6 mb-2 font-semibold sm:text-xl text-base text-gray-500">Industry Leadership</p>
                                <p class="font-normal">With over 15 years of expertise and a commitment to innovation, we have become a trusted partner in our industry.</p>
                            </div>
                            <div class="p-4 shadow-lg rounded-lg">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg"  class="md:max-w-8 max-w-6 w-full fill-primary" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M272 96c-78.6 0-145.1 51.5-167.7 122.5c33.6-17 71.5-26.5 111.7-26.5l88 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-16 0-72 0s0 0 0 0c-16.6 0-32.7 1.9-48.3 5.4c-25.9 5.9-49.9 16.4-71.4 30.7c0 0 0 0 0 0C38.3 298.8 0 364.9 0 440l0 16c0 13.3 10.7 24 24 24s24-10.7 24-24l0-16c0-48.7 20.7-92.5 53.8-123.2C121.6 392.3 190.3 448 272 448l1 0c132.1-.7 239-130.9 239-291.4c0-42.6-7.5-83.1-21.1-119.6c-2.6-6.9-12.7-6.6-16.2-.1C455.9 72.1 418.7 96 376 96L272 96z"/></svg>
                                </div>
                                <p class="mt-6 mb-2 font-semibold sm:text-xl text-base text-gray-500">Sustainable Solutions</p>
                                <p class="font-normal">We prioritize sustainable, cost-effective packaging solutions tailored to meet diverse industry needs.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            

            {{-- products banner section --}}
            {{-- <div class="container mx-auto px-4 mt-4">
                <div class="grid md:gap-4 gap-2 md:grid-cols-2">
                    <div>
                        <div class="aspect-[6/3.8] relative group md:rounded-2xl rounded-lg overflow-hidden">

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
            </div> --}}

            {{-- hot products section --}}
            <div class="container mx-auto px-4 md:my-16 my-16">
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

            {{-- products category section --}}
            <div class="container mx-auto px-4 md:my-18 my-16">
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
                                <a href="{{ route('landing.product', ['category' => $category->id]) }}"
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

            {{-- about us --}}
            <div class="container mx-auto px-4 md:my-18 my-16">
                <p class="md:text-3xl text-2xl capitalize md:text-center text-gray-700 font-semibold mb-10">
                    About us</p>
                <div class="flex justify-between lg:flex-row flex-col items-center md:gap-12 gap-8">
                    <div class="grow w-full">
                        <img src="https://www.deskera.com/blog/content/images/2023/03/east-riding-archives-UwMslmQ4BqM-unsplash.jpg"
                            class="w-full rounded-md" alt="about">
                    </div>
                    <div class="grow w-full">
                        <h1 class="text-primary font-semibold lg:text-4xl sm:text-2xl text-xl md:mb-8 mb-4">Moti Plastic</h1>
                        <p class="text-gray-600 md:text-base text-sm max-w-2xl font-normal md:mb-6 mb-4">
                            <span class="font-semibold">Founded in 2009</span>, Moti Plastic has become a leader in manufacturing 
                            <span class="font-medium">plastic injection-moulded containers and boxes</span> in India. With a focus on quality and innovation, 
                            the company has earned a reputation for its reliable packaging solutions.
                        </p>
                        <p class="text-gray-600 md:text-base text-sm max-w-2xl font-normal md:mb-6 mb-4">
                            The company specializes in producing a wide variety of products in various shapes and sizes. This includes 
                            <span class="font-medium">IML (in-mould labeled) containers</span>, which offer enhanced branding and durability; 
                            <span class="font-medium">tamper-proof containers</span>, designed for safety and security; and 
                            <span class="font-medium">cookies containers</span>, providing aesthetic and functional packaging. 
                            Additionally, Moti Plastic provides end-to-end <span class="font-medium">packaging solutions</span> for the food and dairy industries, 
                            ensuring high standards of hygiene and reliability.
                        </p>
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
                                                    Kaant Food Company
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
                                                        <svg class="w-3 h-4 ms-0.5 text-primary" aria-hidden="true"
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
                                    We've sourced our IML plastic sweet boxes from Moti Plastic top-notch quality, vibrant prints, timely delivery, and great service. A trusted partner for premium food-grade packaging.
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
                                                    Crispy Dosa Company
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
                                                        <svg class="w-3 h-4 ms-0.5 text-primary" aria-hidden="true"
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
                                    Moti Plastic’s dosa boxes are sturdy, food-grade, and reliable. Great quality, timely delivery, and excellent service—highly recommended!
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
                                                    Laxmi Hari Print
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
                                                        <svg class="w-3 h-4 ms-0.5 text-primary" aria-hidden="true"
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
                                    We are glad to be associated with Moti Plastic company for our plastic saree box needs. The quality of the boxes is top-notch—strong, stylish, and perfect for enhancing the appeal of our printed sarees. Their attention to detail, prompt delivery, and consistent product standards have made them a reliable packaging partner for our business. Highly appreciated!
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
                                                    BK - Thavki
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
                                                        <svg class="w-3 h-4 ms-0.5 text-primary" aria-hidden="true"
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
                                    We recently partnered with Moti Plastic Company for our requirement of plastic saree boxes, and we are extremely satisfied with the quality and service. The boxes are sturdy, elegantly designed, and perfect for showcasing and protecting our premium sarees. Their team ensured timely delivery and maintained excellent communication throughout the process. We look forward to a long-term business relationship.
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
                                                    Liwa Foods
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
                                                        <svg class="w-3 h-4 ms-0.5 text-primary" aria-hidden="true"
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
                                    We've been sourcing IML plastic dates boxes from Moti Plastic's durable, food-safe, and visually striking. Their quality, service, and timely delivery make them our trusted packaging partner.
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
                                                    Mishriq Dates Company
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


                                <p class="mt-4 "> Working with Moti Plastic for our plastic dates boxes has been great. Their quality, design, and timely delivery perfectly match our brand. A reliable and professional packaging partner.
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
                                                    Avadh Dairy Farm
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
                                                        <svg class="w-3 h-4 ms-0.5 text-primary" aria-hidden="true"
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

                                <p class="mt-4">We’re extremely pleased with Moti Plastic’s IML sweet boxes. Excellent quality, vibrant print, and timely delivery enhance our brand’s presentation—making them a trusted partner for our growing business.
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
                                                    Muskan Impex
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
                                                        <svg class="w-3 h-4 ms-0.5 text-primary" aria-hidden="true"
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
                                    We’re highly satisfied with the IML plastic dates boxes from Moti Plastic's strong, hygienic, and beautifully printed. Their quality, service, and innovation make them a trusted packaging partner for our brand.
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
                                                    Akshar Foods
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

                                <p class="mt-4"> Moti Plastic has been an excellent packaging partner for our chikki products, providing us with high-quality plastic boxes with IML printing. The boxes are sturdy, food-safe, and visually appealing—perfect for retail display and brand recognition. Their timely delivery and professional service make them a reliable choice for our packaging needs.
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
       <!-- Open Graph Meta Tags -->
        <meta name="og:type" content="website" />
        <meta name="og:title" content="Moti Multi Plast | Plastic Solutions in Dadra & Surat" />
        <meta name="description"
            content="Moti Multi Plast: Your trusted partner in high-quality plastic manufacturing. Specializing in plastic boxes, sari boxes, and custom packaging solutions in Dadra and Surat. Explore durable, eco-friendly products for all your needs.">
        <meta name="og:description"
            content="Moti Multi Plast: Your trusted partner in high-quality plastic manufacturing. Specializing in plastic boxes, sari boxes, and custom packaging solutions in Dadra and Surat. Explore durable, eco-friendly products for all your needs." />
        <meta name="og:url" content="{{ url()->current() }}" />
        <meta name="og:image" content="{{ asset('assets/images/logo.png') }}" />
        <meta property="og:site_name" content="Moti Multi Plast" />

        <!-- Additional Metadata -->
        <meta name="keywords" content="Moti Multi Plast, Moti Plastics, Moti Plastic, plastic box in Dadra, plastic box in Surat, sari box in Surat, sari box in Dadra, plastic manufacturing, IML containers, tamper-proof containers, packaging solutions, eco-friendly plastics, custom plastic products, food packaging, durable plastics, plastic containers in Dadra, plastic containers in Surat">
        <meta name="author" content="Moti Multi Plast">
        <meta name="theme-color" content="rgb(156, 44, 144)">

        <!-- SEO Metadata -->
        <meta name="robots" content="index, follow">
        <meta name="description"
            content="Moti Multi Plast is a leading manufacturer of high-quality plastic products, including plastic boxes and sari boxes, with locations in Dadra and Surat. Established in 2009, we specialize in innovative packaging solutions like IML containers, tamper-proof containers, and more.">
        <meta name="og:description"
            content="Moti Multi Plast is a leading manufacturer of high-quality plastic products, including plastic boxes and sari boxes, with locations in Dadra and Surat. Established in 2009, we specialize in innovative packaging solutions like IML containers, tamper-proof containers, and more." />

        <!-- Structured Data -->
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Moti Multi Plast",
            "url": "https://www.motimultiplast.in/",
            "logo": "{{ asset('assets/images/logo.png') }}",
            "description": "Moti Multi Plast: High-quality plastic packaging solutions including plastic boxes, sari boxes, IML containers, and tamper-proof containers. Trusted by industries across India for innovative, durable, and eco-friendly products.",
            "address": [
                {
                    "@type": "PostalAddress",
                    "streetAddress": "Gala No. 6, Satgurus Industrial Estate, Survey No. 213, 18/1, near Sun Pharma",
                    "addressLocality": "Dadra",
                    "addressRegion": "Dadra and Nagar Haveli and Daman and Diu",
                    "postalCode": "396193",
                    "addressCountry": "India"
                },
                {
                    "@type": "PostalAddress",
                    "streetAddress": "208, Vasudev Estate, Varachha Main Rd, nr. Geetanjali",
                    "addressLocality": "Surat",
                    "addressRegion": "Gujarat",
                    "postalCode": "395006",
                    "addressCountry": "India"
                }
            ],
            "sameAs": [
                "https://www.facebook.com/motimultiplastics",
                "https://www.linkedin.com/company/motimultiplastics"
            ]
        }
</script>

</script>


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
            /* display: block; */
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
