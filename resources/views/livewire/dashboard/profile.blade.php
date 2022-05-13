<div class="row row--grid">
    <!-- details form -->
    <div class="col-12 col-lg-6">
      <form wire:submit.prevent='save' class="sign__form sign__form--profile">
        <div class="row">
          <div class="col-12">
            <h4 class="sign__title">Profile details</h4>
          </div>

          <div class="col-12 col-md-6 col-lg-12 col-xl-6">
            <div class="sign__group">
              <label class="sign__label" for="firstname">First Name</label>
              <input wire:model.defer='first_name' id="firstname" type="text" name="firstname" class="sign__input" placeholder="First Name">
              @error('first_name')<p class="text-danger">{{ $message }}</p> @enderror
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-12 col-xl-6">
            <div class="sign__group">
              <label class="sign__label" for="lastname">Last name</label>
              <input wire:model.defer='last_name' id="lastname" type="text" name="lastname" class="sign__input" placeholder="Last Name">
              @error('last_name')<p class="text-danger">{{ $message }}</p> @enderror
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-12 col-xl-12">
            <div class="sign__group">
              <label class="sign__label" for="email">Email</label>
              <input wire:model.defer='email' id="email" type="text" name="email" class="sign__input" placeholder="email@email.com">
            @error('email')<p class="text-danger">{{ $message }}</p> @enderror
            </div>
          </div>
          
          <div class="col-12">
            <div wire:loading.inline >
                <button wire:target="save" class="btn btn-danger rounded-left disabled" type="submit">Saving...</button>
            </div>
             <button class="btn btn-danger float-right rounded-left" type="submit">Save</button>
          </div>
        </div>
      </form>
    </div>
    <!-- end details form -->

    <!-- password form -->
    <div class="col-12 col-lg-6">
      <form wire:submit.prevent='changePassword' class="sign__form sign__form--profile">
        <div class="row">
          <div class="col-12">
            <h4 class="sign__title">Change password</h4>
          </div>

          <div class="col-12 col-md-6 col-lg-12 col-xl-6">
            <div class="sign__group">
              <label class="sign__label" for="oldpass">Old password</label>
              <input wire:model.defer='old_password' id="oldpass" type="password" class="sign__input">
              @error('old_password')<p class="text-danger">{{ $message }}</p> @enderror
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-12 col-xl-6">
            <div class="sign__group">
              <label class="sign__label" for="newpass">New password</label>
              <input wire:model.defer='password' id="newpass" type="password" class="sign__input">
              @error('password')<p class="text-danger">{{ $message }}</p> @enderror
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-12 col-xl-6">
            <div class="sign__group">
              <label class="sign__label" for="confirmpass">Confirm new password</label>
              <input wire:model.defer='password_confirmation' id="confirmpass" type="password" class="sign__input">
              @error('password_confirmation')<p class="text-danger">{{ $message }}</p> @enderror
            </div>
          </div>
          <div class="col-12">
            @if(session()->has('error'))
            <p
            x-data="{open:true}"
            x-init="setTimeout(() => {open= false}, 2500);
                    setTimeout(() => {$refs.this.remove()}, 2500)"
            x-show="open"
            x-ref="this"
             class="text-danger">
             {{ session('error') }}</p>
            @endif
            <div wire:loading.inline >
                <button wire:target="save" class="btn btn-danger rounded-left disabled" type="submit">Saving...</button>
            </div>
            <button class="btn btn-danger float-right rounded-left" type="submit">Change</button>
          </div>
        </div>
      </form>
    </div>
    <!-- end password form -->
  </div>
