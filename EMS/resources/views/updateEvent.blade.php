<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Update Event</title>
</head>

<body>
    <!-- <form action="{{ route('event.updateEvent',$event->id) }}" method="post" enctype="multipart/form-data">
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
    </form> -->

    <div class="container my-5 d-flex justify-content-center">
        <div class="card p-3 shadow-sm bg-white" style="max-width: 500px; width: 100%;">
            <h3 class="mb-3 text-center">update Event</h3>
            <form action="{{ route('event.updateEvent', $event->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-2">
                    <label for="title" class="form-label small">Title</label>
                    <input type="text" name="title" id="title"
                        class="form-control form-control-sm @error('title') is-invalid @enderror"
                        value="{{ old('title', $event->title) }}">
                </div>

                <div class="mb-2">
                    <label for="description" class="form-label small">Description</label>
                    <input type="text" name="description" id="description"
                        class="form-control form-control-sm @error('description') is-invalid @enderror"
                        value="{{ old('description', $event->description) }}">
                </div>

                <div class="mb-2">
                    <label for="cat_id" class="form-label small">Category ID</label>
                    <input type="number" name="cat_id" id="cat_id"
                        class="form-control form-control-sm @error('cat_id') is-invalid @enderror"
                        value="{{ old('category_id', $event->category_id) }}">
                </div>

                <div class="mb-2">
                    <label for="date" class="form-label small">Date</label>
                    <input type="date" name="date" id="date"
                        class="form-control form-control-sm @error('date') is-invalid @enderror"
                        value="{{ old('date', $event->date) }}">
                </div>

                <div class="mb-2">
                    <label for="time" class="form-label small">Time</label>
                    <input type="time" name="time" id="time"
                        class="form-control form-control-sm @error('time') is-invalid @enderror"
                        value="{{ old('time', $event->time) }}">
                </div>

                <div class="mb-2">
                    <label for="location" class="form-label small">Location</label>
                    <input type="text" name="location" id="location"
                        class="form-control form-control-sm @error('location') is-invalid @enderror"
                        value="{{ old('location', $event->location) }}">
                </div>

                <div class="mb-3">
                    <label for="file" class="form-label small">Image</label>
                    <input type="file" name="file" id="file"
                        class="form-control form-control-sm @error('file') is-invalid @enderror">
                    @if($event->image)
                        <div class="mt-2">
                            <label class="form-label small">Previous Image:</label><br>
                            <img src="{{ asset('storage/' . $event->image) }}" alt="Previous Image" class="img-fluid rounded"
                                style="max-width: 100%; max-height: 200px;">
                        </div>
                    @endif
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-sm btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>