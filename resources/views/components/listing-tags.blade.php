@props(['tagsCsv'])

@php
    $tags = explode(' ', $tagsCsv);
@endphp

<ul class="flex flex-row justify-center py-8 gap-4">
    @foreach ($tags as $tag)
        <li class="text-center px-2 bg-primary-dark text-white rounded-md hover:bg-white hover:text-primary-dark transition-colors duration-300">
            <a href="/?tag={{$tag}}">{{ $tag }}</a>
        </li>
    @endforeach
</ul>
