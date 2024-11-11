@extends('layouts.landing')

@section('page-title')
    Products
@endsection

@section('body')
    <section>
        <div class="fixed bg-[#00000080] top-0 w-full h-full z-50 place-content-center hidden" id="loader-div">

            <div role="status">
                <svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin fill-primary" viewBox="0 0 100 101"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                        fill="currentColor" />
                    <path
                        d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                        fill="currentFill" />
                </svg>
                <span class="sr-only">Loading...</span>
            </div>

        </div>

        <div class="px-4 container mx-auto mt-4">
            <div class=" md:rounded-3xl rounded-lg bg-slate-50">
                <img src="https://www.moldtekpackaging.com/product-assets/showcase.png"
                class="w-full xl:aspect-[6/1] aspect-[4/1.5] object-contain md:py-8 py-2 px-4" alt="about">
            </div>
        </div>

        <div class="container mx-auto md:my-20 my-10 px-4">
            <div class="flex justify-between items-start gap-6">
                {{-- xl:block hidden --}}
                <div class="max-w-xs w-full grow bg-slate-50 p-4 rounded-md xl:static fixed top-0 left-0 xl:z-0 z-50 h-full xl:block hidden slider-animation xl:shadow-none shadow-xl"
                    id="filter-sidbar">

                    <div class="flex justify-end xl:hidden">
                        <button class="bg-slate-100 p-1.5 rounded-md" onclick="closeSidebar()">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 aspect-square fill-gray-500"
                                viewBox="0 0 384 512">
                                <path
                                    d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                            </svg>
                        </button>
                    </div>

                    <p class="text-lg text-gray-800 font-medium">Filters</p>

                    <div class="py-6">
                        <p class="text-lg text-gray-600 font-medium uppercase">Category</p>
                        <form id="category-form">
                            <div class="mt-4 grid gap-y-4 gap-x-2">

                                <div class="flex gap-2 items-center">
                                    <input type="radio" name="category" id="category" value="all" checked>
                                    <label for="category" class="text-gray-600 leading-none">All</label>
                                </div>

                                @foreach ($categories as $category)
                                    <div class="flex gap-2 items-center">
                                        <input type="radio" name="category" id="category{{ $category->id }}"
                                            value="{{ $category->id }}">
                                        <label for="category{{ $category->id }}"
                                            class="text-gray-600 leading-none">{{ $category->title }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </form>
                    </div>
                </div>
                <div class="grow w-full">
                    <div class="bg-slate-50 flex gap-4 items-center justify-between py-2 px-4 rounded-md">
                        <div class="max-w-6 w-full xl:hidden block">
                            <button class="mt-2 " onclick="openSidebar()">
                                <svg xmlns="http://www.w3.org/2000/svg" class="max-w-5 w-full fill-gray-500"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM64 256c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H96c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
                                </svg>
                            </button>
                        </div>

                        <div class="grow w-full">
                            <p class="md:text-xl text-gray-600 font-semibold text-lg">Products</p>
                        </div>

                        <div class="grow lg:w-full w-[180px]">
                            <form class="max-w-[180px] ml-auto" id="sort-form">
                                <label for="underline_select" class="sr-only">Underline select</label>
                                <select id="underline_select"
                                    class="block py-1.5 px-2 w-full text-sm text-gray-500 bg-transparent border rounded-md border-gray-200 bg-white appearance-none outline-none outline-0">
                                    <option value="newest" selected>Newest</option>
                                    <option value="oldest">Oldest</option>
                                </select>
                            </form>

                        </div>

                    </div>

                    <div class="grid gap-4 xl:grid-cols-3 md:grid-cols-2 mt-6">
                        @foreach ($products as $product)
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
                    @if (!count($products))
                        <p class="py-12 text-center" >Data Not Found</p>
                    @endif

                    <ul class="justify-center flex items-stretch -space-x-px mt-8">
                        <li>
                            <button id="prev-btn"
                                class="flex gap-2 items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>Prev</span>
                            </button>
                        </li>
                        <li>
                            <button id="next-btn"
                                class="flex gap-2 items-center justify-center h-full py-1.5 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                <span>Next</span>
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </section>
@endsection

@section('meta')
    <meta name="og:type" content="website" />
    <meta name="og:title" content="Moti multi plastics - products" />
    <meta name="description"
        content="Moti Multi Plastics: Your trusted partner in high-quality plastic manufacturing. Offering innovative solutions for all your plastic needs, from custom designs to large-scale production. Explore our range of durable, eco-friendly products.">
    <meta name="og:description"
        content="Moti Multi Plastics: Your trusted partner in high-quality plastic manufacturing. Offering innovative solutions for all your plastic needs, from custom designs to large-scale production. Explore our range of durable, eco-friendly products." />
    <meta name="og:url" content="{{ url()->current() }}" />
    <meta name="og:image" content="{{ asset('assets/images/logo.png') }}" />
    <meta property="og:site_name" content="Moti Multi plast" />
@endsection

@section('body-scripts')
    <script>
        let tBody = document.getElementById('tBody');
        let filterSidbar = document.getElementById('filter-sidbar')
        let categoryForm = document.getElementById('category-form')
        let sortForm = document.getElementById('sort-form')
        let underlineSelect = document.getElementById('underline_select')
        let prevBtn = document.getElementById('prev-btn');
        let nextBtn = document.getElementById('next-btn');
        let loaderDiv = document.getElementById('loader-div');

        const closeSidebar = () => filterSidbar.classList.add('hidden')
        const openSidebar = () => filterSidbar.classList.remove('hidden')

        let prev_page_url = null;
        let next_page_url = null;
        let currentUrl;

        function debounce(func, wait = 200) {
            let timeout;

            return function executedFunction(...args) {
                const later = () => {
                    clearTimeout(timeout);
                    func.apply(this, args);
                };

                clearTimeout(timeout);
                timeout = setTimeout(later, wait);
            };
        }

        const renderloader = () => {
            loaderDiv.classList.remove('hidden')
            loaderDiv.classList.add('grid')
        }

        const removeloader = () => {
            loaderDiv.classList.remove('grid')
            loaderDiv.classList.add('hidden')
        }

        categoryForm.addEventListener('change', debounce((e) => {
            redirectWithQuery(0, e.target.value)
            closeSidebar()
        }))

        underlineSelect.addEventListener('change', debounce((e) => {
            redirectWithQuery(0, getQueryValue('category'), e.target.value)
        }))

        const redirectWithQuery = (page = 1, category = 'all', sort = null) => {

            const paramObj = {page}

            if (category && category != 'all') {
                paramObj.category = category
            }

            if (sort != null) {
                paramObj.sort = sort
            }

            const params = new URLSearchParams(paramObj)
            window.location.href = `${window.location.origin}${window.location.pathname}?${params.toString()}`;
        }

        const getQueryValue = (field) => {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(field);
        }

        prevBtn.addEventListener('click', () => {
            redirectWithQuery({{ $products->currentPage() > 0 ? $products->currentPage() - 1 : 1 }}, getQueryValue('category'), getQueryValue('sort'))
        })

        nextBtn.addEventListener('click', () => {
            redirectWithQuery({{ $products->currentPage() < $products->lastPage() ? $products->currentPage() + 1 : $products->lastPage() }}, getQueryValue('category'), getQueryValue('sort'))
        })

        document.addEventListener("DOMContentLoaded", function () {
            let categoryId = getQueryValue('category')
            let sortValue = getQueryValue('sort')

            if (categoryId) {
                let getRedioDom = document.getElementById(`category${categoryId}`)
                getRedioDom.checked = true
            }

            if (sortValue) {
                underlineSelect.value = sortValue
            }

            if (!{{ $products->currentPage() > 1 ? 1 : 0 }}) {
                prevBtn.disabled = true
                prevBtn.classList.remove('bg-white')
                prevBtn.classList.add('bg-gray-100')
            } else {
                prevBtn.disabled = false
                prevBtn.classList.remove('bg-gray-100')
                prevBtn.classList.add('bg-white')
            }

            if (!{{ $products->currentPage() < $products->lastPage() ? 1 : 0 }}) {
                nextBtn.disabled = true
                nextBtn.classList.remove('bg-white')
                nextBtn.classList.add('bg-gray-100')
            } else {
                nextBtn.disabled = false
                nextBtn.classList.remove('bg-gray-100')
                nextBtn.classList.add('bg-white')
            }
        });
    </script>
@endsection

@section('style')
@endsection
