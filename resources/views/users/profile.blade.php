{{-- PROFILE - user profile page for managing account and meetups --}}
<x-layout>
    <div class="container">
        <h1 class="h1-sm h1-left">{{ $greeting }} {{auth()->user()->username}}</h1>
        <h2><a href="/meetups/create">Add a new meetup</a></h2>
        <ul>
        @foreach($meetups as $meetup)
            <li>
                <a href="/meetups/show/{{$meetup['id']}}"><strong>{{$meetup['name']}}</strong> on {{$meetup['date']}}</a>
            </li>
        @endforeach
        </ul>
    </div>
</x-layout>