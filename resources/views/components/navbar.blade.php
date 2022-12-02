<nav id="navbar">
    <div class="logo">
        <a href="/"></a>
    </div>
    <input type="checkbox" id="nav" class="hidden"/>
    <label for="nav" class="nav-btn">
        <i></i>
        <i></i>
        <i></i>
    </label>
    <div class="nav-container">
        <ul>
            @auth
            <li><a href="/profile/{{auth()->user()->username}}" class="navlink">My Profile</a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <li><button id="logout-button" class="navlink">Logout</button></li>
            </form>
            @else
            <li><a href="/register" class="navlink">Register</a></li>
            <li><a href="/login" class="navlink">Login</a></li>
            @endauth
        </ul>
    </div>
</nav>
