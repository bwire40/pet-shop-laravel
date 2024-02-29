@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'pl-2 outline-none border-none focus:ring-0']) !!}>
