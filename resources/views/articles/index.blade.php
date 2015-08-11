@extends('layouts.master')

@section('content')
    <h1>Articles</h1>

    @foreach($articles as $article)
        <a href="{{url('/articles', $article->id)}}"> <h3>{{$article->title}}</h3> </a>
        <article>
            {{$article->body}}
        </article>
    @endforeach



    @stop