<div id="edit-modal-{{$customer->id}}"
     class="hidden relative z-10" aria-labelledby="edit-modal-label-{{$customer->id}}" role="dialog" aria-modal="true">

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

                <!-- Heading -->
                <h2 class="text-2xl font-semibold text-center mb-6">{{__('Update Customer information')}}</h2>

                <!-- Form -->
                <form method="post" action="{{route('customers.update', $customer->id)}}">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="fullName" class="block text-gray-700 text-sm font-semibold mb-2">
                            {{__('Full Name')}} *
                        </label>
                        <input type="text" id="fullName" name="fullName" value="{{$customer->name}}"
                               class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500"
                               required placeholder="James Brown">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">
                            {{__('Email Address')}} *
                        </label>
                        <input type="email" id="email" name="email" value="{{$customer->email}}"
                               class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500"
                               required placeholder="hello@alignui.com">
                    </div>
                    <div class="mb-4">
                        <label for="phone" class="block text-gray-700 text-sm font-semibold mb-2">
                            {{__('Phone Number')}} *
                        </label>
                        <input type="tel" id="phone" name="phone" value="{{$customer->phone}}"
                               class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500"
                               required placeholder="05xxxxxxxx">
                    </div>
                    <button type="submit"
                            class="w-full bg-blue-500 text-white px-4 py-2  mt-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                        {{__('Update Info')}}
                    </button>
                    <button data-modal-hide="edit-modal-{{$customer->id}}" type="button"
                            class="w-full bg-gray-200 text-black px-4 py-2 mt-2 rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                        {{__('Cancel')}}
                    </button>
                </form>

            </div>
        </div>
    </div>
</div>
