@extends('master')

@section('content')
    <h1>Edit {!! $news->title !!}</h1>

    {!! Form::model($news,['method'=>'PATCH','action'=>['NewsController@update',$news->id]]) !!}
        @include('news.form',['submitbuttonText'=>'Edit News'])
    {!! Form::close() !!}
    @include('errors.list')
@stop