<div id="delete-modal-{{$customer->id}}"
     class="hidden relative z-10" aria-labelledby="delete-modal-label-{{$customer->id}}" role="dialog" aria-modal="true">

    <!-- overlay -->
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 sm:items-center sm:p-0">
            <div class="bg-white p-8 rounded-lg shadow-lg max-w-sm w-full">

                <!-- user icon -->
                <div class="flex justify-center mb-6">
                    <span class="inline-block bg-gray-200 rounded-full p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4"/>
                        </svg>
                    </span>
                </div>

                <!-- Form -->
                <form method="post" action="{{route('customers.destroy', $customer->id)}}">
                    @csrf
                    @method('DELETE')
                    <div class="mb-4">
                        <h2 class="text-2xl font-semibold text-center mb-6">{{__("Delete Customer")}}</h2>
                        <p class="text-2xl font-semibold text-center mb-6">{{__("Are you sure you want to delete this customer ?")}}</p>
                    </div>

                    <button type="submit"
                            class="w-full bg-red-500 text-white px-4 py-2  mt-4 rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                        {{__('Delete')}}
                    </button>
                    <button data-modal-hide="delete-modal-{{$customer->id}}" type="button"
                            class="w-full bg-gray-200 text-black px-4 py-2 mt-2 rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                        {{__('Cancel')}}
                    </button>
                </form>

            </div>
        </div>
    </div>
</div>
