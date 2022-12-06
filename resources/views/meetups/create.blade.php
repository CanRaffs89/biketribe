{{-- CREATE - form for adding a new meetup --}}
<x-layout>
    <div class="container">
        <h1 class="h1-sm">Add a New Meetup</h1>
        <form class="common-form" action="/meetups" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="name">Name</label>
            <input name="name" type="text" value="{{old('name')}}">
            @error('name')
                <p class="message-text message-fail">{{$message}}</p>
            @enderror
            <label for="location">Location</label>
            <input name="location" type="text" value="{{old('location')}}">
            @error('location')
                <p class="message-text message-fail">{{$message}}</p>
            @enderror
            <label for="date">Date</label>
            <input name="date" type="date" value="{{old('date')}}">
            @error('date')
                <p class="message-text message-fail">{{$message}}</p>
            @enderror
            <label for="time">Time</label>
            <input name="time" type="time" value="{{old('time')}}">
            @error('time')
                <p class="message-text message-fail">{{$message}}</p>
            @enderror
            <label for="image">Image</label>
            <input name="image" type="file" value="{{old('image')}}">
            @error('image')
                <p class="message-text message-fail">{{$message}}</p>
            @enderror
            <label for="description">Description</label>
            <textarea name="description" cols="30" rows="10" value="{{old('description')}}"></textarea>
            @error('description')
                <p class="message-text message-fail">{{$message}}</p>
            @enderror
            <button class="form-submit-button">Submit</button>
        </form>
    </div>
</x-layout>