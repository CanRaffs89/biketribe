{{-- LOGIN --}}
<x-layout>
    <x-navbar></x-navbar>
    <div class="container">
        <h1 class="form-heading">Login</h1>
        <form class="common-form" action="/login" method="POST" id="login-form">
            @csrf
            <label for="login-user">Username</label>
            <input name="login-username" id="login-user" type="text">
            <label for="login-password">Password</label>
            <input name="login-password" id="login-password" type="password">
            <button class="form-submit-button" type="submit">Login</button>
        </form>
    </div>
</x-layout>
