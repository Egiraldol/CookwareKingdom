<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
  <title>@yield('title', 'Online Store')</title>
</head>
<body>
  

<!-- header -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home.index') }}">
      <img src="{{ asset('images\CookWareKingdomLogo.jpg') }}" alt="Cart" style="height: 50px; width: auto;">
        CookwareKingdom
      </a>
      <div class="vr bg-white mx-2 d-none d-lg-block"></div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <a class="nav-link active" href="{{ route('product.create') }}">Add a Product</a>
          <a class="nav-link active" href="{{ route('product.index') }}">Products</a>
          @guest
          <a class="nav-link active" href="{{ route('login') }}">Login</a>
          <a class="nav-link active" href="{{ route('register') }}">Register</a>
          @else
          <form id="logout" action="{{ route('logout') }}" method="POST">
            <a role="button" class="nav-link active"
              onclick="document.getElementById('logout').submit();">Logout</a>
            @csrf
          </form>
          <a class="nav-link active" href="{{ route('cart.index') }}">
          <img src="{{ asset('images/CartIcon.png') }}" alt="Cart" style="height: 30px; width: auto;">
            Shopping Cart
          </a>
          @endguest
        </div>
      </div>
    </div>
  </nav>

  <div class="container my-4" style="min-height: 300px;">
    @yield('content')
  </div>
<!-- header -->


  <!-- footer -->
  <div class="copyright py-4 text-center text-white">
    <div class="container">
      <small>
        Copyright - 
        <a class="text-reset fw-bold text-decoration-none" target="_blank" href="https://github.com/Egiraldol/CookwareKingdom">GitHub</a>
      </small>
    </div>
  </div>
  <!-- footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
  </script>
</body>
</html>
