{{-- PROFILE - user profile page for managing account and meetups --}}
<x-layout>
    <div class="container">
        <h1 class="h1-sm h1-left">{{ $greeting }} {{auth()->user()->username}}</h1>
        <h2 class="margin-top-20">Manage Your Meetups</h2>
        <div class="card-container profile-container">
            <a class="profile-card" href="/meetups/create">
                <div class="profile-card-inner">
                    <img src="{{asset('img/circle-plus-solid.svg')}}" alt="">
                    <h2>Add a New Meetup</h2>
                </div>
            </a>
            @foreach($meetups as $meetup)
                <a class="profile-card" href="/meetups/show/{{$meetup['id']}}">
                    <div class="profile-card-inner">
                        <h3>{{$meetup['name']}} on {{ \Carbon\Carbon::parse($meetup->date)->format('j F, Y')}}</h3>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</x-layout>