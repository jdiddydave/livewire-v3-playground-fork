@props(['color' => 'gray'])

@php
    $colors = [
        'blue' => 'bg-blue-200',
        'gray' => 'bg-gray-200',
    ];

    $bg = $colors[$color] ?? $colors['gray'];
@endphp

<ul {{ $attributes->merge(['class' => $bg . ' p-6']) }}>
    @foreach(range(1, 3) as $item)
        <x-test.item>{{ $item }}</x-test.item>
    @endforeach
</ul>
