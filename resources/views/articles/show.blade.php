@extends('layouts.master')

@section('content')
    <article>
        <h1>{{$article->title}}</h1>
        <p>{{$article->body}}</p>

    </article>
    @stop