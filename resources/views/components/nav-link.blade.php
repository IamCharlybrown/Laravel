@props(['active'])

@php
$classes = $active
    ? 'inline-flex items-center px-4 py-2 rounded-xl text-sm font-medium text-white bg-indigo-600 shadow transition hover:bg-indigo-700'
    : 'inline-flex items-center px-4 py-2 rounded-xl text-sm font-medium text-gray-700 hover:text-indigo-600 hover:bg-gray-100 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
