@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 bg-[#EEECF7] focus:border-[#8A7BC8] focus:ring-[#8A7BC8] rounded-md shadow-sm']) !!}>
