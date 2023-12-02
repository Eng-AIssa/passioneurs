<!-- Table Title-->
{{--<div>
    <h2 class="text-2xl font-semibold leading-tight">{{__('Customers')}}</h2>
</div>--}}

<!-- Search & Add button Container-->
<div class="my-2 flex justify-between sm:flex-row gap-2  flex-col">

    {{--<!-- Search -->
    <div class="block relative">
        <span class="h-full absolute inset-y-0 left-0 flex items-center pl-2">
            <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                <path
                    d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z">
                </path>
            </svg>
        </span>
        <input placeholder="Search"
               class="appearance-none  rounded-lg  border border-gray-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none"/>
    </div>--}}
    <div>
        <h2 class="text-2xl font-semibold leading-tight">{{__('Customers')}}</h2>
    </div>

    <!-- Add Button -->
    <div class="bg-gray-100">
        <button data-modal-target="add-modal" data-modal-toggle="add-modal"
                class="group relative h-10 w-48 overflow-hidden rounded-lg bg-white text-lg shadow">
            <div
                class="absolute inset-0 w-3 bg-gray-200 transition-all duration-[250ms] ease-out group-hover:w-full"></div>
            <span class="relative text-black ">{{__('Add Customer')}}</span>
        </button>
    </div>
</div>
