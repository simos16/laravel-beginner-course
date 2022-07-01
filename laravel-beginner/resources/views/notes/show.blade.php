@extends('layout')



@section('content')

    @include('partials._hero-note')

    <div class="d-md-inline-flex">
        <x-cards class="sfondo">

            <div class="card-body">
                <h5 class="card-title">{{$note->titolo}}</h5>
                <x-notes-tags :tags="$note->tags"  />
                <div><img src="{{$note->immagine ? asset('storage/' . $note->immagine) :  asset('images/default.jpg')}}" class="rounded float-start img-fluid mx-5"></div>
                <p class="small">{{$note->autore}}</p>
                <p ><em>{{$note->created_format}}</em></p>
                <p class="card-text">{{$note->contenuto}} </p>
            </div>
 {{--<hr>
            <div class="row w-50">
                <div class="col">
                    <a class="btn btn-success" href="/notes/{{$note->id}}/edit"><i class="bi bi-pencil-fill"></i>Modifica</a>

                </div>
                <div class="col">
<form method="POST" action="/notes/{{$note->id}}">
    @csrf
    @method('DELETE')
<button type="submit" class="btn btn-danger"><i class="bi bi-trash-fill"></i>Cancella</button>
</form>
                </div> --}}

            </div>


        </x-cards>


    </div>

<!--<h2> {{$note['id']}} </h2>
<h2> {{$note['titolo']}} </h2>
<h2> {{$note['contenuto'] }}</h2>-->

@endsection


