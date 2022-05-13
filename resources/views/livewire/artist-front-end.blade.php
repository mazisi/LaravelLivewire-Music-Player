<div class="row " wire:loading.class="disable-page">
    
    <div class="col-12">
        <div class="main__filter">
            <form action="#" class="main__filter-search">
                <input wire:model.debounce.500ms='search_artist' type="text" placeholder="Search Artist...">
               
            </form>        

            <div class="slider-radio">
                <input wire:click="filterArtist('all')" type="radio" @if($filter == 'all' || $filter == '') checked @endif id="all" ><label for="all">All </label>
                <input wire:click="filterArtist('legacy_artist')" @if($filter == 'legacy_artist') checked @endif type="radio" id="legacy"><label for="legacy">Legacy </label>
                <input wire:click="filterArtist('active_artist')" @if($filter == 'active_artist') checked @endif type="radio" id="newest"><label for="newest">Active </label>
            </div>
        </div>
        <div class="row row--grid" >
            @forelse ($artists as $artist)
            <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                <a href="{{ route('artist_albums',$artist->slug) }}" class="artist">
                    <div class="artist__cover">
                        <img src="{{ asset('storage/app/public/'.$artist->photo) }}" alt="">
                    </div>
                    <h3 class="artist__title">{{ Str::ucfirst($artist->name) }}</h3>
                </a>
            </div>
            @empty
                <p>No artist found.</p>
            @endforelse
            
    </div>
    <div class="mt-2 float-right">
        {{ $artists->links() }}
    </div>
    {{-- <button class="main__load" type="button">Load more</button> --}}
</div>
