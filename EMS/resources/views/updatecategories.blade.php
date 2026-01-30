<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Category</title>
</head>
<body>
    <form action="{{ route('category.edit',$category) }}" method="post">
        @csrf
        @method('PUT')
        Name: <input type="text" name="name" id="" value="{{ old('name', $category->name) }}"><br>
        <button>Submit</button>
    </form>
</body>
</html>
<div>
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
</div>
