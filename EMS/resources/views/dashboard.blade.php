<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    @can('access-dashboard')
        <h1>You are admin</h1>
        <nav>
            <ul>
                <li><a href="{{ route('events.event') }}">Event</a></li>
                <li><a href="{{ route('user.users') }}">User</a></li>
                <li><a href="{{ route('registration') }}">Registration</a></li>
                <li><a href="{{ route('event.recentEvents') }}">Recent Event</a></li>
                <li><a href="{{ route('registration.recent') }}">Recent Registration</a></li>
            </ul>
        </nav>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button>Logout</button>
        </form>
    @endcan
</body>
</html>