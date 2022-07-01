@props(['tags'])

@php

    $tagsValue = explode(',',  $tags);

@endphp



<div>
    <ul class="nav justify-content-center">

        @foreach($tagsValue as $tag)

        <li class="nav-item tags">
            <a class="nav-link"  href="/?tag={{$tag}}">{{$tag}}</a>
        </li>
        @endforeach

    </ul>
</div>
