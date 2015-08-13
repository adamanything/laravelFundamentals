@extends('layouts.master')

@section('content')
    <h1>Create Article</h1>

    {!! Form::open(['url' => 'articles']) !!}

        @include('partials.formTemplate', ['submitButtonText' => 'Add Article'])

    {!! Form::close() !!}
    @stop


