@props(['color' => 'gray'])

@php
    $inverted = $inverted();
@endphp

<ul {{ $attributes->merge(['class' => $inverted . ' p-6']) }}>
    @foreach(range(1, 3) as $item)
        <li>{{ $item }}</li>
    @endforeach
</ul>
