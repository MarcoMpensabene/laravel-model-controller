{{--! Prendi il layout ed utilizzalo come struttura  --}}
@extends('layouts.app')

@section('page-title' , 'Home')

@section('main-content')

    <main>
            <h1 class="text-center text-primary">ANIME MOVIE LIST</h1>
        {{-- @dump($animesList) test for db elements--}}
        <section class="container">
            <div class="row">
                @foreach ($animeList as $anime)
                <div class="card col-2 m-2 card-bg">
                    <div class="card-body ">
                        <h5 class="card-title text-primary mb-4">{{$anime["title"]}}</h5>
                        <p class="text-danger">Nationality : {{$anime["nationality"]}}</p>
                        <p class="text-info-emphasis">Date : {{$anime["date"]}}</p>
                        <p class="text-info-emphasis">Vote : {{$anime["vote"]}}</p>
                    </div>
                </div>
                @endforeach

            </div>

        </section>
    </main>


@endsection
