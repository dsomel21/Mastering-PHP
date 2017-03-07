@extends('layout')

@section('title')
	Edit {{$album->album_name}}
@stop

@section('content')
	<h1>Edit Album</h1>

	<form method="POST" action="/albums/{{$album->id}}">
		{{ method_field('PUT') }}
		<div class="form-group">
			<textarea name="album_name" class="form-control">{{$album->album_name}}</textarea>
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-primary">Update Album!</button>
		</div>
	</form>
@stop