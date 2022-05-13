@extends('layouts.app')
@section('content')
<main class="main">
  <div class="container-fluid">
    <div class="row row--grid">
      <!-- breadcrumb -->
      <div class="col-12">
        <ul class="breadcrumb">
          <li class="breadcrumb__item"><a href="index.html">Home</a></li>
          <li class="breadcrumb__item breadcrumb__item--active">Sign up</li>
        </ul>
      </div>
      <!-- end breadcrumb -->

      <!-- registration form -->
      <div class="col-12">
        <div class="sign">
         @livewire('auth.sign-up')
        </div>
      </div>
      <!-- end registration form -->
    </div>
  </div>
</main>
@endsection