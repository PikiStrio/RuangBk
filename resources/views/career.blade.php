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
            <div class="flex max-w-7xl mx-auto flex-wrap">
                <x-card-md images="Einstein" title="Physicist" description="Mechanics, Thermodynamics, Relativity"></x-card-md>
                <x-card-md images="jeroe" title="Mathematician" description="Arithmetic, Algebra, Calculus"></x-card-md>
                <x-card-md images="isaacNewton" title="Alchemist" description="Transmutation of Metals, Four Elements, Chemical Experiments"></x-card-md>
                <x-card-md images="fiersa" title="Author" description="Writing Techniques, Research Skills, Language and Grammar"></x-card-md>
                <x-card-md images="nikola" title="Electrical Engineer" description="Electrical Circuits, Power Systems, Power Electronics"></x-card-md>
                <x-card-md images="wiliam" title="Playwright" description="lorem ipsum lobnfashjk fsajfowe n"></x-card-md>
            </div>
        </section>



</x-app-layout>
