<div class="col-12 col-lg-7 col-xl-8">
    <form wire:submit.prevent='store' class="sign__form sign__form--contacts">
        <div class="row">
            <div class="col-12">
                <div class="sign__group">
                    <input wire:model.defer='full_name' type="text" class="sign__input" placeholder="Your Full Name">
                    @error('full_name')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="sign__group">
                    <input wire:model.defer='contact_number' type="text" class="sign__input" placeholder="Your Contact Number">
                    @error('contact_number')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="sign__group">
                    <input wire:model.defer='email' type="email" class="sign__input" placeholder="Your Email">
                    @error('email')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            

            <div class="col-12">
                <div class="sign__group">
                    <textarea wire:model.defer='message' class="sign__textarea" placeholder="Type your message"></textarea>
                    @error('message')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="col-12 col-xl-3">
                <div wire:loading.inline wire:target="store">
                    <button type="submit" class="sign__btn">Loading...</button>
                </div>
                <button wire:loading.remove wire:target="store" type="submit" class="sign__btn">Send</button>
            </div>
        </div>
    </form>	
</div>
