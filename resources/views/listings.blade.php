<x-layout>

<h1>{{ $heading }}</h1>

@if(count($listings) === 0)

<h1>No lists found</h1>

@endif



@foreach ($listings as $listing)

<h2>
    <a href="/listing/{{ $listing['id'] }}">
        {{  $listing['title']}}
    </a>

</h2>
<p>
    {{ $listing['description'] }}
</p>

@endforeach

</x-layout>
