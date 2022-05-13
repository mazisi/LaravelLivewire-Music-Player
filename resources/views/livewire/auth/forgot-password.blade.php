<div class="col-12" wire:loading.class="disable-page">
    <div class="sign">
      <div class="sign__content">
        <form wire:submit.prevent='store' class="sign__form">
          <a href="/" class="sign__logo">
            <img src="{{ asset('public/assets/img/logo.svg') }}" alt="">
          </a>

          <div class="sign__group">
            <input wire:model.lazy='email' type="email" class="sign__input" placeholder="Email">
            @error('email')<p style="color: red;">{{ $message }}</p>@enderror
          </div>
          <button class="sign__btn" type="submit">Send</button>
          <div wire:loading>
              <h4>Loading...</h4>
        </div>
        <div class="text-success">
            @if(session()->has('message'))
            <span class="sign__text">{{ session('message') }}</span>
            @endif
        </div>
          
        </form>
      </div>
    </div>
  </div>
