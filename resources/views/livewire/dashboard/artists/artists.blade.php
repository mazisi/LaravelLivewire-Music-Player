<div class="container-fluid">
    <div class="row row--grid">
    <style>
      .drop-zone {
  max-width: 200px;
  height: 200px;
  padding: 25px;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  font-family: "Quicksand", sans-serif;
  font-weight: 500;
  font-size: 16px;
  cursor: pointer;
  color: #cccccc;
  border: 4px dashed #28a745;
  border-radius: 10px;
}

.drop-zone--over {
  border-style: solid;
}

.drop-zone__input {
  display: none;
}

.drop-zone__thumb {
  width: 100%;
  height: 100%;
  border-radius: 10px;
  overflow: hidden;
  background-color: #cccccc;
  background-size: cover;
  position: relative;
}

.drop-zone__thumb::after {
  content: attr(data-label);
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  padding: 5px 0;
  color: #ffffff;
  background: rgba(0, 0, 0, 0.75);
  font-size: 14px;
  text-align: center;
}
    </style>
      <!-- title -->
      <div class="col-12" style="margin-top: -3rem;">
        <div class="main__title main__title--page">
          <h1>Artists</h1>
          <form action="#" class="header__search">
            <input wire:model.debounce.500ms='search_artist' type="text" placeholder="Search Artist">
            <button type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z"></path></svg></button>
            <button type="button" class="close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M13.41,12l6.3-6.29a1,1,0,1,0-1.42-1.42L12,10.59,5.71,4.29A1,1,0,0,0,4.29,5.71L10.59,12l-6.3,6.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l6.29,6.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"></path></svg></button>
          </form>
          <a data-toggle="modal" data-target="#add-artist" href="#!" class="post__category">Add Artist</a>
        </div>
        
        
      </div>
      <!-- end title -->
    </div>

    <div class="row row--grid">
      <div class="col-12">
        <div>
          <div class="row row--grid">
            <div class="col-12">
              <div class="dashbox">
                <div class="dashbox__table-wrap">
                  <div class="dashbox__table-scroll">
                    <table class="main__table">
                        <thead>
                          <tr>

                            <th>
                              <a href="#">
                                Cover Photo 
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                  <path d="M9.71,10.21,12,7.91l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-3-3a1,1,0,0,0-1.42,0l-3,3a1,1,0,0,0,1.42,1.42Zm4.58,4.58L12,17.09l-2.29-2.3a1,1,0,0,0-1.42,1.42l3,3a1,1,0,0,0,1.42,0l3-3a1,1,0,0,0-1.42-1.42Z"/>
                                </svg>
                              </a>
                            </th>
                            <th>
                              <a href="#" class="active">
                                Name 
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                  <path d="M17,13.41,12.71,9.17a1,1,0,0,0-1.42,0L7.05,13.41a1,1,0,0,0,0,1.42,1,1,0,0,0,1.41,0L12,11.29l3.54,3.54a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29A1,1,0,0,0,17,13.41Z"/>
                                </svg>
                              </a>
                            </th>
                            <th>
                              <a href="#" class="active">
                                Date 
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                  <path d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z"/>
                                </svg>
                              </a>
                            </th>
                            <th>
                              <a href="#">
                                No. Albums 
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                  <path d="M9.71,10.21,12,7.91l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-3-3a1,1,0,0,0-1.42,0l-3,3a1,1,0,0,0,1.42,1.42Zm4.58,4.58L12,17.09l-2.29-2.3a1,1,0,0,0-1.42,1.42l3,3a1,1,0,0,0,1.42,0l3-3a1,1,0,0,0-1.42-1.42Z"/>
                                </svg>
                              </a>
                            </th>
                            <th>
                              <a href="#">
                                Total Songs
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                  <path d="M9.71,10.21,12,7.91l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-3-3a1,1,0,0,0-1.42,0l-3,3a1,1,0,0,0,1.42,1.42Zm4.58,4.58L12,17.09l-2.29-2.3a1,1,0,0,0-1.42,1.42l3,3a1,1,0,0,0,1.42,0l3-3a1,1,0,0,0-1.42-1.42Z"/>
                                </svg>
                              </a>
                            </th>
                            <th>
                              <a href="#">
                                Status 
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                  <path d="M9.71,10.21,12,7.91l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-3-3a1,1,0,0,0-1.42,0l-3,3a1,1,0,0,0,1.42,1.42Zm4.58,4.58L12,17.09l-2.29-2.3a1,1,0,0,0-1.42,1.42l3,3a1,1,0,0,0,1.42,0l3-3a1,1,0,0,0-1.42-1.42Z"/>
                                </svg>
                              </a>
                            </th>

                            <th>
                              <a href="#">
                                Action 
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                  <path d="M9.71,10.21,12,7.91l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-3-3a1,1,0,0,0-1.42,0l-3,3a1,1,0,0,0,1.42,1.42Zm4.58,4.58L12,17.09l-2.29-2.3a1,1,0,0,0-1.42,1.42l3,3a1,1,0,0,0,1.42,0l3-3a1,1,0,0,0-1.42-1.42Z"/>
                                </svg>
                              </a>
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          @forelse ($artists as $artist)

                          <tr>                            
                            <td>
                              <div class="main__table-img">
                                <img src="{{ asset('storage/app/public/'.$artist->photo) }}" alt="">
                              </div>
                            </td>
                            <td>
                              <div class="main__table-text"><a href="/dashboard/artist-details?artist={{ $artist->slug }}">{{ Str::ucfirst($artist->name) }}</a></div>
                            </td>
                            <td>
                              <div class="main__table-text">{{ $artist->created_at->format('d-m-Y') }}</div>
                            </td>
                            <td>
                              <div class="main__table-text">{{ $artist->albums->count() }}</div>
                            </td>
                            <td>
                              <div class="main__table-text main__table-text--price">12</div>
                            </td>
                            <td>
                              <div class="main__table-text main__table-text--green">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                  <path d="M14.72,8.79l-4.29,4.3L8.78,11.44a1,1,0,1,0-1.41,1.41l2.35,2.36a1,1,0,0,0,.71.29,1,1,0,0,0,.7-.29l5-5a1,1,0,0,0,0-1.42A1,1,0,0,0,14.72,8.79ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"/>
                                </svg>
                                Active
                              </div>
                            </td>
                            <td>
