<x-app-layout>
    <x-slot name="title">Flash Sale</x-slot>
    <x-slot name="header">
        <h1 class="font-semibold text-4xl text-gray-800 leading-tight">
            {{ __('Flash Sale') }}
        </h1>
        <p class="font-normal text-base text-gray-800 leading-tight">
            {{ __('WoOoowW') }}
        </p>
        <p class="font-normal text-base text-gray-800 leading-tight">
            {{ __('Really Cheap T_T') }}
        </p>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-violet-500 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-100">
                    <h3 class="text-2xl font-bold">Flash Sale Items</h3>
                    <p>Don't miss these amazing deals. Limited time only!</p>
                </div>
            </div>

            <!-- Product List -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">
                <!-- Product Card -->
                @foreach (['Product 1', 'Product 2', 'Product 3', 'Product 4'] as $index => $product)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="https://via.placeholder.com/300" alt="{{ $product }}"
                            class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-black">{{ $product }}</h3>
                            <p class="text-sm text-gray-600">Short description of {{ strtolower($product) }}.</p>
                            <div class="mt-4">
                                <span class="text-red-800 line-through text-sm">${{ 99 - $index * 10 }}.99</span>
                                <span class="text-green-600 font-bold text-lg">${{ 49 - $index * 10 }}.99</span>
                            </div>
                            <div class="flex justify-between">
                                <div class="flex items-end">
                                    <button class="mt-4 bg-violet-500 text-white px-4 py-2 rounded hover:bg-violet-900">
                                        Buy Now
                                    </button>
                                    <p class="mx-5">21321213</p>
                                </div>
                                <img data-bs-toggle="tooltip" data-bs-custom-class="font-poppins"
                                    data-bs-placement="bottom" title="All Levels"
                                    src="https://buildwithangga.com/themes/front/images/ic_lv_hard.svg"
                                    class="icon-level mt-5" alt="ic_level">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
