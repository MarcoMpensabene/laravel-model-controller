
@extends('layouts.app')

@section('page-title' , 'Home')

@section('main-content')

    <main>
            <h1 class="text-center text-primary">MOVIE LIST</h1>
        {{-- @dump($moviesList) test for db elements--}}
        <section class="container">
            <div class="row">
                @foreach ($moviesList as $movie)
                <div class="card col-2 m-2 card-bg">
                    <div class="card-body ">
                        <h5 class="card-title text-primary">{{$movie["title"]}}</h5>
                        <h6 class="card-subtitle mb-4 text-body-secondary">{{$movie["original_title"]}}</h6>
                        <p class="text-danger">Nationality : {{$movie["nationality"]}}</p>
                        <p class="text-info-emphasis">Date : {{$movie["date"]}}</p>
                        <p class="text-info-emphasis">Vote : {{$movie["vote"]}}</p>
                    </div>
                </div>
                @endforeach

            </div>

        </section>
    </main>


@endsection
