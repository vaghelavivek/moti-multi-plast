<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Theme') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-between items-center gap-4 sm:mb-6 sm:p-0 p-4">
                <p class="font-semibold md:text-xl text-lg text-gray-700">Hero Banner</p>
                <button onclick="openHeroBannerModal()"
                    class="flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-lg bg-primary hover:bg-primary-900">
                    <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                    </svg>
                    Add new banner
                </button>
            </div>
            <div class="sm:p-0 p-4 text-gray-900">
                <div class="grid lg:grid-cols-3 grid-cols-2 gap-4">
                    @foreach ($heroBanner as $banner)
                        <div class="aspect-[5/2] cursor-pointer relative">
                            <div class="absolute right-0 top-0 translate-x-1/2 -translate-y-1/2 z-20 bg-red-500 py-1 px-1.5 rounded-full"
                                onclick="openDeleteModel('banner', {{ $banner->id }})">
                                <svg xmlns="http://www.w3.org/2000/svg" class="max-w-3 w-full fill-white"
                                    viewBox="0 0 384 512">
                                    <path
                                        d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                                </svg>
                            </div>
                            <img src="{{ Request::root() . '/storage/' . $banner->file }}"
                                onclick="openHeroEditModel({{ $banner->id }}, '{{ $banner->file }}' , '{{ $banner->mobile_file }}','{{ $banner->link }}')"
                                class="w-full rounded-md border object-cover h-full" alt="box">
                        </div>
                    @endforeach

                </div>

                @if (!count($heroBanner))
                    <p class="text-center font-medium text-gray-600">No Data Found</p>
                @endif
            </div>

            <div class="flex justify-between items-center gap-4 sm:mb-6 sm:p-0 p-4 md:mt-12 mt-8">
                <p class="font-semibold md:text-xl text-lg text-gray-700">Products Banner</p>
                {{-- <button onclick="openProductBannerModal()"
                    class="flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-lg bg-primary hover:bg-primary-900">
                    <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                    </svg>
                    Add new banner
                </button> --}}
            </div>
            {{-- <div class="sm:p-0 p-4 text-gray-900">
                <div class="grid lg:grid-cols-4 grid-cols-2 gap-4">
                    @foreach ($productBanner as $banner)
                        <div class="aspect-[5/3] cursor-pointer relative">
                            <div class="absolute right-0 top-0 translate-x-1/2 -translate-y-1/2 z-20 bg-red-500 py-1 px-1.5 rounded-full"
                                onclick="openDeleteModel('banner', {{ $banner->id }})">
                                <svg xmlns="http://www.w3.org/2000/svg" class="max-w-3 w-full fill-white"
                                    viewBox="0 0 384 512">
                                    <path
                                        d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                                </svg>
                            </div>
                            <img src="{{ Request::root() . '/storage/' . $banner->file }}"
                                onclick="openProductEditModel({{ $banner->id }}, '{{ Request::root() . '/storage/' . $banner->file }}' , '{{ $banner->link }}')"
                                class="w-full rounded-md object-cover h-full" alt="box">
                        </div>
                    @endforeach
                </div>

                @if (!count($productBanner))
                    <p class="text-center font-medium text-gray-600">No Data Found</p>
                @endif
            </div> --}}

            <div class="grid gap-4 md:grid-cols-2 mt-4 px-4">
                <div>

                    @if (isset($productBanner[0]))
                        <div class="aspect-[6/3.8] cursor-pointer group rounded-3xl overflow-hidden border-2"
                            onclick="openProductBannerModal()">

                            @if (isset($productBanner[0]['file']))
                                <img src="{{ Request::root() . '/storage/' . $productBanner[0]['file'] }}"
                                    onclick="openProductEditModel({{ $productBanner[0]['id'] }}, '{{ Request::root() . '/storage/' . $productBanner[0]['file'] }}' , '{{ $productBanner[0]['link'] }}')"
                                    class="w-full h-full" alt="category">
                            @else
                                <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg"
                                    onclick="openProductEditModel({{ $productBanner[0]['id'] }}, 'https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg' , '{{ $productBanner[0]['link'] }}')"
                                    class="w-full h-full" alt="category">
                            @endif
                        </div>
                    @else
                        <div class="aspect-[6/3.8] cursor-pointer group rounded-3xl overflow-hidden border-2"
                            onclick="openProductBannerModal()">
                            <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg"
                                class="w-full h-full" alt="category">
                        </div>
                    @endif

                    <div class="grid md:gap-4 gap-2 grid-cols-2 mt-4">
                        @if (isset($productBanner[1]))
                            <div class="aspect-[6/3.8] cursor-pointer group rounded-3xl overflow-hidden border-2"
                                onclick="openProductBannerModal()">

                                @if (isset($productBanner[1]['file']))
                                    <img src="{{ Request::root() . '/storage/' . $productBanner[1]['file'] }}"
                                        onclick="openProductEditModel({{ $productBanner[1]['id'] }}, '{{ Request::root() . '/storage/' . $productBanner[1]['file'] }}' , '{{ $productBanner[1]['link'] }}')"
                                        class="w-full h-full" alt="category">
                                @else
                                    <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg"
                                        onclick="openProductEditModel({{ $productBanner[1]['id'] }}, 'https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg' , '{{ $productBanner[1]['link'] }}')"
                                        class="w-full h-full" alt="category">
                                @endif
                            </div>
                        @else
                            <div class="aspect-[6/3.8] cursor-pointer group rounded-3xl overflow-hidden border-2"
                                onclick="openProductBannerModal()">
                                <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg"
                                    class="w-full h-full" alt="category">
                            </div>
                        @endif
                        @if (isset($productBanner[2]))
                            <div class="aspect-[6/3.8] cursor-pointer group rounded-3xl overflow-hidden border-2"
                                onclick="openProductBannerModal()">

                                @if (isset($productBanner[2]['file']))
                                    <img src="{{ Request::root() . '/storage/' . $productBanner[2]['file'] }}"
                                        onclick="openProductEditModel({{ $productBanner[2]['id'] }}, '{{ Request::root() . '/storage/' . $productBanner[2]['file'] }}' , '{{ $productBanner[2]['link'] }}')"
                                        class="w-full h-full" alt="category">
                                @else
                                    <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg"
                                        onclick="openProductEditModel({{ $productBanner[2]['id'] }}, 'https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg' , '{{ $productBanner[2]['link'] }}')"
                                        class="w-full h-full" alt="category">
                                @endif
                            </div>
                        @else
                            <div class="aspect-[6/3.8] cursor-pointer group rounded-3xl overflow-hidden border-2"
                                onclick="openProductBannerModal()">
                                <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg"
                                    class="w-full h-full" alt="category">
                            </div>
                        @endif
                    </div>

                </div>

                <div>
                    <div class="grid md:gap-4 gap-2 grid-cols-2 mb-4">
                        @if (isset($productBanner[3]))
                            <div class="aspect-[6/3.8] cursor-pointer group rounded-3xl overflow-hidden border-2"
                                onclick="openProductBannerModal()">

                                @if (isset($productBanner[3]['file']))
                                    <img src="{{ Request::root() . '/storage/' . $productBanner[3]['file'] }}"
                                        onclick="openProductEditModel({{ $productBanner[3]['id'] }}, '{{ Request::root() . '/storage/' . $productBanner[3]['file'] }}' , '{{ $productBanner[3]['link'] }}')"
                                        class="w-full h-full" alt="category">
                                @else
                                    <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg"
                                        onclick="openProductEditModel({{ $productBanner[3]['id'] }}, 'https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg' , '{{ $productBanner[3]['link'] }}')"
                                        class="w-full h-full" alt="category">
                                @endif
                            </div>
                        @else
                            <div class="aspect-[6/3.8] cursor-pointer group rounded-3xl overflow-hidden border-2"
                                onclick="openProductBannerModal()">
                                <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg"
                                    class="w-full h-full" alt="category">
                            </div>
                        @endif

                        @if (isset($productBanner[4]))
                            <div class="aspect-[6/3.8] cursor-pointer group rounded-3xl overflow-hidden border-2"
                                onclick="openProductBannerModal()">

                                @if (isset($productBanner[4]['file']))
                                    <img src="{{ Request::root() . '/storage/' . $productBanner[4]['file'] }}"
                                        onclick="openProductEditModel({{ $productBanner[4]['id'] }}, '{{ Request::root() . '/storage/' . $productBanner[4]['file'] }}' , '{{ $productBanner[4]['link'] }}')"
                                        class="w-full h-full" alt="category">
                                @else
                                    <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg"
                                        onclick="openProductEditModel({{ $productBanner[4]['id'] }}, 'https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg' , '{{ $productBanner[4]['link'] }}')"
                                        class="w-full h-full" alt="category">
                                @endif
                            </div>
                        @else
                            <div class="aspect-[6/3.8] cursor-pointer group rounded-3xl overflow-hidden border-2"
                                onclick="openProductBannerModal()">
                                <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg"
                                    class="w-full h-full" alt="category">
                            </div>
                        @endif
                    </div>

                    @if (isset($productBanner[5]))
                        <div class="aspect-[6/3.8] cursor-pointer group rounded-3xl overflow-hidden border-2"
                            onclick="openProductBannerModal()">

                            @if (isset($productBanner[5]['file']))
                                <img src="{{ Request::root() . '/storage/' . $productBanner[5]['file'] }}"
                                    onclick="openProductEditModel({{ $productBanner[5]['id'] }}, '{{ Request::root() . '/storage/' . $productBanner[5]['file'] }}' , '{{ $productBanner[5]['link'] }}')"
                                    class="w-full h-full" alt="category">
                            @else
                                <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg"
                                    onclick="openProductEditModel({{ $productBanner[5]['id'] }}, 'https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg' , '{{ $productBanner[5]['link'] }}')"
                                    class="w-full h-full" alt="category">
                            @endif
                        </div>
                    @else
                        <div class="aspect-[6/3.8] cursor-pointer group rounded-3xl overflow-hidden border-2"
                            onclick="openProductBannerModal()">
                            <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg"
                                class="w-full h-full" alt="category">
                        </div>
                    @endif
                </div>

            </div>

            <div class="flex justify-between items-center gap-4 sm:mb-6 sm:p-0 p-4 md:mt-12 mt-8">
                <p class="font-semibold md:text-xl text-lg text-gray-700">Client logo</p>
                <div class="flex items-center">
                    <form enctype="multipart/form-data" method="post" id="logoForm"
                        action="{{ route('api.logo.add') }}">
                        @csrf
                        <input type="file" name="logo_file" class="hidden" id="logo-file"
                            onchange="uploadLogo()">
                    </form>
                    <button type="button" onclick="openFileInput()"
                        class="flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-lg bg-primary hover:bg-primary-900">
                        <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                        </svg>
                        Add logo
                    </button>
                </div>

            </div>
            <div class="sm:p-0 p-4 text-gray-900">
                <div class="grid lg:grid-cols-6 grid-cols-3 sm:gap-4 gap-2">
                    @foreach ($clientLogo as $logo)
                        <div class="aspect-[6/2.5] bg-white rounded-md relative py-1">
                            <div class="absolute cursor-pointer right-0 top-0 translate-x-1/2 -translate-y-1/2 z-20 bg-red-500 py-0.5 px-1 rounded-full"
                                onclick="openDeleteModel('logo', {{ $logo->id }})">
                                <svg xmlns="http://www.w3.org/2000/svg" class="max-w-3 w-full fill-white"
                                    viewBox="0 0 384 512">
                                    <path
                                        d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                                </svg>
                            </div>
                            <img src="{{ Request::root() . '/storage/' . $logo->file }}"
                                class="w-full rounded-md object-contain h-full" alt="box">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    {{-- hero modal --}}
    <div class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 hidden bg-[#00000080] justify-center items-center w-full md:inset-0 h-screen max-h-full"
        id="hero-banner-modal">
        <form enctype="multipart/form-data" class="w-full grid place-content-center" method="post" action="{{ route('api.banner.add') }}"
            id="productBannerFrom">
            @csrf
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow ">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                        <h3 class="md:text-xl text-lg font-semibold text-gray-900 ">
                            Hero Banner
                        </h3>
                        <button type="button" onclick="closeHeroBannerModal()"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center "
                            data-modal-hide="default-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-5">
                        <div class="block" id="media-input">
                            <label for="media"
                                class="block mb-2 md:text-base text-sm font-medium text-gray-900">Media</label>
                            <input id="media"
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 py-2 px-2"
                                name="file_input" id="file_input" type="file">

                            @error('file_input')
                                <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-4 hidden" id="media-image">
                            <p class="block mb-2 md:text-base text-sm font-medium text-gray-900">Media</p>
                            <div class="aspect-[5/3] cursor-pointer relative">
                                <div class="absolute right-0 top-0 translate-x-1/2 -translate-y-1/2 z-20 bg-red-500 py-1 px-1.5 rounded-full"
                                    onclick="removeBannerImg()">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="max-w-3 w-full fill-white"
                                        viewBox="0 0 384 512">
                                        <path
                                            d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                                    </svg>
                                </div>
                                <img id="media-image-src"
                                    src="http://127.0.0.1:8000/storage/banner/1HuuH0zZkqrN8fSQJ9jhapjd8juKUC3vKp51OwZn.jpg"
                                    class="w-full rounded-md object-cover h-full border" alt="box">
                            </div>
                            <input id="media-image-hidden" name="file_input" type="hidden">
                            <input id="hero-banner-id" name="id" type="hidden">
                        </div>
                        <div class="block" id="media-input-mobile">
                            <label for="media-mobile"
                                class="block mb-2 md:text-base text-sm font-medium text-gray-900">Media mobile</label>
                            <input id="media-mobile"
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 py-2 px-2"
                                name="file_input_mobile" id="file_input_mobile" type="file">

                            @error('file_input_mobile')
                                <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-4 hidden" id="media-image-mobile">
                            <p class="block mb-2 md:text-base text-sm font-medium text-gray-900">Media mobile</p>
                            <div class="aspect-[5/3] cursor-pointer relative">
                                <div class="absolute right-0 top-0 translate-x-1/2 -translate-y-1/2 z-20 bg-red-500 py-1 px-1.5 rounded-full"
                                    onclick="removeBannerImg('mobile')">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="max-w-3 w-full fill-white"
                                        viewBox="0 0 384 512">
                                        <path
                                            d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                                    </svg>
                                </div>
                                <img id="media-image-src-mobile"
                                    src="http://127.0.0.1:8000/storage/banner/1HuuH0zZkqrN8fSQJ9jhapjd8juKUC3vKp51OwZn.jpg"
                                    class="w-full rounded-md object-cover h-full border" alt="box">
                            </div>
                            <input id="media-image-hidden-mobile" name="file_input_mobile" type="hidden">
                            {{-- <input id="hero-banner-id" name="id" type="hidden"> --}}
                        </div>
                        <div class="mt-4">
                            <label for="hero-link"
                                class="block mb-2 md:text-base text-sm font-medium text-gray-900">Redirect link</label>
                            <input type="text" id="hero-link" name="link"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="www.example.com" />
                        </div>

                        <input type="hidden" name="id" id="heroBannerId">
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-t border-gray-200 rounded-b">
                        <button data-modal-hide="static-modal" type="button" onclick="closeHeroBannerModal()"
                            class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Close</button>
                        <button data-modal-hide="static-modal" type="submit"
                            class="text-white bg-primary hover:bg-primary-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center uppercase">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    {{-- product modal --}}
    <div class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 hidden bg-[#00000080] justify-center items-center w-full md:inset-0 h-screen max-h-full"
        id="product-banner-modal">

        <form enctype="multipart/form-data" class="w-full grid place-items-center" method="post"
            action="{{ route('api.banner.add') }}" id="heroBannerFrom">
            @csrf
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow ">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                        <h3 class="md:text-xl text-lg font-semibold text-gray-900 ">
                            Product Banner
                        </h3>
                        <button type="button" onclick="closeProductBannerModal()"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center "
                            data-modal-hide="default-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-5">
                        <div class="block" id="product-media-input">
                            <label for="media"
                                class="block mb-2 md:text-base text-sm font-medium text-gray-900">Media</label>
                            <input id="media"
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 py-2 px-2"
                                name="file_input" id="file_input" type="file">

                            @error('file_input')
                                <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-4 hidden" id="product-media-image">
                            <p class="block mb-2 md:text-base text-sm font-medium text-gray-900">Media</p>
                            <div class="aspect-[5/3] cursor-pointer relative">
                                <div class="absolute right-0 top-0 translate-x-1/2 -translate-y-1/2 z-20 bg-red-500 py-1 px-1.5 rounded-full"
                                    onclick="removeProductBannerImg()">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="max-w-3 w-full fill-white"
                                        viewBox="0 0 384 512">
                                        <path
                                            d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                                    </svg>
                                </div>
                                <img id="product-media-image-src"
                                    src="http://127.0.0.1:8000/storage/banner/1HuuH0zZkqrN8fSQJ9jhapjd8juKUC3vKp51OwZn.jpg"
                                    class="w-full rounded-md object-cover h-full border" alt="box">
                            </div>
                            <input id="product-media-image-hidden" name="file_input" type="hidden">
                            <input id="product-banner-id" name="id" type="hidden">
                        </div>
                        <div class="mt-4">
                            <label for="product-link"
                                class="block mb-2 md:text-base text-sm font-medium text-gray-900">Redirect link</label>
                            <input type="text" id="product-link" name="link"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="www.example.com" />
                        </div>

                        <input type="hidden" name="isProductBanner" value="true">
                        <input type="hidden" name="id" id="productBannerId">
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-t border-gray-200 rounded-b">
                        <button data-modal-hide="static-modal" type="button" onclick="closeProductBannerModal()"
                            class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Close</button>
                        <button data-modal-hide="static-modal" type="submit"
                            class="text-white bg-primary hover:bg-primary-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center uppercase">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    {{-- deleteModal --}}
    <div id="deleteModal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full bg-[#00000080]">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto scale-animation">
            <!-- Modal content -->

            <form method="post" id="deleteModelForm">
                @csrf
                <div class="relative p-4 text-center bg-white rounded-lg shadow sm:p-5">
                    <button type="button"
                        class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center "
                        onclick="closeDeleteModel()">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <svg class="text-gray-400  w-11 h-11 mb-3.5 mx-auto" aria-hidden="true" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <div>
                        <input type="hidden" name="id" id="deleteId">
                    </div>
                    <p class="mb-4 text-gray-500 ">Are you sure you want to delete this item?</p>
                    <div class="flex justify-center items-center space-x-4">
                        <button onclick="closeDeleteModel()" type="button"
                            class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10">
                            No, cancel
                        </button>
                        <button type="submit"
                            class="py-2 px-3 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300">
                            Yes, I'm sure
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>


    {{-- success toast --}}
    <div id="toast-success"
        class="hidden items-center w-full max-w-xs p-4 mt-4 mr-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800 fixed top-0 right-0 z-50 slide-left-animation"
        role="alert">
        <div
            class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            <span class="sr-only">Check icon</span>
        </div>
        <div class="ms-3 text-sm font-normal">{{ Session::get('success') }}</div>
        <button type="button" onclick="closeSuucessToast()"
            class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
            data-dismiss-target="#toast-success" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
        </button>
    </div>

    {{-- error toast --}}
    <div id="toast-warning"
        class="hidden items-center w-full max-w-xs p-4 mt-4 mr-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800 fixed top-0 right-0 z-50 slide-left-animation"
        role="alert">
        <div
            class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-orange-500 bg-orange-100 rounded-lg dark:bg-orange-700 dark:text-orange-200">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z" />
            </svg>
            <span class="sr-only">Warning icon</span>
        </div>
        <div class="ms-3 text-sm font-normal">{{ Session::get('error') }}</div>
        <button type="button" onclick="closeToastWarning()"
            class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
            data-dismiss-target="#toast-warning" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
        </button>
    </div>

    <script>
        let heroBannerModal = document.getElementById('hero-banner-modal');
        let productBannerModal = document.getElementById('product-banner-modal');
        let deleteModal = document.getElementById('deleteModal');
        let heroBannerFrom = document.getElementById('heroBannerFrom');
        let toastSuccess = document.getElementById('toast-success');
        let toastWarning = document.getElementById('toast-warning');
        let deleteId = document.getElementById('deleteId');
        let deleteModelForm = document.getElementById('deleteModelForm');
        let productBannerFrom = document.getElementById('productBannerFrom');
        let mediaInput = document.getElementById('media-input');
        let mediaInputMobile = document.getElementById('media-input-mobile');
        let productMediaInput = document.getElementById('product-media-input');
        let mediaImage = document.getElementById('media-image');
        let mediaImageMobile = document.getElementById('media-image-mobile');
        let productMediaImage = document.getElementById('product-media-image');
        let heroLink = document.getElementById('hero-link');
        let productLink = document.getElementById('product-link');
        let mediaImageSrc = document.getElementById('media-image-src');
        let mediaImageSrcMobile = document.getElementById('media-image-src-mobile');
        let productMediaImageSrc = document.getElementById('product-media-image-src');
        let mediaImageHidden = document.getElementById('media-image-hidden');
        let mediaImageHiddenMobile = document.getElementById('media-image-hidden-mobile');
        let productMediaImageHidden = document.getElementById('product-media-image-hidden');
        let heroBannerId = document.getElementById('heroBannerId');
        let productBannerId = document.getElementById('productBannerId');
        let logoFile = document.getElementById('logo-file');
        let logoForm = document.getElementById('logoForm');

        const closeHeroBannerModal = () => {
            heroBannerModal.classList.remove('flex')
            heroBannerModal.classList.add('hidden')
            heroBannerFrom.reset()

            mediaImage.classList.add('hidden')
            mediaImage.classList.remove('block')

            mediaInput.classList.add('block')
            mediaInput.classList.remove('hidden')

            mediaImageMobile.classList.add('hidden')
            mediaImageMobile.classList.remove('block')

            mediaInputMobile.classList.add('block')
            mediaInputMobile.classList.remove('hidden')

            @if ($errors->any())
                location.reload()
            @endif
        }

        const openHeroBannerModal = () => {
            heroBannerModal.classList.remove('hidden')
            heroBannerModal.classList.add('flex')
        }

        const closeProductBannerModal = () => {
            productBannerModal.classList.remove('flex')
            productBannerModal.classList.add('hidden')
            productBannerFrom.reset()

            @if ($errors->any())
                location.reload()
            @endif

            productMediaImage.classList.add('hidden')
            productMediaImage.classList.remove('block')

            productMediaInput.classList.add('block')
            productMediaInput.classList.remove('hidden')
        }

        const openProductBannerModal = () => {
            productBannerModal.classList.remove('hidden')
            productBannerModal.classList.add('flex')
        }

        const closeDeleteModel = () => {
            deleteModal.classList.remove('flex')
            deleteModal.classList.add('hidden')

            deleteModelForm.action = null
            deleteId.value = null
        }

        const openDeleteModel = (type = 'banner', itemId) => {
            let action;
            if (type == 'logo') {
                action = '{{ route('api.logo.remove') }}'
            } else {
                action = '{{ route('api.banner.remove') }}'
            }

            deleteModal.classList.remove('hidden')
            deleteModal.classList.add('flex')

            deleteModelForm.action = action
            deleteId.value = itemId
        }

        const openSuccessToast = () => {
            toastSuccess.classList.remove('hidden')
            toastSuccess.classList.add('flex')
        }

        const closeSuucessToast = () => {
            toastSuccess.classList.remove('flex')
            toastSuccess.classList.add('hidden')
        }

        const openToastWarning = () => {
            toastWarning.classList.remove('hidden')
            toastWarning.classList.add('flex')
        }

        const closeToastWarning = () => {
            toastWarning.classList.remove('flex')
            toastWarning.classList.add('hidden')
        }

        const openHeroEditModel = (id, filelink,filelinkmobile, link) => {
            mediaInput.classList.add('hidden')
            mediaInput.classList.remove('block')

            mediaImage.classList.add('block')
            mediaImage.classList.remove('hidden')

            mediaInputMobile.classList.add('hidden')
            mediaInputMobile.classList.remove('block')

            mediaImageMobile.classList.add('block')
            mediaImageMobile.classList.remove('hidden')

            heroLink.value = link
            mediaImageSrc.src = `{{ Request::root() . '/storage/' }}${filelink}`
            mediaImageSrcMobile.src = `{{ Request::root() . '/storage/' }}${filelinkmobile}`
            mediaImageHidden.value = filelink
            mediaImageHiddenMobile.value = filelinkmobile
            heroBannerId.value = id

            openHeroBannerModal()
        }

        const openProductEditModel = (id, filelink, link) => {
            productMediaInput.classList.add('hidden')
            productMediaInput.classList.remove('block')

            productMediaImage.classList.add('block')
            productMediaImage.classList.remove('hidden')

            productLink.value = link
            productMediaImageSrc.src = filelink

            let bannerUrl = filelink.split('/')
            if (bannerUrl.length) {
                productMediaImageHidden.value = `banner/${bannerUrl[bannerUrl.length - 1]}`
            }
            productBannerId.value = id

            openProductBannerModal()
        }

        const removeBannerImg = (type = null) => {
            if(type){
                mediaImageMobile.classList.add('hidden')
                mediaImageMobile.classList.remove('block')

                mediaInputMobile.classList.add('block')
                mediaInputMobile.classList.remove('hidden')
            }else{
                mediaImage.classList.add('hidden')
                mediaImage.classList.remove('block')

                mediaInput.classList.add('block')
                mediaInput.classList.remove('hidden')
            }
        }

        const removeProductBannerImg = () => {
            productMediaImage.classList.add('hidden')
            productMediaImage.classList.remove('block')

            productMediaInput.classList.add('block')
            productMediaInput.classList.remove('hidden')
        }

        const openFileInput = () => logoFile.click()
        const uploadLogo = () => logoForm.submit()

        @error('file_input')
            openHeroBannerModal()
        @enderror

        @if (Session::has('success'))
            openSuccessToast()
            setTimeout(() => {
                closeSuucessToast()
            }, 3000);
        @endif

        @if (Session::has('error'))
            openToastWarning()
            setTimeout(() => {
                closeToastWarning()
            }, 3000);
        @endif
    </script>
</x-app-layout>
