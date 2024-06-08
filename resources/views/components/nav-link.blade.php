@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-rose-600 text-sm font-medium leading-5 text-white   focus:outline-none focus:border-rose-600 transition duration-150 ease-in-out'
            : 'inline-flex font-bold items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-white  hover:text-rose-700  hover:border-rose-600 focus:outline-none focus:text-rose-700  focus:border-rose-300  transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
