@extends('layouts.app')
@section('content')
<main class="main">
  <div class="container-fluid">
    <div class="row row--grid">
      <!-- breadcrumb -->
      <div class="col-12">
        <ul class="breadcrumb">
          <li class="breadcrumb__item"><a href="/">Home</a></li>
          <li class="breadcrumb__item breadcrumb__item--active">Reset Password</li>
        </ul>
      </div>
      <!-- end breadcrumb -->

      <!-- authorization form -->
      @livewire('auth.reset-password')
      <!-- end authorization form -->
    </div>
  </div>
</main>
@endsection