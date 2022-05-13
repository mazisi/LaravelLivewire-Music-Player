<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  @livewireStyles
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
	<link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />

@include('layouts.css')

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" >


	 <!-- notify js Fremwork -->
	 <link rel="stylesheet" type="text/css" href="{{ asset('assets/pnotify/dist/pnotify.css') }}">
	 <link rel="stylesheet" type="text/css" href="{{ asset('assets/pnotify/dist/pnotify.brighttheme.css') }}">
	 <link rel="stylesheet" type="text/css" href="{{ asset('assets/pnotify/dist/pnotify.buttons.css') }}">
	 <link rel="stylesheet" type="text/css" href="{{ asset('assets/pnotify/dist/pnotify.mobile.css') }}">
	 <link rel="stylesheet" type="text/css" href="assets/pnotify/notify.css">

	<meta name="description" content="ZimRhumba is an online platform which is meant for Rhumba artists and Rhumba lovers.Stream, download Zimbabwean music for free.">
	<meta name="keywords" content="Zimbabwean Artists, Zimbabwean Rhumba Music, Download Zimbabwean Music">
	<meta name="author" content="Msesh Mazisi M">
	<noscript>
  <meta http-equiv="refresh" content="0;url={{ url('javascript-not-enabled') }}">
</noscript>
	<title>Blast – Online Zim Rhumba Music</title>

</head>
<body>
	
	<!-- header -->
	@include('layouts.header')
	<!-- end header -->

	<!-- sidebar -->
	<div class="sidebar">
		<!-- sidebar logo -->
		<div class="sidebar__logo">
			<img src="{{ asset('public/assets/img/logo.png')}}" alt="" style="overflow: hidden;">
		</div>
		<!-- end sidebar logo -->

		<!-- sidebar nav -->
	@include('layouts.side_nav')
		<!-- end sidebar nav -->
	</div>
	<!-- end sidebar -->

	<!-- player -->
	<div class="player">
    <div class="player__cover">
        <img src="{{ asset('assets/img/covers/cover.svg')}}" alt="">
    </div>
    <div class="player__content">
        <span class="player__track"><b class="player__title">Sharing</b> – <span class="player__artist">Is Caring.</span></span>
        <audio class="audio" src="audio/12071151_epic-cinematic-trailer_by_audiopizza_preview.mp3" id="audio" controls></audio>
    </div>
