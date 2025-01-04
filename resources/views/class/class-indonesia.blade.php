<x-app-layout>
    <x-slot name="title">Online Class</x-slot>
    <div class="py-2">
        <section class="max-w-7xl mx-auto mt-20">
            <div class="max-w-lg">
                <h1 class="text-md font-medium text-green-500">Become a Jerome Polin</h1>
                <h1 class="font-bold text-6xl text-black mb-3">Math Class</h1>
                <p class="text-xl">learn mathematics to help your thinking patterns and train your logic</p>
            </div>
            <section class="flex mt-10">
                <aside class="max-w-xs mx-10">
                    <h1 class="font-bold text-3xl mb-2">Sort</h1>
                    <div class="flex flex-col gap-4">
                        <label class="flex items-center gap-4 cursor-pointer">
                            <!-- Input radio -->
                            <input type="checkbox" class="hidden peer" />
                            <!-- Kotak -->
                            <div class="w-6 h-6 bg-gray-300 rounded peer-checked:bg-purple-500"></div>
                            <!-- Teks -->
                            <span class="text-gray-700 font-medium">New</span>
                        </label>
                        <label class="flex items-center gap-4 cursor-pointer">
                            <!-- Input radio -->
                            <input type="checkbox" class="hidden peer" />
                            <!-- Kotak -->
                            <div class="w-6 h-6 bg-gray-300 rounded peer-checked:bg-purple-500"></div>
                            <!-- Teks -->
                            <span class="text-gray-700 font-medium">Popular</span>
                        </label>
                        <label class="flex items-center gap-4 cursor-pointer">
                            <!-- Input radio -->
                            <input type="checkbox" class="hidden peer" />
                            <!-- Kotak -->
                            <div class="w-6 h-6 bg-gray-300 rounded peer-checked:bg-purple-500"></div>
                            <!-- Teks -->
                            <span class="text-gray-700 font-medium">This is the text</span>
                        </label>
                        <label class="flex items-center gap-4 cursor-pointer">
                            <!-- Input radio -->
                            <input type="checkbox" class="hidden peer" />
                            <!-- Kotak -->
                            <div class="w-6 h-6 bg-gray-300 rounded peer-checked:bg-purple-500"></div>
                            <!-- Teks -->
                            <span class="text-gray-700 font-medium">This is the text</span>
                        </label>
                        <label class="flex items-center gap-4 cursor-pointer">
                            <!-- Input radio -->
                            <input type="checkbox" class="hidden peer" />
                            <!-- Kotak -->
                            <div class="w-6 h-6 bg-gray-300 rounded peer-checked:bg-purple-500"></div>
                            <!-- Teks -->
                            <span class="text-gray-700 font-medium">This is the text</span>
                        </label>
                    </div>
                </aside>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-6 flex-grow">
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
                                        <button
                                            class="mt-4 bg-violet-500 text-white px-4 py-2 rounded hover:bg-violet-900">
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
            </section>
        </section>

    </div>
</x-app-layout>
