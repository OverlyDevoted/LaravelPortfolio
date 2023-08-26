<h1> {{ $heading }} </h1>
<div>
    <hr>
    @foreach ($listings as $listing)
        @foreach ($listing as $key => $value)
            <p>
                {{ strtoupper($key) }}={{ $value }}
            </p>
        @endforeach
        <hr>
    @endforeach
</div>
