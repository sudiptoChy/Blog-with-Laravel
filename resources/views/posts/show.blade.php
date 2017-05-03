@extends('main')

@section('title' , '| View Post')

@section('content')
  <div class="row">
    <div class="col-md-8">
      <h1> {{ $post->title }} </h1>
      <p class="lead"> {{ $post->body }} </p>
      <hr>

      <div class="tags">
        @foreach($post->tags as $tag)
          <span class="label label-default"> {{ $tag->name }}</span>
        @endforeach
      </div>
    </div>

    <div class="col-md-4">
      <div class="well">

        <dl class="horizontal">
          <dt>URL:</dt>
          <dd><a href="{{ url('blog/'.$post->slug) }}">{{ url('blog/'.$post->slug) }}</a></dd>
        </dl>

        <dl class="horizontal">
          <dt>Category:</dt>
          <dd>{{ $post->category->name }}</dd>
        </dl>

        <dl class="horizontal">
          <dt>Created at:</dt>
          <dd>{{ date('M j, Y h:i a', strtotime($post->created_at)) }}</dd>
        </dl>

        <dl class="horizontal">
          <dt>Last Updated:</dt>
          <dd>{{ date('M j, Y h:i a', strtotime($post->updated_at)) }}</dd>
        </dl>
        <hr>

        <div class="row">
          <div class="col-sm-6">
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btn-block">Edit</a>
          </div>

          <div class="col-sm-6">
              <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
                  <input type="submit" value="Delete" class="btn btn-danger btn-block">
                  <input type="hidden" name="_token" value="{{ Session::token() }}">
                  {{ method_field('DELETE') }}
              </form>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">
            <br>
            <a href="{{ route('posts.index') }}" class="btn btn-default btn-block"> << See all Posts</a>
          </div>
        </div>

      </div>
    </div>
  </div>



@endsection
