<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>All Events</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Category ID</th>
            <th>Date</th>
            <th>Time</th>
            <th>Location</th>
            <th>Image</th>
            <th colspan="2">Action</th>
        </tr>
        
        @foreach ($data as $d)
        <tr>
            <td>{{ $d->id }}</td>
                <td>{{ $d->title }}</td>
                <td>{{ $d->description }}</td>
                <td>{{ $d->category_id }}</td>
                <td>{{ $d->date }}</td>
                <td>{{ $d->time }}</td>
                <td>{{ $d->location }}</td>
                <td>
                    <img src="{{ asset('storage/'.$d->image) }}" alt="Image" srcset=""  width="350px" height="250px">
                </td>
                <td><a href="">Update</a></td>
                <td>Delete</td>
        </tr>
    </table>
    @endforeach
</body>
</html>
<div>
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
</div>
