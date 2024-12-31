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
                    <h1 class="font-bold text-3xl">Sort</h1>
                    <div class="flex flex-col gap-4">
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="radio" name="sort" class="hidden peer" />
                            <span
                                class="block w-full text-center py-2 px-4 border border-gray-300 rounded-md bg-white text-black 
                                peer-checked:bg-purple-500 peer-checked:text-white peer-checked:border-purple-500 transition">
                                Sort Ascending
                            </span>
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="radio" name="sort" class="hidden peer" />
                            <span
                                class="block w-full text-center py-2 px-4 border border-gray-300 rounded-md bg-white text-black 
                                peer-checked:bg-purple-500 peer-checked:text-white peer-checked:border-purple-500 transition">
                                Sort Descending
                            </span>
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
                                <button class="mt-4 bg-violet-500 text-white px-4 py-2 rounded hover:bg-violet-900">
                                    Buy Now
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        </section>

    </div>
</x-app-layout>