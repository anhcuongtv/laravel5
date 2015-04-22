@extends('master')

@section('content')

@if (count($data)>0)
	@foreach ($data as $person)
		<h1>{{ $person }}</h1>
	@endforeach
@endif



@stop