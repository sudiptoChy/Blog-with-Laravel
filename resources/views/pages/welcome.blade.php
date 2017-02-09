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
    <div class="post">
      <h3> Post Title </h3>
      <p>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec,
          <a href="#" class="btn btn-primary"> Read more </a>
      </p>
    </div>

    <hr>

    <div class="post">
      <h3> Post Title </h3>
      <p>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec,
          <a href="#" class="btn btn-primary"> Read more </a>
      </p>
    </div>

    <hr>

    <div class="post">
      <h3> Post Title </h3>
      <p>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec,
          <a href="#" class="btn btn-primary"> Read more </a>
      </p>
    </div>

    <hr>

    <div class="post">
      <h3> Post Title </h3>
      <p>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec,
          <a href="#" class="btn btn-primary"> Read more </a>
      </p>
    </div>

    <hr>

  </div>

  <div class="col-md-3 col-md-offset-1">
      <h1> Sidebar </h1>
  </div>
</div>

@endsection
