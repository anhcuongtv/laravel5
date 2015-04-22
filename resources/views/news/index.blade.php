@extends('master')
@section('content')
    <h1>News</h1>
    <hr/>
    @foreach($news as $new)
        <article>
            <h2><a href="{{ url('/news',$new->id) }} ">{{ $new->title }}</a></h2>
            <div class="body">
                {{ $new->content }}
            </div>
        </article>
    @endforeach
@stop