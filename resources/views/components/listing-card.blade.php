@props(['listing'])
<div class="flex p-2 text-ellipsis overflow-hidden">
    <img class="w-24 mr-2 object-contain" src={{ asset('images/logo_light.png') }} alt="Entry image">
    <div class="">
        <a class="text-blue-400 underline text-lg" href="/listing/{{ $listing['id'] }}">{{ $listing['title'] }}</a>
        <p>{{ $listing['description'] }}</p>
    </div>
</div>
