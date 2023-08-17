@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex text-[#8B7FC0]  items-center px-1 pt-1 text-lg font-semi-bold leading-5  focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'inline-flex  text-[#8B7FC0] items-center px-1 pt-1 border-b-4 border-transparent text-lg font-semi-bold leading-5 hover:text-[#7868B6] hover:border-[#7868B6] focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
