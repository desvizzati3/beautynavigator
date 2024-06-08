@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-rose-800 font-abril']) }}>
    {{ $value ?? $slot }}
</label>
