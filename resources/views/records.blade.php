@extends('layout')
@section('content')
    @include('/partials/_hero')
    @include('/partials/_search')
    <h1 class="text-lg flex justify-center py-2"> {{ strtoupper($heading) }} </h1>
    <div class="px-8 grid lg:grid-cols-3 gap-4">
        @if (count($listings) == 0)
            <p>No listings found</p>
        @else
            @foreach ($listings as $listing)
                <x-card class="max-h-40 overflow-hidden">
                    <x-listing-card :listing="$listing" />
                </x-card>
            @endforeach
        @endif
    </div>
@endsection
