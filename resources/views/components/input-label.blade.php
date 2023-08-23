@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium mb-1 text-sm text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>
