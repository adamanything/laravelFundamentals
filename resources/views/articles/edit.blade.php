@extends('layouts.master')
@section('content')
    <h1>Edit {{$article->title}}</h1>

    {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticleController@update', $article->id ]]) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('body', 'Body:', ['class' => 'control-label']) !!}
        {!! Form::text('body', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('published_at', 'Publish On:') !!}
        {!! Form::input('date', 'published_at', date("Y-m-d"), ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Create New Article', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

    @stop