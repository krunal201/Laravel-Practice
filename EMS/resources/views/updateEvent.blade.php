<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Event</title>
</head>
<body>
    <form action="{{ route('event.updateEvent',$event->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        Title: <input type="text" name="title" id="" value="{{ old('title',$event->title) }}"><br>
        Description: <input type="text" name="description" id="" value="{{ old('description',$event->description) }}"><br>
        Cate_id: <input type="number" name="cat_id" id="" value="{{ old('category_id',$event->category_id) }}"><br>
        Date: <input type="date" name="date" id="" value="{{ old('date',$event->date) }}"><br>
        Time: <input type="time" name="time" id="" value="{{ old('time',$event->time) }}"><br>
        Location:<input type="text" name="location" id="" value="{{ old('location',$event->location) }}"><br>
        Image: <input type="file" name="file" id="">
        Previous Image: <img src="{{ asset('storage/'.old('image',$event->image)) }}" width="350px" height="200px">
        <br>
        <button>Submit</button>
    </form>
</body>
</html>