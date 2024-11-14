<x-app-layout>
    <form enctype="multipart/form-data" method="post" action="{{ route('api.product.add') }}">
        {{-- <x-slot name="header">
            <div class="flex items-center justify-between">
                <h1 class="font-semibold text-primary text-xl">New Products</h1>
            </div>
        </x-slot> --}}
        @csrf
        <div class="py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between gap-4 mb-4">
                    <h1 class="font-semibold text-primary text-xl truncate">{{ $product->title }}</h1>

                    <div class="flex items-center gap-2">
                        <button type="submit"
                            class="bg-primary text-white py-1.5 px-4 hover:bg-primary-900 rounded-md font-medium text-sm">Save</button>
                        <button type="button" onclick="removeProduct({{ $product->id }})"
                            class="bg-red-500 text-white py-1.5 px-4 hover:bg-primary-900 rounded-md font-medium text-sm">Remove</button>
                    </div>
                </div>
                <div class="flex justify-between gap-4 flex-col lg:flex-row">
                    <div class="w-full">
                        <div class="bg-white rounded-md p-4">
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <div>
                                <label for="title"
                                    class="block mb-2 md:text-base text-sm font-medium text-gray-900">Title <sup
                                        class="text-red-500">*</sup></label>
                                <input type="text" id="title" name="title"
                                    value="{{ old('title') ? old('title') : $product->title }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                                    placeholder="Title" />

                                <p class="text-sm mt-1 text-gray-500 font-medium pl-1">Title should be between 60 and 90
                                    characters for optimal SEO.</p>

                                @error('title')
                                    <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mt-4">
                                <label for="description"
                                    class="block mb-2 md:text-base text-sm font-medium text-gray-900">Description</label>
                                <textarea rows="7" id="description" name="description"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 resize-none"
                                    placeholder="Description">{{ old('description') ? old('description') : $product->description }}</textarea>
                            </div>
                            <div class="mt-4">
                                <label for="seo-description"
                                    class="block mb-2 md:text-base text-sm font-medium text-gray-900">SEO
                                    description</label>
                                <textarea rows="5" id="seo-description" name="seo_description"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 resize-none"
                                    placeholder="SEO description">{{ old('seo_description') ? old('seo_description') : $product->seo_description }}</textarea>

                                <p class="text-sm mt-1 text-gray-500 font-medium pl-1">SEO description should be close
                                    to 160 characters for optimal SEO.</p>
                            </div>
                            <div class="mt-4">
                                <label for="og-seo-description"
                                    class="block mb-2 md:text-base text-sm font-medium text-gray-900">Open graph
                                    description</label>
                                <textarea rows="5" id="og-seo-description" name="og_seo_description"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 resize-none"
                                    placeholder="Open graph description">{{ old('og_seo_description') ? old('seo_description') : $product->og_seo_description }}</textarea>

                                <p class="text-sm mt-1 text-gray-500 font-medium pl-1">Open graph description should be
                                    close to 90 characters for optimal SEO.</p>
                            </div>
                        </div>
                        <div class="bg-white rounded-md p-4 my-4">
                            <div>
                                <label for="media"
                                    class="block mb-2 md:text-base text-sm font-medium text-gray-900">Media</label>
                                <input id="media" name="media[]" multiple
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 py-2 px-2"
                                    type="file">

                                @error('media')
                                    <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="grid grid-cols-3 gap-4 mt-4">
                                @foreach ($product->images as $image)
                                    {{-- <form action="{{ route('api.media.remove') }}" method="POST"> --}}
                                        {{-- @csrf --}}
                                        {{-- <input type="hidden" name="media_id" value="{{ $image->id }}"> --}}
                                        <div class="aspect-[5/3] cursor-pointer relative">
                                            <button type="button" onclick="removeImage('{{ $image->id }}')"
                                                class="absolute right-0 top-0 translate-x-1/2 -translate-y-1/2 z-20 bg-red-500 py-1 px-1.5 rounded-full">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="max-w-3 w-full fill-white" viewBox="0 0 384 512">
                                                    <path
                                                        d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                                                </svg>
                                            </button>
                                            <img src="{{ Request::root() . '/storage/' . $image->link }}"
                                                class="w-full rounded-md border object-cover h-full" alt="box">
                                        </div>
                                    {{-- </form> --}}
                                @endforeach
                            </div>
                        </div>
                        <div class="bg-white rounded-md p-4">
                            <div class="grid grid-cols-2 gap-4 mb-4">
                                {{-- <div>
                                    <label for="price"
                                        class="block mb-2 md:text-base text-sm font-medium text-gray-900">Price (per
                                        piece)</label>
                                    <div class="relative w-full">
                                        <div
                                            class="absolute inset-y-0 left-0 flex items-center text-gray-500 pl-4 pointer-events-none">
                                            ₹
                                        </div>
                                        <input type="number" id="price" name="price"
                                            value="{{ old('price') ? old('price') : $product->price }}"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2"
                                            placeholder="00.00">
                                    </div>
                                </div> --}}

                                <div>
                                    <label for="order_quantity"
                                        class="block mb-2 md:text-base text-sm font-medium text-gray-900">Minimum Order
                                        Quantity <sup class="text-red-500">*</sup> </label>
                                    <input type="number" id="order_quantity" name="order_quantity"
                                        value="{{ old('order_quantity') ? old('order_quantity') : $product->order_quantity }}"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2"
                                        placeholder="00" />

                                    @error('order_quantity')
                                        <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-4 mb-4">
                                <div class="mt-4">
                                    <label for="color"
                                        class="block mb-2 md:text-base text-sm font-medium text-gray-900">Color</label>
                                    <input type="text" id="color" name="color"
                                        value="{{ old('color') ? old('color') : $product->color }}"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2"
                                        placeholder="e.g red" />
                                </div>

                                <div class="mt-4">
                                    <label for="material"
                                        class="block mb-2 md:text-base text-sm font-medium text-gray-900">Material</label>
                                    <input type="text" id="material" name="material"
                                        value="{{ old('material') ? old('material') : $product->material }}"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2"
                                        placeholder="e.g plastic" />
                                </div>
                            </div>

                            <div>
                                <label for="stock"
                                    class="block mb-2 md:text-base text-sm font-medium text-gray-900">Slug <sup
                                        class="text-red-500">*</sup> </label>
                                <input type="text" id="stock" name="slug"
                                    value="{{ old('slug') ? old('slug') : $product->slug }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2"
                                    placeholder="~" />

                                @error('slug')
                                    <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                                @enderror
                            </div>


                        </div>
                    </div>
                    <div class="max-w-md w-full">
                        <div class="bg-white rounded-md p-4">
                            <div>
                                <label for="category"
                                    class="block mb-2 md:text-base text-sm font-medium text-gray-900">Category <sup
                                        class="text-red-500">*</sup> </label>
                                <select id="category" name="category_id"
                                    class="block py-2 px-2.5 rounded-md w-full text-sm text-gray-500 bg-transparent border border-gray-300 appearance-none bg-gray-50">
                                    <option selected>Choose a Category</option>

                                    @foreach ($category as $cate)
                                        <option value="{{ $cate->id }}"
                                            selected="{{ old('category_id') ? old('category_id') == $cate->id : $product->category_id == $cate->id }}">
                                            {{ $cate->title }}</option>
                                    @endforeach
                                </select>

                                @error('category_id')
                                    <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mt-4">
                                <label for="type"
                                    class="block mb-2 md:text-base text-sm font-medium text-gray-900">Type <sup
                                        class="text-red-500">*</sup> </label>
                                <input type="text" id="type" name="type"
                                    value="{{ old('type') ? old('type') : $product->type }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2"
                                    placeholder="e.g example" />

                                @error('type')
                                    <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mt-4">
                                <label for="shape"
                                    class="block mb-2 md:text-base text-sm font-medium text-gray-900">Shape <sup
                                        class="text-red-500">*</sup> </label>
                                <select id="shape" name="shape"
                                    class="block py-2 px-2.5 rounded-md w-full text-sm text-gray-500 bg-transparent border border-gray-300 appearance-none bg-gray-50">
                                    <option selected>Choose a shape</option>
                                    <option value="Round"
                                        selected="{{ old('shape') ? old('shape') == 'Round' : $product->shape == 'Round' }}">
                                        Round
                                    </option>
                                    <option value="Oval"
                                        selected="{{ old('shape') ? old('shape') == 'Oval' : $product->shape == 'Oval' }}">
                                        Oval</option>
                                    <option value="Premium Oval"
                                        selected="{{ old('shape') ? old('shape') == 'Premium Oval' : $product->shape == 'Premium Oval' }}">
                                        Premium Oval</option>
                                    <option value="Square Pack"
                                        selected="{{ old('shape') ? old('shape') == 'Square Pack' : $product->shape == 'Square Pack' }}">
                                        Square Pack</option>
                                    <option value="Twist Pack"
                                        selected="{{ old('shape') ? old('shape') == 'Twist Pack' : $product->shape == 'Twist Pack' }}">
                                        Twist Pack</option>
                                    <option value="Rectangular Pack"
                                        selected="{{ old('shape') ? old('shape') == 'Rectangular Pack' : $product->shape == 'Rectangular Pack' }}">
                                        Rectangular Pack</option>
                                </select>

                                @error('shape')
                                    <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="bg-white rounded-md p-4 mt-4">
                            <div>
                                <label for="category"
                                    class="block mb-2 md:text-base text-sm font-medium text-gray-900">Supply
                                    Ability <sup class="text-red-500">*</sup> </label>
                                <select id="category" name="supply_ability"
                                    value="{{ old('supply_ability') ? old('supply_ability') : $product->supply_ability }}"
                                    class="block py-2 px-2.5 rounded-md w-full text-sm text-gray-500 bg-transparent border border-gray-300 appearance-none bg-gray-50">
                                    <option selected>Choose a supply ability</option>
                                </select>

                                @error('supply_ability')
                                    <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mt-4">
                                <label for="delivery_time"
                                    class="block mb-2 md:text-base text-sm font-medium text-gray-900">Delivery Time (In
                                    Days)</label>
                                <input type="number" id="delivery_time" name="delivery_time"
                                    value="{{ old('delivery_time') ? old('delivery_time') : $product->delivery_time }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                                    placeholder="0" />
                            </div>
                            <div class="mt-6 flex items-center gap-4">
                                <input type="checkbox" id="is_hotproducts" name="is_hot"
                                    checked="{{ old('is_hot') ? old('is_hot') == 'on' : $product->is_hot }}" />
                                <label for="is_hotproducts"
                                    class="block md:text-base text-sm font-medium text-gray-900">Hot product</label>
                            </div>
                        </div>
                        <div class="bg-white rounded-md p-4 mt-4">
                            <div>
                                <label for="seo_keyword"
                                    class="block mb-2 md:text-base text-sm font-medium text-gray-900">SEO
                                    Keyword</label>
                                <div class="flex gap-2 items-center">
                                    <input type="text" id="seo_keyword"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2"
                                        placeholder="e.g example" />
                                    <button type="button" onclick="addTag()"
                                        class="bg-primary text-white py-2 px-4 hover:bg-primary-900 rounded-md font-medium text-sm">Add</button>
                                </div>
                            </div>
                            <div class="mt-4 flex items-center gap-2 flex-wrap" id="tag_list">
                            </div>
                            <input type="hidden" name="tag_list" id="tagInput">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

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
        <div class="ms-3 text-sm font-normal">{{ Session::has('error') ? Session::get('error') : 'Error' }}</div>
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
</x-app-layout>

