@extends('layouts.app')
@section('content')
<main class="main">
  <div class="container-fluid" style="margin-top: -3rem;">
    <div class="row row--grid">
   
      <!-- title -->
      <div class="col-12">
        <div class="main__title main__title--page">
          <h1>My Playlist </h1>
        </div>
      </div>
      <!-- end title -->

       @livewire('dashboard.playlists')
      	
    </div>
  </div>
</main>
@endsection