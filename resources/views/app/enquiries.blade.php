<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inquiries') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="overflow-hidden sm:rounded-lg">
                <section>
                    <div class="sm:px-0 px-4 mx-auto">
                        <div class="relative overflow-hidden bg-white shadow-md rounded-lg">
                            <div
                                class="flex flex-col px-4 py-3 space-y-3 lg:flex-row lg:items-center lg:justify-between lg:space-y-0 lg:space-x-4">
                                <div>
                                    <h1 class="text-xl font-medium text-gray-600">Inquiries</h1>
                                </div>
                                <div class="flex items-center space-x-4">
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
                                                placeholder="Search Email">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="overflow-x-auto">
                                <table class="w-full text-sm text-left text-gray-500 ">
                                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                                        <tr>
                                            <th scope="col" class="px-4 py-3">No.</th>
                                            <th scope="col" class="px-4 py-3">Email</th>
                                            <th scope="col" class="px-4 py-3">Message</th>
                                            <th scope="col" class="px-4 py-3">Mobile Number</th>
                                            <th scope="col" class="px-4 py-3">Create at</th>
                                            <th scope="col" class="px-4 py-3">Status</th>
                                            <th scope="col" class="px-4 py-3">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table-body">
                                        {{-- @for ($i = 0; $i < 12; $i++)
                                            <tr class="border-b  hover:bg-gray-100">
                                                <td class="px-4 py-2.5">
                                                    {{ $i + 1 }}
                                                </td>
                                                <td class="px-4 py-2.5 font-medium text-gray-900 whitespace-nowrap ">
                                                    <div class="flex items-center">
                                                        <a href="mailto:example@gmail.com" class="underline"> example@gmail.com </a>
                                                    </div>
                                                </td>
                                                <td
                                                    class="px-4 py-2.5 font-medium text-gray-900 whitespace-nowrap max-w-sm truncate">
                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas
                                                    repellat dignissimos obcaecati, nesciunt optio, esse iusto explicabo
                                                    nemo officiis temporibus, laboriosam eligendi harum! Sed debitis
                                                    fugiat facilis necessitatibus facere eius.</td>
                                                <td class="px-4 py-2.5 font-medium text-gray-900 whitespace-nowrap ">
                                                    <a href="tel:0000000000" class="underline"> +00 0000 000 000 </a></td>
                                                <td class="px-4 py-2.5 font-medium text-gray-900 whitespace-nowrap ">
                                                    29 Jun 2024</td>
                                                <td class="px-4 py-2.5 font-medium text-gray-900 whitespace-nowrap ">
                                                    <span class="bg-red-500 text-white px-2 py-1 text-[12px] rounded-md" >Disapprove</span>
                                                </td>
                                                <td
                                                    class="px-4 py-2.5 font-medium text-primary underline cursor-pointer whitespace-nowrap " onclick="openInquiryModal()">
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

        <div class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 hidden bg-[#00000080] justify-center items-center w-full md:inset-0 h-screen max-h-full"
            id="inquiry-modal">
            <div class="relative p-4 w-full max-w-2xl max-h-full scale-animation">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow ">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                        <h3 class="md:text-xl text-lg font-semibold text-gray-900 ">
                            Inquiry
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
                    <div id="inquiry-modal-body"></div>

                </div>
            </div>
        </div>

        <script>
            let inquiryModal = document.getElementById('inquiry-modal');
            let inquiryModalBody = document.getElementById('inquiry-modal-body');

            const closeInquiryModal = () => {
                inquiryModal.classList.remove('flex')
                inquiryModal.classList.add('hidden')
            }

            const openInquiryModal = (id, email, mobile_number, description, isApprove) => {
                let displayEmail = email ? `<p class="text-gray-700 md:text-base text-sm mt-0.5 underline"> <a
                                                        href="mailto:${email}"> ${email} </a></p>` : '--';
                                                        console.log(displayEmail,'displayEmaildisplayEmail')
                if (id && displayEmail && mobile_number && description) {
                    inquiryModal.classList.remove('hidden')
                    inquiryModal.classList.add('flex')

                    let htmlText = `<div class="p-5">
                                        <div class="grid grid-cols-2 gap-4">
                                            <div>
                                                <p class="font-medium text-gray-400 md:text-base text-sm">Email</p>
                                                ${displayEmail}
                                            </div>
                                            <div>
                                                <p class="font-medium text-gray-400 md:text-base text-sm">Mobile Number</p>
                                                <p class="text-gray-700 md:text-base text-sm mt-0.5 underline"> <a
                                                        href="tel:${mobile_number}"> +${mobile_number} </a></p>
                                            </div>
                                        </div>
                                        <div class="mt-6">
                                            <p class="font-medium text-gray-400 md:text-base text-sm">Message</p>
                                            <p class="text-gray-700 md:text-base text-sm mt-0.5">${description}</p>
                                        </div>
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="flex items-center justify-between p-4 md:p-5 border-t border-gray-200 rounded-b">

                                        ${isApprove ? `<button type="button" onclick="closeInquiryModal()"class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Close</button>

                                        <form method="post" action="{{ route('api.enquirie.remove') }}" > <input type="hidden" name="_token" value="{{ csrf_token() }}"> <input type="hidden" name="id" value="${id}" ><button type="submit" class="text-white bg-red-500 hover:bg-primary-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center uppercase">Delete</button></form>` 
                                        
                                        : `<form method="post" action="{{ route('api.enquirie.remove') }}" > <input type="hidden" name="_token" value="{{ csrf_token() }}"> <input type="hidden" name="id" value="${id}" ><button type="submit" class="text-white bg-red-500 hover:bg-primary-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center uppercase">Delete</button></form>
                                              
                                        <form method="post" action="{{ route('api.enquirie.approve') }}" > <input type="hidden" name="_token" value="{{ csrf_token() }}"> <input type="hidden" name="id" value="${id}" ><button type="submit" class="text-white bg-primary hover:bg-primary-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center uppercase">Approve</button></form>`}
                                    </div>`;

                    inquiryModalBody.innerHTML = htmlText;
                }
            }

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

            function formatDate(date) {
                const options = {
                    day: '2-digit',
                    month: 'short',
                    year: 'numeric'
                };
                return date.toLocaleDateString('en-GB', options).replace(',', '');
            }

            const coreTableRow = (id, index, email, description, mobile_number, isApprove, date) => {
                let desc = description.replaceAll('"', '').replaceAll("'", "").replaceAll(/^\s+|\s+$/gm, '<br>')
                let displayEmail = email ? `<a href="mailto:${email}" class="underline"> ${email} </a>` : '--';
                return `<tr class="border-b  hover:bg-gray-100">
                            <td class="px-4 py-2.5">
                                ${index}
                            </td>
                            <td class="px-4 py-2.5 font-medium text-gray-900 whitespace-nowrap ">
                                <div class="flex items-center">
                                    ${displayEmail}
                                </div>
                            </td>
                            <td
                                class="px-4 py-2.5 font-medium text-gray-900 whitespace-nowrap max-w-sm truncate">
                                ${description}</td>
                            <td class="px-4 py-2.5 font-medium text-gray-900 whitespace-nowrap ">
                                <a href="tel:${mobile_number}" class="underline"> +${mobile_number} </a></td>
                            <td class="px-4 py-2.5 font-medium text-gray-900 whitespace-nowrap ">${date}</td>
                            <td class="px-4 py-2.5 font-medium text-gray-900 whitespace-nowrap ">
                                ${isApprove ? '<span class="bg-primary text-white px-2 py-1 text-[12px] rounded-md" >Approved</span>' : '<span class="bg-red-500 text-white px-2 py-1 text-[12px] rounded-md" >Disapprove</span>'}
                            </td>
                            <td
                                class="px-4 py-2.5 font-medium text-primary underline cursor-pointer whitespace-nowrap " onclick="openInquiryModal(${id}, '${email ? email : ''}', '${mobile_number}', '${desc}', ${isApprove})">
                                Details</td>
                        </tr>`;
            }

            const setData = (arrObj) => {
                console.log(arrObj,'dfdf')
                let insertStr = '';
                if (arrObj.data.length) {
                    arrObj.data.map((row, index) => {
                        insertStr += coreTableRow(
                            row.id,
                            index + 1,
                            row.email,
                            row.message,
                            row.mobile_number,
                            row.status == "approve",
                            formatDate(new Date(row.created_at))
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

            fetchProductData("{{ route('api.enquirie.get') }}")

            searchInput.addEventListener('input', debounce(
                (e) => {
                    fetchProductData(`{{ Request::root() }}/enquirie/get?keyword=${e.target.value}`);
                }, 800
            ))

            prevBtn.addEventListener('click', () => {
                fetchProductData(prev_page_url)
            })

            nextBtn.addEventListener('click', () => {
                fetchProductData(next_page_url)
            })
        </script>
    </div>
</x-app-layout>
