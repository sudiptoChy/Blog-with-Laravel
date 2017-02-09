<!DOCTYPE html>

<html lang="en">

  @include('_head')

  <body>
    @include('_nav')

      <div class="container">

        @include('_messages')
        @yield('content')

        @include('_footer')

      </div>

    @include('_javascripts')
  </body>

</html>
