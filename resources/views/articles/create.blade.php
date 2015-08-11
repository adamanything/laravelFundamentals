@extends('layouts.master')

@section('content')
    <h1>Create Article</h1>

    {!! Form::open(['url' => 'articles']) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('body', 'Body:', ['class' => 'control-label']) !!}
        {!! Form::text('body', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Create New Article', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
    @stop