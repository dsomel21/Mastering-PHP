@extends('layout')

@section('content')
	<h1>All Artists!</h1>

	@foreach ($artists as $artist)
		<div>
			{{ $artist->name }}
		</div>
	@endforeach

	@stop