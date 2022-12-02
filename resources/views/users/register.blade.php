{{-- REGISTER --}}
<x-layout>
    <x-navbar></x-navbar>
    <div class="container">
        <h1 class="form-heading">Register</h1>
        <form class="common-form" action="/register" method="POST" id="register-form">
            @csrf
            <label for="register-user">Username</label>
            <input name="username" id="register-user" type="text">
            <label for="register-email">Email</label>
            <input name="email" id="register-email" type="text">
            <label for="register-password">Password</label>
            <input name="password" id="register-password" type="password">
            <label for="register-password-confirm">Confirm Password</label>
            <input name="password_confirmation" id="register-password-confirm" type="password">
            <button class="form-submit-button" type="submit">Register</button>
        </form>
    </div>
</x-layout>