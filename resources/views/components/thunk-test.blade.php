@use('App\View\Colors')


<x-colors :primary="$primary" :secondary="$secondary" />
@dump($inverted)

<ul {{ $attributes->merge(['class' => $inverted . ' p-6']) }}>
    @foreach(range(1, 3) as $item)
        <li class="bg-yellow-200">{{ $item }}</li>
    @endforeach
</ul>
