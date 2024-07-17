{{--! Prendi il layout ed utilizzalo come struttura  --}}
@extends('layouts.app')

@section('page-title' , 'Home')

@section('main-content')

    <main>
         <h1>Movies List</h1>
        @dump($moviesList)
         <section>
            <ul>
                @foreach ($moviesList as $movie)
                <li>
                    {{$movie["title"]}}
                </li>
                @endforeach
            </ul>
         </section>
    </main>


@endsection
