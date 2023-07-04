{{-- HOME - shows searchbar and latest meetups --}}
<x-layout>
    <div class="background-img">
        <div class="container">
            <div class="search-lg-centred">
                <h1 class="h1-lg">Find your tribe</h1>
                <x-searchbar></x-searchbar>
                <a class="down-arrow" href="#card-container">
                    <img src="{{asset('img/arrow_icon.svg')}}" alt="">
                </a>
            </div>
        </div>
    </div>
    <div class="home-container">
        @if (count($meetups) == 0)
            <h2 id="search-message">No meetups found</h2>
        @endif
        <div class="card-container" id="card-container">
            @foreach($meetups as $meetup)
                {{-- <x-info-card :meetup="$meetup" /> --}}
                <a href="/meetups/{{$meetup['id']}}" class="card">
                    <div class="inner-card">
                        <div class="card-image" style="background:url({{asset('storage/' . $meetup->image)}}) no-repeat center/cover"></div>
                        {{-- <h2 class="card-text card-time">{{ \Carbon\Carbon::parse{$meetup->date}->format('j F, Y')}} - {{$meetup['time']}}</h2> --}}
                        <h3 class="card-text card-title">{{$meetup['name']}}</h3>
                        <p class="card-text card-group">Hosted by {{$meetup->user->username}}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</x-layout>
