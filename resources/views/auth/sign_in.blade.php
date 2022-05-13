@extends('layouts.app')
@section('content')
<main class="main">
  <div class="container-fluid">
    <div class="row row--grid">
      <!-- breadcrumb -->
      <div class="col-12">
        <ul class="breadcrumb">
          <li class="breadcrumb__item"><a href="/">Home</a></li>
          <li class="breadcrumb__item breadcrumb__item--active">Sign in</li>
        </ul>
      </div>
      <!-- end breadcrumb -->

      <!-- sign in -->
      <div class="col-12">
        <div class="sign">
           <!-- authorization form -->
            @livewire('auth.sign-in')
            <!-- end authorization form -->
          
        </div>
      </div>
      <!-- end sign in -->
    </div>
  </div>
</main>
@endsection