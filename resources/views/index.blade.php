{{-- HOME - shows searchbar and latest meetups --}}
<x-layout>
    <div class="background-img">
        <x-navbar></x-navbar>
        <div class="container">
            <div class="search-lg-centred">
                <h1 class="h1-lg">Find your tribe</h1>
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
                <x-info-card :meetup="$meetup" />
            @endforeach
        </div>
    </div>
</x-layout>
