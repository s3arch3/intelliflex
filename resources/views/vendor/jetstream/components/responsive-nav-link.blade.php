@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 border-l-4 border-b-2 border-yellow-400 text-sm font-bold leading-5 text-yellow-400 focus:outline-none focus:text-yellow-400 transition'
            : 'block pl-3 pr-4 py-2 border-l-4 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-200 hover:text-white hover:border-yellow-400 focus:outline-none focus:text-white focus:border-gray-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
