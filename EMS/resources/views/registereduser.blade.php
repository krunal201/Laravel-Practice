<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered User</title>
</head>
<body>
     <h1>All Registered Users</h1>

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
    </table>
</body>
</html>