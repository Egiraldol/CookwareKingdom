<!--By Esteban Giraldo Llano-->

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
  <script src="https://kit.fontawesome.com/f8884207b7.js" crossorigin="anonymous"></script>
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
          <a class="nav-link active" href="{{ route('product.index') }}">
            Products
            <i class="fa-solid fa-spoon"></i>
          </a>
          @guest
          <a class="nav-link active" href="{{ route('login') }}">Login</a>
          <a class="nav-link active" href="{{ route('register') }}">Register</a>
          @else
          <a class="nav-link active" href="{{ route('cart.index') }}">
            Shopping Cart
            <i class="fa-solid fa-cart-shopping"></i>
          </a>
          <form id="logout" action="{{ route('logout') }}" method="POST">
            <a role="button" class="nav-link active"
              onclick="document.getElementById('logout').submit();">
              Logout
              <i class="fa-solid fa-right-from-bracket"></i>
            </a>
            @csrf
          </form>
          @endguest
        </div>
      </div>
    </div>
  </nav>

  <div class="main my-4">
    @yield('content')
  </div>
<!-- header -->


  <!-- footer -->
  <div class="copyright py-4 text-center text-white footer">
    <div class="container">
      <small>
        2024 
        <a class="text-reset fw-bold text-decoration-none" target="_blank" href="https://github.com/Egiraldol/CookwareKingdom">
          RoyalSharks
          <img src="{{ asset('images\RoyalSharkLogoTransparent.png') }}" alt="Cart" style="height: 50px; width: auto;">
        </a>
      </small>
    </div>
  </div>
  <!-- footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
  </script>
</body>
</html>
