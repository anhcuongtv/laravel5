@extends('master')

@section('content')
    <h1>Write New News</h1>
    <hr/>
    {!! Form::open(['url'=>'news']) !!}
        @include('news.form',['submitbuttonText'=>'Add News'])
    {!! Form::close() !!}

   @include('errors.list')
@stop