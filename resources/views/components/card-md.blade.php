@props(['images', 'title', 'description'])

<div class="w-full sm:basis-1/2 basis-full lg:basis-1/3 p-5">
    <div class="max-w-sm rounded-xl overflow-hidden shadow-lg mx-auto bg-white flex flex-col min-h-full">
        <img class="rounded-full w-24 h-24 object-cover mt-5 ml-5"
            src="{{ asset('build/assets/images/' . $images . '.png') }}" alt="Sunset in the mountains">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">{{ $title }}</div>
            <p class="text-gray-700 text-base">{{ $description }}
            </p>
        </div>
        <div class="mt-auto">
            <a href=""
                class="py-3 px-7 my-8 mx-auto max-w-xs bg-gray-300 text-gray-800 rounded-full block text-xl text-center font-semibold hover:bg-gray-400">View
                Details</a>
        </div>
    </div>
</div>
