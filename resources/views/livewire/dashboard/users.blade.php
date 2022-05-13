<div class="row row--grid">
    <div class="col-12">
      <div>
        <div class="row row--grid">
          <div class="col-12">
            <div class="dashbox">
                <div class="dashbox__title">
                    <h3><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M12.3,12.22A4.92,4.92,0,0,0,14,8.5a5,5,0,0,0-10,0,4.92,4.92,0,0,0,1.7,3.72A8,8,0,0,0,1,19.5a1,1,0,0,0,2,0,6,6,0,0,1,12,0,1,1,0,0,0,2,0A8,8,0,0,0,12.3,12.22ZM9,11.5a3,3,0,1,1,3-3A3,3,0,0,1,9,11.5Zm9.74.32A5,5,0,0,0,15,3.5a1,1,0,0,0,0,2,3,3,0,0,1,3,3,3,3,0,0,1-1.5,2.59,1,1,0,0,0-.5.84,1,1,0,0,0,.45.86l.39.26.13.07a7,7,0,0,1,4,6.38,1,1,0,0,0,2,0A9,9,0,0,0,18.74,11.82Z"></path>
                      </svg> All Registered Users</h3>

                        <form action="#" class="header__search">
                            <input wire:model.debounce.500ms='search_user' type="text" placeholder="Name">
                            <button type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z"></path></svg></button>
                            <button type="button" class="close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M13.41,12l6.3-6.29a1,1,0,1,0-1.42-1.42L12,10.59,5.71,4.29A1,1,0,0,0,4.29,5.71L10.59,12l-6.3,6.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l6.29,6.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"></path></svg></button>
                          </form>
                          <div class="dashbox__wrap">
                        <a class="dashbox__refresh" href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12,2A10,10,0,0,0,5.12,4.77V3a1,1,0,0,0-2,0V7.5a1,1,0,0,0,1,1H8.62a1,1,0,0,0,0-2H6.22A8,8,0,1,1,4,12a1,1,0,0,0-2,0A10,10,0,1,0,12,2Zm0,6a1,1,0,0,0-1,1v3a1,1,0,0,0,1,1h2a1,1,0,0,0,0-2H13V9A1,1,0,0,0,12,8Z">
                                </path></svg></a>
<div class="btn-group">
  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
    Sort By
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
                              Pic
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M9.71,10.21,12,7.91l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-3-3a1,1,0,0,0-1.42,0l-3,3a1,1,0,0,0,1.42,1.42Zm4.58,4.58L12,17.09l-2.29-2.3a1,1,0,0,0-1.42,1.42l3,3a1,1,0,0,0,1.42,0l3-3a1,1,0,0,0-1.42-1.42Z"/>
                              </svg>
                            </a>
                          </th>
                          <th>
                            <a href="#" class="active">
                              Full Name 
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M17,13.41,12.71,9.17a1,1,0,0,0-1.42,0L7.05,13.41a1,1,0,0,0,0,1.42,1,1,0,0,0,1.41,0L12,11.29l3.54,3.54a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29A1,1,0,0,0,17,13.41Z"/>
                              </svg>
                            </a>
                          </th>
                          <th>
                            <a href="#" class="active">
                              Registered
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z"/>
                              </svg>
                            </a>
                          </th>
                          <th>
                            <a href="#">
                             Country
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M9.71,10.21,12,7.91l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-3-3a1,1,0,0,0-1.42,0l-3,3a1,1,0,0,0,1.42,1.42Zm4.58,4.58L12,17.09l-2.29-2.3a1,1,0,0,0-1.42,1.42l3,3a1,1,0,0,0,1.42,0l3-3a1,1,0,0,0-1.42-1.42Z"/>
                              </svg>
                            </a>
                          </th>
                          <th>
                            <a href="#">
                              Last Activity                            
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
                        @forelse ($users as $user)
                        <tr>                            
                          <td>
                            @if (is_null($user->picture))
                            <img src="https://eu.ui-avatars.com/api/?background=random&amp;name={{ Str::ucfirst($user->first_name) }} 
                            {{ Str::ucfirst($user->last_name) }}" alt="">
                            
                            @else
                            <img src="{{ asset('storage/app/public/'.$user->picture) }}" alt="">
                            @endif
                        </td>
                          <td>
                            <div class="main__table-text"><a href="#">{{ $user->first_name }} {{ $user->last_name }}</a></div>
                          </td>
                          <td>
                            <div class="main__table-text">{{ $user->created_at->diffForHumans() }}</div>
                          </td>
                          <td>
                            <div class="main__table-text">Zimbabwe</div>
                          </td>
                          <td>
@php
    $last_login = App\Http\Livewire\Dashboard\Users::getLastActivity($user->id);
@endphp
                            <div class="main__table-text main__table-text--price">{{ Carbon\Carbon::parse($last_login->last_activity)->diffForHumans() }}</div>
                          </td>
                          <td>
                            @if($user->is_active == 1)
                            <a wire:click="changeSongStatus('{{ $user->slug }}')" href="#!">
                            <div class="main__table-text main__table-text--green">
                                
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M14.72,8.79l-4.29,4.3L8.78,11.44a1,1,0,1,0-1.41,1.41l2.35,2.36a1,1,0,0,0,.71.29,1,1,0,0,0,.7-.29l5-5a1,1,0,0,0,0-1.42A1,1,0,0,0,14.72,8.79ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"/>
                              </svg>
                              Active
                              
                            </div></a>
                            @else
                            <a wire:click="changeSongStatus('{{ $user->slug }}')" href="#!" >
                            <div class="main__table-text main__table-text--red">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M15.71,8.29a1,1,0,0,0-1.42,0L12,10.59,9.71,8.29A1,1,0,0,0,8.29,9.71L10.59,12l-2.3,2.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L13.41,12l2.3-2.29A1,1,0,0,0,15.71,8.29Zm3.36-3.36A10,10,0,1,0,4.93,19.07,10,10,0,1,0,19.07,4.93ZM17.66,17.66A8,8,0,1,1,20,12,7.95,7.95,0,0,1,17.66,17.66Z">
                                    </path></svg>
                                    Deactivated
                             </div>
                            </a>
                            @endif
                          </td>
                          <td >
                           <div style="display: flex; margin-top: 2px">
                                <a wire:click='edit("{{ $user->slug }}")' data-toggle="modal" data-target="#edit-song" href="#!" class="single-item__add">
                                    <i class="bi bi-pencil-square text-success"></i>
                                </a>
                                <a x-data onclick="return confirm('Are you sure??') ? @this.delete('{{ $user->slug }}') : false"
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
                <div class="float-right">{{ $users->links() }}</div>
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
