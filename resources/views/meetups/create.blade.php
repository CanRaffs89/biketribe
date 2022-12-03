{{-- CREATE - form for adding a new meetup --}}
<x-layout>
    <x-navbar></x-navbar>
    <div class="container">
        <h1 class="h1-sm">Add a New Meetup</h1>
        <form class="common-form" action="/meetups" method="POST">
            @csrf
            <label for="name">Name</label>
            <input name="name" type="text">
            <label for="location">Location</label>
            <input name="location" type="text">
            <label for="date">Date</label>
            <input name="date" type="date">
            <label for="time">Time</label>
            <input name="time" type="time">
            <label for="description">Description</label>
            <textarea name="description" cols="30" rows="10"></textarea>
            <button class="form-submit-button">Submit</button>
        </form>
    </div>
</x-layout>