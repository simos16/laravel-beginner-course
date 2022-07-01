@extends('layout')


@section('content')
<!--<h2>le mie note</h2>
-->
@include('partials._hero-home')

<div class="row">


@unless(count($contents) == 0)
@foreach ($contents as $content)

         < x-notes-card :content="$content" />


  <!-- <h2> {{$content['id']}} </h2>
    <h2><a href="/notes/{{$content['id']}}">{{$content['titolo']}}</a>  </h2>
    <h2> {{$content['contenuto'] }}</h2>-->

@endforeach


@else
    <h2>nessun dato</h2>
@endunless
</div>

    <div class="col-6 mx-auto mb-5">{{$contents->links()}}</div>
@endsection


<!--@php-->
<!--$direttiva = 3;-->
<!--@endphp-->

{{--$direttiva--}}
