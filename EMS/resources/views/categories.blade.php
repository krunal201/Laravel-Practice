<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Categories</title>
</head>
    <body class="bg-light">

<div class="container my-5">
    <h1 class="mb-4">All Categories</h1>

    <nav class="mb-3">
        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route('category.view') }}" class="btn btn-primary">Add Category</a>
            </li>
        </ul>
    </nav>

    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)
            <tr>
                <td>{{ $d->id }}</td>
                <td>{{ $d->name }}</td>
                <td>
                    <a href="{{ route('category.edit',$d->id) }}" class="btn btn-sm btn-warning">Update</a>
                </td>
                <td>
                    <form action="{{ route('category.delete',$d->id) }}" method="post" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Bootstrap 5 JS (Optional for interactivity) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <h1>All Categories</h1>
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
            <a href="">Delete</a>
        </td>
        </tr>
        @endforeach
    </table> -->
</body>

</html>
<div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
</div>