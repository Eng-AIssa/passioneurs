<div id="errors-modal"
     class=" relative z-10" aria-labelledby="errors-modal-label" role="dialog" aria-modal="true">

    <!-- overlay -->
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div class="bg-white p-8 rounded-lg shadow-lg max-w-sm w-full">

                <!-- user icon -->
                <div  data-modal-target="errors-modal" data-modal-toggle="errors-modal"  class="flex justify-center mb-6">
                    <span class="inline-block bg-red-200 rounded-full p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4"/>
                        </svg>
                    </span>
                </div>



                @foreach ($errors->all() as $error)
                    <li class="text-red-600 mb-2"> - {{ $error }}</li>
                @endforeach


                <button data-modal-hide="errors-modal" type="button"
                        class="w-full bg-gray-200 text-black px-4 py-2 mt-2 rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                    {{__('Cancel')}}
                </button>

            </div>
        </div>
    </div>
</div>
