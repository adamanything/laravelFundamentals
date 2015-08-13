@extends('layouts.master')
@section('content')
    <h1>Edit {{$article->title}}</h1>

    {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticleController@update', $article->id ]]) !!}

    @include('partials.formTemplate')

    {!! Form::close() !!}

    @stop