@props(['active'])

@php
$classes = ($active ?? false)
    ? 'inline-flex items-center text-xl font-bold leading-5 text-violet-800 transition duration-150 ease-in-out'
    : 'inline-flex items-center text-xl font-medium leading-5 text-gray-600 hover:text-violet-800 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
