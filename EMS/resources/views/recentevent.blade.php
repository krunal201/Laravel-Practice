<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recent Event</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
   <div class="container mt-4">
    <h3>Recent Events</h3>
    <div class="row">
        @foreach ($recent as $r)
            <div class="col-md-4 mb-3">
                <div class="card h-100 border-primary">
                    <div class="card-body">
                        <h5 class="card-title">{{ $r->title }}</h5>
                        <p class="card-text">{{ $r->description }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

</body>
</html>
