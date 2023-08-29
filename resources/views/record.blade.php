@extends('layout')

@section('content')
    <section>

        <h1 class="text-center text-2xl pt-4"> {{ $heading }} </h1>
        <div class="mx-8 px-4 my-4 bg-gray-100 border-2 border-gray-200 rounded-md">
            <div class="flex justify-center pt-4 pb-8">
                <img class="w-48" src={{ asset('images/logo_light.png') }} alt="Entry image">
            </div>
            <h2 class="text-3xl text-center py-8">
                {{ $listing->title }}
            </h2>
            <ul class="flex justify-center py-8">
                <li class="bg-primary-dark max-w-fit text-white">
                    {{$listing->tags}}
                </li>
            </ul>
            <label class="flex justify-end pt-8 pb-4" >Created by: {{$listing->username}}</label>
        </div>
        <div class="mx-8 px-4 my-4 bg-gray-100 border-2 border-gray-200 rounded-md">
            <h2 class="pt-4 pb-8 text-2xl text-center">Project description</h2>
            <p class="py-4">
                {{ $listing['description'] }}
            </p>
        </div>
    </section>
@endsection
