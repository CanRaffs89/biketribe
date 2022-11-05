<x-layout>
    <div class="background-img">
        <x-navbar></x-navbar>
        <div class="container">
            <div class="search-lg-centred">
                <h1>Find your tribe</h1>
                <x-search></x-search>
            </div>
            <div class="down-arrow">
                <h1>></h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card-container">
            @foreach($meetups as $meetup)
            <a href="/meetups/show/{{$meetup['id']}}" class="card">
                <div class="inner-card">
                    <div class="card-image"></div>
                    <h2 class="card-text card-time">Sat 27 Aug - 4:00PM</h2>
                    <h3 class="card-text card-title">{{$meetup['name']}}</h3>
                    <p class="card-text card-group">{{$meetup['host']}}</p>
                </div>
            </a>
            @endforeach
            {{-- <x-info-card></x-info-card>
            <x-info-card></x-info-card>
            <x-info-card></x-info-card>
            <x-info-card></x-info-card> --}}
        </div>
    </div>
</x-layout>
