<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
</head>

<body>
    <h1>All Categories</h1>
    <nav>
        <ul>
            <li><a href="{{ route('category.view') }}">Add Category</a></li>
        </ul>
    </nav>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th colspan="2">Action</th>
        </tr>
        @foreach ($data as $d)
        <tr>
            <td>{{ $d->id }}</td>
            <td>{{ $d->name }}</td>
            <td><a href="{{ route('category.edit',$d->id) }}">Update</a></td>
            <td>
                <form action="{{ route('category.delete',$d->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            <!-- <a href="">Delete</a> -->
        </td>
        </tr>
        @endforeach
    </table>
</body>

</html>
<div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
</div>