<div class="row row--grid">
    <div class="col-12">
      <div>
        <div class="row row--grid">
          <div class="col-12">
            <div class="dashbox">
                <div class="dashbox__title">
                    <h3><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M21.65,2.24a1,1,0,0,0-.8-.23l-13,2A1,1,0,0,0,7,5V15.35A3.45,3.45,0,0,0,5.5,15,3.5,3.5,0,1,0,9,18.5V10.86L20,9.17v4.18A3.45,3.45,0,0,0,18.5,13,3.5,3.5,0,1,0,22,16.5V3A1,1,0,0,0,21.65,2.24ZM5.5,20A1.5,1.5,0,1,1,7,18.5,1.5,1.5,0,0,1,5.5,20Zm13-2A1.5,1.5,0,1,1,20,16.5,1.5,1.5,0,0,1,18.5,18ZM20,7.14,9,8.83v-3L20,4.17Z"></path></svg> All Available Songs</h3>

                        <form action="#" class="header__search">
                            <input wire:model.debounce.500ms='search_song' type="text" placeholder="Track">
                            <button type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z"></path></svg></button>
                            <button type="button" class="close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M13.41,12l6.3-6.29a1,1,0,1,0-1.42-1.42L12,10.59,5.71,4.29A1,1,0,0,0,4.29,5.71L10.59,12l-6.3,6.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l6.29,6.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"></path></svg></button>
                          </form>
                          <div class="dashbox__wrap">
                        <a class="dashbox__refresh" href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12,2A10,10,0,0,0,5.12,4.77V3a1,1,0,0,0-2,0V7.5a1,1,0,0,0,1,1H8.62a1,1,0,0,0,0-2H6.22A8,8,0,1,1,4,12a1,1,0,0,0-2,0A10,10,0,1,0,12,2Zm0,6a1,1,0,0,0-1,1v3a1,1,0,0,0,1,1h2a1,1,0,0,0,0-2H13V9A1,1,0,0,0,12,8Z">
                                </path></svg></a>
<div class="btn-group">
  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
    Action
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">All</a>
    <a wire:click="sort()" class="dropdown-item" href="#">Artist(A-B)</a>
    <a class="dropdown-item" href="#">Date Created</a>
    <a class="dropdown-item" href="#">Most Downloaded</a>
  </div>
</div>

                    </div>
                </div>
              <div class="dashbox__table-wrap">
                <div class="dashbox__table-scroll">
                  <table class="main__table">
                      <thead>
                        <tr>

                          <th>
                            <a href="#">
                              Track
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M9.71,10.21,12,7.91l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-3-3a1,1,0,0,0-1.42,0l-3,3a1,1,0,0,0,1.42,1.42Zm4.58,4.58L12,17.09l-2.29-2.3a1,1,0,0,0-1.42,1.42l3,3a1,1,0,0,0,1.42,0l3-3a1,1,0,0,0-1.42-1.42Z"/>
                              </svg>
                            </a>
                          </th>
                          <th>
                            <a href="#" class="active">
                              Artist 
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M17,13.41,12.71,9.17a1,1,0,0,0-1.42,0L7.05,13.41a1,1,0,0,0,0,1.42,1,1,0,0,0,1.41,0L12,11.29l3.54,3.54a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29A1,1,0,0,0,17,13.41Z"/>
                              </svg>
                            </a>
                          </th>
                          <th>
                            <a href="#" class="active">
                              Date Uploaded
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z"/>
                              </svg>
                            </a>
                          </th>
                          <th>
                            <a href="#">
                             Album
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M9.71,10.21,12,7.91l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-3-3a1,1,0,0,0-1.42,0l-3,3a1,1,0,0,0,1.42,1.42Zm4.58,4.58L12,17.09l-2.29-2.3a1,1,0,0,0-1.42,1.42l3,3a1,1,0,0,0,1.42,0l3-3a1,1,0,0,0-1.42-1.42Z"/>
                              </svg>
                            </a>
                          </th>
                          <th>
                            <a href="#">
                              Total Downloads                            
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
                        @forelse ($songs as $song)
@php
  $estimated_song_duration = App\Http\Livewire\Dashboard\AllSongs::getSongDuration($song->file_path);
