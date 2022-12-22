{{-- LOGIN --}}
<x-layout>
    <div class="user-form-container">
        <h1 class="h1-sm">Login</h1>
        <form class="common-form" action="/login" method="POST" id="login-form">
            @csrf
            <label for="username">Username</label>
            <input name="username" type="text">
            @error('username')
                <p class="message-text message-fail">{{$message}}</p>
            @enderror
            <label for="password">Password</label>
            <input name="password" type="password">
            @error('password')
                <p class="message-text message-fail">{{$message}}</p>
            @enderror
            <button class="form-submit-button" type="submit">Login</button>
        </form>
        <a class="form-link" href="/register">Don't have an account? <span>Register</span></a>
    </div>
</x-layout>
