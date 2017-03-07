@extends('layout')

@section('title')
	Artists
@stop

@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<h1>All Artists!</h1>

		@foreach ($artists as $artist)
			<div>
				<li><a href="/artists/{{$artist->id}}">{{ $artist->name }}</a></li>
			</div>
		@endforeach

		<hr>
		<form method="POST" action="/artists">
			<div class="form-group">
				<textarea name="name" class="form-control"></textarea>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Add Artist!</button>
			</div>
		</form>
	</div>
</div>

@stop