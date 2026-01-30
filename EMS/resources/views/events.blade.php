<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>All Events</h1>

    @foreach ($data as $d)
        {{ $d->name }}
    @endforeach
</body>
</html>
<div>
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
</div>
