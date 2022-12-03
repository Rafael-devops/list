@props(['active'])

@php
$classes = ($active ?? false)
            ? 'bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium'
            : 'inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium  hover:border-gray-300 hover:text-gray-700 text-white';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
