<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "viewport" content="width=deivce-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    @yield('style')
    <title>@yield('title-block')</title>

</head>

<body style="padding-top: 70px;">
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container">
          <a class="navbar-brand" href="/content">Megogo</a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="container-fluid">
                  <ul class="navbar-nav ml-auto">
                      @if(session()->get('role') == null or session()->get('role') == 'user')
                      <li class="nav-item">
                          <a class="nav-link" href="/content?type=films">Films</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="/content?type=serials">TV Series</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="/content?type=sports">Sports</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="/content?type=cartoons">Cartoons</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="/content?type=tvshow">TV Show</a>
                      </li>

                      @elseif(session()->get('role')!= null && session()->get('role') == 'admin')
                      <li class="nav-item">
                          <a class="nav-link" href="/admin">Dashboard</a>
                      </li>

                      @endif
                      @if(session()->get('role')== null)
                      <li id = "sign">
                          <a class="nav-link" href="{{route('signup')}}"><svg class="bi bi-people-circle" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 008 15a6.987 6.987 0 005.468-2.63z"/>
                              <path fill-rule="evenodd" d="M8 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
                              <path fill-rule="evenodd" d="M8 1a7 7 0 100 14A7 7 0 008 1zM0 8a8 8 0 1116 0A8 8 0 010 8z" clip-rule="evenodd"/>
                          </svg>
                          </a>
                      </li>
                      @elseif(session()->get('role') != null)
                      <li>
                          <a class="nav-link" href="/logout">logout</a>
                      </li>
                      @endif
                  </ul>
              <div>
          </div>
      </div>
  </nav>
  @yield('content')
</body>
</html>
