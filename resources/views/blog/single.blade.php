@extends('main')

@section('title', "|  $post->title ")

@section('stylesheet')
  <link rel="stylesheet" href="{{asset('css/styles.css')}}">
@endsection

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>{{ $post->title }}</h1>
			<p> {{ $post->body }} </p>
			<hr>
			<p> Posted In: {{ $post->category->name }} </p>
		</div>	
	</div>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h3 class="comments-title"><span class="glyphicon glyphicon-comment"></span> {{ $post->comments()->count() }} Comments</h3>
			@foreach($post->comments as $comment)
				<div class="comment">
					<div class="author-info">
						<img src="{{ "https://www.gravatar.com/avatar/".md5(strtolower(trim($comment->email)))."?s=50&d=mm" }}" class="author-image">
							<div class="author-name">
								<h4>{{ $comment->name }}</h4>
								<p class="author-time">{{ date('F nS, Y -g:iA', strtotime($comment->created_at)) }}</p>
							</div>
						
					</div> 

					<div class="comment-content">
						{{ $comment->comment }}
					</div>
				</div>
			@endforeach
		</div>
	</div>

	<div class="row">
		<div id="comment-form" class="col-md-8 col-md-offset-2">
			<form method="post" action="{{ route('comments.store', $post->id) }}">
				<div class="col-md-6">
					<label">Name:</label>
					<input type="text" name="name" class="form-control">
				</div>

				<div class="col-md-6">
					<label">Email:</label>
					<input type="text" name="email" class="form-control">
				</div>

				<div class="col-md-12">
					<label">Comment:</label>
					<textarea class="form-control" name="comment"></textarea>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<button class="btn btn-success form-control" style="margin-top: 10px;">Add Comment</button>
				</div>
			</form>
		</div>
	</div>

@endsection