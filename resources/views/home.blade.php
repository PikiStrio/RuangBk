<x-app-layout>
    <x-slot name="title">Home</x-slot>
    <x-slot name="header">
        <h1 class="font-semibold text-4xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h1>
        <p class="font-normal text-base text-gray-800 leading-tight">
            {{ __('Learn how to be an Albert Einstein') }}
        </p>
        <p class="font-normal text-base text-gray-800 leading-tight">
            {{ __('with us') }}
        </p>
    </x-slot>

    <div class="py-2">
        <section class="flex max-w-7xl mx-auto justify-between relative">
            <div class="p-6 text-gray-900 max-w-xl">
                <h1 class="text-6xl font-bold mb-4">Do your best</h1>
                <h1 class="text-6xl font-bold text-violet-800 mb-8">with us</h1>
                <p class="text-xl">24pm provides the best mathematics, Indonesian/English and science classes in
                    Indonesia</p>
                <div class="flex gap-5">
                    <a href="{{ route('career') }}"
                        class="py-3 px-7 my-4 bg-violet-800 text-white hover:bg-gray-300 hover:text-gray-800 rounded-full text-xl font-bold duration-300">Career
                        Guide</a>
                </div>
            </div>
            <div class="p-6 relative">
                <img src="{{ asset('build/assets/images/math.png') }}" alt="Math Logo"
                    class="h-auto max-h-96 zoom-in-on-load">
                <img src="{{ asset('build/assets/images/science.png') }}" alt="Science Logo"
                    class="absolute top-0 left-0 h-40 transform -translate-x-8 -translate-y-8 zoom-in-on-load2">
            </div>
        </section>
        <section class="max-w-screen-sm mx-auto text-center flex flex-col items-center mb-36">
            <div class="bg-violet-800 text-white max-w-max my-10 px-3 py-2 text-sm rounded-full" data-aos="fade-up"
                data-aos-anchor-placement="top-bottom">
                Following in the Footsteps of Smart People
            </div>
            <p>After graduating from here your math skills will be like Jerome Polin, your physics skills will be
                equivalent to Isaac Newton and maybe you will be needed to create nuclear formulas.</p>
        </section>
        <section class="max-w-full mx-16 col">
            <h1 class="text-md font-bold text-green-500">Come on, fuel your ambition</h1>
            <h1 class="text-4xl font-bold mb-5">From Zero To Hero</h1>
            <div class="flex flex-wrap">
                <x-card-sm title="Math Class" description="Matematika Interaktif" logo="math-icon" />
                <x-card-sm title="Indonesian Class" description="Creative Writing" logo="indo-icon" />
                <x-card-sm title="English Class" description="Public Speaking" logo="english-icon" />
                <x-card-sm title="Science Class" description="Belajar Sains Mudah" logo="science-icon" />
            </div>
        </section>
    </div>

</x-app-layout>
