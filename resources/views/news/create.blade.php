@extends('layouts.app')
@section('title','Create Event')
@section('content')
	<div class="container">
		<div class="text-center">
			<h1>Create Post</h1>
		</div>
		<a href="/news" class="btn btn-default">Go Back</a>
		<hr>
			{!! Form::open(['action' => 'NewsController@store', 'method' => 'POST', 'enctype' =>'multipart/form-data']) !!}
			<div class="form-group">
					{{Form::label( 'title' , 'Title' )}}
					{{Form::text('title','',['class' => 'form-control', 'placeholder' => 'Title'])}}
				</div>
					@error('title')
					<div class="alert alert-danger">
                        {{$message}}
                    </div>
                    @enderror
			
			<div class="form-group">
					{{Form::label( 'title' , 'Slug' )}}
					{{Form::text('slug','',['class' => 'form-control', 'placeholder' => 'Slug'])}}
				</div>
					@error('slug')
					<div class="alert alert-danger">
                        {{$message}}
                    </div>
                    @enderror
			
			<div class="form-group">
					{{Form::label( 'title' , 'Body' )}}
					{{Form::textarea('body','',['class' => 'form-control', 'placeholder' => 'Message'])}}
				</div>
					@error('body')
					<div class="alert alert-danger">
                        {{$message}}
                    </div>
                    @enderror
			
			
			<div class="form-group">
				{{Form::label( 'title' , 'Image' )}}<br>
				{{Form::File('cover_image')}}
			</div>
				@error('cover_image')
					<div class="alert alert-danger">
                        {{$message}}
                    </div>
                    @enderror
			
			<div class="form-group">
					{{Form::label( 'title' , 'Signature' )}}
					{{Form::text('signature','',['class' => 'form-control', 'placeholder' => 'Name or Signature'])}}
				</div>
					@error('signature')
					<div class="alert alert-danger">
                        {{$message}}
                    </div>
                    @enderror
			
			{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
			{!! Form::close() !!}
	</div>   

@endsection