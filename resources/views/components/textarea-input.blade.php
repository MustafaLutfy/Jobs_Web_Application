@props(['disabled' => false])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300  focus:border-[#8A7BC8] focus:ring-[#8A7BC8] rounded-md shadow-sm']) !!}>
</textarea>