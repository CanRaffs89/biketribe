{{-- PROFILE - user profile page for managing account and meetups --}}
<x-layout>
    <div class="container">
        <h1 class="h1-sm h1-left">{{ $greeting }} {{auth()->user()->username}}</h1>
        <h2 class="margin-top-20">Manage Your Meetups</h2>
        <div class="card-container profile-container">
            <div class="profile-card">
                <a id="meetup-create-card" class="profile-card-inner" href="/create">
                    <img src="{{asset('img/circle-plus-solid.svg')}}" alt="">
                    <h2 class="profile-card-title" >Add a New Meetup</h2>
                </a>
            </div>

            @foreach($meetups as $meetup)
            <div class="profile-card">
                <div class="profile-card-inner">
                    <a class="profile-card-title" href="/meetups/{{$meetup['id']}}">
                        {{$meetup['name']}} <span>on</span> {{ \Carbon\Carbon::parse($meetup->date)->format('j F, Y')}}
                    </a>
                    <div class="profile-card-icon-container">
                        <a id="edit-icon" class="profile-card-icon" href="/meetups/edit/{{$meetup['id']}}">
                            <img class="profile-card-icon" src="{{asset('img/pen-solid.svg')}}" alt="">
                        </a>
                        <form action="/meetups/{{$meetup['id']}}" class="delete-meetup-form" method="POST">
                            @csrf
                            @method('DELETE')
                            <button id="delete-icon" class="profile-card-icon"><img class="profile-card-icon" src="{{asset('img/trash-can-solid.svg')}}" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</x-layout>