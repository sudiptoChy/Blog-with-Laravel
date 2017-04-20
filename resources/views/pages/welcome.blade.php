@extends('main')

@section('title', '| Homepage')

@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="jumbotron">
      <h1>Welcome to my Blog!</h1>
      <p class="lead">This is my first laravel project. Please read my posts. Thank you.</p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Posts</a></p>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-8">

    @foreach ($posts as $post)

    <div class="post">
      <h3>{{ $post->title }}</h3>
      <p>
          {{ substr($post->body, 0, 500) }} {{ strlen($post->body) > 500 ? "..." : "" }}
          <br> <br>
          <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary"> Read more </a>
      </p>
    </div>

    <hr>

    @endforeach

    <div class="text-center">
      {{ $posts->links() }}
    </div>

  </div>

  <div class="col-md-3 col-md-offset-1">
      <h1> Sidebar </h1>
  </div>
</div>

@endsection
