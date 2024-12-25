@props(['title', 'description', 'logo'])

<div class="w-full sm:basis-1/2 md:basis-1/4 p-5">
    <div class="bg-white rounded-lg shadow-lg p-6 w-full">
        <div class="flex items-center">
            <img src="{{ asset('build/assets/icons/' . $logo . '.svg') }}" alt="Logo" class="w-12 h-12">
        </div>
        <div class="w-60 relative group">
            <a href="">
                <!-- Pastikan div ini menggunakan w-full agar mengisi lebar -->
                <h2 class="mt-4 text-xl font-bold text-gray-800">
                    {{ $title }}
                </h2>
                <p class="mt-2 text-gray-600">
                    {{ $description }}
                </p>
                <img src="{{ asset('build/assets/icons/right-icon.svg') }}" alt="Right"
                    class="h-6 w-auto absolute right-0 top-4 group-hover:translate-x-2 transition-transform duration-300">
            </a>
        </div>
    </div>
</div>
