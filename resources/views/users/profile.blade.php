{{-- PROFILE - user profile page for managing account and meetups --}}
<x-layout>
    <x-navbar></x-navbar>
    <div class="container">
        <h1 class="h1-sm h1-left">{{ $greeting }} {{auth()->user()->username}}</h1>
        <h2><a href="/meetups/create">Add a new meetup</a></h2>
    </div>
</x-layout>