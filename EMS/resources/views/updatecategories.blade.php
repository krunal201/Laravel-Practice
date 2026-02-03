<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Update Category</title>
</head>
<body class="bg-light">
    <div class="container my-5">
    <form action="{{ route('category.edit',$category) }}" method="post"  class="card p-4 shadow-sm bg-white">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-lable">Name</label>
        <input type="text" name="name" id="" value="{{ old('name', $category->name) }}" class="form-control"><br></div>
        <button class="btn btn-success">Update</button>
    </form>
    </div>
</body>
</html>
<div>
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
</div>
