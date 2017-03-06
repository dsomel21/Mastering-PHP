@extends('layout')

@section('title')
	{{$artist->name}}
@stop

@section('content')
	<h1>{{$artist->name}}</h1>

	@foreach ($artist->albums as $album)
		<li>{{ $album->album_name }}</li>
	@endforeach
@stop