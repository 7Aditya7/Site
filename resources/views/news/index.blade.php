@extends('layouts.app')
@section('title','Events/News')

@section('content')
	<div class="container">
		@if(Auth::guard('admins')->check())
		<a href="/news/create" class="btn btn-success ">Post Events/News</a>
		<hr>
		@endif
		@if(count($news)>0)
		@foreach	($news as $new)
		<div class="well">
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<img class="ml-1"src="/storage/news/{{$new->cover_image}}" alt="" style="height:80%; width: 80%;">
				</div>
				<div class="col-md-8 col-sm-4">
			<h3><a href="/news/{{$new->id}}">{{$new->title}}- {{$new->slug}}</a></h3>
			<small>{{$new->created_at}} by {{$new->signature}}</small>
		</div>
	</div>
</div>
		@endforeach
		<div class="text-center"> {{$news->links()}}</div>
		@else
		<p>No News/Events Found</p>
		@endif
</div>
@endsection