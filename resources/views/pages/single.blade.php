@extends('layouts.landing')

@section('page-title')
    {{ $product->title }}
@endsection

@section('body')
    <section>
        <div class="container mx-auto px-4 md:mb-20 my-16">
            <div class="grid lg:grid-cols-2 gap-8">
                <div class="lg:h-full lg:min-h-[560px]">
                    <div class="lg:max-h-[450px] lg:h-full">

                        <div class="rounded-md relative w-fit mx-auto md:min-w-[550px] cursor-zoom-in" onmouseover="renderResult()" onmouseout="clearResult()">
                            <img src="{{ Request::root() . '/storage/' . $product->media }}" id="main-product-image"
                                class="mx-auto max-h-[446px] object-contain w-full" alt="products">
                        </div>
                    </div>
                    <div class="flex overflow-x-auto justify-center items-center mt-8 gap-2">
                        @foreach ($product->images as $image)
                            <div class="md:min-w-[80px] md:max-w-[80px] min-w-[60px] max-w-[60px] w-full aspect-square rounded-md object-contain border cursor-pointer"
                                onclick="setMainImage('{{ Request::root() . '/storage/' . $image->link }}')">
                                <img src="{{ Request::root() . '/storage/' . $image->link }}"
                                    class="mx-auto w-full h-full object-cover" alt="products">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div id="result-div" class="hidden"></div>
                <div class="flex flex-col" id="product-info-div">
                    <h1 class="md:text-3xl text-2xl font-semibold">{{ $product->title }}</h1>
                    <div class="flex gap-6 mt-2">
                        <p class="font-medium md:text-base text-sm">₹{{ $product->price }} per piece</p>
                        {{-- <button class="py-1 px-2 bg-primary text-white sm:text-sm text-[12px] rounded-md">Get a price per
                            quota</button> --}}
                    </div>

                    <div class="my-4 text-gray-600 md:text-base text-sm">{!! $product->description !!}</div>

                    <p class="mt-4 mb-4 font-medium text-lg text-gray-600">Product Details :</p>
                    <table class="table-fixed w-full border-collapse mb-4">
                        <tbody>
                            <tr>
                                <td
                                    class="py-2 px-4 md:text-base text-sm text-gray-600 font-medium border-y border-gray-300">
                                    Type</td>
                                <td
                                    class="py-2 px-4 md:text-base text-sm text-gray-600 font-normal border-y border-gray-300 capitalize">
                                    {{ $product->type }}</td>
                            </tr>
                            <tr>
                                <td
                                    class="py-2 px-4 md:text-base text-sm text-gray-600 font-medium border-y border-gray-300">
                                    Material
                                </td>
                                <td
                                    class="py-2 px-4 md:text-base text-sm text-gray-600 font-normal border-y border-gray-300 capitalize">
                                    {{ $product->material }}</td>
                            </tr>
                            <tr>
                                <td
                                    class="py-2 px-4 md:text-base text-sm text-gray-600 font-medium border-y border-gray-300">
                                    Color</td>
                                <td
                                    class="py-2 px-4 md:text-base text-sm text-gray-600 font-normal border-y border-gray-300 capitalize">
                                    {{ $product->color }}
                                </td>
                            </tr>
                            <tr>
                                <td
                                    class="py-2 px-4 md:text-base text-sm text-gray-600 font-medium border-y border-gray-300">
                                    Shape</td>
                                <td
                                    class="py-2 px-4 md:text-base text-sm text-gray-600 font-normal border-y border-gray-300 capitalize">
                                    {{ $product->shape }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="mt-auto flex items-center justify-between sm:gap-4 gap-2">
                        <button onclick="openInquiryModalProduct()"
                            class="py-2 border border-primary w-full rounded-md font-semibold uppercase hover:text-primary transition-all bg-primary text-white hover:bg-transparent md:text-base text-sm">Send
                            Inquiry</button>
                        <button onclick="openCallBackModalProduct()"
                            class="py-2 border border-[#128C7E] w-full rounded-md font-semibold uppercase text-[#128C7E] transition-all hover:bg-[#128C7E] hover:text-white md:text-base sm:text-sm text-[10px] flex justify-center items-center gap-2">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-full max-w-5 fill-current"
                                    viewBox="0 0 448 512">
                                    <path
                                        d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                                </svg>
                            </span> <p> WhatsApp Inquiries </p>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mx-auto px-4">
            <p class="md:text-2xl text-xl capitalize text-gray-700 font-semibold text-center mb-8">
                Product Details</p>
            <p class="md:text-lg text-base uppercase text-gray-700 font-semibold  mb-6">
                Price And Quantity</p>

            <table class="table-fixed w-full border-collapse border border-slate-500">
                <tbody>
                    <tr>
                        <td class="py-2 px-4 md:text-base text-sm text-gray-600 font-medium border border-gray-300">Price
                        </td>
                        <td class="py-2 px-4 md:text-base text-sm text-gray-600 font-normal border border-gray-300">
                            ₹{{ $product->price }} per piece</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 md:text-base text-sm text-gray-600 font-medium border border-gray-300">Minimum
                            Order Quantity
                        </td>
                        <td class="py-2 px-4 md:text-base text-sm text-gray-600 font-normal border border-gray-300">
                            {{ $product->order_quantity }}
                            Piece</td>
                    </tr>
                </tbody>
            </table>


            <p class="md:text-lg text-base uppercase text-gray-700 font-semibold mt-12 mb-6">
                Product Specifications</p>

            <table class="table-fixed w-full border-collapse border border-slate-500">
                <tbody>
                    <tr>
                        <td class="py-2 px-4 md:text-base text-sm text-gray-600 font-medium border border-gray-300">Material
                        </td>
                        <td
                            class="py-2 px-4 md:text-base text-sm text-gray-600 font-normal border border-gray-300 capitalize">
                            {{ $product->material }}
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 md:text-base text-sm text-gray-600 font-medium border border-gray-300">Type
                        </td>
                        <td
                            class="py-2 px-4 md:text-base text-sm text-gray-600 font-normal border border-gray-300 capitalize">
                            {{ $product->type }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 md:text-base text-sm text-gray-600 font-medium border border-gray-300">Shape
                        </td>
                        <td
                            class="py-2 px-4 md:text-base text-sm text-gray-600 font-normal border border-gray-300 capitalize">
                            {{ $product->shape }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 md:text-base text-sm text-gray-600 font-medium border border-gray-300">Color
                            Branches</td>
                        <td
                            class="py-2 px-4 md:text-base text-sm text-gray-600 font-normal border border-gray-300 capitalize">
                            {{ $product->color }}</td>
                    </tr>
                </tbody>
            </table>

            <p class="md:text-lg text-base uppercase text-gray-700 font-semibold mt-12 mb-6">
                Trade Information</p>

            <table class="table-fixed w-full border-collapse border border-slate-500">
                <tbody>
                    <tr>
                        <td class="py-2 px-4 md:text-base text-sm text-gray-600 font-medium border border-gray-300">
                            Supply Ability</td>
                        <td
                            class="py-2 px-4 md:text-base text-sm text-gray-600 font-normal border border-gray-300 capitalize">
                            {{ $product->supply_ability }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 md:text-base text-sm text-gray-600 font-medium border border-gray-300">
                            Delivery Time</td>
                        <td class="py-2 px-4 md:text-base text-sm text-gray-600 font-normal border border-gray-300">
                            {{ $product->delivery_time }} Days</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 md:text-base text-sm text-gray-600 font-medium border border-gray-300">Main
                            Domestic Market
                        </td>
                        <td class="py-2 px-4 md:text-base text-sm text-gray-600 font-normal border border-gray-300"> All
                            India</td>
                    </tr>
                </tbody>
            </table>
        </div>

        @if (count($relatedProducts))
            <div class="container mx-auto px-4 md:my-40 my-20">
                <p class="md:text-2xl text-xl capitalize text-gray-700 font-semibold text-center">
                    Related Products</p>
                <div class="grid gap-4 xl:grid-cols-4 lg:grid-cols-3 sm:grid-cols-2 mt-10">
                    @foreach ($relatedProducts as $related)
                        <div class="bg-white border border-gray-200 rounded-xl flex flex-col swiper-slide">
                            <div class="bg-gray-100 rounded-t-xl w-full aspect-[3/2]">
                                <img class="rounded-t-lg aspect-[3/2] object-contain mx-auto lazyload"
                                    data-src="{{ asset('storage/' . $related->media) }}"
                                    data-alt="{{ $related->title }}" class="lazyload hidden" />
                            </div>
                            <div class="p-4 flex flex-col w-full">
                                <h5 class="my-2 text-lg font-semibold text-left tracking-tight text-gray-900">
                                    {{ $related->title }}</h5>

                                <div class="mt-4 flex justify-between items-center gap-2">
                                    <a href="/products/{{ $related->slug }}"
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
            </div>
        @endif

    </section>

    {{-- send inquiry modal --}}
    <div class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 hidden bg-[#00000080] justify-center items-center w-full md:inset-0 h-screen max-h-full"
        id="inquiry-modal">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow ">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="md:text-xl text-lg font-semibold text-gray-900 ">
                        Send Inquiry
                    </h3>
                    <button type="button" onclick="closeInquiryModalProduct()"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center "
                        data-modal-hide="default-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form method="post" action="{{ route('api.enquirie.add') }}">
                    @csrf
                    <div class="p-4 md:p-5 space-y-4">
                        <div class="grid sm:grid-cols-2 gap-4">
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="john@example.com" />

                                @error('email')
                                    <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="mobile_no" class="block mb-2 text-sm font-medium text-gray-900">Mobile
                                    Number</label>
                                <input type="number" id="mobile_no" name="mobile_number"
                                    value="{{ old('mobile_number') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="+00 0000 000 000" />

                                @error('mobile_number')
                                    <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-4">
                            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 ">Your
                                message</label>
                            <textarea id="message" rows="4" name="message"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="* To get accurate quotes. Please include product name, order quantity, usage, special requests if any in your inquiry.">{{ old('message') }}</textarea>

                            @error('message')
                                <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-t border-gray-200 rounded-b">
                        <button data-modal-hide="static-modal" type="button" onclick="closeInquiryModalProduct()"
                            class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Close</button>
                        <button data-modal-hide="static-modal" type="submit"
                            class="text-white bg-primary hover:bg-primary-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center uppercase">Send
                            Inquiry</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- request to call back --}}
    <div class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 hidden bg-[#00000080] justify-center items-center w-full md:inset-0 h-screen max-h-full"
        id="call-back-modal">
        <div class="relative p-4 w-full max-w-lg max-h-full scale-animation">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow ">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="md:text-xl text-lg font-semibold text-gray-900 ">
                        Whatsapp Inquiries
                    </h3>
                    <button type="button" onclick="closeCallBackModalProduct()"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center "
                        data-modal-hide="default-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form id="waInquiryForm">
                    <div class="p-4 md:p-5 space-y-4">
                        <div>
                            <div>
                                <label for="waName" class="block mb-2 text-sm font-medium text-gray-900">Your
                                    Name</label>
                                <input type="name" id="waName"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Jone Deo" />
                            </div>
                        </div>
                        <div>
                            <div>
                                <label for="waEmail" class="block mb-2 text-sm font-medium text-gray-900">Your
                                    Email</label>
                                <input type="email" id="waEmail"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="jonedeo@example.com" />
                            </div>
                            <p class="mt-1 text-sm text-red-500 hidden" id="validation-text">Please fill out the form
                                first.</p>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-t border-gray-200 rounded-b">
                        <button data-modal-hide="static-modal" type="button" onclick="closeCallBackModalProduct()"
                            class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Close</button>
                        <button data-modal-hide="static-modal" type="submit"
                            class="text-white bg-primary hover:bg-primary-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center uppercase">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- responce model --}}
    <div id="taost"
        class="hidden items-center w-full max-w-md p-4 mb-4 rounded-lg shadow text-white bg-gray-800 fixed bottom-0 z-30 left-1/2 -translate-x-1/2"
        role="alert">
        <div class="ms-3 text-sm font-normal">{{ Session::get('message') }}</div>
    </div>
@endsection

@section('meta')
    <meta name="description" content="{{ $product->seo_description }}">
    <meta name="og:type" content="product" />
    <meta name="og:title" content="{{ $product->title }}" />
    <meta name="og:description" content="{{ $product->og_seo_description }}" />
    <meta name="og:url" content="{{ url()->current() }}" />
    <meta name="og:image" content="{{ Request::root() . '/storage/' . $product->media }}" />
    <meta name="product:price:amount" content="{{ $product->price }}" />
    <meta name="product:price:currency" content="INR" />
    <meta name="keywords" content="{{ $product->keyword }}">
@endsection

@section('head-scripts')
@endsection

@section('body-scripts')
    <script>
        let inquiryModalProduct = document.getElementById('inquiry-modal');
        let callBackModal = document.getElementById('call-back-modal');
        let taostProduct = document.getElementById('taost');
        let mainProductImage = document.getElementById('main-product-image');
        let resultDiv = document.getElementById('result-div');
        let productInfoDiv = document.getElementById('product-info-div');
        let waInquiryForm = document.getElementById('waInquiryForm');
        let validationText2 = document.getElementById("validation-text");

        const closeInquiryModalProduct = () => {
            inquiryModalProduct.classList.remove('flex')
            inquiryModalProduct.classList.add('hidden')
        }

        const closeCallBackModalProduct = () => {
            callBackModal.classList.remove('flex')
            callBackModal.classList.add('hidden')
        }

        const openInquiryModalProduct = () => {
            inquiryModalProduct.classList.remove('hidden')
            inquiryModalProduct.classList.add('flex')
        }

        const openCallBackModalProduct = () => {
            callBackModal.classList.remove('hidden')
            callBackModal.classList.add('flex')
        }

        @if ($errors->any())
            openInquiryModalProduct()
        @endif

        const openToastProduct = () => {
            taostProduct.classList.remove('hidden')
            taostProduct.classList.add('flex')
        }

        const closeToastProduct = () => {
            taostProduct.classList.remove('flex')
            taostProduct.classList.add('hidden')
        }

        @if (Session::has('message'))
            openToastProduct()
            setTimeout(() => {
                closeToastProduct()
            }, 6000);
        @endif

        function imageZoom(imgID, resultID) {
            var img, lens, result, cx, cy;
            img = document.getElementById(imgID);
            result = document.getElementById(resultID);
            /*create lens:*/
            lens = document.createElement("DIV");
            lens.setAttribute("class", "absolute w-40 aspect-square z-50");
            /*insert lens:*/
            img.parentElement.insertBefore(lens, img);
            /*calculate the ratio between result DIV and lens:*/
            cx = result.offsetWidth / lens.offsetWidth;
            cy = result.offsetHeight / lens.offsetHeight;
            /*set background properties for the result DIV:*/
            result.style.backgroundImage = "url('" + img.src + "')";
            result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
            /*execute a function when someone moves the cursor over the image, or the lens:*/
            lens.addEventListener("mousemove", moveLens);
            img.addEventListener("mousemove", moveLens);
            /*and also for touch screens:*/
            lens.addEventListener("touchmove", moveLens);
            img.addEventListener("touchmove", moveLens);

            function moveLens(e) {
                var pos, x, y;
                /*prevent any other actions that may occur when moving over the image:*/
                e.preventDefault();
                /*get the cursor's x and y positions:*/
                pos = getCursorPos(e);
                /*calculate the position of the lens:*/
                x = pos.x - (lens.offsetWidth / 2);
                y = pos.y - (lens.offsetHeight / 2);
                /*prevent the lens from being positioned outside the image:*/
                if (x > img.width - lens.offsetWidth) {
                    x = img.width - lens.offsetWidth;
                }
                if (x < 0) {
                    x = 0;
                }
                if (y > img.height - lens.offsetHeight) {
                    y = img.height - lens.offsetHeight;
                }
                if (y < 0) {
                    y = 0;
                }
                /*set the position of the lens:*/
                lens.style.left = x + "px";
                lens.style.top = y + "px";
                /*display what the lens "sees":*/
                result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
            }

            function getCursorPos(e) {
                var a, x = 0,
                    y = 0;
                e = e || window.event;
                /*get the x and y positions of the image:*/
                a = img.getBoundingClientRect();
                /*calculate the cursor's x and y coordinates, relative to the image:*/
                x = e.pageX - a.left;
                y = e.pageY - a.top;
                /*consider any page scrolling:*/
                x = x - window.pageXOffset;
                y = y - window.pageYOffset;
                return {
                    x: x,
                    y: y
                };
            }
        }

        // mainProductImage.addEventListener(
        //     "mouseenter",
        //     () => {
        //         // resultDiv.classList.remove('hidden')
        //         // productInfoDiv.classList.add('hidden')
        //         console.log('in');
        //     }
        // )

        // mainProductImage.addEventListener(
        //     "onmouseout",
        //     () => {
        //         // resultDiv.classList.add('hidden')
        //         // productInfoDiv.classList.remove('hidden')
        //         console.log("out");
        //     }
        // )

        const clearResult = () => {
            resultDiv.classList.add('hidden')
            productInfoDiv.classList.remove('hidden')

        }

        const renderResult = () => {

            if (window.innerWidth >= 1024) {
                resultDiv.classList.remove('hidden')
                productInfoDiv.classList.add('hidden')
                imageZoom('main-product-image', 'result-div')
            }

        }

        const setMainImage = (imgUrl) => {
            console.log(imgUrl);
            mainProductImage.src = imgUrl
        }

        waInquiryForm.addEventListener('submit', (e) => {
            e.preventDefault()

            if (e.target[0].value) {
                validationText2.classList.add('hidden')

                let waText = `
                    Hello Moti multi plastics, \n

                    My name is ${e.target[0].value}, and I am interested in learning more about your product, '{{ $product->title }}'. Could you please provide me with more information and arrange a demo at your earliest convenience? \n

                    Product details : \n
                    Id : {{ $product->id }} \n
                    Name : {{ $product->title }} \n
                    Url : {{ route('landing.single', ['slug' => $product->slug]) }} \n

                    Thank you, \n
                    ${e.target[0].value} \n
                    ${e.target[1].value}
                `

                window.open(
                    `https://wa.me/9898989978?text=${waText}&file={{ Request::root() . '/storage/' . $product->media }}`
                );
            } else {
                validationText2.classList.remove('hidden')
            }
        })
    </script>
@endsection
