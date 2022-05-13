<div class="col-12 col-lg-6">
                <div class="dashbox">
                  <div class="dashbox__title">
                    <h3>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M21.65,2.24a1,1,0,0,0-.8-.23l-13,2A1,1,0,0,0,7,5V15.35A3.45,3.45,0,0,0,5.5,15,3.5,3.5,0,1,0,9,18.5V10.86L20,9.17v4.18A3.45,3.45,0,0,0,18.5,13,3.5,3.5,0,1,0,22,16.5V3A1,1,0,0,0,21.65,2.24ZM5.5,20A1.5,1.5,0,1,1,7,18.5,1.5,1.5,0,0,1,5.5,20Zm13-2A1.5,1.5,0,1,1,20,16.5,1.5,1.5,0,0,1,18.5,18ZM20,7.14,9,8.83v-3L20,4.17Z"/>
                      </svg>
                      Site Donations
                    </h3>
                    <div class="dashbox__wrap">
                      <a class="dashbox__refresh" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                          <path d="M12,2A10,10,0,0,0,5.12,4.77V3a1,1,0,0,0-2,0V7.5a1,1,0,0,0,1,1H8.62a1,1,0,0,0,0-2H6.22A8,8,0,1,1,4,12a1,1,0,0,0-2,0A10,10,0,1,0,12,2Zm0,6a1,1,0,0,0-1,1v3a1,1,0,0,0,1,1h2a1,1,0,0,0,0-2H13V9A1,1,0,0,0,12,8Z"/>
                        </svg>
                      </a>
                       @if ($errors->any())
                  @foreach ($errors->all() as $error)
                      <p>{{ $error }}</p>
                  @endforeach
                @endif
                      <a class="dashbox__more" data-toggle="modal" data-target="#donate" href="#!">Add</a>
                    </div>
                  </div>
                  <div class="dashbox__list-wrap">
                    <ul class="main__list main__list--dashbox">
                    @forelse($donations as $donation)
                      <li class="single-item">
                      @if(is_null($donation->picture))
                            <img src="https://eu.ui-avatars.com/api/?background=random&amp;name={{ $donation->full_name }}" alt="" style="max-height: 5rem; max-width: 3rem; border-radius: 50%;">
                            @else
                            <img src="{{ asset('storage/app/public/'.$donation->picture) }}" alt="" style="max-height: 5rem; max-width: 3rem;">
                            @endif
                        <div class="single-item__title">
                          <h4><a href="#!">{{ $donation->full_name }}</a></h4>
                          <span><a href="#!">{{ $donation->location }}</a></span>
                        </div>
                        <span class="single-item__time">R {{ $donation->amount }}</span>
                      </li>
                      @empty
                      <li class="single-item">Empty.</li>
                      @endforelse
                     
                     
                      
                    </ul>
                  </div>
                </div>

<div wire:ignore class="modal fade" id="donate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Contributor</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form wire:submit.prevent='store'>
            <div class="form-group">
              <label for="Full Name">Full Name</label>
              <input wire:model.defer='full_name' type="text" class="form-control" id="Full Name">
            @error('full_name'){{ $message }}@enderror
           </div>
            <div class="form-group">
              <label for="AMount">Amount</label>
              <input wire:model.defer='amount' type="text" class="form-control" id="AMount">
              @error('amount'){{ $message }}@enderror
            </div>

             <div class="form-group">
              <label for="location">Location</label>
              <input wire:model.defer='location' type="text" class="form-control" id="location">
              @error('location'){{ $message }}@enderror
            </div>
            <div class="form-group"
            wire:ignore
            x-data
            x-init="
            FilePond.setOptions({
              allowMultiple: {{ isset($attributes['multiple']) ? 'true' : 'false' }},
              server: {
                  process: (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                      @this.upload('picture',file, load, error, progress)
                  },
                  revert: (filename, load) =>{
                      @this.removeUpload('picture', filename, load)
                  },
              },
              });
          FilePond.create($refs.input);">

              <label for="exampleInputPassword1">Picture</label>
              <small id="album-cover" class="form-text text-muted">Optional.</small>
              <input wire:model.defer='picture' type="file" x-ref="input" id="album-cover">
              @error('album_title'){{ $message }}@enderror
            </div>
            <div wire:loading.inline wire:target="store">
              <button type="button" class="btn btn-success float-right disabled">Loading.....</button>
            </div>
            <button wire:loading.remove wire:target="store" type="submit" class="btn btn-success mt-2 float-right"><i class="bi bi-send"></i> Save</button>
          </form>
        </div>
        
      </div>
    </div>
  </div>
              </div>