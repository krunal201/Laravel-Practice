<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Registered User</title>
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4 text-primary">Event Registered Users</h1>

        <!-- <a href="{{ route('user.rgusers') }}" class="btn btn-success mb-3">List Registered Users</a> -->

        <table class="table table-striped table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Event ID</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $u)
                    <tr>
                        <td>{{ $u->id }}</td>
                        <td>{{ $u->name }}</td>
                        <td>{{ $u->email }}</td>
                        <td>{{ $u->event_id }}</td>
                        <td>{{ $u->phone }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- <h1>All Registered Users</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Event ID</th>
            <th>Phone</th>
        </tr>

        @foreach ($user as $u)
        <tr>
            <td>{{ $u->id }}</td>
            <td>{{ $u->name }}</td>
            <td>{{ $u->email }}</td>
            <td>{{ $u->event_id }}</td>
            <td>{{ $u->phone }}</td>
        </tr>
        @endforeach
    </table> -->
</body>

</html>