<div class="btn-group">
  <button type="button" class="btn btn-sm btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
    Action
  </button>
  <div class="dropdown-menu">
    <a wire:click='getArtistId("{{ $artist->id }}")' class="dropdown-item" data-toggle="modal" data-target="#add-album" href="#"><i class="bi bi-plus-circle"></i> Add Album</a>
    <a wire:click='edit("{{ $artist->slug }}")' data-toggle="modal" data-target="#edit-artist" class="dropdown-item " href="#"><i class="bi bi-eye "></i> Vew/Edit</a>
    <a x-data onclick="return confirm('Are you sure??') ? @this.delete('{{ $artist->slug }}') : false" class="dropdown-item text-danger" href="#"><i class="bi bi-trash "></i> Delete</a>
  </div>
</div>

</td>
                          </tr>
                            
                          @empty
                          <tr>                            
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>No data found.</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                            
                          @endforelse
                          
                         
                        </tbody>
                      </table>
                      <div class="float-right">
                        {{ $artists->links() }}
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>	
   {{-- create artist --}}

   <div wire:ignore class="modal fade" id="edit-artist" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Artist</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form wire:submit.prevent='updateArtist'>
            <div class="form-group">
              <label for="artist-name">Artist Name</label>
              <input wire:model.defer='name' type="text" class="form-control" id="artist-name">
            @error('name'){{ $message }}@enderror
           </div>

           <div class="form-group">
            <label for="song_1">Is Legacy Artist?</label>
            <select wire:model.defer='artist_designation' class="form-control" id="song_1">
              <option value="" disabled>Select...</option>
              @foreach (App\Models\Artist::ARTIST_STATUSES as $value => $label)
              <option value="{{ $value }}">{{ $label }}</option>
              @endforeach
            </select>
            @error('song_designation')
              {{ $message }}
            @enderror
            </div>
            
            <div class="drop-zone col-12">
              <span class="drop-zone__prompt">Drop or Click file here to update artist picture</span>
              <input wire:model.defer='photo' type="file" name="myFile" class="drop-zone__input">
              @error('photo'){{ $message }}@enderror
            </div>
            <div wire:loading.inline wire:target="updateArtist">
              <button type="button" class="btn btn-success float-right disabled">Loading.....</button>
            </div>
            <button wire:loading.remove wire:target="updateArtist" type="submit" class="mt-2 btn btn-success float-right"><i class="bi bi-send"></i> Update</button>
          </form>
        </div>
        
      </div>
    </div>
  </div>
  
  <div wire:ignore class="modal fade" id="add-artist" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Artist</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form wire:submit.prevent='createArtist'>
            <div class="form-group">
              <label for="artist-name">Artist Name</label>
              <input wire:model.defer='name' type="text" class="form-control" id="artist-name">
            @error('name'){{ $message }}@enderror
           </div>
            
            <div class="drop-zone col-12">
              <span class="drop-zone__prompt">Drop or Click file here to upload artist picture</span>
              <input wire:model.defer='photo' type="file" name="myFile" class="drop-zone__input">
              @error('photo'){{ $message }}@enderror
            </div>
            <div wire:loading.inline wire:target="createArtist">
              <button type="button" class="btn btn-success float-right disabled">Loading.....</button>
            </div>
            <button wire:loading.remove wire:target="createArtist" type="submit" class="mt-2 btn btn-success float-right"><i class="bi bi-send"></i> Add</button>
          </form>
        </div>
        
      </div>
    </div>
  </div>

  {{-- Add album modal --}}
  <div wire:ignore class="modal fade" id="add-album" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Album</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form wire:submit.prevent='createAlbum'>
            <div class="form-group">
              <label for="Album-Title">Album Title</label>
              <input wire:model.defer='album_title' type="text" class="form-control" id="Album-Title">
            @error('album_title'){{ $message }}@enderror
           </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Release Date</label>
              <input wire:model.defer='album_release_date' type="date" class="form-control" id="exampleInputPassword1">
              <small id="exampleInputPassword1" class="form-text text-muted">Leave blank if not sure.</small>
              @error('album_release_date'){{ $message }}@enderror
            </div>
            <div class="form-group"
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

              <label for="exampleInputPassword1">Album Cover</label>
              <small id="album-cover" class="form-text text-muted">Leave blank if not sure.</small>
              <input wire:model.defer='album_cover' type="file" x-ref="input" id="album-cover">
              @error('album_title'){{ $message }}@enderror
            </div>
            <div wire:loading.inline wire:target="createAlbum">
              <button type="button" class="btn btn-success float-right disabled">Loading.....</button>
            </div>
            <button wire:loading.remove wire:target="createAlbum" type="submit" class="btn btn-success float-right"><i class="bi bi-send"></i> Save</button>
          </form>
        </div>
        
      </div>
    </div>
  </div>
 <script>
   document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
  const dropZoneElement = inputElement.closest(".drop-zone");

  dropZoneElement.addEventListener("click", (e) => {
    inputElement.click();
  });

  inputElement.addEventListener("change", (e) => {
    if (inputElement.files.length) {
      updateThumbnail(dropZoneElement, inputElement.files[0]);
    }
  });

  dropZoneElement.addEventListener("dragover", (e) => {
    e.preventDefault();
    dropZoneElement.classList.add("drop-zone--over");
  });

  ["dragleave", "dragend"].forEach((type) => {
    dropZoneElement.addEventListener(type, (e) => {
      dropZoneElement.classList.remove("drop-zone--over");
    });
  });

  dropZoneElement.addEventListener("drop", (e) => {
    e.preventDefault();

    if (e.dataTransfer.files.length) {
      inputElement.files = e.dataTransfer.files;
      updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
    }

    dropZoneElement.classList.remove("drop-zone--over");
  });
});

/**
 * Updates the thumbnail on a drop zone element.
 *
 * @param {HTMLElement} dropZoneElement
 * @param {File} file
 */
function updateThumbnail(dropZoneElement, file) {
  let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");

  // First time - remove the prompt
  if (dropZoneElement.querySelector(".drop-zone__prompt")) {
    dropZoneElement.querySelector(".drop-zone__prompt").remove();
  }

  // First time - there is no thumbnail element, so lets create it
  if (!thumbnailElement) {
    thumbnailElement = document.createElement("div");
    thumbnailElement.classList.add("drop-zone__thumb");
    dropZoneElement.appendChild(thumbnailElement);
  }

  thumbnailElement.dataset.label = file.name;

  // Show thumbnail for image files
  if (file.type.startsWith("image/")) {
    const reader = new FileReader();

    reader.readAsDataURL(file);
    reader.onload = () => {
      thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
    };
  } else {
    thumbnailElement.style.backgroundImage = null;
  }
}

 </script>
  </div>