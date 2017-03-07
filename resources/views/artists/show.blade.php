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
						<a href="#" class="pull-right">{{ $comment->user->username }}</a>
					</li>
				@endforeach
			</ul>

			<h3>Add a New Comment</h3>

			<form method="POST" action="/artists/{{ $artist->id }}/comments">
				<div class="form-group">
					<textarea name="body" class="form-control">{{old('body')}}</textarea>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary">Add Comment!</button>
				</div>
			</form>
			{{-- {{ var_dump($errors) }} --}}

			@if (count($errors))
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			@endif
			
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