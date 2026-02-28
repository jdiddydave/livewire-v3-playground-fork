@props(['primary' => 'black', 'secondary' => 'yellow'])

@php
    $bg_colors = [
        'black' => 'bg-black',
        'yellow' => 'bg-yellow-200',
        'white' => 'bg-white',
    ];

    $text_colors = [
        'yellow' => 'text-yellow-200',
        'black' => 'text-black',
        'white' => 'text-white',
    ];

    $bg_color = $bg_colors[$primary] ?? $bg_colors['yellow'];
    $text_color = $text_colors[$secondary] ?? $text_colors['yellow'];

    $inverted = $bg_color . ' ' . $text_color;
@endphp
