@extends('layouts.base')

@section('pageTitle', 'Home')

@section('pageContent')

<ul>
    @foreach ($movies as $movie)
        <li>
            {{$movie['title']}}
        </li>
    @endforeach
</ul>

@endsection