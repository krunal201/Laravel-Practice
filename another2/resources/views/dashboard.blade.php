<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
    <div>
        <h1>Hey {{ Auth::user()->name }}</h1>
        <a href="{{ route("logout") }}">Logout</a>
    </div>
</body>
</html>
