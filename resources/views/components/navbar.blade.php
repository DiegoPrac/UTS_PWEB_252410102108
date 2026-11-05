@props(['username' => null])

<nav>
    <h2>TigerLog</h2>
    <a href="/">Login</a>

    @if($username)
        <a href="/dashboard?username={{ urlencode($username) }}">Dashboard</a>

        <a href="/profile?username={{ urlencode($username) }}">Profile</a>

        <a href="/pengelolaan?username={{ urlencode($username) }}">Pengelolaan</a>
    @endif
</nav>
