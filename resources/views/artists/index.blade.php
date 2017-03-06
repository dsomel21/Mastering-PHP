@extends('layout')

@section('title')
	Artists
@stop

@section('content')
	<h1>All Artists!</h1>

	@foreach ($artists as $artist)
		<div>
			<li><a href="/artists/{{$artist->id}}">{{ $artist->name }}</a></li>

			<li>{{ $artist->path() }}</li>
		</div>
	@endforeach

	@stop