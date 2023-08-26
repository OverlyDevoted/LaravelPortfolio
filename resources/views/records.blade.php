<h1> {{ $heading }} </h1>
<div>
    @if (count($listings) == 0)
        <p>No listings found</p>
    @else
        <hr>
        @foreach ($listings as $listing)
            <h2>
                <a href="/listing/{{ $listing['id'] }}">{{ $listing['title'] }}</a>
            </h2>
            <p>{{$listing['description']}}</p>
            <hr>
        @endforeach
    @endif
</div>
