@props(['active'])

@php
$classes = ($active ?? false)
           
            ? 'bg-[#89462a] flex items-center p-2 text-white rounded-lg group w-full'
            : 'flex items-center p-2 text-gray rounded-lg group w-full hover:bg-gray-100 dark:hover:bg-gray-700';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
