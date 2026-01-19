<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
    @foreach ($post as $p)
        <p>Tile:{{ $p->title }}</p>
        <p>Body:{{ $p->body }}</p>

        @can('update-post',$p)
            <a href="{{ route("post-update") }}">Edit</a>
        @endcan
    @endforeach
</body>
</html>