@extends('layouts.app')
@section('content')
<main class="main">
	<div class="container-fluid">
	
		<!-- releases -->
		<section class="row row--grid">
			<!-- title -->
			<div class="col-12">
				<div class="main__title">
					<h2>{{ Str::ucfirst($albums[0]->artist->name) }} Albums</h2>
				</div>
			</div>
			<!-- end title -->
@forelse ($albums as $album)
<div class="col-6 col-sm-4 col-lg-2">
	<div class="album">
		<div class="album__cover">
			@if (is_null($album->album_cover))
			<img src="{{ asset('storage/app/public/'.$album->artist->photo) }}" alt="">
			@else
			<img src="{{ asset('storage/app/public/'.$album->album_cover) }}" alt="">
			@endif
			
			<a href="/view-album?album={{ $album->slug }}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg></a>
			<span class="album__stat">
				<span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M3.71,16.29a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21,1,1,0,0,0-.21.33,1,1,0,0,0,.21,1.09,1.15,1.15,0,0,0,.33.21.94.94,0,0,0,.76,0,1.15,1.15,0,0,0,.33-.21,1,1,0,0,0,.21-1.09A1,1,0,0,0,3.71,16.29ZM7,8H21a1,1,0,0,0,0-2H7A1,1,0,0,0,7,8ZM3.71,11.29a1,1,0,0,0-1.09-.21,1.15,1.15,0,0,0-.33.21,1,1,0,0,0-.21.33.94.94,0,0,0,0,.76,1.15,1.15,0,0,0,.21.33,1.15,1.15,0,0,0,.33.21.94.94,0,0,0,.76,0,1.15,1.15,0,0,0,.33-.21,1.15,1.15,0,0,0,.21-.33.94.94,0,0,0,0-.76A1,1,0,0,0,3.71,11.29ZM21,11H7a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2ZM3.71,6.29a1,1,0,0,0-.33-.21,1,1,0,0,0-1.09.21,1.15,1.15,0,0,0-.21.33.94.94,0,0,0,0,.76,1.15,1.15,0,0,0,.21.33,1.15,1.15,0,0,0,.33.21,1,1,0,0,0,1.09-.21,1.15,1.15,0,0,0,.21-.33.94.94,0,0,0,0-.76A1.15,1.15,0,0,0,3.71,6.29ZM21,16H7a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z"/></svg> 22</span>
				<span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20,13.18V11A8,8,0,0,0,4,11v2.18A3,3,0,0,0,2,16v2a3,3,0,0,0,3,3H8a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1H6V11a6,6,0,0,1,12,0v2H16a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h3a3,3,0,0,0,3-3V16A3,3,0,0,0,20,13.18ZM7,15v4H5a1,1,0,0,1-1-1V16a1,1,0,0,1,1-1Zm13,3a1,1,0,0,1-1,1H17V15h2a1,1,0,0,1,1,1Z"/></svg> 19 503</span>
			</span>
		</div>
		<div class="album__title">
			<h3><a href="/view-album?album={{ $album->slug }}">{{ $album->title }}</a></h3>
			<span><a href="/view-album?album={{ $album->slug }}">{{ $album->artist->name }}</a> </span>
		</div>
	</div>
</div>
@empty
<div class="col-6 col-sm-4 col-lg-2">
	<p>No albums found.</p>
