<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Add Category</title>
</head>
<body class="bg-light">
    <div class="container my-5">
    <h2>Add Category</h2>
     <form action="{{ route('category.add') }}" method="post" enctype="multipart/form-data" class="card p-4 shadow-sm bg-white">
        @csrf
        <div class="mb-2">
            <label for="" class="form-lable">Name</label>
        <input type="text" name="name" id="" class="form-control @error('name') is-invalid @enderror"><br>
        </div>
        <button class="btn btn-primary">Add</button>
    </form>
    </div>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container my-5 d-flex justify-content-center">
        <div class="card p-3 shadow-sm bg-white" style="max-width: 400px; width: 100%;">
            <h3 class="mb-3 text-center">Add Category</h3>

            <form action="{{ route('category.add') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label small">Name</label>
                    <input type="text" name="name" id="name"
                        class="form-control form-control-sm @error('name') is-invalid @enderror">
                    @error('name')
                        <div class="invalid-feedback small">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-sm btn-primary">Add</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>