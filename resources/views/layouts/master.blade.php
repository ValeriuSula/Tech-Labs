<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Tech/\LaBs</title>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{asset('css/jumbotron.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('https://www.w3schools.com/w3css/4/w3.css')}}">
  <link rel="icon" href="/img/logo.png">

</head>

<body style="background-color: black;">
  <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color:black;">
    <div class="container">
      <div class="navbar-header" style="width:100px; height:110px;">
        <a class="navbar-brand" style="margin-left: 100px;" href="/"><img src="/img/logo.png" alt="Hermes" style="width:44px; margin-top:36px;"></a>
      </div>
      <div class="links" style="margin-left:250px;">
        <a style=" color:gold;" href="/">Home</a>
        <a style=" color:gold;" href="page1">Catalog</a>
        <a style=" color:gold;" href="contacts">Contacts</a>
      </div>
      <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
        <li class="nav-item">
          <a style="color:gold;" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
        <li class="nav-item">
          <a style="color:gold;" class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @endif
        @else
        <li class="nav-item dropdown">
          <a style="color:gold;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="articles">Crud</a>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </li>
        @endguest
      </ul>
    </div>
  </nav>

  @if(count($errors)>0)
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>
    @endif

    @yield('content')
<br><br><br><br><br>
    <div class="container, copyright" style="background-color: silver;">
      &copy 2020 Sula Valeriu
    </div>
</body>

</html>