</div>

	<button class="player__btn" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.65,2.24a1,1,0,0,0-.8-.23l-13,2A1,1,0,0,0,7,5V15.35A3.45,3.45,0,0,0,5.5,15,3.5,3.5,0,1,0,9,18.5V10.86L20,9.17v4.18A3.45,3.45,0,0,0,18.5,13,3.5,3.5,0,1,0,22,16.5V3A1,1,0,0,0,21.65,2.24ZM5.5,20A1.5,1.5,0,1,1,7,18.5,1.5,1.5,0,0,1,5.5,20Zm13-2A1.5,1.5,0,1,1,20,16.5,1.5,1.5,0,0,1,18.5,18ZM20,7.14,9,8.83v-3L20,4.17Z"/></svg> Player</button>
	<!-- end player -->

	@yield('content')

	<!-- footer -->
	@include('layouts.footer')
	<!-- end footer -->



	<!-- modal info -->
	<div id="modal-info2" class="zoom-anim-dialog mfp-hide modal modal--info">
		<span class="modal__icon modal__icon--green">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M14.72,8.79l-4.29,4.3L8.78,11.44a1,1,0,1,0-1.41,1.41l2.35,2.36a1,1,0,0,0,.71.29,1,1,0,0,0,.7-.29l5-5a1,1,0,0,0,0-1.42A1,1,0,0,0,14.72,8.79ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"></path></svg>
		</span>
		
		<button class="modal__close" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M13.41,12l4.3-4.29a1,1,0,1,0-1.42-1.42L12,10.59,7.71,6.29A1,1,0,0,0,6.29,7.71L10.59,12l-4.3,4.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l4.29,4.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"/></svg></button>

		<h4 class="sign__title">Payment #51 was successful!</h4>

		<div class="sign__group sign__group--row">
			<label class="sign__label">Total cost:</label>
			<span class="sign__value">$18.00</span>
		</div>

		<div class="sign__group sign__group--row">
			<label class="sign__label">Payment method: <b>Paypal</b></label>

			<span class="sign__text sign__text--small">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</span>
		</div>
	</div>
	<!-- end modal info -->

	<!-- modal info -->
	<div id="modal-info3" class="zoom-anim-dialog mfp-hide modal modal--info">
		<span class="modal__icon modal__icon--red">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M15.71,8.29a1,1,0,0,0-1.42,0L12,10.59,9.71,8.29A1,1,0,0,0,8.29,9.71L10.59,12l-2.3,2.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L13.41,12l2.3-2.29A1,1,0,0,0,15.71,8.29Zm3.36-3.36A10,10,0,1,0,4.93,19.07,10,10,0,1,0,19.07,4.93ZM17.66,17.66A8,8,0,1,1,20,12,7.95,7.95,0,0,1,17.66,17.66Z"></path></svg>
		</span>
		
		<button class="modal__close" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M13.41,12l4.3-4.29a1,1,0,1,0-1.42-1.42L12,10.59,7.71,6.29A1,1,0,0,0,6.29,7.71L10.59,12l-4.3,4.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l4.29,4.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"/></svg></button>

		<h4 class="sign__title">Payment #50 failed!</h4>

		<div class="sign__group sign__group--row">
			<label class="sign__label">Total cost:</label>
			<span class="sign__value">$18.00</span>
		</div>

		<div class="sign__group sign__group--row">
			<label class="sign__label">Payment method: <b>Paypal</b></label>

			<span class="sign__text sign__text--small">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</span>
		</div>
	</div>
	<!-- end modal info -->

	<!-- modal info -->
	<div id="modal-info4" class="zoom-anim-dialog mfp-hide modal modal--info">
		<span class="modal__icon">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12,2A10,10,0,1,0,22,12,10.01114,10.01114,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.00917,8.00917,0,0,1,12,20Zm0-8.5a1,1,0,0,0-1,1v3a1,1,0,0,0,2,0v-3A1,1,0,0,0,12,11.5Zm0-4a1.25,1.25,0,1,0,1.25,1.25A1.25,1.25,0,0,0,12,7.5Z"></path></svg>
		</span>
		
		<button class="modal__close" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M13.41,12l4.3-4.29a1,1,0,1,0-1.42-1.42L12,10.59,7.71,6.29A1,1,0,0,0,6.29,7.71L10.59,12l-4.3,4.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l4.29,4.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"/></svg></button>

		<h4 class="sign__title">Example of notification.</h4>

		<div class="sign__group sign__group--row">
			<label class="sign__label">Amount to auto-renew:</label>
			<span class="sign__value">$18.00</span>
		</div>

		<div class="sign__group sign__group--row">
			<span class="sign__text sign__text--small">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</span>
		</div>
	</div>
	<!-- end modal info -->

	<!-- modal info -->
	<div id="modal-info5" class="zoom-anim-dialog mfp-hide modal modal--info">
		<span class="modal__icon modal__icon--purple">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18,7h-.35A3.45,3.45,0,0,0,18,5.5a3.49,3.49,0,0,0-6-2.44A3.49,3.49,0,0,0,6,5.5,3.45,3.45,0,0,0,6.35,7H6a3,3,0,0,0-3,3v2a1,1,0,0,0,1,1H5v6a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3V13h1a1,1,0,0,0,1-1V10A3,3,0,0,0,18,7ZM11,20H8a1,1,0,0,1-1-1V13h4Zm0-9H5V10A1,1,0,0,1,6,9h5Zm0-4H9.5A1.5,1.5,0,1,1,11,5.5Zm2-1.5A1.5,1.5,0,1,1,14.5,7H13ZM17,19a1,1,0,0,1-1,1H13V13h4Zm2-8H13V9h5a1,1,0,0,1,1,1Z"></path></svg>
		</span>
		
		<button class="modal__close" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M13.41,12l4.3-4.29a1,1,0,1,0-1.42-1.42L12,10.59,7.71,6.29A1,1,0,0,0,6.29,7.71L10.59,12l-4.3,4.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l4.29,4.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"/></svg></button>

		<h4 class="sign__title">You have received a gift!</h4>

		<div class="sign__group sign__group--row">
			<span class="sign__text sign__text--small">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</span>

			<span class="sign__text sign__text--small">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</span>
		</div>
	</div>
	<!-- end modal info -->

  @livewireScripts
	<script type="text/javascript">
		window.livewire.on('close-modal', () => {
			$("#add-album").hide();
			window.location.reload();
		});

		window.livewire.on('donate', () => {
			$("#donate").hide();
			window.location.reload();
		});
		window.livewire.on('close-modall', () => {
			// $("#add-album").hide();
			window.location.reload();
		});
	</script>
	
	<script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>


@include('layouts.js')

 <!-- pnotify js -->
 <script type="text/javascript" src="{{ asset('assets/pnotify/dist/pnotify.js') }}"></script>
 <script type="text/javascript" src="{{ asset('assets/pnotify/dist/pnotify.desktop.js') }}"></script>
 <script type="text/javascript" src="{{ asset('assets/pnotify/dist/pnotify.buttons.js') }}"></script>
 <script type="text/javascript" src="{{ asset('assets/pnotify/dist/pnotify.confirm.js') }}"></script>
 <script type="text/javascript" src="{{ asset('assets/pnotify/dist/pnotify.callbacks.js') }}"></script>
 <script type="text/javascript" src="{{ asset('assets/pnotify/dist/pnotify.animate.js') }}"></script>
 <script type="text/javascript" src="{{ asset('assets/pnotify/dist/pnotify.history.js') }}"></script>
 <script type="text/javascript" src="{{ asset('assets/pnotify/dist/pnotify.mobile.js') }}"></script>
 <script type="text/javascript" src="{{ asset('assets/pnotify/dist/pnotify.nonblock.js') }}"></script>
 <script type="text/javascript" src="{{ asset('assets/pnotify/notify.js') }}"></script>
 @if(session()->has('success'))
 <script>
	 new PNotify({
		title: 'Success notice',
		text: 'Check me out! I\'m a notice.',
		icon: 'icofont icofont-info-circle',
		type: 'success'
			 });
 </script>
@endif
<script>
	$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

</script>
</body>

</html>