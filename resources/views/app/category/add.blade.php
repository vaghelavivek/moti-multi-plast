<x-app-layout>
    <form enctype="multipart/form-data" method="post" action="{{ route('api.category.add') }}">
        @csrf
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-between gap-4 mb-4">
                    <h1 class="font-semibold text-primary text-xl">New category</h1>
                    <button type="submit"
                        class="bg-primary text-white py-1.5 px-4 hover:bg-primary-900 rounded-md font-medium text-sm">Save</button>
                </div>
                <div class="w-full">
                    <div class="bg-white rounded-md p-4">
                        <div>
                            <label for="title"
                                class="block mb-2 md:text-base text-sm font-medium text-gray-900">Title <sup
                                    class="text-red-500">*</sup></label>
                            <input type="text" id="title" name="title" value="{{ old('title') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                                placeholder="Title" />

                            @error('title')
                                <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-4">
                            <label for="description"
                                class="block mb-2 md:text-base text-sm font-medium text-gray-900">Description <sup
                                    class="text-red-500">*</sup></label>
                            <textarea rows="7" id="description" name="description"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 resize-none"
                                placeholder="Description">{{ old('description') }}</textarea>

                            @error('description')
                                <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="bg-white rounded-md p-4 my-4">
                        <div>
                            <label for="image"
                                class="block mb-2 md:text-base text-sm font-medium text-gray-900">Media <sup
                                    class="text-red-500">*</sup></label>
                            <input id="image" name="image"
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 py-2 px-2" type="file">

                            @error('image')
                                <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                            @enderror
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
</x-app-layout>

<script>
    // tinymce.init({
    //     selector: '#description',
    //     plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount linkchecker',
    //     toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    // });

    let toastSuccess = document.getElementById('toast-success');
    let toastWarning = document.getElementById('toast-warning');

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

    @if (Session::has('success'))
        openSuccessToast()
        window.location.href = '{{ route('category') }}'
    @endif

    @if (Session::has('error'))
        openToastWarning()
        setTimeout(() => {
            closeToastWarning()
        }, 3000);
    @endif
</script>
