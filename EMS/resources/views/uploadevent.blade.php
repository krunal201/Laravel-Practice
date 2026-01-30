<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('event.uploadEvent') }}" method="post" enctype="multipart/form-data">
        @csrf
        Title: <input type="text" name="title" id=""><br>
        Description: <input type="text" name="description" id=""><br>
        Cate_id: <input type="number" name="cat_id" id=""><br>
        Date: <input type="date" name="date" id=""><br>
        Time: <input type="time" name="time" id=""><br>
        Location:<input type="text" name="location" id=""><br>
        Image: <input type="file" name="file" id=""><br>
        <button>Submit</button>
    </form>
</body>
</html>
<div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
</div>
