@extends('layout')

@section('content')
    <section>

        <h1 class="text-center text-2xl pt-4"> {{ $heading }} </h1>
        <div class="px-8 grid lg:grid-row-2 gap-4">

            <x-card>
                <div class="flex justify-center pt-4 pb-8">
                    <img class="w-48" src={{ asset('images/logo_light.png') }} alt="Entry image">
                </div>
                <h2 class="text-3xl text-center py-8">
                    {{ $listing->title }}
                </h2>
                <x-listing-tags :tagsCsv='$listing->tags'  />
                <label class="flex justify-end pt-8 pb-4">Created by: {{ $listing->username }}</label>
            </x-card>
            <x-card>
                <h2 class="pt-4 pb-8 text-2xl text-center">Project description</h2>
                <p class="py-4">
                    {{ $listing['description'] }}
                </p>
            </x-card>
        </div>
    </section>
@endsection
