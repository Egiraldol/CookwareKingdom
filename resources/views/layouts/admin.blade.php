<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrapicons.css"> 
        <script src="https://kit.fontawesome.com/f8884207b7.js" crossorigin="anonymous"></script>
        <link href="{{ asset('/css/admin.css') }}" rel="stylesheet" />
        <title>@yield('title', 'Admin')</title>
    </head>
    <body>
        <div class="row g-0">
        <!-- sidebar -->
            <div class="p-3 col fixed text-white bg-dark">
                <a href="{{ route('admin.home.index') }}" class="text-white text-decoration-none">
                <span class="fs-4">Admin Panel</span>
                </a>
                <hr />
                <ul class="nav flex-column">
                    <li><a href="{{ route('admin.home.index') }}" class="nav-link text-white">- Admin -Home</a></li>
                    <li><a href="{{ route('admin.product.index') }}" class="nav-link text-white">- Admin - Products</a></li>
                    <li><a href="{{ route('admin.recipe.index') }}" class="nav-link text-white">- Admin - Recipes</a></li>
                    <li>
                    <a href="{{ route('home.index') }}" class="mt-2 btn bg-primary text-white">Go back to the
                    home page</a>
                    </li>
                </ul>
            </div>
                <!-- sidebar -->
                <div class="col content-grey">
                    <nav class="p-3 shadow text-end">
                    <span class="profile-font">Admin</span>
                    <i class="fa-solid fa-user-tie"></i>                    </nav>
                    <div class="g-0 m-5">
                    @yield('content')
                    </div>
                </div>
            </div>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous">
        </script>
    </body>
</html>