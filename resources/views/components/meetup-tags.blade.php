@props(['tagsCsv'])

@php
    $tags = explode(',', $tagsCsv);
@endphp

<ul class="meetup-tags-list">
    @foreach ($tags as $tag)
        <li class="meetup-tag"><a href="/?tag={{$tag}}">{{$tag}}</a></li>
    @endforeach
</ul>