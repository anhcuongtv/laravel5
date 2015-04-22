@extends('master')
@section('content')
<h1><a href="">{{ $news->title }}</a></h1>
    <div class="body">
        {{ $news->content }}
    </div>
</article>
@stop