@extends('layouts.app')
@section('content')
<main class="main">
  <div class="container-fluid" style="margin-top: -3rem;">
    <div class="row row--grid">
           <!-- title -->
      <div class="col-12">
        <div class="main__title main__title--page">
          <h1>Profile</h1>
        </div>
      </div>
      <!-- end title -->
    </div>

    <div class="row row--grid">
      <div class="col-12">
        <!-- content tabs -->
        <div class="tab-content">
          <div class="tab-pane fade show active" id="tab-1" role="tabpanel">
         @livewire('dashboard.profile')
          
        </div>
        <!-- end content tabs -->
      </div>
    </div>	
  </div>
</main>
@endsection