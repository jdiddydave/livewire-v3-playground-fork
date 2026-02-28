
@aware(['color' => 'gray'])

@php
    $colors = [
        'gray' => 'text-blue-800',
        'blue' => 'text-gray-800',
    ];

    $text = $colors[$color] ?? $colors['gray'];
@endphp

<li {{ $attributes->merge(['class' => $text]) }}>
    {{ $slot }}
</li>
