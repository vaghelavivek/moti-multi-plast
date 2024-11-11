<div class="bg-primary">
    <nav class="container px-4 mx-auto py-2" data-aos="zoom-out">
        <div class="flex sm:gap-4 gap-2 justify-between items-center">
            <div>
                <p class="sm:text-sm text-[10px] font-normal text-white">Step into Moti Plastics Store and feel welcome!</p>
            </div>
            <div class="flex gap-1.5 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-full sm:max-w-3.5 max-w-3 fill-white"
                    viewBox="0 0 512 512">
                    <path
                        d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                </svg>
                <a href="tel:9825145424" class="sm:text-sm text-[11px] font-medium text-white">+982 514 5424</a>
            </div>
        </div>
    </nav>
</div>
<header class="bg-white z-50 sticky top-0">
    <nav class="container px-4 mx-auto py-2 relative">
        <div class="flex gap-4 justify-between items-center">
            {{-- xl:flex hidden --}}
            <div class="xl:w-full max-w-[280px]">
                <a href="/">
                    <img src="{{ asset('assets/svgs/logo.svg') }}" class="md:max-h-[56px] max-h-[40px]"
                        alt="logo">
                </a>
            </div>
            <div class="grow w-full justify-center items-center xl:flex hidden gap-4 xl:px-2 xl:py-0 xl:static absolute top-full left-0 right-0 translate-y-2 xl:bg-transparent bg-white xl:shadow-none shadow-lg rounded-md p-4 xl:flex-row flex-col xl:mb-3"
                id="nav-links">
                <ul class="flex xl:flex-row flex-col gap-6 items-center justify-center">
                    <li>
                        @if (Route::current()->getName() == 'landing.home')
                            <p class="text-base text-primary font-semibold">Home</p>
                        @else
                            <a href="{{ route('landing.home') }}"
                                class="text-base text-gray-500 font-semibold">Home</a>
                        @endif
                    </li>
                    <li>
                        @if (Route::current()->getName() == 'landing.about')
                            <p class="text-base text-primary font-semibold">Company
                                Profile</p>
                        @else
                            <a href="{{ route('landing.about') }}"
                                class="text-base text-gray-500 font-semibold">Company
                                Profile</a>
                        @endif
                    </li>
                    <li>
                        @if (Route::current()->getName() == 'landing.product')
                            <p class="text-base text-primary font-semibold">Our Products</p>
                        @else
                            <a href="{{ route('landing.product') }}"
                                class="text-base text-gray-500 font-semibold">Our Products</a>
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
            <div class="flex w-full max-w-[280px] md:gap-6 gap-4 justify-end items-center">
                {{-- <div class="relative">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-full md:max-w-6 max-w-5 fill-gray-600"
                        viewBox="0 0 512 512">
                        <path
                            d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z" />
                    </svg>
                    <span
                        class="absolute right-0 bottom-0 translate-x-1/2 translate-y-1/2 md:w-5 w-4 aspect-square grid place-items-center md:text-[12px] text-[10px] font-medium text-white bg-red-500 rounded-full">3</span>
                </div>
                <div class="relative">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-full md:max-w-6 max-w-5 fill-gray-600"
                        viewBox="0 0 448 512">
                        <path
                            d="M160 112c0-35.3 28.7-64 64-64s64 28.7 64 64v48H160V112zm-48 48H48c-26.5 0-48 21.5-48 48V416c0 53 43 96 96 96H352c53 0 96-43 96-96V208c0-26.5-21.5-48-48-48H336V112C336 50.1 285.9 0 224 0S112 50.1 112 112v48zm24 48a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm152 24a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z" />
                    </svg>
                    <span
                        class="absolute right-0 bottom-0 translate-x-1/2 translate-y-1/2 md:w-5 w-4 aspect-square grid place-items-center md:text-[12px] text-[10px] font-medium text-white bg-red-500 rounded-full">3</span>
                </div>
                <div class="flex justify-between items-center gap-2 mt-1">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-full md:max-w-7 max-w-6 fill-gray-500"
                            viewBox="0 0 512 512">
                            <path
                                d="M399 384.2C376.9 345.8 335.4 320 288 320H224c-47.4 0-88.9 25.8-111 64.2c35.2 39.2 86.2 63.8 143 63.8s107.8-24.7 143-63.8zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 16a72 72 0 1 0 0-144 72 72 0 1 0 0 144z" />
                        </svg>
                    </div>
                    <div>
                        <p class="md:text-sm text-[12px] font-medium leading-none">SingIn</p>
                        <p class="md:text-[12px] text-[10px] font-normal">Welcome!</p>
                    </div>
                </div> --}}
                <div class="flex gap-2">
                    <a href="mailto:motimultiplast@gmail.com"
                        class="text-gray-800 hover:bg-gray-50 font-medium md:text-sm text-[12px] px-4 py-2 ">Send
                        SMS</a>
                    <button onclick="openInquiryModal()"
                        class="text-white bg-primary hover:bg-primary-900 font-medium md:text-sm text-[12px] px-4 py-2">Send
                        Inquiry</button>
                </div>
                <button class="xl:hidden block" onclick="navbarCollabse()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-full md:max-w-6 max-w-5 fill-gray-500"
                        viewBox="0 0 448 512">
                        <path
                            d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
                    </svg>
                </button>
            </div>
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
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
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
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900">Email</label>
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
