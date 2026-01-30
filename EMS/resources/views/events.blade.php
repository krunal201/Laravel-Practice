<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .w-5.h-5 {
            width: 10px;
            height: 10px;
        }
    </style>
</head>

<body>
    <h1>All Events</h1>

    <nav>
        <ul>
            <li><a href="{{ route('event.uploadEvent') }}">Add Event</a></li>
        </ul>
    </nav>

    <form action="{{ route('event.searchEvent') }}" method="get">
        @csrf
        <input type="text" name="search" id="">
        <button>Search</button>
    </form>

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
                    <img src="{{ asset('storage/' . $d->image) }}" alt="Image" srcset="" width="350px" height="250px">
                </td>
                <td><a href="{{ route('event.updateEventView', $d->id) }}">Update</a></td>
                <td>
                    <form action="{{ route('event.deleteEvent', $d->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    @if ($data instanceof \Illuminate\Pagination\LengthAwarePaginator)
        {{ $data->links() }}
    @endif
</body>

</html>
<div>
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
</div>