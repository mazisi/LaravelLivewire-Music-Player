<div class="row row--grid">
    <div class="col-12 col-lg-12 col-xl-12">
      <form wire:submit.prevent='addSongs'>
        <div class="form-group">
          <label for="uploaded-by">Uploaded By</label>
          <input wire:model.defer='uploaded_by' type="text" class="form-control" id="uploaded-by">
          <small id="emailHelp" class="d-none form-text text-muted">We'll never share your email with anyone else.</small>
          @error('uploaded_by') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group"
        wire:ignore
        x-data
        x-init="
        FilePond.setOptions({
          allowMultiple: {{ isset($attributes['multiple']) ? 'true' : 'false' }},
          server: {
              process: (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                  @this.upload('songs',file, load, error, progress)
              },
              revert: (filename, load) =>{
                  @this.removeUpload('songs', filename, load)
              },
          },
          });
          FilePond.create($refs.input);">

          <label for="exampleInputPassword1">Upload Songs</label>
          <input wire:model='songs' type="file" id="songs" multiple  x-ref="input">
          @error('songs.*') <span class="text-danger">{{ $message }}</span> @enderror
         </div>
        <div wire:loading.inline wire:target="addSongs">
          <button type="button" class="btn btn-success float-right disabled">Loading.....</button>
        </div>
        <button wire:loading.remove type="submit" class="btn btn-success float-right">Submit</button>
      </form>
    </div>
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
    
  </div>