@endphp
                        <tr>                            
                          <td>
                            <ul class="main__list main__list--playlist main__list--dashbox">
                        <li class="single-item">
                            <a data-playlist data-title="{{ $song->track }}" data-artist="{{ $song->album->artist->name }}"
                             data-img="{{ asset('storage/app/public/'.$song->album->artist->photo)  }}" href="{{ asset('storage/app/public/'.$song->file_path) }}" data-audio="{{ asset('storage/app/public/'.$song->file_path) }}" class="single-item__cover ">
                                <img src="{{ asset('storage/app/public/'.$song->album->artist->photo) }}" alt="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"></path></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z"></path></svg>
                            </a>
                            <div class="single-item__title">
                                <h4><a href="#">{{ $song->track }} <span class=" text-danger">({{ $estimated_song_duration }})</span></a></h4>
                            </div>
                            </li>
                            </ul>
                          </td>
                          <td>
                            <div class="main__table-text"><a href="#">{{ Str::ucfirst($song->album->artist->name) }}</a></div>
                          </td>
                          <td>
                            <div class="main__table-text">{{ $song->created_at->diffForHumans() }}</div>
                          </td>
                          <td>
                            <div class="main__table-text">{{ $song->album->title }}</div>
                          </td>
                          <td>
                            <div class="main__table-text main__table-text--price">{{ $song->downloads->count() }}</div>
                          </td>
                          <td>
                            @if($song->status == 'Active')
                            <a wire:click="changeSongStatus('{{ $song->slug }}')" href="#!">
                            <div class="main__table-text main__table-text--green">
                                
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M14.72,8.79l-4.29,4.3L8.78,11.44a1,1,0,1,0-1.41,1.41l2.35,2.36a1,1,0,0,0,.71.29,1,1,0,0,0,.7-.29l5-5a1,1,0,0,0,0-1.42A1,1,0,0,0,14.72,8.79ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"/>
                              </svg>
                              {{ $song->status }}
                              
                            </div></a>
                            @else
                            <a wire:click="changeSongStatus('{{ $song->slug }}')" href="#!" >
                            <div class="main__table-text main__table-text--red">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M15.71,8.29a1,1,0,0,0-1.42,0L12,10.59,9.71,8.29A1,1,0,0,0,8.29,9.71L10.59,12l-2.3,2.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L13.41,12l2.3-2.29A1,1,0,0,0,15.71,8.29Zm3.36-3.36A10,10,0,1,0,4.93,19.07,10,10,0,1,0,19.07,4.93ZM17.66,17.66A8,8,0,1,1,20,12,7.95,7.95,0,0,1,17.66,17.66Z">
                                    </path></svg>
                                    {{ $song->status }}
                             </div>
                            </a>
                            @endif
                          </td>
                          <td >
                           <div style="display: flex; margin-top: 2px">
                                <a wire:click='edit("{{ $song->slug }}")' data-toggle="modal" data-target="#edit-song" href="#!" class="single-item__add">
                                    <i class="bi bi-pencil-square text-success"></i>
                                </a>
                                <a x-data onclick="return confirm('Are you sure??') ? @this.delete('{{ $song->slug }}') : false"
                                  href="#!" class="single-item__export">
                                    <i class="bi bi-trash text-danger"></i>
                                </a>
                           </div>
                              
                          </td>
                        </tr>
                          
                        @empty
                        <tr>                            
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>No songs found.</td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                          
                        @endforelse
                      </tbody>
                    </table>
                </div>
                <div class="float-right">{{ $songs->links() }}</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- Add album modal --}}
  <div wire:ignore class="modal fade" id="edit-song" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Song</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form wire:submit.prevent='update'>
            <div class="form-group">
              <label for="track">Track Title</label>
               <input wire:model.defer='track' id="track" type="text" class="form-control">
               @error('track')
               {{ $message }}
             @enderror
              </div>
              
              <div class="form-group">
                <label for="song_1">Song Designation</label>
                <select wire:model.defer='song_designation' class="form-control" id="song_1">
                  <option value="" disabled>Choose</option>
                  @foreach (App\Models\Song::SONG_STATUSES as $value => $label)
                  <option value="{{ $value }}">{{ $label }}</option>
                  @endforeach
                </select>
                @error('song_designation')
                  {{ $message }}
                @enderror
                </div>
              
        </div>
        <div class="modal-footer">
          <div wire:loading.inline wire:target="update">
            <button type="button" class="btn btn-success float-right disabled">Loading.....</button>
          </div>
          <button wire:loading.remove wire:target="update" type="submit" class="btn btn-success">Save</button>
        </div>
      </form>
       </div>
    </div>
  </div>
  </div>	