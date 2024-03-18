@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'inline-block no-underline hover:text-black hover:underline py-2 px-2'
            : 'inline-block no-underline hover:text-black hover:underline py-2 px-4';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
