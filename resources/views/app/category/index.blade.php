<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <ul class="flex flex-wrap text-sm font-medium text-center border-b text-gray-500 sm:px-0 px-4">
                <li>
                    <a href="{{ route('products') }}"
                        class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50">Products</a>
                </li>
                <li>
                    <p class="inline-block p-4 text-blue-600 bg-white rounded-t-lg active">Category</p>
                </li>
            </ul>

            <div class="overflow-hidden sm:rounded-b-lg">
                <section>
                    <div class="sm:px-0 px-4 mx-auto">
                        <div class="relative overflow-hidden bg-white shadow-md rounded-b-lg">
                            <div
                                class="flex flex-col px-4 py-3 space-y-3 lg:flex-row lg:items-center lg:justify-between lg:space-y-0 lg:space-x-4">
                                <div class="flex items-center flex-1 space-x-4">
                                    <form class="flex items-center">
                                        <label for="search-input" class="sr-only">Search</label>
                                        <div class="relative w-full">
                                            <div
                                                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500"
                                                    fill="currentColor" viewbox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <input type="text" id="search-input"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2"
                                                placeholder="Search" required="">
                                        </div>
                                    </form>
                                </div>
                                <div
                                    class="flex flex-col flex-shrink-0 space-y-3 md:flex-row md:items-center lg:justify-end md:space-y-0 md:space-x-3">
                                    <a href="{{ route('category.add') }}"
                                        class="flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-lg bg-primary hover:bg-primary-900">
                                        <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path clip-rule="evenodd" fill-rule="evenodd"
                                                d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                        </svg>
                                        Add new Category
                                    </a>
                                </div>
                            </div>
                            <div class="overflow-x-auto">
                                <table class="w-full text-sm text-left text-gray-500 ">
                                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                                        <tr>
                                            <th scope="col" class="px-4 py-3">Category</th>
                                            <th scope="col" class="px-4 py-3">Caption</th>
                                            <th scope="col" class="px-4 py-3">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table-body">
                                        {{-- @for ($i = 0; $i < 10; $i++)
                                            <tr class="border-b  hover:bg-gray-100 ">
                                                <th scope="row"
                                                    class="flex items-center px-4 py-2 font-medium text-gray-900 whitespace-nowrap ">
                                                    <img src="https://flowbite.s3.amazonaws.com/blocks/application-ui/products/imac-front-image.png"
                                                        alt="iMac Front Image" class="w-auto h-8 mr-3">
                                                    Apple iMac 27&#34;
                                                </th>
                                                <td class="px-4 py-2 font-medium text-gray-900">
                                                    <div class="max-w-screen-md truncate">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum quod debitis dolorum, exercitationem aliquid eligendi maiores? Repellat eos, esse autem pariatur, neque et at ex quo consequuntur provident culpa exercitationem.
                                                    </div>
                                                </td>
                                                <td
                                                    class="px-4 py-2 font-medium text-primary underline cursor-pointer whitespace-nowrap ">
                                                    Details</td>
                                            </tr>
                                        @endfor --}}
                                    </tbody>
                                </table>
                            </div>
                            <nav class="flex flex-col items-start justify-between p-4 space-y-3 md:flex-row md:items-center md:space-y-0"
                                aria-label="Table navigation">
                                <span class="text-sm font-normal text-gray-500 ">
                                    Result
                                    <span class="font-semibold text-gray-900 " id="total-product">0</span>
                                </span>
                                <ul class="inline-flex items-stretch -space-x-px">
                                    <li>
                                        <button id="prev-btn"
                                            class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">
                                            <span class="sr-only">Previous</span>
                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </li>
                                    <li>
                                        <button id="next-btn"
                                            class="flex items-center justify-center h-full py-1.5 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                            <span class="sr-only">Next</span>
                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    let tBody = document.getElementById('table-body');
    let searchInput = document.getElementById('search-input');
    let totalProduct = document.getElementById('total-product');
    let prevBtn = document.getElementById('prev-btn');
    let nextBtn = document.getElementById('next-btn');
    let productArr = [];

    let prev_page_url = null;
    let next_page_url = null;

    function debounce(func, wait) {
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

    const coreTableRow = (id, imgHtml, name, description) => {
        return `<tr class="border-b  hover:bg-gray-100 ">
                    <th scope="row"
                        class="flex items-center px-4 py-2 font-medium text-gray-900 whitespace-nowrap truncate">
                        ${imgHtml}
                        ${name}
                    </th>
                    <td class="px-4 py-2 font-medium text-gray-900">
                        <div class="max-w-screen-md truncate">
                            ${description}
                        </div>
                    </td>
                    <td
                        class="px-4 py-2 font-medium text-primary underline cursor-pointer whitespace-nowrap ">
                        <a href="{{ Request::root() }}/app/category/edit/${id}" >Details</a></td>
                </tr>`;
    }

    const setData = (arrObj) => {
        let insertStr = '';
        if (arrObj.data.length) {
            arrObj.data.map((row, index) => {
                insertStr += coreTableRow(
                    row.id,
                    row.image ?
                    `<img src="{{ Request::root() . '/storage/' }}${row.image}" alt="img" class="w-auto h-8 mr-3">` :
                    '<img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg" alt="img" class="w-auto h-8 mr-3">',
                    row.title,
                    row.description ? row.description : '-',
                );
            })
        } else {
            insertStr = '<p class="p-4" >Data Not Found</p>'
        }

        tBody.innerHTML = insertStr;
        totalProduct.innerHTML = arrObj.total

        prev_page_url = arrObj.prev_page_url
        next_page_url = arrObj.next_page_url

        if (!arrObj.prev_page_url) {
            prevBtn.disabled = true
            prevBtn.classList.remove('bg-white')
            prevBtn.classList.add('bg-gray-100')
        } else {
            prevBtn.disabled = false
            prevBtn.classList.remove('bg-gray-100')
            prevBtn.classList.add('bg-white')
        }

        if (!arrObj.next_page_url) {
            nextBtn.disabled = true
            nextBtn.classList.remove('bg-white')
            nextBtn.classList.add('bg-gray-100')
        } else {
            nextBtn.disabled = false
            nextBtn.classList.remove('bg-gray-100')
            nextBtn.classList.add('bg-white')
        }
    }

    const fetchProductData = async (pageUrl) => {

        let res = await fetch(pageUrl)
        let data = await res.json()

        // if (data.data.length) {
        //     productArr = [...data.data]
        // }

        setData(data)
    }

    fetchProductData("{{ route('api.category.get') }}")

    searchInput.addEventListener('input', debounce(
        (e) => {
            fetchProductData(`{{ Request::root() }}/category/get?keyword=${e.target.value}`);
        }, 800
    ))

    prevBtn.addEventListener('click', () => {
        fetchProductData(prev_page_url)
    })

    nextBtn.addEventListener('click', () => {
        fetchProductData(next_page_url)
    })
</script>
