  <nav class="navbar navbar-default">
  <div class="container-fluid">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Dip's Blog</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li class="{{ Request::is('/home') ? "active": "" }}"><a href="/home">Home <span class="sr-only">(current)</span></a></li>
      <li class="{{ Request::is('about') ? "active": "" }}"><a href="/about">About</a></li>
      <li class="{{ Request::is('contact') ? "active": "" }}"><a href="/contact">Contact</a></li>
      <li class="{{ Request::is('blog') ? "active": "" }}"><a href="/blog">Blog</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Account Setting</a></li>
          <li role="separator" class="divider"></li>
          <li><a id="logout" href="">Log out</a></li>
        </ul>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </nav>

  <form id="frmlogout" method="POST" action="/logout">
    {!! csrf_field() !!}
  </form>

  @push('scripts')
    <script>
      document
      .getElementById('logout')
      .addEventListener('click', function(e){
        e.preventDefault();
        document.getElementById('frmlogout').submit();
      });
    </script>
  @endpush
