@extends('layouts.app')
@section('content')
<main class="main">
  <div class="container-fluid">
    <div class="row row--grid">
      <!-- breadcrumb -->
      <div class="col-12">
       {{-- @include('layouts.dashboard_tabs') --}}
      </div>
    
    </div>

   @livewire('dashboard.artists.add-songs')

  </div>
</main>
@endsection