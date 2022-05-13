@extends('layouts.app')
@section('content')
<main class="main">
	<div class="container-fluid">
		<!-- slider -->
		<section class="row">
			<div class="col-12">
				<div class="hero owl-carousel" id="hero">
					<div class="hero__slide" data-bg="{{ asset('public/assets/img/home/slide1.jpg')}}">
						<h1 class="hero__title">Online Rhumba Music</h1>
						<p class="hero__text">Stream, Download thousands of Zim Rhumba songs for free.
							</p>
						<div class="hero__btns">
							<a href="/sign-in" class="hero__btn hero__btn--red">Login</a>
							<a href="/artists" class="hero__btn">Artists</a>
						</div>
					</div>

					<div class="hero__slide" data-bg="{{ asset('public/assets/img/home/slide2.jpg')}}">
						<h2 class="hero__title">Bringing ZimRhumba community together.</h2>
						<p class="hero__text">Keeping Zim Rhumba Alive.</p>
						<div class="hero__btns">
							<a href="/artists" class="hero__btn hero__btn--red">Artists</a>
						</div>
					</div>

					<div class="hero__slide" data-bg="{{ asset('public/assets/img/home/slide3.jpg')}}">
						<h2 class="hero__title">Login And Create Your Own Playlist.</h2>
						<p class="hero__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
						<div class="hero__btns">
							<a href="/sign-in" class="hero__btn">Login</a>
						</div>
					</div>
				</div>

				<button class="main__nav main__nav--hero main__nav--prev" data-nav="#hero" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z"/></svg></button>
				<button class="main__nav main__nav--hero main__nav--next" data-nav="#hero" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"/></svg></button>
			</div>
		</section>
		<!-- end slider -->

		<!-- releases -->
		@if($releases->count())
		<section class="row row--grid">
			<!-- title -->
			<div class="col-12">
				<div class="main__title">
					<h2>New Releases</h2>

					<a href="/releases" class="main__link">See all <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"/></svg></a>
				</div>
			</div>
			<!-- end title -->
@foreach ($releases as $release)
<div class="col-6 col-sm-4 col-lg-2">
	<div class="album">
		<div class="album__cover">
			@if(is_null($release->album_cover))
			<img src="{{ asset('storage/app/public/'.$release->artist->photo)}}" alt="">
			@else
			<img src="{{ asset('storage/app/public/'.$release->album_cover)}}" alt="">
			@endif
			<a href="/view-album?album={{ $release->slug }}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg></a>
			<span class="album__stat">
				<span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M3.71,16.29a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21,1,1,0,0,0-.21.33,1,1,0,0,0,.21,1.09,1.15,1.15,0,0,0,.33.21.94.94,0,0,0,.76,0,1.15,1.15,0,0,0,.33-.21,1,1,0,0,0,.21-1.09A1,1,0,0,0,3.71,16.29ZM7,8H21a1,1,0,0,0,0-2H7A1,1,0,0,0,7,8ZM3.71,11.29a1,1,0,0,0-1.09-.21,1.15,1.15,0,0,0-.33.21,1,1,0,0,0-.21.33.94.94,0,0,0,0,.76,1.15,1.15,0,0,0,.21.33,1.15,1.15,0,0,0,.33.21.94.94,0,0,0,.76,0,1.15,1.15,0,0,0,.33-.21,1.15,1.15,0,0,0,.21-.33.94.94,0,0,0,0-.76A1,1,0,0,0,3.71,11.29ZM21,11H7a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2ZM3.71,6.29a1,1,0,0,0-.33-.21,1,1,0,0,0-1.09.21,1.15,1.15,0,0,0-.21.33.94.94,0,0,0,0,.76,1.15,1.15,0,0,0,.21.33,1.15,1.15,0,0,0,.33.21,1,1,0,0,0,1.09-.21,1.15,1.15,0,0,0,.21-.33.94.94,0,0,0,0-.76A1.15,1.15,0,0,0,3.71,6.29ZM21,16H7a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z"/></svg> {{ $release->songs->count() }}</span>
				
			</span>
		</div>
		<div class="album__title">
			<h3><a href="/view-album?album={{ $release->slug }}">{{ $release->title }}</a></h3>
			<span> <a href="/artists">{{ $release->artist->name }}</a></span>
		</div>
	</div>
