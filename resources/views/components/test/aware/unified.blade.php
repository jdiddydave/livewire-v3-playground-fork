@props(['color' => 'gray'])

@php
    $bg_colors = [
        'blue' => 'bg-blue-200',
        'gray' => 'bg-gray-200',
    ];

    $text_colors = [
        'gray' => 'text-blue-800',
        'blue' => 'text-gray-800',
    ];

    $bg = $bg_colors[$color] ?? $bg_colors['gray'];
    $text = $text_colors[$color] ?? $text_colors['gray'];
@endphp

<ul {{ $attributes->merge(['class' => $bg . ' p-6']) }}>
    @foreach(range(1, 3) as $item)
        <li class="{{ $text }}">{{ $item }}</li>
    @endforeach
</ul>
