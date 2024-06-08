@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300  focus:border-rose-100  focus:ring-rose-100  rounded-md shadow-sm']) !!}>
