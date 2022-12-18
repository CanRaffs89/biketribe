{{-- EDIT - form for editing an existing meetup --}}
<x-layout>
    <div class="form-container">
        <h1 class="h1-sm">Edit a Meetup</h1>
        <form class="common-form" action="/meetups/{{$meetup->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label for="name">Name</label>
            <input name="name" type="text" value="{{$meetup->name}}">
            @error('name')
                <p class="message-text message-fail">{{$message}}</p>
            @enderror
            <label for="location">Location</label>
            <input name="location" type="text" value="{{$meetup->location}}">
            @error('location')
                <p class="message-text message-fail">{{$message}}</p>
            @enderror
            <label for="date">Date</label>
            <input name="date" type="date" value="{{$meetup->date}}">
            @error('date')
                <p class="message-text message-fail">{{$message}}</p>
            @enderror
            <label for="time">Time</label>
            <input name="time" type="time" value="{{$meetup->time}}">
            @error('time')
                <p class="message-text message-fail">{{$message}}</p>
            @enderror
            <label for="image">Image</label>
            <input name="image" type="file">
            @error('image')
                <p class="message-text message-fail">{{$message}}</p>
            @enderror
            <label for="description">Description</label>
            <textarea name="description" rows="10">{{$meetup->description}}</textarea>
            @error('description')
                <p class="message-text message-fail">{{$message}}</p>
            @enderror
            <button class="form-submit-button">Submit</button>
        </form>
    </div>
</x-layout>