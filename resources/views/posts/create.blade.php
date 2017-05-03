@extends('main')

@section('title', '| Create New Post')

@section('stylesheet')
  <link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
@endsection

@section('content')

  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1> Create New Post </h1>
      <hr>
          <form method="POST" action="{{ route('posts.store') }}">
            <div class="form-group">
              <label name="title">Title:</label>
              <input id="title" name="title" class="form-control" required>
            </div>

            <div class="form-group">
              <label name="title">Slug:</label>
              <input id="slug" name="slug" class="form-control" required>
            </div>

            <!-- Viewing Categories-->

            <div class="form-group">
              <label name="title">Category:</label>
               <select class="form-control" name="category_id" required="true">
                    <option disabled selected value> Select a Category</option>
                        @foreach($categories as $category)
                          <option name="category_id" value="{{ $category->id }}">{{ $category->name }}
                          </option>
                        @endforeach
                </select>
            </div>

            <!-- Viewing Tags-->

            <div class="form-group">
              <label name="title">Tags:</label>
               <select class="form-control select2-multi" multiple="multiple" name="tags[]" required="true">
                        @foreach($tags as $tag)
                          <option name="tag_id" value="{{ $tag->id }}"> {{ $tag->name }}
                          </option>
                        @endforeach
                </select>
            </div>

            <div class="form-group">
              <label name="body">Post Body:</label>
              <textarea id="body" name="body" rows="10" class="form-control" required autofocus=""></textarea>
            </div>
            <input type="submit" value="Create Post" class="btn btn-success btn-lg btn-block">
            <input type="hidden" name="_token" value="{{ Session::token() }}">
          </form>
    </div>
  </div>
@endsection

@section('scripts')
  <script src="{{ asset('js/select2.min.js') }}"></script>

  <script type="text/javascript">
    $('.select2-multi').select2();
  </script>
@endsection
