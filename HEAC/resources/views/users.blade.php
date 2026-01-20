<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .w-5.h-5{
            width:10px;
            height:10px;
        }
    </style>
</head>

<body>
    <h1>Hey</h1>


    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
        </tr>

        @foreach ($user as $u)
        <tr>
            <td>{{ $u->id }}</td>
            <td>{{ $u->name }}</td>
            <td>{{ $u->email }}</td>
            <td>{{ $u->password }}</td>
        </tr>
        @endforeach
    </table>
{{ $user->links() }}
</body>

</html>