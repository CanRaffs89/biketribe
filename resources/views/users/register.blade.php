{{-- REGISTER --}}
<x-layout>
    <div class="container">
        <h1 class="h1-sm">Register</h1>
        <form class="common-form" action="/register" method="POST" id="register-form">
            @csrf
            <label for="username">Username</label>
            <input name="username" type="text" value="{{old('username')}}">
            @error('username')
                <p class="message-text message-fail">{{$message}}</p>
            @enderror
            <label for="email">Email</label>
            <input name="email" type="text" value="{{old('email')}}">
            @error('email')
                <p class="message-text message-fail">{{$message}}</p>
            @enderror
            <label for="password">Password</label>
            <input name="password" type="password">
            @error('password')
                <p class="message-text message-fail">{{$message}}</p>
            @enderror
            <label for="password-confirmation">Confirm Password</label>
            <input name="password_confirmation" type="password">
            @error('password-confirmation')
                <p class="message-text message-fail">{{$message}}</p>
            @enderror
            <button class="form-submit-button" type="submit">Register</button>
        </form>
    </div>
</x-layout>