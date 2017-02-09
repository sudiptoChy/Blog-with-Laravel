<!DOCTYPE html>

<html lang="en">

  @include('_head')

  <body>
    @include('_nav')

      <div class="container">

        @yield('content')

        @include('_footer')

      </div>

    @include('_javascripts')
  </body>

</html>
