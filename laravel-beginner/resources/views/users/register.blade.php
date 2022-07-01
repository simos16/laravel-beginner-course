@extends('layout')
@section('content')

    <div class="row">
        <div class="col-6 mx-auto">
            <h1 class="mt-5">Registrati</h1>
            <form action="/users" method="POST">
                @csrf
                <div class="mb-3">
                    <label  class="form-label">Nome</label>
                    <input type="text" class="form-control"  name="name"  value="{{old('name')}}">
                    @error('name')
                    <p class="lead text-white bg-warning my-3 px-5">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label  class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="{{old('email')}}">
                    @error('name')
                    <p class="lead text-white bg-warning my-3 px-5">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label  class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" value="{{old('password')}}">
                    @error('name')
                    <p class="lead text-white bg-warning my-3 px-5">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label  class="form-label">Conferma Password</label>
                    <input type="password" class="form-control" name="password_confirmation" value="{{old('password_confirmation')}}">
                    @error('name')
                    <p class="lead text-white bg-warning my-3 px-5">{{$message}}</p>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary my-btn">Registrati</button>
            </form>
            <p class="lead">Hai già un account? <a href="/login">Vai al login</a></p>
        </div>

    </div>


@endsection
