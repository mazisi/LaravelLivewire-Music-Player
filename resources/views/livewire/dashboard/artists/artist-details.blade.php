<div class="container-fluid">
    <div class="row row--grid">
      <div class="col-12">
        @if ($errors->any())
    <div class="text-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <div class="row row--grid">
          @forelse ($artists->albums as $album)
          <div class="col-6 col-sm-4 col-lg-3">
            <div class="product">
              <div class="product__img">
                @if (is_null($album->album_cover))
                <img src="{{ asset('storage/app/public/'.$artists->photo) }}" alt="">
                @else
                <img src="{{ asset('storage/app/public/'.$album->album_cover) }}" alt="">
                @endif
                

                <a href="/add-songs?album={{ $album->slug }}" class="product__add" type="button">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Zm4-9H13V8a1,1,0,0,0-2,0v3H8a1,1,0,0,0,0,2h3v3a1,1,0,0,0,2,0V13h3a1,1,0,0,0,0-2Z"/>
                  </svg></a>
              </div>
              <h3 class="product__title"><a href="/dash/view-albums?album={{ $album->slug }}">{{ $album->title }}</a></h3>
              <span class="product__price">
                @if (is_null($album->release_date))
                  Unknown
                @else
                {{ $album->release_date }}                  
                @endif
              </span>
              <a wire:click="editAlbum('{{ $album->slug }}')" data-toggle="modal" data-target="#edit-album" href="#!"><span class="product__new">Edit</span></a>
            </div>
          </div>
          @empty
            <p>No albums found.</p>
          @endforelse
          

        </div>

        <button class="main__load" type="button">Load more</button>
      </div>
    </div>
    
    <div wire:ignore class="modal fade" id="edit-album" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Album</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent='updateAlbum'>
                    @csrf
                    <input type="hidden" wire:model="album_id">
                    <div class="form-group">
                      <label for="album-name">Album Name</label>
                      <input wire:model.defer='album_name' type="text" class="form-control" id="album-name">
                    @error('album_name'){{ $message }}@enderror
                   </div>
                   <div class="form-group">
                    <label for="release_date">Release Date</label>
                    <input wire:model.defer='release_date' type="date" class="form-control" id="release_date">
                  @error('release_date'){{ $message }}@enderror
                 </div>

                  
                 <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="inputGroupSelect01">New Release?</label>
                    </div>
                    <select wire:model.defer='new_release' class="custom-select" id="inputGroupSelect01">
                        @foreach (App\Models\Album::ALBUM_STATUSES as $value => $label)
                        <option value="{{ $value }}">{{ $label }}</option>
                        @endforeach
                    </select>
                    @error('new_release'){{ $message }}@enderror
                  </div>
                    
        <div class="col-12"
        wire:ignore
        x-data
        x-init="
        FilePond.setOptions({
          allowMultiple: {{ isset($attributes['multiple']) ? 'true' : 'false' }},
          server: {
              process: (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                  @this.upload('album_cover',file, load, error, progress)
              },
              revert: (filename, load) =>{
                  @this.removeUpload('album_cover', filename, load)
              },
          },
          });
          FilePond.create($refs.input);">
                   <label for="album-name">Update Album Cover</label>
                      <input wire:model.defer='album_cover' type="file" x-ref="input">
                      @error('album_cover'){{ $message }}@enderror
                    </div>
                    
            </div>
            <div class="modal-footer">
                <div wire:loading.inline wire:target="updateAlbum">
                    <button type="button" class="btn btn-success float-right disabled">Loading.....</button>
                  </div>
                  <button wire:loading.remove wire:target="updateAlbum" type="submit" class="mt-2 btn btn-success float-right"> Save</button>
                </form>
            </div>
          </div>
        </div>
      </div>
  </div>