</div>
@endforelse
		


		</section>
		<!-- end releases -->

		<!-- events -->
		<section class="row row--grid">
			<!-- title -->
			<div class="col-12">
				<div class="main__title">
					<h2>Events</h2>
				</div>
			</div>
			<!-- end title -->

			<div class="col-12">
				<div class="main__carousel-wrap">
					<div class="main__carousel main__carousel--events owl-carousel" id="events">
						<div class="event" data-bg="img/events/event1.jpg">
							<a href="#modal-ticket" class="event__ticket open-modal"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9,10a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V11A1,1,0,0,0,9,10Zm12,1a1,1,0,0,0,1-1V6a1,1,0,0,0-1-1H3A1,1,0,0,0,2,6v4a1,1,0,0,0,1,1,1,1,0,0,1,0,2,1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1,1,1,0,0,1,0-2ZM20,9.18a3,3,0,0,0,0,5.64V17H10a1,1,0,0,0-2,0H4V14.82A3,3,0,0,0,4,9.18V7H8a1,1,0,0,0,2,0H20Z"/></svg> Buy ticket</a>
							<span class="event__date">March 14, 2021</span>
							<span class="event__time">8:00 pm</span>
							<h3 class="event__title"><a href="event.html">Sorry Babushka</a></h3>
							<p class="event__address">1 East Plumb Branch St.Saint Petersburg, FL 33702</p>
						</div>

						<div class="event" data-bg="img/events/event2.jpg">
							<a href="#modal-ticket" class="event__ticket open-modal"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9,10a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V11A1,1,0,0,0,9,10Zm12,1a1,1,0,0,0,1-1V6a1,1,0,0,0-1-1H3A1,1,0,0,0,2,6v4a1,1,0,0,0,1,1,1,1,0,0,1,0,2,1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1,1,1,0,0,1,0-2ZM20,9.18a3,3,0,0,0,0,5.64V17H10a1,1,0,0,0-2,0H4V14.82A3,3,0,0,0,4,9.18V7H8a1,1,0,0,0,2,0H20Z"/></svg> Buy ticket</a>
							<span class="event__date">March 16, 2021</span>
							<span class="event__time">7:00 pm</span>
							<h3 class="event__title"><a href="event.html">Big Daddy</a></h3>
							<p class="event__address">71 Pilgrim Avenue Chevy Chase, MD 20815</p>
						</div>

						<div class="event" data-bg="img/events/event3.jpg">
							<span class="event__out">Sold out</span>
							<span class="event__date">March 23, 2021</span>
							<span class="event__time">9:30 pm</span>
							<h3 class="event__title"><a href="event.html">Rocky Pub</a></h3>
							<p class="event__address">514 S. Magnolia St. Orlando, FL 32806</p>
						</div>

						<div class="event" data-bg="img/events/event4.jpg">
							<a href="#modal-ticket" class="event__ticket open-modal"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9,10a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V11A1,1,0,0,0,9,10Zm12,1a1,1,0,0,0,1-1V6a1,1,0,0,0-1-1H3A1,1,0,0,0,2,6v4a1,1,0,0,0,1,1,1,1,0,0,1,0,2,1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1,1,1,0,0,1,0-2ZM20,9.18a3,3,0,0,0,0,5.64V17H10a1,1,0,0,0-2,0H4V14.82A3,3,0,0,0,4,9.18V7H8a1,1,0,0,0,2,0H20Z"/></svg> Buy ticket</a>
							<span class="event__date">March 30, 2021</span>
							<span class="event__time">6:00 pm</span>
							<h3 class="event__title"><a href="event.html">Big Club</a></h3>
							<p class="event__address">123 6th St. Melbourne, FL 32904</p>
						</div>

						<div class="event" data-bg="img/events/event5.jpg">
							<span class="event__out">Sold out</span>
							<span class="event__date">March 30, 2021</span>
							<span class="event__time">10:00 pm</span>
							<h3 class="event__title"><a href="event.html">Big Daddy</a></h3>
							<p class="event__address">71 Pilgrim Avenue Chevy Chase, MD 20815</p>
						</div>

						<div class="event" data-bg="img/events/event6.jpg">
							<a href="#modal-ticket" class="event__ticket open-modal"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9,10a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V11A1,1,0,0,0,9,10Zm12,1a1,1,0,0,0,1-1V6a1,1,0,0,0-1-1H3A1,1,0,0,0,2,6v4a1,1,0,0,0,1,1,1,1,0,0,1,0,2,1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1,1,1,0,0,1,0-2ZM20,9.18a3,3,0,0,0,0,5.64V17H10a1,1,0,0,0-2,0H4V14.82A3,3,0,0,0,4,9.18V7H8a1,1,0,0,0,2,0H20Z"/></svg> Buy ticket</a>
							<span class="event__date">March 31, 2021</span>
							<span class="event__time">6:30 pm</span>
							<h3 class="event__title"><a href="event.html">Rocky Pub</a></h3>
							<p class="event__address">514 S. Magnolia St. Orlando, FL 32806</p>
						</div>
					</div>

					<button class="main__nav main__nav--prev" data-nav="#events" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z"/></svg></button>
					<button class="main__nav main__nav--next" data-nav="#events" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"/></svg></button>
				</div>
			</div>
		</section>
		<!-- end events -->
	</div>
</main>
@endsection