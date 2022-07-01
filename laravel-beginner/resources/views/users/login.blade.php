@extends('layout')
@section('content')
    <div class="row">
        <div class="col-6 mx-auto">
            <h1 class="mt-5">Entra</h1>
            <form action="/users/authenticate" method="POST">
                @csrf
                <div class="mb-3">
                    <label  class="form-label">Email</label>
                    <input type="email" class="form-control" value="{{old('email')}}" name="email">
                    @error('email')
                    <p class="lead text-white bg-warning my-3 px-5">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label  class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" value="{{old('password')}}">
                    @error('password')
                    <p class="lead text-white bg-warning my-3 px-5">{{$message}}</p>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary my-btn">Login</button>
            </form>
            <p class="lead">Non hai un  account? <a href="/register">Registrati</a></p>
        </div>
    @endsection
