<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Action</th>
        </tr>

        @foreach ($pr as $p)
        <tr>
            <td>{{ $p->product_name }}</td>
            <td>{{ $p->product_price }}</td>
            <td><a href="">Edit</a></td>
        </tr>
        @endforeach
    </table>
</body>

</html>