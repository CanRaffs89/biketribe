{{-- PROFILE - user profile page for managing account and meetups --}}
<x-layout>
    <x-navbar></x-navbar>
    <div class="container">
        <h1>{{ $greeting }} {{auth()->user()->username}}</h1>
    </div>
</x-layout>