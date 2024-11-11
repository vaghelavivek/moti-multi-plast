<header class="bg-white z-50">
    <nav class="container px-4 mx-auto md:grid flex justify-between grid-cols-3 gap-2 py-2 max-w-screen-xl">
        <div class="flex gap-1.5 items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-full sm:max-w-3.5 max-w-4 fill-primary"
                viewBox="0 0 512 512">
                <path
                    d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
            </svg>
            <a href="tel:9825145424" class="sm:text-sm text-[12px] font-medium text-primary">+91 9825145424</a>
        </div>
        <div class="md:flex justify-center hidden">
            <div class="xl:w-full max-w-fit xl:block hidden">
                <a href="/">
                    <img src="{{ asset('assets/svgs/logo.svg') }}" class="md:max-h-[56px] max-h-[40px]" alt="logo">
                </a>
            </div>
        </div>
        <div class="flex items-center justify-end md:gap-2 gap-1">
            <a href="https://wa.me/9825145424?text=Hello! My interest is on plastic containers for packaging. The item you sell on your website https://motimultiplast.in" target="_blank"
                class="border border-[#128C7E] text-[#128C7E] box-border hover:bg-gray-50 font-medium rounded-lg md:text-sm text-[12px] md:px-3 px-2 md:py-2 py-1.5 flex items-center md:gap-2 gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-full max-w-4 fill-current"
                    viewBox="0 0 448 512">
                    <path
                        d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                </svg>
                <p class="md:hidden block">Message</p> <p class="hidden md:block" >Whatsapp Message</p> </a>
            <button onclick="openInquiryModal()"
                class="text-white bg-primary border border-primary hover:bg-white hover:text-primary transition-all rounded-lg font-medium md:text-sm text-[12px] md:px-4 px-3 md:py-2 py-1.5">Send
                Inquiry</button>
        </div>
        {{-- <ul class="flex items-center justify-end gap-3">
            <li>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5" viewBox="0 0 512 512">
                        <path
                        d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z" />
                    </svg>
                </a>
            </li>
            <li>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5" viewBox="0 0 512 512">
                        <path
                        d="M459.4 151.7c.3 4.5 .3 9.1 .3 13.6 0 138.7-105.6 298.6-298.6 298.6-59.5 0-114.7-17.2-161.1-47.1 8.4 1 16.6 1.3 25.3 1.3 49.1 0 94.2-16.6 130.3-44.8-46.1-1-84.8-31.2-98.1-72.8 6.5 1 13 1.6 19.8 1.6 9.4 0 18.8-1.3 27.6-3.6-48.1-9.7-84.1-52-84.1-103v-1.3c14 7.8 30.2 12.7 47.4 13.3-28.3-18.8-46.8-51-46.8-87.4 0-19.5 5.2-37.4 14.3-53 51.7 63.7 129.3 105.3 216.4 109.8-1.6-7.8-2.6-15.9-2.6-24 0-57.8 46.8-104.9 104.9-104.9 30.2 0 57.5 12.7 76.7 33.1 23.7-4.5 46.5-13.3 66.6-25.3-7.8 24.4-24.4 44.8-46.1 57.8 21.1-2.3 41.6-8.1 60.4-16.2-14.3 20.8-32.2 39.3-52.6 54.3z" />
                    </svg>
                </a>
            </li>
            <li>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5" viewBox="0 0 448 512">
                        <path
                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                    </svg>
                </a>
            </li>
            <li>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5" viewBox="0 0 448 512">
                        <path
                        d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" />
                    </svg>
                </a>
            </li>
        </ul> --}}
    </nav>
    <nav class="container px-4 mx-auto py-2 relative border-t max-w-screen-xl">
        <div class="flex gap-4 justify-between items-center">
            {{-- xl:flex hidden --}}
            <div class="xl:w-full max-w-[280px] xl:hidden">
                <a href="/">
                    <img src="{{ asset('assets/svgs/logo.svg') }}" class="md:max-h-[56px] max-h-[40px]"
                        alt="logo">
                </a>
            </div>
            <div class="grow w-full justify-center items-center xl:flex hidden gap-4 xl:px-2 xl:py-0 xl:static absolute top-full left-0 right-0 translate-y-0 xl:bg-transparent bg-white xl:shadow-none shadow-lg rounded-md p-4 xl:flex-row flex-col xl:mb-3 z-10 slide-up"
                id="nav-links">
                <ul class="flex xl:flex-row flex-col gap-6 items-center justify-center">
                    <li>
                        @if (Route::current()->getName() == 'landing.home')
                            <p class="text-base text-primary font-semibold">Home</p>
                        @else
                            <a href="{{ route('landing.home') }}" class="text-base text-gray-500 font-semibold">Home</a>
                        @endif
                    </li>
                    <li>
                        @if (Route::current()->getName() == 'landing.about')
                            <p class="text-base text-primary font-semibold">Company</p>
                        @else
                            <a href="{{ route('landing.about') }}" class="text-base text-gray-500 font-semibold">Company</a>
                        @endif
                    </li>
                    <li>
                        @if (Route::current()->getName() == 'landing.product')
                            <p class="text-base text-primary font-semibold">Our Products</p>
                        @else
                            <a href="{{ route('landing.product') }}" class="text-base text-gray-500 font-semibold">Our
                                Products</a>
                        @endif
                    </li>
                    <li>
                        @if (Route::current()->getName() == 'landing.contact')
                            <p class="text-base text-primary font-semibold">Contact Us</p>
                        @else
                            <a href="{{ route('landing.contact') }}"
                                class="text-base text-gray-500 font-semibold">Contact Us</a>
                        @endif
                    </li>
                </ul>
            </div>
            <button class="xl:hidden block" onclick="navbarCollabse()">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-full md:max-w-6 max-w-5 fill-gray-500"
                    viewBox="0 0 448 512">
                    <path
                        d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
                </svg>
            </button>
        </div>
    </nav>

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
                    <button type="button" onclick="closeInquiryModal()"
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
                        <button data-modal-hide="static-modal" type="button" onclick="closeInquiryModal()"
                            class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Close</button>
                        <button data-modal-hide="static-modal" type="submit"
                            class="text-white bg-primary hover:bg-primary-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center uppercase">Send
                            Inquiry</button>
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
</header>

<script>
    let inquiryModal = document.getElementById('inquiry-modal');
    let taost = document.getElementById('taost');

    const navbarCollabse = () => {
        let navLinks = document.getElementById('nav-links');
        navLinks.classList.toggle('hidden')
        navLinks.classList.replace('xl:flex', 'flex')
    }

    const closeInquiryModal = () => {
        inquiryModal.classList.remove('flex')
        inquiryModal.classList.add('hidden')
    }

    const openInquiryModal = () => {
        inquiryModal.classList.remove('hidden')
        inquiryModal.classList.add('flex')
    }

    const openToast = () => {
        taost.classList.remove('hidden')
        taost.classList.add('flex')
    }

    const closeToast = () => {
        taost.classList.remove('flex')
        taost.classList.add('hidden')
    }

    @if (Session::has('message'))
        openToast()
        setTimeout(() => {
            closeToast()
        }, 6000);
    @endif
</script>

<style>
    .slide-up {
        animation: slideUp 0.5s ease forwards;
    }

    @keyframes slideUp {
        from {
            transform: translateY(-10px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }
</style>
