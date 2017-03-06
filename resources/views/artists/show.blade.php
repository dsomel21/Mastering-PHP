@extends('layout')

@section('title')
	{{$artist->name}}
@stop

@section('content')
	<h1>{{$artist->name}}</h1>
@stop