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
                <div class="flex max-h-40 bg-gray-100 border-2 border-gray-200">
                    <div class="flex p-2 text-ellipsis overflow-hidden">
                        <img class="w-24 mr-2 object-contain" src={{ asset('images/logo_light.png') }} alt="Entry image">
                        <div class="">
                            <a class="text-blue-400 underline text-lg"
                                href="/listing/{{ $listing['id'] }}">{{ $listing['title'] }}</a>
                            <p>{{ $listing['description'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection
