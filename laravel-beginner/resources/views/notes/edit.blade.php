@extends('layout')
@section('content')
    <div class="row">
        <div class="col-6 mx-auto">
            <h1 class="mt-5">Modifica la tua nota</h1>
            <form class="my-5" action="/notes/{{$note->id}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label  class="form-label">Titolo</label>
                    <input type="text" class="form-control" name="titolo" value="{{$note->titolo}}">
                    @error('titolo')
                    <p class="lead text-white bg-warning my-3 px-5">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label  class="form-label">Autore</label>
                    <input type="text" class="form-control" name="autore" value="{{$note->autore}}">
                    @error('autore')
                    <p class="lead text-white bg-warning my-3 px-5">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label  class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" value="{{$note->email}}">
                    @error('email')
                    <p class="lead text-white bg-warning my-3 px-5">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label  class="form-label">Keyword</label>
                    <input type="text" class="form-control" name="tags" value="{{$note->tags}}">
                    @error('tags')
                    <p class="lead text-white bg-warning my-3 px-5">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label  class="form-label">Immagine</label>
                    <input type="file" class="form-control" name="immagine">
                    <div><img src="{{$note->immagine ? asset('storage/' . $note->immagine) : asset('images/default.jpg')}}" class="rounded  img-fluid my-3 img-edit"></div>
                    @error('immagine')
                    <p class="lead text-white bg-warning my-3 px-5">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label  class="form-label">Contenuto</label>
                    <textarea type="text" class="form-control"  rows="10" name="contenuto">{{$note->contenuto}}</textarea>
                    @error('contenuto')
                    <p class="lead text-white bg-warning my-3 px-5">{{$message}}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary my-btn">Aggiorna</button>
            </form>

        </div>

    </div>
@endsection
