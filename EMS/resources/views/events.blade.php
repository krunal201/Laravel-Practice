<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        .w-5.h-5 {
            width: 15px;
            height: 15px;
        }
        nav{
            padding: 50px;
        }
    </style>
</head>

<body>
    <h1>All Events</h1>

        <ul>
            <li><a href="{{ route('event.uploadEvent') }}">Add Event</a></li>
        </ul>

    <form action="{{ route('event.searchEvent') }}" method="get">
        @csrf
        <input type="text" name="search" id="">
        <button>Search</button>
    </form>

    <div class="container text-center border border-dark">
        <div class="row">
            <div class="col border">
                ID
            </div>
            <div class="col border">
                Title
            </div>
            <div class="col border">
                Description
            </div>

            <div class="col border">
                Category ID
            </div>

            <div class="col border">
                Date
            </div>

            <div class="col border">
                Time
            </div>

            <div class="col border">
                Location
            </div>

            <div class="col border">
                Image
            </div>

            <div class="col border">
                Action
            </div>
        </div>


        @foreach ($data as $d)
            <div class="row">
                <div class="col border">
                    {{ $d->id }}
                </div>
                <div class="col border">
                    {{ $d->title }}
                </div>
                <div class="col border">
                    {{ $d->description }}
                </div>

                <div class="col border">
                    {{ $d->category_id }}
                </div>

                <div class="col border">
                    {{ $d->date }}
                </div>

                <div class="col border">
                    {{ $d->time }}
                </div>

                <div class="col border">
                    {{ $d->location }}
                </div>

                <div class="col border">
                    <img src="{{ asset('storage/' . $d->image) }}" alt="Image" srcset="" width="100px" height="100px">
                </div>
                <div class="col border">
                    <a href="{{ route('event.updateEventView', $d->id) }}">Update</a>
                    <form action="{{ route('event.deleteEvent', $d->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
    @if ($data instanceof \Illuminate\Pagination\LengthAwarePaginator)
        <center>{{ $data->links() }}</center>
    @endif

    <!-- <table border="1">
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

            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    
                </td>
                <td></td>
                <td>
                   
                </td>
            </tr>
    </table> -->

</body>

</html>