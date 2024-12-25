<x-app-layout>
    <x-slot name="title">Career</x-slot>
    <x-slot name="header">
        <h1 class="font-semibold text-4xl text-gray-800 leading-tight">
            {{ __('Career Guide') }}
        </h1>
        <p class="font-normal text-base text-gray-800 leading-tight">
            {{ __('A complete guide to building a career so ') }}
        </p>
        <p class="font-normal text-base text-gray-800 leading-tight">
            {{ __('that your future is not bleak') }}
        </p>
    </x-slot>

    <div class="py-12">
        <section>
            <div class="max-w-7xl mx-auto">
                <div class="bg-white p-4 flex justify-between leading-normal rounded-md">
                    <img src="{{ asset('build/assets/images/mock.png') }}" alt="Mentor's Picture" class="h-48 w-auto px-4">
                    <div class="flex flex-col">
                        <div class="mb-8">
                            <p class="text-sm text-gray-600 flex items-center">
                                <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                                </svg>
                                Members only
                            </p>
                            <div class="text-gray-900 font-bold text-xl mb-2">Can coffee make you a better developer?
                            </div>
                            <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium
                                nihil.</p>
                        </div>
                        <div class="flex items-center">
                            <img class="w-10 h-10 rounded-full mr-4" src="/img/jonathan.jpg"
                                alt="Avatar of Jonathan Reinink">
                            <div class="text-sm">
                                <p class="text-gray-900 leading-none">Jonathan Reinink</p>
                                <p class="text-gray-600">Aug 18</p>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>



</x-app-layout>
