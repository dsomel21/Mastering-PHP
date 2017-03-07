@extends('layout')

@section('title')
	{{$artist->name}}
@stop

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">

			<h1>{{$artist->name}}</h1>

			<ul class="list-group">
				@foreach ($artist->albums as $album)
				<li class="list-group-item">{{ $album->album_name }}</li>
				@endforeach
			</ul>

			<hr>
			<h1>Comments</h1>
			<ul class="list-group">
				@foreach ($artist->comments as $comment)
					<li class="list-group-item">
						{{$comment->body}}
						<a href="#" style="float: right;">{{ $comment->user_id }}</a>
					</li>
				@endforeach
			</ul>
			
			<hr>
			<h3>Add a New Album</h3>

			<form method="POST" action="/artists/{{ $artist->id }}/albums">
				<div class="form-group">
					<textarea name="album_name" class="form-control"></textarea>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">


				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary">Add Album!</button>
				</div>
			</form>
		</div>
	</div>
@stop