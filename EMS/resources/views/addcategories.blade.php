<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>
</head>
<body>
     <form action="{{ route('category.add') }}" method="post" enctype="multipart/form-data">
        @csrf
        Name: <input type="text" name="name" id=""><br>
        <button>Submit</button>
    </form>
</body>
</html>
