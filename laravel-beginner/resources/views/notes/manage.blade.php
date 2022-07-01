@extends('layout')
@section('content')

    <div class="row">

        <div class="col-10 mx-auto">
            <h1 class="my-5">Gestisci le tue note</h1>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nota</th>
                    <th scope="col">Modifica</th>
                    <th scope="col">Cancella</th>
                </tr>
                </thead>
                <tbody>
                @unless($notes->isEmpty())
                    @foreach($notes as $note)
                <tr>
                    <th scope="row">{{$note->id}}</th>
                    <td>{{$note->titolo}}</td>
                    <td><a class="btn btn-success"
                           href="/notes/{{$note->id}}/edit">Modifica
                            <i class="bi bi-pencil-fill mx-3"></i></a></td>
                    <td><form method="POST" action="/notes/{{$note->id}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash-fill"></i>Cancella</button>
                        </form>
                </tr>
                    @endforeach
                @else
                <div class="bg-primary">Non ci sono note</div>
                @endunless
                </tbody>
            </table>
        </div>
    </div>


@endsection