</div>
@endforeach
			


		</section>
		@endif
		<!-- end releases -->

		<!-- events -->
		
		<!-- end events -->

		<!-- articts -->
		<section class="row row--grid">
			<!-- title -->
			<div class="col-12">
				<div class="main__title">
					<h2>Artists</h2>

					<a href="/artists" class="main__link">See all <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"/></svg></a>
				</div>
			</div>
			@forelse ($artists as $artist)

			<div class="col-6 col-sm-4 col-lg-2">
				<div class="album">
					<div class="album__cover">
						<img src="{{ asset('storage/app/public/'.$artist->photo)}}" style="min-height: 3rem">
						<a href="{{ route('artist_albums',$artist->slug) }}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg></a>
						<span class="album__stat">
							<span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M3.71,16.29a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21,1,1,0,0,0-.21.33,1,1,0,0,0,.21,1.09,1.15,1.15,0,0,0,.33.21.94.94,0,0,0,.76,0,1.15,1.15,0,0,0,.33-.21,1,1,0,0,0,.21-1.09A1,1,0,0,0,3.71,16.29ZM7,8H21a1,1,0,0,0,0-2H7A1,1,0,0,0,7,8ZM3.71,11.29a1,1,0,0,0-1.09-.21,1.15,1.15,0,0,0-.33.21,1,1,0,0,0-.21.33.94.94,0,0,0,0,.76,1.15,1.15,0,0,0,.21.33,1.15,1.15,0,0,0,.33.21.94.94,0,0,0,.76,0,1.15,1.15,0,0,0,.33-.21,1.15,1.15,0,0,0,.21-.33.94.94,0,0,0,0-.76A1,1,0,0,0,3.71,11.29ZM21,11H7a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2ZM3.71,6.29a1,1,0,0,0-.33-.21,1,1,0,0,0-1.09.21,1.15,1.15,0,0,0-.21.33.94.94,0,0,0,0,.76,1.15,1.15,0,0,0,.21.33,1.15,1.15,0,0,0,.33.21,1,1,0,0,0,1.09-.21,1.15,1.15,0,0,0,.21-.33.94.94,0,0,0,0-.76A1.15,1.15,0,0,0,3.71,6.29ZM21,16H7a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z"/></svg> 7</span>
							<span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20,13.18V11A8,8,0,0,0,4,11v2.18A3,3,0,0,0,2,16v2a3,3,0,0,0,3,3H8a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1H6V11a6,6,0,0,1,12,0v2H16a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h3a3,3,0,0,0,3-3V16A3,3,0,0,0,20,13.18ZM7,15v4H5a1,1,0,0,1-1-1V16a1,1,0,0,1,1-1Zm13,3a1,1,0,0,1-1,1H17V15h2a1,1,0,0,1,1,1Z"/></svg> 4 731</span>
						</span>
					</div>
					<div class="album__title">
						<h3><a href="{{ route('artist_albums',$artist->slug) }}">{{ Str::ucfirst($artist->name) }}</a></h3>
					</div>
				</div>
			</div>
			@empty
					<p>No data found.</p>
			@endforelse
		</section>
		<!-- end articts -->

		<section class="row row--grid">
			<div class="col-12 col-md-6 col-xl-4">
				<div class="row row--grid">
					<!-- title -->
					<div class="col-12">
						<div class="main__title">
							<h2><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.65,2.24a1,1,0,0,0-.8-.23l-13,2A1,1,0,0,0,7,5V15.35A3.45,3.45,0,0,0,5.5,15,3.5,3.5,0,1,0,9,18.5V10.86L20,9.17v4.18A3.45,3.45,0,0,0,18.5,13,3.5,3.5,0,1,0,22,16.5V3A1,1,0,0,0,21.65,2.24ZM5.5,20A1.5,1.5,0,1,1,7,18.5,1.5,1.5,0,0,1,5.5,20Zm13-2A1.5,1.5,0,1,1,20,16.5,1.5,1.5,0,0,1,18.5,18ZM20,7.14,9,8.83v-3L20,4.17Z"/></svg>
								<a href="#">Top Singles</a></h2>
						</div>
					</div>
					<!-- end title -->

					<div class="col-12">
						<ul class="main__list">
							@forelse ($top_singles as $top_single)
							<li class="single-item">
								<span class="single-item__number">1</span>
								<span class="single-item__rate"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12.71,12.54a1,1,0,0,0-1.42,0l-3,3A1,1,0,0,0,9.71,17L12,14.66,14.29,17a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Zm-3-1.08L12,9.16l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-3-3a1,1,0,0,0-1.42,0l-3,3a1,1,0,0,0,1.42,1.42Z"/></svg> 1</span>
								<a data-link data-title="{{ $top_single->track }}" data-artist="{{ $top_single->album->artist->name }}" 
								data-img="{{ asset('storage/app/public/'.$top_single->album->artist->photo)}}" 
								href="{{ asset('storage/app/public/'.$top_single->file_path) }}"
								 class="single-item__cover">
									<img src="{{ asset('storage/app/public/'.$top_single->album->artist->photo)}}" alt="">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z"/></svg>
								</a>
								<div class="single-item__title">
									<h4><a href="#"> {{ $top_single->track }}</a></h4>
									<span><a href="artist.html">{{ $top_single->album->artist->name }}</a></span>
								</div>
								@php
									$estimated_song_duration = App\Http\Livewire\Dashboard\AllSongs::getSongDuration($top_single->file_path);
								@endphp
								<span class="single-item__time">{{ $estimated_song_duration }}</span>
							</li>
							@empty
							<li class="single-item">
								No top-singles available.
							</li>								
							@endforelse
						
						</ul>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-6 col-xl-4">
				<div class="row row--grid">
					<!-- title -->
					<div class="col-12">
						<div class="main__title">
							<h2><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19.12,2.21A1,1,0,0,0,18.26,2l-8,2A1,1,0,0,0,9.5,5V15.35A3.45,3.45,0,0,0,8,15a3.5,3.5,0,1,0,3.5,3.5V10.78L18.74,9l.07,0L19,8.85l.15-.1a.93.93,0,0,0,.13-.15.78.78,0,0,0,.1-.15.55.55,0,0,0,.06-.18.58.58,0,0,0,0-.19.24.24,0,0,0,0-.08V3A1,1,0,0,0,19.12,2.21ZM8,20a1.5,1.5,0,1,1,1.5-1.5A1.5,1.5,0,0,1,8,20ZM17.5,7.22l-6,1.5V5.78l6-1.5Z"/></svg><a href="#">New Singles</a></h2>
						</div>
					</div>
					<!-- end title -->

					<div class="col-12">
						<ul class="main__list">
							<li class="single-item">
								<a data-link data-title="Got What I Got" data-artist="Jason Aldean" data-img="{{ asset('public/assets/img/covers/cover.svg')}}" href="audio/12071151_epic-cinematic-trailer_by_audiopizza_preview.mp3" class="single-item__cover">
									<img src="{{ asset('public/assets/img/covers/cover.svg')}}" alt="">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z"/></svg>
								</a>
								<div class="single-item__title">
									<h4><a href="#">Got What I Got</a></h4>
									<span><a href="artist.html">Jason Aldean</a></span>
								</div>
								<span class="single-item__time">2:58</span>
							</li>
						</ul>
					</div>
				</div>
			</div>

		
		</section>

		<!-- podcasts -->
	
		<!-- end podcasts -->

	

		<!-- partners -->
		<div class="row">
			
			<div class="col-12">
			<div class="main__title">
			<h2><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path d="M12.3,12.22A4.92,4.92,0,0,0,14,8.5a5,5,0,0,0-10,0,4.92,4.92,0,0,0,1.7,3.72A8,8,0,0,0,1,19.5a1,1,0,0,0,2,0,6,6,0,0,1,12,0,1,1,0,0,0,2,0A8,8,0,0,0,12.3,12.22ZM9,11.5a3,3,0,1,1,3-3A3,3,0,0,1,9,11.5Zm9.74.32A5,5,0,0,0,15,3.5a1,1,0,0,0,0,2,3,3,0,0,1,3,3,3,3,0,0,1-1.5,2.59,1,1,0,0,0-.5.84,1,1,0,0,0,.45.86l.39.26.13.07a7,7,0,0,1,4,6.38,1,1,0,0,0,2,0A9,9,0,0,0,18.74,11.82Z"></path>
      </svg><a href="#">Contributors</a></h2>
						</div>	
				<div class="partners owl-carousel">
					@foreach($donators as $donator)
					<a href="#" class="partners__img">
						@if(is_null($donator->picture))
						<img src="https://eu.ui-avatars.com/api/?background=random&amp;name={{ $donator->full_name }}" alt="" style="max-height: 7rem; max-width: 5rem; border-radius: 50%;">
						@else
						<img src="{{ asset('storage/app/public/'.$donator->picture)}}" alt="" style="max-height: 7rem; max-width: 5rem; border-radius: 50%;">
						@endif
						<p>{{ $donator->full_name }}</p>
					</a>
					@endforeach

				</div>
			</div>
		</div>
		<!-- end partners -->
	</div>
</main>
@endsection