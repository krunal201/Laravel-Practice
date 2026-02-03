<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    @can('access-dashboard')
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="{{ route('category.list') }}">Category</a>
                        <a class="nav-link" href="{{ route('events.event') }}">Event</a>
                        <a class="nav-link" href="{{ route('user.users') }}">User</a>
                        <a class="nav-link" href="{{ route('registration') }}">Registration</a>
                        <a class="nav-link" href="{{ route('event.recentEvents') }}">Recent Event</a>
                        <a class="nav-link" href="{{ route('registration.recent') }}">Recent Registration</a>
                    </div>
                </div>
            </div>
        </nav>
        <h1>You are admin</h1>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button class="btn btn-primary ms-5 mt-2">Logout</button>
        </form>
    @endcan
</body>

</html>