<script>
    tinymce.init({
        selector: '#description',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount linkchecker',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    });

    let toastSuccess = document.getElementById('toast-success');
    let toastWarning = document.getElementById('toast-warning');
    let seoKeyword = document.getElementById('seo_keyword');
    let tagListDiv = document.getElementById('tag_list');
    let tagInput = document.getElementById('tagInput');

    let tagList = [];

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

    const removeProduct = (id) => {

        const headers = new Headers({
            'X-CSRF-TOKEN': "{{ csrf_token() }}",
            'Accept': 'application/json',
            'Content-Type': 'application/json; charset=UTF-8',
        })

        fetch('{{ route('api.media.remove') }}', {
            method: 'POST',
            headers: headers,
            body: JSON.stringify({
                id: id
            })
        }).then(
            (res) => {
                return res.json();
            }
        ).then(
            (data) => {
                if (data.success) {
                    window.location.href = '{{ route('products') }}'
                } else {
                    openToastWarning()
                    setTimeout(() => {
                        closeToastWarning()
                    }, 3000);
                }
            }
        ).catch(
            () => {
                openToastWarning()
                setTimeout(() => {
                    closeToastWarning()
                }, 3000);
            }
        )
    }

    const renderTag = () => {
        let text = tagList.map(
                (curr, index) => 
                    `<span
                        class="inline-flex items-center px-2 py-1 text-sm font-medium text-gray-700 bg-blue-100 rounded capitalize">
                        ${curr}
                        <button type="button" onclick="removeTag('${curr}')"
                            class="inline-flex items-center p-1 ms-2 text-sm text-gray-600 bg-transparent rounded-sm hover:bg-blue-200 hover:text-blue-900">
                            <svg class="w-2 h-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Remove badge</span>
                        </button>
                    </span>`
            )

        tagListDiv.innerHTML = text.toString().replaceAll(',', '')
        tagInput.value = tagList.map(v => v.toLowerCase()).toString();
    }

    const removeTag = (tag) => {
        if (tagList.includes(tag)) {
            tagList = tagList.filter((curr) => curr != tag)
            renderTag()
        }
    }

    const addTag = () => {
        if (seoKeyword.value) {
            tagList.push(seoKeyword.value)
            renderTag()
        }
        seoKeyword.value = null
    }

    const removeImage = (id) => {
        const headers = new Headers({
            'X-CSRF-TOKEN': "{{ csrf_token() }}",
            'Accept': 'application/json',
            'Content-Type': 'application/json; charset=UTF-8',
        })

        fetch('{{ route('api.media.remove') }}', {
            method: 'POST',
            headers : headers,
            body: JSON.stringify({
                media_id : id
            })
        })
        .then(
            () => {
                window.location.reload();
            }
        )

    }

    @if (Session::has('success'))
        openSuccessToast()
        window.location.href = '{{ route('products') }}'
    @endif

    @if (Session::has('error'))
        openToastWarning()
        setTimeout(() => {
            closeToastWarning()
        }, 3000);
    @endif

    @if (!is_null($product->keyword))
        tagList = '{{ $product->keyword }}'.split(",");
        renderTag();
    @endif
</script>
