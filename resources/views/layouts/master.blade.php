<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet"  href="{{asset('assets/css/bootstrap.min.css')  }}" >
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a href="{{url('accueil')}}">
          Accueil
        </a>
      </li>
      <li class="active">
        <a class="dropdown-item" href="{{url('service')}}">Service</a>
      </li>
      <li class="nav-item dropdown" >
        
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('accueil')}}">Accueil</a>
          
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{url('content')}}">content</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
@yield('content')


<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>


</body>
</html>