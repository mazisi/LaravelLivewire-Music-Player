<div class="col-12">
  <div class="release">
    <div class="release__content">
      <div class="release__cover">
        <img src="{{ asset('public/assets/playlist.png') }}" alt="">
      </div>
      <div class="release__stat">
        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
          <path d="M21.65,2.24a1,1,0,0,0-.8-.23l-13,2A1,1,0,0,0,7,
          5V15.35A3.45,3.45,0,0,0,5.5,15,3.5,3.5,0,1,0,9,
          18.5V10.86L20,9.17v4.18A3.45,3.45,0,0,0,18.5,13,3.5,3.5,0,1,0,22,16.5V3A1,1,0,0,0,21.65,
          2.24ZM5.5,20A1.5,1.5,0,1,1,7,18.5,1.5,1.5,0,0,1,5.5,20Zm13-2A1.5,1.5,0,1,1,
          20,16.5,1.5,1.5,0,0,1,18.5,18ZM20,7.14,9,8.83v-3L20,4.17Z"/></svg> {{ $playlists->count() }} {{ Str::plural('song',$playlists->count()) }}</span>
      </div>
    </div>

    

<div class="release__list">
  <ul class="main__list main__list--playlist main__list--dashbox">
    @php
        $i=0;
      @endphp
      @forelse ($playlists as $playlist)
      @php
        $i++;
      @endphp
      <li class="single-item">
          <a data-playlist data-title="{{ $i }}. {{ Str::ucfirst($playlist->song->track) }}" data-artist="{{ Str::ucfirst($playlist->song->album->title) }}" 
          data-img="{{ asset('public/assets/img/covers/cover.svg') }}" 
          href="{{ asset('storage/'.$playlist->song->file_path) }}" class="single-item__cover">
            <img src="{{ asset('public/assets/img/covers/cover.svg') }}" alt="">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z"/></svg>
          </a>
          <div class="single-item__title">
            <h4><a href="#">{{ $i }}. {{ Str::ucfirst($playlist->song->track) }}</a></h4>
            <span><a href="artist.html">{{ Str::ucfirst($playlist->song->album->title) }}</a></span>
          </div>
          <a href="#" class="single-item__export">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21,14a1,1,0,0,0-1,1v4a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V15a1,1,0,0,0-2,0v4a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V15A1,1,0,0,0,21,14Zm-9.71,1.71a1,1,0,0,0,.33.21.94.94,0,0,0,.76,0,1,1,0,0,0,.33-.21l4-4a1,1,0,0,0-1.42-1.42L13,12.59V3a1,1,0,0,0-2,0v9.59l-2.29-2.3a1,1,0,1,0-1.42,1.42Z"></path></svg>
          </a>
          
          <a wire:click='removeFromPlaylist("{{ Crypt::encrypt($playlist->id) }}")' style="fill: red;" data-toggle="tooltip" data-placement="top" title="Remove" href="#" class="single-item__add text-danger" >
            <svg style="fill: red;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M13.41,12l6.3-6.29a1,1,0,1,0-1.42-1.42L12,10.59,5.71,4.29A1,1,0,0,0,4.29,5.71L10.59,12l-6.3,6.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l6.29,6.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"></path></svg>
          </a>
          
          <span class="single-item__time">2:58</span>
        </li>
      @empty
          <p>Empty.</p>
      @endforelse
    
  </ul>
</div>
  </div>
</div>


