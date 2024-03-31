@extends('layouts.app')
@section('title', 'Home Page')
@section('content')
<div class="row justify-content-center">
  <div class="col-6">
    <div class="card" style="width: 100%;">
      <div class="card-body">

        <div id="carouselExampleDark" class="carousel carousel-dark slide"> 
          <div class="carousel-indicators">
            <button type="button" data-bs-target="carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">

            <div class="carousel-item active">
              <div class="d-flex justify-content-center align-items-center" style="margin-bottom: 90px;">
                <img src="{{ asset('images\CookWareKingdomLogo.jpg') }}" class="d-block w-100 img-fluid" style="max-width: 200px; height: auto;" alt="...">
              </div>
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
            </div>

            <div class="carousel-item active">
              <div class="d-flex justify-content-center align-items-center" style="margin-bottom: 90px;">
                <img src="{{ asset('images\CookWareKingdomLogo.jpg') }}" class="d-block w-100 img-fluid" style="max-width: 200px; height: auto;" alt="...">
              </div>
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
            </div>

            <div class="carousel-item active">
              <div class="d-flex justify-content-center align-items-center" style="margin-bottom: 90px;">
                <img src="{{ asset('images\CookWareKingdomLogo.jpg') }}" class="d-block w-100 img-fluid" style="max-width: 200px; height: auto;" alt="...">
              </div>
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
            </div>

          </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>

          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
          
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
