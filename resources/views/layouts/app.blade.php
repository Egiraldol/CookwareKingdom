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

  <div class="position-fixed bottom-0 end-0 mb-3 me-3">
    <button class="btn btn-primary py-2 d-flex align-items-center btn-modal" id="openModalButton" data-bs-toggle="modal" data-bs-target="#weatherModal">
      <i class="fa-solid fa-cloud-sun-rain"></i>
    </button>
  </div>

<div class="modal fade" id="weatherModal" tabindex="-1" aria-labelledby="weatherModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="weatherModalLabel">Clima Actual</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if(isset($weather))
                    <p>Ciudad: {{ $weather['name'] }}</p>
                    <p>Temperatura: {{ $weather['main']['temp'] }} °C</p>
                    <p>Clima: {{ $weather['weather'][0]['description'] }}
                    @if($weather['weather'][0]['main'] == 'Clear')
                      <i class="fa-solid fa-sun"></i>
                    @elseif($weather['weather'][0]['main'] == 'Clouds')
                      <i class="fa-solid fa-cloud"></i>
                    @elseif($weather['weather'][0]['main'] == 'Rain')
                      <i class="fa-solid fa-cloud-rain"></i>
                    @elseif($weather['weather'][0]['main'] == 'Drizzle')
                      <i class="fa-solid fa-cloud-showers-heavy"></i>
                    @elseif($weather['weather'][0]['main'] == 'Thunderstorm')
                      <i class="fa-solid fa-bolt"></i>
                    @elseif($weather['weather'][0]['main'] == 'Snow')
                      <i class="fa-solid fa-snowflake"></i>
                    @elseif($weather['weather'][0]['main'] == 'Mist' || $weather['weather'][0]['main'] == 'Fog' || $weather['weather'][0]['main'] == 'Haze')
                      <i class="fa-solid fa-smog"></i>
                    @endif
                  </p>
                @else
                    <p>No se pudo obtener la información del clima.</p>
                @endif
            </div>
        </div>
    </div>
  </div>


<body>
<!-- header -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home.index') }}">
        <img src="{{ asset('images\CookWareKingdomLogo.jpg') }}" alt="Cart" style="height: 50px; width: auto;">
        @lang('app.layouts.cwk')
      </a>
      <div class="vr bg-white mx-2 d-none d-lg-block"></div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          @if(auth()->check())
            @if(auth()->user()->getRole() == 'admin')
              <a class="nav-link active" href="{{ route('admin.home.index') }}">@lang('app.layouts.adminText')
              <i class="fa-solid fa-hammer"></i>
              </a>
            @endif
          @endif

          <a class="nav-link active" href="{{ route('product.index') }}">
          @lang('app.layouts.products')
            <i class="fa-solid fa-spoon"></i>
          </a>

          <a class="nav-link active" href="{{ route('movie.index') }}">
          @lang('app.movie.microService')
          <i class="fa-solid fa-microchip"></i>
          </a>

          @guest
          <a class="nav-link active" href="{{ route('login') }}">@lang('app.auth.login.login')</a>
          <a class="nav-link active" href="{{ route('register') }}">@lang('app.auth.register.register')</a>
          @else
          <a class="nav-link active" href="{{ route('cart.index') }}">

          @lang('app.layouts.shoppingCart')
            <i class="fa-solid fa-cart-shopping"></i>

          </a>

          <a class="nav-link active" href="{{ route('myaccount.orders') }}">
          @lang('app.layouts.myOrders')
            <i class="fa-solid fa-boxes-stacked"></i>
          </a>
          <form id="logout" action="{{ route('logout') }}" method="POST">
            <a role="button" class="nav-link active"
              onclick="document.getElementById('logout').submit();">
              @lang('app.layouts.logout')
              <i class="fa-solid fa-right-from-bracket"></i>
            </a>
            @csrf
          </form>
          @endguest
        </div>
      </div>
    </div>
  </nav>
  
<div class="flex-container-end">
  <div class="flex-item">
        @yield('breadcrumbs')
  </div>
  <div class="flex-item">
    <select id="languageSwitcher" data-url="{{ route('lang.switch', ':locale') }}">
      <option value="en" {{ session('locale') == 'en' ? 'selected' : '' }}>English</option>
      <option value="es" {{ session('locale') == 'es' ? 'selected' : '' }}>Español</option>
      <option value="al" {{ session('locale') == 'al' ? 'selected' : '' }}>German</option>
    </select>
  </div>
</div>

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
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
  </script>
</body>
</html>
