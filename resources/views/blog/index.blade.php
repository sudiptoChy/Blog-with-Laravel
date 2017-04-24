@extends('main')

@section('title' , '| Blog')

@section('content')
	
	<div class="row">
		<div class="col-md-12 col-md-offset-2">
			<h1> Blog </h1>
		</div>
	</div>

	@foreach($posts as $post)
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2 style="color: blue">{{ $post->title }}</h2>
				<h5 style="color: red">Published Date: {{ date('M j Y', strtotime($post->created_at)) }}</h5>

				<p>
		          {{ substr($post->body, 0, 500) }} {{ strlen($post->body) > 500 ? "..." : "" }}
		          <br> <br>
		          <a href="{{ route('blog.single', $post->slug) }}" class="btn btn-primary"> Read more </a>
		       </p>
			</div>
		</div>
	@endforeach

	<div class="text-center">
      {{ $posts->links() }}
    </div>


@endsection