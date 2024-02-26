<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <style>
        .lingkaran {
  display: inline-block;
  border-radius: 50%;
  width: 150px;
  margin: auto;
  height: 150px;
  color: #fff;
  background-color: #dc3545;
}

.lingkaran i {
  position: relative;
  top: 30px;
}

.crop-img {
  object-fit: cover;
}

.tim img {
  width: 250px;
  border: 10px solid #cccccc;
}

a.social {
  display: inline-block;
  width: 40px;
  height: 40px;
  color: #fff;
  border-radius: 50%;
  background-color: #333;
  line-height: 40px;
}

.client img {
  height: auto;
  max-height: 50px;
}

.kontak {
  background: url("https://wallpaperaccess.com/full/1867010.jpg") no-repeat
    center center;
  background-size: cover;
  padding-bottom: 20%;
  padding-top: 20%;
  color: #fff;
}
    </style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
      <a class="navbar-brand mx-5" href="#">{{ Auth::user()->name }}</a>
  <div class="container">
  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/fotos">Foto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gallery">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="products">Products</a>
        </li>
        <li class="nav-item">
                        <a class="nav-link" href="{{ route('gallery.create') }}">Tambah Foto</a>
                    </li>
        <li class="nav-item">
          <a class="nav-link" href="/profile">Profile</a>
        </li>
      </ul>
      <!-- Right Side Of Navbar -->
<ul class="navbar-nav ms-auto">
<!-- Authentication Links -->
@guest
    @if (Route::has('login'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
    @endif
  
    @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
    @endif
@else
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            <img src="/avatars/{{ Auth::user()->avatar }}" style="width: 30px; border-radius: 10%">
            {{ Auth::user()->name }}
        </a>
  
        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a href="{{ route('user.profile') }}" class="dropdown-item">Profile</a>
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
  
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </li>
@endguest
</ul>
    </div>
  </div>
</nav>
    
  <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>