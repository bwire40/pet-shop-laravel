<button
    {{ $attributes->merge([
        'type' => 'submit',
        'class' => 'block w-full bg-slate-600 mt-4 py-2 rounded-2xl text-white font-semibold mb-2 hover:bg-slate-800',
    ]) }}>
    {{ $slot }}
</button>
