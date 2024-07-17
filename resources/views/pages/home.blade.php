{{--! Prendi il layout ed utilizzalo come struttura  --}}
@extends('layouts.app')

@section('page-title' , 'Home')

@section('main-content')

    <main>
         <h1>Movies List</h1>
        {{-- @dump($moviesList) test for db elements--}}
         <section class="container">
            <div class="row">
                @foreach ($moviesList as $movie)
                <div class="card col-2 m-2">
                    <div class="card-body ">
                      <h5 class="card-title">{{$movie["title"]}}</h5>
                      <h6 class="card-subtitle mb-2 text-body-secondary">{{$movie["original_title"]}}</h6>
                      <p class="card-text">{{$movie["nationality"]}}</p>
                      <p >{{$movie["date"]}}</p>
                      <p >{{$movie["vote"]}}</p>
                    </div>
                  </div>
                @endforeach

            </div>

         </section>
    </main>


@endsection
