@extends('layouts.app')
@section('content')
<main class="main">
  <div class="container-fluid">
    <div class="row row--grid">
      <!-- breadcrumb -->
      <div class="col-12">
        <ul class="breadcrumb">
          <li class="breadcrumb__item"><a href="/">Home</a></li>
          <li class="breadcrumb__item breadcrumb__item--active"> Javascript Undetected</li>
        </ul>
      </div>
      <!-- end breadcrumb -->

      <!-- error -->
      <div class="col-12">
        <div class="page-404">
          <div class="page-404__wrap">
            <div class="page-404__content">
              <h3 class="page-404__title">Please Enable Javascript</h3>
              <p class="page-404__text">Javascript not detected!</p>
              <a href="#" class="page-404__btn" onclick="window.location.reload()">Refresh</a>
            </div>
          </div>
        </div>
      </div>
      <!-- end error -->
    </div>
  </div>
</main>
@endsection